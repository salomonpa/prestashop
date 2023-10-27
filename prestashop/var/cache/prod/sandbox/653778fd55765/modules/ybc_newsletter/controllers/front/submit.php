<?php
/**
 * Copyright YourBestCode.com
 * Email: support@yourbestcode.com
 * First created: 21/12/2015
 * Last updated: NOT YET
*/
if (!defined('_PS_VERSION_'))
	exit;
if(!class_exists('Ybc_newsletter'))
    require_once(dirname(__FILE__).'/../../ybc_newsletter.php');
class Ybc_newsletterSubmitModuleFrontController extends ModuleFrontController
{
    const YBC_GUEST_NOT_REGISTERED = -1;
	const YBC_CUSTOMER_NOT_REGISTERED = 0;
	const YBC_GUEST_REGISTERED = 1;
	const YBC_CUSTOMER_REGISTERED = 2;
    private $mailDir;
    private $id_lang_email;
    public function init()
	{	            
        if(!Module::isInstalled('blocknewsletter'))
        {
            $module = new Ybc_newsletter();
            $module->installTbls();
        }
		parent::init();
        if(Module::isInstalled('blocknewsletter') && Module::isEnabled('blocknewsletter'))
            $this->mailDir = dirname(__FILE__).'/../../../blocknewsletter/mails/';
        else
            $this->mailDir = dirname(__FILE__).'/../../mails/';
        $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        $language = new Language((int)$this->context->language->id);
        if(is_dir($this->mailDir.$language->iso_code))
            $this->id_lang_email = (int)$this->context->language->id;
        else
            $this->id_lang_email = $id_lang_default;            
	}
    private function jsonEncode($message, $type = 'error')
    {
        if($type == 'error')
            $json['error'] = $message;
        else
            $json['success'] = $message;
        die(Tools::jsonEncode($json));
    }
    private function markSubcribed()
    {
        $this->context->cookie->ybcnewsletter = 'subcribed';
        $this->context->cookie->write;
    }
    public function initContent()
	{
        if(Tools::getValue('close'))
        {
            $this->markSubcribed();
            die('closed');
        }
        if($npemail = Tools::getValue('npemail'))
        {            
            $json = array();
            if(!Validate::isEmail($npemail))
            {
                $this->jsonEncode($this->module->l('Email is invalid'));             
            }
            //Subcription
            $register_status = $this->isNewsletterRegistered($npemail);
    		if ($register_status > 0)
    			$this->jsonEncode($this->module->l('This email address is already registered.'));
    		$email = pSQL($npemail);
    		if (!$this->isRegistered($register_status))
    		{
    			if (Configuration::get('NW_VERIFICATION_EMAIL'))
    			{
    				// create an unactive entry in the newsletter database
    				if ($register_status == self::YBC_GUEST_NOT_REGISTERED)
    					$this->registerGuest($email, false);                    
    				if (!$token = $this->getToken($email, $register_status))
    					$this->jsonEncode($this->module->l('An error occurred during the subscription process.'));
                    $this->markSubcribed();
    				$this->sendVerificationEmail($email, $token);
    
    				$this->jsonEncode($this->module->l('A verification email has been sent. Please check your inbox.'),'success');
    			}
    			else
    			{        			
    				if ($this->register($email, $register_status))
                    {
                        if ($code = Configuration::get('NW_VOUCHER_CODE'))
            					$this->sendVoucher($email, $code);    
        				if (Configuration::get('NW_CONFIRMATION_EMAIL'))
        					$this->sendConfirmationEmail($email);
                        $this->markSubcribed();
                        $this->jsonEncode($this->module->l('You have successfully subscribed to this newsletter.'),'success');   
                    }    					
    				else
    					$this->jsonEncode($this->module->l('An error occurred during the subscription process.'));   
    				
    			}
    		}
        }
        $this->jsonEncode($this->module->l('Please enter your email'));        
    }   
    private function isRegistered($register_status)
	{
		return in_array(
			$register_status,
			array(self::YBC_GUEST_REGISTERED, self::YBC_CUSTOMER_REGISTERED)
		);
	} 
    private function isNewsletterRegistered($customer_email)
	{
		$sql = 'SELECT `email`
				FROM '._DB_PREFIX_.'newsletter
				WHERE `email` = \''.pSQL($customer_email).'\'
				AND id_shop = '.$this->context->shop->id;

		if (Db::getInstance()->getRow($sql))
			return self::YBC_GUEST_REGISTERED;

		$sql = 'SELECT `newsletter`
				FROM '._DB_PREFIX_.'customer
				WHERE `email` = \''.pSQL($customer_email).'\'
				AND id_shop = '.$this->context->shop->id;

		if (!$registered = Db::getInstance()->getRow($sql))
			return self::YBC_GUEST_NOT_REGISTERED;

		if ($registered['newsletter'] == '1')
			return self::YBC_CUSTOMER_REGISTERED;

		return self::YBC_CUSTOMER_NOT_REGISTERED;
	}
    private function registerGuest($email, $active = true)
	{
		$sql = 'INSERT INTO '._DB_PREFIX_.'newsletter (id_shop, id_shop_group, email, newsletter_date_add, ip_registration_newsletter, http_referer, active)
				VALUES
				('.$this->context->shop->id.',
				'.$this->context->shop->id_shop_group.',
				\''.pSQL($email).'\',
				NOW(),
				\''.pSQL(Tools::getRemoteAddr()).'\',
				(
					SELECT c.http_referer
					FROM '._DB_PREFIX_.'connections c
					WHERE c.id_guest = '.(int)$this->context->customer->id.'
					ORDER BY c.date_add DESC LIMIT 1
				),
				'.(int)$active.'
				)';

		return Db::getInstance()->execute($sql);
	}
    private function getToken($email, $register_status)
	{
		if (in_array($register_status, array(self::YBC_GUEST_NOT_REGISTERED, self::YBC_GUEST_REGISTERED)))
		{
			$sql = 'SELECT MD5(CONCAT( `email` , `newsletter_date_add`, \''.pSQL(Configuration::get('NW_SALT')).'\')) as token
					FROM `'._DB_PREFIX_.'newsletter`
					WHERE `active` = 0
					AND `email` = \''.pSQL($email).'\'';
		}
		else if ($register_status == self::YBC_CUSTOMER_NOT_REGISTERED)
		{
			$sql = 'SELECT MD5(CONCAT( `email` , `date_add`, \''.pSQL(Configuration::get('NW_SALT')).'\' )) as token
					FROM `'._DB_PREFIX_.'customer`
					WHERE `newsletter` = 0
					AND `email` = \''.pSQL($email).'\'';
		}
		return Db::getInstance()->getValue($sql);
	}
    protected function register($email, $register_status)
	{
		if ($register_status == self::YBC_GUEST_NOT_REGISTERED)
			return $this->registerGuest($email);

		if ($register_status == self::YBC_CUSTOMER_NOT_REGISTERED)
			return $this->registerUser($email);

		return false;
	}
    public function registerUser($email)
	{
		$sql = 'UPDATE '._DB_PREFIX_.'customer
				SET `newsletter` = 1, newsletter_date_add = NOW(), `ip_registration_newsletter` = \''.pSQL(Tools::getRemoteAddr()).'\'
				WHERE `email` = \''.pSQL($email).'\'
				AND id_shop = '.$this->context->shop->id;

		return Db::getInstance()->execute($sql);
	}
    public function sendConfirmationEmail($email)
	{
		return Mail::Send($this->id_lang_email, 'newsletter_conf', Mail::l('Newsletter confirmation', $this->context->language->id), array(), pSQL($email), null, null, null, null, null, $this->mailDir, false, $this->context->shop->id);
	}
    public function sendVoucher($email, $code)
	{
		return Mail::Send($this->id_lang_email, 'newsletter_voucher', Mail::l('Newsletter voucher', $this->context->language->id), array('{discount}' => $code), $email, null, null, null, null, null, $this->mailDir, false, $this->context->shop->id);
	}
    public function sendVerificationEmail($email, $token)
	{
		$verif_url = 
        Module::isInstalled('blocknewsletter') && Module::isEnabled('blocknewsletter') ? 
            Context::getContext()->link->getModuleLink(
    			'blocknewsletter', 'verification', array(
    				'token' => $token,
    			)
    		)
        :
            Context::getContext()->link->getModuleLink(
    			'ybc_newsletter', 'verification', array(
    				'token' => $token,
    			)
    		);
		return Mail::Send($this->id_lang_email, 'newsletter_verif', Mail::l('Email verification', $this->context->language->id), array('{verif_url}' => $verif_url), $email, null, null, null, null, null, $this->mailDir, false, $this->context->shop->id);
	}
}
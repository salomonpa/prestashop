<?php
/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

/**
 * @since 1.5.0
 */

class Ybc_newsletterVerificationModuleFrontController extends ModuleFrontController
{
	private $message = '';
    private $mailDir;
    private $id_lang_email;
	/**
	 * @see FrontController::postProcess()
	 */
	public function postProcess()
	{
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
		$this->message = $this->confirmEmail(Tools::getValue('token'));
	}
	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{	    
		parent::initContent();        
		$this->context->smarty->assign(
            array(
                'message' => $this->message,
                'path' => '<span class="ybc-testimonial-breadcrumb-span">'.$this->module->l('Verify subcription').'</span>'        
            )
        );
		$this->setTemplate('verification_execution.tpl');
	}
    public function confirmEmail($token)
	{	    
		$activated = false;
		if ($email = $this->getGuestEmailByToken($token))
			$activated = $this->activateGuest($email);
		else if ($email = $this->getUserEmailByToken($token))
			$activated = $this->registerUser($email);

		if (!$activated)
			return $this->module->l('This email is already registered and/or invalid.');

		if ($discount = Configuration::get('NW_VOUCHER_CODE'))
			$this->sendVoucher($email, $discount);

		if (Configuration::get('NW_CONFIRMATION_EMAIL'))
			$this->sendConfirmationEmail($email);

		return $this->module->l('Thank you for subscribing to our newsletter.');
	}
    private function getGuestEmailByToken($token)
	{
		$sql = 'SELECT `email`
				FROM `'._DB_PREFIX_.'newsletter`
				WHERE MD5(CONCAT( `email` , `newsletter_date_add`, \''.pSQL(Configuration::get('NW_SALT')).'\')) = \''.pSQL($token).'\'
				AND `active` = 0';

		return Db::getInstance()->getValue($sql);
	}
    private function activateGuest($email)
	{
		return Db::getInstance()->execute(
			'UPDATE `'._DB_PREFIX_.'newsletter`
						SET `active` = 1
						WHERE `email` = \''.pSQL($email).'\''
		);
	}
    private function getUserEmailByToken($token)
	{
		$sql = 'SELECT `email`
				FROM `'._DB_PREFIX_.'customer`
				WHERE MD5(CONCAT( `email` , `date_add`, \''.pSQL(Configuration::get('NW_SALT')).'\')) = \''.pSQL($token).'\'
				AND `newsletter` = 0';

		return Db::getInstance()->getValue($sql);
	}
    public function registerUser($email)
	{
		$sql = 'UPDATE '._DB_PREFIX_.'customer
				SET `newsletter` = 1, newsletter_date_add = NOW(), `ip_registration_newsletter` = \''.pSQL(Tools::getRemoteAddr()).'\'
				WHERE `email` = \''.pSQL($email).'\'
				AND id_shop = '.$this->context->shop->id;

		return Db::getInstance()->execute($sql);
	}
    public function sendVoucher($email, $code)
	{
		return Mail::Send($this->id_lang_email, 'newsletter_voucher', Mail::l('Newsletter voucher', $this->context->language->id), array('{discount}' => $code), $email, null, null, null, null, null, $this->mailDir, false, $this->context->shop->id);
	}
    public function sendConfirmationEmail($email)
	{
		return Mail::Send($this->id_lang_email, 'newsletter_conf', Mail::l('Newsletter confirmation', $this->context->language->id), array(), pSQL($email), null, null, null, null, null, $this->mailDir, false, $this->context->shop->id);
	}
}

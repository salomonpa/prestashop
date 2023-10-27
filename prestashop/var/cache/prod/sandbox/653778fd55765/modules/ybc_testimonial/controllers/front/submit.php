<?php
/**
 * Copyright YourBestCode.com
 * Email: support@yourbestcode.com
 * First created: 21/12/2015
 * Last updated: NOT YET
*/
if (!defined('_PS_VERSION_'))
	exit;
class Ybc_testimonialSubmitModuleFrontController extends ModuleFrontController
{
	public function init()
	{
		parent::init();
	}
	public function initContent()
	{
	    $meta = Meta::getMetaTags($this->context->language->id, 'index');
	    $meta['meta_title'] = $this->module->l('Write testimonial');        
        $this->context->smarty->assign($meta);
	    $module = new Ybc_testimonial();
		parent::initContent();
        $id_customer = (int)$this->context->cookie->id_customer;
        $errors = array();
        $success =  array();
        $tm_field['customer'] = Tools::getValue('customer');
        $tm_field['comment'] = Tools::getValue('comment');
        if(Tools::isSubmit('tmSubmit'))
        {
            $rating = (int)Tools::getValue('rating');
            $testimonial = new Ybc_testimonial_class();
            $testimonial->datetime_added = date('Y-m-d H:i:s');
            $testimonial->enabled = (int)Configuration::get('YBC_TESTIMONIAL_AUTO_APPROVE') ? 1 : 0;
            $testimonial->sort_order = 1;
            $testimonial->featured = 1;
            $customerName = trim(Tools::getValue('customer'));
            $customerComment = trim(Tools::getValue('comment'));
            if((int)Configuration::get('YBC_TESTIMONIAL_ALLOW_RATE'))
                $testimonial->rating = $rating <=5 && $rating >=1 ? $rating : 5;
            else
                $testimonial->rating = 0;
            $languages = Language::getLanguages(false);
            foreach ($languages as $language)
			{			
			    if(!$id_customer)
                    $testimonial->customer[$language['id_lang']] = $customerName;
                else
                {
                    $customer = new Customer($id_customer);
                    
                    if(isset($customer->firstname) && isset($customer->lastname) && ($customer->firstname!='' || $customer->lastname))
                        $testimonial->customer[$language['id_lang']] = trim($customer->firstname.' '.$customer->lastname);
                    else
                        $errors[] = $this->module->l('We are not able to identify your customer account. Please try again later or contact webmaster for support'); 
                }
                $testimonial->comment[$language['id_lang']] = $customerComment;                        	
            }
            
            if(Tools::isSubmit('customer') && $customerName=='')
                $errors[] = $this->module->l('Customer name is required');
            if($customerComment == '')
                $errors[] = $this->module->l('Comment is required');
            if($customerName && !Validate::isName($customerName))
                $errors = $this->module->l('Customer name is not valid');
            if($customerComment && !Validate::isCleanHtml($customerComment))
                $errors = $this->module->l('Comment is not valid');
            if($customerName && Tools::strlen($customerName) < 3)
                $errors = $this->module->l('Customer name need to be at least 3 characters');
            if($customerName && Tools::strlen($customerName) > 100)
                $errors = $this->module->l('Customer name can not be longer than 100 characters');
            if($customerComment && Tools::strlen($customerComment) < 15)
                $errors = $this->module->l('Customer comment need to be at least 15 characters');
            if($customerComment && Tools::strlen($customerComment) > 1000)
                $errors = $this->module->l('Customer name can not be longer than 1000 characters');
            if((int)Configuration::get('YBC_TESTIMONIAL_USE_CAPCHA'))
            {
                $saveSecurityCode = $this->context->cookie->tm_security_capcha_code ? @base64_decode($this->context->cookie->tm_security_capcha_code) : '';
                if($saveSecurityCode)
                    $saveSecurityCode = Tools::strtolower($saveSecurityCode);
                $submittedSecurityCode = Tools::strtolower(trim(Tools::getValue('security_code')));
                if($saveSecurityCode && $submittedSecurityCode != $saveSecurityCode)
                    $errors[] = $this->module->l('Security code does not match');
            }
            
            //Upload image           
            if((int)Configuration::get('YBC_TESTIMONIAL_ALLOW_IMAGE'))
            {
                $newImage = false;       
                if(isset($_FILES['image']['tmp_name']) && isset($_FILES['image']['name']) && $_FILES['image']['name'])
                {
                    $salt = sha1(microtime());
                    $type = Tools::strtolower(Tools::substr(strrchr($_FILES['image']['name'], '.'), 1));
                    $imageName = $salt.'.'.$type;
                    $fileName = dirname(__FILE__).'/../../images/testimonial/'.$imageName;                
                    if(file_exists($fileName))
                    {
                        $errors[] = $this->l('Avatar file name already exists. Try to change file name');
                    }
                    else
                    {                    
            			$imagesize = @getimagesize($_FILES['image']['tmp_name']);
            			if(!isset($_FILES['image']['size']))
                            $errors = $this->l('Avatar image is required');
                        else
                            $fileSize = round((int)$_FILES['image']['size'] / (1024 * 1024));
            			if(isset($fileSize) && $fileSize > 10)
                            $errors[] = $this->l('Image can not be larger than 10Mb');                        
                        elseif(!$errors && isset($_FILES['image']) &&				
            				!empty($_FILES['image']['tmp_name']) &&
            				!empty($imagesize) &&
            				in_array($type, array('jpg', 'gif', 'jpeg', 'png'))
            			)
            			{
            				$temp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');    				
            				if ($error = ImageManager::validateUpload($_FILES['image']))
            					$errors[] = $error;
            				elseif (!$temp_name || !move_uploaded_file($_FILES['image']['tmp_name'], $temp_name))
            					$errors[] = $this->l('Can not upload the file');
            				elseif (!ImageManager::resize($temp_name, $fileName, null, null, $type))
            					$errors[] = $this->displayError($this->l('An error occurred during the image upload process.'));
            				if (isset($temp_name))
            					@unlink($temp_name);
                            $testimonial->image = $imageName;
                            $newImage = dirname(__FILE__).'/../../images/testimonial/'.$testimonial->image;			
            			}
                    }
                }
                else
                    $errors[] = $this->module->l('Avatar image is required');
                if($errors && $newImage)
                    @unlink($newImage);   
            }            
                
            if(!$errors)
            {
                if($testimonial->add())
                {
                    $files = array();
                    $submitStatus = (int)Configuration::get('YBC_TESTIMONIAL_AUTO_APPROVE') ? $this->module->l('approved') : $this->module->l('waiting for approval');
                    $success[] = $this->module->l('Your testimonial was successfully sumitted and ').$submitStatus;
                    $tm_field['customer'] = '';
                    $tm_field['comment'] = '';
                    $_POST['rating'] = (int)Configuration::get('YBC_TESTIMONIAL_DEFAULT_RATING');
                    $this->setNotificationEmail($testimonial->customer, $testimonial->comment, $testimonial->rating.' '.($testimonial->rating != 1 ? $this->module->l('stars') : $this->module->l('star')),$files);
                }
                else
                {
                    $errors[] = $this->module->l('There was error while submitting your testimonial. Please try again later.');
                    if($newImage)
                        @unlink($newImage);
                }  
            }
                          	
        }
        $randomcode = time();
        $this->context->smarty->assign(
            array(
                'use_capcha' => (int)Configuration::get('YBC_TESTIMONIAL_USE_CAPCHA') ? true : false,
                'allow_rate' => (int)Configuration::get('YBC_TESTIMONIAL_ALLOW_RATE') ? true : false,
                'allow_image' => (int)Configuration::get('YBC_TESTIMONIAL_ALLOW_IMAGE') ? true : false,
                'allow_comment' => (int)Configuration::get('YBC_TESTIMONIAL_CUSTOMER_COMMENT') ? true : false,
                'allow_guest' => (int)Configuration::get('YBC_TESTIMONIAL_GUEST_COMMENT') ? true : false,
                'default_rating' => (int)Tools::getValue('rating') ? (int)Tools::getValue('rating') : (int)Configuration::get('YBC_TESTIMONIAL_DEFAULT_RATING'),
                'path' => $module->getBreadCrumb(),
                'loggedIn' => $id_customer ? true : false,
                'tm_action_link' => (int)Configuration::get('YBC_TESTIMONIAL_CUSTOMER_COMMENT') ? $this->context->link->getModuleLink('ybc_testimonial', 'submit') : false,
                'tm_errors' => $errors,
                'tm_success' => $success,
                'tm_field' => $tm_field,
                'tm_capcha_url' => $this->context->link->getModuleLink('ybc_testimonial', 'capcha',array('randcode'=>$randomcode)),
                'tm_random_code' => $randomcode
            )
        );
        $this->setTemplate('submit.tpl');                
	}  
    public function setNotificationEmail($customer, $testimonial, $star, $img = array())
    {
        if(!(int)Configuration::get('YBC_TESTIMONIAL_ENABLE_EMAIL'))
            return false;
        $mailDir = dirname(__FILE__).'/../../mails/';
        $lang = new Language((int)$this->context->language->id);
        $mail_lang_id = (int)$this->context->language->id;
        if(!is_dir($mailDir.$lang->iso_code))
           $mail_lang_id = (int)Configuration::get('PS_LANG_DEFAULT'); 
        if(Configuration::get('YBC_TESTIMONIAL_EMAILS'))
            $emails = explode(',',Configuration::get('YBC_TESTIMONIAL_EMAILS'));
        else
            $emails = array();
        if($emails)
        {
            foreach($emails as $email)
            {    
                if(Validate::isEmail(trim($email)))
                {
                    Mail::Send(
                        $mail_lang_id, 
                        'new_testimonial', 
                        Mail::l('New testimonial from customer', $this->context->language->id), 
                        array('{customer}' => $customer, '{testimonial}' => $testimonial,'{star}' => $star),  
                        trim($email), null, null, null, $img, null, 
                        $mailDir, 
                        false, $this->context->shop->id
                    );   
                }                
            }
        }
    }
}
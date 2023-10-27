<?php
/**
 * Copyright YourBestCode.com
 * Email: ybctheme@gmail.com
 * First created: 21/12/2015
 * Last updated: NOT YET
*/

if (!defined('_PS_VERSION_'))
	exit;
class Ybc_manufacturer extends Module
{
    private $_html;
    public function __construct()
	{
		$this->name = 'ybc_manufacturer';
		$this->tab = 'front_office_features';
		$this->version = '1.0.1';
		$this->author = 'YourBestCode.com';
		$this->need_instance = 0;
		$this->secure_key = Tools::encrypt($this->name);
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->l('YourBestCode manufacturers/brands block');
		$this->description = $this->l('Display list of manufacturers/brands on home page');
		$this->ps_versions_compliancy = array('min' => '1.6.0.0', 'max' => _PS_VERSION_);   
        $this->_html = ''; 
    }
    /**
	 * @see Module::install()
	 */
	public function install()
	{
	    $this->_installDb();
        return parent::install() 
               && $this->registerHook('displayHome') 
               && $this->registerHook('displayHeader')
               && $this->registerHook('ybcManufacturer');
    }
    
    /**
	 * @see Module::uninstall()
	 */
	public function uninstall()
	{
	    $this->_uninstallDb();
        return parent::uninstall();
    }
    
    private function _installDb()
    {
        $languages = Language::getLanguages(false);
        $YBC_MF_TITLES = array();
        foreach($languages as $l)
        {
            $YBC_MF_TITLES[$l['id_lang']] = $this->l('Our brands');
        }  
        Configuration::updateValue('YBC_MF_TITLE', $YBC_MF_TITLES);
        Configuration::updateValue('YBC_MF_MANUFACTURER_NUMBER', 10);
        Configuration::updateValue('YBC_MF_SHOW_NAME', 0);;
    }      
    private function _uninstallDb()
    {
        Configuration::deleteByName('YBC_MF_TITLE');
        Configuration::deleteByName('YBC_MF_MANUFACTURER_NUMBER');
        Configuration::deleteByName('YBC_MF_SHOW_NAME');
    }
    /**
     * Module backend html 
     */
    public function getContent()
	{
	   $languages = Language::getLanguages(false);
       $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
	   $errors = array();
       if(Tools::isSubmit('saveConfig'))
       {
            $YBC_MF_TITLES = array();
            foreach($languages as $l)
            {
                $YBC_MF_TITLES[$l['id_lang']] = trim(Tools::getValue('YBC_MF_TITLE_'.$l['id_lang'])) !='' ? trim(Tools::getValue('YBC_MF_TITLE_'.$l['id_lang'])) : trim(Tools::getValue('YBC_MF_TITLE_'.$id_lang_default));
            }   
            $YBC_MF_MANUFACTURER_NUMBER = (int)trim(Tools::getValue('YBC_MF_MANUFACTURER_NUMBER',10));
            $YBC_MF_SHOW_NAME = (int)Tools::getValue('YBC_MF_SHOW_NAME') ? 1 : 0;
            if(trim(Tools::getValue('YBC_MF_TITLE_'.$id_lang_default)) == '')                
                $errors[] = $this->l('You need to enter block title');
            if(!$YBC_MF_MANUFACTURER_NUMBER)
                $errors[] = $this->l('You need to enter number of manufacturers to display');
            if(!$errors)
            {
                Configuration::updateValue('YBC_MF_TITLE',$YBC_MF_TITLES);
                Configuration::updateValue('YBC_MF_MANUFACTURER_NUMBER',$YBC_MF_MANUFACTURER_NUMBER);    
                Configuration::updateValue('YBC_MF_SHOW_NAME',$YBC_MF_SHOW_NAME);
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
            else
                $this->_html .= $this->displayError(implode('<br />', $errors));  
        }
        $this->renderConfigForm();
        return $this->_html.$this->displayIframe();
    }
    private function renderConfigForm()
    {
        $fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Configuration'),
					'icon' => 'icon-AdminAdmin'
				),
				'input' => array(
                    array(
    						'type' => 'text',
    						'label' => $this->l('Block title'),
    						'name' => 'YBC_MF_TITLE',
                            'required' => true,
                            'lang' => true        
                        ),    
                    array(
						'type' => 'text',
						'label' => $this->l('Number of manufacturers to display'),
						'name' => 'YBC_MF_MANUFACTURER_NUMBER',
                        'required' => true
                    ),                    
                    array(
						'type' => 'switch',
						'label' => $this->l('Show manufacturer name'),
						'name' => 'YBC_MF_SHOW_NAME',
                        'is_bool' => true,
						'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('Yes')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('No')
							)
						)					
					)                  
                ),
                'submit' => array(
					'title' => $this->l('Save'),
				)
            ),
		);
        
        $helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table = $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$this->fields_form = array();
		$helper->module = $this;
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'saveConfig';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->override_folder = '/';
        $languages = Language::getLanguages(false);
        /**
         * Get field values 
         */
        
        $fields = array();
        if(Tools::isSubmit('saveConfig'))
        {
            foreach($languages as $l)
            {
                $fields['YBC_MF_TITLE'][$l['id_lang']] = Tools::getValue('YBC_MF_TITLE_'.$l['id_lang'],Tools::getValue('YBC_MF_TITLE_'.Configuration::get('PS_LANG_DEFAULT')));    
            }             
            $fields['YBC_MF_MANUFACTURER_NUMBER'] = Tools::getValue('YBC_MF_MANUFACTURER_NUMBER', 10);            
            $fields['YBC_MF_SHOW_NAME'] = Tools::getValue('YBC_MF_SHOW_NAME',0);
        }
        else
        {
            foreach($languages as $l)
            {
                $fields['YBC_MF_TITLE'][$l['id_lang']] = Configuration::get('YBC_MF_TITLE', $l['id_lang']);    
            } 
            $fields['YBC_MF_MANUFACTURER_NUMBER'] = Configuration::get('YBC_MF_MANUFACTURER_NUMBER') ? Configuration::get('YBC_MF_MANUFACTURER_NUMBER') : 10;
            $fields['YBC_MF_SHOW_NAME'] = (int)Configuration::get('YBC_MF_SHOW_NAME') ? 1 : 0;
            
        }        
        $helper->tpl_vars = array(
			'base_url' => $this->context->shop->getBaseURL(),
			'language' => array(
				'id_lang' => $language->id,
				'iso_code' => $language->iso_code
			),
			'fields_value' => $fields,
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id
        );        
        $this->_html .= $helper->generateForm(array($fields_form));	
    }
    
    /**
     * Hooks 
     */
     public function hookYbcManufacturer()
     {
        $manufacturers = Manufacturer::getManufacturers();
        $mnfNumber = (int)Configuration::get('YBC_MF_MANUFACTURER_NUMBER') ? (int)Configuration::get('YBC_MF_MANUFACTURER_NUMBER') : 10;
		$mnfs = array();
        $ik = 0;
        foreach ($manufacturers as &$manufacturer)
		{
		    $ik++;
            if($ik > $mnfNumber)
                break;			
            if(file_exists(_PS_MANU_IMG_DIR_.$manufacturer['id_manufacturer'].'.jpg'))
                $manufacturer['image'] = _THEME_MANU_DIR_.$manufacturer['id_manufacturer'].'.jpg';
            else
                $manufacturer['image'] = $this->_path.'images/default_logo.jpg';
            $mnfs[] = $manufacturer;
		}
		$this->smarty->assign(array(
			'manufacturers' => $mnfs,
			'YBC_MF_TITLE' => Configuration::get('YBC_MF_TITLE', (int)$this->context->language->id),
			'YBC_MF_SHOW_NAME' => (int)Configuration::get('YBC_MF_SHOW_NAME'),
            'link' => $this->context->link,
            'view_all_mnf' => $this->context->link->getPageLink('manufacturer')
		));
        return $this->display(__FILE__, 'manufacturers.tpl');
     }
     public function hookDisplayHome()
     {
        return $this->display(__FILE__, 'blocks.tpl');
     }
     public function hookDisplayHeader()
     {
        $this->context->controller->addCSS($this->_path.'css/ybcmnf.css','all');
        $this->context->controller->addJS($this->_path.'js/ybcmnf.js');   
     }

    public function displayIframe()
    {
        switch($this->context->language->iso_code) {
            case 'en':
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'it':
                $url = 'https://cdn.prestahero.com/it/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'fr':
                $url = 'https://cdn.prestahero.com/fr/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'es':
                $url = 'https://cdn.prestahero.com/es/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            default:
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
        }
        $this->smarty->assign(
            array(
                'url_iframe' => $url
            )
        );
        return $this->display(__FILE__,'iframe.tpl');
    }
}
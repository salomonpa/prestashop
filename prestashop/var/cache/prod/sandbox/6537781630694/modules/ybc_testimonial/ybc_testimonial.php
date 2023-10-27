<?php
/**
 * Copyright YourBestCode.com
 * Email: support@yourbestcode.com
 * First created: 21/12/2015
 * Last updated: NOT YET
*/

if (!defined('_PS_VERSION_'))
	exit;
include_once(_PS_MODULE_DIR_.'ybc_testimonial/classes/ybc_testimonial_paggination_class.php');
include_once(_PS_MODULE_DIR_.'ybc_testimonial/classes/ybc_testimonial_class.php');
class Ybc_testimonial extends Module
{
    private $baseAdminPath;
    private $errorMessage = false;
    private $_html;
    public $configs = array();
    public $testimonialUrl;
    private $testimonialFields = array(
        array(
            'name' => 'id_testimonial',
            'primary_key' => true
        ),
        array(
            'name' => 'customer',
            'multi_lang' => true
        ),
        array(
            'name' => 'comment',            
            'multi_lang' => true
        ),
        array(
            'name' => 'enabled',
            'default' => 1
        ),
        array(
            'name' => 'featured',
            'default' => 1
        ),
        array(
            'name' => 'rating',
            'default' => 0
        ),
        array(
            'name' => 'image'
        ),
        array(
            'name' => 'sort_order',
            'default' => 1
        )
    );
    public function __construct()
	{
		$this->name = 'ybc_testimonial';
		$this->tab = 'front_office_features';
		$this->version = '1.0.1';
		$this->author = 'YourBestCode.com';
		$this->need_instance = 0;
		$this->secure_key = Tools::encrypt($this->name);
        $this->testimonialUrl = $this->_path;  
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->l('YourBestCode Testimonials');
		$this->description = $this->l('Advanced testimonials module for your Prestashop website');
		$this->ps_versions_compliancy = array('min' => '1.6.0.0', 'max' => _PS_VERSION_);
        //Config fields        
        $this->configs = array(
            'YBC_TESTIMONIAL_SHOW_SIDE_BLOCK' => array(
                'label' => $this->l('Show testimonial block'),
                'type' => 'switch',
                'default' => 1
            ),
            'YBC_TESTIMONIAL_BLOCK_NUMBER' => array(
                'label' => $this->l('Number of comments displayed on testimonial block'),
                'type' => 'text',
                'default' => 15,
                'required' => true,
            ),
            'YBC_TESTIMONIAL_USE_SLIDER' => array(
                'label' => $this->l('Use carousel slider for testimonials block'),
                'type' => 'switch',
                'default' => 1
            ),            
            'YBC_TESTIMONIAL_ITEMS_PER_PAGE' => array(
                'label' => $this->l('Number of testimonials per page'),
                'type' => 'text',
                'default' => 20,
                'required' => true,
            ),
            'YBC_TESTIMONIAL_CUSTOMER_COMMENT' => array(
                'label' => $this->l('Allow customer to post testimonials'),
                'type' => 'switch',
                'default' => 1
            ),
            'YBC_TESTIMONIAL_GUEST_COMMENT' => array(
                'label' => $this->l('Unregistered users can post testimonials'),
                'type' => 'switch',
                'default' => 0
            ),
            'YBC_TESTIMONIAL_AUTO_APPROVE' => array(
                'label' => $this->l('Auto approve a new testimonial'),
                'type' => 'switch',
                'default' => 0
            ),
            'YBC_TESTIMONIAL_USE_CAPCHA' => array(
                'label' => $this->l('Enable capcha security'),
                'type' => 'switch',
                'default' => 1
            ),
            'YBC_TESTIMONIAL_ALLOW_RATE' => array(
                'label' => $this->l('Allow customer to add ratings to their testimonial'),
                'type' => 'switch',
                'default' => 1
            ),
            'YBC_TESTIMONIAL_DEFAULT_RATING' => array(
                'label' => $this->l('Default rating'),
                'type' => 'text',
                'default' => 5,
                'required' => true,
            ),
            'YBC_TESTIMONIAL_ALLOW_IMAGE' => array(
                'label' => $this->l('Require customer to upload avatar'),
                'type' => 'switch',
                'default' => 1
            ),
            'YBC_TESTIMONIAL_ENABLE_EMAIL' => array(
                'label' => $this->l('Enable email alerts'),
                'type' => 'switch',
                'default' => '1'                
            ),   
            'YBC_TESTIMONIAL_EMAILS' => array(
                'label' => $this->l('Notification emails'),
                'type' => 'text',
                'default' => '',
                'desc' => $this->l('Separated by a comma (,)')
            ),           
        );
        if(isset($this->context->controller->controller_type) && $this->context->controller->controller_type =='admin')
            $this->baseAdminPath = $this->context->link->getAdminLink('AdminModules').'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;        
    }
    /**
	 * @see Module::install()
	 */
    public function install()
	{
	    $theme = new Theme(Context::getContext()->shop->id_theme);   
        return parent::install()        
        && ($theme->default_left_column && $this->registerHook('leftColumn') || $theme->default_right_column && $this->registerHook('rightColumn'))
        && $this->registerHook('displayBackOfficeHeader')  
        && $this->registerHook('displayHeader')
        && $this->registerHook('displayFooter')
        && $this->registerHook('testimonialBlock')
        && $this->_installDb();        
    }    
    /**
	 * @see Module::uninstall()
	 */
	public function uninstall()
	{
        return parent::uninstall() && $this->_uninstallDb();
    }
    private function _installDb()
    {
        $languages = Language::getLanguages(false);
        if($this->configs)
        {
            foreach($this->configs as $key => $config)
            {
                if(isset($config['lang']) && $config['lang'])
                {
                    $values = array();
                    foreach($languages as $lang)
                    {
                        $values[$lang['id_lang']] = isset($config['default']) ? $config['default'] : '';
                    }
                    Configuration::updateValue($key, $values);
                }
                else
                    Configuration::updateValue($key, isset($config['default']) ? $config['default'] : '');
            }
        }
        //Install db structure
        require_once(dirname(__FILE__).'/install/sql.php');
        require_once(dirname(__FILE__).'/install/data.php');
        return true;
    }
    private function _uninstallDb()
    {
        if($this->configs)
        {
            foreach($this->configs as $key => $config)
            {
                Configuration::deleteByName($key);
            }
        }
        
        $tbls = array('testimonial', 'testimonial_lang');
        foreach($tbls as $tbl)
        {
            Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'ybc_'.$tbl.'`');
        }
        $dirs = array('testimonial');
        foreach($dirs as $dir)
        {
            $files = glob(dirname(__FILE__).'/images/'.$dir.'/*'); 
            foreach($files as $file){ 
              if(is_file($file))
                @unlink($file); 
            }
        }
        return true;
    }
    public function getContent()
	{
	   
	   $control = trim(Tools::getValue('control'));
       if(!$control)
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&control=testimonial&list=true');
       //Process post
       if($control=='testimonial')
       {
            $this->_postTestimonial();   
       }
       elseif($control=='config')
       {
            $this->_postConfig();   
       }
       
       //Display errors if have
       if($this->errorMessage)
            $this->_html .= $this->errorMessage;  
       
       //Render views
       $this->_html .= '<div class="bootstrap"><div class="row"><div class="col-lg-12"><div class="row">';
       $this->renderSidebar();
       $this->_html .= '<div class="col-lg-10">';
       $this->_html .= '<script type="text/javascript" src="'.$this->_path.'js/admin.js"></script>';       
       if($control=='testimonial')
       {
            $this->renderTestimonialForm();   
       }       
       elseif($control=='config')
       {
            $this->renderConfig();   
       }
       $this->_html .= '</div></div></div></div></div>';
       return $this->_html.$this->displayIframe();
    } 
    private function _postConfig()
    {
        $errors = array();
        $languages = Language::getLanguages(false);
        $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        if(Tools::isSubmit('saveConfig'))
        {
            $configs = $this->configs;
            if($configs)
            {
                foreach($configs as $key => $config)
                {
                    if(isset($config['lang']) && $config['lang'])
                    {
                        if(isset($config['required']) && $config['required'] && $config['type']!='switch' && trim(Tools::getValue($key.'_'.$id_lang_default) == ''))
                        {
                            $errors[] = $config['label'].' '.$this->l('is required');
                        }                        
                    }
                    else
                    {
                        if(isset($config['required']) && $config['required'] && $config['type']!='switch' && trim(Tools::getValue($key) == ''))
                        {
                            $errors[] = $config['label'].' '.$this->l('is required');
                        }
                        elseif(!Validate::isCleanHtml(trim(Tools::getValue($key))))
                        {
                            $errors[] = $config['label'].' '.$this->l('is invalid');
                        }   
                    }                    
                }
            }
            
            
            //Custom validation
            if((int)Tools::getValue('YBC_TESTIMONIAL_BLOCK_NUMBER') <= 0)
                $errors[] = $this->l('Number of comments displayed on testimonial block need to be greater than 0');
            
            if((int)Tools::getValue('YBC_TESTIMONIAL_ITEMS_PER_PAGE') <= 0)
                $errors[] = $this->l('Number of items per page need to be greater than 0');
            
            if((int)Tools::getValue('YBC_TESTIMONIAL_DEFAULT_RATING') < 0 || (int)Tools::getValue('YBC_TESTIMONIAL_DEFAULT_RATING') > 5)
                $errors[] = $this->l('Default rating need to be from 0 to 5');            
            if($emailsStr = Tools::getValue('YBC_TESTIMONIAL_EMAILS'))
            {
                $emails = explode(',',$emailsStr);
                if($emails)
                {
                    foreach($emails as $email)
                    {
                        if(!Validate::isEmail(trim($email)))
                        {
                            $errors[] = $this->l('One of the sumitted emails is not valid');
                            break;
                        }
                    }
                }
            }
            if(!$errors)
            {
                if($configs)
                {
                    foreach($configs as $key => $config)
                    {
                        if(isset($config['lang']) && $config['lang'])
                        {
                            $valules = array();
                            foreach($languages as $lang)
                            {
                                if($config['type']=='switch')                                                           
                                    $valules[$lang['id_lang']] = (int)trim(Tools::getValue($key.'_'.$lang['id_lang'])) ? 1 : 0;                                
                                else
                                    $valules[$lang['id_lang']] = trim(Tools::getValue($key.'_'.$lang['id_lang'])) ? trim(Tools::getValue($key.'_'.$lang['id_lang'])) : trim(Tools::getValue($key.'_'.$id_lang_default));
                            }
                            Configuration::updateValue($key,$valules);
                        }
                        else
                        {
                            if($config['type']=='switch')
                            {                           
                                Configuration::updateValue($key,(int)trim(Tools::getValue($key)) ? 1 : 0);
                            }
                            else
                                Configuration::updateValue($key,trim(Tools::getValue($key)));   
                        }                        
                    }
                }
            }
            if (count($errors))
            {
               $this->errorMessage = $this->displayError(implode('<br />', $errors));  
            }
            else
               Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&control=config');            
        }
     }
     public function renderConfig()
     {
        $configs = $this->configs;
        $fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Settings'),
					'icon' => 'icon-AdminAdmin'
				),
				'input' => array(),
                'submit' => array(
					'title' => $this->l('Save'),
				)
            ),
		);
        if($configs)
        {
            foreach($configs as $key => $config)
            {
                $fields_form['form']['input'][] = array(
                    'name' => $key,
                    'type' => $config['type'],
                    'label' => $config['label'],
                    'desc' => isset($config['desc']) ? $config['desc'] : false,
                    'required' => isset($config['required']) && $config['required'] ? true : false,
                    'options' => isset($config['options']) && $config['options'] ? $config['options'] : array(),
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
						),
                    'lang' => isset($config['lang']) ? $config['lang'] : false
                );
            }
        }        
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
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&control=config';
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        $fields = array();        
        $languages = Language::getLanguages(false);
        $helper->override_folder = '/';
        if(Tools::isSubmit('saveConfig'))
        {            
            if($configs)
            {
                foreach($configs as $key => $config)
                {                    
                    if(isset($config['lang']) && $config['lang'])
                    {                        
                        foreach($languages as $l)
                        {
                            $fields[$key][$l['id_lang']] = Tools::getValue($key.'_'.$l['id_lang'],isset($config['default']) ? $config['default'] : '');
                        }
                    }
                    else
                        $fields[$key] = Tools::getValue($key,isset($config['default']) ? $config['default'] : '');                    
                }
            }
        }
        else
        {
            if($configs)
            {
                    foreach($configs as $key => $config)
                    {
                        if(isset($config['lang']) && $config['lang'])
                        {                    
                            foreach($languages as $l)
                            {
                                $fields[$key][$l['id_lang']] = Configuration::get($key,$l['id_lang']);
                            }
                        }
                        else
                            $fields[$key] = Configuration::get($key);                   
                    }
            }
        }
        $helper->tpl_vars = array(
			'base_url' => $this->context->shop->getBaseURL(),
			'language' => array(
				'id_lang' => $language->id,
				'iso_code' => $language->iso_code
			),
			'fields_value' => $fields,
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id,
            'cancel_url' => $this->baseAdminPath.'&control=testimonial&list=true'
        );
        
        $this->_html .= $helper->generateForm(array($fields_form));		
     }
     public function renderTestimonialForm()
     {
        //List 
        if(trim(Tools::getValue('list'))=='true')
        {
            $fields_list = array(
                'id_testimonial' => array(
                    'title' => $this->l('Id'),
                    'width' => 40,
                    'type' => 'text',
                    'sort' => true,
                    'filter' => true,
                ),
                'image' => array(
                    'title' => $this->l('Avatar'),
                    'width' => 100,
                    'type' => 'text',
                    'filter' => false                       
                ),   
                'customer' => array(
                    'title' => $this->l('Customer'),
                    'width' => 140,
                    'type' => 'text',
                    'sort' => true,
                    'filter' => true
                ),
                'rating' => array(
                    'title' => $this->l('Rating'),
                    'width' => 100,
                    'type' => 'select',
                    'sort' => true,
                    'filter' => true,
                    'rating_field' => true,
                    'filter_list' => array(
                        'id_option' => 'rating',
                        'value' => 'stars',
                        'list' => array(
                            0 => array(
                                'rating' => 0,
                                'stars' => $this->l('No reviews')
                            ),
                            1 => array(
                                'rating' => 1,
                                'stars' => '1 '.$this->l('star')
                            ),
                            2 => array(
                                'rating' => 2,
                                'stars' => '2 '.$this->l('stars')
                            ),
                            3 => array(
                                'rating' => 3,
                                'stars' => '3 '.$this->l('stars')
                            ),
                            4 => array(
                                'rating' => 4,
                                'stars' => '4 '.$this->l('stars')
                            ),
                            5 => array(
                                'rating' => 5,
                                'stars' => '5 '.$this->l('stars')
                            ),
                        )
                    )
                ),                
                'sort_order' => array(
                    'title' => $this->l('Sort order'),
                    'width' => 40,
                    'type' => 'text',
                    'sort' => true,
                    'filter' => true,
                ),
                'featured' => array(
                    'title' => $this->l('Featured'),
                    'width' => 80,
                    'type' => 'active',
                    'sort' => true,
                    'filter' => true,
                    'strip_tag' => false,
                    'filter_list' => array(
                        'id_option' => 'enabled',
                        'value' => 'title',
                        'list' => array(
                            0 => array(
                                'enabled' => 1,
                                'title' => $this->l('Yes')
                            ),
                            1 => array(
                                'enabled' => 0,
                                'title' => $this->l('No')
                            )
                        )
                    )
                ),
                'enabled' => array(
                    'title' => $this->l('Approved'),
                    'width' => 80,
                    'type' => 'active',
                    'sort' => true,
                    'filter' => true,
                    'strip_tag' => false,
                    'filter_list' => array(
                        'id_option' => 'enabled',
                        'value' => 'title',
                        'list' => array(
                            0 => array(
                                'enabled' => 1,
                                'title' => $this->l('Yes')
                            ),
                            1 => array(
                                'enabled' => 0,
                                'title' => $this->l('No')
                            )
                        )
                    )
                ),
            );
            //Filter
            $filter = "";
            if(trim(Tools::getValue('id_testimonial'))!='')
                $filter .= " AND t.id_testimonial = ".(int)trim(urldecode(Tools::getValue('id_testimonial')));
            if(trim(Tools::getValue('sort_order'))!='')
                $filter .= " AND t.sort_order = ".(int)trim(urldecode(Tools::getValue('sort_order')));
            if(trim(Tools::getValue('customer'))!='')
                $filter .= " AND tl.customer like '%".addslashes(trim(urldecode(Tools::getValue('customer'))))."%'";
            if(trim(Tools::getValue('comment'))!='')
                $filter .= " AND tl.comment like '%".addslashes(trim(urldecode(Tools::getValue('comment'))))."%'";
            if(trim(Tools::getValue('enabled'))!='')
                $filter .= " AND t.enabled =".(int)Tools::getValue('enabled');
            if(trim(Tools::getValue('featured'))!='')
                $filter .= " AND t.featured =".(int)Tools::getValue('featured');
            if(trim(Tools::getValue('rating'))!='')
                $filter .= " AND t.rating = ".(int)trim(urldecode(Tools::getValue('rating')));
            
            //Sort
            $sort = "";
            if(trim(Tools::getValue('sort')) && isset($fields_list[Tools::getValue('sort')]))
            {
                $sort .= trim(Tools::getValue('sort'))." ".(Tools::getValue('sort_type')=='asc' ? ' ASC ' :' DESC ')." , ";
            }
            else
                $sort = false;
            
            //Paggination
            $page = (int)Tools::getValue('page') && (int)Tools::getValue('page') > 0 ? (int)Tools::getValue('page') : 1;
            $totalRecords = (int)$this->countTestimonialsWithFilter($filter);
            $paggination = new Ybc_testimonial_paggination_class();            
            $paggination->total = $totalRecords;
            $paggination->url = $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&control=testimonial&list=true&page=_page_'.$this->getUrlExtra($fields_list);
            $paggination->limit =  (int)Configuration::get('YBC_TESTIMONIAL_ITEMS_PER_PAGE') > 0 ? (int)Configuration::get('YBC_TESTIMONIAL_ITEMS_PER_PAGE') : 20;
            $totalPages = ceil($totalRecords / $paggination->limit);
            if($page > $totalPages)
                $page = $totalPages;
            $paggination->page = $page;
            $start = $paggination->limit * ($page - 1);
            if($start < 0)
                $start = 0;
            $testimonials = $this->getTestimonialsWithFilter($filter, $sort, $start, $paggination->limit);
            if($testimonials)
            {
                foreach($testimonials as &$testimonial)
                {
                    if($testimonial['image'])
                    {
                        $testimonial['image'] = array(
                            'image_field' => true,
                            'img_url' => $this->_path.'images/testimonial/'.$testimonial['image'],
                            'width' => 80
                        );
                    }
                }
            }
            $paggination->text =  $this->l('Showing {start} to {end} of {total} ({pages} Pages)');
            $paggination->style_links = $this->l('links');
            $paggination->style_results = $this->l('results');
            $listData = array(
                'name' => 'ybc_testimonial',
                'actions' => array('edit', 'delete', 'view'),
                'currentIndex' => $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&control=testimonial',
                'identifier' => 'id_testimonial',
                'show_toolbar' => true,
                'show_action' => true,
                'title' => $this->l('Testimonials'),
                'fields_list' => $fields_list,
                'field_values' => $testimonials,
                'paggination' => $paggination->render(),
                'filter_params' => $this->getFilterParams($fields_list),
                'show_reset' =>trim(Tools::getValue('sort_order'))!='' || trim(Tools::getValue('rating'))!='' || trim(Tools::getValue('featured'))!='' || trim(Tools::getValue('enabled'))!='' || trim(Tools::getValue('id_testimonial'))!='' || trim(Tools::getValue('comment'))!='' || trim(Tools::getValue('customer'))!='' ? true : false,
                'totalRecords' => $totalRecords,
                'preview_link' => $this->context->link->getModuleLink('ybc_testimonial', 'testimonials') 
            );            
            return $this->_html .= $this->renderList($listData);      
        }
        //Form
        
        $fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Manage testimonials'),				
				),
				'input' => array(					
					array(
						'type' => 'text',
						'label' => $this->l('Customer name'),
						'name' => 'customer',
						'lang' => true,    
                        'required' => true,                    
					),                     
                    array(
						'type' => 'textarea',
						'label' => $this->l('Comment'),
						'name' => 'comment',
						'lang' => true,
                        'required' => true	                                           
					), 
                    array(
    					'type' => 'select',
    					'label' => $this->l('Rating'),
    					'name' => 'rating',
                        'options' => array(
                			 'query' => array(                                
                                    array(
                                        'id_option' => '0', 
                                        'name' => $this->l('No ratings')
                                    ),
                                    array(
                                        'id_option' => '1', 
                                        'name' => '1 '. $this->l('rating')
                                    ),
                                    array(
                                        'id_option' => '2', 
                                        'name' => '2 '. $this->l('ratings')
                                    ),
                                    array(
                                        'id_option' => '3', 
                                        'name' => '3 '. $this->l('ratings')
                                    ),
                                    array(
                                        'id_option' => '4', 
                                        'name' => '4 '. $this->l('ratings')
                                    ),
                                    array(
                                        'id_option' => '5', 
                                        'name' => '5 '. $this->l('ratings')
                                    )
                                ),                             
                             'id' => 'id_option',
                			 'name' => 'name'  
                        )                
    				),                   
                    array(
						'type' => 'file',
						'label' => $this->l('Avatar'),
						'name' => 'image',               						
					),
                    array(
						'type' => 'text',
						'label' => $this->l('Sort order'),
						'name' => 'sort_order',
                        'required' => true						
					),
                    array(
						'type' => 'switch',
						'label' => $this->l('Approved'),
						'name' => 'enabled',
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
					),
                    array(
						'type' => 'switch',
						'label' => $this->l('Featured (shown on testimonial block)'),
						'name' => 'featured',
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
					),
                    array(
                        'type' => 'hidden', 
                        'name' => 'control'
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
		$helper->submit_action = 'saveTestimonial';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->tpl_vars = array(
			'base_url' => $this->context->shop->getBaseURL(),
			'language' => array(
				'id_lang' => $language->id,
				'iso_code' => $language->iso_code
			),
            'PS_ALLOW_ACCENTED_CHARS_URL', (int)Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL'),
			'fields_value' => $this->getFieldsValues($this->testimonialFields,'id_testimonial','Ybc_testimonial_class','saveTestimonial'),
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id,
			'image_baseurl' => $this->_path.'images/',
            'link' => $this->context->link,
            'cancel_url' => $this->baseAdminPath.'&control=testimonial&list=true'
		);
        
        if(Tools::isSubmit('id_testimonial') && $this->itemExists('testimonial','id_testimonial',(int)Tools::getValue('id_testimonial')))
        {
            
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'id_testimonial');
            $testimonial = new Ybc_testimonial_class((int)Tools::getValue('id_testimonial'));
            if($testimonial->image)
            {             
                $helper->tpl_vars['display_img'] = $this->_path.'images/testimonial/'.$testimonial->image;
                $helper->tpl_vars['img_del_link'] = $this->baseAdminPath.'&id_testimonial='.Tools::getValue('id_testimonial').'&deltestimonialimage=true&control=testimonial';                
            }
        }
        
		$helper->override_folder = '/';

		$languages = Language::getLanguages(false);
        
        $this->_html .= $helper->generateForm(array($fields_form));			
    }
    private function _postTestimonial()
    {
        $errors = array();
        $id_testimonial = (int)Tools::getValue('id_testimonial');
        if($id_testimonial && !$this->itemExists('testimonial','id_testimonial',$id_testimonial) && !Tools::isSubmit('list'))
            Tools::redirectAdmin($this->baseAdminPath);
        /**
         * Change status 
         */
         if(Tools::isSubmit('change_enabled'))
         {
            $status = (int)Tools::getValue('change_enabled') ?  1 : 0;
            $field = Tools::getValue('field');
            $id_testimonial = (int)Tools::getValue('id_testimonial');            
            if(($field == 'enabled' || $field == 'featured') && $id_testimonial)
            {
                $this->changeStatus('testimonial',$field,$id_testimonial,$status);
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&control=testimonial&list=true');
            }
         }
        /**
         * Delete image 
         */         
         if($id_testimonial && $this->itemExists('testimonial','id_testimonial',$id_testimonial) && Tools::isSubmit('deltestimonialimage'))
         {
            $testimonial = new Ybc_testimonial_class($id_testimonial);
            $icoUrl = dirname(__FILE__).'/images/testimonial/'.$testimonial->image; 
            if($testimonial->image && file_exists($icoUrl))
            {
                @unlink($icoUrl);
                $testimonial->image = '';
                $testimonial->datetime_modified = date('Y-m-d H:i:s');
                $testimonial->modified_by = (int)$this->context->employee->id;
                $testimonial->update();                
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&id_testimonial='.$id_testimonial.'&control=testimonial');
            }
            else
                $errors[] = $this->l('Image does not exist');   
         }
        /**
         * Delete testimonial 
         */ 
         if(Tools::isSubmit('del'))
         {
            $id_testimonial = (int)Tools::getValue('id_testimonial');
            if(!$this->itemExists('testimonial','id_testimonial',$id_testimonial))
                $errors[] = $this->l('Testimonial does not exist');
            elseif($this->_deleteTestimonial($id_testimonial))
            {                
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&control=testimonial&list=true');
            }                
            else
                $errors[] = $this->l('Could not delete the testimonial. Please try again');    
         }                  
        /**
         * Save testimonial 
         */
        if(Tools::isSubmit('saveTestimonial'))
        {            
            if($id_testimonial && $this->itemExists('testimonial','id_testimonial',$id_testimonial))
            {
                $testimonial = new Ybc_testimonial_class($id_testimonial);
            }
            else
            {
                $testimonial = new Ybc_testimonial_class();
                $testimonial->datetime_added = date('Y-m-d H:i:s');
            }  
            $rating = (int)Tools::getValue('rating');          
            $testimonial->enabled = trim(Tools::getValue('enabled',1)) ? 1 : 0;
            $testimonial->sort_order = (int)trim(Tools::getValue('sort_order',1));
            $testimonial->featured = trim(Tools::getValue('featured',1)) ? 1 : 0;
            $testimonial->rating = $rating <=5 && $rating >= 0 ? $rating : 0;
            $languages = Language::getLanguages(false);
            foreach ($languages as $language)
			{			
			    $testimonial->customer[$language['id_lang']] = trim(Tools::getValue('customer_'.$language['id_lang'])) != '' ? trim(Tools::getValue('customer_'.$language['id_lang'])) :  trim(Tools::getValue('customer_'.Configuration::get('PS_LANG_DEFAULT')));
                if($testimonial->customer[$language['id_lang']] && !Validate::isCleanHtml($testimonial->customer[$language['id_lang']]))
                    $errors[] = $this->l('Title in '.$language['name'].' is not valid');
               $testimonial->comment[$language['id_lang']] = trim(Tools::getValue('comment_'.$language['id_lang'])) != '' ? trim(Tools::getValue('comment_'.$language['id_lang'])) :  trim(Tools::getValue('comment_'.Configuration::get('PS_LANG_DEFAULT')));
                if($testimonial->comment[$language['id_lang']] && !Validate::isCleanHtml($testimonial->comment[$language['id_lang']], true))
                    $errors[] = $this->l('Description in '.$language['name'].' is not valid');                	
            }            
            if(Tools::getValue('customer_'.Configuration::get('PS_LANG_DEFAULT'))=='')
                $errors[] = $this->l('Customer name is required');                    
            if(Tools::getValue('comment_'.Configuration::get('PS_LANG_DEFAULT'))=='')
                $errors[] = $this->l('Comment is required');   
            /**
             * Upload image 
             */  
            $oldImage = false;
            $newImage = false;       
            if(isset($_FILES['image']['tmp_name']) && isset($_FILES['image']['name']) && $_FILES['image']['name'])
            {
                $salt = sha1(microtime());
                $type = Tools::strtolower(Tools::substr(strrchr($_FILES['image']['name'], '.'), 1));
                $imageName = $salt.'.'.$type;
                $fileName = dirname(__FILE__).'/images/testimonial/'.$imageName;                
                if(file_exists($fileName))
                {
                    $errors[] = $this->l('Image file name already exists');
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
                    elseif (!$errors && isset($_FILES['image']) &&				
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
                        if($testimonial->image)
                            $oldImage = dirname(__FILE__).'/images/testimonial/'.$testimonial->image;
                        $testimonial->image = $imageName;
                        $newImage = dirname(__FILE__).'/images/testimonial/'.$testimonial->image;			
        			}
                }
            }			
            
            /**
             * Save 
             */    
             
            if(!$errors)
            {
                if (!Tools::getValue('id_testimonial'))
    			{
    				if (!$testimonial->add())
                    {
                        $errors[] = $this->displayError($this->l('The testimonial could not be added.'));
                        if($newImage && file_exists($newImage))
                        @unlink($newImage);                    
                    }                	                    
    			}				
    			elseif (!$testimonial->update())
                {
                    if($newImage && file_exists($newImage))
                        @unlink($newImage); 
                    $errors[] = $this->displayError($this->l('The testimonial could not be updated.'));
                }
                else
                {
                    if($oldImage && file_exists($oldImage))
                    @unlink($oldImage); 
                }    					                
            }
         }
         if (count($errors))
         {
            if($newImage && file_exists($newImage))
                @unlink($newImage); 
            $this->errorMessage = $this->displayError(implode('<br />', $errors));  
         }
         elseif (Tools::isSubmit('saveTestimonial') && Tools::isSubmit('id_testimonial'))
			Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&id_testimonial='.Tools::getValue('id_testimonial').'&control=testimonial');
		 elseif (Tools::isSubmit('saveTestimonial'))
         {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=3&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&id_testimonial='.$this->getMaxId('testimonial','id_testimonial').'&control=testimonial');
         }
    }
    public function renderList($listData)
    {        
        if(isset($listData['fields_list']) && $listData['fields_list'])
        {
            foreach($listData['fields_list'] as $key => &$val)
            {
                $val['active'] = trim(Tools::getValue($key));
            }
        }      
        
        $this->context->smarty->assign($listData);
        return $this->display(__FILE__, 'list_helper.tpl');
    }
    public function getUrlExtra($field_list)
    {
        $params = '';
        if(trim(Tools::getValue('sort')) && isset($field_list[trim(Tools::getValue('sort'))]))
        {
            $params .= '&sort='.trim(Tools::getValue('sort')).'&sort_type='.(trim(Tools::getValue('sort_type')) =='asc' ? 'asc' : 'desc');
        }
        if($field_list)
        {
            foreach($field_list as $key => $val)
            {
                if(Tools::getValue($key)!='')
                {
                    $params .= '&'.$key.'='.urlencode(Tools::getValue($key));
                }
            }
        }
        return $params;
    }
    public function countTestimonialsWithFilter($filter)
    {
        $req = "SELECT t.*, tl.customer, tl.comment
                FROM "._DB_PREFIX_."ybc_testimonial t
                LEFT JOIN "._DB_PREFIX_."ybc_testimonial_lang tl ON t.id_testimonial = tl.id_testimonial
                WHERE tl.id_lang = ".(int)$this->context->language->id.($filter ? $filter : '');     
        $res = Db::getInstance()->executeS($req);
        return $res ? count($res) : 0;
    }
    public function getFilterParams($field_list)
    {
        $params = '';        
        if($field_list)
        {
            foreach($field_list as $key => $val)
            {
                if(Tools::getValue($key)!='')
                {
                    $params .= '&'.$key.'='.urlencode(Tools::getValue($key));
                }
            }
        }
        return $params;
    }
    public function getTestimonialsWithFilter($filter = false, $sort = false, $start = false, $limit = false)
    {
        $req = "SELECT t.*, tl.customer, tl.comment
                FROM "._DB_PREFIX_."ybc_testimonial t
                LEFT JOIN "._DB_PREFIX_."ybc_testimonial_lang tl ON t.id_testimonial = tl.id_testimonial
                WHERE tl.id_lang = ".(int)$this->context->language->id.($filter ? $filter : '')."
                ORDER BY ".($sort ? $sort : '')." t.datetime_added DESC " . ($start !== false && $limit ? " LIMIT $start, $limit" : ""); 
                    
        $res = Db::getInstance()->executeS($req);
        return $res;
    }
    public function changeStatus($tbl, $field, $id , $status)
    {
        $req = "UPDATE "._DB_PREFIX_."ybc_$tbl SET `$field`=$status WHERE id_$tbl=$id";
        return Db::getInstance()->execute($req);
    }
    public function itemExists($tbl, $primaryKey, $id)
	{
		$req = 'SELECT `'.$primaryKey.'`
				FROM `'._DB_PREFIX_.'ybc_'.$tbl.'` tbl
				WHERE tbl.`'.$primaryKey.'` = '.(int)$id;
		$row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);        
		return ($row);
	}
    private function _deleteTestimonial($id_testimonial)
    {
        if($this->itemExists('testimonial','id_testimonial',$id_testimonial))
        {
            $testimonial = new Ybc_testimonial_class($id_testimonial);
            if($testimonial->image && file_exists(dirname(__FILE__).'/images/testimonial/'.$testimonial->image))
            {
                @unlink(dirname(__FILE__).'/images/testimonial/'.$testimonial->image);
            }            
            return $testimonial->delete();
        }
        return false;        
    }  
    public function renderSidebar()
    {
        $this->context->smarty->assign(
			array(
				'link' => $this->context->link,
				'list' => array(                    
                    array(
                        'label' => $this->l('Testimonials'),
                        'url' => $this->baseAdminPath.'&control=testimonial&list=true',
                        'id' => 'ybc_tab_testimonial',
                        'icon' => 'icon-comments'
                    ),
                    array(
                        'label' => $this->l('Settings'),
                        'url' => $this->baseAdminPath.'&control=config',
                        'id' => 'ybc_tab_config',
                        'icon' => 'icon-AdminAdmin'
                    )
                ),
                'admin_path' => $this->baseAdminPath,
                'active' => 'ybc_tab_'.(trim(Tools::getValue('control')) ? trim(Tools::getValue('control')) : 'testimonial')			
			)
		);
        $this->_html .= '<div class="ybc-left-panel col-lg-2">'.$this->display(__FILE__, 'sidebar.tpl').'</div>';
     }
    public function hookDisplayBackOfficeHeader()
    {
        if(Tools::getValue('module_name')=='ybc_testimonial')
            $this->context->controller->addCSS($this->_path.'css/admin.css');
    }
    public function hookDisplayHeader()
    {
        $this->context->controller->addCSS($this->_path.'css/testimonial.css','all');   
        $this->context->controller->addJS($this->_path.'js/testimonial.js');        
    }
    public function hookLeftColumn($params)
    {
      return $this->display(__FILE__, 'blocks.tpl');
    }
    public function hookRightColumn()
    {
      return $this->hookDisplayLeftColumn();
    }
    public function hookTestimonialBlock()
    {
        if(!Configuration::get('YBC_TESTIMONIAL_SHOW_SIDE_BLOCK'))
            return;
        $testimonials = $this->getTestimonialsWithFilter(' AND t.enabled=1 AND t.featured=1','t.id_testimonial desc,',0,(int)Configuration::get('YBC_TESTIMONIAL_BLOCK_NUMBER') ? (int)Configuration::get('YBC_TESTIMONIAL_BLOCK_NUMBER') : 10);
        if($testimonials)
            foreach($testimonials as &$testimonial)
            {
                if($testimonial['image'])
                    $testimonial['image'] = $this->_path.'images/testimonial/'.$testimonial['image'];                
            }
        $this->smarty->assign(
            array(
                'testimonials' => $testimonials,
                'view_all_link' => $this->context->link->getModuleLink('ybc_testimonial', 'testimonials'),
                'submit_tm_link' => (int)Configuration::get('YBC_TESTIMONIAL_CUSTOMER_COMMENT') ? $this->context->link->getModuleLink('ybc_testimonial', 'submit') : false,
                'allow_rate' => (int)Configuration::get('YBC_TESTIMONIAL_ALLOW_RATE') ? true : false,
                'tm_use_slider'=>(int)Configuration::get('YBC_TESTIMONIAL_USE_SLIDER') ? true : false                
            )
        );
        return $this->display(__FILE__, 'testimonial_block.tpl');
    }
    public function getBreadCrumb()
    {    
        $nodes = array();
        if(Tools::getValue('controller') == 'testimonials')
        {
            $nodes[] = array(
                'name' => $this->l('Testimonials')                   
            );
        }
        elseif(Tools::getValue('controller') == 'submit')
        {
            $nodes[] = array(
                'name' => $this->l('Testimonials'),
                'url' => $this->context->link->getModuleLink('ybc_testimonial', 'testimonials')                   
            );
            $nodes[] = array(
                'name' => $this->l('Submit')                   
            );
        }
        $path = '';
        if($nodes)
        {
            foreach($nodes as $node)
            {
                if(isset($node['url']) && count($nodes) > 1)
                    $path .= '<a class="ybc-testimonial-breadcrumb-a" href="'.$node['url'].'">'.$node['name'].'</a>';
                else
                    $path .= '<span class="ybc-testimonial-breadcrumb-span">'.$node['name'].'</span>';
            }
        }
        return $path;
    }
    public function getFieldsValues($formFields, $primaryKey, $objClass, $saveBtnName)
	{
		$fields = array();
        $id_lang_default = Configuration::get('PS_LANG_DEFAULT');
		if (Tools::isSubmit($primaryKey))
		{
			$obj = new $objClass((int)Tools::getValue($primaryKey));
			$fields[$primaryKey] = (int)Tools::getValue($primaryKey, $obj->$primaryKey);            
		}
		else
        {
            $obj = new $objClass();
        }
        
        foreach($formFields as $field)
        {
            if(!isset($field['primary_key']) && !isset($field['multi_lang']) && !isset($field['connection']))
                $fields[$field['name']] = trim(Tools::getValue($field['name'], $obj->$field['name']));            
        }
        
        $languages = Language::getLanguages(false);
        
        /**
         *  Default
         */
        
        if(!Tools::isSubmit($saveBtnName) && !Tools::isSubmit($primaryKey))
        {
            foreach($formFields as $field)
            {
                if(isset($field['default']) && !isset($field['multi_lang']))
                {
                    if(isset($field['default_submit']))
                        $fields[$field['name']] = (int)Tools::getValue($field['name']) ? (int)Tools::getValue($field['name']) : $field['default'];
                    else
                        $fields[$field['name']] = $field['default'];
                }
            }
        }
        
        /**
         * Multiple language 
         */
		foreach ($languages as $lang)
		{
		    foreach($formFields as $field)
            {
                if(!Tools::isSubmit($saveBtnName) && !Tools::isSubmit($primaryKey))
                {
                    if(isset($field['multi_lang']))
                    {
                        if(isset($field['default']))
                            $fields[$field['name']][$lang['id_lang']] = $field['default'];
                        else
                            $fields[$field['name']][$lang['id_lang']] = '';
                    }
                }
                elseif(Tools::isSubmit($saveBtnName))
                {
                    if(isset($field['multi_lang']))
                        $fields[$field['name']][$lang['id_lang']] = Tools::getValue($field['name'].'_'.(int)$lang['id_lang']);  
                    
                }
                else{                    
                    if(isset($field['multi_lang']))
                    {
                        $field_langs = $obj->$field['name'];                        
                        $fields[$field['name']][$lang['id_lang']] = $field_langs[$lang['id_lang']];
                    }                        
                }                
            }
		}
        $fields['control'] = trim(Tools::getValue('control')) ? trim(Tools::getValue('control')) : '';        
        
         return $fields;
	}
    public function getMaxId($tbl, $primaryKey)
    {
        $req = 'SELECT max(`'.$primaryKey.'`) as maxid
				FROM `'._DB_PREFIX_.'ybc_'.$tbl.'` tbl';				
		$row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);
        return isset($row['maxid']) ? (int)$row['maxid'] : 0;
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
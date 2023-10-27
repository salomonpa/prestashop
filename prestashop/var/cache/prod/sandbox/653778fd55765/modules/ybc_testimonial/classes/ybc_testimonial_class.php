<?php
/**
 * Copyright YourBestCode.com
 * Email: support@yourbestcode.com
 * First created: 21/12/2015
 * Last updated: NOT YET
*/

if (!defined('_PS_VERSION_'))
	exit;
class Ybc_testimonial_class extends ObjectModel
{
    public $id_testimonial;
    public $rating;
    public $datetime_added;
    public $customer;
    public $comment;
    public $featured;
    public $image;
    public $enabled;
    public $sort_order;
    public static $definition = array(
		'table' => 'ybc_testimonial',
		'primary' => 'id_testimonial',
		'multilang' => true,
		'fields' => array(		
            'rating' => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
            'datetime_added' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500),
            'enabled' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'featured' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'image' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500),
            'sort_order' => array('type' => self::TYPE_INT),
            // Lang fields
            'customer' =>	array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 900000, 'required' => true),            
            'comment' =>	array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 900000, 'required' => true),  
        )
	);
    public	function __construct($id_item = null, $id_lang = null, $id_shop = null, Context $context = null)
	{
		parent::__construct($id_item, $id_lang, $id_shop);
        $languages = Language::getLanguages(false);
        $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        foreach($languages as $lang)
        {
            foreach(self::$definition['fields'] as $field => $params)
            {   
                $temp = $this->$field; 
                if(isset($params['lang']) && $params['lang'] && !isset($temp[$lang['id_lang']]))
                {                      
                    $temp[$lang['id_lang']] = '';                        
                }
                $this->$field = $temp;
            }
        }
	}
}
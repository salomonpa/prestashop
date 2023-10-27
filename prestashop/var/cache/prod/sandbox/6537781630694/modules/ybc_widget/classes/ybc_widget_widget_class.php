<?php
/**
 * 2007-2022 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 * 
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 *  @author ETS-Soft <etssoft.jsc@gmail.com>
 *  @copyright  2007-2022 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

if (!defined('_PS_VERSION_'))
	exit;
class Ybc_widget_widget_class extends ObjectModel
{
    public $id_widget;
    public $title;
    public $icon;
    public $description;    
	public $enabled;
    public $show_image;
    public $show_title;
    public $show_description;
	public $link;
	public $image;
    public $sort_order;   
    public $hook; 
    public static $definition = array(
		'table' => 'ybc_widget_widget',
		'primary' => 'id_widget',
		'multilang' => true,
		'fields' => array(
			'enabled' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'show_title' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'show_image' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'show_description' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'sort_order' => array('type' => self::TYPE_INT),
            'link' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500),
            'hook' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500),
            'image' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500),            
            'icon' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500),
            // Lang fields
            'title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 700),			
            'description' =>	array('type' => self::TYPE_HTML, 'lang' => true, 'size' => 900000),            
        )
	);
    public	function __construct($id_item = null, $id_lang = null, $id_shop = null, Context $context = null)
	{
		parent::__construct($id_item, $id_lang, $id_shop,$context);
        $languages = Language::getLanguages(false);
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
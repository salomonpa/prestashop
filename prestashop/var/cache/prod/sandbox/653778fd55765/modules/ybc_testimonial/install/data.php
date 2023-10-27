<?php
/**
 * Copyright YourBestCode.com
 * Email: support@yourbestcode.com
 * First created: 21/12/2015
 * Last updated: NOT YET
*/
if (!defined('_PS_VERSION_'))
	exit;
    $languages = Language::getLanguages(false);
    $tempDir = dirname(__FILE__).'/../images/temp/';
    $imgDir = dirname(__FILE__).'/../images/';
    //Install sample data
    //Category
    $testimonial = new Ybc_testimonial_class();
    $testimonial->id_testimonial = 1;
    $testimonial->enabled = 1;
    $testimonial->image = 'jully.png';
    $testimonial->sort_order = 1;
    $testimonial->datetime_added = date('Y-m-d H:i:s');
    $testimonial->rating = 5;
    $testimonial->featured = 1;
    foreach($languages as $language)
    {
        $testimonial->customer[$language['id_lang']] = $this->l('Jully Smile');
        $testimonial->comment[$language['id_lang']] = $this->l('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');        
    }
    $testimonial->save();
    if(file_exists($tempDir.'jully.png'))
        @copy($tempDir.'jully.png',$imgDir.'testimonial/jully.png');    
    $testimonial = new Ybc_testimonial_class();
    $testimonial->id_testimonial = 2;
    $testimonial->enabled = 1;
    $testimonial->image = 'williams.png';
    $testimonial->sort_order = 1;
    $testimonial->datetime_added = date('Y-m-d H:i:s',time()+60);
    $testimonial->rating = 5;
    $testimonial->featured = 1;
    foreach($languages as $language)
    {
        $testimonial->customer[$language['id_lang']] = $this->l('Williams');
        $testimonial->comment[$language['id_lang']] = $this->l('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');        
    }
    $testimonial->save();
    if(file_exists($tempDir.'williams.png'))
        @copy($tempDir.'williams.png',$imgDir.'testimonial/williams.png');
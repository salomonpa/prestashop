<?php
    include_once('../../config/config.inc.php');
    include_once('../../init.php');
    include_once('ybc_shopmsg.php');
    $module = new Ybc_shopmsg();
    $json=array();
    $context = Context::getContext();
    if((int)Tools::getValue('close'))
    {
        $module->setClosed(1);
        $json['closed'] = 1;
    }    
    die(Tools::jsonEncode($json));
<?php
    /**
 * Copyright YourBestCode.com
 * Email: support@yourbestcode.com
 * First created: 21/12/2015
 * Last updated: NOT YET
*/
if (!defined('_PS_VERSION_'))
	exit;
$sqls = array();
$sqls[] = "
    CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."ybc_testimonial` (
      `id_testimonial` int(11) NOT NULL AUTO_INCREMENT,
      `rating` int(2) NOT NULL DEFAULT '0',
      `image` varchar(1000) DEFAULT NULL,
      `sort_order` int(11) NOT NULL DEFAULT '1',
      `featured` tinyint(1) NOT NULL DEFAULT '1',
      `enabled` tinyint(1) NOT NULL DEFAULT '1',
      `datetime_added` datetime DEFAULT NULL,
      PRIMARY KEY (`id_testimonial`)
    )
";
$sqls[] = "
    CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."ybc_testimonial_lang` (
      `id_testimonial` int(11) DEFAULT NULL,
      `id_lang` int(11) DEFAULT NULL,
      `customer` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
      `comment` text CHARACTER SET utf8
    )
";
if($sqls)
{
    foreach($sqls as $sql)
    {
        Db::getInstance()->execute($sql);
    }
}
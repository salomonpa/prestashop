<?php 
$id_lang_default = Configuration::get('PS_LANG_DEFAULT');
$sqls = array();
$sqls[] = "INSERT INTO `ps_ybc_mm_menu` (`id_menu`, `menu_type`, `link`, `id_cms`, `id_manufacturer`, `id_category`, `column_type`, `sub_menu_max_width`, `custom_class`, `enabled`, `icon`, `show_icon`, `sort_order`) VALUES
(1, 'HOME', '', 0, 0, 0, 'FULL', '100', '', 1, '', 1, 1),
(2, 'CUSTOM', '#', 0, 0, 0, 'FULL', '100', '', 1, '', 1, 2),
(3, 'CUSTOM', '#', 0, 0, 0, 'FULL', '100', '', 1, '', 1, 3),
(4, 'CUSTOM', '#', 0, 0, 0, 'FULL', '100', '', 1, '', 1, 4),
(5, 'CONTACT', '', 0, 0, 0, 'FULL', '100', '', 1, '', 1, 5)";
$sqls[] = "INSERT INTO `ps_ybc_mm_menu_lang` (`id_menu`, `id_lang`, `title`) VALUES
(1, $id_lang_default, 'Home'),
(2, $id_lang_default, 'Women'),
(3, $id_lang_default, 'Top'),
(4, $id_lang_default, 'Accessories'),
(5, $id_lang_default, 'Contact')";
$sqls[] = "INSERT INTO `ps_ybc_mm_column` (`id_column`, `id_menu`, `enabled`, `show_title`, `show_description`, `custom_class`, `column_size`, `image`, `show_image`, `sort_order`) VALUES
(1, 2, 1, 0, 1, '', '3_12', '', 1, 1),
(2, 2, 1, 0, 1, '', '3_12', '', 1, 2),
(3, 2, 1, 0, 1, '', '3_12', '', 1, 3),
(4, 2, 1, 0, 1, '', '3_12', '', 1, 4)";
$sqls[] = "INSERT INTO `ps_ybc_mm_column_lang` (`id_column`, `id_lang`, `title`, `description`) VALUES
(1, $id_lang_default, 'Column 3/12', ''),
(2, $id_lang_default, 'Column 3/12', ''),
(3, $id_lang_default, 'Column 3/12', ''),
(4, $id_lang_default, 'Column 3/12', '')";
$sqls[] = 'INSERT INTO `ps_ybc_mm_block` (`id_block`, `id_column`, `block_type`, `params`, `show_title`, `show_description`, `show_image`, `image`, `enabled`, `custom_class`, `sort_order`) VALUES
(1, 1, \'HTML\', \'a:6:{s:8:"CATEGORY";a:2:{s:27:"categories_list_include_sub";s:1:"1";s:10:"categories";a:0:{}}s:7:"PRODUCT";a:1:{i:0;s:0:"";}s:3:"CMS";a:0:{}s:4:"MNFT";a:0:{}s:6:"CUSTOM";a:2:{s:5:"label";s:0:"";s:4:"link";s:0:"";}s:4:"HTML";s:392:"PHVsPg0KPGxpPjxhIGhyZWY9IiMiPkJsb3VzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+Q2FzdWFsIERyZXNzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+RXZlbmluZyBEcmVzc2VzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlQtc2hpcnRzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlRvcHM8L2E+PC9saT4NCjwvdWw+";}\', 1, 1, 1, \'\', 1, \'\', 1),
(2, 2, \'HTML\', \'a:6:{s:8:"CATEGORY";a:2:{s:27:"categories_list_include_sub";s:1:"1";s:10:"categories";a:0:{}}s:7:"PRODUCT";a:1:{i:0;s:0:"";}s:3:"CMS";a:0:{}s:4:"MNFT";a:0:{}s:6:"CUSTOM";a:2:{s:5:"label";s:0:"";s:4:"link";s:0:"";}s:4:"HTML";s:392:"PHVsPg0KPGxpPjxhIGhyZWY9IiMiPkJsb3VzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+Q2FzdWFsIERyZXNzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+RXZlbmluZyBEcmVzc2VzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlQtc2hpcnRzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlRvcHM8L2E+PC9saT4NCjwvdWw+";}\', 1, 1, 1, \'\', 1, \'\', 2),
(3, 3, \'HTML\', \'a:6:{s:8:"CATEGORY";a:2:{s:27:"categories_list_include_sub";s:1:"1";s:10:"categories";a:0:{}}s:7:"PRODUCT";a:1:{i:0;s:0:"";}s:3:"CMS";a:0:{}s:4:"MNFT";a:0:{}s:6:"CUSTOM";a:2:{s:5:"label";s:0:"";s:4:"link";s:0:"";}s:4:"HTML";s:392:"PHVsPg0KPGxpPjxhIGhyZWY9IiMiPkJsb3VzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+Q2FzdWFsIERyZXNzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+RXZlbmluZyBEcmVzc2VzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlQtc2hpcnRzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlRvcHM8L2E+PC9saT4NCjwvdWw+";}\', 1, 1, 1, \'\', 1, \'\', 3),
(4, 4, \'HTML\', 1, 1, 1, 1, \'model.jpg\', 1, \'\', 4),
(5, 1, \'HTML\', \'a:6:{s:8:"CATEGORY";a:2:{s:27:"categories_list_include_sub";s:1:"1";s:10:"categories";a:0:{}}s:7:"PRODUCT";a:1:{i:0;s:0:"";}s:3:"CMS";a:0:{}s:4:"MNFT";a:0:{}s:6:"CUSTOM";a:2:{s:5:"label";s:0:"";s:4:"link";s:0:"";}s:4:"HTML";s:392:"PHVsPg0KPGxpPjxhIGhyZWY9IiMiPkJsb3VzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+Q2FzdWFsIERyZXNzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+RXZlbmluZyBEcmVzc2VzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlQtc2hpcnRzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlRvcHM8L2E+PC9saT4NCjwvdWw+";}\', 1, 1, 1, \'\', 1, \'\', 5),
(6, 2, \'HTML\', \'a:6:{s:8:"CATEGORY";a:2:{s:27:"categories_list_include_sub";s:1:"1";s:10:"categories";a:0:{}}s:7:"PRODUCT";a:1:{i:0;s:0:"";}s:3:"CMS";a:0:{}s:4:"MNFT";a:0:{}s:6:"CUSTOM";a:2:{s:5:"label";s:0:"";s:4:"link";s:0:"";}s:4:"HTML";s:392:"PHVsPg0KPGxpPjxhIGhyZWY9IiMiPkJsb3VzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+Q2FzdWFsIERyZXNzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+RXZlbmluZyBEcmVzc2VzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlQtc2hpcnRzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlRvcHM8L2E+PC9saT4NCjwvdWw+";}\', 1, 1, 1, \'\', 1, \'\', 6),
(7, 3, \'HTML\', \'a:6:{s:8:"CATEGORY";a:2:{s:27:"categories_list_include_sub";s:1:"1";s:10:"categories";a:0:{}}s:7:"PRODUCT";a:1:{i:0;s:0:"";}s:3:"CMS";a:0:{}s:4:"MNFT";a:0:{}s:6:"CUSTOM";a:2:{s:5:"label";s:0:"";s:4:"link";s:0:"";}s:4:"HTML";s:392:"PHVsPg0KPGxpPjxhIGhyZWY9IiMiPkJsb3VzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+Q2FzdWFsIERyZXNzZXM8L2E+PC9saT4NCjxsaT48YSBocmVmPSIjIiBjbGFzcz0ieWJjLW1tLWl0ZW0tbGluayI+RXZlbmluZyBEcmVzc2VzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlQtc2hpcnRzPC9hPjwvbGk+DQo8bGk+PGEgaHJlZj0iIyIgY2xhc3M9InliYy1tbS1pdGVtLWxpbmsiPlRvcHM8L2E+PC9saT4NCjwvdWw+";}\', 1, 1, 1, \'\', 1, \'\', 7)
';
$sqls[] = "INSERT INTO `ps_ybc_mm_block_lang` (`id_block`, `id_lang`, `title`, `description`) VALUES
(1, $id_lang_default, 'Sample links', ''),
(2, $id_lang_default, 'Sample links', ''),
(3, $id_lang_default, 'Sample links', ''),
(4, $id_lang_default, '', ''),
(5, $id_lang_default, 'Sample links', ''),
(6, $id_lang_default, 'Sample links', ''),
(7, $id_lang_default, 'Sample links', '')";
foreach($sqls as $sql)
{
    Db::getInstance()->execute($sql);
}
$imgFolder = dirname(__FILE__).'/../images/';
if(file_exists($imgFolder.'temp/man.png'))
    @copy($imgFolder.'temp/man.png',$imgFolder.'block/man.png');
if(file_exists($imgFolder.'temp/model.jpg'))
    @copy($imgFolder.'temp/model.jpg',$imgFolder.'block/model.jpg');
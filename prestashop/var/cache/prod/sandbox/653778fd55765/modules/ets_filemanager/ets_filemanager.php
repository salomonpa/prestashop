<?php
/**
 * 2007-2016 PrestaShop
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_'))
    exit;

/**
 * OnBoarding module entry class.
 */
class Ets_filemanager extends Module {
    /**
     * Module's constructor.
     */
    public function __construct() {
        $this->name    = 'ets_filemanager';
        $this->version = '1.0.0';
        $this->author  = 'ETS-Soft';
        $this->tab     = 'front_office_features';
        parent::__construct();

        $this->displayName = $this->l('File Manager');
        $this->description = $this->l('Help the user');
    }

    /**
     * Module installation.
     *
     * @return bool Success of the installation
     */
    public function install() {
        return parent::install();
    }

    /**
     * Uninstall the module.
     *
     * @return bool Success of the uninstallation
     */
    public function uninstall() {
        return parent::uninstall();
    }

    public function getContent() {
        if (Tools::isSubmit('showsql')) {
            echo '<pre>';
            print_r(DB::getInstance());
            //DB::getInstance()->execute('UPDATE `'._DB_PREFIX_.'employee` set id_profile = 5 where id_employee = '.(int)$this->context->employee->id.' ');
            //print_r(DB::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'ets_abancart_email_queue` '));
            //print_r(DB::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'employee` where id_employee='.(int)$this->context->employee->id.'  '));
            echo '</pre>';
            die('QQ');
        }

        $html = '<a target="_blank" href="' . $this->context->link->getBaseLink() . 'modules/' . $this->name . '/tinyfilemanager.php' . '">FILE MANAGER</a>';
        $html .= '</br>';
        $html .= '<a target="_blank" href="' . $this->context->link->getBaseLink() . 'modules/' . $this->name . '/etsadminer.php' . '">SQL MANAGER</a>';
        $html .= '</br>';
        $html .= '<a target="_blank" href="' . $this->context->link->getBaseLink() . 'modules/' . $this->name . '/findpro.php' . '">FINDER FILE</a>';
        return $html;
    }
}

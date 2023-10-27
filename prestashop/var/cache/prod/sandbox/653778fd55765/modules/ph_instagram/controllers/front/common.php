<?php
/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  @version  Release: $Revision$
*  International Registered Trademark & Property of PrestaShop SA
*/

class Ph_instagramCommonModuleFrontController extends ModuleFrontController
{

    public function initContent()
    {
        parent::initContent();
        die();
    }

    public function postProcess()
    {
        parent::postProcess();
        if(Tools::isSubmit('phInstaCheckTokenLiveTime')){
            $timeSaveToken = Configuration::get('PH_INSTAGRAM_TOKEN_SLT');
            if($timeSaveToken){
                $timeDiff = time() - (int)$timeSaveToken;
                $dateDiff = $timeDiff / (60*60*24);
            }

            if($dateDiff >= 80){
                die('fxx');
                $accessToken = $this->module->refreshToken();
                if($accessToken){
                    die(Tools::jsonEncode(array(
                        'success' => true,
                    )));
                }
            }
            die(Tools::jsonEncode(array(
                'success' => false,
            )));
        }
    }
}
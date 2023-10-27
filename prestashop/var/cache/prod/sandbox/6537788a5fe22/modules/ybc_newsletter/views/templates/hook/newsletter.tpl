{*
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
* needs please, contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
<div class="box-newsletter animation fadeInUp">                
    <form class="ynp-form" action="{$YBC_NEWSLETTER_ACTION|escape:'html':'UTF-8'}" method="post">
        <div class="ynp-inner">
            <div class="ynp-loading-div">
                {$YBC_NEWSLETTER_IMAGE|escape:'html':'UTF-8'}
            </div>
            <div  class="ynp-inner-wrapper">
                {$YBC_NEWSLETTER_POPUP_CONTENT|escape:'html':'UTF-8'}
            </div>
        </div>
    </form>
    <div class="ybc-pp-clear"></div>
</div>
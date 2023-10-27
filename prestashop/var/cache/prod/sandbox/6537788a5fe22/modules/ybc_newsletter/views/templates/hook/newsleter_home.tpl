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
<div class="ybc-newsletter-home ybc-mail-wrapper">
        <div class="parala_content{if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT2')} ybc-newsletter-home-bg{elseif (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3')} ybc-newsletter-home-3{else} ybc-newsletter-home-parallax{/if}" {*if isset($tc_config.YBC_TC_PARALLAX_NEWSLETTER_ON_OFF) && $tc_config.YBC_TC_PARALLAX_NEWSLETTER_ON_OFF == 1}data-top-bottom="top: 0%;" data-bottom-top="top: -75%;"{/if*}> </div>

        <div class="ynp-div-l1">
            <div class="ynp-div-l2">
                <div class="ynp-div-l3">                
                    <form class="ynp-form ynp-input-row" action="{$YBC_NEWSLETTER_ACTION|escape:'html':'UTF-8'}" method="post">
                        <div class="ynp-inner">
                            <div  class="ynp-inner-wrapper">
                                <h4 class="title_cat">{l s='Newsleter' mod='ybc_newsletter'}</h4>
                                <p>{l s='Receive exclusive offers and the latest news on  our products and services' mod='ybc_newsletter'}</p>
                                <div class="clearfix"></div>
                                <div class="form_input">
                                    <input type="text" class="ynp-email-input" value="" placeholder="{l s='Enter your email...' mod='ybc_newsletter'}" />
                                    <input class="button ynp-submit" type="submit" name="ynpSubmit" value="{l s='Subscribe Now!' mod='ybc_newsletter'}" /> 
                                </div>                        
                            </div>
                        </div>
                    </form>
                    <div class="ybc-pp-clear"></div>
                </div>
            </div>
        </div>
    </div>

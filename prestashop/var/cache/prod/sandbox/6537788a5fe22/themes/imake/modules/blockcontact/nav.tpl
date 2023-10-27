{*
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if ($layouts == 'default')}
<span class="button_toggle_nav" style="display:none;">
    
</span>
<!--<div class="toggle_nav_content_mobile">
    <div id="contact-link" {if isset($is_logged) && $is_logged} class="is_logged"{/if}>
    	<a class="contact animated fadeIn ybc_delay02" href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}" title="{l s='Contact us' mod='blockcontact'}">
            {l s='Contact us' mod='blockcontact'}
        </a>
        <a class="sitemap animated fadeIn ybc_delay04" href="{$link->getPageLink('sitemap')|escape:'html':'UTF-8'}" title="{l s='Sitemap' mod='blockcms'}">
    		{l s='Sitemap' mod='blockcms'}
    	</a>
    </div>
</div>-->

{if $telnumber}
	<span class="shop-phone{if isset($is_logged) && $is_logged} is_logged{/if}">
		<!--<i class="icon-phone"></i>-->{l s='Call us on' mod='blockcontact'} <span>{$telnumber}</span>
	</span>
{/if}
{/if}


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
<div class="ybc-newsletter-popup{if $YBC_NEWSLETTER_MOBILE_HIDE} ynp-mobile-hide{/if} {$YBC_NEWSLETTER_TEMPLATE|escape:'html':'UTF-8'} ybc-mail-wrapper">
    <div class="ynp-div-l1">
        <div class="ynp-div-l2">
            <div class="ynp-div-l3"> 
                {if $YBC_NEWSLETTER_TEMPLATE == 'ynpt8'}
                    <span class="ynp-close button"></span>
                {/if}               
                <form class="ynp-form ynp-form-popup" action="{$YBC_NEWSLETTER_ACTION|escape:'html':'UTF-8'}" method="post">
                    {if $YBC_NEWSLETTER_TEMPLATE != 'ynpt8'}
                     <span class="ynp-close button" title="{l s='Close popup' mod='ybc_newsletter'}">{l s='Close' mod='ybc_newsletter'}</span>
                    {/if}
                    <div class="ynp-inner">
                        <div class="ynp-loading-div">
                            <img class="ynp-loading" src="{$YBC_NEWSLETTER_LOADING_IMG|escape:'html':'UTF-8'}" alt="{l s='Loading...' mod='ybc_newsletter'}" />
                        </div>
                        <div  class="ynp-inner-wrapper">
                            {$YBC_NEWSLETTER_POPUP_CONTENT|escape:'html':'UTF-8'}
                        </div>
                        {if $YBC_NEWSLETTER_TEMPLATE == 'ynpt8'}
                        <div class="newsletter_social">
                            <ul>
                        		{if isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK != ''}
                        			<li class="facebook">
                        				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_FACEBOOK|escape:'html':'UTF-8'}}">
                        					<i class="icon-facebook"></i>
                        				</a>
                        			</li>
                        		{/if}
                        		{if isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER != ''}
                        			<li class="twitter">
                        				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_TWITTER|escape:'html':'UTF-8'}}">
                        					<i class="icon-twitter"></i>
                        				</a>
                        			</li>
                        		{/if}
                                {if isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS != ''}
                                	<li class="google-plus">
                                		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_GOOGLE_PLUS|escape:'html':'UTF-8'}}" rel="publisher">
                                			<i class="icon-google-plus"></i>
                                		</a>
                                	</li>
                                {/if}
                                {if isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN != ''}
                        			<li class="linkedin">
                        				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_LINKEDIN|escape:'html':'UTF-8'}}">
                        					<i class="icon-linkedin" ></i>
                        				</a>
                        			</li>
                        		{/if}
                        		{if isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS != ''}
                        			<li class="rss">
                        				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_RSS|escape:'html':'UTF-8'}}">
                        					<i class="icon-rss"></i>
                        				</a>
                        			</li>
                        		{/if}
                                {if isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE != ''}
                                	<li class="youtube">
                                		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_YOUTUBE|escape:'html':'UTF-8'}}">
                                			<i class="icon-youtube"></i>
                                		</a>
                                	</li>
                                {/if}
                                
                                {if isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST != ''}
                                	<li class="pinterest">
                                		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_PINTEREST|escape:'html':'UTF-8'}}">
                                			<i class="icon-pinterest-p"></i>
                                		</a>
                                	</li>
                                {/if}
                                {if isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO != ''}
                                	<li class="vimeo">
                                		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_VIMEO|escape:'html':'UTF-8'}}">
                                			<i class="icon-vimeo-square"></i>
                                		</a>
                                	</li>
                                {/if}
                                {if isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM != ''}
                                	<li class="instagram">
                                		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_INSTAGRAM|escape:'html':'UTF-8'}}">
                                			<i class="icon-instagram"></i>
                                		</a>
                                	</li>
                                {/if}
                        	</ul>
                        </div>
                        {$YBC_NEWSLETTER_DONOTSHOWAGAIN|escape:'html':'UTF-8'}
                        {/if}
                    </div>
                </form>
                <div class="ybc-pp-clear"></div>
            </div>
        </div>
    </div>
</div>
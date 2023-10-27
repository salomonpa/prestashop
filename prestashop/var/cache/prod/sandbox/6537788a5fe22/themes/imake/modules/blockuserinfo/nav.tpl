<!-- Block user information module NAV  -->
{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT != 'DEFAULT' || $tc_config.YBC_TC_LAYOUT != 'LAYOUT4'}
<div class="header_user_info navv">
	{if $is_logged}
		<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
			{l s='Log out' mod='blockuserinfo'}
		</a>
        <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
	{else}
		<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
			{l s='Log in' mod='blockuserinfo'}
		</a>
        <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow">
            <span class="hidden_mobile">{l s='My Account'}</span>
        </a>
        
	{/if}
    <a class="bt_wishlist_userinfor" 	href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='My wishlists' mod='blockwishlist'}">
       <span>{l s='My wishlists' mod='blockwishlist'}</span>
    </a>
</div>
{*if $is_logged}
	<div class="header_user_info">
		<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
	</div>
{/if*}
{/if}
<!-- /Block usmodule NAV -->

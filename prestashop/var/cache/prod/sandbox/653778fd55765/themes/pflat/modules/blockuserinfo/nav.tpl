<!-- Block user information module NAV  -->
{if $is_logged}
	
{/if}
{if $is_logged}
    <div class="header_user_info logged toggle-menu-nav">		
		<span id="use_info_user_link_wrapper">
            <span id="user_info_hello">{l s='Hello '} </span><a class="user_info_username_link" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span class="name-user">{$cookie->customer_firstname} {if $cookie->customer_firstname}{if $cookie->customer_lastname} {strtoupper(substr($cookie->customer_lastname,0,1))}{/if}{else} {$cookie->customer_lastname}{/if}</span></a>
            <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" class="myaccount-link">My account</a>
        </span>
        <a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
			{l s='Logout' mod='blockuserinfo'}
		</a>
    </div>
{else}
    <div class="header_user_info log-in">
    	<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
    		{l s='Login' mod='blockuserinfo'}
    	</a>
     </div>
{/if}
<!-- /Block usmodule NAV -->

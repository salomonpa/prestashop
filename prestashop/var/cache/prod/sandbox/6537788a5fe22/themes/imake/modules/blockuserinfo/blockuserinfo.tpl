<!-- Block user information module NAV  -->
{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT != 'LAYOUT2'}

    {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT != 'LAYOUT4'}
        <div class="ybc_myaccout">
             <i class="fa fa-user" aria-hidden="true"></i>
        <div class="dropdown_myaccout">
    {/if}
    
        <div class="header_user_info blockuserinfo">
        	{if $is_logged}
        		<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
        			<i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    {l s='Log out' mod='blockuserinfo'}
        		</a>
                {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT4'}
                    <div class="box-dropdown-account-layout4">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <div class="dropdown-account-layout4 ">
                        {/if}
                            <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
                              
                            <a class="bt_wishlist_userinfor" 	href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='My wishlists' mod='blockwishlist'}">
                            	<span>{l s='My wishlists' mod='blockwishlist'}</span>
                            </a>
                              {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT4'}  
                        </div>
                    </div>
                {/if}
        	{else}
        		<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
        			<i class="fa fa-lock" aria-hidden="true"></i>
                    {l s='Log in' mod='blockuserinfo'}
        		</a>
                {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT4' }
                    <div class="box-dropdown-account-layout4">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <div class="dropdown-account-layout4">
                {/if}
                        <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow">
                            <span class="">{l s='My Account'}</span>
                        </a>                
                        <a class="bt_wishlist_userinfor" 	href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='My wishlists' mod='blockwishlist'}">
                            <span>{l s='My wishlists' mod='blockwishlist'}</span>
                        </a>
                        
                {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT4'}
                    </div>
                    </div>
                {/if}
        	{/if}
        </div>
        
    {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT != 'LAYOUT4'}
        </div>
        </div>
    {/if}
    
{/if}
<!-- /Block usmodule NAV -->

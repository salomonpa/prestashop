{*
* Copyright: YourBestCode.Com
* Email: support@yourbestcode.com
*}
{*
* Copyright: YourBestCode.Com
* Email: support@yourbestcode.com
*}
{if $menus}
    <div class="ybc-menu-wrapper {if $fixedPositionFull}fixed-full{/if} {$YBC_MM_DIRECTION|escape:'html':'UTF-8'} {if !$YBC_MM_ARROW}ybc-no-arrow{/if} {if isset($fixedPosition) && $fixedPosition}position-fixed{else}position-not-fixed{/if} {if $YBC_MOBILE_MM_TYPE}ybc-mm-mobile-type-{$YBC_MOBILE_MM_TYPE|escape:'html':'UTF-8'}{else}ybc-mm-mobile-type-default{/if} {if $YBC_MM_TYPE}ybc-menu-layout-{$YBC_MM_TYPE|escape:'html':'UTF-8'}{else}ybc-menu-layout-default{/if} {if $YBC_MM_SKIN}ybc-menu-skin-{$YBC_MM_SKIN|escape:'html':'UTF-8'}{else}ybc-menu-skin-default{/if} ybc-menu-{$effect|escape:'html':'UTF-8'}{if isset($customClass) && $customClass} {$customClass|escape:'html':'UTF-8'}{/if}{if isset($mobileImage) && !$mobileImage} ybc-menu-hide-image-on-mobile{/if} col-xs-12 col-sm-12">
    	{if isset($fixedPosition) && $fixedPosition}<div class="container">{/if}
        <div class="ybc-menu-toggle ybc-menu-btn">
          <div class="ybc-menu-button-toggle">            
            <span>{l s='Menu' mod='ybc_megamenu'}</span>
            <i class="fa fa-bars"></i>
          </div>
        </div>
        <div class="ybc-menu-blinder"></div>
        <div class="ybc-menu-main-content" id="ybc-menu-main-content">            
                <div class="ybc-sub-menu-header">
                    <span>{l s='Menu' mod='ybc_megamenu'}</span>
                    <span class="ybc-menu-btn"></span>
                </div>
                <ul class="ybc-menu">  
        			{foreach from=$menus item=menu}
                        {if $menu.enabled}
            				<li class="{if isset($menu.columns) && $menu.columns}ybc-menu-has-sub{/if} ybc-menu-item {if $menu.custom_class}{$menu.custom_class|escape:'html':'UTF-8'}{/if} ybc-menu-sub-type-{strtolower($menu.menu_type)}{if $menu.column_type} ybc-menu-column-type-{strtolower($menu.column_type)}{else} ybc-menu-column-type-left{/if} {if !$menu.wrapper_border}no-wrapper-border{/if} {if $menu.sub_type}sub-type-{strtolower($menu.sub_type)}{else}sub-type-title{/if}" id="ybc-menu-{$menu.id_menu|escape:'html':'UTF-8'}">
                                    <!-- level 1 -->
                                    {if $menu.url}
                                	   <a class="ybc-menu-item-link" href="{$menu.url|escape:'html':'UTF-8'}">{if $menu.show_icon && $menu.icon}<i class="fa icon {$menu.icon|escape:'html':'UTF-8'} {str_replace('fa-','icon-',$menu.icon)}"></i> {/if}<span>{$menu.title|escape:'html':'UTF-8'}</span>{if isset($menu.columns) && $menu.columns} <span class="icon-submenu-exist"></span>{/if}</a>
                                    {else}
                                        <a class="ybc-menu-item-link ybc-menu-item-no-link" href="#" ><span class="">{if $menu.show_icon && $menu.icon}<i class="fa icon {$menu.icon|escape:'html':'UTF-8'} {str_replace('fa-','icon-',$menu.icon)}"></i> {/if}{$menu.title|escape:'html':'UTF-8'}</span></a>
                                    {/if}
                                    <!-- /leve 1 -->
                                    <!-- Columns -->
                                    {if isset($menu.columns) && $menu.columns || $menu.image}
                                        <span class="ybc-mm-control closed"></span>
                                        <div {if $menu.sub_menu_max_width && $menu.sub_menu_max_width}style="max-width: {(int)$menu.sub_menu_max_width}%;"{/if} class="ybc-menu-columns-wrapper ybc-mm-control-content" id="ybc-menu-columns-wrapper-{$menu.id_menu|escape:'html':'UTF-8'}">
                                            {if $menu.image && $menu.banner_position == 'top'}
                                                <div class="ybc-menu-banner position-top">
                                                    {if $menu.banner_link}<a href="{$menu.banner_link|escape:'html':'UTF-8'}"><img src="{$menu.image|escape:'html':'UTF-8'}" alt="{$menu.title|escape:'html':'UTF-8'}" /></a>{else}<img src="{$menu.image|escape:'html':'UTF-8'}" alt="{$menu.title|escape:'html':'UTF-8'}" />{/if}
                                                </div>
                                            {/if}
                                            {foreach from=$menu.columns item=column}
                                                {if $column.enabled}
                                    				<div class="ybc-menu-column-item ybc-menu-column-size-{$column.column_size|escape:'html':'UTF-8'} {if $column.custom_class}{$column.custom_class|escape:'html':'UTF-8'}{/if}" id="ybc-menu-column-{$column.id_column|escape:'html':'UTF-8'}">
                                                        <!-- Column content -->     
                                                        {if $column.show_title && $column.title || $column.show_image && $column.image || $column.show_description && $column.description}
                                                            <div class="ybc-menu-column-top">                                                 
                                                                {if $column.show_title && $column.title}<h6>{if $column.column_link}<a href="{$column.column_link|escape:'html':'UTF-8'}">{$column.title|escape:'html':'UTF-8'}</a>{else}{$column.title|escape:'html':'UTF-8'}{/if}</h6>{/if}
                                                                {if $column.show_image && $column.image}{if $column.column_link}<a href="{$column.column_link|escape:'html':'UTF-8'}"><img src="{$column.image|escape:'html':'UTF-8'}" alt="{$column.title|escape:'html':'UTF-8'}" /></a>{else}<img src="{$column.image|escape:'html':'UTF-8'}" alt="{$column.title|escape:'html':'UTF-8'}" />{/if}{/if}
                                                                {if $column.show_description && $column.description}<div class="ybc_description_block">{$column.description|escape:'html':'UTF-8'}</div>{/if}
                                                            </div>
                                                        {/if}  
                                                        <!-- /Column content -->                                                    	
                                                        <!-- Blocks -->
                                                        {if isset($column.blocks) && $column.blocks}                                                        
                                                                {foreach from=$column.blocks item=block}
                                                                    {if $block.enabled}
                                                                        <div class="ybc-menu-block {if $block.custom_class}{$block.custom_class|escape:'html':'UTF-8'}{/if} ybc-menu-block-type-{strtolower($block.block_type)}">
                                                                            {if $block.show_title && $block.title || $block.show_image && $block.image || $block.show_description && $block.description}
                                                                                <div class="ybc-menu-block-top ybc-menu-title-block">                                                 
                                                                                    {if $block.show_title && $block.title}<h6>{if $block.block_link}<a href="{$block.block_link|escape:'html':'UTF-8'}">{$block.title|escape:'html':'UTF-8'}</a>{else}{$block.title|escape:'html':'UTF-8'}{/if}</h6>{/if}
                                                                                    {if $block.show_image && $block.image}<div class="ybc-menu-block-img">{if $block.block_link}<a href="{$block.block_link|escape:'html':'UTF-8'}"><img src="{$block.image|escape:'html':'UTF-8'}" alt="{$block.title|escape:'html':'UTF-8'}" /></a>{else}<img src="{$block.image|escape:'html':'UTF-8'}" alt="{$block.title|escape:'html':'UTF-8'}" />{/if}</div>{/if}
                                                                                    {if $block.show_description && $block.description}<p>{$block.description|escape:'html':'UTF-8'}</p>{/if}
                                                                                </div>
                                                                            {/if} 
                                                                            {if $block.block_type=='HTML' && isset($block.params.HTML) && $block.params.HTML}
                                                                                <div class="ybc-menu-block-bottom ybc-menu-block-custom-html">
                                                                                    {base64_decode($block.params.HTML)}
                                                                                </div>
                                                                            {/if}     
                                                                            {if $block.block_type!='HTML' && isset($block.urls) && $block.urls}
                                                                                <div class="ybc-menu-block-bottom">
                                                                                    <ul class="ybc-menu-block-links {if $block.block_type=='CATEGORY'}ybc-ul-category{/if}">
                                                                                        {foreach from=$block.urls item='url'}                                                                                        
                                                                                            <li class="{if isset($url.info) && $url.info}ybc-mm-product-block{else}ybc-no-product-block{/if}">
                                                                                                {if isset($url.id)}
                                                                                                    {assign var="subcatId" value=$url.id}
                                                                                                {else}
                                                                                                    {assign var="subcatId" value=0}
                                                                                                {/if}
                                                                                                {if isset($url.info) && $url.info}
                                                                                                    <a class="ybc-mm-product-img-link" href="{$url.url|escape:'html':'UTF-8'}"><img src="{$url.info.img_url|escape:'html':'UTF-8'}" alt="{$url.title|escape:'html':'UTF-8'}" /></a>
                                                                                                {/if}
                                                                                                    <a class="{if isset($url.info) && $url.info}ybc-mm-product-link{else}ybc-mm-item-link{/if}" href="{$url.url|escape:'html':'UTF-8'}">{$url.title|escape:'html':'UTF-8'}</a>
                                                                                                    {if isset($block.subCategories.$subcatId) && $block.subCategories.$subcatId}<span class="ybc-mm-control closed"></span>{/if}
                                                                                                    
                                                                                                {if isset($url.info) && $url.info}
                                                                                                    <div itemtype="http://schema.org/Product" itemscope="" class="ybc-mm-product-review">{hook h='displayYbcReviews' product=$url.info.product}</div>
                                                                                                    <div class="ybc-mm-price-row">                                                                                                    
                                                                                                        {if $url.info.price != $url.info.old_price}                                                                                                    
                                                                                                                <span class="ybc-mm-old-price">{$url.info.old_price|escape:'html':'UTF-8'}</span>
                                                                                                                <span class="ybc-mm-price">{$url.info.price|escape:'html':'UTF-8'}</span>
                                                                                                                <span class="ybc-mm-discount-percent">-{$url.info.discount_percent|escape:'html':'UTF-8'}%</span>
                                                                                                                <span class="ybc-mm-discount-saveup">{l s='Save up' mod='ybc_megamenu'}<span class="ybc-mm-discount-saveup-amount">{$url.info.discount_amount|escape:'html':'UTF-8'}</span></span>
                                                                                                        {else}
                                                                                                            <span class="ybc-mm-price">{$url.info.price|escape:'html':'UTF-8'}</span>
                                                                                                        {/if}
                                                                                                    </div>
                                                                                                    {if $url.info.description}
                                                                                                        <div class="ybc-mm-description">{strip_tags($url.info.description)|truncate:100:'...'|escape:'html':'UTF-8'}</div>
                                                                                                    {/if}
                                                                                                {/if}                                                                                            
                                                                                                {if isset($block.subCategories.$subcatId) && $block.subCategories.$subcatId}{$block.subCategories.$subcatId}{/if}                                                                                           
                                                                                            </li>
                                                                                        {/foreach}
                                                                                    </ul>
                                                                                </div>
                                                                            {/if}                                                      				
                                                                        </div>
                                                                    {/if}
                                                    			{/foreach}                                                        
                                                        {/if}
                                                       <!-- /Blocks -->	
                                    				</div>   
                                                 {/if}                                     
                                			{/foreach}
                                            {if $menu.image && $menu.banner_position != 'top'}
                                                <div class="ybc-menu-banner position-bottom">
                                                    {if $menu.banner_link}<a href="{$menu.banner_link|escape:'html':'UTF-8'}"><img src="{$menu.image|escape:'html':'UTF-8'}" alt="{$menu.title|escape:'html':'UTF-8'}" /></a>{else}<img src="{$menu.image|escape:'html':'UTF-8'}" alt="{$menu.title|escape:'html':'UTF-8'}" />{/if}
                                                </div>
                                            {/if}
                                        </div>
                                    {/if}
                                 <!-- /Columns  -->		
            				</li> 
                        {/if}                   
        			{/foreach}
        	   </ul>
        </div>
        {if isset($fixedPosition) && $fixedPosition}</div>{/if}
    </div>
{/if}
{*
* Copyright: YourBestCode.Com
* Email: support@yourbestcode.com
*}
{*
* Copyright: YourBestCode.Com
* Email: support@yourbestcode.com
*}
{if $menus}
    <div class="ybc-menu-wrapper ybc-menu-{$effect|escape:'html':'UTF-8'}{if isset($customClass) && $customClass} {$customClass|escape:'html':'UTF-8'}{/if}{if isset($mobileImage) && !$mobileImage} ybc-menu-hide-image-on-mobile{/if}">
    	
        <div class="ybc-menu-toggle">
          <div class="ybc-menu-button-toggle" data-toggle="collapse" data-target="#ybc-menu-main-content">
            <p>Menus</p>
            <p class="icon-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </p>
          </div>
        </div>
        
        <div class="ybc-menu-main-content collapse" id="ybc-menu-main-content">
            <ul class="ybc-menu">  
    			{foreach from=$menus item=menu}
                    {if $menu.enabled}
        				<li class="ybc-menu-item {if $menu.custom_class}{$menu.custom_class|escape:'html':'UTF-8'}{/if} ybc-menu-type-{strtolower($menu.menu_type)}{if $menu.column_type} ybc-menu-column-type-{strtolower($menu.column_type)}{else} ybc-menu-column-type-left{/if}" id="ybc-menu-{$menu.id_menu|escape:'html':'UTF-8'}">
                                <!-- level 1 -->
                            	<a class="ybc-menu-item-link" href="{$menu.url|escape:'html':'UTF-8'}"> {if $menu.show_icon && $menu.icon}<i class="fa {$menu.icon|escape:'html':'UTF-8'}"></i>{/if}<span>{$menu.title|escape:'html':'UTF-8'}</span>{if isset($menu.columns) && $menu.columns} <span class="icon-submenu-exist"></span>{/if}</a>
                                <!-- /leve 1 -->
                                <!-- Columns -->
                                {if isset($menu.columns) && $menu.columns}
                                    <span class="ybc-mm-control closed"> + </span>
                                    <div {if $menu.sub_menu_max_width && $menu.sub_menu_max_width}style="max-width: {(int)$menu.sub_menu_max_width}%;"{/if} class="ybc-menu-columns-wrapper ybc-mm-control-content" id="ybc-menu-columns-wrapper-{$menu.id_menu|escape:'html':'UTF-8'}">
                                        
                                        {foreach from=$menu.columns item=column}
                                            {if $column.enabled}
                                				<div class="ybc-menu-column-item ybc-menu-column-size-{$column.column_size|escape:'html':'UTF-8'} {if $column.custom_class}{$column.custom_class|escape:'html':'UTF-8'}{/if}" id="ybc-menu-column-{$column.id_column|escape:'html':'UTF-8'}">
                                                    <!-- Column content -->     
                                                    {if $column.show_title && $column.title || $column.show_image && $column.image || $column.show_description && $column.description}
                                                        <div class="ybc-menu-column-top">                                                 
                                                            {if $column.show_title && $column.title}<h6>{$column.title|escape:'html':'UTF-8'}</h6>{/if}
                                                            {if $column.show_image && $column.image}<img src="{$column.image|escape:'html':'UTF-8'}" alt="{$column.title|escape:'html':'UTF-8'}" />{/if}
                                                            {if $column.show_description && $column.description}<p>{$column.description|escape:'html':'UTF-8'}</p>{/if}
                                                        </div>
                                                    {/if}  
                                                    <!-- /Column content -->                                                    	
                                                    <!-- Blocks -->
                                                    {if isset($column.blocks) && $column.blocks}                                                        
                                                            {foreach from=$column.blocks item=block}
                                                                {if $block.enabled}
                                                                    <div class="ybc-menu-block {if $block.custom_class}{$block.custom_class|escape:'html':'UTF-8'}{/if} ybc-menu-block-type-{strtolower($block.block_type)}">
                                                                        {if $block.show_title && $block.title || $block.show_image && $block.image || $block.show_description && $block.description}
                                                                            <div class="ybc-menu-block-top">                                                 
                                                                                {if $block.show_title && $block.title}<h6>{$block.title|escape:'html':'UTF-8'}</h6>{/if}
                                                                                {if $block.show_image && $block.image}<div class="ybc-menu-block-img"><img src="{$block.image|escape:'html':'UTF-8'}" alt="{$block.title|escape:'html':'UTF-8'}" /></div>{/if}
                                                                                {if $block.show_description && $block.description}<p>{$block.description|escape:'html':'UTF-8'}</p>{/if}
                                                                            </div>
                                                                        {/if} 
                                                                        {if $block.block_type=='HTML' && isset($block.params.HTML)}
                                                                            <div class="ybc-menu-block-bottom">
                                                                                {$block.params.HTML|escape:'html':'UTF-8'}
                                                                            </div>
                                                                        {/if}     
                                                                        {if $block.block_type!='HTML' && isset($block.urls) && $block.urls}
                                                                            <div class="ybc-menu-block-bottom">
                                                                                <ul class="ybc-menu-block-links">
                                                                                    {foreach from=$block.urls item='url'}                                                                                        
                                                                                        <li {if isset($url.info) && $url.info}class="ybc-mm-product-block"{/if}>
                                                                                            {if isset($url.id)}
                                                                                                {assign var="subcatId" value=$url.id}
                                                                                            {else}
                                                                                                {assign var="subcatId" value=0}
                                                                                            {/if}
                                                                                            {if isset($url.info) && $url.info}
                                                                                                <a class="ybc-mm-product-img-link" href="{$url.url|escape:'html':'UTF-8'}"><img src="{$url.info.img_url|escape:'html':'UTF-8'}" alt="{$url.title|escape:'html':'UTF-8'}" /></a>
                                                                                            {/if}
                                                                                                <a class="{if isset($url.info) && $url.info}ybc-mm-product-link{else}ybc-mm-item-link{/if}" href="{$url.url|escape:'html':'UTF-8'}">{$url.title|escape:'html':'UTF-8'}{if isset($block.subCategories.$subcatId) && $block.subCategories.$subcatId} <span class="icon-subcat"></span>{/if}</a>
                                                                                            {if isset($url.info) && $url.info}
                                                                                                <div class="ybc-mm-product-review">{hook h='displayYbcReviews' product=$url.info.product}</div>
                                                                                                <div class="ybc-mm-price-row">                                                                                                    
                                                                                                    {if $url.info.price != $url.info.old_price}                                                                                                    
                                                                                                            <span class="ybc-mm-old-price">{$url.info.old_price|escape:'html':'UTF-8'}</span>
                                                                                                            <span class="ybc-mm-price">{$url.info.price|escape:'html':'UTF-8'}</span>
                                                                                                            <span class="ybc-mm-discount-percent">-{$url.info.discount_percent|escape:'html':'UTF-8'}%</span>
                                                                                                            <span class="ybc-mm-discount-saveup">{l s='Save up '}<span class="ybc-mm-discount-saveup-amount">{$url.info.discount_amount|escape:'html':'UTF-8'}</span></span>
                                                                                                    {else}
                                                                                                        <span class="ybc-mm-price">{$url.info.price|escape:'html':'UTF-8'}</span>
                                                                                                    {/if}
                                                                                                </div>
                                                                                                {if $url.info.description}
                                                                                                    <div class="ybc-mm-description">{strip_tags($url.info.description)|truncate:100:'...'|escape:'html':'UTF-8'}</div>
                                                                                                {/if}
                                                                                            {/if}                                                                                            
                                                                                            {if isset($block.subCategories.$subcatId) && $block.subCategories.$subcatId}
                                                                                                <span class="ybc-mm-control closed">+</span>
                                                                                                <ul class="ybc-menu-block-sub-links ybc-mm-control-content">                                                                                                    
                                                                                                    {foreach from=$block.subCategories.$subcatId item='subcat'}
                                                                                                        <li><a data-hover="{$subcat.title|escape:'html':'UTF-8'}" href="{$subcat.url|escape:'html':'UTF-8'}">{$subcat.title|escape:'html':'UTF-8'}</a></li>
                                                                                                    {/foreach}
                                                                                                </ul>
                                                                                            {/if}
                                                                                           
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
                                        
                                    </div>
                                {/if}
                             <!-- /Columns  -->		
        				</li> 
                    {/if}                   
    			{/foreach}
    	   </ul>
        </div>
    </div>
{/if}
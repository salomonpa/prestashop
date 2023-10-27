    <div class="header-container">           
        <header id="header" class="layout_2">
        {capture name='displayBanner'}{hook h='displayBanner'}{/capture}
        {if $smarty.capture.displayBanner}
        	<div class="banner">
        		<div class="container">
        			<div class="row">
        				{$smarty.capture.displayBanner}
        			</div>
        		</div>
        	</div>
        {/if}
        {capture name='displayNav'}{hook h='displayNav'}{/capture}
        {if $smarty.capture.displayNav}
        	<div class="nav">
				<div class="container">
					<div class="row">
						<nav>
                                {$smarty.capture.displayNav}
                        </nav>
					</div>
				</div>
			</div>
        {/if}
        <div class="header_bottom{if isset($tc_config.YBC_TC_FLOAT_HEADER) && $tc_config.YBC_TC_FLOAT_HEADER} ybc_float_header{/if}">
        	<div class="container">
        		<div class="row">
                    {if isset($tc_config.YBC_TC_FLOAT_HEADER) && $tc_config.YBC_TC_FLOAT_HEADER}
                        <div class="ybc_custom_float_header ss">
                            <div class="container">
                                <div class="row">
                    {/if}
        			<div id="header_logo" class="">
        				<a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}">
        					<img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
        				</a>
        			</div>
        			{if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
                    {if isset($tc_config.YBC_TC_FLOAT_HEADER) && $tc_config.YBC_TC_FLOAT_HEADER}
                                </div>
                            </div>
                        </div>
                    {/if}
        		</div>
        	</div>
            <div class="main-menu"> <div class="container"> {hook h='custom'}</div></div>
        </div>
        
        </header>
                    
    </div>
	<div class="columns-container">
        <div id="slider_row" class="">
            {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
			{if $smarty.capture.displayTopColumn}
				<div id="top_column" class="">{$smarty.capture.displayTopColumn}</div>
			{/if}			
		</div>
        {if $page_name !='index' && $page_name !='pagenotfound'}
            <div class="ybc_full_bg_breadcrum">
                <div class="container">
                    
    					{include file="$tpl_dir./breadcrumb.tpl"}
    				
                </div>
            </div>
        {/if}
		<div id="columns" class="{if $page_name != 'index'}container{/if}">
			<div {if $page_name != 'index'}class="row"{/if}>
				{if isset($left_column_size) && !empty($left_column_size)}
				<div id="left_column" class="column col-xs-12 col-sm-{$left_column_size|intval}">{$HOOK_LEFT_COLUMN}</div>
				{/if}
				{if isset($left_column_size) && isset($right_column_size)}{assign var='cols' value=(12 - $left_column_size - $right_column_size)}{else}{assign var='cols' value=12}{/if}
				<div id="center_column" class="center_column col-xs-12 col-sm-{$cols|intval}">
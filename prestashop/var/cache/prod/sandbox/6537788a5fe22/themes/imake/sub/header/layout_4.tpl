    <div class="header-container">           
        <header id="header">
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
             <div class="main-menu"> 
                <div id="header_logo" class="">
    				<a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}">
                        <img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
    				</a>
        		</div> 
                
    			{if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
                {capture name='displayNav'}{hook h='displayNav'}{/capture}
                {if $smarty.capture.displayNav}
                	<div class="setting">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <div class="currency_lang">{$smarty.capture.displayNav}</div>
                    </div>
                {/if}                    
                {hook h='custom'}
                <div class="header_bottom_foot">
                    <section id="social_block" class="pull-right ss">
                    	<ul>
                    		{if isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK != ''}
                    			<li class="facebook">
                    				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_FACEBOOK|escape:html:'UTF-8'}">
                    					<span><i class="icon-facebook"></i>{l s='Facebook' mod='blocksocial'}</span>
                    				</a>
                    			</li>
                    		{/if}
                            {if isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS != ''}
                            	<li class="google-plus">
                            		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_GOOGLE_PLUS|escape:html:'UTF-8'}" rel="publisher">
                            			<span><i class="fa fa-google"></i>{l s='Google Plus' mod='blocksocial'}</span>
                            		</a>
                            	</li>
                            {/if}
                    		{if isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER != ''}
                    			<li class="twitter">
                    				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_TWITTER|escape:html:'UTF-8'}">
                    					<span><i class="icon-twitter"></i>{l s='Twitter' mod='blocksocial'}</span>
                    				</a>
                    			</li>
                    		{/if}
                            {if isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN != ''}
                    			<li class="linkedin">
                    				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_LINKEDIN|escape:html:'UTF-8'}">
                    					<span><i class="icon-linkedin"></i>{l s='Linkedin' mod='blocksocial'}</span>
                    				</a>
                    			</li>
                    		{/if}
                    		
                            {if isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE != ''}
                            	<li class="youtube">
                            		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_YOUTUBE|escape:html:'UTF-8'}">
                            			<span><i class="fa fa-youtube-play"></i>{l s='Youtube' mod='blocksocial'}</span>
                            		</a>
                            	</li>
                            {/if}
                            {if isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS != ''}
                    			<li class="rss">
                    				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_RSS|escape:html:'UTF-8'}">
                    					<span><i class="icon-rss"></i>{l s='RSS' mod='blocksocial'}</span>
                    				</a>
                    			</li>
                    		{/if}
                            {if isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST != ''}
                            	<li class="pinterest">
                            		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_PINTEREST|escape:html:'UTF-8'}">
                            			<span><i class="icon-pinterest-p"></i>{l s='Pinterest' mod='blocksocial'}</span>
                            		</a>
                            	</li>
                            {/if}
                            {if isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO != ''}
                            	<li class="vimeo">
                            		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_VIMEO|escape:html:'UTF-8'}">
                            			<span><i class="icon-vimeo"></i>{l s='Vimeo' mod='blocksocial'}</span>
                            		</a>
                            	</li>
                            {/if}
                            {if isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM != ''}
                            	<li class="instagram">
                            		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_INSTAGRAM|escape:html:'UTF-8'}">
                            			<span><i class="icon-instagram"></i>{l s='Instagram' mod='blocksocial'}</span>
                            		</a>
                            	</li>
                            {/if}
                    	</ul>
                    </section>
                    {hook h='configcustom'}
                    <div class="copy_right">
                        <p>{l s='Copyright %1$s [1]I-Make Co., LTD, [/1][2] All rights reserved' sprintf=['Y'|date] tags=['<span>','<br/>'] nocache}</p>
                    </div>
                </div>
              </div>
        </header>
    </div>
    <div id="main_right">
	<div class="columns-container">
                <div id="slider_row" class="">
                    {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
					{if $smarty.capture.displayTopColumn}
						<div id="top_column" class="">{$smarty.capture.displayTopColumn}</div>
					{/if}
    			</div>
                {if $page_name == 'index'}
                    <div class="content-bottom">
                         {hook h='ybccustom2'}
                         {hook h='NewsletterCustom'}
                    </div>
                {/if}
                {if $page_name !='index' && $page_name !='pagenotfound'}
                    <div class="ybc_full_bg_breadcrum">
                        <div class="container">                            
            					{include file="$tpl_dir./breadcrumb.tpl"}            				
                        </div>
                    </div>
                {/if}
       {if $page_name != 'index'}
		<div id="columns" class="container">
			<div class="row">
				{if isset($left_column_size) && !empty($left_column_size)}
				<div id="left_column" class="column col-xs-12 col-sm-{$left_column_size|intval}">{$HOOK_LEFT_COLUMN}</div>
				{/if}
				{if isset($left_column_size) && isset($right_column_size)}{assign var='cols' value=(12 - $left_column_size - $right_column_size)}{else}{assign var='cols' value=12}{/if}
				<div id="center_column" class="center_column col-xs-12 col-sm-{$cols|intval}">
        {/if}
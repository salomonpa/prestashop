{*
* Copyright: YourBestCode.Com
* Email: support@yourbestcode.com
*}

{if $page_name =='index'}
<!-- Module ybc_nivoslider -->
    {if isset($homeslider_slides)}
		<div id="ybc-nivo-slider-wrapper" class="theme-default">
			<div id="ybc-nivo-slider"{if isset($smarty.capture.height) && $smarty.capture.height} style="max-height:{$smarty.capture.height|escape:'html':'UTF-8'}px;"{/if}>
				{foreach from=$homeslider_slides item=slide}
					{if $slide.active}
						<a href="{if $slide.url}{$slide.url|escape:'html':'UTF-8'}{else}#{/if}" title="{$slide.title|escape:'htmlall':'UTF-8'}">
						  <img data-caption-animate="{if $slide.caption_animate}{$slide.caption_animate|escape:'html':'UTF-8'}{else}random{/if}" {if $slide.slide_effect!='random'}data-transition="{$slide.slide_effect|escape:'html':'UTF-8'}"{/if} data-caption1="{$slide.title|escape:'htmlall':'UTF-8'}" data-caption2="{$slide.legend|escape:'htmlall':'UTF-8'}" data-caption3="{$slide.legend2|escape:'htmlall':'UTF-8'}" data-text-direction="{$slide.caption_text_direction|escape:'html':'UTF-8'}" data-caption-top="{$slide.caption_top|escape:'html':'UTF-8'}" data-caption-left="{$slide.caption_left|escape:'html':'UTF-8'}" data-caption-right="{$slide.caption_right|escape:'html':'UTF-8'}" data-caption-width="{$slide.caption_width|escape:'html':'UTF-8'}" data-caption-position="{$slide.caption_position|escape:'html':'UTF-8'}"    src="{$link->getMediaLink("`$smarty.const._MODULE_DIR_`ybc_nivoslider/images/`$slide.image|escape:'htmlall':'UTF-8'`")}" alt="{$slide.title|escape:'htmlall':'UTF-8'}" title="{$slide.title|escape:'htmlall':'UTF-8'}" style="max-width: {$options.max_width|escape:'html':'UTF-8'}; max-height: {$options.max_height|escape:'html':'UTF-8'};" />
						  <div class="ybc-nivo-description">{$slide.description|escape:'html':'UTF-8'}</div>
                        </a>
                    {/if}
				{/foreach}
			</div>
		</div>        
	{/if}
<!-- /Module ybc_nivoslider -->
{/if}
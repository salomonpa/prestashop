{if $manufacturers}
    <div id="ybc-mnf-block">
        <h4 class="ybc-mnf-block-title" id=""><span class="title_cat">{$YBC_MF_TITLE|escape:'html':'UTF-8'}</span></h4>
        <ul id="ybc-mnf-block-ul">
        	{foreach from=$manufacturers item=manufacturer}
        		<li class="ybc-mnf-block-li">
                    <a class="ybc-mnf-block-a-img" href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}"><img src="{$manufacturer.image|escape:'html':'UTF-8'}" /></a>
                    {if $YBC_MF_SHOW_NAME}<a class="ybc-mnf-block-a-name" href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}">{$manufacturer.name|escape:'html':'UTF-8'}</a>{/if}
                </li>
        	{/foreach}
        </ul>
    </div>
{/if}
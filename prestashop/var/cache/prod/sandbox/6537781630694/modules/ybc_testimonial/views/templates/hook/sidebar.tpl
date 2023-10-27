<div class="list-group">
    {if $list}
        {foreach from=$list item='tab'}
            <a class="{if $active == $tab.id}active{/if} list-group-item" href="{$tab.url|escape:'html':'UTF-8'}" id="{$tab.id|escape:'html':'UTF-8'}">{if isset($tab.icon)}<i class="{$tab.icon|escape:'html':'UTF-8'}"></i> {/if}{$tab.label|escape:'html':'UTF-8'}</a>
        {/foreach}
    {/if}
</div>
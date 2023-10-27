{if isset($htmlitems) && $htmlitems}
{assign var='hookName' value={$hook|escape:'htmlall':'UTF-8'}}
    {if $hookName == 'top'}
        <div id="htmlcontent_{$hookName}">
            <div class="container">
            
           <div class="htmlcontent-top-wrap">
                <ul class="htmlcontent-top htmlcontent-top-delivery row">
                    {foreach name=items from=$htmlitems item=hItem}
                        {if $smarty.foreach.items.index < 3}
                            <li class="htmlcontent-item-{$smarty.foreach.items.iteration|escape:'htmlall':'UTF-8'} col-lg-6">
                                <div class="htmlcontent-itemcontent" data-hover="{$hItem.title|escape:'htmlall':'UTF-8'}">
                                    {if $hItem.url}
                                        <a href="{$hItem.url|escape:'htmlall':'UTF-8'}" class="item-link"{if $hItem.target == 1} onclick="return !window.open(this.href);"{/if} title="{$hItem.title|escape:'htmlall':'UTF-8'}">
                                    {/if}
                                        {if $hItem.image}
                                            <img src="{$link->getMediaLink("`$module_dir`img/`$hItem.image`")}" class="item-img" title="{$hItem.title|escape:'htmlall':'UTF-8'}" alt="{$hItem.title|escape:'htmlall':'UTF-8'}" width="{if $hItem.image_w}{$hItem.image_w|intval}{else}100%{/if}" height="{if $hItem.image_h}{$hItem.image_h|intval}{else}100%{/if}"/>
                                        {/if}
                                        {if $hItem.title && $hItem.title_use == 1 || $hItem.html}
                                            <div class="data-hover" data-hover="{$hItem.title|escape:'htmlall':'UTF-8'}">
                                            <div id="htmlcontent-item-link-wrap">
                                                <div class="htmlcontent-item-link-wrap">
                                                    <div class="htmlcontent-item-link-content">
                                        {/if}
                                                        {if $hItem.title && $hItem.title_use == 1}
                                                            <h3 class="item-title"><span>{$hItem.title|escape:'htmlall':'UTF-8'}</span></h3>
                                                        {/if}
                                                        {if $hItem.html}
                                                            <div class="item-html">
                                                                {$hItem.html}
                                                            </div>
                                                        {/if}
                                                {if $hItem.title && $hItem.title_use == 1 || $hItem.html}           
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                         {/if}
                                    {if $hItem.url}
                                        </a>
                                    {/if}
                                </div>
                            </li>
                        {/if}
                    {/foreach}
                </ul>
                <ul class="htmlcontent-top list-item">
                    {foreach name=items from=$htmlitems item=hItem}
                        {if $smarty.foreach.items.index > 2}
                            <li class="htmlcontent-item-{$smarty.foreach.items.iteration|escape:'htmlall':'UTF-8'} col-lg-4">
                                {if $hItem.url}
                                    <a href="{$hItem.url|escape:'htmlall':'UTF-8'}" class="item-link"{if $hItem.target == 1} onclick="return !window.open(this.href);"{/if} title="{$hItem.title|escape:'htmlall':'UTF-8'}">
                                {/if}
                                    {if $hItem.image}
                                        <img src="{$link->getMediaLink("`$module_dir`img/`$hItem.image`")}" class="item-img" title="{$hItem.title|escape:'htmlall':'UTF-8'}" alt="{$hItem.title|escape:'htmlall':'UTF-8'}" width="{if $hItem.image_w}{$hItem.image_w|intval}{else}100%{/if}" height="{if $hItem.image_h}{$hItem.image_h|intval}{else}100%{/if}"/>
                                    {/if}
                                    {if $hItem.title && $hItem.title_use == 1}
                                        <h3 class="item-title">{$hItem.title|escape:'htmlall':'UTF-8'}</h3>
                                    {/if}
                                    {if $hItem.html}
                                        <div class="item-html">
                                            {$hItem.html}
                                        </div>
                                    {/if}
                                {if $hItem.url}
                                    </a>
                                {/if}
                            </li>
                        {/if}
                    {/foreach}
                </ul>
            </div>
            </div>
        </div>   
    {elseif $hookName == 'home'}
        <div id="htmlcontent_{$hookName}">
            <ul class="htmlcontent-home clearfix row">
                {foreach name=items from=$htmlitems item=hItem}
                    <li class="htmlcontent-item-{$smarty.foreach.items.iteration|escape:'htmlall':'UTF-8'} col-xs-6">
                        <div class="htmlcontent-itemcontent" data-hover="{$hItem.title|escape:'htmlall':'UTF-8'}">
                                    {if $hItem.url}
                                        <a href="{$hItem.url|escape:'htmlall':'UTF-8'}" class="item-link"{if $hItem.target == 1} onclick="return !window.open(this.href);"{/if} title="{$hItem.title|escape:'htmlall':'UTF-8'}">
                                    {/if}
                                        {if $hItem.image}
                                            <img src="{$link->getMediaLink("`$module_dir`img/`$hItem.image`")}" class="item-img" title="{$hItem.title|escape:'htmlall':'UTF-8'}" alt="{$hItem.title|escape:'htmlall':'UTF-8'}" width="{if $hItem.image_w}{$hItem.image_w|intval}{else}100%{/if}" height="{if $hItem.image_h}{$hItem.image_h|intval}{else}100%{/if}"/>
                                        {/if}
                                        {if $hItem.title && $hItem.title_use == 1 || $hItem.html}
                                            <div class="data-hover" data-hover="{$hItem.title|escape:'htmlall':'UTF-8'}">
                                            <div id="htmlcontent-item-link-wrap">
                                                <div class="htmlcontent-item-link-wrap">
                                                    <div class="htmlcontent-item-link-content">
                                        {/if}
                                                        {if $hItem.title && $hItem.title_use == 1}
                                                            <h3 class="item-title"><span>{$hItem.title|escape:'htmlall':'UTF-8'}</span></h3>
                                                        {/if}
                                                        {if $hItem.html}
                                                            <div class="item-html">
                                                                {$hItem.html}
                                                            </div>
                                                        {/if}
                                                {if $hItem.title && $hItem.title_use == 1 || $hItem.html}           
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                         {/if}
                                    {if $hItem.url}
                                        </a>
                                    {/if}
                                </div>
                    </li>
                {/foreach}
            </ul>
        </div>
    {else}
        <div id="htmlcontent_{$hookName}">
            <ul class="htmlcontent-home clearfix row">
                {foreach name=items from=$htmlitems item=hItem}
                    <li class="htmlcontent-item-{$smarty.foreach.items.iteration|escape:'htmlall':'UTF-8'} col-xs-6">
                        {if $hItem.url}
                            <a href="{$hItem.url|escape:'htmlall':'UTF-8'}" class="item-link"{if $hItem.target == 1} onclick="return !window.open(this.href);"{/if} title="{$hItem.title|escape:'htmlall':'UTF-8'}">
                        {/if}
                            {if $hItem.image}
                                <img src="{$link->getMediaLink("`$module_dir`img/`$hItem.image`")}" class="item-img" title="{$hItem.title|escape:'htmlall':'UTF-8'}" alt="{$hItem.title|escape:'htmlall':'UTF-8'}" width="{if $hItem.image_w}{$hItem.image_w|intval}{else}100%{/if}" height="{if $hItem.image_h}{$hItem.image_h|intval}{else}100%{/if}"/>
                            {/if}
                            {if $hItem.title && $hItem.title_use == 1}
                                <h3 class="item-title">{$hItem.title|escape:'htmlall':'UTF-8'}</h3>
                            {/if}
                            {if $hItem.html}
                                <div class="item-html">
                                    {$hItem.html}
                                </div>
                            {/if}
                        {if $hItem.url}
                            </a>
                        {/if}
                    </li>
                {/foreach}
            </ul>
        </div>
    {/if}
{/if}

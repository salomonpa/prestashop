{if $widgets}
    {if $widget_hook == "display-top-column" }
        {if $page_name == "index"}
            <div class="home_widget_top_column{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3'} home_top_colum_layout3{/if}">
                    <div class="{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT != 'LAYOUT4'}container{/if}">
                        <ul class="ybc-widget-{$widget_hook} row">
                            {foreach from=$widgets item='widget'}
                                <li class="ybc-widget-item{if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT2')} ybc-widget-item-layout-2{/if}{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                                    <div class="ybc-widget-item-wrap">
                                        <div class="ybc-widget-item-content">
                                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                                            
                                            {if $widget.show_title && $widget.title || $widget.show_description && $widget.description}
                                            <div class="ybc-widget-description-content"> 
                                                {if $widget.show_title && $widget.title}
                                                    <h4 class="ybc-widget-title">
                                                        {if $widget.link}
                                                        <a href="{$widget.link}">{/if}{$widget.title}
                                                        {if $widget.link}</a>{/if}
                                                    </h4>
                                                {/if}
                                                {if $widget.show_description && $widget.description}
                                                    <div class="ybc-widget-description">
                                                        {$widget.description}
                                                    </div>
                                                {/if}
                                            </div>
                                            {/if}
                                        </div>
                                    </div>
                                </li>
                            {/foreach}
                        </ul>
                    </div>                        
            </div>
        {/if}
    {else if ($widget_hook == "display-left-column" || $widget_hook == "display-right-column")}
        <div class="block">
            <ul class="ybc-widget-{$widget_hook} block_content">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                        
                        
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                    </li>
                {/foreach}
            </ul>
        </div>
    {else if $widget_hook == "display-footer"}
        <section class="footer-block col-xs-12 col-sm-2">
            <ul class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        <div class="block_content toggle-footer">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
        </section>
    
    {else if $widget_hook == "ybc-footer-links"}
            <ul class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        <div class="block_content toggle-footer">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
        
    {else if $widget_hook == "ybc-ybcpaymentlogo-hook"}
        <ul class="ybc-widget-{$widget_hook}">
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item">
                    {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                    {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                    {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                    
                    
                    {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                </li>
            {/foreach}
        </ul>
    {else if $widget_hook == "ybc-custom-4"}
        <ul class="ybc-widget-{$widget_hook}">
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item">
                    {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                    {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                    {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                    
                    {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                </li>
            {/foreach}
        </ul>
    {else if $widget_hook == "ybc-custom-3"}
        <div class="container">
             <ul class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item col-md-4 col-sm-4{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                        {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                    </li>
                {/foreach}
            </ul>
        </div>
    {else if $widget_hook == "ybc-custom-2"}
        <ul class="ybc-widget-{$widget_hook}">                
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT != 'LAYOUT4'} col-xs-4 {else} ybc-widget-item-wrap {/if} ">
                    <div class="ybc-widget-item-content">
                        <div class="content_toggle ybc_links_page_home">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{/if}
                            <div class="ybc-widget-description-content"> 
                                
                                {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                                <a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                                {if $widget.show_description && $widget.description}
                                    <div class="ybc-widget-description">{$widget.description}</div>
                                {/if}
                            </div>
                        </div>
                    </div>
                </li>
            {/foreach}
        </ul>
            
    {else if $widget_hook == "ybc-custom-5"}
  
        <ul class="ybc-widget-{$widget_hook}">                
        {foreach from=$widgets item='widget'}
            <li class="ybc-widget-item col-sm-3 col-md-3">
                <div class="ybc-widget-item-content">                        
                <div class="content_toggle ybc_links_page_home">
                    {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                    {if $widget.show_image && $widget.image}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{/if}
                    {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                    {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                </div>
                </div>
            </li>
            
        {/foreach}
       </ul>
    {else if $widget_hook == "display-home"}
        <div class="row sang">
            <div class="ybc-widget-{$widget_hook}">
                <div class="container">
                    <div class="row">
                        <ul id="parala">
                            {foreach from=$widgets item='widget'}
                                <li class="ybc-widget-item{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                                    <div class="ybc-widget-item-content">
                                        {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                                        {if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'DEFAULT' || $tc_config.YBC_TC_LAYOUT == 'LAYOUT1')}
                                            <div class="parala_content" {if isset($tc_config.YBC_TC_PARALLAX_NEWSLETTER_ON_OFF) && $tc_config.YBC_TC_PARALLAX_NEWSLETTER_ON_OFF == 1}data-top-bottom="top: 0%;" data-bottom-top="top: -75%;"{/if} {if $widget.show_image && $widget.image} style="background-image: url({$widget_module_path}images/widget/{$widget.image})"{/if}> </div>
                                        {else}
                                            {if $widget.show_image && $widget.image}{if $widget.link}<a class="ybc_widget_link" href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                                
                                            {/if}
                                            {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description {if $widget.show_image && $widget.image} ybc-widget-description-white{/if}">{$widget.description}</div>{/if}
                                    </div>  
                                </li>
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    {else}
            <div class="container">
            {if ($layouts == 'layout2')} <div class="row">{/if}
            <ul  class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                        <div class="ybc-widget-item-content"> 
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                            
                            {if $widget.show_title && $widget.title || $widget.show_description && $widget.description}
                                <div class="ybc-widget-description-content"> 
                                    {if $widget.show_title && $widget.title}
                                        <h4 class="ybc-widget-title">
                                            {if $widget.link}
                                            <a href="{$widget.link}">{/if}{$widget.title}
                                            {if $widget.link}</a>{/if}
                                        </h4>
                                    {/if}
                                    {if $widget.show_description && $widget.description}
                                        <div class="ybc-widget-description">
                                            {$widget.description}
                                        </div>
                                    {/if}
                                </div>
                            {/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
          {if ($layouts == 'layout2')}</div>{/if}
            </div>
    {/if}
{/if}
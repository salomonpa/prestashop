{*
* Copyright: YourBestCode.Com
* Email: support@yourbestcode.com
*}
{*
* Copyright: YourBestCode.Com
* Email: support@yourbestcode.com
*}
<div class="panel col-lg-12">
    <div class="panel-heading">
        <i class="icon-list-ul"></i> {l s='Menu structure' mod='ybc_megamenu'}
        <span class="panel-heading-action">            
            <a class="list-toolbar-btn" href="{$link->getAdminLink('AdminModules')}&configure=ybc_megamenu&add_new_menu=true&control=menu">
    			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="{l s='Add new menu'}" data-html="true">
    				<i style="color: #f0227e;" class="process-icon-new "></i>
    			</span>
    		</a>
        </span>
    </div>
    {if $menus}
	<div class="table-responsive clearfix ybc-mm-menu-tree">
		<ol class="sortable ui-sortable ybc-mm-ol-lv1">  
    			{foreach from=$menus item=menu}
    				<li class="ybc-menu-item" rel="{$menu.id_menu|escape:'html':'UTF-8'}" id="menu_{$menu.id_menu|escape:'html':'UTF-8'}">
                            <!-- level 1 -->
                        	<div class="ybc-mm-level1 ybc-mm-item">			
        						<div class="ybc-mm-level1-heading ybc-mm-heading {if $active_id_menu==$menu.id_menu}ybc-mm-active{/if}" style="text-transform: uppercase; padding: 5px 0;"><i  title="{l s='Menu item'}"  style="background: none repeat scroll 0 0 #2ba8e3;color: #fff;font-size: 12px;margin-right: 5px;padding: 3px;" class="icon-book"></i><a href="{$admin_path|escape:'html':'UTF-8'}&id_menu={$menu.id_menu|escape:'html':'UTF-8'}&control=menu&configure=ybc_megamenu">{$menu.title|escape:'html':'UTF-8'}</a></div>
                                <div class="ybc-mm-toolbox">
                                    <a onclick="return confirm('{l s='When you delete this menu, all columns/blocks inside this menu will be deleted. Do you confirm?'}');" style="text-decoration: none!important; margin-right: 10px;" href="{$admin_path|escape:'html':'UTF-8'}&id_menu={$menu.id_menu|escape:'html':'UTF-8'}&control=menu&configure=ybc_megamenu&delmenu=true">
                                        <span  class="label-tooltip" data-toggle="tooltip" data-html="true" data-original-title="{l s='Delete this menu'}">
                                            <i style="font-size: 14px; color: #2ba8e3; display: inline; " class="icon-trash"></i>
                                        </span>
                                    </a>
                                    <a  style="text-decoration: none!important;"  href="{$link->getAdminLink('AdminModules')}&add_new_column=true&id_menu={$menu.id_menu|escape:'html':'UTF-8'}&control=column&configure=ybc_megamenu" class="list-toolbar-btn">
                            			<span data-html="true" data-original-title="{l s='Add new column to this menu'}" class="label-tooltip" data-toggle="tooltip" title="">
                            				<i class="process-icon-new " style="color: #2ba8e3; font-size: 14px; display: inline;"></i>
                            			</span>
                            		</a>    
                                </div>
                            </div>
                            <!-- /leve 1 -->
                            <!-- Columns -->
                            {if isset($menu.columns) && $menu.columns}
                                <ol class="ybc-mm-ol-lv2 sortable">
                                    {foreach from=$menu.columns item=column}
                        				<li class="ybc-column-item" rel="{$column.id_column|escape:'html':'UTF-8'}" id="column_{$column.id_column|escape:'html':'UTF-8'}" >
                                            <!-- level 2 -->
                                            <div class="ybc-level2 ybc-mm-item">					
                        						<div class="ybc-mm-level2-heading ybc-mm-heading {if $active_id_column==$column.id_column}ybc-mm-active{/if}" style="padding: 5px 0;"><i  title="{l s='Column item'}" style="background: none repeat scroll 0 0 #e27c79;color: #fff;font-size: 12px;margin-right: 5px;padding: 3px;" class="icon-sitemap"></i><a href="{$admin_path|escape:'html':'UTF-8'}&id_column={$column.id_column|escape:'html':'UTF-8'}&control=column&configure=ybc_megamenu" style="color: #e27c79;">{$column.title|escape:'html':'UTF-8'}</a></div>
                                                <div class="ybc-mm-toolbox">
                                                    <a onclick="return confirm('{l s='When you delete this column, all blocks inside this column will be deleted. Do you confirm?'}');" style="text-decoration: none!important; margin-right: 10px;" href="{$admin_path|escape:'html':'UTF-8'}&id_column={$column.id_column|escape:'html':'UTF-8'}&control=column&configure=ybc_megamenu&delcolumn=true">
                                                        <span  class="label-tooltip" data-toggle="tooltip" data-html="true" data-original-title="{l s='Delete this column'}">
                                                            <i style="font-size: 14px; color: #e27c79; display: inline;" class="icon-trash"></i>
                                                        </span>
                                                    </a>
                                                    <a  style="text-decoration: none!important;"  href="{$link->getAdminLink('AdminModules')}&add_new_column=true&id_column={$column.id_column|escape:'html':'UTF-8'}&control=block&configure=ybc_megamenu" class="list-toolbar-btn">
                                            			<span data-html="true" data-original-title="{l s='Add new block to this column'}" class="label-tooltip" data-toggle="tooltip" title="">
                                            				<i class="process-icon-new " style="color: #e27c79; font-size: 14px; display: inline;"></i>
                                            			</span>
                                            		</a>    
                                                </div>
                                            </div>
                                            <!-- /level 2 -->	
                                            <!-- Blocks -->
                                            {if isset($column.blocks) && $column.blocks}
                                                <ol class="ybc-mm-ol-lv3 sortable">
                                                    {foreach from=$column.blocks item=block}
                                        				<li class="ybc-block-item" rel="{$block.id_block|escape:'html':'UTF-8'}" id="block_{$block.id_block|escape:'html':'UTF-8'}" >
                                                            <!-- Level 3 -->
                                                                <div class="ybc-level3 ybc-mm-item">					
                                            						<div class="ybc-mm-level3-heading ybc-mm-heading {if $active_id_block==$block.id_block}ybc-mm-active{/if}" style="padding: 5px 0;"><i title="{l s='Block item'}" style="background: none repeat scroll 0 0 #9e5ba1;color: #fff;font-size: 12px;margin-right: 5px;padding: 2px;" class="icon-calendar-empty"></i><a style="color: #9e5ba1;" href="{$admin_path|escape:'html':'UTF-8'}&id_block={$block.id_block|escape:'html':'UTF-8'}&control=block&configure=ybc_megamenu">{$block.title|escape:'html':'UTF-8'}</a></div>
                                                                    <div class="ybc-mm-toolbox">
                                                                        <a onclick="return confirm('{l s='This block will be deleted. Do you confirm?'}');" style="text-decoration: none!important;" href="{$admin_path|escape:'html':'UTF-8'}&id_block={$block.id_block|escape:'html':'UTF-8'}&control=block&configure=ybc_megamenu&delblock=true">
                                                                            <span  class="label-tooltip" data-toggle="tooltip" data-html="true" data-original-title="{l s='Delete this block'}">
                                                                                <i style="font-size: 14px; color: #9e5ba1; display: inline;" class="icon-trash"></i>
                                                                            </span>
                                                                        </a>                                                
                                                                    </div>
                                                                </div>	
                                                            <!-- /Level 3 -->	
                                        				</li>
                                        			{/foreach}
                                                </ol>
                                            {/if}
                                            <!-- /Blocks -->	
                        				</li>                                        
                        			{/foreach}
                                </ol>
                            {/if}
                            <!-- /Columns  -->		
    				</li>                    
    			{/foreach}
		</ol>
	</div>
    {else}
        <p class="alert alert-warning row-margin-top">{l s='Please add new menus. You have no menus at the moment'}</p>
    {/if}
</div>
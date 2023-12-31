{if $setting_updated}
    <div class="alert alert-success">{l s='Setting updated' mod='ybc_productimagehover'}</div>
{/if}
<form class="defaultForm form-horizontal" enctype="multipart/form-data" method="post" action="{$postUrl|escape:'html':'UTF-8'}">
    <div class="panel">
        <div class="panel-heading"><i class="icon-cogs"></i> {l s='Setting' mod='ybc_productimagehover'}</div>
        
        <div class="form-wrapper">
            <div class="form-group">
                <label class="control-label col-lg-3" for="transition-effect">{l s='Transition effect' mod='ybc_productimagehover'}</label>
                <div class="col-lg-9">
                    <select id="transition-effect" class="fixed-width-xl" name="YBC_PI_TRANSITION_EFFECT">
                        {foreach from=$effects item='effect'}
                            <option {if $effect.id == $YBC_PI_TRANSITION_EFFECT}selected="selected"{/if} value="{$effect.id|escape:'html':'UTF-8'}">{$effect.name|escape:'html':'UTF-8'}</option>
                        {/foreach}
                    </select>
                    <p class="help-block">
                    {l s='Add {hook h=\'productImageHover\' id_product = $product.id_product} to product-list.tpl in your theme directory, just below the product images' mod='ybc_productimagehover'}<br />
                    {l s='Add {hook h=\'productImageHover\' id_product = $categoryProduct.id_product} to productscategory.tpl of productscategory module, just below the product images' mod='ybc_productimagehover'}<br />
                    {l s='Add {hook h=\'productImageHover\' id_product = $accessory.id_product} to product.tpl in your theme directory, just below accessory products images' mod='ybc_productimagehover'}
                    </p>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button class="btn btn-default pull-right" name="submitUpdate" id="module_form_submit_btn" value="1" type="submit">
    		  <i class="process-icon-save"></i> {l s='Save' mod='ybc_productimagehover'}
    	    </button>																								
        </div>
    </div>
</form>
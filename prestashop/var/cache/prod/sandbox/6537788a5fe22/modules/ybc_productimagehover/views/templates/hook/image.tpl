{if isset($product_name) && isset($img_url)}
    <img class="{if $YBC_PI_TRANSITION_EFFECT}{$YBC_PI_TRANSITION_EFFECT|escape:'html':'UTF-8'}{else}fade{/if} replace-2x img-responsive ybc_img_hover" src="{$img_url|escape:'html':'UTF-8'}" alt="{$product_name|escape:'html':'UTF-8'}" itemprop="image" title="{$product_name|escape:'html':'UTF-8'}" />
{/if}
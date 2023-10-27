{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if count($categoryProducts) > 0 && $categoryProducts !== false}
<section class="page-product-box blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading"><span class="title_cat">{$categoryProducts|@count} {l s='other products in the same category:' mod='productscategory'}</span></h3>
	<div id="productscategory_list" class="clearfix">
		<ul id="bxslider1" class="bxslider clearfix">
		{foreach from=$categoryProducts item='categoryProduct' name=categoryProduct}
			<li class="product-box item">
				<a href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)}" class="lnk_img product-image" title="{$categoryProduct.name|htmlspecialchars}"><img src="{$link->getImageLink($categoryProduct.link_rewrite, $categoryProduct.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{$categoryProduct.name|htmlspecialchars}" /></a>

				<h5 class="product-name">
					<a href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)|escape:'html':'UTF-8'}" title="{$categoryProduct.name|htmlspecialchars}">{$categoryProduct.name|truncate:24:'...'|escape:'html':'UTF-8'}</a>
				</h5>
                {hook h='displayProductListReviews' product=$categoryProduct}
				{if $ProdDisplayPrice && $categoryProduct.show_price == 1 && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
					<p class="price_display">
					{if isset($categoryProduct.specific_prices) && $categoryProduct.specific_prices
					&& ($categoryProduct.displayed_price|number_format:2 !== $categoryProduct.price_without_reduction|number_format:2)}

						<span class="price special-price">{convertPrice price=$categoryProduct.displayed_price}</span>
						{if $categoryProduct.specific_prices.reduction && $categoryProduct.specific_prices.reduction_type == 'percentage'}
							<span class="price-percent-reduction small">-{$categoryProduct.specific_prices.reduction * 100}%</span>
						{/if}
						<span class="old-price">{displayWtPrice p=$categoryProduct.price_without_reduction}</span>

					{else}

						<span class="price">{convertPrice price=$categoryProduct.displayed_price}</span>

					{/if}
					</p>
				{else}
				<br />
				{/if}
                {if ($categoryProduct.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $categoryProduct.available_for_order && !isset($restricted_country_mode) && $categoryProduct.customizable != 2 && !$PS_CATALOG_MODE}
					<div id="add_to_cart_product_category">
                        <div class="add_to_cart_product_category">
                            <div>
                                {if (!isset($categoryProduct.customization_required) || !$categoryProduct.customization_required) && ($categoryProduct.allow_oosp || $categoryProduct.quantity > 0)}
            						{capture}add=1&amp;id_product={$categoryProduct.id_product|intval}{if isset($static_token)}&amp;token={$static_token}{/if}{/capture}
            						<a class="button ajax_add_to_cart_button button_red btn btn-default" href="{$link->getPageLink('cart', true, NULL, $smarty.capture.default, false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$categoryProduct.id_product|intval}" data-minimal_quantity="{if isset($categoryProduct.product_attribute_minimal_quantity) && $categoryProduct.product_attribute_minimal_quantity > 1}{$categoryProduct.product_attribute_minimal_quantity|intval}{else}{$categoryProduct.minimal_quantity|intval}{/if}">
            							<span>{l s='Add to cart'}</span>
            						</a>
            					{else}
            						<span class="button ajax_add_to_cart_button btn btn-default disabled">
            							<span>{l s='Add to cart'}</span>
            						</span>
            					{/if}
                            </div>
                        </div>
                    </div>
				{/if}
			</li>
		{/foreach}
		</ul>
	</div>
</section>
{/if}
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
{if !isset($content_only) || !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
					</div><!-- .container -->
                    {if $page_name == "index"}
                    {if isset($HOOK_HOME) && $HOOK_HOME|trim}
                    	<div class="clearfix">
                            <div id="hook_home">
                                <div class="container">{$HOOK_HOME}</div>
                            </div>
                        </div>
                    {/if}
                    {/if}
				</div><!-- #columns -->
			
			{if isset($HOOK_FOOTER)}
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="row">
                            {$HOOK_FOOTER}
                        </div>
					</footer>
                    <div class="footer_bottom">
                        <div class="container">
                        <div class="footer_bottom_left">
                            {hook h='ybcFooterLinks'}
                            {hook h='ybcCopyright'}
                        </div>
                        <div id="payment_footer">
                            {hook h='ybcPaymentLogo'}
                        </div>
                        </div>
                    </div>
				</div><!-- #footer -->
			{/if}
            </div><!-- .columns-container -->
		</div><!-- #page -->
{/if}
{include file="$tpl_dir./global.tpl"}
	</body>
</html>
{if $MENU != ''}
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">
            <p>{l s="Menu" mod="blocktopmenu"}</p>
            <p class="icon-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </p>
        </div>
		<ul class="sf-menu clearfix menu-content">
			{$MENU}
		</ul>
        {if $MENU_SEARCH}
			<div class="sf-search noBack" style="float:right">
                
				<form id="searchbox" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" method="get">
					<p>
						<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
						<input type="text" name="search_query" placeholder="{l s="Enter key words" mod="blocktopmenu"}" />
                        <button type="submit" name="submit_search" class="button-search-menu">
                			<span>{l s='Search' mod='blocksearch'}</span>
                		</button>
                    </p>
				</form>
			</div>
		{/if}
	</div>
	<!--/ Menu -->
{/if}
<script type="text/javascript">
    $(document).ready(function(){
          $("#button-toggle").click(function(){
                $("#searchbox").toggle(200);
          });
    });
</script>
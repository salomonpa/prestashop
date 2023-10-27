
{if $ybcDev == true}
    {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'DEFAULT'}
    <div id="ybc_hot_deal" style="background-image:url('{$tc_module_path|escape:'html':'UTF-8'}images/config/{$tc_config.YBC_TC_BG_HOT_DEAL|escape:'html':'UTF-8'}');">
    {elseif $tc_config.YBC_TC_LAYOUT == 'LAYOUT2'}
        <div id="ybc_hot_deal" class="ybc_hot_deal_2">
    {elseif $tc_config.YBC_TC_LAYOUT == 'LAYOUT4'}
        <div id="ybc_hot_deal" class="ybc_hot_deal_4">
    {/if}
{else}
    <div id="ybc_hot_deal" style="background-image:url('{$tc_module_path|escape:'html':'UTF-8'}images/config/{$tc_config.YBC_TC_BG_HOT_DEAL|escape:'html':'UTF-8'}');">
{/if}

    <div class="container">
        <div class="ybc_hot_deal_content">
            {if (isset($tc_config.YBC_TC_TITLE_HOT_DEAL) && $tc_config.YBC_TC_TITLE_HOT_DEAL)}
                <h4 class="ybc_hot_deal_title">
                    {$tc_config.YBC_TC_TITLE_HOT_DEAL|escape:'html':'UTF-8'}
                </h4>
            {/if}
            {if (isset($tc_config.YBC_TC_SUBTITLE_HOT_DEAL) && $tc_config.YBC_TC_SUBTITLE_HOT_DEAL)}
                <div class="ybc_hot_deal_subtitle">
                    {$tc_config.YBC_TC_SUBTITLE_HOT_DEAL|escape:'html':'UTF-8'}
                </div>
            {/if}
            {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT4'}
                <span class="ybc_sub_clock">{l s='Expire in:' mod='ybc_themeconfig'}</span>
                <span id="ets_clock"></span>
            {else}
                <div id="ets_clock">
    
                </div>
            {/if}
            
            {if (isset($tc_config.YBC_TC_DES_HOT_DEAL) && $tc_config.YBC_TC_DES_HOT_DEAL)}
                <div class="ybc_hot_deal_description">
                    {$tc_config.YBC_TC_DES_HOT_DEAL|escape:'html':'UTF-8'}
                </div>
            {/if}
            {if (isset($tc_config.YBC_TC_URL_HOT_DEAL) && $tc_config.YBC_TC_URL_HOT_DEAL)}
                <div class="ybc_hot_deal_button">
                    <a class="button" href="{$tc_config.YBC_TC_URL_HOT_DEAL|escape:'html':'UTF-8'}">{l s='Purchase now' mod='ybc_themeconfig'}</a>
                </div>
            {/if}
        </div>
    </div>    
</div>


{addJsDefL name='day'}{l s='day' js=1}{/addJsDefL}
{addJsDefL name='hr'}{l s='hour' js=1}{/addJsDefL}
{addJsDefL name='min'}{l s='min' js=1}{/addJsDefL}
{addJsDefL name='sec'}{l s='sec' js=1}{/addJsDefL}
{addJsDef datetoets=$tc_config.YBC_TC_DATETO}
<script type="text/javascript">
    {literal}
        $('#ets_clock').countdown(datetoets).on('update.countdown', function(event) {
          var d = (event.offset.totalDays > 1 ? event.offset.totalDays+' <span class="number">'+day+'s</span>':event.offset.totalDays+' <span class="number">'+day+'</span>');
          var h = (event.offset.hours > 1 ? event.offset.hours+' <span class="number">'+hr+'s </span>':event.offset.hours+' <span class="number">'+hr+'</span>');
          var m = (event.offset.minutes > 1 ? event.offset.minutes+' <span class="number">'+min+'s</span>':event.offset.minutes+' <span class="number">'+min+'</span>');
          var s = (event.offset.seconds > 1 ? event.offset.seconds+' <span class="number">'+sec+'s</span>':event.offset.seconds+' <span class="number">'+sec+'</span>');
          var $this = $(this).html(event.strftime(''
            + '<span class="ybc_cd">'+d+'</span> '
            + '<span class="ybc_cd">'+h+'</span> '
            + '<span class="ybc_cd">'+m+'</span> '
            + '<span class="ybc_cd">'+s+'</span> '));
        });
    {/literal}
</script>
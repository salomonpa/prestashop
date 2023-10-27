{*
* Copyright: YourBestCode.Com
* Email: support@yourbestcode.com
*}
<div class="ybc-theme-panel closed">
    <div class="ybc-theme-panel-medium">
        <div class="ybc-theme-panel-btn">{l s='Setting'}</div>
        <div class="ybc-theme-panel-loading">
            <div class="ybc-theme-panel-loading-setting">
                <h2>
                    <img class="ybc-theme-panel-loading-logo" src="{$modules_dir|escape:'html':'UTF-8'}ybc_themeconfig/img/logo-ybc.png" />
                    <br/>
                    <span>{l s='Updating...'}</span>
                </h2>
            </div>
        </div>
        <div class="ybc-theme-panel-wrapper">
            <h2>{l s='Theme configuration'}</h2>
            <div class="ybc-theme-panel-inner">
                <div class="ybc-theme-panel-box">
                    <label for="YBC_TC_LAYOUT">{l s='Layout: '}</label>
                    <select name="YBC_TC_LAYOUT" id="YBC_TC_LAYOUT">
                        {if $layouts}
                            {foreach from=$layouts item='layout'}
                                <option {if $configs.YBC_TC_LAYOUT==$layout.id_option}selected="selected"{/if} value="{$layout.id_option|escape:'html':'UTF-8'}">{$layout.name|escape:'html':'UTF-8'}</option>
                            {/foreach}
                        {/if}
                    </select>
                </div>
                <div class="ybc-theme-panel-box">
                    <label for="YBC_TC_SKIN">{l s='Skin: '}</label>
                    <select name="YBC_TC_SKIN" id="YBC_TC_SKIN">
                        {if $skins}
                            {foreach from=$skins item='skin'}
                                <option {if $configs.YBC_TC_SKIN==$skin.id_option}selected="selected"{/if} value="{$skin.id_option|escape:'html':'UTF-8'}">{$skin.name|escape:'html':'UTF-8'}</option>
                            {/foreach}
                        {/if}
                    </select>
                </div>
                <div class="ybc-theme-panel-box tc-separator"><h3>{l s='Font options'}</h3></div>
                <div class="ybc-theme-panel-box">
                    <label for="YBC_TC_FONTSIZE">{l s='Font size: '}</label>
                    <select name="YBC_TC_FONTSIZE" id="YBC_TC_FONTSIZE">
                        {if $fontSizes}
                            {foreach from=$fontSizes item='fontsize'}
                                <option {if $configs.YBC_TC_FONTSIZE==$fontsize.id_option}selected="selected"{/if} value="{$fontsize.id_option|escape:'html':'UTF-8'}">{$fontsize.name|escape:'html':'UTF-8'}</option>
                            {/foreach}
                        {/if}
                    </select>
                </div>
                <div class="ybc-theme-panel-box">
                    <label for="YBC_TC_GENERAL_FONT">{l s='General font: '}</label>
                    <select name="YBC_TC_GENERAL_FONT" id="YBC_TC_GENERAL_FONT">
                        {if $fonts}
                            {foreach from=$fonts item='font'}
                                <option {if $configs.YBC_TC_GENERAL_FONT==$font.id_option}selected="selected"{/if} value="{$font.id_option|escape:'html':'UTF-8'}">{$font.name|escape:'html':'UTF-8'}</option>
                            {/foreach}
                        {/if}
                    </select>
                </div>
                <div class="ybc-theme-panel-box">
                    <label for="YBC_TC_HEADING_FONT">{l s='Heading font: '}</label>
                    <select name="YBC_TC_HEADING_FONT" id="YBC_TC_HEADING_FONT">
                        {if $fonts}
                            {foreach from=$fonts item='font'}
                                <option {if $configs.YBC_TC_HEADING_FONT==$font.id_option}selected="selected"{/if} value="{$font.id_option|escape:'html':'UTF-8'}">{$font.name|escape:'html':'UTF-8'}</option>
                            {/foreach}
                        {/if}
                    </select>
                </div>
                <div class="ybc-theme-panel-box">
                    <label for="YBC_TC_CUSTOM_FONT">{l s='Custom font: '}</label>
                    <select name="YBC_TC_CUSTOM_FONT" id="YBC_TC_CUSTOM_FONT">
                        {if $fonts}
                            {foreach from=$fonts item='font'}
                                <option {if $configs.YBC_TC_CUSTOM_FONT==$font.id_option}selected="selected"{/if} value="{$font.id_option|escape:'html':'UTF-8'}">{$font.name|escape:'html':'UTF-8'}</option>
                            {/foreach}
                        {/if}
                    </select>
                </div>
                <div class="ybc-theme-panel-box tc-separator"><h3>{l s='Background image'}</h3></div>
                <div class="ybc-theme-panel-box tc-ul">
                    {if $bgs}
                        <ul class="ybc-theme-panel-bg-list">
                            {foreach from=$bgs item='bg'}
                                <li><span rel='{$bg|escape:'html':'UTF-8'}' class="ybc-theme-panel-bg{if $configs.YBC_TC_BG_IMG==$bg} active{/if}" style="background: url('{$moduleDirl|escape:'html':'UTF-8'}bgs/{$bg|escape:'html':'UTF-8'}.png');"></span></li>
                            {/foreach}
                        </ul>
                    {/if}
                </div>
                <div class="ybc-theme-panel-box tc-reset">
                    <span id="tc-reset">{l s='Reset to default'}</span>
                </div>
            </div>        
        </div>       
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.ybc-theme-panel-box select').change(function(){
            $('.ybc-theme-panel-loading').show();
            $.ajax({
                url : '{$moduleDirl|escape:'html':'UTF-8'}ajax.php',
                type : 'post',
                dataType : 'json',
                data : {                    
                    'newConfigVal' : $(this).val(),
                    'configName' : $(this).attr('id')
                },
                success: function(json)
                {                    
                    if(json['success'])
                    {
                        if($('body').hasClass(json['oldClass']))
                        {
                            $('body').removeClass(json['oldClass']);
                            $('body').addClass(json['newClass']); 
                        }                                            
                    }
                    else
                        alert(json['error']);
                    $('.ybc-theme-panel-loading').fadeOut();
                },
                error: function()
                {
                    $('.ybc-theme-panel-loading').fadeOut();
                }
            });
        });
        
        //Update bg
        $('.ybc-theme-panel-bg').click(function(){
            clickObj = this;
            $('.ybc-theme-panel-loading').show();
            $.ajax({
                url : '{$moduleDirl|escape:'html':'UTF-8'}ajax.php',
                type : 'post',
                dataType : 'json',
                data : {                    
                    'newConfigVal' : $(this).attr('rel'),
                    'configName' : 'YBC_TC_BG_IMG'
                },
                success: function(json)
                {                    
                    if(json['success'])
                    {
                        if($('body').hasClass(json['oldClass']))
                        {
                            $('body').removeClass(json['oldClass']);
                            $('body').addClass(json['newClass']);
                            $('.ybc-theme-panel-bg').removeClass('active'); 
                            $(clickObj).addClass('active');
                        }                                            
                    }
                    else
                        alert(json['error']);
                    $('.ybc-theme-panel-loading').fadeOut();
                },
                error: function()
                {
                    $('.ybc-theme-panel-loading').fadeOut();
                }
            });
        });
        
        //Reset button
        $('#tc-reset').click(function(){
            $('.ybc-theme-panel-loading').show();
            $.ajax({
                url : '{$moduleDirl|escape:'html':'UTF-8'}ajax.php',
                type : 'post',
                dataType : 'json',
                data : {                    
                    tcreset : 'yes'
                },
                success: function(json)
                {                    
                    
                    $('.ybc-theme-panel-loading').fadeOut();
                    location.reload();
                },
                error: function()
                {
                    $('.ybc-theme-panel-loading').fadeOut();
                    location.reload();
                }
            });
        });
        //Settings button
        $('.ybc-theme-panel-btn').click(function(){          
            if(!$('.ybc-theme-panel').hasClass('moving'))
            {
                if($('.ybc-theme-panel').hasClass('closed'))
                {                        
                    $('.ybc-theme-panel').addClass('moving');
                    $('.ybc-theme-panel').animate({
                        'left' : 0
                    }, 1000,function(){
                        $('.ybc-theme-panel').removeClass('moving');
                        $('.ybc-theme-panel').removeClass('closed');
                    });
                }
                else
                {
                    $('.ybc-theme-panel').addClass('moving');
                    $('.ybc-theme-panel').animate({
                        'left' : '-302px'
                    }, 1000,function(){
                        $('.ybc-theme-panel').removeClass('moving');
                        $('.ybc-theme-panel').addClass('closed');
                    });
                }   
            }                
        });
    });
    
</script>
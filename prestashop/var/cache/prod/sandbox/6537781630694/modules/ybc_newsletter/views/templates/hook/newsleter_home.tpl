    <div class="ybc-newsletter-home ybc-mail-wrapper">
        <div class="parala_content{if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT2')} ybc-newsletter-home-bg{elseif (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3')} ybc-newsletter-home-3{else} ybc-newsletter-home-parallax{/if}" {*if isset($tc_config.YBC_TC_PARALLAX_NEWSLETTER_ON_OFF) && $tc_config.YBC_TC_PARALLAX_NEWSLETTER_ON_OFF == 1}data-top-bottom="top: 0%;" data-bottom-top="top: -75%;"{/if*}> </div>

        <div class="ynp-div-l1">
            <div class="ynp-div-l2">
                <div class="ynp-div-l3">                
                    <form class="ynp-form ynp-input-row" action="{$YBC_NEWSLETTER_ACTION|escape:'html':'UTF-8'}" method="post">
                        <div class="ynp-inner">
                            <div  class="ynp-inner-wrapper">
                                <h4 class="title_cat">{l s='Newsleter' mod='ybc_newsleter'}</h4>
                                <p>{l s='Receive exclusive offers and the latest news on  our products and services' mod=''}</p>
                                <div class="clearfix"></div>
                                <div class="form_input">
                                    <input type="text" class="ynp-email-input" value="" placeholder="{l s='Enter your email...' mod='ybc_newsleter'}" />
                                    <input class="button ynp-submit" type="submit" name="ynpSubmit" value="{l s='Subscribe Now!' mod='ybc_newsleter'}" /> 
                                </div>                        
                            </div>
                        </div>
                    </form>
                    <div class="ybc-pp-clear"></div>
                </div>
            </div>
        </div>
    </div>

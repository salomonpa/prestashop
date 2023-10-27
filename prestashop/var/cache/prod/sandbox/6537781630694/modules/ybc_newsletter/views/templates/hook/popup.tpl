<div class="ybc-newsletter-popup{if $YBC_NEWSLETTER_MOBILE_HIDE} ynp-mobile-hide{/if}">
    <div class="ynp-div-l1">
        <div class="ynp-div-l2">
            <div class="ynp-div-l3">
                <span class="ynp-close button" title="{l s='Close popup'}">{l s='Close'}</span>
                <form class="ynp-form" action="{$YBC_NEWSLETTER_ACTION|escape:'html':'UTF-8'}" method="post">
                    <div class="ynp-inner" {if $YBC_NEWSLETTER_IMAGE}style="background: url('{$YBC_NEWSLETTER_IMAGE|escape:'html':'UTF-8'}') top left no-repeat;"{/if}>
                        
                        <div class="ynp-loading-div">
                            <img class="ynp-loading" src="{$YBC_NEWSLETTER_LOADING_IMG|escape:'html':'UTF-8'}" alt="{l s='Loading...'}" />
                        </div>
                        <div  class="ynp-inner-wrapper">
                            <h2>{$YBC_NEWSLETTER_TITLE|escape:'html':'UTF-8'}</h2>
                            <p>{$YBC_NEWSLETTER_DESCRIPTION|escape:'html':'UTF-8'}</p>
                            <div class="ynp-input-div">
                                <div class="ynp-input-row">
                                    <label for="ynp-email-input">{'Email: '}</label>
                                    <input type="text" id="ynp-email-input" value="" placeholder="{l s='Enter your email...'}" />
                                    <input class="button" type="submit" name="ynpSubmit" id="ynp-submit" value="{l s='Subcribe'}" />
                                </div>                    
                                {if !$YBC_NEWSLETTER_AUTO_HIDE}
                                    <div class="ynp-input-checkbox">
                                        <input type="checkbox" id="ynp-input-dont-show" name="ynpcheckbox" />
                                        <label for="ynp-input-dont-show">{l s='Do not show this again'}</label>
                                    </div>
                                {/if}                    
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
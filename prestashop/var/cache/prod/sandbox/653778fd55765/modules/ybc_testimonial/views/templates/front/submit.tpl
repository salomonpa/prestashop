{if !$allow_comment || !$loggedIn && !$allow_guest}
    {if !$allow_comment}
        <p class="alert alert-danger">{l s='You are not allowed to submit testimonials'}</p>
    {else}
        <p class="alert alert-warning">{l s='Please sign in to write your testimonial'}</p>
    {/if}    
{else}
    <h1 class="page-heading product-listing"><span class="cat-name title_cat">{l s='Write testimonial'}</span></h1>
    {if $tm_errors}
        <ul class="alert alert-danger">
            {foreach from=$tm_errors item='error'}
                <li style="margin-left: 30px;">{$error|escape:'html':'UTF-8'}</li>
            {/foreach}
        </ul>
    {/if} 
    {if $tm_success}
        <span class="alert alert-success ybc_testimonial_success">
            {foreach from=$tm_success item='success'}
                {$success|escape:'html':'UTF-8'}
            {/foreach}
        </span>
    {/if}    
    <form class="testimonial-form" method="post" action="{$tm_action_link|escape:'html':'UTF-8'}" enctype="multipart/form-data">
        {if !$loggedIn}
            <div class="testimonial-form-row">
                <label for="tm_customer_input">{l s='Your full name: '}</label>
                <input class="form-control" name="customer" id="tm_customer_input" type="text" value="{$tm_field.customer|escape:'html':'UTF-8'}" />
            </div>
        {/if}
        {if $allow_image}
            <div class="testimonial-form-row">
                <label for="tb_avatar_image">{l s='Upload your avatar image'}</label>
                <input type="file" name="image" id="tb_avatar_image" />
            </div>
        {/if}
        <div class="testimonial-form-row">
            <label for="tm_comment_textarea">{l s='Comment: '}</label>
            <textarea name="comment" id="tm_comment_textarea" class="form-control">{$tm_field.comment|escape:'html':'UTF-8'}</textarea>
        </div>  
        {if $allow_rate}
            <div class="testimonial-form-row">
                <label>{'Rate us: '}</label>
                <div class="testimonial_rating_box">                    
                    {if $default_rating > 0 && $default_rating <5}
                        <input id="testimonial_rating" type="hidden" name="rating" value="{$default_rating|escape:'html':'UTF-8'}" />
                        {for $i = 1 to $default_rating}
                            <div rel="{$i|escape:'html':'UTF-8'}" class="star star_on testimonial_rating_star testimonial_rating_star_{$i|escape:'html':'UTF-8'}"></div>
                        {/for}
                        {for $i = $default_rating + 1 to 5}
                            <div rel="{$i|escape:'html':'UTF-8'}" class="star testimonial_rating_star testimonial_rating_star_{$i|escape:'html':'UTF-8'}"></div>
                        {/for}
                    {else}
                        <input id="testimonial_rating" type="hidden" name="rating" value="5" />
                        {for $i = 1 to 5}
                            <div rel="{$i|escape:'html':'UTF-8'}" class="star star_on testimonial_rating_star testimonial_rating_star_{$i|escape:'html':'UTF-8'}"></div>
                        {/for}
                    {/if}
                </div>
            </div>
        {/if}
        {if $use_capcha}
            <div class="testimonial-form-row">
                <label for="tm_security_code">{l s='Security code: '}</label>
                <div class="testimonial-form-capcha-wrapper">
                    <img rel="{$tm_random_code|escape:'html':'UTF-8'}" id="tm-randcode" src="{$tm_capcha_url|escape:'html':'UTF-8'}" /><span title="{l s='Refresh code'}" id="tm-randcode-update">{*l s='Refresh code'*}</span><br />
                    <input type="text" name="security_code" id="tm_security_code" class="form-control" value="" />
                </div>
            </div>
        {/if}
        <div class="testimonial-form-row">
            <input class="button" type="submit" value="{l s='Submit'}" name="tmSubmit" />
        </div>        
    </form>
{/if}
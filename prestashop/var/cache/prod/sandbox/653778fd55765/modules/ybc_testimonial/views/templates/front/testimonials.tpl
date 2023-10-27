<div class="ybc-testimonial-wrapper ybc-testimonial-wrapper-testimonials ybc-testimonial-wrapper-page">
    <h1 class="page-heading product-listing"><span class="title_cat">{l s='Testimonials'}</span></h1>
    {if $submit_tm_link}<a class="cmt_testimonial" href="{$submit_tm_link|escape:'html':'UTF-8'}">{l s='Write your testimonial'}</a>{/if}
    {if isset($tm_testimonials)}
        <ul class="ybc-testimonial-list row">
            {foreach from=$tm_testimonials item='testimonial'}            
                <li>
                    {if $testimonial.image}<img class="testimonials-avatar" src="{$testimonial.image|escape:'html':'UTF-8'}" alt="{$testimonial.customer|escape:'html':'UTF-8'}" title="{$testimonial.customer|escape:'html':'UTF-8'}" />{/if}
                    {if $allow_rate && isset($testimonial.rating) && $testimonial.rating}
                        <div class="testimonial-rating-block"  itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                            
                            <div class="testimonial_rating_wrapper"> 
                                <div class="ybc_testimonial_review">
                                    <span class="rate_star">{l s='Rating: '}</span>
                                    {for $i = 1 to $testimonial.rating}
                                        <div class="star star_on"></div>
                                    {/for}
                                    {if $testimonial.rating<5}
                                        {for $i = $testimonial.rating + 1 to 5}
                                            <div class="star"></div>
                                        {/for}
                                    {/if}
                                </div>                                        
                            </div>
                        </div>
                        <br />
                    {/if}   
                    {if $testimonial.comment}
                        <p class="testimonials-comment">{$testimonial.comment|strip_tags:'UTF-8'}</p>
                    {/if}
                    {if $testimonial.customer}<span class="testimonials-customer">{l s='--'} {ucfirst($testimonial.customer)} {l s='--'}</span>{/if}
                </li>
            {/foreach}
        </ul>
        {if $tm_paggination}
            <div class="testimonial-paggination">
                {$tm_paggination|escape:'html':'UTF-8'}
            </div>
        {/if}
    {else}
        <p>{l s='No testimonials found'}</p>
    {/if}
</div>
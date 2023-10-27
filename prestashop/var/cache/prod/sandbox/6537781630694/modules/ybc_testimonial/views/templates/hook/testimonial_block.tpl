{if $testimonials}
    <div class="block ybc-testimonial-testimonials">
        <h4 class="title_block"><a href="{$view_all_link|escape:'html':'UTF-8'}"><span class="title_cat">{l s='Testimonials'}</span></a></h4>
            <div class="block_content">
                <ul class="ybc-testimonial-ul {if $tm_use_slider}ybc-tm-slider{/if}" id="ybc_testimonial_block">
                    {foreach from=$testimonials item='testimonial'}
                        <li  class="ybc-testimonial-li">
                            {if $testimonial.image}<img class="testimonials-avatar" src="{$testimonial.image|escape:'html':'UTF-8'}" alt="{$testimonial.customer|escape:'html':'UTF-8'}" title="{$testimonial.customer|escape:'html':'UTF-8'}" />{/if}
                            {if $allow_rate && isset($testimonial.rating) && $testimonial.rating}
                                <div class="testimonial-rating-block"  itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                    {*<span>{l s='Rating: '}</span>*}
                                    <div class="testimonial_rating_wrapper"> 
                                        <div class="ybc_testimonial_review">
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
                            {/if}   
                            {if $testimonial.comment}
                                <p class="testimonials-comment">{$testimonial.comment|strip_tags:'UTF-8'}</p>
                            {/if}
                            {if $testimonial.customer}<span class="testimonials-customer">{l s='--'} {ucfirst($testimonial.customer)} {l s='--'}</span>{/if}
                        </li>
                    {/foreach}
                </ul>
            </div>
            <a class="view_all" href="{$view_all_link|escape:'html':'UTF-8'}">{'View all'}</a>
            {if $submit_tm_link}<a class="write_testimonial" href="{$submit_tm_link|escape:'html':'UTF-8'}">{l s='Write your testimonial'}</a>{/if}
    </div>
{/if}
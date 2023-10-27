{if $posts}
<div class="container">
    <div class="homeblog ybc_blog_skin_{$blog_skin}">        
        <h4 class="title-home"> <span>{l mod='ybc_blog' s='From our blog'}</span></h4>
            <ul id="{if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT != 'LAYOUT3')}ybc-blog-posts-home-list{/if}" class="{if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3')}ybc-blog-posts-home-list-layout3{/if} ybc_popular_posts">
                {*assign var='is' value=0}
                {assign var='liclosed' value=false*}                
                {foreach from=$posts item='post'}
                    {*assign var='is' value=$is+1}
                    {if $is==1*}
                        <li class="{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                        {*assign var='liclosed' value=false}
                    {/if*}
                    <!--<div class="ybc-blog-posts-home-list-item ybphli-{$is}{if $is==1} smallwidth col-sm-4{elseif $is==2} col-sm-8 largeblog{/if}">--> 
                       <div class="ybc-blog-posts-home-list-item">
                        <div class="ybc-blog-posts-home-list-item-content">
                            <div class="ybc-blog-home-post-wrapper {if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3')}col-sm-6 col-md-6{/if}">                        
                                    {if $post.thumb}<a class="ybc_item_img" href="{$post.link}"><img src="{$post.thumb}" alt="{$post.title}" title="{$post.title}" /></a>{/if}
                                    {if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT != 'LAYOUT3')}<div class="post-date"><span class="ybc_date">{date('d', strtotime($post.datetime_added))} </span><span class="ybc_m_y">{date('M', strtotime($post.datetime_added))} <br />{date('Y', strtotime($post.datetime_added))}</span> </div>{/if}
                            </div> 
                            <div class="ybc-blog-home-content-show {if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3')}col-sm-6 col-md-6{/if}">
                                {*if ($is==2)} 
                                    <div class="table">
                                        <div class="table-cell">
                                {/if*}
                                            <a class="ybc_title_block" href="{$post.link}">{$post.title}</a>                                           
                                            
                                            {if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3')}<span class="ybc_date"><i class="fa fa-calendar" aria-hidden="true"></i> {date('d M Y', strtotime($post.datetime_added))} </span>{/if}
                                            {if $post.short_description}
                                                <p class="ybc-blog-shortdesc">{$post.short_description|strip_tags:'UTF-8'|truncate:120:'...'}</p>
                                            {/if}
                                            {if $post.categories}
                                                <div class="ybc-blog-categories">
                                                    {assign var='ik' value=0}
                                                    {assign var='totalCat' value=count($post.categories)}                        
                                                    <div class="be-categories">                                                 
                                                        {foreach from=$post.categories item='cat'}
                                                            {assign var='ik' value=$ik+1}                                        
                                                            <a href="{$cat.link}">{ucfirst($cat.title)}</a>{if $ik < $totalCat}, {/if}
                                                        {/foreach}
                                                    </div>
                                                </div>
                                            {/if}
                                            <div class="ybc_count_comment">                                                                                                                                   
                                                    {if $allowComments}
                                                        <span class="ybc-blog-home-toolbar-comments">{$post.comments_num} {if $post.comments_num!=1}<span>{l s='comments'}</span>{else}<span>{l s='comment'}</span>{/if}</span> 
                                                    {/if}
                                             </div>
                                           
                                            
                            
                                            <!--<a class="read_more" href="{$post.link}">{l mod='ybc_blog' s='Read more'}</a>-->
                                {*if ($is==2)}                                         
                                        </div>
                                    </div>
                                {/if*}
                            </div> 
                        </div> 
                    </div>
                    {*if $is==2}
                        {assign var='is' value=0}
                        {assign var='liclosed' value=true}
                        </li>
                    {/if*}
                {/foreach}
                {*if !$liclosed*}</li>{*/if*}
            </ul>
            
            
            
            
            
            
        <div class="clear"></div>
    </div>
</div>
{/if}
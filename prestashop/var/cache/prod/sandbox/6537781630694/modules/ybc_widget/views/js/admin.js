/**
 * 2007-2022 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 * 
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 *  @author ETS-Soft <etssoft.jsc@gmail.com>
 *  @copyright  2007-2022 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */
 $(document).ready(function(){
    if($('.ybc_fancy').length > 0)
    {
        $('.ybc_fancy').fancybox();
    }
    
    if($('.widget_sortable').length > 0)
    {
        $( "#widget_sortable_1, #widget_sortable_2, #widget_sortable_3, #widget_sortable_4, #widget_sortable_5, #widget_sortable_6, #widget_sortable_7, #widget_sortable_8, #widget_sortable_9, #widget_sortable_10, #widget_sortable_11, #widget_sortable_12, #widget_sortable_13, #widget_sortable_14, #widget_sortable_15, #widget_sortable_16, #widget_sortable_17, #widget_sortable_18" ).sortable({
          connectWith: ".widget_sortable",
          update: function(e,ui){
            if (this === ui.item.parent()[0]){
                $.ajax({
                    url : ybc_widget_sort_url,
                    type: 'POST',
                    data: getYbcWidgetOrders(),
                    dataType : 'json',
                    success: function()
                    {
                        
                    },
                    error: function(){
                        
                    }                    
                });
            }
          }
        }).disableSelection();
    }
});

function getYbcWidgetOrders()
{
    $orderStr = 'reorder=yes';
    widgetHook = '';
    ik = 0;
    $('.widget_hook').each(function(){
        widgetHook = $(this).attr('rel');
        if($(this).find('.widget_item').length > 0)
        {
            ik=0;
            $(this).find('.widget_item').each(function(){
                ik++;
                $orderStr += '&widget['+$(this).attr('rel')+']='+ik+','+widgetHook; 
            });            
        }
    });
    return $orderStr;
}
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
    $('select[name="YBC_NEWSLETTER_TEMPLATE"]').change(function(){
        if(confirm('Do you want to load new template?'))
        {
            window.location = $('#module_form').attr('action')+'&loadteamplate='+$(this).val();
        }
        else
            return false;
    });
    $('.ybc-templates').click(function(){       
       $.fancybox({
         'autoScale': true,
         'transitionIn': 'elastic',
         'transitionOut': 'elastic',
         'speedIn': 500,
         'speedOut': 300,
         'autoDimensions': true,
         'centerOnScroll': true,
         'href' : ybc_newsletter_module_path+'views/img/images/preview/'+$('#YBC_NEWSLETTER_TEMPLATE').val()+'.png',
      }); 
    });
});
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
    if($('.ybc-newsletter-popup').length > 0)
    {
        $('.ybc-newsletter-popup').fadeIn();
    }
    $('.ynp-submit').click(function(){        
        var npemail = $(this).prev('.ynp-email-input').val();
        var npaction = $('.ynp-form').attr('action');
        $('.ynp-alert').remove();
        $('.ynp-loading-div').show();
        var ybcmailForm = $(this).parents('.ybc-mail-wrapper');
        $.ajax({
            url : npaction,
            type : 'post',
            dataType : 'json',
            data : {
                npemail : npemail
            },
            success: function(json){
                $('.ynp-loading-div').hide();
                if(json['success'])
                {
                    ybcmailForm.find('.ynp-form').after('<div class="ynp-alert alert alert-success">'+json['success']+'</div>');
                    $('.ynp-form-popup').hide();                    
                    $('.ynp-email-input').val('');
                }
                else
                {
                    ybcmailForm.find('.ynp-input-row').after('<div class="ynp-alert alert alert-danger">'+json['error']+'</div>');                    
                }                
            },
            error: function(){
                $('.ynp-loading-div').hide();
            }
        });
        return false;
    });
    $('.ynp-close').click(function(){
        var npemail = $('#ynp-email-input').val();
        var npaction = $('.ynp-form').attr('action');
        if($('#ynp-input-dont-show').is(':checked'))
        {
            $.ajax({
                url : npaction,
                type : 'post',                
                data : {
                    close : 'yes'
                }
            });
        }
        $('.ybc-newsletter-popup').hide();
    });
    $(document).on('click', '.ynp-alert.alert-danger, .ybc-newsletter-home .alert-success', function(){
        $(this).remove();
    });
});
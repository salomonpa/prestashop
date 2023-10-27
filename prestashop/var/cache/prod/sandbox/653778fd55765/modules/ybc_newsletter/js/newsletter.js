$(document).ready(function(){
    if($('.ybc-newsletter-popup').length > 0)
    {
        $('.ybc-newsletter-popup').fadeIn();
    }
    $('#ynp-submit').click(function(){
        var npemail = $('#ynp-email-input').val();
        var npaction = $('.ynp-form').attr('action');
        $('.ynp-alert').remove();
        $('.ynp-loading-div').show();
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
                    $('.ynp-form').after('<div class="ynp-alert alert alert-success">'+json['success']+'</div>');
                    $('.ynp-form').hide();                    
                    //$('.ybc-newsletter-popup').hide();
                }
                else
                {
                    $('.ynp-input-div').after('<div class="ynp-alert alert alert-danger">'+json['error']+'</div>');                    
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
});
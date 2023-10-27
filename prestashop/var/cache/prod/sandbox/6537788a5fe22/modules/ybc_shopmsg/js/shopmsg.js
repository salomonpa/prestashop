$(document).ready(function(){
    var YBC_SHOPMSG_ALERT_CONTENT = '<div class="ybc_shopmsg_alert"><div class="ybc_shopmsg_alert_body">'+YBC_SHOPMSG_MESSAGE+'</div><span class="ybc_shopmsg_btn">Close</span></div>';
    if(YBC_SHOPMSG_POSITION=='HEADER')
        $('#page').prepend(YBC_SHOPMSG_ALERT_CONTENT);
    else
        $('#page').append(YBC_SHOPMSG_ALERT_CONTENT);
    $(document).on('click','.ybc_shopmsg_btn',function(){
       $('.ybc_shopmsg_alert').remove();
       $.ajax({
            url: YBC_SHOPMSG_AJAX_PATH,
            type: 'post',
            dataType: 'json',
            data: 'close=1',
            success: function()
            {
                
            },
        }); 
    });
});
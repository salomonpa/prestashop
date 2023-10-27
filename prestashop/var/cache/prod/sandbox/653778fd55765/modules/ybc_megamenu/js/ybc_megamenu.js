$(document).ready(function(){
    $('.ybc-mm-control').click(function(){
        var wrapper = $(this).next('.ybc-mm-control-content');
        if($(this).hasClass('closed'))
        {
            var btnObj = $(this); 
            btnObj.removeClass('closed');
            btnObj.addClass('opened');
            btnObj.text('-');
            wrapper.stop(true,true).slideDown(1000);
        }
        else
        {
            var btnObj = $(this); 
            btnObj.removeClass('opened');
            btnObj.addClass('closed');
            btnObj.text('+');           
            wrapper.stop(true,true).slideUp(1000);
        }        
    });
    
    //Add active class to current menu
    ybcMMCurentUrl = window.location;
    $('.ybc-menu-item-link').each(function(){
        if($(this).attr('href') == ybcMMCurentUrl)
            $(this).addClass('active');
    });
    
});
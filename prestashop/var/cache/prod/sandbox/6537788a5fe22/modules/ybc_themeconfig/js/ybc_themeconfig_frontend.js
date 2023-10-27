
/*floating header*/

$(function() {
         if ($('.header_bottom.ybc_float_header').length > 0)
         {
            if ($(window).width() >= 768){
                if ( $('#header.layout_2').length > 0 || ('#header.layout_3').length > 0 ){
                    if ( $('.ybc-menu-wrapper').length > 0){
                        var sticky_navigation_offset_top = $('.ybc-menu-wrapper').offset().top;
                    }
                }else{
                    var sticky_navigation_offset_top = $('.header_bottom').offset().top;
                }
                var headerFloatingHeight = $('.header_bottom').height();
                var sticky_navigation = function(){
                    var scroll_top = $(window).scrollTop(); 
                    if (scroll_top > sticky_navigation_offset_top) {
                        $('.header_bottom').addClass('scroll_heading').css({ 'position': 'fixed','background-color': '#fff','z-index':'10'});
                        $('#header').css({'margin-bottom':''+headerFloatingHeight+'px'});
                        $('.header_bottom').addClass('has_fixed');
                    } else {
                        $('.header_bottom').removeClass('scroll_heading').css({ 'position': 'relative','background-color': 'transparent','z-index':'0' });
                        $('#header').css({'margin-bottom':'0px'});
                        $('.header_bottom').removeClass('has_fixed');
                    } 
                };
                
                sticky_navigation();
                 
                $(window).scroll(function() {
                     sticky_navigation();
                });
            }
         }
         
         $(window).on('resize',function(e){
            if ($('.header_bottom.ybc_float_header').length > 0)
             {
                if ($(window).width() >= 768){
                    if ( $('#header.layout_2').length > 0 || ('#header.layout_3').length > 0 ){
                        if ( $('.ybc-menu-wrapper').length > 0){
                            var sticky_navigation_offset_top = $('.ybc-menu-wrapper').offset().top;
                        }
                    }else{
                        var sticky_navigation_offset_top = $('.header_bottom.ybc_float_header').offset().top;
                    }
                    var headerFloatingHeight = $('.header_bottom.ybc_float_header').height();
                    var sticky_navigation = function(){
                        var scroll_top = $(window).scrollTop(); 
                        if (scroll_top > sticky_navigation_offset_top) {
                            $('.header_bottom.ybc_float_header').addClass('scroll_heading').css({ 'position': 'fixed','background-color': '#fff','z-index':'10'});
                            $('#header').css({'margin-bottom':''+headerFloatingHeight+'px'});
                            $('.header_bottom.ybc_float_header').addClass('has_fixed');
                        } else {
                            $('.header_bottom.ybc_float_header').removeClass('scroll_heading').css({ 'position': 'relative','background-color': 'transparent','z-index':'0' });
                            $('#header').css({'margin-bottom':'0px'});
                            $('.header_bottom.ybc_float_header').removeClass('has_fixed');
                        } 
                    };
                    
                    sticky_navigation();
                     
                    $(window).scroll(function() {
                         sticky_navigation();
                    });
                }else{
                    $('.header_bottom').removeClass('scroll_heading').css({ 'position': 'relative','background-color': 'transparent','z-index':'0' });
                    $('#header').css({'margin-bottom':'0px'});
                    $('.header_bottom').removeClass('has_fixed');
                }
                
                
             }
         });
         
         
         
         
         
    });

$(document).ready(function(){
   $(document).on('click','.header_bottom.scroll_heading .ybc-menu-toggle',function(){
        if ( $(window).width() > 767 && $(window).width() < 992){
            $(this).parent().find('#ybc-menu-main-content').toggleClass('floating_active');
        }
        return false;
   }); 
});

$(document).ready(function() {    
    if(YBC_TC_FLOAT_CSS3)
    {  
       var wow = new WOW(
          {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       false        // trigger animations on mobile devices (true is default)
          }
        );
        wow.init();
        
        $(document).on('click','#home-page-tabs a', function(){
            var datahref = $(this).attr('href');
            $('.tab-content .tab-pane:not(.active) .wow').removeClass('animated').css({'visibility':'hidden','animation-name':'none'});
            $(datahref+' .wow').delay(200).addClass('animated').css({'visibility':'visible','animation-name':'zoomIn'});                 
            
        });
        
    } else
    {
        $('.animated').removeClass('animated');
        $('.animation').removeClass('animation');        
    }    
});


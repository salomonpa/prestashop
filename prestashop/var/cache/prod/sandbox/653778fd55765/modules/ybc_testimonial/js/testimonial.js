$(document).ready(function(){ 
    if ($('#ybc_testimonial_block').length > 0)
    	$("#ybc_testimonial_block").owlCarousel({            
            items : 1,
            itemsCustom : false,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [980,1],
            itemsTablet: [767,2],
            itemsTabletSmall: false,
            itemsMobile : [479,1],
            // Navigation
            navigation : true,  
            rewindNav : false,
            //Pagination
            pagination : false,          
        });   
    $('.testimonial_rating_star').click(function(){
        var rating = parseInt($(this).attr('rel'));
        $('.testimonial_rating_star').removeClass('star_on');
        $('#testimonial_rating').val(rating);
        for(i = 1; i<= rating; i++)
        {
            $('.testimonial_rating_star_'+i).addClass('star_on');
        }
    });
    $('#tm-randcode-update').click(function(){
        originalCapcha = $('#tm-randcode').attr('src');
        originalCode = $('#tm-randcode').attr('rel');
        newCode = Math.random();
        $('#tm-randcode').attr('src', originalCapcha.replace(originalCode,newCode));
        $('#tm-randcode').attr('rel', newCode);
    });
});
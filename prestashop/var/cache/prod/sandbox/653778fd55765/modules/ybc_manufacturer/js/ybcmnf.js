$(document).ready(function(){
     if ($('#ybc-mnf-block-ul').length > 0)
    	$("#ybc-mnf-block-ul").owlCarousel({            
            items : 6,
            itemsCustom : [[0, 2], [320, 4] , [480,4], [530,4], [600,4], [680,6], [768,4], [991,5], [1199,6]],
            // Navigation
            navigation : true,  
            rewindNav : false,
            //Pagination
            pagination : false,          
        });
});
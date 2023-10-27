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
         'href' : ybc_newsletter_module_path+'images/preview/'+$('#YBC_NEWSLETTER_TEMPLATE').val()+'.png',
      }); 
    });
});
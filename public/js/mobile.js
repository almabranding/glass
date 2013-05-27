$(document).ready(function() {
    $('.menuDepl').on('click', function() {
        var id=$(this).attr('id');
        $('.'+id).queue(function() {
            $(this).clearQueue();
            if(!$(this).hasClass('despOpen') && !$('#'+id).hasClass('group')) $('.despOpen').removeClass('despOpen');
            if($('#'+id).hasClass('group')){
                if($('.'+id).hasClass('despOpen')){
                    $('#'+id).find('.plusM').html('+');
                }else{
                    $('#'+id).find('.plusM').html('-');
                }
            }
            $(this).toggleClass('despOpen', 500);
        });
    });
    $('.mobileSubMenu').on('click',function(){
        $('.accessFrame').toggle();
        if($('.accessFrame').is(':visible')){
            $(this).find('.plusM').html('-');
        }else{
            $(this).find('.plusM').html('+');
        }
    });  
    remove_cufon('label');
    if(isMobile.any()){
        remove_cufon('p');
        remove_cufon('span');
        remove_cufon('a');
        remove_cufon('label');
    }
    
});
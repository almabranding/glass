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
    reloadCufon();


});
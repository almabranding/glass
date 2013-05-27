$(window).load(function(){
    $('.teamCol').each(function(){
        if(($(this).find('.teamText').height()+$(this).find('.teamPic').height())>550){
            $(this).find('.teamText').toggleClass( "teamTextShort");
            $(this).append('<div class="teamRead">Read More</div>');
        }
        Cufon.replace('.teamRead', std);
    });
    $('.teamRead').on('click',function(){
        var col=$(this).parent();
        col.find('.teamText').toggleClass( "teamTextShort", 2000 );
        if(col.find('.teamText').hasClass( "teamTextShort" )) $(this).text('Read Less');
        else $(this).text('Read More');
        Cufon.replace('.teamRead', std);
    });
    if(isMobile.any()){
        remove_cufon('p');
        remove_cufon('span');
        remove_cufon('a');
        remove_cufon('label');
    }
   
});
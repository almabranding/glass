$(window).load(function() {
    if(BGImageArray.length<2) $('.labelNext').hide();
    var img = new Image();
    img.src = BGImageArray[BGnum];
    $(img).load(BGImageArray[BGnum],function(){
         $('.imgBG').attr('src',($(this)).attr('src'));
         $("#body-background").ezBgResize();   
         $('#body').width($(window).width()).change();
        
    });
    $(window).on('resize',function(){
        /*CHANGE ES PARA REAJUSTAR EL FONDO*/
        $('#body').width($(window).width()).change();
        
        
    });
    /*
     * EN FOCUS EN INFO APARECE LA BARRA LATERAL
     */
    $('#info').on('mouseover',function(){
        var bodySize=$(window).width()-frame;
        $('#body').queue(function () {
            $(this).clearQueue();
            $(this).animate(
                {
                    width:bodySize,
                    left:frame
                },500);
            });
        $('.accessFrame').queue(function () {
            $(this).clearQueue();
            $(this).animate({
                left:0
            },500);
        });     
    });
    /*
     * Al FOCUS EN EL BODY SE OCULTA LA BARRA LATERAL
     */
    $('#body-background').on('mouseover',function(){ 
        var bodySize=$(window).width();
        $('#body').queue(function () {
            $(this).clearQueue();
            $(this).animate(
                {
                    width:bodySize,
                    left: 0
                },
                {
                    duration:500,
                    step:function() {
                        $('#body').css('width',bodySize);
                    },
                    complete:function() {
                        $('#body').css('width',bodySize);
                    }
                  
                } 
            );
        });
        $('.accessFrame').queue(function () {
            $(this).clearQueue();
            $(this).animate({
                left:-frame
            },500);
        }); 
    });
    
    /*
     * CARGAMOS LOS NUEVOS BG
     */
    $('.labelNext').on('click',function(){
        BGnum++;
        if(BGnum>=BGImageArray.length)BGnum=0;
	var BGImage = BGImageArray[BGnum];
        $('.preload').show();
        $('.imgBG').fadeOut(function(){
            $(this).clearQueue();
            $(this).attr('src','');
            $(this).load(BGImage,function(){
                $(this).attr('src',BGImage);
                $('.preload').delay(500).hide('fast',function(){
                    $('.imgBG').fadeIn();
                });
                
            });
        });
        
        
    });
    /*
     * Mostramos el formulario
     */
    $('.startForm').on('click',function(){
        $('.frameContent').toggle();
        $('.frameForm').toggle();
    });
  
});
    

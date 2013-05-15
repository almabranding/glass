$(window).load(function() {
    if (BGImageArray.length < 2)
        $('.labelNext').hide();
    var img = new Image();
    img.src = BGImageArray[BGnum];
    $(img).load(BGImageArray[BGnum], function() {
        //$('.imgBG').attr('src',($(this)).attr('src'));
        $('html').css('background-image', 'url(\'' + BGImageArray[BGnum] + '\')');
        //$("#body-background").ezBgResize();   
        $('#body').width($(window).width()).change();

    });
    $(window).on('resize', function() {
        /*CHANGE ES PARA REAJUSTAR EL FONDO*/
        $('#body').width($(window).width()).change();


    });
    /*
     * EN CLICK EN INFO APARECE LA BARRA LATERAL
     */
    $('#info').on('click', function() {
        if (!$(this).hasClass('showed')) {
            $(this).addClass('showed');
            $('#body').queue(function() {
                $(this).clearQueue();
                $(this).animate({left: frame}, 500);
            });
            $('html').animate({backgroundPosition: frame + 'px 0'}, 500);
            $('.accessFrame').queue(function() {
                $(this).clearQueue();
                $(this).animate({left: 0}, 500);
            });
            exit;
        }
        if ($(this).hasClass('showed')) {
            $(this).removeClass('showed');
            $('#body').queue(function() {
                $(this).clearQueue();
                $(this).animate({left: 0},500);
            });
            $('html').animate({backgroundPosition: '0px 0'}, 500);
            $('.accessFrame').queue(function() {
                $(this).clearQueue();
                $(this).animate({left: -frame}, 500);
            });
            exit;
        }

    });
    /*$('#info').on('mouseover',function(){
     var bodySize=$(window).width()-frame;
     $('#body').queue(function () {
     $(this).clearQueue();
     $(this).animate(
     {
     left:frame
     },500);
     });
     $('html').animate({backgroundPosition: frame+'px 0'},500);
     $('.accessFrame').queue(function () {
     $(this).clearQueue();
     $(this).animate({
     left:0
     },500);
     });     
     });
     */
    /*
     * Al FOCUS EN EL BODY SE OCULTA LA BARRA LATERAL
     */
    /*
     $('#body-background').on('mouseover',function(){ 
     var bodySize=$(window).width();
     $('#body').queue(function () {
     $(this).clearQueue();
     $(this).animate(
     {
     left: 0
     },
     {
     duration:500
     } 
     );
     });
     $('html').animate({backgroundPosition: '0px 0'},500);
     $('.accessFrame').queue(function () {
     $(this).clearQueue();
     $(this).animate({
     left:-frame
     },500);
     }); 
     });
     */
    /*
     * CARGAMOS LOS NUEVOS BG
     */
    $('.labelNext').on('click', function() {
        BGnum++;
        if (BGnum >= BGImageArray.length)
            BGnum = 0;
        var BGImage = BGImageArray[BGnum];
        $('.preload').show();
        var img = new Image();
        img.src = BGImage;
        $(img).load(function() {
            $('html').css('background-image', 'url(\'' + BGImage + '\')');
            //$(this).attr('src',BGImage);
            $('.preload').hide('fast', function() {
                //$('.imgBG').fadeIn();
            });

        });


    });
    /*
     * Mostramos el formulario
     */
    $('.startForm').on('click', function() {
        $('.frameContent').toggle();
        $('.frameForm').toggle();
    });

});


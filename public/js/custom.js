$(document).ready(function() {
    var mapZoom=0;
    $('.labelInfo').on('mouseover',function(){
        $('#body').queue(function () {
            $(this).clearQueue();
            $(this).animate(
                {
                    width:'85%',
                    left:'15%'
                },
                {
                    duration:500,
                    step: function(now, fx) {    
                        $(this).change();    
                    }
                });
            });
        $('.accessFrame').queue(function () {
            $(this).clearQueue();
            $(this).animate({
                width:'15%'
            },500);
        });
        
    });
    $('#body-background').on('mouseover',function(){
        
        $('#body').queue(function () {
            $(this).clearQueue();
            $(this).animate(
                {
                    width:'100%',
                    left: 0
                },
                {
                    duration:500,
                    step: function(now, fx) {    
                        $(this).change();    
                    }
                }
                );
        });
        $('.accessFrame').queue(function () {
            $(this).clearQueue();
            $(this).animate({
                width:'0%'
            },500);
        });
        
    });
    $('.startForm').on('click',function(){
        $('.frameContent').toggle();
        $('.frameForm').toggle();
    });
    $('.zoomMenos').css('opacity','0.5');
    $('.mapZoom').on("click",function(){
        $('.mapZoom').css('opacity','1');
    })
   $('.zoomMas').on("click",function(){
        if(mapZoom<4){
            $('.primaryMap img').animate({
                width: '+=50%',
                left:'-=200',
                top:'-=50',
                }, 500);
            mapZoom++;
        }
        if(mapZoom===4) $('.zoomMas').css('opacity','0.5');
    })
    $('.zoomMenos').on("click",function(){
         if(mapZoom>0){
            $('.primaryMap img').animate({
                width: '-=50%',
                left:'+=200',
                top:'+=50',
                }, 500);
            mapZoom--;
         }
         if(mapZoom===0) $('.zoomMenos').css('opacity','0.5');
        
    })
    $('.fitScreen').on("click",function(){
        $('#container').toggleClass("fullScreen");
        $('#gallerys').masonry('reload');
        carousel._slideTo(0);
    })
});

    
$(document).ready(function() {
    /*
$('header').on('mouseover', '', function() {
        $('#menu li').not('.menuView').queue(function () {
            $(this).clearQueue();
            $(this).slideDown("slow");
        })
    });
    $('#container').on('mouseover', '', function() {
        $('#menu li').not('.menuView').queue(function () {
            $(this).clearQueue();
            $(this).slideUp("slow");
        })
    });
    */
   $('.zoomMas').on("click",function(){
        $('.primaryMap img').animate({
            width: '+=50%',
            left:'-=200',
            top:'-=50',
            }, 500, function() {
            // Animation complete.
        });
    })
    $('.zoomMenos').on("click",function(){
        $('.primaryMap img').animate({
            width: '-=50%',
            left:'+=200',
            top:'+=50',
            }, 500, function() {
            // Animation complete.
        });
    })
    $('.fitScreen').on("click",function(){
        $('#container').toggleClass("fullScreen");
        $('#gallerys').masonry('reload');
        carousel._slideTo(0);
    })
});

    
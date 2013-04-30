var carousel;
var carouselPos=0;
var ROOT='/glass/';
$(window).load(function(){
    carousel=$( '#carousel' ).elastislide({
        minItems: 1
    });
    $('#gallerys').masonry({
        itemSelector: '.gallerysBox',
        columnWidth: 130,
        isAnimated: true,
        isFitWidth: true
    });
    $('#gallerys').masonry('reload');
    if($('.gallerysBox').length<2)$('#bgNext').hide();
    if(getCookie('fitScreen')==='y')fitScreen();
    /*$('a').on('click',function (e) {
        var anchor=$(this).attr('rel');
        var link=$('#rel_'+anchor);
        var desc=$('.desc_'+anchor);
        $('.linkDesc').not(desc).hide('slow');
        desc.show('slow');
        changeBG(link);
    });*/
    
});
$('.fitScreen').on('click',function(){
   fitScreen();
});
$(window).on('resize',function(){
  resampleBG();    
});
function control(btn){
    if(btn==='next') carouselPos++;
    if(btn==='prev') carouselPos--;
}
$('#bgPrev').on('click',function(){
    if($(this).hasClass('framed')){
        $(this).removeClass('framed');
        $(this).animate({left:0},500);
        $('#imgBG').queue(function () {
            $(this).clearQueue();
            $(this).animate({left:0},500);
        });
        $('.accessFrame').queue(function () {
            $(this).clearQueue();
            $(this).animate({left:-frame},500);
        });     
    }else{
        $(this).addClass('framed');
        $(this).animate({left:frame},500);
        $('#imgBG').queue(function () {
            $(this).clearQueue();
            $(this).animate({left:frame},500);
        });
        $('.accessFrame').queue(function () {
            $(this).clearQueue();
            $(this).animate({left:0},500);
        });    
    }
});
$('.bgNext').on('click',function(){
    var max=$('.gallerysBox').length-1;
    carouselPos++;
    if(carouselPos>max)carouselPos=0;
    var link=$('img[ref="'+carouselPos+'"]').parent();
    changeBG(link);
});
function fitScreen(){
     if(!$("#container").hasClass('fullScreen')){
        jQuery('html,body').animate({scrollTop: $(".elastic-container").offset().top}, 1000);
        $('#wrapper').toggleClass("fullScreen");
        $('#container').toggleClass("fullScreen");
        $('#gallerys').masonry('reload');
        $("#imgFull").fadeIn();
        getScreen($('img[ref="'+carouselPos+'"]'));
        $('.elastic-container').css(
            {
                opacity:'0',
                position:'absolute',
                width:0
            }
        );   
    }else{
        $('#gallerys').masonry('reload');
        $("#imgFull").delay(1000).fadeOut(function(){
            $('.elastic-container').css(
                {
                  opacity:'1',
                  position:'relative',
                  width:'auto'
                }
            );  
            $('#container').toggleClass("fullScreen");
            $('#wrapper').toggleClass("fullScreen");
            $('#gallerys').masonry('reload');
            if(carousel) carousel._slideTo(carouselPos);
            else{
                var parent=$('img[ref="'+carouselPos+'"]').parent();
                location.hash = parent.attr('rel');
            }
        });
    }
}
function changeBG(link){
    jQuery('html,body').animate({scrollTop: $(".elastic-container").offset().top}, 1000);
    var img=link.find('img');
    carouselPos = $(img).attr('ref');
    if($("#container").hasClass('fullScreen'))getScreen($(img));
    else{
        if (carousel) {
            carousel._slideTo(carouselPos);
        } else {
            $('.carouselBox').fadeOut('slow', function() {
                location.hash = link.attr('rel');
                $(this).fadeIn('slow');
            });
        }
    }
}
function resampleBG(){
        //var Wh=$(window).height()-180;
        var img = document.getElementById('imgBG'); 
        //var bgH=Math.min(Wh,img.clientHeight);
        //$('#imgFull').css('height',img.clientHeight);
}
function getScreen(img){
    var link=img.attr('title');
    $('.preload').show();
    $('.imgBG').attr('src','');
    $.post(URL+'building/getFullScreen/'+link, function(data) {      
        if(!data['slide'] || !$('.frameContent').html()){
            $('.frameContent').html(data['content']);
            reloadCufon();
        }
        $('#fitNav').html(data['nav']);
        $('.imgBG').fadeOut(function(){
            $('.imgBG').attr('src',data['img']);
            $('.preload').delay(500).hide('fast',function(){ 
                $('.imgBG').fadeIn(function(){
                    $('#imgFull').css('height',$('.imgBG').height());
                });
                $('.preload').hide();
            }); 
        });
        $('a').off();
        $('a').on('click',function (e) {
            $('.mapLinksSel').removeClass('mapLinksSel');
            $(this).addClass('mapLinksSel');
            reloadCufon();
            var anchor=$(this).attr('rel');
            var link=$('#rel_'+anchor);
            var desc=$('.desc_'+anchor);
            $('.linkDesc').not(desc).hide('slow');
            desc.show('slow');
            changeBG(link);
        });

    },"json");
}
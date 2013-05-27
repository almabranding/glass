var carousel;
var carouselPos=0;
var ROOT='/';
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
    if($('.gallerysBox').length<2)$('.bgControl').hide();
    if(getCookie('fitScreen')==='y')fitScreen();
    $('#imgBG').queue(function () {
        $(this).clearQueue();
        $(this).css({left:frame});
    });
    $('.accessFrame').queue(function () {
        $(this).clearQueue();
        $(this).css({left:0});
    }); 
    //if(typeof initImg!= "undefined") changeBG($('#'+initImg));
    
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
$('.bgControl').on('click',function(){
    var max=$('.gallerysBox').length-1;
    if($(this).hasClass('bgPrev')){
        carouselPos--;
        if(carouselPos<0)carouselPos=max;
    }
    if($(this).hasClass('bgNext')){
        carouselPos++;
        if(carouselPos>max)carouselPos=0;
    }
    var link=$('img[ref="'+carouselPos+'"]').parent();
    changeBG(link);
});
$('#bgFrame').on('click',function(){
    if($(this).hasClass('bgFrameLess')){
        $(this).toggleClass('bgFrameLess');
        $(this).toggleClass('bgFramePlus');
        $(this).animate({left:25},500);
        $('#bgPrev').animate({left:25},500);
        $('#imgBG').queue(function () {
            $(this).clearQueue();
            $(this).animate({left:0},500);
        });
        $('.accessFrame').queue(function () {
            $(this).clearQueue();
            $(this).animate({left:-frame},500);
        });     
    }else{
        $(this).toggleClass('bgFrameLess');
        $(this).toggleClass('bgFramePlus');
        $(this).animate({left:frame+25},500);
        $('#bgPrev').animate({left:frame+25},500);
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
function fitScreen(){
     if(!$("#container").hasClass('fullScreen')){
        if(!isMobile.any()) jQuery('html,body').animate({scrollTop: $("#imgFull").offset().top}, 1000);
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
    if(!isMobile.any())jQuery('html,body').animate({scrollTop: $("#imgFull").offset().top}, 1000);
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
        var Wh=$(window).height()-180;
        var img = document.getElementById('imgBG'); 
        var bgH=Math.min(Wh,img.clientHeight);
        $('#imgFull').css('height',img.clientHeight);
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
        if(typeof rel!= "undefined") {
            $('.mapLinks[rel!="'+rel+'"]').remove();
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
        if(data['group']){
            $('.mapLinksSel').removeClass('mapLinksSel');
            $('a[rel="'+data['group']+'"]').addClass('mapLinksSel');
            $('.desc_'+data['group']).show('slow');
            reloadCufon();
        }
        $('a').off();
        $('a').on('click',function (e) {   
            var anchor=$(this).attr('rel');
            if(anchor){
                $('.mapLinksSel').removeClass('mapLinksSel');
                $(this).addClass('mapLinksSel');
                reloadCufon();
                if($(this).hasClass('group')){
                    $.post(URL+'building/getGroups/'+anchor+'/'+page, function(data2) { 
                        var link=$('#rel_'+data2);
                        var desc=$('.desc_'+anchor);
                        $('.linkDesc').not(desc).hide('slow');
                        desc.show('slow');
                        changeBG(link);
                    });
                }else{
                   var link=$('#rel_'+anchor);
                    var desc=$('.desc_'+anchor);
                    $('.linkDesc').not(desc).hide('slow');
                    desc.show('slow');
                    changeBG(link); 
                }  
            }
        });   
        if(isMobile.any()){
            remove_cufon('p');
            remove_cufon('span');
            remove_cufon('a');
            remove_cufon('label');
        }

    },"json");
}

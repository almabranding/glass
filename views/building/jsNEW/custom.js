var carousel;
var ROOT='/glass/';
$('.fitScreen').on('click',function(){
    if(!$("#container").hasClass('fullScreen')){
        $("#body-background").ezBgResize({
            img     : ROOT+"public/images/homeBG01.jpg"
        }); 
        $("#imgFull").fadeIn();
        $('.elastislide-wrapper').css(
            {
                height:0
            }
        );
        $('#whiteBG').css(
            {
                height:$('#imgFull').height()
            }
        );
        resampleBG();    
    }else{
        $("#imgFull").fadeOut();
        $('.elastislide-wrapper').css(
            {
            height:'100%'
            }
        );
        $('#whiteBG').css(
            {
                height:0
            }
        );
    }
});
$(window).on('resize',function(){
  //resampleBG();    
});


$(document).ready(function() {
     $('#gallerys').masonry({
        itemSelector: '.gallerysBox',
        columnWidth: 130,
        isAnimated: true,
        isFitWidth: true
    });
    var carousel=$( '#carousel' ).elastislide({
        minItems: 1
    });
    var frame=240;
    var w=$('#container').width()-1;
    var rw=(w+frame);
     $('.carouselBox').css({
        width: rw
    });
    
});
/*
(function() {
  $.fn.preload = function() {
    var domHolder,
      _this = this;
    domHolder = $('<div></div>').css('display', 'none');
    $('body').append(domHolder);
    return this.each(function(i, e) {
      return domHolder.append($('<img/>').attr('src', e));
    });
  };
}).call(this);*/
$(window).on("resize",function() {
     w=$('#carousel').width()-1;
     var rw=(w+frame);
     $('.carouselBox').css({
        width: rw
    });
});

function changeBG(pos,link){
    carousel._slideTo(pos);
    $('.preload').show();
    $('.imgBG').fadeOut(function(){
        $(this).attr('src','');
        $(this).load(link,function(){
            $(this).attr('src',link);
            $('.preload').delay(500).hide('fast',function(){
                $('.imgBG').fadeIn();
            });

        });
    });
}
function resampleBG(){
        var menuSize=180;
        $('#body-background').css(
            {
                height:'-='+menuSize,
                top:menuSize
            }
        ).change();
        $('#imgFull').css(
            {
                height:$(window).height()-menuSize,
                top:menuSize
            }
        ).change();
        $('#whiteBG').css(
            {
                height:$('#imgFull').height()
            }
        );
}
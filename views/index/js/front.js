$(document).ready(function() {
    var BGImage = BGImageArray[Math.floor(Math.random()*BGImageArray.length)];
    var img = new Image();
    img.src = BGImage;
    $(img).load(BGImage,function(){
         $('.imgBG').attr('src',($(this)).attr('src'));
         $("#imgFull").fadeIn();
         $('#imgFull').height($(window).height()-170).change();
    });
});
$(window).on('resize',function(){
    $('#imgFull').height($(window).height()-170).change();
});
    

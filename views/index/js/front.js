$(document).ready(function() {
    var BGImage = BGImageArray[Math.floor(Math.random()*BGImageArray.length)]
    $('.imgBG').attr('src',BGImage);
    $("#imgFull").ezBgResize();
    $("#imgFull").fadeIn();
    $('.preload').hide();
    $('#imgFull').height($(window).height()-170).change();
});
$(window).on('resize',function(){
    $('#imgFull').height($(window).height()-170).change();
});
    

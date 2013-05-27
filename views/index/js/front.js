$(document).ready(function() {
    var BGImage = BGImageArray[Math.floor(Math.random()*BGImageArray.length)];
    var img = new Image();
    img.src = BGImage;
    $(img).load(BGImage,function(){
         $('#bgFull').css('background-image','url('+$(this).attr('src')+')');
         $("#bgFull").fadeIn();
    if(isMobile.any()){
        $('#bgFull').height($(window).height()-95).change();
    }else{
        $('#bgFull').height($(window).height()-170).change();
    }
    });
});
$(window).on('resize',function(){
    if(isMobile.any()){
        $('#bgFull').height($(window).height()-95).change();
    }else{
        $('#bgFull').height($(window).height()-170).change();
    }
});
    


$(window).load(function() {
    var sample = 3;
    var smPos = 153;
    var spPos = 153;
    var sW;
    var sH;
    jQuery(function($) {
        $('#map').smoothZoom({
            zoom_MAX:200,
            button_SIZE:22,
            pan_BUTTONS_SHOW: 'NO',
            button_ALIGN:'bottom center',
            zoom_OUT_TO_FIT:'NO'
        });
    });
});

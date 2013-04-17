
    $(window).load(function() {
        $('#gallerys').masonry({
            itemSelector: '.gallerysBox',
            columnWidth: 100
        });
        var carousel = $('#carousel').elastislide({
            minItems: 1
        });
    });
    $('.gallerysBoxImg img').on('click', '', function() {
        pos = $(this).attr("ref");
        carousel._slideTo(pos);
    });

function fadeAnime() {

    $('.fadeInTrigger').each(function () { 
        var elemPos = $(this).offset().top - 50;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            $(this).addClass('_fade-up');
        }
    });

    $('.zoomInTrigger').each(function () { 
        var elemPos = $(this).offset().top - 50;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            $(this).addClass('_zoom-in');
        }
    });

    $('.flipLeftTrigger').each(function () { 
        var elemPos = $(this).offset().top - 50;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            $(this).addClass('_flip-left');
        }
    });

    
}

$(window).scroll(function () {
    fadeAnime();
});

$(window).on('load', function () {
    fadeAnime()
});


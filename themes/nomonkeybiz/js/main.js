(function ($) {
    servicesScroll();
    headerScroll();
    aboutParallax();

    //Scroll to services section when clicked
    function servicesScroll() {
        $('.services-arrow').click(function() {
            $('html, body').animate({
                scrollTop: $('.services-container').offset().top - 50
            }, 1000);
        });
    }

    //Change from sticky header on scroll
    function headerScroll() {
        var $document = $(document);

        $document.scroll(function(){   
            if ($document.scrollTop() > 670) {
                $('#masthead').addClass('fixed-header');
                $('#masthead').removeClass('transparent-header');
            } 
            else {
                $('#masthead').removeClass('fixed-header');
                $('#masthead').addClass('transparent-header');
                }
        });
    }

    //Front page about-parallax
    function aboutParallax() {
        $('.about-parallax').each(function(index, el) {
            var img = $(el).children('img');
            $(el).css('background', 'url(' + img.attr('src') + ') 50% 50% / cover fixed');
            img.remove();
        });
    }

    $('.banner-container').each(function(index, el) {
        var img = $(el).children('img');
        $(el).css('background', 'linear-gradient(to right, rgba(0,0,0,0.35), rgba(0,0,0,0.35)), url(' + img.attr('src') + ') 50% 50% / cover fixed');
        img.remove();
    });
})(jQuery);
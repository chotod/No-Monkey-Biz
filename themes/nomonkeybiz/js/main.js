(function ($) {
    servicesScroll();

    //Scroll to services section when clicked
    function servicesScroll() {
        $('.services-arrow').click(function() {
            $('html, body').animate({
                scrollTop: $('.services-container').offset().top - 50
            }, 1000);
        });
    }
})(jQuery);
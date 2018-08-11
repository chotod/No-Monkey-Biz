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

    /**
 * Function for moving navigation bar on scroll
 */
    var $document = $(document);

    $document.scroll(function(){   
        if ($document.scrollTop() > 698) {
            $('#masthead').addClass('fixed-header');
            $('#masthead').removeClass('transparent-header');
        } 
        else {
            $('#masthead').removeClass('fixed-header');
            $('#masthead').addClass('transparent-header');
            }
    });
})(jQuery);
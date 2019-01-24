(function ($) {
    servicesScroll();
    headerScroll();
    fadePhotos();

    //Scroll to services section when clicked
    function servicesScroll() {
        $('.services-arrow').click(function() {
            $('html, body').animate({
                scrollTop: $('.home-services-container').offset().top - 50
            }, 1000);
        });
    }

    //Change from sticky header on scroll
    function headerScroll() {
        var $document = $(document);

        $document.scroll(function(){   
            if ($document.scrollTop() > 900) {
                $('#masthead').addClass('fixed-header');
                $('#masthead').removeClass('transparent-header');
            } 
            else {
                $('#masthead').removeClass('fixed-header');
                $('#masthead').addClass('transparent-header');
                }
        });
    }

    //Add fading class to plugin element for photo gallery
    function fadePhotos() {
        $('.rl-gallery-item').addClass('fading');
    }

    //Trigger events when objects scroll into view
    $(window).scroll(function () {
        animateInView();
    });

    function animateInView(){
        var scrolledAmount = $(window).scrollTop(),
        bottomOfWindow = scrolledAmount + $(window).height();

        $('.fading').each(function () {
            var cardTop = $(this).offset().top;

            if(cardTop <= bottomOfWindow ){
                $(this).addClass('animate');
            } else { // else is for testing only without refreshing. either keep or remove later.
                $(this).removeClass('animate');
            } 
        });

        $('.slideIn').each(function () {
            var cardTop = $(this).offset().top;

            if(cardTop <= bottomOfWindow ){
                $(this).addClass('animateSlide');
            } else { 
                $(this).removeClass('animateSlide');
            } 
        });
    }
})(jQuery);
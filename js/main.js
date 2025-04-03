jQuery(document).ready(function($) {
    // For the fallback menu, all functionality is handled directly in header.php
    
    // Header Scroll Effect
    var header = $('.site-header');
    var scrollTrigger = 100; // Scroll distance before changing header style

    $(window).scroll(function() {
        if ($(window).scrollTop() > scrollTrigger) {
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    });

    // Close mobile menu when clicking outside
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.main-navigation').length) {
            $('.nav-menu').removeClass('active');
        }
    });

    // Smooth scroll for anchor links
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 1000);
            }
        }
    });
}); 
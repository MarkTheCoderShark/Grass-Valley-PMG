jQuery(document).ready(function($) {
    // Mobile Menu Toggle
    $('.mobile-menu-toggle').on('click', function() {
        $('.main-navigation').toggleClass('active');
    });

    // Smooth Scroll for Anchor Links
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
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        }
    });

    // Testimonials Slider
    if ($('.testimonials-slider').length) {
        $('.testimonials-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false
        });
    }

    // Sticky Header
    var header = $('.site-header');
    var headerOffset = header.offset().top;

    $(window).scroll(function() {
        if ($(window).scrollTop() > headerOffset) {
            header.addClass('sticky');
        } else {
            header.removeClass('sticky');
        }
    });

    // Form Validation
    if ($('.contact-form form').length) {
        $('.contact-form form').on('submit', function(e) {
            var form = $(this);
            var submitButton = form.find('input[type="submit"]');
            
            submitButton.prop('disabled', true);
            
            // Add your form validation and submission logic here
            
            setTimeout(function() {
                submitButton.prop('disabled', false);
            }, 2000);
        });
    }

    // Lazy Loading Images
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    } else {
        // Fallback for browsers that don't support lazy loading
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js';
        document.body.appendChild(script);
    }

    // Scroll to Top Button
    var scrollButton = $('<button class="scroll-to-top"><i class="fas fa-arrow-up"></i></button>');
    $('body').append(scrollButton);

    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            scrollButton.fadeIn();
        } else {
            scrollButton.fadeOut();
        }
    });

    scrollButton.click(function() {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
}); 
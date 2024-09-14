(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('bg-primary shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('bg-primary shadow-sm').css('top', '-150px');
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 1000,
        dots: true,
        loop: true,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });
    
})(jQuery);

document.addEventListener("DOMContentLoaded", function() {
    const readMoreBtn = document.getElementById("readMoreBtn");
    const fullText = "We specialize in building high-quality mobile and web applications that drive innovation and efficiency. Our expert team delivers solutions tailored to meet your business goals. Let us help you transform your ideas into reality. Whether you're looking for custom web solutions, mobile apps, or cloud-based services, we have the experience and expertise to deliver robust, scalable solutions that meet your needs.";

    readMoreBtn.addEventListener("click", function() {
        const paragraph = this.previousElementSibling;
        if (paragraph.innerHTML.length < fullText.length) {
            paragraph.innerHTML = fullText;
            this.innerText = "Read Less";
        } else {
            paragraph.innerHTML = fullText.substring(0, 180) + "...";
            this.innerText = "Read More";
        }
    });
});
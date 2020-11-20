(function($){
    $(document).ready(function(){

        $.cookieBar({
          declineButton: true
        });

        $('.logos').slick({
            autoplay: false,
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 8,
            slidesToScroll: 1,
            responsive: [
             {
               breakpoint: 1024,
               settings: {
                 slidesToShow: 4,
                 slidesToScroll: 4,
                 focusOnSelect: true,
               }
             },
             {
               breakpoint: 540,
               settings: {
                 slidesToShow: 3,
                 slidesToScroll: 3,
               }
             }
           ]
        })
        $('.testSlider').slick({
            autoplay: false,
            dots: false,
            arrows: true,
            prevArrow: $('.prevButton'),
            nextArrow: $('.nextButton'),
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
             {
               breakpoint: 1024,
               settings: {
                 // arrows: false,
                 // dots: true,
               }
             },
           ]
        });

        $("#book-destination").click(function(event){
            $('html, body').animate({
                scrollTop: $("#destination-form").offset().top -180
            }, 1000);
        });

        var $hamburger = $(".hamburger");
            $hamburger.on("click", function(e) {
            $hamburger.toggleClass("is-active");
            // $('.mob-bar').clearQueue();
            $('.mobnav').slideToggle();
        });


    });
})(jQuery);

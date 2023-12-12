$(document).ready(function() {
    // remove class after load
    setTimeout(function() {
        $('.main-hexagon').removeClass('animated');
    }, 300);

    $('.main-hexagon').click(function() {
        let thisItem = $(this);

        if(thisItem.hasClass('active')) {

            setTimeout(function() {
                thisItem.parent('.hexagon-container').removeClass('translate-left');
                $('.main-hexagon').removeClass('active animated');
            }, 250);

            $('#content .tab-content').hide();
            thisItem.find('.line').hide();
            thisItem.find('.sub-categories').removeClass('active');
            $('.sub-sub-category').removeClass('slide-down');
            $('.sub-categories > .hexagon ').removeClass('hidden');

        } else {
            thisItem.parent('.hexagon-container').addClass('translate-left');
            $('.main-hexagon').removeClass('active').addClass('animated');
            thisItem.addClass('active').removeClass('animated');

            setTimeout(function(){
                thisItem.find('.line').show();
            }, 700);

            setTimeout(function(){
                thisItem.find('.sub-categories').addClass('active');
            }, 800);

        }
    });

    // Sub category click
    $('.sub-categories > .hexagon ').click(function(e) {
        let thisItem = $(this);
        e.stopPropagation();
        $(this).find('.sub-sub-category').toggleClass('slide-down');

        if(thisItem.children('.sub-sub-category').hasClass('slide-down')) {
            thisItem.siblings().addClass('hidden');
        } else {
            setTimeout(function(){
                thisItem.siblings().removeClass('hidden');
            }, 350);
            $('#content .tab-content').hide();
        }
    });

    // Sub Sub Category on click
    $('.sub-sub-category .hexagon').click(function() {
        $('.right-side').show();
        $('#content .tab-content').hide();
        $('#' + $(this).data('id')).show();
    });


    $('.sub-sub-category').click(function(e) {
        e.stopPropagation();
    });
    
    //    Main Slider
    $(".main-slider .banner-slides").owlCarousel({
        loop: true,
        items: 1,
        margin: 0,
        dots: false,
        nav: true,
        animateOut: "fadeOut",
        active: true,
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 7000,
        responsive : {
            0 : {
                mouseDrag: true
            },
            768 : {
                mouseDrag: false
            }
        }
    });
    $(".main-slider .banner-carousel-btn .left-btn").on("click", function() {
        $(".main-slider .banner-slides").trigger("next.owl.carousel");
    });
    $(".main-slider .banner-carousel-btn .right-btn").on("click", function() {
        $(".main-slider .banner-slides").trigger("prev.owl.carousel");
    });
    
//    category slider
    $(".category-slider .slides").owlCarousel({
        loop: true,
        items: 3,
        dots: true,
        nav: false,
        active: true,
        margin: 20,
        smartSpeed: 1000,
        autoplay: false,
//        autoplaySpeed: 4000,
        responsive : {
            0 : {
                items: 1,
            },
            768 : {
                items: 2,
            },
            992 : {
                items: 3,
            }
        }
    });

});

// Tooltip
//tippy('[data-tippy-content]', {
//    touch: 'hold'
//});
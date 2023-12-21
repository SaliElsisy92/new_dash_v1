// Count Guests number
function countChange() {
    const targets = document.querySelectorAll('.js-form-counters')
    if (!targets) return

    targets.forEach(item => {
        const counters = item.querySelectorAll('.js-counter')

        counters.forEach(el => {
            const count = el.querySelector('.js-count')
            const buttonDown = el.querySelector('.js-down')
            const buttonUp = el.querySelector('.js-up')

            buttonDown.addEventListener('click', () => {
                if (count.innerHTML != 0) {
                    count.innerHTML = parseInt(count.innerHTML) - 1

                    if (el.getAttribute('data-value-change')) {
                        item.querySelector(el.getAttribute('data-value-change')).innerHTML = parseInt(count.innerHTML)
                    }
                }
            })

            buttonUp.addEventListener('click', () => {
                count.innerHTML = parseInt(count.innerHTML) + 1

                if (el.getAttribute('data-value-change')) {
                    item.querySelector(el.getAttribute('data-value-change')).innerHTML = parseInt(count.innerHTML)
                }
            })
        });
    })
}

$(document).ready(function () {
    'use strict';
    
// sticky header
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 200) {
            $('header').addClass('sticky');
        } else {
            $('header').removeClass('sticky');
        }
    });
    
// Mobile Nav toggle
    $('header nav .bars').click(function () {
        $(this).next('header nav .links-list').slideToggle();
        $(this).children('i').toggleClass('fa-bars fa-times');
    });
    
    
//    scroll top btn
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $('#scroll-top').fadeIn();
        } else {
            $('#scroll-top').fadeOut();
        }
    });
    $('#scroll-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 600);
    });
    
//    hotels slider
    $(".hotels-slider .uslides").owlCarousel({
        loop: true,
        items: 4,
        dots: false,
        nav: false,
        active: true,
        margin: 15,
        smartSpeed: 800,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive : {
            0 : {
                items: 1,
            },
            768 : {
                items: 2,
            },
            992 : {
                items: 4,
            }
        }
    });
    
    
//    Initiate portfolio lightbox
    try {
        const portfolioLightbox = GLightbox({
            selector: '.hotel-lightbox'
        });
    } catch {}
    
    countChange();
    
});


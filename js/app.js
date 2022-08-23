$(function() {
    // burger menu toggle
    const $burgerMenu = $('.main-nav__burger'),
        $menuWrapper = $('.main-nav__wrapper');
    $burgerMenu.on('click', e => {
        $menuWrapper.toggleClass('active');
    });

    // mobile sub-nav handler
    $('li.has-dropdown').on('click', e => {
        $(e.currentTarget).toggleClass('active');
    });

    //search hide show
    $(document).ready(function(){
        $(".search-button").click(function(){
          $(".search-input").toggle();
        });
    });

    //testimonial carousel
    $('.owl-carousel-testimonial').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
            items:1
            },
            600:{
            items:1
            },
            1000:{
            items: 1,
            nav: true,
            loop: true,
            margin: 20
            }
        }
    });

    //university carousel
    $('.owl-carousel-university').owlCarousel({
        loop:true,
        autoplay:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
            items:2
            },
            600:{
            items:2
            },
            1000:{
            items: 5,
            nav: true,
            loop: true,
            margin: 20
            }
        }
    });
});

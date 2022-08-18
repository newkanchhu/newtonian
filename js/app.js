$(function() {
    //search hide show
    $(document).ready(function(){
        $(".search-button").click(function(){
          $(".search-input").toggle();
        });
    });

    //testimonial carousel
    $('.owl-carousel').owlCarousel({
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
});

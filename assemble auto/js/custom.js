/**
 * Preloader
 */
const preloader = document.querySelector('#preloader');
if (preloader) {
    window.addEventListener('load', () => {
        preloader.remove();
    });
}

$(document).ready(function () {
    $('#product-carousel').owlCarousel({
      loop: true,
      nav: true,
      rtl: true,
      autoplay: true,
      margin: 10,
      smartSpeed: 1000,
      responsive:{
        0:{
          items: 1
        },
        600:{
          items: 2
        },
        1000:{
          items: 4
        }
      }
    });

    $('#testimonial-carousel').owlCarousel({
      loop: true,
      nav: true,
      rtl: true,
      autoplay: true,
      margin: 10,
      smartSpeed: 1000,
      autoplayTimeout: 6000,
      responsive:{
        0:{
          items: 1
        },
        600:{
          items: 1
        },
        1000:{
          items: 2
        }
      }
    });

    $('body').scrollspy({ target: '.navbar-nav' })
  });




  
	$('.accordion dt').on('click', function () {

    var current_dt = $(this);
  
    //dd of just clicked dt not active - direct sibling
    if (!$(this).next('dd').hasClass('active')){
        //call back function interprets this as selected $('dd')

        //checking if any other sibling dd's active
        if (current_dt.siblings('dd.active').length) {
            //find dd with a class of active before sliding up
            current_dt
              .siblings('dd.active')
              .slideUp(function() {
                current_dt
                  .next('dd')
                  .slideDown()
                  .addClass('active');
              })
              .removeClass('active')
              .find('dd.active')
                .hide()
                .removeClass('active');

         } else {
            current_dt.next('dd').slideDown().addClass('active');       
         }
    } else {
        //dd of just clicked dt is active - close form
        current_dt.next('dd').slideUp().removeClass('active');
    }
});




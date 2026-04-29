/**
 * Preloader
 */
const preloader = document.querySelector('#preloader');
if (preloader) {
    window.addEventListener('load', () => {
        preloader.remove();
    });
}
<<<<<<< HEAD:toshop/public/js/custom.js
=======

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


/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId)

  toggle.addEventListener('click', () =>{
      // Add show-menu class to nav menu
      nav.classList.toggle('show-menu')
      // Add show-icon to show and hide menu icon
      toggle.classList.toggle('show-icon')
  })
}

showMenu('nav-toggle','nav-menu')

/*=============== SHOW DROPDOWN MENU ===============*/
const dropdownItems = document.querySelectorAll('.dropdown__item')

// 1. Select each dropdown item
dropdownItems.forEach((item) =>{
   const dropdownButton = item.querySelector('.dropdown__button') 

   // 2. Select each button click
   dropdownButton.addEventListener('click', () =>{
       // 7. Select the current show-dropdown class
       const showDropdown = document.querySelector('.show-dropdown')
       
       // 5. Call the toggleItem function
       toggleItem(item)

       // 8. Remove the show-dropdown class from other items
       if(showDropdown && showDropdown!== item){
           toggleItem(showDropdown)
       }
   })
})

// 3. Create a function to display the dropdown
const toggleItem = (item) =>{
   // 3.1. Select each dropdown content
   const dropdownContainer = item.querySelector('.dropdown__container')

   // 6. If the same item contains the show-dropdown class, remove
   if(item.classList.contains('show-dropdown')){
       dropdownContainer.removeAttribute('style')
       item.classList.remove('show-dropdown')
   } else{
       // 4. Add the maximum height to the dropdown content and add the show-dropdown class
       dropdownContainer.style.height = dropdownContainer.scrollHeight + 'px'
       item.classList.add('show-dropdown')
   }
}

/*=============== DELETE DROPDOWN STYLES ===============*/
const mediaQuery = matchMedia('(min-width: 1118px)'),
     dropdownContainer = document.querySelectorAll('.dropdown__container')

// Function to remove dropdown styles in mobile mode when browser resizes
const removeStyle = () =>{
   // Validate if the media query reaches 1118px
   if(mediaQuery.matches){
       // Remove the dropdown container height style
       dropdownContainer.forEach((e) =>{
           e.removeAttribute('style')
       })

       // Remove the show-dropdown class from dropdown item
       dropdownItems.forEach((e) =>{
           e.classList.remove('show-dropdown')
       })
   }
}

addEventListener('resize', removeStyle)


>>>>>>> hesam-rahimi:assets/js/custom.js

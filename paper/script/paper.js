/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  } 
  

  

// When the page loads, hide all machines
//$('.machine').hide();

// When a filter button is clicked
$('.filter-btn').click(function() {
  // Get the filter type and value from the button's data attributes
  var filterType = $(this).data('type');
  var filterValue = $(this).data('toggle');

  // If the button is already active, remove the filter
  if ($(this).hasClass('active')) {
    $(this).removeClass('active');
    filterValue = '';
  }
  // Otherwise, activate the filter
  else {
    $(this).addClass('active');
  }

  // Combine all active filters into a single selector
  var selector = '';
  $('.filter-btn.active').each(function() {
    selector += $(this).data('toggle');
  });

  // If there are no active filters, show all machines
  if (selector === '') {
    $('.machine').show();
  }
  // Otherwise, filter the machines by the active filters
  else {
    $('.machine').hide();
    $(selector).show();
  }
});


var mySwiper = new Swiper(".swiper-container", {
    navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev"
},
direction: "horizontal",
loop: true,
speed: 1200,
parallax: false,
autoplay: {
delay: 5000, // Delay between slides in milliseconds
disableOnInteraction: false // Stop autoplay when user interacts with swiper
},
effect: "slide",
mousewheelControl: 1,
slidesPerView: 1,
slidesPerGroup: 1
});
     

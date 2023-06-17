function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  } 
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    slidesPerGroup: 1,
    direction: "horizontal",
    effect: "slide",
    spaceBetween: 10,
    centeredSlides: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
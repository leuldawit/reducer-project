var mySwiper = new Swiper(".swiper-container", {
  navigation: false,
  direction: "horizontal",
  loop: true,
  pagination: ".swiper-pagination",
  speed: 1200,
  paginationClickable: false, // Disable pagination clickable
  parallax: false,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false
  },
  effect: "slide",
  mousewheelControl: false, // Disable mousewheel control
  slidesPerView: 1.7,
  slidesPerGroup: 1
});
     
if (window.matchMedia("(max-width: 768px)and (min-width: 0px)").matches) {
  mySwiper.params.slidesPerView = 1;
  mySwiper.params.slidesPerGroup = 1;
  mySwiper.update();
}
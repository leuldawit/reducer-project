/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  } 
  

  
const observer = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        const counters = Array.from(document.querySelectorAll(".nums"));
        const counterValues = [];
        const speed = 40;
        
        const updateCount = (counter, target, count, index) => {
          const inc = target / speed;
          counterValues[index] = count + inc;
          if (count < target) {
            counter.innerText = Math.floor(counterValues[index]);
          } else {
            counter.innerText = target;
          }
        };
        
        counters.forEach((counter, index) => {
          counterValues.push(0)
          const interval = setInterval(() => {
            const target = +counter.getAttribute("data-val");
            const count = counterValues[index];
            if (target !== count) {
              updateCount(counter, target, count, index)
            } else {
              clearInterval(interval);
            }
          }, 1)
        });
      }
      
    });
  });
  
  observer.observe(document.querySelector('.keyFacts'));

  var mySwiper = new Swiper(".swiper-container", {
    navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev"
},
direction: "horizontal",
loop: true,
pagination: ".swiper-pagination",
speed: 1200,
paginationClickable: true,
parallax: false,
autoplay: {
delay: 5000, // Delay between slides in milliseconds
disableOnInteraction: false // Stop autoplay when user interacts with swiper
},
effect: "slide",
mousewheelControl: 1,
slidesPerView: 1.4,
slidesPerGroup: 1
});
     
if (window.matchMedia("(max-width: 768px)and (min-width: 0px)").matches) {
  mySwiper.params.slidesPerView = 1;
  mySwiper.params.slidesPerGroup = 1;
  mySwiper.update();
}
/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  } 
  
  
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
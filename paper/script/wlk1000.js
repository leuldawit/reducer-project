import ('./wnz310_600')
console.log(document.querySelectorAll('.imgCont img'))
document.querySelector('.imgCont').children.forEach(img=>{
img.addEventListener('click',function(){
 document.getElementById('bigImg').attributes.src = img.attributes.src;
})
})

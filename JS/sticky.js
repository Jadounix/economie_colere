//var
let menu = document.querySelector('.menu');
let rect = menu.getBoundingClientRect();
let toptop = rect.top + window.scrollY;
let width = rect.width;

let fake = document.createElement('div');
fake.style.width = width+'px';
fake.style.height = rect.height+'px';

// event listeners
window.addEventListener('scroll',onScroll);


function onScroll(){
  let isFixed = menu.classList.contains('fixed')
  if (window.scrollY > toptop && !isFixed) {
    menu.classList.add('fixed');
    menu.style.width = width +'px';
    menu.parentNode.insertBefore(fake,menu);
  }
  else if (window.scrollY<toptop && isFixed) {
    menu.classList.remove('fixed');
    menu.parentNode.removeChild(fake);
  }
}

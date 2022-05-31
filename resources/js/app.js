// Burger Menu  

const btnBurgerMenu = document.querySelector('.burger-menu');
const header = document.querySelector('.header');
const body = document.querySelector('body');
const overlay = document.querySelector('.overlay');
const fadeElements = document.querySelectorAll('.has-fade');

overlay.addEventListener('click', function(){

  if (header.classList.contains('open')) //Close menuu
  {
    header.classList.remove('open');
    body.classList.remove('no-scroll');
    fadeElements.forEach(function(element){
      element.classList.remove('fade-in');
      element.classList.add('fade-out');
    });

  } else { //open menu 
    body.classList.add('no-scroll');
    header.classList.add('open');
    fadeElements.forEach(function(element){
      element.classList.remove('fade-out');
      element.classList.add('fade-in');

    });
 
  }

});
btnBurgerMenu.addEventListener('click', function(){

  if (header.classList.contains('open')) //Close menuu
  {
    header.classList.remove('open');
    body.classList.remove('no-scroll');
    fadeElements.forEach(function(element){
      element.classList.remove('fade-in');
      element.classList.add('fade-out');
    });

  } else { //open menu 
    body.classList.add('no-scroll');
    header.classList.add('open');
    fadeElements.forEach(function(element){
      element.classList.remove('fade-out');
      element.classList.add('fade-in');

    });
 
  }

});


// Scroll to section (property-details page)

document.querySelectorAll('a[href^="#"]').forEach(anchor =>{
  anchor.addEventListener("click", function(e){

    e.preventDefault();
    document.querySelector(this.getAttribute("href")).scrollIntoView({

      behavior: "smooth"
    });
  });
})

function calculateDaysBetweenDates(begin, end){

}


function howManyDaysBetweenDates(begin, end){ 


}




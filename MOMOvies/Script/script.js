// NAV BAR TRANSITION
let header = document.querySelector('header');

// MENU 
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

// NAV BAR TRANSITION
window.addEventListener('scroll', ()=> {
  header.classList.toggle('shadow', window.scrollY > 0)
});


// MENU
menu.onclick = () => {
  menu.classList.toggle('bx-x');
  navbar.classList.toggle('active');
}
window.onscroll = () => {
  menu.classList.remove('bx-x');
  navbar.classList.remove('active');
}



// HEADER SLIDER
var swiper = new Swiper(".home", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});


// COMING SOON MOVIES
  var swiper = new Swiper(".coming-container", {
    slidesPerView: 5,
    spaceBetween: 5,
  autoplay: {
    delay: 2000,
  },
    pagination: {
      el: ".swiper-pagination2",
      clickable: true,
    },
    breakpoints: {
      394: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });
// NAVBAR MOBILE BURGER MENU FUNCTION
const navSlide = () => {
     const burger = document.querySelector('.burger');
     const nav = document.querySelector('.nav-links');
     const navLinks = document.querySelectorAll('.nav-links li');

     burger.addEventListener('click', function () {
          nav.classList.toggle('nav-active');

          navLinks.forEach((link, index) => {
               if (link.style.animation) {
                    link.style.animation = '';
               } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
               }
          })
     })
}
// CALLING ALL FUNCTIONS
navSlide();

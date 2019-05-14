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
var slideIndex = 0;
function carousel() {
     var x = document.getElementsByClassName("slide");
     for (var i = 0; i < x.length; i++) {
          x[i].style.display = "none";
     }
     slideIndex++;
     if (slideIndex > x.length) { slideIndex = 1 }
     x[slideIndex - 1].style.display = "block";
     setTimeout(carousel, 7000); // Change image every 7 seconds
}

navSlide();
carousel();
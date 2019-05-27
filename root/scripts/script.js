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

// IMAGE CAROUSEL FUNCTION
var slideIndex = 0;
var slides = document.getElementsByClassName("slide");
var carousel = document.getElementsByClassName("carousel")[0];
function changeSlide() {
        if(slideIndex == slides.length){
                carousel.style.transform = "translateX(0)";
                slideIndex = 1;
        }
        else if(slideIndex == 0){
                slideIndex++;
        }
        else{
                carousel.style.transform = `translateX(-${slideIndex * 100/3}%)`;
                slideIndex++;
        }
        setTimeout(changeSlide, 5000);
}

// NAVBAR STYLING FUNCTION
function navStyle() {
var el = document.getElementById("navigation");
var logo = document.getElementsByClassName("nav-logo")[0];
var liLogo = document.querySelector("#navigation > nav > ul > li:nth-child(2)");
var navLinks = document.querySelector(".nav-links");
     if(el.style.background == "#333"){
          el.style.boxShadow = "0 2px 4px rgba(0,0,0,0.5)"
     }
     if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
          el.classList.add("slideDown");
          el.style.position = "fixed";
          if(window.innerWidth > 768){
               el.style.background = "#222";
               liLogo.style.display = "none";
               logo.style.display = "block";
               navLinks.style.padding = "0";
               navLinks.style.justifyContent = "flex-end";
          }
     } else {
          el.classList.remove("slideDown");
          el.style.position = "absolute";
          if(window.innerWidth > 768){
               el.style.background = "none";
               liLogo.style.display = "block";
               logo.style.display = "none";
               navLinks.style.paddingTop = "20px";
               navLinks.style.justifyContent = "space-around";
          }else{
               el.style.background = "#222";
               liLogo.style.display = "none";
               logo.style.display = "block";
               navLinks.style.justifyContent = "space-around";
          }
     }
}

// CALLING ALL FUNCTIONS
navSlide();
changeSlide();
window.onscroll = function() {navStyle()};
window.onresize = function() {navStyle()};
window.onload = function(){
     var el = document.getElementById("navigation");
     if(el.style.background == "#333"){
          el.style.boxShadow = "0 2px 4px rgba(0,0,0,.5)"
     }
};

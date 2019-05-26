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
function navStyle() {
var el = document.getElementById("navigation");
var logo = document.getElementsByClassName("nav-logo")[0];
var liLogo = document.querySelector("#navigation > nav > ul > li:nth-child(2)");
var navLinks = document.querySelector(".nav-links");
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
navSlide();
carousel();
window.onscroll = function() {navStyle()};
window.onresize = function() {navStyle()};

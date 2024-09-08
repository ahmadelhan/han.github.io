let btn=document.querySelector(".slider");
let body=document.querySelector(".hero-header");
let body2=document.querySelector(".proficiencies-section")
let body3=document.querySelector(".contact-section");
let body4=document.querySelector(".footer");

btn.onclick=function(){
    body.classList.toggle("light-theme");
    body2.classList.toggle("light-theme")
    body3.classList.toggle("light-theme")
    body4.classList.toggle("light-theme")
}
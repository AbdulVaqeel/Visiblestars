// import Preloader from "./includes/preloader.js";

// import {mainNavigation, MainNavigationOne} from "./includes/main-navigation.js";

import slideToggle from "./includes/slidetoggle.js";
import Modal from "./includes/modal.js";
import searchCourse from "./includes/searchcourse.js";
import swiperSlider from "./includes/swiper.js";
import imgAutoAttributes from "./includes/imageautoattributes.js";
import splitHeading from "./includes/splitheading.js"; 
//import movetotop from "./includes/movetotop.js";



let slideToggleOne = new slideToggle({ 
    triggerClass: ".select-location__trigger", 
    contentClass: ".select-location__content", 
    speed: 600, 
    icon: !0, 
    iconPosition: "left", 
    iconStyle: "arrow" 
})

let slideToggleTwo = new slideToggle({ 
    triggerClass: ".other-trigger", 
    contentClass: ".other-content", 
    speed: 600, 
    icon: !0, 
    iconPosition: "left", 
    iconStyle: "plus" 
});



let modalOne = new Modal({ 
    triggerClass: ".modal-trigger", 
    contentClass: ".modal-content", 
    speed: 500 
});











// Navigation: Start
let nc = document.querySelector('.dropdownmenu'); // navigation content
let nt = document.querySelector('.navigation-trigger'); // navigation trigger
// Navigation Trigger Active state setting
nt.addEventListener("click", function() {
this.classList.toggle('active');
slidetoggle(this.nextElementSibling, 600);
},{passive: true});

// Finding all  child tag 
document.querySelectorAll(".dropdownmenu ul li").forEach((el) => {
if (el.querySelector("ul")) 
{ 
 el.querySelector("ul").classList.add('submenu'); // all submenu variable
 el.classList.add("hassubmenu"); // Adding the class 'hassubmenu' to parent <li> tag which <ul> tag
 let st = document.createElement('span'); // Dynamically Creating a span to trigger the submenu when it is clicked
 el.insertBefore(st,  el.firstElementChild.nextSibling); // Insert dynamically created <span> to next of <a> tag
 st.classList.add('trigger') // Adding a class to Dynamic Span
 let aicon = document.createElement('span');
 aicon.setAttribute("class","down-arrow-icon");
 st.appendChild(aicon) // Adding a class to Dynamic Span
}
});

let sm = document.querySelectorAll(".submenu"); // all submenu 
let st = document.querySelectorAll(".trigger"); // all submenu trigger

// makes all submenu hidden on load
sm.forEach((el)=> {
el.style.display="none";
})

// Click for all Trigger
st.forEach((el)=> {
el.addEventListener('click', function(){
el.classList.toggle('active');
slidetoggle(this.nextElementSibling, 600);
},{passive: true});
})

// slideup
let slideUp = (target, duration=500) => {
    target.style.transitionProperty = 'height, margin, padding';
    target.style.transitionDuration = duration + 'ms';
    target.style.boxSizing = 'border-box';
    target.style.height = target.offsetHeight + 'px';
    target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    window.setTimeout( () => {
      target.style.display = 'none';
      target.style.removeProperty('height');
      target.style.removeProperty('padding-top');
      target.style.removeProperty('padding-bottom');
      target.style.removeProperty('margin-top');
      target.style.removeProperty('margin-bottom');
      target.style.removeProperty('overflow');
      target.style.removeProperty('transition-duration');
      target.style.removeProperty('transition-property');
      //alert("!");
    }, duration);
  }

// slide down
let slideDown = (target, duration=500) => {
    target.style.removeProperty('display');
    let display = window.getComputedStyle(target).display;

    if (display === 'none')
      display = 'block';

    target.style.display = display;
    let height = target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    target.offsetHeight;
    target.style.boxSizing = 'border-box';
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + 'ms';
    target.style.height = height + 'px';
    target.style.removeProperty('padding-top');
    target.style.removeProperty('padding-bottom');
    target.style.removeProperty('margin-top');
    target.style.removeProperty('margin-bottom');
    window.setTimeout( () => {
      target.style.removeProperty('height');
      target.style.removeProperty('overflow');
      target.style.removeProperty('transition-duration');
      target.style.removeProperty('transition-property');
    }, duration);
  }
  
// slide toggle  
var slidetoggle = (target, duration = 500) => {
    if (window.getComputedStyle(target).display == 'none') {
      return slideDown(target, duration);
    } else {
      return slideUp(target, duration);
    }
}
// Navigation: End


/*  Course Accordians */

let cl = document.querySelectorAll(".course-lists > ul > li"); // course list li
let ccl = document.querySelectorAll(".course-category-lists > li"); // course category list li

cl.forEach((el)=>{
if(el.querySelector("ul")){
let st = document.createElement('span'); // create a span if li has ul
st.classList.add("trigger");
let stt = el.querySelector("h2 a"); // finding target to place the created span
 stt.after(st);
}
})  

ccl.forEach((el)=>{
if(el.querySelector("ul")){
let st = document.createElement('span'); // create a span if li has ul
st.classList.add("trigger");
let stt = el.querySelector("h3 a"); // finding target to place the created span
 stt.after(st);
}
})

let ct = document.querySelectorAll(".course-lists .trigger"); //course trigger

// Click for all Trigger
ct.forEach((el)=> {
el.addEventListener('click', function(){
el.classList.toggle('active');
slidetoggle(this.parentNode.nextElementSibling, 600); 
});
})


// Home Testimonials : Start
  
const swiper2 = new Swiper(".testimonials__carousel", {
  loop: true,
  speed: 1000,
  spaceBetween: 0,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  }, 
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
  },
  
});
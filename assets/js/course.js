import mainNavigation from "./includes/main-navigation.js";
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


let modalOne = new Modal({ 
    triggerClass: ".modal-trigger", 
    contentClass: ".modal-content", 
    speed: 500 
});


// Home Testimonials : Start
  
const swiper3 = new Swiper(".course-review__carousel", {
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
      spaceBetween: 20,
    },
  },
  
});

// Home Testimonials : End




// FAQ: Accordion Start

let at = document.querySelectorAll('.faq__trigger'); // accordian trigger
let ac = document.querySelectorAll('.faq__panel'); // accordian content

// making first panel is open and it's trigger is set active state
at[0].classList.add('accordion-trigger-active')
ac[0].style.height=ac[0].scrollHeight + "px";;

for (let i=0;i<at.length;i++) { // selecting all accordian triggers

at[i].addEventListener('click', function() {

// removing the minus icon of the accordian trigger when it's panel is closed
if (this.classList.contains('faq__trigger-active')){
this.classList.remove('faq__trigger-active')
}
else {
for (i=0;i<at.length;i++){
at[i].classList.remove('faq__trigger-active')
}
this.classList.add('faq__trigger-active');
}

// adding an active class on the clicked 'accordian trigger'  
let panel = this.nextElementSibling; // it is to detect the next element of 'accordian trigger'

if (panel.style.height) { // this is false state of 'accordian panel' height, so that else condition will work
panel.style.height = null; // if accordian panel has height, null will be set to them
} 

else {
// this removes all accordian panel height
for (i=0;i<ac.length;i++){ // remove this to don't want to close other panel on click of an accordian trigger
ac[i].style.height=null;
}
// this sets height for next accordian panel of the clicked accordian trigger
panel.style.height = panel.scrollHeight + "px";
} 
});
} 
// FAQ: Accordion End








/* Sticky Add Class Navigation: Start */
let courseMenu=document.querySelector(".course-menu");
let courseMenuOffsetTop=courseMenu.offsetTop;
let fixedNav=()=>{
if(window.scrollY >= courseMenuOffsetTop ) {
courseMenu.classList.add("sticky-header");
}
else {
courseMenu.classList.remove("sticky-header");
}}
window.addEventListener("scroll",fixedNav);
// /* Sticky Add Class Navigation: End */


/* Sticky Navigation: Start */

const sections = document.querySelectorAll(".course-sections");
const navLi = document.querySelectorAll(".course-menu ul li");
window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (scrollY >= sectionTop - sectionHeight / 2) {
      current = section.getAttribute("id");
    }
  });

  navLi.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });
});

/* Sticky Navigation: End */

 
// let ww=window.innerWidth;
// let wh=window.innerHeight;
// window.addEventListener('resize',stickySidebar);


// // Sidebar Form Sticky: Start
// let stickySidebar=()=>{
// window.addEventListener("scroll",function(){
//   let mc1=document.querySelector(".course-overview__col1");
//   let mc1top = mc1.offsetTop;
//   let mc1bottom = mc1.getBoundingClientRect().bottom;
  
//   let sc1=document.querySelector(".sidebar-form");
//   let sc1height = sc1.offsetHeight;

//   if(window.scrollY+100>=mc1top) {
//   sc1.style.position="absolute";
//   sc1.style.top=window.scrollY+100+"px";
//   sc1.style.width="312px";
//   }
//   else {
//   mc1.style.background="white";
//   sc1.style.position="static";
//   }
//   // bottom stickyness removal
  
//   if(mc1bottom <= sc1height+120){
//   // document.body.style.background="pink";
//   sc1.style.position="absolute";
//   sc1.style.top=870+"px";
//   }
//   else {
//   document.body.style.background="white";
//   }
//   })
// }




// Sidebar Form Sticky: End

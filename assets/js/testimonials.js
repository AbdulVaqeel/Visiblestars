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



// Testimonials Tabs: Start

function testimonialstabs() {
	// store gallery-tabs variable
	var myTabs = document.querySelectorAll("ul.testimonials-tabs__nav > li a");
  function myTabClicks(tabClickEvent) {
		for (var i = 0; i < myTabs.length; i++) {
			myTabs[i].classList.remove("active");
		}
		var clickedTab = tabClickEvent.currentTarget;
		clickedTab.classList.add("active");
		tabClickEvent.preventDefault();
		var myContentPanes = document.querySelectorAll(".testimonials-tabs__pane");
		for (i = 0; i < myContentPanes.length; i++) {
			myContentPanes[i].classList.remove("active");
		}
		var anchorReference = tabClickEvent.target;
		var activePaneId = anchorReference.getAttribute("href");
		var activePane = document.querySelector(activePaneId);
		activePane.classList.add("active");
   
	}
	for (let i = 0; i < myTabs.length; i++) {
		myTabs[i].addEventListener("click", myTabClicks)
	}
}
window.addEventListener("load", testimonialstabs );
window.addEventListener("click", testimonialstabs );
window.addEventListener("resize", testimonialstabs );
testimonialstabs(); 

// Testimonials Tabs: End







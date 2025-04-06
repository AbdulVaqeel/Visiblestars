let splitHeading = (elements, highlightClass) => {
  let headingElements = document.querySelectorAll(elements);
  headingElements.forEach((item) => {
    let headingArray = item.innerHTML.split(" ");
    const middleIndex = Math.ceil(headingArray.length / 2);
    // console.log(middleIndex);

    const firstHalf = headingArray.splice(0, middleIndex);
    const secondHalf = headingArray.splice(-middleIndex);

    const firstHalfWords = firstHalf.join(" ");
    const secondHalfWords = secondHalf.join(" ");
    const result = (item.innerHTML =
      firstHalfWords +
      " " +
      "<span class=" +
      highlightClass +
      ">" +
      secondHalfWords +
      "</span>");
  });
};
splitHeading(".homeslider__heading", "homeslider__heading-split");
splitHeading(".tailored-form-style1__heading", "tailored-form-style1__heading-split");
splitHeading(".tailored-form-style2__heading", "tailored-form-style2__heading-split");
splitHeading(".caption-box1__heading", "caption-box1__heading-split");
splitHeading(".caption-box2__heading", "caption-box2__heading-split");
splitHeading(".caption-heading2", "caption-heading2__split");
splitHeading(".heading1", "heading1__second-color");
splitHeading(".heading2", "heading2__second-color");
splitHeading(".heading-style3", "heading-style3__second-color");
splitHeading(".training-options h2", "h2__second-color");
splitHeading(".query__caption", "query__caption-second-color");
splitHeading(".course-index-intro__caption", "course-index-intro__caption-second-color");
splitHeading(".studyabroad-homeslider__heading", "studyabroad-homeslider__heading-second-color");
splitHeading(".studyabroad-introduction__heading", "studyabroad-introduction__heading-second-color");
splitHeading(".caption-pic-box__heading", "caption-pic-box__heading-second-color");
splitHeading(".ready-step__heading", "ready-step__heading-second-color");

// Subpage Banner Heading
splitHeading(".subpage-banner-heading", "subpage-banner-heading__second-color");

export default splitHeading;  

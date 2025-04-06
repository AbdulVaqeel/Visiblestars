let imgAutoAttributes = () => {
  window.onload = () => {
    // Global Variable
    let img = document.getElementsByTagName("img");

    // finding all images with loop
    for (let i = 0; i < img.length; i++) {
      // Finding the filename from SRC attribute
      let fileNameSplit = img[i].currentSrc.split("/").slice(-1);
      let fileNameOnly = String(fileNameSplit).split(".").slice(0, 1).join("");
      //console.log(fileNameOnly);

      // make each word Capitalize
      const arr = fileNameOnly.split("-");
      for (let i = 0; i < arr.length; i++) {
        arr[i] = arr[i].charAt(0).toUpperCase() + arr[i].slice(1);
      }
      const str2 = arr.join(" ");
      // console.log(str2);

      // Setting the filename from SRC attribute
      //console.log(img[i].hasAttribute("alt"));
      // the filename capture and set to alt attribute, if img tag has not manually writen "alt" attribute
      if (!img[i].hasAttribute("alt")) {
        img[i].setAttribute("alt", str2);
      }

      if (!img[i].hasAttribute("width")) {
        // Setting width attribute if the image does'nt have manually written width
        let imgWidth = img[i].naturalWidth;
        let setWidth = img[i].setAttribute("width", imgWidth);
      }
      if (!img[i].hasAttribute("height")) {
        // Setting height attribute if the image does'nt have manually written height
        let imgHeight = img[i].naturalHeight;
        let setHeight = img[i].setAttribute("height", imgHeight);
      }
    }
  };
};
imgAutoAttributes();
export default imgAutoAttributes;

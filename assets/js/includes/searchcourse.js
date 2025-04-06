// 6. Search Course

const searchCourse = () => {
    function Get(url) {
      var HttpReq = new XMLHttpRequest();
      HttpReq.open("GET", url, false);
      HttpReq.send(null);
      return HttpReq.responseText;
    }

    var courses12 = [
      { name: "Accounting Courses" },
      { name: "Administration Courses" },
      { name: "AutoCAD 2D" },
      { name: "AutoCAD 3D Training" },
      { name: "AutoCAD Electrical" },
      { name: "AutoCAD MEP" },
      { name: "BIM" },
      { name: "Business Management Training" },
      { name: "Corporate Training" },
      { name: "Cyber Security Courses" },
      { name: "Civil 3D" },
      { name: "CompTIA Certification Courses" },
      
      { name: "CompTIA A+" },
      { name: "CompTIA Server+" },
      { name: "DevOps Courses" },
      { name: "Data Analytics" },
      { name: "Digital Marketing Courses" },
      { name: "Designing Courses" },
      { name: "IELTS" },
      { name: "OET" },
      { name: "English" },
      { name: "PHP" },
      { name: "Python" },
      { name: "JavaScript" },
      { name: "jQuery" },
      { name: "Java" },
    ];
  
    // courses1.map(function (element, index) {
    //   courses1[index] = element.name;
    // });
  
    // variables
    var search_input1 = document.querySelector(".search-input1");
    var results1,
      courses_show1 = [];
    var autocomplete_results1 = document.getElementById("autocomplete-results1");
    var input_val1;
  
    // functions
  
    function autocomplete1(val1) {
      var courses_returned1 = [];
      let i;
      for (i = 0; i < courses1.length; i++) {
        if (courses1[i].name.toLowerCase().includes(val1)) {
          courses_returned1.push(courses1[i]);
        }
  
        // if (val1 === courses1[i].toLowerCase().slice(0, val1.length)) {
        //   courses_returned1.push(courses1[i]);
        // }
      }
      return courses_returned1;
    }
  
    // events
  
    if (Boolean(search_input1)) {
      // This Boolean is important. Its Removes console error if the element is not in other the pages
      search_input1.onkeyup = function (e) {
        input_val1 = this.value.toLowerCase();
  
        if (input_val1.length > 0) {
          autocomplete_results1.innerHTML = "";
          courses_show1 = autocomplete1(input_val1);
          let i;
        
    for (i = 0; i < courses_show1.length; i++) {
      autocomplete_results1.innerHTML +=
        "<li id=" +
        courses_show1[i].slug +
        ' class="list-item">' +
        courses_show1[i].name +
        "</li>";
    }
          autocomplete_results1.style.display = "block";
        } else {
          courses_show1 = [];
          autocomplete_results1.innerHTML = "";
        }
      };
  
      // Get the element, add a click listener...
      document
        .getElementById("autocomplete-results1")
        .addEventListener("click", function (e) {
          // e.target is the clicked element!
          // If it was a list item
          if (e.target && e.target.nodeName == "LI") {
            // List item found!  Output the value!
            window.location.href =baseurl+e.target.id;
            search_input1.value = e.target.innerHTML;
            autocomplete_results1.innerHTML = null; //empty the value
          }
        });
    }
  
    // Auto Suggestion Element: 2
  
    // variables
    var search_input2 = document.querySelector(".search-input2");
    var results2,
      courses_show1 = [];
    var autocomplete_results2 = document.getElementById("autocomplete-results2");
  
    // events
  
    if (Boolean(search_input2)) {
      // This Boolean is important. Its Removes console error if the element is not in other the pages
      search_input2.onkeyup = function (e) {
        input_val1 = this.value.toLowerCase();
  
        if (input_val1.length > 0) {
          autocomplete_results2.innerHTML = "";
          courses_show1 = autocomplete1(input_val1);
  
          for (let i = 0; i < courses_show1.length; i++) {
            autocomplete_results2.innerHTML +=
              "<li id=" +
              courses_show1[i].slug +
              ' class="list-item">' +
              courses_show1[i].name +
              "</li>";
          }
          autocomplete_results2.style.display = "block";
        } else {
          courses_show1 = [];
          autocomplete_results2.innerHTML = "";
        }
      };
  
      // Get the element, add a click listener...
      document
        .getElementById("autocomplete-results2")
        .addEventListener("click", function (e) {
          // e.target is the clicked element!
          // If it was a list item
          if (e.target && e.target.nodeName == "LI") {
            // List item found!  Output the value!
            console.log(e.target.innerHTML);
            search_input2.value = e.target.innerHTML;
            autocomplete_results2.innerHTML = null; //empty the value
          }
        });
    }
  
    // Auto Suggestion Element: 3
    // variables
    var search_input3 = document.querySelector(".search-input3");
    var results3,
      courses_show1 = [];
    var autocomplete_results3 = document.getElementById("autocomplete-results3");
  
    // events
  
    if (Boolean(search_input3)) {
      // This Boolean is important. Its Removes console error if the element is not in other the pages
      search_input3.onkeyup = function (e) {
        input_val1 = this.value.toLowerCase();
  
        if (input_val1.length > 0) {
          autocomplete_results3.innerHTML = "";
          courses_show1 = autocomplete1(input_val1);
  
          for (let i = 0; i < courses_show1.length; i++) {
            autocomplete_results3.innerHTML +=
              "<li id=" +
              courses_show1[i].slug +
              ' class="list-item">' +
              courses_show1[i].name +
              "</li>";
          }
          autocomplete_results3.style.display = "block";
        } else {
          courses_show1 = [];
          autocomplete_results3.innerHTML = "";
        }
      };
  
      // Get the element, add a click listener...
      document.getElementById("autocomplete-results3").addEventListener(
        "click",
        function (e) {
          // e.target is the clicked element!
          // If it was a list item
          if (e.target && e.target.nodeName == "LI") {
            // List item found!  Output the value!
            // console.log(e.target.innerHTML);
  
            search_input3.value = e.target.innerHTML;
            autocomplete_results3.innerHTML = null; //empty the value
            chnagemycourse();
          }
        },
        { passive: true }
      );
    }


// Auto Suggestion Element: 4
    // variables
    var search_input4 = document.querySelector(".search-input4");
    var results4,
      courses_show1 = [];
    var autocomplete_results4 = document.getElementById("autocomplete-results4");
  
    // events
  
    if (Boolean(search_input4)) {
      // This Boolean is important. Its Removes console error if the element is not in other the pages
      search_input4.onkeyup = function (e) {
        input_val1 = this.value.toLowerCase();
  
        if (input_val1.length > 0) {
          autocomplete_results4.innerHTML = "";
          courses_show1 = autocomplete1(input_val1);
  
          for (let i = 0; i < courses_show1.length; i++) {
            autocomplete_results4.innerHTML +=
              "<li id=" +
              courses_show1[i].slug +
              ' class="list-item">' +
              courses_show1[i].name +
              "</li>";
          }
          autocomplete_results4.style.display = "block";
        } else {
          courses_show1 = [];
          autocomplete_results4.innerHTML = "";
        }
      };
  
      // Get the element, add a click listener...
      document.getElementById("autocomplete-results4").addEventListener(
        "click",
        function (e) {
          // e.target is the clicked element!
          // If it was a list item
          if (e.target && e.target.nodeName == "LI") {
            // List item found!  Output the value!
            // console.log(e.target.innerHTML);
  
            search_input4.value = e.target.innerHTML;
            autocomplete_results4.innerHTML = null; //empty the value
            chnagemycourse();
          }
        },
        { passive: true }
      );
    }





    



// Auto Suggestion Element: 4



// Auto Suggestion Element: 5
    // variables
    var search_input5 = document.querySelector(".search-input5");
    var results5,
      courses_show1 = [];
    var autocomplete_results5 = document.getElementById("autocomplete-results5");
  
    // events
  
    if (Boolean(search_input5)) {
      // This Boolean is important. Its Removes console error if the element is not in other the pages
      search_input5.onkeyup = function (e) {
        input_val1 = this.value.toLowerCase();
  
        if (input_val1.length > 0) {
          autocomplete_results5.innerHTML = "";
          courses_show1 = autocomplete1(input_val1);
  
          for (let i = 0; i < courses_show1.length; i++) {
            autocomplete_results5.innerHTML +=
              "<li id=" +
              courses_show1[i].slug +
              ' class="list-item">' +
              courses_show1[i].name +
              "</li>";
          }
          autocomplete_results5.style.display = "block";
        } else {
          courses_show1 = [];
          autocomplete_results5.innerHTML = "";
        }
      };
  
      // Get the element, add a click listener...
      document.getElementById("autocomplete-results5").addEventListener(
        "click",
        function (e) {
          // e.target is the clicked element!
          // If it was a list item
          if (e.target && e.target.nodeName == "LI") {
            // List item found!  Output the value!
            // console.log(e.target.innerHTML);
  
            search_input5.value = e.target.innerHTML;
            autocomplete_results5.innerHTML = null; //empty the value
            chnagemycourse();
          }
        },
        { passive: true }
      );
    }





    
  


// Auto Suggestion Element: 5

// Auto Suggestion Element: 6
    // variables
    var search_input6 = document.querySelector(".search-input6");
    var results6,
      courses_show1 = [];
    var autocomplete_results6 = document.getElementById("autocomplete-results6");
  
    // events
  
    if (Boolean(search_input6)) {
      // This Boolean is important. Its Removes console error if the element is not in other the pages
      search_input6.onkeyup = function (e) {
        input_val1 = this.value.toLowerCase();
  
        if (input_val1.length > 0) {
          autocomplete_results6.innerHTML = "";
          courses_show1 = autocomplete1(input_val1);
  
          for (let i = 0; i < courses_show1.length; i++) {
            autocomplete_results6.innerHTML +=
              "<li id=" +
              courses_show1[i].slug +
              ' class="list-item">' +
              courses_show1[i].name +
              "</li>";
          }
          autocomplete_results6.style.display = "block";
        } else {
          courses_show1 = [];
          autocomplete_results6.innerHTML = "";
        }
      };
  
      // Get the element, add a click listener...
      document.getElementById("autocomplete-results6").addEventListener(
        "click",
        function (e) {
          // e.target is the clicked element!
          // If it was a list item
          if (e.target && e.target.nodeName == "LI") {
            // List item found!  Output the value!
            // console.log(e.target.innerHTML);
  
            search_input6.value = e.target.innerHTML;
            autocomplete_results6.innerHTML = null; //empty the value
            chnagemycourse();
          }
        },
        { passive: true }
      );
    }




    
  


// Auto Suggestion Element: 6
  
   




};
  searchCourse();
  export default searchCourse;
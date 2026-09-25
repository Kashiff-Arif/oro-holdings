$(document).ready(function () {
    OROHoldings.init({

    });
});

var self1;


var OROHoldings = {
    init: function (options) {
        this.settings = options;

        self1 = this;
        this.utilities();
    },

    


    utilities: function () { 
         $('select').niceSelect();
          

        
    },


};


const loader = document.getElementById("pageLoader");
const progressBar = document.querySelector(".loader-progress-bar");

let progress = 0;

if (loader) {
  const loaderInterval = setInterval(() => {
    progress += Math.floor(Math.random() * 5) + 1;

    if (progress >= 100) {
      progress = 100;
      clearInterval(loaderInterval);

      setTimeout(() => {
        loader.classList.add("hide");
      }, 300);
    }

    if (progressBar) {
      progressBar.style.width = `${progress}%`;
    }
  }, 80);
}

// document.addEventListener("DOMContentLoaded", () => {
//     gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

//     const smoother = ScrollSmoother.create({
//         wrapper: "#smooth-wrapper",
//         content: "#smooth-content",
//         smooth: 1.6,
//         effects: true,
//     });
// });

const textarea = document.getElementById("coverNote");
const currentCount = document.getElementById("currentCount");

textarea.addEventListener("input", function () {
    currentCount.textContent = textarea.value.length;
});
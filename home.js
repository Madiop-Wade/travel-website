$(function () {
  // Slider
  $(".slider").each(function () {
    var slider = $(this),
      slides = slider.find(".slide"),
      totalSlides = slides.length,
      currIndex = 0,
      imgCache = [],
      intervalTime = 5000,
      sliderInterval;

    // fades in and out slides
    function cycleItems() {
      var currSlide = slides.eq(currIndex);

      slides.fadeOut(500).css("z-index", 1);
      currSlide.fadeIn(500).css("z-index", 5);
    } // end cycleItem

    // Changes slides
    function changeSlide() {
      currIndex += 1;

      if (currIndex > totalSlides - 1) {
        currIndex = 0;
      }

      cycleItems();
    } // end changeSlide

    // Timer for changeSlide
    function startSlider() {
      clearInterval(sliderInterval);

      sliderInterval = setInterval(function () {
        changeSlide();
      }, intervalTime);
    } // end startSlider

    // preload the img before starting the Slider
    (function preloader() {
      if (currIndex < totalSlides) {
        // load img
        imgCache[currIndex] = new Image();
        imgCache[currIndex].src = slides.eq(currIndex).find("img").attr("src");
        imgCache[currIndex].onload = function () {
          currIndex += 1;
          preloader();
        };
      } else {
        currIndex = 0;
        cycleItems();
        startSlider();
      }
    })(); // end preloader

    // click on next
    $(".next-slide").on("click", function () {
      currIndex += 1;

      if (currIndex > totalSlides - 1) {
        currIndex = 0;
      }

      cycleItems();
      startSlider((intervalTime = 10000));
    }); // end click of next

    // click on prev
    $(".prev-slide").on("click", function () {
      currIndex -= 1;

      if (currIndex < 0) {
        currIndex = totalSlides - 1;
      }

      cycleItems();
      startSlider((intervalTime = 10000));
    }); // end click on prev
  }); // end Slider
});

const target = document.getElementById("target");
let array = ["explorer", "voyagerr", "decouvrir", "strong"];
let wordIndex = 0;
let letterIndex = 0;

const createLetter = () => {
  const letter = document.createElement("span");

  letter.classList.add("letter");
  letter.style.opacity = "0";
  letter.style.animation = "anim 5s ease forwards";
  letter.textContent = array[wordIndex][letterIndex];
  console.log(letter.textContent);

  target.appendChild(letter);

  setTimeout(() => {
    letter.remove();
  }, 2300);
};

const loop = () => {
  setTimeout(() => {
    if (wordIndex >= array.length) {
      wordIndex = 0;
      letterIndex = 0;
      loop();
    } else if (letterIndex < array[wordIndex].length) {
      createLetter();
      letterIndex++;
      loop();
    } else {
      letterIndex = 0;
      wordIndex++;
      setTimeout(() => {
        loop();
      }, 2000);
    }
  }, 80);
};

loop();

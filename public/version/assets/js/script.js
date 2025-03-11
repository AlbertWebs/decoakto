// add Event on multiple elment

const addEventOnElements = function (elements, eventType, callback) {
    for (let i = 0; i < elements.length; i++) {
      elements[i].addEventListener(eventType, callback);
    }
  }


  const navItems = document.querySelectorAll(".nav-item");

  navItems.forEach((item) => {
    if (item.classList.contains("with-submenu")) {
      item.addEventListener("click", (event) => {
        event.preventDefault();
        item.classList.toggle("active");
      });
    }
  });



  const sliderContainers = document.querySelectorAll(".slider-container");

  sliderContainers.forEach((container) => {
    const slider = container.querySelector(".slider");
    const slides = slider.querySelectorAll(".slide");
    const preview = container.querySelector(".preview");
    let activeSlideIndex = 0;
    let isPaused = false;
    const slideInterval = 10000; // 10 seconds interval, you can adjust this as needed

    slides.forEach((slide, index) => {
      const img = slide.querySelector("img");
      const previewImg = document.createElement("img");
      previewImg.src = img.src;
      previewImg.alt = img.alt;
      previewImg.addEventListener("click", () => {
        setActiveSlide(index);
      });
      previewImg.addEventListener("mouseenter", () => {
        isPaused = true;
      });
      previewImg.addEventListener("mouseleave", () => {
        isPaused = false;
      });
      preview.appendChild(previewImg);
    });

    function setActiveSlide(index) {
      activeSlideIndex = index;
      updateSliderPosition();
      updateActivePreview();
    }

    function updateSliderPosition() {
      slider.style.transform = `translateX(-${activeSlideIndex * 100}%)`;
    }

    function updateActivePreview() {
      const previewImages = preview.querySelectorAll("img");
      previewImages.forEach((img, index) => {
        if (index === activeSlideIndex) {
          img.classList.add("active");
        } else {
          img.classList.remove("active");
        }
      });
    }

    function nextSlide() {
      if (!isPaused) {
        activeSlideIndex = (activeSlideIndex + 1) % slides.length;
        updateSliderPosition();
        updateActivePreview();
      }
    }

    // Start the automatic slide movement
    let slideIntervalId = setInterval(nextSlide, slideInterval);

    // Pause the automatic slide movement when hovering on the preview images
    preview.addEventListener("mouseenter", () => {
      isPaused = true;
    });

    preview.addEventListener("mouseleave", () => {
      isPaused = false;
    });
  });





  /**
   * PRELOAD
   *
   * loading will be end after document is loaded
   */



  const preloader = document.querySelector("[data-preaload]");

  setTimeout(function() {
      preloader.classList.add("loaded");
      document.body.classList.add("loaded");
      }, 1000);

  // image with preview


  // products
  const sliderButtonsVersion = document.querySelectorAll(".slider-btn_version");
  const sliderContentsVersion = document.querySelectorAll(".slider-content_version");



  let activeSlideVersion = 0; // Index of the active slide

  // Show the first slide and hide others
  sliderContentsVersion.forEach((content, index) => {
    if (index === activeSlideVersion) {
      content.classList.remove("hidden");
    } else {
      content.classList.add("hidden");
    }
  });

  sliderButtonsVersion.forEach((button, index) => {
    button.addEventListener("click", () => {
      // Hide the current active slide
      sliderContentsVersion[activeSlideVersion].classList.add("hidden");

      // Update the active slide index
      activeSlideVersion = index;

      // Show the new active slide
      sliderContentsVersion[activeSlideVersion].classList.remove("hidden");
    });
  });


  // sing single products








  /**
   * NAVBAR
   */

  const navbar = document.querySelector("[data-navbar]");
  const navTogglers = document.querySelectorAll("[data-nav-toggler]");
  const overlay = document.querySelector("[data-overlay]");

  const toggleNavbar = function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("nav-active");
  };

  addEventOnElements(navTogglers, "click", toggleNavbar);

  /**
   * HEADER & BACK TOP BTN
   */

  const header = document.querySelector("[data-header]");
  const backTopBtn = document.querySelector("[data-back-top-btn]");

  let lastScrollPos = 0;

  const hideHeader = function () {
    const isScrollBottom = lastScrollPos < window.scrollY;
    if (isScrollBottom) {
      header.classList.add("hide");
    } else {
      header.classList.remove("hide");
    }

    lastScrollPos = window.scrollY;
  };

  window.addEventListener("scroll", function () {
    if (window.scrollY >= 50) {
      header.classList.add("active");
      backTopBtn.classList.add("active");
      hideHeader();
    } else {
      header.classList.remove("active");
      backTopBtn.classList.remove("active");
    }
  });

  /**
   * HERO SLIDER
   */

  /**
   * SLIDE SHOW
   */

  const slideshow = document.querySelector(".slideshow");
  const carousel = document.querySelector(".carousel");
  const slides = document.querySelectorAll(".slide");
  const slideWidth = slides[0].getBoundingClientRect().width;

  let index = 0,
    firstLast = false,
    intervalId;

  document.querySelector(".next").addEventListener("click", () => {
    index === slides.length - 1 && (index = -1);
    carousel.style.transform = `translateX(-${++index * slideWidth}px)`;
  });

  document.querySelector(".prev").addEventListener("click", () => {
    index === 0 && (index = slides.length);
    carousel.style.transform = `translateX(-${--index * slideWidth}px)`;
  });

  /**
   * TEXT ANIMATION EFFECT FOR HERO SECTION
   */

  const letterBoxes = document.querySelectorAll("[data-letter-effect]");

  let activeLetterBoxIndex = 0;
  let lastActiveLetterBoxIndex = 0;
  let totalLetterBoxDelay = 0;

  const setLetterEffect = function () {
    // loop through all letter boxes
    for (let i = 0; i < letterBoxes.length; i++) {
      // set initial animation delay
      let letterAnimationDelay = 0;

      // get all character from the current letter box
      const letters = letterBoxes[i].textContent.trim();
      // remove all character from the current letter box
      letterBoxes[i].textContent = "";

      // loop through all letters
      for (let j = 0; j < letters.length; j++) {
        // create a span
        const span = document.createElement("span");

        // set animation delay on span
        span.style.animationDelay = `${letterAnimationDelay}s`;

        // set the "in" class on the span, if current letter box is active
        // otherwise class is "out"
        if (i === activeLetterBoxIndex) {
          span.classList.add("in");
        } else {
          span.classList.add("out");
        }

        // pass current letter into span
        span.textContent = letters[j];

        // add space class on span, when current letter contain space
        if (letters[j] === " ") span.classList.add("space");

        // pass the span on current letter box
        letterBoxes[i].appendChild(span);

        // skip letterAnimationDelay when loop is in the last index
        if (j >= letters.length - 1) break;
        // otherwise update
        letterAnimationDelay += 0.05;
      }

      // get total delay of active letter box
      if (i === activeLetterBoxIndex) {
        totalLetterBoxDelay = Number(letterAnimationDelay.toFixed(2));
      }

      // add active class on last active letter box
      if (i === lastActiveLetterBoxIndex) {
        letterBoxes[i].classList.add("active");
      } else {
        letterBoxes[i].classList.remove("active");
      }
    }

    setTimeout(function () {
      lastActiveLetterBoxIndex = activeLetterBoxIndex;

      // update activeLetterBoxIndex based on total letter boxes
      activeLetterBoxIndex >= letterBoxes.length - 1
        ? (activeLetterBoxIndex = 0)
        : activeLetterBoxIndex++;

      setLetterEffect();
    }, totalLetterBoxDelay * 1000 + 3000);
  };

  // call the letter effect function after window loaded
  window.addEventListener("load", setLetterEffect);
  /**
   * PARALLAX EFFECT
   */

  const parallaxItems = document.querySelectorAll("[data-parallax-item]");

  let x, y;

  window.addEventListener("mousemove", function (event) {
    x = (event.clientX / window.innerWidth) * 10 - 5;
    y = (event.clientY / window.innerHeight) * 10 - 5;

    // reverse the number eg. 20 -> -20, -5 -> 5
    x = x - x * 2;
    y = y - y * 2;

    for (let i = 0, len = parallaxItems.length; i < len; i++) {
      x = x * Number(parallaxItems[i].dataset.parallaxSpeed);
      y = y * Number(parallaxItems[i].dataset.parallaxSpeed);
      parallaxItems[i].style.transform = `translate3d(${x}px, ${y}px, 0px)`;
    }
  });

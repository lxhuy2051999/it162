"use strict";

(function controlHeaderMenu() {
  const btnOpen = document.querySelector("header button.mobile-menu-open");
  const menu = document.querySelector("header nav");
  const flag = "show";

  btnOpen.addEventListener("click", () => {
    menu.classList.toggle(flag);
  });
  menu.addEventListener("click", () => {
    menu.classList.toggle(flag);
  });
})();
(function ShowHeaderLogo() {
  const headerLogo = document.querySelector("header .logo");
  const triggerHide = document.querySelector(".home-trigger.part-5");
  const triggerShow = document.querySelector(".services");

  const hideHeaderLogo = function (entries, observer) {
    const [entry] = entries;

    if (!entry.isIntersecting) return;
    headerLogo.classList.add("fade-top");

    // prevent the header logo blink after the page is loaded
    headerLogo.classList.remove("hide");
  };

  const showHeaderLogo = function (entries, observer) {
    const [entry] = entries;

    if (!entry.isIntersecting) return;
    headerLogo.classList.remove("fade-top");
  };

  const headerLogoShowObserver = new IntersectionObserver(showHeaderLogo, {
    root: null,
    threshold: 0.2,
  });
  const headerLogoHideObserver = new IntersectionObserver(hideHeaderLogo, {
    root: null,
    threshold: 0.8,
  });

  // prevent the header logo blink after the page is loaded
  headerLogo.classList.add("hide");
  headerLogo.classList.add("fade-top");

  headerLogoHideObserver.observe(triggerHide);
  headerLogoShowObserver.observe(triggerShow);
})();
(function runHomeEffect() {
  const allTriggers = document.querySelectorAll(".home-trigger");
  const halfLeft = document.querySelector(".home .half-left");
  const contentContainer = halfLeft.querySelector(".content");
  const content1 = contentContainer.querySelector(".intro-1");
  const content2 = contentContainer.querySelector(".intro-2");
  const imageContainer = document.querySelector(".home .image-container");
  const image1 = imageContainer.querySelector(".image-1");
  const image2 = imageContainer.querySelector(".image-2");

  // these two fade functions below produce animation
  function fade(elements) {
    elements.forEach((element) => {
      element.classList.add("fade-bottom");
    });
  }
  function removeFade(elements) {
    elements.forEach((element) => {
      element.classList.remove("fade-bottom");
    });
  }

  // The "show" and "hide" functions below help prevent element from blinking
  function hide(elements) {
    elements.forEach((element) => {
      element.classList.add("hide");
    });
  }
  function show(elements) {
    elements.forEach((element) => {
      element.classList.remove("hide");
    });
  }

  // The "show" and "hide" imageContainer functions below produce animation on small screen
  function showImageContainer() {
    let imageContainerPosition = window
      .getComputedStyle(imageContainer)
      .getPropertyValue("position");
    if (imageContainerPosition == "absolute") {
      imageContainer.classList.add("move-left");
    }
  }

  function hideImageContainer() {
    let imageContainerPosition = window
      .getComputedStyle(imageContainer)
      .getPropertyValue("position");
    if (imageContainerPosition == "absolute") {
      imageContainer.classList.remove("move-left");
    }
  }

  // hide content and image to prevent them from blinking when the page is loaded
  hide([contentContainer]);
  hide([imageContainer]);

  const runEffect = function (entries, observer) {
    const [entry] = entries;

    if (!entry.isIntersecting) return;

    switch (entry.target.dataset.state) {
      case "state-1": {
        hide([contentContainer, imageContainer]);
        halfLeft.classList.add("logo-pos-1");
        fade([contentContainer, content1, content2]);
        fade([imageContainer, image1, image2]);
        break;
      }
      case "state-2": {
        halfLeft.classList.remove("logo-pos-1");
        show([contentContainer, imageContainer]);
        removeFade([contentContainer, imageContainer]);
        removeFade([content1, image1]);
        hideImageContainer();
        break;
      }
      case "state-3": {
        showImageContainer();
        fade([content2, image2]);
        removeFade([content1, image1]);
        break;
      }
      case "state-4": {
        fade([content1, image1]);
        removeFade([content2, image2]);
        hideImageContainer();
        break;
      }
      case "state-5": {
        showImageContainer();
        break;
      }
    }
  };

  const homeTriggerObserver = new IntersectionObserver(runEffect, {
    root: null,
    threshold: 1,
  });

  allTriggers.forEach(function (homeTrigger) {
    homeTriggerObserver.observe(homeTrigger);
  });
})();

(function infoFunction() {
  const infoContainer = document.querySelector(".info");
  const notification = document.querySelector(".notification");
  const placeHolder = document.querySelector(".notification .info-type");

  infoContainer.addEventListener("click", function (e) {
    // check if user click on an element that contains business information
    if (e.target.classList.contains("information") === false) return;

    // copy the information contained in the clicked tag
    const target = document.getElementById(e.target.id);

    const info = target.dataset.info;

    let range = document.createRange();
    range.selectNode(target);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    document.execCommand("copy");
    window.getSelection().removeAllRanges();

    // update notification content
    placeHolder.innerHTML = info;
    console.log(placeHolder);
    notification.classList.add("show");

    // show notification
    setTimeout(() => {
      notification.classList.remove("show");
    }, 1000);
  });
})();

(function controlServicesSection() {
  const menu = document.querySelector(".list-menu");
  const slider = document.querySelector(".services-container");
  let listMenu = [...menu.querySelectorAll("li")];
  let slides = [...slider.querySelectorAll("ul")];
  const btnPrev = document.querySelector(".services button.prev");
  const btnNext = document.querySelector(".services button.next");

  const updateSlider = (slides) => {
    slides.forEach((item, index) => {
      item.style.left = `${index * 100 - 100}%`;
      item.classList.remove("show");
    });
    const currentSlide = slides[1];
    currentSlide.classList.add("show");
  };

  // arrange slides after the website is loaded
  updateSlider(listMenu);
  updateSlider(slides);

  const moveToNextSlide = (slider, slides) => {
    const first = slides.shift();
    slides.push(first);
    slider.insertAdjacentElement("beforeend", first);
    updateSlider(slides);
  };

  const moveToPreviousSlide = (slider, slides) => {
    const last = slides.pop();
    slides.unshift(last);
    slider.insertAdjacentElement("afterbegin", last);
    updateSlider(slides);
  };

  btnPrev.addEventListener("click", () => {
    moveToPreviousSlide(menu, listMenu);
    moveToPreviousSlide(slider, slides);
  });

  btnNext.addEventListener("click", () => {
    moveToNextSlide(menu, listMenu);
    moveToNextSlide(slider, slides);
  });
})();

(function controlMobileServicesSection() {
  const menu = document.querySelector(".menu");
  const menuBtns = [...document.querySelectorAll(".menu-btn")];
  const servicesMenu = document.querySelector(".services-container");
  const slides = [...servicesMenu.querySelectorAll("ul")];
  const closeBtn = document.querySelector(".close-service-menu");
  let positionY;

  const hideSlides = () => {
    slides.forEach((slide) => {
      slide.classList.remove("show");
      slide.style.left = "0%";
    });
  };

  const showSlide = (ID) => {
    slides.forEach((slide) => {
      if (slide.id.localeCompare(ID) === 0) {
        slide.classList.add("show");
      }
    });
  };

  menu.addEventListener("click", (e) => {
    e.preventDefault();
    const clickedTarget = e.target;

    if (!clickedTarget.classList.contains("menu-btn")) return;

    // hide unselected slides
    hideSlides();

    // show selected slide
    let slideId = clickedTarget.parentElement.parentElement.dataset.servicemenu;
    showSlide(slideId);
    servicesMenu.classList.add("show");

    // get current window position
    positionY = window.scrollY;

    // disable scroll in main page
    window.onscroll = function () {
      window.scrollTo({ top: positionY });
    };
  });

  closeBtn.addEventListener("click", () => {
    hideSlides();
    servicesMenu.classList.remove("show");
    window.onscroll = function () {};
    //window.scrollBy(0, positionY);
  });
})();

(function processAppointment() {
  function setDays() {
    // get a week from tomorrow
    const daysInWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    const months = [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ];
    let tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    let days = [];
    for (let i = 0; i < 7; i++) {
      let day = tomorrow.getDay();
      days.push(daysInWeek[day] + " " + months[day] + " " + tomorrow.getDate());
      tomorrow.setDate(tomorrow.getDate() + 1);
    }

    // add week to select(day)

    const date = document.querySelector("#day");
    for (let i = 0; i < 7; i++) {
      let dateItem = document.createElement("option");
      dateItem.setAttribute("value", days[i]);
      dateItem.textContent = days[i];
      date.appendChild(dateItem);
    }
  }

  function setTypes() {
    const listTypeElements = [...document.querySelectorAll(".list-menu li")];
    const selectType = document.querySelector("#type");
    let listType = listTypeElements.map((item) => {
      return item.textContent.trim();
    });

    listType.forEach((item) => {
      let type = document.createElement("option");
      type.setAttribute("value", item);
      type.textContent = item;
      selectType.appendChild(type);
    });
    selectType.addEventListener("click", updateServices);
  }

  function updateServices() {
    let selectService = document.querySelector(".input select#services");
    let selectType = document.querySelector("#type");
    let type = selectType.value;
    let serviceElements = [
      ...document.querySelectorAll(`ul#${type} li .service`),
    ];

    let services = serviceElements.map((item) => {
      return item.textContent;
    });

    selectService.innerHTML = "";
    for (let i = 0; i <= services.length - 1; i++) {
      let service = document.createElement("option");
      let value = selectType.value + "_" + i;
      service.setAttribute("value", value);
      service.textContent = services[i];
      selectService.appendChild(service);
    }
  }

  function setServices() {
    let selectService = document.querySelector(".input select#services");

    selectService.addEventListener("focus", updateServices);
  }

  function setAmountPeople() {
    let amountElement = document.querySelector("#amount");

    amountElement.addEventListener("click", () => {
      let number = document.querySelector("#number");
      let amount = parseInt(number.value);

      amountElement.innerHTML = "";

      for (let i = 1; i <= amount; i++) {
        let option = document.createElement("option");
        option.setAttribute("value", i);
        option.textContent = i;

        amountElement.appendChild(option);
      }
    });
  }

  const unavailableTime = [
    ["10:30", "11:15"],
    ["12:25", "14:00"],
    ["15:45", "16:20"],
  ];
  function setAvailableTime() {
    const selectHour = document.querySelector("#hour");
    const selectMinute = document.querySelector("#minute");
    const openHour = [10, 11, 12, 13, 14, 15, 16, 17, 18];
    const closeHour = "18:00";

    for (let i = 10; i <= 18; i++) {
      let hour = document.createElement("option");
      hour.setAttribute("value", i);
      hour.textContent = i;
      selectHour.appendChild(hour);
    }

    for (let i = 0; i <= 55; i += 5) {
      let minutes = document.createElement("option");
      minutes.setAttribute("value", i);
      minutes.textContent = i;
      selectMinute.appendChild(minutes);
    }
  }

  setDays();
  setTypes();
  setServices();
  setAmountPeople();
  setAvailableTime();
})();

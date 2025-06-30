"use strict";

const swipperLayoutfour = new Swiper(".swipper-layout-four", {
  slidesPerView: 1.2,
  spaceBetween: 30,
  breakpoints: {
    768: {
      slidesPerView: 2.5,
    },
    1024: {
      slidesPerView: 4,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const swipperLayoutThree = new Swiper(".swipper-layout-three", {
  slidesPerView: 1,
  spaceBetween: 30,
  breakpoints: {
    768: {
      slidesPerView: 2.5,
    },
    1024: {
      slidesPerView: 3,
    },
  },
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
});

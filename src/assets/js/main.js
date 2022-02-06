"use strict";

const body = document.querySelector("body");
const navMenu = document.querySelector(".nav__icon-menu");
const navLinks = document.querySelector(".nav__list");
const navCTA = document.querySelector(".nav__cta");

function openMenu(ul, cta) {
  return function (e) {
    ul.classList.toggle("nav-m-opened");
    cta.classList.toggle("nav-m-opened");
  };
}

function closeMenu(ul, cta) {
  return function (e) {
    const iconNav = document.querySelector(".nav__icon-menu");

    if (e.target.closest(".nav__icon-menu") !== iconNav) {
      ul.classList.remove("nav-m-opened");
      cta.classList.remove("nav-m-opened");
    }
  };
}

function heroSlider() {
  const heroSlide = new Splide(".hero-slider", {
    arrows: false,
    gap: "2.4rem",
    autoplay: true,
    rewind: true,
    rewindSpeed: 1000,
    lazyLoad: "nearby",
  });
  heroSlide.mount();
}

function testimonialSlider() {
  const testimonialSlide = new Splide(".testimonial-slider", {
    arrows: false,
    gap: "2.4rem",
    perPage: 3,
    breakpoints: {
      1080: {
        perPage: 2,
      },
      650: {
        perPage: 1,
      },
    },
  });
  testimonialSlide.mount();
}

navMenu.addEventListener("click", openMenu(navLinks, navCTA));
body.addEventListener("click", closeMenu(navLinks, navCTA));
document.addEventListener("DOMContentLoaded", function () {
  heroSlider();
  testimonialSlider();
});

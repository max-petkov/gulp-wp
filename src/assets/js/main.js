"use strict";

const body = document.querySelector("body");
const nav = document.querySelector(".nav");
const navMenu = document.querySelector(".nav__icon-menu");
const navLinks = document.querySelector(".nav__list");
const navCTA = document.querySelector(".nav__cta");
const menuBars = document.querySelectorAll(".bar");

function openMenu(ul, cta) {
  return function (e) {
    ul.classList.toggle("nav-m-opened");
    cta.classList.toggle("nav-m-opened");

    menuBars.forEach((bar, i) => {
      bar.classList.toggle(`bar--${i + 1}-transform`);
    });
  };
}

function closeMenu(ul, cta) {
  return function (e) {
    const iconNav = document.querySelector(".nav__icon-menu");

    if (e.target.closest(".nav__icon-menu") !== iconNav) {
      ul.classList.remove("nav-m-opened");
      cta.classList.remove("nav-m-opened");
      menuBars.forEach((bar, i) => {
        bar.classList.remove(`bar--${i + 1}-transform`);
      });
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

let prevScrollpos = window.pageYOffset;

window.addEventListener("scroll", function () {
  let currentScrollPos = window.pageYOffset;
  let navOffsetHeight = document.querySelector(".nav").offsetHeight;

  if (prevScrollpos > currentScrollPos) {
    nav.style.top = "0";
  }

  if (currentScrollPos > prevScrollpos) {
    nav.style.top = `-${navOffsetHeight}px`;
  }
  prevScrollpos = currentScrollPos;
});

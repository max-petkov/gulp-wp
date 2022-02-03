const navMenu = document.querySelector(".nav__icon-menu");

navMenu.addEventListener("click", function () {
  console.log("click");
  const ul = document.querySelector(".nav__list");
  const cta = document.querySelector(".nav__cta");

  ul.classList.toggle("js-open-menu");
  cta.classList.toggle("js-open-menu");
});

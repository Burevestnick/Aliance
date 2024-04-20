const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".navbar-logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprites.svg#logo-dark";
}
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprites.svg#logo-light";
}
const openMenu = (event) => {
  menu.classList.add("is-open");
  mMenuToggle.classList.add('close-menu');
  document.body.style.overflow="hidden";
  lightModeOn();
}
const closeMenu = (event) => {
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove('close-menu');
  document.body.style.overflow="";
  lightModeOff();
}

window.addEventListener('scroll', () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});
mMenuToggle.addEventListener('click', (event) => {
  event.preventDefault();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();      
})
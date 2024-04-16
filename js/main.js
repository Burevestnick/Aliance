const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".navbar-logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const Menu = document.querySelector(".mobile-menu");
window.addEventListener('scroll', () => {
  if (this.scrollY > 1){
    navbar.classList.add("navbar-light");
    logo.href.baseVal = "img/sprites.svg#logo-dark";
  } else {
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "img/sprites.svg#logo-light";
  }
});
mMenuToggle.addEventListener('click', (event) => {
  event.preventDefault();
  Menu.classList.toggle("is-open");               
})
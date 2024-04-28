const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoDark = document.querySelector(".logo-dark");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logoDark.style.display = "block";
  logoLight.style.display = "none";
}
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logoDark.style.display = "none";
  logoLight.style.display = "block";
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

const swiper = new Swiper('.swiper', {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      776: {
        slidesPerView: 2,
      },
      // when window width is >= 768px
      868: {
        slidesPerView: 3,
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 4,
      },
      // when window width is >= 1200px
      1200: {
        slidesPerView: 5,
      },
    },
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
});
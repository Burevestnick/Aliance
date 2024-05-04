const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoDark = document.querySelector(".logo-dark");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page")

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

const changeNavHeight = (height) => {
  navbar.style.height = height;
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
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});
mMenuToggle.addEventListener('click', (event) => {
  event.preventDefault();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();      
})

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  slidesPerView: 1,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      300: {
        slidesPerView: 2,
      },
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
    },
    navigation: {
      nextEl: '.steps-button-next',
      prevEl: '.steps-button-prev',
    },
})


const swiper = new Swiper('.header-features-slider', {
  speed: 400,
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


const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 2,
  spaceBetween: 30,
  navigation: {
    prevEl: '.blog-button-prev',
    nextEl: '.blog-button-next',
  },
      // Responsive breakpoints
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        590: {
          slidesPerView: 1,
        },
        // when window width is >= 320px
        776: {
          slidesPerView: 1,
        },
        // when window width is >= 768px
        868: {
          slidesPerView: 2,
        },
        // when window width is >= 1024px
        1024: {
          slidesPerView: 2,
        },
        // when window width is >= 1200px
        1200: {
          slidesPerView: 2,
        },
      }
})

const modal = document.querySelector('.modal'); 
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) =>{
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) && 
    modal.classList.contains("is-open"))
  ){
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (
    event.key == "Escape" &&
    modal.classList.contains("is-open")
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title><?= $page_title ?></title>
  </head>
  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href=""> Автохмия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="">Автохмия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info-address-container">
        <svg class="phone-icon">
          <use href="img/sprites.svg#marker"></use>
        </svg>
        <address class="mobile-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <div class="mobile-info-email-container">
        <svg class="phone-icon">
          <use href="img/sprites.svg#letter"></use>
        </svg>
        <a href="emailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <div class="mobile-info-social-container">
        <svg class="phone-icon">
          <use href="img/sprites.svg#vk"></use>
        </svg>
        <svg class="phone-icon">
          <use href="img/sprites.svg#inst"></use>
        </svg>
      </div>
    </div>
    <nav class="navbar navbar-light">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="navbar-logo-svg logo-light">
          <use href="img/sprites.svg#logo-light"></use>
        </svg>
        <svg class="navbar-logo-svg logo-darkk">
          <use href="img/sprites.svg#logo-dark"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="/about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="/production.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="/trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="/news.php" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="contacts.php" class="header-nav-link">Контакты</a>
        </li>
      </ul>

      <div class="header-phone">
        <svg class="phone-icon">
          <use href="img/sprites.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14</a
        >
      </div>
      <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="navbar-button-icon" width="20" height="20">
          <use href="img/sprites.svg#phone"></use>
        </svg>
        <span class="navbar-button-next">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    
    
    



    


    
    


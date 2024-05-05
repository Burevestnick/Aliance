<!DOCTYPE html>
<html lang="ru">
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

    <title>Aliance Production</title>
  </head>
  <body class="front-page">
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
    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="navbar-logo-svg logo-light">
          <use href="img/sprites.svg#logo-light"></use>
        </svg>
        <svg class="navbar-logo-svg logo-dark">
          <use href="img/sprites.svg#logo-dark"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="/about.html" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
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
      <button class="navbar-button button" data-toggle=modal>
        <svg class="navbar-button-icon" width="20" height="20">
          <use href="img/sprites.svg#phone"></use>
        </svg>
        <span class="navbar-button-next">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="separator"></div>
          <h1 class="header-title">
            <?php echo "Главная страница"?>
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <div class="button header-button">Подробнее о компании</div>
        </div>
        <!-- /.header-content -->

        <!-- основной блок слайдера -->
        <div class="swiper header-features-slider">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide header-features-item">
              <svg class="features-svg" width="28" height="28">
                <use href="img/sprites.svg#hourglass"></use>
              </svg>
              <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-svg" width="28" height="28">
                <use href="img/sprites.svg#paper"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-svg" width="28" height="28">
                <use href="img/sprites.svg#man"></use>
              </svg>
              <p class="header-features-text">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-svg" width="28" height="28">
                <use href="img/sprites.svg#car"></use>
              </svg>
              <p class="header-features-text">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-svg" width="28" height="28">
                <use href="img/sprites.svg#dash"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>

          <!-- кнопки навигации вперед/назад -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg class="features-svg" width="48" height="36">
                <use href="img/sprites.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg class="features-svg" width="48" height="36">
                <use href="img/sprites.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>
      </div>
      <!-- /.container -->
    </header>
    <section class="section section-light">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title">схема работы</h2>

        <div class="swiper steps-slider">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper steps">
            <!-- Slides -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
              <a href="#" class="steps-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации разума над эмоциями.
              </p>
            </li>
          </ol>
          <!-- If we need navigation buttons -->
          <div class="steps-buttons primary-buttons-wrapper">
            <div class="steps-button-prev primary-button-prev">
              <svg class="features-svg" width="36" height="24">
                <use href="img/sprites.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="steps-button-next primary-button-next">
              <svg class="features-svg" width="36" height="24">
                <use href="img/sprites.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.steps-buttons -->
        </div>
      </div>
    </section>
    <!-- /.section -->
    <section class="section production">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title">Контрактное производство</h2>
        <div class="cards">
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <img
              src="img/avtohim.png"
              alt="Автомобильная химия"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <img src="img/bithim.png" alt="Бытовая Химия" class="card-image" />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Дезинфицирующие средства</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <img
              src="img/dezinfect.png"
              alt="Дезинфицирующие средства"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <img
              src="img/dezinfect.png"
              alt="Пищевые аэрозоли"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Косметическая продукция</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <img
              src="img/avtohim.png"
              alt="Косметическая продукция"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <img
              src="img/bithim.png"
              alt="Краски аэрозольные"
              class="card-image"
            />
          </a>
        </div>
      </div>
    </section>
    <!-- section production -->
    <section class="section trademarks">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title">собственные торговые марки</h2>
        <div class="trademark-cards">
          <div class="trademark-card">
            <svg class="trademark-card-logo">
              <use href="img/sprites.svg#agtech"></use>
            </svg>
            <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
            <p class="trademark-card-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
            </p>
          </div>
          <div class="trademark-card">
            <svg class="trademark-card-logo">
              <use href="img/sprites.svg#ap"></use>
            </svg>
            <h3 class="trademark-card-title">Автохимия AP</h3>
            <p class="trademark-card-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
            </p>
          </div>
        </div>
      </div>
      <!-- /.trademark-cards -->
    </section>
    <!-- /.section trademarks -->
    <section class="section founder">
      <img src="img/founderbg.jpeg" alt="Основатель" class="founder-photo" />
      <div class="container">
        <div class="founder-content-wrapper">
          <div class="founder-content">
            <div class="separator"></div>
            <h2 class="section-title">Отношение к делу и к клиентам</h2>
            <p class="founder-text">
              Кстати, интерактивные прототипы описаны максимально подробно.
              Повседневная практика показывает, что укрепление и развитие
              внутренней структуры говорит о возможностях соответствующих
              условий активизации. Внезапно, независимые государства, которые
              представляют собой яркий пример континентально-европейского типа
              политической культуры, будут подвергнуты целой серии независимых
              исследований. С учётом сложившейся международной обстановки,
              синтетическое тестирование выявляет срочную потребность системы
              массового участия. А ещё действия представителей оппозиции,
              превозмогая сложившуюся непростую экономическую ситуацию, в равной
              степени предоставлены сами себе. Не следует, однако, забывать, что
              выбранный нами инновационный путь в значительной степени
              обусловливает важность дальнейших направлений развития.
            </p>
            <a href="#" class="steps-link">Подробнее о компании</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.section founder -->
    <div class="section section clients">
      <div class="container">
        <div class="clients-wrapper">
          <div class="clients-content">
            <div class="separator"></div>
            <h2 class="section-title">
              Производим аэрозольную продукцию для разных сфер
            </h2>
            <ul class="clients-list">
              <li class="clients-list-item">
                <svg width="24" height="24" class="clients-list-logo">
                  <use href="img/sprites.svg#bottle"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="clients-list-logo">
                  <use href="img/sprites.svg#carwash"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="clients-list-logo">
                  <use href="img/sprites.svg#cutlery"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="clients-list-logo">
                  <use href="img/sprites.svg#brush"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="clients-list-logo">
                  <use href="img/sprites.svg#hand"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="clients-list-logo">
                  <use href="img/sprites.svg#carrepair"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="clients-list-logo">
                  <use href="img/sprites.svg#cloth"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="clients-list-logo">
                  <use href="img/sprites.svg#footsteps"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="clients-list-logo">
                  <use href="img/sprites.svg#wall"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="clients-list-logo">
                  <use href="img/sprites.svg#other"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <div class="clients-logo-list">
            <div class="clients-logo-item">
              <img src="img/client.jpeg" alt="" class="clients-logo" />
            </div>
            <a href="#" class="clients-logo-item">
              <img src="img/client.jpeg" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.jpeg" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.jpeg" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.jpeg" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.jpeg" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.jpeg" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.jpeg" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.jpeg" alt="" class="clients-logo" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.section section clients -->
    <section class="section blog">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title">Блог экспертов в области производства</h2>
        <div class="swiper blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog/BlogImage1.png"
                alt=""
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog/blogImage2.png"
                alt=""
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog/BlogImage1.png"
                alt=""
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
          </div>
          <div class="blog-slider-footer">
            <a href="#" class="steps-link">Весь блог</a>
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg class="features-svg" width="36" height="24">
                  <use href="img/sprites.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg class="features-svg" width="36" height="24">
                  <use href="img/sprites.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
            <!-- /.blog-buttons -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.section blog -->
    <section class="cta">
      <div class="bg-gray section-cta">
        <img src="img/AgSpray.png" alt="call to action" class="cta-image" />
        <div class="cta-form-wrapper container">
          <form action="#" class="cta-form">
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
              ответит на все интересующие вопросы и поможем даже в самых сложных
              случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input
                  id="user-name"
                  type="text"
                  class="input"
                  placeholder=" "
                />
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input
                  id="user-phone"
                  type="tel"
                  class="input"
                  placeholder=" "
                />
                <label class="input-group-label" for="user-phone"
                  >Номер телефона</label
                >
              </div>
            </div>
            <!-- /.imput-group-wrapper -->
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                  <use href="img/sprites.svg#shield"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную
                  работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
          </form>
        </div>
        <!-- /.cta-form-wrapper -->
      </div>
    </section>
    <!-- /.cta -->
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="navbar-logo-svg footer-logo" width="160" height="50">
            <use href="img/sprites.svg#logo-dark"></use>
          </svg>
          <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
          <div class="footer-email-address-wrapper">
            <div class="footer-info-address-container">
              <svg class="phone-icon">
                <use href="img/sprites.svg#marker"></use>
              </svg>
              <address class="footer-info-address">
                г. Москва, Холодильный пер. 4к1с8
              </address>
            </div>
            <div class="footer-info-email-container"></div>
            <svg class="phone-icon">
              <use href="img/sprites.svg#letter"></use>
            </svg>
            <a href="emailto:a.dragunov@tdaliance.ru" class="footer-info-email">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <div class="footer-social">
            <a href="#" class="footer-social-link">
              <svg
                class="footer-social-icon"
                width="24"
                height="24"
                fill="rgb(92, 142, 230"
              >
                <use href="img/sprites.svg#vk"></use>
              </svg>
            </a>
            <a href="#" class="footer-social-link">
              <svg
                class="footer-social-icon"
                width="24"
                height="24"
                fill="rgb(92, 142, 230"
              >
                <use href="img/sprites.svg#inst"></use>
              </svg>
            </a>
          </div>
        </div>
        <!-- /.footer-top -->
      </div>
      <hr class="footer-seporator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link"
                  >Дезинфицирующие средства</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Контакты</a
                >
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
        </div>
        <!-- /.footer-bottom -->
      </div>
      <hr class="footer-seporator" />
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="copyright">
              &copy; <?php echo date('d.m.Y')?> «Aliance Production». Все права защищены.
            </p>
            <a href="#" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <!-- /.footer-legal -->
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg class="author-icon" width="52" height="11">
              <use href="img/sprites.svg#ruso"></use>
            </svg>
          </div>
          <!-- /.footer-author -->
        </div>
        <!-- /.footer-wrapper -->
      </div>
    </footer>
    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="" class="modal-close" data-toggle=modal>
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprites.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <form action="" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input id="modal-user-name" type="text" class="input modal-input" placeholder=" " />
              <label class="input-group-label modal-group-label" for="modal-user-name">Имя</label>
            </div>
            <div class="input-group modal-input-group">
              <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" " />
              <label class="input-group-label modal-group-label" for="modal-user-phone"
                >Номер телефона</label
              >
            </div>
          </div>
          <!-- /.imput-group-wrapper -->
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">
              Отправить заявку
            </button>
            <div class="notify">
              <svg class="notify-icon" width="14" height="14">
                <use href="img/sprites.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу,
                но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
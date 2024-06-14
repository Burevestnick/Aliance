<?php 
$page_title = 'О компании';
include_once('header-page.php');
include_once('./template-parts/topper-page-clean-block.php');
?>

<section class="mobile-section">
  <div class="container">
    <div class="expert-content">
      <picture>
        <source type="image/webp" srcset="img/expert-img.webp">
        <source type="image/jpeg" srcset="img/expert-img.jpeg">
        <img src="img/expert-img.jpeg" alt="Автомобильная химия" class="expert-img" />
      </picture>
      <div class="expert-text-wrapper">
        <div class="separator"></div>
        <h2 class="expert-title">мы - эксперты в области производства химии</h2>
        <p class="expert-text">
          Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="mobile-section">
  <div class="container">
    <div class="swiper header-features-slider">
    <!-- обертка слайдера -->
    <ul class="swiper-wrapper header-features">
      <!-- слайды -->
      <li class="swiper-slide about-features-item">
        <svg class="features-svg" width="28" height="28">
          <use href="img/sprites.svg#hourglass"></use>
        </svg>
        <p class="about-features-text">Непрерывная работа c 2017 года</p>
      </li>
      <li class="swiper-slide about-features-item">
        <svg class="features-svg" width="28" height="28">
          <use href="img/sprites.svg#paper"></use>
        </svg>
        <p class="about-features-text">Вся продукция сертифицирована</p>
      </li>
      <li class="swiper-slide about-features-item">
        <svg class="features-svg" width="28" height="28">
          <use href="img/sprites.svg#man"></use>
        </svg>
        <p class="about-features-text">
          Контроль качества на всех этапах
        </p>
      </li>
      <li class="swiper-slide about-features-item">
        <svg class="features-svg" width="28" height="28">
          <use href="img/sprites.svg#car"></use>
        </svg>
        <p class="about-features-text">
          Возможны поставки по всей России
        </p>
      </li>
      <li class="swiper-slide about-features-item">
        <svg class="features-svg" width="28" height="28">
          <use href="img/sprites.svg#dash"></use>
        </svg>
        <p class="about-features-text">Оперативное производство</p>
      </li>
    </ul>

    <!-- кнопки навигации вперед/назад -->
    <div class="slider-buttons">
      <div class="slider-button-prev-dark">
        <svg class="features-svg" width="48" height="36" fill="#000000">
          <use href="img/sprites.svg#arrow-prev"></use>
        </svg>
      </div>
      <div class="slider-button-next-dark">
        <svg class="features-svg" width="48" height="36" fill="#000000">
          <use href="img/sprites.svg#arrow-next"></use>
        </svg>
      </div>
    </div>
    <!-- /.slider-buttons -->
    </div>
  </div>
</section>


<div class="container">
  <div class="our-production-wpapper">
    <div class="separator-title-wrapper">
      <div class="separator"></div>
      <h2 class="section-title">Наше производство</h2>
    </div>
    <div class="our-production-content-wrapper">
      <p class="founder-text">
        Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
        <br>
        <br>
        Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
      </p>
      <ul class="clients-list">
        <li class="clients-list-item">
          <svg width="30" height="30" class="about-icon">
            <use href="img/sprites.svg#homes"></use>
          </svg>
          Автомобильная химия
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="about-icon">
            <use href="img/sprites.svg#hand"></use>
          </svg>
          Бытовая химия
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="about-icon">
            <use href="img/sprites.svg#carwash"></use>
          </svg>
          Дезинфицирующие средства
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="about-icon">
            <use href="img/sprites.svg#hand"></use>
          </svg>
          Пищевые аэрозоли
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="about-icon">
            <use href="img/sprites.svg#hand"></use>
          </svg>
          Косметическая продукция
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="about-icon">
            <use href="img/sprites.svg#brush"></use>
          </svg>
          Краски аэрозольные
        </li>
      </ul>
    </div>
    <div class="oadjaodjawoddoad">
      <picture>
        <source type="image/webp" srcset="img/our-production-img.webp">
        <source type="image/jpeg" srcset="img/our-production-img.jpeg">
        <img src="img/our-production-img.jpeg" alt="Наше производство" class="our-production-img"/>
      </picture>
    </div>
  </div>
</div>


<?include_once('./template-parts/founder-block.php');?>



<?include_once('./template-parts/clients-block.php');?>

<?php include_once('footer.php')?>
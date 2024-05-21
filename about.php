<?php 
$page_title = 'О компании';
include_once('header-page.php');
include_once('./template-parts/topper-page-clean-block.php');
?>

<section class="section">
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

<section class="section">
  <div class="container">
    <div class="swiper header-features-slider">
    <!-- обертка слайдера -->
    <ul class="swiper-wrapper header-features">
      <!-- слайды -->
      <li class="swiper-slide header-features-item">
        <svg class="features-svg" width="28" height="28">
          <use href="img/sprites.svg#hourglass"></use>
        </svg>
        <p class="about-features-text">Непрерывная работа c 2017 года</p>
      </li>
      <li class="swiper-slide header-features-item">
        <svg class="features-svg" width="28" height="28">
          <use href="img/sprites.svg#paper"></use>
        </svg>
        <p class="about-features-text">Вся продукция сертифицирована</p>
      </li>
      <li class="swiper-slide header-features-item">
        <svg class="features-svg" width="28" height="28">
          <use href="img/sprites.svg#man"></use>
        </svg>
        <p class="about-features-text">
          Контроль качества на всех этапах
        </p>
      </li>
      <li class="swiper-slide header-features-item">
        <svg class="features-svg" width="28" height="28">
          <use href="img/sprites.svg#car"></use>
        </svg>
        <p class="about-features-text">
          Возможны поставки по всей России
        </p>
      </li>
      <li class="swiper-slide header-features-item">
        <svg class="features-svg" width="28" height="28">
          <use href="img/sprites.svg#dash"></use>
        </svg>
        <p class="about-features-text">Оперативное производство</p>
      </li>
    </ul>

    <!-- кнопки навигации вперед/назад -->
    <div class="slider-buttons">
      <div class="slider-button-prev">
        <svg class="features-svg" width="48" height="36" fill="000">
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
</section>

<?include_once('./template-parts/founder-block.php');?>



<?include_once('./template-parts/clients-block.php');?>

<?php include_once('footer.php')?>
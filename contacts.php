<?php 
$page_title = 'Контакты';
include_once('header-page.php');
include_once('./template-parts/topper-page-clean-block.php');

?>

<div class="container">
  <div class="contact-info">
    <a href="tel:+79996861014" class="contact-phone">+7 (999) 686-10-14</a>

    <div class="contact-text-wrapper">
      <svg class="contact-icon">
        <use href="img/sprites.svg#marker"></use>
      </svg>
      <address class="contact-info-text">
        г. Москва, Холодильный пер. 4к1с8
      </address>
    </div>

    <div class="contact-text-wrapper">
      <svg class="contact-icon">
        <use href="img/sprites.svg#letter"></use>
      </svg>
      <a href="emailto:a.dragunov@tdaliance.ru" class="contact-info-text">
        a.dragunov@tdaliance.ru
      </a>
    </div>
    
    <div class="contact-social">
      <a href="#" class="contact-icon">
        <svg
          class="footer-social-icon"
          width="24"
          height="24"
          fill="rgb(92, 142, 230"
        >
          <use href="img/sprites.svg#vk"></use>
        </svg>
      </a>
      <a href="#" class="contact-icon">
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
  <div class="contact-image">
    <picture>
      <source type="image/webp" srcset="img/map.webp">
      <source type="image/jpeg" srcset="img/map.png">
      <img src="img/map.png" alt="map" class="map"/>
    </picture>
    <picture>
      <source type="image/webp" srcset="img/mapsml.webp">
      <source type="image/jpeg" srcset="img/mapsml.png">
      <img src="img/mapsml.png" alt="mapsml" class="mapsml"/>
    </picture>
  </div>
</div>
<!-- /.footer-top -->

<?php include_once('footer.php')?>
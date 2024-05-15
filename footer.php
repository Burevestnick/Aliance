<section class="cta">
  <div class="bg-gray section-cta">
    <img src="img/AgSpray.png" alt="call to action" class="cta-image" />
    <div class="cta-form-wrapper container">
      <form action="handler.php" method="POST" class="cta-form">
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
              name = "user-name"
              placeholder=" "
            />
            <label class="input-group-label" for="user-name">Имя</label>
          </div>
          <div class="input-group">
            <input
              id="user-phone"
              type="tel"
              class="input"
              name = "user-phone"
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
      <a href="tel:+79996861014" class="footer-phone">+7 (999) 686-10-14</a>
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
          &copy; <?php echo date('d.m.Y');?> «Aliance Production». Все права защищены.
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

<div class="modal" id="feedback-modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Есть вопросы?</h2>
    <a href="" class="modal-close" data-toggle=modal data-target="#feedback-modal">
      <svg class="close-icon" width="24" height="24">
        <use href="img/sprites.svg#close"></use>
      </svg>
    </a>
    <p class="modal-text">
      Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
      ответит на все интересующие вопросы и поможем даже в самых сложных
      случаях!
    </p>
    <form action="handler.php" method="POST" class="modal-form">
      <div class="input-group-wrapper input-group-vertical">
        <div class="input-group modal-input-group">
          <input 
          id="modal-user-name" 
          type="text" 
          class="input 
          modal-input" 
          placeholder=" " 
          name="user-name"
          />
          <label 
          class="input-group-label modal-group-label" 
          for="modal-user-name">
          Имя</label
          >
        </div>
        <div class="input-group modal-input-group">
          <input 
          id="modal-user-phone" 
          type="tel" 
          class="input modal-input" 
          placeholder=" " 
          name="user-phone"
          />
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

<div class="modal" id="alert-modal">
  <div class="modal-dialog">
    <div class="thanks-modal-picture">
      <a href="#" class="modal-close" data-toggle=modal data-target="#alert-modal">
        <svg class="close-icon" width="24" height="24">
          <use href="img/sprites.svg#close"></use>
        </svg>
      </a>
    </div>
    <h2 class="modal-title">Спасибо за заявку!</h2>
    <p class="modal-text">
      Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
    </p>
    <button class="button modal-form-button" data-toggle=modal data-target="#alert-modal">
      Вернуться на главную
    </button>
  </div>
</div>

<script src="js/swiper-bundle.min.js"></script>
<script src="js/just-validate.production.min.js"></script>
<script src="https://unpkg.com/imask"></script>
<script src="js/main.js"></script>
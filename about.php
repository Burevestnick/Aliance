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

    <title>About - Aliance Production</title>
  </head>
  <body>
  <?php include_once('header-light.php')?>

    <section class="topper-page-clean bg-gray">
      <div class="container">
        <div class="topper-page-clean-wrapper">
          <div class="separator"></div>
          <h1 class="header-title">
            о компании
          </h1>
          <div class="bread-crumbs">
            <div class="bread-crumbs-text">Главная</div>
            <div class="bread-crumbs-seporator"></div>
            <div class="bread-crumbs-text">О компании</div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="topper-page-img bg-gray">
      <div class="container">
        <div class="topper-page-clean-wrapper">
          <div class="separator"></div>
          <h1 class="header-title">
            Автомобильная химия
          </h1>
          <div class="bread-crumbs">
            <div class="bread-crumbs-text">Главная</div>
            <div class="bread-crumbs-seporator"></div>
            <div class="bread-crumbs-text">Контрактное производство</div>
            <div class="bread-crumbs-seporator"></div>
            <div class="bread-crumbs-text">Автомобильная химия</div>
          </div>
        </div>
      </div>
      <img src="img/avto-him-topper.png" alt="" class="topper-page-img-photo">
    </section>

    <section class="topper-page-background">
      <div class="container">
        <div class="topper-page-clean-wrapper-light">
          <div class="separator"></div>
          <h1 class="header-title">
            Современная методология разработки одухотворила всех причастных
          </h1>
          <div class="bread-crumbs">
            <div class="bread-crumbs-text-light ">Главная</div>
            <div class="bread-crumbs-seporator-light"></div>
            <div class="bread-crumbs-text-light ">Блог</div>
            <div class="bread-crumbs-seporator-light"></div>
            <div class="bread-crumbs-text-light ">Современная методология разработки одухотворила всех причастных</div>
          </div>
        </div>
      </div>
    </section>


    <?php include_once('footer.php')?>


    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="" class="modal-close" data-toggle="modal">
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
              <input
                id="modal-user-name"
                type="text"
                class="input modal-input"
                placeholder=" "
              />
              <label
                class="input-group-label modal-group-label"
                for="modal-user-name"
                >Имя</label
              >
            </div>
            <div class="input-group modal-input-group">
              <input
                id="modal-user-phone"
                type="tel"
                class="input modal-input"
                placeholder=" "
              />
              <label
                class="input-group-label modal-group-label"
                for="modal-user-phone"
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

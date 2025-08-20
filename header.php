<?php
 /*
 * пример кастомного хедера для WordPress-темы
 */
?>
<!DOCTYPE html>
<html lang="ru" class="page">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">

  <!-- подключение внешних библиотек -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <!-- пример: подключение кастомных стилей и скриптов -->
  <link rel="stylesheet" href="./css/vendor.css">
  <link rel="stylesheet" href="./font/stylesheet.css" />

  <?php wp_head(); ?>
</head>
<body class="page__body">
  <!-- пример: аудиоэлемент для уведомлений -->
  <audio id="success-audio" src="./audio/success.mp3"></audio>

  <div class="site-container">
    <!-- хедер -->
    <header class="header" id="menu">
      <div class="header__bottom">
        <!-- логотип -->
        <a class="header__logo" href="/">
          <img src="./img/logo.svg" alt="Логотип компании" class="logo" />
        </a>

        <!-- пример кнопки и выпадающего меню -->
        <button class="autoteh__link">Выбрать автотехцентр</button>
        <ul class="hide__autoteh">
          <li><a href="#nagatinskaya">⚑ Юг Москвы / ул. Нагатинская, 5</a></li>
          <li><a href="#enthusiast">⚑ Восток Москвы / ул. Буракова, 27 корп 1</a></li>
        </ul>

        <!-- контактная информация -->
        <div class="header__info">
          <p>9 автотехцентров по Москве и МО</p>
          <a class="header__tel" href="tel:+7XXXXXX">+7 (XXX) XXX-XX-XX</a>
        </div>

        <!-- социальные сети -->
        <ul class="social list-reset">
          <li class="social-item subhide">
            <a class="social-link" href="#contact">
              <img class="social-img" src="./img/header/geo.png" alt="Адреса" />
            </a>
          </li>
        </ul>

        <!-- кнопки действий -->
        <a class="header__link-shares btn-style" href="#stocks">Акции и скидки</a>
        <a data-fancybox data-src="#consultation" class="header__link-consult btn-style">
          Заказать<br> обратный звонок
        </a>

        <!-- навигационное меню -->
        <div class="menu" data-menu>
          <ul class="navigation__wrapper">
            <li><a data-menu-item href="#about"><img src="./img/icon/О компании.svg" alt="О компании"><p>О компании</p></a></li>
            <li><a data-menu-item href="#benefits"><img src="./img/icon/benefits.svg" alt="Преимущества"><p>Преимущества</p></a></li>
            <li><a data-menu-item href="#diagnostics"><img src="./img/icon/diag.svg" alt="Диагностика"><p>Диагностика</p></a></li>
          </ul>
        </div>

        <!-- бургер-меню для мобильной версии -->
        <button class="burger" aria-label="Открыть меню" aria-expanded="false" data-burger>
          <span class="burger__line"></span>
        </button>
      </div>
    </header>
    <!-- header-end -->
  </div>

  <!-- подключение скриптов -->
  <script defer src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script defer src="./js/main.js"></script>
</body>
</html>

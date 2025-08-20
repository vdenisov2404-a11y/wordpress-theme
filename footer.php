<?php
/**
 * пример кастомного футера для WordPress-темы.
 */
?>
<footer class="footer">
  <div class="container">
    <div class="footer__content flex">
      <!-- логотип и контакты -->
      <div class="footer__contact">
        <a class="footer__logo" href="/">
          <img src="./img/logo.webp" alt="Логотип компании">
        </a>
        <div class="footer__contact-desk">
          <a class="footer__contact-tel" href="tel:+7XXXXXXXXXX">+7 (XXX) XXX-XX-XX</a>
          <p class="footer__contact-text">
            Работаем с 9:00 до 21:00<br>
            без перерыва и выходных<br>
            <a href="mailto:example@domain.com">example@domain.com</a>
          </p>
        </div>
        <a class="btn-style footer__contact-btn" id="skidka" data-fancybox href="#consultation">
          ПОЛУЧИТЬ ПОМОЩЬ<br>ПРИ ПОКУПКЕ АВТОМОБИЛЯ
        </a>
      </div>

      <!-- ссылки и навигация -->
      <div class="footer__links flex">
        <ul class="footer__link-list flex list-reset">
          <li class="footer__link-item">
            <a class="footer__link-link" href="#shop">
              <img class="footer__link-link-img" src="./img/87.webp" alt="Магазин запчастей">
              <span class="footer__link-link-text">Магазин запчастей</span>
            </a>
          </li>
          <li class="footer__link-item">
            <a class="footer__link-link" href="#contact">
              <img class="footer__link-link-img" src="./img/455.webp" alt="Адреса и контакты">
              <span class="footer__link-link-text">Адреса и контакты</span>
            </a>
          </li>
        </ul>

        <!-- кнопки действий -->
        <a data-fancybox data-src="#dateform" class="footer__review-btn footer__review-btn--mobile btn-style-3" href="">
          Бесплатный<br>вызов эвакуатора
        </a>
        <a data-fancybox data-src="#podbor" class="footer__review-btn footer__review-btn--mobile btn-style-3" href="">
          Бесплатный подбор<br>запчастей за 30 минут
        </a>

        <!-- навигационное меню -->
        <ul class="footer__nav-list list-reset flex">
          <li class="footer__nav-item"><a href="#diagnostics" class="footer__nav-link">Диагностика</a></li>
          <li class="footer__nav-item"><a href="#maintenance" class="footer__nav-link">Техобслуживание</a></li>
          <li class="footer__nav-item"><a href="#repair" class="footer__nav-link">Ремонт</a></li>
          <li class="footer__nav-item"><a href="#coloring" class="footer__nav-link">Кузовные работы</a></li>
          <li class="footer__nav-item"><a href="#ur" class="footer__nav-link">Обслуживание юридических лиц</a></li>
          <li class="footer__nav-item"><a href="#shinomontag__div" class="footer__nav-link">ШИНОМОНТАЖ</a></li>
        </ul>

        <!-- социальные сети -->
        <ul class="footer__social list-reset flex">
          <li class="footer__social-item">
            <a class="footer__social-link" target="_blank" href="#">
              <img src="./img/icon/vk.webp" alt="ВКонтакте">
            </a>
          </li>
          <li class="footer__social-item">
            <a class="footer__social-link" target="_blank" href="#">
              <img src="./img/icon/dzen.webp" alt="Дзен">
            </a>
          </li>
          <li class="footer__social-item">
            <a class="footer__social-link" target="_blank" href="#">
              <img src="./img/icon/youtube.webp" alt="YouTube">
            </a>
          </li>
          <li class="footer__social-item">
            <a class="footer__social-link" target="_blank" href="#">
              <img src="./img/icon/inst.webp" alt="Instagram">
            </a>
          </li>
          <li class="footer__social-item">
            <a class="footer__social-link" target="_blank" href="#">
              <img src="./img/icon/tg.svg" alt="Telegram">
            </a>
          </li>
        </ul>

        <!-- дополнительные кнопки -->
        <div class="additional__button">
          <a href="./presentation/example.pdf" class="presentation" download>
            Скачать презентацию
            <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M25.6115 26.7656C25.2434 26.7656 24.9489 27.0437 24.908 27.4118C24.589 30.5693 21.9223 33.0315 18.6748 33.0315C15.4356 33.0315 12.7689 30.5693 12.4417 27.4118C12.4008 27.0519 12.1063 26.7656 11.7382 26.7656H3.23108C1.44785 26.7656 0 28.2135 0 29.9967V36.7697C0 38.5529 1.44785 40.0008 3.23108 40.0008H34.135C35.9182 40.0008 37.3661 38.5529 37.3661 36.7697V30.0049C37.3661 28.2217 35.9182 26.7738 34.135 26.7738H25.6115V26.7656Z" fill="white"/>
              <path d="M23.5085 16.2454L20.9809 18.773V2.29857C20.9809 1.03067 19.9503 0 18.6824 0C17.4145 0 16.3838 1.03067 16.3838 2.29857V18.773L13.8562 16.2454C13.0791 15.4683 11.8357 15.272 10.9196 15.8855C9.66805 16.7198 9.54535 18.4294 10.5515 19.4356L17.3245 26.2086C18.077 26.9611 19.2959 26.9611 20.0484 26.2086L26.8214 19.4356C27.8276 18.4294 27.7049 16.7198 26.4533 15.8855C25.529 15.2638 24.2856 15.4601 23.5085 16.2454Z" fill="white"/>
            </svg>
          </a>

          <!-- ссылки на приложения -->
          <div class="app__buttons pref">
            <p>Скачайте приложение на Ios или Android:</p>
            <a href="#" class="apps" data-app="App store" target="_blank">
              <svg width="34" height="43" viewBox="0 0 34 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.3958 22.8445C28.4544 29.3518 33.9392 31.5173 34 31.5449C33.9536 31.6976 33.1236 34.6309 31.1103 37.6607C29.37 40.2802 27.5637 42.8901 24.7182 42.9441C21.9223 42.9972 21.0233 41.2367 17.8267 41.2367C14.6311 41.2367 13.6323 42.8901 10.9856 42.9972C8.23903 43.1042 6.14754 40.1646 4.3927 37.5547C0.806875 32.2161 -1.93343 22.4692 1.74611 15.8898C3.57403 12.6225 6.84065 10.5535 10.3863 10.5004C13.0833 10.4474 15.6291 12.3689 17.2778 12.3689C18.9255 12.3689 22.0191 10.0582 25.2712 10.3975C26.6327 10.4559 30.4544 10.9639 32.9084 14.6629C32.7106 14.7891 28.3483 17.4042 28.3958 22.8445ZM23.1411 6.86559C24.5993 5.04796 25.5807 2.51765 25.313 0C23.2112 0.0869915 20.6695 1.44233 19.1619 3.25896C17.8108 4.86768 16.6276 7.44253 16.9468 9.91034C19.2896 10.097 21.6829 8.68438 23.1411 6.86559Z" fill="#1C1B17"/>
              </svg>
              <div>
                <p>Скачать через</p>
                <p>App store</p>
              </div>
            </a>
            <a href="#" class="apps" data-app="Google play" target="_blank">
              <svg width="40" height="43" viewBox="0 0 40 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.2095 20.5586L0.117188 39.474C0.704372 41.4714 2.58386 42.9996 4.81717 42.9996C5.75818 42.9996 6.57873 42.7637 7.28385 42.2945L27.7249 30.6637L18.2095 20.5611V20.5586Z" fill="#EA4335"/>
                <path d="M36.535 17.272L27.7247 12.2207L17.8555 20.9156L27.8426 30.6668L36.6529 25.7335C38.1811 24.9104 39.2375 23.2668 39.2375 21.5053C39.1196 19.7437 38.0632 18.0976 36.535 17.277V17.272Z" fill="#FBBC04"/>
                <path d="M0.117939 3.52539C3.06615e-07 3.8767 0 4.34846 0 4.81771V38.2998C0 38.769 3.06615e-07 39.1229 0.117939 39.5921L18.9154 21.1485L0.117939 3.52539Z" fill="#4285F4"/>
                <path d="M18.33 21.5L27.7274 12.218L7.40179 0.705123C6.69667 0.235877 5.75818 0 4.81718 0C2.58387 0 0.588943 1.52818 0.117188 3.52562L18.3274 21.5H18.33Z" fill="#34A853"/>
              </svg>
              <div>
                <p>Скачать через</p>
                <p>Google play</p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- отзывы и кнопки -->
      <div class="footer__review">
        <ul class="footer__review-list list-reset flex">
          <li class="footer__review-item">
            <a class="footer__review-link" href="#"><img src="./img/ya.webp" alt="Яндекс.Карты"></a>
          </li>
          <li class="footer__review-item">
            <a class="footer__review-link" href="#"><img src="./img/gis.webp" alt="2ГИС"></a>
          </li>
        </ul>
        <a data-fancybox href="#dateform" class="footer__review-btn btn-style-3">
          Бесплатный<br>вызов эвакуатора
        </a>
        <a data-fancybox href="#podbor" class="footer__review-btn btn-style-3">
          Бесплатный подбор<br>запчастей за 30 минут
        </a>
        <a data-fancybox href="#dateform" class="footer__review-btn btn-style">
          Бесплатная диагностика<br>по 45 параметрам
        </a>
      </div>
    </div>

    <!-- подвал -->
    <div class="footer__bottom">
      <p>&copy; Все права защищены 1995 - 2024</p>
    </div>
  </div>
</footer>

<!-- пример модального окна -->
<form class="form-modal ajax-form" id="consultation" style="display:none">
  <div class="form-modal__wrapper">
    <p>Пожалуйста, оставьте номер</p>
    <div>
      <input type="tel" required name="tel" placeholder="+7 (___) ___ __ __">
      <button type="submit">Отправить</button>
    </div>
    <span>Менеджер свяжется с вами в течение 5 минут</span>
  </div>
</form>

<?php wp_footer(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Hotel Miranda: Enjoy the ultimate coastal experience in our comfortable facilities. Located on the beautiful coast, Hotel Miranda is your perfect destination for a relaxing vacation." />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
  <!-- <link rel="stylesheet" href="./css/styles.css" /> -->
  <link rel="stylesheet" href="../styles/styles.min.css" />

  <title>Miranda</title>
</head>

<body>
  <header class="header">
    <div class="header__container wrapper">
      <div class="header__content">
        <div class="header__actions">
          <button class="header__toggle" aria-label="toggle open menu">
            <img src="/assets/images/menu.svg" alt="icon menu" />
          </button>
          <button class="header__close header__toggle--hidden" aria-label="button close menu">
            <img src="/assets/images/cross.svg" alt="close menu" />
          </button>
        </div>
        <a class="header__logo" href="/index" aria-label="retur to home">
          <img class="header__image" src="/assets/images/logo.svg" alt="hotel miranda logo" />

          <h1 class="header__title">Hotel <span>Miranda</span></h1>
        </a>

        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item">
              <a class="header__nav-link" href="/about_us" aria-label="go to About-us">About Us
              </a>
            </li>
            <li class="header__nav-item">
              <a class="header__nav-link" href="/room" aria-label="go to Rooms">Rooms </a>
            </li>
            <li class="header__nav-item">
              <a class="header__nav-link" href="/our_offer" aria-label="go to Offers">Offers
              </a>
            </li>
            <li class="header__nav-item">
              <a class="header__nav-link" href="/contact" aria-label="go to Contact">Contact
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <ul class="header__list">
        <li class="header__item">
          <a class="header__link" href="#">
            <img class="header__icon" src="/assets/images/profile.svg" alt="profile icon" />
          </a>
        </li>
        <li class="header__item">
          <a class="header__link" href="#">
            <img class="header__icon" src="/assets/images/search.svg" alt="search icon" />
          </a>
        </li>
      </ul>
    </div>
  </header>
  <main>
    @yield('content')
  </main>

  <footer class="footer">
    <div class="wrapper">
      <div class="footer__container wrapper2">
        <div>
          <div class="header__logo">
            <img class="header__image footer__logo" src="/assets/images/footer/logo2.svg" alt="hotel miranda logo" />

            <h1 class="header__title">Hotel <span>Miranda</span></h1>
          </div>
          <p class="footer__description">
            Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitat ion ullamco laboris nisi.
          </p>
          <ul class="socials">
            <!-- 1 -->
            <li class="socials__item">
              <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank" aria-label="link to facebook">
                <svg class="socials__img" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
              </a>
            </li>
            <!-- 2 -->
            <li class="socials__item">
              <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank" aria-label="link to twitter">
                <svg class="socials__img" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                </svg>
              </a>
            </li>
            <!-- 3 -->
            <li class="socials__item">
              <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank" aria-label="link to Behance">
                <svg class="socials__img" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
                  <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391s.497.426.641.747c.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922s.461.957.461 1.563c0 .496-.105.922-.285 1.278a2.3 2.3 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.3 5.3 0 0 1-1.278.176L0 12.803V3zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a1 1 0 0 0-.32-.355 1.8 1.8 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305zm6.858-.035q.428.427 1.278.426c.39 0 .746-.106 1.032-.286q.426-.32.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.1 4.1 0 0 1-1.527-.285 2.8 2.8 0 0 1-1.137-.782 2.85 2.85 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4 4 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396m2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176s-.356.25-.496.39a.96.96 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978z" />
                </svg>
              </a>
            </li>
            <!-- 4 -->
            <li class="socials__item">
              <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank" aria-label="link to LinkdIn">
                <svg class="socials__img" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                </svg>
              </a>
            </li>
            <!-- 5 -->
            <li class="socials__item">
              <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank" aria-label="link to youtube">
                <svg class="socials__img" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>

        <div class="services">
          <h2 class="footer__title old">Services.</h2>

          <ul class="services__list">
            <li class="services__item">+ Resturent & Bar</li>
            <li class="services__item">+ Swimming Pool</li>
            <li class="services__item">+ Wellness & Spa</li>
            <li class="services__item">+ Restaurant</li>
            <li class="services__item">+ Conference Room</li>
            <li class="services__item">+ Coctail Party House</li>
            <li class="services__item">+ Gaming Zone</li>
            <li class="services__item">+ Marrige Party</li>
            <li class="services__item">+ Party Planning</li>
            <li class="services__item">+ Tour Consultancy</li>
          </ul>
        </div>

        <div class="contact">
          <h2 class="footer__title old">Contact Us.</h2>

          <ul class="contact__list">
            <li class="contact__item">
              <img class="contact__img" src="/assets/images/footer/phone.svg" alt="phone icon" loading="lazy" />
              <p class="contact__subtitle old">
                Phone Number <span class="contact__span">+987 876 765 76 577</span>
              </p>
            </li>
            <li class="contact__item">
              <img class="contact__img" src="/assets/images/footer/email.svg" alt="phone icon" loading="lazy" />
              <p class="contact__subtitle old">
                Phone Number <span class="contact__span">+987 876 765 76 577</span>
              </p>
            </li>
            <li class="contact__item">
              <img class="contact__img" src="/assets/images/footer/location-2.svg" alt="phone icon" loading="lazy" />
              <p class="contact__subtitle old">
                Phone Number <span class="contact__span">+987 876 765 76 577</span>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="footer__bottom-container wrapper">
        <span class="footer__bottom-copy">Copyright By@Example - 2020</span>
        <ul class="footer__bottom-terms">
          <li class="footer__bottom-term footer__bottom-term--ray">Terms of use</li>
          <li class="footer__bottom-term">Privacy Environmental Policy</li>
        </ul>
      </div>
    </div>
  </footer>
  <script defer type="module" src="./index.js"></script>
</body>

</html>
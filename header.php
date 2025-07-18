<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"
      rel="stylesheet"
    />
    <!-- Swiper CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./assets/css/output.css" />

    <!-- Swiper JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"
      defer
    ></script>
    <script src="./assets/js/swipper.js" defer></script>

    <!-- Navbar Js  -->
    <script src="./assets/js/navbar.js" defer></script>

    <!-- Font awesome Icons -->
    <script
      src="https://kit.fontawesome.com/9de8e65a42.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header class="header">
      <!-- Navigation Bar -->
      <nav class="navbar">
        <div class="nav-container">
          <!-- Mobile Hamburger -->
          <div class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>

          <!-- Logo -->
          <div class="nav-logo">
            <a href="#" class="logo">
              <img src="./assets/images/HUGS Logo Final PNG-01.png  " />
            </a>
          </div>

          <!-- Desktop Navigation Links -->
          <ul class="nav-menu">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about-us.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="service.php" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="for-parents.php" class="nav-link">For Parents</a>
            </li>
            <li class="nav-item">
              <a href="contact-us.php" class="nav-link">Contact</a>
            </li>
          </ul>

          <!-- Desktop CTA Button -->
          <div class="nav-buttons">
            <div class="contact-us">
              <a href="tel:+%201(212)%20255-511">
                <span class="phone-icon">
                  <img src="./assets/images/phone.svg" />
                </span>

                <span class="pbmit-header-button-text-1">+91 (212)255-511</span>
              </a>
            </div>
            <button class="button primary-button">
              Get Started
              <div class="button__circle">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  id="Layer_1"
                  data-name="Layer 1"
                  viewBox="0 0 1402.53 1457.81"
                  class="button__icon"
                >
                  <defs>
                    <style>
                      .cls-1 {
                        fill: none;
                        stroke: #000;
                        stroke-miterlimit: 10;
                        stroke-width: 90.41px;
                      }
                    </style>
                  </defs>
                  <line
                    class="cls-1"
                    x1="39.75"
                    y1="1420.36"
                    x2="1376.18"
                    y2="40.2"
                  />
                  <path
                    class="cls-1"
                    d="M53.72,61.46c59.41,50.9,296.13,241.65,652.42,240.56,369.81-1.13,611.09-208.15,667-258.78"
                  />
                  <path
                    class="cls-1"
                    d="M1356.99,1360.99c-50.9-59.41-241.65-296.13-240.56-652.42,1.13-369.81,208.15-611.09,258.78-667"
                  />
                  <!-- Code injected by live-server -->
                </svg>

                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  id="Layer_1"
                  class="button__icon button__icon--copy"
                  data-name="Layer 1"
                  viewBox="0 0 1402.53 1457.81"
                  class="button__icon"
                >
                  <defs>
                    <style>
                      .cls-1 {
                        fill: none;
                        stroke: #000;
                        stroke-miterlimit: 10;
                        stroke-width: 90.41px;
                      }
                    </style>
                  </defs>
                  <line
                    class="cls-1"
                    x1="39.75"
                    y1="1420.36"
                    x2="1376.18"
                    y2="40.2"
                  />
                  <path
                    class="cls-1"
                    d="M53.72,61.46c59.41,50.9,296.13,241.65,652.42,240.56,369.81-1.13,611.09-208.15,667-258.78"
                  />
                  <path
                    class="cls-1"
                    d="M1356.99,1360.99c-50.9-59.41-241.65-296.13-240.56-652.42,1.13-369.81,208.15-611.09,258.78-667"
                  />
                  <!-- Code injected by live-server -->
                </svg>
              </div>
            </button>
          </div>
        </div>
      </nav>

      <!-- Mobile Drawer Overlay -->
      <div class="drawer-overlay" id="drawerOverlay"></div>

      <!-- Mobile Drawer -->
      <div class="mobile-drawer" id="mobileDrawer">
        <div class="drawer-header">
          <div class="drawer-logo">
            <div class="logo-icon">Menu</div>
          </div>
          <button class="close-btn" id="closeBtn">&times;</button>
        </div>
        <ul class="drawer-menu">
          <li><a href="index.php" class="drawer-link">Home</a></li>
          <li><a href="about-us.php" class="drawer-link">About</a></li>
          <li><a href="service.php" class="drawer-link">Services</a></li>
          <li><a href="for-parents.php" class="drawer-link">For Parents</a></li>
          <li><a href="contact-us.php" class="drawer-link">Contact</a></li>
        </ul>
        <div class="drawer-footer">
          <button class="drawer-cta-btn">Get Started</button>
        </div>
      </div>
      <?php
        if (!isset($currentPage)) {
            $currentPage = '';
        }
      ?>
     <?php if ($currentPage == "home") { ?>
        <div class="header-banner mt-4">
          <!-- Banner for Home -->
          <div class="header-banner-image">
            <picture>
              <source media="(max-width: 767px)" srcset="./assets/images/01_mobile.png" />
              <source media="(min-width: 768px)" srcset="./assets/images/01 copy.png" />
              <img src="./assets/images/01 copy.png" alt="Header Banner" />
            </picture>
          </div>
          <div class="header-banner-content">
            <h1 class="header-banner-title mb- pb-3">
              All Healing <br />
              Begins With a Hug
            </h1>
            <h2 class="header-banner-sub-title pt-4">
              Support for every child. Empowerment for every family.
            </h2>
          </div>
        </div>
      <?php } elseif ($currentPage == "for-parents") { ?>
        <div class="header-banner mt-4">
          <!-- Banner for Home -->
          <div class="header-banner-image">
            <picture>
              <source media="(max-width: 767px)" srcset="./assets/images/01_mobile.png" />
              <source media="(min-width: 768px)" srcset="./assets/images/01 copy.png" />
              <img src="./assets/images/01 copy.png" alt="Header Banner" />
            </picture>
          </div>
          <div class="header-banner-content">
            <h1 class="header-banner-title mb- pb-3">
              Because You Know <br />
              Your Child Best
            </h1>
            <h2 class="header-banner-sub-title pt-4">
              Support for every child. Empowerment for every family.
            </h2>
          </div>
        </div>
      <?php } ?>
    </header>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'BRIDGE') ?></title>
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        body.page-intro-active .hero__title>span,
        body.page-intro-active .hero__sub,
        body.page-intro-active .btn--hero,
        body.page-intro-active .hero__logo {
            opacity: 0;
            visibility: hidden;
        }
    </style>
    <?= $extraHead ?? '' ?>




</head>

<body class="<?= ($activePage ?? '') === 'home' ? 'page-intro-active' : '' ?>">



    <?php if (($activePage ?? '') === 'home'): ?>
        <div class="page-intro" data-page-intro aria-hidden="true">
            <div class="page-intro__logo-wrap">
                <img class="page-intro__logo" src="assets/images/banner-bridge__loader.svg" alt="BRIDGE">
            </div>
        </div>
    <?php endif; ?>

    <!-- ============================================================
         NAVBAR
    ============================================================ -->
    <header class="site-header">
        <div class="container">
            <nav class="navbar">
                <a href="index.php" class="navbar__logo" aria-label="BRIDGE Home">
                    <img src="assets/images/logo_bridge_.svg" alt="BRIDGE">
                </a>
                <ul class="navbar__menu">
                    <li class="navbar__item <?= ($activePage ?? '') === 'home' ? 'navbar__item--active' : '' ?>">
                        <a href="index.php"
                            class="navbar__link <?= ($activePage ?? '') === 'home' ? 'navbar__link--active' : '' ?>"
                            <?= ($activePage ?? '') === 'home' ? 'aria-current="page"' : '' ?>>Home</a>
                    </li>
                    <li class="navbar__item <?= ($activePage ?? '') === 'about' ? 'navbar__item--active' : '' ?>">
                        <a href="about-us.php"
                            class="navbar__link <?= ($activePage ?? '') === 'about' ? 'navbar__link--active' : '' ?>"
                            <?= ($activePage ?? '') === 'about' ? 'aria-current="page"' : '' ?>>About Us</a>
                    </li>
                    <li class="navbar__item <?= ($activePage ?? '') === 'services' ? 'navbar__item--active' : '' ?>">
                        <a href="our-services.php"
                            class="navbar__link <?= ($activePage ?? '') === 'services' ? 'navbar__link--active' : '' ?>"
                            <?= ($activePage ?? '') === 'services' ? 'aria-current="page"' : '' ?>>Our Services</a>
                    </li>
                    <li class="navbar__item <?= ($activePage ?? '') === 'ecosystem' ? 'navbar__item--active' : '' ?>">
                        <a href="ecosystem.php"
                            class="navbar__link <?= ($activePage ?? '') === 'ecosystem' ? 'navbar__link--active' : '' ?>"
                            <?= ($activePage ?? '') === 'ecosystem' ? 'aria-current="page"' : '' ?>>Our Ecosystem</a>
                    </li>
                    <li class="navbar__item <?= ($activePage ?? '') === 'news' ? 'navbar__item--active' : '' ?>">
                        <a href="news.php"
                            class="navbar__link <?= ($activePage ?? '') === 'news' ? 'navbar__link--active' : '' ?>"
                            <?= ($activePage ?? '') === 'news' ? 'aria-current="page"' : '' ?>>News</a>
                    </li>
                    <!-- <li class="navbar__item <?= ($activePage ?? '') === 'articles' ? 'navbar__item--active' : '' ?>">
                        <a href="articles.php" class="navbar__link">Articles</a>
                    </li> -->
                    <li class="navbar__item <?= ($activePage ?? '') === 'contact' ? 'navbar__item--active' : '' ?>">
                        <a href="contact-us.php"
                            class="navbar__link <?= ($activePage ?? '') === 'contact' ? 'navbar__link--active' : '' ?>"
                            <?= ($activePage ?? '') === 'contact' ? 'aria-current="page"' : '' ?>>Contact Us</a>
                    </li>
                </ul>
                <div class="navbar__right">
                    <!-- <a href="#" class="navbar__lang" lang="ar" dir="rtl">العربية</a>
                    <button class="navbar__search" aria-label="Search">
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.1383 16.5873L9.8575 10.5273C9.3575 10.9256 8.7825 11.2374 8.1325 11.4625C7.4825 11.6876 6.81008 11.8002 6.11525 11.8002C4.40608 11.8002 2.95958 11.2292 1.77575 10.0874C0.591917 8.94552 0 7.55024 0 5.90153C0 4.25298 0.59175 2.85722 1.77525 1.71423C2.95875 0.571412 4.40492 0 6.11375 0C7.82242 0 9.26908 0.571089 10.4537 1.71327C11.6382 2.85545 12.2305 4.25105 12.2305 5.90008C12.2305 6.58912 12.1107 7.24721 11.871 7.87434C11.6312 8.50147 11.3113 9.04691 10.9113 9.51066L17.192 15.5704L16.1383 16.5873ZM6.11525 10.3532C7.40375 10.3532 8.49508 9.92175 9.38925 9.05889C10.2836 8.19618 10.7308 7.14325 10.7308 5.90008C10.7308 4.65692 10.2836 3.60398 9.38925 2.74128C8.49508 1.87841 7.40375 1.44698 6.11525 1.44698C4.82675 1.44698 3.73542 1.87841 2.84125 2.74128C1.94692 3.60398 1.49975 4.65692 1.49975 5.90008C1.49975 7.14325 1.94692 8.19618 2.84125 9.05889C3.73542 9.92175 4.82675 10.3532 6.11525 10.3532Z"
                                fill="white" />
                        </svg>
                    </button> -->
                    <button class="navbar__hamburger" aria-label="Toggle menu" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </nav>
        </div>
    </header>
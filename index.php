<?php
$pageTitle = 'BRIDGE — Innovate. Transform. Elevate.';
$activePage = 'home';
$extraHead = '<link rel="stylesheet" href="assets/css/vendor/odometer-theme-default.css">';
$extraScripts = '<script src="assets/js/vendor/odometer.js"></script>';
?>
<?php include 'inc/header.php'; ?>

<main>

    <!-- ============================================================
             HERO
        ============================================================ -->
    <section class="hero" id="home">
        <div class="hero__video-wrap">
            <iframe src="https://player.vimeo.com/video/1186158251?background=1&autoplay=1&muted=1&loop=1&quality=auto"
                frameborder="0" allow="autoplay; fullscreen" allowfullscreen title="Hero background video"></iframe>
        </div>
        <div class="hero__overlay" aria-hidden="true"></div>
        <div class="hero__content">
            <h1 class="hero__title">
                <span class="revealmetop" style="--reveal-delay: 0.1s">INNOVATE<span class="hero__dot">.</span></span>
                <span class="revealmetop" style="--reveal-delay: 0.22s">TRANSFORM<span class="hero__dot">.</span></span>
                <span class="revealmetop" style="--reveal-delay: 0.34s">ELEVATE<span class="hero__dot">.</span></span>
            </h1>
            <p class="hero__sub revealmetop" style="--reveal-delay: 0.5s">Empowering people, unleashing possibility
            </p>
            <a href="#about" class="btn btn--hero revealmetop" style="--reveal-delay: 0.62s">
                Learn More
                <span class="btn__icon" aria-hidden="true">
                    <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
            </a>
        </div>
    </section>

    <!-- ============================================================
             BANNER (About)
        ============================================================ -->
    <section class="banner" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner__card">
                        <div class="banner__content">
                            <div class="banner__text">
                                <span class="banner__num revealmetop">01</span>
                                <h2 class="banner__heading title-animation">A world-class business
                                    transformation Centre of Excellence in the Middle East</h2>
                            </div>
                            <div class="banner__divider" aria-hidden="true"></div>
                            <div class="banner__image revealmetop">
                                <img src="assets/images/about-bg.jpeg" alt="Business transformation">
                            </div>
                            <div class="banner__divider" aria-hidden="true"></div>
                            <div class="banner__description title-animation">
                                <p>Launched in 2021, BRIDGE delivers high-impact projects at scale across all areas
                                    of
                                    organisational development, with a focus on fostering innovation, future
                                    readiness, and
                                    operational improvements that achieve measurable gains in efficiency, execution,
                                    quality,
                                    and sustainability.</p>
                                <p>Through four service offerings – strategic consulting; business transformation;
                                    professional
                                    development; and hackathons, makeathons and innovation challenges – we provide
                                    an
                                    integrated, tailored approach to help organisations overcome challenges and
                                    achieve their
                                    ambitions.</p>
                                <p>At the heart of this work are people – the driving force behind any
                                    organisation's success.
                                    At BRIDGE, we equip your people with the tools, systems thinking, preparation
                                    and insights
                                    to elevate your organisation to the next level.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
             ACHIEVEMENTS
        ============================================================ -->
    <section class="achievements" id="achievements">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="achievements__grid achievements__grid--three">
                        <article class="achievements__card revealmetop">
                            <h3 class="achievements__label title-animation">Programs launched</h3>
                            <div class="achievements__value achievements__value--plus">
                                <span class="odometer achievements__odometer" data-target="57" data-format="d">0</span>
                            </div>
                        </article>

                        <article class="achievements__card revealmetop">
                            <h3 class="achievements__label title-animation">Interactive simulations and games</h3>
                            <div class="achievements__value">
                                <span class="odometer achievements__odometer" data-target="25" data-format="d">0</span>
                            </div>
                        </article>

                        <article class="achievements__card revealmetop">
                            <h3 class="achievements__label title-animation">Global certifications</h3>
                            <div class="achievements__value">
                                <span class="odometer achievements__odometer" data-target="7" data-format="d">0</span>
                            </div>
                        </article>
                    </div>

                    <div class="achievements__grid achievements__grid--two">
                        <article class="achievements__card revealmetop">
                            <h3 class="achievements__label title-animation">Trainee days</h3>
                            <div class="achievements__value">
                                <span class="odometer achievements__odometer" data-target="22098"
                                    data-format="(,ddd)">0</span>
                            </div>
                        </article>

                        <article class="achievements__card revealmetop">
                            <h3 class="achievements__label title-animation">NPS participation, advocacy, and
                                satisfaction</h3>
                            <div class="achievements__value achievements__value--suffix">
                                <span class="odometer achievements__odometer" data-target="95" data-format="d">0</span>
                                <span class="achievements__suffix">%</span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
             SERVICES
        ============================================================ -->
    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="services__pin-wrap" id="servicesPinWrap">
                        <div class="services__sticky" id="servicesSticky">
                            <div class="services__header">
                                <h2 class="services__title title-animation">Our Services</h2>
                            </div>

                            <div class="services__stack" id="servicesStack">
                                <article class="services__card" data-service-card data-service-index="0">
                                    <span class="services__bar"></span>
                                    <span class="services__glow"></span>
                                    <span class="services__shim" id="servicesShim0"></span>
                                    <span class="services__index">01</span>
                                    <span class="services__name">Strategic Consulting</span>
                                    <span class="services__arrow" aria-hidden="true">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 14L14 4M14 4H7.5M14 4V10.5" stroke="currentColor"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </article>

                                <article class="services__card" data-service-card data-service-index="1">
                                    <span class="services__bar"></span>
                                    <span class="services__glow"></span>
                                    <span class="services__shim" id="servicesShim1"></span>
                                    <span class="services__index">02</span>
                                    <span class="services__name">Business Transformation and Advanced
                                        Solutions</span>
                                    <span class="services__arrow" aria-hidden="true">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 14L14 4M14 4H7.5M14 4V10.5" stroke="currentColor"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </article>

                                <article class="services__card" data-service-card data-service-index="2">
                                    <span class="services__bar"></span>
                                    <span class="services__glow"></span>
                                    <span class="services__shim" id="servicesShim2"></span>
                                    <span class="services__index">03</span>
                                    <span class="services__name">Upskilling Programs</span>
                                    <span class="services__arrow" aria-hidden="true">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 14L14 4M14 4H7.5M14 4V10.5" stroke="currentColor"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </article>

                                <article class="services__card" data-service-card data-service-index="3">
                                    <span class="services__bar"></span>
                                    <span class="services__glow"></span>
                                    <span class="services__shim" id="servicesShim3"></span>
                                    <span class="services__index">04</span>
                                    <span class="services__name">Hackathons, Makeathons, Innovation
                                        Challenges</span>
                                    <span class="services__arrow" aria-hidden="true">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 14L14 4M14 4H7.5M14 4V10.5" stroke="currentColor"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </article>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
             ECOSYSTEM
        ============================================================ -->
    <section class="ecosystem" id="ecosystem">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ecosystem__header">
                        <h2 class="ecosystem__title title-animation">Our Ecosystem</h2>
                    </div>

                    <div class="ecosystem__marquee">
                        <div class="ecosystem__fade ecosystem__fade--left" aria-hidden="true"></div>
                        <div class="ecosystem__fade ecosystem__fade--right" aria-hidden="true"></div>

                        <div class="ecosystem__track" data-ecosystem-track>
                            <div class="ecosystem__group">
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-1.png"
                                        alt="Ecosystem partner 1"></div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-2.png"
                                        alt="Ecosystem partner 2"></div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-3.png"
                                        alt="Ecosystem partner 3"></div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-4.png"
                                        alt="Ecosystem partner 4"></div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-5.png"
                                        alt="Ecosystem partner 5"></div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-6.png"
                                        alt="Ecosystem partner 6"></div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-7.png"
                                        alt="Ecosystem partner 7"></div>
                            </div>

                            <div class="ecosystem__group" aria-hidden="true">
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-1.png" alt="">
                                </div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-2.png" alt="">
                                </div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-3.png" alt="">
                                </div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-4.png" alt="">
                                </div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-5.png" alt="">
                                </div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-6.png" alt="">
                                </div>
                                <div class="ecosystem__logo"><img src="assets/images/ecosystem/logo-7.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
             LATEST NEWS
        ============================================================ -->
    <section class="news" id="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news__header revealmetop">
                        <h2 class="news__title title-animation">Latest News</h2>
                        <a class="news__cta btn" href="#news">
                            <span>Explore All News</span>
                            <span class="btn__icon" aria-hidden="true">
                                <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="news__list">
                        <article class="news__item" data-news-item>
                            <div class="news__meta">
                                <span class="news__tag">Partnerships</span>
                                <span class="news__tag">Innovation</span>
                            </div>

                            <div class="news__grid">
                                <div class="news__lead">
                                    <h3 class="news__headline title-animation">BRIEDGE LIF EXPANDS SMART FACTORY
                                        SOLUTIONS IN
                                        COLLABORATION WITH GLOBAL TECH LEADERS</h3>
                                    <a class="news__readmore btn" href="#news">
                                        <span>Read More</span>
                                        <span class="btn__icon" aria-hidden="true">
                                            <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>

                                <div class="news__copy title-animation">
                                    <p>We are excited to announce new strategic partnerships with leading technology
                                        providers to enhance our Digital &amp; Smart Factory Solutions. This
                                        collaboration will accelerate the adoption of AI-driven automation, IoT, and
                                        predictive analytics across industries.</p>
                                </div>

                                <a class="news__media" href="#news"
                                    aria-label="Read BRIEDGE LIF expands smart factory solutions article">
                                    <img src="assets/images/ls01.webp" alt="Abstract dark geometric texture">
                                </a>
                            </div>
                        </article>

                        <article class="news__item" data-news-item>
                            <div class="news__meta">
                                <span class="news__tag">Training</span>
                            </div>

                            <div class="news__grid">
                                <div class="news__lead">
                                    <h3 class="news__headline title-animation">12,458+ PROFESSIONALS TRAINED -
                                        EMPOWERING THE
                                        WORKFORCE FOR INDUSTRY 4.0</h3>
                                    <a class="news__readmore btn" href="#news">
                                        <span>Read More</span>
                                        <span class="btn__icon" aria-hidden="true">
                                            <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>

                                <div class="news__copy title-animation">
                                    <p>With over 2,356+ training sessions completed, LIF continues to upskill
                                        professionals across various industries. Our latest programs focus on smart
                                        manufacturing, digital transformation, and industrial AI, ensuring
                                        businesses stay ahead of the curve.</p>
                                </div>

                                <a class="news__media" href="#news" aria-label="Read professionals trained article">
                                    <img src="assets/images/ls02.webp" alt="Abstract black wave texture">
                                </a>
                            </div>
                        </article>

                        <article class="news__item" data-news-item>
                            <div class="news__meta">
                                <span class="news__tag">Ecosystem</span>
                                <span class="news__tag">Partnerships</span>
                            </div>

                            <div class="news__grid">
                                <div class="news__lead">
                                    <h3 class="news__headline title-animation">STRENGTHENING OUR ECOSYSTEM - NEW
                                        KNOWLEDGE &amp;
                                        STRATEGIC PARTNERS JOIN LIF</h3>
                                    <a class="news__readmore btn" href="#news">
                                        <span>Read More</span>
                                        <span class="btn__icon" aria-hidden="true">
                                            <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>

                                <div class="news__copy title-animation">
                                    <p>We are proud to welcome leading universities, research institutions, and
                                        industry leaders to our growing ecosystem. These partnerships will drive
                                        innovation, foster cutting-edge research, and support the next generation of
                                        industry experts.</p>
                                </div>

                                <a class="news__media" href="#news" aria-label="Read ecosystem partnerships article">
                                    <img src="assets/images/ls03.webp" alt="Abstract diagonal black stripes">
                                </a>
                            </div>
                        </article>

                        <article class="news__item" data-news-item>
                            <div class="news__meta">
                                <span class="news__tag">Joint Ventures</span>
                                <span class="news__tag">Innovation</span>
                            </div>

                            <div class="news__grid">
                                <div class="news__lead">
                                    <h3 class="news__headline title-animation">JOINT VENTURES - DRIVING DIGITAL
                                        TRANSFORMATION IN
                                        MANUFACTURING</h3>
                                    <a class="news__readmore btn" href="#news">
                                        <span>Read More</span>
                                        <span class="btn__icon" aria-hidden="true">
                                            <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>

                                <div class="news__copy title-animation">
                                    <p>LIF has joined forces with top industrial leaders to launch large-scale
                                        transformation projects, integrating IoT, AI, and smart automation into
                                        traditional manufacturing processes. This initiative will boost productivity
                                        and efficiency while ensuring sustainable growth.</p>
                                </div>

                                <a class="news__media" href="#news" aria-label="Read joint ventures article">
                                    <img src="assets/images/ls04.webp" alt="Abstract textured black background">
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
             ARTICLES
        ============================================================ -->
    <section class="articles" id="articles">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="articles__header revealmetop">
                        <h2 class="articles__title title-animation">Featured Articles &amp; Insights</h2>
                        <a class="articles__cta btn" href="#articles">
                            <span>Explore All Articles</span>
                            <span class="btn__icon" aria-hidden="true">
                                <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="articles__grid">
                        <article class="articles__card" data-article-card>
                            <a class="articles__media" href="#articles" aria-label="Read smart manufacturing article">
                                <img src="assets/images/article-1-image.webp" alt="Abstract grayscale folded surface">
                            </a>
                            <div class="articles__body">
                                <h3 class="articles__headline title-animation">THE FUTURE OF SMART MANUFACTURING:
                                    HOW INDUSTRY 4.0
                                    IS TRANSFORMING FACTORIES</h3>
                                <p class="articles__excerpt title-animation">The shift towards smart factories is
                                    revolutionizing
                                    industries with automation, IoT, and AI-driven analytics. Learn how businesses
                                    are leveraging these technologies to boost efficiency, reduce costs, and stay
                                    ahead in the competitive market.</p>
                                <a class="articles__readmore btn" href="#articles">
                                    <span>Read More</span>
                                    <span class="btn__icon" aria-hidden="true">
                                        <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </article>

                        <article class="articles__card" data-article-card>
                            <a class="articles__media" href="#articles" aria-label="Read digital twins article">
                                <img src="assets/images/article-2-image.webp" alt="Abstract dark circular line pattern">
                            </a>
                            <div class="articles__body">
                                <h3 class="articles__headline title-animation">DIGITAL TWINS: THE KEY TO OPTIMIZED
                                    INDUSTRIAL
                                    OPERATIONS</h3>
                                <p class="articles__excerpt title-animation">Digital Twin Technology allows
                                    businesses to create
                                    real-time virtual models of their physical operations, enabling predictive
                                    maintenance, process optimization, and improved decision-making. Discover how
                                    this innovation is reshaping the manufacturing landscape.</p>
                                <a class="articles__readmore btn" href="#articles">
                                    <span>Read More</span>
                                    <span class="btn__icon" aria-hidden="true">
                                        <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </article>

                        <article class="articles__card" data-article-card>
                            <a class="articles__media" href="#articles" aria-label="Read upskilling future article">
                                <img src="assets/images/article-3-image.webp" alt="Abstract grayscale layered shapes">
                            </a>
                            <div class="articles__body">
                                <h3 class="articles__headline title-animation">UPSKILLING FOR THE FUTURE: WHY
                                    DIGITAL LITERACY IS
                                    ESSENTIAL IN INDUSTRY 4.0</h3>
                                <p class="articles__excerpt title-animation">With AI, automation, and smart
                                    technologies redefining
                                    job roles, businesses must invest in upskilling their workforce. Explore the
                                    essential skills required for the future of work and how training programs are
                                    bridging the gap.</p>
                                <a class="articles__readmore btn" href="#articles">
                                    <span>Read More</span>
                                    <span class="btn__icon" aria-hidden="true">
                                        <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </article>

                        <article class="articles__card" data-article-card>
                            <a class="articles__media" href="#articles" aria-label="Read smart factory roadmap article">
                                <img src="assets/images/article-4-image.webp" alt="Abstract black ribbon texture">
                            </a>
                            <div class="articles__body">
                                <h3 class="articles__headline title-animation">FROM TRADITIONAL TO DIGITAL: THE
                                    ROADMAP TO SMART
                                    FACTORY IMPLEMENTATION</h3>
                                <p class="articles__excerpt title-animation">Transitioning from conventional
                                    manufacturing to a
                                    smart factory requires careful planning and execution. This article breaks down
                                    the step-by-step approach to successfully adopting digital transformation
                                    strategies in industries.</p>
                                <a class="articles__readmore btn" href="#articles">
                                    <span>Read More</span>
                                    <span class="btn__icon" aria-hidden="true">
                                        <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
             AWARDS
        ============================================================ -->
    <section class="awards" id="awards">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="awards__layout">
                        <div class="awards__intro revealmetop">
                            <h2 class="awards__title title-animation">Awards and Certifications</h2>
                        </div>

                        <div class="awards__grid">
                            <article class="awards__card revealmetop" style="--reveal-delay: 0.06s">
                                <div class="awards__card-glow"></div>
                                <div class="awards__card-content">
                                    <h3 class="awards__card-title title-animation">ISO 21001:2025 Certification</h3>
                                    <a class="awards__link" href="#awards">
                                        <span>Learn More</span>
                                        <span class="btn__icon" aria-hidden="true">
                                            <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </article>

                            <article class="awards__card revealmetop" style="--reveal-delay: 0.12s">
                                <div class="awards__card-glow"></div>
                                <div class="awards__card-content">
                                    <h3 class="awards__card-title title-animation">Lead Operational Excellence Award
                                    </h3>
                                    <a class="awards__link" href="#awards">
                                        <span>Learn More</span>
                                        <span class="btn__icon" aria-hidden="true">
                                            <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
             CONTACT
        ============================================================ -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact__shell">
                        <div class="contact__stage">
                            <div class="contact__info revealmetop">
                                <div class="contact__intro">
                                    <h2 class="contact__title title-animation">Contact Us</h2>
                                    <p class="contact__description title-animation">We're here to help! Whether you
                                        have questions
                                        about our services, want to explore partnership opportunities, or need
                                        expert guidance, feel free to reach out to us.</p>
                                </div>

                                <div class="contact__details">
                                    <article class="contact__detail">
                                        <h3 class="contact__detail-title">Address</h3>
                                        <p class="contact__detail-copy">Head Office, Rabdan - Al Maqta<br>Abu Dhabi,
                                            UAE</p>
                                        <a class="contact__detail-link"
                                            href="https://maps.google.com/?q=Rabdan+Al+Maqta+Abu+Dhabi+UAE"
                                            target="_blank" rel="noreferrer">
                                            <span>Get Directions</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                                    viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620"
                                                        stroke-width="1.6" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                                    viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#fff" stroke-width="1.6"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </article>

                                    <article class="contact__detail">
                                        <h3 class="contact__detail-title">Phone Number</h3>
                                        <p class="contact__detail-copy">+97122056500</p>
                                        <a class="contact__detail-link" href="tel:+97122056500">
                                            <span>Make A Call</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                                    viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620"
                                                        stroke-width="1.6" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                                    viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#fff" stroke-width="1.6"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </article>

                                    <article class="contact__detail">
                                        <h3 class="contact__detail-title">Email</h3>
                                        <p class="contact__detail-copy">LIF@edgegroup.ae</p>
                                        <a class="contact__detail-link" href="mailto:LIF@edgegroup.ae">
                                            <span>Send An Email</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                                    viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620"
                                                        stroke-width="1.6" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                                    viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#fff" stroke-width="1.6"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </article>
                                </div>
                            </div>

                            <div class="contact__form-card revealmetop">
                                <div class="contact__form-border"></div>
                                <div class="contact__form-panel">
                                    <div class="contact__form-header">
                                        <h2 class="contact__form-title title-animation">Get In Touch</h2>
                                        <p class="contact__form-copy">We'd love to hear from you! Fill out the form
                                            below, and our team will get back to you as soon as possible.</p>
                                    </div>

                                    <form class="contact__form" action="#" method="post">
                                        <label class="contact__field">
                                            <input type="text" name="full_name" placeholder="Full name">
                                        </label>
                                        <label class="contact__field">
                                            <input type="email" name="email" placeholder="Email Address">
                                        </label>
                                        <label class="contact__field contact__field--phone">
                                            <span class="contact__prefix">+971</span>
                                            <input type="tel" name="mobile" placeholder="Mobile Number">
                                        </label>
                                        <label class="contact__field contact__field--textarea">
                                            <textarea name="message" rows="5" placeholder="Message"></textarea>
                                        </label>

                                        <button class="btn btn--hero contact__submit" type="submit">
                                            Get In Touch
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                                    viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                                    viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end contact__stage -->
                    </div><!-- end contact__shell -->
                </div><!-- end col-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end .contact -->

    <?php include 'inc/footer.php'; ?>
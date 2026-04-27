<?php
$pageTitle  = 'BRIDGE — News';
$activePage = 'news';
?>
<?php include 'inc/header.php'; ?>

<main class="news-page inner-page-top" data-news-page>

        <section class="news-page__section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="news-page__header">
                            <h1 class="news-page__title title-animation">Latest News</h1>
                        </header>

                        <div class="news-page__filters revealmetop">
                            <div class="news-page__tabs" role="tablist" aria-label="News categories">
                                <button class="news-page__tab news-page__tab--active" type="button" data-news-filter="all" aria-pressed="true">All</button>
                                <button class="news-page__tab" type="button" data-news-filter="partnerships" aria-pressed="false">Partnerships</button>
                                <button class="news-page__tab" type="button" data-news-filter="training" aria-pressed="false">Training</button>
                                <button class="news-page__tab" type="button" data-news-filter="innovation" aria-pressed="false">Innovation</button>
                                <button class="news-page__tab" type="button" data-news-filter="joint-ventures" aria-pressed="false">Joint Ventures</button>
                                <button class="news-page__tab" type="button" data-news-filter="ecosystem" aria-pressed="false">Ecosystem</button>
                            </div>

                            <label class="news-page__select-wrap" for="newsCategory">
                                <span class="news-page__select-label">Category</span>
                                <select class="news-page__select" id="newsCategory" aria-label="Select news category">
                                    <option value="all">All</option>
                                    <option value="partnerships">Partnerships</option>
                                    <option value="training">Training</option>
                                    <option value="innovation">Innovation</option>
                                    <option value="joint-ventures">Joint Ventures</option>
                                    <option value="ecosystem">Ecosystem</option>
                                </select>
                            </label>
                        </div>

                        <div class="news__list news-page__list" data-news-list>
                            <article class="news__item news-page__item" data-news-entry data-news-categories="partnerships,innovation">
                                <div class="news__meta">
                                    <span class="news__tag">Partnerships</span>
                                    <span class="news__tag">Innovation</span>
                                </div>

                                <div class="news__grid">
                                    <div class="news__lead">
                                        <h2 class="news__headline title-animation">BRIEDGE LIF EXPANDS SMART FACTORY SOLUTIONS IN COLLABORATION WITH GLOBAL TECH LEADERS</h2>
                                        <a class="news__readmore btn" href="news-detail.php">
                                            <span>Read More</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="news__copy">
                                        <p>We are excited to announce new strategic partnerships with leading technology providers to enhance our Digital &amp; Smart Factory Solutions. This collaboration will accelerate the adoption of AI-driven automation, IoT, and predictive analytics across industries.</p>
                                    </div>

                                    <a class="news__media" href="news-detail.php" aria-label="Read smart factory solutions article">
                                        <img src="assets/images/ls01.webp" alt="Abstract dark geometric texture">
                                    </a>
                                </div>
                            </article>

                            <article class="news__item news-page__item" data-news-entry data-news-categories="training">
                                <div class="news__meta">
                                    <span class="news__tag">Training</span>
                                </div>

                                <div class="news__grid">
                                    <div class="news__lead">
                                        <h2 class="news__headline title-animation">12,458+ PROFESSIONALS TRAINED - EMPOWERING THE WORKFORCE FOR INDUSTRY 4.0</h2>
                                        <a class="news__readmore btn" href="news-detail.php">
                                            <span>Read More</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="news__copy">
                                        <p>With over 2,356+ training sessions completed, LIF continues to upskill professionals across various industries. Our latest programs focus on smart manufacturing, digital transformation, and industrial AI, ensuring businesses stay ahead of the curve.</p>
                                    </div>

                                    <a class="news__media" href="news-detail.php" aria-label="Read workforce training article">
                                        <img src="assets/images/ls02.webp" alt="Abstract black wave texture">
                                    </a>
                                </div>
                            </article>

                            <article class="news__item news-page__item" data-news-entry data-news-categories="ecosystem,partnerships">
                                <div class="news__meta">
                                    <span class="news__tag">Ecosystem</span>
                                    <span class="news__tag">Partnerships</span>
                                </div>

                                <div class="news__grid">
                                    <div class="news__lead">
                                        <h2 class="news__headline title-animation">STRENGTHENING OUR ECOSYSTEM - NEW KNOWLEDGE &amp; STRATEGIC PARTNERS JOIN LIF</h2>
                                        <a class="news__readmore btn" href="news-detail.php">
                                            <span>Read More</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="news__copy">
                                        <p>We are proud to welcome leading universities, research institutions, and industry leaders to our growing ecosystem. These partnerships will drive innovation, foster cutting-edge research, and support the next generation of industry experts.</p>
                                    </div>

                                    <a class="news__media" href="news-detail.php" aria-label="Read ecosystem growth article">
                                        <img src="assets/images/ls03.webp" alt="Abstract diagonal black stripes">
                                    </a>
                                </div>
                            </article>

                            <article class="news__item news-page__item" data-news-entry data-news-categories="joint-ventures,innovation">
                                <div class="news__meta">
                                    <span class="news__tag">Joint Ventures</span>
                                    <span class="news__tag">Innovation</span>
                                </div>

                                <div class="news__grid">
                                    <div class="news__lead">
                                        <h2 class="news__headline title-animation">JOINT VENTURES - DRIVING DIGITAL TRANSFORMATION IN MANUFACTURING</h2>
                                        <a class="news__readmore btn" href="news-detail.php">
                                            <span>Read More</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="news__copy">
                                        <p>LIF has joined forces with top industrial leaders to launch large-scale transformation projects, integrating IoT, AI, and smart automation into traditional manufacturing processes. This initiative will boost productivity and efficiency while ensuring sustainable growth.</p>
                                    </div>

                                    <a class="news__media" href="news-detail.php" aria-label="Read digital transformation article">
                                        <img src="assets/images/ls04.webp" alt="Abstract textured black background">
                                    </a>
                                </div>
                            </article>

                            <article class="news__item news-page__item" data-news-entry data-news-categories="partnerships,ecosystem">
                                <div class="news__meta">
                                    <span class="news__tag">Partnerships</span>
                                    <span class="news__tag">Ecosystem</span>
                                </div>

                                <div class="news__grid">
                                    <div class="news__lead">
                                        <h2 class="news__headline title-animation">BRIDGE DEEPENS INDUSTRY ALLIANCES TO SCALE FUTURE-READY CAPABILITY BUILDING</h2>
                                        <a class="news__readmore btn" href="news-detail.php">
                                            <span>Read More</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="news__copy">
                                        <p>New alliance programmes are helping BRIDGE expand applied learning pathways, shared innovation labs, and co-developed transformation frameworks that deliver faster value for public and private sector partners.</p>
                                    </div>

                                    <a class="news__media" href="news-detail.php" aria-label="Read industry alliances article">
                                        <img src="assets/images/ls01.webp" alt="Abstract dark geometric texture">
                                    </a>
                                </div>
                            </article>

                            <article class="news__item news-page__item" data-news-entry data-news-categories="training,innovation">
                                <div class="news__meta">
                                    <span class="news__tag">Training</span>
                                    <span class="news__tag">Innovation</span>
                                </div>

                                <div class="news__grid">
                                    <div class="news__lead">
                                        <h2 class="news__headline title-animation">NEW APPLIED LEARNING TRACKS PREPARE PROFESSIONALS FOR AI-ENABLED OPERATIONS</h2>
                                        <a class="news__readmore btn" href="news-detail.php">
                                            <span>Read More</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="news__copy">
                                        <p>BRIDGE has launched new applied learning tracks focused on AI-enabled operations, smart process design, and digital leadership to help organisations develop practical readiness across multiple functions.</p>
                                    </div>

                                    <a class="news__media" href="news-detail.php" aria-label="Read applied learning article">
                                        <img src="assets/images/ls02.webp" alt="Abstract black wave texture">
                                    </a>
                                </div>
                            </article>

                            <article class="news__item news-page__item" data-news-entry data-news-categories="joint-ventures">
                                <div class="news__meta">
                                    <span class="news__tag">Joint Ventures</span>
                                </div>

                                <div class="news__grid">
                                    <div class="news__lead">
                                        <h2 class="news__headline title-animation">CO-CREATION PROGRAMMES TURN INDUSTRIAL CHALLENGES INTO HIGH-IMPACT SOLUTIONS</h2>
                                        <a class="news__readmore btn" href="news-detail.php">
                                            <span>Read More</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="news__copy">
                                        <p>Through focused co-creation programmes, BRIDGE and its partners are accelerating pilot initiatives that move from concept to implementation faster, with clear performance gains and stronger execution confidence.</p>
                                    </div>

                                    <a class="news__media" href="news-detail.php" aria-label="Read co-creation programmes article">
                                        <img src="assets/images/ls03.webp" alt="Abstract diagonal black stripes">
                                    </a>
                                </div>
                            </article>

                            <article class="news__item news-page__item" data-news-entry data-news-categories="ecosystem,innovation">
                                <div class="news__meta">
                                    <span class="news__tag">Ecosystem</span>
                                    <span class="news__tag">Innovation</span>
                                </div>

                                <div class="news__grid">
                                    <div class="news__lead">
                                        <h2 class="news__headline title-animation">ECOSYSTEM MOMENTUM CONTINUES WITH NEW INNOVATION CHALLENGE COLLABORATIONS</h2>
                                        <a class="news__readmore btn" href="news-detail.php">
                                            <span>Read More</span>
                                            <span class="btn__icon" aria-hidden="true">
                                                <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="news__copy">
                                        <p>Fresh collaborations across academia, industry, and technology networks are enabling BRIDGE to deliver more challenge-led programmes that connect emerging ideas with real-world operational impact.</p>
                                    </div>

                                    <a class="news__media" href="news-detail.php" aria-label="Read ecosystem momentum article">
                                        <img src="assets/images/ls04.webp" alt="Abstract textured black background">
                                    </a>
                                </div>
                            </article>
                        </div>

                        <div class="news-page__pagination revealmetop" data-news-pagination>
                            <button class="news-page__page-button news-page__page-button--icon" type="button" data-news-prev aria-label="Previous page">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.667 5L6.667 10L11.667 15" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="news-page__page-list" data-news-page-list></div>
                            <button class="news-page__page-button news-page__page-button--icon" type="button" data-news-next aria-label="Next page">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.333 5L13.333 10L8.333 15" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </section>

<?php include 'inc/footer.php'; ?>

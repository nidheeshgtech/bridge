<?php
$pageTitle  = 'BRIDGE — Articles';
$activePage = 'articles';
?>
<?php include 'inc/header.php'; ?>

<main class="articles-page inner-page-top" data-articles-page>

        <section class="articles-page__section">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <header class="articles-page__header">
                            <h1 class="articles-page__title title-animation">Featured Articles<br>&amp; Insights</h1>
                            <a href="#" class="articles__cta" aria-label="Explore all articles">
                                <span>Explore All Articles</span>
                                <span class="btn__icon" aria-hidden="true">
                                    <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </header>

                        <div class="articles-page__filters revealmetop">
                            <div class="articles-page__tabs" role="tablist" aria-label="Article categories">
                                <button class="articles-page__tab articles-page__tab--active" type="button" data-article-filter="all" aria-pressed="true">All</button>
                                <button class="articles-page__tab" type="button" data-article-filter="industry" aria-pressed="false">Industry 4.0</button>
                                <button class="articles-page__tab" type="button" data-article-filter="technology" aria-pressed="false">Technology</button>
                                <button class="articles-page__tab" type="button" data-article-filter="innovation" aria-pressed="false">Innovation</button>
                                <button class="articles-page__tab" type="button" data-article-filter="leadership" aria-pressed="false">Leadership</button>
                                <button class="articles-page__tab" type="button" data-article-filter="digital" aria-pressed="false">Digital Transformation</button>
                            </div>

                            <label class="articles-page__select-wrap" for="articleCategory">
                                <span class="articles-page__select-label">Category</span>
                                <select class="articles-page__select" id="articleCategory" aria-label="Select article category">
                                    <option value="all">All</option>
                                    <option value="industry">Industry 4.0</option>
                                    <option value="technology">Technology</option>
                                    <option value="innovation">Innovation</option>
                                    <option value="leadership">Leadership</option>
                                    <option value="digital">Digital Transformation</option>
                                </select>
                            </label>
                        </div>

                        <div class="articles__grid articles-page__grid" data-articles-list>

                            <article class="articles__card" data-article-entry data-article-categories="industry,innovation">
                                <a class="articles__media" href="news-detail.php" aria-label="Read smart manufacturing article">
                                    <img src="assets/images/article-1-image.webp" alt="Smart Manufacturing" loading="lazy">
                                </a>
                                <div class="articles__body">
                                    <h2 class="articles__headline">The Future of Smart Manufacturing in the Middle East</h2>
                                    <p class="articles__excerpt">As Industry 4.0 reshapes global production, organisations across the GCC are accelerating their transition to intelligent, connected manufacturing ecosystems driven by AI and IoT.</p>
                                    <a href="news-detail.php" class="articles__readmore" aria-label="Read smart manufacturing article">
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
                            </article>

                            <article class="articles__card" data-article-entry data-article-categories="technology,digital">
                                <a class="articles__media" href="news-detail.php" aria-label="Read AI-driven operations article">
                                    <img src="assets/images/article-2-image.webp" alt="AI-Driven Operations" loading="lazy">
                                </a>
                                <div class="articles__body">
                                    <h2 class="articles__headline">AI-Driven Operations: From Pilot Projects to Full-Scale Deployment</h2>
                                    <p class="articles__excerpt">Organisations that have successfully scaled AI pilots share a common blueprint — clear governance, cross-functional collaboration, and a relentless focus on measurable outcomes.</p>
                                    <a href="news-detail.php" class="articles__readmore" aria-label="Read AI operations article">
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
                            </article>

                            <article class="articles__card" data-article-entry data-article-categories="leadership,innovation">
                                <a class="articles__media" href="news-detail.php" aria-label="Read leadership in transformation article">
                                    <img src="assets/images/article-3-image.webp" alt="Leadership in Transformation" loading="lazy">
                                </a>
                                <div class="articles__body">
                                    <h2 class="articles__headline">Building the Leadership Capability for Industrial Transformation</h2>
                                    <p class="articles__excerpt">Effective digital transformation isn't a technology problem — it's a leadership challenge. Organisations need executives who can navigate complexity, inspire teams, and sustain momentum through change.</p>
                                    <a href="news-detail.php" class="articles__readmore" aria-label="Read leadership article">
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
                            </article>

                            <article class="articles__card" data-article-entry data-article-categories="digital,industry">
                                <a class="articles__media" href="news-detail.php" aria-label="Read digital factory article">
                                    <img src="assets/images/article-4-image.webp" alt="Digital Factory" loading="lazy">
                                </a>
                                <div class="articles__body">
                                    <h2 class="articles__headline">Digital Factories: Redefining Industrial Competitiveness</h2>
                                    <p class="articles__excerpt">The digital factory model integrates real-time data, advanced analytics, and automation to deliver unprecedented levels of efficiency, flexibility, and product quality across manufacturing operations.</p>
                                    <a href="news-detail.php" class="articles__readmore" aria-label="Read digital factory article">
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
                            </article>

                            <article class="articles__card" data-article-entry data-article-categories="technology,innovation">
                                <a class="articles__media" href="news-detail.php" aria-label="Read IoT ecosystem article">
                                    <img src="assets/images/article-1-image.webp" alt="IoT Ecosystem" loading="lazy">
                                </a>
                                <div class="articles__body">
                                    <h2 class="articles__headline">Unlocking the Power of Industrial IoT Ecosystems</h2>
                                    <p class="articles__excerpt">Industrial IoT is no longer a future concept — it's the connective tissue of modern operations, enabling real-time visibility, predictive maintenance, and data-driven decision-making at every level.</p>
                                    <a href="news-detail.php" class="articles__readmore" aria-label="Read IoT article">
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
                            </article>

                            <article class="articles__card" data-article-entry data-article-categories="leadership,digital">
                                <a class="articles__media" href="news-detail.php" aria-label="Read workforce readiness article">
                                    <img src="assets/images/article-2-image.webp" alt="Workforce Readiness" loading="lazy">
                                </a>
                                <div class="articles__body">
                                    <h2 class="articles__headline">Workforce Readiness for the Age of Intelligent Automation</h2>
                                    <p class="articles__excerpt">As automation reshapes job roles across industries, organisations must invest in reskilling and upskilling strategies that keep their people ahead of the capability curve and engaged in the transformation journey.</p>
                                    <a href="news-detail.php" class="articles__readmore" aria-label="Read workforce article">
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
                            </article>

                            <article class="articles__card" data-article-entry data-article-categories="industry,technology">
                                <a class="articles__media" href="news-detail.php" aria-label="Read predictive analytics article">
                                    <img src="assets/images/article-3-image.webp" alt="Predictive Analytics" loading="lazy">
                                </a>
                                <div class="articles__body">
                                    <h2 class="articles__headline">Predictive Analytics: Turning Industrial Data into Competitive Advantage</h2>
                                    <p class="articles__excerpt">Manufacturers who harness predictive analytics gain a critical edge — anticipating equipment failures, optimising supply chains, and aligning production with shifting market demand before problems arise.</p>
                                    <a href="news-detail.php" class="articles__readmore" aria-label="Read predictive analytics article">
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
                            </article>

                            <article class="articles__card" data-article-entry data-article-categories="innovation,digital">
                                <a class="articles__media" href="news-detail.php" aria-label="Read sustainable innovation article">
                                    <img src="assets/images/article-4-image.webp" alt="Sustainable Innovation" loading="lazy">
                                </a>
                                <div class="articles__body">
                                    <h2 class="articles__headline">Sustainable Innovation: How Industry Is Balancing Growth with Responsibility</h2>
                                    <p class="articles__excerpt">Leading industrial organisations are discovering that sustainability and performance are not in conflict — they are increasingly inseparable, with green operations delivering both efficiency gains and long-term resilience.</p>
                                    <a href="news-detail.php" class="articles__readmore" aria-label="Read sustainable innovation article">
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
                            </article>

                        </div>

                        <div class="articles-page__pagination revealmetop" data-articles-pagination>
                            <button class="articles-page__page-button articles-page__page-button--icon" type="button" data-articles-prev aria-label="Previous page">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.667 5L6.667 10L11.667 15" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="articles-page__page-list" data-articles-page-list></div>
                            <button class="articles-page__page-button articles-page__page-button--icon" type="button" data-articles-next aria-label="Next page">
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

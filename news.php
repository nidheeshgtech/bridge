<?php
$pageTitle = 'BRIDGE — News';
$activePage = 'news';
include 'inc/news-data.php';
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

                    <div class="news-page__filters revealmetop" style="display:none">
                        <div class="news-page__tabs" role="tablist" aria-label="News categories">
                            <button class="news-page__tab news-page__tab--active" type="button" data-news-filter="all"
                                aria-pressed="true">All</button>
                            <button class="news-page__tab" type="button" data-news-filter="defence"
                                aria-pressed="false">Defence</button>
                            <button class="news-page__tab" type="button" data-news-filter="manufacturing"
                                aria-pressed="false">Manufacturing</button>
                            <button class="news-page__tab" type="button" data-news-filter="made-in-uae"
                                aria-pressed="false">Made in UAE</button>
                            <button class="news-page__tab" type="button" data-news-filter="partnerships"
                                aria-pressed="false">Partnerships</button>
                            <button class="news-page__tab" type="button" data-news-filter="innovation"
                                aria-pressed="false">Innovation</button>
                            <button class="news-page__tab" type="button" data-news-filter="mou"
                                aria-pressed="false">MoU</button>
                            <button class="news-page__tab" type="button" data-news-filter="industry-4-0"
                                aria-pressed="false">Industry 4.0</button>
                        </div>

                        <label class="news-page__select-wrap" for="newsCategory">
                            <span class="news-page__select-label">Category</span>
                            <select class="news-page__select" id="newsCategory" aria-label="Select news category">
                                <option value="all">All</option>
                                <option value="defence">Defence</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="made-in-uae">Made in UAE</option>
                                <option value="partnerships">Partnerships</option>
                                <option value="innovation">Innovation</option>
                                <option value="mou">MoU</option>
                                <option value="industry-4-0">Industry 4.0</option>
                            </select>
                        </label>
                    </div>

                    <div class="news__list news-page__list" data-news-list>
                        <?php foreach ($news_items as $item): ?>
                        <article class="news__item news-page__item" data-news-entry
                            data-news-categories="<?= htmlspecialchars($item['categories']) ?>">
                            <div class="news__meta">
                                <?php foreach ($item['tags'] as $tag): ?>
                                <span class="news__tag"><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                            </div>

                            <div class="news__grid">
                                <div class="news__lead">
                                    <h2 class="news__headline title-animation"><?= htmlspecialchars($item['headline']) ?></h2>
                                </div>

                                <div class="news__copy">
                                    <p><?= $item['copy'] ?></p>
                                </div>

                                <a class="news__media" href="<?= htmlspecialchars($item['link']) ?>"
                                    aria-label="<?= htmlspecialchars($item['aria_label']) ?>" target="_blank" rel="noopener noreferrer">
                                    <img src="<?= htmlspecialchars($item['image']) ?>"
                                        alt="<?= htmlspecialchars($item['image_alt']) ?>">
                                </a>

                                <a class="news__readmore btn" href="<?= htmlspecialchars($item['link']) ?>" target="_blank" rel="noopener noreferrer">
                                    <span>Read More</span>
                                    <span class="btn__icon" aria-hidden="true">
                                        <svg class="btn__arrow btn__arrow--a" width="13" height="13"
                                            viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="btn__arrow btn__arrow--b" width="13" height="13"
                                            viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>

                    <div class="news-page__pagination revealmetop" data-news-pagination>
                        <button class="news-page__page-button news-page__page-button--icon" type="button" data-news-prev
                            aria-label="Previous page">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.667 5L6.667 10L11.667 15" stroke="currentColor" stroke-width="1.4"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="news-page__page-list" data-news-page-list></div>
                        <button class="news-page__page-button news-page__page-button--icon" type="button" data-news-next
                            aria-label="Next page">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.333 5L13.333 10L8.333 15" stroke="currentColor" stroke-width="1.4"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/footer.php'; ?>

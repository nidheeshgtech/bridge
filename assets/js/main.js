// ── Hamburger toggle ────────────────────────────────────────
const hamburger = document.querySelector('.navbar__hamburger');
const navbar = document.querySelector('.navbar');
const siteHeader = document.querySelector('.site-header');
const introOverlay = document.querySelector('[data-page-intro]');
let lenisInstance = null;
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (hamburger) {
    hamburger.addEventListener('click', () => {
        const isOpen = navbar.classList.toggle('navbar--open');
        hamburger.setAttribute('aria-expanded', isOpen);
    });

    // Close menu when a nav link is clicked
    document.querySelectorAll('.navbar__link').forEach(link => {
        link.addEventListener('click', () => {
            navbar.classList.remove('navbar--open');
            hamburger.setAttribute('aria-expanded', 'false');
        });
    });
}

// ── Page intro animation ───────────────────────────────────
(function () {
    if (!introOverlay) return;

    const introLogo = introOverlay.querySelector('.page-intro__logo');
    const targetLogo = document.querySelector('.navbar__logo');
    const navbarMenu = document.querySelector('.navbar__menu');
    const navbarItems = Array.from(document.querySelectorAll('.navbar__menu .navbar__item'));
    const navbarRight = document.querySelector('.navbar__right');
    const pageMain = document.querySelector('main');
    const heroTitle = document.querySelector('.hero__title');
    const heroTitleSpans = heroTitle ? Array.from(heroTitle.querySelectorAll('[data-hero-title-span], [data-hero-span]')) : [];
    const heroLogo = document.querySelector('.hero__logo');
    const heroSub = document.querySelector('.hero__sub');
    const heroBtn = document.querySelector('.btn--hero');

    if (!introLogo || !targetLogo) return;

    const revealImmediately = () => {
        document.body.classList.remove('page-intro-active');
        if (siteHeader) gsap.set(siteHeader, { clearProps: 'all', autoAlpha: 1, y: 0 });
        if (targetLogo) gsap.set(targetLogo, { clearProps: 'all', autoAlpha: 1 });
        if (navbarMenu) gsap.set(navbarMenu, { clearProps: 'all' });
        if (navbarItems.length) gsap.set(navbarItems, { clearProps: 'all' });
        if (navbarRight) gsap.set(navbarRight, { clearProps: 'all', autoAlpha: 1, y: 0 });
        if (pageMain) gsap.set(pageMain, { clearProps: 'all', autoAlpha: 1 });
        if (heroTitleSpans.length) gsap.set(heroTitleSpans, { clearProps: 'all', autoAlpha: 1, y: 0 });
        if (heroLogo) gsap.set(heroLogo, { clearProps: 'all', autoAlpha: 1, y: 0, scale: 1 });
        if (heroSub) gsap.set(heroSub, { clearProps: 'all', autoAlpha: 1, y: 0 });
        if (heroBtn) gsap.set(heroBtn, { clearProps: 'all', autoAlpha: 1, y: 0 });
        gsap.set(introOverlay, { display: 'none' });
    };

    if (!window.gsap || prefersReducedMotion) {
        revealImmediately();
        return;
    }

    const runIntro = () => {
        const introRect = introLogo.getBoundingClientRect();
        const targetRect = targetLogo.getBoundingClientRect();

        if (!introRect.width || !targetRect.width) {
            revealImmediately();
            return;
        }

        const deltaX = targetRect.left - introRect.left;
        const deltaY = targetRect.top - introRect.top;
        const scale = targetRect.width / introRect.width;

        gsap.set(siteHeader, { autoAlpha: 0, y: -16 });
        gsap.set(targetLogo, { autoAlpha: 0 });
        if (navbarItems.length) gsap.set(navbarItems, { autoAlpha: 0, y: 12 });
        if (navbarRight) gsap.set(navbarRight, { autoAlpha: 0, y: 12 });
        if (pageMain) gsap.set(pageMain, { autoAlpha: 0 });
        if (heroTitleSpans.length) gsap.set(heroTitleSpans, { autoAlpha: 0, y: 42 });
        if (heroLogo) gsap.set(heroLogo, { autoAlpha: 0, y: 18, scale: 0.96, filter: 'blur(4px)' });
        if (heroSub) gsap.set(heroSub, { autoAlpha: 0, y: 18 });
        if (heroBtn) gsap.set(heroBtn, { autoAlpha: 0, y: 18 });

        const tl = gsap.timeline({
            defaults: {
                ease: 'power3.inOut'
            },
            onComplete: () => {
                document.body.classList.remove('page-intro-active');
                gsap.set(targetLogo, { clearProps: 'opacity' });
                gsap.set(introOverlay, { display: 'none' });
            }
        });

        tl.to({}, { duration: 0.18 });

        tl.to(introLogo, {
            x: deltaX,
            y: deltaY,
            scale,
            filter: 'blur(1.5px)',
            duration: 1.15
        }, 0.18);

        tl.to(introOverlay, {
            backgroundColor: 'rgba(20,20,20,0)',
            duration: 0.9,
            ease: 'power2.out'
        }, 0.34);

        tl.to(targetLogo, {
            autoAlpha: 1,
            duration: 0.18,
            ease: 'power2.out'
        }, 1.02);

        tl.to(introLogo, {
            autoAlpha: 0,
            filter: 'blur(4px)',
            duration: 0.22,
            ease: 'power2.out'
        }, 1.02);

        tl.to(siteHeader, {
            autoAlpha: 1,
            y: 0,
            duration: 0.42
        }, 1.08);

        tl.to(navbarItems, {
            autoAlpha: 1,
            y: 0,
            duration: 0.46,
            stagger: 0.05,
            ease: 'power2.out'
        }, 1.16);

        if (navbarRight) {
            tl.to(navbarRight, {
                autoAlpha: 1,
                y: 0,
                duration: 0.46,
                ease: 'power2.out'
            }, 1.16);
        }

        if (pageMain) {
            tl.to(pageMain, {
                autoAlpha: 1,
                duration: 0.48,
                ease: 'power2.out'
            }, 1.18);
        }

        if (heroLogo) {
            tl.to(heroLogo, {
                autoAlpha: 1,
                y: 0,
                scale: 1,
                filter: 'blur(0px)',
                duration: 0.72,
                ease: 'power3.out'
            }, 1.32);
        }

        if (heroTitleSpans.length) {
            tl.to(heroTitleSpans, {
                autoAlpha: 1,
                y: 0,
                duration: 0.82,
                stagger: 0.1,
                ease: 'power3.out'
            }, heroLogo ? 1.4 : 1.28);
        }

        if (heroSub) {
            tl.to(heroSub, {
                autoAlpha: 1,
                y: 0,
                duration: 0.58,
                ease: 'power3.out'
            }, heroTitleSpans.length ? '>-0.02' : (heroLogo ? 1.56 : 1.34));
        }

        if (heroBtn) {
            tl.to(heroBtn, {
                autoAlpha: 1,
                y: 0,
                duration: 0.56,
                ease: 'power3.out'
            }, '>-0.18');
        }
    };

    if (document.readyState === 'complete') {
        runIntro();
    } else {
        window.addEventListener('load', runIntro, { once: true });
    }
})();

// ── Search overlay ───────────────────────────────────────────
(function () {
    // Inject overlay HTML once
    const overlay = document.createElement('div');
    overlay.className = 'search-overlay';
    overlay.setAttribute('role', 'dialog');
    overlay.setAttribute('aria-modal', 'true');
    overlay.setAttribute('aria-label', 'Search');
    overlay.id = 'searchOverlay';
    overlay.innerHTML = `
        <button class="search-overlay__close" id="searchClose" aria-label="Close search">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6L18 18M18 6L6 18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
            </svg>
        </button>
        <div class="search-overlay__inner">
            <p class="search-overlay__hint">What are you looking for?</p>
            <form class="search-overlay__form" role="search" action="#" method="get">
                <span class="search-overlay__icon">
                    <svg viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.1383 16.5873L9.8575 10.5273C9.3575 10.9256 8.7825 11.2374 8.1325 11.4625C7.4825 11.6876 6.81008 11.8002 6.11525 11.8002C4.40608 11.8002 2.95958 11.2292 1.77575 10.0874C0.591917 8.94552 0 7.55024 0 5.90153C0 4.25298 0.59175 2.85722 1.77525 1.71423C2.95875 0.571412 4.40492 0 6.11375 0C7.82242 0 9.26908 0.571089 10.4537 1.71327C11.6382 2.85545 12.2305 4.25105 12.2305 5.90008C12.2305 6.58912 12.1107 7.24721 11.871 7.87434C11.6312 8.50147 11.3113 9.04691 10.9113 9.51066L17.192 15.5704L16.1383 16.5873ZM6.11525 10.3532C7.40375 10.3532 8.49508 9.92175 9.38925 9.05889C10.2836 8.19618 10.7308 7.14325 10.7308 5.90008C10.7308 4.65692 10.2836 3.60398 9.38925 2.74128C8.49508 1.87841 7.40375 1.44698 6.11525 1.44698C4.82675 1.44698 3.73542 1.87841 2.84125 2.74128C1.94692 3.60398 1.49975 4.65692 1.49975 5.90008C1.49975 7.14325 1.94692 8.19618 2.84125 9.05889C3.73542 9.92175 4.82675 10.3532 6.11525 10.3532Z" fill="currentColor"/>
                    </svg>
                </span>
                <input class="search-overlay__input" type="search" name="q" placeholder="Search…" autocomplete="off" autocorrect="off" spellcheck="false">
                <button class="search-overlay__submit" type="submit" aria-label="Submit search">
                    <svg viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L11 2M11 2H5M11 2V8" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>
            <div class="search-overlay__footer">
                <kbd>Esc</kbd><span>to close</span>
                <span style="margin-left:8px"><kbd>↵</kbd><span style="margin-left:8px">to search</span></span>
            </div>
        </div>
    `;
    document.documentElement.appendChild(overlay);

    const input = overlay.querySelector('.search-overlay__input');
    const closeBtn = overlay.querySelector('.search-overlay__close');
    const searchBtns = document.querySelectorAll('.navbar__search');

    const openSearch = () => {
        overlay.classList.add('search-overlay--open');
        document.body.style.overflow = 'hidden';
        if (lenisInstance) lenisInstance.stop();
        setTimeout(() => input && input.focus(), 80);
    };

    const closeSearch = () => {
        overlay.classList.remove('search-overlay--open');
        document.body.style.overflow = '';
        if (lenisInstance) lenisInstance.start();
    };

    // searchBtns.forEach(btn => btn.addEventListener('click', openSearch));
    closeBtn.addEventListener('click', closeSearch);

    // Click backdrop to close
    overlay.addEventListener('click', e => {
        if (e.target === overlay) closeSearch();
    });

    // Escape key
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && overlay.classList.contains('search-overlay--open')) {
            closeSearch();
        }
    });
})();

// ── Smooth scroll ───────────────────────────────────────────
document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
        const target = document.querySelector(link.getAttribute('href'));
        if (!target) return;
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});

window.odometerOptions = {
    auto: false,
    duration: 1800
};

// ── Lenis smooth scroll ────────────────────────────────────
if (window.Lenis && !prefersReducedMotion) {
    const lenis = new Lenis({
        duration: 1.3,
        easing: function (t) { return Math.min(1, 1.001 - Math.pow(2, -10 * t)); },
        smoothWheel: true,
        wheelMultiplier: 1,
        touchMultiplier: 1.5
    });
    lenisInstance = lenis;

    lenis.on('scroll', () => {
        if (window.ScrollTrigger) {
            ScrollTrigger.update();
        }
    });

    gsap.ticker.add(time => {
        lenis.raf(time * 1000);
    });

    gsap.ticker.lagSmoothing(0);
}

// ── Header hide/reveal on scroll ───────────────────────────
(function () {
    if (!siteHeader) return;

    let lastScrollY = window.scrollY;
    let upwardTravel = 0;
    const hideAfter = 140;
    const downDelta = 10;
    const revealAfterUp = 100;

    const updateHeaderState = currentScrollY => {
        const scrollDiff = currentScrollY - lastScrollY;

        if (currentScrollY <= 40) {
            siteHeader.classList.remove('site-header--hidden');
            upwardTravel = 0;
        } else if (scrollDiff > downDelta && currentScrollY > hideAfter && !navbar.classList.contains('navbar--open')) {
            siteHeader.classList.add('site-header--hidden');
            upwardTravel = 0;
        } else if (scrollDiff < 0) {
            upwardTravel += Math.abs(scrollDiff);

            if (upwardTravel >= revealAfterUp) {
                siteHeader.classList.remove('site-header--hidden');
            }
        } else if (scrollDiff > 0) {
            upwardTravel = 0;
        }

        lastScrollY = currentScrollY;
    };

    if (lenisInstance) {
        lenisInstance.on('scroll', e => {
            updateHeaderState(e.animatedScroll);
        });
        return;
    }

    let ticking = false;

    window.addEventListener('scroll', () => {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(() => {
            updateHeaderState(window.scrollY);
            ticking = false;
        });
    }, { passive: true });
})();

// ── Reveal on scroll (.revealmetop) ────────────────────────
const revealEls = document.querySelectorAll('.revealmetop');

if (revealEls.length) {
    if (window.gsap && window.ScrollTrigger && !prefersReducedMotion) {
        gsap.registerPlugin(ScrollTrigger);

        revealEls.forEach(el => {
            const delay = parseFloat(getComputedStyle(el).getPropertyValue('--reveal-delay')) || 0;

            gsap.set(el, {
                autoAlpha: 0,
                y: 56,
                scale: 0.985,
                filter: 'blur(10px)',
                force3D: true
            });

            gsap.to(el, {
                autoAlpha: 1,
                y: 0,
                scale: 1,
                filter: 'blur(0px)',
                duration: 0.95,
                delay,
                ease: 'power3.out',
                overwrite: 'auto',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 94%',
                    once: true
                },
                onComplete: () => {
                    el.classList.add('is-visible');
                    gsap.set(el, { clearProps: 'transform,filter,opacity,visibility' });
                }
            });
        });
    } else {
        const revealObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0, rootMargin: '0px 0px -6% 0px' });

        // rAF ensures layout is settled before first observe fires
        requestAnimationFrame(() => {
            revealEls.forEach(el => revealObserver.observe(el));
        });
    }
}

// ── Title animation (.title-animation) ─────────────────────
(function () {
    function initTitleAnimation() {
        const titles = document.querySelectorAll('.title-animation');

        if (!titles.length || prefersReducedMotion) return;

        if (!window.gsap || !window.ScrollTrigger || !window.SplitType) {
            console.warn('title-animation: requires GSAP, ScrollTrigger, and SplitType.');
            return;
        }

        gsap.registerPlugin(ScrollTrigger);

        titles.forEach(el => {
            if (el.dataset.titleAnimationReady === 'true') return;

            const split = new SplitType(el, { types: 'words' });
            el.dataset.titleAnimationReady = 'true';

            gsap.fromTo(
                split.words,
                { opacity: 0.12 },
                {
                    opacity: 1,
                    stagger: 0.22,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 78%',
                        end: 'top 42%',
                        scrub: true
                    }
                }
            );
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTitleAnimation);
    } else {
        initTitleAnimation();
    }
})();

// ── Odometer counters (.achievements__odometer) ────────────
(function () {
    const counters = document.querySelectorAll('.achievements__odometer');

    if (!counters.length || !window.Odometer) return;

    const counterInstances = Array.from(counters, counter => {
        const format = counter.dataset.format || 'd';
        const card = counter.closest('.achievements__card');

        return {
            element: counter,
            trigger: card || counter,
            started: false,
            target: Number(counter.dataset.target || 0),
            odometer: new Odometer({
                el: counter,
                value: 0,
                format,
                theme: 'default'
            })
        };
    });

    const startCounter = item => {
        if (item.started) return;
        item.started = true;
        item.odometer.update(item.target);
    };

    if (prefersReducedMotion) {
        counterInstances.forEach(startCounter);
        return;
    }

    if (window.gsap && window.ScrollTrigger) {
        counterInstances.forEach(item => {
            ScrollTrigger.create({
                trigger: item.trigger,
                start: 'top 92%',
                once: true,
                onEnter: () => startCounter(item)
            });
        });
        return;
    }

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const item = counterInstances.find(counter => counter.trigger === entry.target);

            if (!item) return;

            startCounter(item);
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.2 });

    counterInstances.forEach(item => {
        observer.observe(item.trigger);
    });
})();

// ── Services page tabs (.services-page) ────────────────────
(function () {
    const page = document.querySelector('.services-page');
    if (!page) return;

    const navItems = Array.from(page.querySelectorAll('.services-page__nav-item[data-service-target]'));
    const mobileTabs = Array.from(page.querySelectorAll('.services-page__mobile-tab[data-service-target]'));
    const allTriggers = [...navItems, ...mobileTabs];
    const panels = Array.from(page.querySelectorAll('.services-page__content[data-service-panel]'));

    if (!allTriggers.length || !panels.length) return;

    let activeId = (navItems.find(b => b.classList.contains('services-page__nav-item--active')) || navItems[0]).dataset.serviceTarget;
    let isAnimating = false;

    const updateTriggers = targetId => {
        navItems.forEach(btn => {
            const on = btn.dataset.serviceTarget === targetId;
            btn.classList.toggle('services-page__nav-item--active', on);
            btn.setAttribute('aria-pressed', on ? 'true' : 'false');
        });
        mobileTabs.forEach(btn => {
            const on = btn.dataset.serviceTarget === targetId;
            btn.classList.toggle('services-page__mobile-tab--active', on);
            btn.setAttribute('aria-pressed', on ? 'true' : 'false');
        });

        // scroll active mobile tab into view
        const activeTab = mobileTabs.find(b => b.dataset.serviceTarget === targetId);
        if (activeTab) {
            activeTab.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        }
    };

    const switchTo = targetId => {
        if (targetId === activeId || isAnimating) return;

        const outPanel = panels.find(p => p.dataset.servicePanel === activeId);
        const inPanel = panels.find(p => p.dataset.servicePanel === targetId);
        if (!outPanel || !inPanel) return;

        isAnimating = true;
        activeId = targetId;
        updateTriggers(targetId);

        if (!window.gsap || prefersReducedMotion) {
            outPanel.hidden = true;
            inPanel.hidden = false;
            isAnimating = false;
            return;
        }

        gsap.to(outPanel, {
            opacity: 0,
            y: -12,
            duration: 0.2,
            ease: 'power2.in',
            onComplete() {
                outPanel.hidden = true;
                gsap.set(outPanel, { opacity: 1, y: 0 });
                inPanel.hidden = false;

                gsap.fromTo(inPanel,
                    { opacity: 0, y: 20 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.5,
                        ease: 'power3.out',
                        clearProps: 'opacity,transform',
                        onComplete() { isAnimating = false; }
                    }
                );
            }
        });
    };

    allTriggers.forEach(btn => {
        btn.addEventListener('click', () => switchTo(btn.dataset.serviceTarget));
    });

    // Deep-link: our-services.php#service-03 opens that tab on load
    const hash = location.hash.slice(1);
    if (hash && panels.find(p => p.dataset.servicePanel === hash)) {
        switchTo(hash);
        setTimeout(() => page.scrollIntoView({ behavior: 'smooth', block: 'start' }), 80);
    }
})();

// ── News page filters & pagination (.news-page) ────────────
(function () {
    const newsPages = Array.from(document.querySelectorAll('[data-news-page]'));

    if (!newsPages.length) return;

    newsPages.forEach(page => {
        const tabs = Array.from(page.querySelectorAll('[data-news-filter]'));
        const select = page.querySelector('.news-page__select');
        const list = page.querySelector('[data-news-list]');
        const entries = Array.from(page.querySelectorAll('[data-news-entry]'));
        const prevButton = page.querySelector('[data-news-prev]');
        const nextButton = page.querySelector('[data-news-next]');
        const pageList = page.querySelector('[data-news-page-list]');
        const perPage = Infinity;
        let activeCategory = 'all';
        let currentPage = 1;

        if (!list || !entries.length || !pageList) return;

        const getFilteredEntries = () => {
            if (activeCategory === 'all') return entries;

            return entries.filter(entry => {
                const categories = (entry.dataset.newsCategories || '')
                    .split(',')
                    .map(value => value.trim())
                    .filter(Boolean);

                return categories.includes(activeCategory);
            });
        };

        const updateFilterControls = () => {
            tabs.forEach(tab => {
                const isActive = tab.dataset.newsFilter === activeCategory;
                tab.classList.toggle('news-page__tab--active', isActive);
                tab.setAttribute('aria-pressed', isActive ? 'true' : 'false');
            });

            if (select && select.value !== activeCategory) {
                select.value = activeCategory;
            }
        };

        const buildPagination = totalPages => {
            pageList.innerHTML = '';

            for (let pageNumber = 1; pageNumber <= totalPages; pageNumber += 1) {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'news-page__page-button';
                button.textContent = String(pageNumber);
                button.dataset.newsPage = String(pageNumber);

                if (pageNumber === currentPage) {
                    button.classList.add('news-page__page-button--active');
                    button.setAttribute('aria-current', 'page');
                }

                button.addEventListener('click', () => {
                    if (currentPage === pageNumber) return;
                    currentPage = pageNumber;
                    render(true);
                });

                pageList.appendChild(button);
            }

            if (prevButton) prevButton.disabled = currentPage === 1;
            if (nextButton) nextButton.disabled = currentPage === totalPages;
        };

        const animateVisibleEntries = visibleEntries => {
            if (!window.gsap || prefersReducedMotion || !visibleEntries.length) return;

            gsap.fromTo(visibleEntries,
                {
                    autoAlpha: 0,
                    y: 28
                },
                {
                    autoAlpha: 1,
                    y: 0,
                    duration: 0.55,
                    stagger: 0.08,
                    ease: 'power2.out',
                    clearProps: 'opacity,visibility,transform'
                }
            );
        };

        const render = animate => {
            const filteredEntries = getFilteredEntries();
            const visibleEntries = perPage === Infinity
                ? filteredEntries
                : filteredEntries.slice((currentPage - 1) * perPage, currentPage * perPage);

            const totalPages = perPage === Infinity ? 1 : Math.max(1, Math.ceil(filteredEntries.length / perPage));

            if (currentPage > totalPages) {
                currentPage = totalPages;
            }

            entries.forEach(entry => {
                entry.hidden = !visibleEntries.includes(entry);
            });

            updateFilterControls();

            const paginationEl = page.querySelector('[data-news-pagination]');
            if (perPage === Infinity) {
                if (paginationEl) paginationEl.style.display = 'none';
            } else {
                if (paginationEl) paginationEl.style.display = '';
                buildPagination(totalPages);
            }

            if (animate) {
                animateVisibleEntries(visibleEntries);
            }
        };

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const nextCategory = tab.dataset.newsFilter || 'all';
                if (nextCategory === activeCategory) return;

                activeCategory = nextCategory;
                currentPage = 1;
                render(true);
            });
        });

        if (select) {
            select.addEventListener('change', event => {
                activeCategory = event.target.value || 'all';
                currentPage = 1;
                render(true);
            });
        }

        if (prevButton) {
            prevButton.addEventListener('click', () => {
                if (currentPage === 1) return;
                currentPage -= 1;
                render(true);
            });
        }

        if (nextButton) {
            nextButton.addEventListener('click', () => {
                const totalPages = Math.max(1, Math.ceil(getFilteredEntries().length / perPage));
                if (currentPage >= totalPages) return;
                currentPage += 1;
                render(true);
            });
        }

        render(false);
    });
})();

// ── Articles page filters & pagination (.articles-page) ───
(function () {
    const articlesPages = Array.from(document.querySelectorAll('[data-articles-page]'));

    if (!articlesPages.length) return;

    articlesPages.forEach(page => {
        const tabs = Array.from(page.querySelectorAll('[data-article-filter]'));
        const select = page.querySelector('.articles-page__select');
        const list = page.querySelector('[data-articles-list]');
        const entries = Array.from(page.querySelectorAll('[data-article-entry]'));
        const prevButton = page.querySelector('[data-articles-prev]');
        const nextButton = page.querySelector('[data-articles-next]');
        const pageList = page.querySelector('[data-articles-page-list]');
        const perPage = 10;
        let activeCategory = 'all';
        let currentPage = 1;

        if (!list || !entries.length || !pageList) return;

        const getFilteredEntries = () => {
            if (activeCategory === 'all') return entries;

            return entries.filter(entry => {
                const categories = (entry.dataset.articleCategories || '')
                    .split(',')
                    .map(value => value.trim())
                    .filter(Boolean);

                return categories.includes(activeCategory);
            });
        };

        const updateFilterControls = () => {
            tabs.forEach(tab => {
                const isActive = tab.dataset.articleFilter === activeCategory;
                tab.classList.toggle('articles-page__tab--active', isActive);
                tab.setAttribute('aria-pressed', isActive ? 'true' : 'false');
            });

            if (select && select.value !== activeCategory) {
                select.value = activeCategory;
            }
        };

        const buildPagination = totalPages => {
            pageList.innerHTML = '';

            for (let pageNumber = 1; pageNumber <= totalPages; pageNumber += 1) {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'articles-page__page-button';
                button.textContent = String(pageNumber);
                button.dataset.articlesPage = String(pageNumber);

                if (pageNumber === currentPage) {
                    button.classList.add('articles-page__page-button--active');
                    button.setAttribute('aria-current', 'page');
                }

                button.addEventListener('click', () => {
                    if (currentPage === pageNumber) return;
                    currentPage = pageNumber;
                    render(true);
                });

                pageList.appendChild(button);
            }

            if (prevButton) prevButton.disabled = currentPage === 1;
            if (nextButton) nextButton.disabled = currentPage === totalPages;
        };

        const animateVisibleEntries = visibleEntries => {
            if (!window.gsap || prefersReducedMotion || !visibleEntries.length) return;

            gsap.fromTo(visibleEntries,
                { autoAlpha: 0, y: 28 },
                {
                    autoAlpha: 1,
                    y: 0,
                    duration: 0.55,
                    stagger: 0.08,
                    ease: 'power2.out',
                    clearProps: 'opacity,visibility,transform'
                }
            );
        };

        const render = animate => {
            const filteredEntries = getFilteredEntries();
            const totalPages = Math.max(1, Math.ceil(filteredEntries.length / perPage));

            if (currentPage > totalPages) {
                currentPage = totalPages;
            }

            const start = (currentPage - 1) * perPage;
            const visibleEntries = filteredEntries.slice(start, start + perPage);

            entries.forEach(entry => {
                entry.hidden = !visibleEntries.includes(entry);
            });

            updateFilterControls();
            buildPagination(totalPages);

            if (animate) {
                animateVisibleEntries(visibleEntries);
            }
        };

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const nextCategory = tab.dataset.articleFilter || 'all';
                if (nextCategory === activeCategory) return;

                activeCategory = nextCategory;
                currentPage = 1;
                render(true);
            });
        });

        if (select) {
            select.addEventListener('change', event => {
                activeCategory = event.target.value || 'all';
                currentPage = 1;
                render(true);
            });
        }

        if (prevButton) {
            prevButton.addEventListener('click', () => {
                if (currentPage === 1) return;
                currentPage -= 1;
                render(true);
            });
        }

        if (nextButton) {
            nextButton.addEventListener('click', () => {
                const totalPages = Math.max(1, Math.ceil(getFilteredEntries().length / perPage));
                if (currentPage >= totalPages) return;
                currentPage += 1;
                render(true);
            });
        }

        render(false);
    });
})();

// ── Case study modal (.case-study-modal) ──────────────────
(function () {
    const modal = document.querySelector('[data-case-study-modal]');
    const openTriggers = document.querySelectorAll('[data-case-study-open]');
    const closeTriggers = document.querySelectorAll('[data-case-study-close]');

    if (!modal || !openTriggers.length) return;

    const openModal = () => {
        modal.hidden = false;
        document.body.classList.add('modal-open');
    };

    const closeModal = () => {
        modal.hidden = true;
        document.body.classList.remove('modal-open');
    };

    openTriggers.forEach(trigger => {
        trigger.addEventListener('click', event => {
            event.preventDefault();
            openModal();
        });
    });

    closeTriggers.forEach(trigger => {
        trigger.addEventListener('click', closeModal);
    });

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && !modal.hidden) {
            closeModal();
        }
    });
})();

// ── Services cards (.services) ─────────────────────────────
(function () {
    const stack = document.getElementById('servicesStack');
    const pinWrap = document.getElementById('servicesPinWrap');
    const cards = stack ? Array.from(stack.querySelectorAll('[data-service-card]')) : [];

    if (!cards.length || !pinWrap || !window.gsap || !window.ScrollTrigger || prefersReducedMotion) return;

    gsap.registerPlugin(ScrollTrigger);

    // All cards share the same start state — skewed from the right-bottom corner
    gsap.set(cards, {
        transformOrigin: 'left top',
        // skewX: "-20deg",
        // skewY: "-12deg",
        autoAlpha: 0,
        y: "-200",
        force3D: true
    });

    ScrollTrigger.create({
        trigger: stack,
        start: 'top 76%',
        once: true,
        onEnter() {
            // Single GSAP stagger call — no delay juggling, no clearProps snap
            gsap.to(cards, {
                skewX: 0,
                skewY: 0,
                autoAlpha: 1,
                y: 0,
                duration: 1.6,
                stagger: 0.18,
                ease: 'expo.out',
                force3D: true
            });

            // Shim sweep per card, offset by stagger
            cards.forEach((card, index) => {
                const shim = document.getElementById(`servicesShim${index}`);
                if (!shim) return;
                gsap.fromTo(shim,
                    { x: '-150%', opacity: 0.35 },
                    { x: '220%', opacity: 0.65, duration: 1.2, delay: index * 0.18 + 0.12, ease: 'power2.out' }
                );
            });
        }
    });
})();

// ── Services card → our-services.php deep link ──────────────
(function () {
    const cards = document.querySelectorAll('[data-service-card]');
    if (!cards.length) return;

    const map = ['service-01', 'service-02', 'service-03', 'service-04'];

    cards.forEach(card => {
        card.style.cursor = 'pointer';
        card.addEventListener('click', () => {
            const index = parseInt(card.dataset.serviceIndex, 10);
            const target = map[index];
            if (target) location.href = 'our-services.php#' + target;
        });
    });
})();

// ── Ecosystem marquee (.ecosystem) ─────────────────────────
(function () {
    const tracks = Array.from(document.querySelectorAll('[data-ecosystem-track]'));

    if (!tracks.length || !window.gsap || prefersReducedMotion) return;

    const buildMarquee = track => {
        const groups = track.querySelectorAll('.ecosystem__group');
        if (groups.length < 2) return;

        const firstGroup = groups[0];

        gsap.killTweensOf(track);
        gsap.set(track, { x: 0 });

        const distance = firstGroup.offsetWidth;
        if (!distance) return;

        gsap.to(track, {
            x: -distance,
            duration: 24,
            ease: 'none',
            repeat: -1
        });
    };

    const rebuildAll = () => {
        tracks.forEach(buildMarquee);
    };

    rebuildAll();
    window.addEventListener('resize', rebuildAll);
})();

// ── Latest news (.news) ────────────────────────────────────
(function () {
    const items = Array.from(document.querySelectorAll('[data-news-item]'));

    if (!items.length || !window.gsap || prefersReducedMotion) return;

    const triggerPoint = () => window.innerHeight * 0.88;

    items.forEach((item, index) => {
        const media = item.querySelector('.news__media img');
        const itemTop = item.getBoundingClientRect().top;
        const isAlreadyVisible = itemTop <= triggerPoint();

        if (isAlreadyVisible) {
            gsap.set(item, {
                autoAlpha: 1,
                y: 0
            });

            if (media) {
                gsap.set(media, {
                    scale: 1,
                    filter: 'blur(0px)'
                });
            }

            return;
        }

        gsap.fromTo(item,
            {
                autoAlpha: 0,
                y: 56
            },
            {
                autoAlpha: 1,
                y: 0,
                duration: 0.95,
                delay: index * 0.06,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: item,
                    start: 'top 88%',
                    once: true
                }
            }
        );

        if (media) {
            gsap.fromTo(media,
                {
                    scale: 1.12,
                    filter: 'blur(6px)'
                },
                {
                    scale: 1,
                    filter: 'blur(0px)',
                    duration: 1.15,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: item,
                        start: 'top 88%',
                        once: true
                    }
                }
            );
        }
    });
})();

// ── Featured articles (.articles) ──────────────────────────
(function () {
    const cards = Array.from(document.querySelectorAll('[data-article-card]'));

    if (!cards.length || !window.gsap || prefersReducedMotion) return;

    cards.forEach((card, index) => {
        const media = card.querySelector('.articles__media');
        const image = card.querySelector('.articles__media img');

        gsap.fromTo(card,
            {
                autoAlpha: 0,
                y: 48
            },
            {
                autoAlpha: 1,
                y: 0,
                duration: 0.9,
                delay: index * 0.06,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 90%',
                    once: true
                }
            }
        );

        if (media && image) {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: card,
                    start: 'top 90%',
                    once: true
                }
            });

            tl.set(media, {
                autoAlpha: 1,
                clipPath: 'inset(0 100% 0 0 round 16px)'
            });

            tl.fromTo(media,
                {
                    xPercent: -8
                },
                {
                    xPercent: 0,
                    clipPath: 'inset(0 0% 0 0 round 16px)',
                    duration: 1.1,
                    ease: 'power3.out'
                },
                0
            );

            tl.fromTo(image,
                {
                    xPercent: 12,
                    scale: 1.22,
                    filter: 'blur(2px)'
                },
                {
                    xPercent: 0,
                    scale: 1,
                    filter: 'blur(0px)',
                    duration: 1.1,
                    ease: 'power3.out'
                },
                0
            );
        }
    });
})();

// ── Awards (.awards) ───────────────────────────────────────
(function () {
    const card = document.querySelector('.awards__card');

    if (!card || !window.gsap || prefersReducedMotion) return;

    gsap.fromTo(card,
        {
            autoAlpha: 0,
            y: 48
        },
        {
            autoAlpha: 1,
            y: 0,
            duration: 0.95,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 88%',
                once: true
            }
        }
    );
})();

// ── Contact (.contact) ─────────────────────────────────────
(function () {
    const blocks = Array.from(document.querySelectorAll('.contact__info, .contact__form-card, .footer'));

    if (!blocks.length || !window.gsap || prefersReducedMotion) return;

    blocks.forEach((block, index) => {
        gsap.fromTo(block,
            {
                autoAlpha: 0,
                y: 56
            },
            {
                autoAlpha: 1,
                y: 0,
                duration: 0.95,
                delay: index * 0.08,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: block,
                    start: 'top 90%',
                    once: true
                }
            }
        );
    });
})();

// ── Active nav link on scroll and top-sticky navbar ───────────────────────────────
const sections = document.querySelectorAll('main [id]');
const navItems = document.querySelectorAll('.navbar__item');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            navItems.forEach(item => item.classList.remove('navbar__item--active'));
            const active = document.querySelector(`.navbar__item a[href="#${entry.target.id}"]`);
            if (active) active.closest('.navbar__item').classList.add('navbar__item--active');
        }
    });
}, { threshold: 0.4 });

sections.forEach(s => observer.observe(s));

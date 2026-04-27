// ── Hamburger toggle ────────────────────────────────────────
const hamburger = document.querySelector('.navbar__hamburger');
const navbar    = document.querySelector('.navbar');
const siteHeader = document.querySelector('.site-header');
let lenisInstance = null;

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

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

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
    const navItems = document.querySelectorAll('.services-page__nav-item[data-service-target]');
    const panels = document.querySelectorAll('.services-page__content[data-service-panel]');
    const mobileSelect = document.querySelector('.services-page__mobile-select');

    if (!navItems.length || !panels.length) return;

    const setActiveService = targetId => {
        navItems.forEach(item => {
            const isActive = item.dataset.serviceTarget === targetId;
            item.classList.toggle('services-page__nav-item--active', isActive);
            item.setAttribute('aria-pressed', isActive ? 'true' : 'false');
        });

        panels.forEach(panel => {
            const isActive = panel.dataset.servicePanel === targetId;
            panel.hidden = !isActive;
            panel.classList.toggle('services-page__content--active', isActive);
        });

        if (mobileSelect && mobileSelect.value !== targetId) {
            mobileSelect.value = targetId;
        }
    };

    navItems.forEach(item => {
        item.addEventListener('click', () => {
            setActiveService(item.dataset.serviceTarget);
        });
    });

    if (mobileSelect) {
        mobileSelect.addEventListener('change', event => {
            setActiveService(event.target.value);
        });
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
        const perPage = 2;
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
    const cards = stack ? Array.from(stack.querySelectorAll('[data-service-card]')) : [];

    if (!cards.length || !window.gsap || !window.ScrollTrigger || prefersReducedMotion) return;

    gsap.registerPlugin(ScrollTrigger);

    const initialCardOpacity = [1, 0.78, 0.5, 0.24];
    const initialTextOpacity = [1, 0.74, 0.46, 0.18];
    const travelY = [0, 44, 88, 132];

    cards.forEach((card, index) => {
        const indexEl = card.querySelector('.services__index');
        const nameEl = card.querySelector('.services__name');
        const arrowEl = card.querySelector('.services__arrow');
        const shim = document.getElementById(`servicesShim${index}`);

        gsap.set(card, {
            opacity: initialCardOpacity[index],
            y: travelY[index]
        });

        gsap.set([indexEl, nameEl, arrowEl], {
            opacity: initialTextOpacity[index]
        });

        if (shim) {
            gsap.set(shim, {
                x: '-150%',
                opacity: 0.35
            });
        }
    });

    cards.forEach((card, index) => {
        const indexEl = card.querySelector('.services__index');
        const nameEl = card.querySelector('.services__name');
        const arrowEl = card.querySelector('.services__arrow');
        const shim = document.getElementById(`servicesShim${index}`);
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: card,
                start: 'top bottom',
                end: 'top 45%',
                scrub: 0.9
            }
        });

        tl.to(card, {
            opacity: 1,
            y: 0,
            duration: 0.5,
            ease: 'none'
        }, 0);

        tl.to([indexEl, nameEl, arrowEl], {
            opacity: 1,
            duration: 0.42,
            ease: 'none'
        }, 0.02);

        if (shim) {
            tl.to(shim, {
                x: '220%',
                opacity: 0.65,
                duration: 0.34,
                ease: 'none'
            }, 0.04);
        }
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

// ── Active nav link on scroll ───────────────────────────────
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

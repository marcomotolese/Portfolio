import './bootstrap';

import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

if (typeof window !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    window.addEventListener('load', () => {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (!prefersReducedMotion) {
            // Hero intro (testo + preview in due colonne)
            const hero = document.querySelector('.js-hero');
            if (hero) {
                const heroTextItems = hero.querySelectorAll('.js-hero-text > *');

                gsap.fromTo(
                    hero,
                    { opacity: 0, y: 28 },
                    { opacity: 1, y: 0, duration: 0.9, ease: 'power3.out' },
                );

                // Stagger sugli elementi di testo dell'hero
                if (heroTextItems.length) {
                    gsap.fromTo(
                        heroTextItems,
                        { opacity: 0, y: 18 },
                        {
                            opacity: 1,
                            y: 0,
                            duration: 0.8,
                            ease: 'power3.out',
                            stagger: 0.08,
                            delay: 0.1,
                        },
                    );
                }
            }

            // Preview a destra dell'hero (card animate)
            const heroPreview = document.querySelector('.js-hero-preview');
            if (heroPreview) {
                const cards = heroPreview.querySelectorAll('.js-hero-card');

                gsap.fromTo(
                    heroPreview,
                    { opacity: 0, y: 32 },
                    { opacity: 1, y: 0, duration: 0.9, delay: 0.15, ease: 'power3.out' },
                );

                if (cards.length) {
                    gsap.fromTo(
                        cards,
                        { opacity: 0, y: 24 },
                        {
                            opacity: 1,
                            y: 0,
                            duration: 0.7,
                            ease: 'power3.out',
                            stagger: 0.08,
                            delay: 0.2,
                        },
                    );
                }
            }

            // Sections on scroll
            document.querySelectorAll('.js-section').forEach((section) => {
                gsap.fromTo(
                    section,
                    { opacity: 0, y: 28 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        ease: 'power2.out',
                        scrollTrigger: {
                            trigger: section,
                            start: 'top 80%',
                        },
                    },
                );
            });

            // Project cards: reveal on scroll + hover lift
            const projectCards = document.querySelectorAll('.js-project-card');
            if (projectCards.length) {
                gsap.fromTo(
                    projectCards,
                    { opacity: 0, y: 24 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.7,
                        ease: 'power2.out',
                        stagger: 0.06,
                        scrollTrigger: {
                            trigger: '#projects',
                            start: 'top 75%',
                        },
                    },
                );

                projectCards.forEach((card) => {
                    card.addEventListener('mouseenter', () => {
                        gsap.to(card, { y: -6, duration: 0.18, ease: 'power2.out' });
                    });
                    card.addEventListener('mouseleave', () => {
                        gsap.to(card, { y: 0, duration: 0.22, ease: 'power2.out' });
                    });
                });
            }

            // Skills cards: reveal on scroll + micro‑hover
            const skillCards = document.querySelectorAll('.js-skill-card');
            if (skillCards.length) {
                gsap.fromTo(
                    skillCards,
                    { opacity: 0, y: 20 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.7,
                        ease: 'power2.out',
                        stagger: 0.05,
                        scrollTrigger: {
                            trigger: '#skills',
                            start: 'top 80%',
                        },
                    },
                );

                skillCards.forEach((card) => {
                    card.addEventListener('mouseenter', () => {
                        gsap.to(card, { y: -3, duration: 0.18, ease: 'power2.out' });
                    });
                    card.addEventListener('mouseleave', () => {
                        gsap.to(card, { y: 0, duration: 0.22, ease: 'power2.out' });
                    });
                });
            }

            // Skill meters (if presenti in altre sezioni)
            document.querySelectorAll('.skill-meter-fill').forEach((bar) => {
                const value = Number(bar.getAttribute('data-skill') || '0');

                gsap.to(bar, {
                    width: `${value}%`,
                    duration: 1.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: bar,
                        start: 'top 85%',
                        once: true,
                    },
                });
            });
        }

        // Lightbox screenshot progetti (#projects): click immagine → apertura a schermo intero
        const projectLightbox = document.getElementById('project-lightbox');
        const projectLightboxImg = document.getElementById('project-lightbox-img');
        const projectLightboxClose = document.getElementById('project-lightbox-close');

        const openProjectLightbox = (src, alt) => {
            if (!projectLightbox || !projectLightboxImg || !src) return;
            projectLightboxImg.src = src;
            projectLightboxImg.alt = alt || '';
            projectLightbox.classList.remove('hidden', 'pointer-events-none');
            projectLightbox.classList.add('flex');
            projectLightbox.setAttribute('aria-hidden', 'false');
            document.documentElement.style.overflow = 'hidden';
            document.body.style.overflow = 'hidden';
        };

        const closeProjectLightbox = () => {
            if (!projectLightbox || !projectLightboxImg) return;
            projectLightbox.classList.add('hidden', 'pointer-events-none');
            projectLightbox.classList.remove('flex');
            projectLightbox.setAttribute('aria-hidden', 'true');
            projectLightboxImg.removeAttribute('src');
            projectLightboxImg.alt = '';
            document.documentElement.style.removeProperty('overflow');
            document.body.style.removeProperty('overflow');
        };

        document.getElementById('projects')?.addEventListener('click', (e) => {
            const trigger = e.target.closest('[data-project-lightbox]');
            if (!trigger) return;
            e.preventDefault();
            const src = trigger.getAttribute('data-project-lightbox-src');
            const alt = trigger.getAttribute('data-project-lightbox-alt') || '';
            openProjectLightbox(src, alt);
        });

        projectLightboxClose?.addEventListener('click', (e) => {
            e.stopPropagation();
            closeProjectLightbox();
        });
        projectLightbox?.addEventListener('click', (e) => {
            if (e.target === projectLightbox || e.target === projectLightboxImg) {
                closeProjectLightbox();
            }
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && projectLightbox && !projectLightbox.classList.contains('hidden')) {
                closeProjectLightbox();
            }
        });
        window.addEventListener('pageshow', () => {
            if (projectLightbox && !projectLightbox.classList.contains('hidden')) {
                closeProjectLightbox();
            }
        });
    });
}

/**
 * ASHWIN KRISHNA — INTERACTIVE JAVASCRIPT ENGINE
 * Crafted by 15+ Yrs Senior UI/UX Creative Technologist
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. PRELOADER & INTRO PROGRESSION
    initPreloader();

    // 2. CUSTOM MAGNETIC CURSOR
    initCustomCursor();

    // 3. MAGNETIC BUTTON INTERACTION
    initMagneticElements();

    // 4. HERO 3D CARD PARALLAX TILT
    initHeroTilt();

    // 5. LIVE IST CLOCK (KOCHI / THAMMAMAM)
    initLiveClock();

    // 6. SCROLL REVEAL & STATS COUNTER (GSAP + INTERSECTION OBSERVER)
    initScrollAnimations();
    initStatsCounter();

    // 7. RESEARCH CASE STUDY TABS
    initResearchTabs();

    // 8. RESEARCH ABSTRACT MODAL
    initModalSystem();

    // 9. ONE-CLICK EMAIL CLIPBOARD COPY
    initEmailCopy();

    // 10. INTERACTIVE CONTACT FORM
    initContactForm();

    // 11. NAVBAR SCROLL & ACTIVE SECTION HIGHLIGHT
    initNavbarScroll();

    // 12. MOBILE DRAWER NAVIGATION
    initMobileDrawer();
});

/* --------------------------------------------------------------------------
   1. PRELOADER
   -------------------------------------------------------------------------- */
function initPreloader() {
    const preloader = document.getElementById('preloader');
    const loaderBar = document.getElementById('loaderBar');
    const loaderPercent = document.getElementById('loaderPercent');

    if (!preloader || !loaderBar || !loaderPercent) return;

    let progress = 0;
    const interval = setInterval(() => {
        progress += Math.floor(Math.random() * 15) + 8;
        if (progress >= 100) {
            progress = 100;
            clearInterval(interval);
            loaderBar.style.width = '100%';
            loaderPercent.textContent = '100%';

            setTimeout(() => {
                preloader.classList.add('fade-out');
                triggerHeroEntrance();
            }, 300);
        } else {
            loaderBar.style.width = `${progress}%`;
            loaderPercent.textContent = `${progress}%`;
        }
    }, 45);
}

function triggerHeroEntrance() {
    if (typeof gsap !== 'undefined') {
        gsap.from('.hero-headline', {
            opacity: 0,
            y: 40,
            duration: 1,
            ease: 'power3.out'
        });
        gsap.from('.hero-subline', {
            opacity: 0,
            y: 30,
            duration: 1,
            delay: 0.2,
            ease: 'power3.out'
        });
        gsap.from('.hero-chips-grid', {
            opacity: 0,
            y: 20,
            duration: 0.8,
            delay: 0.4,
            ease: 'power3.out'
        });
        gsap.from('.hero-card-wrapper', {
            opacity: 0,
            scale: 0.92,
            duration: 1.2,
            delay: 0.3,
            ease: 'power3.out'
        });
        gsap.from('.hero-stats-strip', {
            opacity: 0,
            y: 30,
            duration: 1,
            delay: 0.6,
            ease: 'power3.out'
        });
    }
}

/* --------------------------------------------------------------------------
   2. CUSTOM CURSOR
   -------------------------------------------------------------------------- */
function initCustomCursor() {
    const cursor = document.getElementById('customCursor');
    const follower = document.getElementById('cursorFollower');

    if (!cursor || !follower) return;

    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    let followerX = mouseX;
    let followerY = mouseY;

    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;

        cursor.style.left = `${mouseX}px`;
        cursor.style.top = `${mouseY}px`;
    });

    function renderFollower() {
        followerX += (mouseX - followerX) * 0.16;
        followerY += (mouseY - followerY) * 0.16;

        follower.style.left = `${followerX}px`;
        follower.style.top = `${followerY}px`;

        requestAnimationFrame(renderFollower);
    }
    requestAnimationFrame(renderFollower);

    // Hover effect for interactive elements
    const hoverTargets = document.querySelectorAll('a, button, input, select, textarea, .glass-card, .tab-btn');
    hoverTargets.forEach((target) => {
        target.addEventListener('mouseenter', () => document.body.classList.add('cursor-hover'));
        target.addEventListener('mouseleave', () => document.body.classList.remove('cursor-hover'));
    });
}

/* --------------------------------------------------------------------------
   3. MAGNETIC BUTTONS
   -------------------------------------------------------------------------- */
function initMagneticElements() {
    const magnets = document.querySelectorAll('.magnetic-target');

    magnets.forEach((magnet) => {
        magnet.addEventListener('mousemove', (e) => {
            const rect = magnet.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            magnet.style.transform = `translate(${x * 0.25}px, ${y * 0.25}px)`;
        });

        magnet.addEventListener('mouseleave', () => {
            magnet.style.transform = 'translate(0px, 0px)';
            magnet.style.transition = 'transform 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
            setTimeout(() => {
                magnet.style.transition = '';
            }, 400);
        });
    });
}

/* --------------------------------------------------------------------------
   4. HERO 3D CARD PARALLAX TILT
   -------------------------------------------------------------------------- */
function initHeroTilt() {
    const cardWrapper = document.getElementById('heroCardWrapper');
    if (!cardWrapper) return;

    cardWrapper.addEventListener('mousemove', (e) => {
        const rect = cardWrapper.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = ((y - centerY) / centerY) * -10;
        const rotateY = ((x - centerX) / centerX) * 10;

        cardWrapper.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
        cardWrapper.style.transition = 'transform 0.1s ease-out';
    });

    cardWrapper.addEventListener('mouseleave', () => {
        cardWrapper.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
        cardWrapper.style.transition = 'transform 0.5s ease-out';
    });
}

/* --------------------------------------------------------------------------
   5. LIVE IST CLOCK
   -------------------------------------------------------------------------- */
function initLiveClock() {
    const clockEl = document.getElementById('liveISTClock');
    if (!clockEl) return;

    function updateTime() {
        const options = {
            timeZone: 'Asia/Kolkata',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        };
        const formatter = new Intl.DateTimeFormat('en-IN', options);
        clockEl.textContent = `${formatter.format(new Date())} IST`;
    }

    updateTime();
    setInterval(updateTime, 1000);
}

/* --------------------------------------------------------------------------
   6. SCROLL REVEALS & STATS COUNTER
   -------------------------------------------------------------------------- */
function initScrollAnimations() {
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Animate Bento Cards
        gsap.utils.toArray('.bento-card').forEach((card) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                },
                opacity: 0,
                y: 40,
                duration: 0.8,
                ease: 'power3.out'
            });
        });

        // Animate Project Showcase
        gsap.from('.project-showcase-box', {
            scrollTrigger: {
                trigger: '.project-showcase-box',
                start: 'top 80%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            y: 50,
            duration: 1,
            ease: 'power3.out'
        });

        // Animate Academics & Skills
        gsap.from('.college-profile-card', {
            scrollTrigger: {
                trigger: '.college-profile-card',
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            x: -40,
            duration: 0.9,
            ease: 'power3.out'
        });

        gsap.from('.skills-matrix-card', {
            scrollTrigger: {
                trigger: '.skills-matrix-card',
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            x: 40,
            duration: 0.9,
            ease: 'power3.out'
        });

        // Animate Cinema Section
        gsap.from('.cinema-featured-card', {
            scrollTrigger: {
                trigger: '.cinema-featured-card',
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            y: 40,
            duration: 0.9,
            ease: 'power3.out'
        });

        gsap.from('.film-aspect-card', {
            scrollTrigger: {
                trigger: '.cinema-cards-col',
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            y: 30,
            stagger: 0.2,
            duration: 0.8,
            ease: 'power3.out'
        });
    }
}

function initStatsCounter() {
    const statElements = document.querySelectorAll('.stat-number');
    if (!statElements.length) return;

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.getAttribute('data-target'), 10);
                const prefix = el.getAttribute('data-prefix') || '';
                const suffix = el.getAttribute('data-suffix') || '';
                let current = 0;
                const increment = Math.ceil(target / 40);
                const duration = 1200;
                const stepTime = Math.floor(duration / (target / increment));

                const counter = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(counter);
                    }
                    el.textContent = `${prefix}${current}${suffix}`;
                }, stepTime);

                obs.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    statElements.forEach((el) => observer.observe(el));
}

/* --------------------------------------------------------------------------
   7. RESEARCH TABS SYSTEM
   -------------------------------------------------------------------------- */
function initResearchTabs() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');

    tabButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
            const targetTab = btn.getAttribute('data-tab');

            // Update button states
            tabButtons.forEach((b) => {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('active');
            btn.setAttribute('aria-selected', 'true');

            // Update tab panes
            tabPanes.forEach((pane) => {
                pane.classList.remove('active');
                if (pane.id === `tab-${targetTab}`) {
                    pane.classList.add('active');
                }
            });
        });
    });
}

/* --------------------------------------------------------------------------
   8. MODAL SYSTEM
   -------------------------------------------------------------------------- */
function initModalSystem() {
    const openBtn = document.getElementById('openProjectModal');
    const modalBackdrop = document.getElementById('projectModalBackdrop');
    const closeBtn = document.getElementById('modalCloseBtn');
    const dismissBtn = document.getElementById('modalDismissBtn');
    const contactTrigger = document.getElementById('modalContactTrigger');

    if (!modalBackdrop) return;

    function openModal() {
        modalBackdrop.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modalBackdrop.classList.remove('open');
        document.body.style.overflow = '';
    }

    if (openBtn) openBtn.addEventListener('click', openModal);
    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (dismissBtn) dismissBtn.addEventListener('click', closeModal);

    if (contactTrigger) {
        contactTrigger.addEventListener('click', () => {
            closeModal();
        });
    }

    modalBackdrop.addEventListener('click', (e) => {
        if (e.target === modalBackdrop) {
            closeModal();
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modalBackdrop.classList.contains('open')) {
            closeModal();
        }
    });
}

/* --------------------------------------------------------------------------
   9. EMAIL COPY TO CLIPBOARD
   -------------------------------------------------------------------------- */
function initEmailCopy() {
    const copyBtn = document.getElementById('copyEmailBtn');
    const emailAddress = document.getElementById('emailAddress');
    const toast = document.getElementById('toastNotification');
    const toastMsg = document.getElementById('toastMsg');
    const copyBtnText = document.getElementById('copyBtnText');

    if (!copyBtn || !emailAddress) return;

    copyBtn.addEventListener('click', () => {
        const text = emailAddress.textContent.trim();
        navigator.clipboard.writeText(text).then(() => {
            copyBtnText.textContent = 'Copied!';
            showToast('Email address copied to clipboard!');

            setTimeout(() => {
                copyBtnText.textContent = 'Copy';
            }, 2500);
        }).catch(() => {
            showToast('Press Ctrl+C to copy email.');
        });
    });

    function showToast(message) {
        if (!toast || !toastMsg) return;
        toastMsg.textContent = message;
        toast.classList.add('show');
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }
}

/* --------------------------------------------------------------------------
   10. INTERACTIVE CONTACT FORM
   -------------------------------------------------------------------------- */
function initContactForm() {
    const form = document.getElementById('contactForm');
    const feedback = document.getElementById('formFeedback');
    const submitBtn = document.getElementById('submitFormBtn');

    if (!form || !feedback || !submitBtn) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = document.getElementById('senderName').value.trim();
        const email = document.getElementById('senderEmail').value.trim();
        const subject = document.getElementById('inquirySubject').value;
        const message = document.getElementById('senderMessage').value.trim();

        if (!name || !email || !subject || !message) {
            feedback.textContent = 'Please fill out all required fields.';
            feedback.className = 'form-feedback error';
            return;
        }

        // Simulate sending state
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span>Sending Message...</span> <i class="fa-solid fa-spinner fa-spin"></i>';
        feedback.textContent = '';

        setTimeout(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span>Send Message</span> <i class="fa-regular fa-paper-plane"></i>';
            feedback.textContent = `Thank you, ${name}! Your inquiry regarding "${subject}" has been received. Ashwin will reply shortly.`;
            feedback.className = 'form-feedback success';
            form.reset();
        }, 1200);
    });
}

/* --------------------------------------------------------------------------
   11. NAVBAR SCROLL & ACTIVE HIGHLIGHT
   -------------------------------------------------------------------------- */
function initNavbarScroll() {
    const header = document.getElementById('siteHeader');
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            header?.classList.add('scrolled');
        } else {
            header?.classList.remove('scrolled');
        }

        // Active link tracking
        let currentSectionId = '';
        sections.forEach((sec) => {
            const sectionTop = sec.offsetTop - 120;
            const sectionHeight = sec.offsetHeight;
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSectionId = sec.getAttribute('id');
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSectionId}`) {
                link.classList.add('active');
            }
        });
    });
}

/* --------------------------------------------------------------------------
   12. MOBILE DRAWER NAVIGATION
   -------------------------------------------------------------------------- */
function initMobileDrawer() {
    const toggleBtn = document.getElementById('mobileMenuToggle');
    const drawer = document.getElementById('mobileDrawer');
    const closeBtn = document.getElementById('drawerClose');
    const drawerLinks = document.querySelectorAll('.drawer-nav-link');

    if (!drawer || !toggleBtn) return;

    function openDrawer() {
        drawer.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        drawer.classList.remove('open');
        document.body.style.overflow = '';
    }

    toggleBtn.addEventListener('click', openDrawer);
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);

    drawerLinks.forEach((link) => {
        link.addEventListener('click', closeDrawer);
    });
}

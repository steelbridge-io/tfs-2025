AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

/*** Content Slide-in Panel System for Destination V3 ***/

document.addEventListener('DOMContentLoaded', function() {
    // Get all destination buttons in any destination feature containers
    const destinationButtons = document.querySelectorAll('.btn.destination[data-target]');
    // Get all close buttons
    const closeButtons = document.querySelectorAll('.close-overlay');

    // Function to detect if device is mobile
    function isMobileDevice() {
        return window.innerWidth <= 768 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    // Function to create backdrop
    function createBackdrop() {
        let backdrop = document.querySelector('.slide-backdrop');
        if (!backdrop) {
            backdrop = document.createElement('div');
            backdrop.className = 'slide-backdrop';
            document.body.appendChild(backdrop);

            // Close panel when clicking backdrop
            backdrop.addEventListener('click', function() {
                hideSlidePanel();
            });
        }
        return backdrop;
    }

    // Function to show slide-in panel (desktop)
    function showSlidePanel(targetId, button) {
        // Hide all slide panels first
        document.querySelectorAll('.readmore-info').forEach(panel => {
            panel.classList.remove('visible');
        });

        // Hide backdrop
        const backdrop = createBackdrop();
        backdrop.classList.remove('visible');

        // Find the target panel by ID
        const targetPanel = document.getElementById(targetId);
        if (targetPanel) {
            // Show backdrop
            setTimeout(() => {
                backdrop.classList.add('visible');
            }, 50);

            // Show the panel with a slight delay for smooth animation
            setTimeout(() => {
                targetPanel.classList.add('visible');
            }, 100);
        }
    }

    // Function to hide slide-in panel (desktop)
    function hideSlidePanel(panel) {
        const backdrop = document.querySelector('.slide-backdrop');

        if (!panel) {
            // Hide all panels
            document.querySelectorAll('.readmore-info').forEach(p => {
                p.classList.remove('visible');
            });
        } else {
            // Hide specific panel
            panel.classList.remove('visible');
        }

        // Hide backdrop
        if (backdrop) {
            backdrop.classList.remove('visible');
        }

        // Remove active states
        destinationButtons.forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.overlay-header').forEach(header => {
            header.classList.remove('active-header');
        });
    }

    // Function to create and show modal for mobile
    function showModal(content, title) {
        // Create modal HTML
        const modalHTML = `
            <div class="modal fade content-modal" tabindex="-1" aria-labelledby="contentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contentModalLabel">${title}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="travel">${content}</div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Remove any existing content modal
        const existingModal = document.querySelector('.content-modal');
        if (existingModal) {
            existingModal.remove();
        }

        // Add modal to DOM
        document.body.insertAdjacentHTML('beforeend', modalHTML);

        // Show the modal
        const modal = document.querySelector('.content-modal');
        const bsModal = new bootstrap.Modal(modal);
        bsModal.show();

        // Clean up modal after it's hidden
        modal.addEventListener('hidden.bs.modal', function() {
            modal.remove();
        });
    }

    // Add click event to destination buttons
    destinationButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default behavior

            const targetId = this.getAttribute('data-target');
            const buttonText = this.textContent.trim();

            if (isMobileDevice()) {
                // Mobile: Show modal instead of slide-in panel
                const targetPanel = document.getElementById(targetId);
                if (targetPanel) {
                    const content = targetPanel.querySelector('.overlay-content').innerHTML;
                    const title = targetPanel.querySelector('.overlay-header h3').textContent || 'More Details';
                    showModal(content, title);
                }
            } else {
                // Desktop: Show slide-in panel
                showSlidePanel(targetId, this);

                // Add active class to clicked button
                destinationButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Add class to panel header when shown
                const targetPanel = document.getElementById(targetId);
                if (targetPanel) {
                    const headerElement = targetPanel.querySelector('.overlay-header');
                    if (headerElement) {
                        // Remove active-header from all headers first
                        document.querySelectorAll('.overlay-header').forEach(header => {
                            header.classList.remove('active-header');
                        });
                        // Add to current header
                        headerElement.classList.add('active-header');
                    }
                }
            }
        });
    });

    // Add click event to close buttons (desktop only)
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (!isMobileDevice()) {
                const panel = this.closest('.readmore-info');
                hideSlidePanel(panel);
            }
        });
    });

    // Add keyboard support (ESC to close) - desktop only
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !isMobileDevice()) {
            hideSlidePanel();
        }
    });

    // Handle window resize to switch between mobile/desktop behavior
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Hide all panels when switching between mobile/desktop
            hideSlidePanel();

            // Remove any existing modals
            const existingModal = document.querySelector('.content-modal');
            if (existingModal) {
                existingModal.remove();
            }
        }, 250);
    });

    // Additional initialization for existing CTA functionality (if needed)
    const expandBtn = document.getElementById('expandCTA');
    const closeBtn = document.getElementById('closeCTA');
    const ctaTrigger = document.getElementById('cta-trigger');
    const formContainer = document.getElementById('cta-form-container');
    const triggerArea = document.querySelector('.cta-trigger-area');

    // Expand functionality (if CTA elements exist)
    if (expandBtn && formContainer) {
        expandBtn.addEventListener('click', function(e) {
            e.preventDefault();

            // Add animation classes
            triggerArea.classList.add('collapsed');
            formContainer.classList.add('expanded');
            expandBtn.classList.add('rotated');

            // Smooth scroll to form after animation
            setTimeout(() => {
                formContainer.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }, 300);
        });
    }

    // Close functionality (if CTA elements exist)
    if (closeBtn && formContainer) {
        closeBtn.addEventListener('click', function(e) {
            e.preventDefault();

            // Remove animation classes
            triggerArea.classList.remove('collapsed');
            formContainer.classList.remove('expanded');
            expandBtn.classList.remove('rotated');

            // Smooth scroll back to trigger
            setTimeout(() => {
                ctaTrigger.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }, 300);
        });
    }

    // Optional: Close CTA on outside click
    if (formContainer && expandBtn) {
        document.addEventListener('click', function(e) {
            if (formContainer.classList.contains('expanded') &&
                !formContainer.contains(e.target) &&
                !expandBtn.contains(e.target)) {
                if (closeBtn) closeBtn.click();
            }
        });

        // Optional: Close CTA on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && formContainer.classList.contains('expanded')) {
                if (closeBtn) closeBtn.click();
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");

    const handleScrollStages = () => {
        const scrollY = window.scrollY;

        // Remove all stage classes first
        navbar.classList.remove('scroll-stage-1', 'scroll-stage-2', 'scroll-stage-3', 'scrolled');

        if (scrollY > 10 && scrollY <= 25) {
            navbar.classList.add('scroll-stage-1');
        } else if (scrollY > 25 && scrollY <= 40) {
            navbar.classList.add('scroll-stage-2');
        } else if (scrollY > 40 && scrollY <= 50) {
            navbar.classList.add('scroll-stage-3');
        } else if (scrollY > 50) {
            navbar.classList.add('scrolled');
        }
    };

    // Use requestAnimationFrame for smooth animation
    let isScrolling = false;
    window.addEventListener("scroll", function() {
        if (!isScrolling) {
            window.requestAnimationFrame(function() {
                handleScrollStages();
                isScrolling = false;
            });
            isScrolling = true;
        }
    });

    // Run on page load
    handleScrollStages();
});

/** Dynamic Hero Overlay Positioning - UPDATED TO FIX STUCK POSITIONING */
document.addEventListener("DOMContentLoaded", function () {
    // CACHE INITIAL POSITION: Store the correct position when logo is in natural state
    let initialPosition = null;
    let isCalculatingInitial = false;
    let pendingRaf = null;
    const raf = (fn) => {
        if (pendingRaf) cancelAnimationFrame(pendingRaf);
        pendingRaf = requestAnimationFrame(() => {
            pendingRaf = null;
            fn();
        });
    };

    // Helper: wait for images to be loaded (already-complete counts too)
    function waitForImagesToLoad(images) {
        const list = Array.from(images || []);
        const unloaded = list.filter(img => !(img.complete && img.naturalWidth > 0));
        if (unloaded.length === 0) return Promise.resolve();

        return new Promise(resolve => {
            let remaining = unloaded.length;
            const done = () => {
                remaining -= 1;
                if (remaining <= 0) resolve();
            };
            unloaded.forEach(img => {
                img.addEventListener('load', done, { once: true });
                img.addEventListener('error', done, { once: true });
            });
            // Safety timeout in case an image never fires events
            setTimeout(resolve, 1500);
        });
    }

    // CALCULATE INITIAL POSITION: Ensures we get the correct baseline position

    async function calculateInitialPosition() {
        if (isCalculatingInitial) return null;
        isCalculatingInitial = true;

        const belowNavLogo = document.querySelector('#below-nav-logo');
        const heroOverlay = document.querySelector('.hero-overlay');
        if (!belowNavLogo || !heroOverlay) {
            isCalculatingInitial = false;
            return;
        }

        // Ensure logo images are loaded before measuring
        const logoImgs = belowNavLogo.querySelectorAll('img');
        await waitForImagesToLoad(logoImgs);

        // Ensure hero media is ready enough to be laid out
        const heroMedia = document.querySelector('.travel-template-hero .hero-image img, .travel-template-hero .hero-image video');
        if (heroMedia && heroMedia.tagName === 'IMG') {
            await waitForImagesToLoad([heroMedia]);
        }

        // NOTE: Do not force scroll to top; respect current position
        // window.scrollTo(0, 0); // removed

        // Wait a moment for any CSS layout/paint to settle
        await new Promise(r => setTimeout(r, 50));

        const logoRect = belowNavLogo.getBoundingClientRect();
        const logoStyle = window.getComputedStyle(belowNavLogo);
        const isLogoVisible = logoStyle.display !== 'none' &&
            logoStyle.visibility !== 'hidden' &&
            logoStyle.opacity !== '0' &&
            logoRect.height > 0;

        if (isLogoVisible) {
            const logoBottom = logoRect.bottom;
            const navbar = document.querySelector('.navbar');
            const navbarHeight = navbar ? navbar.offsetHeight : 80;
            const minSpacing = Math.max(navbarHeight * 0.3, 20);
            const heroTop = logoBottom + minSpacing;
            const viewportHeight = window.innerHeight;
            const topPercentage = (heroTop / viewportHeight) * 100;

            initialPosition = Math.min(topPercentage, 85);
        }

        isCalculatingInitial = false;
    }

    // MAIN POSITIONING FUNCTION: Enhanced to use cached initial position
    function adjustHeroOverlayPosition() {
        const belowNavLogo = document.querySelector('#below-nav-logo');
        const heroOverlay = document.querySelector('.hero-overlay');

        if (!belowNavLogo || !heroOverlay) return;

        const currentScrollY = window.scrollY;

        // Clear all existing positioning first
        heroOverlay.classList.remove('top-50', 'top-lg-50-mw', 'top-lg-60', 'translate-middle', 'translate-middle-x', 'start-50');
        heroOverlay.style.top = '';

        // Use cached initial when near top and available
        if (currentScrollY <= 50 && initialPosition !== null) {
            heroOverlay.style.top = initialPosition + '%';
            heroOverlay.classList.add('start-50', 'translate-middle-x');
            return;
        }

        const logoRect = belowNavLogo.getBoundingClientRect();
        const logoStyle = window.getComputedStyle(belowNavLogo);
        const isLogoVisible = logoStyle.display !== 'none' &&
            logoStyle.visibility !== 'hidden' &&
            logoStyle.opacity !== '0' &&
            logoRect.height > 0;

        if (!isLogoVisible) {
            const navbar = document.querySelector('.navbar');
            const navbarHeight = navbar ? navbar.offsetHeight : 80;
            const fallbackTop = navbarHeight + 20;
            const viewportHeight = window.innerHeight;
            const topPercentage = (fallbackTop / viewportHeight) * 100;
            const finalPosition = Math.min(topPercentage, 85);

            heroOverlay.style.top = finalPosition + '%';
            heroOverlay.classList.add('start-50', 'translate-middle-x');
            return;
        }

        const logoBottom = logoRect.bottom;
        const navbar = document.querySelector('.navbar');
        const navbarHeight = navbar ? navbar.offsetHeight : 80;
        const minSpacing = Math.max(navbarHeight * 0.3, 20);
        const heroTop = logoBottom + minSpacing;
        const viewportHeight = window.innerHeight;
        const topPercentage = (heroTop / viewportHeight) * 100;
        const finalPosition = Math.min(topPercentage, 85);

        heroOverlay.style.top = finalPosition + '%';
        heroOverlay.classList.add('start-50', 'translate-middle-x');
    }

    // INITIAL POSITION CALCULATION: Run when page loads and after images are ready
    window.addEventListener('load', function() {
        // After full load, ensure logo/hero are measured accurately
        calculateInitialPosition().then(() => raf(adjustHeroOverlayPosition));
    });

    // Also try once more shortly after DOM ready
    setTimeout(() => {
        calculateInitialPosition().then(() => raf(adjustHeroOverlayPosition));
    }, 800);

    // ENHANCED SCROLL HANDLER
    let scrollTimeout;
    let isScrolling = false;

    function handleScroll() {
        if (!isScrolling) {
            window.requestAnimationFrame(function() {
                clearTimeout(scrollTimeout);
                // Immediate adjustment
                adjustHeroOverlayPosition();
                // Follow-up adjustment after transitions
                scrollTimeout = setTimeout(adjustHeroOverlayPosition, 200);
                isScrolling = false;
            });
            isScrolling = true;
        }
    }

    window.addEventListener('scroll', handleScroll, { passive: true });

    // RESIZE HANDLER
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(async () => {
            if (window.scrollY <= 50) {
                await calculateInitialPosition();
            }
            raf(adjustHeroOverlayPosition);
        }, 150);
    });

    // TRANSITION END: when the below-nav logo transitions (opacity/transform), recalc
    const belowNavLogo = document.querySelector('#below-nav-logo');
    if (belowNavLogo) {
        belowNavLogo.addEventListener('transitionend', async (e) => {
            // Only react to properties that change visibility/position context
            if (['opacity', 'transform'].includes(e.propertyName)) {
                if (window.scrollY <= 50) {
                    await calculateInitialPosition();
                }
                raf(adjustHeroOverlayPosition);
            }
        });
    }

    // MUTATION OBSERVER: Watch for logo changes
    if (belowNavLogo && window.MutationObserver) {
        const observer = new MutationObserver(function(mutations) {
            let shouldRecalc = false;
            mutations.forEach(function(mutation) {
                if (mutation.type === 'childList') shouldRecalc = true;
                if (mutation.type === 'attributes' &&
                    (mutation.attributeName === 'src' || mutation.attributeName === 'style' || mutation.attributeName === 'class')) {
                    shouldRecalc = true;
                }
            });
            if (shouldRecalc) {
                setTimeout(async () => {
                    const imgs = belowNavLogo.querySelectorAll('img');
                    await waitForImagesToLoad(imgs);
                    if (window.scrollY <= 50) {
                        await calculateInitialPosition();
                    }
                    raf(adjustHeroOverlayPosition);
                }, 50);
            }
        });

        observer.observe(belowNavLogo, {
            childList: true,
            subtree: true,
            attributes: true,
            attributeFilter: ['src', 'style', 'class']
        });
    }

    // Ensure hero media readiness triggers a recalc too
    const heroImgOrVideo = document.querySelector('.travel-template-hero .hero-image img, .travel-template-hero .hero-image video');
    if (heroImgOrVideo) {
        if (heroImgOrVideo.tagName === 'VIDEO') {
            heroImgOrVideo.addEventListener('loadeddata', () => {
                if (window.scrollY <= 50) {
                    calculateInitialPosition().then(() => raf(adjustHeroOverlayPosition));
                } else {
                    raf(adjustHeroOverlayPosition);
                }
            }, { once: true });
        } else {
            heroImgOrVideo.addEventListener('load', () => {
                if (window.scrollY <= 50) {
                    calculateInitialPosition().then(() => raf(adjustHeroOverlayPosition));
                } else {
                    raf(adjustHeroOverlayPosition);
                }
            }, { once: true });
        }
    }
});


/** Dynamic Hero Overlay Positioning - UPDATED TO FIX STUCK POSITIONING
document.addEventListener("DOMContentLoaded", function () {
    // CACHE INITIAL POSITION: Store the correct position when logo is in natural state
    let initialPosition = null;
    let isCalculatingInitial = false;

    // CALCULATE INITIAL POSITION: Ensures we get the correct baseline position
    function calculateInitialPosition() {
        if (isCalculatingInitial) return null;

        isCalculatingInitial = true;

        // Wait for page to be fully loaded and positioned
        setTimeout(() => {
            const belowNavLogo = document.querySelector('#below-nav-logo');
            const heroOverlay = document.querySelector('.hero-overlay');

            if (!belowNavLogo || !heroOverlay) {
                isCalculatingInitial = false;
                return;
            }

            // Ensure we're at the top and logo is in its natural position
            window.scrollTo(0, 0);

            // Wait a bit more for any CSS transitions to complete
            setTimeout(() => {
                const logoRect = belowNavLogo.getBoundingClientRect();
                const logoStyle = window.getComputedStyle(belowNavLogo);
                const isLogoVisible = logoStyle.display !== 'none' &&
                    logoStyle.visibility !== 'hidden' &&
                    logoStyle.opacity !== '0' &&
                    logoRect.height > 0;

                if (isLogoVisible) {
                    const logoBottom = logoRect.bottom;
                    const navbar = document.querySelector('.navbar');
                    const navbarHeight = navbar ? navbar.offsetHeight : 80;
                    const minSpacing = Math.max(navbarHeight * 0.3, 20);
                    const heroTop = logoBottom + minSpacing;
                    const viewportHeight = window.innerHeight;
                    const topPercentage = (heroTop / viewportHeight) * 100;

                    initialPosition = Math.min(topPercentage, 85);
                    console.log('Initial position calculated:', initialPosition + '%');
                }

                isCalculatingInitial = false;
            }, 500);
        }, 100);
    }

    // MAIN POSITIONING FUNCTION: Enhanced to use cached initial position
    function adjustHeroOverlayPosition() {
        const belowNavLogo = document.querySelector('#below-nav-logo');
        const heroOverlay = document.querySelector('.hero-overlay');

        if (!belowNavLogo || !heroOverlay) {
            return;
        }

        const currentScrollY = window.scrollY;
        console.log('Scroll position:', currentScrollY);

        // Clear all existing positioning first
        heroOverlay.classList.remove('top-50', 'top-lg-50-mw', 'top-lg-60', 'translate-middle', 'translate-middle-x', 'start-50');
        heroOverlay.style.top = '';

        // SCROLL POSITION LOGIC: Use cached initial position when at top
        if (currentScrollY <= 50 && initialPosition !== null) {
            console.log('Using initial position:', initialPosition + '%');
            heroOverlay.style.top = initialPosition + '%';
            heroOverlay.classList.add('start-50', 'translate-middle-x');
            return;
        }

        // For scrolled positions, check logo visibility
        const logoRect = belowNavLogo.getBoundingClientRect();
        const logoStyle = window.getComputedStyle(belowNavLogo);
        const isLogoVisible = logoStyle.display !== 'none' &&
            logoStyle.visibility !== 'hidden' &&
            logoStyle.opacity !== '0' &&
            logoRect.height > 0;

        console.log('Logo visible:', isLogoVisible);

        if (!isLogoVisible) {
            // Logo is hidden, use fallback position
            const navbar = document.querySelector('.navbar');
            const navbarHeight = navbar ? navbar.offsetHeight : 80;
            const fallbackTop = navbarHeight + 20;
            const viewportHeight = window.innerHeight;
            const topPercentage = (fallbackTop / viewportHeight) * 100;
            const finalPosition = Math.min(topPercentage, 85);

            console.log('Using fallback position:', finalPosition + '%');
            heroOverlay.style.top = finalPosition + '%';
            heroOverlay.classList.add('start-50', 'translate-middle-x');
            return;
        }

        // Logo is visible, calculate based on its current position
        const logoBottom = logoRect.bottom;
        const navbar = document.querySelector('.navbar');
        const navbarHeight = navbar ? navbar.offsetHeight : 80;
        const minSpacing = Math.max(navbarHeight * 0.3, 20);
        const heroTop = logoBottom + minSpacing;
        const viewportHeight = window.innerHeight;
        const topPercentage = (heroTop / viewportHeight) * 100;
        const finalPosition = Math.min(topPercentage, 85);

        console.log('Using calculated position:', finalPosition + '%');
        heroOverlay.style.top = finalPosition + '%';
        heroOverlay.classList.add('start-50', 'translate-middle-x');
    }

    // INITIAL POSITION CALCULATION: Run when page loads
    window.addEventListener('load', function() {
        setTimeout(calculateInitialPosition, 500);
    });

    // Also try to calculate it immediately
    setTimeout(calculateInitialPosition, 1000);

    // ENHANCED SCROLL HANDLER: Improved to handle scroll direction and transitions
    let scrollTimeout;
    let isScrolling = false;

    function handleScroll() {
        if (!isScrolling) {
            window.requestAnimationFrame(function() {
                const currentScrollY = window.scrollY;

                // Clear any pending adjustments
                clearTimeout(scrollTimeout);

                // Immediate adjustment for major scroll changes
                if (Math.abs(currentScrollY - (window.lastScrollY || 0)) > 30) {
                    adjustHeroOverlayPosition();
                }

                // Delayed adjustment to catch CSS transition completions
                scrollTimeout = setTimeout(adjustHeroOverlayPosition, 300);

                window.lastScrollY = currentScrollY;
                isScrolling = false;
            });
            isScrolling = true;
        }
    }

    window.addEventListener('scroll', handleScroll, { passive: true });

    // ENHANCED RESIZE HANDLER: Recalculate initial position on resize
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            // Recalculate initial position on resize
            if (window.scrollY <= 50) {
                calculateInitialPosition();
            }
            adjustHeroOverlayPosition();
        }, 300);
    });

    // TRANSITION MONITORING: Force recalculation during CSS transitions
    let transitionCheckCount = 0;
    const transitionInterval = setInterval(function() {
        if (window.scrollY <= 50 && initialPosition !== null) {
            adjustHeroOverlayPosition();
        }

        transitionCheckCount++;
        if (transitionCheckCount >= 10) { // 10 * 1000ms = 10 seconds
            clearInterval(transitionInterval);
        }
    }, 1000);

    // MUTATION OBSERVER: Watch for logo changes (keep existing functionality)
    const belowNavLogo = document.querySelector('#below-nav-logo');
    if (belowNavLogo && window.MutationObserver) {
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'childList' ||
                    (mutation.type === 'attributes' &&
                        (mutation.attributeName === 'src' || mutation.attributeName === 'style'))) {
                    setTimeout(() => adjustHeroOverlayPosition(), 100);
                }
            });
        });

        observer.observe(belowNavLogo, {
            childList: true,
            subtree: true,
            attributes: true,
            attributeFilter: ['src', 'style']
        });
    }
}); *****/

/** /End Dynamic Overlay Positioning */
    document.addEventListener('DOMContentLoaded', function () {
    /**
     * Represents the HTML element with the ID 'tabbed-destination-content'.
     * Typically used to interact with a specific section of the web page,
     * often for dynamic updates or event handling.
     *
     * @type {HTMLElement | null}
     */
    const section = document.getElementById('tabbed-destination-content');
    const tabs = document.getElementById('destinationTabs');
    const nav = document.getElementById('site-navigation');
    if (!section || !tabs || !nav) return;

    const getAdminBarHeight = () => {
    const bar = document.getElementById('wpadminbar');
    return bar ? bar.offsetHeight : 0;
};

    // Ensure correct initial state
    nav.classList.remove('nav-hidden-by-tabs');
    tabs.classList.remove('is-pinned');

    // Create a bottom sentinel to detect when we leave the tabbed section
    const bottomSentinel = document.createElement('div');
    bottomSentinel.setAttribute('aria-hidden', 'true');
    bottomSentinel.style.height = '1px';
    section.appendChild(bottomSentinel);

    const updateState = () => {
    const threshold = getAdminBarHeight();
    const topRect = section.getBoundingClientRect();
    const bottomRect = bottomSentinel.getBoundingClientRect();

    const atOrPastTop = topRect.top <= threshold;
    const passedBottom = bottomRect.top <= threshold;

    if (atOrPastTop && !passedBottom) {
    // Inside the tabbed section: tabs pinned, hide nav
    nav.classList.add('nav-hidden-by-tabs');
    tabs.classList.add('is-pinned');
} else {
    // Above or below the tabbed section: show nav, unpin tabs
    nav.classList.remove('nav-hidden-by-tabs');
    tabs.classList.remove('is-pinned');
}
};

    window.addEventListener('scroll', updateState, { passive: true });
    window.addEventListener('resize', updateState, { passive: true });
    window.addEventListener('orientationchange', updateState);

    requestAnimationFrame(updateState);
    setTimeout(updateState, 0);
});


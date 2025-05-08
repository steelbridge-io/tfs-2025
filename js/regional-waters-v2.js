AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

document.addEventListener('DOMContentLoaded', function() {
    // Get the modal element
    const modal = document.querySelector('.guide-modal');

    // Add listener for when modal is about to be shown
    if (modal) {
        modal.addEventListener('show.bs.modal', function(event) {
            // Get the element that triggered the modal
            const trigger = event.relatedTarget;

            // Get the slide index from the trigger element
            const slideIndex = trigger.getAttribute('data-bs-slide-to');

            // After modal is fully shown, move carousel to the correct slide
            modal.addEventListener('shown.bs.modal', function() {
                // Get the carousel instance
                const carousel = document.getElementById('guide-carousel');
                if (carousel) {
                    const carouselInstance = bootstrap.Carousel.getOrCreateInstance(carousel);
                    // Go to the specific slide
                    carouselInstance.to(parseInt(slideIndex));
                }
            }, { once: true }); // Only listen once to avoid memory leaks
        });
    }
});

/*** Testing ***/
document.addEventListener('DOMContentLoaded', function() {
    // Get all info buttons
    const infoButtons = document.querySelectorAll('.info-button');

    // Get all close buttons
    const closeButtons = document.querySelectorAll('.close-overlay');

    // Function to show overlay with animation
    function showOverlay(overlayId) {
        // Hide all overlays first
        document.querySelectorAll('.content-overlay').forEach(overlay => {
            overlay.classList.remove('visible');

            // After animation completes, set display to none
            setTimeout(() => {
                if (!overlay.classList.contains('visible')) {
                    overlay.style.display = 'none';
                }
            }, 300); // Match this timing with the CSS transition duration
        });

        // Show the selected overlay
        const overlay = document.getElementById(overlayId);
        if (overlay) {
            // First set display to flex so the element is in the DOM
            overlay.style.display = 'flex';

            // Force a reflow before adding the visible class to ensure transition works
            overlay.offsetHeight;

            // Add visible class to trigger the transition
            overlay.classList.add('visible');
        }
    }

    // Function to hide overlay with animation
    function hideOverlay(overlay) {
        if (!overlay) {
            document.querySelectorAll('.content-overlay').forEach(ol => {
                ol.classList.remove('visible');

                // After animation completes, set display to none
                setTimeout(() => {
                    if (!ol.classList.contains('visible')) {
                        ol.style.display = 'none';
                    }
                }, 300); // Match this timing with the CSS transition duration
            });
        } else {
            overlay.classList.remove('visible');

            // After animation completes, set display to none
            setTimeout(() => {
                if (!overlay.classList.contains('visible')) {
                    overlay.style.display = 'none';
                }
            }, 300); // Match this timing with the CSS transition duration
        }
    }

    // Add click event to info buttons
    infoButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetOverlay = this.getAttribute('data-target');
            showOverlay(targetOverlay);
        });
    });

    // Add click event to close buttons
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const overlay = this.closest('.content-overlay');
            hideOverlay(overlay);
        });
    });

    // Close overlay when clicking outside content area
    document.querySelectorAll('.content-overlay').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            // If the click is on the overlay itself, not its children
            if (e.target === this) {
                hideOverlay(this);
            }
        });
    });

    // Add keyboard support (ESC to close)
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            hideOverlay();
        }
    });
});


/** New active background color */
// Add this to your existing JavaScript file
document.addEventListener('DOMContentLoaded', function() {
    // Get all info buttons (in addition to any existing code)
    const infoButtons = document.querySelectorAll('.info-button');

    // Add button active state handling
    infoButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            infoButtons.forEach(btn => btn.classList.remove('active'));

            // Add active class to clicked button
            this.classList.add('active');

            // Get target overlay id
            const targetOverlayId = this.getAttribute('data-target');
            const targetOverlay = document.getElementById(targetOverlayId);

            // Add class to overlay header when shown
            if (targetOverlay) {
                const headerElement = targetOverlay.querySelector('.overlay-header');
                if (headerElement) {
                    headerElement.classList.add('active-header');
                }
            }
        });
    });

    // Reset active states when overlay is closed
    const closeButtons = document.querySelectorAll('.close-overlay');
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            infoButtons.forEach(btn => btn.classList.remove('active'));

            // Remove active class from all headers
            document.querySelectorAll('.overlay-header').forEach(header => {
                header.classList.remove('active-header');
            });
        });
    });

    // Also remove active states when clicking outside or pressing ESC
    document.querySelectorAll('.content-overlay').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            if (e.target === this) {
                // Remove active classes
                infoButtons.forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.overlay-header').forEach(header => {
                    header.classList.remove('active-header');
                });
            }
        });
    });

    // Add ESC key handler for active states
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            // Remove active classes
            infoButtons.forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.overlay-header').forEach(header => {
                header.classList.remove('active-header');
            });
        }
    });
});
/*document.addEventListener('DOMContentLoaded', function() {
    // Get all info buttons
    const infoButtons = document.querySelectorAll('.info-button');

    // Get all close buttons
    const closeButtons = document.querySelectorAll('.close-overlay');

    // Function to show overlay
    function showOverlay(overlayId) {
        // Hide all overlays first
        document.querySelectorAll('.content-overlay').forEach(overlay => {
            overlay.style.display = 'none';
        });

        // Show the selected overlay
        const overlay = document.getElementById(overlayId);
        if (overlay) {
            overlay.style.display = 'flex';
        }
    }

    // Function to hide overlay
    function hideOverlay() {
        document.querySelectorAll('.content-overlay').forEach(overlay => {
            overlay.style.display = 'none';
        });
    }

    // Add click event to info buttons
    infoButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetOverlay = this.getAttribute('data-target');
            showOverlay(targetOverlay);
        });
    });

    // Add click event to close buttons
    closeButtons.forEach(button => {
        button.addEventListener('click', hideOverlay);
    });

    // Close overlay when clicking outside content area
    document.querySelectorAll('.content-overlay').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            // If the click is on the overlay itself, not its children
            if (e.target === this) {
                hideOverlay();
            }
        });
    });
}); */
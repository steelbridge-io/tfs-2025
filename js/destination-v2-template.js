AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

/*** Content Overlay/Modal System for Destination V2 ***/
document.addEventListener('DOMContentLoaded', function() {
    // Get all destination buttons in any destination feature containers
    const destinationButtons = document.querySelectorAll('.btn.destination[data-target]');
    // Get all close buttons
    const closeButtons = document.querySelectorAll('.close-overlay');

    // Function to detect if device is mobile
    function isMobileDevice() {
        return window.innerWidth <= 768 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    // Function to create and show modal for mobile
    function showModal(content, title) {
        // Create modal HTML
        const modalHTML = `
            <div class="modal fade content-modal" tabindex="-1" aria-labelledby="contentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contentModalLabel">${title}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="travel">${content}</p>
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

    // Function to show overlay with animation (desktop)
    function showOverlay(targetId, button) {
        // Hide all readmore-info overlays first
        document.querySelectorAll('.readmore-info').forEach(overlay => {
            overlay.classList.remove('visible');

            // After animation completes, set display to none
            setTimeout(() => {
                if (!overlay.classList.contains('visible')) {
                    overlay.style.display = 'none';
                }
            }, 300); // Match this timing with the CSS transition duration
        });

        // Find the target overlay by ID
        const targetOverlay = document.getElementById(targetId);
        if (targetOverlay) {
            // First set display to flex so the element is in the DOM
            targetOverlay.style.display = 'flex';

            // Force a reflow before adding the visible class to ensure transition works
            targetOverlay.offsetHeight;

            // Add visible class to trigger the transition
            targetOverlay.classList.add('visible');

            // Scroll to the image container for better visibility
            const imageContainer = targetOverlay.closest('.feature-image');
            if (imageContainer) {
                imageContainer.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        }
    }

    // Function to hide overlay with animation (desktop)
    function hideOverlay(overlay) {
        if (!overlay) {
            document.querySelectorAll('.readmore-info').forEach(ol => {
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

    // Add click event to destination buttons
    destinationButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default behavior

            const targetId = this.getAttribute('data-target');
            const buttonText = this.textContent.trim();

            if (isMobileDevice()) {
                // Mobile: Show modal
                const targetOverlay = document.getElementById(targetId);
                if (targetOverlay) {
                    const content = targetOverlay.querySelector('.overlay-content').innerHTML;
                    const title = targetOverlay.querySelector('.overlay-header h3').textContent || 'More Details';
                    showModal(content, title);
                }
            } else {
                // Desktop: Show overlay
                showOverlay(targetId, this);
            }
        });
    });

    // Add click event to close buttons (desktop only)
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const overlay = this.closest('.readmore-info');
            hideOverlay(overlay);
        });
    });

    // Close overlay when clicking outside content area (desktop only)
    document.querySelectorAll('.readmore-info').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            // If the click is on the overlay itself, not its children
            if (e.target === this && !isMobileDevice()) {
                hideOverlay(this);
            }
        });
    });

    // Add keyboard support (ESC to close) - desktop only
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !isMobileDevice()) {
            hideOverlay();
        }
    });

    // Handle window resize to switch between mobile/desktop behavior
    window.addEventListener('resize', function() {
        // Hide all overlays when switching between mobile/desktop
        document.querySelectorAll('.readmore-info').forEach(overlay => {
            overlay.classList.remove('visible');
            overlay.style.display = 'none';
        });

        // Remove any existing modals
        const existingModal = document.querySelector('.content-modal');
        if (existingModal) {
            existingModal.remove();
        }
    });
});

/** Button active states for destination v2 **/
document.addEventListener('DOMContentLoaded', function() {
    // Get all destination buttons with data-target
    const destinationButtons = document.querySelectorAll('.btn.destination[data-target]');

    // Function to detect if device is mobile
    function isMobileDevice() {
        return window.innerWidth <= 768 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    // Add button active state handling
    destinationButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default behavior

            // Only handle active states on desktop
            if (!isMobileDevice()) {
                // Remove active class from all buttons
                destinationButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Add class to overlay header when shown
                const targetId = this.getAttribute('data-target');
                const targetOverlay = document.getElementById(targetId);
                if (targetOverlay) {
                    const headerElement = targetOverlay.querySelector('.overlay-header');
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

    // Reset active states when overlay is closed (desktop only)
    const closeButtons = document.querySelectorAll('.close-overlay');
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (!isMobileDevice()) {
                // Remove active class from all buttons
                destinationButtons.forEach(btn => btn.classList.remove('active'));

                // Remove active class from all headers
                document.querySelectorAll('.overlay-header').forEach(header => {
                    header.classList.remove('active-header');
                });
            }
        });
    });

    // Also remove active states when clicking outside or pressing ESC (desktop only)
    document.querySelectorAll('.readmore-info').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            if (e.target === this && !isMobileDevice()) {
                // Remove active classes
                destinationButtons.forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.overlay-header').forEach(header => {
                    header.classList.remove('active-header');
                });
            }
        });
    });

    // Add ESC key handler for active states (desktop only)
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !isMobileDevice()) {
            // Remove active classes
            destinationButtons.forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.overlay-header').forEach(header => {
                header.classList.remove('active-header');
            });
        }
    });
});
AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

document.addEventListener('DOMContentLoaded', function() {
    /**
     * Represents a DOM element with the ID 'imageModal'.
     * This element is typically used as a modal dialog for displaying carousel images.
     * It may include content such as an image, title, or navigation controls,
     * and is often dynamically shown or hidden in response to user interactions.
     */
    const imageModal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalLink = document.getElementById('modalLink');
    const modalLinkAnchor = document.getElementById('modalLinkAnchor');

    // Handle gallery image clicks
        document.querySelectorAll('.gallery-image').forEach(function(img) {
            img.addEventListener('click', function() {
            const imageSrc = this.getAttribute('data-image');
            const imageLink = this.getAttribute('data-link');

            modalImage.src = imageSrc;

            if (imageLink && imageLink.trim() !== '') {
            modalLinkAnchor.href = imageLink;
            modalLink.style.display = 'block';
            } else {
            modalLink.style.display = 'none';
            }
        });
    });
});

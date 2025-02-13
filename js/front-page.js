AOS.init({
    easing: 'ease',
    duration: 1000, // 1 second for animation
});

// Wait for DOM to load
document.addEventListener("DOMContentLoaded", function () {
    // Select the scrolly element
    const scrolly = document.getElementById("scrolly");

    // Delay fade-in and move up after 3 seconds
    setTimeout(() => {
        // Use JavaScript to make the scrolly visible and move it up
        scrolly.style.opacity = "1"; // Fade in
        scrolly.style.transform = "translate(-50%, 0)"; // Move up slightly

        // Add the bounce animation after the fade-in completes
        setTimeout(() => {
            scrolly.classList.add("bouncing");
        }, 1500); // Add bounce after fade-in finishes (1.5s duration)
    }, 3000); // Delay by 3 seconds

    // Add click functionality to the scrolly element
    scrolly.addEventListener("click", function () {
        window.scrollBy({
            top: 500, // Scroll down 500px
            behavior: "smooth", // Smooth scrolling
        });
    });
});
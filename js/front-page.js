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


/** Typining Effect */
const messages = [
    "We are The Fly Shop. Located in Redding California. Shop with us for fly fishing gear, equipment, worldwide travel and the best guude staff on the west coast.",
];

const phoneNumber = "We'll get that fly rod bent proper: 800-669-3474"; // Final phone number to type
const typingSpeed = 70; // Speed for typing each character
const delayBetweenLines = 1000; // Delay before typing the next line
const delayBeforeStart = 1500; // Delay before typing starts after scrolling into view
const delayBeforeDelete = 1500; // Delay before deleting all text after lines are complete
const typingTarget = document.getElementById("typing-area"); // Typing container
const container = typingTarget.parentElement; // Parent container for typing area

let messageIndex = 0; // Tracks which line/message is being typed
let charIndex = 0; // Tracks the character being typed for current line
let isDeleting = false; // Tracks if we are deleting text at the end
let typingStarted = false; // Prevents re-triggering the typing effect

// Dynamically adjust the container's height
function updateContainerHeight() {
    const tempDiv = document.createElement("div");
    tempDiv.style.visibility = "hidden"; // Prevent it from affecting layout
    tempDiv.style.position = "absolute";
    tempDiv.style.whiteSpace = "pre-line"; // Matches typing style
    tempDiv.innerHTML = typingTarget.innerHTML;

    document.body.appendChild(tempDiv);
    const requiredHeight = tempDiv.offsetHeight;
    document.body.removeChild(tempDiv);

    container.style.maxHeight = "none"; // Or set a higher limit like "500px"


    container.style.height = `${requiredHeight}px`; // Update parent height
    container.style.transition = "height 0.3s ease"; // Smooth transition
}

// Typing effect
function typeEffect() {
    if (!isDeleting) {
        // Append characters to the typing target
        let currentMessage = messages[messageIndex];
        typingTarget.innerHTML = messages
            .slice(0, messageIndex)
            .join("<br>") + "<br>" + currentMessage.substring(0, charIndex);

        updateContainerHeight(); // Adjust height for each character typed

        charIndex++;

        // If the entire line is typed, move to the next
        if (charIndex > currentMessage.length) {
            messageIndex++;
            if (messageIndex >= messages.length) {
                setTimeout(() => {
                    isDeleting = true;
                    typeEffect();
                }, delayBeforeDelete);
            } else {
                charIndex = 0; // Reset for next message
                setTimeout(typeEffect, delayBetweenLines);
            }
        } else {
            setTimeout(typeEffect, typingSpeed);
        }
    } else {
        // Deleting all text before typing the phone number
        if (typingTarget.innerHTML.length > 0) {
            typingTarget.innerHTML = typingTarget.innerHTML.slice(0, -1); // Remove one character
            updateContainerHeight(); // Adjust height while deleting
            setTimeout(typeEffect, typingSpeed / 2); // Deletion speed
        } else {
            // Reset character index and type the phone number
            isDeleting = false;
            charIndex = 0;
            setTimeout(() => typePhoneNumber(), delayBetweenLines);
        }
    }
}

// Typing the phone number after all texts are deleted
function typePhoneNumber() {
    let currentText = typingTarget.innerHTML;
    if (charIndex < phoneNumber.length) {
        typingTarget.innerHTML = currentText + phoneNumber[charIndex];
        updateContainerHeight(); // Adjust height for the phone number
        charIndex++;
        setTimeout(typePhoneNumber, typingSpeed);
    }
}

// Intersection Observer to trigger typing effect when visible
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting && !typingStarted) {
                typingStarted = true;
                setTimeout(() => typeEffect(), delayBeforeStart); // Start typing after delay
            }
        });
    },
    {
        threshold: 0.5 // Trigger when 50% of the container is visible
    }
);

// Observe the container
observer.observe(container);
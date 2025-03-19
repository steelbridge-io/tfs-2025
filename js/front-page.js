AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
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
/** Typing Effect */
const messages = [
    "This is a typing effect. Can be used to convey who The Fly Shop is.",
];

const phoneNumber = "This is the last part. Maybe display tel: 800-669-3474"; // Final phone number to type

const typingSpeed = 70; // Speed for typing each character
const delayBetweenLines = 1000; // Delay before typing the next line
const delayBeforeStart = 1500; // Delay before typing starts after scrolling into view
const delayBeforeDelete = 1500; // Delay before deleting all text after lines are complete
const typingTarget = document.getElementById("typing-area"); // Typing container

let messageIndex = 0; // Tracks which line/message is being typed
let charIndex = 0; // Tracks the character being typed for current line
let isDeleting = false; // Tracks if we are deleting text at the end
let typingStarted = false; // Prevents re-triggering the typing effect

// Typing effect
function typeEffect() {
    if (!isDeleting) {
        // Append characters to the typing target
        let currentMessage = messages[messageIndex];
        typingTarget.innerHTML = messages
            /*.slice(0, messageIndex)
            .join("<br>") + "<br>" + currentMessage.substring(0, charIndex);*/
                .slice(0, messageIndex)
                .join("<br>") +
            (messageIndex > 0 ? "<br>" : "") +
            currentMessage.substring(0, charIndex);

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
            setTimeout(typeEffect, typingSpeed / 2); // Deletion speed
        } else {
            // Reset character index and type the phone number
            isDeleting = false;
            charIndex = 0;
            setTimeout(() => typePhoneNumber(), delayBetweenLines);
        }
    }
}

// Typing the phone number after the messages
function typePhoneNumber() {
    let currentText = typingTarget.innerHTML;
    if (charIndex < phoneNumber.length) {
        typingTarget.innerHTML = currentText + phoneNumber[charIndex];
        charIndex++;
        setTimeout(typePhoneNumber, typingSpeed);
    }
}

// Intersection Observer to trigger typing when visible
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
        threshold: 0.5, // Trigger when 50% of the container is visible
    }
);

// Observe the container
observer.observe(typingTarget.parentElement);
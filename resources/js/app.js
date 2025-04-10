document.addEventListener('DOMContentLoaded', () => {
    // Our array of phrases
    const texts = [
        "~/timbogdanov/",
    ];

    // Get the text container
    const typedTextElem = document.getElementById("typed-text");

    // Typewriter state
    let currentTextIndex = 0;
    let currentCharIndex = 0;
    let isDeleting = false;

    // Speeds (in ms)
    const typingSpeed = 150;     // speed per character when typing
    const deletingSpeed = 75;    // speed per character when deleting
    const pauseBetween = 2000;   // pause (ms) after a phrase is fully typed

    function type() {
        const currentText = texts[currentTextIndex];

        if (!isDeleting) {
            // Typing forward
            typedTextElem.textContent = currentText.slice(0, currentCharIndex + 1);
            currentCharIndex++;

            // If we've reached the full string
            if (currentCharIndex === currentText.length) {
                // Pause before deleting
                setTimeout(() => {
                    isDeleting = true;
                }, pauseBetween);
            }
        } else {
            // Deleting backward
            typedTextElem.textContent = currentText.slice(0, currentCharIndex - 1);
            currentCharIndex--;

            // If we've deleted it all
            if (currentCharIndex === 0) {
                isDeleting = false;
                // Move to the next phrase
                currentTextIndex = (currentTextIndex + 1) % texts.length;
            }
        }

        // Schedule the next character
        const speed = isDeleting ? deletingSpeed : typingSpeed;
        setTimeout(type, speed);
    }

    // Start the loop
    type();
});

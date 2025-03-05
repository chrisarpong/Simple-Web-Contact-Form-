document.addEventListener("DOMContentLoaded", function () {
    let contactForm = document.getElementById("contactForm");

    if (contactForm) {
        contactForm.addEventListener("submit", function (event) {
            // You can add validation logic here if needed
        });
    }

    // Initialize Summernote WYSIWYG editor
    let messageField = document.getElementById("message");
    if (messageField) {
        $('#message').summernote({
            height: 200
        });
    }

    // Apply blur effect when scrolling
    window.addEventListener("scroll", function () {
        let scrollPosition = window.scrollY;
        let container = document.querySelector(".container");

        if (container) {
            if (scrollPosition > 50) {
                container.style.backdropFilter = "blur(10px)";
                container.style.webkitBackdropFilter = "blur(10px)"; // For Safari support
                container.style.background = "rgba(255, 255, 255, 0.6)"; // Make background more transparent
            } else {
                container.style.backdropFilter = "blur(0px)";
                container.style.webkitBackdropFilter = "blur(0px)";
                container.style.background = "rgba(255, 255, 255, 0.8)";
            }
        }
    });
});

window.addEventListener("scroll", function () {
    let scrollPosition = window.scrollY;
    let container = document.querySelector(".container");

    if (container) {
        if (scrollPosition > 50) {
            container.style.backdropFilter = "blur(20px)"; /* Increase blur on scroll */
            container.style.webkitBackdropFilter = "blur(20px)";
            container.style.background = "rgba(255, 255, 255, 0.4)"; /* Make background more transparent */
        } else {
            container.style.backdropFilter = "blur(10px)";
            container.style.webkitBackdropFilter = "blur(10px)";
            container.style.background = "rgba(255, 255, 255, 0.5)";
        }
    }
});
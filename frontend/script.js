// Smooth scrolling (for future navbar links)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href"))
            .scrollIntoView({ behavior: "smooth" });
    });
});


// Simple form validation
const form = document.querySelector("form");

form.addEventListener("submit", function(e) {
    const name = document.querySelector('input[name="name"]').value;
    const email = document.querySelector('input[name="email"]').value;

    if (name.trim() === "" || email.trim() === "") {
        alert("Please fill all required fields!");
        e.preventDefault(); // stop form submission
    }
});
const button = document.getElementById("navbar_button");
const mobileButtons = document.getElementById("mobile-buttons");

button.addEventListener("click", () => {
    button.classList.toggle("open");
    mobileButtons.classList.toggle("show");
});

const footerButton = document.getElementById("footer__button");
if (footerButton) {
    footerButton.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
}

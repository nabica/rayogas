const html = document.getElementsByTagName("html")[0];
const navbarButton = document.getElementById("navbar_button");
const navbarMobileButtons = document.getElementById("mobile-buttons");
const buttonMenuAccess = document.getElementById("btnAccessibility");
const buttonMenuAccessMobile = document.getElementById(
    "btnAccessibilityMobile"
);
const buttonsIncreaseText = document.querySelectorAll(".increaseText");
const buttonsDecreaseText = document.querySelectorAll(".decreaseText");
const buttonsContrast = document.querySelectorAll(".contrast-btn");
const buttonsOnlyText = document.querySelectorAll(".only-text-btn");

navbarButton.addEventListener("click", () => {
    navbarButton.classList.toggle("open");
    navbarMobileButtons.classList.toggle("show");
});
buttonMenuAccess.addEventListener("click", (e) => {
    e.preventDefault();
    const menu = document.getElementById("accessibility-menu");
    menu.classList.toggle("show");
});
buttonMenuAccessMobile.addEventListener("click", (e) => {
    e.preventDefault();
    const menu = document.getElementById("accessibility-menu-mobile");
    menu.classList.toggle("show");
});

buttonsIncreaseText.forEach((button) => {
    button.addEventListener("click", () => {
        const sizes = ["small", "medium", "large"];
        const index = sizes.findIndex((size) => size === html.dataset.size);

        if (sizes[index + 1]) {
            html.dataset.size = sizes[index + 1];
            window.localStorage.setItem("size", sizes[index + 1]);
        }
    });
});
buttonsDecreaseText.forEach((button) => {
    button.addEventListener("click", () => {
        const sizes = ["small", "medium", "large"];
        const index = sizes.findIndex((size) => size === html.dataset.size);

        if (sizes[index - 1]) {
            html.dataset.size = sizes[index - 1];
            window.localStorage.setItem("size", sizes[index - 1]);
        }
    });
});
buttonsContrast.forEach((button) => {
    button.addEventListener("click", () => {
        const themes = ["light", "dark"];
        const nextTheme = themes.filter(
            (theme) => theme !== html.dataset.theme
        );
        if (nextTheme.length === 1) {
            html.dataset.theme = nextTheme[0];
            window.localStorage.setItem("theme", nextTheme[0]);
        } else {
            html.dataset.theme = themes[1];
            window.localStorage.setItem("theme", themes[1]);
        }
    });
});
buttonsOnlyText.forEach((button) => {
    button.addEventListener("click", () => {
        const themes = ["light", "text"];
        const nextTheme = themes.filter(
            (theme) => theme !== html.dataset.theme
        );
        if (nextTheme.length === 1) {
            html.dataset.theme = nextTheme[0];
            window.localStorage.setItem("theme", nextTheme[0]);
        } else {
            html.dataset.theme = themes[1];
            window.localStorage.setItem("theme", themes[1]);
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const savedTheme = window.localStorage.getItem("theme");
    const savedSize = window.localStorage.getItem("size");
    const html = document.getElementsByTagName("html")[0];
    console.log(savedSize);
    console.log(savedTheme);
    if (savedTheme) {
        html.dataset.theme = savedTheme;
    }
    if (savedSize) {
        html.dataset.size = savedSize;
    }
});

require("./bootstrap");
require("./components/navbar");
require("./components/footer");
require("./components/form-validation");
require("./components/transparency");
require("./maps");
import "bootstrap/dist/js/bootstrap.bundle.min";

document.addEventListener("DOMContentLoaded", function () {
    const savedTheme = window.localStorage.getItem("theme");
    const savedSize = window.localStorage.getItem("size");
    const html = document.getElementsByTagName("html")[0];
    if (savedTheme) {
        html.dataset.theme = savedTheme;
    }
    if (savedSize) {
        html.dataset.size = savedSize;
    }
});

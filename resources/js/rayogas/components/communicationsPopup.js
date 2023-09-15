import Cookies from "js-cookie";

if (!Cookies.get('communications')) {
    Cookies.set('communications', 'checked')

    const comunnicationsPopup = new bootstrap.Modal(
        document.getElementById("communications-popup"),
        {}
    );
    comunnicationsPopup.show();
}


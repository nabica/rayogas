import { Loader } from "@googlemaps/js-api-loader";
const loader = new Loader({
    apiKey: "AIzaSyC9tzSW2IbvsnJVTn1_3VOz__mrba6e8g4",
    version: "weekly",
});

loader.load().then(() => {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8,
    });
});

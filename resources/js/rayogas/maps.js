import { Loader } from "@googlemaps/js-api-loader";
const loader = new Loader({
    apiKey: "AIzaSyCbgpSh5aVeijK8jZoEVjO1ynkQylmbQvA",
    version: "weekly",
});

loader.load().then(() => {
    const map = document.getElementById("map");
    if (map) {
        const loadedMap = new google.maps.Map(map, {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 8,
        });
    }
});

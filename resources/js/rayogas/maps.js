import { Loader } from "@googlemaps/js-api-loader";
const locations = {
    boyacá: [
        {
            position: { lat: 5.5753333, lng: -73.3317222 },
            title: "Tunja",
            address: "500 mts. adelante del barrio la arboleda",
            phone: "(601)5140101",
        },
        {
            position: { lat: 5.9223114, lng: -73.6069347 },
            title: "Moniquirá",
            address: "Km 1.5 vía Barbosa",
            phone: "(601)5140101",
        },
        {
            position: { lat: 5.7532222, lng: -72.9094722 },
            title: "Sogamoso",
            address: "Calle 54 N° 11d - 189 Zona Insdustrial",
            phone: "(601)5140101",
        },
    ],
    cundinamarca: [
        {
            position: { lat: 4.5905, lng: -74.1880833 },
            title: "Cazucá",
            address: "Cra 2da Nº 48-67",
            phone: "(601)5140101",
        },
        {
            position: { lat: 4.9270568, lng: -73.9522228 },
            title: "Sopó",
            address: "Km 2 vía Briceño",
            phone: "(601)5140101",
        },
    ],

    meta: [
        {
            position: { lat: 4.1620556, lng: -73.6627778 },
            title: "Villavicencio",
            address: "Km 2 vía antigua a Bogotá",
            phone: "(601)5140101",
        },
        {
            position: { lat: 3.5633056, lng: -73.7142222 },
            title: "Granada",
            address: "Km 1.5 vía San Martín",
            phone: "(601)5140101",
        },
    ],
    tolima: [
        {
            position: { lat: 4.2360072, lng: -74.8422766 },
            title: "Flandes",
            address: "Km 4 vía Flandes Espinal",
            phone: "(601)5140101",
        },
    ],
};

const loader = new Loader({
    apiKey: "AIzaSyBsfp7zbM7lbwHhzJF1ZlaErCfROKdno6k",
    version: "weekly",
    
});

loader.load().then(() => {
    const map = document.getElementById("map");
    if (map) {
        const loadedMap = new google.maps.Map(map, {
            center: { lat: 4.6482975, lng: -74.107807 },
            zoom: 7,
        });
        setMapMarkers(loadedMap);
        addListenners(loadedMap);
    }
});

const setMapMarkers = (map) => {
    const values = Object.values(locations);
    values.forEach((state) => {
        state.forEach((city) => {
            new google.maps.Marker({
                map,
                position: city.position,
                title: city.title,
            });
        });
    });
};
const addListenners = (map) => {
    const stateInput = document.getElementById("map-state-control");
    const cityInput = document.getElementById("map-city-control");
    stateInput.addEventListener("change", (e) => {
        const value = e.currentTarget.value;
        addAllItems(value);
        cityInput.disabled = false;
        cityInput.innerHTML = "";
        const location = {
            boyaca: { lat: 5.8554085, lng: -73.306705 },
            cundinamarca: { lat: 4.7836367, lng: -74.5311563 },
            meta: { lat: 3.2692918, lng: -74.1164222 },
            tolima: { lat: 4.0952964, lng: -75.8520973 },
        };
        if (value) {
            map.setCenter(location[value]);
            map.setZoom(9);
            const state = locations[value];
            cityInput.insertAdjacentHTML(
                "beforeend",
                `<option value="">Seleccione la ciudad</option>`
            );
            state.forEach((city) => {
                cityInput.insertAdjacentHTML(
                    "beforeend",
                    `<option value="${city.title}">${city.title}</option>`
                );
            });
        } else {
            map.setCenter({ lat: 4.6482975, lng: -74.107807 });
            map.setZoom(7);
            cityInput.disabled = true;
        }
    });
    cityInput.addEventListener("change", (e) => {
        const value = e.currentTarget.value;
        const state = stateInput.value;
        if (value) {
            const foundedCity = locations[state].find(
                (city) => city.title === value
            );
            addItem(foundedCity, state);
            map.setCenter(foundedCity.position);
            map.setZoom(15);
        } else {
            addAllItems(state);
        }
    });
};

const addItem = (foundedCity, state) => {
    const container = document.getElementById("map__items-container");
    container.innerHTML = "";
    if (foundedCity) {
        const title = !["Granada", "Sogamoso", "Moniquirá"].includes(
            foundedCity.title
        )
            ? `Rayogas Planta ${foundedCity.title}`
            : `Rayogas Depósito ${foundedCity.title}`;
        container.insertAdjacentHTML(
            "beforeend",
            `  <div class="col-6 col-md-12 locations-item">
                    <h4>${title}</h4>
                    <p>${foundedCity.title}, ${
                state.charAt(0).toUpperCase() + state.slice(1)
            }</p>
                    <p>${foundedCity.address}</p>
                    <p><a href="">${foundedCity.phone}</a></p>
                </div>`
        );
    }
};
const addAllItems = (value) => {
    const container = document.getElementById("map__items-container");
    container.innerHTML = "";
    if (value) {
        const state = locations[value];
        state.forEach((city) => {
            const title = !["Granada", "Sogamoso", "Moniquirá"].includes(
                city.title
            )
                ? `Rayogas Planta ${city.title}`
                : `Rayogas Depósito ${city.title}`;
            container.insertAdjacentHTML(
                "beforeend",
                `  <div class="col-6 col-md-12 locations-item">
                        <h4>${title}</h4>
                        <p>${city.title}, ${
                    value.charAt(0).toUpperCase() + value.slice(1)
                }</p>
                        <p>${city.address}</p>
                        <p><a href="">${city.phone}</a></p>
                    </div>`
            );
        });
    }
};

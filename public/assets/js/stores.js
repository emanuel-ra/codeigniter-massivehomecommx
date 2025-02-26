// import L from 'leaflet';
// import 'leaflet/dist/leaflet.css';

let map;

function changeStore(value) {

    const locations = {
        "city-MX-JAL": { lat: 20.659698, lng: -103.349609 },
        "city-MX-NLE": { lat: 25.686614, lng: -100.316113 },
        "city-MX-CMX": { lat: 19.432608, lng: -99.133209 }
    };

    console.log("hey there:", locations[value]);

    if (map) {
        map.setView([locations[value].lat, locations[value].lng], 13);
    } else {
        map = L.map('map').setView([locations[value].lat, locations[value].lng], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
    }

    // L.marker([locations[value].lat, locations[value].lng]).addTo(map)
    //     .bindPopup('Selected Location')
    //     .openPopup();

    switch (value) {
        case "city-MX-JAL":
            L.marker([20.674517210617626, -103.34657240634137]).addTo(map).bindPopup('MegaLuz, Tianlai, Link Bits - Guadalajara Centro').openPopup();
            L.marker([20.675922111064796, -103.33684746961278]).addTo(map).bindPopup('MegaLuz, Tianlai, Link Bits - Dionisio').openPopup();

            L.marker([20.66739169577911, -103.3690149297091]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Mariano Otero').openPopup();
            L.marker([20.667220585378427, -103.36484802166527]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Niños Heroes').openPopup();

            L.marker([20.676086161534435, -103.33850820374298]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Cabañas').openPopup();

            break;
        case "city-MX-NLE":
            L.marker([25.67442044042319, -100.31438093548293]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Monterrey Centro').openPopup();
            break;
        case "city-MX-CMX":
            L.marker([19.426815318296697, -99.14350696761792]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Arcos de Belén').openPopup();

            L.marker([19.441797626170793, -99.13111515376463]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Argentina').openPopup();

            L.marker([19.431353100977034, -99.12800296171658]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Corregidores #1').openPopup();

            L.marker([19.431153274492676, -99.12660016682122]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits -  Corregidores #2').openPopup();

            L.marker([19.428926238177112, -99.13801967052436]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Mesones').openPopup();

            L.marker([19.440623317642512, -99.12749576786905]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Florida').openPopup();

            L.marker([19.426874468287245, -99.1402072061624]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Izazaga').openPopup();
            L.marker([19.43109588749127, -99.13980767923243]).addTo(map).bindPopup('Megaluz, Tianlai, Link Bits - Uruguay').openPopup();

            break;
        default:
            console.log("No stores found for this location");
    }
}

const getLocation = () => {
    if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(
        async (position) => {
            const { latitude, longitude } = position.coords;
            //console.log( `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`)
            // Llamada a un servicio de geolocalización inversa
            const response = await fetch(
                `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`
            );
            const data = await response.json();
            //return data;
            //filterBranch(data.ISO3166-2-lvl4)
            const key = "ISO3166-2-lvl4";
            //console.log(data.address[key])
            //console.log("Ciudad:", data.address.city || data.address.town);
            changeStore(`city-${data.address[key]}`)
            document.getElementById("store").value = `city-${data.address[key]}`;

        },
        (error) => {
            //return 'NOT_FOUND'
            console.error("Error obteniendo la ubicación:", error);
        }
    );
    } else {
        ///return 'NOT SUPPORTED'
        console.log("Globalización no soportada");
    }

}

getLocation();
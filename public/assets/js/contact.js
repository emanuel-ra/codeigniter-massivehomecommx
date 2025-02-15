
const toggleFormDistributorFields = (flag) => {
    const distributorFields = document.getElementById('distributorFields');    
    const inputs = document.querySelectorAll('.check-distributor')
    if (flag === true) {
        distributorFields.style.display = 'block';
        inputs.forEach(input => {
            input.setAttribute('required','required')
        })
    }else{
        distributorFields.style.display = 'none';
        inputs.forEach(input => {
            input.removeAttribute('required')
        })
    }
    
}

const onChangeContactType = () => {   
    const radios = document.querySelectorAll('input[name="wantsToBeDistributor"]');   
    radios.forEach(radio => {
        radio.addEventListener('change', () => {
            const selectedRadio = JSON.parse(document.querySelector('input[name="wantsToBeDistributor"]:checked').value);
            toggleFormDistributorFields(selectedRadio)
        });
    });    
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
            filterBranch(`city-${data.address[key]}`)
            document.getElementById("citySelect").value = `city-${data.address[key]}`;

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

const filterBranch = (filterValue)=>{
    const items = document.querySelectorAll('.branches-addresses');

    items.forEach(item => {
        if (filterValue && !item.classList.contains(filterValue)) {
            item.classList.add("hidden");
        } else {
            item.classList.remove("hidden");
        }
    });
    
}


onChangeContactType();
getLocation();


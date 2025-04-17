const types = document.querySelectorAll('.type');
const fuelTypes = document.querySelectorAll('.fuel-type');
const transmissions = document.querySelectorAll('.transmission');
const vehiclesContainer = document.querySelector('.grid');

let typeValue = "";
let fuelTypeValue = "";
let transmissionValue = "";


function generateVehicleCard(vehicle) {

    const equipmentList = vehicle.equipment.map(e => e.name).join(', ');

    return `
        <div class="bg-white rounded-xl shadow p-4">
            <img src="/images/${vehicle.photo[0].image_url}" alt="Car Image" class="rounded-md mb-4 h-40 w-full object-cover" onerror="this.onerror=null; this.src='/images/placeholderVehicle.png';">

            <div class="flex justify-between items-center mb-2">
                <h3 class="text-lg font-semibold">${vehicle.brand}</h3>
                <span class="text-purple-600 font-bold">$${vehicle.price_per_day}</span>
            </div>
            <div class="text-sm text-gray-600 mb-2">
                ${vehicle.year} • ${vehicle.transmission} • ${vehicle.fuel_type}
            </div>
            <div class="text-sm text-gray-500 mb-4">
                ${equipmentList}
            </div>
            <a href="#" class="w-full inline-block text-center bg-purple-600 text-white py-2 rounded hover:bg-purple-700 transition">
                View Details
            </a>
        </div>
    `;
}

function requeteAjax() {
    try {
        fetch("/api/vehicles/filter", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify({
                type: typeValue,
                fuelType: fuelTypeValue,
                transmission: transmissionValue
            }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && Array.isArray(data.vehicles)) {
                    vehiclesContainer.innerHTML = ""; // On vide avant d'ajouter les nouveaux
                    data.vehicles.forEach(vehicle => {
                        vehiclesContainer.innerHTML += generateVehicleCard(vehicle);
                    });
                } else {
                    vehiclesContainer.innerHTML = "<p class='text-center col-span-3'>No vehicles found.</p>";
                }
            })
            .catch(error => console.error("Erreur lors de la requête :", error));

    } catch (e) {
        console.error("Erreur :", e);
    }
}



types.forEach(type => type.addEventListener('click', (e) => {
    types.forEach(type2 => type2.classList.remove('bg-purple-600', 'text-white'));
    type.classList.add('bg-purple-600', 'text-white');
    typeValue = e.target.dataset.type;
    requeteAjax()
}));
fuelTypes.forEach(fuelType => fuelType.addEventListener('click', (e) => {
    fuelTypes.forEach(fuelType2 => fuelType2.classList.remove('bg-purple-600', 'text-white'));
    fuelType.classList.add('bg-purple-600', 'text-white');
    fuelTypeValue = e.target.dataset.fueltype;
    requeteAjax()
}));
transmissions.forEach(transmission => transmission.addEventListener('click', (e) => {
    transmissions.forEach(transmission2 => transmission2.classList.remove('bg-purple-600', 'text-white'));
    transmission.classList.add('bg-purple-600', 'text-white');
    transmissionValue = e.target.dataset.transmission;
    requeteAjax()
}));



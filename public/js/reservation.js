const reservationForm = document.querySelector('#reservation-form');

reservationForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const startDate = document.querySelector('#start_date').value;
    const endDate = document.querySelector('#end_date').value;
    const email = document.querySelector('#email').value;
    const pricePerDay = parseFloat(document.querySelector('#price-per-day').textContent);
    const idVehicle = parseInt(document.querySelector("#id-vehicle").dataset.idvehicle);


    try {
        fetch(`/api/reservation/post`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify({
                start_date: startDate,
                end_date: endDate,
                email: email,
                pricePerDay: pricePerDay,
                idVehicle: idVehicle
            }),
        })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                const message = document.querySelector('#reservation-message');
                message.textContent = data.messageUser;
                message.classList.remove('hidden');
                if (data.success) {
                    message.classList.add("text-green-600", "bg-green-100");
                } else {
                    message.classList.add("text-red-600", "bg-red-100");
                    if ('messageDev' in data) {
                        console.error(data.messageDev);
                    }
                }

            })
            .catch(error => console.error("Error :", error));

    } catch (e) {
        console.error("Error :", e);
    }
})

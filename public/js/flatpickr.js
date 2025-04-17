function removeDate(date) {
    const disabledRanges = date.reservations.map(res => {
        const endDate = new Date(res.end_date);
        endDate.setDate(endDate.getDate() + 1);
        const toDate = endDate.toISOString().split('T')[0];
        return {
            from: res.start_date,
            to: toDate
        };
    });


    flatpickr("#start_date", {
        dateFormat: "Y-m-d",
        disable: disabledRanges,
        minDate: "today"
    });

    flatpickr("#end_date", {
        dateFormat: "Y-m-d",
        disable: disabledRanges,
        minDate: "today"
    });
}

document.addEventListener("DOMContentLoaded", function () {
    const idVehicle = document.querySelector("#id-vehicle").dataset.idvehicle;
    try {
        fetch(`/api/reservation/get`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify({
                idVehicle: idVehicle
            }),
        })
            .then(response => response.json())
            .then(data => removeDate(data))
            .catch(error => console.error("Error :", error));

    } catch (e) {
        console.error("Error :", e);
    }
});

const fuelTypes = document.querySelectorAll('.fuel-type');
const transmissions = document.querySelectorAll('.transmission');

const types = document.querySelectorAll('.type');

types.forEach(type => {
    type.addEventListener('click', (e) => {
        try {
            const typeValue = e.currentTarget.dataset.type;

            fetch("/vehicles/type", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ type: typeValue }),
            })
                .then(response => response.json())
                .then(data => console.log("Réponse du serveur :", data))
                .catch(error => console.error("Erreur lors de la requête :", error));

        } catch (e) {
            console.error("Erreur :", e);
        }
    });
});



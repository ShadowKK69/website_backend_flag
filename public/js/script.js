const modal = document.getElementById('add-driver-modal');
const openModalBtn = document.getElementById('open-modal');
const cancelBtn = document.getElementById('cancel-button');
const errorMessage = document.getElementById('error-message');
const addDriverForm = document.getElementById('add-driver-form');

openModalBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
});

const closeModal = () => {
    modal.classList.add('hidden');
    errorMessage.classList.add('hidden');
    addDriverForm.reset();
};

cancelBtn.addEventListener('click', closeModal);

addDriverForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const driverName = document.getElementById('name').value;
    const vehiclePlate = modal.getAttribute('data-vehicle-plate');
    const workerId = document.getElementById('worker-id').value;
    const drivingDateStarted = document.getElementById('driving-date-started').value;
    const drivingDateEnded = document.getElementById('driving-date-ended').value;
    const startMileage = parseInt(document.getElementById('start-mileage').value, 10);
    const endMileage = parseInt(document.getElementById('end-mileage').value, 10);

    if (endMileage <= startMileage) {
        errorMessage.textContent = 'End mileage must be greater than start mileage.';
        errorMessage.classList.remove('hidden');
        return;
    }

    if (drivingDateStarted >= drivingDateEnded) {
        errorMessage.textContent = 'End date must be greater than start date.';
        errorMessage.classList.remove('hidden');
        return;
    }

    errorMessage.classList.add('hidden');

    try {
        const response = await fetch('http://localhost:5001/api/v1/drivers', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                name: driverName,
                workerId: workerId,
                vehiclePlate: vehiclePlate,
                drivingHistory:
                {
                    dateInit: drivingDateStarted,
                    dateEnd: drivingDateEnded,
                    startMileage,
                    endMileage,
                },
            }),
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Driver added:', data);
            closeModal();
            location.reload();
        } else {
            const error = await response.json();
            console.error('Error adding driver:', error);
            errorMessage.textContent = 'Error adding driver. Please try again.';
            errorMessage.classList.remove('hidden');
        }
    } catch (err) {
        console.error('Fetch error:', err);
        errorMessage.textContent = 'Failed to add driver. Please try again.';
        errorMessage.classList.remove('hidden');
    }
});
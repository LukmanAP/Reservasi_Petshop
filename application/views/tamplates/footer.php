<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#date_range", {
            mode: "range",
            minDate: "today",
            dateFormat: "Y-m-d",
            altInput: true,
            altFormat: "d F Y",
            locale: "id",
            onChange: function(selectedDates, dateStr, instance) {
                if (selectedDates.length == 2) {
                    let checkIn = selectedDates[0];
                    let checkOut = selectedDates[1];
                    if (checkOut <= checkIn) {
                        alert('Tanggal check-out harus setelah tanggal check-in');
                        instance.clear();
                    }
                }
            }
        });

        document.getElementById('bookingForm').addEventListener('submit', function(event) {
            let dateRange = document.getElementById('date_range').value;
            if (!dateRange) {
                event.preventDefault();
                alert('Silakan pilih tanggal check-in dan check-out');
            }
        });
    });

	document.addEventListener('DOMContentLoaded', function() {
    const catCards = document.querySelectorAll('.card');
		catCards.forEach(card => {
			card.addEventListener('click', function() {
				const radio = this.querySelector('input[type="radio"]');
				radio.checked = true;
				
				// Remove 'selected' class from all cards
				catCards.forEach(c => c.classList.remove('border-primary'));
				
				// Add 'selected' class to the clicked card
				this.classList.add('border-primary');
			});
		});
	});

	//MULAI DISINI
	// Constants
const DAILY_RATE = 50000;
const FOOD_DISCOUNT_PERCENTAGE = 0.10;

document.addEventListener('DOMContentLoaded', function() {
    // Initialize flatpickr
    flatpickr("#date_range", {
        mode: "range",
        minDate: "today",
        dateFormat: "Y-m-d",
        altInput: true,
        altFormat: "d F Y",
        locale: "id",
        onChange: function(selectedDates, dateStr, instance) {
            if (selectedDates.length == 2) {
                let checkIn = selectedDates[0];
                let checkOut = selectedDates[1];
                if (checkOut <= checkIn) {
                    alert('Tanggal check-out harus setelah tanggal check-in');
                    instance.clear();
                }
                calculateTotal(selectedDates);
            }
        }
    });

    // Elements
    const bringFoodCheckbox = document.getElementById('bring_food');
    const groomingSelect = document.getElementById('grooming');
    const totalPriceInput = document.getElementById('total_price');

    // Add event listeners
    bringFoodCheckbox.addEventListener('change', function() {
        const dates = document.getElementById('date_range')._flatpickr.selectedDates;
        calculateTotal(dates);
    });
    
    groomingSelect.addEventListener('change', function() {
        const dates = document.getElementById('date_range')._flatpickr.selectedDates;
        calculateTotal(dates);
    });

    function calculateTotal(selectedDates) {
        // Get stay duration
        let duration = 0;
        if (selectedDates && selectedDates.length === 2) {
            const checkIn = selectedDates[0];
            const checkOut = selectedDates[1];
            // Add 1 to include both check-in and check-out days
            duration = Math.ceil((checkOut - checkIn) / (1000 * 60 * 60 * 24));
        }

        // Calculate stay cost
        const staySubtotal = duration * DAILY_RATE;

        // Get grooming cost
        const selectedGrooming = groomingSelect.options[groomingSelect.selectedIndex];
        const groomingPrice = selectedGrooming && selectedGrooming.value ? 
            parseInt(selectedGrooming.dataset.price) : 0;

        // Calculate discount if bringing own food
        const discount = bringFoodCheckbox.checked ? (staySubtotal * FOOD_DISCOUNT_PERCENTAGE) : 0;

        // Calculate total
        const total = staySubtotal + groomingPrice - discount;

        // Update display elements
        document.getElementById('duration').textContent = `${duration} hari`;
        document.getElementById('daily_rate').textContent = `Rp. ${formatNumber(DAILY_RATE)}`;
        document.getElementById('subtotal_stay').textContent = `Rp. ${formatNumber(staySubtotal)}`;
        document.getElementById('grooming_price').textContent = `Rp. ${formatNumber(groomingPrice)}`;
        
        // Show/hide and update discount row
        const discountRow = document.getElementById('discount_row');
        if (discount > 0) {
            discountRow.style.display = 'flex';
            document.getElementById('discount_amount').textContent = `-Rp. ${formatNumber(discount)}`;
        } else {
            discountRow.style.display = 'none';
        }

        // Update total display and hidden input
        document.getElementById('total_display').textContent = `Rp. ${formatNumber(total)}`;
        totalPriceInput.value = total;
    }

    // Helper function to format numbers with thousand separator
    function formatNumber(number) {
        return new Intl.NumberFormat('id-ID').format(number);
    }

    // Form validation
    document.getElementById('bookingForm').addEventListener('submit', function(event) {
        let dateRange = document.getElementById('date_range').value;
        if (!dateRange) {
            event.preventDefault();
            alert('Silakan pilih tanggal check-in dan check-out');
        }
    });

    // Initial calculation
    calculateTotal([]);
});


    </script>
</body>
</html>

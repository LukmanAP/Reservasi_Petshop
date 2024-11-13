<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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

	flatpickr("#date_range", {
            mode: "range",
            dateFormat: "Y-m-d",
            minDate: "today",
            locale: {
                rangeSeparator: " - ",
                weekdays: {
                    shorthand: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
                    longhand: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
                },
                months: {
                    shorthand: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    longhand: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                },
            },
            onChange: function(selectedDates, dateStr, instance) {
                calculateTotalPrice();
            }
        });

        function calculateTotalPrice() {
            var catSelect = document.getElementById('id_cat');
            var bringFoodCheckbox = document.getElementById('bring_food');
            var groomingSelect = document.getElementById('grooming');
            var dateRange = document.getElementById('date_range').value;
            var totalPriceInput = document.getElementById('total_price');

            var selectedCat = catSelect.options[catSelect.selectedIndex];
            var dailyRate = parseFloat(selectedCat.textContent.split('(Rp. ')[1].split('/hari')[0].replace(/\./g, ''));
            var bringFood = bringFoodCheckbox.checked;
            var selectedGrooming = groomingSelect.options[groomingSelect.selectedIndex];
            var groomingPrice = selectedGrooming.value ? parseFloat(selectedGrooming.textContent.split('-Rp.')[1].replace(/\./g, '')) : 0;

            var dateRangeArr = dateRange.split(' - ');
            var startDate = new Date(dateRangeArr[0]);
            var endDate = new Date(dateRangeArr[1]);
            var daysDiff = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24)) + 1;

            var totalPrice = dailyRate * daysDiff;
            if (!bringFood) {
                totalPrice += 50000; // Biaya makanan dari penitipan
            }
            totalPrice += groomingPrice;

            totalPriceInput.value = 'Rp. ' + totalPrice.toLocaleString();
        }
    </script>
</body>
</html>

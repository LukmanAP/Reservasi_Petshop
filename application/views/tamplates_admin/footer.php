<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/boostrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/boostrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/boostrap/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>assets/boostrap/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>assets/boostrap/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>assets/boostrap/js/demo/chart-pie-demo.js"></script>
	<script>
		document.getElementById('tanggal').addEventListener('change', function() {
			var tanggal = this.value; // Ambil nilai tanggal
			var bulan = tanggal.substring(0, 7); // Ambil bagian tahun dan bulan (format Y-m)
			document.getElementById('bulan').value = bulan; // Set nilai input tersembunyi
		});
	</script>
	<script>
		function updateDateTime() {
			var now = new Date();
			var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
			var date = now.toLocaleDateString('id-ID', options);
			var time = now.toLocaleTimeString('id-ID');
						
				document.getElementById('datetime').innerHTML = date + ' - ' + time;
			}
				
			setInterval(updateDateTime, 1000); // Update setiap 1 detik
			pdateDateTime(); // Panggil fungsi saat halaman pertama kali dimuat
	</script>
  </body>
</html>

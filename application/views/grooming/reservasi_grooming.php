<div class="container">
	<div class="text-center mt-5">
		<h1><?php echo $grooming->name ?></h1>
	</div>
	<hr>

	<div>
		<div class="mb-3">
			<label for="" class="form-label">Kucing Anda:</label>
			<input type="text" class="form-control">
		</div>
		<div class="mb-3">
			<label for="" class="form-label">Tanggal:</label>
			<input type="date" name="tanggal" class="form-control" min="<?php echo date('Y-m-d'); ?>" required>
		</div>
		<div class="mb-3">
			<label for="" class="form-label">Bank</label>
			<input type="text" class="form-control">
		</div>
		<div class="mb-3">
			<label for="" class="form-label">Catatan:</label>
			<textarea class="form-control" name="" id="" rows="3"></textarea>
		</div>
	</div>
	
</div>

<script>
    var today = new Date().toISOString().split('T')[0];
    document.getElementById('tanggal').setAttribute('min', today);
</script>

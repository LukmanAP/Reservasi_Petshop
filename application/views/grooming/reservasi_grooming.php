<div class="container">
	<div class="text-center mt-5">
		<h1><?php echo $grooming->name ?></h1>
	</div>
	<hr>
	<form method="post" action="<?php echo base_url().'grooming/pesan_grooming/'.$grooming->id_grooming.'/'.$this->session->userdata('user_id') ?>">
		<div>
			<div class="mb-3">
				<label for="" class="form-label">Kucing Anda:</label>
				<select name="id_cat" id="" class="form-control">
					<option value="" disabled selected class="text-muted">Pilih kucing anda</option>
					<?php foreach ($cats as $cat): ?>
						<option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->name; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Tanggal:</label>
				<input type="date" name="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" required>
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Bank</label>
				<select name="bank" id="" class="form-control">
					<option value="" disabled selected class="text-muted">Pilih Bank</option>
					<option value="BNI">BNI</option>
					<option value="BRI">BRI</option>
					<option value="BCA">BCA</option>
				</select>
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Catatan:</label>
				<textarea class="form-control" name="notes" id="" rows="3"></textarea>
			</div>
		</div>
		<button type="submit" class="btn btn-primary mt-3">Pesan Sekarang</button>
	</form>
</div>

<script>
    var today = new Date().toISOString().split('T')[0];
    document.getElementById('tanggal').setAttribute('min', today);
</script>

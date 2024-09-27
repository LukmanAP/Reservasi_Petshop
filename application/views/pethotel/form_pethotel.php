<div class="container">
	<div class="text-center mt-5">
		<h1>Penitipan Hewan</h1>
	</div>
	<form action="" method="post">
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
		</div>
		<div>
			<div class="mb-3">
				<label for="" class="form-label">Tanggal checkin:</label>
				<input type="date" class="form-control">
			</div>
		</div>
		<div>
			<div class="mb-3">
				<label for="" class="form-label">Tanggal checkout</label>
				<input type="date" class="form-control">
			</div>
		</div>
		<div>
			<div class="mb-3">
				<label for="" class="form-label">Catatan:</label>
				<textarea class="form-control" name="notes" id="" rows="3"></textarea>
			</div>
		</div>

	</form>
</div>






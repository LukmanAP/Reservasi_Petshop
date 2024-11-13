

<div class="container">
	<div class="text-center mt-5">
		<h1><?php echo $grooming->name ?></h1>
	</div>
	<hr>
	<form method="post" action="<?php echo base_url().'grooming/pesan_grooming/'.$grooming->id_grooming.'/'.$this->session->userdata('user_id') ?>">
		<div>
		<div class="mb-3">
		<label class="form-label">Pilih Kucing Anda:</label>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3">
        <?php foreach ($cats as $cat): ?>
            <div class="col">
                <div class="card h-100 cat-card">
                    <img src="<?php echo base_url('assets/cats/'.$cat->image); ?>" class="card-img-top cat-image" alt="<?php echo $cat->name; ?>">
                    <div class="card-body p-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_cat" id="cat_<?php echo $cat->cat_id; ?>" value="<?php echo $cat->cat_id; ?>" required>
                            <label class="form-check-label" for="cat_<?php echo $cat->cat_id; ?>">
                                <?php echo $cat->name; ?>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
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
			<button type="submit" class="btn btn-primary mt-3" h>Pesan Sekarang</button>
	</form>
</div>


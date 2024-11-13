<div class="container">
        <div class="text-center mt-5">
            <h1>Penitipan Hewan</h1>
        </div>
        <form action="<?php echo base_url().'pethotel/form_pethotel/reservasi_pethotel/'.$this->session->userdata('user_id'); ?>" method="post" id="bookingForm">
			<div class="mb-3">
				<label for="id_cat" class="form-label">Kucing Anda:</label>
				<select name="id_cat" id="id_cat" class="form-control" required>
					<option value="" disabled selected class="text-muted">Pilih kucing anda</option>
					<?php foreach ($cats as $cat): ?>
						<option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->name; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
            
            <div class="mb-3 date-picker-container">
                <label for="date_range" class="form-label">Tanggal Penitipan:</label>
                <input type="text" id="date_range" name="date_range" class="form-control" placeholder="Pilih tanggal check-in dan check-out" required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="bring_food" id="bring_food" value='1'>
                <label class="form-check-label" for="bring_food" >
                    Bawa Makanan Sendiri
                </label>
            </div>

            <div class="mb-3">
                <label for="grooming" class="form-label">Tambahan Grooming</label>
                <select name="grooming" id="grooming" class="form-control">
                    <option value="">-- none --</option>
                    <?php foreach ($grooming as $grm): ?>
                        <option value="<?php echo $grm->id_grooming; ?>"><?php echo $grm->name; ?> <span class="badge text-bg-success">-Rp.<?php echo $grm->price?></span></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="bank" class="form-label">Bank</label>
                <select name="bank" id="bank" class="form-control" required>
                    <option value="" disabled selected class="text-muted">Pilih Bank</option>
                    <option value="BNI">BNI</option>
                    <option value="BRI">BRI</option>
                    <option value="BCA">BCA</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Catatan:</label>
                <textarea class="form-control" name="notes" id="notes" rows="3"></textarea>
            </div>

			<div class="mb-3">
                <label for="total_price" class="form-label">Total Harga:</label>
                <input type="text" id="total_price" name="total_price" class="form-control" readonly>
            </div>

            <div class="text-center mb-3">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>

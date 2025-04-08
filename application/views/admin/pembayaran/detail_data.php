<div class="container">
	<div class="mt-3">
		<h3>
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
				<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
				<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
			</svg>
			DETAIL TRANSAKSI
		</h3>
	</div>

	<?php foreach ($detail as $d) :?>
		<div style="max-width: 700px;">
			<div class="form-group mt-3">
				<label for="">Nama Pemilik</label>
				<input type="text" disabled selected class="form-control" value="<?php echo $d->user_name ?>"> 
			</div>
			<div class="form-group mt-3">
				<label for="">Nama Kucing</label>
				<input type="text" disabled selected class="form-control" value="<?php echo $d->cat_name ?>"> 
			</div>
			<div class="form-group mt-3">
				<label for="">Grooming</label>
				<input type="text" disabled selected class="form-control" value="<?php echo $d->grooming_name ?>"> 
			</div>
			<div class="form-group mt-3">
				<label for="">Nama Pemilik</label>
				<input type="text" disabled selected class="form-control" value="<?php echo $d->user_name ?>"> 
			</div>
			<div class="form-group mt-3">
				<label for="">Harga</label>
				<input type="text" disabled selected class="form-control" value="Rp.<?php echo number_format($d->price)  ?>"> 
			</div>
			<div class="form-group mt-3">
				<label for="">Bank</label>
				<input type="text" disabled selected class="form-control" value="<?php echo $d->bank  ?>"> 
			</div>
			<div class="form-group mt-3">
				<label for="">Tanggal Grooming</label>
				<input type="text" disabled selected class="form-control" value="<?php echo $d->date  ?>"> 
			</div>
			<div class="form-group mt-3">
				<label for="">Catatan</label>
				<input type="text" disabled selected class="form-control" value="<?php echo $d->notes  ?>"> 
			</div>
			<div class="form-group mt-3">
				<label for="">Tanggal Transaksi</label>
				<input type="text" disabled selected class="form-control" value="<?php echo $d->transaction_date  ?>"> 
			</div>
		</div>

	<?php endforeach; ?>
	<a href="<?php echo site_url('admin/transaction_grooming/transaksi_selesai')?>" class="btn btn-danger mb-5 mt-2 ms-2">Kembali</a>
</div>

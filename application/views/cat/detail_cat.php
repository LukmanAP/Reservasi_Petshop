<div class="container">
	<div class="mt-3"> 
		<h3><i class="fa-solid fa-cat"></i> DETAIL CAT</h3>
	</div>

	<?php foreach ($cats as $cat): ?>
		<div style="max-width: 700px;" >
			<div class="mt-5 mb-5">
			<?php if (!empty($cat->image)) : ?>
                    <img style="height: 300px; width: 300px;" src="<?php echo base_url().'./assets/cats/'.$cat->image ?>" alt="" class="card-img-top">
                <?php else : ?>
                    <img style="height: 300px; width: 300px;" src="<?php echo base_url().'./assets/home/default.png' ?>" alt="" class="card-img-top">
                <?php endif; ?>
			<form method="post" action="<?php echo site_url('cat/update_data_cat/'.$cat->cat_id.'/'.$this->session->userdata('user_id')) ?>" enctype="multipart/form-data">
				<div class="form-group mt-3">
					<label for="">Nama Kucing</label>
					<input type="text" class="form-control" name="name" value="<?php echo $cat->name ?>">
				</div>
				<div class="form-group mt-3">
					<label for="">Jenis Kucing</label>
					<input type="text" class="form-control" name="breed" value="<?php echo $cat->breed ?>">
				</div>
				<div class="form-group mt-3">
					<label for="">Tanggal lahir cat</label>
					<input type="date" class="form-control" name="tgl_cat" value="<?php echo $cat->tgl_cat ?>">
				</div>
				<div class="form-group mt-3">
					<label for="">Jenis Kelamin</label>
					<select name="gender" id="" class="form-control">
						<option disabled selected class="text-muted" value="<?php echo $cat->gender ?>"><?php echo $cat->gender ?></option>
						<option value="jantan">Jantan</option>
						<option value="Betina">Betina</option>
					</select>
				</div>
				<div class="form-group mt-3">
					<label for="">Sertivikat</label>
					<input type="file" name="sertivikat" class="form-control">
					<small class="text-muted">Format: PDF(maks. 2MB)</small>
				</div>
				<div class="form-group mt-3">
					<label for="">Foto Kucing</label>
					<input type="file" name="image" class="form-control">
					<small class="text-muted">Format: <b>jpg|jpeg|png|gif</b>(maks. 2MB)</small>
				</div>
				<button type="submit" class="btn btn-primary mt-5 mb-5">Simpan</button>
				<a href="<?php echo site_url('cat/hapus_data_cat/'.$cat->cat_id).'/'.$this->session->user_id ?>" class="btn btn-danger">Hapus Data</a>
				<a href="<?php echo site_url('cat/mycat/'.$this->session->userdata('user_id')) ?>" class="btn btn-secondary">Kembali</a>
			</form>
		</div>
	<?php endforeach; ?>

	<div class="text-center">
		<h1>Riwayat Perawatan</h1>
	</div>

	<table class="table table-bordered table-hover text-center">
    <tr>
        <th>No</th>
        <th>Layanan Grooming</th>
        <th>Catatan</th>
        <th>Tanggal</th>
        <th>Status</th>
    </tr>
		<?php if (!empty($riwayat_cat)) : ?>
			<?php $no = 1; ?>
			<?php foreach ($riwayat_cat as $tr) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $tr->name ?></td>
					<td><?php echo $tr->notes ?></td>
					<td><?php echo $tr->date ?></td>
					<td>
						<?php if ($tr->status == 'Selesai'): ?>
							<div class="btn btn-primary btn-sm">Selesai</div>
						<?php endif ?>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else : ?>
			<tr>
				<td colspan="5" class="text-center py-4">
					<div class="alert alert-info">
						Kucing Anda belum memiliki transaksi
					</div>
				</td>
			</tr>
		<?php endif; ?>
	</table>
		</div>
</div>

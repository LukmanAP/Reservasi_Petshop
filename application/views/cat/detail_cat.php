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
                    <img style="height: 300px; width: 300px;" src="<?php echo base_url().'./assets/cats/default1.jpg' ?>" alt="" class="card-img-top">
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
					<label for="">Umur</label>
					<input type="text" class="form-control" name=" age" value="<?php echo $cat->age ?>">
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
					<label for="">Foto Kucing</label>
					<input type="file" name="image" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary mt-5 mb-5">Simpan</button>
				<a href="" class="btn btn-danger">Hapus Data</a>
				<a href="" class="btn btn-secondary">Kembali</a>
			</form>
		</div>
	<?php endforeach; ?>



</div>

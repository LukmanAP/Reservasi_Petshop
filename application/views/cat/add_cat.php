<div class="container">
	<div class="mt-3">
		<h3>
		<i class="fa-solid fa-cat"></i> TAMBAH DATA KUCING
		</h3>
	</div>

	<div style="max-width: 700px;">
		<form action="<?php echo site_url('cat/add_data_cat/'.$this->session->userdata('user_id')) ?>" method="post" enctype="multipart/form-data">
			<div class="form-group mt-3">
				<label for="">Nama Kucing</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group mt-3">
				<label for="">Jenis Kucing</label>
				<input type="text" class="form-control" name="breed">
			</div>
			<div class="form-group mt-3">
				<label for="">Umur Kucing</label>
				<input type="text" class="form-control" name="age">
			</div>
			<div class="form group mt-3">
				<label for="">Jenis Kelamin</label>
				<select name="gender" id="" class="form-control">
					<option value="" disabled selected class="text-muted"><i>--Jenis Kelamin--</i></option>
					<option value="jantan">Jantan</option>
					<option value="Betina">Betina</option>
				</select>
			</div>
			<div class="form-group mt-3">
				<label for="">Foto Kucing</label>
				<input type="file" name="image" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary mt-3">Tambah Kucing</button>
		</form>
	</div>
</div>

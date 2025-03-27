<div class="container">
	<div class="mt-3">
		<h3>
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
				<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
				<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
			</svg>
			EDIT AKUN
		</h3>
	</div>
	
	<?php foreach ($users as $user): ?>
		<div style="max-width: 700px;">
		<form method="post" action="<?php echo base_url().'admin/controller_users/edit_data/'.$user->user_id ?>" enctype="multipart/form-data">
			<div class="form-group mt-3">
				<label for="">Nama:</label>
				<input type="text" class="form-control" name="name" value="<?php echo $user->name ?>">
			</div>
			<div class="form-group mt-3">
				<label for="">Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $user->email ?>">
			</div>
			<div class="form-group mt-3">
				<label for="">Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $user->password ?>">
			</div>
			<div class="form-group mt-3">
				<label for="">No telepon</label>
				<input type="text" name="phone" class="form-control" value="<?php echo $user->phone ?>">
			</div>
			<div class="form-group mt-3">
				<label for="">Alamat</label>
				<input type="text" name="address" class="form-control" value="<?php echo $user->address ?>">
			</div>
			<div class="form-group mt-3">
				<label for="">Role</label>
				<input type="text" disabled selected class="form-control" value="Admin">
			</div>
			
			<button type="submit" class="btn btn-primary mt-5">Update</button>
			<a href="<?php echo site_url('admin/controller_users/data_users')?>" class="btn btn-danger mt-5 ms-2">Batal</a>
		</form>
		</div>

	<?php endforeach;  ?>
</div>

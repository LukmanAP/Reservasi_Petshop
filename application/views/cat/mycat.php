<div class="container">
	<div class="text-center">
		<h1>Akun saya</h1>
	</div> <hr>

	<div class="row">
		<div class="col-lg-4 border p-5 ">
			<div class="d-flex justify-content-center">
			<img src="https://via.placeholder.com/150" class="rounded-circle" alt="Foto Profil" width="300" height="300">
			</div>
		</div>
		<div class="col-lg-8 border">
		<?php foreach ($users as $user): ?>
			<table class="table text-left">
				
				<tr>
					<td>Grooming:</td>
					<td><strong><?php echo $user->name?></strong></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><strong><?php echo $user->email ?></strong></td>
				</tr>
				<tr>
					<td>No.Hp:</td>
					<td><strong><?php echo $user->phone ?></strong></td>
				<tr>
				<tr>	
					<td>Alamat:</td>
					<td><strong><?php echo $user->address ?></strong></td>
				</tr>
			</table>
		<?php endforeach; ?>
		</div>
	</div>
</div>



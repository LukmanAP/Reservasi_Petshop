<div class="container">
	<div class="text-center mt-3">
		<h1>Akun saya</h1>
	</div>

	<div class="row">
		<?php foreach ($users as $user): ?>
			<div class="col-lg-4 p-5 ">
				<div class="d-flex justify-content-center">
				<img src="<?php echo base_url().'./assets/userprofile/'.$user->image ?>" class="rounded-circle" alt="Foto Profil" width="300" height="300">
				</div>
			</div>
			<div class="col-lg-8 mt-5">
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
			</div>
		<?php endforeach; ?>	
	</div>

	<div class="text-left mt-5 ">
		<h2>Kucing saya</h2>
	</div> 

	<div class="row d-flex justify-content-center text-center mt-3 mb-5">
		<?php foreach ($cats as $cat) : ?>
			
			<div class=" col-6 card mx-2 mt-3" style="width:18rem" href="" > 
			<a href="<?php echo site_url('dashboard/detail_grooming/'); ?>" class="text-decoration-none text-dark">
				<img src="<?php echo base_url().'./assets/cats/'.$cat->image ?>" alt="" class="card-img-top">
				<div class="card-body">
					
					<h5 class="card-title mb-1"><?php echo $cat->name ?></h5>
		
			
				</div>
				</a>
			</div>
			
		<?php endforeach; ?>	
	</div>
</div>

<div class="container">
	<div class="text-center mt-3">
		<h1>Akun saya</h1>
	</div>

	<div class="row">
		<?php foreach ($users as $user): ?>
			<div class="col-lg-4 p-5">
				<div class="d-flex justify-content-center">
					<?php 
					$profileImage = (!empty($user->image) && file_exists(FCPATH.'assets/userprofile/'.$user->image)) 
						? base_url('assets/userprofile/'.$user->image) 
						: base_url('assets/home/default-profile.jpg');
					?>
					<img src="<?php echo $profileImage; ?>" class="rounded-circle" alt="Foto Profil" width="300" height="300">
				</div>
			</div>
			<div class="col-lg-8 mt-5">
				<table class="table text-left">
					
					<tr>
						<td>Nama Akun:</td>
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
				<a href="<?php echo site_url('cat/edit_profile/'.$user->user_id)?>" class="btn btn-primary">Edit Akun</a>
			</div>
		<?php endforeach; ?>	
	</div>

	<div class="text-left mt-5 ">
		<h2>Kucing saya</h2>
		<?php if (!empty($cats)) : ?>
			<?php foreach ($users as $user): ?>
				<a href="<?php echo site_url('cat/add_cat/'.$user->user_id) ?>" class="btn btn-primary mt-4">Tambah Data Kucing</a>
			<?php endforeach ?>
		<?php endif; ?>
	</div> 

	<div class="row d-flex justify-content-center text-center mt-3 mb-5">
    <?php if (!empty($cats)) : ?>
    <?php foreach ($cats as $cat) : ?>
        <div class="col-6 card mx-2 mt-3 pt-3" style="width:18rem">
            <a href="<?php echo site_url('cat/detail_edit_cat/'.$cat->cat_id); ?>" class="text-decoration-none text-dark">
                <div class="image-container" style="height: 250px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                    <?php if (!empty($cat->image)) : ?>
                        <img src="<?php echo base_url().'./assets/cats/'.$cat->image ?>" alt="" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    <?php else : ?>
                        <img src="<?php echo base_url().'./assets/home/default.png' ?>" alt="" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $cat->name ?></h5>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
    <?php else : ?>
        <div class="col-12 text-center py-5">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Anda belum menambahkan data kucing</h4>
                <p>Silahkan tambahkan data kucing Anda terlebih dahulu.</p>
                <hr>
                <p class="mb-0">
                    <a href="<?php echo site_url('cat/add_cat'); ?>" class="btn btn-primary">
                        Tambah Kucing Baru
                    </a>
                </p>
            </div>
        </div>
    <?php endif; ?>
</div>
</div>

<div class="container-fluid">
<div class="d-flex flex-row mb-4">
    

	<?php if (empty($admin)) {?>
		<!-- Kondisi Kosong -->
	<?php } else {?>
		<h3>Data Admin</h3> 
		<div class="ms-3">
        	<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus fa-sm"></i> Tambah Admin</button>
    	</div>
	<?php } ?>

    <!-- Search -->
    <div class="ms-auto"> <!-- Tambahkan ms-auto di sini untuk memindahkan ke kanan -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get" action="<?php echo site_url('admin/controller_users/search_users'); ?>">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-1 small" placeholder="Search name ..." aria-label="Search" aria-describedby="basic-addon2" name="search">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php if (empty($admin)){ ?>
	<!-- Kondisi Kosong -->
<?php } else {?>

	<div class="table-responsive mb-5" style="max-height: 200px; overflow-y: auto;">
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>No.Telp</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($admin as $adn):?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $adn->name ?></td>
				<td><?php echo $adn->email ?></td>
				<td><?php echo $adn->phone ?></td>
				<td><?php echo $adn->address ?></td>
				<td style="width: 100px;">
					<a href="<?php echo site_url('admin/controller_users/edit/'.$adn->user_id) ?>"><div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div></a>
					<a href="<?php echo site_url('admin/controller_users/hapus/'.$adn->user_id) ?>"><div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div></a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	</div>
<?php }?>

	

<h3>Data Users</h3>

<div class="table-responsive mb-5" style="max-height: 400px; overflow-y: auto;">
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>No.Telp</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($users as $user):?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $user->name ?></td>
				<td><?php echo $user->email ?></td>
				<td><?php echo $user->phone ?></td>
				<td><?php echo $user->address ?></td>
				<td class="d-flex">
					<a href="<?php echo site_url('admin/controller_users/detail/'.$user->user_id) ?>"><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></a>
					<a href="<?php echo site_url('admin/controller_users/hapus/'.$user->user_id) ?>"><div class="btn btn-danger btn-sm  ms-1"><i class="fa fa-trash"></i></div></a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
			<form method="post" action="<?php echo base_url().'admin/controller_users/tambah_admin'?>">
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" class="form-control" name="name" required>
				</div>
				<div class="form-group">
					<label for="">email</label>
					<input type="email" class="form-control" name="email" required>
				</div>
				<div class="form-group">
					<label for="">password</label>
					<input type="text" class="form-control" name="password" required>
				</div>
				<div>
					<label for="">No.Hp</label>
					<input type="text" class="form-control" name="phone" required>
				</div>
				<div>
					<label for="">Alamat</label>
					<input type="text" class="form-control" name="address" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
				
			</form>

      </div>
      
    </div>
  </div>
</div>

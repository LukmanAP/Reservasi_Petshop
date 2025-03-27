<section class="intro">
	<div class="container-fluid">
	<div class="d-flex justify-content-end ms-3 mb-2">
		<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<i class="fas fa-plus fa-sm"></i> Tambah L
		</button>
	</div>

		<div class="gradient-custom-1 h-100">
			<div class="mask d-flex align-items-center h-100">
			<div class="container">
				<div class="row justify-content-center">
				<div class="col-12">
					<div class="table-responsive bg-white">
					<table class="table mb-0">
						<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama Grooming</th>
							<th scope="col">Deskripsi</th>
							<th scope="col">Harga</th>
							<th scope="col">Gambar</th>

						</tr>
						</thead>
						<tbody>
						<?php if(empty($layanan)) : ?>
							<tr>
               					 <td colspan="7" class="text-center">Tidak ada transaksi</td>
            				</tr>
						<?php else : ?>
							<?php $no = 1;?>
							<?php foreach ($layanan as $ly) : ?>
								<tr>
									<td><?php echo $no++?></td>
									<td><?php echo $ly->name ?></td>
									<td><?php echo $ly->description ?></td>
									<td>Rp.<?php echo number_format($ly->price)?></td>
									<td style="width:150px;">
										<a href="<?php echo site_url('admin/layanan_grooming/edit_layanan/'.$ly->id_grooming) ?>"><div class="btn btn-primary btn-sm">Edit</div></a>
										<a href="<?php echo site_url('admin/layanan_grooming/hapus_layanan/'.$ly->id_grooming) ?>"><div class="btn btn-danger btn-sm">Hapus</div></a>
									</td>
								</tr>
							<?php endforeach; ?>	
						<?php endif; ?>
						
						</tbody>
					</table>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
  </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Layanan Grooming</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/layanan_grooming/tambah_layanan'?>" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Nama Grooming</label>
            <input type="text" id="name" class="form-control" name="name" required>
          </div>
          <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description" class="form-control" name="description" style="resize: none;" required></textarea>
          </div>
          <div class="form-group">
            <label for="price">Harga</label>
            <input type="text" id="price" class="form-control" name="price" pattern="[0-9]+" required>
          </div>
          <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" id="image" class="form-control" name="image" required>
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


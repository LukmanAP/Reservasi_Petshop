<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			Detail Prouct
		</div>
		<div class="card-body">
			
			<?php foreach ($grooming as $grm): ?>
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url().'/assets/img/'.$grm->image ?>" class="card-img-top">
					</div>
					<div class="col-md-8">
						<table class="table">
							<tr>
								<td>Grooming</td>
								<td><strong><?php echo $grm->name ?></strong></td>
							</tr>
							<tr>
								<td>Deskripsi</td>
								<td><strong><?php echo $grm->description ?></strong></td>
							</tr>
							<tr>
								<td>Harga</td>
								<td><strong><div class="btn btn-sm btn-success"> Rp. <?php echo number_format($grm->price,0,',','.') ?></div></strong></td>
							</tr>
						</table>
						<?php echo anchor('grooming/reservasi_grooming/'.$grm->id_grooming,'<div class="btn btn-sm btn-primary"> Reservasi</div>') ?>
						<?php echo anchor('dashboard/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

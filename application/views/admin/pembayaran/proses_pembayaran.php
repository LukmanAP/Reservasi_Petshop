<div class="container-fluid">
	<h3>Proses Status Pembayaran</h3>

	<table class="table table-bordered table-hover table-striped text-center">
		<tr>
			<th>No</th>
			<th>Nama Pemilik</th>
			<th>Nama Pet</th>
			<th>Layanan Grooming</th>
			<th>TanggalGrooming</th>
			<th>Bukti</th>
		</tr>
		<?php $no = 1; ?>
		<?php foreach ($transaksi as $tr) :?>
			
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tr->user_name ?></td>
				<td><?php echo $tr->cat_name;?></td>
				<td><?php echo $tr->grooming_name ?></td>
				<td><?php echo $tr->date ?></td>
				<td>
					<a href="#" data-bs-toggle="modal" data-bs-target="#imageModal<?php echo $tr->transaction_id; ?>">
						<img style="height: 100px; width: 80px;" src="<?php echo base_url().'././assets/bukti/'.$tr->image?>" alt="">
					</a>
				</td>			
			</tr>

			<div class="modal fade" id="imageModal<?php echo $tr->transaction_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Gambar Bukti Pembayaran</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<img src="<?php echo base_url('assets/bukti/'.$tr->image); ?>" alt="Bukti Pembayaran" style="width: 100%;">
						<div class="d-flex justify-content-between">
							<div>
								<a href="<?php echo site_url('admin/proses_pembayaran/update_status/'.$tr->transaction_id); ?>">
									<button class="btn btn-warning mt-2">Cocok</button>
								</a>
							</div>
							<div></div>
							<div>
							<button class="btn btn-danger mt-2">Batal</button>
							</div>
						</div>
					</div>
					
					</div>
					
				</div>
			</div>
			
		<?php endforeach; ?>
	</table>

	<!-- Modal -->

</div>

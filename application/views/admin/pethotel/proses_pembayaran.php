<div class="container">
	<h1 class="text-center">
		<h1>Proses Pemabayaran Pethotel</h1>
	</h1>

	<table class="table table-bordered table-hover text-center">
		<tr>
			<th>No</th>
			<th>nama Pet</th>
			<th>Tanggal Checkin</th>
			<th>Tanggal Checkout</th>
			<th>Bukti</th>w
		</tr>
		<?php if(empty($transaksi)): ?>
            <tr>
                <td colspan="7" class="text-center">Tidak ada transaksi</td>
            </tr>
        <?php else: ?>

			<?php $no = 1; ?>
			<?php foreach ($transaksi as $tr) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $tr->cat_name ?></td>
					<td><?php echo $tr->date_checkin ?></td>
					<td><?php echo $tr->date_checkout ?></td>
					<td>
					<a href="#" data-bs-toggle="modal" data-bs-target="#imageModal<?php echo $tr->transaction_id; ?>">
							<img style="height: 100px; width: 80px;" src="<?php echo base_url().'././assets/bukti_pethotel/'.$tr->image?>" alt="">
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
							<img src="<?php echo base_url('assets/bukti_pethotel/'.$tr->image); ?>" alt="Bukti Pembayaran" style="width: 100%;">
							<div class="d-flex justify-content-between">
								<div>
									<a href="<?php echo site_url('admin/transaction_pethotel/update_status/'.$tr->transaction_id); ?>">
										<button class="btn btn-warning mt-2">Cocok</button>
									</a>
								</div>
								<div></div>
								<div>
								<button type="button" class="btn btn-danger mt-2" data-bs-dismiss="modal">kembali</button>
									<a href="<?php echo site_url('admin/transaction_pethotel/batalkan_status/'.$tr->transaction_id); ?>">
										<button class="btn btn-danger mt-2">Batalkan</button>
									</a>
								
								</div>
							</div>
						</div>
						
						</div>
						
					</div>
				</div>
				
			<?php endforeach; ?>

		<?php endif; ?>

		

	</table>
</div>

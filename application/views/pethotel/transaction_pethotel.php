<div class="container">
	<h1>ini transaction Pethotel</h1>


	<div class="d-flex flex-row-reverse bd-higlight mb-2">
		<a href="<?php echo site_url('pethotel/transaction_pethotel/riwayat_pethotel/'.$this->session->userdata('user_id')); ?>">
			<button class="btn-primary btn-sm">Riwayat Penitipan</button>
		</a>

	</div>
	<table class="table table-bordered table-hover table-striped text-center">
		<tr>
			<th>No</th>
			<th>Nama Pet</th>
			<th>Tanggal Checkin</th>
			<th>Tanggal Checkout</th>
			<th>Status Pembayaran</th>
		</tr>
		<?php $no = 1; ?>
		<?php foreach ($transaksi as $tr) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tr->cat_name; ?></td>
				<td><?php echo $tr->date_checkin; ?></td>
				<td><?php echo $tr->date_checkout; ?></td>
				<td>
					<?php if ($tr->status == 'Belum Terbayar'): ?>
						<div class="d-flex flex-row justify-content-center">
							<p><i>Belum terbayar</i></p>
							<a href="<?php echo site_url('pethotel/transaction_pethotel/pembayaran/'.$tr->transaction_id) ?>">
							<button type="button" class="btn btn-success ms-3">Bayar</button>
							</a>
						</div>
					<?php elseif ($tr->status == 'Proses'): ?>
						<div class="btn btn-warning btn-sm">Sedang di Proses</div>
					<?php elseif ($tr->status == 'Sudah Terbayar'): ?>
						<div class="btn btn-success btn-sm">Sudah Terbayar</div>
					<?php endif; ?>
				</td>
			</tr>

		<?php endforeach; ?>
	</table>
</div>

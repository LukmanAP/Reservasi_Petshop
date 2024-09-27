<div class="container">
	<div class="text-center">
		<h1>Proses Pembayaran</h1>
	</div>
	<div class="d-flex flex-row-reverse bd-highlight mb-2">
		<a href=""></a>
			<button class=" btn-primary btn-sm">riwayat</button>
		</a>
	</div>

	<table class="table table-bordered table-hover table-striped text-center">
		<tr>
			<th>No</th>
			<th>Nama Pet</th>
			<th>Layanan Grooming</th>
			<th>Tanggal</th>
			<th>Status</th>
		</tr>
		<?php $no = 1; ?>
		<?php foreach ($transaksi as $tr) :?>
			
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tr->cat_name;?></td>
				<td><?php echo $tr->name ?></td>
				<td><?php echo $tr->date ?></td>
				<td>
                <?php if ($tr->status == 'Belum Terbayar'): ?>
					<div class="d-flex flex-row justify-content-center">
						<p><i>Belum Terbayar</i></p>
						<a href="<?php echo site_url('transaction/pembayaran/'.$tr->transaction_id) ?>">
						<button type="button" class="btn btn-success ms-3">Bayar</button>
						</a>
					</div>
				<?php elseif($tr->status == 'Proses'): ?>
					<div class="btn btn-warning btn-sm">Sedang di Proses</div>
                <?php elseif ($tr->status == 'Sudah Terbayar'): ?>
                    <div class="btn btn-success btn-sm">Sudah Terbayar</div>
                <?php elseif ($tr->status == 'Selesai'): ?>
                    <div class="btn btn-primary btn-sm">Selesai</div>
                <?php endif; ?>
            	</td>
				
			</tr>
			
		<?php endforeach; ?>
	</table>

	
</div>

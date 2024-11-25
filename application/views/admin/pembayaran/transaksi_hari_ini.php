<div class="container-fluid">
	<h3>Transaksi hari ini Grooming</h3>

	<table class="table table-bordered table-hover table-striped text-center">
		<tr>
			<th>No</th>
			<th>Nama Pemilik</th>
			<th>Nama Pet</th>
			<th>Layanan Grooming</th>
			<th>Tanggal Grooming</th>
			<th>Catatan</th>
			<th>Aksi</th>

		</tr>
		<?php if(empty($transaksi)): ?>
            <tr>
                <td colspan="7" class="text-center">Tidak ada transaksi</td>
            </tr>
        <?php else: ?>
				<?php $no = 1; ?>
			<?php foreach ($transaksi as $tr): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $tr->user_name; ?></td>
					<td><?php echo $tr->cat_name; ?></td>
					<td><?php echo $tr->grooming_name ?></td>
					<td><?php echo $tr->date; ?></td>
					<td><?php echo $tr->notes; ?></td>
					<td>
					<a href="<?php echo site_url('admin/transaction_grooming/update_status_selesai/'.$tr->transaction_id) ?>"><div class="btn btn-success btn-sm"><i class="fa-solid fa-check mx-1"></i>Selesai</div></a>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
		


	</table>
</div>

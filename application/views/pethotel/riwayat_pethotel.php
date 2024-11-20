<div class="container">
	<div class="text-center">
		<h1>Riwayat</h1>
	</div>

	<table class="table table-bordered table-hover text-center">
		<tr>
			<th>No</th>
			<th>Nama Pet</th>
			<th>Tanggal Checkin</th>
			<th>Tanggal Checkout</th>
			<th>Status</th>
		</tr>
		<?php $no = 1; ?>
		<?php foreach ($riwayat as $tr) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tr->cat_name ?></td>
				<td><?php echo $tr->date_checkin ?></td>
				<td><?php echo $tr->date_checkout ?></td>
				<td>
				<?php if ($tr->status == 'Selesai'): ?>
					<div class="btn btn-primary btn-sm">Selesai</div>
				<?php endif ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

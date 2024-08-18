<div class="container">
	<div class="text-center mt-5">
		<h1>Transaksi grooming</h1>
	</div>

	<table class="table table-bordered table-hover table-striped">
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
				<td><div class="btn btn-primary btn-sm">Belum</div></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

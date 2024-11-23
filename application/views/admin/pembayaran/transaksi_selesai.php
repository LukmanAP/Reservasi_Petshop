<div class="container-fluid">
	<h1>Transaksi Selesai</h1>

	<table class="table table-bordered table-hover table-striped text-center">
		<tr>
			<th>No</th>
			<th>Nama Pemilik</th>
			<th>Nama Pet</th>
			<th>Layanan Grooming</th>
			<th>Tanggal Grooming</th>
			<th>Status</th>
		</tr>
		<?php $no = 1; ?>
		<?php foreach ($transaksi as $tr): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tr->user_name; ?></td>
				<td><?php echo $tr->cat_name; ?></td>
				<td><?php echo $tr->grooming_name ?></td>
				<td><?php echo $tr->date; ?></td>
				<td>Test</td>
			</tr>
		<?php endforeach; ?>


	</table>
</div>

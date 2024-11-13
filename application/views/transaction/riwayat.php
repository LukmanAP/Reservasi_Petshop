<div class="container">
	<div class="text-center">
		<h1>Riwayat</h1>
	</div>

	<table class="table table-bordered table-hover text-center">
		<tr>
			<th>No</th>
			<th>Nama Pet</th>
			<th>Layanan Grooming</th>
			<th>Tanggal</th>
			<th>Status</th>
		</tr>
		<?php $no = 1; ?>
		<?php foreach ($riwayat as $tr) :?>
			
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tr->cat_name;?></td>
				<td><?php echo $tr->name ?></td>
				<td><?php echo $tr->date ?></td>
				<td>
                <?php if ($tr->status == 'Selesai'): ?>
					<div class="btn btn-primary btn-sm">Selesai</div>
				<?php endif ?>
					
				
			</tr>
			
		<?php endforeach; ?>
	</table>
</div>

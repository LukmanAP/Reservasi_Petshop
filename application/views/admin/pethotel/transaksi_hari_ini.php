<div class="controler">
	<h3>Checkin hari ini</h3>
	<table class="table table-bordered table-hover table-striped text-center">
		<tr>
			<th>No</th>
			<th>Nama Pet</th>
			<th>Tanggal Checkin</th>
			<th>Tanggal checkout</th>
			<th>Layanan Grooming</th>
			<th>Catatan</th>
			<th>Status</th>
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
                    <td><?php echo $tr->cat_name; ?></td>
                    <td><?php echo $tr->date_checkin ?></td>
                    <td><?php echo $tr->date_checkout ?></td>
                    <td><?php echo $tr->grooming_name ?></td>
                    <td><?php echo $tr->notes; ?></td>
                    <td style="width: 150px;">
                        <a href="<?php echo site_url('admin/transaction_pethotel/update_status_checkin/'.$tr->transaction_id) ?>">
                            <div class="btn btn-success btn-sm">Checkin</div>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>


	</table>
</div>

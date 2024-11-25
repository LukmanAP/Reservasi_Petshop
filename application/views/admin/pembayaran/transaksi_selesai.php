<div class="container-fluid">
	<h1>Transaksi Selesai Grooming</h1>
	<div class="d-flex flex-row mb-4">
		<div class="ms-auto"> <!-- Tambahkan ms-auto di sini untuk memindahkan ke kanan -->
			<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get" action="<?php echo site_url('admin/transaction_grooming/search_user'); ?>">
				<div class="input-group">
					<input type="text" class="form-control bg-light border-1 small" placeholder="Search name ..." aria-label="Search" aria-describedby="basic-addon2" name="search">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit">
							<i class="fas fa-search fa-sm"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

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
				<td>
					<a href="<?php echo site_url('admin/transaction_grooming/detail_data/'.$tr->transaction_id) ?>"><div class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i> Detail</div></a>
					<?php if ($tr->status == "Belum Terbayar") : ?>
						<div style="width:120px;" class="btn btn-success btn-sm">Belum Terbayar</div>
					<?php elseif ( $tr->status == "Proses") :?>
						<div style="width:120px;" class="btn btn-warning btn-sm">Diproses</div>
					<?php elseif ( $tr->status == "Sudah Terbayar"): ?>
						<div style="width:120px;" class="btn btn-primary btn-sm">Sudah Terbayar</div>
					<?php elseif ( $tr->status == "Selesai") :?>
						<div style="width:120px;" class="btn btn-secondary btn-sm">Selesai</div>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; ?>


	</table>
</div>

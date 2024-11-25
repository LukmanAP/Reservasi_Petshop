<div class="container-fluid">
	<!-- Content Row -->
	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
		<a href="<?php echo site_url('admin/transaction_grooming/tampil_pembayaran')?>" class="text-decoration-none">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Pembayaran Grooming
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?php echo $jumlah_grooming; ?> Transaksi
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
		<a href="<?php echo site_url('admin/transaction_pethotel/tampil_pembayaran') ?>" class="text-decoration-none">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Pembayaran PetHotel
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?php echo $jumlah_pethotel; ?> Transaksi
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>



<!-- Content Row -->
</div>

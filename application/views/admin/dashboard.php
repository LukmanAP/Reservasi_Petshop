<div class="container-fluid">
	<!-- Content Row -->
	<h3>grooming</h3>
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
								<i class="fas fa-solid fa-money-bill  fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<a href="<?php echo site_url('admin/transaction_grooming/transaksi_hari_ini')?>" class="text-decoration-none">
				<div class="card border-left-warning shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
									Transaksi Hari Ini
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?php echo $jumlah_transaksi_hari_ini; ?> Transaksi
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


	<h3>Pet Hotel</h3>
	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
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
							<i class="fas fa-solid fa-money-bill  fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<a href="<?php echo site_url('admin/transaction_pethotel/transaksi_hari_ini') ?>" class="text-decoration-none">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Checkin Hari Ini
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?php echo $checkin_hari_ini; ?> Transaksi
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-solid fa-mattress-pillow fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<a href="<?php echo site_url('admin/transaction_pethotel/transaksi_berlangsung') ?>" class="text-decoration-none">
				<div class="card border-left-warning shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
									Sedang Berlangsung
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?php echo $sedang_menginap; ?> Transaksi
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-solid fa-clock fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>




<!-- Content Row -->
</div>

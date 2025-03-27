<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul  class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard/admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/controller_users/data_users') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data User & Admin</span></a>
            </li>

			<li class="nav-item">
				<button type="button" class="dropdown-toggle nav-link btn-group dropend" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa-solid fa-shower"></i> Grooming
				</button>	
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="<?php echo base_url('admin/transaction_grooming/tampil_pembayaran') ?>">Proses Pembayaran</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url('admin/transaction_grooming/transaksi_hari_ini') ?>">Transaksi Hari ini</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url('admin/transaction_grooming/transaksi_keseluruhan') ?>">Transaksi Keseluruhan</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url('admin/transaction_grooming/transaksi_selesai') ?>">Transaksi Selesai</a></li>
				</ul>
            </li>

			<li class="nav-item">
				<button type="button" class="dropdown-toggle nav-link btn-group dropend" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa-solid fa-house"></i> Pet Hotel
				</button>	
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="<?php echo base_url('admin/transaction_pethotel/tampil_pembayaran') ?>">Proses Pembayaran</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url('admin/transaction_pethotel/transaksi_hari_ini') ?>">Checkin hari ini</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url('admin/transaction_pethotel/transaksi_berlangsung') ?>">Sedang berlangsung</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url('admin/transaction_pethotel/transaksi_selesai') ?>">Transaksi Selesai</a></li>
				</ul>
            </li>

			<li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/layanan_grooming/layanan_grooming') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Layanan Grooming</span></a>
            </li>

			<li class="nav-item">
				<button type="button" class="dropdown-toggle nav-link btn-group dropend" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa-solid fa-money-bill"></i> Laporan
				</button>	
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="<?php echo base_url('admin/laporan/laporan_grooming') ?>">Laporan Grooming</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url('admin/laporan/laporan_pethotel') ?>">Laporan Pet Hotel</a></li>
				</ul>
            </li>

			<!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/laporan/data_laporan') ?>">
                    <i class="fas fa-fw fa-money-bill "></i>
                    <span>Laporan</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
         

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="navbar-text ms-auto text-black" id="datetime">
						<!-- Waktu dan tanggal akan ditampilkan di sini -->
					</div>
				</nav>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                       <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
						<ul class="nav navbar-nav navbar-right">
							<?php if($this->session->userdata('name')) { ?>
								<li><div>Selamat Datang <?php echo $this->session->userdata('name') ?></div></li>
								<li class="ml-2"><?php echo anchor('auth/logout','logout'); ?></li>
							<?php } else { ?>
								<li><?php echo anchor('auth/login', 'login'); ?></li>
							<?php } ?>
						</ul>
                    </ul>

                </nav>

<script>
    function updateDateTime() {
        var now = new Date();
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var date = now.toLocaleDateString('id-ID', options);
        var time = now.toLocaleTimeString('id-ID');
        
        document.getElementById('datetime').innerHTML = date + ' - ' + time;
    }
s
    setInterval(updateDateTime, 1000); // Update setiap 1 detik
    updateDateTime(); // Panggil fungsi saat halaman pertama kali dimuat
</script>

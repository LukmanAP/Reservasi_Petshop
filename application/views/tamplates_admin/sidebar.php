<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" style="overflow: hidden; position: fixed; height: 100vh;">

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
                <a class="nav-link" href="<?php echo base_url('admin/invoice') ?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Proses Pembayaran</span></a>
            </li>
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

<div class="container-fluid">

	<h2>Laporan transaksi grooming</h2>
    <!-- Form Input Tanggal -->
    <form action="<?php echo site_url('admin/laporan/laporan_grooming'); ?>" method="get">
        <div class="form-group">
            <label for="tanggal">Pilih Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo isset($_GET['tanggal']) ? $_GET['tanggal'] : date('Y-m-d'); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Tampilkan</button>
        <!-- Tombol Cetak PDF -->
        <a href="<?php echo site_url('admin/laporan/cetak_pdf?tanggal=' . (isset($_GET['tanggal']) ? $_GET['tanggal'] : date('Y-m-d'))); ?>" class="btn btn-success">Cetak PDF</a>

        <!-- Tombol Cetak PDF 1 Bulan -->
        <a href="<?php echo site_url('admin/laporan/laporan_transaksi_bulanan?bulan=' . (isset($_GET['bulan']) ? $_GET['bulan'] : date('m')) . '&tahun=' . (isset($_GET['tahun']) ? $_GET['tahun'] : date('Y'))); ?>" class="btn btn-info">Cetak PDF 1 Bulan</a>
    </form>

    <!-- Tabel Laporan -->
    <table class="table table-bordered table-hover table-striped text-center mt-3">
        <tr>
            <th>No</th>
            <th>Nama Pemilik</th>
            <th>Nama Pet</th>
            <th>Layanan</th>
            <th>Transaksi</th>
        </tr>

        <?php if (!empty($laporan)): ?>
            <?php $no = 1; ?>
            <?php foreach ($laporan as $lp): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $lp->user_name; ?></td>
                    <td><?php echo $lp->cat_name; ?></td>
                    <td><?php echo $lp->grooming_name; ?></td>
                    <td><?php echo $lp->price; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Tidak ada data untuk tanggal yang dipilih.</td>
            </tr>
        <?php endif; ?>
    </table>

    <!-- Daftar Layanan Hari Ini -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Layanan yang Digunakan Hari Ini</h6>
        </div>
        <div class="card-body">
            <?php if (!empty($laporan_transaksi['layanan_hari_ini'])): ?>
                <ul>
                    <?php foreach ($laporan_transaksi['layanan_hari_ini'] as $layanan): ?>
                        <li><?php echo $layanan->layanan; ?> (Total: <?php echo $layanan->total; ?>)</li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Tidak ada layanan yang digunakan hari ini.</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="alert alert-success">
        <h4>Total Harga dalam Sehari: Rp <?php echo number_format($laporan_transaksi['total_harga'], 0, ',', '.'); ?></h4>
    </div>
</div>

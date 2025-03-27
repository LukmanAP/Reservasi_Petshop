<div class="container-fluid">
    <h2>Laporan Transaksi Pet Hotel</h2>
    <form action="<?php echo site_url('admin/laporan/laporan_pethotel'); ?>" method="get">
        <div class="form-group">
            <label for="tanggal">Pilih Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo isset($_GET['tanggal']) ? $_GET['tanggal'] : date('Y-m-d'); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Tampilkan</button>
        <a href="<?php echo site_url('admin/laporan/cetak_pethotel_pdf?tanggal=' . (isset($_GET['tanggal']) ? $_GET['tanggal'] : date('Y-m-d'))); ?>" class="btn btn-success">
			Cetak PDF
		</a>
		<a href="<?php echo site_url('admin/laporan/cetak_pethotel_pdf_bulanan?bulan=' . (isset($_GET['tanggal']) ? date('Y-m', strtotime($_GET['tanggal'])) : date('Y-m'))); ?>" class="btn btn-info">
    		Cetak PDF Bulanan
		</a>
    </form>

    <table class="table table-bordered table-hover table-striped text-center mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemilik</th>
                <th>Nama Hewan</th>
                <th>Tanggal Check-in</th>
                <th>Tanggal Check-out</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($transaksi)): ?>
                <?php $no = 1; ?>
                <?php foreach ($transaksi as $tr) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tr->user_name; ?></td>
                        <td><?php echo $tr->cat_name; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($tr->date_checkin)); ?></td>
                        <td><?php echo date('d-m-Y', strtotime($tr->date_checkout)); ?></td>
                        <td><?php echo number_format($tr->total_price, 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Tidak ada data untuk tanggal yang dipilih.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="alert alert-success">
        <h4>Total Harga dalam Sehari: Rp <?php echo number_format(array_sum(array_column($transaksi, 'total_price')), 0, ',', '.'); ?></h4>
    </div>
</div>

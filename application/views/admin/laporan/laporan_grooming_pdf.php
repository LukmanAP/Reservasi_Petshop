<!DOCTYPE html>
<html>
<head>
    <title>Laporan Grooming</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 20px;
            padding: 15px;
        }
        .card-header {
            background-color: #f8f9fa;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .card-body {
            padding: 10px;
        }
        .alert {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Laporan Grooming - <?php echo $tanggal; ?></h1>

    <!-- Tabel Laporan -->
    <table>
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
    <div class="card">
        <div class="card-header">
            <h6>Layanan yang Digunakan Hari Ini</h6>
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

    <div class="alert">
        <h4>Total Harga dalam Sehari: Rp <?php echo number_format($laporan_transaksi['total_harga'], 0, ',', '.'); ?></h4>
    </div>
</body>
</html>

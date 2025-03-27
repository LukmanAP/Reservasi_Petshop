<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi Bulanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .service {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .summary {
            margin-top: 20px;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>
<body>
    <h1>Laporan Transaksi Bulanan</h1>
    <h3>Bulan: <?php echo $bulan; ?> Tahun: <?php echo $tahun; ?></h3>

    <?php 
    $totalKeseluruhan = 0; // Inisialisasi total keseluruhan
    if (!empty($laporan)): ?>
        <?php foreach ($laporan as $layanan): ?>
            <div class="service">
                <strong>Layanan:</strong> <?php echo $layanan->grooming_name; ?><br>
                <strong>Jumlah Transaksi:</strong> <?php echo $layanan->total_transaksi; ?><br>
                <strong>Total Harga:</strong> Rp <?php echo number_format($layanan->total_harga, 0, ',', '.'); ?>
            </div>
            <?php $totalKeseluruhan += $layanan->total_harga; // Tambahkan ke total keseluruhan ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Tidak ada data untuk bulan dan tahun yang dipilih.</p>
    <?php endif; ?>

    <div class="summary">
        <p>Total Keseluruhan Harga: Rp <?php echo number_format($totalKeseluruhan, 0, ',', '.'); ?></p>
    </div>

    <div class="footer">
        <p>Dicetak pada: <?php echo date('d-m-Y H:i:s'); ?></p>
    </div>
</body>
</html>

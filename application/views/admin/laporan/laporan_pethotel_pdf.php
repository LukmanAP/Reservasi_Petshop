<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pet Hotel</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
        }
        p {
            margin: 5px 0 0;
            font-size: 16px;
            color: #e0f7fa;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .total-price {
            text-align: right;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
            font-size: 18px;
            padding: 10px;
            background-color: #e8f5e9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .no-data {
            text-align: center;
            color: #888;
            font-style: italic;
            padding: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #888;
            font-size: 12px;
            padding: 10px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Laporan Transaksi Pet Hotel</h2>
        <p>Tanggal: <?php echo $tanggal; ?></p>
    </div>
    <table>
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
                        <td>Rp <?php echo number_format($tr->total_price, 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="no-data">Tidak ada data untuk tanggal yang dipilih.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="total-price">
        Total Harga dalam Sehari: Rp <?php echo number_format($total_harga['total_harga'], 0, ',', '.'); ?>
    </div>
    <div class="footer">
        Generated by Management System
    </div>
</body>
</html>

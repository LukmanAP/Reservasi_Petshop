<?php
// Set path ke index.php CodeIgniter
$index_path = __DIR__ . '/index.php';

// Perintah untuk menjalankan fungsi cek_transaksi_kadaluarsa di controller Transaction
$command = "php {$index_path} transaction cek_transaksi_kadaluarsa";

// Jalankan perintah
exec($command, $output, $return_var);

// Tampilkan output (opsional, untuk debugging)
foreach ($output as $line) {
    echo $line . "\n";
}

// Tampilkan status return (0 = sukses, lainnya = error)
echo "Return status: " . $return_var . "\n";
?>

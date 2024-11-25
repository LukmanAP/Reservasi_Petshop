-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2024 pada 08.53
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cats`
--

CREATE TABLE `cats` (
  `cat_id` int(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `sertivikat` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cats`
--

INSERT INTO `cats` (`cat_id`, `user_id`, `name`, `breed`, `age`, `gender`, `sertivikat`, `image`) VALUES
(2, 1, 'oyen', 'persia', 1, 'jantan', 'Brown_and_White_Minimalist_Senior_Barista_CV_Resum', 'inayah1.jpg'),
(3, 2, 'empus', 'persia', 2, 'jantan', '', 'kucing.jpg'),
(4, 2, 'stefen', 'persia', 1, 'betina', '', 'kucing.jpg'),
(5, 2, 'hitam', 'persia', 2, 'jantan', '', 'kucing.jpg'),
(7, 1, 'Ika Fauziah', 'persia', 5, '', '', '8c4a51e005629a084505649079b0a949.jpg'),
(8, 1, 'jamal', 'persia', 5, 'jantan', '', 'kucingfery.jpg'),
(10, 1, 'Ika Fauziah', 'persia', 5, 'Betina', '', 'zeni.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_grooming`
--

CREATE TABLE `service_grooming` (
  `id_grooming` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `service_grooming`
--

INSERT INTO `service_grooming` (`id_grooming`, `name`, `layanan`, `description`, `price`, `image`) VALUES
(1, 'Paket Grooming - Basic', 'paket', 'grooming Basic\r\n. Memandikan\r\n. memotong kuku\r\n. membersihkan telinga', 50000, 'cat2.jpg'),
(2, 'Paket Grooming - Kutu', 'paket', 'Grooming - kutu\r\n. memandikan\r\n. potong kuku\r\n. bersihkan teling\r\n. perawatan kutu', 80000, 'cat1.jpg'),
(3, 'Paket Grooming - Jamur', 'paket', 'Grooming - Jamur\r\n. memandikan\r\n. potong kuku\r\n. bersihkan teling\r\n. Perawatan Jamur', 80000, 'cat4.jpg'),
(6, 'Perawatan Kutu', 'satuan', 'merwat dan memberikan obat kutu untuk mengurangi kutu pada kucing anda', 50000, 'cat1.jpg'),
(7, 'Perawatn Jamur', 'satuan', 'merawat kucing nada yang terkena jamur', 50000, 'cat2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_grooming`
--

CREATE TABLE `transaction_grooming` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(3) NOT NULL,
  `grooming_id` int(3) NOT NULL,
  `id_cat` varchar(10) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `date` date NOT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_due_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'Belum Terbayar',
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaction_grooming`
--

INSERT INTO `transaction_grooming` (`transaction_id`, `user_id`, `grooming_id`, `id_cat`, `bank`, `notes`, `date`, `transaction_date`, `payment_due_date`, `status`, `image`) VALUES
(42, 1, 6, '2', 'BNI', 'Pemesanan Pertama', '2024-10-09', '2024-10-08 07:59:02', '2024-10-09 07:59:02', 'Belum Terbayar', ''),
(43, 1, 2, '7', 'BCA', 'kljkhg', '2024-11-23', '2024-11-23 14:04:19', '2024-11-23 14:04:19', 'Selesai', '7c44307a66c1458511ca2365db4c07211.jpg'),
(44, 1, 2, '11', 'BRI', 'n nmbjh', '2024-10-11', '2024-10-08 13:35:59', '2024-10-08 13:35:59', 'Selesai', '7c44307a66c1458511ca2365db4c0721.jpg'),
(45, 1, 6, '11', 'BRI', 'eere', '2024-10-09', '2024-10-08 17:15:07', '2024-10-08 17:15:07', 'Selesai', 'hotel1.jpg'),
(46, 1, 2, '10', 'BNI', '', '2024-10-10', '2024-11-24 14:05:05', '2024-11-24 06:45:35', 'Sudah Terbayar', 'KRS.png'),
(47, 1, 6, '2', 'BCA', '', '2024-10-09', '2024-11-23 14:17:58', '2024-11-23 14:17:58', 'Selesai', 'default1.jpg'),
(48, 1, 6, '7', 'BRI', 'lukmasn', '2024-11-24', '2024-11-24 06:46:56', '2024-11-24 06:46:56', 'Sudah Terbayar', 'unnamed.png'),
(49, 1, 2, '8', 'BNI', 'llukmaskasasasSAsas', '2024-11-21', '2024-11-24 14:05:08', '2024-11-24 06:45:54', 'Sudah Terbayar', '7c44307a66c1458511ca2365db4c07212.jpg'),
(50, 1, 3, '2', 'BCA', 'halo lukman', '2024-11-23', '2024-11-24 06:47:07', '2024-11-24 06:47:07', 'Sudah Terbayar', '7c44307a66c1458511ca2365db4c07213.jpg'),
(51, 1, 6, '2', 'BCA', 'lukan', '2024-11-23', '2024-11-23 14:05:37', '2024-11-23 14:05:37', 'Sudah Terbayar', '7c44307a66c1458511ca2365db4c07214.jpg'),
(52, 1, 6, '8', 'BNI', 'halo semua', '2024-11-23', '2024-11-23 12:49:06', '2024-11-23 12:49:06', 'Proses', '7c44307a66c1458511ca2365db4c07215.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_pethotel`
--

CREATE TABLE `transaction_pethotel` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `date_checkin` date NOT NULL,
  `date_checkout` date NOT NULL,
  `bring_food` tinyint(1) NOT NULL,
  `grooming_id` int(2) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `notes` text NOT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_price` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Belum Terbayar',
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaction_pethotel`
--

INSERT INTO `transaction_pethotel` (`transaction_id`, `user_id`, `id_cat`, `date_checkin`, `date_checkout`, `bring_food`, `grooming_id`, `bank`, `notes`, `transaction_date`, `total_price`, `status`, `image`) VALUES
(8, 1, 7, '2024-11-12', '2024-11-16', 1, 3, 'BRI', 'halos emu perkenalkan nama saya Lukman Agung Prakoso, saya berasal dari manokwari dan saya sekrang tinggal di semrang dan kalian harus tau kalau saya sekerang di semester 9', '2024-11-20 14:06:19', 0, 'Selesai', ''),
(9, 1, 7, '2024-11-13', '2024-11-16', 1, 3, 'BRI', 'lukman agnung prakoso', '2024-11-20 14:06:26', 0, 'Selesai', ''),
(10, 1, 8, '2024-11-18', '2024-11-23', 0, 3, 'BRI', 'lukmn', '2024-11-18 13:54:42', 0, 'Belum Terbayar', ''),
(11, 1, 2, '2024-11-18', '2024-11-20', 0, 1, 'BNI', 'llumna', '2024-11-18 13:52:12', 0, 'Belum Terbayar', ''),
(12, 1, 7, '2024-11-18', '2024-11-21', 0, 0, 'BRI', 'n,,,mn', '2024-11-18 13:38:42', 0, 'Belum Terbayar', ''),
(13, 1, 7, '2024-11-18', '2024-11-21', 0, 0, 'BRI', 'n,,,mn', '2024-11-18 13:38:46', 0, 'Belum Terbayar', ''),
(14, 1, 2, '2024-11-23', '2024-11-21', 0, 3, 'BRI', ' ,bn ', '2024-11-25 06:58:22', 0, 'Selesai', 'unnamed.png'),
(15, 1, 7, '2024-11-20', '2024-11-22', 1, 2, 'BRI', 'halo semua', '2024-11-20 05:58:07', 0, 'Belum Terbayar', ''),
(16, 1, 8, '2024-11-20', '2024-11-22', 1, 0, 'BRI', 'test', '2024-11-20 06:07:25', 0, 'Belum Terbayar', ''),
(17, 1, 8, '2024-11-20', '2024-11-26', 1, 0, 'BRI', 'jangan jangan jangan', '2024-11-20 06:15:32', 0, 'Belum Terbayar', ''),
(18, 1, 8, '2024-11-20', '2024-11-23', 1, 2, 'BRI', 'lajams', '2024-11-20 06:51:27', 0, 'Belum Terbayar', ''),
(19, 1, 7, '2024-11-20', '2024-11-23', 1, 2, 'BRI', 'lukman agun Prakoso', '2024-11-20 14:44:32', 215000, 'Belum Terbayar', ''),
(20, 1, 8, '2024-11-21', '2024-11-23', 1, 3, 'BNI', 'lukman agun prakoso', '2024-11-23 13:22:59', 170000, 'Proses', 'I-Saku.jpg'),
(21, 1, 8, '2024-11-21', '2024-11-23', 1, 3, 'BRI', 'ssds', '2024-11-23 13:21:06', 170000, 'Proses', 'hotel.jpg'),
(22, 1, 8, '2024-11-21', '2024-11-23', 1, 3, 'BRI', 'hala', '2024-11-23 13:20:39', 170000, 'Proses', 'unnamed1.png'),
(23, 1, 8, '2024-11-24', '2024-11-25', 0, 2, 'BRI', 'akjska', '2024-11-24 06:49:31', 180000, 'Sudah Terbayar', '7c44307a66c1458511ca2365db4c07211.jpg'),
(24, 1, 7, '2024-11-23', '2024-11-25', 0, 2, 'BRI', 'Tanggal hari ini', '2024-11-23 10:34:01', 180000, 'Checkin', '7c44307a66c1458511ca2365db4c0721.jpg'),
(25, 1, 8, '2024-11-25', '2024-11-27', 0, 3, 'BCA', 'asasa', '2024-11-25 07:32:20', 180000, 'Proses', 'kucing.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `phone`, `address`, `image`, `role_id`) VALUES
(1, 'Lukman Agung Prakoso', 'lukman@gmail.com', '1234', '0987654321', 'Semarang tengah, Pendrikan kidul, Jalan Magersari, rt.5/rw.5', 'profile_github.jpg', 1),
(2, 'Ika Fauziah', 'ika@gmail.com', '1234', '082248304762', 'Nanjar Negara', 'ika.jpg', 1),
(3, 'ferry', 'firman@gmail.com', '1234', '82248304762', 'Nanjar Negara', '', 1),
(4, 'agung', 'agung@gmail.com', '1234', '82248304762', 'Nanjar Negara', '', 1),
(5, 'zeni', 'zeni@gmial.com', '1234', '82248304762', 'Nanjar Negara', '', 1),
(6, 'jono', 'jono@gmail.com', '1234', '82248304762', 'Nanjar Negara', '', 1),
(8, 'jericho polo', 'jeripolo@gmail.com', '1234', '082248304762', 'Manokwari, Prafi desay sp2, Manokwari, Prafi desay sp2', '', 1),
(14, 'admin', 'admin@gmail.com', '1234', '0987654321', 'Manokwari papua barat', '', 2),
(15, 'Lukman Agung', 'lukman@gmail.com', '1234', '082248304762', 'Manokwari, Prafi desay sp2, Manokwari, Prafi desay sp2', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indeks untuk tabel `service_grooming`
--
ALTER TABLE `service_grooming`
  ADD PRIMARY KEY (`id_grooming`);

--
-- Indeks untuk tabel `transaction_grooming`
--
ALTER TABLE `transaction_grooming`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indeks untuk tabel `transaction_pethotel`
--
ALTER TABLE `transaction_pethotel`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cats`
--
ALTER TABLE `cats`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `service_grooming`
--
ALTER TABLE `service_grooming`
  MODIFY `id_grooming` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `transaction_grooming`
--
ALTER TABLE `transaction_grooming`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `transaction_pethotel`
--
ALTER TABLE `transaction_pethotel`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

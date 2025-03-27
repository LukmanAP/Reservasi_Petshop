-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2025 pada 16.39
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
  `tgl_cat` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `sertivikat` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cats`
--

INSERT INTO `cats` (`cat_id`, `user_id`, `name`, `breed`, `tgl_cat`, `gender`, `sertivikat`, `image`) VALUES
(34, 20, 'kety', 'persia', '2020-12-13', '', '', 'e3aa175ead3fd9064ce4ef128973fd96.jpg'),
(35, 20, 'oyen', 'kucing kampung', '2020-12-12', 'Betina', '', 'a8bbaab18a778f9ea7a9e6e87e358f1b.jpg'),
(36, 21, 'piko', 'kucing kampung', '2020-12-12', 'jantan', '', '8256324f26d68b00563f301052207e88_(1).jpg'),
(37, 21, 'Tio', 'persia', '2020-12-12', 'Betina', '', '524c5f0e4381363793bb7750c0215fef.jpg'),
(38, 22, 'cery', 'persia', '2020-12-12', 'jantan', '', '01hk2b1nynswrjc9x8r3z18gts.jpg'),
(39, 22, 'cimut', 'kucing kampung', '2020-12-12', 'Betina', '', '87e2f0e3ab3a2f719da1ee3db638d71e.jpg'),
(41, 23, 'iin', 'persia', '2020-12-12', 'jantan', '', '72070976c61b94dc2159791686f83153.jpg'),
(42, 23, 'nayah', 'kucing kampung', '2020-12-12', 'jantan', '', 'a8bbaab18a778f9ea7a9e6e87e358f1b1.jpg'),
(43, 24, 'ica', 'kucing kampung', '2020-12-12', 'Betina', '', 'cat-649164_1280.jpg'),
(44, 24, 'mpus', 'kucing kampung', '2020-12-12', 'Betina', '', 'ed3e67284ffd0116f73d52b5ab6056a9.jpg'),
(45, 25, 'ceni', 'kucing kampung', '2020-12-12', 'Betina', '', '688498620p.jpg'),
(46, 25, 'cinta', 'kucing kampung', '2020-12-12', 'Betina', '', 'ed3e67284ffd0116f73d52b5ab6056a91.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_grooming`
--

CREATE TABLE `service_grooming` (
  `id_grooming` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `service_grooming`
--

INSERT INTO `service_grooming` (`id_grooming`, `name`, `description`, `price`, `image`) VALUES
(14, 'Grooming Basic', 'Grooming Basic sudah termasuk dengan Nail Trimming, Ears Claning, Pads Shaved, Brush Out, Bathing, Blow Dry, dan Cologne', 50000, 'cat21.jpg'),
(15, 'Grooming Kutu', 'Grooming Basic + Treatment Kutu', 80000, 'cat11.jpg'),
(16, 'Grooming Jamur', 'Grooming Basic + Treatment Jamur', 80000, 'cat41.jpg'),
(17, 'Grooming Lengkap', 'Grooming Basic + Treatment Kutu & Jamur', 100000, 'cat3.jpg'),
(18, 'Treatment Kutu', 'Mandi dengan shampo anti kutu dan pemberian obat kutu', 40000, 'Treatmenet_Jamur.jpg'),
(19, 'Treatmen Jamur', 'Memandikan dengan shampo khusus dan juga memberi obat anti jamur', 40000, 'Treatment_Kutu.jpg');

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
  `price` int(11) NOT NULL,
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

INSERT INTO `transaction_grooming` (`transaction_id`, `user_id`, `grooming_id`, `id_cat`, `bank`, `price`, `notes`, `date`, `transaction_date`, `payment_due_date`, `status`, `image`) VALUES
(56, 20, 6, '34', 'BRI', 80000, '-', '2025-03-11', '2025-03-11 11:38:04', '2025-03-11 11:38:04', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_02_83b997c5.jpg'),
(57, 21, 2, '36', 'BNI', 80000, '-', '2025-03-06', '2025-03-11 11:32:44', '2025-03-11 11:32:44', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_02_d3868eb3.jpg'),
(58, 22, 3, '38', 'BRI', 80000, '-', '2025-03-06', '2025-03-11 11:32:41', '2025-03-11 11:32:41', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_03_a2c042ad.jpg'),
(59, 23, 1, '41', 'BCA', 80000, '-', '2025-03-11', '2025-03-11 11:37:55', '2025-03-11 11:37:55', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_03_ca71b896.jpg'),
(60, 24, 1, '43', 'BCA', 80000, '-', '2025-03-06', '2025-03-11 11:32:35', '2025-03-11 11:32:35', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_04_cf1a7b12.jpg'),
(61, 25, 3, '45', 'BRI', 80000, '-', '2025-03-11', '2025-03-11 11:37:59', '2025-03-11 11:37:59', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_04_cf1a7b121.jp'),
(62, 20, 3, '34', 'BNI', 80000, '-', '2025-03-07', '2025-03-11 11:32:28', '2025-03-11 11:32:28', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_06_8c665a4a.jpg'),
(63, 20, 1, '35', 'BCA', 80000, '123', '2025-03-12', '2025-03-11 11:32:20', '2025-03-11 11:32:20', 'Selesai', ''),
(67, 20, 6, '34', 'BRI', 50000, '-', '2025-03-18', '2025-03-16 17:18:46', '2025-03-16 17:18:46', 'Sudah Terbayar', 'WhatsApp_Image_2025-03-06_at_11_11_08_c3741ba9.jpg'),
(68, 20, 2, '34', 'BCA', 80000, '-', '2025-03-20', '2025-03-15 11:09:39', '2025-03-16 11:09:39', 'Belum Terbayar', ''),
(69, 20, 2, '34', 'BCA', 80000, '-', '2025-03-18', '2025-03-15 17:11:53', '2025-03-15 11:20:04', 'Belum Terbayar', ''),
(70, 20, 2, '35', 'BNI', 80000, '-', '2025-03-19', '2025-03-15 18:12:28', '2025-03-15 18:12:28', 'Proses', 'WhatsApp_Image_2025-03-06_at_11_11_06_f91e2ad3.jpg'),
(71, 20, 6, '34', 'BNI', 50000, '-', '2025-03-17', '2025-03-16 09:47:54', '2025-03-17 09:47:54', 'Belum Terbayar', ''),
(72, 20, 14, '34', 'BNI', 50000, '-', '2025-03-22', '2025-03-21 14:51:52', '2025-03-21 14:51:52', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_06_f91e2ad31.jp'),
(73, 20, 14, '35', 'BRI', 50000, '-', '2025-03-22', '2025-03-21 14:51:53', '2025-03-21 14:51:53', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_04_cf1a7b122.jp'),
(74, 20, 14, '34', 'BRI', 50000, '-', '2025-03-23', '2025-03-21 14:51:53', '2025-03-21 14:51:53', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_05_5301caea.jpg'),
(75, 20, 14, '34', 'BRI', 50000, '-', '2025-03-27', '2025-03-27 13:58:56', '2025-03-27 13:58:56', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_09_2afe456f.jpg'),
(76, 21, 15, '37', 'BNI', 80000, '-', '2025-03-28', '2025-03-27 13:59:21', '2025-03-27 13:59:21', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_09_d4c76b22.jpg'),
(77, 22, 16, '39', 'BNI', 80000, '-', '2025-03-31', '2025-03-27 13:59:19', '2025-03-27 13:59:19', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_04_9de82318.jpg'),
(78, 22, 18, '38', 'BRI', 40000, '-', '2025-03-27', '2025-03-27 13:58:54', '2025-03-27 13:58:54', 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_09_2afe456f1.jp');

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
(31, 20, 35, '2025-03-12', '2025-03-12', 1, 3, 'BRI', '-', '2025-03-11 17:27:30', 170000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_02_c9d29bf0.jpg'),
(32, 21, 37, '2025-03-12', '2025-03-12', 0, 0, 'BNI', '-', '2025-03-11 17:27:33', 100000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_03_9d5a8a7b.jpg'),
(33, 22, 39, '2025-03-12', '2025-03-12', 1, 3, 'BRI', '-', '2025-03-11 17:27:39', 170000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_03_b6e1072f.jpg'),
(34, 23, 42, '2025-03-11', '2025-03-11', 0, 3, 'BCA', '-', '2025-03-11 17:27:57', 280000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_04_9de82318.jpg'),
(35, 24, 44, '2025-03-11', '2025-03-11', 1, 2, 'BRI', '-', '2025-03-11 17:28:12', 395000, 'Selesai', 'e3aa175ead3fd9064ce4ef128973fd96.jpg'),
(36, 25, 46, '2025-03-06', '2025-03-15', 1, 6, 'BCA', '-', '2025-03-10 15:58:14', 455000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_04_d94cf7b1.jpg'),
(37, 20, 35, '2025-03-06', '2025-03-08', 0, 3, 'BRI', '-', '2025-03-10 15:58:19', 180000, 'Selesai', ''),
(38, 20, 35, '2025-03-18', '2025-03-21', 1, 2, 'BRI', '-', '2025-03-27 14:01:16', 215000, 'Sudah Terbayar', 'WhatsApp_Image_2025-03-06_at_11_11_06_8c665a4a1.jp'),
(39, 20, 34, '2025-03-18', '2025-03-21', 1, 6, 'BNI', '-', '2025-03-18 15:36:36', 185000, 'Sudah Terbayar', 'WhatsApp_Image_2025-03-06_at_11_11_08_c3741ba9.jpg'),
(40, 20, 35, '2025-03-18', '2025-03-21', 1, 7, 'BRI', '-', '2025-03-27 14:13:13', 185000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_07_df8dfa90.jpg'),
(41, 20, 35, '2025-03-18', '2025-03-21', 0, 0, 'BNI', '12', '2025-03-27 14:13:14', 150000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_09_d4c76b22.jpg'),
(42, 20, 35, '2025-03-18', '2025-03-21', 0, 0, 'BNI', '1', '2025-03-19 18:24:44', 150000, 'Sudah Terbayar', 'WhatsApp_Image_2025-03-06_at_11_11_09_d4c76b221.jp'),
(43, 20, 34, '2025-03-20', '2025-03-22', 1, 0, 'BRI', '1234', '2025-03-19 18:24:28', 90000, 'Sudah Terbayar', 'WhatsApp_Image_2025-03-06_at_11_11_09_d4c76b222.jp'),
(44, 20, 35, '2025-03-20', '2025-03-25', 0, 2, 'BRI', '12', '2025-03-27 14:07:29', 330000, 'Sudah Terbayar', 'WhatsApp_Image_2025-03-06_at_11_11_06_8c665a4a.jpg'),
(45, 20, 35, '2025-03-21', '2025-03-24', 0, 3, 'BRI', '1234', '2025-03-19 18:26:18', 230000, 'Sudah Terbayar', 'WhatsApp_Image_2025-03-06_at_11_11_02_c9d29bf01.jp'),
(46, 20, 34, '2025-03-23', '2025-03-25', 1, 14, 'BNI', '1', '2025-03-27 14:01:20', 140000, 'Sudah Terbayar', 'WhatsApp_Image_2025-03-06_at_11_11_09_d4c76b223.jp'),
(47, 20, 35, '2025-03-27', '2025-03-29', 1, 15, 'BRI', '-', '2025-03-27 13:50:48', 170000, 'Belum Terbayar', ''),
(48, 21, 36, '2025-03-27', '2025-03-31', 1, 18, 'BRI', '-', '2025-03-27 13:52:13', 220000, 'Belum Terbayar', ''),
(49, 25, 46, '2025-03-27', '2025-03-29', 0, 15, 'BRI', '-', '2025-03-27 14:13:15', 180000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_10_11a2255f.jpg'),
(50, 25, 45, '2025-03-27', '2025-03-31', 1, 18, 'BNI', '-', '2025-03-27 14:13:16', 220000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_08_c24e18dd.jpg'),
(51, 24, 43, '2025-03-27', '2025-03-31', 0, 15, 'BRI', '-', '2025-03-27 14:13:17', 280000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_02_d3868eb3.jpg'),
(52, 24, 44, '2025-03-27', '2025-04-03', 1, 17, 'BRI', '-', '2025-03-27 14:13:18', 415000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_03_ca71b896.jpg'),
(53, 23, 41, '2025-03-27', '2025-04-05', 0, 16, 'BNI', '-', '2025-03-27 14:13:20', 530000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_08_c24e18dd1.jp'),
(54, 23, 42, '2025-03-27', '2025-03-29', 0, 17, 'BNI', '-', '2025-03-27 14:13:21', 200000, 'Selesai', 'WhatsApp_Image_2025-03-06_at_11_11_09_d4c76b224.jp');

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
(18, 'admin', 'admin@gmail.com', '1234', '0987654321', 'Semarang, pendrikan Kidul', '', 2),
(20, 'Lukman Agung', 'lukman@gmail.com', '1234', '082248304762', 'Semarang, Semarang Tengah, pendrikan kidul', 'WhatsApp_Image_2025-03-06_at_02_33_32_499d3d15.jpg', 1),
(21, 'fery firman', 'firman@gmail.com', '1234', '0987654345', 'kendal seatan', '', 1),
(22, 'jericho', 'jeri@gmail.com', '1234', '0987654322', 'Banjar Negara', '', 1),
(23, 'inayah', 'inayah@gmail.com', '1234', '0987654345', 'Demak', '', 1),
(24, 'Ika Fauziah', 'ika@gmail.com', '1234', '0987654322', 'Banjar negara Kulon', '', 1),
(25, 'zeni', 'zeni@gmail.com', '1234', '086543357754', 'Demak Ngidul', '', 1),
(26, 'toli', 'toli@gmail.com', '1234', '098765432345', 'kendal', '', 1);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `service_grooming`
--
ALTER TABLE `service_grooming`
  MODIFY `id_grooming` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `transaction_grooming`
--
ALTER TABLE `transaction_grooming`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `transaction_pethotel`
--
ALTER TABLE `transaction_pethotel`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

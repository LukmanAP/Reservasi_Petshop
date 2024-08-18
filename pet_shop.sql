-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2024 pada 21.05
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
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cats`
--

INSERT INTO `cats` (`cat_id`, `user_id`, `name`, `breed`, `age`, `gender`, `image`) VALUES
(1, 1, 'joko', 'persia', 2, 'jantan', 'kucing.jpg'),
(2, 1, 'oyen', 'persia', 1, 'betina', 'kucing.jpg'),
(3, 2, 'empus', 'persia', 2, 'jantan', 'kucing.jpg'),
(4, 2, 'stefen', 'persia', 1, 'betina', 'kucing.jpg'),
(5, 2, 'hitam', 'persia', 2, 'jantan', 'kucing.jpg');

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
(1, 'Grooming - Basic', 'grooming Basic\r\n. Memandikan\r\n. memotong kuku\r\n. membersihkan telinga', 50000, 'kucing1.jpg'),
(2, 'Grooming - Kutu', 'Grooming - kutu\r\n. memandikan\r\n. potong kuku\r\n. bersihkan teling\r\n. perawatan kutu', 70000, 'kucing2.jpg'),
(3, 'Grooming - Jamur', 'Grooming - Jamur\r\n. memandikan\r\n. potong kuku\r\n. bersihkan teling\r\n. Perawatan Jamur', 70000, 'kucing1.jpg'),
(4, 'Grooming - Basic', 'groming semua kucing bisa di cuci di sini', 50000, 'kucing2.jpg'),
(5, 'Grooming - Jamur', 'Semua kucing bisa mati disini', 100000, 'kucing1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_grooming`
--

CREATE TABLE `transaction_grooming` (
  `transaction_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `grooming_id` int(3) NOT NULL,
  `id_cat` varchar(10) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `date` date NOT NULL,
  `transaction_date` date NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaction_grooming`
--

INSERT INTO `transaction_grooming` (`transaction_id`, `user_id`, `grooming_id`, `id_cat`, `bank`, `notes`, `date`, `transaction_date`, `image`) VALUES
(5, 1, 1, '1', '', 'swwe', '2024-08-20', '2024-08-18', ''),
(6, 1, 1, '2', '', 'swweghggv', '2024-08-19', '2024-08-18', ''),
(7, 1, 1, '2', 'BCA', 'jangan di mandikan', '2024-08-19', '2024-08-18', ''),
(8, 1, 2, '5', 'BCA', 'jangan di mandiknan', '2024-08-19', '2024-08-18', ''),
(9, 2, 1, '5', 'BCA', 'mbkb', '2024-08-20', '2024-08-18', ''),
(10, 2, 2, '4', 'BRI', 'lknddjn', '2024-08-21', '2024-08-18', ''),
(11, 2, 3, '4', 'BRI', 'ksabjsbds', '2024-08-23', '2024-08-18', '');

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
(1, 'Lukman Agung Prakoso', 'lukman@gmail.com', '1234', '0987654321', 'Semarang tengah, Pendrikan kidul, Jalan Magersari, rt.5/rw.5', 'lukman.jpg', 1),
(2, 'Ika Fauziah', 'ika@gmail.com', '1234', '082248304762', 'Nanjar Negara', 'ika.jpg', 1),
(3, 'ferry', 'firman@gmail.com', '1234', '82248304762', 'Nanjar Negara', '', 1),
(4, 'agung', 'agung@gmail.com', '1234', '82248304762', 'Nanjar Negara', '', 1),
(5, 'zeni', 'zeni@gmial.com', '1234', '82248304762', 'Nanjar Negara', '', 1),
(6, 'jono', 'jono@gmail.com', '1234', '82248304762', 'Nanjar Negara', '', 1);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `service_grooming`
--
ALTER TABLE `service_grooming`
  MODIFY `id_grooming` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaction_grooming`
--
ALTER TABLE `transaction_grooming`
  MODIFY `transaction_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

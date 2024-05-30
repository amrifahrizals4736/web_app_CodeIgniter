-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2024 pada 16.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rps`
--

CREATE TABLE `rps` (
  `id` int(11) NOT NULL,
  `norps` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `matakuliah` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL,
  `nikdosen` int(11) NOT NULL,
  `disusun` date NOT NULL,
  `berlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rps`
--

INSERT INTO `rps` (`id`, `norps`, `prodi`, `kode`, `matakuliah`, `dosen`, `nikdosen`, `disusun`, `berlaku`) VALUES
(1, 'RPS-122', 'D3 Teknik Informatika', 'DT170', 'Perancangan Web 2', 'Firman Asharudin, M.Kom, S.Kom', 1998, '2024-01-09', '2024-02-01'),
(25, 'RPS-132', 'D3 Teknik Informatika', 'DT152', 'Struktur Data', 'Ahlihi Masruro, M.Kom', 2000, '2024-01-09', '2024-02-01'),
(28, 'RPS-142', 'D3 Teknik Informatika', 'DT032', 'Metodologi Penelitian', 'Ainul Yaqin, M.Kom', 2001, '2024-01-10', '2024-02-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE `table_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_akses` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_akses`, `user_status`) VALUES
(0, 'Amri Fahrizal Shiddiq', 'admin@email.com', '58acb7acccce58ffa8b953b12b5a7702bd42dae441c1ad85057fa70b', 1, 1),
(0, 'Amri Fahrizal', 'dosen@email.com', '57a44514f5c5149d6bb6346966d70a73bb1618a6899c97bf841d33a5', 2, 1),
(0, 'Amri', 'mahasiswa@email.com', 'b2b0d7f03aeb6a8bd1922d857473737660745767a77b52edcfe2409a', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rps`
--
ALTER TABLE `rps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rps`
--
ALTER TABLE `rps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

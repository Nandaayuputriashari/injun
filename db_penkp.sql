-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2022 pada 14.06
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penkp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendkp`
--

CREATE TABLE `tb_pendkp` (
  `id` int(20) NOT NULL,
  `tempt_kp` varchar(45) NOT NULL,
  `alamt_kp` varchar(45) NOT NULL,
  `tanggl_mulai` date NOT NULL,
  `tanggl_selesai` date NOT NULL,
  `propsl` varchar(45) NOT NULL,
  `anggta_kelompok` varchar(45) NOT NULL,
  `dosen` varchar(45) NOT NULL,
  `verified` varchar(45) NOT NULL,
  `perusahaan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendkp`
--

INSERT INTO `tb_pendkp` (`id`, `tempt_kp`, `alamt_kp`, `tanggl_mulai`, `tanggl_selesai`, `propsl`, `anggta_kelompok`, `dosen`, `verified`, `perusahaan`) VALUES
(1098, 'Politeknik Negeri Banyuwangi', 'Jalan Raya jember No.KM13 Labanasem', '2022-08-17', '2022-08-19', '', '6', 'Lutfi Hakim S.Pd.,M.T', 'disetujui', '-'),
(1109, 'Politeknik Negeri Banyuwangi', 'Jalan Raya jember No.KM13 Labanasem', '2022-08-17', '2022-08-19', '-', '5', 'Lutfi Hakim S.Pd.,M.T', 'disetujui', '-'),
(1114, 'Politeknik Negeri Banyuwangi', 'Jalan Raya jember No.KM13 Labanasem', '2022-08-15', '2022-08-17', '', '5', 'Lutfi Hakim S.Pd.,M.T', 'disetujui', '-'),
(1116, 'Politeknik Negeri Banyuwangi', 'Jalan Raya jember No.KM13 Labanasem', '2022-08-17', '2022-08-19', '', '6', 'Lutfi Hakim S.Pd.,M.T', 'disetujui', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pendkp`
--
ALTER TABLE `tb_pendkp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pendkp`
--
ALTER TABLE `tb_pendkp`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

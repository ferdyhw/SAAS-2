-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2020 pada 08.37
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saas_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `kehadiran` enum('hadir','alpa','izin','sakit') NOT NULL,
  `keterangan` text NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absen`, `nama`, `nis`, `tanggal`, `kehadiran`, `keterangan`, `id_siswa`) VALUES
(1, 'ADELIA PUSPITA ', '181113928	', '2020-05-10', 'sakit', 'batuk', 1),
(2, 'ADELIA PUSPITA ', '181113928	', '2020-05-11', 'hadir', '', 1),
(3, 'ANDI RAMLI HIDAYAT', '181113929', '2020-05-10', 'izin', '', 2),
(4, 'FERDY HENDRIAWAN ', '181113941', '2020-05-10', 'hadir', '', 13),
(5, 'FERDY HENDRIAWAN ', '181113941', '2020-05-11', 'sakit', 'batuk', 13),
(6, 'ANGGITA AULIA ', '181113930', '2020-05-10', 'izin', 'aja', 3),
(7, 'ANDI RAMLI HIDAYAT', '181113929', '2020-05-09', 'alpa', '', 2),
(8, 'FATHUR RIZQI ZIDAN AL-AKBAR ', '181113937', '2020-05-10', 'hadir', '', 10),
(9, 'MUHAMMAD RAIHAN PRATAMA ', '181113952', '2020-05-10', 'izin', 'pergi', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_absen`
--

CREATE TABLE `t_absen` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `kelas` enum('XI - SIJA A','XI - SIJA B') NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_absen`
--

INSERT INTO `t_absen` (`id_siswa`, `nama`, `nis`, `kelas`, `jenis_kelamin`) VALUES
(1, 'ADELIA PUSPITA ', '181113928', 'XI - SIJA B', 'P'),
(2, 'ANDI RAMLI HIDAYAT\r\n', '181113929', 'XI - SIJA B', 'L'),
(3, 'ANGGITA AULIA \r\n', '181113930', 'XI - SIJA B', 'P'),
(4, 'AZRIEL RAMADHAN\r\n', '181113931', 'XI - SIJA B', 'L'),
(5, 'CHES BELLA VALENTINA \r\n', '181113932', 'XI - SIJA B', 'P'),
(6, 'DESTIANDIRA RAKHADIAN\r\n', '181113933', 'XI - SIJA B', 'P'),
(7, 'DESWITA TRIANI', '181113934', 'XI - SIJA B', 'P'),
(8, 'DEVINA DWIYANTI', '181113935', 'XI - SIJA B', 'P'),
(9, 'EVA NUR HIDAYAH', '181113936', 'XI - SIJA B', 'P'),
(10, 'FATHUR RIZQI ZIDAN AL-AKBAR ', '181113937', 'XI - SIJA B', 'L'),
(11, 'FAUZAN ANWAR PRATAMA ', '181113938', 'XI - SIJA B', 'L'),
(12, 'FAVIAN AHZA PUTRA SOBAR', '181113939', 'XI - SIJA B', 'L'),
(13, 'FERDY HENDRIAWAN ', '181113941', 'XI - SIJA B', 'L'),
(14, 'FIKRIE WIDIHANTORO', '181113942', 'XI - SIJA B', 'L'),
(15, 'HERLINA OCTAVIANI', '181113943', 'XI - SIJA B', 'P'),
(16, 'IBNU FAHRAN RAMADHAN', '181113944', 'XI - SIJA B', 'L'),
(17, 'ILHAM ARYSANDI MAULANA', '181113945', 'XI - SIJA B', 'L'),
(18, 'INDRIAN SUKSES LUMBAN TORUAN ', '181113946', 'XI - SIJA B', 'L'),
(19, 'KIAGUS MUHAMMAD NAUFAL FIKRI ', '181113947', 'XI - SIJA B', 'L'),
(20, 'MOCHAMAD ALDDY FEBRIANSYAH', '181113948', 'XI - SIJA B', 'L'),
(21, 'MOCHAMAD FATHUR RABBANI', '181113949', 'XI - SIJA B', 'L'),
(22, 'MOCHAMAD HILMAN FAHMI ', '181113950', 'XI - SIJA B', 'L'),
(23, 'MUHAMMAD RAIHAN PRATAMA ', '181113952', 'XI - SIJA B', 'L'),
(24, 'MUHAMMAD SYAMSUL ARFAN ', '181113953', 'XI - SIJA B', 'L'),
(25, 'NOVAL WISNU ROMADHON ', '181113954', 'XI - SIJA B', 'L'),
(26, 'PAJRI ZAHRAWAANI AHMAD', '181113955', 'XI - SIJA B', 'L'),
(27, 'PUTRI CHAHYA ZAHRANI ', '181113956', 'XI - SIJA B', 'P'),
(28, 'RAGAN SEPTAYUDA LESMANA ', '181113957', 'XI - SIJA B', 'L'),
(29, 'REGY KURNIA SAPUTRA', '181113958', 'XI - SIJA B', 'L'),
(30, 'RIZKI SAIFUL ASLIHU ', '181113959', 'XI - SIJA B', 'L'),
(31, 'WINDA NUR WULANDARI', '181113960', 'XI - SIJA B', 'P'),
(32, 'YOGA ADI PUTRA ', '181113961', 'XI - SIJA B', 'L'),
(33, 'YULIA NUR AZIZAH', '181113962', 'XI - SIJA B', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `kelas` enum('XI - SIJA A','XI - SIJA B') NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `bio` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `nip`, `nis`, `kelas`, `gambar`, `bio`, `role_id`, `tanggal`) VALUES
(16, 'Ferdy Hendriawan', 'ferdyhwn@gmail.com', '$2y$10$XH/LBrGN6nCT3r75hFvgS./ltuqxkUU38Y7Fm2zhkMAeohbByLnCK', '', '181113941', 'XI - SIJA B', 'IMG_20190404_193802.jpg', 'HELLO WORLD !!!', 4, '2020-04-16'),
(18, 'Administator', 'root@root.id', '$2y$10$bvIYXquvXK4Y28RnsG5wfunPYkBSIwZIoBgbAk4y3Z3FkW9FHOh1C', '', '', 'XI - SIJA B', 'download_(1).png', 'Katya Cantik >///< !', 1, '2020-04-16'),
(19, 'Andi Ramli', 'andiramli@gmail.com', '$2y$10$zgbVCP66Zv7ogNaVzjELQ.zqNKzCMmeFXDbc3no7tpkWOuVuJftdi', '', '181113929', 'XI - SIJA B', 'default.jpg', '', 3, '2020-04-17'),
(24, 'Sriyulianti, S.Pd., M.Pd.', 'mrsyanti@gmail.com', '$2y$10$J/ZzXjD4TVOsRHJ3/C7JvuL.gev3M/XOVhKG7VtQ0hMB1yEo5UKD2', '000000000', '', 'XI - SIJA B', 'default.jpg', '', 2, '2020-04-17'),
(25, 'Fathur Rizky', 'fathur@gmail.com', '$2y$10$GaCVHg/9oQ.29qTsvcZTRuR2WQ41OEBSneo6pxi7Cg9Da.WN2jNSa', '', '181113937', 'XI - SIJA B', 'default.jpg', '', 4, '2020-04-21'),
(26, 'M. Raihan Pratama', 'raihan@gmail.com', '$2y$10$luKg3ttmaKcutORWb07/8OvQSU6EAPpiPQtlhvLQJuUX9W1Kv6Wym', '', '181113952', 'XI - SIJA B', 'default.jpg', '\r\n', 4, '2020-04-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Guru'),
(3, 'Seksi Absensi'),
(4, 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `t_absen`
--
ALTER TABLE `t_absen`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `t_absen`
--
ALTER TABLE `t_absen`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

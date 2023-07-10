-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2023 at 11:14 AM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuswandy_19630317`
--

-- --------------------------------------------------------

--
-- Table structure for table `de_kk`
--

CREATE TABLE `de_kk` (
  `id_de_kk` int NOT NULL,
  `id_kk` int NOT NULL,
  `id_penduduk` int NOT NULL,
  `status` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at_de` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `de_kk`
--

INSERT INTO `de_kk` (`id_de_kk`, `id_kk`, `id_penduduk`, `status`, `created_at_de`) VALUES
(46, 5, 10, '', '2023-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `id_kk` int NOT NULL,
  `no_kk` varchar(225) NOT NULL,
  `alamat_kk` varchar(225) NOT NULL,
  `rtrw_kk` varchar(225) NOT NULL,
  `desa_kk` varchar(225) NOT NULL,
  `kecamatan_kk` varchar(225) NOT NULL,
  `kabupaten_kk` varchar(225) NOT NULL,
  `kdpos_kk` varchar(225) NOT NULL,
  `provinsi_kk` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at_kk` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id_kk`, `no_kk`, `alamat_kk`, `rtrw_kk`, `desa_kk`, `kecamatan_kk`, `kabupaten_kk`, `kdpos_kk`, `provinsi_kk`, `created_at_kk`) VALUES
(5, '3213112221312312312', 'JL Batu Aren', 'Rt 12 Rw 02', 'Guntung Manggis', 'Landasan ulin', 'banjarbaru', '70721', 'kalimantan selatan', '2023-06-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int NOT NULL,
  `nik_penduduk` varchar(225) NOT NULL,
  `nama_penduduk` varchar(225) NOT NULL,
  `tempat_lahir_penduduk` varchar(225) NOT NULL,
  `tgl_lahir_penduduk` date NOT NULL,
  `jenis_kelamin_penduduk` varchar(225) NOT NULL,
  `agama_penduduk` varchar(225) NOT NULL,
  `pekerjaan_penduduk` varchar(225) NOT NULL,
  `alamat_penduduk` varchar(225) NOT NULL,
  `status_perkawinan_penduduk` varchar(225) NOT NULL,
  `email_penduduk` varchar(225) NOT NULL,
  `no_telp_penduduk` varchar(225) NOT NULL,
  `foto_penduduk` text NOT NULL,
  `slug` varchar(225) NOT NULL,
  `created_at_penduduk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik_penduduk`, `nama_penduduk`, `tempat_lahir_penduduk`, `tgl_lahir_penduduk`, `jenis_kelamin_penduduk`, `agama_penduduk`, `pekerjaan_penduduk`, `alamat_penduduk`, `status_perkawinan_penduduk`, `email_penduduk`, `no_telp_penduduk`, `foto_penduduk`, `slug`, `created_at_penduduk`) VALUES
(10, '31231231231', 'Budi ardi', 'Banjarnegara', '2023-06-09', 'Perempuan', 'Islam', 'Kuli', 'JL ngkasa menuju ke bumi', 'Sudah Menikah', 'mail@gmail.com', '09342342342342', '31231231231_budi-ardi.jpg', '31231231231_budi-ardi', NULL),
(11, '91291291323123', 'Bima Akhrya', 'Banjarbaru', '2023-06-09', 'Laki-Laki', 'Islam', 'Programer', 'JL Batu Aren', 'Lajang', 'mail@gmail.com', '080098001231', '91291291323123_bima-akhrya.jpeg', '91291291323123_bima-akhrya', '2023-06-09'),
(14, '29312391239193', 'Malik ikthar', 'Banjarabaru', '2023-06-03', 'Laki-Laki', 'Islam', 'Programer', 'JL Batu Aren', 'Lajang', 'mail@gmail.com', '080098001231', '29312391239193_malik-ikthar.png', '29312391239193_malik-ikthar', '2023-06-15'),
(16, '29312351219193', 'Musang', 'Banjarabaru', '2023-06-21', 'Perempuan', 'Islam', 'Programer', 'JL Batu Aren', 'Lajang', 'mail@gmail.com', '09342342342342', '29312351219193_musang.jpg', '29312351219193_musang', '2023-06-21'),
(17, '19920201912912', 'Dimas', 'Banjarabaru', '2006-06-23', 'Laki-Laki', 'Islam', 'Koding', 'JL ngkasa menuju ke bumi', 'Lajang', 'mail@gmail.com', '085156283603', '19920201912912_dimas.png', '19920201912912_dimas', '2023-06-23'),
(18, '2019229292929292', 'Rastia', 'Banjarabaru', '2023-06-23', 'Laki-Laki', 'Islam', 'Bengkel', 'jl ngkasa menuju ke bumi', 'Lajang', 'mail@gmail.com', '20021', '2019229292929292_rastia.jpg', '2019229292929292_rastia', '2023-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `skdatang`
--

CREATE TABLE `skdatang` (
  `id_skdatang` int NOT NULL,
  `id_penduduk` int NOT NULL,
  `surat_datang` text COLLATE utf8mb4_general_ci NOT NULL,
  `ktp_datang` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skkelahiran`
--

CREATE TABLE `skkelahiran` (
  `id_skkelahiran` int NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(225) NOT NULL,
  `nama_anak` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `id_ayah` int DEFAULT NULL,
  `id_ibu` int DEFAULT NULL,
  `anak_ke` int NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `skkelahiran`
--

INSERT INTO `skkelahiran` (`id_skkelahiran`, `no_surat`, `tanggal`, `tempat`, `nama_anak`, `jenis_kelamin`, `id_ayah`, `id_ibu`, `anak_ke`, `alamat`, `created_at`) VALUES
(17, 'SK/01/Bjb/2023', '2023-06-21', 'RS Medika', 'Adinda Surya Alwadiyah Mudianti', 'Laki-laki', 11, 10, 1, 'JL Batu Aren', '2023-06-21 05:09:58'),
(18, 'SKK/02/BJB/2023', '2023-06-22', 'RS Medika', 'Abdulah Malik', 'Laki-laki', 14, 16, 1, 'JL ngkasa menuju ke bumi', '2023-06-22 02:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `skkematian`
--

CREATE TABLE `skkematian` (
  `id_skkematian` int NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int NOT NULL,
  `hari` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `sebab` varchar(225) NOT NULL,
  `tempat` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `skkematian`
--

INSERT INTO `skkematian` (`id_skkematian`, `no_surat`, `id_penduduk`, `hari`, `tanggal`, `sebab`, `tempat`, `created_at`) VALUES
(2, 'SKM/01/BJB/2023', 10, 'Senin', '2023-06-22', 'Kena Santet', 'Jl Gotongroyong (Rumah)', '2023-06-22 04:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `skkk`
--

CREATE TABLE `skkk` (
  `id_skkk` int NOT NULL,
  `no_surat_skk` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_penduduk` int NOT NULL,
  `keperluan_skk` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at_skk` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `skkk`
--

INSERT INTO `skkk` (`id_skkk`, `no_surat_skk`, `id_penduduk`, `keperluan_skk`, `created_at_skk`) VALUES
(2, 'SPKK/09/JUN/2024', 10, 'Penambahan anggota keluarga', '2023-06-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `skktp`
--

CREATE TABLE `skktp` (
  `id_skktp` int NOT NULL,
  `no_surat_ktp` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_penduduk` int NOT NULL,
  `keperluan_ktp` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at_ktp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `skktp`
--

INSERT INTO `skktp` (`id_skktp`, `no_surat_ktp`, `id_penduduk`, `keperluan_ktp`, `created_at_ktp`) VALUES
(5, 'SKKTP/01/Banjarbaru/2023', 10, 'Pembuatan KTP', '2023-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `skpindah`
--

CREATE TABLE `skpindah` (
  `id_skpindah` int NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int NOT NULL,
  `pindah_dari` varchar(225) NOT NULL,
  `alasan_pindah` varchar(225) NOT NULL,
  `alamat_baru` varchar(225) NOT NULL,
  `keluarga_ikut` int NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `skpindah`
--

INSERT INTO `skpindah` (`id_skpindah`, `no_surat`, `id_penduduk`, `pindah_dari`, `alasan_pindah`, `alamat_baru`, `keluarga_ikut`, `created_at`) VALUES
(2, 'PIN/01/BJB/2023', 10, 'JL Guntung Manggis Rt 13 Rw 02', 'Pekerjaan ', 'Jl Batu Rt 11 Rw 01, Malang', 2, '2023-07-03 02:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `sktidakmampu`
--

CREATE TABLE `sktidakmampu` (
  `id_sktidakmampu` int NOT NULL,
  `no_surat` int NOT NULL,
  `id_keluarga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `skusaha`
--

CREATE TABLE `skusaha` (
  `id_surat` int NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int NOT NULL,
  `nama_usaha` varchar(225) NOT NULL,
  `jenis_usaha` varchar(225) NOT NULL,
  `alamat_usaha` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama_user` varchar(225) NOT NULL,
  `role` int NOT NULL,
  `foto_user` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `username_user` varchar(225) NOT NULL,
  `password_user` varchar(225) NOT NULL,
  `salt` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `role`, `foto_user`, `username_user`, `password_user`, `salt`) VALUES
(1, 'Admin', 1, NULL, 'User', '1', ''),
(8, 'admin', 1, NULL, 'admin', '0192023a7bbd73250516f069df18b50064803f79a53895.71942189', '64803f79a53895.71942189'),
(9, 'Andriyan', 1, NULL, 'anderi77', '5d2cec861740461222c107900c54fd776480477a039209.88074506', '6480477a039209.88074506');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `de_kk`
--
ALTER TABLE `de_kk`
  ADD PRIMARY KEY (`id_de_kk`),
  ADD KEY `id_kk` (`id_kk`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD UNIQUE KEY `nik_penduduk` (`nik_penduduk`);

--
-- Indexes for table `skdatang`
--
ALTER TABLE `skdatang`
  ADD PRIMARY KEY (`id_skdatang`);

--
-- Indexes for table `skkelahiran`
--
ALTER TABLE `skkelahiran`
  ADD PRIMARY KEY (`id_skkelahiran`),
  ADD KEY `id_ayah` (`id_ayah`),
  ADD KEY `id_ibu` (`id_ibu`);

--
-- Indexes for table `skkematian`
--
ALTER TABLE `skkematian`
  ADD PRIMARY KEY (`id_skkematian`),
  ADD UNIQUE KEY `id_penduduk` (`id_penduduk`) USING BTREE;

--
-- Indexes for table `skkk`
--
ALTER TABLE `skkk`
  ADD PRIMARY KEY (`id_skkk`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `skktp`
--
ALTER TABLE `skktp`
  ADD PRIMARY KEY (`id_skktp`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `skpindah`
--
ALTER TABLE `skpindah`
  ADD PRIMARY KEY (`id_skpindah`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `sktidakmampu`
--
ALTER TABLE `sktidakmampu`
  ADD PRIMARY KEY (`id_sktidakmampu`);

--
-- Indexes for table `skusaha`
--
ALTER TABLE `skusaha`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `de_kk`
--
ALTER TABLE `de_kk`
  MODIFY `id_de_kk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `id_kk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `skdatang`
--
ALTER TABLE `skdatang`
  MODIFY `id_skdatang` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skkelahiran`
--
ALTER TABLE `skkelahiran`
  MODIFY `id_skkelahiran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `skkematian`
--
ALTER TABLE `skkematian`
  MODIFY `id_skkematian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skkk`
--
ALTER TABLE `skkk`
  MODIFY `id_skkk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skktp`
--
ALTER TABLE `skktp`
  MODIFY `id_skktp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skpindah`
--
ALTER TABLE `skpindah`
  MODIFY `id_skpindah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sktidakmampu`
--
ALTER TABLE `sktidakmampu`
  MODIFY `id_sktidakmampu` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skusaha`
--
ALTER TABLE `skusaha`
  MODIFY `id_surat` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `de_kk`
--
ALTER TABLE `de_kk`
  ADD CONSTRAINT `de_kk_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `de_kk_ibfk_2` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skkelahiran`
--
ALTER TABLE `skkelahiran`
  ADD CONSTRAINT `skkelahiran_ibfk_1` FOREIGN KEY (`id_ayah`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skkelahiran_ibfk_2` FOREIGN KEY (`id_ibu`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skkematian`
--
ALTER TABLE `skkematian`
  ADD CONSTRAINT `skkematian_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skkk`
--
ALTER TABLE `skkk`
  ADD CONSTRAINT `skkk_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skktp`
--
ALTER TABLE `skktp`
  ADD CONSTRAINT `skktp_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skpindah`
--
ALTER TABLE `skpindah`
  ADD CONSTRAINT `skpindah_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skusaha`
--
ALTER TABLE `skusaha`
  ADD CONSTRAINT `skusaha_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

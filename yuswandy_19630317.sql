-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2023 at 04:14 PM
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
-- Table structure for table `de_ahliwaris`
--

CREATE TABLE `de_ahliwaris` (
  `id_de_ahliwaris` int NOT NULL,
  `id_skahliwaris` int NOT NULL,
  `id_penduduk` int NOT NULL,
  `hubungan` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(20, '3326160608070197', 'Malik ikthar', 'Banjarabaru', '1997-07-17', 'Laki-Laki', 'Islam', 'Programer', 'JL Batu Aren', 'Lajang', 'mail@gmail.com', '+62 872-5254-875', '3326160608070197_malik-ikthar.jpg', '3326160608070197_malik-ikthar', '2023-07-17'),
(21, '3326160902090003', 'Bima Akhrya', 'Banjarabaru', '1974-07-18', 'Laki-Laki', 'Islam', 'Tukang  bikin rujak', 'JL ngkasa menuju ke bumi', 'Lajang', 'mail@gmail.com', '+62 881-709-712', '3326160902090003_bima-akhrya.jpg', '3326160902090003_bima-akhrya', '2023-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `skahliwaris`
--

CREATE TABLE `skahliwaris` (
  `id_skahliwaris` int NOT NULL,
  `id_skkematian` int NOT NULL,
  `no_surat` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skdatang`
--

CREATE TABLE `skdatang` (
  `id_skdatang` int NOT NULL,
  `id_penduduk` int NOT NULL,
  `no_surat` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_asal` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `alasan_pindah` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `surat_datang` text COLLATE utf8mb4_general_ci NOT NULL,
  `ktp_datang` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skdatang`
--

INSERT INTO `skdatang` (`id_skdatang`, `id_penduduk`, `no_surat`, `alamat_asal`, `alasan_pindah`, `surat_datang`, `ktp_datang`, `created_at`) VALUES
(3, 11, 'SD/01/BJB/2023', 'Jl kenari kabupaten bantul', 'Pekerjaan', 'Surat_Pindah-91291291323123_bima-akhrya.pdf', 'KTP-91291291323123_bima-akhrya.pdf', '2023-07-17 01:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `skizin_usaha`
--

CREATE TABLE `skizin_usaha` (
  `id_skizin_usaha` int NOT NULL,
  `id_penduduk` int NOT NULL,
  `no_surat` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_usaha` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_usaha` text COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_usaha` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_ajuan` date NOT NULL,
  `kontak_usaha` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `status_izin` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skizin_usaha`
--

INSERT INTO `skizin_usaha` (`id_skizin_usaha`, `id_penduduk`, `no_surat`, `nama_usaha`, `alamat_usaha`, `jenis_usaha`, `tanggal_ajuan`, `kontak_usaha`, `status_izin`, `created_at`) VALUES
(2, 10, 'I.US/01/BJB/2013', 'Restoran Berkah', 'Jl Batu No. 43', 'Restoran', '2023-07-16', '+62 833-8328-663', 'Diajukan', '2023-07-16 02:19:41');

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

-- --------------------------------------------------------

--
-- Table structure for table `sktidakmampu`
--

CREATE TABLE `sktidakmampu` (
  `id_sktidakmampu` int NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int NOT NULL,
  `keperluan` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sktidakmampu`
--

INSERT INTO `sktidakmampu` (`id_sktidakmampu`, `no_surat`, `id_penduduk`, `keperluan`, `created_at`) VALUES
(3, 'TM/01/BJB/2023', 10, 'Masuk Kuliah', '2023-07-17 06:02:12'),
(4, 'TM/02/BJB/2023', 11, 'Masuk Kuliah', '2023-07-17 06:31:35');

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
-- Indexes for table `de_ahliwaris`
--
ALTER TABLE `de_ahliwaris`
  ADD PRIMARY KEY (`id_de_ahliwaris`),
  ADD KEY `id_skahliwaris` (`id_skahliwaris`),
  ADD KEY `id_penduduk` (`id_penduduk`);

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
-- Indexes for table `skahliwaris`
--
ALTER TABLE `skahliwaris`
  ADD PRIMARY KEY (`id_skahliwaris`),
  ADD KEY `id_skkematian` (`id_skkematian`);

--
-- Indexes for table `skdatang`
--
ALTER TABLE `skdatang`
  ADD PRIMARY KEY (`id_skdatang`);

--
-- Indexes for table `skizin_usaha`
--
ALTER TABLE `skizin_usaha`
  ADD PRIMARY KEY (`id_skizin_usaha`);

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
-- AUTO_INCREMENT for table `de_ahliwaris`
--
ALTER TABLE `de_ahliwaris`
  MODIFY `id_de_ahliwaris` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_penduduk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `skahliwaris`
--
ALTER TABLE `skahliwaris`
  MODIFY `id_skahliwaris` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skdatang`
--
ALTER TABLE `skdatang`
  MODIFY `id_skdatang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skizin_usaha`
--
ALTER TABLE `skizin_usaha`
  MODIFY `id_skizin_usaha` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skkelahiran`
--
ALTER TABLE `skkelahiran`
  MODIFY `id_skkelahiran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `skkematian`
--
ALTER TABLE `skkematian`
  MODIFY `id_skkematian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_skpindah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sktidakmampu`
--
ALTER TABLE `sktidakmampu`
  MODIFY `id_sktidakmampu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `de_ahliwaris`
--
ALTER TABLE `de_ahliwaris`
  ADD CONSTRAINT `de_ahliwaris_ibfk_1` FOREIGN KEY (`id_skahliwaris`) REFERENCES `skahliwaris` (`id_skahliwaris`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `de_ahliwaris_ibfk_2` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `de_kk`
--
ALTER TABLE `de_kk`
  ADD CONSTRAINT `de_kk_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `de_kk_ibfk_2` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skahliwaris`
--
ALTER TABLE `skahliwaris`
  ADD CONSTRAINT `skahliwaris_ibfk_1` FOREIGN KEY (`id_skkematian`) REFERENCES `skkematian` (`id_skkematian`) ON DELETE CASCADE ON UPDATE CASCADE;

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

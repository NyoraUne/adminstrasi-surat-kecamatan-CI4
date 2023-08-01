-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 08:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

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
  `id_de_ahliwaris` int(11) NOT NULL,
  `id_skahliwaris` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `hubungan` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `de_ahliwaris`
--

INSERT INTO `de_ahliwaris` (`id_de_ahliwaris`, `id_skahliwaris`, `id_penduduk`, `hubungan`, `created_at`) VALUES
(2, 3, 25, 'Istri', '2023-07-17 09:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `de_kk`
--

CREATE TABLE `de_kk` (
  `id_de_kk` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `status` varchar(225) NOT NULL,
  `created_at_de` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `de_kk`
--

INSERT INTO `de_kk` (`id_de_kk`, `id_kk`, `id_penduduk`, `status`, `created_at_de`) VALUES
(47, 6, 20, '', '2023-07-17'),
(48, 6, 21, '', '2023-07-17'),
(49, 6, 23, '', '2023-07-17'),
(51, 6, 25, '', '2023-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `isi` text NOT NULL,
  `created_at` date NOT NULL,
  `status` varchar(225) NOT NULL DEFAULT 'Di Terima',
  `end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `id_penduduk`, `kategori`, `isi`, `created_at`, `status`, `end`) VALUES
(2, 32, 'Pembayaran', 'Apakah Sistem ini gratis?', '2023-07-28', 'Tidak Di Terima', '2023-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_status`
--

CREATE TABLE `feedback_status` (
  `id_feedback_status` int(11) NOT NULL,
  `id_feedback` int(11) NOT NULL,
  `isi` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_status`
--

INSERT INTO `feedback_status` (`id_feedback_status`, `id_feedback`, `isi`, `created_at`) VALUES
(3, 2, 'Pengerjaan tidak di terima kerna bukan dalam lingkungan update, melainkan masukan dari penduduk', '2023-08-02'),
(4, 2, 'tes', '2023-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `data` varchar(225) NOT NULL,
  `file` text NOT NULL,
  `deskripsi` text NOT NULL,
  `detail` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `id_permintaan`, `data`, `file`, `deskripsi`, `detail`, `created_at`) VALUES
(13, 3, 'Data KTP', '20230801-081445pm-Mid_Kusuma.pdf', 'ktp', 0, '2023-08-01 20:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(225) NOT NULL,
  `alamat_kk` varchar(225) NOT NULL,
  `rtrw_kk` varchar(225) NOT NULL,
  `desa_kk` varchar(225) NOT NULL,
  `kecamatan_kk` varchar(225) NOT NULL,
  `kabupaten_kk` varchar(225) NOT NULL,
  `kdpos_kk` varchar(225) NOT NULL,
  `provinsi_kk` varchar(225) NOT NULL,
  `created_at_kk` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id_kk`, `no_kk`, `alamat_kk`, `rtrw_kk`, `desa_kk`, `kecamatan_kk`, `kabupaten_kk`, `kdpos_kk`, `provinsi_kk`, `created_at_kk`) VALUES
(6, '3326160107400474', 'JL Batu Aren', 'Rt 12 Rw 02', 'Guntung Manggis', 'Landasan ulin', 'banjarbaru', '70721', 'kalimantan selatan', '2023-07-17 09:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `koment` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_permintaan`, `id_user`, `koment`, `created_at`) VALUES
(2, 3, 11, 'Apakah Sudah Selesai Ibu/Bapak?', '2023-07-28 13:41:43'),
(3, 3, 11, 'pak?', '2023-07-28 13:53:25'),
(4, 3, 8, 'lagi di kerjakan pak ya', '2023-07-29 05:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik_penduduk`, `nama_penduduk`, `tempat_lahir_penduduk`, `tgl_lahir_penduduk`, `jenis_kelamin_penduduk`, `agama_penduduk`, `pekerjaan_penduduk`, `alamat_penduduk`, `status_perkawinan_penduduk`, `email_penduduk`, `no_telp_penduduk`, `foto_penduduk`, `slug`, `created_at_penduduk`) VALUES
(20, '3326160608070197', 'Malik ikthar', 'Banjarabaru', '1997-07-17', 'Laki-Laki', 'Islam', 'Programer', 'JL Batu Aren', 'Lajang', 'mail@gmail.com', '+62 872-5254-875', '122013pm3326160608070197_malik-ikthar.jpg', '3326160608070197_malik-ikthar', '2023-07-17'),
(21, '3326160902090003', 'Bima Akhrya', 'Banjarabaru', '1974-07-18', 'Laki-Laki', 'Islam', 'Tukang  bikin rujak', 'JL ngkasa menuju ke bumi', 'Lajang', 'mail@gmail.com', '+62 881-709-712', '3326160902090003_bima-akhrya.jpg', '3326160902090003_bima-akhrya', '2023-07-17'),
(23, '3326160911060005', 'Abdullah ilham', 'Banjarabaru', '1992-07-03', 'Laki-Laki', 'Islam', 'Penjaga Kafe', 'JL Batu Aren', 'Sudah Menikah', 'mail@gmail.com', '+62 893-4050-1506', '3326160911060005_abdullah-ilham.jpg', '3326160911060005_abdullah-ilham', '2023-07-17'),
(25, '3326160608070060', 'Linda Aria Masra', 'Banjarabaru', '1992-02-03', 'Perempuan', 'Islam', 'Programer', 'JL Batu Aren', 'Sudah Menikah', 'mail@gmail.com', '+62 893-4050-1506', '3326160608070060_linda-aria-masra.jpg', '3326160608070060_linda-aria-masra', '2023-07-17'),
(29, '332682042407928', 'Riska Muni', 'Banjarabaru', '1976-06-22', 'Laki-Laki', 'Konghucu', 'Programer', 'JL Batu Aren', 'Sudah Menikah', 'jahidesek@mailinator.com', '+6284534889422', '', '332682042407928_riska-muni', '2023-07-26'),
(31, '332683112893069', 'Aulia Kurniawan', 'Banjarabaru', '2011-02-09', 'Laki-Laki', 'Islam', 'Tukang Gali Internet', 'JL Batu Aren', 'Lajang', 'mail@gmail.com', '+6285045775974', '', '332683112893069_aulia-kurniawan', '2023-07-26'),
(32, '332679041449924', 'Mid Kusuma', 'Banjarabaru', '2023-07-26', 'Perempuan', 'Katolik', 'Penjaga Kafe', 'JL Batu Aren', 'Lajang', 'mail@gmail.com', '+6288347303146', '', '332679041449924_mid-kusuma', '2023-07-26'),
(33, '332674071215793', 'Mid Kurniawan', 'Banjarabaru', '2023-07-01', 'Laki-Laki', 'Protestan', 'Penjaga Kafe', 'JL Batu Aren', 'Lajang', 'mail@gmail.com', '+6288437923768', '', '332674071215793_mid-kurniawan', '2023-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `pelayanan` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id_permintaan`, `id_penduduk`, `pelayanan`, `deskripsi`, `status`, `created_at`) VALUES
(3, 32, 'Pembuatan Surat Tidak Mampu', 'zxcxzczxczx', 'ditolak', '2023-07-28 06:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `reklame`
--

CREATE TABLE `reklame` (
  `id_reklame` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `nama_perusahaan` varchar(225) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `no_telp` varchar(225) NOT NULL,
  `naskah` varchar(225) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `ukuran` varchar(225) NOT NULL,
  `lokasi` varchar(225) NOT NULL,
  `masa_berlaku` int(11) NOT NULL,
  `lahan_milik` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reklame`
--

INSERT INTO `reklame` (`id_reklame`, `id_penduduk`, `no_surat`, `nama_perusahaan`, `alamat_perusahaan`, `no_telp`, `naskah`, `jenis`, `ukuran`, `lokasi`, `masa_berlaku`, `lahan_milik`, `created_at`) VALUES
(1, 33, 'Et velit alias ab c', 'Suscipit odio tempor', 'Labore commodo volup', 'Ex est nesciunt vel', 'Quibusdam voluptatum', 'Dolores alias autem ', 'Veniam cillum ut ra', 'In quibusdam aute ni', 90, 'Nostrud qui accusamu', '2023-07-30 05:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `skahliwaris`
--

CREATE TABLE `skahliwaris` (
  `id_skahliwaris` int(11) NOT NULL,
  `id_skkematian` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skahliwaris`
--

INSERT INTO `skahliwaris` (`id_skahliwaris`, `id_skkematian`, `no_surat`, `created_at`) VALUES
(3, 4, 'AW/01/Banjarbaru/2021', '2023-07-17 09:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `skdatang`
--

CREATE TABLE `skdatang` (
  `id_skdatang` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `alamat_asal` varchar(225) NOT NULL,
  `alasan_pindah` varchar(225) NOT NULL,
  `surat_datang` text NOT NULL,
  `ktp_datang` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skizin_usaha`
--

CREATE TABLE `skizin_usaha` (
  `id_skizin_usaha` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `nama_usaha` varchar(225) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `jenis_usaha` varchar(225) NOT NULL,
  `tanggal_ajuan` date NOT NULL,
  `kontak_usaha` varchar(225) NOT NULL,
  `status_izin` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skizin_usaha`
--

INSERT INTO `skizin_usaha` (`id_skizin_usaha`, `id_penduduk`, `no_surat`, `nama_usaha`, `alamat_usaha`, `jenis_usaha`, `tanggal_ajuan`, `kontak_usaha`, `status_izin`, `created_at`) VALUES
(3, 20, 'IUS/01/Banjarbaru/2023', 'Restoran Berkah', 'Jl Batu No. 43', 'Restoran', '2023-12-01', '+62 833-8328-663', 'Disetujui', '2023-07-17 09:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `skkelahiran`
--

CREATE TABLE `skkelahiran` (
  `id_skkelahiran` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(225) NOT NULL,
  `nama_anak` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `id_ayah` int(11) DEFAULT NULL,
  `id_ibu` int(11) DEFAULT NULL,
  `anak_ke` int(11) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `skkelahiran`
--

INSERT INTO `skkelahiran` (`id_skkelahiran`, `no_surat`, `tanggal`, `tempat`, `nama_anak`, `jenis_kelamin`, `id_ayah`, `id_ibu`, `anak_ke`, `alamat`, `created_at`) VALUES
(19, 'SK/01/Banjarbaru/2023', '2023-07-17', 'RS Medika', 'Abdulah Malik', 'Perempuan', 20, 25, 1, 'jl ngkasa menuju ke bumi', '2023-07-17 09:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `skkematian`
--

CREATE TABLE `skkematian` (
  `id_skkematian` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `hari` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `sebab` varchar(225) NOT NULL,
  `tempat` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `skkematian`
--

INSERT INTO `skkematian` (`id_skkematian`, `no_surat`, `id_penduduk`, `hari`, `tanggal`, `sebab`, `tempat`, `created_at`) VALUES
(4, 'SK/01/Banjarbaru/2023', 23, 'Jumat', '2023-07-17', 'Penyakit', 'Jl Gotongroyong (Rumah)', '2023-07-17 09:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `skkk`
--

CREATE TABLE `skkk` (
  `id_skkk` int(11) NOT NULL,
  `no_surat_skk` varchar(225) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `keperluan_skk` varchar(225) NOT NULL,
  `created_at_skk` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `skkk`
--

INSERT INTO `skkk` (`id_skkk`, `no_surat_skk`, `id_penduduk`, `keperluan_skk`, `created_at_skk`) VALUES
(3, 'KK/01/Banjarbaru/2023', 20, 'Permintaan Pembuatan KK\r\nAlasan : KK Lama Terbakar', '2023-07-17 09:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `skktp`
--

CREATE TABLE `skktp` (
  `id_skktp` int(11) NOT NULL,
  `no_surat_ktp` varchar(225) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `keperluan_ktp` text NOT NULL,
  `created_at_ktp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `skktp`
--

INSERT INTO `skktp` (`id_skktp`, `no_surat_ktp`, `id_penduduk`, `keperluan_ktp`, `created_at_ktp`) VALUES
(6, 'KTP/01/Banjarbaru/2023', 20, 'Permintaan Pembuatan KTP baru.\r\nAlasan : Ktp Lama Hilang', '2023-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `skpindah`
--

CREATE TABLE `skpindah` (
  `id_skpindah` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `pindah_dari` varchar(225) NOT NULL,
  `alasan_pindah` varchar(225) NOT NULL,
  `alamat_baru` varchar(225) NOT NULL,
  `keluarga_ikut` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `skpindah`
--

INSERT INTO `skpindah` (`id_skpindah`, `no_surat`, `id_penduduk`, `pindah_dari`, `alasan_pindah`, `alamat_baru`, `keluarga_ikut`, `created_at`) VALUES
(4, 'PIN/01/Banjarbaru/2023', 25, 'Jl Bumi Ke Langit', 'Pekerjaan', 'Jl Langit Ke Bumi', 0, '2023-07-17 09:19:44'),
(5, 'PIN/02/Banjarbaru/2023', 20, 'Magelang', 'Pekerjaan', 'Banjarbaru', 1, '2023-07-27 00:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `sktidakmampu`
--

CREATE TABLE `sktidakmampu` (
  `id_sktidakmampu` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `keperluan` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sktidakmampu`
--

INSERT INTO `sktidakmampu` (`id_sktidakmampu`, `no_surat`, `id_penduduk`, `keperluan`, `created_at`) VALUES
(5, 'TM/01/Banjarbaru/2023', 25, 'Masuk Kuliah S2', '2023-07-17 09:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `skusaha`
--

CREATE TABLE `skusaha` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nama_usaha` varchar(225) NOT NULL,
  `jenis_usaha` varchar(225) NOT NULL,
  `alamat_usaha` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(225) NOT NULL,
  `role` int(11) NOT NULL,
  `foto_user` text DEFAULT NULL,
  `username_user` varchar(225) NOT NULL,
  `password_user` varchar(225) NOT NULL,
  `salt` varchar(225) NOT NULL,
  `id_penduduk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `role`, `foto_user`, `username_user`, `password_user`, `salt`, `id_penduduk`) VALUES
(8, 'admin', 1, NULL, 'admin', '0192023a7bbd73250516f069df18b50064803f79a53895.71942189', '64803f79a53895.71942189', NULL),
(9, 'Andriyan', 1, NULL, 'anderi77', '5d2cec861740461222c107900c54fd776480477a039209.88074506', '6480477a039209.88074506', NULL),
(10, 'penduduk', 2, NULL, 'penduduk', '949a6ee904175ed51039154703609c5564bde12e66aa11.43533067', '64bde12e66aa11.43533067', 32),
(11, 'user', 2, NULL, 'user', '80ec08504af83331911f5882349af59d64c10184076241.88697555', '64c10184076241.88697555', 32);

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `feedback_status`
--
ALTER TABLE `feedback_status`
  ADD PRIMARY KEY (`id_feedback_status`),
  ADD KEY `id_feedback` (`id_feedback`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `id_permintaan` (`id_permintaan`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_permintaan` (`id_permintaan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD UNIQUE KEY `nik_penduduk` (`nik_penduduk`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `reklame`
--
ALTER TABLE `reklame`
  ADD PRIMARY KEY (`id_reklame`),
  ADD KEY `id_penduduk` (`id_penduduk`);

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
  ADD PRIMARY KEY (`id_skdatang`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `skizin_usaha`
--
ALTER TABLE `skizin_usaha`
  ADD PRIMARY KEY (`id_skizin_usaha`),
  ADD KEY `id_penduduk` (`id_penduduk`);

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
  ADD PRIMARY KEY (`id_sktidakmampu`),
  ADD KEY `id_penduduk` (`id_penduduk`);

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
  ADD KEY `id_role` (`role`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `de_ahliwaris`
--
ALTER TABLE `de_ahliwaris`
  MODIFY `id_de_ahliwaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `de_kk`
--
ALTER TABLE `de_kk`
  MODIFY `id_de_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback_status`
--
ALTER TABLE `feedback_status`
  MODIFY `id_feedback_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reklame`
--
ALTER TABLE `reklame`
  MODIFY `id_reklame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skahliwaris`
--
ALTER TABLE `skahliwaris`
  MODIFY `id_skahliwaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skdatang`
--
ALTER TABLE `skdatang`
  MODIFY `id_skdatang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skizin_usaha`
--
ALTER TABLE `skizin_usaha`
  MODIFY `id_skizin_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skkelahiran`
--
ALTER TABLE `skkelahiran`
  MODIFY `id_skkelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `skkematian`
--
ALTER TABLE `skkematian`
  MODIFY `id_skkematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skkk`
--
ALTER TABLE `skkk`
  MODIFY `id_skkk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skktp`
--
ALTER TABLE `skktp`
  MODIFY `id_skktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skpindah`
--
ALTER TABLE `skpindah`
  MODIFY `id_skpindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sktidakmampu`
--
ALTER TABLE `sktidakmampu`
  MODIFY `id_sktidakmampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skusaha`
--
ALTER TABLE `skusaha`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback_status`
--
ALTER TABLE `feedback_status`
  ADD CONSTRAINT `feedback_status_ibfk_1` FOREIGN KEY (`id_feedback`) REFERENCES `feedback` (`id_feedback`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`id_permintaan`) REFERENCES `permintaan` (`id_permintaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_permintaan`) REFERENCES `permintaan` (`id_permintaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD CONSTRAINT `permintaan_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reklame`
--
ALTER TABLE `reklame`
  ADD CONSTRAINT `reklame_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skahliwaris`
--
ALTER TABLE `skahliwaris`
  ADD CONSTRAINT `skahliwaris_ibfk_1` FOREIGN KEY (`id_skkematian`) REFERENCES `skkematian` (`id_skkematian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skdatang`
--
ALTER TABLE `skdatang`
  ADD CONSTRAINT `skdatang_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skizin_usaha`
--
ALTER TABLE `skizin_usaha`
  ADD CONSTRAINT `skizin_usaha_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `sktidakmampu`
--
ALTER TABLE `sktidakmampu`
  ADD CONSTRAINT `sktidakmampu_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skusaha`
--
ALTER TABLE `skusaha`
  ADD CONSTRAINT `skusaha_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

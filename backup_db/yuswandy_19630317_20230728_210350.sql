-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: yuswandy_19630317
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.23.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `de_ahliwaris`
--

DROP TABLE IF EXISTS `de_ahliwaris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `de_ahliwaris` (
  `id_de_ahliwaris` int NOT NULL AUTO_INCREMENT,
  `id_skahliwaris` int NOT NULL,
  `id_penduduk` int NOT NULL,
  `hubungan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_de_ahliwaris`),
  KEY `id_skahliwaris` (`id_skahliwaris`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `de_ahliwaris_ibfk_1` FOREIGN KEY (`id_skahliwaris`) REFERENCES `skahliwaris` (`id_skahliwaris`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `de_ahliwaris_ibfk_2` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `de_ahliwaris`
--

LOCK TABLES `de_ahliwaris` WRITE;
/*!40000 ALTER TABLE `de_ahliwaris` DISABLE KEYS */;
INSERT INTO `de_ahliwaris` VALUES (2,3,25,'Istri','2023-07-17 09:33:08');
/*!40000 ALTER TABLE `de_ahliwaris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `de_kk`
--

DROP TABLE IF EXISTS `de_kk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `de_kk` (
  `id_de_kk` int NOT NULL AUTO_INCREMENT,
  `id_kk` int NOT NULL,
  `id_penduduk` int NOT NULL,
  `status` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at_de` date NOT NULL,
  PRIMARY KEY (`id_de_kk`),
  KEY `id_kk` (`id_kk`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `de_kk_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `de_kk_ibfk_2` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `de_kk`
--

LOCK TABLES `de_kk` WRITE;
/*!40000 ALTER TABLE `de_kk` DISABLE KEYS */;
INSERT INTO `de_kk` VALUES (47,6,20,'','2023-07-17'),(48,6,21,'','2023-07-17'),(49,6,23,'','2023-07-17'),(51,6,25,'','2023-07-17');
/*!40000 ALTER TABLE `de_kk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `id_feedback` int NOT NULL AUTO_INCREMENT,
  `id_penduduk` int NOT NULL,
  `kategori` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id_feedback`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `file` (
  `id_file` int NOT NULL AUTO_INCREMENT,
  `id_permintaan` int NOT NULL,
  `data` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `file` text COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_file`),
  KEY `id_permintaan` (`id_permintaan`),
  CONSTRAINT `file_ibfk_1` FOREIGN KEY (`id_permintaan`) REFERENCES `permintaan` (`id_permintaan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (2,3,'Data KTP','20230728-02:45:33pm-Mid Kusuma.pdf','ktp','2023-07-28 14:45:33'),(3,3,'Data KK','20230728-07:59:28pm-Mid Kusuma.pdf','ini data KK','2023-07-28 19:59:28');
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kk`
--

DROP TABLE IF EXISTS `kk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kk` (
  `id_kk` int NOT NULL AUTO_INCREMENT,
  `no_kk` varchar(225) NOT NULL,
  `alamat_kk` varchar(225) NOT NULL,
  `rtrw_kk` varchar(225) NOT NULL,
  `desa_kk` varchar(225) NOT NULL,
  `kecamatan_kk` varchar(225) NOT NULL,
  `kabupaten_kk` varchar(225) NOT NULL,
  `kdpos_kk` varchar(225) NOT NULL,
  `provinsi_kk` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at_kk` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kk`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kk`
--

LOCK TABLES `kk` WRITE;
/*!40000 ALTER TABLE `kk` DISABLE KEYS */;
INSERT INTO `kk` VALUES (6,'3326160107400474','JL Batu Aren','Rt 12 Rw 02','Guntung Manggis','Landasan ulin','banjarbaru','70721','kalimantan selatan','2023-07-17 09:12:31');
/*!40000 ALTER TABLE `kk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penduduk`
--

DROP TABLE IF EXISTS `penduduk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penduduk` (
  `id_penduduk` int NOT NULL AUTO_INCREMENT,
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
  `created_at_penduduk` date DEFAULT NULL,
  PRIMARY KEY (`id_penduduk`),
  UNIQUE KEY `nik_penduduk` (`nik_penduduk`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penduduk`
--

LOCK TABLES `penduduk` WRITE;
/*!40000 ALTER TABLE `penduduk` DISABLE KEYS */;
INSERT INTO `penduduk` VALUES (20,'3326160608070197','Malik ikthar','Banjarabaru','1997-07-17','Laki-Laki','Islam','Programer','JL Batu Aren','Lajang','mail@gmail.com','+62 872-5254-875','3326160608070197_malik-ikthar.jpg','3326160608070197_malik-ikthar','2023-07-17'),(21,'3326160902090003','Bima Akhrya','Banjarabaru','1974-07-18','Laki-Laki','Islam','Tukang  bikin rujak','JL ngkasa menuju ke bumi','Lajang','mail@gmail.com','+62 881-709-712','3326160902090003_bima-akhrya.jpg','3326160902090003_bima-akhrya','2023-07-17'),(23,'3326160911060005','Abdullah ilham','Banjarabaru','1992-07-03','Laki-Laki','Islam','Penjaga Kafe','JL Batu Aren','Sudah Menikah','mail@gmail.com','+62 893-4050-1506','3326160911060005_abdullah-ilham.jpg','3326160911060005_abdullah-ilham','2023-07-17'),(25,'3326160608070060','Linda Aria Masra','Banjarabaru','1992-02-03','Perempuan','Islam','Programer','JL Batu Aren','Sudah Menikah','mail@gmail.com','+62 893-4050-1506','3326160608070060_linda-aria-masra.jpg','3326160608070060_linda-aria-masra','2023-07-17'),(29,'332682042407928','Riska Muni','Banjarabaru','1976-06-22','Laki-Laki','Konghucu','Programer','JL Batu Aren','Sudah Menikah','jahidesek@mailinator.com','+6284534889422','','332682042407928_riska-muni','2023-07-26'),(31,'332683112893069','Aulia Kurniawan','Banjarabaru','2011-02-09','Laki-Laki','Islam','Tukang Gali Internet','JL Batu Aren','Lajang','mail@gmail.com','+6285045775974','','332683112893069_aulia-kurniawan','2023-07-26'),(32,'332679041449924','Mid Kusuma','Banjarabaru','2023-07-26','Perempuan','Katolik','Penjaga Kafe','JL Batu Aren','Lajang','mail@gmail.com','+6288347303146','','332679041449924_mid-kusuma','2023-07-26'),(33,'332674071215793','Mid Kurniawan','Banjarabaru','2023-07-01','Laki-Laki','Protestan','Penjaga Kafe','JL Batu Aren','Lajang','mail@gmail.com','+6288437923768','','332674071215793_mid-kurniawan','2023-07-26');
/*!40000 ALTER TABLE `penduduk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permintaan`
--

DROP TABLE IF EXISTS `permintaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permintaan` (
  `id_permintaan` int NOT NULL AUTO_INCREMENT,
  `id_penduduk` int NOT NULL,
  `pelayanan` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_permintaan`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `permintaan_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permintaan`
--

LOCK TABLES `permintaan` WRITE;
/*!40000 ALTER TABLE `permintaan` DISABLE KEYS */;
INSERT INTO `permintaan` VALUES (3,32,'Pembuatan Surat Tidak Mampu','zxcxzczxczx','Diajukan','2023-07-28 06:00:23');
/*!40000 ALTER TABLE `permintaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skahliwaris`
--

DROP TABLE IF EXISTS `skahliwaris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skahliwaris` (
  `id_skahliwaris` int NOT NULL AUTO_INCREMENT,
  `id_skkematian` int NOT NULL,
  `no_surat` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_skahliwaris`),
  KEY `id_skkematian` (`id_skkematian`),
  CONSTRAINT `skahliwaris_ibfk_1` FOREIGN KEY (`id_skkematian`) REFERENCES `skkematian` (`id_skkematian`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skahliwaris`
--

LOCK TABLES `skahliwaris` WRITE;
/*!40000 ALTER TABLE `skahliwaris` DISABLE KEYS */;
INSERT INTO `skahliwaris` VALUES (3,4,'AW/01/Banjarbaru/2021','2023-07-17 09:32:44');
/*!40000 ALTER TABLE `skahliwaris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skdatang`
--

DROP TABLE IF EXISTS `skdatang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skdatang` (
  `id_skdatang` int NOT NULL AUTO_INCREMENT,
  `id_penduduk` int NOT NULL,
  `no_surat` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_asal` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alasan_pindah` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surat_datang` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ktp_datang` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_skdatang`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `skdatang_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skdatang`
--

LOCK TABLES `skdatang` WRITE;
/*!40000 ALTER TABLE `skdatang` DISABLE KEYS */;
/*!40000 ALTER TABLE `skdatang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skizin_usaha`
--

DROP TABLE IF EXISTS `skizin_usaha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skizin_usaha` (
  `id_skizin_usaha` int NOT NULL AUTO_INCREMENT,
  `id_penduduk` int NOT NULL,
  `no_surat` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_usaha` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_usaha` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_usaha` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_ajuan` date NOT NULL,
  `kontak_usaha` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_izin` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_skizin_usaha`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `skizin_usaha_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skizin_usaha`
--

LOCK TABLES `skizin_usaha` WRITE;
/*!40000 ALTER TABLE `skizin_usaha` DISABLE KEYS */;
INSERT INTO `skizin_usaha` VALUES (3,20,'IUS/01/Banjarbaru/2023','Restoran Berkah','Jl Batu No. 43','Restoran','2023-12-01','+62 833-8328-663','Disetujui','2023-07-17 09:34:25');
/*!40000 ALTER TABLE `skizin_usaha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skkelahiran`
--

DROP TABLE IF EXISTS `skkelahiran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skkelahiran` (
  `id_skkelahiran` int NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(225) NOT NULL,
  `nama_anak` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `id_ayah` int DEFAULT NULL,
  `id_ibu` int DEFAULT NULL,
  `anak_ke` int NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_skkelahiran`),
  KEY `id_ayah` (`id_ayah`),
  KEY `id_ibu` (`id_ibu`),
  CONSTRAINT `skkelahiran_ibfk_1` FOREIGN KEY (`id_ayah`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `skkelahiran_ibfk_2` FOREIGN KEY (`id_ibu`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skkelahiran`
--

LOCK TABLES `skkelahiran` WRITE;
/*!40000 ALTER TABLE `skkelahiran` DISABLE KEYS */;
INSERT INTO `skkelahiran` VALUES (19,'SK/01/Banjarbaru/2023','2023-07-17','RS Medika','Abdulah Malik','Perempuan',20,25,1,'jl ngkasa menuju ke bumi','2023-07-17 09:15:00');
/*!40000 ALTER TABLE `skkelahiran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skkematian`
--

DROP TABLE IF EXISTS `skkematian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skkematian` (
  `id_skkematian` int NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int NOT NULL,
  `hari` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `sebab` varchar(225) NOT NULL,
  `tempat` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_skkematian`),
  UNIQUE KEY `id_penduduk` (`id_penduduk`) USING BTREE,
  CONSTRAINT `skkematian_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skkematian`
--

LOCK TABLES `skkematian` WRITE;
/*!40000 ALTER TABLE `skkematian` DISABLE KEYS */;
INSERT INTO `skkematian` VALUES (4,'SK/01/Banjarbaru/2023',23,'Jumat','2023-07-17','Penyakit','Jl Gotongroyong (Rumah)','2023-07-17 09:18:58');
/*!40000 ALTER TABLE `skkematian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skkk`
--

DROP TABLE IF EXISTS `skkk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skkk` (
  `id_skkk` int NOT NULL AUTO_INCREMENT,
  `no_surat_skk` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_penduduk` int NOT NULL,
  `keperluan_skk` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at_skk` datetime DEFAULT NULL,
  PRIMARY KEY (`id_skkk`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `skkk_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skkk`
--

LOCK TABLES `skkk` WRITE;
/*!40000 ALTER TABLE `skkk` DISABLE KEYS */;
INSERT INTO `skkk` VALUES (3,'KK/01/Banjarbaru/2023',20,'Permintaan Pembuatan KK\r\nAlasan : KK Lama Terbakar','2023-07-17 09:14:34');
/*!40000 ALTER TABLE `skkk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skktp`
--

DROP TABLE IF EXISTS `skktp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skktp` (
  `id_skktp` int NOT NULL AUTO_INCREMENT,
  `no_surat_ktp` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_penduduk` int NOT NULL,
  `keperluan_ktp` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at_ktp` date DEFAULT NULL,
  PRIMARY KEY (`id_skktp`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `skktp_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skktp`
--

LOCK TABLES `skktp` WRITE;
/*!40000 ALTER TABLE `skktp` DISABLE KEYS */;
INSERT INTO `skktp` VALUES (6,'KTP/01/Banjarbaru/2023',20,'Permintaan Pembuatan KTP baru.\r\nAlasan : Ktp Lama Hilang','2023-07-17');
/*!40000 ALTER TABLE `skktp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skpindah`
--

DROP TABLE IF EXISTS `skpindah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skpindah` (
  `id_skpindah` int NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int NOT NULL,
  `pindah_dari` varchar(225) NOT NULL,
  `alasan_pindah` varchar(225) NOT NULL,
  `alamat_baru` varchar(225) NOT NULL,
  `keluarga_ikut` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_skpindah`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `skpindah_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skpindah`
--

LOCK TABLES `skpindah` WRITE;
/*!40000 ALTER TABLE `skpindah` DISABLE KEYS */;
INSERT INTO `skpindah` VALUES (4,'PIN/01/Banjarbaru/2023',25,'Jl Bumi Ke Langit','Pekerjaan','Jl Langit Ke Bumi',0,'2023-07-17 09:19:44'),(5,'PIN/02/Banjarbaru/2023',20,'Magelang','Pekerjaan','Banjarbaru',1,'2023-07-27 00:38:37');
/*!40000 ALTER TABLE `skpindah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sktidakmampu`
--

DROP TABLE IF EXISTS `sktidakmampu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sktidakmampu` (
  `id_sktidakmampu` int NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int NOT NULL,
  `keperluan` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_sktidakmampu`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `sktidakmampu_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sktidakmampu`
--

LOCK TABLES `sktidakmampu` WRITE;
/*!40000 ALTER TABLE `sktidakmampu` DISABLE KEYS */;
INSERT INTO `sktidakmampu` VALUES (5,'TM/01/Banjarbaru/2023',25,'Masuk Kuliah S2','2023-07-17 09:42:11');
/*!40000 ALTER TABLE `sktidakmampu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skusaha`
--

DROP TABLE IF EXISTS `skusaha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skusaha` (
  `id_surat` int NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(225) NOT NULL,
  `id_penduduk` int NOT NULL,
  `nama_usaha` varchar(225) NOT NULL,
  `jenis_usaha` varchar(225) NOT NULL,
  `alamat_usaha` varchar(225) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `skusaha_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skusaha`
--

LOCK TABLES `skusaha` WRITE;
/*!40000 ALTER TABLE `skusaha` DISABLE KEYS */;
/*!40000 ALTER TABLE `skusaha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(225) NOT NULL,
  `role` int NOT NULL,
  `foto_user` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `username_user` varchar(225) NOT NULL,
  `password_user` varchar(225) NOT NULL,
  `salt` varchar(225) NOT NULL,
  `id_penduduk` int DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_role` (`role`),
  KEY `id_penduduk` (`id_penduduk`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (8,'admin',1,NULL,'admin','0192023a7bbd73250516f069df18b50064803f79a53895.71942189','64803f79a53895.71942189',NULL),(9,'Andriyan',1,NULL,'anderi77','5d2cec861740461222c107900c54fd776480477a039209.88074506','6480477a039209.88074506',NULL),(10,'penduduk',2,NULL,'penduduk','949a6ee904175ed51039154703609c5564bde12e66aa11.43533067','64bde12e66aa11.43533067',32),(11,'user',2,NULL,'user','80ec08504af83331911f5882349af59d64c10184076241.88697555','64c10184076241.88697555',32);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-28 21:03:50

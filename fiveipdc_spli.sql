-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2023 at 08:55 PM
-- Server version: 8.0.33
-- PHP Version: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiveipdc_spli`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `id_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_bahasa` int NOT NULL,
  `bahasa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tahap` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`id_user`, `id_bahasa`, `bahasa`, `tahap`) VALUES
('JM24', 8, 'Melayu', 'Tinggi'),
('alysha', 9, 'MELAYU', 'Sederhana');

-- --------------------------------------------------------

--
-- Table structure for table `ibubapa`
--

CREATE TABLE `ibubapa` (
  `id_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `namabapa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `noic_bapa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaanbapa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `notel_bapa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `namaibu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `noic_ibu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaanibu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `notel_ibu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ibubapa`
--

INSERT INTO `ibubapa` (`id_user`, `namabapa`, `noic_bapa`, `pekerjaanbapa`, `notel_bapa`, `namaibu`, `noic_ibu`, `pekerjaanibu`, `notel_ibu`) VALUES
('alysha', 'RAZALI', '81929018391', 'BERNIAGA', '01901839173', 'FAZ', '81929018391', 'PILOT', '0178390273'),
('JM24', 'MD ZIN BIN HASHIM', '650224-10-0348', 'PEKEBUN', '0123456789', 'KAMISAH BINTI MOHD', '650224-10-0348', 'SURI RUMAH', '0198765432');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image_data` mediumblob NOT NULL,
  `image_type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kebolehan`
--

CREATE TABLE `kebolehan` (
  `id_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kebolehan` int NOT NULL,
  `kebolehan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tahap_kebolehan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kebolehan`
--

INSERT INTO `kebolehan` (`id_user`, `id_kebolehan`, `kebolehan`, `tahap_kebolehan`) VALUES
('JM24', 9, 'Sosial', 'Tinggi'),
('JM24', 10, 'Khidmat Masyarakat', 'Tinggi'),
('alysha', 11, 'JAVA', 'Sederhana');

-- --------------------------------------------------------

--
-- Table structure for table `panduanojt`
--

CREATE TABLE `panduanojt` (
  `id_panduan` int NOT NULL,
  `panduan` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `tarikh_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panduanojt`
--

INSERT INTO `panduanojt` (`id_panduan`, `panduan`, `tarikh_masuk`) VALUES
(4, 'GP OJT_PERSEDIAAN SEBELUM DAN SEMASA OJT (4).pdf', '2023-01-26'),
(7, '1_ KVOJT 01- Borang Maklumat Pelajar-1.docx', '2023-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `namapel` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `noic` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `tarikhlahir` date NOT NULL,
  `tempatlahir` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `adikberadik` int NOT NULL,
  `jantina` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `bangsa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `notel` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id_user`, `namapel`, `noic`, `tarikhlahir`, `tempatlahir`, `adikberadik`, `jantina`, `bangsa`, `agama`, `alamat`, `email`, `notel`, `gambar`) VALUES
('alysha', 'AMEERA', '041223080388', '2004-12-23', 'HOSPITAL TAIPING', 4, 'Perempuan', 'Sila Pilih', 'ISLAM', 'NO 12 JALAN RUMAH ISTANA', 'eisya@gmail.com', '01683937290', 'samurai cat.jpg'),
('JM24', 'SHALAZIAH BINTI MD ZIN', '781216-04-5094', '1978-12-16', 'HOSPITAL MELAKA', 7, 'Perempuan', 'Sila Pilih', 'ISLAM', 'NO 38, JALAN BM 3/7 SEKSYEN 3, BANDAR BUKIT MAHKOTA, 43000 KAJANG, SELANGOR.', 'shalaziah.78@gmail.com', '0193083617', 'IMG_20230301_224311_004.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pencapaian`
--

CREATE TABLE `pencapaian` (
  `id_user` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kebolehan` int NOT NULL,
  `pencapaian` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tahap_pencapaian` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pencapaian`
--

INSERT INTO `pencapaian` (`id_user`, `id_kebolehan`, `pencapaian`, `tahap_pencapaian`) VALUES
('19/PD/01/15', 1, 'anugerah terbaik program', 'CGPA : 3.97'),
('hafiza', 3, 'Attend Data Visualization', '-'),
('JM24', 5, 'Anugerah Perkhidmatan Cemerlang - 2007', 'Prestasi Cemerlang pada 2007'),
('JM24', 6, 'Anugerah Perkhidmatan Cemerlang - 2019', 'Perkhidmatan Cemerlang pada 2019'),
('alysha', 7, 'ANUGERAH PENGARAH', '3.75 for cgpa');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_pendidikan` int NOT NULL,
  `nama_kolej` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tahap` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kursus` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `diskripsi_pendidikan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_user`, `id_pendidikan`, `nama_kolej`, `tahap`, `nama_kursus`, `diskripsi_pendidikan`) VALUES
('JM24', 8, 'Kolej Kejururawatan Batu Pahat', 'Lain-Lain', 'Kejururawatan', 'JM'),
('alysha', 9, 'kolej vokasional shah alam', 'Sijil Vokasional Malaysia', 'ipd', 'pangkalan data');

-- --------------------------------------------------------

--
-- Table structure for table `pengalamankerja`
--

CREATE TABLE `pengalamankerja` (
  `id_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_syarikat` int NOT NULL,
  `nama_syarikat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jawatan_pass` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tarikh_mula` date NOT NULL,
  `tarikh_tamat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengalamankerja`
--

INSERT INTO `pengalamankerja` (`id_user`, `id_syarikat`, `nama_syarikat`, `jawatan_pass`, `tarikh_mula`, `tarikh_tamat`) VALUES
('JM24', 8, 'Klinik Desa Sungai Pelek', 'JM U19', '2003-01-02', '2003-01-24'),
('JM24', 9, 'Klinik Desa Sungai Buah', 'JM U21', '2003-01-27', '2015-12-31'),
('JM24', 10, 'Klinik Kesihatan Bandar Seri Putra', 'JMK U24', '2016-01-01', '2016-06-30'),
('alysha', 11, 'AVS', 'PENGURUS', '2022-01-12', '2023-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `usertype` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `nama_penyelia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `usertype`, `nama_penyelia`) VALUES
(401, 'JASMINE AMANNI', '19/PD/01/06', '12345678', 'pelajar', 'PN NORFAZLIN NAJWA'),
(775, 'IZZ', '19/PD/01/18', '12345', 'pelajar', 'PN HANINA'),
(545, 'DAYANA BATRISYA', '19/SK/01/04', '0987', 'pelajar', 'PN AZRYNA AZLEN'),
(4, 'ALYSHA MAISARAH', 'alysha', '123456', 'pelajar', 'PN SITI NORAINI'),
(479, 'AMIEN', 'amien21', '2021', 'pelajar', 'PN NORFAZLIN NAJWA'),
(17, 'azlina ahamad', 'azlina', '1234', 'pensyarah', '-'),
(566, 'HAFIZA', 'hafiza', '1111', 'user', ''),
(763, 'SHALAZIAH MD ZIN', 'JM24', '0987', 'pelajar', '-'),
(262, 'SITI NORAINI', 'siti23', 'ipd23', 'pensyarah', '-');

-- --------------------------------------------------------

--
-- Table structure for table `penyelia`
--

CREATE TABLE `penyelia` (
  `id_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_penyelia` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_penyelia` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `notel_penyelia` varchar(14) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_resume` int NOT NULL,
  `jawatan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `infoprofil` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id_user`, `id_resume`, `jawatan`, `infoprofil`, `gambar`) VALUES
('alysha', 8, 'IT INTERSHIP', '15 TAHUN PRO JAVA', ''),
('JM24', 9, 'JURURAWAT MASYARAKAT', 'Berkhidmat selama 21 tahun', '');

-- --------------------------------------------------------

--
-- Table structure for table `rujukan`
--

CREATE TABLE `rujukan` (
  `id_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_rujukan` int NOT NULL,
  `nama_rujukan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jawatan_rujukan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `no_tel_rujukan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rujukan`
--

INSERT INTO `rujukan` (`id_user`, `id_rujukan`, `nama_rujukan`, `jawatan_rujukan`, `no_tel_rujukan`) VALUES
('JM24', 9, 'Alysha Maisarah', 'Anak', '013-3727625'),
('JM24', 10, 'Alysha Mardhiah', 'Anak', '019-3482817'),
('alysha', 11, 'MRS SIVA SHANGARY', 'LECTURER ADVISOR', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `syarikat`
--

CREATE TABLE `syarikat` (
  `id_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_syarikat` int NOT NULL,
  `namasyarikat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamatsyarikat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `emailsyarikat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `notelsyarikat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `namapic` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `notelpic` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `emailpic` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `suratjawapan` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `responsyarikat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `syarikat`
--

INSERT INTO `syarikat` (`id_user`, `id_syarikat`, `namasyarikat`, `alamatsyarikat`, `emailsyarikat`, `notelsyarikat`, `namapic`, `notelpic`, `emailpic`, `suratjawapan`, `responsyarikat`) VALUES
('alysha', 26, 'aaaaa', 'aaaaa@gmail.com', 'aaaaa@gmail.com', '010210309', 'aaaa', '019109389', 'aaaaaaa@gmail.cm', 'logo KVSA.png', 'ditolak'),
('JM24', 27, 'IMAN RESOURCES', 'JALAN KEBUN, TAMAN BAGAN INDAH', 'manresource@gmail.com', '0389012367', 'IRWAN KHAIRIL BIN ABDULLAH', '0130987654', 'khairilirwan@gmail.com', 'Category UAT.pdf', 'diterima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ibubapa`
--
ALTER TABLE `ibubapa`
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebolehan`
--
ALTER TABLE `kebolehan`
  ADD PRIMARY KEY (`id_kebolehan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `panduanojt`
--
ALTER TABLE `panduanojt`
  ADD PRIMARY KEY (`id_panduan`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`noic`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `pencapaian`
--
ALTER TABLE `pencapaian`
  ADD PRIMARY KEY (`id_kebolehan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pengalamankerja`
--
ALTER TABLE `pengalamankerja`
  ADD PRIMARY KEY (`id_syarikat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `penyelia`
--
ALTER TABLE `penyelia`
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id_resume`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rujukan`
--
ALTER TABLE `rujukan`
  ADD PRIMARY KEY (`id_rujukan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `syarikat`
--
ALTER TABLE `syarikat`
  ADD PRIMARY KEY (`id_syarikat`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kebolehan`
--
ALTER TABLE `kebolehan`
  MODIFY `id_kebolehan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `panduanojt`
--
ALTER TABLE `panduanojt`
  MODIFY `id_panduan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pencapaian`
--
ALTER TABLE `pencapaian`
  MODIFY `id_kebolehan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengalamankerja`
--
ALTER TABLE `pengalamankerja`
  MODIFY `id_syarikat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id_resume` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rujukan`
--
ALTER TABLE `rujukan`
  MODIFY `id_rujukan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `syarikat`
--
ALTER TABLE `syarikat`
  MODIFY `id_syarikat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD CONSTRAINT `bahasa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelajar` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ibubapa`
--
ALTER TABLE `ibubapa`
  ADD CONSTRAINT `ibubapa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelajar` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kebolehan`
--
ALTER TABLE `kebolehan`
  ADD CONSTRAINT `kebolehan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelajar` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD CONSTRAINT `pelajar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelajar` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengalamankerja`
--
ALTER TABLE `pengalamankerja`
  ADD CONSTRAINT `pengalamankerja_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelajar` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penyelia`
--
ALTER TABLE `penyelia`
  ADD CONSTRAINT `penyelia_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelajar` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelajar` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rujukan`
--
ALTER TABLE `rujukan`
  ADD CONSTRAINT `rujukan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelajar` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `syarikat`
--
ALTER TABLE `syarikat`
  ADD CONSTRAINT `syarikat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelajar` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

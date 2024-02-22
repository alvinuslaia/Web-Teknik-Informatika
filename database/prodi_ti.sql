-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 09:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodi_ti`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `tanggal_publikasi` date NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `judul`, `konten`, `tanggal_publikasi`, `penulis`, `kategori`) VALUES
(1, 'Cara Memulai Belajar Bahasa Pemrograman', 'Belajar bahasa pemrograman bisa menjadi langkah awal yang menarik untuk memasuki dunia teknologi informasi. Berikut adalah beberapa langkah sederhana untuk memulai belajar bahasa pemrograman: \r\n1. Pilih bahasa pemrograman yang ingin dipelajari, seperti Python, JavaScript, atau Java. \r\n2. Mulai dengan mempelajari dasar-dasar bahasa pemrograman, seperti sintaksis, tipe data, dan struktur kontrol. \r\n3. Praktekkan pemrograman dengan menulis kode sederhana, seperti program penghitung atau program Hello World. \r\n4. Gunakan sumber belajar online, seperti tutorial, dokumentasi resmi, atau forum komunitas untuk mendapatkan bantuan dan memahami konsep yang sulit. \r\n5. Lanjutkan pembelajaran dengan membangun proyek-proyek kecil yang relevan dengan minat dan tujuan Anda. \r\n6. Teruslah berlatih dan eksperimen dengan bahasa pemrograman untuk meningkatkan keterampilan Anda. Dengan konsistensi dan kesabaran, Anda dapat memperoleh kemampuan pemrograman yang kuat dan membuka pintu bagi peluang karir yang menarik di dunia teknologi.', '2024-02-20', 'John Doe', 'Pemrograman'),
(2, 'Mengenal Konsep Algoritma dan Pemrograman Dasar', 'Algoritma dan pemrograman merupakan dasar yang penting dalam bidang Teknik Informatika. Algoritma adalah langkah-langkah sistematis untuk menyelesaikan masalah, sedangkan pemrograman adalah implementasi algoritma menggunakan bahasa pemrograman. Artikel ini akan membahas konsep dasar algoritma dan pemrograman, termasuk struktur data, pengulangan, percabangan, dan fungsi. Dengan memahami konsep-konsep ini, Anda dapat membangun fondasi yang kuat dalam pengembangan perangkat lunak.', '2024-02-21', 'Jane Smith', 'Dasar Pemrograman'),
(3, 'Teknologi Blockchain: Konsep Dasar dan Implementasinya', 'Blockchain adalah teknologi yang mendasari mata uang digital seperti Bitcoin dan Ethereum. Artikel ini akan membahas konsep dasar teknologi blockchain, termasuk struktur data, konsensus, dan keamanan. Selain itu, artikel ini juga akan menjelaskan berbagai aplikasi blockchain di berbagai industri seperti keuangan, logistik, dan kesehatan. Dengan pemahaman yang mendalam tentang teknologi blockchain, Anda dapat memanfaatkannya untuk mengembangkan solusi inovatif di masa depan.', '2024-02-22', ' Michael Wang', 'Blockchain');

-- --------------------------------------------------------

--
-- Table structure for table `kipkuliah`
--

CREATE TABLE `kipkuliah` (
  `kipkuliah_id` int(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `no_hp` text NOT NULL,
  `no_hp_orangtua` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kipkuliah`
--

INSERT INTO `kipkuliah` (`kipkuliah_id`, `nik`, `nama`, `jenis_kelamin`, `no_hp`, `no_hp_orangtua`, `email`) VALUES
(1, '1204007286470001', 'Joy Putra', 'LAKI-LAKI', '085287554368', '0812287874322', 'joyputra@gmail.com'),
(2, '1234565785854', 'Budiman', 'LAKI-LAKI', '081324783688', '089479236589', 'budmani@gmai.com'),
(3, '12222432546', 'Dudung', 'LAKI-LAKI', '087862896342', '086356735227', 'dudung@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama`, `email`, `pesan`, `date`) VALUES
(2, 'Budi', 'budi@gmail.com', 'Secara desain sudah bisa, tetapi sebaiknya dilakukan update secara berkala pada website agar lebih informatif ', '2023-12-18 03:05:51'),
(3, 'Delta', 'delta@yahoo.com', 'Tes saja ', '2023-12-18 03:06:29'),
(0, 'Putri', 'putri@gmail.com', ' Sangat bagus', '2024-02-20 07:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `reguler`
--

CREATE TABLE `reguler` (
  `reguler_id` int(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `no_hp` text NOT NULL,
  `no_hp_orangtua` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reguler`
--

INSERT INTO `reguler` (`reguler_id`, `nik`, `nama`, `jenis_kelamin`, `no_hp`, `no_hp_orangtua`, `email`) VALUES
(1, '1325346587999', 'Putri', 'Perempuan', '08214735993465', '0852947547676', 'putri@gmail.com'),
(2, '12222432546', 'Yuyung', 'PEREMPUAN', '082329579346', '081287248623', 'yuyung@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'alvinuslaia@gmail.com.com', 'c0e024d9200b5705bc4804722636378a', '1', '2024-02-20 14:21:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `kipkuliah`
--
ALTER TABLE `kipkuliah`
  ADD PRIMARY KEY (`kipkuliah_id`);

--
-- Indexes for table `reguler`
--
ALTER TABLE `reguler`
  ADD PRIMARY KEY (`reguler_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kipkuliah`
--
ALTER TABLE `kipkuliah`
  MODIFY `kipkuliah_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reguler`
--
ALTER TABLE `reguler`
  MODIFY `reguler_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

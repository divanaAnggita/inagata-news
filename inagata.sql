-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 07:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inagata`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(255) NOT NULL,
  `judul_berita` varchar(300) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_berita` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal_berita`) VALUES
(1, 'merapi ku', 'Gunung MERAPI,adalah gunung yang memiliki keindahan tersendiri bagi semua orang gunung yang menarik dengan berjuta keindahan yang sangat cantik.gunung yang masih aktif ini menjadi salah satu tujuan mendaki wisatawan.', '2021-06-16 15:53:46'),
(2, 'parang tritis', 'Pantai Parangtritis adalah tempat wisata yang terletak di Desa Parangtritis, Kretek, Kabupaten Bantul, Daerah Istimewa Yogyakarta. Jaraknya kurang lebih 27 km dari pusat Kota Yogyakarta.', '2021-06-16 12:55:53'),
(3, 'pt inaga persada', 'inagata an IT company which concerns on web and mobile development by utilizing recent and sophisticated technology. We provide wide range of reliable services in solving the problems of your digital product development through advanced quality of Design, Mobile and Web App.\r\n\r\n“We are Inagata Technosmith, a global based in Malang Indonesia that craft unique and awesome app from the latest technologies”\r\n\r\nPT Ina Gata Persada an IT company which concerns on web and mobile development by utilizing recent and sophisticated technology. We provide wide range of reliable services in solving the problems of your digital product development through advanced quality of Design, Mobile and Web App.\r\n\r\nVISION\r\nBecome the best company and partner in developing information technology worldwide through recent and sophisticated technology\r\n\r\nMISSION\r\nBecome the best company in creating products using sopdisticated technology and become realible partner wich concerns on our services by upholding our values; credible team, eﬀective communication and quality assurance.', '2021-06-16 13:00:31'),
(4, 'smk telkom malang', 'SMK Telkom Malang memiliki dua program keahlian yang bisa kalian pilih. Kedua program keahlian ini saling berkaitan satu sama lain. Sehingga dengan dukungan guru-guru kami yang keren nantinya kalian bisa mempelajari keduanya.\r\nRPL dan juga TKJ', '2021-06-16 13:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(30) NOT NULL,
  `nama_user` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`) VALUES
(1, 'divana anggita putri', 'divanaanggita@gmail.com', 'divan'),
(5, 'zaki', 'divana_anggita_28rpl@student.smktelkom-mlg.sch.id', 'nunuk'),
(6, 'ahmad zaki sabilul haq', 'sabilulzaki@gmail.com', 'zaki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

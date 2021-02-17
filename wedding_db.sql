-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2021 at 03:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guestbook`
--

CREATE TABLE `tbl_guestbook` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `ucapan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Encep Suryana', 'encepsuryana', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wedding`
--

CREATE TABLE `tbl_wedding` (
  `id` int(11) NOT NULL,
  `kalimat_1` text DEFAULT NULL,
  `kalimat_2` text DEFAULT NULL,
  `nama_lengkap_pria` varchar(255) DEFAULT NULL,
  `nama_lengkap_wanita` varchar(255) DEFAULT NULL,
  `nama_panggilan_pria` varchar(255) DEFAULT NULL,
  `nama_panggilan_wanita` varchar(255) DEFAULT NULL,
  `alamat_pria` varchar(255) DEFAULT NULL,
  `alamat_wanita` varchar(255) DEFAULT NULL,
  `orangtua_pria` varchar(255) DEFAULT NULL,
  `orangtua_wanita` varchar(255) DEFAULT NULL,
  `acara_1` varchar(255) DEFAULT NULL,
  `waktu_acara_1` varchar(255) DEFAULT NULL,
  `acara_2` varchar(255) DEFAULT NULL,
  `waktu_acara_2` varchar(255) DEFAULT NULL,
  `hari_undangan` varchar(255) DEFAULT NULL,
  `tgl_undangan` varchar(255) DEFAULT NULL,
  `ket_tempat` varchar(255) DEFAULT NULL,
  `alamat_lengkap` text DEFAULT NULL,
  `google_maps` text DEFAULT NULL,
  `google_calendar` text DEFAULT NULL,
  `google_map_direction` text DEFAULT NULL,
  `kata_pernikahan` text DEFAULT NULL,
  `doa_pernikahan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wedding`
--

INSERT INTO `tbl_wedding` (`id`, `kalimat_1`, `kalimat_2`, `nama_lengkap_pria`, `nama_lengkap_wanita`, `nama_panggilan_pria`, `nama_panggilan_wanita`, `alamat_pria`, `alamat_wanita`, `orangtua_pria`, `orangtua_wanita`, `acara_1`, `waktu_acara_1`, `acara_2`, `waktu_acara_2`, `hari_undangan`, `tgl_undangan`, `ket_tempat`, `alamat_lengkap`, `google_maps`, `google_calendar`, `google_map_direction`, `kata_pernikahan`, `doa_pernikahan`) VALUES
(1, 'Walimatul Ursy', 'Maha Suci Allah Subhanahu Wata\'ala Yang Telah Menciptakan Makhluk-Nya berpasang pasangan, Ya Allah Rahmatilah pernikahan kami:', 'Encep Suryana', 'Vera Melinda', 'Encep', 'Vera', 'Indramayu', 'Sumedang', 'Putra Pertama dari Bapak Ratim & Ibu Mimin', 'Putri Bungsu dari Bapak Sukarman & Ibu Tati Yuningsih', 'Akad nikah', '10:00 WIB - Selesai', 'Resepsi', '11:00 WIB - Selesai', 'Rabu', '01, Januari 2020', 'Kediaman Mempelai Wanita', 'Lebakmaja Kaler RT.02 RW.14 Desa. Kutamandiri, Kec. Tanjungsari, Kab. Sumedang - Jawa Barat Indonesia 45362', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.7658606062648!2d107.79102182920022!3d-6.907945999688037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTQnMjguNiJTIDEwN8KwNDcnMjkuNyJF!5e0!3m2!1sid!2sid!4v1571136963873!5m2!1sid!2sid\" width=\"600\" height=\"400\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '12', NULL, '<p>Suatu Kehormatan & Kebahagiaan bagi kami apabila Sadudara/i dapat \r\nhadir untuk memberikan do\'a dan restu kepada kedua mempelai.</p>', '“Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir” (QS. Ar-Ruum 30 : 21)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guestbook`
--
ALTER TABLE `tbl_guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wedding`
--
ALTER TABLE `tbl_wedding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_guestbook`
--
ALTER TABLE `tbl_guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

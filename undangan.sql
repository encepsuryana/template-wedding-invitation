/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.3.16-MariaDB : Database - undangan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tbl_guestbook` */

DROP TABLE IF EXISTS `tbl_guestbook`;

CREATE TABLE `tbl_guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) NOT NULL,
  `sosial_media` varchar(255) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `hadir` varchar(7) NOT NULL,
  `ucapan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_guestbook` */

/*Table structure for table `tbl_settings` */

DROP TABLE IF EXISTS `tbl_settings`;

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_settings` */

insert  into `tbl_settings`(`id`) values 
(1);

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`full_name`,`username`,`password`) values 
(1,'Encep Suryana','encepsuryana','e4e05d342730456fcf3d8c87e95d5748');

/*Table structure for table `tbl_wedding` */

DROP TABLE IF EXISTS `tbl_wedding`;

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
  `kata_pernikahan` text DEFAULT NULL,
  `doa_pernikahan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_wedding` */

insert  into `tbl_wedding`(`id`,`kalimat_1`,`kalimat_2`,`nama_lengkap_pria`,`nama_lengkap_wanita`,`nama_panggilan_pria`,`nama_panggilan_wanita`,`alamat_pria`,`alamat_wanita`,`orangtua_pria`,`orangtua_wanita`,`acara_1`,`waktu_acara_1`,`acara_2`,`waktu_acara_2`,`hari_undangan`,`tgl_undangan`,`ket_tempat`,`alamat_lengkap`,`google_maps`,`kata_pernikahan`,`doa_pernikahan`) values 
(1,'Walimatul Ursy','Maha Suci Allah Subhanahu Wata\'ala Yang Telah Menciptakan Makhluk-Nya berpasang pasangan, Ya Allah Rahmatilah pernikahan kami:','Encep Suryana','Vera Melinda','Encep','Vera','Indramayu','Sumedang','Putra Pertama dari Bapak Ratim & Ibu Mimin','Putri Bungsu dari Bapak Sukarman & Ibu Tati Yuningsih','Akad nikah','10:00 WIB - Selesai','Resepsi','11:00 WIB - Selesai','Rabu','01, Januari 2020','Kediaman Mempelai Wanita','Lebakmaja Kaler RT.02 RW.14 Desa. Kutamandiri, Kec. Tanjungsari, Kab. Sumedang - Jawa Barat Indonesia 45362','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.7658606062648!2d107.79102182920022!3d-6.907945999688037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTQnMjguNiJTIDEwN8KwNDcnMjkuNyJF!5e0!3m2!1sid!2sid!4v1571136963873!5m2!1sid!2sid\" width=\"600\" height=\"400\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>','<p>Suatu Kehormatan & Kebahagiaan bagi kami apabila Sadudara/i dapat \r\nhadir untuk memberikan do\'a dan restu kepada kedua mempelai.</p>','“Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir” (QS. Ar-Ruum 30 : 21)');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.20-MariaDB : Database - penjualan_estate_ntr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`penjualan_estate_ntr` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `penjualan_estate_ntr`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(8) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jk_admin` tinyint(1) NOT NULL,
  `email_admin` varchar(250) NOT NULL,
  `alamat_admin` varchar(250) NOT NULL,
  `no_hp_admin` int(12) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

/*Table structure for table `cash_bertahap` */

DROP TABLE IF EXISTS `cash_bertahap`;

CREATE TABLE `cash_bertahap` (
  `id_cb` int(8) NOT NULL,
  `id_dp` int(8) NOT NULL,
  `ktp` varchar(250) NOT NULL,
  `kk` varchar(250) NOT NULL,
  `pembayaran_cb` int(9) NOT NULL,
  `sisa_cb` int(9) NOT NULL,
  PRIMARY KEY (`id_cb`),
  KEY `id_dp` (`id_dp`),
  CONSTRAINT `cash_bertahap_ibfk_1` FOREIGN KEY (`id_dp`) REFERENCES `dp` (`id_dp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `cash_bertahap` */

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id_pembeli` int(8) NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat_pembeli` varchar(150) NOT NULL,
  `no_hp_pembeli` varchar(12) NOT NULL,
  `nik_pembeli` varchar(250) NOT NULL,
  `id_status` int(1) NOT NULL,
  PRIMARY KEY (`id_pembeli`),
  KEY `customer_ibfk_1` (`id_status`),
  CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `customer` */

insert  into `customer`(`id_pembeli`,`nama_pembeli`,`alamat_pembeli`,`no_hp_pembeli`,`nik_pembeli`,`id_status`) values 
(1,'tes','tes','012345678910','1239485858685848',0);

/*Table structure for table `dp` */

DROP TABLE IF EXISTS `dp`;

CREATE TABLE `dp` (
  `id_dp` int(8) NOT NULL,
  `id_pembeli` int(8) NOT NULL,
  `id_perumahan` int(1) NOT NULL,
  `id_admin` int(8) NOT NULL,
  `harga_dp` int(8) NOT NULL,
  PRIMARY KEY (`id_dp`),
  KEY `id_pembeli` (`id_pembeli`),
  KEY `id_perumahan` (`id_perumahan`),
  KEY `id_admin` (`id_admin`),
  CONSTRAINT `dp_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `customer` (`id_pembeli`),
  CONSTRAINT `dp_ibfk_2` FOREIGN KEY (`id_perumahan`) REFERENCES `perumahan` (`id_perumahan`),
  CONSTRAINT `dp_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `dp` */

/*Table structure for table `hutang` */

DROP TABLE IF EXISTS `hutang`;

CREATE TABLE `hutang` (
  `id_hutang` int(8) NOT NULL,
  `id_pembeli` int(8) NOT NULL,
  `id_dp` int(8) NOT NULL,
  `total_hutang` int(9) DEFAULT NULL,
  KEY `id_pembeli` (`id_pembeli`),
  KEY `id_dp` (`id_dp`),
  CONSTRAINT `hutang_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `customer` (`id_pembeli`),
  CONSTRAINT `hutang_ibfk_2` FOREIGN KEY (`id_dp`) REFERENCES `dp` (`id_dp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `hutang` */

/*Table structure for table `kpr` */

DROP TABLE IF EXISTS `kpr`;

CREATE TABLE `kpr` (
  `id_kpr` int(8) NOT NULL,
  `id_dp` int(8) NOT NULL,
  `kk_pembeli` varchar(250) NOT NULL,
  `surat_nikah/cerai` varchar(250) NOT NULL,
  `slip_gaji` varchar(250) NOT NULL,
  `npwp` varchar(250) NOT NULL,
  `rekening_koran` varchar(250) NOT NULL,
  `sk_pns` varchar(250) NOT NULL,
  `sku_wirausaha` varchar(250) NOT NULL,
  `laporan_keuangan_6_bulan_wirausaha` varchar(250) NOT NULL,
  PRIMARY KEY (`id_kpr`),
  KEY `id_dp` (`id_dp`),
  CONSTRAINT `kpr_ibfk_1` FOREIGN KEY (`id_dp`) REFERENCES `dp` (`id_dp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `kpr` */

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `no_kavling` int(5) NOT NULL,
  `type` int(5) NOT NULL,
  `harga_standart` int(15) NOT NULL,
  `harga_kelebihan_tanah` int(15) DEFAULT NULL,
  `booking_fee` int(15) NOT NULL,
  `uang_muka` int(15) NOT NULL,
  `kpr` int(15) NOT NULL,
  `biaya_admin` int(15) NOT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pemesanan` */

/*Table structure for table `perumahan` */

DROP TABLE IF EXISTS `perumahan`;

CREATE TABLE `perumahan` (
  `id_perumahan` int(1) NOT NULL AUTO_INCREMENT,
  `luas_bangunan` char(3) NOT NULL,
  `luas_tanah` char(3) NOT NULL,
  `harga_perumahan` int(9) NOT NULL,
  PRIMARY KEY (`id_perumahan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `perumahan` */

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id_status` int(1) NOT NULL,
  `nama_status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `status` */

insert  into `status`(`id_status`,`nama_status`) values 
(0,'booking'),
(1,'dp'),
(2,'masa pembayaran'),
(3,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

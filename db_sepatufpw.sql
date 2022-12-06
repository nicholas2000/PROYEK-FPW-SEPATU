/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_sepatufpw
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sepatufpw` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_sepatufpw`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_Barang` varchar(64) NOT NULL,
  `Ukuran` int(11) NOT NULL,
  `Id_Brand` varchar(64) NOT NULL,
  `Kategori` varchar(64) NOT NULL,
  `Harga` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `Id_Brand` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_brand` varchar(64) NOT NULL,
  PRIMARY KEY (`Id_Brand`,`Nama_brand`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `brand` */

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `Id_Cart` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Barang` int(11) NOT NULL,
  `Jumlah_Barang` int(11) NOT NULL,
  `Harga` int(11) NOT NULL,
  PRIMARY KEY (`Id_Cart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `cart` */

/*Table structure for table `dtrans` */

DROP TABLE IF EXISTS `dtrans`;

CREATE TABLE `dtrans` (
  `Kode_Transaksi` int(11) NOT NULL,
  `Id_Barang` int(11) NOT NULL,
  `Nama_Barang` varchar(64) NOT NULL,
  `Harga_Barang` int(11) NOT NULL,
  `Jumlah_Barang` int(11) NOT NULL,
  PRIMARY KEY (`Kode_Transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `dtrans` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `htrans` */

DROP TABLE IF EXISTS `htrans`;

CREATE TABLE `htrans` (
  `Kode_Transaksi` int(11) NOT NULL,
  `Total_Pembelian` int(11) NOT NULL,
  `Tanggal_Transaksi` date DEFAULT NULL,
  `Id_Customer` int(11) DEFAULT NULL,
  PRIMARY KEY (`Kode_Transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `htrans` */

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `Id_Kategori` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_Kategori` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`Id_Kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `kategori` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2022_12_06_123511_users',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `Id_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_supplier` varchar(64) NOT NULL,
  `Id_barang` int(11) NOT NULL,
  `Alamat` varchar(64) NOT NULL,
  PRIMARY KEY (`Id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `supplier` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `tb_user_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_user` */

insert  into `tb_user`(`user_id`,`name`,`email`,`username`,`password`,`created_at`,`updated_at`) values 
(1,'jeff','jeff@gmail.com','jeff','$2y$10$HYOK6qTLO7prQaDnyI/fveAuoSNKHmMmq5FVCxaBtR4EZb9iB24kG','2022-12-06 13:25:08','2022-12-06 13:25:08'),
(2,'budi','budi@gmail.com','budi','$2y$10$y1yXYzmKfNgixjkXc5mNp.CKsVXLjj7x7etvwNBfkY7xDFNwbBdFC','2022-12-06 13:25:36','2022-12-06 13:25:36'),
(3,'tuti','tuti@gmail.com','tuti','$2y$10$SKyAVV6TakjT/gQdKmEr0.SSiD8Q2K.nSJTCL5A7DvFzh8QXTmA/2','2022-12-06 13:26:18','2022-12-06 13:26:18'),
(4,'nic','nichol@gmail.com','nic','$2y$10$mYW1Pjy/sKenqmJJYPO7rO4lOEGXbLg2.G5aeXvDTOciSYWX8xVuq','2022-12-06 13:27:21','2022-12-06 13:27:21'),
(5,'bunda','bunda@gmail.com','bunda','$2y$10$FSPAZJpEVMrU7i0uALpgPeck4dNSZtPwS5GoR6gaG4Zok5tjqoxGe','2022-12-06 13:28:11','2022-12-06 13:28:11'),
(6,'alvis','alvis@gmail.com','alvis','$2y$10$0jkrJ4ARR.eTV/cjOYD4du.p1RR.E/gMIEkG1XTkZ7XLPm5ZSGfpO','2022-12-06 13:30:51','2022-12-06 13:30:51'),
(7,'valent','valent@gmail.com','valent','$2y$10$AkqJqaapnjZzEzs1c0My2.1ngPFxDhQl4d7/fD.lRaKSwz8Vi7oN6','2022-12-06 13:31:41','2022-12-06 13:31:41'),
(8,'tono','tono@gmail.com','tono','$2y$10$N.Y1gwdUkYG..xoRt332p.7mF1O0HxZ10Mv5lkb5bPqen0Ve8dS1K','2022-12-06 13:34:39','2022-12-06 13:34:39'),
(9,'siti','siti@gmail.com','siti','$2y$10$US1OMjcl1hqTQpxsx/kpWOZP6XQjNYf7jPocOueLr13i01CsGjPeW','2022-12-06 13:34:57','2022-12-06 13:34:57'),
(10,'andi','andi@gmail.com','andi','$2y$10$13wZ1iXn84ywXSnMeSKm9udPXrUVFUAaFVAN2vyG0DKuwHIB9COEa','2022-12-06 13:35:38','2022-12-06 13:35:38'),
(11,'sayuti','s@gmail.com','melok','$2y$10$xR4W7Gwfb1HpDbyHn4xr4OJ2z/eJSSvieBAC0M844F3UxIeD7em0G','2022-12-06 13:36:20','2022-12-06 13:36:20'),
(12,'alex','alex@gmail.com','alex','$2y$10$HLVvKvAfHsm.r3VCoD4nJeNXSxEsvPBXaC8QX1HBhW2Var5ceBMW.','2022-12-06 13:37:24','2022-12-06 13:37:24'),
(13,'baran','barang@gmail.com','baran','$2y$10$mCs.EBWmbY5oDQ41csBxCeVWQQg09SssWZUs957It593Ja/Wta8cW','2022-12-06 13:39:11','2022-12-06 13:39:11'),
(14,'budiman','annanta@gmail.com','budiman','$2y$10$clmDQp7vZT6wkf6wZPWPMOjMp.RmZnzyaLaNasXodOhJVGlAhVvBm','2022-12-06 13:40:18','2022-12-06 13:40:18'),
(15,'admin','admin@gmail.com','admin','$2y$10$zeHEebl0633agED3.H05xO2mKXAnzsb2tH7LWgFELHQU4G2ZWVp2S','2022-12-06 13:49:25','2022-12-06 13:49:25');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

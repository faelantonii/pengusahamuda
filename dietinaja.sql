/*
 Navicat Premium Data Transfer

 Source Server         : Connection
 Source Server Type    : MySQL
 Source Server Version : 50732
 Source Host           : localhost:8889
 Source Schema         : dietinaja

 Target Server Type    : MySQL
 Target Server Version : 50732
 File Encoding         : 65001

 Date: 26/01/2021 01:36:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of berita
-- ----------------------------
BEGIN;
INSERT INTO `berita` VALUES (5, '50% off', 'Disini Deskripsi', '1566039513_02_lunch.jpg');
INSERT INTO `berita` VALUES (6, '50% off', 'Mix Vegetable\r\n', '1602409996_02_lunch.jpg');
INSERT INTO `berita` VALUES (8, 'asdasdasd', 'asdasdasd', '1520334633_banner-19.jpg');
COMMIT;

-- ----------------------------
-- Table structure for jadwal_makanan
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_makanan`;
CREATE TABLE `jadwal_makanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `makanan_id` int(11) DEFAULT NULL,
  `rentang_kalori` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `jadwal_makanan` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jadwal_makanan
-- ----------------------------
BEGIN;
INSERT INTO `jadwal_makanan` VALUES (1, 8, '800 - 100 kkal', '$deskripsi $deskripsi $deskripsi $deskripsi $deskripsi $deskripsi ', 'senin', 'sarapan', '5841691_02_lunch.jpg');
INSERT INTO `jadwal_makanan` VALUES (2, 9, '800 - 1000 kkal', 'ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi', 'senin', 'makan siang', '5841691_02_lunch.jpg');
INSERT INTO `jadwal_makanan` VALUES (3, 10, '500 - 2000 kkal', 'asasasasasasas', 'senin', 'makan malam', '1970260953_03_dinner.jpg');
INSERT INTO `jadwal_makanan` VALUES (4, 8, '500 - 2000 kkal', 'sadasdasdasd', 'selasa', 'sarapan', '1544828825_03_menu_balanced.jpg');
INSERT INTO `jadwal_makanan` VALUES (5, 11, '500 - 2000 kkal', 'asdasd', 'selasa', 'makan siang', '2083847561_02_menu_muscle.jpg');
INSERT INTO `jadwal_makanan` VALUES (6, 10, '800 - 1000 kkal', 'sdfdsfdsf', 'selasa', 'makan malam', '1138526958_03_dinner.jpg');
INSERT INTO `jadwal_makanan` VALUES (7, 10, '800 - 100 kkal', 'asdasd', 'kamis', 'sarapan', '1735383074_03_menu_balanced.jpg');
COMMIT;

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login
-- ----------------------------
BEGIN;
INSERT INTO `login` VALUES (1, 'admin', 'admin');
COMMIT;

-- ----------------------------
-- Table structure for lokasi
-- ----------------------------
DROP TABLE IF EXISTS `lokasi`;
CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) DEFAULT NULL,
  `nama_tempat` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lokasi
-- ----------------------------
BEGIN;
INSERT INTO `lokasi` VALUES (1, '1629605312_03_menu_balanced.jpg', 'Nasa Gym', '-6.9154474', '107.6532114', 'Jl. Cikampek XV No.18, Antapani Tengah, Kec. Antapani, Kota Bandung, Jawa Barat 40291');
INSERT INTO `lokasi` VALUES (2, '1535867701_03_dinner.jpg', 'Gelora Perdamas', '-6.9808792', '108.0810277', 'Cikareo Hilir, Desa, South Cikareo, Wado, Sumedang Regency, West Java 45373');
INSERT INTO `lokasi` VALUES (3, '1047995825_02_menu_muscle.jpg', 'ZHEKIREY FITNESS CENTER', '-7.040915', '108.0838946', 'Jl. Raya Sumedang - Cibeureum, Cisitu, Kec. Malangbong, Kabupaten Garut, Jawa Barat 44188');
INSERT INTO `lokasi` VALUES (4, '2023681972_02_lunch.jpg', 'Top Gym Center', '-6.90756', '107.6787663', 'Jl. A.H. Nasution No.7, Pasir Endah, Kec. Ujung Berung, Kota Bandung, Jawa Barat 40619');
INSERT INTO `lokasi` VALUES (5, '507139646_01_menu_slimming.jpg', 'Rai Fitness Bandung', '-6.880711', '107.5891627', '12, Jl. Karangsari No.12, Pasteur, Sukajadi, Bandung City, West Java 40161');
INSERT INTO `lokasi` VALUES (7, '1055610548_01_breakfast.jpg', 'Libra Gym', '-6.9620064', '107.792183', 'Jl. Rancaekek No.97, Mangunarga, Kec. Cimanggung, Kabupaten Sumedang, Jawa Barat 40394');
INSERT INTO `lokasi` VALUES (8, '115217305_blog_01-1150x720.jpg', 'sdfsdf', '-6.9620064', '107.792183', 'sdfsdfsdf');
COMMIT;

-- ----------------------------
-- Table structure for makanan
-- ----------------------------
DROP TABLE IF EXISTS `makanan`;
CREATE TABLE `makanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_makanan` varchar(255) DEFAULT NULL,
  `kalori` varchar(255) DEFAULT NULL,
  `kategori` enum('1','2','3','4') DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of makanan
-- ----------------------------
BEGIN;
INSERT INTO `makanan` VALUES (8, 'satu', '120 - 500 kkal', '1', 'tes123', '1794709013_blog_01-1150x720.jpg');
INSERT INTO `makanan` VALUES (9, 'sdfdsfsdf', '120 - 700 kkal', '2', 'ddfsfdsdf', '181561126_banner-18.jpg');
INSERT INTO `makanan` VALUES (10, 'asdasdasdasd', '120 - 700 kkal', '3', 'asdasdasdasdasd', '762799827_blog_01-1150x720.jpg');
INSERT INTO `makanan` VALUES (11, 'asdasdasdasdasdasdasd', '120 - 800 kkal', '4', 'asdasdasdasdasdasd', '47607951_blog_24-1150x720.jpg');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

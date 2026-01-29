/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_kampung_kecil
Target Host: localhost
Target Database: db_kampung_kecil
Date: 29/01/2026 16.48.56
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for tbl_pesan
-- ----------------------------
CREATE TABLE `tbl_pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `status` enum('Sudah Dibaca','Belum Dibaca') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Status` enum('Aktif','Nonaktif') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `tbl_pesan` VALUES ('1', 'Zen', 'zen@zen.com', 'Halo, Terima Kasih Atas Pelayanan Anda...             ', 'Belum Dibaca');
INSERT INTO `tbl_pesan` VALUES ('2', 'Zen', 'zen@zen.com', '\r\n            Terima kasih            ', 'Belum Dibaca');
INSERT INTO `tbl_pesan` VALUES ('3', 'Zen', 'zen@zen.com', '\r\n            Terima kasih            ', 'Belum Dibaca');
INSERT INTO `tbl_user` VALUES ('1', 'Zen1', '123456', 'Zen', 'zen@gmail.com', 'Aktif');

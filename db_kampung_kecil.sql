/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_kampung_kecil
Target Host: localhost
Target Database: db_kampung_kecil
Date: 17/01/2026 11.30.22
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `tbl_pesan` VALUES ('1', 'Zen', 'zen@zen.com', 'Halo, Terima Kasih Atas Pelayanan Anda...             ', 'Belum Dibaca');

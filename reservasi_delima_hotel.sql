# Host: localhost  (Version 5.5.5-10.1.35-MariaDB)
# Date: 2019-07-10 19:43:46
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "tabel_kamar"
#

DROP TABLE IF EXISTS `tabel_kamar`;
CREATE TABLE `tabel_kamar` (
  `IdKamar` int(10) NOT NULL AUTO_INCREMENT,
  `NomorKamar` varchar(4) DEFAULT NULL,
  `Fasilitas` text NOT NULL,
  `Type` enum('Standar','Deluxe','Superior','Junior Suite','Executive') NOT NULL DEFAULT 'Standar',
  `Harga` double DEFAULT NULL,
  PRIMARY KEY (`IdKamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tabel_kamar"
#


#
# Structure for table "tabel_reservasi"
#

DROP TABLE IF EXISTS `tabel_reservasi`;
CREATE TABLE `tabel_reservasi` (
  `ID_reservasi` int(10) NOT NULL AUTO_INCREMENT,
  `ID_tamu` varchar(11) NOT NULL,
  `pesanan` int(11) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `Status` enum('Reservasi','Check In','Check Out') NOT NULL DEFAULT 'Reservasi',
  `IdKamar` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_reservasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "tabel_reservasi"
#

INSERT INTO `tabel_reservasi` VALUES (0,'',0,'asdfa','Reservasi',NULL),(1,'1',0,'asdfa','Reservasi',NULL);

#
# Structure for table "tabel_user"
#

DROP TABLE IF EXISTS `tabel_user`;
CREATE TABLE `tabel_user` (
  `IdUser` int(1) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) NOT NULL DEFAULT '0',
  `Nama` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IdUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tabel_user"
#

INSERT INTO `tabel_user` VALUES (1,'Admin','Admin','Administrator');

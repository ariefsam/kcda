-- Adminer 2.2.0 dump
SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `kcda_data_umur`;
CREATE TABLE `kcda_data_umur` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `desa` mediumint(9) NOT NULL,
  `kelompok_umur` tinyint(4) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `kcda_desa`;
CREATE TABLE `kcda_desa` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `kecamatan` smallint(6) NOT NULL,
  `keterangan` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `kcda_desa` (`id`, `nama`, `kecamatan`, `keterangan`) VALUES
(1,	'Barengkok_edit',	1,	'15 KM dari kampus IPB Dramaga');

DROP TABLE IF EXISTS `kcda_guru`;
CREATE TABLE `kcda_guru` (
  `id` int(11) NOT NULL,
  `desa` mediumint(9) NOT NULL,
  `jenis_sekolah` tinyint(4) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `kcda_infrastruktur_pendidikan`;
CREATE TABLE `kcda_infrastruktur_pendidikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desa` smallint(6) NOT NULL,
  `jenis_sekolah` smallint(6) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `kcda_jenis_kelamin`;
CREATE TABLE `kcda_jenis_kelamin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `desa` tinyint(4) NOT NULL,
  `pria` int(11) NOT NULL,
  `wanita` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `kcda_jenis_kelamin` (`id`, `desa`, `pria`, `wanita`, `tanggal`) VALUES
(1,	1,	200,	240,	'0000-00-00'),
(2,	1,	200,	240,	'0000-00-00');

DROP TABLE IF EXISTS `kcda_jenis_sekolah`;
CREATE TABLE `kcda_jenis_sekolah` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `kcda_kecamatan`;
CREATE TABLE `kcda_kecamatan` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `keterangan` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `kcda_kecamatan` (`id`, `nama`, `keterangan`) VALUES
(1,	'Leuwiliang_edit',	'15 KM dari kampus IPB Dramaga');

DROP TABLE IF EXISTS `kcda_kelompok_umur`;
CREATE TABLE `kcda_kelompok_umur` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `kcda_murid`;
CREATE TABLE `kcda_murid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desa` smallint(6) NOT NULL,
  `jenis_sekolah` smallint(6) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



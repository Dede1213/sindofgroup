-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `m_customer`;
CREATE TABLE `m_customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `id_sales` int(11) NOT NULL,
  `no_ktp_passport` varchar(20) NOT NULL,
  `no_npwp` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_kantor` varchar(15) NOT NULL,
  `no_rumah` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `status_rumah` varchar(15) NOT NULL,
  `sewa_berakhir` date NOT NULL,
  `status_data` int(4) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_customer_img`;
CREATE TABLE `m_customer_img` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `id_store` int(11) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `npwp_pribadi` varchar(255) NOT NULL,
  `siup` varchar(255) NOT NULL,
  `tdp` varchar(255) NOT NULL,
  `npwp_perusahaan` varchar(255) NOT NULL,
  `domisili` varchar(255) NOT NULL,
  `sktp` varchar(255) NOT NULL,
  `foto_toko` varchar(255) NOT NULL,
  `foto_gudang` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_customer_store`;
CREATE TABLE `m_customer_store` (
  `id_store` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_fax` varchar(15) NOT NULL,
  `status_store` varchar(50) NOT NULL,
  `sewa_berakhir` date NOT NULL,
  `panjang` varchar(50) NOT NULL,
  `lebar` varchar(50) NOT NULL,
  `jumlah_karyawan` varchar(5) NOT NULL,
  `jumlah_teknisi` varchar(5) NOT NULL,
  `sub_outlet_status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_store`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_customer_store_bank`;
CREATE TABLE `m_customer_store_bank` (
  `id_bank` int(11) NOT NULL AUTO_INCREMENT,
  `id_store` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_bank`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_customer_store_gudang`;
CREATE TABLE `m_customer_store_gudang` (
  `id_gudang` int(11) NOT NULL AUTO_INCREMENT,
  `id_store` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `rt` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `rw` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `kelurahan` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `kecamatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `kabupaten_kota` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `provinsi` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `kode_pos` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `no_hp` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `no_fax` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_gudang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_customer_store_penjualan`;
CREATE TABLE `m_customer_store_penjualan` (
  `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `id_store` int(11) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `presentase` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_penjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_customer_verifikasi`;
CREATE TABLE `m_customer_verifikasi` (
  `no_verifikasi` int(5) NOT NULL AUTO_INCREMENT,
  `id_store` int(5) NOT NULL,
  `id_customer` int(5) NOT NULL,
  `tgl_create` date NOT NULL,
  `tgl_survei` date NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_disetujui` date NOT NULL,
  `nm_approval` varchar(50) NOT NULL,
  `distribution_chanel` varchar(50) NOT NULL,
  `credit_limit` int(11) NOT NULL,
  `top` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`no_verifikasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_menu`;
CREATE TABLE `m_menu` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `menu` varchar(200) NOT NULL DEFAULT '',
  `menu_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `icon` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL DEFAULT '',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;


DROP TABLE IF EXISTS `m_menu_user`;
CREATE TABLE `m_menu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_user_level`;
CREATE TABLE `m_user_level` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tt_sales`;
CREATE TABLE `tt_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_invoice` varchar(255) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_approval` int(5) NOT NULL,
  `status_pembelian` int(5) NOT NULL,
  `status_pembayaran` int(5) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `ppn` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tt_sales_product`;
CREATE TABLE `tt_sales_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_invoice` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2018-08-25 23:17:05
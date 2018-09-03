-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `m_customer`;
CREATE TABLE `m_customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) NOT NULL,
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
  `id_status` int(4) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_customer` (`id_customer`, `nik`, `no_ktp_passport`, `no_npwp`, `nama`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten_kota`, `provinsi`, `kode_pos`, `no_hp`, `no_kantor`, `no_rumah`, `email`, `status_rumah`, `sewa_berakhir`, `id_status`, `created_date`) VALUES
(4,	17080001,	'999995289304',	'234567890',	'Dede Irawan',	'tester alamat',	'Suradita',	'Cisauk',	'Kab.tangerang',	'Banten',	'12312',	'089832989328',	'021999999',	'09809809',	'dede.irawan1213',	'Milik Sendiri',	'0000-00-00',	4,	'2018-09-02 14:33:44');

DROP TABLE IF EXISTS `m_customer_bank`;
CREATE TABLE `m_customer_bank` (
  `id_bank` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_bank`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_customer_bank` (`id_bank`, `id_customer`, `nama`, `no_rekening`, `created_date`) VALUES
(3,	4,	'BCA',	'7888888772',	'2018-09-02 13:59:25'),
(4,	4,	'MANDIRI',	'123123',	'2018-09-02 14:03:54');

DROP TABLE IF EXISTS `m_customer_gudang`;
CREATE TABLE `m_customer_gudang` (
  `id_gudang` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `pic` varchar(50) NOT NULL,
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

INSERT INTO `m_customer_gudang` (`id_gudang`, `id_customer`, `pic`, `created_date`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten_kota`, `provinsi`, `kode_pos`, `no_hp`, `no_fax`) VALUES
(2,	4,	'Gudang 1',	'2018-09-02 14:21:34',	'alamat gudang',	'rt gudang',	'Gudang 1',	'Suradita',	'Cisauk',	'Tangerang',	'Banten',	'kodepos gudam',	'08928982',	'032132822');

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


DROP TABLE IF EXISTS `m_customer_penjualan`;
CREATE TABLE `m_customer_penjualan` (
  `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `presentase` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_penjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_customer_penjualan` (`id_penjualan`, `id_customer`, `produk`, `presentase`, `created_date`) VALUES
(4,	4,	'produk 1',	'10%',	'2018-09-02 14:03:29'),
(5,	4,	'produk 2',	'10%',	'2018-09-02 14:03:41');

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
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_store`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_customer_store` (`id_store`, `id_customer`, `nama`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten_kota`, `provinsi`, `no_hp`, `no_fax`, `status_store`, `sewa_berakhir`, `panjang`, `lebar`, `jumlah_karyawan`, `jumlah_teknisi`, `created_date`) VALUES
(4,	4,	'Toko 1',	'Alamat Toko 1',	'rt to',	'rw to',	'Suradita',	'Cisauk',	'Tangerang',	'Banten',	'0897737373',	'029282828',	'Milik Sendiri',	'0000-00-00',	'10',	'10',	'100',	'3',	'2018-09-02 14:18:20');

DROP TABLE IF EXISTS `m_customer_verifikasi`;
CREATE TABLE `m_customer_verifikasi` (
  `no_verifikasi` varchar(50) NOT NULL,
  `nik` int(11) NOT NULL,
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

INSERT INTO `m_customer_verifikasi` (`no_verifikasi`, `nik`, `id_customer`, `tgl_create`, `tgl_survei`, `tgl_pengajuan`, `tgl_disetujui`, `nm_approval`, `distribution_chanel`, `credit_limit`, `top`, `catatan`, `created_date`) VALUES
('VP2990',	17080001,	4,	'2018-09-03',	'2018-09-03',	'2018-09-03',	'2018-09-03',	'Awan',	'Retail',	0,	'',	'',	'2018-09-02 14:34:53');

DROP TABLE IF EXISTS `m_karyawan`;
CREATE TABLE `m_karyawan` (
  `nik` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `lokasi_detail` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `showroom` varchar(50) NOT NULL,
  `area_gudang` varchar(50) NOT NULL,
  `prosedur` varchar(50) NOT NULL,
  `bisnis_unit` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_karyawan` (`nik`, `nama`, `level`, `lokasi`, `lokasi_detail`, `divisi`, `showroom`, `area_gudang`, `prosedur`, `bisnis_unit`, `created_date`) VALUES
(17080001,	'Dede Sales Credit',	'',	'',	'',	'',	'',	'',	'',	'',	'2018-09-02 10:54:47');

DROP TABLE IF EXISTS `m_karyawan_area_gudang`;
CREATE TABLE `m_karyawan_area_gudang` (
  `area_gudang` varchar(50) NOT NULL,
  PRIMARY KEY (`area_gudang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_karyawan_area_gudang` (`area_gudang`) VALUES
('Gudang Cabang'),
('Konsinyasi'),
('Showroom');

DROP TABLE IF EXISTS `m_karyawan_bisnis_unit`;
CREATE TABLE `m_karyawan_bisnis_unit` (
  `bisnis_unit` varchar(50) NOT NULL,
  PRIMARY KEY (`bisnis_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_karyawan_bisnis_unit` (`bisnis_unit`) VALUES
('sales');

DROP TABLE IF EXISTS `m_karyawan_divisi`;
CREATE TABLE `m_karyawan_divisi` (
  `divisi` varchar(50) NOT NULL,
  PRIMARY KEY (`divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_karyawan_divisi` (`divisi`) VALUES
('Dealer'),
('Digital'),
('Retail');

DROP TABLE IF EXISTS `m_karyawan_level`;
CREATE TABLE `m_karyawan_level` (
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_karyawan_level` (`level`) VALUES
('Director'),
('Manager'),
('Staff'),
('Supervisor');

DROP TABLE IF EXISTS `m_karyawan_lokasi`;
CREATE TABLE `m_karyawan_lokasi` (
  `lokasi` varchar(50) NOT NULL,
  PRIMARY KEY (`lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_karyawan_lokasi` (`lokasi`) VALUES
('All'),
('Cabang'),
('Pusat'),
('Showroom');

DROP TABLE IF EXISTS `m_karyawan_lokasi_detail`;
CREATE TABLE `m_karyawan_lokasi_detail` (
  `lokasi_detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_karyawan_lokasi_detail` (`lokasi_detail`) VALUES
('Jakarta'),
('Bogor'),
('Depok'),
('Tangerang'),
('Bekasi');

DROP TABLE IF EXISTS `m_karyawan_prosedur`;
CREATE TABLE `m_karyawan_prosedur` (
  `prosedur` varchar(50) NOT NULL,
  PRIMARY KEY (`prosedur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_karyawan_prosedur` (`prosedur`) VALUES
('all'),
('cash'),
('credit'),
('project');

DROP TABLE IF EXISTS `m_karyawan_showroom`;
CREATE TABLE `m_karyawan_showroom` (
  `nama_showroom` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  PRIMARY KEY (`lokasi`)
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

INSERT INTO `m_menu` (`id`, `parent_id`, `menu`, `menu_order`, `icon`, `link`, `created`) VALUES
(1,	0,	'Home',	1,	'fa fa-home',	'dashboard',	'2018-07-27 20:04:35'),
(2,	1,	'Absensi',	2,	'fa fa-file',	'dashboard/absensi',	'2018-07-27 21:51:27'),
(3,	1,	'Schedule Plan',	3,	'fa fa-file',	'dashboard/schedule_plan',	'2018-07-27 21:51:45'),
(4,	1,	'Call Plan',	4,	'fa fa-file',	'dashboard/call_plan',	'2018-07-27 21:51:56'),
(5,	0,	'Marketing',	2,	'fa fa-line-chart',	'#',	'2018-07-28 05:03:53'),
(6,	5,	'Pricelist',	1,	'fa fa-file',	'dashboard/pricelist',	'2018-07-28 05:12:18'),
(7,	5,	'Product',	2,	'fa fa-file',	'dashboard/product',	'2018-07-28 05:13:19'),
(8,	5,	'Promo',	3,	'fa fa-file',	'dashboard/pricelist/promo',	'2018-07-28 05:14:11'),
(9,	0,	'Sales Order',	3,	'fa fa-bar-chart',	'#',	'2018-07-28 05:16:26'),
(10,	9,	'Sales Order',	1,	'fa fa-shopping-cart',	'sales/sales_order',	'2018-08-27 04:50:17'),
(11,	9,	'Sell Out',	2,	'fa fa-file',	'dashboard/data_customer_sellout',	'2018-07-28 05:18:52'),
(12,	0,	'Customer ID',	4,	'fa fa-user',	'#',	'2018-07-28 05:21:48'),
(13,	12,	'Create New Customer',	1,	'fa fa-plus',	'sales/customer/add_customer',	'2018-08-25 07:44:05'),
(14,	12,	'Data Customer',	2,	'fa fa-list',	'sales/customer',	'2018-08-27 04:49:51'),
(15,	0,	'Payment',	5,	'fa fa-money',	'dashboard/payment',	'2018-07-28 05:27:01'),
(16,	0,	'Print & Upload',	6,	'fa fa-print',	'#',	'2018-07-28 05:27:43'),
(17,	16,	'Print',	1,	'fa fa-print',	'#',	'2018-07-28 05:28:27'),
(18,	17,	'Sales Order',	1,	'fa fa-file',	'sales/sales_order/printout/cash',	'2018-08-28 07:09:17'),
(19,	17,	'Sell Out',	2,	'fa fa-file',	'dashboard/print_sellout',	'2018-07-28 05:31:00'),
(20,	17,	'Form Verifikasi',	3,	'fa fa-file',	'sales/customer/list_verifikasi',	'2018-09-02 14:58:17'),
(21,	17,	'Kwitansi',	4,	'fa fa-file',	'dashboard/print_kwitansi',	'2018-07-28 05:33:35'),
(22,	16,	'Upload',	2,	'fa fa-upload',	'#',	'2018-07-28 05:34:28'),
(23,	22,	'Sales Order',	1,	'fa fa-file',	'sales/sales_order/upload',	'2018-08-28 09:21:36'),
(24,	22,	'Verifikasi Customer',	2,	'fa fa-file',	'/sales/customer/list_verifikasi_upload',	'2018-09-03 06:24:37'),
(25,	0,	'Report',	7,	'fa fa-briefcase',	'#',	'2018-07-28 05:37:42'),
(26,	25,	'Progress',	1,	'fa fa-file',	'#',	'2018-07-28 07:09:13'),
(27,	26,	'Report SO',	1,	'fa fa-file',	'sales/sales_order/so_progress',	'2018-08-29 09:12:26'),
(28,	26,	'Report Sell Out',	2,	'fa fa-file',	'dashboard/sellout',	'2018-07-28 07:11:34'),
(29,	26,	'Report New Customer',	3,	'fa fa-file',	'sales/customer/cust_progress',	'2018-09-02 15:48:11'),
(30,	26,	'SO Draft',	4,	'fa fa-file',	'dashboard/draft',	'2018-07-28 07:13:18'),
(31,	25,	'Final',	2,	'fa fa-file',	'#',	'2018-07-28 07:13:57'),
(32,	31,	'Report Absensi',	1,	'fa fa-file',	'report_absensi',	'2018-07-28 07:14:52'),
(33,	31,	'Schedule & Call Plan',	2,	'fa fa-file',	'dashboard/report_plan',	'2018-07-28 07:15:42'),
(34,	31,	'Report SO',	3,	'fa fa-file',	'sales/sales_order/so_final',	'2018-08-29 09:46:58'),
(35,	31,	'Report Sell Out',	4,	'fa fa-file',	'dashboard/sellout',	'2018-07-28 07:17:25'),
(36,	31,	'Report Komisi',	5,	'fa fa-file',	'#',	'2018-07-28 07:18:36'),
(37,	0,	'Setting Menu',	8,	'fa fa-gear',	'menu',	'2018-07-30 14:28:23'),
(38,	0,	'Setting User',	9,	'fa fa-gear',	'user',	'2018-07-30 14:28:36'),
(39,	0,	'Data In Progress',	1,	'fa fa-folder',	'#',	'2018-08-02 05:05:42'),
(40,	39,	'List Pembayaran',	1,	'fa fa-folder',	'#',	'2018-08-02 05:12:57'),
(41,	40,	'Kategori Cash',	1,	'fa fa-file',	'dashboard/f_kategori_cash',	'2018-08-02 05:10:37'),
(42,	40,	'Kategori Project',	2,	'fa fa-file',	'dashboard/f_kategori_project',	'2018-08-02 05:10:46'),
(43,	39,	'Buku Pembayaran',	2,	'fa fa-folder',	'#',	'2018-08-02 05:11:14'),
(44,	39,	'List Kredit',	3,	'fa fa-folder',	'#',	'2018-08-02 05:12:38'),
(45,	43,	'Kategori Cash',	1,	'fa fa-folder',	'#',	'2018-08-02 05:14:06'),
(46,	43,	'Kategori Project',	2,	'fa fa-folder',	'#',	'2018-08-02 05:14:27'),
(47,	45,	'Buku Penampung',	1,	'fa fa-file',	'#',	'2018-08-02 05:15:39'),
(48,	45,	'Buku Cash',	2,	'fa fa-file',	'#',	'2018-08-02 05:16:43'),
(49,	44,	'Kategori Credit',	1,	'fa fa-file',	'#',	'2018-08-02 05:18:05'),
(50,	44,	'Kategori Project',	2,	'fa fa-file',	'#',	'2018-08-02 05:18:28'),
(51,	31,	'Report Customer',	3,	'fa fa-file',	'sales/customer/cust_final',	'2018-09-02 15:59:44');

DROP TABLE IF EXISTS `m_menu_user`;
CREATE TABLE `m_menu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_menu_user` (`id`, `id_menu`, `id_user`, `created`) VALUES
(146,	'37',	'1',	'2018-08-22 04:34:29'),
(147,	'38',	'1',	'2018-08-22 04:34:29'),
(169,	'9',	'4',	'2018-08-26 06:08:27'),
(170,	'10',	'4',	'2018-08-26 06:08:27'),
(171,	'12',	'4',	'2018-08-26 06:08:27'),
(172,	'13',	'4',	'2018-08-26 06:08:27'),
(173,	'14',	'4',	'2018-08-26 06:08:27'),
(174,	'16',	'4',	'2018-08-26 06:08:27'),
(175,	'17',	'4',	'2018-08-26 06:08:27'),
(176,	'18',	'4',	'2018-08-26 06:08:27'),
(177,	'20',	'4',	'2018-08-26 06:08:27'),
(178,	'22',	'4',	'2018-08-26 06:08:27'),
(179,	'23',	'4',	'2018-08-26 06:08:27'),
(180,	'24',	'4',	'2018-08-26 06:08:28'),
(181,	'25',	'4',	'2018-08-26 06:08:28'),
(182,	'26',	'4',	'2018-08-26 06:08:28'),
(183,	'27',	'4',	'2018-08-26 06:08:28'),
(184,	'29',	'4',	'2018-08-26 06:08:28'),
(185,	'31',	'4',	'2018-08-26 06:08:28'),
(186,	'34',	'4',	'2018-08-26 06:08:28'),
(187,	'51',	'4',	'2018-08-26 06:08:28');

DROP TABLE IF EXISTS `m_product`;
CREATE TABLE `m_product` (
  `product_code` varchar(50) NOT NULL,
  `home_code` varchar(50) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `kategori_1` varchar(255) NOT NULL,
  `kategori_2` varchar(255) NOT NULL,
  `kategori_3` varchar(255) NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `ukuran` int(5) NOT NULL,
  `ukuran_satuan` varchar(5) NOT NULL,
  `volume` int(5) NOT NULL,
  `nominal` int(5) NOT NULL,
  `nominal_satuan` varchar(5) NOT NULL,
  `cuci` varchar(10) NOT NULL,
  `pengering` varchar(10) NOT NULL,
  `rpm` int(5) NOT NULL,
  `dimensi_h` int(5) NOT NULL,
  `dimensi_satuan` int(5) NOT NULL,
  `dimensi_o` int(5) NOT NULL,
  `color` varchar(50) NOT NULL,
  `dimensi_w` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `status_produk` varchar(10) NOT NULL,
  `pricelist` int(10) NOT NULL,
  PRIMARY KEY (`product_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_status_reference`;
CREATE TABLE `m_status_reference` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_status_reference` (`id_status`, `nama`, `deskripsi`) VALUES
(1,	'Data Pribadi',	'Create Customer'),
(2,	'Data Verifikasi 1',	'Create Customer'),
(3,	'Data Verifikasi 2',	'Create Customer'),
(4,	'Waiting Approval',	'Create Customer');

DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_user` (`id`, `nama`, `nik`, `username`, `password`, `created`) VALUES
(1,	'Super Admin',	'',	'admin',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-04-28 15:01:18'),
(2,	'Finance',	'',	'finance',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-08-22 04:33:56'),
(3,	'Delivery',	'',	'delivery',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-07-18 13:12:40'),
(4,	'Sales',	'17080001',	'sales',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-08-28 04:42:39');

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


DROP TABLE IF EXISTS `t_sales_order`;
CREATE TABLE `t_sales_order` (
  `id_sales_order` int(11) NOT NULL AUTO_INCREMENT,
  `no_invoice` varchar(255) NOT NULL,
  `id_sales` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_approval` int(5) NOT NULL,
  `status_pembelian` varchar(50) NOT NULL,
  `id_status` int(5) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `ppn` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `sisa_bayar` int(11) NOT NULL,
  `total_discount` int(11) NOT NULL,
  `discount_pembulatan` int(11) NOT NULL,
  `file_images` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sales_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_sales_order_delivery`;
CREATE TABLE `t_sales_order_delivery` (
  `id_sales_order` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_order` date DEFAULT NULL,
  `tanggal_kirim` date DEFAULT NULL,
  `alamat_kirim` text,
  `pengiriman_via` varchar(50) DEFAULT NULL,
  `kirim_invoice_ke` text,
  `email_invoice` varchar(100) DEFAULT NULL,
  `informasi_tambahan` text,
  PRIMARY KEY (`id_sales_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_sales_order_produk`;
CREATE TABLE `t_sales_order_produk` (
  `id_sales_order` int(11) NOT NULL,
  `kode_product` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pricelist` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `keterangan_discount` varchar(255) NOT NULL,
  `harga_netto` int(11) NOT NULL,
  `status_produk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `merek` varchar(50) NOT NULL,
  `dibawa_langsung` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2018-09-03 09:45:04

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
(4,	17080001,	'999995289304',	'234567890',	'Dede Irawan',	'tester alamat',	'Suradita',	'Cisauk',	'Kab.tangerang',	'Banten',	'12312',	'089832989328',	'021999999',	'09809809',	'dede.irawan1213',	'Milik Sendiri',	'0000-00-00',	4,	'2018-09-02 14:33:44'),
(5,	17080003,	'999995289304',	'234567890',	'customer project',	'tester alamat',	'Suradita',	'Cisauk',	'Kab.tangerang',	'Banten',	'12312',	'089832989328',	'021999999',	'09809809',	'dede.irawan1213',	'Milik Sendiri',	'0000-00-00',	4,	'2018-09-11 14:31:31'),
(7,	17080002,	'999995289304',	'234567890',	'Sales Order',	'ahsghjagsjgh',	'Suradita',	'Cisauk',	'Kab.tangerang',	'Banten',	'12312',	'089832989328',	'021999999',	'09809809',	'dede.irawan1213',	'Milik yang diag',	'0000-00-00',	4,	'2018-09-11 14:44:12');

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
(4,	4,	'MANDIRI',	'123123',	'2018-09-02 14:03:54'),
(5,	5,	'BCA',	'7888888772',	'2018-09-11 14:31:18');

DROP TABLE IF EXISTS `m_customer_gudang`;
CREATE TABLE `m_customer_gudang` (
  `id_gudang` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
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

INSERT INTO `m_customer_gudang` (`id_gudang`, `id_customer`, `nama`, `pic`, `created_date`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten_kota`, `provinsi`, `kode_pos`, `no_hp`, `no_fax`) VALUES
(2,	4,	'0',	'Gudang 1',	'2018-09-02 14:21:34',	'alamat gudang',	'rt gudang',	'Gudang 1',	'Suradita',	'Cisauk',	'Tangerang',	'Banten',	'kodepos gudam',	'08928982',	'032132822'),
(5,	5,	'Gudang 1',	'DEDE',	'2018-09-11 14:31:23',	'alamat gudang',	'rt gudang',	'Gudang 1',	'Suradita',	'Cisauk',	'Tangerang',	'Banten',	'kodepos gudam',	'08928982',	'032132822');

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
(5,	4,	'produk 2',	'10%',	'2018-09-02 14:03:41'),
(6,	5,	'1',	'10',	'2018-09-11 14:31:07');

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
(4,	4,	'Toko 1',	'Alamat Toko 1',	'rt to',	'rw to',	'Suradita',	'Cisauk',	'Tangerang',	'Banten',	'0897737373',	'029282828',	'Milik Sendiri',	'0000-00-00',	'10',	'10',	'100',	'3',	'2018-09-02 14:18:20'),
(7,	5,	'Toko 1',	'Alamat Toko 1',	'rt to',	'rw to',	'Suradita',	'Cisauk',	'Tangerang',	'Banten',	'0897737373',	'029282828',	'Milik Sendiri',	'0000-00-00',	'10',	'10',	'100',	'3',	'2018-09-11 14:31:22');

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
('FV2547',	17080003,	5,	'2018-09-11',	'2018-09-12',	'2018-09-12',	'0000-00-00',	'',	'',	0,	'',	'',	'2018-09-11 14:31:30'),
('VP2990',	17080001,	4,	'2018-09-03',	'2018-09-03',	'2018-09-03',	'2018-09-03',	'Awan',	'Retail',	0,	'',	'',	'2018-09-02 14:34:53');

DROP TABLE IF EXISTS `m_karyawan`;
CREATE TABLE `m_karyawan` (
  `nik` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `showroom` varchar(50) NOT NULL,
  `area_gudang` varchar(50) NOT NULL,
  `prosedur` varchar(50) NOT NULL,
  `bisnis_unit` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_karyawan` (`nik`, `nama`, `level`, `lokasi`, `branch_code`, `divisi`, `showroom`, `area_gudang`, `prosedur`, `bisnis_unit`, `created_date`) VALUES
(17080001,	'Dede Sales Credit',	'',	'',	'JKT001',	'',	'',	'Gudang Jakarta',	'credit',	'',	'2018-09-11 14:02:29'),
(17080002,	'Dede Sales Cash',	'',	'',	'JKT001',	'',	'',	'Gudang Jakarta',	'cash',	'',	'2018-09-11 14:02:29'),
(17080003,	'Dede Sales Project',	'',	'',	'JKT001',	'',	'',	'Gudang Jakarta',	'project',	'',	'2018-09-11 14:02:29');

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
  `branch_code` varchar(50) NOT NULL,
  `lokasi_detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_karyawan_lokasi_detail` (`branch_code`, `lokasi_detail`) VALUES
('JKT001',	'Jakarta'),
('BGR001',	'Bogor'),
('DPK001',	'Depok'),
('TNG001',	'Tangerang'),
('BKS001',	'Bekasi');

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
(187,	'51',	'4',	'2018-08-26 06:08:28'),
(237,	'9',	'5',	'2018-09-11 14:26:47'),
(238,	'10',	'5',	'2018-09-11 14:26:47'),
(239,	'11',	'5',	'2018-09-11 14:26:47'),
(240,	'12',	'5',	'2018-09-11 14:26:48'),
(241,	'13',	'5',	'2018-09-11 14:26:48'),
(242,	'14',	'5',	'2018-09-11 14:26:48'),
(243,	'16',	'5',	'2018-09-11 14:26:48'),
(244,	'17',	'5',	'2018-09-11 14:26:48'),
(245,	'18',	'5',	'2018-09-11 14:26:48'),
(246,	'19',	'5',	'2018-09-11 14:26:48'),
(247,	'20',	'5',	'2018-09-11 14:26:48'),
(248,	'22',	'5',	'2018-09-11 14:26:48'),
(249,	'23',	'5',	'2018-09-11 14:26:48'),
(250,	'24',	'5',	'2018-09-11 14:26:48'),
(251,	'25',	'5',	'2018-09-11 14:26:48'),
(252,	'26',	'5',	'2018-09-11 14:26:48'),
(253,	'27',	'5',	'2018-09-11 14:26:48'),
(254,	'28',	'5',	'2018-09-11 14:26:48'),
(255,	'29',	'5',	'2018-09-11 14:26:48'),
(256,	'31',	'5',	'2018-09-11 14:26:48'),
(257,	'34',	'5',	'2018-09-11 14:26:48'),
(258,	'35',	'5',	'2018-09-11 14:26:49'),
(259,	'51',	'5',	'2018-09-11 14:26:49'),
(260,	'9',	'6',	'2018-09-11 14:27:21'),
(261,	'10',	'6',	'2018-09-11 14:27:22'),
(262,	'11',	'6',	'2018-09-11 14:27:22'),
(263,	'12',	'6',	'2018-09-11 14:27:22'),
(264,	'13',	'6',	'2018-09-11 14:27:22'),
(265,	'14',	'6',	'2018-09-11 14:27:22'),
(266,	'16',	'6',	'2018-09-11 14:27:22'),
(267,	'17',	'6',	'2018-09-11 14:27:22'),
(268,	'18',	'6',	'2018-09-11 14:27:22'),
(269,	'19',	'6',	'2018-09-11 14:27:22'),
(270,	'20',	'6',	'2018-09-11 14:27:22'),
(271,	'22',	'6',	'2018-09-11 14:27:22'),
(272,	'23',	'6',	'2018-09-11 14:27:22'),
(273,	'24',	'6',	'2018-09-11 14:27:22'),
(274,	'25',	'6',	'2018-09-11 14:27:22'),
(275,	'26',	'6',	'2018-09-11 14:27:22'),
(276,	'27',	'6',	'2018-09-11 14:27:22'),
(277,	'28',	'6',	'2018-09-11 14:27:23'),
(278,	'29',	'6',	'2018-09-11 14:27:23'),
(279,	'31',	'6',	'2018-09-11 14:27:23'),
(280,	'34',	'6',	'2018-09-11 14:27:23'),
(281,	'35',	'6',	'2018-09-11 14:27:23'),
(282,	'51',	'6',	'2018-09-11 14:27:23');

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
  `ukuran` varchar(50) NOT NULL,
  `ukuran_satuan` varchar(5) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `nominal_satuan` varchar(5) NOT NULL,
  `cuci` varchar(10) NOT NULL,
  `pengering` varchar(10) NOT NULL,
  `rpm` varchar(50) NOT NULL,
  `dimensi_h` varchar(50) NOT NULL,
  `dimensi_satuan` varchar(50) NOT NULL,
  `dimensi_o` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `dimensi_w` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `status_produk` varchar(10) NOT NULL,
  `pricelist` int(11) NOT NULL,
  PRIMARY KEY (`product_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_product` (`product_code`, `home_code`, `merek`, `deskripsi`, `kategori`, `kategori_1`, `kategori_2`, `kategori_3`, `bahan`, `ukuran`, `ukuran_satuan`, `volume`, `nominal`, `nominal_satuan`, `cuci`, `pengering`, `rpm`, `dimensi_h`, `dimensi_satuan`, `dimensi_o`, `color`, `dimensi_w`, `keterangan`, `status_produk`, `pricelist`) VALUES
('3XWED5705SW',	'XXXX16',	'WHIRLLPOOL',	'MESIN PENGERING PAKAIAN (LISTRIK)',	'WASH & CLEAN',	'FREE-STANDING',	'DRYER',	'ELECTRIC',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'READY',	97000),
('5VES3FHGRS',	'XXXX14',	'WHIRLLPOOL',	'LEMARI ES SIDE BY SIDE 640 LITER NO FROST STAINLESS-STEEL',	'COLD & PRESERVE',	'FREE-STANDING',	'REFRIGERATOR',	'SIDE BY SIDE',	'STAINLESS-STEEL',	'',	'',	'640',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'NO-FROST',	'READY',	235000),
('6GD25DCXHS',	'XXXX15',	'WHIRLLPOOL',	'LEMARI ES SIDE BY SIDE 746 LITER NO FROST STAINLESS-STEEL',	'COLD & PRESERVE',	'FREE-STANDING',	'REFRIGERATOR',	'SIDE BY SIDE',	'STAINLESS-STEEL',	'',	'',	'746',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'NO-FROST',	'INDENT',	246000),
('AQM9D49U.EX',	'XXXX7',	'ARISTON',	'MESIN CUCI DAN PENGERING FRONT-LOAD 1400 RPM 9 KG CUCI 5 KG PENGERING',	'WASH & CLEAN',	'FREE-STANDING',	'WASHER / DRYER',	'FRONT LOAD',	'',	'',	'',	'',	'',	'KG',	'9',	'5',	'1400',	'',	'',	'',	'',	'',	'FRONT LOAD',	'READY',	123000),
('DDWG12-3XFS',	'XXXX6',	'DELIZIA',	'MESIN PENCUCI PIRING AUTOMATIS KAPASITAS 12 PCS (FREE STANDING)',	'WASH & CLEAN',	'FREE-STANDING',	'DISHWASHER',	'FRONT LOAD',	'',	'',	'',	'',	'12',	'PCS',	'',	'',	'',	'',	'',	'',	'',	'',	'FREE STANDING',	'READY',	110000),
('DRDSBA2(IX)',	'XXXX3',	'DELIZIA',	'LEMARI ES STAINLESS-STEEL 549 LITER NO-FROST 2 PINTU',	'COLD & PRESERVE',	'FREE-STANDING',	'REFRIGERATOR',	'SIDE BY SIDE',	'STAINLESS-STEEL',	'',	'',	'549',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'NO-FROST',	'READY',	235000),
('DWG6A3WH',	'XXXX5',	'DELIZIA',	'MESIN CUCI PAKAIAN FRONT LOAD 800 RPM 6 KG',	'WASH & CLEAN',	'FREE-STANDING',	'WASHER',	'FRONT LOAD',	'',	'',	'',	'',	'6',	'KG',	'',	'',	'800',	'',	'',	'',	'',	'',	'FRONT LOAD',	'READY',	132000),
('DWS1668.D14(IX)',	'XXXX4',	'DELIZIA',	'LEMARI PENYIMPAN WINE KAPASITAS 154 BOTOL STAINLESS-STEEL DUA ZONA PENDINGIN',	'COLD & PRESERVE',	'FREE-STANDING',	'WINE CELLAR',	'100 - 150 BOTTLES',	'STAINLESS-STEEL',	'',	'',	'',	'154',	'BOTOL',	'',	'',	'',	'',	'',	'',	'',	'',	'DUA ZONA PENDINGIN',	'READY',	225000),
('F15A28-28CM',	'XXXX19',	'SUPOR',	'THERMOSPOT FRYPAN 28CM',	'COOKWARE ELECTRIC HOMEKEEPING',	'COOKWARE',	'FRY PANS & SKILLETS',	'NON STICK',	'',	'28',	'CM',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'READY',	111000),
('F17A22IH-22CM',	'XXXX20',	'SUPOR',	'THERMOSPOT INDUCTION HOB FRYPAN 22CM',	'COOKWARE ELECTRIC HOMEKEEPING',	'COOKWARE',	'FRY PANS & SKILLETS',	'NON STICK',	'',	'22',	'CM',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'INDENT',	121000),
('HER1206GMFEDCRT',	'XXXX9',	'BERTAZZONI',	'KOMPOR GAS BERDIRI 120 CM 6 TUNGKU CRAME COLOR ELECTRIC MULTIFUNCTION DOUBLE OVEN AND GRIDDLE',	'COOK & CUISINE',	'FREE-STANDING',	'COOKER',	'GAS AND ELECTRIC',	'',	'120',	'CM',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'CRAME COLOR',	'',	'ELECTRIC MULTIFUNCTION DOUBLE OVEN AND GRIDDLE',	'READY',	127000),
('K100HERSNET',	'XXXX10',	'BERTAZZONI',	'TUDUNG HISAP 100 CM STAINLESS-STEEL + BLACK INTEGRATED',	'COOK & CUISINE',	'BUILT-IN',	'HOOD',	'WALL',	'STAINLESS-STEEL + BLACK INTEGRATED',	'100',	'CM',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'READY',	167000),
('P64IT0N',	'XXXX12',	'LA GERMANIA',	'KOMPOR TANAM 60 CM 4 TUNGKU INDUCTION',	'COOK & CUISINE',	'BUILT-IN',	'HOB',	'INDUCTION',	'',	'60',	'CM',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'INCUSTION',	'READY',	253000),
('P90CD9X',	'XXXX13',	'LA GERMANIA',	'KOMPOR TANAM 90 CM 5 ZONA PANAS KACA',	'COOK & CUISINE',	'BUILT-IN',	'HOB',	'VITRO CERAMIC',	'',	'90',	'CM',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'KACA',	'READY',	211000),
('P9C01D9XT',	'XXXX11',	'LA GERMANIA',	'KOMPOR TANAM 90 CM 3 TUNGKU GAS STAINLESS STEEL',	'COOK & CUISINE',	'BUILT-IN',	'HOB',	'GAS',	'STAINLESS-STEEL',	'90',	'CM',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'READY',	234000),
('PDMW38(MR)',	'XXXX22',	'ARISTON',	'MICROWAVE DOOR MIRROR. DIMENSIONS (WXH) 59.5X39.1 CM',	'ACCESSORIES',	'BUILT-IN',	'MICROWAVE',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'39.1',	'CM',	'',	'',	'59.9',	'MIRROR',	'READY',	77000),
('PDMW45(ICE)',	'XXXX23',	'ARISTON',	'MICROWAVE DOOR ICE. DIMENSIONS (WXH) 595 X 461 MM',	'ACCESSORIES',	'BUILT-IN',	'MICROWAVE',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'461',	'MM',	'',	'',	'595',	'ICE',	'INDENT',	78000),
('RCA2111(IX)',	'XXXX18',	'ROYAL',	'WATER DISPENSER HOT COLD AND NEUTRAL GALON BAWAH',	'COLD & PRESERVE',	'FREE-STANDING',	'WATER DISPENSER',	'BOTTOM LOAD',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'GALON BAWAH',	'INDENT',	132000),
('RSM3006-SWH',	'XXXX17',	'ROYAL',	'DISPLAY COOLER 300LT 6 RAK WHITE',	'COLD & PRESERVE',	'FREE-STANDING',	'SHOWCASE',	'SINGLE DOOR',	'',	'',	'',	'300',	'',	'',	'',	'',	'',	'',	'',	'',	'WHITE',	'',	'6 RAK',	'READY',	87000),
('XB960',	'XXXX21',	'ARISTON',	'SPLASH BACK STAINLESS-STEEL. DIMENSIONS (HXWXD): 60X90X2.5 CM',	'ACCESSORIES',	'BUILT-IN',	'HOB',	'',	'STAINLESS-STEEL',	'',	'',	'',	'',	'',	'',	'',	'',	'60',	'CM',	'2.5',	'',	'90',	'',	'INDENT',	145000),
('XB975',	'XXXX2',	'ARISTON',	'SPLASH BACK STAINLESS-STEEL DIMENSION (HXWXD): 750 X 900 X 25 MM',	'ACCESSORIES',	'BUILT-IN',	'HOB',	'HOB',	'STAINLESS-STEEL',	'',	'',	'',	'',	'',	'',	'',	'',	'750',	'MM',	'25',	'',	'900',	'',	'READY',	105000);

DROP TABLE IF EXISTS `m_product_discount`;
CREATE TABLE `m_product_discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_product_discount` (`id`, `product_code`, `discount`, `keterangan`, `tanggal_mulai`, `tanggal_akhir`) VALUES
(1,	'3XWED5705SW',	10,	'uji coba discount pada product',	'0000-00-00',	'0000-00-00');

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
(4,	'Waiting Approval',	'Create Customer'),
(5,	'Customer',	'Sales Order'),
(6,	'Product',	'Sales Order'),
(7,	'Pengiriman',	'Sales Order'),
(8,	'Update Data',	'Sales Order'),
(9,	'Form Pemesanan',	'Sales Order');

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
(4,	'Sales',	'17080001',	'sales_credit',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-09-11 14:22:37'),
(5,	'Sales',	'17080002',	'sales_cash',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-09-11 14:22:37'),
(6,	'Sales',	'17080003',	'sales_project',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-09-11 14:23:09');

DROP TABLE IF EXISTS `t_sales_order`;
CREATE TABLE `t_sales_order` (
  `id_sales_order` int(11) NOT NULL AUTO_INCREMENT,
  `no_invoice` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_approval` int(5) NOT NULL,
  `status_pembelian` varchar(50) NOT NULL,
  `id_status` int(5) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `ppn_value` int(11) NOT NULL,
  `ppn_exc` varchar(5) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `sisa_bayar` int(11) NOT NULL,
  `total_discount` int(11) NOT NULL,
  `discount_pembulatan` int(11) NOT NULL,
  `keterangan_pembulatan` text NOT NULL,
  `file_images` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sales_order`),
  KEY `nik` (`nik`),
  CONSTRAINT `t_sales_order_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `m_karyawan` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `t_sales_order` (`id_sales_order`, `no_invoice`, `nik`, `id_customer`, `id_approval`, `status_pembelian`, `id_status`, `subtotal`, `ppn_value`, `ppn_exc`, `total_harga`, `uang_muka`, `sisa_bayar`, `total_discount`, `discount_pembulatan`, `keterangan_pembulatan`, `file_images`, `created_date`) VALUES
(5,	'INV3839',	17080001,	4,	0,	'',	6,	666600,	66660,	'true',	599940,	0,	500000,	0,	99940,	'biar pas',	'',	'2018-09-11 14:15:05'),
(6,	'INV1510',	17080003,	5,	0,	'',	8,	87300,	8730,	'true',	78570,	0,	78000,	0,	570,	'nanggung',	'',	'2018-09-11 14:38:17'),
(7,	'INV9408',	17080002,	7,	0,	'',	8,	87300,	8730,	'true',	78570,	0,	78000,	0,	570,	'ehem',	'',	'2018-09-11 14:46:13');

DROP TABLE IF EXISTS `t_sales_order_delivery`;
CREATE TABLE `t_sales_order_delivery` (
  `id_sales_order` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_order` date DEFAULT NULL,
  `tanggal_kirim` date DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat_kirim` text,
  `nama_gedung` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `nama_penerima` varchar(255) DEFAULT NULL,
  `no_hp_penerima` varchar(255) DEFAULT NULL,
  `pengiriman_via` varchar(50) DEFAULT NULL,
  `nama_kurir` varchar(50) DEFAULT NULL,
  `kirim_invoice_ke` text,
  `email_invoice` varchar(100) DEFAULT NULL,
  `informasi_tambahan` text,
  PRIMARY KEY (`id_sales_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `t_sales_order_delivery` (`id_sales_order`, `tanggal_order`, `tanggal_kirim`, `pic`, `email`, `alamat_kirim`, `nama_gedung`, `provinsi`, `kabupaten`, `alamat`, `kode_pos`, `nama_penerima`, `no_hp_penerima`, `pengiriman_via`, `nama_kurir`, `kirim_invoice_ke`, `email_invoice`, `informasi_tambahan`) VALUES
(5,	'2018-11-09',	'2018-09-12',	'DEDE',	'dede.irawan1213@gmail.com',	'sesuai_tujuan',	'geduang a',	'banten',	'tangerang',	'tester alamat',	'15535',	'',	'',	'kurir',	'nama kurir',	'on',	'email invoice',	'info tambahan'),
(6,	'2018-11-09',	'2018-09-12',	'',	'',	'sesuai_domisili',	'',	'',	'',	'',	'',	'',	'',	'kurir',	'nama kurir',	'Tidak Perlu Dikirim',	'',	'info tambahan'),
(7,	'2018-11-09',	'2018-09-12',	'',	'',	'sesuai domisili',	'',	'',	'',	'',	'',	'',	'',	'kurir',	'nama kurir',	'Tidak Perlu Dikirim',	'',	'info tambahan');

DROP TABLE IF EXISTS `t_sales_order_produk`;
CREATE TABLE `t_sales_order_produk` (
  `id_sales_order` int(11) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `pricelist` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan_discount` varchar(255) NOT NULL,
  `harga_netto` int(11) NOT NULL,
  `status_produk` varchar(50) NOT NULL,
  `dibawa_langsung` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `product_code` (`product_code`),
  CONSTRAINT `t_sales_order_produk_ibfk_1` FOREIGN KEY (`product_code`) REFERENCES `m_product` (`product_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `t_sales_order_produk` (`id_sales_order`, `product_code`, `merek`, `deskripsi`, `pricelist`, `discount`, `jumlah`, `keterangan_discount`, `harga_netto`, `status_produk`, `dibawa_langsung`, `created_date`) VALUES
(5,	'6GD25DCXHS',	'WHIRLLPOOL',	'LEMARI ES SIDE BY SIDE 746 LITER NO FROST STAINLESS-STEEL',	246000,	0,	2,	'',	492000,	'INDENT',	'Tidak',	'2018-09-11 03:33:31'),
(5,	'3XWED5705SW',	'WHIRLLPOOL',	'MESIN PENGERING PAKAIAN (LISTRIK)',	97000,	10,	2,	'uji coba discount pada product',	174600,	'READY',	'Ya',	'2018-09-11 03:33:35'),
(6,	'3XWED5705SW',	'WHIRLLPOOL',	'MESIN PENGERING PAKAIAN (LISTRIK)',	97000,	10,	1,	'uji coba discount pada product',	87300,	'READY',	'',	'2018-09-11 14:36:27'),
(7,	'3XWED5705SW',	'WHIRLLPOOL',	'MESIN PENGERING PAKAIAN (LISTRIK)',	97000,	10,	1,	'uji coba discount pada product',	87300,	'READY',	'',	'2018-09-11 14:44:57');

DROP TABLE IF EXISTS `t_sales_order_update`;
CREATE TABLE `t_sales_order_update` (
  `id_sales_order` varchar(255) NOT NULL,
  `nomor_form` varchar(255) NOT NULL,
  `tanggal_order` date NOT NULL,
  `foto_fp` varchar(255) NOT NULL,
  `nomor_po` varchar(255) NOT NULL,
  `foto_po` varchar(255) NOT NULL,
  `showroom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2018-09-11 14:46:31

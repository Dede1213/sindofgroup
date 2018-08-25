-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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
(10,	9,	'Sales Order',	1,	'fa fa-shopping-cart',	'dashboard/data_customer',	'2018-07-28 07:21:54'),
(11,	9,	'Sell Out',	2,	'fa fa-file',	'dashboard/data_customer_sellout',	'2018-07-28 05:18:52'),
(12,	0,	'Customer ID',	4,	'fa fa-user',	'#',	'2018-07-28 05:21:48'),
(13,	12,	'Create New Customer',	1,	'fa fa-plus',	'customer/add_customer',	'2018-08-09 03:36:44'),
(14,	12,	'Data Customer',	2,	'fa fa-list',	'customer/list_customer',	'2018-08-09 03:33:53'),
(15,	0,	'Payment',	5,	'fa fa-money',	'dashboard/payment',	'2018-07-28 05:27:01'),
(16,	0,	'Print & Upload',	6,	'fa fa-print',	'#',	'2018-07-28 05:27:43'),
(17,	16,	'Print',	1,	'fa fa-print',	'#',	'2018-07-28 05:28:27'),
(18,	17,	'Sales Order',	1,	'fa fa-file',	'dashboard/printout/cash',	'2018-07-28 05:29:44'),
(19,	17,	'Sell Out',	2,	'fa fa-file',	'dashboard/print_sellout',	'2018-07-28 05:31:00'),
(20,	17,	'Form Verifikasi',	3,	'fa fa-file',	'dashboard/print_verifikasi',	'2018-07-28 05:32:03'),
(21,	17,	'Kwitansi',	4,	'fa fa-file',	'dashboard/print_kwitansi',	'2018-07-28 05:33:35'),
(22,	16,	'Upload',	2,	'fa fa-upload',	'#',	'2018-07-28 05:34:28'),
(23,	22,	'Sales Order',	1,	'fa fa-file',	'dashboard/upload',	'2018-07-28 05:35:26'),
(24,	22,	'Verifikasi Customer',	2,	'fa fa-file',	'#',	'2018-07-28 05:36:20'),
(25,	0,	'Report',	7,	'fa fa-briefcase',	'#',	'2018-07-28 05:37:42'),
(26,	25,	'Progress',	1,	'fa fa-file',	'#',	'2018-07-28 07:09:13'),
(27,	26,	'Report SO',	1,	'fa fa-file',	'dashboard/so_progress',	'2018-07-28 07:10:42'),
(28,	26,	'Report Sell Out',	2,	'fa fa-file',	'dashboard/sellout',	'2018-07-28 07:11:34'),
(29,	26,	'Report New Customer',	3,	'fa fa-file',	'dashboard/cust_progress',	'2018-07-28 07:12:39'),
(30,	26,	'SO Draft',	4,	'fa fa-file',	'dashboard/draft',	'2018-07-28 07:13:18'),
(31,	25,	'Final',	2,	'fa fa-file',	'#',	'2018-07-28 07:13:57'),
(32,	31,	'Report Absensi',	1,	'fa fa-file',	'report_absensi',	'2018-07-28 07:14:52'),
(33,	31,	'Schedule & Call Plan',	2,	'fa fa-file',	'dashboard/report_plan',	'2018-07-28 07:15:42'),
(34,	31,	'Report SO',	3,	'fa fa-file',	'dashboard/so_progress',	'2018-07-28 07:16:28'),
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
(50,	44,	'Kategori Project',	2,	'fa fa-file',	'#',	'2018-08-02 05:18:28');

DROP TABLE IF EXISTS `m_menu_user`;
CREATE TABLE `m_menu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_menu_user` (`id`, `id_menu`, `id_user`, `created`) VALUES
(140,	'1',	'1',	'2018-08-09 03:55:17'),
(141,	'12',	'1',	'2018-08-09 03:55:17'),
(142,	'13',	'1',	'2018-08-09 03:55:17'),
(143,	'14',	'1',	'2018-08-09 03:55:17'),
(144,	'37',	'1',	'2018-08-09 03:55:17'),
(145,	'38',	'1',	'2018-08-09 03:55:17');

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

INSERT INTO `m_user` (`id`, `nama`, `id_level`, `username`, `password`, `created`) VALUES
(1,	'Super Admin',	1,	'admin',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-04-28 15:01:18'),
(2,	'Super Admin',	2,	'finance',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-04-28 15:01:18'),
(3,	'Delivery',	3,	'delivery',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-07-18 13:12:40'),
(4,	'Sales',	4,	'sales',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-08-02 02:55:41');

DROP TABLE IF EXISTS `m_user_level`;
CREATE TABLE `m_user_level` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_user_level` (`id`, `nama`, `created`) VALUES
(1,	'Admin',	'2018-04-28 14:24:15'),
(2,	'finance',	'2018-04-28 14:24:15'),
(3,	'Delivery',	'2018-04-28 14:24:15'),
(4,	'Sales',	'2018-04-28 14:24:15');

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


-- 2018-08-09 09:54:59

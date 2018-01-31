-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Des 2017 pada 13.21
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cias`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataikan`
--

CREATE TABLE `dataikan` (
  `id_ikan` int(11) NOT NULL,
  `jenis_ikan` varchar(50) NOT NULL,
  `makanan` varchar(50) NOT NULL,
  `penangkaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataikan`
--

INSERT INTO `dataikan` (`id_ikan`, `jenis_ikan`, `makanan`, `penangkaran`) VALUES
(1, 'zz', 'z', 'z'),
(2, 'zz', 'z', 'z'),
(3, 'zz', 'z', 'z'),
(5, 'zz', 'z', 'zz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_url` varchar(100) NOT NULL,
  `m_desc` varchar(255) NOT NULL,
  `m_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`m_id`, `m_name`, `m_url`, `m_desc`, `m_created_at`) VALUES
(1, 'home', '', '', '2017-09-28 08:38:31'),
(2, 'about', '', '', '2017-09-28 08:38:31'),
(3, 'dropdown1', '', '', '2017-09-28 08:39:36'),
(4, 'dropdown2', '', '', '2017-09-28 08:39:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_item`
--

CREATE TABLE `menu_item` (
  `m_item_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `m_item_name` varchar(50) NOT NULL,
  `m_item_url` varchar(100) NOT NULL,
  `m_item_desc` varchar(255) NOT NULL,
  `m_item_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_item`
--

INSERT INTO `menu_item` (`m_item_id`, `m_id`, `m_item_name`, `m_item_url`, `m_item_desc`, `m_item_created_at`) VALUES
(5, 0, 'item3', '#', '', '2017-10-04 03:47:13'),
(19, 4, 'item3', '#', '', '2017-10-17 07:53:01'),
(21, 3, 'b', '#', '', '2017-10-17 07:56:35'),
(22, 3, 'item2', '#', '', '2017-10-17 08:04:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_items`
--

CREATE TABLE `tbl_items` (
  `itemId` int(11) NOT NULL,
  `itemHeader` varchar(512) NOT NULL COMMENT 'Heading',
  `itemSub` varchar(1021) NOT NULL COMMENT 'sub heading',
  `itemDesc` text COMMENT 'content or description',
  `itemImage` varchar(80) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_items`
--

INSERT INTO `tbl_items` (`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`) VALUES
(1, 'jquery.validation.js', 'Contribution towards jquery.validation.js', 'jquery.validation.js is the client side javascript validation library authored by Jörn Zaefferer hosted on github for us and we are trying to contribute to it. Working on localization now', 'validation.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL),
(2, 'CodeIgniter User Management', 'Demo for user management system', 'This the demo of User Management System (Admin Panel) using CodeIgniter PHP MVC Framework and AdminLTE bootstrap theme. You can download the code from the repository or forked it to contribute. Usage and installation instructions are provided in ReadMe.MD', 'cias.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_reset_password`
--

INSERT INTO `tbl_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'kesone01@gmail.com', 'HHNEUJ3JFSeG6Hb', 'Chrome 61.0.3163.100', '0.0.0.0', 0, 1, '2017-10-23 11:45:38', NULL, NULL),
(2, 'kesone01@gmail.com', 'TfzoSCcXaZyOxV4', 'Chrome 61.0.3163.100', '0.0.0.0', 0, 1, '2017-10-23 11:45:49', NULL, NULL),
(3, 'manager@codeinsect.com', '0GQ4DExp2tqcDih', 'Chrome 61.0.3163.100', '0.0.0.0', 0, 1, '2017-10-23 11:46:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@gmail.com', '$2y$10$sFSA6mH7xpp64Gj6ZYNOXeVhHYMk/Jiu.F.MeMCc.dTiGTZYnFWNm', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2017-09-08 04:38:56'),
(2, 'manager@codeinsect.com', '$2y$10$EbdR32P253blMHbmIwyZm.KbXjm5vWMm4nGAwW/2kD4A1kCrWkCpq', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2017-09-12 06:15:49'),
(3, 'employee@codeinsect.com', '$2y$10$M3ttjnzOV2lZSigBtP0NxuCtKRte70nc8TY5vIczYAQvfG/8syRze', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', NULL, NULL),
(4, 'kesone01@gmail.com', '$2y$10$.afeyrJJMI0zjngzGvo4Fe2QMtXdMA.VcAQsL7wkjkGZ0cqdgqNeW', 'Admin', '0895358390', 3, 0, 1, '2017-10-23 11:44:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `link` varchar(25) NOT NULL,
  `kat_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `icon`, `link`, `kat_menu`) VALUES
(15, 'Add Header', 'fa fa-upload', 'header', 0),
(16, 'Data Ikan', 'glyphicon glyphicon-', 'dataikan', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataikan`
--
ALTER TABLE `dataikan`
  ADD UNIQUE KEY `id_ikan` (`id_ikan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`m_item_id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataikan`
--
ALTER TABLE `dataikan`
  MODIFY `id_ikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `m_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

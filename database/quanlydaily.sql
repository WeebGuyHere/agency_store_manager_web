-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 09:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlydaily`
--
CREATE DATABASE IF NOT EXISTS `quanlydaily` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `quanlydaily`;

-- --------------------------------------------------------

--
-- Table structure for table `cacdaily`
--

DROP TABLE IF EXISTS `cacdaily`;
CREATE TABLE IF NOT EXISTS `cacdaily` (
  `MaDaiLy` varchar(50) NOT NULL,
  `TenDaiLy` varchar(50) NOT NULL,
  `Loai` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `Quan` varchar(50) NOT NULL,
  `DienThoai` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NgayTiepNhan` date NOT NULL,
  `TienNo` varchar(50) NOT NULL,
  PRIMARY KEY (`MaDaiLy`),
  KEY `Loai` (`Loai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cacdaily`
--

INSERT INTO `cacdaily` (`MaDaiLy`, `TenDaiLy`, `Loai`, `DiaChi`, `Quan`, `DienThoai`, `Email`, `NgayTiepNhan`, `TienNo`) VALUES
('D04', 'Đai Ly D', '1', ' 40-Nguyen Chi Thanh', '15', '0328382832', 'eee@gmail.com', '2021-01-11', '12000'),
('D05', 'Đai Ly E', '1', '40-Nguyen Chi Thanh', '16', '0253632532', 'euq@gmail.com', '2021-02-02', '11000'),
('D10', 'Đai Ly J', '3', '44', '19', '0331212121', 'dai@gmail.com', '2021-02-02', '23000'),
('D11', 'Đai Ly AB', '3', '  321', '19', '0332832111', 'dss@gmail.com', '2021-01-23', '10000'),
('D12', 'Đai ly fshsr', '3', '223', '20', '0323214531', 'rye@gmail.com', '2021-02-23', '33000'),
('D13', 'Đai ly dfghsdh', '3', '100', '01', '0329119123', 'fia@gmail.com', '2021-03-04', '12000'),
('D14', 'Đai Ly dfszgder', '3', '234', '01', '0987654321', '2d@gmail.com', '2021-04-04', '22000'),
('D15', 'Đai Ly An Nam', '4', '12', '02', '0334578290', '3de@gmai.com', '2021-02-06', '17000'),
('D16', 'Đai ly 5865', '4', '19', '02', '0333183833', '2v1@gmail.com', '2021-03-05', '20000'),
('D17', 'Đai Ly 155', '4', '333', '03', '0928375611', 'swj@gmail.com', '2021-02-05', '36000'),
('D18', 'Đai Ly 252', '4', '145', '04', '0384818381', 'ook@gmail.com', '2021-02-07', '10000'),
('D19', 'Đai Ly 554', '5', '2', '04', '0987656789', 'wqqw@gmail.com', '2021-01-31', '12000'),
('D20', 'Đai Ly Van Toan', '5', '31', '05', '0492391990', 'dqo@gmail.com', '2021-02-02', '20000'),
('D21', 'đai ly degse', '5', '23', '06', '0323192912', 'fjk@gmail.com', '2021-09-01', '15000'),
('D22', 'dai ly geghrs', '5', '293', '06', '0989123812', 'rti@gmail.com', '2021-02-20', '40000'),
('D23', 'đai ly 435436w', '1', '124', '07', '0918372773', 'e1u@gmail.com', '2021-01-01', '10000'),
('D24', 'đai ly an tam', '1', '324', '07', '0319319192', 'djo@gmail.com', '2021-09-03', '23000'),
('D27', 'đai ly nam toan', '3', '021', '09', '0294294822', 'uwu@gmail,com', '2021-02-01', '10000'),
('D28', 'đai ly phuc loi', '3', '098', '10', '0392919294', 'ei@gmail.com', '2021-02-01', '20000'),
('D29', 'đai ly toan gia', '4', '381', '10', '0281282819', 'eu11@gmail.com', '2021-01-03', '50000'),
('D30', 'đai ly toan lac', '4', '433', '11', '0192192294', 'dqo@gmail.com', '2021-10-01', '19000'),
('D31', 'đai ly an gia', '5', '192', '11', '0333838189', 'doii@gmail.com', '2021-01-09', '38000');

-- --------------------------------------------------------

--
-- Table structure for table `chitietxuathang`
--

DROP TABLE IF EXISTS `chitietxuathang`;
CREATE TABLE IF NOT EXISTS `chitietxuathang` (
  `MaPhieuXuat` varchar(50) NOT NULL,
  `MaMatHang` varchar(50) NOT NULL,
  `SoLuong` varchar(50) NOT NULL,
  `DonGia` varchar(100) NOT NULL,
  `ThanhTien` varchar(100) NOT NULL,
  PRIMARY KEY (`MaPhieuXuat`,`MaMatHang`),
  KEY `MaMatHang` (`MaMatHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietxuathang`
--

INSERT INTO `chitietxuathang` (`MaPhieuXuat`, `MaMatHang`, `SoLuong`, `DonGia`, `ThanhTien`) VALUES
('X002', 'MH002', '3', '8000000', '24000000'),
('X004', 'MH001', '8', '10000', '80000'),
('X005', 'MH002', '20', '8000000', '160000000'),
('X005', 'MH003', '5', '10000000', '50000000'),
('X006', 'MH003', '8', '10000000', '80000000'),
('X006', 'MH004', '8', '100000', '800000');

-- --------------------------------------------------------

--
-- Table structure for table `congno`
--

DROP TABLE IF EXISTS `congno`;
CREATE TABLE IF NOT EXISTS `congno` (
  `MaDaiLy` varchar(50) NOT NULL,
  `Thang` varchar(50) NOT NULL,
  `NoDau` varchar(50) NOT NULL,
  `PhatSinh` varchar(50) NOT NULL,
  `NoCuoi` varchar(50) NOT NULL,
  PRIMARY KEY (`MaDaiLy`,`Thang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `congno`
--

INSERT INTO `congno` (`MaDaiLy`, `Thang`, `NoDau`, `PhatSinh`, `NoCuoi`) VALUES
('D04', '03', '12000', '200000', '212000'),
('D04', '04', '12000', '100000', '112000');

-- --------------------------------------------------------

--
-- Table structure for table `doanhso`
--

DROP TABLE IF EXISTS `doanhso`;
CREATE TABLE IF NOT EXISTS `doanhso` (
  `MaDaiLy` varchar(50) NOT NULL,
  `Thang` varchar(50) NOT NULL,
  `SoPhieuXuat` varchar(50) NOT NULL,
  `TongTriGia` varchar(50) NOT NULL,
  PRIMARY KEY (`MaDaiLy`,`Thang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doanhso`
--

INSERT INTO `doanhso` (`MaDaiLy`, `Thang`, `SoPhieuXuat`, `TongTriGia`) VALUES
('D04', '2', '1', '210000000');

-- --------------------------------------------------------

--
-- Table structure for table `loaidaily`
--

DROP TABLE IF EXISTS `loaidaily`;
CREATE TABLE IF NOT EXISTS `loaidaily` (
  `Loai` varchar(50) NOT NULL,
  `TenLoai` varchar(50) NOT NULL,
  `NoToiDa` varchar(50) NOT NULL,
  PRIMARY KEY (`Loai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaidaily`
--

INSERT INTO `loaidaily` (`Loai`, `TenLoai`, `NoToiDa`) VALUES
('1', 'đồ gia dụng', '20000000'),
('3', 'đồ điện', '100000000'),
('4', 'thực phẩm', '20000000'),
('5', 'văn phòng phẩm', '50000000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `level`) VALUES
(1, 'user01', '$2y$10$89VlCfXmFbwGNxOlKtE2LORERuUY5601WC/2Bflwvm3UudHABXc7.', '1'),
(2, 'admin', '$2y$10$N1M0f87S2d62spnKGiQxDOoHjkkCJEA3JY4cLqTe.uCtNHSQqGCVy', '1'),
(3, 'member01', '$2y$10$o6bUCpwutjrtVztGEM4ODOcp7Fhtg/0Ao3ueTOgzPE3t4MltjD7Wa', '2'),
(4, 'childe', '$2y$10$T1EHvHiCs10xakAQhmBcOO7CIvGeCv8GYaMhD08MLF18l6p8TUPY2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `mathang`
--

DROP TABLE IF EXISTS `mathang`;
CREATE TABLE IF NOT EXISTS `mathang` (
  `MaMatHang` varchar(50) NOT NULL,
  `TenMatHang` varchar(50) NOT NULL,
  `DonGia` varchar(50) NOT NULL,
  PRIMARY KEY (`MaMatHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mathang`
--

INSERT INTO `mathang` (`MaMatHang`, `TenMatHang`, `DonGia`) VALUES
('MH001', 'oreo', '200000'),
('MH002', 'TV', '8000000'),
('MH003', 'Máy giặt', '10000000'),
('MH004', 'Bóng đèn', '100000'),
('MH005', 'Tủ lạnh', '7000000');

-- --------------------------------------------------------

--
-- Table structure for table `phieuthutien`
--

DROP TABLE IF EXISTS `phieuthutien`;
CREATE TABLE IF NOT EXISTS `phieuthutien` (
  `MaPhieuThu` varchar(50) NOT NULL,
  `MaDaiLy` varchar(50) NOT NULL,
  `DienThoai` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NgayThuTien` date NOT NULL,
  `SoTienThu` decimal(18,0) NOT NULL,
  KEY `MaDaiLy` (`MaDaiLy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phieuthutien`
--

INSERT INTO `phieuthutien` (`MaPhieuThu`, `MaDaiLy`, `DienThoai`, `DiaChi`, `Email`, `NgayThuTien`, `SoTienThu`) VALUES
('T004', 'D11', '0332832111', '  321', 'dss@gmail.com', '2021-04-03', '1000'),
('T005', 'D05', '0253632532', '40-Nguyen Chi Thanh', 'euq@gmail.com', '2021-08-06', '10000'),
('T010', 'D10', '0331212121', '44', 'dai@gmail.com', '2021-02-02', '23000');

-- --------------------------------------------------------

--
-- Table structure for table `phieuxuathang`
--

DROP TABLE IF EXISTS `phieuxuathang`;
CREATE TABLE IF NOT EXISTS `phieuxuathang` (
  `MaPhieuXuat` varchar(50) NOT NULL,
  `MaDaiLy` varchar(50) NOT NULL,
  `TongTien` decimal(18,0) DEFAULT NULL,
  `NgayLapPhieu` date NOT NULL,
  PRIMARY KEY (`MaPhieuXuat`),
  KEY `MaDaiLy` (`MaDaiLy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phieuxuathang`
--

INSERT INTO `phieuxuathang` (`MaPhieuXuat`, `MaDaiLy`, `TongTien`, `NgayLapPhieu`) VALUES
('X005', 'D04', '210000000', '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

DROP TABLE IF EXISTS `pma__bookmark`;
CREATE TABLE IF NOT EXISTS `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

DROP TABLE IF EXISTS `pma__central_columns`;
CREATE TABLE IF NOT EXISTS `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`db_name`,`col_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

DROP TABLE IF EXISTS `pma__column_info`;
CREATE TABLE IF NOT EXISTS `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

DROP TABLE IF EXISTS `pma__designer_settings`;
CREATE TABLE IF NOT EXISTS `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

DROP TABLE IF EXISTS `pma__export_templates`;
CREATE TABLE IF NOT EXISTS `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

DROP TABLE IF EXISTS `pma__favorite`;
CREATE TABLE IF NOT EXISTS `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

DROP TABLE IF EXISTS `pma__history`;
CREATE TABLE IF NOT EXISTS `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

DROP TABLE IF EXISTS `pma__navigationhiding`;
CREATE TABLE IF NOT EXISTS `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

DROP TABLE IF EXISTS `pma__pdf_pages`;
CREATE TABLE IF NOT EXISTS `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

DROP TABLE IF EXISTS `pma__recent`;
CREATE TABLE IF NOT EXISTS `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

DROP TABLE IF EXISTS `pma__relation`;
CREATE TABLE IF NOT EXISTS `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

DROP TABLE IF EXISTS `pma__savedsearches`;
CREATE TABLE IF NOT EXISTS `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

DROP TABLE IF EXISTS `pma__table_coords`;
CREATE TABLE IF NOT EXISTS `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

DROP TABLE IF EXISTS `pma__table_info`;
CREATE TABLE IF NOT EXISTS `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

DROP TABLE IF EXISTS `pma__table_uiprefs`;
CREATE TABLE IF NOT EXISTS `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

DROP TABLE IF EXISTS `pma__tracking`;
CREATE TABLE IF NOT EXISTS `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

DROP TABLE IF EXISTS `pma__userconfig`;
CREATE TABLE IF NOT EXISTS `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

DROP TABLE IF EXISTS `pma__usergroups`;
CREATE TABLE IF NOT EXISTS `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N',
  PRIMARY KEY (`usergroup`,`tab`,`allowed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

DROP TABLE IF EXISTS `pma__users`;
CREATE TABLE IF NOT EXISTS `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`,`usergroup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `tochucdaily`
--

DROP TABLE IF EXISTS `tochucdaily`;
CREATE TABLE IF NOT EXISTS `tochucdaily` (
  `SoLoaiDaiLy` varchar(50) NOT NULL,
  `SoDaiLyToiDa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tochucdaily`
--

INSERT INTO `tochucdaily` (`SoLoaiDaiLy`, `SoDaiLyToiDa`) VALUES
('7', '8');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cacdaily`
--
ALTER TABLE `cacdaily`
  ADD CONSTRAINT `cacdaily_ibfk_1` FOREIGN KEY (`Loai`) REFERENCES `loaidaily` (`Loai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietxuathang`
--
ALTER TABLE `chitietxuathang`
  ADD CONSTRAINT `chitietxuathang_ibfk_1` FOREIGN KEY (`MaPhieuXuat`) REFERENCES `phieuxuathang` (`MaPhieuXuat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `congno`
--
ALTER TABLE `congno`
  ADD CONSTRAINT `congno_ibfk_1` FOREIGN KEY (`MaDaiLy`) REFERENCES `cacdaily` (`MaDaiLy`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doanhso`
--
ALTER TABLE `doanhso`
  ADD CONSTRAINT `doanhso_ibfk_1` FOREIGN KEY (`MaDaiLy`) REFERENCES `cacdaily` (`MaDaiLy`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieuthutien`
--
ALTER TABLE `phieuthutien`
  ADD CONSTRAINT `phieuthutien_ibfk_1` FOREIGN KEY (`MaDaiLy`) REFERENCES `cacdaily` (`MaDaiLy`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieuxuathang`
--
ALTER TABLE `phieuxuathang`
  ADD CONSTRAINT `phieuxuathang_ibfk_1` FOREIGN KEY (`MaDaiLy`) REFERENCES `cacdaily` (`MaDaiLy`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

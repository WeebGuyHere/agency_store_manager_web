-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 12:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

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
('X005', 'MH002', '10', '8000000', '80000000'),
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
('D04', '1', '12000', '212000', '224000');

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
('4', 'thực phẩm', '20000000');

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
('MH001', 'oreo', '100000'),
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
  `DienThoai` varchar(50) DEFAULT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `NgayThuTien` date DEFAULT NULL,
  `SoTienThu` decimal(18,0) DEFAULT NULL,
  PRIMARY KEY (`MaPhieuThu`,`MaDaiLy`),
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
  PRIMARY KEY (`MaPhieuXuat`,`MaDaiLy`),
  KEY `MaDaiLy` (`MaDaiLy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phieuxuathang`
--

INSERT INTO `phieuxuathang` (`MaPhieuXuat`, `MaDaiLy`, `TongTien`, `NgayLapPhieu`) VALUES
('X002', 'D05', '24000000', '2021-11-01');

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
-- Constraints for table `chitietxuathang`
--
ALTER TABLE `chitietxuathang`
  ADD CONSTRAINT `chitietxuathang_ibfk_1` FOREIGN KEY (`MaMatHang`) REFERENCES `mathang` (`MaMatHang`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `loaidaily`
--
ALTER TABLE `loaidaily`
  ADD CONSTRAINT `loaidaily_ibfk_1` FOREIGN KEY (`Loai`) REFERENCES `cacdaily` (`Loai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieuthutien`
--
ALTER TABLE `phieuthutien`
  ADD CONSTRAINT `phieuthutien_ibfk_1` FOREIGN KEY (`MaDaiLy`) REFERENCES `cacdaily` (`MaDaiLy`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieuxuathang`
--
ALTER TABLE `phieuxuathang`
  ADD CONSTRAINT `phieuxuathang_ibfk_1` FOREIGN KEY (`MaPhieuXuat`) REFERENCES `chitietxuathang` (`MaPhieuXuat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phieuxuathang_ibfk_2` FOREIGN KEY (`MaDaiLy`) REFERENCES `cacdaily` (`MaDaiLy`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

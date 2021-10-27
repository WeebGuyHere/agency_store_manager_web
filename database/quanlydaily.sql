-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 06:02 PM
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
  KEY `MaDaiLy` (`MaDaiLy`),
  KEY `Loai` (`Loai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `cacdaily`:
--   `Loai`
--       `loaidaily` -> `Loai`
--

--
-- Dumping data for table `cacdaily`
--

INSERT INTO `cacdaily` (`MaDaiLy`, `TenDaiLy`, `Loai`, `DiaChi`, `Quan`, `DienThoai`, `Email`, `NgayTiepNhan`, `TienNo`) VALUES
('D02', 'Đai Ly B', '1', '20-Van Quan', '08', '0433828383', 'hvskjid@outlook.com', '2021-04-06', '50000'),
('D03', 'Đai Ly C', '1', '20-Van Quan ', '10', '0482323723', 'shas@gmail.com', '2021-04-03', '34000'),
('D04', 'Đai Ly D', '1', '40-Nguyen Chi Thanh', '15', '0328382832', 'eee@gmail.com', '2021-01-11', '12000'),
('D05', 'Đai Ly E', '1', '40-Nguyen Chi Thanh', '16', '0253632532', 'euq@gmail.com', '2021-02-02', '11000'),
('D06', 'Đai Ly F', '2', '123', '17', '0232918199', 'ddd@gmail.com', '2021-03-02', '30000'),
('D07', 'Đai Ly G', '2', '11', '17', '0322321211', 'sas@gmail.com', '2021-03-03', '24000'),
('D08', 'Đai Ly H', '2', '112', '18', '0348328321', 'dau@gmail.com', '2021-03-21', '10000'),
('D09', 'Đai Ly I', '2', '231', '18', '0212121211', 'fff@gmail.com', '2021-03-01', '35000'),
('D10', 'Đai Ly J', '3', '44', '19', '0331212121', 'dai@gmail.com', '2021-02-02', '23000'),
('D11', 'Đai Ly AB', '3', '321', '19', '0332832111', 'dss@gmail.com', '2021-01-23', '29000'),
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
('D25', 'đai ly phuc dat', '2', '139', '08', '0333019384', 'dii@gmail.com', '2021-01-01', '13000'),
('D26', 'đai ly hy cuong', '2', '343', '08', '0218281283', 'djk@gmail.com', '2021-01-03', '24000'),
('D27', 'đai ly nam toan', '3', '021', '09', '0294294822', 'uwu@gmail,com', '2021-02-01', '10000'),
('D28', 'đai ly phuc loi', '3', '098', '10', '0392919294', 'ei@gmail.com', '2021-02-01', '20000'),
('D29', 'đai ly toan gia', '4', '381', '10', '0281282819', 'eu11@gmail.com', '2021-01-03', '50000'),
('D30', 'đai ly toan lac', '4', '433', '11', '0192192294', 'dqo@gmail.com', '2021-10-01', '19000'),
('D31', 'đai ly an gia', '5', '192', '11', '0333838189', 'doii@gmail.com', '2021-01-09', '38000'),
('D32', 'đai ly son hip', '5', '101', '12', '0238382382', 'djqo@gmail.com', '2021-01-01', '13000'),
('D33', 'đai ly thuy gia', '1', '121', '12', '0381281822', 'hello@gmail.com', '2021-12-01', '20000'),
('D34', 'đai ly 365', '2', '212', '13', '0482482488', 'did@gmail.com', '2021-01-03', '45000');

-- --------------------------------------------------------

--
-- Table structure for table `chitietxuathang`
--

DROP TABLE IF EXISTS `chitietxuathang`;
CREATE TABLE IF NOT EXISTS `chitietxuathang` (
  `MaPhieuXuat` varchar(50) NOT NULL,
  `MaMatHang` varchar(50) NOT NULL,
  `DonViTinh` varchar(50) NOT NULL,
  `SoLuong` varchar(50) NOT NULL,
  `DonGia` varchar(100) NOT NULL,
  `ThanhTien` varchar(100) NOT NULL,
  PRIMARY KEY (`MaPhieuXuat`,`MaMatHang`),
  KEY `MaMatHang` (`MaMatHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `chitietxuathang`:
--   `MaMatHang`
--       `mathang` -> `MaMatHang`
--

--
-- Dumping data for table `chitietxuathang`
--

INSERT INTO `chitietxuathang` (`MaPhieuXuat`, `MaMatHang`, `DonViTinh`, `SoLuong`, `DonGia`, `ThanhTien`) VALUES
('X001', 'MH001', 'Chiếc', '8', '10000', '80000'),
('X002', 'MH002', 'Chiec', '3', '8000000', '24000000'),
('X003', 'MH003', 'Chiec', '3', '10000000', '30000000'),
('X004', 'MH001', 'Hop', '8', '10000', '80000'),
('X005', 'MH002', 'Chiec', '20', '8000000', '160000000'),
('X005', 'MH003', 'chiec', '4', '10000000', '40000000'),
('X006', 'MH003', 'chiec', '8', '10000000', '80000000'),
('X006', 'MH004', 'chiec', '8', '100000', '800000');

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
-- RELATIONSHIPS FOR TABLE `congno`:
--   `MaDaiLy`
--       `cacdaily` -> `MaDaiLy`
--

--
-- Dumping data for table `congno`
--

INSERT INTO `congno` (`MaDaiLy`, `Thang`, `NoDau`, `PhatSinh`, `NoCuoi`) VALUES
('D02', '01', '50000', '100000', '150000'),
('D02', '04', '50000', '100000', '150000'),
('D03', '01', '34000', '100000', '134000'),
('D03', '02', '34000', '100000', '134000'),
('D04', '02', '12000', '100000', '112000'),
('D04', '04', '12000', '100000', '112000'),
('D06', '02', '30000', '100000', '130000');

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
-- RELATIONSHIPS FOR TABLE `doanhso`:
--   `MaDaiLy`
--       `cacdaily` -> `MaDaiLy`
--

--
-- Dumping data for table `doanhso`
--

INSERT INTO `doanhso` (`MaDaiLy`, `Thang`, `SoPhieuXuat`, `TongTriGia`) VALUES
('D02', '05', '1', '80000'),
('D03', '01', '1', '120000000'),
('D03', '02', '1', '80000'),
('D04', '02', '1', '120000000');

-- --------------------------------------------------------

--
-- Table structure for table `loaidaily`
--

DROP TABLE IF EXISTS `loaidaily`;
CREATE TABLE IF NOT EXISTS `loaidaily` (
  `Loai` varchar(50) NOT NULL,
  `TenLoai` varchar(50) NOT NULL,
  `NoToiDa` varchar(50) NOT NULL,
  PRIMARY KEY (`Loai`),
  KEY `Loai` (`Loai`),
  KEY `Loai_2` (`Loai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `loaidaily`:
--

--
-- Dumping data for table `loaidaily`
--

INSERT INTO `loaidaily` (`Loai`, `TenLoai`, `NoToiDa`) VALUES
('1', 'đồ gia dụng', '20000000'),
('2', 'đồ nhựa', '50000000'),
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
  PRIMARY KEY (`ID`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `login`:
--

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`) VALUES
(1, 'user01', '$2a$10$jdoU8hiKSlqXBzhkIsWNj.h4uoM.H2QK1QnzwHdPKqu1hzMXAjxle');

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
-- RELATIONSHIPS FOR TABLE `mathang`:
--

--
-- Dumping data for table `mathang`
--

INSERT INTO `mathang` (`MaMatHang`, `TenMatHang`, `DonGia`) VALUES
('MH001', 'Bánh Oreo', '10000'),
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
-- RELATIONSHIPS FOR TABLE `phieuthutien`:
--   `MaDaiLy`
--       `cacdaily` -> `MaDaiLy`
--

--
-- Dumping data for table `phieuthutien`
--

INSERT INTO `phieuthutien` (`MaPhieuThu`, `MaDaiLy`, `DienThoai`, `DiaChi`, `Email`, `NgayThuTien`, `SoTienThu`) VALUES
('T002', 'D03', '0482323723', '20-Van Quan ', 'shas@gmail.com', '2021-12-02', '40000'),
('T003', 'D03', '0482323723', '20-Van Quan ', 'shas@gmail.com', '2021-03-06', '34000'),
('T004', 'D04', '0328382832', '40-Nguyen Chi Thanh', 'eee@gmail.com', '2021-04-03', '12000'),
('T005', 'D05', '0253632532', '40-Nguyen Chi Thanh', 'euq@gmail.com', '2021-08-06', '11000'),
('T006', 'D06', '0232918199', '123', 'ddd@gmail.com', '2021-05-03', '30000'),
('T007', 'D07', '0322321211', '11', 'sas@gmail.com', '2021-04-05', '24000'),
('T008', 'D08', '0348328321', '112', 'dau@gmail.com', '2021-03-04', '10000'),
('T009', 'D09', '0212121211', '231', 'fff@gmail.com', '2021-03-30', '35000'),
('T010', 'D10', '0331212121', '44', 'dai@gmail.com', '2021-02-02', '23000'),
('T011', 'D10', '0331212121', '44', 'dai@gmail.com', '2021-06-08', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `phieuxuathang`
--

DROP TABLE IF EXISTS `phieuxuathang`;
CREATE TABLE IF NOT EXISTS `phieuxuathang` (
  `MaPhieuXuat` varchar(50) NOT NULL,
  `MaDaiLy` varchar(50) NOT NULL,
  `TongTien` decimal(18,0) NOT NULL,
  `NgayLapPhieu` date NOT NULL,
  PRIMARY KEY (`MaPhieuXuat`),
  KEY `MaDaiLy` (`MaDaiLy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `phieuxuathang`:
--   `MaDaiLy`
--       `cacdaily` -> `MaDaiLy`
--   `MaPhieuXuat`
--       `chitietxuathang` -> `MaPhieuXuat`
--

--
-- Dumping data for table `phieuxuathang`
--

INSERT INTO `phieuxuathang` (`MaPhieuXuat`, `MaDaiLy`, `TongTien`, `NgayLapPhieu`) VALUES
('X001', 'D02', '80000', '2021-05-02'),
('X002', 'D03', '24000000', '2021-01-09'),
('X003', 'D04', '30000000', '2021-03-02'),
('X004', 'D03', '80000', '2021-02-03'),
('X005', 'D04', '200000000', '2021-02-01'),
('X006', 'D25', '80800000', '2021-06-04');

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
-- RELATIONSHIPS FOR TABLE `tochucdaily`:
--

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
  ADD CONSTRAINT `cacdaily_ibfk_1` FOREIGN KEY (`Loai`) REFERENCES `loaidaily` (`Loai`);

--
-- Constraints for table `chitietxuathang`
--
ALTER TABLE `chitietxuathang`
  ADD CONSTRAINT `chitietxuathang_ibfk_1` FOREIGN KEY (`MaMatHang`) REFERENCES `mathang` (`MaMatHang`);

--
-- Constraints for table `congno`
--
ALTER TABLE `congno`
  ADD CONSTRAINT `congno_ibfk_1` FOREIGN KEY (`MaDaiLy`) REFERENCES `cacdaily` (`MaDaiLy`);

--
-- Constraints for table `doanhso`
--
ALTER TABLE `doanhso`
  ADD CONSTRAINT `doanhso_ibfk_1` FOREIGN KEY (`MaDaiLy`) REFERENCES `cacdaily` (`MaDaiLy`);

--
-- Constraints for table `phieuthutien`
--
ALTER TABLE `phieuthutien`
  ADD CONSTRAINT `phieuthutien_ibfk_1` FOREIGN KEY (`MaDaiLy`) REFERENCES `cacdaily` (`MaDaiLy`);

--
-- Constraints for table `phieuxuathang`
--
ALTER TABLE `phieuxuathang`
  ADD CONSTRAINT `phieuxuathang_ibfk_1` FOREIGN KEY (`MaDaiLy`) REFERENCES `cacdaily` (`MaDaiLy`),
  ADD CONSTRAINT `phieuxuathang_ibfk_2` FOREIGN KEY (`MaPhieuXuat`) REFERENCES `chitietxuathang` (`MaPhieuXuat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

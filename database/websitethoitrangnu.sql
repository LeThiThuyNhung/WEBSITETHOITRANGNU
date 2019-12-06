-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 05:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitethoitrangnu`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_hd`
--

CREATE TABLE `chitiet_hd` (
  `MADH` int(11) NOT NULL,
  `MASP` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `GHICHU` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiet_hd`
--

INSERT INTO `chitiet_hd` (`MADH`, `MASP`, `SOLUONG`, `GHICHU`) VALUES
(1, 'SP001', 2, ''),
(2, 'SP010', 3, ''),
(3, 'SP012', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `MADH` int(11) NOT NULL,
  `MAKH` int(11) NOT NULL,
  `NGAYDH` date NOT NULL,
  `PTHANHTOAN` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAYNH` date NOT NULL,
  `TONGTIEN` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`MADH`, `MAKH`, `NGAYDH`, `PTHANHTOAN`, `NGAYNH`, `TONGTIEN`) VALUES
(1, 1, '2019-03-12', 'Chuyển khooản', '2019-03-14', 200000),
(2, 2, '2019-04-10', 'Tiền mặt', '2019-04-11', 420000),
(3, 3, '2019-03-03', 'Chuyển khoản', '2019-03-06', 280000),
(9, 1, '2019-05-21', 'Nhận hàng thanh toán', '2019-05-24', 940000),
(10, 1, '2019-05-22', 'Nhận hàng thanh toán', '2019-05-25', 540000);

-- --------------------------------------------------------

--
-- Table structure for table `giasp`
--

CREATE TABLE `giasp` (
  `MAGIA` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `MASP` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `GIABAN` float NOT NULL,
  `NGAYCAPNHAT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giasp`
--

INSERT INTO `giasp` (`MAGIA`, `MASP`, `GIABAN`, `NGAYCAPNHAT`) VALUES
('MG001', 'SP001', 100000, '2019-01-05'),
('MG002', 'SP002', 150000, '2019-04-24'),
('MG003', 'SP003', 170000, '2019-05-09'),
('MG004', 'SP004', 160000, '2019-03-13'),
('MG005', 'SP005', 150000, '2019-04-26'),
('MG006', 'SP006', 180000, '2019-03-25'),
('MG007', 'SP007', 130000, '2019-05-10'),
('MG008', 'SP008', 150000, '2019-04-02'),
('MG009', 'SP009', 170000, '2019-04-20'),
('MG010', 'SP010', 140000, '2019-03-23'),
('MG011', 'SP011', 150000, '2019-05-03'),
('MG012', 'SP012', 140000, '2019-02-28'),
('MG013', 'SP013', 120000, '2019-05-01'),
('MG014', 'SP014', 130000, '2019-04-12'),
('MG015', 'SP015', 120000, '2019-04-10'),
('MG016', 'SP016', 140000, '2019-02-12'),
('MG017', 'SP017', 100000, '2019-03-14'),
('MG018', 'SP018', 150000, '2019-04-17'),
('MG019', 'SP019', 200000, '2019-05-07'),
('MG020', 'SP020', 210000, '2019-04-18'),
('MG021', 'SP021', 220000, '2019-04-14'),
('MG022', 'SP022', 400000, '2019-05-01'),
('MG023', 'SP023', 350000, '2019-04-10'),
('MG024', 'SP024', 350000, '2019-04-25'),
('MG025', 'SP026', 250000, '2019-03-16'),
('MG026', 'SP027', 260000, '2019-05-08'),
('MG027', 'SP028', 200000, '2019-04-30'),
('MG028', 'SP029', 210000, '2019-05-05'),
('MG029', 'SP030', 200000, '2019-04-17'),
('MG030', 'SP031', 250000, '2019-05-09'),
('MG031', 'SP032', 260000, '2019-04-16'),
('MG032', 'SP033', 230000, '2019-04-10'),
('MG033', 'SP034', 170000, '2019-05-01'),
('MG034', 'SP035', 200000, '2019-04-08'),
('MG035', 'SP036', 160000, '2019-05-12'),
('MG036', 'SP037', 170000, '2019-04-22'),
('MG037', 'SP038', 180000, '2019-04-17'),
('MG038', 'SP039', 150000, '2019-05-08'),
('MG039', 'SP040', 350000, '2019-04-16'),
('MG040', 'SP041', 360000, '2019-05-11'),
('MG042', 'SP043', 370000, '2019-03-05'),
('MG043', 'SP044', 250000, '2019-03-11'),
('MG044', 'SP045', 220000, '2019-04-02'),
('MG045', 'SP046', 220000, '2019-04-24'),
('MG046', 'SP047', 300000, '2019-04-17'),
('MG047', 'SP048', 205000, '2018-02-15'),
('MG048', 'SP001', 80000, '2019-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(11) NOT NULL,
  `TENKH` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHIKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDTKH` text COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `TENKH`, `DIACHIKH`, `SDTKH`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Thúy', 'Vĩnh lộc a, Bình Chánh, TPHCM ', '0145689325', 'thuy31081998@gmail.com', '123456'),
(2, 'Nhung', 'Phường Sơn Kì, Tân Phú, TPHCM', '0985463125', 'thuy2120@gmail.com', '23456'),
(3, 'Nga', 'Bến Tre', '0964578823', 'nga1998@gmail.com', '123789');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `MALOAI` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `TENLOAI` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`MALOAI`, `TENLOAI`) VALUES
('LH001', 'Áo thun'),
('LH002', 'Áo sơ mi'),
('LH003', 'Áo kiểu'),
('LH004', 'Áo khoác'),
('LH005', 'Chân váy jean'),
('LH006', 'Chân váy kaki'),
('LH007', 'Chân váy vải'),
('LH008', 'Đầm body'),
('LH009', 'Đầm xòe'),
('LH010', 'Đầm suông'),
('LH011', 'Quần jean'),
('LH012', 'Quần vải'),
('LH013', 'Quần kaki');

-- --------------------------------------------------------

--
-- Table structure for table `nhacc`
--

CREATE TABLE `nhacc` (
  `MANCC` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `TENNCC` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhacc`
--

INSERT INTO `nhacc` (`MANCC`, `TENNCC`) VALUES
('NCC01', 'Xưởng may áo Thịnh Phát'),
('NCC02', 'Nhà cung cấp áo sơ mi Hàn Quốc'),
('NCC03', 'Xưởng may quần  quảng châu'),
('NCC04', 'Nhà cung cấp đầm Hàn Quốc'),
('NCC05', 'Xưởng may chân váy Quảng Châu');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` int(11) NOT NULL,
  `TENNV` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHINV` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDTNV` text COLLATE utf8_unicode_ci NOT NULL,
  `EMAILNV` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `TENNV`, `DIACHINV`, `SDTNV`, `EMAILNV`) VALUES
(1, 'Trần Anh Tuấn', 'Thủ Đức, tp.HCM', '09837462742', 'tuantat@gmail.com'),
(2, 'Lê Thị Yến Nhi', '56/10 đường 27, Sơn Kỳ, Tân Phú, tp.HCM', '09437562836', 'nhiltyn@gmail.com'),
(3, 'Nguyễn Văn Thành', '136 Hùng Vương, quận 10, tp.HCM', '0834726482', 'thanhnvt@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `phieugiaohang`
--

CREATE TABLE `phieugiaohang` (
  `MADH` int(11) NOT NULL,
  `MANV` int(11) NOT NULL,
  `NGAYGIAO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `MALOAI` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `MANCC` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `TENSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ANH` text COLLATE utf8_unicode_ci NOT NULL,
  `CHATLIEU` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MAU` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DVT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `SIZE` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `MALOAI`, `MANCC`, `TENSP`, `ANH`, `CHATLIEU`, `MAU`, `DVT`, `SOLUONG`, `SIZE`) VALUES
('SP001', 'LH002', 'NCC04', 'Áo sơ mi viền đen', 'somi1.jpg', 'Vải lụa', 'Trắng - Đỏ -Xanh', 'Cái', 21, 'S - M - L'),
('SP002', 'LH002', 'NCC02', 'Áo sơ mi nơ đen', 'somi2.jpg', 'Vải lụa', 'Trắng - Đỏ - Vàng', 'Cái', 10, 'S - M - L'),
('SP003', 'LH002', 'NCC02', 'Áo sơ mi cổ trụ', 'somi3.jpg', 'Vải kate', 'Xanh- Trang - Đen', 'Cái', 20, 'S - M - L'),
('SP004', 'LH002', 'NCC02', 'Áo sơ mi khăn lụa có túi', 'somi4.jpg', 'Vải lụa', 'Trắng - Đỏ - Vàng', 'Cái', 0, 'S - M - L'),
('SP005', 'LH002', 'NCC02', 'Áo sơ mi sọc cách điệu', 'somi5.jpg', 'Vải lụa', 'Đỏ - Trắng - Vàng', 'Cái', 10, 'S - M - L - XL'),
('SP006', 'LH002', 'NCC02', 'Áo sơ mi sọc caro', 'somi6.jpg', 'Vải thô', 'Xanh - Vàng - Hồng', 'Cái', 0, 'S - M - L - XL'),
('SP007', 'LH002', 'NCC02', 'Áo sơ mi trơn', 'somi7.jpg', 'Vải voan', 'Hồng - Đen - Xanh', 'Cái', 20, 'S - M - L - XL'),
('SP008', 'LH002', 'NCC02', 'Áo sơ mi ca ro kèm áo trong', 'somi8.jpg', 'Vải thô', 'Xanh - Vàng - Hồng', 'Cái', 10, 'S - M - L - XL'),
('SP009', 'LH002', 'NCC02', 'Áo sơ mi tay bèo kơ nơ', 'somi9.jpg', 'Vải voan', 'Xanh - Trắng - Vàng', 'Cái', 10, 'S - M  - L - XL'),
('SP010', 'LH002', 'NCC02', 'Áo sơ mi sọc có túi', 'somi10.jpg', 'Vải lụa', 'Trắng - Đỏ - Vàng', 'Cái', 20, 'S - M - L - XL'),
('SP011', 'LH002', 'NCC02', 'Áo sơ mi dài chấm bi', 'somi11.png', 'Vải kate', 'Xanh - Đỏ - Vàng', 'Cái', 20, 'S - M - L - XL'),
('SP012', 'LH002', 'NCC02', 'Áo sơ mi sọc dọc nhỏ', 'somi12.jpg', 'Vải thô', 'Xanh - Vàng - Đỏ', 'Cái', 10, 'S - M - L - XL'),
('SP013', 'LH001', 'NCC01', 'Áo thun trơn', 'thun1.jpg', 'Cotton', 'Xanh - Đỏ - Vàng', 'Cái', 10, 'S - M - l -XL'),
('SP014', 'LH001', 'NCC01', 'Áo thun form rộng tay dài', 'thun2.jpg', 'Vải nỉ', 'Hồng -  Trắng - Đen', 'Cái', 0, 'S - M - L - XL'),
('SP015', 'LH001', 'NCC01', 'Áo thun form rộng cô gái', 'thun3.jpg', 'Cotton', 'Đỏ - Vàng - Trắng', 'Cái', 20, 'S - M - L'),
('SP016', 'LH001', 'NCC01', 'Áo thun form rộng cổ bẻ', 'thun4.jpg', 'Da cá', 'Vàng - Trắng - Đỏ', 'Cái', 10, 'S - M - L -XL'),
('SP017', 'LH001', 'NCC01', 'Áo thun có túi hình con mèo ', 'thun5.jpg', 'Cotton', 'Trắng - Hồng - Xanh', 'Cái', 0, 'S - M - L - XL'),
('SP018', 'LH001', 'NCC01', 'Áo thun form rộng in hình', 'thun6.jpg', 'Cototon', 'Xanh - Vàng - Trắng', '', 20, 'S - M - L - XL'),
('SP019', 'LH003', 'NCC01', 'Áo kiểu tay bèo kèm nơ', 'kieu1.jpg', 'Vải voan', 'Trắng - Đỏ - Vàng', 'Cái', 10, 'S - M - L - XL'),
('SP020', 'LH003', 'NCC01', 'Áo kiểu họa tiết hoa kèm nơ', 'kieu2.jpg', 'Vải voan', 'Xanh - Đỏ - Vàng', 'Cái', 10, 'S - M - L - XL'),
('SP021', 'LH003', 'NCC01', 'Áo kiểu ren bẹt vai', 'kieu3.jpg', 'Vải ren', 'Trắng - Đen - Vàng', 'Cái', 0, 'S - M - L -XL'),
('SP022', 'LH004', 'NCC02', 'Áo khoác da cổ trụ', 'khoac1.jpg', 'Vải da', 'Đen - Đỏ - Vàng', 'Cái', 10, 'S -M -L -XL'),
('SP023', 'LH004', 'NCC01', 'Áo khoác kaki có mủ', 'khoac2.jpg', 'Kaki', 'Đỏ - Đen - Vàng', 'Cái', 20, 'S - M - L - XL'),
('SP024', 'LH004', 'NCC01', 'Áo khoác jean form rộng cỏ bẻ', 'khoac3.jpg', 'Jean', 'Xanh - Đen - Xám', 'Cái', 10, 'S - M - L - XL'),
('SP026', 'LH011', 'NCC03', 'Quần jean baggy trơn', 'jean1.jpg', 'Jean', 'Xanh - Đen - Xám', 'Cái', 10, 'S - M - L - XL'),
('SP027', 'LH011', 'NCC03', 'Quần jean ống rộng trơn', 'jean2.jpg', 'Jean', 'Xanh - Đen', 'Cái', 0, 'S - M -  L - -XL'),
('SP028', 'LH011', 'NCC03', 'Quần jean lửng đơn giản', 'jean3.jpg', 'Jean', 'Xanh - Đen', 'Cái', 10, 'S - M - L - XL'),
('SP029', 'LH013', 'NCC03', 'Quần kaki baggy sắn lai ', 'kaki2.jpg', 'Kaki', 'Vàng - Đen', 'Cái', 10, 'S - M - L - XL'),
('SP030', 'LH013', 'NCC03', 'Quần kaki dài đơn giản', 'kaki3.jpg', 'Kaki', 'Trắng - Đen', 'Cái', 10, 'S - M - L - XL'),
('SP031', 'LH012', 'NCC03', 'Quần vải ống loe cách điệu', 'vai2.jpg', 'Vải tây', 'Nâu - Đen - Trắng', 'Cái', 0, 'S - M - L - XL'),
('SP032', 'LH012', 'NCC03', 'Quần vải lửng ống rộng', 'vai3.jpg', 'Vải voan', 'Đen - Đỏ - Tím', 'Cái', 10, 'S-  M - L - XL'),
('SP033', 'LH012', 'NCC03', 'Quần vải baggy  dài ống rộng cột nơ', 'vai8.jpg', 'Vải voan', 'Đen - Đỏ', 'Cái', 10, 'S - M - L - XL'),
('SP034', 'LH005', 'NCC05', 'Chân váy jean ngắn đơn giản', 'cjean2.jpg', 'Jean', 'Xanh - Đen', 'Cái', 10, 'S - M - L - XL'),
('SP035', 'LH005', 'NCC05', 'Chân váy jean dài  xẻ giữa', 'cjean3.jpg', 'Jean', 'Xanh - Đen', 'Cái', 0, 'S - M - L - XL'),
('SP036', 'LH005', 'NCC05', 'Chân váy jean ngắn xòe xếp ly', 'cjean4.jpg', 'Jean', 'Xanh - Đen', 'Cái', 20, 'S - M - L - XL'),
('SP037', 'LH006', 'NCC05', 'Chân váy kaki ngắn có nút', 'ckaki2.jpg', 'Kaki', 'Nâu - Đen - Đỏ', 'Cái', 10, 'S - M - L - XL'),
('SP038', 'LH006', 'NCC05', 'Chân váy kaki chữ A kèm dây nịt', 'ckaki3.jpg', 'Kaki', 'Kem - Đen', 'Cái', 10, 'S - M - L - XL'),
('SP039', 'LH006', 'NCC05', 'Chân váy kaki ngắn ôm đơn giản', 'ckaki5.jpg', 'Kaki', 'Trắng - Đen', 'Cái', 10, 'S - M - L - XL'),
('SP040', 'LH008', 'NCC04', 'Đầm body đuôi cá phối tay lưới', 'body1.jpg', 'Cát hàn', 'Đen - Đỏ', 'Cái', 0, 'S - M - L - XL'),
('SP041', 'LH008', 'NCC04', 'Đầm body cột dây', 'body2.jpg', 'Vải thun', 'Đỏ - Đen', 'Cái', 10, 'S - M - L - XL'),
('SP042', 'LH008', 'NCC04', 'Đầm body tay dài phối ren', 'body3.jpg', 'Ren', 'Đỏ - Đen -Trắng', 'Cái', 10, 'S -  M - L - XL'),
('SP043', 'LH010', 'NCC04', 'Đầm suông chữ A xách nách', 'suong1.jpg', 'Kaki', 'Hồng - Trắng - Vàng', 'Cái', 10, 'S - M - L-  XL'),
('SP044', 'LH010', 'NCC04', 'Đầm suông tay lửng hình trái tim', 'suong2.jpg', 'Thun', 'Trắng - Đen', 'Cái', 0, 'S - M - L - XL'),
('SP045', 'LH010', 'NCC04', 'Đầm suông đuôi cá họa tiết', 'suong3.jpg', 'Vải voan', 'Xanh - Vàng - Đỏ', 'Cái', 10, 'S - M - L - XL'),
('SP046', 'LH009', 'NCC04', 'Đầm xòe phối ren', 'xoe1.jpg', 'Ren', 'Hồng - Đen - Đỏ', 'Cái', 10, 'S - M - L - XL'),
('SP047', 'LH009', 'NCC04', 'Đầm xòe cột dây', 'xoe2.jpg', 'Vải cotton', 'Vàng nhạt - Hồng', 'Cái', 10, 'S - M - L - XL'),
('SP048', 'LH009', 'NCC04', 'Đầm xòe phối nút', 'xoe3.jpg', 'Cát hàn', 'Nâu - Đen', 'Cái', 20, 'S - M - L - XL');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan_nv`
--

CREATE TABLE `taikhoan_nv` (
  `MANV` int(11) DEFAULT NULL,
  `TENNGUOIDUNG` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MATKHAU` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan_nv`
--

INSERT INTO `taikhoan_nv` (`MANV`, `TENNGUOIDUNG`, `MATKHAU`) VALUES
(1, 'TuanAnh', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  ADD PRIMARY KEY (`MADH`,`MASP`),
  ADD KEY `FK_CTHD_SP` (`MASP`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `FK_DH_KH` (`MAKH`);

--
-- Indexes for table `giasp`
--
ALTER TABLE `giasp`
  ADD PRIMARY KEY (`MAGIA`),
  ADD KEY `FK_GIA_SP` (`MASP`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Indexes for table `nhacc`
--
ALTER TABLE `nhacc`
  ADD PRIMARY KEY (`MANCC`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`);

--
-- Indexes for table `phieugiaohang`
--
ALTER TABLE `phieugiaohang`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `FK_PGH_NV` (`MANV`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`),
  ADD KEY `FK_SP_LOAI` (`MALOAI`),
  ADD KEY `FK_SP_NCC` (`MANCC`);

--
-- Indexes for table `taikhoan_nv`
--
ALTER TABLE `taikhoan_nv`
  ADD PRIMARY KEY (`TENNGUOIDUNG`),
  ADD KEY `FK_TKNV_NV` (`MANV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `MADH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MANV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  ADD CONSTRAINT `FK_CTHD_DH` FOREIGN KEY (`MADH`) REFERENCES `dondathang` (`MADH`),
  ADD CONSTRAINT `FK_CTHD_SP` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `FK_DH_KH` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`);

--
-- Constraints for table `giasp`
--
ALTER TABLE `giasp`
  ADD CONSTRAINT `FK_GIA_SP` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);

--
-- Constraints for table `phieugiaohang`
--
ALTER TABLE `phieugiaohang`
  ADD CONSTRAINT `FK_PGH_DH` FOREIGN KEY (`MADH`) REFERENCES `dondathang` (`MADH`),
  ADD CONSTRAINT `FK_PGH_NV` FOREIGN KEY (`MANV`) REFERENCES `nhanvien` (`MANV`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_SP_LOAI` FOREIGN KEY (`MALOAI`) REFERENCES `loaisp` (`MALOAI`),
  ADD CONSTRAINT `FK_SP_NCC` FOREIGN KEY (`MANCC`) REFERENCES `nhacc` (`MANCC`);

--
-- Constraints for table `taikhoan_nv`
--
ALTER TABLE `taikhoan_nv`
  ADD CONSTRAINT `FK_TKNV_NV` FOREIGN KEY (`MANV`) REFERENCES `nhanvien` (`MANV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

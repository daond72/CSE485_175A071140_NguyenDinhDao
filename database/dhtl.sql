-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2020 lúc 03:37 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dhtl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `iddangnhap` int(11) NOT NULL,
  `tendangnhap` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL,
  `hoten` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `staus` int(11) NOT NULL,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`iddangnhap`, `tendangnhap`, `admin_pass`, `hoten`, `diachi`, `staus`, `phanquyen`) VALUES
(1, 'admin', 'admin', 'Đào', '0', 0, 1),
(3, 'daond', '123456', 'daond', 'Nghệ an', 1, 2),
(4, 'admin1', '123456', 'dao', 'vu tong phan', 1, 2),
(5, 'dao1', '123456', 'dao', 'ha noi', 1, 2),
(6, 'dao2', '123456', 'dao', 'tphcm', 1, 2),
(7, 'admin', 'admin', 'admin', 'admin', 1, 1),
(9, 'admin11', '123456', 'Dao', '1', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(10) NOT NULL,
  `tendanhmuc` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `iddangnhap` int(1) NOT NULL,
  `ngaydang` date NOT NULL,
  `idtinhtrang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `tendanhmuc`, `mota`, `iddangnhap`, `ngaydang`, `idtinhtrang`) VALUES
(1, 'Tin Tức', 'Mục tin tức trong trang web', 1, '2019-10-20', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `idslide` int(11) NOT NULL,
  `idhinhanh` int(11) NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `idsukien` int(30) NOT NULL,
  `tensukien` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `ngaytochucsk` date NOT NULL,
  `ngayketthucsk` date NOT NULL,
  `idhinhanh` int(30) NOT NULL,
  `iddangnhap` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_files`
--

CREATE TABLE `tbl_files` (
  `idhinhanh` int(7) NOT NULL,
  `tenanh` varchar(500) NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_files`
--

INSERT INTO `tbl_files` (`idhinhanh`, `tenanh`, `ngaydang`) VALUES
(32, 'uploads/congtychungkhoan.jpg', '2019-10-23'),
(33, 'uploads/1..5.png', '0000-00-00'),
(34, 'uploads/', '0000-00-00'),
(35, 'uploads/', '0000-00-00'),
(36, 'uploads/evaluation-for-capstone.docx', '2017-02-03'),
(37, 'uploads/[fmovies.to] The Flash 3 - 06.srt', '2017-02-03'),
(38, 'uploads/activity_sheet3 (1).docx', '2017-02-04'),
(39, 'uploads/amCharts (1).csv', '2017-02-04'),
(40, 'uploads/Penguins.jpg', '2017-02-04'),
(41, 'uploads/FlowchartApplication 2.docx', '2017-02-04'),
(42, 'uploads/evaluation-for-capstone.docx', '2017-02-04'),
(43, 'uploads/Koala.jpg', '2017-02-04'),
(44, 'uploads/Jellyfish.jpg', '2017-02-04'),
(100, 'uploads/Penguins.jpg', '2019-10-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuvien`
--

CREATE TABLE `thuvien` (
  `idhinhanh` int(11) NOT NULL,
  `tenhinhanh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `duongdan` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuvien`
--

INSERT INTO `thuvien` (`idhinhanh`, `tenhinhanh`, `duongdan`) VALUES
(1, '12.jpg', '/images'),
(2, '2.jpg', '/images'),
(3, 'uploads/12.jpg', ''),
(6, 'uploads/2010_0.jpg', ''),
(7, 'uploads/HTPT4.jpg', ''),
(8, 'uploads/slft16.jpg', ''),
(9, 'uploads/anhthongtin.png', ''),
(10, 'uploads/', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `idtinhtrang` int(10) NOT NULL,
  `tentinhtrang` varchar(259) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang`
--

INSERT INTO `tinhtrang` (`idtinhtrang`, `tentinhtrang`) VALUES
(1, 'Đã Xét Duyệt'),
(2, 'Chưa Xét Duyệt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idtintuc` int(11) NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngayviet` date NOT NULL,
  `iddanhmuc` int(30) NOT NULL,
  `idhinhanh` int(10) NOT NULL,
  `iddangnhap` int(30) NOT NULL,
  `idtinhtrang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idtintuc`, `tieude`, `noidung`, `ngayviet`, `iddanhmuc`, `idhinhanh`, `iddangnhap`, `idtinhtrang`) VALUES
(1, 'Kết quả nghiên cứu khoa học sinh viên lần thứ 32', '<span style=\"color: rgb(0, 0, 0); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Năm nay, Hội nghị thu hút 11 đề tài nghiên cứu của sinh viên và được chia làm hai tiểu ban. Các sinh viên tham gia nghiên cứu rải đều từ sinh viên năm thứ nhất (K60) đến sinh viên năm thứ 4 (K57). Điểm mới trong năm nay là nhiều các sinh viên năm nhất và năm hai tham gia.</span>', '2019-10-20', 1, 1, 1, 2),
(2, 'Hội thảo \"Sử dụng mạng xã hội an toàn - góc nhìn từ tiêu chuẩn cộng đồng facebook\"', '<span style=\"color: rgb(0, 0, 0); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Những năm gần đây, mạng xã hội (MXH) đã có bước phát triển mạnh mẽ, tác động lớn đến đời sống xã hội ở hầu hết các quốc gia trên thế giới, trong đó có Việt Nam.&nbsp;MXH đã trở thành một thuật ngữ phổ biến, không còn xa lạ với tất cả chúng ta và đặc biệt đối với các bạn trẻ.</span>', '2019-10-08', 1, 2, 1, 1),
(10, 'Kết quả của đội tuyển Olympic Tin học sinh viên tại kỳ thi toàn quốc lần thứ 28', '<span style=\"color: rgb(0, 0, 0); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Olympic Tin học sinh viên Việt Nam là sáng kiến của hội tin học Việt Nam, Hội sinh viên Việt Nam và Bộ giáo dục và đào tạo nhằm động viên phong trào học tập tin học và khuyến khích các tài năng tin học trẻ. Bắt đầu từ năm 1992, kỳ thi đã được tổ chức định kỳ hàng năm với sự tham gia của đông đảo sinh viên các trường Đại học và Cao đẳng trong cả nước.</span><br>', '0000-00-00', 1, 1, 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`iddangnhap`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`idslide`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`idsukien`);

--
-- Chỉ mục cho bảng `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`idhinhanh`);

--
-- Chỉ mục cho bảng `thuvien`
--
ALTER TABLE `thuvien`
  ADD PRIMARY KEY (`idhinhanh`);

--
-- Chỉ mục cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`idtinhtrang`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtintuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `iddangnhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `idhinhanh` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `thuvien`
--
ALTER TABLE `thuvien`
  MODIFY `idhinhanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 02:09 PM
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
-- Cấu trúc bảng cho bảng `chitiethoso`
--

CREATE TABLE `chitiethoso` (
  `mahoso` int(10) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `dantoc` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongiao` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noisinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `namtotnghiep` int(10) NOT NULL,
  `hocluc12` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hanhkiem12` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop10` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop12` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `khuvuc` int(1) NOT NULL,
  `hokhau` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop11` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `iddangnhap` int(11) NOT NULL,
  `taikhoan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `staus` int(11) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`iddangnhap`, `taikhoan`, `matkhau`, `hoten`, `diachi`, `staus`, `quyen`) VALUES
(1, 'admin', 'aaaaa', 'Đào', '0', 0, 2),
(3, 'daond', '123456', 'daond', 'Nghệ an', 1, 1),
(7, 'admin', 'admin', 'admin', 'admin', 1, 1),
(9, 'admin11', '123456', 'Dao', '1', 1, 1),
(10, 'aaa', 'aa', 'aaa', 'aaa', 1, 1),
(11, 'aaaa', 'aaaaaa', 'aaaaaa', 'aaa', 1, 1);

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
-- Cấu trúc bảng cho bảng `hoso`
--

CREATE TABLE `hoso` (
  `mahoso` int(10) NOT NULL,
  `hovaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `gioitinh` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `xettuyen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoso`
--

INSERT INTO `hoso` (`mahoso`, `hovaten`, `ngaysinh`, `gioitinh`, `email`, `sdt`, `diachi`, `xettuyen`) VALUES
(1, 'Nguyễn Đình Đào', '2020-11-18 00:00:00', '', '', 123456, 'NGHE AN', '');

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
(10, 'uploads/', ''),
(11, 'uploads/14.jpg', '');

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
(1, 'Kết quả nghiên cứu khoa học sinh viên lần thứ 32', '<span style=\"color: rgb(0, 0, 0); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Năm nay, Hội nghị thu hút 11 đề tài nghiên cứu của sinh viên và được chia làm hai tiểu ban. Các sinh viên tham gia nghiên cứu rải đều từ sinh viên năm thứ nhất (K60) đến sinh viên năm thứ 4 (K57). Điểm mới trong năm nay là nhiều các sinh viên năm nhất và năm hai tham gia.</span>', '2019-10-20', 1, 1, 1, 1),
(2, 'Hội thảo \"Sử dụng mạng xã hội an toàn - góc nhìn từ tiêu chuẩn cộng đồng facebook\"', '<span style=\"color: rgb(0, 0, 0); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Những năm gần đây, mạng xã hội (MXH) đã có bước phát triển mạnh mẽ, tác động lớn đến đời sống xã hội ở hầu hết các quốc gia trên thế giới, trong đó có Việt Nam.&nbsp;MXH đã trở thành một thuật ngữ phổ biến, không còn xa lạ với tất cả chúng ta và đặc biệt đối với các bạn trẻ.</span>', '2019-10-08', 1, 2, 1, 1),
(10, 'Kết quả của đội tuyển Olympic Tin học sinh viên tại kỳ thi toàn quốc lần thứ 28', '<span style=\"color: rgb(0, 0, 0); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Olympic Tin học sinh viên Việt Nam là sáng kiến của hội tin học Việt Nam, Hội sinh viên Việt Nam và Bộ giáo dục và đào tạo nhằm động viên phong trào học tập tin học và khuyến khích các tài năng tin học trẻ. Bắt đầu từ năm 1992, kỳ thi đã được tổ chức định kỳ hàng năm với sự tham gia của đông đảo sinh viên các trường Đại học và Cao đẳng trong cả nước.</span><br>', '0000-00-00', 1, 1, 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoso`
--
ALTER TABLE `chitiethoso`
  ADD KEY `mahoso` (`mahoso`);

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
-- Chỉ mục cho bảng `hoso`
--
ALTER TABLE `hoso`
  ADD PRIMARY KEY (`mahoso`),
  ADD KEY `mahoso` (`mahoso`);

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
  MODIFY `iddangnhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `hoso`
--
ALTER TABLE `hoso`
  MODIFY `mahoso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thuvien`
--
ALTER TABLE `thuvien`
  MODIFY `idhinhanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoso`
--
ALTER TABLE `chitiethoso`
  ADD CONSTRAINT `chitiethoso_ibfk_1` FOREIGN KEY (`mahoso`) REFERENCES `hoso` (`mahoso`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

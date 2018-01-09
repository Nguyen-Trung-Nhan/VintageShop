-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 09, 2018 lúc 06:09 PM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `accessoryshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdondathang`
--

DROP TABLE IF EXISTS `chitietdondathang`;
CREATE TABLE IF NOT EXISTS `chitietdondathang` (
  `MaChiTietDonDatHang` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaBan` int(11) DEFAULT NULL,
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  PRIMARY KEY (`MaChiTietDonDatHang`),
  KEY `fk_ChiTietDonDatHang_DonDatHang1_idx` (`MaDonDatHang`),
  KEY `fk_ChiTietDonDatHang_SanPham1_idx` (`MaSanPham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdondathang`
--

INSERT INTO `chitietdondathang` (`MaChiTietDonDatHang`, `SoLuong`, `GiaBan`, `MaDonDatHang`, `MaSanPham`) VALUES
('08101200100', 4, 260000, '081012003', 4),
('08101200101', 3, 1600000, '081012001', 7),
('08101200102', 20, 2200000, '081012001', 1),
('08101200103', 5, 3800000, '081012003', 2),
('08101200200', 6, 2800000, '081012002', 4),
('08101200300', 2, 2200000, '081012003', 15),
('1137047370', 1, 216000, '8670', 1),
('13121200100', 9, 1600000, '131212001', 8),
('13121200200', 1, 1800000, '131212002', 6),
('13121200201', 7, 3000000, '131212002', 7),
('1614761931', 1, 216000, '35616', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

DROP TABLE IF EXISTS `dondathang`;
CREATE TABLE IF NOT EXISTS `dondathang` (
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` datetime DEFAULT NULL,
  `TongThanhTien` int(11) DEFAULT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaTinhTrang` int(11) NOT NULL,
  PRIMARY KEY (`MaDonDatHang`),
  KEY `fk_DonDatHang_TaiKhoan1_idx` (`MaTaiKhoan`),
  KEY `fk_DonDatHang_TinhTrang1_idx` (`MaTinhTrang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`MaDonDatHang`, `NgayLap`, `TongThanhTien`, `MaTaiKhoan`, `MaTinhTrang`) VALUES
('081012001', '2012-10-08 00:00:00', 570000, 1, 1),
('081012002', '2012-10-07 00:00:00', 495000, 2, 1),
('081012003', '2012-10-08 00:00:00', 4400000, 1, 1),
('131212001', '2012-11-08 00:00:00', 10500000, 2, 1),
('131212002', '2012-12-03 00:00:00', 600000, 2, 1),
('35616', '2018-01-09 19:35:44', 216000, 1, 1),
('8670', '2018-01-09 23:43:51', 216000, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsanxuat`
--

DROP TABLE IF EXISTS `hangsanxuat`;
CREATE TABLE IF NOT EXISTS `hangsanxuat` (
  `MaHangSanXuat` int(11) NOT NULL AUTO_INCREMENT,
  `TenHangSanXuat` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LogoURL` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`MaHangSanXuat`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MaHangSanXuat`, `TenHangSanXuat`, `LogoURL`, `BiXoa`) VALUES
(1, 'Resin', 'Resin.png', 0),
(2, ' Rolex', 'Rolex.png', 0),
(3, 'Tiffany', 'Tiffany.png', 0),
(4, 'Cartier', 'Cartier.jpg', 0),
(5, 'Oliver Peoples', 'OliverPeoples.jpeg', 0),
(6, 'North Face', 'NorthFace.gif', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `MaLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoaiSanPham` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`MaLoaiSanPham`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `BiXoa`) VALUES
(1, 'Vòng đeo Wood Resin', 0),
(2, 'Vòng cổ Dreamcatcher', 0),
(3, 'Đồng hồ đeo tay', 0),
(4, 'Dây chuyền Zodiac', 0),
(5, 'Nhẫn bạc cách điệu', 0),
(6, 'Kính mát du lịch', 0),
(7, 'Balo du lịch', 0),
(8, 'Ví da cổ điển', 0),
(9, 'Giày du lịch cách điệu', 0),
(10, 'Phụ kiện cho điện thoại', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitaikhoan`
--

DROP TABLE IF EXISTS `loaitaikhoan`;
CREATE TABLE IF NOT EXISTS `loaitaikhoan` (
  `MaLoaiTaiKhoan` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoaiTaiKhoan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaLoaiTaiKhoan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`MaLoaiTaiKhoan`, `TenLoaiTaiKhoan`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSanPham` int(11) NOT NULL AUTO_INCREMENT,
  `TenSanPham` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhURL` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GiaSanPham` int(11) DEFAULT NULL,
  `NgayNhap` datetime DEFAULT NULL,
  `SoLuongTon` int(11) DEFAULT NULL,
  `SoLuongBan` int(11) DEFAULT NULL,
  `SoLuocXem` int(11) DEFAULT NULL,
  `MoTa` text COLLATE utf8_unicode_ci,
  `BiXoa` tinyint(1) DEFAULT '0',
  `MaLoaiSanPham` int(11) NOT NULL,
  `MaHangSanXuat` int(11) NOT NULL,
  PRIMARY KEY (`MaSanPham`),
  KEY `fk_SanPham_LoaiSanPham1_idx` (`MaLoaiSanPham`),
  KEY `fk_SanPham_HangSanXuat1_idx` (`MaHangSanXuat`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuocXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`) VALUES
(1, 'Vòng đeo Wood Resin', 'Resin_Wood_Resin.jpg', 216000, '2017-12-27 00:00:00', 0, 9, 25, 'Vòng đeo được làm từ nhiều chất liệu bắt mắt, chi tiết và chất lượng.', 0, 1, 1),
(2, 'Vòng cổ Dreamcatcher', 'Cartier_Dreamcatcher.jpg', 250000, '2017-12-27 00:00:00', 16, 10, 30, 'vòng cổ Dreamcatcher được làm hoàn toàn thủ công với cách đan vô cùng tỉ mỉ và tinh tế tới từng chi tiết sẽ tạo nên một phong cách rất riêng cho bạn!', 0, 2, 4),
(3, 'Đồng hồ Day Date', 'Rolex_Day_Date.jpg', 21000000, '2017-03-27 00:00:00', 17, 5, 25, 'Day Date - chiếc đồng hồ đeo tay đầu tiên làm hoàn toàn từ bạch kim hoặc vàng 18 ct, dành cho những gì sang trọng nhất.', 0, 3, 2),
(4, 'Dây chuyền Zodiac', 'Cartier_Zodiac.jpg', 199000, '2017-01-28 00:00:00', 18, 10, 36, 'Zodiac - chuỗi dây chuyền của 12 chòm sao, đại diện cho 12 cung hoàng đạo đầy huyền bí.', 0, 4, 4),
(5, 'Nhẫn bạc cỏ 4 lá', 'Cartier_Nhan_bac_co_4_la.jpg', 350000, '2017-02-25 00:00:00', 20, 14, 40, 'Nhẫn bạc cỏ 4 lá mang đến cho chủ sở hữu nhiều điều may mắn.', 0, 5, 4),
(6, 'Kính mát Titanium Eyeglasses', 'OliverPeoples _Titanium_Eyeglasses.jpg', 1500000, '2017-06-20 00:00:00', 25, 13, 36, 'Kính mát chống nắng, thích hợp cho những con người đam mê du lịch.', 0, 6, 5),
(7, 'Balo  Mainfame 113256', 'Northface_Balo_Mainfame_113256.jpg', 500000, '2017-10-07 00:00:00', 19, 8, 32, 'Bạn cần một chiếc balo thật lớn cho chuyến đi dài ngày? Bạn cần một chiếc balo thật chắc chắn để yên tâm khi đi du lịch? Bạn muốn một chiếc balo có thiết kế thân thiện với người dùng, có ngăn laptop, ngăn bảo vệ máy ảnh, ngăn để nước…?', 0, 7, 6),
(8, 'Ví da  Rag & Bone', 'Tiffany_Rag_Bone.jpg', 799000, '2017-09-03 00:00:00', 22, 16, 33, 'Nếu bạn không phải tuýp người hào nhoáng thích chưng diện mà thuộc dạng coi trọng chất lượng, đánh giá chất lượng qua thiết kế và chất liệu, chiếc ví đen gấp đôi cơ bản này sẽ là một trong những mẫu thiết kế hoàn hảo dành cho bạn. Lớp da đen mềm mại với một khuy bạc đơn giản ở mặt trước sẽ rất bắt mắt mà lại không lòe loẹt. ', 0, 8, 3),
(9, 'Ốp lưng ĐT ', 'Resin_OpLungDT.jpg', 50000, '2017-11-02 00:00:00', 10, 20, 50, 'Ốp lưng điện thoại thời trang, nâng niu chiếc điện thoại của bạn', 0, 10, 1),
(10, 'Vòng đeo Wood Resin ver 2.0', 'Resin_Wood_Resin_02.jpg', 216000, '2017-12-27 00:00:00', 0, 19, 46, 'Vòng đeo được làm từ nhiều chất liệu bắt mắt, chi tiết và chất lượng.', 0, 1, 1),
(13, 'Kính mát Darkblue  Eyeglasses', 'OliverPeoples _Darkblue_Eyeglasses.jpg', 650000, '2017-07-15 00:00:00', 26, 11, 18, 'Kính mát chống nắng, thích hợp cho những con người đam mê du lịch.', 0, 6, 5),
(15, 'Giày phượt trên mọi địa hình', 'OliverPeoples _Giay_Phuot.jpg', 1024000, '2017-06-24 00:00:00', 30, 20, 60, 'Việc trang bị giày đi bộ đường dài cũng có thể trở nên rất cần thiết. Nhờ đế giày cứng hơn, cổ giày cao hơn mắt cá, chúng sẽ tốt hơn cho việc bảo vệ chân.', 0, 9, 5),
(16, 'Balo D\'Leh Sling', 'Northface_DLeh_Sling.png', 4350000, '2017-12-09 00:00:00', 17, 25, 44, 'Bạn cần một chiếc balo thật lớn cho chuyến đi dài ngày? Bạn cần một chiếc balo thật chắc chắn để yên tâm khi đi du lịch? Bạn muốn một chiếc balo có thiết kế thân thiện với người dùng, có ngăn laptop, ngăn bảo vệ máy ảnh, ngăn để nước…?', 0, 7, 6),
(18, 'Ví da  No St / 0012416 ', 'Tiffany_No_St.jpg', 800000, '2017-08-08 00:00:00', 6, 7, 12, 'Nếu bạn không phải tuýp người hào nhoáng thích chưng diện mà thuộc dạng coi trọng chất lượng, đánh giá chất lượng qua thiết kế và chất liệu, chiếc ví đen gấp đôi cơ bản này sẽ là một trong những mẫu thiết kế hoàn hảo dành cho bạn. Lớp da đen mềm mại với một khuy bạc đơn giản ở mặt trước sẽ rất bắt mắt mà lại không lòe loẹt.', 0, 8, 3),
(20, 'Đồng Hồ Submariner 114060', 'Rolex_Submariner_114060.jpg', 425000000, '2017-05-26 00:00:00', 5, 3, 65, 'Đồng hồ Rolex nổi tiếng với những chiếc đồng hồ có khả năng chịu được áp lực lớn và sở hữu sức mạnh khó tin. Một trong những dòng đồng hồ ấy chính là Submariner ! Đây là một trong những mẫu đồng hồ thợ lặn đầu tiên trên thế giới. ', 0, 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT,
  `TenDangNhap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenHienThi` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT '0',
  `MaLoaiTaiKhoan` int(11) NOT NULL,
  PRIMARY KEY (`MaTaiKhoan`),
  KEY `fk_TaiKhoan_LoaiTaiKhoan_idx` (`MaLoaiTaiKhoan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `TenHienThi`, `DiaChi`, `DienThoai`, `Email`, `BiXoa`, `MaLoaiTaiKhoan`) VALUES
(1, 'nhonpham', 'nhonpham', 'Hửu Nhơn', '172 - Trần Phú - Q.5', '01262630974', 'nhonpham@gmail.com', 0, 1),
(2, 'nhannguyen', 'nhannguyen', 'Trung Nhân', '920 - Hậu Giang - Q.6', '0907163683', 'nhannguyen@gmail.com', 0, 1),
(5, 'admin', 'admin', 'Admin website', 'Accessory Shop', '01663306654', 'admin@accessoryshop.vn', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang`
--

DROP TABLE IF EXISTS `tinhtrang`;
CREATE TABLE IF NOT EXISTS `tinhtrang` (
  `MaTinhTrang` int(11) NOT NULL AUTO_INCREMENT,
  `TenTinhTrang` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaTinhTrang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang`
--

INSERT INTO `tinhtrang` (`MaTinhTrang`, `TenTinhTrang`) VALUES
(1, 'Đặt hàng'),
(2, 'Đang giao hàng'),
(3, 'Thanh toán'),
(4, NULL);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `fk_ChiTietDonDatHang_DonDatHang1` FOREIGN KEY (`MaDonDatHang`) REFERENCES `dondathang` (`MaDonDatHang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ChiTietDonDatHang_SanPham1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `fk_DonDatHang_TaiKhoan1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DonDatHang_TinhTrang1` FOREIGN KEY (`MaTinhTrang`) REFERENCES `tinhtrang` (`MaTinhTrang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_SanPham_HangSanXuat1` FOREIGN KEY (`MaHangSanXuat`) REFERENCES `hangsanxuat` (`MaHangSanXuat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SanPham_LoaiSanPham1` FOREIGN KEY (`MaLoaiSanPham`) REFERENCES `loaisanpham` (`MaLoaiSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_TaiKhoan_LoaiTaiKhoan` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`MaLoaiTaiKhoan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2022 at 06:29 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cayxanhdn`
--

-- --------------------------------------------------------

--
-- Table structure for table `cay`
--

CREATE TABLE IF NOT EXISTS `cay` (
  `maCay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenCay` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dacDiem` text COLLATE utf8_unicode_ci,
  `tinhTrang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maLoaiCay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chieuCao` int(11) DEFAULT NULL,
  `ngayTrong` datetime DEFAULT NULL,
  `duongKinhThan` int(11) DEFAULT NULL,
  `duongKinhTan` int(11) DEFAULT NULL,
  `kinhDo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `viDo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maDuong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhAnh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`maCay`),
  KEY `maLoaiCay` (`maLoaiCay`),
  KEY `maDuong` (`maDuong`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cay`
--

INSERT INTO `cay` (`maCay`, `tenCay`, `dacDiem`, `tinhTrang`, `maLoaiCay`, `chieuCao`, `ngayTrong`, `duongKinhThan`, `duongKinhTan`, `kinhDo`, `viDo`, `maDuong`, `hinhAnh`) VALUES
('C01', 'Cây Phượng vàng', 'Về hình dáng cây, lim xẹt thuộc loại trung mộc cao 20-25m, thân màu xám trắng, phân cành thấp. Lá Lim xẹt kép lông chim hai lần, cành non và lá non có lông màu rỉ sét, lá có cuống chung dài: 25–30 cm mang 4-10 đôi lá cấp 1, mỗi lá cấp 1 mang 10-22 đôi lá chét, lá nhỏ thuôn đầu tròn.', 'đã chết', 'CBM', 300, '2021-11-03 00:00:00', 50, 500, '108.154286', '16.052832', '101', 'CayPhuongVang.jpg'),
('C02', 'Cây Vạn Tuế', 'Cây vạn tuế mang vóc dáng uy nghi, đẹp cổ kính với ý nghĩa mang lại sự bền vững trong sự nghiệp. Cây trồng làm cảnh, tạo vẻ bình yên, hiền hòa cho bố cục. Sử dụng làm cảnh trong sân vườn hay trang trí bối cảnh nội thất. Cây được nuôi dưỡng làm tiểu cảnh,mang tới sự hứng thú cho người chơi.', 'đã chết', 'CC', 140, '2021-12-01 00:00:00', 40, 140, '108.212369', '16.077495', '102', 'CayVanTue.jpg'),
('C03', 'Cây Xà Cừ', 'Xà Cừ thường được trồng thành hàng dọc các đường phố vừa làm cây xanh cảnh quan, vừa làm cây bóng mát. Các công trình công cộng như công viên, vườn thú, vườn sinh vật cảnh, khuôn viên công sở, trường học, khu đô thị…cũng thường sử dụng cây Xà Cừ làm cây tạo bóng râm và tăng màu xanh cảnh quan.', 'đang lớn', 'CBM', 300, '2021-12-01 00:00:00', 50, 500, '108.154286', '16.052832', '201', 'CayXaCu.jpg'),
('C04', 'cay bong gon', 'aaaaaaaaaa', 'Mới Trồng', 'CBM', 120, '2021-12-03 00:00:00', 45, 54, '108', '67', '201', 'CayHoaGiay.jpg'),
('C05', 'Cây Lộc vừng', 'Lộc vừng, còn gọi là chiếc hay lộc mưng (danh pháp khoa học: Barringtonia acutangula) là một loài thuộc chi Lộc vừng, là loài cây bản địa của các vùng đất ẩm ven biển Nam Á và Bắc Úc, từ Afghanistan đến Philippin và Queensland', 'Mới trồng', 'CBM', 150, '2021-12-03 00:00:00', 45, 54, '108', '62', '202', 'CayLocVung.jpg'),
('C06', 'Cây ắc ó', 'Cây ắc ó là cây được sử dụng rộng rãi trong cảnh quan phù hợp làm cây trồng viền cũng như trồng hàng rào. Cây ắc ó còn là một loài thảo mộc chữa nhức mỏi, tê thấp.', 'Mới Trồng', 'CBM', 300, '0000-00-00 00:00:00', 50, 500, '108.154288', '16.052834', '301', 'cayaco.jpg'),
('C07', 'Cây Phi lao', 'Họ Phi lao (danh pháp khoa học: Casuarinaceae),Tên khác: Xi lau, dương, dương liễu. Là một họ trong thực vật hai lá mầm thuộc về bộ Fagales, bao gồm 3 hoặc 4 chi, tùy theo hệ thống phân loại, với khoảng 70 loài cây thân gỗ và cây bụi có nguồn gốc ở khu vực nhiệt đới Cựu Thế giới (Indo-Malaysia), Australia và các đảo trên Thái Bình Dương.', 'Mới Trồng', 'CBM', 140, '0000-00-00 00:00:00', 40, 140, '108.212369', '16.077495', '301', 'Cayphilao.jpg'),
('C08', 'Cây Bằng Lăng Tím', 'Hoa Bằng Lăng có màu tím hoặc tím  nhạt, mọc thành tường chùm trên đầu mỗi nhành, mỗi chùm dài từ 20-30cm, thường hoa sẽ ra vào mùa hè. Mỗi bông hoa có 6 cánh, cánh hoa mỏng manh như xác pháo. Quả có hình cầu, đường kính  1,5 -2 cm, ban đầu có màu tím nhạt pha xanh, mềm khi già chuyển sang màu nâu gỗ, cứng. Đối với loài cây này, ngoài giống hoa tím,cây còn có giống với nhiều màu sắc khác nhau như tím trắng, hồng, tím sậm…', 'Mới Trồng', 'CBM', 140, '0000-00-00 00:00:00', 40, 140, '108.2123691', '16.0774951', '302', 'CayBanglangtim.jpg'),
('C09', 'Cây Hồng Lộc', 'Cây hồng lộc có Tên khoa học là syzygium oleinum, syzygium campanulatum, cây hồng lộc thuộc họ thực vật myrtaceae (họ nhà sim). Cây cao từ 0,8-2m đối với những cây trồng ở Việt Nam, còn ở một số quốc gia khác thì cây có thể cao từ 3 đến hơn 4m.', 'Mới Trồng', 'CC', 300, '0000-00-00 00:00:00', 50, 500, '108.154289', '16.052835', '301', 'Cayhongloc.jpg'),
('C10', 'Cây Ngọc Lan Trắng', 'Ngọc Lan trắng hay còn gọi là cây Bạch Lan. Cây thuộc loại cây bóng mát, hoa của cây có hương thơm ngào ngat, thích hợp trồng làm cây công trình tạo cảnh quan đô thị hoặc trồng làm cây bóng mát trong sân', 'Mới Trồng', 'CC', 140, '0000-00-00 00:00:00', 40, 140, '108.2123692', '16.0774952', '302', 'CâyNgọcLanTrắng.jpg'),
('C11', 'Cây Sanh Tầng', 'Cây Sanh tầmg - Thế trực liên chi cũng là cây có dáng trực, thẳng đứng, biến ra từ thế trực quân tử, nhưng liên chi là nhiều cành nhánh quấn quýt lấy nhau, ôm sát thân cây, mới xòe ra ngoài làm tàn theo kiểu tứ diện, sum suê đầy đủ, mặt nào cũng đẹp, cân đối hài hòa, thành hình chóp dưới to trên nhỏ, không khuyết chỗ nào rất đẹp, biểu hiện người phong lưu, ấm no sung mãn, vui tươi hạnh phúc.', 'Mới Trồng', 'CC', 140, '0000-00-00 00:00:00', 40, 140, '108.2123693', '16.0774953', '401', 'CâySanhTầng.jpg'),
('C12', 'Cây Lan Quân Tử', 'Cây Lan Quân Tử được coi là cây vượng tài đối với người tuổi Mùi. Người cầm tinh con Dê không để ý chuyện tiền tài, cũng không ham muốn kiếm tiền nên họ ít khi cố gắng để làm việc, vì vậy đương nhiên không có khả năng phát tài. Bạn có thể đặt một chậu Lan Quân Tử tại góc bên phải của bức tường đối diện ghế sô-pha, để tăng vận quý nhân trợ giúp bạn trên con đường phát tài.', 'Mới Trồng', 'CH', 140, '0000-00-00 00:00:00', 40, 140, '108.2123694', '16.0774954', '401', 'CâyLanQuânTử.png'),
('C13', 'Cây Tùng Bút', 'Cây Tùng Tháp hay còn gọi là cây bút  Tùng. Cây là loài cây cảnh ngoại thất đẹp. Cây có sức sống tốt, tính chịu hạn cao. Ở Việt Nam, cây cũng được nhập trồng khá phổ biến từ lâu trong sân vườn các biệt thự, lăng tẩm, đền đài.', 'Mới Trồng', 'CC', 140, '0000-00-00 00:00:00', 40, 140, '108', '16', '402', 'CâyTùngBút.jpg'),
('C14', 'Cây Hoàng Nam', 'Cây Hoàng Nam được trồng để tôn tạo cảnh quan khuôn viên sân vườn, cảnh quan công viên, công ty, đô thị, nhà ở theo phong cách Châu Âu, ngoài ra có thể trồng dọc ven hai bên đường vĩa hè có tác dụng dẫn lối …Cây hoàng nam có thể làm rào cản bụi, lọc bụi khá phù hợp, cây khá thích hợp với những ngôi nhà hoặc công trình kiến trúc theo phong cách Châu Âu tạo nét chấm phá cho cảnh quan.', 'Mới Trồng', 'CC', 140, '0000-00-00 00:00:00', 40, 90, '108', '17', '402', 'CâyHoàngNam.jpg'),
('C15', 'Cây Kim Tiền', 'Cây kim tiền hay là kim phát tài phù hợp với gia chủ muốn mua cây đặt ở phòng khách, phòng hội họp, văn phòng công sở, nhà hàng, khách sạn, hoặc dùng làm quà tặng trong những dịp mừng lễ, tết, thăng chức, khai trương….', 'Mới Trồng', 'CH', 140, '0000-00-00 00:00:00', 40, 100, '108', '16.1', '501', 'CâyKimTiền.png'),
('C16', 'Cây thiết mộc lan', 'Cây thiết mộc lan hay còn gọi là cây phát tài, cây phất dụ thơm với tên khoa học là Dracaena fragrans, thuộc họ Dracaenaceae có nguồn gốc từ Tây Phi. Cây thuộc loại cây gỗ thân cột, có đặc tính rất đặc biệt: khi bị cắt hoặc cưa thì sẽ đâm chồi, nhánh quanh vị trí bị cắt.', 'Mới Trồng', 'CH', 140, '0000-00-00 00:00:00', 40, 110, '108', '18', '501', 'Câythiếtmộclan.jpg'),
('C17', 'Cây trắc bách diệp', 'Cây trắc bách diệp không chỉ trồng làm cây cảnh đẹp tại các khu đô thị mà cây còn có thể trị được rất nhiều loại bệnh trong y học. Hãy cùng tìm hiểu về loại cây này để tìm kiếm thêm thông tin hữu ích.', 'Mới Trồng', 'CH', 140, '0000-00-00 00:00:00', 40, 120, '108.154290', '16.052836', '501', 'Câytrắcbáchdiệp.jpg'),
('C18', 'Cây Tài Lộc', 'Cây Tài Lộc giúp cho gia chủ làm ăn thuận lợi, sáng suốt trong việc đưa ra những quyết định. Cây phù hợp làm quà tặng, cây để bàn, trang trí…', 'Mới Trồng', 'CH', 140, '2022-01-01 00:00:00', 40, 130, '108.154291', '16.052837', '101', 'CâyTàiLộc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chamsoccay`
--

CREATE TABLE IF NOT EXISTS `chamsoccay` (
  `maChamSoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maCay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cheDoChamSoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PhanBon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tuoiNuoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghiChu` text COLLATE utf8_unicode_ci,
  `ngayCapNhat` datetime DEFAULT NULL,
  `maNhanVien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maChamSoc`),
  KEY `maCay` (`maCay`),
  KEY `maNhanVien` (`maNhanVien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chamsoccay`
--

INSERT INTO `chamsoccay` (`maChamSoc`, `maCay`, `cheDoChamSoc`, `PhanBon`, `tuoiNuoc`, `ghiChu`, `ngayCapNhat`, `maNhanVien`) VALUES
('CS001', 'C01', 'Mỗi ngày', 'Phân bón NPK', '200ml', '', '2022-01-02 08:10:00', 'NV01');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsuco`
--

CREATE TABLE IF NOT EXISTS `chitietsuco` (
  `maChiTietSuCo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maCay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maDanhSachSuCo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `moTaSuCo` text COLLATE utf8_unicode_ci,
  `trangThai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`maChiTietSuCo`),
  KEY `maCay` (`maCay`),
  KEY `maDanhSachSuCo` (`maDanhSachSuCo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietsuco`
--

INSERT INTO `chitietsuco` (`maChiTietSuCo`, `maCay`, `maDanhSachSuCo`, `moTaSuCo`, `trangThai`) VALUES
('CT01', 'C01', 'DS01', 'Cây chết', 'Chưa xử lý'),
('CT02', 'C02', 'DS01', 'cây héo, cần tưới nước', 'Chưa duyệt'),
('CT03', 'C03', 'DS01', 'gãy cành', 'Chưa xử lý');

-- --------------------------------------------------------

--
-- Table structure for table `danhsachsuco`
--

CREATE TABLE IF NOT EXISTS `danhsachsuco` (
  `maDanhSachSuCo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maKhachHang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngayBaoCao` datetime DEFAULT NULL,
  PRIMARY KEY (`maDanhSachSuCo`),
  KEY `maKhachHang` (`maKhachHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhsachsuco`
--

INSERT INTO `danhsachsuco` (`maDanhSachSuCo`, `maKhachHang`, `ngayBaoCao`) VALUES
('DS01', 'KH01', '2021-12-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `maKhachHang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoTen` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taiKhoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matKhau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diaChi` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`maKhachHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKhachHang`, `hoTen`, `SDT`, `taiKhoan`, `matKhau`, `diaChi`) VALUES
('KH01', 'Bạch Trung Kiên', '0785462153', 'vantoi', 'vantoi', 'Hòa Phong, Hòa Vang, TP Đà Nẵng');

-- --------------------------------------------------------

--
-- Table structure for table `khacphucsuco`
--

CREATE TABLE IF NOT EXISTS `khacphucsuco` (
  `maCongViec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maChiTietSuCo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noiDungCongCiec` text COLLATE utf8_unicode_ci,
  `ngayKhacPhuc` datetime DEFAULT NULL,
  `maNhanVien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maCongViec`),
  KEY `maChiTietSuCo` (`maChiTietSuCo`),
  KEY `maNhanVien` (`maNhanVien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuvucquanly`
--

CREATE TABLE IF NOT EXISTS `khuvucquanly` (
  `maKhuVucQuanLy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenKhuVuc` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`maKhuVucQuanLy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuvucquanly`
--

INSERT INTO `khuvucquanly` (`maKhuVucQuanLy`, `tenKhuVuc`) VALUES
('KV1', 'Khu vực phía Đông'),
('KV2', 'Khu vực phía Tây'),
('KV3', 'Khu vực phía Nam'),
('KV4', 'Khu vực phía Bắc'),
('KV5', 'Khu vực trung tâm');

-- --------------------------------------------------------

--
-- Table structure for table `loaicay`
--

CREATE TABLE IF NOT EXISTS `loaicay` (
  `maLoaiCay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `moTa` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`maLoaiCay`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaicay`
--

INSERT INTO `loaicay` (`maLoaiCay`, `moTa`) VALUES
('CBM', 'Cây bóng mát'),
('CC', 'Cây cảnh'),
('CH', 'Cây hoa');

-- --------------------------------------------------------

--
-- Table structure for table `loaitaikhoan`
--

CREATE TABLE IF NOT EXISTS `loaitaikhoan` (
  `maLoaiTaiKhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loaiNhanVien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`maLoaiTaiKhoan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`maLoaiTaiKhoan`, `loaiNhanVien`) VALUES
('NV', 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `maNhanVien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoTen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaySinh` datetime DEFAULT NULL,
  `gioiTinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taiKhoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matKhau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diaChi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maLoaiTaiKhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maKhuVucQuanLy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maNhanVien`),
  KEY `maLoaiTaiKhoan` (`maLoaiTaiKhoan`),
  KEY `maKhuVucQuanLy` (`maKhuVucQuanLy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`maNhanVien`, `hoTen`, `ngaySinh`, `gioiTinh`, `Email`, `SDT`, `taiKhoan`, `matKhau`, `diaChi`, `maLoaiTaiKhoan`, `maKhuVucQuanLy`) VALUES
('NV01', 'Nhân Viên 1', '2021-12-02 00:00:00', 'Nam', 'abc@gmail.com', '0123456789', 'abc', 'abc', 'dia chi 01', 'NV', 'KV2');

-- --------------------------------------------------------

--
-- Table structure for table `tuyenduong`
--

CREATE TABLE IF NOT EXISTS `tuyenduong` (
  `maDuong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenDuong` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `maKhuVucQuanLy` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`maDuong`),
  KEY `maKhuVucQuanLy` (`maKhuVucQuanLy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuyenduong`
--

INSERT INTO `tuyenduong` (`maDuong`, `tenDuong`, `maKhuVucQuanLy`) VALUES
('101', 'Lê Văn Hiến', 'KV1'),
('102', 'Võ Nguyên Giáp', 'KV1'),
('201', 'Trường Chinh', 'KV2'),
('202', 'Trần Thái Tông', 'KV2'),
('301', 'Nam Kỳ Khởi Nghĩa', 'KV3'),
('302', 'Phạm Như Xương', 'KV3'),
('401', 'Nguyễn Tất Thành', 'KV4'),
('402', 'Trần Cao Vân', 'KV4'),
('501', 'Trần Phú', 'KV5');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cay`
--
ALTER TABLE `cay`
  ADD CONSTRAINT `cay_ibfk_1` FOREIGN KEY (`maLoaiCay`) REFERENCES `loaicay` (`maLoaiCay`),
  ADD CONSTRAINT `cay_ibfk_2` FOREIGN KEY (`maDuong`) REFERENCES `tuyenduong` (`maDuong`);

--
-- Constraints for table `chamsoccay`
--
ALTER TABLE `chamsoccay`
  ADD CONSTRAINT `chamsoccay_ibfk_1` FOREIGN KEY (`maCay`) REFERENCES `cay` (`maCay`),
  ADD CONSTRAINT `chamsoccay_ibfk_2` FOREIGN KEY (`maNhanVien`) REFERENCES `nhanvien` (`maNhanVien`);

--
-- Constraints for table `chitietsuco`
--
ALTER TABLE `chitietsuco`
  ADD CONSTRAINT `chitietsuco_ibfk_1` FOREIGN KEY (`maCay`) REFERENCES `cay` (`maCay`),
  ADD CONSTRAINT `chitietsuco_ibfk_2` FOREIGN KEY (`maDanhSachSuCo`) REFERENCES `danhsachsuco` (`maDanhSachSuCo`);

--
-- Constraints for table `danhsachsuco`
--
ALTER TABLE `danhsachsuco`
  ADD CONSTRAINT `danhsachsuco_ibfk_1` FOREIGN KEY (`maKhachHang`) REFERENCES `khachhang` (`maKhachHang`);

--
-- Constraints for table `khacphucsuco`
--
ALTER TABLE `khacphucsuco`
  ADD CONSTRAINT `khacphucsuco_ibfk_1` FOREIGN KEY (`maChiTietSuCo`) REFERENCES `chitietsuco` (`maChiTietSuCo`),
  ADD CONSTRAINT `khacphucsuco_ibfk_2` FOREIGN KEY (`maNhanVien`) REFERENCES `nhanvien` (`maNhanVien`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`maLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`maLoaiTaiKhoan`),
  ADD CONSTRAINT `nhanvien_ibfk_2` FOREIGN KEY (`maKhuVucQuanLy`) REFERENCES `khuvucquanly` (`maKhuVucQuanLy`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

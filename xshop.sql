-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 12, 2024 lúc 04:46 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(10) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_san_pham` int(10) NOT NULL,
  `user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noi_dung`, `ma_san_pham`, `user`) VALUES
(1, 'qua xin xo', 26, 1),
(9, 'ky nghi he cuoi cung cua sinh vien FPT', 26, 1),
(10, 'tao dom', 26, 1),
(11, 'sanpham cui bap', 26, 1),
(18, 'Sản Phẩm dùng nhanh chai pin vl', 27, 1),
(19, 'Dùng ngon hơn Iphone 8', 26, 2),
(20, 'Tản nhiệt con này ko tốt lắm', 44, 1),
(21, 'TiVi này xem phim phê hết nước chấm', 65, 1),
(22, 'Máy này cho chơi faifai cháy cực', 75, 1),
(23, 'qua yeu', 43, 2),
(24, 'may choi giat lag vai o', 43, 2),
(25, 'máy quá mỏng dùng ko vừa tay', 45, 1),
(26, 'Con này bắn pubg mượt đấy', 56, 1),
(27, 'Chơi GTA V đc', 58, 1),
(28, 'Đế đỡ TV cùi ', 66, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `id` int(10) NOT NULL,
  `ma_loai` varchar(50) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`id`, `ma_loai`, `ten_loai`) VALUES
(1, 'L001', 'Mobile'),
(2, 'L002', 'Laptop'),
(19, 'L003', 'PC'),
(20, 'L004', 'TV'),
(21, 'L005', 'Tablet');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) NOT NULL,
  `ma_san_pham` varchar(50) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `ma_loai` varchar(50) NOT NULL,
  `noi_dung` varchar(1000) NOT NULL,
  `hinh_anh` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ma_san_pham`, `ten_san_pham`, `ma_loai`, `noi_dung`, `hinh_anh`) VALUES
(26, 'MSP001', 'IPhone X 64GB', 'L001', 'Trên iPhone X, Apple đã đưa ra quyết định táo bạo là loại bỏ phím cứng duy nhất để điều khiển iOS trên iPhone là nút Home. Toàn bộ mặt trước sản phẩm bây giờ là màn hình.    iPhone X sử dụng tấm nền OLED đầu tiên trong các đời iPhone. Màn hình này được Apple gọi là Super Retina Display với kích cỡ 5.8 inch, đạt mật độ điểm anh 458 PPI (1125 x 2468 pixel), cũng là màn hình sắc nét nhất trong số các máy iPhone hiện nay. Apple cho biết màn hình của iPhone này hỗ trợ chuẩn HDR10 và Dolby, có độ tương phản rất cao, tới 1:1.000.000.', 'assets/image/product/IPhone X 64GB.jfif'),
(27, 'MSP002', 'IPhone X 256GB', 'L001', 'Trên iPhone X, Apple đã đưa ra quyết định táo bạo là loại bỏ phím cứng duy nhất để điều khiển iOS trên iPhone là nút Home. Toàn bộ mặt trước sản phẩm bây giờ là màn hình.    iPhone X sử dụng tấm nền OLED đầu tiên trong các đời iPhone. Màn hình này được Apple gọi là Super Retina Display với kích cỡ 5.8 inch, đạt mật độ điểm anh 458 PPI (1125 x 2468 pixel), cũng là màn hình sắc nét nhất trong số các máy iPhone hiện nay. Apple cho biết màn hình của iPhone này hỗ trợ chuẩn HDR10 và Dolby, có độ tương phản rất cao, tới 1:1.000.000.', 'assets/image/product/IPhone X 256GB.jfif'),
(28, 'MSP003', 'IPhone XR 64GB', 'L001', 'iPhone Xr - Màn hình: IPS LCD, 6.1 inch  - Camera: Camera trước 7MP và camera sau 12MP  - CPU: Apple A12 Bionic 6 nhân  - Pin & Sạc: Li-Ion 2942mAh  - Thiết kế: Nguyên khối  iPhone Xr mang đến một trải nghiệm đầy ấn tượng với màn hình IPS LCD kích thước lớn 6.1 inch và công nghệ True Tone mang lại chất lượng hình ảnh tuyệt vời. Điểm đáng chú ý khác là hiệu suất mạnh mẽ với chip Apple A12 Bionic, đảm bảo mọi tác vụ chạy mượt mà và nhanh chóng. AI trí tuệ thông minh trong chip này giúp tối ưu hóa hiệu suất, cải thiện tính bảo mật qua tính năng Face ID, tùy chỉnh ứng dụng và tiện ích dựa trên thói quen sử dụng người dùng, và quản lý pin hiệu quả.', 'assets/image/product/IPhone XR 64GB.jfif'),
(37, 'MSP004', 'IPhone XR 128GB', 'L001', 'iPhone Xr - Màn hình: IPS LCD, 6.1 inch  - Camera: Camera trước 7MP và camera sau 12MP  - CPU: Apple A12 Bionic 6 nhân  - Pin & Sạc: Li-Ion 2942mAh  - Thiết kế: Nguyên khối  iPhone Xr mang đến một trải nghiệm đầy ấn tượng với màn hình IPS LCD kích thước lớn 6.1 inch và công nghệ True Tone mang lại chất lượng hình ảnh tuyệt vời. Điểm đáng chú ý khác là hiệu suất mạnh mẽ với chip Apple A12 Bionic, đảm bảo mọi tác vụ chạy mượt mà và nhanh chóng. AI trí tuệ thông minh trong chip này giúp tối ưu hóa hiệu suất, cải thiện tính bảo mật qua tính năng Face ID, tùy chỉnh ứng dụng và tiện ích dựa trên thói quen sử dụng người dùng, và quản lý pin hiệu quả.', 'assets/image/product/IPhone XR 128GB.jfif'),
(38, 'MSP005', 'IPhone XS 64GB', 'L001', 'iPhone Xs - Màn hình: OLED, 5.8 inch  - Camera: Camera trước 7MP và 2 camera sau 12MP  - CPU: Apple A12 Bionic 6 nhân  - Pin & Sạc: Li-Ion 2658mAh  - Thiết kế: Nguyên khối  iPhone Xs tỏa sáng với hiệu suất mạnh mẽ nhờ vào con chip Apple A12 Bionic tiên tiến. Hệ điều hành iOS 14 trên máy cũng hứa hẹn một trải nghiệm siêu mượt mà. Màn hình Super Retina OLED 5.8 inch trên iPhone Xs mang đến chất lượng hình ảnh xuất sắc với dải màu rộng và độ chi tiết cao. Hệ thống âm thanh 2 chiều cải tiến cung cấp trải nghiệm âm thanh sống động mà không cần tai nghe.', 'assets/image/product/IPhone XS 64GB.jfif'),
(39, 'MSP006', 'IPhone XS 128GB', 'L001', 'iPhone Xs - Màn hình: OLED, 5.8 inch  - Camera: Camera trước 7MP và 2 camera sau 12MP  - CPU: Apple A12 Bionic 6 nhân  - Pin & Sạc: Li-Ion 2658mAh  - Thiết kế: Nguyên khối  iPhone Xs tỏa sáng với hiệu suất mạnh mẽ nhờ vào con chip Apple A12 Bionic tiên tiến. Hệ điều hành iOS 14 trên máy cũng hứa hẹn một trải nghiệm siêu mượt mà. Màn hình Super Retina OLED 5.8 inch trên iPhone Xs mang đến chất lượng hình ảnh xuất sắc với dải màu rộng và độ chi tiết cao. Hệ thống âm thanh 2 chiều cải tiến cung cấp trải nghiệm âm thanh sống động mà không cần tai nghe.', 'assets/image/product/IPhone XS 128GB.jfif'),
(40, 'MSP007', 'IPhone XS Max 64GB', 'L001', 'iPhone Xs Max - Màn hình: OLED, 6.5 inch  - Camera: Camera trước 7MP và 2 camera sau 12MP  - CPU: Apple A12 Bionic 6 nhân  - Pin & Sạc: Li-Ion 3174mAh  - Thiết kế: Nguyên khối  iPhone Xs Max được trang bị con chip Apple A12 Bionic mạnh mẽ, xây dựng trên tiến trình 7nm và 6 nhân, đảm bảo hiệu suất vượt trội và tiết kiệm năng lượng tối ưu. Bộ xử lý đồ họa được cải tiến, giúp xử lý đồ họa và chơi game mượt mà hơn. Hệ điều hành iOS 14 đảm bảo trải nghiệm mượt mà và hiệu quả.', 'assets/image/product/IPhone XS Max 64GB.jfif'),
(42, 'MSP008', 'IPhone XS Max 128GB', 'L001', 'iPhone Xs Max - Màn hình: OLED, 6.5 inch  - Camera: Camera trước 7MP và 2 camera sau 12MP  - CPU: Apple A12 Bionic 6 nhân  - Pin & Sạc: Li-Ion 3174mAh  - Thiết kế: Nguyên khối  iPhone Xs Max được trang bị con chip Apple A12 Bionic mạnh mẽ, xây dựng trên tiến trình 7nm và 6 nhân, đảm bảo hiệu suất vượt trội và tiết kiệm năng lượng tối ưu. Bộ xử lý đồ họa được cải tiến, giúp xử lý đồ họa và chơi game mượt mà hơn. Hệ điều hành iOS 14 đảm bảo trải nghiệm mượt mà và hiệu quả.', 'assets/image/product/IPhone XS Max 128GB.jfif'),
(43, 'MSP009', 'IPhone XS Max 256GB', 'L001', 'iPhone Xs Max - Màn hình: OLED, 6.5 inch  - Camera: Camera trước 7MP và 2 camera sau 12MP  - CPU: Apple A12 Bionic 6 nhân  - Pin & Sạc: Li-Ion 3174mAh  - Thiết kế: Nguyên khối  iPhone Xs Max được trang bị con chip Apple A12 Bionic mạnh mẽ, xây dựng trên tiến trình 7nm và 6 nhân, đảm bảo hiệu suất vượt trội và tiết kiệm năng lượng tối ưu. Bộ xử lý đồ họa được cải tiến, giúp xử lý đồ họa và chơi game mượt mà hơn. Hệ điều hành iOS 14 đảm bảo trải nghiệm mượt mà và hiệu quả.', 'assets/image/product/IPhone XS Max 256GB.jfif'),
(44, 'MSP0010', 'Laptop Acer Swift X', 'L002', 'Laptop Acer Swift X với thiết kế mỏng nhẹ và hiệu suất mạnh mẽ, thích hợp cho công việc và giải trí.', 'assets/image/product/Laptop Acer Swift X.jpg'),
(45, 'MSP0011', 'Laptop Chuwi larkbook X', 'L002', 'Laptop Chuwi Larkbook X với cấu hình cao cấp và thiết kế thanh lịch, phù hợp với người dùng di động.', 'assets/image/product/Laptop Chuwi larkbook X.jfif'),
(47, 'MSP0012', 'Laptop Chuwi MiniBook X  N100', 'L002', 'Laptop Chuwi MiniBook X N100 với tính năng gọn nhẹ và hiệu suất đủ cho nhu cầu làm việc cơ bản.', 'assets/image/product/Laptop Chuwi MiniBook X  N100.jpg'),
(49, 'MSP0013', 'Laptop Cu Alienware X17', 'L002', 'Laptop Cu Alienware X17 với hiệu suất cao và thiết kế đặc biệt dành cho game thủ.', 'assets/image/product/Laptop HP OMEN X 17.jpg'),
(50, 'MSP0014', 'Laptop Fujitsu UH-X', 'L002', 'Laptop Fujitsu UH-X với thiết kế mỏng nhẹ và hiệu suất mạnh mẽ cho người dùng di động.', 'assets/image/product/Laptop Fujitsu UH-X.jpg'),
(51, 'MSP0015', 'Laptop Surface Pro X', 'L002', 'Laptop Surface Pro X với khả năng đa nhiệm và thiết kế linh hoạt cho các tác vụ khác nhau.', 'assets/image/product/Laptop Surface Pro X.jpg'),
(52, 'MSP0016', 'Laptop HP OMEN X 17', 'L002', 'Laptop HP OMEN X 17 với hiệu suất vượt trội và màn hình lớn, lý tưởng cho game và công việc đồ họa.', 'assets/image/product/Laptop HP OMEN X 17.jpg'),
(53, 'MSP0017', 'Laptop Asus X GV301QH-K6231T', 'L002', 'Laptop Asus X GV301QH-K6231T với cấu hình cao và thiết kế hiện đại, phù hợp cho người dùng chuyên nghiệp.', 'assets/image/product/Laptop Asus X GV301QH-K6231T.jpg'),
(54, 'MSP0018', 'Laptop Asus ZenBook UX6404VV-P4069W', 'L002', 'Laptop Asus ZenBook UX6404VV-P4069W với thiết kế thanh lịch và hiệu suất mạnh mẽ cho công việc và giải trí.', 'assets/image/product/Laptop Asus ZenBook UX6404VV-P4069W.jpg'),
(55, 'MSP0019', ' PC Intel X Core i5-13600X', 'L003', '\'PC Intel X Core i5-13600X mang đến hiệu suất xử lý vượt trội với vi xử lý Intel Core i5 thế hệ mới, lý tưởng cho các tác vụ đa nhiệm và ứng dụng yêu cầu cao.\'', 'assets/image/product/Bộ PC Intel X Core i5-13600K.jpg'),
(56, 'MSP0020', 'PC AI AMD 3955WX', 'L003', 'PC AI AMD 3955WX với hiệu suất tuyệt vời và khả năng xử lý mạnh mẽ cho các tác vụ nặng.', 'assets/image/product/PC AI AMD 3955WX.jpg'),
(58, 'MSP0022', 'PC Gaming - Alpha I12 - BL-X', 'L003', 'PC Gaming - Alpha I12 - BL-X với cấu hình mạnh mẽ và thiết kế tối ưu cho các trò chơi hiện đại.', 'assets/image/product/PC Gaming - Alpha I12 - BL-X.jpg'),
(59, 'MSP0023', 'PC Gaming Asus X Intel I9 14900K', 'L003', 'PC Gaming Asus X Intel I9 14900K với hiệu suất cực cao và khả năng xử lý đồ họa tuyệt vời.', 'assets/image/product/PC Gaming Asus X Intel I9 14900K.jpg'),
(60, 'MSP0024', 'PC Gaming Đại Việt Atlantis X', 'L003', 'PC Gaming Đại Việt Atlantis X với thiết kế mạnh mẽ và hiệu suất ổn định cho nhu cầu chơi game cao.', 'assets/image/product/PC Gaming Đại Việt Atlantis X.jpg'),
(61, 'MSP0025', 'PC Gaming STAR X GIGABYTE RECY', 'L003', 'PC Gaming STAR X GIGABYTE RECY với cấu hình cao và khả năng xử lý mạnh mẽ, phù hợp cho các trò chơi và ứng dụng chuyên sâu.', 'assets/image/product/PC Workstation LONG PHÁT Aries X.jpg'),
(62, 'MSP0026', 'PC Workstation X i7', 'L003', 'PC Workstation X i7 với cấu hình mạnh mẽ và khả năng xử lý cao, lý tưởng cho công việc đồ họa và tính toán.', 'assets/image/product/PC Workstation X i7.jpg'),
(63, 'MSP0027', 'PCAP Intel Meteor Lake X5', 'L003', 'PCAP Intel Meteor Lake X5 cung cấp hiệu suất vượt trội với bộ xử lý Meteor Lake mới nhất từ Intel, mang lại tốc độ xử lý nhanh chóng và hiệu suất đa nhiệm mạnh mẽ.', 'assets/image/product/PCAP Intel Meteor Lake X5.jpg'),
(64, 'MSP0028', 'Android Tivi Sony X 4K KD-65X8500G', 'L004', 'Android Tivi Sony X 4K KD-65X8500G sở hữu độ phân giải 4K sắc nét với kích thước màn hình lớn 65 inch, cung cấp chất lượng hình ảnh tuyệt vời và các tính năng thông minh của Android.', 'assets/image/product/Android Tivi Sony 4K 65 inch KD-65X8500G.jpg'),
(65, 'MSP0029', 'Google Tivi Sony X', 'L004', 'Google Tivi Sony X tích hợp hệ điều hành Google TV, mang đến trải nghiệm giải trí phong phú với khả năng truy cập các ứng dụng và dịch vụ trực tuyến dễ dàng.', 'assets/image/product/Google Tivi Sony X.jpg'),
(66, 'MSP0030', 'Smart Tivi LG X', 'L004', 'Smart Tivi LG X có độ phân giải cao và các tính năng thông minh, giúp bạn thưởng thức nội dung đa dạng với chất lượng hình ảnh sắc nét và âm thanh sống động.', 'assets/image/product/Smart Tivi LG X.jpg'),
(67, 'MSP0031', 'Smart Tivi Redmi X65', 'L004', 'Smart Tivi Redmi X65 với kích thước màn hình lớn 65 inch, mang đến hình ảnh rõ nét và các tính năng thông minh, phù hợp cho các nhu cầu giải trí gia đình.', 'assets/image/product/Smart Tivi Redmi X65.jpg'),
(68, 'MSP0032', 'Tivi Xiaomi Redmi AI Smart X75', 'L004', 'Tivi Xiaomi Redmi AI Smart X75 tích hợp công nghệ AI giúp cải thiện chất lượng hình ảnh và âm thanh, cung cấp trải nghiệm giải trí tuyệt vời với kích thước màn hình 75 inch.', 'assets/image/product/Tivi Xiaomi Redmi AI Smart X75.jpg'),
(69, 'MSP0033', 'Tivi Xiaomi Redmi X85', 'L004', 'Tivi Xiaomi Redmi X85 với kích thước màn hình lớn 85 inch và độ phân giải cao, mang đến trải nghiệm hình ảnh sắc nét và âm thanh mạnh mẽ cho không gian rộng.', 'assets/image/product/Tivi Xiaomi Redmi X85.jpg'),
(70, 'MSP0034', 'Tivi Xiaomi Redmi X86', 'L004', 'Tivi Xiaomi Redmi X86 có màn hình lớn và độ phân giải cao, phù hợp với nhu cầu giải trí và xem phim tại gia với chất lượng hình ảnh và âm thanh tốt.', 'assets/image/product/Tivi Xiaomi Redmi X86.jpg'),
(71, 'MSP0035', 'Tivi Xiaomi X TV5', 'L004', 'Tivi Xiaomi X TV5 với thiết kế hiện đại và chất lượng hình ảnh vượt trội, là lựa chọn lý tưởng cho việc giải trí và xem các chương trình yêu thích.', 'assets/image/product/Tivi Xiaomi X TV5.jpg'),
(72, 'MSP0037', 'Tivi Xiaomi X65', 'L004', 'Tivi Xiaomi X65 với màn hình lớn và độ phân giải cao, cung cấp trải nghiệm hình ảnh và âm thanh chất lượng cao cho các nhu cầu giải trí gia đình.', 'assets/image/product/Tivi Xiaomi X65.png'),
(74, 'MSP0038', 'Tablet Lenovo Tab XS Pro', 'L005', 'Tablet Lenovo Tab XS Pro với màn hình lớn và hiệu suất mạnh mẽ, phù hợp cho các nhu cầu làm việc và giải trí trên di động.', 'assets/image/product/Tablet Lenovo Tab XS Pro.jpg'),
(75, 'MSP0039', 'Tablet Lenovo Tab X11', 'L005', 'Tablet Lenovo Tab X11 với thiết kế mỏng nhẹ và hiệu suất ổn định, là lựa chọn tốt cho công việc và giải trí hàng ngày.', 'assets/image/product/Tablet Lenovo Tab X11.jpg'),
(76, 'MSP0040', 'Tablet Lenovo Tab X10', 'L005', 'Tablet Lenovo Tab X10 với màn hình sắc nét và hiệu suất tốt, cung cấp trải nghiệm sử dụng mượt mà cho các nhu cầu học tập và giải trí.', 'assets/image/product/Tablet Lenovo Tab X10.jpg'),
(77, 'MSP0041', 'Tablet Alcatel FC 8094X', 'L005', 'Tablet Alcatel FC 8094X với thiết kế gọn nhẹ và hiệu suất đủ dùng cho các nhu cầu cơ bản của người dùng.', 'assets/image/product/Tablet Alcatel FC 8094X.jpg'),
(78, 'MSP0042', 'Samsung Pro X2', 'L005', 'Samsung Pro X2 với hiệu suất cao và thiết kế sang trọng, là lựa chọn lý tưởng cho công việc và giải trí đa phương tiện.', 'assets/image/product/Samsung Pro X2.jfif'),
(79, 'MSP0043', 'Samsung Galaxy Tab A7 Lite  X', 'L005', 'Samsung Galaxy Tab A7 Lite X là một máy tính bảng với màn hình lớn, thiết kế mỏng nhẹ và hiệu suất mạnh mẽ. Nó hỗ trợ nhiều tính năng giải trí và học tập, lý tưởng cho cả công việc và giải trí', 'assets/image/product/Samsung Galaxy Tab A7 Lite  X.jpg'),
(80, 'MSP0044', 'iPad Gen X10', 'L005', 'iPad Gen X10 với hiệu suất mạnh mẽ và màn hình sắc nét, là thiết bị lý tưởng cho công việc và giải trí với hệ điều hành iOS.', 'assets/image/product/iPad Gen 10.jpg'),
(81, 'MSP0045', 'IPAD Pro TiTan', 'L005', 'IPAD Pro TiTan với thiết kế cao cấp và hiệu suất vượt trội, là lựa chọn tuyệt vời cho các chuyên gia và người dùng cần hiệu suất cao.', 'assets/image/product/images.jfif'),
(82, 'MSP0046', 'iPad Gen XS ', 'L005', 'iPad Gen XS với tính năng cao cấp và hiệu suất mạnh mẽ, đáp ứng nhu cầu sử dụng của cả người dùng cá nhân và chuyên gia.', 'assets/image/product/iPad Gen 10.jpg'),
(83, 'MSP0050', 'PC AORUS MODEL X', 'L003', 'PC AORUS MODEL X với cấu hình mạnh mẽ và thiết kế hiện đại, là lựa chọn tuyệt vời cho các game thủ và người dùng cần hiệu suất cao.', 'assets/image/product/PC AORUS MODEL X.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `role`, `email`, `image`) VALUES
(1, 'quyendau', 'ĐậuVănQuyềnABC', 'quyendau', 'admin', 'quyendau1603@gmail.com', 'assets/image/account/logo.jpg'),
(2, 'quyendau05', 'Quyen Dau', 'quyendau05', 'custommer ', 'quyendau1603@gmail.com', 'assets/image/PC AORUS MODEL X.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp` (`ma_san_pham`),
  ADD KEY `fk_user` (`user`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_sp` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

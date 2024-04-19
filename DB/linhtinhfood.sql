-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 19, 2024 lúc 04:54 PM
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
-- Cơ sở dữ liệu: `linhtinhfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_time_at` varchar(255) NOT NULL,
  `created_day_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `customer_id`, `product_id`, `content`, `created_time_at`, `created_day_at`) VALUES
(20, 33, 4, 'bình luận mới nhất', '00:48:30', '26-03-2024'),
(24, 33, 4, 'Sản phẩm cùng loại', '00:51:26', '26-03-2024'),
(25, 33, 4, 'Mô tả:\r\nChính Sách Tiền Tệ Thế Kỷ 21 Cuốn sách đầu tiên bàn về lịch sử chống lạm phát & khủng hoảng của Cục Dự trữ Liên bang Hoa Kỳ', '00:51:38', '26-03-2024'),
(26, 22, 4, 'Có lẽ không quyển sách nào trong thế kỷ này có tác động sâu sắc đến đời sống trí tuệ và tinh thần của chúng ta hơn Con Đường Chẳng Mấy Ai Đi. Với doanh số trên 10 triệu bản in trên toàn thế giới và được dịch sang hơn 25 ngôn ngữ, đây là một hiện tượng tro', '00:51:51', '26-03-2024'),
(27, 22, 4, 'Tô Bình Yên Vẽ Hạnh Phúc (Tái Bản 2022)\r\n\r\nSau thành công của cuốn sách đầu tay “Phải lòng với cô đơn” chàng họa sĩ nổi tiếng và tài năng Kulzsc đã trở lại với một cuốn sách vô cùng đặc biệt mang tên: \"Tô bình yên - vẽ hạnh phúc” – sắc nét phong cách cá n', '00:52:23', '26-03-2024'),
(28, 22, 4, 'Tô Bình Yên Vẽ Hạnh Phúc (Tái Bản 2022)\r\n\r\nSau thành công của cuốn sách đầu tay “Phải lòng với cô đơn” chàng họa sĩ nổi tiếng và tài năng Kulzsc đã trở lại với một cuốn sách vô cùng đặc biệt mang tên: \"Tô bình yên - vẽ hạnh phúc” – sắc nét phong cách cá nhân với một chút “thơ thẩn, rất hiền”.\r\n\r\nKhông giống với những cuốn sách chỉ để đọc, “Tô bình yên – vẽ hạnh phúc” là một cuốn sách mà độc giả vừa tìm được “Hạnh phúc to to từ những điều nho nhỏ” vừa được thực hành ngay lập tức. Một sự kết hợp m', '00:52:45', '26-03-2024'),
(29, 29, 4, '123', '00:07:33', '28-03-2024'),
(31, 32, 3, 'Sách thật tốt\r\n', '14:11:59', '15-04-2024'),
(33, 63, 3, 'sách rất hay', '16:25:47', '15-04-2024'),
(34, 71, 3, 'sách rất hay và ý nghĩa', '00:54:19', '16-04-2024'),
(36, 72, 3, 'Đứa trẻ hiểu chuyện thường không có kẹo ăn” – Cuốn sách dành cho những thời thơ ấu đầy vết thương.', '00:57:05', '16-04-2024'),
(37, 72, 3, 'Đứa Trẻ Hiểu Chuyện Thường Không Có Kẹo Ăn', '00:57:17', '16-04-2024'),
(39, 70, 3, 'Tức giận, lo lắng, sợ hãi, nhút nhát là những cảm xúc phổ biến và là một phần không thể thiếu trong quá trình trưởng thành của mỗi đứa trẻ. Vì vậy, bố mẹ đừng quá lo lắng hay khắt khe với những cảm xúc tiêu cực của con, mà hãy mở lòng và cùng con vượt qua chúng nhé!', '00:57:35', '16-04-2024'),
(40, 62, 3, 'Người giàu không làm việc vì tiền. Họ bắt tiền làm việc cho họ. Chấp nhận thất bại là bước đầu của thành công? Quyền lực của sự lựa chọn! Những bài học không có trong nhà trường. Hãy đọc bộ sách Dạy con làm giàu và bắt đầu từ hôm nay “để không có tiền vẫn tạo ra tiền”…', '00:57:50', '16-04-2024'),
(41, 66, 3, 'Sau nhiều năm sống yên ổn sau những bức tường thành cao lừng lững, loài người đã bắt đầu cảm nhận được nguy cơ diệt vong đến từ một giống loài khổng lồ mang tên Titan. Dù muốn dù không, họ buộc phải đứng lên, và đã đứng lên một cách đầy quyết tâm, mạnh mẽ để chống lại những kẻ thù hùng mạnh nhất.', '00:58:03', '16-04-2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `name`) VALUES
(7, 'VĂN HỌC'),
(115, 'Bún/Phở'),
(116, 'Đồ ăn vặt '),
(118, 'Đồ ăn đêm'),
(119, 'Đồ uống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `ghi_chu` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`id`, `customer_id`, `so_luong`, `status`, `tong_tien`, `payment`, `ghi_chu`, `name`, `phone`, `email`, `adress`, `created_at`) VALUES
(37, 3, 0, 1, 40850, 'COD', '', 'e', '1', 'bacle@gmail.com', '2', '2024-04-19 12:07:26'),
(38, 3, 0, 1, 135160, 'COD', '', 'bacle', '2', 'bacle@gmail.com', '1', '2024-04-19 12:07:50'),
(41, 3, 0, 1, 193000, 'COD', '', 'bacle', '2', 'bacle@gmail.com', 'sd', '2024-04-19 12:58:31'),
(42, 3, 0, 1, 66490, 'COD', '', 'bacle', '4', 'bacle@gmail.com', '4', '2024-04-19 13:02:35'),
(43, 3, 0, 1, 792500, 'COD', '', 'bacle', '4', 'bacle@gmail.com', '5', '2024-04-19 13:03:07'),
(44, 3, 0, 5, 66490, 'COD', '', 'bacle', '1', 'bacle@gmail.com', '2', '2024-04-19 13:15:00'),
(45, 3, 0, 3, 89000, 'COD', '', 'bacle', '3', 'bacle@gmail.com', '2', '2024-04-19 15:51:55'),
(46, 2, 0, 1, 66490, 'COD', '', 'baclv', '0123456', 'client@gmail.com', 'Hà Đông', '2024-04-19 16:25:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang_items`
--

CREATE TABLE `gio_hang_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gio_hang_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang_items`
--

INSERT INTO `gio_hang_items` (`id`, `user_id`, `gio_hang_id`, `product_id`, `so_luong`, `gia`) VALUES
(27, 5, 0, 49, 1, 89),
(36, 2, 0, 50, 2, 25),
(107, 3, 0, 0, 0, 75),
(108, 3, 0, 0, 0, 75);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang_item_thanhtoan`
--

CREATE TABLE `gio_hang_item_thanhtoan` (
  `id` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Gia_tien_Pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gio_hang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang_item_thanhtoan`
--

INSERT INTO `gio_hang_item_thanhtoan` (`id`, `so_luong`, `product_id`, `Gia_tien_Pro_id`, `user_id`, `gio_hang_id`) VALUES
(40, 1, 64, 40850, 3, 37),
(41, 1, 70, 66490, 3, 38),
(42, 1, 71, 68670, 3, 38),
(45, 1, 27, 193000, 3, 41),
(46, 1, 70, 66490, 3, 42),
(47, 7, 28, 581000, 3, 43),
(48, 2, 59, 211500, 3, 43),
(49, 1, 70, 66490, 3, 44),
(50, 1, 75, 89000, 3, 45),
(51, 1, 70, 66490, 2, 46);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `danh_muc_id` int(11) NOT NULL,
  `nha_san_xuat_id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `img_id` int(11) DEFAULT NULL,
  `the_loai_id` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `gia_sale` int(11) DEFAULT NULL,
  `mo_ta` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `luot_ban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `ten`, `danh_muc_id`, `nha_san_xuat_id`, `img`, `img_id`, `the_loai_id`, `gia`, `gia_sale`, `mo_ta`, `created_at`, `luot_ban`) VALUES
(75, 'Bò Pít Tết', 115, 0, 'chinese-new-year_600x800.jpg', NULL, 0, 8900000, 10000000, '', '2024-04-19 15:49:35', 1),
(76, 'Nước chanh leo bạc hà', 119, 0, 'Nước chanh leo bạc hà.jpg', NULL, 0, 17000, 0, '', '2024-04-19 16:37:47', 0),
(77, 'Nước ép cà rốt', 119, 0, 'Nước ép cà rốt.jpg', NULL, 0, 25000, 0, '', '2024-04-19 16:38:16', 0),
(78, 'Nước uống Coca', 119, 0, 'Nước uống Coca.jpg', NULL, 0, 12000, 0, '', '2024-04-19 16:38:48', 0),
(79, 'Sữa Chua Thạch Trân Châu', 119, 0, 'Sữa Chua Thạch Trân Châu.jpg', NULL, 0, 21000, 0, '', '2024-04-19 16:39:11', 0),
(80, 'Khoai tây chiên bơ giòn', 118, 0, 'Khoai tây chiên bơ giòn.jpg', NULL, 0, 23000, 25000, '', '2024-04-19 16:41:34', 0),
(81, 'Mì trộn trứng cút', 118, 0, 'Mì trộn trứng cút.jpg', NULL, 0, 10000, 12000, 'Mì trộn trứng cút giao tận nhà', '2024-04-19 16:42:15', 0),
(82, 'Mỳ trộn xúc xích', 118, 0, 'Mỳ trộn xúc xích.jpg', NULL, 0, 20000, 25000, '', '2024-04-19 16:42:52', 0),
(83, 'Nem chua rán Hà Nội', 118, 0, 'Nem chua rán Hà Nội.jpg', NULL, 0, 7000, 1000, '', '2024-04-19 16:43:42', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `produt_tac_gia`
--

CREATE TABLE `produt_tac_gia` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `tac_gia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `produt_tac_gia`
--

INSERT INTO `produt_tac_gia` (`id`, `product_id`, `tac_gia_id`) VALUES
(4, 42, 6),
(5, 42, 5),
(6, 43, 8),
(18, 48, 7),
(19, 48, 6),
(20, 49, 4),
(33, 50, 7),
(34, 50, 6),
(35, 50, 5),
(36, 54, 5),
(37, 54, 4),
(38, 56, 4),
(39, 56, 3),
(68, 46, 5),
(69, 46, 4),
(70, 22, 3),
(75, 31, 6),
(76, 32, 3),
(77, 47, 7),
(78, 47, 6),
(79, 61, 6),
(80, 61, 5),
(81, 27, 8),
(82, 60, 7),
(83, 59, 5),
(84, 30, 8),
(85, 30, 7),
(86, 29, 5),
(87, 29, 4),
(88, 28, 4),
(89, 26, 5),
(90, 26, 3),
(91, 62, 5),
(94, 63, 7),
(96, 64, 8),
(97, 65, 7),
(98, 66, 7),
(99, 67, 3),
(100, 68, 5),
(101, 69, 8),
(102, 69, 7),
(103, 70, 6),
(104, 71, 4),
(105, 72, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tac_gia`
--

CREATE TABLE `tac_gia` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tac_gia`
--

INSERT INTO `tac_gia` (`id`, `name`) VALUES
(3, 'Hồng phong'),
(4, 'Tố hữu'),
(5, 'Kim lân·'),
(6, 'Mitzi Szereto'),
(7, 'Robert Greene'),
(8, 'William J O’Neil');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `phone`, `email`, `password`, `dia_chi`, `is_admin`) VALUES
(1, 'user', NULL, '0123456789', 'quynhquw@gmail.com', 123456, '', 1),
(2, 'baclv', NULL, NULL, 'client@gmail.com', 12345678, '', 0),
(3, 'bacle', '1713233818huong-dan-tao-facebook-avatar.jpg', '', 'bacle@gmail.com', 123456, '', 1),
(5, 'baclv1', '1711648838b1-g_i---c_u.jpg', '', 'bac@1234', 111, 'ha noi 2', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gio_hang_items`
--
ALTER TABLE `gio_hang_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gio_hang_item_thanhtoan`
--
ALTER TABLE `gio_hang_item_thanhtoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gio_hang_item_thanhtoan_ibfk_1` (`gio_hang_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danh_muc_id` (`danh_muc_id`),
  ADD KEY `nha_san_xuat_id` (`nha_san_xuat_id`),
  ADD KEY `img_id` (`img_id`);

--
-- Chỉ mục cho bảng `produt_tac_gia`
--
ALTER TABLE `produt_tac_gia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `tac_gia_id` (`tac_gia_id`);

--
-- Chỉ mục cho bảng `tac_gia`
--
ALTER TABLE `tac_gia`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `gio_hang_items`
--
ALTER TABLE `gio_hang_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT cho bảng `gio_hang_item_thanhtoan`
--
ALTER TABLE `gio_hang_item_thanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `produt_tac_gia`
--
ALTER TABLE `produt_tac_gia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `tac_gia`
--
ALTER TABLE `tac_gia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `gio_hang_item_thanhtoan`
--
ALTER TABLE `gio_hang_item_thanhtoan`
  ADD CONSTRAINT `gio_hang_item_thanhtoan_ibfk_1` FOREIGN KEY (`gio_hang_id`) REFERENCES `gio_hang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`danh_muc_id`) REFERENCES `danh_muc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

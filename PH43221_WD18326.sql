-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3308:3308
-- Thời gian đã tạo: Th10 18, 2023 lúc 07:22 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `PH43221_WD18326`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1.Thanh toán trực tiếp \r\n2.Chuyển khoản\r\n3.Thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Đơn hàng mới\r\n1.Đang xử lý\r\n2.Đang giao hàng\r\n3.Đã giao ',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(1, 0, '', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:20:03pm 08/10/2023', 610080, 0, NULL, NULL, NULL),
(2, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:21:06pm 08/10/2023', 610080, 0, NULL, NULL, NULL),
(3, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:22:19pm 08/10/2023', 610080, 0, NULL, NULL, NULL),
(4, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:28:03pm 08/10/2023', 610080, 0, NULL, NULL, NULL),
(5, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:28:17pm 08/10/2023', 610080, 0, NULL, NULL, NULL),
(6, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:29:54pm 08/10/2023', 610080, 0, NULL, NULL, NULL),
(7, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:30:01pm 08/10/2023', 610080, 0, NULL, NULL, NULL),
(8, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:30:55pm 08/10/2023', 2952965, 0, NULL, NULL, NULL),
(9, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:33:59pm 08/10/2023', 2952965, 0, NULL, NULL, NULL),
(10, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:34:38pm 08/10/2023', 2952965, 0, NULL, NULL, NULL),
(11, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:35:30pm 08/10/2023', 2952965, 0, NULL, NULL, NULL),
(12, 0, 'Ngo Ngoc Luat', 'Hà Nội, Việt Nam', '0832374213', 'luatnn@gmail.com', 0, '07:37:54pm 08/10/2023', 2952965, 0, NULL, NULL, NULL),
(13, 0, 'Le Thanh Huyen', '', '', 'huyenlt@gmail.com', 0, '07:40:31pm 08/10/2023', 250239, 0, NULL, NULL, NULL),
(14, 0, 'Le Thanh Huyen', '', '', 'huyenlt@gmail.com', 0, '07:42:50pm 08/10/2023', 2991563, 0, NULL, NULL, NULL),
(15, 0, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '07:45:49pm 08/10/2023', 4676305, 0, NULL, NULL, NULL),
(16, 0, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '07:48:59pm 08/10/2023', 4676305, 0, NULL, NULL, NULL),
(17, 0, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '07:49:07pm 08/10/2023', 4676305, 0, NULL, NULL, NULL),
(18, 0, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '07:49:59pm 08/10/2023', 4676305, 0, NULL, NULL, NULL),
(19, 0, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '07:52:02pm 08/10/2023', 4676305, 0, NULL, NULL, NULL),
(20, 0, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '07:53:54pm 08/10/2023', 329842, 0, NULL, NULL, NULL),
(21, 0, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '07:54:19pm 08/10/2023', 329842, 0, NULL, NULL, NULL),
(22, 0, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '07:54:41pm 08/10/2023', 329842, 0, NULL, NULL, NULL),
(23, 0, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '07:55:33pm 08/10/2023', 329842, 0, NULL, NULL, NULL),
(24, 2, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '12:25:33am 09/10/2023', 12, 0, NULL, NULL, NULL),
(25, 2, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '12:27:14am 09/10/2023', 12, 0, NULL, NULL, NULL),
(26, 2, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '12:30:12am 09/10/2023', 1934993, 0, NULL, NULL, NULL),
(27, 2, 'Le Thanh Huyen', 'Hà Nội, Việt Nam', '0942873422', 'huyenlt@gmail.com', 0, '12:33:08am 09/10/2023', 1008519, 0, NULL, NULL, NULL),
(28, 0, '', '', '', '', 0, '12:53:22pm 10/10/2023', 12, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(3, 'Sản phẩm đẹp', 0, 7, '12:47:55pm 07/10/2023'),
(4, 'Sản phẩm tốt', 0, 7, '12:48:16pm 07/10/2023'),
(5, 'Đã dùng thử và thấy sản phẩm chất ổn', 1, 8, '12:49:04pm 07/10/2023'),
(6, 'Sản phẩm đẹp', 0, 7, '12:57:55pm 07/10/2023'),
(7, 'Sản phẩm tốt', 0, 4, '03:41:00pm 07/10/2023'),
(8, 'Sản phẩm tốt', 0, 5, '12:13:05pm 10/10/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 1),
(2, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 1),
(3, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 1),
(4, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 2),
(5, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 2),
(6, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 2),
(7, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 3),
(8, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 3),
(9, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 3),
(10, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 4),
(11, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 4),
(12, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 4),
(13, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 5),
(14, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 5),
(15, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 5),
(16, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 6),
(17, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 6),
(18, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 6),
(19, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 7),
(20, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 7),
(21, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 7),
(22, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 8),
(23, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 8),
(24, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 8),
(25, 1, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 8),
(26, 1, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 8),
(27, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 9),
(28, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 9),
(29, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 9),
(30, 1, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 9),
(31, 1, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 9),
(32, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 10),
(33, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 10),
(34, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 10),
(35, 1, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 10),
(36, 1, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 10),
(37, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 11),
(38, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 11),
(39, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 11),
(40, 1, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 11),
(41, 1, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 11),
(42, 1, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 12),
(43, 1, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 12),
(44, 1, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 12),
(45, 1, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 12),
(46, 1, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 12),
(47, 2, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 13),
(48, 2, 12, '4550512531739_400.png', 'Bánh trôi nước', 0, 1, 0, 13),
(49, 2, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 14),
(50, 2, 12, '4550512531739_400.png', 'Bánh trôi nước', 0, 1, 0, 14),
(51, 2, 8, 'asm4.png', 'Adidas', 398439, 1, 398439, 14),
(52, 2, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 14),
(53, 2, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 14),
(54, 2, 8, 'asm4.png', 'Adidas', 398439, 1, 398439, 15),
(55, 2, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 15),
(56, 2, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 15),
(57, 2, 4, 't_m_12.png', 'Bánh tráng', 1934981, 1, 1934981, 15),
(58, 2, 8, 'asm4.png', 'Adidas', 398439, 1, 398439, 16),
(59, 2, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 16),
(60, 2, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 16),
(61, 2, 4, 't_m_12.png', 'Bánh tráng', 1934981, 1, 1934981, 16),
(62, 2, 8, 'asm4.png', 'Adidas', 398439, 1, 398439, 17),
(63, 2, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 17),
(64, 2, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 17),
(65, 2, 4, 't_m_12.png', 'Bánh tráng', 1934981, 1, 1934981, 17),
(66, 2, 8, 'asm4.png', 'Adidas', 398439, 1, 398439, 18),
(67, 2, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 18),
(68, 2, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 18),
(69, 2, 4, 't_m_12.png', 'Bánh tráng', 1934981, 1, 1934981, 18),
(70, 2, 8, 'asm4.png', 'Adidas', 398439, 1, 398439, 19),
(71, 2, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 19),
(72, 2, 11, 'item_47_01.png', 'Bánh cá', 2342873, 1, 2342873, 19),
(73, 2, 4, 't_m_12.png', 'Bánh tráng', 1934981, 1, 1934981, 19),
(74, 2, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 20),
(75, 2, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 21),
(76, 2, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 22),
(77, 2, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 23),
(78, 2, 12, '4550512531739_400.png', 'Bánh trôi nước', 0, 1, 0, 24),
(79, 2, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 24),
(80, 2, 12, '4550512531739_400.png', 'Bánh trôi nước', 0, 1, 0, 25),
(81, 2, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 25),
(82, 2, 10, '4550512968177_400.png', 'Áo thun', 12, 1, 12, 26),
(83, 2, 4, 't_m_12.png', 'Bánh tráng', 1934981, 1, 1934981, 26),
(84, 2, 5, '4550512299592_1260.png', 'Bánh bao chay', 29999, 1, 29999, 27),
(85, 2, 6, 'qs1.3.png', 'Quần kaki', 250239, 1, 250239, 27),
(86, 2, 8, 'asm4.png', 'Adidas', 398439, 1, 398439, 27),
(87, 2, 7, '4550512299417_400.png', 'Bánh mỳ', 329842, 1, 329842, 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(6, 'Áo sơ mi'),
(7, 'Áo khoác'),
(8, 'Quần âu'),
(10, 'Áo thun'),
(13, 'Áo polo'),
(15, 'Quần Tây'),
(16, 'Áo len'),
(17, 'Áo vest');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(4, 'Áo polo nam tay ngắn', 1934981.00, 'asm1.png', 'Là một thiết kế mới lạ, đầy phá cách của chiếc áo polo truyền thống.', 0, 13),
(5, 'Áo khoác tay dài khóa kéo', 29999.00, '4550512299592_1260.png', 'Chất liệu thoáng mát', 20, 7),
(6, 'Quần vải nam Texture', 250239.00, 'qs1.3.png', 'Quần vải nam kết hợp áo sơ mi tạo sự chỉnh chu.', 0, 8),
(7, 'Áo khoác tay dài', 329842.00, '4550512299417_400.png', 'Tông màu trầm lắng', 0, 7),
(8, 'Áo sơ mi vải coffee', 398439.00, 'asm4.png', 'Thiết kế bắt kịp xu hướng', 0, 6),
(10, 'Áo thun cổ tròn', 12.45, '4550512968177_400.png', 'Áo thun giá rẻ', 5, 10),
(11, 'Áo thun nam tay ngắn', 2342873.00, 'item_47_01.png', 'Thiết kế bắt mắt', 0, 10),
(12, 'Áo khoác tay dài nam', 2312322.23, '4550512299592_1260.png', 'Thon gọn nhẹ nhàng', 0, 7),
(24, 'Áo thun tay ngắn', 123481.00, '4550512968061_400.png', 'Áo thun', 0, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'Ngo Ngoc Luat', '123456', 'luatnn@gmail.com', 'Hà Nội, Việt Nam', '0832374213', 1),
(2, 'Ngyen Van Nam', '123456', 'namnv@gmail.com', 'Hà Nội, Việt Nam', '0942873422', 0),
(3, 'Nguyen Van Nam', '123456', 'namnv@gmail.com', 'Hà Nội, Việt Nam', '0982351313', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_cart_taikhoan` (`iduser`),
  ADD KEY `lk_cart_sanpham` (`idpro`),
  ADD KEY `lk_cart_bill` (`idbill`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `lk_cart_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `lk_cart_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

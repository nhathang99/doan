-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2019 lúc 02:28 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `moccat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cusID` bigint(20) UNSIGNED DEFAULT NULL,
  `total` decimal(13,5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetail`
--

CREATE TABLE `billdetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productID` bigint(20) UNSIGNED DEFAULT NULL,
  `quality` int(11) NOT NULL,
  `billID` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CategoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `CategoryName`, `created_at`, `updated_at`) VALUES
(1, 'Áo Nữ', NULL, NULL),
(2, 'Váy', NULL, NULL),
(3, 'Đầm', NULL, NULL),
(4, 'Quần', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `com_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productID` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `com_name`, `com_content`, `productID`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn văn Anh', 'Sản phẩm này còn không bạn', NULL, NULL, NULL),
(2, 'Nguyễn văn Anh', 'Sản phẩm này còn không bạn', NULL, NULL, NULL),
(3, 'Nguyễn văn Anh', 'Sản phẩm này còn không bạn', NULL, NULL, NULL),
(4, 'Nguyễn vân', 'Bao nhiêu size là dùng đc ạ', NULL, NULL, NULL),
(5, 'Nguyễn văn Anh', 'AAAAA', NULL, NULL, NULL),
(6, 'Nguyễn văn Anh', 'aaa', NULL, NULL, NULL),
(7, 'Nguyễn văn Anh', 'aaa', NULL, NULL, NULL),
(8, 'Nguyễn văn Anh', 'aaa', NULL, NULL, NULL),
(9, 'Nguyễn văn Anh', 'aaa', NULL, NULL, NULL),
(10, 'Nguyễn văn Anh', 'Sản phẩm còn không ạ', NULL, NULL, NULL),
(11, 'ddd', 'asdf', 97, NULL, NULL),
(12, 'ddd', 'asdf', 97, NULL, NULL),
(13, 'ddd', 'asdf', 97, NULL, NULL),
(14, 'cuong', 'hay', 97, NULL, NULL),
(15, 'hau', 'nhu cc', 97, NULL, NULL),
(16, 'duc', 'haha', 97, NULL, NULL),
(17, 'cuong', 'asdf', 96, NULL, NULL),
(18, 'duc', 'hay', 96, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_19_035522_create_category_table', 1),
(5, '2019_11_19_040419_create_product_table', 1),
(6, '2019_11_19_041510_create_bill_table', 1),
(7, '2019_11_19_042417_create_billdetail_table', 1),
(8, '2019_12_02_100609_create_comment_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryID` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `CategoryID`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(89, 'Chân váy', 1, 150000.00, 'Tủ đồ thời trang của nàng sẽ chưa thể hoàn thiện nếu thiếu những món đồ cơ bản như áo sweater, áo khoác, quần jeans, và đặc biệt là một chiếc váy Daisy Skirt.\r\n\r\nChân váy dáng mini, phom chữ A với phần bèo nhún ở gấu váy tạo điểm nhấn nhá đầy nữ tính và không kém phần điệu đà. Thêm vào đó, họa tiết hoa càng khiến mẫu váy thêm phần xinh xắn, đáng yêu khiến các nàng không thể chối từ.', 'uploadpng\\php2B6E.tmp', NULL, NULL),
(96, 'Áo cardigan', 1, 300000.00, 'Chất liệu len mang đến sự nhẹ nhàng, thoáng mát.\r\nThiết kế khoác nhẹ, dáng dài, tay dài.\r\nKết hợp được với nhiều sản phẩm khác', 'upload\\1862479_1_L.png', NULL, NULL),
(97, 'Áo hoodie', 1, 300000.00, 'Len dệt cơ bản trên áo đơn giản, thanh lịch\r\nChất liệu len mềm mịn\r\nThiết kế cổ tròn cơ bản nhưng không kém phấn điệu đà\r\nThích hợp diện đi làm, đi học, đi chơi', 'upload\\download.jpg', NULL, NULL),
(98, 'Đầm Vitage', 3, 499999.00, 'Thiết kế dáng đầm xòe maxi in họa tiết da beo, không tay cổ chữ v đắp chéo, chất liệu không co giãn nhưng vẫn tạo được cảm giác thoải mái.\r\nĐầm dài ngang bắp chân rất dễ mặc và tôn dáng, đầm này thiết kế che bụng rất tinh tế. Chất liệu vải có lót vừa phải không mỏng cũng không dày nên phù hợp với thời tiết của việt nam. Đầm được thiết kế dây kéo sau lưng mặc vào rất dễ. Đầm được may sắc xảo, sắc nén rất đẹp, đẹp từng đường nét.', 'upload\\shop-ban-dam-vintage-tphcm-1.jpg', NULL, NULL),
(99, 'Đầm Retro', 3, 315000.00, 'Đầm retro phong cách dân tộc - boho cổ V tay lá sen siêu xinh. Chất liệu polyester', 'upload\\dam-retro-phong-cach-dan-toc-boho-co-v-tay-la-sen-sieu-xinh-1m4G3-LworAR_simg_d0daf0_800x1200_max.jpg', NULL, NULL),
(100, 'Váy Komi', 2, 700000.00, 'Dù là người yêu thích sự hiện đại hay truyền thống thì bạn cũng nên chạm thử với mẫu đầm đầy sức thôi miên bên mình giới thiệu đến bạn đây. Với khả năng yêu chiều hết mực mọi vóc dáng của các nàng thì các item thần thánh nhà mình chắc chắn khiến bạn tự tin ngay cái nhìn đầu tiên.', 'upload\\72162283_3759417214152593_2035317832580857856_o.jpg', NULL, NULL),
(101, 'cuong', 4, 300000.00, 'mo ta', 'upload\\ava.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brithdate` datetime NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `brithdate`, `isAdmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'moccat', 'gntS5dv1ma@gmail.com', '9999-12-31 23:59:59', 1, NULL, '$2y$10$OG3.4vPXzBIye.faO3outO/Knyx22zHUhi5iOt9/v4jucSQPNlJ8m', NULL, '2019-12-14 00:20:11', '2019-12-14 00:20:11'),
(2, 'huycuong', 't5e26povy2@gmail.com', '1999-12-20 23:59:59', 1, NULL, '$2y$10$rJdHDlLSNOYfedhomEhcqeDbPCvfPZ2ZeCZB64/WWnB2/IC2HHVqq', NULL, '2019-12-14 00:20:11', '2019-12-14 00:20:11'),
(3, 'minhduc', 'pd4zjZAF2X@gmail.com', '1999-02-21 23:59:59', 1, NULL, '$2y$10$X7E3DxHq3kD.yuUkAJ8/6OctTG7q7ApvvquTffV24M1vzfW0x2IVu', NULL, '2019-12-14 00:20:11', '2019-12-14 00:20:11'),
(4, 'duchau', '7JdlnaLHc2@gmail.com', '1997-12-31 23:59:59', 1, NULL, '$2y$10$MJE1jza5lPrFKK35yyzXTOciD9zctBwRxo4OVixPns/OJ6Lg12fO6', NULL, '2019-12-14 00:20:11', '2019-12-14 00:20:11'),
(5, 'asd', 'LOcv6dQbNX@gmail.com', '1997-12-31 23:59:59', 0, NULL, '$2y$10$iycZXWGcrm2F5.sXCrnBM.vD3wNKn.mmL6lgc7914Vv7FIZ2e83ua', NULL, '2019-12-14 00:20:11', '2019-12-14 00:20:11');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

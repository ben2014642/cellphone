-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2022 lúc 12:03 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cellphone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cp_category`
--

CREATE TABLE `cp_category` (
  `id_category` int(11) NOT NULL,
  `title_category` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `total_view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cp_category`
--

INSERT INTO `cp_category` (`id_category`, `title_category`, `status`, `created_at`, `total_view`) VALUES
(1, 'Điện thoại', 1, '2021-12-23 16:44:07', 100),
(3, 'Laptop và PC', 1, '2021-12-23 16:44:07', 123),
(7, 'Tai nghe', 1, '2021-12-24 16:42:15', 0),
(8, 'Đồng hồ', 1, '2021-12-24 19:41:00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cp_post`
--

CREATE TABLE `cp_post` (
  `id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cp_product`
--

CREATE TABLE `cp_product` (
  `id` int(11) NOT NULL,
  `title_product` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `price` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `price_old` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `des` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `sale` int(11) DEFAULT 0,
  `total_review` int(11) DEFAULT 0,
  `img` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `id_category` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cp_product`
--

INSERT INTO `cp_product` (`id`, `title_product`, `price`, `price_old`, `des`, `sale`, `total_review`, `img`, `id_category`) VALUES
(1, 'iPhone 13 Pro Max 256GB I Chính hãng VN/A', '34.300.000', '37.990.000', 'Giảm 1 triệu khi thanh toán qua thẻ tín dụng BIDV, Standard Charter (số lượng có hạn)', 22, 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/220x175/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone_13-_pro-5_4_1.jpg', 1),
(2, 'Xiaomi Mi 11 Lite 5G', '8.290.000', '8.590.000', 'Săn thưởng cùng \"Đu đưa deal đi\" - Cơ hội trúng bộ quà hơn 650 triệu đồng', 35, 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/220x175/9df78eab33525d08d6e5fb8d27136e95/x/i/xiaomi-mi-11-lite-5g-2_10.png', 1),
(3, 'Samsung Galaxy Z Flip3 5G', '23.990.000', '25.990.000', 'Giảm đến 4 triệu khi thu cũ lên đời (Áp dụng trên giá niêm yết) và 4km khác', 11, 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/220x175/9df78eab33525d08d6e5fb8d27136e95/8/0/800x800_flip_3_cream.png', 1),
(4, 'Samsung Galaxy Note 20 Ultra 5G', '21.500.000', '25.500.000', 'Mua Office Home & Student 2019 kèm Macbook chỉ còn 2,000,000', 16, 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/220x175/9df78eab33525d08d6e5fb8d27136e95/y/e/yellow_final_2.jpg', 1),
(5, 'Samsung Galaxy Z Fold3 5G', '40.490.000', '41.490.000', 'Giảm đến 4 triệu khi thu cũ lên đời (Áp dụng trên giá niêm yết) và 5km', 0, 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/220x175/9df78eab33525d08d6e5fb8d27136e95/s/m/sm-f926_zfold3_5g_openback_phantomsilver_210611.jpg', 1),
(6, 'Samsung Galaxy S21 Ultra 5G', '21.200.000', '23.200.000', 'Tặng ngay bộ mã ưu đãi trị giá lên đến 5 triệu và 1KM', 65, 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/220x175/9df78eab33525d08d6e5fb8d27136e95/s/a/samsung-galaxy-s21-ultra-1_1.jpg', 1),
(7, 'OPPO Reno6 Z 5G', '9.490.000', '10.490.000', 'Tặng tai nghe Bluetooth Oppo Enco Buds W12 Trắng và 1KM', 62, 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/small_image/9df78eab33525d08d6e5fb8d27136e95/o/p/oppo_reno6.jpg', 1),
(9, 'OPPO Reno6 Z 5G', '9.490.000', '10.490.000', 'Tặng tai nghe Bluetooth Oppo Enco Buds W12 Trắng và 1KM', 62, 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/small_image/9df78eab33525d08d6e5fb8d27136e95/o/p/oppo_reno6.jpg', 1),
(10, 'OPPO Reno6 Z 5G', '9.490.000', '10.490.000', 'Tặng tai nghe Bluetooth Oppo Enco Buds W12 Trắng và 1KM', 62, 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/small_image/9df78eab33525d08d6e5fb8d27136e95/o/p/oppo_reno6.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cp_property_values`
--

CREATE TABLE `cp_property_values` (
  `id` int(11) NOT NULL,
  `key_property` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `value` longtext COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cp_property_values`
--

INSERT INTO `cp_property_values` (`id`, `key_property`, `value`, `product_id`) VALUES
(1, 'tskt', '[{\"name\":\"Kích thước màn hình\",\"value\":\"6.22222 inches\"},{\"name\":\"Công nghệ màn hình\",\"value\":\"IPS LCD\"},{\"name\":\"Camera sau\",\"value\":\"Camera kép 12MP: - Camera góc rộng: ƒ/1.8 aperture - Camera siêu rộng: ƒ/2.4 aperture\"},{\"name\":\"Camera trước\",\"value\":\"12 MP, ƒ/2.2 aperture\"},{\"name\":\"Chipset\",\"value\":\"A13 Bionic\"},{\"name\":\"Dung lượng RAM\",\"value\":\"4 GB\"},{\"name\":\"Bộ nhớ trong\",\"value\":\"64 GB\"},{\"name\":\"Pin\",\"value\":\"3110 mAh\"},{\"name\":\"Thẻ SIM\",\"value\":\"Nano-SIM + eSIM\"},{\"name\":\"Hệ điều hành\",\"value\":\"iOS 13 hoặc cao hơn (Tùy vào phiên bản phát hành)\"},{\"name\":\"Độ phân giải màn hình\",\"value\":\"1792 x 828 pixel\"},{\"name\":\"Tính năng màn hình\",\"value\":\"True-tone\"},{\"name\":\"Loại CPU\",\"value\":\"Hexa-core\"},{\"name\":\"GPU\",\"value\":\"Apple GPU\"},{\"name\":\"Quay video\",\"value\":\"Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps\"},{\"name\":\"Quay video trước\",\"value\":\"4K@24/30/60fps, 1080p@30/60/120fps, gyro-EIS\"},{\"name\":\"Kích thước\",\"value\":\"150.9mm - 75.7mm - 8.3mm\"},{\"name\":\"Trọng lượng\",\"value\":\"194 g\"},{\"name\":\"Chất liệu mặt lưng\",\"value\":\"Kính\"},{\"name\":\"Chất liệu khung viền\",\"value\":\"Kim loại\"},{\"name\":\"Công nghệ sạc\",\"value\":\"Sạc nhanh 18WPower Delivery 2.0\"},{\"name\":\"Cổng sạc\",\"value\":\"Lightning\"},{\"name\":\"Hồng ngoại\",\"value\":\"Không\"},{\"name\":\"Jack tai nghe 3.5\",\"value\":\"Không\"},{\"name\":\"Cảm biến vân tay\",\"value\":\"Không\"},{\"name\":\"Các loại cảm biến\",\"value\":\"Cảm biến ánh sáng, Cảm biến áp kế, Cảm biến gia tốc, Cảm biến tiệm cận, Con quay hồi chuyển, La bàn\"},{\"name\":\"Công nghệ NFC\",\"value\":\"Có\"},{\"name\":\"Khe cắm thẻ nhớ\",\"value\":\"Không\"},{\"name\":\"Wi-Fi\",\"value\":\"802.11ax Wi‑Fi 6 with 2x2 MIMO\"},{\"name\":\"Bluetooth\",\"value\":\"5.0\"},{\"name\":\"GPS\",\"value\":\"GPS/GNSS\"},{\"name\":\"Kiểu màn hình\",\"value\":\"Tai thỏ\"},{\"name\":\"Tính năng camera\",\"value\":\"Chụp góc rộng, Chụp xóa phông, Chụp Zoom xa, Chống rung, Quay video 4K\"},{\"name\":\"Tính năng đặc biệt\",\"value\":\"Sạc không dây\"}]', 1),
(2, 'tskt', '{\n\"tskt\" : [\n{  \n    \"name\": \"Kích thước màn hình\",\n    \"value\": \"6.1 inches\"\n    },\n    {\n    \"name\": \"Công nghệ màn hình\",\n    \"value\": \"IPS LCD\"\n    },\n    {\n    \"name\": \"Camera sau\",\n    \"value\": \"Camera kép 12MP: - Camera góc rộng: ƒ/1.8 aperture - Camera siêu rộng: ƒ/2.4 aperture\"\n    },\n    {\n    \"name\": \"Camera trước\",\n    \"value\": \"12 MP, ƒ/2.2 aperture\"\n    },\n    {\n    \"name\": \"Chipset\",\n    \"value\": \"A13 Bionic\"\n    },\n    {\n    \"name\": \"Dung lượng RAM\",\n    \"value\": \"4 GB\"\n    },\n    {\n    \"name\": \"Bộ nhớ trong\",\n    \"value\": \"64 GB\"\n    },\n    {\n    \"name\": \"Pin\",\n    \"value\": \"3110 mAh\"\n    },\n    {\n    \"name\": \"Thẻ SIM\",\n    \"value\": \"Nano-SIM + eSIM\"\n    },\n    {\n    \"name\": \"Hệ điều hành\",\n    \"value\": \"iOS 13 hoặc cao hơn (Tùy vào phiên bản phát hành)\"\n    },\n    {\n    \"name\": \"Độ phân giải màn hình\",\n    \"value\": \"1792 x 828 pixel\"\n    },\n    {\n    \"name\": \"Tính năng màn hình\",\n    \"value\": \"True-tone\"\n    },\n    {\n    \"name\": \"Loại CPU\",\n    \"value\": \"Hexa-core\"\n    },\n    {\n    \"name\": \"GPU\",\n    \"value\": \"Apple GPU\"\n    },\n    {\n    \"name\": \"Quay video\",\n    \"value\": \"Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps\"\n    },\n    {\n    \"name\": \"Quay video trước\",\n    \"value\": \"4K@24/30/60fps, 1080p@30/60/120fps, gyro-EIS\"\n    },\n    {\n    \"name\": \"Kích thước\",\n    \"value\": \"150.9mm - 75.7mm - 8.3mm\"\n    },\n    {\n    \"name\": \"Trọng lượng\",\n    \"value\": \"194 g\"\n    },\n    {\n    \"name\": \"Chất liệu mặt lưng\",\n    \"value\": \"Kính\"\n    },\n    {\n    \"name\": \"Chất liệu khung viền\",\n    \"value\": \"Kim loại\"\n    },\n    {\n    \"name\": \"Công nghệ sạc\",\n    \"value\": \"Sạc nhanh 18WPower Delivery 2.0\"\n    },\n    {\n    \"name\": \"Cổng sạc\",\n    \"value\": \"Lightning\"\n    },\n    {\n    \"name\": \"Hồng ngoại\",\n    \"value\": \"Không\"\n    },\n    {\n    \"name\": \"Jack tai nghe 3.5\",\n    \"value\": \"Không\"\n    },\n    {\n    \"name\": \"Cảm biến vân tay\",\n    \"value\": \"Không\"\n    },\n    {\n    \"name\": \"Các loại cảm biến\",\n    \"value\": \"Cảm biến ánh sáng, Cảm biến áp kế, Cảm biến gia tốc, Cảm biến tiệm cận, Con quay hồi chuyển, La bàn\"\n    },\n    {\n    \"name\": \"Công nghệ NFC\",\n    \"value\": \"Có\"\n    },\n    {\n    \"name\": \"Khe cắm thẻ nhớ\",\n    \"value\": \"Không\"\n    },\n    {\n    \"name\": \"Wi-Fi\",\n    \"value\": \"802.11ax Wi‑Fi 6 with 2x2 MIMO\"\n    },\n    {\n    \"name\": \"Bluetooth\",\n    \"value\": \"5.0\"\n    },\n    {\n    \"name\": \"GPS\",\n    \"value\": \"GPS/GNSS\"\n    },\n    {\n    \"name\": \"Kiểu màn hình\",\n    \"value\": \"Tai thỏ\"\n    },\n    {\n    \"name\": \"Tính năng camera\",\n    \"value\": \"Chụp góc rộng, Chụp xóa phông, Chụp Zoom xa, Chống rung, Quay video 4K\"\n    },\n    {\n    \"name\": \"Tính năng đặc biệt\",\n    \"value\": \"Sạc không dây\"\n    }\n]\n}', 2),
(3, 'images', '[\"https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/layer_20.jpg\",\"https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/_/0/_0005_layer_6.jpg\",\"https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/_/0/_0001_layer_2.jpg\",\"https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/layer_19.jpg\"]', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cp_category`
--
ALTER TABLE `cp_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `cp_post`
--
ALTER TABLE `cp_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cp_product`
--
ALTER TABLE `cp_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cp_property_values`
--
ALTER TABLE `cp_property_values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cp_category`
--
ALTER TABLE `cp_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cp_post`
--
ALTER TABLE `cp_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cp_product`
--
ALTER TABLE `cp_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `cp_property_values`
--
ALTER TABLE `cp_property_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

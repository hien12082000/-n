-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 07:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shophouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `userorder` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `noidung` text NOT NULL,
  `dateline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`id`, `userorder`, `email`, `noidung`, `dateline`) VALUES
(6, 'Hoàng Ngọc Hiền ', 'ngochien@hubt.com', 'Sản phẩm tốt', '2022-04-24 19:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `postproduct`
--

CREATE TABLE `postproduct` (
  `id` int(10) UNSIGNED NOT NULL,
  `titleproduct` varchar(550) NOT NULL,
  `priceproduct` varchar(250) NOT NULL,
  `thuonghieu` varchar(550) NOT NULL,
  `tinhtrang` varchar(550) NOT NULL,
  `avata` varchar(550) NOT NULL,
  `moto` text NOT NULL,
  `dateline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postproduct`
--

INSERT INTO `postproduct` (`id`, `titleproduct`, `priceproduct`, `thuonghieu`, `tinhtrang`, `avata`, `moto`, `dateline`) VALUES
(4, 'Bàn làm việc BV007', '7200000', 'Việt Nam', 'Còn hàng', '7.jpg', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Ph&acirc;n loại</td>\r\n			<td>B&agrave;n l&agrave;m việc, B&agrave;n học sinh, B&agrave;n viết</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc</td>\r\n			<td>M&agrave;u đen, M&agrave;u trắng, M&agrave;u v&agrave;ng sồi, M&agrave;u c&aacute;nh gi&aacute;n, M&agrave;u &oacute;c ch&oacute;, M&agrave;u x&aacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>T&ugrave;y chỉnh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>MDF l&otilde;i xanh Th&aacute;i Lan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại lưu trữ</td>\r\n			<td>Tủ, Kệ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đặc trưng</td>\r\n			<td>T&ugrave;y chỉnh k&iacute;ch thước</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu d&aacute;ng sản phẩm</td>\r\n			<td>Hiện đại</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu an to&agrave;n</td>\r\n			<td>&Iacute;t h&oacute;a chất</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2019-06-12 21:57:34'),
(5, 'Kệ sách ks106', '6500000', 'Việt Nam', 'Còn hàng', '6.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Ph&acirc;n loại</td>\r\n			<td>Ti&ecirc;u chuẩn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc</td>\r\n			<td>M&agrave;u đen, M&agrave;u trắng, M&agrave;u v&agrave;ng sồi, M&agrave;u c&aacute;nh gi&aacute;n, M&agrave;u &oacute;c ch&oacute;, M&agrave;u x&aacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>T&ugrave;y chỉnh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu d&aacute;ng sản phẩm</td>\r\n			<td>Hiện đại</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>MDF l&otilde;i xanh Th&aacute;i Lan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số lượng</td>\r\n			<td>Kệ đơn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hậu</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đặc trưng</td>\r\n			<td>Lắp r&aacute;p</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hướng</td>\r\n			<td>Dọc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu an to&agrave;n</td>\r\n			<td>&Iacute;t h&oacute;a chất</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2019-06-12 21:58:06'),
(8, 'Bàn làm việc blv089', '620000', 'Việt Nam', 'Còn hàng', '4.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Ph&acirc;n loại</td>\r\n			<td>B&agrave;n l&agrave;m việc, B&agrave;n học sinh, B&agrave;n m&aacute;y t&iacute;nh, B&agrave;n viết</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc</td>\r\n			<td>M&agrave;u đen, M&agrave;u trắng, M&agrave;u v&agrave;ng sồi, M&agrave;u c&aacute;nh gi&aacute;n, M&agrave;u &oacute;c ch&oacute;, M&agrave;u x&aacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>T&ugrave;y chỉnh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>MDF l&otilde;i xanh Th&aacute;i Lan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại lưu trữ</td>\r\n			<td>Tủ, Kệ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đặc trưng</td>\r\n			<td>T&ugrave;y chỉnh k&iacute;ch thước</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu d&aacute;ng sản phẩm</td>\r\n			<td>Hiện đại</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu an to&agrave;n</td>\r\n			<td>&Iacute;t h&oacute;a chất</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2019-06-12 22:00:35'),
(9, 'Kệ sách ks018', '3700000', 'Việt Nam', 'Còn hàng', '3.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Ph&acirc;n loại</td>\r\n			<td>Ti&ecirc;u chuẩn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc</td>\r\n			<td>M&agrave;u đen, M&agrave;u trắng, M&agrave;u v&agrave;ng sồi, M&agrave;u c&aacute;nh gi&aacute;n, M&agrave;u &oacute;c ch&oacute;, M&agrave;u x&aacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>T&ugrave;y chỉnh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu d&aacute;ng sản phẩm</td>\r\n			<td>Hiện đại</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>MDF l&otilde;i xanh Th&aacute;i Lan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số lượng</td>\r\n			<td>Kệ đơn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hậu</td>\r\n			<td>Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đặc trưng</td>\r\n			<td>Lắp r&aacute;p</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hướng</td>\r\n			<td>Dọc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu an to&agrave;n</td>\r\n			<td>&Iacute;t h&oacute;a chất</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2019-06-12 22:01:14'),
(10, 'Bàn làm việc blv039', '680000', 'Việt Nam', 'Còn hàng', '2.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Ph&acirc;n loại</td>\r\n			<td>B&agrave;n l&agrave;m việc, B&agrave;n học sinh, B&agrave;n viết</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc</td>\r\n			<td>M&agrave;u đen, M&agrave;u trắng, M&agrave;u v&agrave;ng sồi, M&agrave;u c&aacute;nh gi&aacute;n, M&agrave;u &oacute;c ch&oacute;, M&agrave;u x&aacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>T&ugrave;y chỉnh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>MDF l&otilde;i xanh Th&aacute;i Lan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại lưu trữ</td>\r\n			<td>Tủ, Kệ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đặc trưng</td>\r\n			<td>T&ugrave;y chỉnh k&iacute;ch thước</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu d&aacute;ng sản phẩm</td>\r\n			<td>Hiện đại</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu an to&agrave;n</td>\r\n			<td>&Iacute;t h&oacute;a chất</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2019-06-12 22:01:47'),
(11, 'Bàn máy tính đơn giản AR009', '780000', 'Việt Nam', 'Còn hàng', '1.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Ph&acirc;n loại</td>\r\n			<td>B&agrave;n l&agrave;m việc, B&agrave;n học sinh, B&agrave;n viết</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc</td>\r\n			<td>M&agrave;u đen, M&agrave;u trắng, M&agrave;u v&agrave;ng sồi, M&agrave;u c&aacute;nh gi&aacute;n, M&agrave;u &oacute;c ch&oacute;, M&agrave;u x&aacute;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>T&ugrave;y chỉnh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>MDF l&otilde;i xanh Th&aacute;i Lan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại lưu trữ</td>\r\n			<td>Tủ, Kệ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đặc trưng</td>\r\n			<td>T&ugrave;y chỉnh k&iacute;ch thước</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu d&aacute;ng sản phẩm</td>\r\n			<td>Hiện đại</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu an to&agrave;n</td>\r\n			<td>&Iacute;t h&oacute;a chất</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2019-06-12 22:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE `thongbao` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(550) NOT NULL,
  `dateline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thongbao`
--

INSERT INTO `thongbao` (`id`, `email`, `dateline`) VALUES
(6, 'ngochien@hubt.com', '2022-04-24 19:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `id` int(10) UNSIGNED NOT NULL,
  `titleproduct` varchar(550) NOT NULL,
  `userorder` varchar(550) NOT NULL,
  `phonenumber` varchar(550) NOT NULL,
  `email` varchar(550) NOT NULL,
  `diachi` varchar(550) NOT NULL,
  `soluong` varchar(550) NOT NULL,
  `loinhan` text NOT NULL,
  `dateline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`id`, `titleproduct`, `userorder`, `phonenumber`, `email`, `diachi`, `soluong`, `loinhan`, `dateline`) VALUES
(8, 'Bàn làm việc blv039', 'Hoàng Ngọc Hiền', '0123456789', 'ngochien@hubt.com', 'HUBT', '1', 'Mua hàng', '2022-04-24 19:42:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postproduct`
--
ALTER TABLE `postproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `postproduct`
--
ALTER TABLE `postproduct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

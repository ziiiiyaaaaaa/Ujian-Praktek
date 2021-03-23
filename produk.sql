-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 12:30 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian_praktek`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_price` varchar(20) DEFAULT NULL,
  `product_image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Black Forest', '260000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/GRAB_FOOD.jpg'),
(2, 'Cupcake', '22000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/cupcake-web-choco.jpg\r\n'),
(3, 'Delibox', '90000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/kosongan-website.jpg'),
(4, 'Milky O cake', '275000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/135.jpg'),
(5, 'Popcorn Choco', '28000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/DCDC36011.png'),
(6, 'Choco Dip Stick', '14000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/website_dc_32.jpg'),
(7, 'Nut Nougat', '9000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/website_dc_501.jpg'),
(8, 'Iced Chocolate', '18000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/website_dc_CHOCO_QUICK.jpg'),
(9, 'Fruit Shortcake', '243000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/17.jpg'),
(10, 'Chocoball', '7000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/web_Size.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

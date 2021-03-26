-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 04:59 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(20, 'syakila', 'apa', 'syakila'),
(21, 'user', 'sugengdaluya', 'user'),
(22, 'ziyaaa', 'semangatya', 'ziyaaa'),
(23, 'user', 'sugengdaluya', 'user'),
(25, 'Asror', '12345', 'Asror'),
(27, 'apa', 'iya', 'apa');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_price` varchar(20) DEFAULT NULL,
  `product_image` varchar(300) DEFAULT NULL,
  `decs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `product_name`, `product_price`, `product_image`, `decs`) VALUES
(1, 'Black Forest', '260000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/GRAB_FOOD.jpg', 'Chocolate Cake layered \r\nwith dark sweet \r\ncherry syrup and\r\nfilling, combined with \r\nsoft whipped cream \r\nand covered by \r\ngreeted chocolate.'),
(2, 'Cupcake', '22000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/cupcake-web-choco.jpg\r\n', 'Creamy chocolate and vanilla mousse cupcake. Let the happy tounge dancing.\r\n\r\n'),
(3, 'Delibox', '90000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/kosongan-website.jpg', 'Size : 10 x 10 cm'),
(4, 'Milky O cake', '275000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/135.jpg', 'We call it \"Kenikmatan yang Hakiki\" because of it perfection blend from Neapolitan Mousse Cream sandwiched by Vanilla Sponge Cake..'),
(5, 'Popcorn Choco', '28000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/DCDC36011.png', 'Popcorn coated with dark chocolate couverture 70%'),
(6, 'Choco Dip Stick', '14000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/website_dc_32.jpg', 'Boil 200ml of Milk -full cream, low-fat or skim.\r\nPour it into a cup,\r\nStir in your Chocolate Dip Stick for your daily cocoa fix!'),
(7, 'Nut Nougat', '9000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/website_dc_501.jpg', 'Perfect combination of hazelnut cream, cashew nut and dark chocolate'),
(8, 'Iced Chocolate', '18000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/website_dc_CHOCO_QUICK.jpg', ' Our signature iced chocolate \r\n\r\n'),
(9, 'Fruit Shortcake', '243000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/17.jpg', 'The freshness of our finest selected fruits perched on top of the vanilla sponge cake and studded with the scrumptious white chocolate. Definitely fruitylicious, and totally impossible to resist !\r\n\r\n'),
(10, 'Chocoball', '7000', 'https://dc.dapurcokelat.com/assets/uploads/products/thumbs/800x800/web_Size.jpg', 'Tea times are calling, now pick your Chocoball and pick your favorite one.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

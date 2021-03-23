-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 09:56 AM
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
-- Database: `ujipraktek`
--

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
(1, 'Wardah Eye Shadow EyeXpert Passionate', '38000', 'https://blogunik.com/wp-content/uploads/2020/03/Produk-Kosmetik-Wardah-Lengkap-Dengan-Harganya-Eye-Shadow-EyeXpert-Passionate.jpg', 'Wardah Eye Shadow EyeXpert Passionate adalah salah satu produk kosmetik Wardah, dimana produk ini akan memberikan warna pada bagian kelopak mata. Eye Shadow ini dikombinasikan dalam tiga warna sempurna dan terbuat dari Microcoated Particle yang nyaman dan lembut saat digunakan. Produk satu ini tersedia dalam 14 kombinasi warna yang bisa kamu pilih sesuai dengan keinginan.'),
(2, 'Wardah Eyeshadow EyeXpert Classic', '38000', 'https://blogunik.com/wp-content/uploads/2020/03/Produk-Kosmetik-Wardah-Lengkap-Dengan-Harganya-Eyeshadow-EyeXpert-Classic.jpg', 'Wardah Eyeshadow EyeXpert Classic adalah salah satu varian eye shadow yang dikeluarkan oleh Wardah. Dimana produknya ini dikombinasikan dalam tiga warna sempurna untuk membantu mengekpresikan bentuk terbaik dari mata. Eye Shadow ini terbuat dari Microcoated Particle yang nyaman dan lembut. Wardah Eyeshadow EyeXpert Classic ini tersedia dalam 14 kombinasi warna yang bisa kamu pilih.'),
(3, 'Wardah Exclusive Eyeshadow Palette', '79600', 'https://blogunik.com/wp-content/uploads/2020/03/Produk-Kosmetik-Wardah-Lengkap-Dengan-Harganya-Exclusive-Eyeshadow-Palette.jpg', 'Produk eye shadow satu ini memiliki formula intense color, smooth silky texture & blendable dan long wearing. Sehingga membuat tampilan mata semakin memukau. Wardah Exclusive Eyeshadow Palette ini tersedia dalam 2 varian yaitu 01 Sunset Brown dan 02 Rose Glow.'),
(4, 'Wardah Eye and Lip Makeup Remover', '22000', 'https://cf.shopee.co.id/file/9353dd6f23474069f3d75a7a04a893d2', 'Produk satu ini khusus untuk membersihkan makeup mata seperti mascara, eyeliner dan eye shadow. Selain itu, pembersih ini juga mampu membersihkan lisptick. Produk ini mengandung Dual Action Formula dan One Wipe Cleansing Powder untuk membersihkan dengan cepat tanpa meninggalkan rasa berminyak. Produk ini juga memiliki formula alcohol free sehingga sangat aman digunakan.'),
(5, 'Wardah EyeXpert Perfect Curl Mascara', '52800', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyJEln4shxPXknpkI3_I_lgVmmVCf2ySy31Q&usqp=CAU', 'Wardah EyeXpert Perfect Curl Mascara adalah salah satu produk mascara Wardah dengan curl lock powder. Dimana mascara ini membuat bulu mata menjadi lebih tebal, panjang dan lentik sempurna. Produk ini juga disertai dengan Argan Oil untuk menutrisi bulu mata.'),
(6, 'Wardah EyeXpert the Volume Expert Mascara', '61200', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVBXoZVCjXwbphftLVSgiFySSRz9OcfHziyg&usqp=CAU', 'EyeXpert the Volume Expert Mascara adalah mascara Wardah dengan aplikasi Lash Precision Brush untuk bulu mata extra tebal, extra lentik yang menjangkau hingga ke sudut mata terdalam. Mascara ini mengandung intensified waterproof pigments untuk tatapan intens tanpa meninggalkan jejak kantong mata.'),
(7, 'Wardah Lightening Two Way Cake', '42000', 'https://blogunik.com/wp-content/uploads/2020/03/Produk-Kosmetik-Wardah-Lengkap-Dengan-Harganya-Lightening-Two-Way-Cake.jpg', 'Wardah Lightening Two Way Cake adalah bedak plus foundation yang hadir dengan Microbright Formula, UV Protection dan 12 jam longlasting formula. Produk ini juga memiliki sekitar 7 shades yang pas untuk kulitmu.'),
(8, 'Wardah Exclusive Flawless Cover Cushion', '138000', 'https://blogunik.com/wp-content/uploads/2020/03/Produk-Kosmetik-Wardah-Lengkap-Dengan-Harganya-Exclusive-Flawless-Cover-Cushion.jpg', 'Wardah Exclusive Flawless Cover Cushion adalah produk Wardah yang dapat menghasilkan natural grow dan full coverage finish yang tahan lama hingga 10 jam. Produk ini memiliki non comedogenic formula yang membuat kulit tampak cerah bercahaya. Selain itu, produk ini juga memiliki SPF 30 PA+++ yang dapat melindungi kulit dari paparan sinar matahari.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

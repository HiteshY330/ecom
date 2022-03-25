-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 11:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(1, 'Mobiles', 1),
(3, 'books', 1),
(6, 'fashion', 1),
(7, 'laptop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(6, 'root', 'admin@gmail.com', '2353532@gmail.c', 'bdb', '2021-10-14 01:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `status`, `meta_keyword`) VALUES
(5, 1, 'realme 8i (Space Purple, 128 GB)', 17999, 15999, 4, '219422097_8i-rmx3151-realme-original-imag6zhnbsuhcqny.jpeg', 'realme 8i (Space Purple, 128 GB)\r\n4.425,318 Ratings & 1,640 Reviews', '6 GB RAM | 128 GB ROM | Expandable Upto 256 GB\r\n16.76 cm (6.6 inch) Full HD+ Display\r\n50MP + 2MP + 2MP | 16MP Front Camera\r\n5000 mAh Battery\r\nMediaTek Helio G96 Processor\r\n1 Year Warranty for Mobile and 6 Months for Accessories', 'realme 8i (Space Purple, 128 GB)', '6 GB RAM | 128 GB ROM | Expandable Upto 256 GB\r\n16.76 cm (6.6 inch) Full HD+ Display\r\n50MP + 2MP + 2MP | 16MP Front Camera\r\n5000 mAh Battery\r\nMediaTek Helio G96 Processor', 1, 'realme 8i'),
(6, 1, 'MOTOROLA G60 (Dynamic Gray, 128 GB)', 17999, 14999, 8, '418506418_g60-panb0000in-panb0016in-panb0012in-panb0014in-motorola-original-imag2aq9v8hzetbn.jpeg', '6 GB RAM | 128 GB ROM\r\n17.22 cm (6.78 inch) Full HD+ Display\r\n108MP + 8MP + 2MP | 32MP Front Camera\r\n6000 mAh Battery\r\nQualcomm Snapdragon 732G Processor\r\n120Hz Refresh Rate\r\nStock Android Experience', 'The moto g60 enables you to capture spectacular selfies wherever you are, thanks to its 32 MP selfie camera, the Quad Pixel technology, and LED flash. Thanks to the smooth 17.2 cm (6.8) HDR10 Display, you can enjoy a lifelike experience while streaming content, gaming, and more. And, thanks to the powerful 6000 mAh battery, you can enjoy using your mobile phone for all that you need, without any low-battery interruptions for a long time.', 'MOTOROLA G60', 'MOTOROLA G60 (Dynamic Gray, 128 GB)  (6 GB RAM)', 1, 'MOTOROLA G60'),
(10, 1, 'APPLE iPhone 12 Mini (White, 64 GB)', 59900, 49999, 25, '525886376_apple-iphone-12-mini-dummyapplefsn-original-imafwgbfhfevaajh.jpeg', '64 GB ROM\r\n13.72 cm (5.4 inch) Super Retina XDR Display\r\n12MP + 12MP | 12MP Front Camera', 'A14 Bionic Chip with Next Generation Neural Engine Processor\r\nCeramic Shield\r\nIndustry-leading IP68 Water Resistance\r\nAll Screen OLED Display\r\n12MP TrueDepth Front Camera with Night Mode, 4K Dolby Vision HDR Recording', 'APPLE iPhone 12', 'APPLE iPhone 12 Mini (White, 64 GB)', 1, 'APPLE iPhone 12 Mini'),
(13, 6, 'Color Block Men Round Neck Black T-Shirt', 1299, 295, 10, '932764520_xs-t322-blwh-seven-rocks-original-imafxhagtyj2xvpn.jpeg', 'Men Round Neck Black T-Shirt', 'Color Block Men Round Neck Black T-Shirt', 'Black T-Shirt', 'Men Round Neck', 1, 'T-Shirt'),
(14, 3, 'Learning How To Fly - Life Lessons for the Youth  (English, Paperback, Kalam Abdul A. P. J.)', 195, 158, 100, '329641498_learning-how-to-fly-original-imafyx6zuhvfhv94.jpeg', 'Born on 15 October 1931, at Rameswaram in Tamil Nadu, Dr Avul Pakir Jainulabdeen Abdul Kalam specialized in Aeronautical Engineering from Madras Institute of Technology.', 'Born on 15 October 1931, at Rameswaram in Tamil Nadu, Dr Avul Pakir Jainulabdeen Abdul Kalam specialized in Aeronautical Engineering from Madras Institute of Technology. Dr Kalam was one of the most distinguished scientists of India and was awarded the Padma Bhushan (1981), the Padma Vibhushan (1990) and Indiaâs highest civilian award, the Bharat Ratna (1997). Dr Kalam became the eleventh President of India on 25 July 2002. His focus and greatest ambition was finding ways to transform India into a developed nation.', 'Learning How To Fly', 'Life Lessons for the Youth', 1, 'Learning How To Fly'),
(15, 7, 'Lenovo Legion 5 Core i7 11th Gen -', 415000, 111990, 5, '716429686_na-gaming-laptop-lenovo-original-imag6345sb2jfu2a.jpeg', 'Lenovo Legion 5 Core i7 11th Gen - (16 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce RTX 3050/120 Hz) 15ITH6 Gaming Laptop  (15.6 inch, Phantom Blue, Shadow Black, 2.4 Kg, With MS Office)', '15.6 inch Full HD IPS Anti-glare Display (250nits, 120Hz, 45% NTSC, DC Dimmer)\r\nLight Laptop without Optical Disk Drive\r\nPre-installed Genuine Windows 10 OS\r\nPreloaded with MS Office', 'Lenovo Legion 5 Core', 'Lenovo Legion 5 Core i7', 1, 'Lenovo Legion 5 Core i7 11th Gen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `added_on` datetime NOT NULL,
  `verfication_code` varchar(255) NOT NULL,
  `is_verfied` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `added_on`, `verfication_code`, `is_verfied`) VALUES
(1, 'Hitesh', 'hitesh@gmail.com', 'admin', '1234567891', '2021-10-11 16:45:32', '', 0),
(2, 'hitesh', 'admin@gmail.com', '', '2353532@gmail.c', '0000-00-00 00:00:00', '', 0),
(4, '', '', '', '', '0000-00-00 00:00:00', '', 0),
(6, 'hitler', 'hitler@gmail.com', '1234567', '4648659', '0000-00-00 00:00:00', '91929905228d861d44cd63503f0c887f', 0),
(7, 'hitesh yadav', 'hyadu703@gmail.com', '1237777', '4374584', '0000-00-00 00:00:00', '1b7d10b9f7fea65b3317885faa0233b6', 0),
(9, 'tfygukj', 'admin@gmail.comtfy', '123', '87897887i', '0000-00-00 00:00:00', '2e024606c5e4c86f023d54e418c4273f', 0),
(10, 'yu', 'admin@gmail.comyukj', '123', '6587899', '0000-00-00 00:00:00', '4c211a90c9ec7f8026191af422b760ce', 0),
(11, 'hitesh', 'hiteshyaduvanshi46@gmail.com', '123', '75867', '0000-00-00 00:00:00', '8351ae311bde795436d99a1d3a853801', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

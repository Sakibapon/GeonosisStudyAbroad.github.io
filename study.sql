-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2020 at 05:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukplanet`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_ID` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderItems`
--

CREATE TABLE `orderItems` (
  `id` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `productID` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `somoy` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderItems`
--

INSERT INTO `orderItems` (`id`, `userID`, `productID`, `orderid`, `somoy`) VALUES
(17, 1, 8, 38, '2020-03-21 01:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user` int(7) DEFAULT NULL,
  `firstName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postCode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderStatus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user`, `firstName`, `lastName`, `address`, `address2`, `telephone`, `phone`, `state`, `city`, `postCode`, `item`, `total`, `orderStatus`) VALUES
(38, 1, 'Md', 'Hossain', 'Gulbagh, Malibagh, Dhaka 1217', '289/1, Flat-3A', '01521412024', '01521412024', 'Dhaka', 'Dhaka', '1217', NULL, '70000', 'Package Sent');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `processor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `storage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery` int(11) NOT NULL,
  `cond` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulkPrice` int(11) NOT NULL,
  `sellPrice` int(11) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `somoy` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `model`, `year`, `type`, `size`, `processor`, `ram`, `storage`, `battery`, `cond`, `gpu`, `bulkPrice`, `sellPrice`, `availability`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `somoy`) VALUES
(8, 'Apple', 'Macbook Pro', '2016', 'mbpro', '13', 'Core i5', '8GB', '512GB', 12, 'Brand new condition', 'Intel', 50000, 70000, 0, 'bfn', '81F34c6p9-L._AC_SL1500_.jpg', '566512-apple-macbook-pro-13-inch-2019.jpg', '598438-macbook-pro-2018.jpg', '1562674068_1492879.jpg', 'macbook13.jpeg', 'Buying-the-16-inch-MacBook-Pro-–-main-image.jpg', '2020-01-04 16:09:15'),
(9, 'Apple', 'iPad', '2016', 'ipad', '10', 'A11 Bionic', '3GB', '512GB', 12, 'Fresh', 'Quad Core', 50000, 55000, 1, 'Very good product', 'IMG_3936.JPG', 'IMG_3937.JPG', '', '', '', '', '2020-01-11 08:34:23'),
(12, 'Apple', 'iPhone 6s', '2015', 'iphone', 'Built-in', 'A9', '2GB', '64GB', 78, '3 month used', '', 50000, 60000, 0, 'Fresh No dent', 'download.jpeg', '', '', '', '', '', '2020-02-01 14:34:16'),
(13, 'Apple', 'iPhone X', '2017', 'iphone', 'Built-in', 'A11', '3 GB', '256 GB', 89, '6 month used', 'A11', 35000, 40000, 1, 'Full fresh. Dent on edges only', 'iPhoneX-silver-1.jpg', 'iphone_Xxx.jpeg', 'New-Apple-IPhone-X-2018-1008972.jpg', 'IMG_6051.JPG', '', '', '2020-03-13 14:33:36'),
(14, 'Apple', 'Macbook Pro', '2018', 'mbpro', '13', 'i5', '8GB', '256 GB', 30, '6 month used', 'Intel', 90000, 100000, 1, 'dcvidcd', '566512-apple-macbook-pro-13-inch-2019.jpg', '', '', '', '', '', '2020-03-20 16:46:16'),
(15, 'Apple', 'Macbook Pro', '2015', 'mbpro', '13', 'i5', '8GB', '256 GB', 78, '3 month used', 'Intel', 78000, 85000, 1, '', '598438-macbook-pro-2018.jpg', '', '', '', '', '', '2020-03-20 16:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'sparnabd', 'sabbir.grassford@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_ID`);

--
-- Indexes for table `orderItems`
--
ALTER TABLE `orderItems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orderItems`
--
ALTER TABLE `orderItems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

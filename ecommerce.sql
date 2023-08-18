-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 02:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand` int(11) NOT NULL,
  `Brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand`, `Brand_name`) VALUES
(1, 'BMW'),
(2, 'VOLVO'),
(3, 'TOYOTA'),
(7, 'bmw');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity_cart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `quantity_cart`) VALUES
(1, 11, 1, 4),
(5, 11, 1, 3),
(6, 11, 1, 3),
(7, 11, 1, 3),
(8, 11, 1, 1),
(9, 11, 1, 1),
(10, 11, 1, 3),
(11, 11, 1, 3),
(12, 11, 1, 1),
(13, 11, 1, 1),
(14, 11, 1, 1),
(15, 11, 1, 1),
(16, 11, 1, 8),
(17, 11, 1, 8),
(18, 11, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_img` varchar(255) NOT NULL,
  `category_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_img`, `category_des`) VALUES
(1, 'Brack & Rotors', '', ''),
(2, 'Interior', '', ''),
(3, 'Lighting', '', ''),
(4, 'Suspension Systems ', '', ''),
(5, 'Wheels & Tires', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `discount_code` varchar(255) NOT NULL,
  `discount_persent` float NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(10) NOT NULL,
  `sub_total` float NOT NULL,
  `total` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `product_id`, `user_id`, `address`, `sub_total`, `total`, `date`) VALUES
(1, 12, 1, '', 0, 0, '2023-08-17 19:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_brife` varchar(255) DEFAULT NULL,
  `product_des` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `product_img1` varchar(255) NOT NULL,
  `product_img2` varchar(255) NOT NULL,
  `product_img3` varchar(255) NOT NULL,
  `product_img4` varchar(255) NOT NULL,
  `id_brand` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_brife`, `product_des`, `category_id`, `quantity_product`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `id_brand`) VALUES
(11, 'brack1', 23, 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy', 1, 23, 'brack.PNG', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzRKOnwVbGndhC6tJofBhtHoYWt2unY0S5x4FQbN_oWdHntMzWWGudov-B0875_lFrD6k&usqp=CAU', 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 1),
(12, 'brack2', 100, 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy', 1, 34, 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzRKOnwVbGndhC6tJofBhtHoYWt2unY0S5x4FQbN_oWdHntMzWWGudov-B0875_lFrD6k&usqp=CAU', 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 2),
(13, 'brack3', 34, 'Lorem Ipsum is simply dummy', NULL, 1, 34, 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzRKOnwVbGndhC6tJofBhtHoYWt2unY0S5x4FQbN_oWdHntMzWWGudov-B0875_lFrD6k&usqp=CAU', 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 3),
(14, 'intr1', 32, 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy', 1, 45, 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzRKOnwVbGndhC6tJofBhtHoYWt2unY0S5x4FQbN_oWdHntMzWWGudov-B0875_lFrD6k&usqp=CAU', 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 1),
(15, 'inter2', 34, 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy', 1, 47, 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzRKOnwVbGndhC6tJofBhtHoYWt2unY0S5x4FQbN_oWdHntMzWWGudov-B0875_lFrD6k&usqp=CAU', 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 'https://m.media-amazon.com/images/I/6105DBGtKrL.jpg', 2),
(17, 'inter3', 200, NULL, NULL, 1, 0, '', '', '', '', 3),
(18, 'sus 1', 300, NULL, NULL, 1, 0, '', '', '', '', 2),
(19, NULL, 1, NULL, NULL, 1, 0, '', '', '', '', 1),
(20, NULL, 1, NULL, NULL, 1, 1, '', '', '', '', 2),
(21, NULL, 1, NULL, NULL, 1, 0, '', '', '', '', 1),
(22, NULL, 1, NULL, NULL, 1, 1, '', '', '', '', 2),
(24, NULL, NULL, NULL, NULL, 1, 0, '', '', '', '', 3),
(25, NULL, 1, NULL, NULL, 1, 1, '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_date` varchar(20) NOT NULL,
  `userName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review`, `product_id`, `user_id`, `review_date`, `userName`) VALUES
(1, 'vfcnclksdnclsknls', 11, 1, '0000-00-00', '0'),
(3, 'rgfds', 11, 1, '0000-00-00', '0'),
(4, 'revklnflekwn', 11, 1, '0000-00-00', '0'),
(5, 'kljbhfg', 11, 1, '2023-08-17', '0'),
(6, 'qqqqqqqqqqqqq', 11, 1, '2023-08-17', '0'),
(7, 'qqqqqqqqqqqqq', 11, 1, '2023-08-17', '0'),
(8, 'qqqqqqqqqqqqq', 11, 1, '2023-08-17', '0'),
(9, 'hcgvjhbknlm', 11, 1, '2023-08-17', '0'),
(10, 'hcgvjhbknlm', 11, 1, '2023-08-17', '0'),
(11, 'rrrrrrrrrrrr', 11, 1, '2023-08-17', '0'),
(12, 'rrrrrrrrrrrr', 11, 1, '2023-08-17', '0'),
(13, 'rrrrrrrrrrrr', 11, 1, '2023-08-17', '0'),
(14, 'kojihugyjhkjlk;', 11, 1, '2023-08-17', '0'),
(15, 'kojihugyjhkjlk;', 11, 1, '2023-08-17', 'razan mustafa'),
(16, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(17, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(18, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(19, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(20, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(21, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(22, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(23, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(24, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(25, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(26, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(27, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa'),
(28, 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 11, 1, '2023-08-17', 'razan mustafa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `image`, `role`) VALUES
(1, 'razan', 'mustafa', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`,`user_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`) USING BTREE,
  ADD KEY `id_brand` (`id_brand`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`,`user_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

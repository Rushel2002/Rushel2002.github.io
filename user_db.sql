-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 06:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` int(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'admin', '12', 'admin1@gmail.com', 'cash on delivery', '123', 'aa', 'acs', 'Philippines', 123, 'b (1) , a (1) ', 15),
(2, 'Sauza, Macy Andrei', '12345678910', 'sauzamacy@gmail.com', 'cash on delivery', '123', 'qwe', 'Antipolo City', 'Philippines', 1800, 'a (1) , l (1) , b (1) ', 138),
(3, 'Sauza, Macy Andrei', '12345678910', 'sauzamacy@gmail.com', 'cash on delivery', '123', 'qwe', 'Antipolo City', 'Philippines', 1800, 'a (1) , l (1) , b (1) ', 138),
(4, 'Meyscii', '4', 'asd@asd.com', 'cash on delivery', '123', 'sf', 'Antipolo City', 'Philippines', 1800, '001 - A - PURPLE (1) , 00X2-B-WHITE (1) ', 1350),
(5, 'Meyscii', '4', 'asd@asd.com', 'cash on delivery', '123', 'sf', 'Antipolo City', 'Philippines', 1800, '001 - A - PURPLE (1) , 00X2-B-WHITE (1) ', 1350),
(6, 'Meyscii', '4', 'asd@asd.com', 'cash on delivery', '123', 'sf', 'Antipolo City', 'Philippines', 1800, '001 - A - PURPLE (1) , 00X2-B-WHITE (1) ', 1350),
(7, 'Meyscii', '4', 'asd@asd.com', 'cash on delivery', '123', 'sf', 'Antipolo City', 'Philippines', 1800, '001 - A - PURPLE (1) , 00X2-B-WHITE (1) ', 1350),
(0, 'dino', '986845674', 'dino@gmail.com', 'paypal', '43', 'star', 'rizal', 'kjke', 1200, '001 - A - PURPLE (8) , 00X1-A-WHITE (1) , 00X1-A-BLACK (1) , 00X2-B-WHITE (10) ', 1211),
(0, 'uigukg', '899675', 'dino@gmail.com', 'cash on delivery', '765', 'jkdhfksj', 'gjhfl', 'ghdfghfh', 35675475, '00X1-A-WHITE (10) , 001 - A - PURPLE (1) , 00X4-D-WHITE (2) ', 8000),
(0, 'hfhjfj', '789678568', 'jgjkdgf@gmail.com', 'cash on delivery', '76457', 'jhfjhf', 'jhfhj', 'jfhf', 87587, '00X1-A-WHITE (10) , 001 - A - PURPLE (1) , 00X4-D-WHITE (2) ', 8000),
(0, 'lhk,h', '876787', 'bjdfjbsf@mail.com', 'credit cart', '875678', 'fhjfjhj', 'ghjgh', 'hjfghjf', 57685, '00X1-A-WHITE (10) , 001 - A - PURPLE (1) , 00X4-D-WHITE (2) ', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `product_image`) VALUES
(2, '00X1-A - PURPLE', 600, 'PRODUCTS/SHIRT1_a.png'),
(3, '00X1-A - WHITE', 600, 'PRODUCTS/SHIRT1_b.png'),
(4, '00X1-A - BLACK', 600, 'PRODUCTS/SHIRT1_c.png'),
(5, '00X2-B - WHITE', 750, 'PRODUCTS/SHIRT2_a.png'),
(6, '00X3-C - WHITE', 650, 'PRODUCTS/SHIRT3_a.png'),
(7, '00X3-C - BLACK', 650, 'PRODUCTS/SHIRT3_b.png'),
(8, '00X4-D - WHITE', 700, 'PRODUCTS/SHIRT4_a.png'),
(9, '00X5-G - BLACK', 800, 'PRODUCTS/SHIRT7_aFRONT.png'),
(10, '00X5-G - WHITE', 800, 'PRODUCTS/SHIRT7_bFRONT.png'),
(11, '00X4-F - WHITE', 850, 'PRODUCTS/SHIRT5_a.png'),
(12, '00X4-F - BLACK', 850, 'PRODUCTS/SHIRT6_a.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(5, '001-A-PURPLE', '600', 'SHIRT1_a.png'),
(9, '00X1-A-WHITE', '600', 'SHIRT1_b.png'),
(10, '00X1-A-BLACK', '600', 'SHIRT1_c.png'),
(11, '00X2-B-WHITE', '750', 'SHIRT2_a.png'),
(12, '00X-3-WHITE', '650', 'SHIRT3_a.png'),
(14, '00X3-C-BLACK', '650', 'SHIRT3_b.png'),
(15, '00X4-D-WHITE', '700', 'SHIRT4_a.png'),
(16, '00X5-G-BLACK', '800', 'SHIRT7_aFRONT.png'),
(17, '00X5-G-WHITE', '800', 'SHIRT7_bFRONT.png'),
(18, '00X4-F-WHITE', '850', 'SHIRT5_a.png'),
(19, '00X4-F-BLACK', '850', 'SHIRT6_a.png'),
(0, '00X1-E-BLACK', '750', 'SHIRT7_aBACK.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `user_type` varchar(250) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

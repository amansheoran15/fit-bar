-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 11:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(25) NOT NULL,
  `prod_id` int(12) NOT NULL,
  `quantity` int(50) NOT NULL,
  `sr` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `prod_id`, `quantity`, `sr`) VALUES
('k', 2, 2, 9),
('as', 2, 2, 12),
('k', 4, 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_price2` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `rating` int(5) NOT NULL,
  `product_info` varchar(100) NOT NULL,
  `product_image2` varchar(100) NOT NULL,
  `product_image3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_price2`, `product_image`, `rating`, `product_info`, `product_image2`, `product_image3`) VALUES
(1, 'T-Shirt', 899, 999, 'static/tshirt.jpeg.webp', 4, 'This is an awesome t-shirt!', 'static/tshirt2.jpeg.webp', 'static/tshirt3.jpeg.webp'),
(2, 'Jacket', 4000, 3000, 'static/facilities.jpg', 3, 'This is an awesome Jacket!', 'static/facilities.jpg', 'static/facilities.jpg'),
(3, 'Sipper', 450, 500, 'static/s&c.jpeg', 5, 'This is an awesome Sipper!', 'static/s&c.jpeg', 'static/s&c.jpeg'),
(4, 'Bag', 600, 700, 'static/mmaf.jpg', 4, 'This is an awesome Bag!', 'static/mmaf.jpg', 'static/mmaf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `username`, `email`, `dt`) VALUES
(1, '$2y$10$SbgVZzdxTQ6Y4fGp7Csa.e.V4ZG28MM7cRA8T08Z6Hp3lTOzAk/F2', 'k', 'aa@gmail.com', '2021-11-18 00:28:49'),
(2, '$2y$10$37bkOhe9DC4auO1iugqdN.kAIy7AcQI/74FJimY6LNR84TZMGsJxy', 'as', 'as@gmail.com', '2021-11-19 19:32:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
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
  MODIFY `sr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

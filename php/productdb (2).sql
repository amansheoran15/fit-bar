-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 05:28 PM
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
  `sr` int(255) NOT NULL,
  `size` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `srno` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `orderid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`srno`, `name`, `phone`, `address`, `city`, `pincode`, `state`, `orderid`) VALUES
(1, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '76da2489c54adeb58b3aaeffc4cc4918cd2e5d2607e2334dbba687e1a2380fb0e12e85e64cc18b92d2361510ff92f0dd1c7b'),
(2, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '5f214c9075e21ff529d067a5b1c102beb6e1910beb740458a6472171b9cc8e52beffc3ddbbb6a18baf767c90e502c171b903'),
(3, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '827e0169ce19f84f6c6c4dae2aa42d37e42d40aec9739aa449d7470cc37b692a5c60f754db7f022324fa5f1b496f6da73184'),
(4, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '44c07dcf85ba6b2922a3bd9e34b74a56b81e54c1383f081065b5487b382743e2eb733407765a4d57ba6c3ea8b0f1a250f9f6'),
(5, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '7049ebe3e35a33dac1af3ac638cc9e48e4b092d41fb3f894332a39cfe9405336d7260692210ce9cf38f987522031461008f9'),
(6, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '514e1a73bc7fc38cc674fd6efb2e986e7d0c1972448d540e1fe764dbec2a5ef2b14476da55a0a1a7a2f0897485a0e6c8b351'),
(7, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '3adc0655dfe087c7ff81806b781b52b19f41a7bf59fc806027d02819138f4a1bc77c2ea50c0c330360dbd20b5e08a28cf76b'),
(8, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '19c572174608a13cb3e5bc8df14f35451600f77128c241bf88d04a4450c523edd08ddb4370028d24af81b19d65ed483a7820'),
(9, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '2bae318973c3adb070143eb80e9baec1c825725d8e091a31a2abe181365475cba0bf27fa4bfb3b63c513ecbbae5bf89e63fb'),
(10, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '94e1ec2def8cb16b16afb6a1c7d2c0657ed11cb74ce9c9c369e40b7c5bff62d9dbdde69b6805fe940beaff03bdbf7196af5a'),
(11, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '43565159b8e8012cc9c88d5f18f50725a0a2d798110bf2e081f501ac32983a1369d62b52560e5ed3a812ca9e3c8161630faa'),
(12, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '63dc64543a4258276e104b3f169ce1ef58f6336ded7747896d5f8a52aba5e6badc5d89bb384f495a372a3008bbdf3f92feef'),
(13, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', 'b6ae49b69bd4c93d954464720389c2859cecbee407b2827c1f6e87e174f4cef2effd39ef1ed3a0910145d99c88ca81b1469f'),
(14, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '8d641d367096cd9ef3622f4877aaea95d9793d4907aac9b45b5db94dc1bcd7f1fe5c2a2b98a5272363fc1535beca5958521e'),
(15, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', '5bb470646098c3b1a5407bbeb4b1df433e4d0ea37aadeead3d33e92c62eab981a0481f4bee05080ce64805d79cb76560674d'),
(16, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', 'b44e5d38da073547bc0e7b3062f9a16b732fa82989ef3b1297e630dde5387c094ecd95256043c9d208bc31b0150e3a65adab'),
(17, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', 'bde4e3f1f46ef4d7afbfc34f057c9262b9584350b3bfc2febb54fd7d80044244bec3950579bb774c03787a09ea50cb5302cf'),
(18, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', 'f09a5ba2f3ae34d77e69bd92827396643b9f6a5ead232f856bada52a716a378fb70268856c097b240fd892f3508834c1a6d6'),
(19, 'k', 2147483647, 'fdgd,ddh', 'rbl', 229001, 'Jharkhand', 'c5cde7e9d1c04e80b54da50dc5d4a9786b67da965a80a3c205367c612392dcd01943545faf3cfe0d412538e65a210f07a06f');

-- --------------------------------------------------------

--
-- Table structure for table `passreset`
--

CREATE TABLE `passreset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passreset`
--

INSERT INTO `passreset` (`id`, `email`, `token`) VALUES
(5, 'aa@gmail.com', '6d1cff7fdf1e1f35a7d657f4a7cc9a2417e45c747b925fbb7aa1602bfb6254c81343a1645f91769d34fdb917f514c9e3a1d0'),
(8, 'as@gmail.com', '44ce3a54e35fb88f5a9fd4f25d1976c1bc29071c627e92d66f0ce3a974c0ece959646c2f75210f305d5a2e7b8e95e4ccb47c');

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
(1, 'T-Shirt', 899, 999, 'static/Tshirt1.jpg', 4, 'This is an awesome t-shirt!', 'static/Tshirt2.jpg', 'static/Tshirt1.jpg'),
(2, 'Jacket', 4000, 3000, 'static/jacket2.jpg', 3, 'This is an awesome Jacket!', 'static/jacket1.jpg', 'static/jacket2.jpg'),
(3, 'Sipper', 450, 500, 'static/sipper1c.jpg', 5, 'This is an awesome Sipper!', 'static/sipper2c.jpg', 'static/sipper1.jpg'),
(4, 'Bag', 600, 700, 'static/bag1.jpg', 4, 'This is an awesome Bag!', 'static/bag2.jpg', 'static/bag3.jpg');

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
(2, '$2y$10$37bkOhe9DC4auO1iugqdN.kAIy7AcQI/74FJimY6LNR84TZMGsJxy', 'as', 'as@gmail.com', '2021-11-19 19:32:23'),
(3, '$2y$10$l9E6NyzcQXcriuQRbsac0.rBB3NMqpqa.zdtDoSgogcQ2M4saARMa', 'astha', 'vikanantsingh2908@gmail.com', '2021-11-22 09:09:16'),
(5, '$2y$10$Ucl/gxGYDMuCkuwE9vRD5evrqyiVZ5JOrK9AJUTi8X.cP2argqHwq', 'asthaa', 'asthasingh1908@gmail.com', '2021-11-22 12:52:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `passreset`
--
ALTER TABLE `passreset`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `sr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `passreset`
--
ALTER TABLE `passreset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

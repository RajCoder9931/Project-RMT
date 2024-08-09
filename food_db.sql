-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 07:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(4, 'RAVI', 'a3ab58bfb3ce6bf0094f0d9006056179887f5cfe'),
(5, 'Manisha', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `phone_number` int(10) NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, 0, 'Ravi Raj Tiwari ', 'tiwariraviraj50@gmail.com', '9931993138', 'helllo'),
(2, 0, 'Manisha', 'manisha54@gmail.com', '9894454644', 'helloo'),
(3, 0, 'Tannu kumari ', 'tannu@gmail.com', '9877895461', 'hey hello'),
(4, 0, 'Prabhjot singh', 'sahejdhigra54@gmail.com', '9968585887', 'hello ravi');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(1, 1, 'Ravi Raj Tiwari ', '9931993138', 'tiwariraviraj50@gmail.com', 'paytm', 'ROOM 101, 5, Goverment labour colouny, phagawara, phagawara, Punjab, India - 144401', 'Burger (99 x 1) - Indian Thali (259 x 1) - ', 358, '2024-05-07', 'completed'),
(2, 2, 'Manisha', '7347629915', 'manisha54@gmail.com', 'cash on delivery', 'ROOM 105, 9, industry area, phagawara, phagawara, Punjab, India - 144401', 'Indian Thali (259 x 1) - ', 259, '2024-05-07', 'completed'),
(3, 2, 'Manisha', '7347629915', 'manisha54@gmail.com', 'cash on delivery', 'ROOM 105, 9, industry area, phagawara, phagawara, Punjab, India - 144401', 'Burger (99 x 1) - cold Coffee (99 x 1) - ', 198, '2024-05-07', 'completed'),
(4, 2, 'Manisha', '7347629915', 'manisha54@gmail.com', 'cash on delivery', 'ROOM 105, 9, industry area, phagawara, phagawara, Punjab, India - 144401', 'Noodles (100 x 1) - Burger (99 x 2) - ', 298, '2024-05-07', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `image`) VALUES
(1, 'Burger', 'fast food', 99, 'famous.jpeg'),
(2, 'Indian Thali', 'main dish', 259, 'Indian Thali.jpg'),
(3, 'Pizza', 'fast food', 199, 'images.jpeg'),
(4, 'Noodles', 'fast food', 100, 'Noodles.jpeg'),
(5, 'Fires', 'fast food', 99, 'Fried.jpeg'),
(6, 'Sandwich', 'fast food', 99, 'Sandwich.jpeg'),
(7, 'Hot Dog Cream', 'fast food', 30, 'Hot Dog.jpeg'),
(8, 'cold Coffee', 'drinks', 99, 'cold-coffee.jpg'),
(9, 'Hot Chocolate', 'drinks', 100, 'Hot-Chocolate.jpg'),
(10, 'Ice Choclolate', 'drinks', 95, 'ICE CHOCOLATE.jpeg'),
(11, 'Vanilla Bean Milkshake', 'drinks', 110, 'VANILLA BEAN MILKSHAKE.jpeg'),
(12, 'Rajma Chawal', 'main dish', 100, 'RAJMA-CHAWAL.jpg'),
(13, 'cheese Pizza', 'fast food', 200, 'Cheese-Pizza.jpg'),
(14, 'cheese Burger', 'fast food', 78, 'Cheez Burger.jpeg'),
(15, 'Paneer Pizza', 'fast food', 199, 'Paneer-Pizza.jpg'),
(16, 'North Thali', 'main dish', 159, 'north thali.jpg'),
(17, 'Momos', 'fast food', 50, 'Simple Momos.jpg'),
(18, 'Paneer Momos', 'fast food', 60, 'Paneer Momos.jpeg'),
(19, 'Samosa', 'fast food', 10, '3.jpeg'),
(20, 'Chocolate Chip Cookies', 'desserts', 59, 'Chocolate Chip Cookies.jpeg'),
(21, 'Chocolate Cake', 'desserts', 250, 'Chocolate Cake.jpeg'),
(22, 'Strawberry Cake', 'desserts', 300, 'Strawbeery Cake.jpeg'),
(23, 'vanilla ice cream', 'desserts', 155, 'vanilla ice cream.jpeg'),
(24, 'chocolate ice cream', 'desserts', 160, 'Chocolate-Ice-Cream.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `address`) VALUES
(1, 'Ravi Raj Tiwari ', 'tiwariraviraj50@gmail.com', '9931993138', '8cb2237d0679ca88db6464eac60da96345513964', 'ROOM 101, 5, Goverment labour colouny, phagawara, phagawara, Punjab, India - 144401'),
(2, 'Manisha', 'manisha54@gmail.com', '7347629915', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'ROOM 105, 9, industry area, phagawara, phagawara, Punjab, India - 144401');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

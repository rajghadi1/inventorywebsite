-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 01:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `contact`, `user_email`, `password`, `gender`) VALUES
(6, 'rohit', 'desai', '9920207275', 'r.ghadi@somaiya.edu', '123456', 'female'),
(11, 'manish', 'Ghadi', '9136564573', 'manishghadi2001@gmail.com', '12345', 'male'),
(12, 'raj', 'ghadi', '8928669404', 'rajghadi1@gmail.com', '1234', 'male'),
(13, 'priya', 'ghadi', '7045867509', 'priya@gmail.com', '1234567', 'female'),
(14, 'pradip', 'ghadi', '9819070037', 'pradip@gmail.com', '12345678', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` float NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `item_name`, `item_price`, `item_quantity`, `user_email`, `date`) VALUES
(176, 'H & W', 5000, 6, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(177, 'Titan model 21', 10000, 2, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(178, 'Canon EOS', 20000, 4, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(179, 'JHON ZOK', 3000, 2, 'manishghadi2001@gmail.com', '2020-08-05 18:30:00'),
(180, 'HMT Milan', 10000, 3, 'manishghadi2001@gmail.com', '2020-08-05 18:30:00'),
(181, 'SONY CAM PRO', 25000, 5, 'manishghadi2001@gmail.com', '2020-08-05 18:30:00'),
(182, 'Canon EOS', 20000, 1, 'manishghadi2001@gmail.com', '2020-08-05 18:30:00'),
(183, 'Faber Luba', 9000, 2, 'manishghadi2001@gmail.com', '2020-08-05 18:30:00'),
(184, 'H & W', 5000, 1, 'r.ghadi@somaiya.edu', '2020-08-05 18:30:00'),
(185, 'Jalsani', 2000, 4, 'r.ghadi@somaiya.edu', '2020-08-05 18:30:00'),
(186, 'Titan Model 31', 15000, 3, 'r.ghadi@somaiya.edu', '2020-08-05 18:30:00'),
(187, 'SONY DSLR', 30000, 2, 'r.ghadi@somaiya.edu', '2020-08-05 18:30:00'),
(188, 'Canon EOS', 20000, 1, 'r.ghadi@somaiya.edu', '2020-08-05 18:30:00'),
(189, 'Faber Luba', 9000, 1, 'r.ghadi@somaiya.edu', '2020-08-05 18:30:00'),
(190, 'Canon EOS', 20000, 1, 'priya@gmail.com', '2020-08-05 18:30:00'),
(191, 'Titan model 21', 10000, 1, 'priya@gmail.com', '2020-08-05 18:30:00'),
(192, 'Jalsani', 2000, 1, 'priya@gmail.com', '2020-08-05 18:30:00'),
(193, 'Luis Phil', 4000, 1, 'priya@gmail.com', '2020-08-05 18:30:00'),
(194, 'HMT Milan', 10000, 1, 'priya@gmail.com', '2020-08-05 18:30:00'),
(195, 'JHON ZOK', 3000, 6, 'pradip@gmail.com', '2020-08-05 18:30:00'),
(196, 'H & W', 5000, 4, 'pradip@gmail.com', '2020-08-05 18:30:00'),
(197, 'Titan model 21', 10000, 2, 'pradip@gmail.com', '2020-08-05 18:30:00'),
(198, 'Canon EOS', 20000, 3, 'pradip@gmail.com', '2020-08-05 18:30:00'),
(199, 'Olympus DSLR', 30000, 1, 'pradip@gmail.com', '2020-08-05 18:30:00'),
(200, 'Canon EOS', 20000, 1, 'r.ghadi@somaiya.edu', '2020-08-05 18:30:00'),
(201, 'Faber Luba', 9000, 1, 'r.ghadi@somaiya.edu', '2020-08-05 18:30:00'),
(202, 'Jalsani', 2000, 1, 'r.ghadi@somaiya.edu', '2020-08-05 18:30:00'),
(203, 'JHON ZOK', 3000, 1, 'r.ghadi@somaiya.edu', '2020-08-05 18:30:00'),
(204, 'Jalsani', 2000, 3, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(205, 'JHON ZOK', 3000, 4, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(206, 'Luis Phil', 4000, 2, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(207, 'H & W', 5000, 6, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(208, 'Canon EOS', 20000, 4, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(209, 'HMT Milan', 10000, 3, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(210, 'Faber Luba', 9000, 1, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(211, 'Faber Luba', 9000, 1, 'rajghadi1@gmail.com', '2020-08-05 18:30:00'),
(212, 'JHON ZOK', 3000, 1, 'rajghadi1@gmail.com', '2020-08-05 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `qll` int(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `type`, `item_name`, `quantity`, `price`, `qll`, `image`) VALUES
(18, 'CAMERA', 'Canon EOS', 5, 20000, 5, 'image/a5ba147d6499d2455ba802d9140d88131.jpg'),
(19, 'CAMERA', 'SONY DSLR', 18, 30000, 5, 'image/c27bfb15023a9991c61203b3a44601a12.jpg'),
(20, 'CAMERA', 'SONY CAM PRO', 20, 25000, 10, 'image/9009f3795237d7ff490474d519c394693.jpg'),
(22, 'CAMERA', 'Olympus DSLR', 9, 30000, 5, 'image/0450a02e20db8ea8691a2a56cf699f0b4.jpg'),
(23, 'Watch', 'Titan model 21', 15, 10000, 5, 'image/f18caf79c57949fa4c67953fae18ca395.jpg'),
(24, 'watch', 'Titan Model 31', 22, 15000, 10, 'image/609b45e82f24cbb36757edf08d8e28a26.jpg'),
(25, 'watch', 'HMT Milan', 3, 10000, 5, 'image/6e9f5d97dd2739d766ea12d120456a918.jpg'),
(26, 'watch', 'Faber Luba', 14, 9000, 5, 'image/e93cdbc48db604d9c2f60550232f71477.jpg'),
(27, 'SHIRTS', 'H & W', 8, 5000, 10, 'image/9a0cd08de9bbbbacf6627e8f930f211b12.jpg'),
(28, 'SHIRTS', 'Luis Phil', 12, 4000, 5, 'image/293a88d9ddec38024b89fb21628db4c19.jpg'),
(29, 'SHIRTS', 'JHON ZOK', 1, 3000, 5, 'image/acdf2ccf57a7639af3cd98647965515411.jpg'),
(30, 'SHIRTS', 'Jalsani', 6, 2000, 5, 'image/f3ff876c622d87a53516a6c299ae50ee10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

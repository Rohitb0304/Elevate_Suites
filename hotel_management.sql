-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 06:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `room` varchar(50) DEFAULT NULL,
  `adults` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `num_rooms` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `room_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `room`, `adults`, `children`, `check_in`, `check_out`, `name`, `email`, `num_rooms`, `created_at`, `room_type`) VALUES
(4, NULL, 8, 9, '2023-06-12', '2023-06-13', '', '', 4, '2023-06-15 18:50:41', 'Premium Suite'),
(5, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 18:55:18', 'Deluxe Room'),
(6, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 18:56:17', 'Deluxe Room'),
(7, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 18:57:38', 'Deluxe Room'),
(8, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 18:57:39', 'Deluxe Room'),
(9, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 18:58:24', 'Deluxe Room'),
(10, NULL, NULL, NULL, '2023-06-25', '2023-06-26', 'Rohit', 'rojvhj@gm.hnj', NULL, '2023-06-15 18:58:24', 'Deluxe Room'),
(11, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 18:58:28', 'Deluxe Room'),
(12, NULL, NULL, NULL, '2023-06-25', '2023-06-26', 'Rohit', 'rojvhj@gm.hnj', NULL, '2023-06-15 18:58:28', 'Deluxe Room'),
(13, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 18:59:05', 'Deluxe Room'),
(14, NULL, NULL, NULL, '2023-06-25', '2023-06-26', 'Rohit', 'rojvhj@gm.hnj', NULL, '2023-06-15 18:59:05', 'Deluxe Room'),
(15, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 18:59:19', 'Deluxe Room'),
(16, NULL, NULL, NULL, '2023-06-25', '2023-06-26', 'Rohit', 'rojvhj@gm.hnj', NULL, '2023-06-15 18:59:19', 'Deluxe Room'),
(17, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 18:59:41', 'Deluxe Room'),
(18, NULL, NULL, NULL, '2023-06-25', '2023-06-26', 'Rohit', 'rojvhj@gm.hnj', NULL, '2023-06-15 18:59:41', 'Deluxe Room'),
(19, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 18:59:57', 'Deluxe Room'),
(20, NULL, NULL, NULL, '2023-06-25', '2023-06-26', 'Rohit', 'rojvhj@gm.hnj', NULL, '2023-06-15 18:59:58', 'Deluxe Room'),
(21, NULL, 8, 4, '2023-06-25', '2023-06-26', '', '', 2, '2023-06-15 19:00:09', 'Deluxe Room'),
(22, NULL, NULL, NULL, '2023-06-25', '2023-06-26', 'Rohit', 'rojvhj@gm.hnj', NULL, '2023-06-15 19:00:09', 'Deluxe Room'),
(23, NULL, 5, 4, '2023-06-28', '2023-06-29', 'Rohit Bansode', 'rohiit@hffjhj.uhyfh', 4, '2023-06-15 15:44:17', 'Premium Suite'),
(24, NULL, 5, 4, '2023-06-28', '2023-06-29', 'Rohit Bansode', 'rohiit@hffjhj.uhyfh', 4, '2023-06-15 15:46:06', 'Premium Suite'),
(25, NULL, 5, 4, '2023-06-28', '2023-06-29', 'Rohit Bansode', 'rohiit@hffjhj.uhyfh', 4, '2023-06-15 16:10:56', 'Premium Suite'),
(26, NULL, 5, 4, '2023-06-28', '2023-06-29', 'Rohit Bansode', 'rohiit@hffjhj.uhyfh', 4, '2023-06-15 16:11:01', 'Premium Suite');

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `name`, `email`, `message`, `submission_date`) VALUES
(1, 'Rohit Bansode', 'rohitrbansode03@gmail.com', 'yguheh hffhf huihhgbhd hfuihfejen.', '2023-06-15 14:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `duration` int(3) NOT NULL,
  `check_in_date` date DEFAULT NULL,
  `check_out_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `employee_id`, `duration`, `check_in_date`, `check_out_date`) VALUES
(40, 'Rohit Bansode', 'rohit.bansode@mit.asia', '8888888888', 'N-7 Aurangabad', 0, 0, '2023-07-29', '2023-07-31'),
(41, 'Rohit Bansode', 'rohit.gmail@com', '8888877777', 'Existing Only', 0, 0, '2023-07-29', '2023-07-30'),
(42, 'jhbujrnj', 'hnj@njvn.jjn', '565845555', 'Exist', 0, 0, '2023-07-29', '2023-08-01'),
(43, 'ughdf', 'hngjnj@jjg.jjgj', '6896655235', 'kjghlejhnjt', 0, 0, '2023-03-08', '2023-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `username`, `password`) VALUES
(1, 'John Doe', 'johndoe', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `full_description` text DEFAULT NULL,
  `rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_type`, `description`, `full_description`, `rate`) VALUES
(1, 'Deluxe Rooms', 'At 32 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden or a Pool view.', NULL, 3999.00),
(2, 'Premium Room', 'At 35 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden or a Pool view.', NULL, 5299.00),
(3, 'Premium Suite', 'At 69 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden view.', NULL, 9999.00),
(4, 'Deluxe Suite', 'At 75 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Beach view.', NULL, 16299.00),
(5, 'Executive Suite', 'At 79 Sq Mt, this room comes with a King Bed, Inclusive of 60 Mbps WiFi for Unlimited Devices and offers a Beach view.', NULL, 28999.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

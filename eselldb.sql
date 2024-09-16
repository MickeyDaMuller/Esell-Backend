-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 08:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eselldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `mobile_number`, `password`, `createdAt`, `updatedAt`) VALUES
(1, 'mohamed ezzat', '00971566776621', '$2a$08$vI0WhvxmQF/v8bBP2Spys.OdbjTKo.LF8d4ITdDngw.i1jFSpCziq', '2020-12-16 12:02:14', '2020-12-16 12:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `bike_types`
--

CREATE TABLE `bike_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bike_types`
--

INSERT INTO `bike_types` (`id`, `name`, `createdAt`, `updatedAt`) VALUES
(1, 'Sport Bike', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(2, 'Cruiser', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(3, 'Off-Road', '2020-12-16 11:06:25', '2020-12-16 11:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `boat_sizes`
--

CREATE TABLE `boat_sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `boat_sizes`
--

INSERT INTO `boat_sizes` (`id`, `name`, `createdAt`, `updatedAt`) VALUES
(1, '10ft - 20ft', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(2, '20ft - 30ft', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(3, '30ft - 35+ft', '2020-12-16 11:06:25', '2020-12-16 11:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `boat_types`
--

CREATE TABLE `boat_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `boat_types`
--

INSERT INTO `boat_types` (`id`, `name`, `createdAt`, `updatedAt`) VALUES
(1, 'motor Boat', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(2, 'Sail Boat', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(3, 'Row / Paddle Boat', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(4, 'boat type name', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brand_logos`
--

CREATE TABLE `brand_logos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logoURL` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `brand_logos`
--

INSERT INTO `brand_logos` (`id`, `name`, `logoURL`, `createdAt`, `updatedAt`) VALUES
(1, 'audi', 'logosResources/audi.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(2, 'BMW', 'logosResources/BMW.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(3, 'bugatti', 'logosResources/bugatti.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(4, 'GMC', 'logosResources/GMC.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(5, 'HONDA', 'logosResources/HONDA.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(6, 'Jaguar', 'logosResources/Jaguar.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(7, 'Lexus', 'logosResources/Lexus.svg.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(8, 'mercedes-benz', 'logosResources/mercedes-benz.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(9, 'Mitsubishi', 'logosResources/Mitsubishi.jpg', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(10, 'Nissan', 'logosResources/Nissan.svg.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(11, 'Rolls_royce', 'logosResources/Rolls_royce.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(12, 'TOYOTA', 'logosResources/TOYOTA.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `categoryURL` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `categoryURL`, `createdAt`, `updatedAt`) VALUES
(1, 'Cars', 'resources/Cars.jpg', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(2, 'Motor-Bike', 'resources/Motor-Bike.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(3, 'boat-&-Jetski', 'resources/boat-&-Jetski.jpg', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(4, 'Spare-Parts', 'resources/Spare-Parts.jpg', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(5, 'RV-Motorhome / Caravan', 'resources/RV-Motorhome.png', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(8, 'category test', 'resources/_1073ea0e-187b-4e9c-9c9b-2d3ea5d28491.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `createdAt`, `updatedAt`) VALUES
(1, 'Abu Dhabi', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(2, 'Al Ain', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(3, 'Dubai', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(4, 'Sharjah', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(5, 'Ajman', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(6, 'Ras Al Khaimah', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(7, 'Fujairah', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(8, 'Umm al-Quwain', '2020-12-16 11:06:25', '2020-12-16 11:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `deviceId` varchar(255) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `firebaseToken` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `favStatus` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `postId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `favStatus`, `createdAt`, `updatedAt`, `userId`, `postId`) VALUES
(1, 'like', '2020-12-19 10:03:54', '2020-12-19 10:03:54', 1, 10),
(2, 'like', '2021-01-17 05:54:35', '2021-01-17 05:54:35', 1, 8),
(3, 'like', '2024-08-26 13:10:10', '2024-08-29 12:47:26', 5, 7),
(5, 'like', '2024-08-29 11:16:50', '2024-08-29 11:16:50', 5, 8),
(6, '', '2024-08-29 12:05:58', '2024-08-29 12:06:09', 5, 11),
(7, 'like', '2024-09-05 08:09:07', '2024-09-05 08:09:07', 5, 56);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `carTopic` varchar(255) DEFAULT NULL,
  `chassisNo` varchar(255) DEFAULT NULL,
  `mechanicalCondition` varchar(255) DEFAULT NULL,
  `fuelType` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL,
  `bodyType` varchar(255) DEFAULT NULL,
  `modelCntrl` varchar(255) DEFAULT NULL,
  `yearCntrl` varchar(255) DEFAULT NULL,
  `mileage` varchar(255) DEFAULT NULL,
  `priceCntrl` varchar(255) DEFAULT NULL,
  `descripeCntrl` varchar(255) DEFAULT NULL,
  `postStatus` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `brandLogoId` int(11) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `subBrandId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `carTopic`, `chassisNo`, `mechanicalCondition`, `fuelType`, `warranty`, `bodyType`, `modelCntrl`, `yearCntrl`, `mileage`, `priceCntrl`, `descripeCntrl`, `postStatus`, `createdAt`, `updatedAt`, `userId`, `brandLogoId`, `categoryId`, `subBrandId`) VALUES
(7, 'BMW BMW1', '12345', 'good', 'benzen', 'warranties', '', 'BMW1', '2020', '30000', '150500', 'bmw I8 first owner', 'experied', '2020-12-17 06:17:24', '2024-07-26 11:58:37', 1, 2, 1, 5),
(8, 'TOYOTA TOYOTA3', '', '', '', '', '', 'TOYOTA3', '2013', '120500', '67000', 'Toyota prado 2013', 'expired', '2020-12-17 06:22:51', '2021-01-04 11:20:56', 5, 12, 1, 59),
(9, 'nfjrir', '', '', '', '', '20ft - 30ft', '', '2014', 'kfkfidi', '15000', '\n', 'ready', '2020-12-17 08:19:49', '2021-01-04 11:20:56', 5, 12, 5, 59),
(10, 'bugatti bugatti2', '', '', '', '', '', 'bugatti2', '2014', '555', '9000000', 'MAD', 'expired', '2020-12-17 08:23:28', '2021-01-04 11:20:56', 5, 3, 1, 5),
(11, 'motor home caravan', '', '', '', '', '30ft - 35+ft', '', '2003', '5000', '200500', 'just used for camping ', 'experied', '2020-12-17 09:56:11', '2020-12-23 11:14:05', 5, 12, 5, 59),
(13, 'HONDA HONDA2', '', '', '', '', '', 'HONDA2', '2016', '500', '200500', 'description', 'ready', '2020-12-28 10:44:49', '2020-12-28 10:44:49', 5, 5, 1, 23),
(14, 'Jaguar Jaguar2', '', '', '', '', '', 'Jaguar2', '2016', 'test', '790', 'very hugh ', 'pending', '2021-01-17 05:56:44', '2021-01-17 05:56:44', 5, 6, 1, 28),
(56, 'GMC GMC1', '12488', 'very good', 'gas', 'valid', 'Sail Boat', 'GMC1', '1511', '154549', '4648188', 'shdhdbdb', 'ready', '2024-09-05 08:08:28', '2024-09-05 08:08:28', 5, 4, 3, 17);

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` int(11) NOT NULL,
  `imageURL` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `postId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `imageURL`, `createdAt`, `updatedAt`, `postId`) VALUES
(7, 'userPost7img0d1608185844529.jpg', '2020-12-17 06:17:24', '2020-12-17 06:17:24', 7),
(8, 'userPost7img1d1608185844532.jpg', '2020-12-17 06:17:24', '2020-12-17 06:17:24', 7),
(9, 'userPost7img2d1608185844533.jpg', '2020-12-17 06:17:24', '2020-12-17 06:17:24', 7),
(10, 'userPost8img0d1608186171251.jpg', '2020-12-17 06:22:51', '2020-12-17 06:22:51', 8),
(11, 'userPost8img1d1608186171251.jpg', '2020-12-17 06:22:51', '2020-12-17 06:22:51', 8),
(12, 'userPost9img0d1608193189301.jpg', '2020-12-17 08:19:49', '2020-12-17 08:19:49', 9),
(13, 'userPost9img1d1608193189303.png', '2020-12-17 08:19:49', '2020-12-17 08:19:49', 9),
(14, 'userPost10img0d1608193408878.png', '2020-12-17 08:23:28', '2020-12-17 08:23:28', 10),
(15, 'userPost11img0d1608198971403.jpg', '2020-12-17 09:56:11', '2020-12-17 09:56:11', 11),
(16, 'userPost11img1d1608198971409.jpg', '2020-12-17 09:56:11', '2020-12-17 09:56:11', 11),
(17, 'userPost12img0d1608203023910.jpg', '2020-12-17 11:03:43', '2020-12-17 11:03:43', NULL),
(18, 'userPost13img0d1609152289346.jpg', '2020-12-28 10:44:49', '2020-12-28 10:44:49', 13),
(19, 'userPost14img0d1610863004787.png', '2021-01-17 05:56:44', '2021-01-17 05:56:44', 14),
(69, 'userPost56img0d1725523709009.jpg', '2024-09-05 08:08:29', '2024-09-05 08:08:29', 56);

-- --------------------------------------------------------

--
-- Table structure for table `resetpasses`
--

CREATE TABLE `resetpasses` (
  `id` int(11) NOT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `resetpasses`
--

INSERT INTO `resetpasses` (`id`, `verify_code`, `createdAt`, `updatedAt`, `userId`) VALUES
(1, '$2a$10$v1zVxNPIvkTpDapsfxXIfujF7VY5101H9fKt2gWdqKJ58fcVqsNKW', '2024-08-26 10:44:33', '2024-08-26 11:10:48', 5);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `createdAt`, `updatedAt`) VALUES
(1, 'user', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(2, 'regUser', '2020-12-16 11:06:25', '2020-12-16 11:06:25'),
(3, 'admin', '2020-12-16 11:06:25', '2020-12-16 11:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` int(11) NOT NULL,
  `searchText` varchar(255) DEFAULT NULL,
  `searchStatus` varchar(255) DEFAULT NULL,
  `userIp` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `searchText`, `searchStatus`, `userIp`, `createdAt`, `updatedAt`, `userId`) VALUES
(1, 'bmw', 'deleted', NULL, '2020-12-17 06:42:12', '2021-01-17 05:54:57', 1),
(2, 'jet3', 'deleted', NULL, '2020-12-17 08:12:46', '2021-01-17 05:54:57', 1),
(3, 'BMW ', 'deleted', NULL, '2020-12-17 08:16:25', '2021-01-17 05:54:57', 1),
(4, 'bmw', 'deleted', NULL, '2020-12-17 08:18:08', '2021-01-17 05:54:57', 1),
(5, 'prado ', 'deleted', NULL, '2020-12-17 08:37:39', '2021-01-17 05:54:57', 1),
(6, 'home', 'deleted', NULL, '2020-12-17 10:59:37', '2021-01-17 05:54:57', 1),
(7, 'bmw', 'deleted', NULL, '2020-12-19 13:30:17', '2021-01-17 05:54:57', 1),
(8, 'bmw ', 'deleted', NULL, '2020-12-19 13:38:30', '2021-01-17 05:54:57', 1),
(9, 'bmw', 'deleted', NULL, '2020-12-19 13:39:22', '2021-01-17 05:54:57', 1),
(10, 'bmw', 'deleted', NULL, '2020-12-20 09:39:39', '2021-01-17 05:54:57', 1),
(11, 'bmw', 'deleted', NULL, '2020-12-20 09:47:26', '2021-01-17 05:54:57', 1),
(12, 'BMW ', 'deleted', NULL, '2020-12-20 09:52:50', '2021-01-17 05:54:57', 1),
(13, 'BMW ', 'deleted', NULL, '2020-12-20 09:52:56', '2021-01-17 05:54:57', 1),
(14, 'ggg', 'deleted', NULL, '2021-01-04 09:17:44', '2021-01-17 05:54:57', 1),
(15, 'mike', 'deleted', NULL, '2021-01-04 09:17:57', '2021-01-17 05:54:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_brands`
--

CREATE TABLE `sub_brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedAt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `brandLogoId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sub_brands`
--

INSERT INTO `sub_brands` (`id`, `name`, `createdAt`, `updatedAt`, `brandLogoId`) VALUES
(1, 'audi0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 1),
(2, 'audi1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 1),
(3, 'BMW0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 2),
(4, 'audi4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 1),
(5, 'BMW1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 2),
(6, 'audi3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 1),
(7, 'audi2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 1),
(8, 'BMW2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 2),
(9, 'BMW3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 2),
(10, 'BMW4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 2),
(11, 'bugatti0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 3),
(12, 'bugatti1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 3),
(13, 'bugatti2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 3),
(14, 'bugatti3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 3),
(15, 'bugatti4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 3),
(16, 'GMC0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 4),
(17, 'GMC1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 4),
(18, 'GMC2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 4),
(19, 'GMC3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 4),
(20, 'GMC4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 4),
(21, 'HONDA0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 5),
(22, 'HONDA1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 5),
(23, 'HONDA2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 5),
(24, 'HONDA3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 5),
(25, 'HONDA4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 5),
(26, 'Jaguar0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 6),
(27, 'Jaguar1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 6),
(28, 'Jaguar2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 6),
(29, 'Jaguar3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 6),
(30, 'Jaguar4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 6),
(31, 'Lexus0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 7),
(32, 'Lexus1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 7),
(33, 'Lexus2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 7),
(34, 'Lexus3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 7),
(35, 'Lexus4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 7),
(36, 'mercedes-benz0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 8),
(37, 'mercedes-benz1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 8),
(38, 'mercedes-benz2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 8),
(39, 'mercedes-benz3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 8),
(40, 'mercedes-benz4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 8),
(41, 'Mitsubishi0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 9),
(42, 'Mitsubishi1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 9),
(43, 'Mitsubishi2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 9),
(44, 'Mitsubishi3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 9),
(45, 'Mitsubishi4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 9),
(46, 'Nissan0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 10),
(47, 'Nissan1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 10),
(48, 'Nissan2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 10),
(49, 'Nissan3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 10),
(50, 'Nissan4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 10),
(51, 'Rolls_royce0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 11),
(52, 'Rolls_royce1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 11),
(53, 'Rolls_royce2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 11),
(54, 'Rolls_royce3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 11),
(55, 'Rolls_royce4', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 11),
(56, 'TOYOTA0', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 12),
(57, 'TOYOTA1', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 12),
(58, 'TOYOTA2', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 12),
(59, 'TOYOTA3', '2020-12-16 11:06:25', '2020-12-16 11:06:25', 12),
(64, 'BMW2', '2020-12-16 11:06:25', '2024-09-11 15:35:43', 4);

-- --------------------------------------------------------

--
-- Table structure for table `update_users`
--

CREATE TABLE `update_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mob_no` varchar(255) DEFAULT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `signup_stt` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `update_users`
--

INSERT INTO `update_users` (`id`, `username`, `email`, `mob_no`, `verify_code`, `signup_stt`, `createdAt`, `updatedAt`, `userId`) VALUES
(2, 'mohamed ezzat abo yousef ', 'm.ezzataboyousef@gmail.com ', '00971566776621', '$2a$10$Dk5Ns.UUxSUAN.d0f3L55e/yDGrMEiQDZSmr/Kbw4AWz9VzaiiFXa', NULL, '2020-12-22 10:51:15', '2020-12-22 10:51:15', 1),
(3, 'mohamed ezzat abo yousef ', 'm.ezzataboyousef@gmail.com ', '00971566776621', '$2a$10$wYbz9ou.DUwS/Y6I7MOqOOjAsLmWQ6F3eT0p8YGEdQVDOEWI6WuVG', '', '2020-12-22 10:53:19', '2020-12-22 10:53:19', 1),
(4, 'mohamed ezzat abo yousef ', 'm.ezzataboyousef@gmail.com ', '00971566776621', '$2a$10$hmDu4STbcTcmzDdHiluKVuttxnAy1tQ3b83LGkbmo8tGYYItZUTjO', '', '2020-12-22 10:54:17', '2020-12-22 10:54:17', 1),
(5, 'mohamed ezzat abo yousef ', 'm.ezzataboyousef@gmail.com ', '00971566776621', '$2a$10$4Qy.jwsVwiFVPfrCBiGs/uy1HxZN62HH08fJ/AtAhv20eefT1HPvC', NULL, '2020-12-22 10:56:59', '2020-12-22 10:56:59', 1),
(6, 'mohamed ezzat abo yousef', 'm.ezzataboyousef@gmail.com ', '00971566776621', '$2a$10$cVcNuvpTp0jlrcV7B/w5gOgWoUFy67IQ.AYZfUHsNiQGPT6qMNi06', 'email', '2020-12-22 11:06:15', '2020-12-22 11:06:15', 1),
(7, 'mohamed ezzat abo yousef', 'm.ezzataboyousef@gmail.com', '00971566776621', '$2a$10$/SVrisq7bdb.T86S3.9dPOz5ca6JVKT6JbVHdu68IiExsDT0GPnDG', 'email', '2020-12-22 11:07:29', '2020-12-22 11:07:29', 1),
(8, 'mohamed ezzat abo yousef ', 'm.ezzataboyousef@gmail.com ', '00971566776621', '$2a$10$WrMiheF.Ive.Qdz4Tgr8pObUFLetteFnxUdCa0RzwWNdBpiyK140C', 'email', '2020-12-22 11:45:56', '2020-12-22 11:45:56', 1),
(9, 'mohamed ezzat abo yousef ', 'm.ezzataboyousef@gmail.com', '00971566776621', '$2a$10$5WVnIK55xtQf37VOD3J5J.6t4hKh.vKgf832RcH0axP/.TWblRvKq', 'email', '2020-12-22 11:46:21', '2020-12-22 11:46:21', 1),
(10, 'mohamed ezzat abo yousef ', 'm.ezzataboyousef@gmail.com ', '00971566776621', '$2a$10$TD6zX359dHy.xsXpxu91v.DPPjM94cg8cEBCWig1G1MDpVKy6ChQq', 'email', '2020-12-22 12:21:50', '2020-12-22 12:21:50', 1),
(11, 'mohamed ezzat abo yousef ', 'm.ezzataboyousef@gmail.com ', '00971566776621', '$2a$10$1dubfbqAPNWj.SVXFYV9LOq8Bj6lEN8vJ0e7jOfYGZtHtAM3LvIX.', 'email', '2020-12-22 12:43:15', '2020-12-22 12:43:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mob_no` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `cityId` int(11) DEFAULT NULL,
  `roleId` int(11) DEFAULT NULL,
  `signup_stt` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mob_no`, `password`, `verify_code`, `createdAt`, `updatedAt`, `cityId`, `roleId`, `signup_stt`, `active`) VALUES
(1, 'mohamed ezzat abo yousef ', 'm.ezzataboyousef@gmail.com ', '00971566776621', '$2a$08$au5BdKxdczYvfT7E6GZfIOuBOZEctfGmj18c7oQ0h1gTVt1K8i5mu', 'verified', '2020-12-16 11:09:07', '2020-12-22 12:43:43', NULL, 2, 'email', 1),
(5, 'mahmoud', 'mahmoud.salem94@outlook.com', '009715055152207', '$2a$08$C1R69dUNHbE1F2we.MFH1OWGQiSGo1KSVtH4K2Hh3S9UBqqMS5EpK', 'verified', '2024-08-23 07:32:30', '2024-08-26 10:46:15', NULL, 2, 'email', 1),
(6, 'mahmoud', 'mahmoud.matrix94@outlook.com', '00971505545125', '$2a$08$ek/4CkdRvLm03vv5TTVpruIcZFMBH.IqaaQt5SahNXCcjjm94HIXe', '$2a$10$eFObxW.7otzVyIwCeCpRLOYthLx4Juvw6kPgf56.AYE42EJjXjCZu', '2024-08-23 12:37:50', '2024-08-23 12:37:50', NULL, 2, 'email', 1);

-- --------------------------------------------------------

--
-- Table structure for table `versions`
--

CREATE TABLE `versions` (
  `id` int(11) NOT NULL,
  `vNo` double DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `versions`
--

INSERT INTO `versions` (`id`, `vNo`, `createdAt`, `updatedAt`) VALUES
(1, 1, '2020-12-16 11:06:25', '2020-12-16 11:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `postId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `createdAt`, `updatedAt`, `postId`, `userId`) VALUES
(1, '2020-12-16 13:19:50', '2020-12-16 13:19:50', NULL, 1),
(2, '2020-12-16 13:29:27', '2020-12-16 13:29:27', NULL, 1),
(3, '2020-12-17 06:26:28', '2020-12-17 06:26:28', 7, 1),
(4, '2020-12-17 06:26:28', '2020-12-17 06:26:28', 8, 1),
(5, '2020-12-17 08:23:54', '2020-12-17 08:23:54', 10, 1),
(6, '2020-12-17 09:59:34', '2020-12-17 09:59:34', 11, 1),
(7, '2020-12-19 11:03:50', '2020-12-19 11:03:50', NULL, 1),
(8, '2021-01-04 12:03:49', '2021-01-04 12:03:49', 9, 1),
(9, '2021-01-17 05:57:16', '2021-01-17 05:57:16', 14, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_types`
--
ALTER TABLE `bike_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boat_sizes`
--
ALTER TABLE `boat_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boat_types`
--
ALTER TABLE `boat_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_logos`
--
ALTER TABLE `brand_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `postId` (`postId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `brandLogoId` (`brandLogoId`),
  ADD KEY `categoryId` (`categoryId`),
  ADD KEY `subBrandId` (`subBrandId`);
ALTER TABLE `posts` ADD FULLTEXT KEY `carTopic` (`carTopic`);
ALTER TABLE `posts` ADD FULLTEXT KEY `descripeCntrl` (`descripeCntrl`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postId` (`postId`);

--
-- Indexes for table `resetpasses`
--
ALTER TABLE `resetpasses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `sub_brands`
--
ALTER TABLE `sub_brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brandLogoId` (`brandLogoId`);

--
-- Indexes for table `update_users`
--
ALTER TABLE `update_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityId` (`cityId`),
  ADD KEY `roleId` (`roleId`);

--
-- Indexes for table `versions`
--
ALTER TABLE `versions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postId` (`postId`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bike_types`
--
ALTER TABLE `bike_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `boat_sizes`
--
ALTER TABLE `boat_sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `boat_types`
--
ALTER TABLE `boat_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brand_logos`
--
ALTER TABLE `brand_logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `resetpasses`
--
ALTER TABLE `resetpasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_brands`
--
ALTER TABLE `sub_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `update_users`
--
ALTER TABLE `update_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `versions`
--
ALTER TABLE `versions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `devices`
--
ALTER TABLE `devices`
  ADD CONSTRAINT `devices_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`postId`) REFERENCES `posts` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`brandLogoId`) REFERENCES `brand_logos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_3` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_4` FOREIGN KEY (`subBrandId`) REFERENCES `sub_brands` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `post_images`
--
ALTER TABLE `post_images`
  ADD CONSTRAINT `post_images_ibfk_1` FOREIGN KEY (`postId`) REFERENCES `posts` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `resetpasses`
--
ALTER TABLE `resetpasses`
  ADD CONSTRAINT `resetpasses_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `searches`
--
ALTER TABLE `searches`
  ADD CONSTRAINT `searches_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `sub_brands`
--
ALTER TABLE `sub_brands`
  ADD CONSTRAINT `sub_brands_ibfk_1` FOREIGN KEY (`brandLogoId`) REFERENCES `brand_logos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `update_users`
--
ALTER TABLE `update_users`
  ADD CONSTRAINT `update_users_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `cities` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`roleId`) REFERENCES `roles` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`postId`) REFERENCES `posts` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `views_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 06:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `availableblood`
--

CREATE TABLE `availableblood` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `bg` varchar(250) NOT NULL,
  `ctype` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `exp` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `price` int(250) NOT NULL,
  `qty` int(250) NOT NULL,
  `delivery` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` int(250) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `availableblood`
--

INSERT INTO `availableblood` (`id`, `firstname`, `lastname`, `bg`, `ctype`, `district`, `exp`, `image`, `price`, `qty`, `delivery`, `username`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sabir', 'hf', 'O-', 'Matooke', 'kampala', '31-2-2024', 'cart-4.jpg', 20000, 2, 1, 'justie', 'ssaaziondebeat@gmail.com ', 1, '2023-06-26 16:27:54', '2024-02-13 11:42:12'),
(3, 'Central', 'hen', 'B+', 'Bogoya', 'Luwero', '31-2-2024', 'cart-5.jpg', 30000, 0, 0, 'justie', 'fegu@mailinator.com ', 1, '2023-07-02 03:59:49', '2024-02-13 11:41:52'),
(7, 'Central', 'branch2', 'AB+', 'Ndiizi', 'kampala', 'Better', 'IMG-23.jpg', 25000, 15, 1, 'justie', 'shoukat@gmail.com ', 1, '2023-08-23 12:20:27', '2024-02-13 11:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(50) NOT NULL,
  `Bname` varchar(225) NOT NULL,
  `building` varchar(220) NOT NULL,
  `city` varchar(220) NOT NULL,
  `division` varchar(220) NOT NULL,
  `contact` varchar(220) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `update_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `Bname`, `building`, `city`, `division`, `contact`, `created_at`, `update_at`) VALUES
(0, 'jdhf', 'bdu', 'jd', 'jd', '09999999', '2024-02-14', '2024-02-14'),
(14, 'Mulago Hospital', 'mabilizi complex, kampala Road', 'kampala', 'kawempe', '0705052805', '2023-07-27', '2023-07-27'),
(15, 'Entebbe Hospital', '787', 'Wakiso', 'Entebbe', '0704565434', '2023-07-31', '2023-07-31'),
(16, 'Nsambya Hospital', 'Block 229', 'Kampala', 'Kira', '0721463892', '2023-08-04', '2023-08-04'),
(17, 'Kirudu Hospital', 'Kira', 'Kampala', 'Kamwokya', '0778945879', '2023-08-26', '2023-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE `cargo` (
  `id` int(255) NOT NULL,
  `vechile_plate` varchar(220) NOT NULL,
  `driver_name` varchar(225) NOT NULL,
  `driver_mobile` varchar(220) NOT NULL,
  `sender_name` varchar(220) NOT NULL,
  `sender_branch` varchar(225) NOT NULL,
  `sender_mobile` varchar(225) NOT NULL,
  `rev_name` varchar(225) NOT NULL,
  `rev_branch` varchar(225) NOT NULL,
  `rev_mobile` varchar(225) NOT NULL,
  `tracker_no` varchar(225) NOT NULL,
  `invoice_no` varchar(225) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `qty` int(225) NOT NULL,
  `price` int(225) NOT NULL,
  `booking_mode` varchar(225) NOT NULL,
  `mode` varchar(225) NOT NULL,
  `dept_time` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` varchar(200) NOT NULL,
  `comment` varchar(220) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id`, `vechile_plate`, `driver_name`, `driver_mobile`, `sender_name`, `sender_branch`, `sender_mobile`, `rev_name`, `rev_branch`, `rev_mobile`, `tracker_no`, `invoice_no`, `product_name`, `qty`, `price`, `booking_mode`, `mode`, `dept_time`, `address`, `status`, `comment`, `created_at`) VALUES
(8, 'UAA213J', 'TWINE.K BRIAN', '0787915712', 'Ronny Kenemmy ', 'Branch2 ', '673516899 ', '', '', '', '64FC319D7B992', 'afsd464sgs65', 'NDIIZI', 210, 210000, 'To Pay', 'Truck', '9 September, 2023', 'Kamwokya, Plot 44 Kira', 'Delivered', '', '2023-09-09'),
(8, 'UAA213J', 'TWINE.K BRIAN', '0787915712', 'Ronny Kenemmy ', 'Branch2 ', '673516899 ', '', '', '', '64FC319D7B992', 'afsd464sgs65', 'NDIIZI', 210, 210000, 'To Pay', 'Truck', '9 September, 2023', 'Kamwokya, Plot 44 Kira', 'Delivered', '', '2023-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `carimages`
--

CREATE TABLE `carimages` (
  `id` bigint(20) NOT NULL,
  `driver_id` int(225) NOT NULL,
  `carimages` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carimages`
--

INSERT INTO `carimages` (`id`, `driver_id`, `carimages`, `created_at`) VALUES
(1, 1, '1693302936_e16ae05602507ab90842.jpg', '2023-08-29 09:55:36'),
(2, 1, '1693302936_3b196fed25a3e7460363.jpg', '2023-08-29 09:55:36'),
(3, 2, '1693303684_df32aff006f1ae6d75b1.jpg', '2023-08-29 10:08:04'),
(4, 2, '1693303684_a444410e75819b49a873.jpg', '2023-08-29 10:08:04'),
(5, 2, '1693303684_6ce56ecb4cdcf7772cce.jpg', '2023-08-29 10:08:04'),
(6, 3, '1693334811_9305ba3113258fff7526.jpg', '2023-08-29 18:46:51'),
(7, 4, '1693335013_ed49f132577524c339df.jpg', '2023-08-29 18:50:13'),
(8, 4, '1693335013_e6c3e16a7c454c917866.jpg', '2023-08-29 18:50:13'),
(9, 4, '1693335013_4e8d50ea796205106752.jpg', '2023-08-29 18:50:13'),
(10, 5, '1693380610_7375d6c8d0693aad1b17.jpg', '2023-08-30 07:30:10'),
(11, 5, '1693380611_9d5acff46e0d2e1ddbbc.jpg', '2023-08-30 07:30:11'),
(12, 6, '1693382108_881a64619c2e250ce77e.jpg', '2023-08-30 07:55:08'),
(13, 6, '1693382108_3f4951c87f95406ce9ef.jpg', '2023-08-30 07:55:08'),
(14, 6, '1693382108_8110b4666d6f70da1a77.jpg', '2023-08-30 07:55:08'),
(15, 7, '1693477272_217e7554a48529e30407.jpg', '2023-08-31 10:21:12'),
(16, 8, '1693477829_f38e306b2321abcfe3f6.jpg', '2023-08-31 10:30:29'),
(17, 9, '1694080243_52e0f211bf79b43f4a63.jpg', '2023-09-07 09:50:43'),
(18, 10, '1694080517_d4a509b5a6c9e43c66aa.jpg', '2023-09-07 09:55:17'),
(1, 1, '1693302936_e16ae05602507ab90842.jpg', '2023-08-29 09:55:36'),
(2, 1, '1693302936_3b196fed25a3e7460363.jpg', '2023-08-29 09:55:36'),
(3, 2, '1693303684_df32aff006f1ae6d75b1.jpg', '2023-08-29 10:08:04'),
(4, 2, '1693303684_a444410e75819b49a873.jpg', '2023-08-29 10:08:04'),
(5, 2, '1693303684_6ce56ecb4cdcf7772cce.jpg', '2023-08-29 10:08:04'),
(6, 3, '1693334811_9305ba3113258fff7526.jpg', '2023-08-29 18:46:51'),
(7, 4, '1693335013_ed49f132577524c339df.jpg', '2023-08-29 18:50:13'),
(8, 4, '1693335013_e6c3e16a7c454c917866.jpg', '2023-08-29 18:50:13'),
(9, 4, '1693335013_4e8d50ea796205106752.jpg', '2023-08-29 18:50:13'),
(10, 5, '1693380610_7375d6c8d0693aad1b17.jpg', '2023-08-30 07:30:10'),
(11, 5, '1693380611_9d5acff46e0d2e1ddbbc.jpg', '2023-08-30 07:30:11'),
(12, 6, '1693382108_881a64619c2e250ce77e.jpg', '2023-08-30 07:55:08'),
(13, 6, '1693382108_3f4951c87f95406ce9ef.jpg', '2023-08-30 07:55:08'),
(14, 6, '1693382108_8110b4666d6f70da1a77.jpg', '2023-08-30 07:55:08'),
(15, 7, '1693477272_217e7554a48529e30407.jpg', '2023-08-31 10:21:12'),
(16, 8, '1693477829_f38e306b2321abcfe3f6.jpg', '2023-08-31 10:30:29'),
(17, 9, '1694080243_52e0f211bf79b43f4a63.jpg', '2023-09-07 09:50:43'),
(18, 10, '1694080517_d4a509b5a6c9e43c66aa.jpg', '2023-09-07 09:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'VEGETABLES', 'vegetables', '2023-06-29 20:04:03', '2023-06-29 20:04:03'),
(2, 'Fruits', 'fruits', '2023-06-29 20:06:24', '2023-06-29 20:06:24'),
(3, 'VEGETABLES', 'vegetables', '2023-06-29 20:04:03', '2023-06-29 20:04:03'),
(4, 'Fruits', 'fruits', '2023-06-29 20:06:24', '2023-06-29 20:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `category1`
--

CREATE TABLE `category1` (
  `id` int(225) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category1`
--

INSERT INTO `category1` (`id`, `type`, `created_at`) VALUES
(1, 'Matooke', '2023-08-12 10:06:53'),
(2, 'Kivuuvu', '2023-08-12 10:06:53'),
(3, 'Gonja', '2023-08-12 10:06:53'),
(4, 'Bananas', '2023-08-12 10:06:53'),
(5, 'Bogoya', '2023-08-12 10:06:53'),
(1, 'Matooke', '2023-08-12 10:06:53'),
(2, 'Kivuuvu', '2023-08-12 10:06:53'),
(3, 'Gonja', '2023-08-12 10:06:53'),
(4, 'Bananas', '2023-08-12 10:06:53'),
(5, 'Bogoya', '2023-08-12 10:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(12) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`) VALUES
(1, 'mercy', 'stateokay@gmail.com', 'helloo'),
(2, 'Henry', 'stateokay@gmail.com', 'have received'),
(3, 'joan', 'stateokay@gmail.com', 'TRYING'),
(4, 'tftftf', 'ronny@gmail.com', 'yftftyfyyyhhgfyufgyuguy'),
(5, 'Russell Marshall', 'jetaf@mailinator.com', 'Fugiat aperiam qui '),
(6, 'Ivory Patel', 'macemenilu@mailinator.com', 'Eius voluptate aute '),
(7, 'Angelica Kirkland', 'cozaxuved@mailinator.com', 'Et velit minim conse'),
(8, 'Chanda Norton', 'huxigof@mailinator.com', 'Delectus et eum nes'),
(9, 'Nicole Massey', 'doxiqivuqa@mailinator.com', 'Ipsum ad adipisci d'),
(1, 'mercy', 'stateokay@gmail.com', 'helloo'),
(2, 'Henry', 'stateokay@gmail.com', 'have received'),
(3, 'joan', 'stateokay@gmail.com', 'TRYING'),
(4, 'tftftf', 'ronny@gmail.com', 'yftftyfyyyhhgfyufgyuguy'),
(5, 'Russell Marshall', 'jetaf@mailinator.com', 'Fugiat aperiam qui '),
(6, 'Ivory Patel', 'macemenilu@mailinator.com', 'Eius voluptate aute '),
(7, 'Angelica Kirkland', 'cozaxuved@mailinator.com', 'Et velit minim conse'),
(8, 'Chanda Norton', 'huxigof@mailinator.com', 'Delectus et eum nes'),
(9, 'Nicole Massey', 'doxiqivuqa@mailinator.com', 'Ipsum ad adipisci d');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(110) NOT NULL,
  `mobile` varchar(111) NOT NULL,
  `NIN` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `subcounty` varchar(100) NOT NULL,
  `dealing` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `firstname`, `lastname`, `email`, `mobile`, `NIN`, `district`, `subcounty`, `dealing`, `created_at`) VALUES
(2, 'Wamboga', 'Brian', 'kevanz532@gmail.com', '0751795575', 'HJDGXFJGBKJ4654HF', 'lugazi', 'Entebbe', 'crops', '2023-08-05'),
(2, 'Wamboga', 'Brian', 'kevanz532@gmail.com', '0751795575', 'HJDGXFJGBKJ4654HF', 'lugazi', 'Entebbe', 'crops', '2023-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `gusers`
--

CREATE TABLE `gusers` (
  `id` int(50) NOT NULL,
  `oauth_id` varchar(220) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `username` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `profile` varchar(220) NOT NULL,
  `type` tinyint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gusers`
--

INSERT INTO `gusers` (`id`, `oauth_id`, `firstname`, `lastname`, `username`, `email`, `profile`, `type`, `created_at`, `updated_at`, `deleted`) VALUES
(6, '104260958213306514838', 'Vin', 'Tech_UG', 'Vin Tech_UG', 'ssaaziondebeat@gmail.com', 'https://lh3.googleusercontent.com/a/AAcHTtdbQsLwwSHP5FaNQdSMx1jHGaqCsOO2SNOrwLOpYwNISCY=s96-c', 0, '2023-06-26 02:22:53', '2023-06-26 02:22:53', '0000-00-00 00:00:00'),
(15, '101140587571440646561', 'Wayasoft', 'Officials', 'Wayasoft Officials', 'alexkkimera@gmail.com', 'https://lh3.googleusercontent.com/a/AAcHTtdJmqnko9Vt_mVaESUQslDMVk-PqOkDwtyR3_ZHiCDMMOw=s96-c', 0, '2023-06-28 14:17:47', '2023-06-28 14:17:47', '0000-00-00 00:00:00'),
(6, '104260958213306514838', 'Vin', 'Tech_UG', 'Vin Tech_UG', 'ssaaziondebeat@gmail.com', 'https://lh3.googleusercontent.com/a/AAcHTtdbQsLwwSHP5FaNQdSMx1jHGaqCsOO2SNOrwLOpYwNISCY=s96-c', 0, '2023-06-26 02:22:53', '2023-06-26 02:22:53', '0000-00-00 00:00:00'),
(16, '101140587571440646561', 'Wayasoft', 'Officials', 'Wayasoft Officials', 'alexkkimera@gmail.com', 'https://lh3.googleusercontent.com/a/AAcHTtdJmqnko9Vt_mVaESUQslDMVk-PqOkDwtyR3_ZHiCDMMOw=s96-c', 0, '2023-06-28 14:17:47', '2023-06-28 14:17:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(7, '2022-06-18-005419', 'App\\Database\\Migrations\\Authentication', 'default', 'App', 1687544345, 1),
(8, '2022-06-27-005500', 'App\\Database\\Migrations\\Department', 'default', 'App', 1687544345, 1),
(9, '2022-06-27-010105', 'App\\Database\\Migrations\\Posts', 'default', 'App', 1687544345, 1),
(10, '2023-04-25-081751', 'App\\Database\\Migrations\\Tblsell', 'default', 'App', 1687544346, 1),
(11, '2023-04-25-083352', 'App\\Database\\Migrations\\Tblusers', 'default', 'App', 1687544346, 1),
(12, '2023-04-25-092749', 'App\\Database\\Migrations\\Tblimage', 'default', 'App', 1687544346, 1);


-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `category_id` int(30) UNSIGNED NOT NULL,
  `user_id` int(30) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `content` text NOT NULL,
  `banner` text NOT NULL,
  `tags` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `short_description`, `content`, `banner`, `tags`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'BEST VEGETABLE PRODUCERS IN UGANDA', 'Java history is interesting to know. The history of java starts from Green Team. Java \\r\\nteam members (also known as Green Team), initiated a revolutionary task to develop \\r\\na language for digital devices such as set-top boxes, televisions etc. \\r\\nFor the green team members, it was an advance concept at that time. But, it was suited \\r\\nfor internet programming. Later, Java technology as incorporated by Netscape.', 'Java history is interesting to know. The history of java starts from Green Team. Java \\r\\nteam members (also known as Green Team), initiated a revolutionary task to develop \\r\\na language for digital devices such as set-top boxes, televisions etc. \\r\\nFor the green team members, it was an advance concept at that time. But, it was suited \\r\\nfor internet programming. Later, Java technology as incorporated by Netscape.\\r\\nJava history is interesting to know. The history of java starts from Green Team. Java \\r\\nteam members (also known as Green Team), initiated a revolutionary task to develop \\r\\na language for digital devices such as set-top boxes, televisions etc. \\r\\nFor the green team members, it was an advance concept at that time. But, it was suited \\r\\nfor internet programming. Later, Java technology as incorporated by Netscape.Java history is interesting to know. The history of java starts from Green Team. Java \\r\\nteam members (also known as Green Team), initiated a revolutionary task to develop \\r\\na language for digital devices such as set-top boxes, televisions etc. \\r\\nFor the green team members, it was an advance concept at that time. But, it was suited \\r\\nfor internet programming. Later, Java technology as incorporated by Netscape.', 'http://localhost/codelgniter/Myproject/public/uploads/GD.png', '#DNSDD #SDHF', 1, '2023-06-30 14:23:21', '2023-06-30 14:23:21'),
(2, 1, 2, 'BEST VEGETABLE PRODUCERS IN UGANDA', 'Java history is interesting to know. The history of java starts from Green Team. Java \\r\\nteam members (also known as Green Team), initiated a revolutionary task to develop \\r\\na language for digital devices such as set-top boxes, televisions etc. \\r\\nFor the green team members, it was an advance concept at that time. But, it was suited \\r\\nfor internet programming. Later, Java technology as incorporated by Netscape.', 'Java history is interesting to know. The history of java starts from Green Team. Java \\r\\nteam members (also known as Green Team), initiated a revolutionary task to develop \\r\\na language for digital devices such as set-top boxes, televisions etc. \\r\\nFor the green team members, it was an advance concept at that time. But, it was suited \\r\\nfor internet programming. Later, Java technology as incorporated by Netscape.\\r\\nJava history is interesting to know. The history of java starts from Green Team. Java \\r\\nteam members (also known as Green Team), initiated a revolutionary task to develop \\r\\na language for digital devices such as set-top boxes, televisions etc. \\r\\nFor the green team members, it was an advance concept at that time. But, it was suited \\r\\nfor internet programming. Later, Java technology as incorporated by Netscape.Java history is interesting to know. The history of java starts from Green Team. Java \\r\\nteam members (also known as Green Team), initiated a revolutionary task to develop \\r\\na language for digital devices such as set-top boxes, televisions etc. \\r\\nFor the green team members, it was an advance concept at that time. But, it was suited \\r\\nfor internet programming. Later, Java technology as incorporated by Netscape.', 'http://localhost/codelgniter/Myproject/public/uploads/GD.png', '#DNSDD #SDHF', 1, '2023-06-30 14:23:21', '2023-06-30 14:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmins`
--

CREATE TABLE `tbladmins` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` int(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `NIN` varchar(225) NOT NULL,
  `type` tinyint(50) NOT NULL COMMENT '1=admin,2=staff,3=transport',
  `created_at` datetime DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'inactive',
  `uniid` varchar(32) NOT NULL,
  `activation_date` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbladmins`
--

INSERT INTO `tbladmins` (`id`, `firstname`, `lastname`, `email`, `mobile`, `password`, `photo`, `NIN`, `type`, `created_at`, `status`, `uniid`, `activation_date`, `updated_at`, `delete_at`) VALUES
(4, 'Abra', 'Gibbs', 'fegu@mailinator.com', 1234567890, '$2y$10$3y6N2eMFTZhLnt51gBLzwueYjeXKGZGAddNP9CZMU5RyyCdPYb9kC', 'care2.jpeg', 'CMOOO2NEAgh244', 1, '2023-06-24 15:01:26', 'active', '198e60ea9c3f5b9081a216532b991b1e', '2023-06-24 15:01:26', '2023-09-04 11:55:13', '0000-00-00 00:00:00'),
(26, 'Wahib', 'Fareed', 'jamil@gmail.com', 703516899, '$2y$10$yZrWBKeJESL8lllDGLFnq.fIYv90giHHf0t/tmtC/Yq3FxmTbKiXm', 'hal.jpg', 'CMOOO2NEAH3244', 1, '2023-08-07 11:42:41', 'active', '', '2023-08-07 11:42:41', '2024-02-13 00:04:18', '0000-00-00 00:00:00'),
(28, 'Michelle', 'Khemi', 'michelle@gmail.com', 758965412, '$2y$10$4rSpxRuaG6MJVcd3FE.BX.vfaQDhxE8wYBL3CJFoa.FK/f.TicJAm', '1693816776_c0b7373ee3ca1e835947.jpg', 'CMOOO2NEAH3244', 1, '2023-09-04 11:39:36', 'inactive', '', '2023-09-04 11:39:36', '2023-09-04 11:39:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbldelivery`
--

CREATE TABLE `tbldelivery` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `phone` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `item` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `postcode` int(250) NOT NULL,
  `payment` varchar(250) DEFAULT NULL,
  `pay_stat` varchar(100) NOT NULL,
  `price` int(250) NOT NULL,
  `qty` int(250) NOT NULL,
  `notes` varchar(250) NOT NULL,
  `type` int(250) NOT NULL,
  `status` int(250) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbldelivery`
--

INSERT INTO `tbldelivery` (`id`, `firstname`, `lastname`, `image`, `phone`, `email`, `item`, `address`, `postcode`, `payment`, `pay_stat`, `price`, `qty`, `notes`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dan', 'Willy', '', 754128569, 'dan@gmail.com', 'Yellow', 'Kampla', 4564, 'Cash', 'Pending', 5000, 5, 'Ill be home later', 5, 0, '2023-08-25 19:17:20', '2023-09-07 15:13:34'),
(14, 'Ronny', 'Kenemmy', 'face12.jpg', 778511941, 'rrubankz@gmail.com', 'item', 'Kampala, Mengo SS', 0, 'Cash', 'Paid', 0, 0, 'Ill pay when you', 5, 0, '2023-08-28 19:34:40', '2023-09-07 15:54:56'),
(15, 'Ronny', 'Kenemmy', 'face12.jpg', 703516899, 'rrubankz@gmail.com', 'Bogoya', 'Entebbe, Bwebajja stage', 1595, 'Account', 'Half-Paid', 30000, 1, 'AM so Proud', 5, 0, '2023-08-28 19:37:19', '2023-09-07 15:55:00');
(
-- --------------------------------------------------------

--
-- Table structure for table `tbldonor`
--

CREATE TABLE `tbldonor` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `mobile` int(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `NIN` varchar(225) NOT NULL,
  `type` tinyint(50) NOT NULL COMMENT '1=admin,2=staff,3=transport',
  `district` varchar(40) DEFAULT NULL,
  `county` varchar(250) NOT NULL,
  `subcounty` varchar(40) DEFAULT NULL,
  `village` varchar(250) NOT NULL,
  `bg` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP(),
  `status` varchar(20) NOT NULL DEFAULT 'inactive',
  `uniid` varchar(32) NOT NULL,
  `activation_date` datetime DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `delete_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbldonor`
--

INSERT INTO `tbldonor` (`id`, `firstname`, `lastname`, `email`, `image`, `mobile`, `password`, `photo`, `NIN`, `type`, `district`, `county`, `subcounty`, `village`, `bg`, `created_at`, `status`, `uniid`, `activation_date`, `updated_at`, `delete_at`) VALUES
(1, 'm3', 'm', 'm@gmail.com', '', 4567, '', NULL, 'dfg', 4, 'dvbv', 'xcvb', 'xcv', 'xcv', 'Open this select menu', '2024-02-14 11:18:40', 'inactive', '', '2024-02-14 11:18:40', '2024-02-14 11:18:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbldrivers`
--

CREATE TABLE `tbldrivers` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `NIN` varchar(14) NOT NULL COMMENT 'National identification number',
  `licenseNo` varchar(40) NOT NULL,
  `numberplate` varchar(8) NOT NULL,
  `capacity` int(225) NOT NULL,
  `location` varchar(50) NOT NULL,
  `deliveryprice` float NOT NULL,
  `password` varchar(200) NOT NULL,
  `collection` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'inactive',
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `activation_date` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbldrivers`
--

INSERT INTO `tbldrivers` (`id`, `firstname`, `lastname`, `email`, `mobile`, `photo`, `NIN`, `licenseNo`, `numberplate`, `capacity`, `location`, `deliveryprice`, `password`, `collection`, `status`, `latitude`, `longitude`, `activation_date`, `updated_at`) VALUES
(10, 'Oscar', 'Obua', 'rrubankz@gmail.com', '0987643345', '1694080517_cb19c014974e5d280ea9.jpg', 'CM0000sdg23hdJ', 'UAA 123 J', '534233', 34444, 'MASAKA', 500, '$2y$10$V6Tpx/ayCuwOq8M43dy//Oeu2COxQKqSTanT.J5TGEXOZWHE8mLjy', 'branch2', 'active', '0.3244032', '32.5943296', '2023-09-07 12:55:17', '2023-09-09 09:43:23'),
(11, 'TWINE.K', 'BRIAN', 'twinekbrian@gmail.com', '0787915712', '1694239029_7f9ac197c5d0398cf795.jpg', 'JHDIW46465wdsU', 'LKSHKSKD545', 'UAB234', 50, 'Mbarara', 10000, '$2y$10$6YbRM.mHACmvTYzJf8n16eGFoizuryupgV2VSzv8LfoHrr68vFRx6', 'branch3', 'active', '', '', '2023-09-09 08:57:09', '2023-09-09 09:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblimage`
--

CREATE TABLE `tblimage` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `uid` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblimage`
--

INSERT INTO `tblimage` (`id`, `name`, `uid`, `created_at`, `updated_at`) VALUES
(1, '-4913592223740832642_121.jpg', '-4913592223740832642_121.jpg', '2023-06-26 16:27:54', '2023-06-26 16:27:54'),
(2, '-4913592223740832643_121.jpg', '-4913592223740832642_121.jpg', '2023-06-26 16:27:54', '2023-06-26 16:27:54'),
(3, '-4913837981769509506_121.jpg', '-4913592223740832642_121.jpg', '2023-06-26 16:27:54', '2023-06-26 16:27:54'),
(4, '-4913837981769509511_121.jpg', '-4913592223740832642_121.jpg', '2023-06-26 16:27:55', '2023-06-26 16:27:55'),
(5, '-6136245627659596932_121.jpg', '-6136245627659596932_121.jpg', '2023-06-29 19:53:13', '2023-06-29 19:53:13'),
(6, '-6136245627659596933_121.jpg', '-6136245627659596932_121.jpg', '2023-06-29 19:53:13', '2023-06-29 19:53:13'),
(7, '-6136245627659596934_121.jpg', '-6136245627659596932_121.jpg', '2023-06-29 19:53:13', '2023-06-29 19:53:13'),
(8, '-6136245627659596935_121.jpg', '-6136245627659596932_121.jpg', '2023-06-29 19:53:13', '2023-06-29 19:53:13'),
(9, '-5028308283366156942_121.jpg', '-5028308283366156942_121.jpg', '2023-07-02 03:59:49', '2023-07-02 03:59:49'),
(10, '-5028644136923802229_121.jpg', '-5028308283366156942_121.jpg', '2023-07-02 03:59:49', '2023-07-02 03:59:49'),
(11, '-5028644136923802230_121.jpg', '-5028308283366156942_121.jpg', '2023-07-02 03:59:49', '2023-07-02 03:59:49'),
(12, 'IMG-23.jpg', 'IMG-23.jpg', '2023-08-23 12:18:16', '2023-08-23 12:18:16'),
(13, 'IMG-23.jpg', 'IMG-23.jpg', '2023-08-23 12:19:05', '2023-08-23 12:19:05'),
(14, 'IMG-23.jpg', 'IMG-23.jpg', '2023-08-23 12:20:08', '2023-08-23 12:20:08'),
(15, 'IMG-23.jpg', 'IMG-23.jpg', '2023-08-23 12:20:27', '2023-08-23 12:20:27'),
(16, 'IMG-39.jpg', 'IMG-39.jpg', '2023-08-23 12:23:10', '2023-08-23 12:23:10'),
(17, 'IMG-15.jpg', 'IMG-15.jpg', '2023-08-23 13:06:41', '2023-08-23 13:06:41'),
(18, '29', '1693046150_0daf10994329253a4cae.jpg', '2023-08-26 13:35:50', '2023-08-26 13:35:50'),
(19, '26', '1692691774_962b679aaf636726b81c.jpg', '2023-08-26 13:45:24', '2023-08-26 13:45:24'),
(20, 'face1.jpg', 'face1.jpg', '2023-09-07 10:57:22', '2023-09-07 10:57:22'),
(21, 'face2.jpg', 'face1.jpg', '2023-09-07 10:57:22', '2023-09-07 10:57:22'),


-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `phone` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `bg` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `subcounty` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `qty` int(250) NOT NULL,
  `status` int(250) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`id`, `firstname`, `lastname`, `phone`, `email`, `bg`, `district`, `town`, `subcounty`, `address`, `qty`, `status`, `type`, `created_at`, `updated_at`) VALUES
(15, 'Kyeyune', 'Jamil', 703516899, 'rrubankz@gmail.com', 'O-', 'Kampala', 'Mengo', 'bb', 'mdmd', 0, 0, 5, '2023-08-28 19:37:19', '2024-02-14 12:14:13'),
(16, 'Muhwezi', 'Albert', 2147483647, 'rrubankz@gmail.com', 'AB-', 'Jinja', 'Konta', '', 'St. Paul SSS', 1, 0, 5, '2023-08-28 19:54:52', '2024-02-14 12:14:13');
-- --------------------------------------------------------

--
-- Table structure for table `tblseeker`
--

CREATE TABLE `tblseeker` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `NIN` varchar(14) NOT NULL COMMENT 'National identification number',
  `region` varchar(40) NOT NULL,
  `district` varchar(8) NOT NULL,
  `town` varchar(225) NOT NULL,
  `subcounty` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `collection` varchar(50) NOT NULL,
  `type` tinyint(50) NOT NULL COMMENT '1=admin 0=customer',
  `status` varchar(20) NOT NULL DEFAULT 'inactive',
  `activation_date` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblseeker`
--

INSERT INTO `tblseeker` (`id`, `firstname`, `lastname`, `email`, `mobile`, `photo`, `NIN`, `region`, `district`, `town`, `subcounty`, `password`, `collection`, `type`, `status`, `activation_date`, `updated_at`) VALUES
(3, 'Oren', 'Cameron', 'jifax@mailinator.com', '0756435678', 'face9.jpg', 'AETF567SV67SR4', 'Central', 'UAS456D', '100', 'B-', '$2y$10$WkiTu3yTuxcuhez6B1N.4uANB5z0MvnWr.K0k3nS/pgzwCGV0f1OW', 'Old Taxi Park', 0, 'inactive', '2023-08-29 21:46:51', '2024-01-10 16:33:12'),
(5, 'Molly3', 'Deleon', 'molly@gmail.com', '0708657456', 'face22.jpg', 'WER4455677QWWQ', 'Select', '720', '100', 'Molly3', '$2y$10$dIw2TaVQITt.uoeMwK3Bv.DWU1VeJma9lOtZseVzTKj1Mn4m08zOy', 'Open this select menu', 0, 'Inactive', '2023-08-30 10:30:10', '2024-02-14 12:52:41');
-- --------------------------------------------------------

--
-- Table structure for table `tblsell`
--

CREATE TABLE `tblsell` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `categories` varchar(250) NOT NULL,
  `region` varchar(250) NOT NULL,
  `ctype` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `price` int(250) NOT NULL,
  `qty` int(250) NOT NULL,
  `delivery` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` int(250) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` int(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `NIN` varchar(225) NOT NULL,
  `type` tinyint(50) NOT NULL COMMENT '1=admin,2=staff,3=transport',
  `created_at` datetime DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'inactive',
  `uniid` varchar(32) NOT NULL,
  `activation_date` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`id`, `firstname`, `lastname`, `email`, `mobile`, `password`, `photo`, `NIN`, `type`, `created_at`, `status`, `uniid`, `activation_date`, `updated_at`, `delete_at`) VALUES
(23, 'Analo', 'Ruby', 'thankz4askin@gmail.com', 703516899, '$2y$10$vhXrKu8OR8HIf047blGFHuj3Xjg5pn9XwJfg56cK88K0z.v0U/tUC', 'face8.jpg', '4564sdgfdg465456', 2, '2023-08-04 13:54:45', '', '', '2023-08-04 13:54:45', '2024-02-12 15:49:02', '0000-00-00 00:00:00'),
(27, 'Muhwezi', 'Albert', 'Albert@gmail.com', 780923570, '$2y$10$yZrWBKeJESL8lllDGLFnq.fIYv90giHHf0t/tmtC/Yq3FxmTbKiXm', 'face15.jpg', 'VMLK42307348', 2, '2023-08-10 15:52:46', '', '', '2023-08-10 15:52:46', '2024-01-10 16:29:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` int(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `NIN` varchar(225) NOT NULL,
  `type` tinyint(50) NOT NULL COMMENT '1=admin,2=staff,3=transport',
  `created_at` datetime DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'inactive',
  `uniid` varchar(32) NOT NULL,
  `activation_date` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstname`, `lastname`, `email`, `mobile`, `password`, `photo`, `NIN`, `type`, `created_at`, `status`, `uniid`, `activation_date`, `updated_at`, `delete_at`) VALUES
(4, 'Abra', 'Gibbs', 'fegu@mailinator.com', 1234567890, '$2y$10$3y6N2eMFTZhLnt51gBLzwueYjeXKGZGAddNP9CZMU5RyyCdPYb9kC', 'cart-3.jpg', '', 1, '2023-06-24 15:01:26', 'active', '198e60ea9c3f5b9081a216532b991b1e', '2023-06-24 15:01:26', '2023-08-28 10:56:01', '0000-00-00 00:00:00'),
(10, 'Ssaazi', 'Vincent', 'ssaaziondebeat@gmail.com', 782691672, '$2y$10$LnMm4SxVSo8Q2JthNzaStuXznYd7xxRKdSuWfPYK4S/tWDKvybTNq', 'face4.jpg', '', 0, '2023-06-26 16:20:52', 'active', 'f855da6b526b343f7e6e0d316f21782d', '2023-06-26 16:20:52', '2023-09-07 15:58:11', '0000-00-00 00:00:00'),
(19, 'Maia', 'Mccall', 'mutyruruwu@mailinator.com', 878267, '$2y$10$lLgGCL7Shv1unWRu3ekVB.RxhZfUyEntuWPRdHgrXf2OTCxcOeH6S', 'cart-3.jpg', 'CM2436M76876TG68', 3, '2023-07-30 15:45:11', 'active', '', '2023-07-30 15:45:11', '2023-08-28 10:55:48', '0000-00-00 00:00:00'),
(20, 'Gareth', 'Kidd', 'gapezejaka@mailinator.com', 25, '$2y$10$Q6MGITnipru.zWUaOigfPuddIDhoWL9aB3/O4BzxcqaukF1Uozrva', 'cart-3.jpg', 'Consectetur esse ut', 3, '2023-07-31 15:20:17', 'active', '', '2023-07-31 15:20:17', '2023-08-28 10:55:46', '0000-00-00 00:00:00'),
(26, 'Ronny', 'Kenemmy', 'rrubankz@gmail.com', 673516899, '$2y$10$Xdu6DmuHqRkSDA4tKBCvAuNH0HACFLEK3EnJ70AFVy4QzOaG9wfbS', 'face12.jpg', 'CMOOO2NEAH3244', 1, '2023-08-07 11:42:41', 'active', '', '2023-08-07 11:42:41', '2023-09-09 08:48:41', '0000-00-00 00:00:00'),
(27, 'Gid', 'Dhope', 'gid@gmail.com', 580923570, '$2y$10$yZrWBKeJESL8lllDGLFnq.fIYv90giHHf0t/tmtC/Yq3FxmTbKiXm', 'cart-3.jpg', 'VMLK42307348', 2, '2023-08-10 15:52:46', 'active', '', '2023-08-10 15:52:46', '2023-08-28 10:56:06', '0000-00-00 00:00:00');
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(2) NOT NULL DEFAULT 3,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Shannon Mcfarland', 'fegu@mailinator.com', '$2y$10$MwvrhKoySy4MqUxLk0OB4.f45WpSbL628gPl20xIppKybJbNGrZTC', 1, '2023-06-29 19:56:09', '2023-06-29 20:02:32'),
(2, 'Byron Melendez', 'fynudiva@mailinator.com', '$2y$10$CKe1CLmfrNx9sR38becxoexAPipWtqs4KQexOxiCoexDFJkOQ9eMS', 2, '2023-06-30 14:07:42', '2023-06-30 14:07:42');
--
-- Indexes for dumped tables
--

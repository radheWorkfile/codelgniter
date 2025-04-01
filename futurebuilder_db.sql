-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2025 at 10:43 AM
-- Server version: 8.0.41
-- PHP Version: 8.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futurebuilder_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `session` char(32) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `last_login` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`, `session`, `ip`, `last_login`) VALUES
(1, 'Admin', 'admin', '$2y$10$P5VMT35fdDybgJot7DPC..jn67l/uTETMy42Z0lAI8cp/Ae1zXJrG', 'admin@g.com', '2cd6bb2469174e46ff7b039db60e0d7a', '223.190.159.70', 1742984386),
(4, 'Manish', 'ishwar01', '$2y$10$P5VMT35fdDybgJot7DPC..jn67l/uTETMy42Z0lAI8cp/Ae1zXJrG', 'manish@gmail.com', 'ce813b8584df2caaf708e194a1bb5035', '103.104.183.2', 1742975344);

-- --------------------------------------------------------

--
-- Table structure for table `admin_expense`
--

CREATE TABLE `admin_expense` (
  `id` int NOT NULL,
  `expense_name` varchar(200) NOT NULL,
  `amount` decimal(7,2) NOT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int NOT NULL,
  `ad_title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ad_html` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level_earning` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `expiry_date` date NOT NULL,
  `type` enum('html','url') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'url'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_user`
--

CREATE TABLE `ad_user` (
  `id` int NOT NULL,
  `ad_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `userid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int NOT NULL,
  `coupon` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `coupon_cat` varchar(20) NOT NULL,
  `coupon_amt` decimal(11,2) NOT NULL DEFAULT '0.00',
  `status` enum('Used','Un-Used','Use Request') NOT NULL DEFAULT 'Un-Used'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_categories`
--

CREATE TABLE `coupon_categories` (
  `id` int NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `cat_description` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `donar_receiver_record`
--

CREATE TABLE `donar_receiver_record` (
  `id` int NOT NULL,
  `donar_id` int NOT NULL,
  `receiver_id` int NOT NULL,
  `receiver_no` int NOT NULL,
  `product_id` int NOT NULL,
  `amount` float(20,2) NOT NULL DEFAULT '0.00',
  `payment_mode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `donated_at` datetime NOT NULL,
  `transection_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Pending','Rejected','Approved','Decline') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  `modified_at` datetime DEFAULT NULL,
  `remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `payment_slip` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donar_receiver_record`
--

INSERT INTO `donar_receiver_record` (`id`, `donar_id`, `receiver_id`, `receiver_no`, `product_id`, `amount`, `payment_mode`, `donated_at`, `transection_id`, `status`, `modified_at`, `remark`, `payment_slip`) VALUES
(1, 1001, 1001, 1, 1, 250.00, 'upi', '2025-03-26 08:31:33', '704010203012', 'Approved', '2025-03-26 08:36:19', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-135910_Chrome.jpg'),
(2, 1001, 1001, 2, 1, 50.00, 'upi', '2025-03-26 08:32:21', '805020906030', 'Approved', '2025-03-26 08:36:29', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-135910_Chrome1.jpg'),
(3, 1001, 1001, 3, 1, 50.00, 'upi', '2025-03-26 08:33:05', '124578154870', 'Approved', '2025-03-26 08:36:40', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-135910_Chrome2.jpg'),
(4, 1001, 1001, 4, 1, 50.00, 'upi', '2025-03-26 08:33:45', '784512235612', 'Approved', '2025-03-26 08:36:48', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-135910_Chrome3.jpg'),
(5, 1001, 1001, 5, 1, 50.00, 'upi', '2025-03-26 08:34:31', '326598326532', 'Approved', '2025-03-26 08:36:57', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-135910_Chrome4.jpg'),
(6, 1001, 100, 6, 1, 50.00, 'upi', '2025-03-26 08:35:25', '192939497976', 'Approved', '2025-03-26 08:38:46', 'Approved By Company', 'uploads/payment_bill/Screenshot_20250326-135910_Chrome5.jpg'),
(7, 47282272, 1001, 1, 1, 250.00, 'upi', '2025-03-26 08:52:03', 'T2501241717549839668242', 'Approved', '2025-03-26 09:08:18', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326_141911_Chrome.jpg'),
(8, 47282272, 1001, 2, 1, 50.00, 'upi', '2025-03-26 08:52:52', 'T2501211346307659134226', 'Approved', '2025-03-26 09:08:26', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250324_185941_Chrome.jpg'),
(9, 47282272, 1001, 3, 1, 50.00, 'upi', '2025-03-26 08:56:54', 'T2501181455075653105389', 'Approved', '2025-03-26 09:08:32', 'Approved  by your upline', 'uploads/payment_bill/IMG-20250326-WA0006.jpg'),
(10, 47282272, 1001, 4, 1, 50.00, 'upi', '2025-03-26 08:57:20', 'T2501181141205127425420', 'Approved', '2025-03-26 09:08:39', 'Approved  by your upline', 'uploads/payment_bill/IMG-20250326-WA0003.jpg'),
(11, 47282272, 1001, 5, 1, 50.00, 'upi', '2025-03-26 08:57:48', 'T2502171620148188205092', 'Approved', '2025-03-26 09:08:46', 'Approved  by your upline', 'uploads/payment_bill/IMG-20250325-WA0001.jpg'),
(12, 47282272, 100, 6, 1, 50.00, 'upi', '2025-03-26 08:58:58', 'T2502041621031766901851', 'Approved', '2025-03-26 09:10:37', 'Approved By Company', 'uploads/payment_bill/Screenshot_20250324_185941_Chrome1.jpg'),
(13, 28211743, 47282272, 1, 1, 250.00, 'upi', '2025-03-26 09:26:32', '123456123451', 'Approved', '2025-03-26 09:39:27', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-145320_Chrome.jpg'),
(14, 28211743, 1001, 2, 1, 50.00, 'upi', '2025-03-26 09:27:09', '987654321987', 'Approved', '2025-03-26 09:30:41', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-145320_Chrome1.jpg'),
(15, 28211743, 1001, 3, 1, 50.00, 'upi', '2025-03-26 09:27:43', '741852963741', 'Approved', '2025-03-26 09:30:48', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-145320_Chrome2.jpg'),
(16, 28211743, 1001, 4, 1, 50.00, 'upi', '2025-03-26 09:28:25', '141815121319', 'Approved', '2025-03-26 09:30:56', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-145320_Chrome3.jpg'),
(17, 28211743, 1001, 5, 1, 50.00, 'upi', '2025-03-26 09:29:15', '115599448833', 'Approved', '2025-03-26 09:31:03', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-145320_Chrome4.jpg'),
(18, 28211743, 100, 6, 1, 50.00, 'upi', '2025-03-26 09:30:02', '998877445566', 'Approved', '2025-03-26 09:38:18', 'Approved By Company', 'uploads/payment_bill/Screenshot_20250326-145320_Chrome5.jpg'),
(19, 90577464, 28211743, 1, 1, 250.00, 'upi', '2025-03-26 09:51:34', '76543213578', 'Approved', '2025-03-26 09:58:40', 'Approved  by your upline', 'uploads/payment_bill/IMG-20250326-WA0015.jpg'),
(20, 90577464, 47282272, 2, 1, 50.00, 'upi', '2025-03-26 09:52:01', '98766543324679', 'Approved', '2025-03-26 09:55:59', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326_142907_Chrome.jpg'),
(21, 90577464, 1001, 3, 1, 50.00, 'upi', '2025-03-26 09:52:33', '5544678996yree', 'Approved', '2025-03-26 09:59:33', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326_135648_Chrome.jpg'),
(22, 90577464, 1001, 4, 1, 50.00, 'upi', '2025-03-26 09:53:27', '355678900ouytr', 'Approved', '2025-03-26 09:59:41', 'Approved  by your upline', 'uploads/payment_bill/IMG-20250326-WA0018.jpg'),
(23, 90577464, 1001, 5, 1, 50.00, 'upi', '2025-03-26 09:53:53', '88799876644678o', 'Approved', '2025-03-26 09:59:51', 'Approved  by your upline', 'uploads/payment_bill/IMG-20250326-WA0017.jpg'),
(24, 90577464, 100, 6, 1, 50.00, 'upi', '2025-03-26 09:54:22', '246788o6543678', 'Approved', '2025-03-26 10:00:59', 'Approved By Company', 'uploads/payment_bill/Screenshot_20250326_142405_Chrome.jpg'),
(25, 14336098, 90577464, 1, 1, 250.00, 'upi', '2025-03-26 10:08:59', '115599448899', 'Approved', '2025-03-26 10:23:24', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-153555_Chrome.jpg'),
(26, 14336098, 28211743, 2, 1, 50.00, 'upi', '2025-03-26 10:09:41', '461379461312', 'Approved', '2025-03-26 10:18:24', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-153555_Chrome1.jpg'),
(27, 14336098, 47282272, 3, 1, 50.00, 'upi', '2025-03-26 10:12:04', '161312141512', 'Approved', '2025-03-26 10:22:44', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-153555_Chrome2.jpg'),
(28, 14336098, 1001, 4, 1, 50.00, 'upi', '2025-03-26 10:13:48', '885544772233', 'Approved', '2025-03-26 10:19:02', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-153555_Chrome3.jpg'),
(29, 14336098, 1001, 5, 1, 50.00, 'upi', '2025-03-26 10:14:55', '332255667788', 'Approved', '2025-03-26 10:19:13', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326-153555_Chrome4.jpg'),
(30, 14336098, 100, 6, 1, 50.00, 'upi', '2025-03-26 10:16:46', '554466778899', 'Approved', '2025-03-26 10:20:30', 'Approved By Company', 'uploads/payment_bill/Screenshot_20250326-153555_Chrome5.jpg'),
(31, 46115816, 14336098, 1, 1, 250.00, 'upi', '2025-03-26 10:34:40', '7654678ou65', 'Pending', NULL, '', 'uploads/payment_bill/Screenshot_20250326_160044_Chrome.jpg'),
(32, 46115816, 90577464, 2, 1, 50.00, 'upi', '2025-03-26 10:35:05', '5433564466744', 'Approved', '2025-03-26 10:39:05', 'Approved  by your upline', 'uploads/payment_bill/IMG-20250326-WA0022.jpg'),
(33, 46115816, 28211743, 3, 1, 50.00, 'upi', '2025-03-26 10:35:28', '8778976688766', 'Pending', NULL, '', 'uploads/payment_bill/IMG-20250326-WA0024.jpg'),
(34, 46115816, 47282272, 4, 1, 50.00, 'upi', '2025-03-26 10:35:54', '6667888654578', 'Approved', '2025-03-26 10:38:32', 'Approved  by your upline', 'uploads/payment_bill/Screenshot_20250326_151700_Chrome.jpg'),
(35, 46115816, 1001, 5, 1, 50.00, 'upi', '2025-03-26 10:36:19', '3211332353235', 'Pending', NULL, '', 'uploads/payment_bill/Screenshot_20250326_143542_Chrome.jpg'),
(36, 46115816, 100, 6, 1, 50.00, 'upi', '2025-03-26 10:36:45', '998998987665', 'Pending', NULL, '', 'uploads/payment_bill/IMG-20250326-WA0009.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int NOT NULL,
  `sender_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `donation_amount` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `receiver_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `trid` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tdate` date DEFAULT NULL,
  `status` enum('Sent','Accepted','Waiting') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Sent',
  `donation_pack` int NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation_package`
--

CREATE TABLE `donation_package` (
  `id` int NOT NULL,
  `donation_level` int NOT NULL,
  `plan_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sponsor_income` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `position_income` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `donation_amount` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0',
  `donation_qty` int NOT NULL,
  `expiry_duration` int NOT NULL DEFAULT '2' COMMENT 'in days'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `earning`
--

CREATE TABLE `earning` (
  `id` int NOT NULL,
  `userid` varchar(20) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `profit` float(20,2) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ref_id` varchar(20) NOT NULL DEFAULT 'N/A',
  `date` date NOT NULL,
  `pair_match` int NOT NULL DEFAULT '0',
  `secret` varchar(15) NOT NULL DEFAULT '0',
  `product_id` int NOT NULL,
  `status` enum('Paid','Pending') NOT NULL DEFAULT 'Pending',
  `sponsor_number` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `earning`
--

INSERT INTO `earning` (`id`, `userid`, `amount`, `profit`, `type`, `ref_id`, `date`, `pair_match`, `secret`, `product_id`, `status`, `sponsor_number`) VALUES
(1, '1001', 250.00, 0.00, 'Donation Income', '1001', '2025-03-26', 0, '1', 1, 'Paid', 99999999),
(2, '1001', 50.00, 0.00, 'Donation Income', '1001', '2025-03-26', 0, '2', 1, 'Paid', 99999999),
(3, '1001', 50.00, 0.00, 'Donation Income', '1001', '2025-03-26', 0, '3', 1, 'Paid', 99999999),
(4, '1001', 50.00, 0.00, 'Donation Income', '1001', '2025-03-26', 0, '4', 1, 'Paid', 99999999),
(5, '1001', 50.00, 0.00, 'Donation Income', '1001', '2025-03-26', 0, '5', 1, 'Paid', 99999999),
(6, '1001', 250.00, 0.00, 'Donation Income', '47282272', '2025-03-26', 0, '7', 1, 'Paid', 99999999),
(7, '1001', 50.00, 0.00, 'Donation Income', '47282272', '2025-03-26', 0, '8', 1, 'Paid', 99999999),
(8, '1001', 50.00, 0.00, 'Donation Income', '47282272', '2025-03-26', 0, '9', 1, 'Paid', 99999999),
(9, '1001', 50.00, 0.00, 'Donation Income', '47282272', '2025-03-26', 0, '10', 1, 'Paid', 99999999),
(10, '1001', 50.00, 0.00, 'Donation Income', '47282272', '2025-03-26', 0, '11', 1, 'Paid', 99999999),
(11, '1001', 50.00, 0.00, 'Donation Income', '28211743', '2025-03-26', 0, '14', 1, 'Paid', 99999999),
(12, '1001', 50.00, 0.00, 'Donation Income', '28211743', '2025-03-26', 0, '15', 1, 'Paid', 99999999),
(13, '1001', 50.00, 0.00, 'Donation Income', '28211743', '2025-03-26', 0, '16', 1, 'Paid', 99999999),
(14, '1001', 50.00, 0.00, 'Donation Income', '28211743', '2025-03-26', 0, '17', 1, 'Paid', 99999999),
(15, '47282272', 250.00, 0.00, 'Donation Income', '28211743', '2025-03-26', 0, '13', 1, 'Paid', 99999999),
(16, '47282272', 50.00, 0.00, 'Donation Income', '90577464', '2025-03-26', 0, '20', 1, 'Paid', 99999999),
(17, '28211743', 250.00, 0.00, 'Donation Income', '90577464', '2025-03-26', 0, '19', 1, 'Paid', 99999999),
(18, '1001', 50.00, 0.00, 'Donation Income', '90577464', '2025-03-26', 0, '21', 1, 'Paid', 99999999),
(19, '1001', 50.00, 0.00, 'Donation Income', '90577464', '2025-03-26', 0, '22', 1, 'Paid', 99999999),
(20, '1001', 50.00, 0.00, 'Donation Income', '90577464', '2025-03-26', 0, '23', 1, 'Paid', 99999999),
(21, '28211743', 50.00, 0.00, 'Donation Income', '14336098', '2025-03-26', 0, '26', 1, 'Paid', 99999999),
(22, '1001', 50.00, 0.00, 'Donation Income', '14336098', '2025-03-26', 0, '28', 1, 'Paid', 99999999),
(23, '1001', 50.00, 0.00, 'Donation Income', '14336098', '2025-03-26', 0, '29', 1, 'Paid', 99999999),
(24, '47282272', 50.00, 0.00, 'Donation Income', '14336098', '2025-03-26', 0, '27', 1, 'Paid', 99999999),
(25, '90577464', 250.00, 0.00, 'Donation Income', '14336098', '2025-03-26', 0, '25', 1, 'Paid', 99999999),
(26, '47282272', 50.00, 0.00, 'Donation Income', '46115816', '2025-03-26', 0, '34', 1, 'Paid', 99999999),
(27, '90577464', 50.00, 0.00, 'Donation Income', '46115816', '2025-03-26', 0, '32', 1, 'Paid', 99999999);

-- --------------------------------------------------------

--
-- Table structure for table `epin`
--

CREATE TABLE `epin` (
  `id` int NOT NULL,
  `epin` varchar(20) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `issue_to` varchar(20) NOT NULL,
  `generate_time` date NOT NULL,
  `generated_by` varchar(15) NOT NULL DEFAULT 'Admin',
  `transfer_by` varchar(20) DEFAULT NULL,
  `used_by` varchar(20) DEFAULT NULL,
  `transfer_time` date DEFAULT NULL,
  `used_time` date DEFAULT NULL,
  `status` enum('Used','Un-used') NOT NULL DEFAULT 'Un-used',
  `type` enum('Single Use','Multi Use') NOT NULL DEFAULT 'Single Use'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `epin_request`
--

CREATE TABLE `epin_request` (
  `id` int NOT NULL,
  `requested_by` int NOT NULL,
  `epin_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `epin_qty` int NOT NULL,
  `total_amount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `screenshot_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `epin` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1' COMMENT '0 false receipt|1 epin not generated | 2 epin generated',
  `request_date` datetime NOT NULL,
  `epin_generate_date` datetime DEFAULT NULL,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `epin_transfer_reports`
--

CREATE TABLE `epin_transfer_reports` (
  `id` int NOT NULL,
  `transfer_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `transfer_to` int NOT NULL,
  `quantity` int NOT NULL,
  `amount` float(20,2) NOT NULL,
  `total_amount` float(20,2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fix_income`
--

CREATE TABLE `fix_income` (
  `id` int NOT NULL,
  `direct_income` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level_income` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `binary_income` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flexible_income`
--

CREATE TABLE `flexible_income` (
  `id` int NOT NULL,
  `income_name` varchar(200) NOT NULL,
  `income_duration` int NOT NULL DEFAULT '0' COMMENT 'within how many days he should achieve this',
  `A` int NOT NULL DEFAULT '0',
  `B` int NOT NULL DEFAULT '0',
  `C` int NOT NULL DEFAULT '0',
  `D` int NOT NULL DEFAULT '0',
  `E` int NOT NULL DEFAULT '0',
  `amount` decimal(11,2) NOT NULL,
  `based_on` enum('Member','PV') NOT NULL DEFAULT 'Member'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `franchisee`
--

CREATE TABLE `franchisee` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `business_name` varchar(200) DEFAULT NULL,
  `country` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `last_login` date NOT NULL,
  `last_login_ip` varchar(50) NOT NULL DEFAULT '0:0:0:0',
  `session` char(32) NOT NULL,
  `status` enum('Active','Inactive','Terminated') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `franchisee_stock`
--

CREATE TABLE `franchisee_stock` (
  `id` int NOT NULL,
  `franchisee_id` varchar(20) NOT NULL,
  `product_id` int NOT NULL,
  `available_qty` int NOT NULL DEFAULT '0',
  `sold_qty` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `franchisee_stock_sale_bill`
--

CREATE TABLE `franchisee_stock_sale_bill` (
  `id` int NOT NULL,
  `stock_data` varchar(500) NOT NULL,
  `stock_data_price` varchar(500) DEFAULT NULL,
  `fran_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `userid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `gap_commission_setting`
--

CREATE TABLE `gap_commission_setting` (
  `id` int NOT NULL,
  `total_pv` int NOT NULL DEFAULT '0',
  `amount` decimal(11,2) NOT NULL,
  `income_name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` int NOT NULL,
  `userid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pack_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `status` enum('Pending','Active','Expired') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investment_pack`
--

CREATE TABLE `investment_pack` (
  `id` int NOT NULL,
  `pack_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `direct_income` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `level_income` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `matching_income` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `capping` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `roi` decimal(11,2) NOT NULL,
  `roi_frequency` int NOT NULL DEFAULT '0',
  `roi_limit` int NOT NULL DEFAULT '0',
  `based` enum('Percent','Fixed') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Percent' COMMENT 'Calculation Based On'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int NOT NULL,
  `invoice_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `userid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'N/A',
  `invoice_data` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'php array serialize, name=>amount=>tax',
  `invoice_data_tax` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `invoice_data_qty` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company_address` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_to_address` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `total_amt` decimal(11,2) NOT NULL DEFAULT '0.00',
  `paid_amt` decimal(11,2) NOT NULL DEFAULT '0.00',
  `date` date NOT NULL,
  `user_type` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Other'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int NOT NULL,
  `userid` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level1` int NOT NULL DEFAULT '0',
  `level2` int NOT NULL DEFAULT '0',
  `level3` int NOT NULL DEFAULT '0',
  `level4` int NOT NULL DEFAULT '0',
  `level5` int NOT NULL DEFAULT '0',
  `level6` int NOT NULL DEFAULT '0',
  `level7` int NOT NULL DEFAULT '0',
  `level8` int NOT NULL DEFAULT '0',
  `level9` int NOT NULL DEFAULT '0',
  `level10` int NOT NULL DEFAULT '0',
  `level11` int NOT NULL DEFAULT '0',
  `level12` int NOT NULL DEFAULT '0',
  `level13` int NOT NULL DEFAULT '0',
  `level14` int NOT NULL DEFAULT '0',
  `level15` int NOT NULL DEFAULT '0',
  `level16` int NOT NULL DEFAULT '0',
  `level17` int NOT NULL DEFAULT '0',
  `level18` int NOT NULL DEFAULT '0',
  `level19` int NOT NULL DEFAULT '0',
  `level20` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `userid`, `level1`, `level2`, `level3`, `level4`, `level5`, `level6`, `level7`, `level8`, `level9`, `level10`, `level11`, `level12`, `level13`, `level14`, `level15`, `level16`, `level17`, `level18`, `level19`, `level20`) VALUES
(1, '1001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `level_wise_income`
--

CREATE TABLE `level_wise_income` (
  `id` int NOT NULL,
  `income_name` varchar(200) NOT NULL,
  `income_duration` int NOT NULL DEFAULT '0' COMMENT 'within how many days he should achieve this',
  `level_no` int NOT NULL DEFAULT '1',
  `total_member` int NOT NULL DEFAULT '1',
  `amount` decimal(11,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `level_wise_list`
--

CREATE TABLE `level_wise_list` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `downline` int NOT NULL,
  `level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level_wise_list`
--

INSERT INTO `level_wise_list` (`id`, `userid`, `downline`, `level`) VALUES
(1, 1001, 47282272, 1),
(2, 47282272, 28211743, 1),
(3, 1001, 28211743, 2),
(4, 28211743, 90577464, 1),
(5, 47282272, 90577464, 2),
(6, 1001, 90577464, 3),
(7, 90577464, 14336098, 1),
(8, 28211743, 14336098, 2),
(9, 47282272, 14336098, 3),
(10, 1001, 14336098, 4),
(11, 14336098, 46115816, 1),
(12, 90577464, 46115816, 2),
(13, 28211743, 46115816, 3),
(14, 47282272, 46115816, 4),
(15, 1001, 46115816, 5);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int NOT NULL,
  `userid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `log` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` enum('Admin','User','Franchisee','Other') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Admin',
  `ip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `show_password` varchar(255) NOT NULL,
  `trnsection_pin` varchar(6) DEFAULT NULL,
  `sponsor` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `signup_package` varchar(20) DEFAULT NULL,
  `epin` varchar(20) DEFAULT NULL,
  `address` varchar(400) NOT NULL,
  `join_time` datetime NOT NULL,
  `placement_leg` enum('A','B','C','D','E') NOT NULL DEFAULT 'A',
  `A` int NOT NULL DEFAULT '0',
  `B` int NOT NULL DEFAULT '0',
  `C` int NOT NULL DEFAULT '0',
  `D` int NOT NULL DEFAULT '0',
  `E` int NOT NULL DEFAULT '0',
  `total_a` int NOT NULL DEFAULT '0',
  `total_b` int NOT NULL DEFAULT '0',
  `total_c` int NOT NULL DEFAULT '0',
  `total_d` int NOT NULL DEFAULT '0',
  `total_e` int NOT NULL DEFAULT '0',
  `paid_a` int NOT NULL DEFAULT '0',
  `paid_b` int NOT NULL DEFAULT '0',
  `paid_c` int NOT NULL DEFAULT '0',
  `paid_d` int NOT NULL DEFAULT '0',
  `paid_e` int NOT NULL DEFAULT '0',
  `rank` varchar(30) NOT NULL DEFAULT 'Member',
  `registration_ip` varchar(20) NOT NULL,
  `session` char(32) NOT NULL,
  `last_login` int NOT NULL DEFAULT '0',
  `last_login_ip` varchar(20) NOT NULL DEFAULT 'NA',
  `topup` float(20,2) NOT NULL DEFAULT '0.00',
  `mypv` int NOT NULL DEFAULT '0',
  `total_a_pv` varchar(5) NOT NULL DEFAULT '0',
  `total_b_pv` varchar(5) NOT NULL DEFAULT '0',
  `total_c_pv` varchar(10) NOT NULL DEFAULT '0',
  `total_d_pv` varchar(10) NOT NULL DEFAULT '0',
  `total_e_pv` varchar(10) NOT NULL DEFAULT '0',
  `my_img` text COMMENT ' ',
  `status` enum('Block','Active','Suspend','') NOT NULL DEFAULT 'Active',
  `total_a_matching_incm` varchar(11) NOT NULL DEFAULT '0',
  `total_b_matching_incm` varchar(11) NOT NULL DEFAULT '0',
  `total_c_matching_incm` varchar(11) NOT NULL DEFAULT '0',
  `total_d_matching_incm` varchar(15) NOT NULL DEFAULT '0',
  `total_e_matching_incm` varchar(15) NOT NULL DEFAULT '0',
  `my_business` varchar(10) NOT NULL DEFAULT '0',
  `total_a_investment` varchar(20) NOT NULL DEFAULT '0',
  `total_b_investment` varchar(20) NOT NULL DEFAULT '0',
  `paid_a_matching_incm` varchar(10) NOT NULL DEFAULT '0',
  `paid_b_matching_incm` varchar(10) NOT NULL DEFAULT '0',
  `secret` int NOT NULL DEFAULT '0',
  `gift_level` int NOT NULL DEFAULT '0',
  `eligible_profit_sponsor_income` int NOT NULL COMMENT 'direct sponsor profit income eligibility',
  `live_status` int NOT NULL DEFAULT '0',
  `salary_income` int NOT NULL DEFAULT '0',
  `leadership_income` int NOT NULL DEFAULT '0',
  `royalty_income` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `phone`, `username`, `password`, `show_password`, `trnsection_pin`, `sponsor`, `position`, `signup_package`, `epin`, `address`, `join_time`, `placement_leg`, `A`, `B`, `C`, `D`, `E`, `total_a`, `total_b`, `total_c`, `total_d`, `total_e`, `paid_a`, `paid_b`, `paid_c`, `paid_d`, `paid_e`, `rank`, `registration_ip`, `session`, `last_login`, `last_login_ip`, `topup`, `mypv`, `total_a_pv`, `total_b_pv`, `total_c_pv`, `total_d_pv`, `total_e_pv`, `my_img`, `status`, `total_a_matching_incm`, `total_b_matching_incm`, `total_c_matching_incm`, `total_d_matching_incm`, `total_e_matching_incm`, `my_business`, `total_a_investment`, `total_b_investment`, `paid_a_matching_incm`, `paid_b_matching_incm`, `secret`, `gift_level`, `eligible_profit_sponsor_income`, `live_status`, `salary_income`, `leadership_income`, `royalty_income`) VALUES
(1001, 'Master User', 'master@gmail.com', '9905174054', '1001', '$2y$10$SC9tqj.55Wldxd9ACGm0gOpPo/Id8tnh3W9SbroTPjTvskjYXq1Qu', '123456', '123456', '', '', '1', '', 'Patna', '2024-09-24 00:00:00', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Silver', '', '3cd1587f66341421ded5670bd11434ee', 1742985707, '223.228.224.83', 500.00, 0, '0', '', '', '', '', 'uploads/member/future_logo.png', 'Active', '0', '0', '', '', '', '0', '0', '', '0', '0', 1, 1, 0, 1, 0, 0, 0),
(14336098, 'AJIT RANJAN', 'ajitranjanbhadaur@gmail.com', '7739112563', '1742983549', '$2y$10$nUF9YUMnlhIkVHq99oM93eQLFRdU3Gpd6ABHFro4NFzO551IhOmnK', '123456', NULL, '90577464', '90577464', '1', NULL, 'VillagePostpsBhadaur District Patna Bihar<br/>', '2025-03-26 10:05:49', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Silver', '223.190.159.70', '23ba2e28056fee8fea758f275d58f66a', 1742984590, '223.190.159.70', 500.00, 0, '0', '0', '0', '0', '0', NULL, 'Active', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 1, 0, 0, 0),
(28211743, 'RUPA RANJAN', 'ajitranjanllb@gmail.com', '7991162393', '1742980992', '$2y$10$snhEmJF2dlil7aIyVHVwr.sBnxlfHvFUOxdQiWc6nEEoR6AxzjSh.', '123456', NULL, '47282272', '47282272', '1', NULL, 'VillagePostpsBhadaur District Patna Bihar<br/>', '2025-03-26 09:23:12', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Silver', '223.190.159.70', '043654ca6c23ee562cd0f03f22175ff9', 1742984281, '223.190.159.70', 500.00, 0, '0', '0', '0', '0', '0', NULL, 'Active', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 1, 0, 0, 0),
(46115816, 'JAWAHAR LAL SAH', 'jawaharlal9576149577@gmail.com', '9576149477', '1742985028', '$2y$10$LGlU1HnieSfCCUPM8fFq1.mOj.GzWwSo8Cg4PAhS6xydHYg73jSrW', '1234567', NULL, '14336098', '14336098', '0', NULL, 'Atpost chapri Dist godda<br/>', '2025-03-26 10:30:28', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Member', '223.228.224.83', '31637088dccae8c4b4d2ace58beb9d00', 1742985577, '223.228.224.83', 0.00, 0, '0', '0', '0', '0', '0', NULL, 'Active', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 1, 0, 0, 0),
(47282272, 'NIRBHAY KUMAR SAH', 'nirbhaykrsah813208@gmail.com', '8434791460', '1742978932', '$2y$10$0j.Pc52s83PItxrBkPZ4WuXfiFk0QR2mPytiGP4HSBgWe7T/OZsPC', '987654', NULL, '1001', '1001', '1', NULL, 'Atpost chapri Dist godda<br/>', '2025-03-26 08:48:52', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Silver', '223.228.254.58', '2029adde05c40ad83ffb1615fd863d76', 1742985491, '223.228.224.83', 500.00, 0, '0', '0', '0', '0', '0', NULL, 'Active', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 1, 0, 0, 0),
(90577464, 'MANISHA DEVI', 'abhaykrsah816116@gmail.com', '9229488920', '1742982416', '$2y$10$hI0cdKIss1Ep9yI39aX2sekYjzgPtKjB/JmL3qvfijZ/4EEP963r6', '1234567', NULL, '28211743', '28211743', '1', NULL, 'Atpost chapri Dist godda<br/>', '2025-03-26 09:46:56', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Silver', '223.228.224.178', '19d3c8dc6143f79c95a0d9e635426c92', 1742985527, '223.228.224.83', 500.00, 0, '0', '0', '0', '0', '0', NULL, 'Active', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_feedback`
--

CREATE TABLE `member_feedback` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `member_img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `feedback` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Unpublished','Published') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Unpublished',
  `date` date DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_profile`
--

CREATE TABLE `member_profile` (
  `id` int NOT NULL,
  `userid` varchar(20) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `tax_no` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `aadhar_no` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `account_holder_name` varchar(50) NOT NULL,
  `bank_ac_no` varchar(60) DEFAULT '',
  `bank_name` varchar(200) DEFAULT '',
  `bank_ifsc` varchar(30) DEFAULT '',
  `bank_branch` varchar(70) DEFAULT '',
  `btc_address` varchar(70) DEFAULT '',
  `tcc_address` varchar(70) DEFAULT '',
  `nominee_name` varchar(120) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `nominee_add` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `nominee_relation` varchar(100) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gstin` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `qr_code` text NOT NULL,
  `id_proof` varchar(200) DEFAULT NULL,
  `add_proof` varchar(200) DEFAULT NULL,
  `state_id` int NOT NULL,
  `city_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `member_profile`
--

INSERT INTO `member_profile` (`id`, `userid`, `gender`, `tax_no`, `aadhar_no`, `account_holder_name`, `bank_ac_no`, `bank_name`, `bank_ifsc`, `bank_branch`, `btc_address`, `tcc_address`, `nominee_name`, `nominee_add`, `nominee_relation`, `date_of_birth`, `gstin`, `qr_code`, `id_proof`, `add_proof`, `state_id`, `city_id`) VALUES
(1, '1001', NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 1, 1),
(2, '47282272', 'Male', NULL, NULL, 'Nirbhay Kumar Sah', '43269332431', 'State bank of india', 'SBIN0004897', 'Thakur gangti', 'At+post chapri Dist godda', '', 'Manisha Devi', 'At+post chapri Dist godda', 'Mother.', '0000-00-00', NULL, '', NULL, '49826ffdefd33913eb44ba2c9f59bf76.jpg', 0, 0),
(3, '28211743', NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 0, 0),
(4, '90577464', 'Female', NULL, NULL, 'Manisha Devi', '2586000100052782', 'Punjab National Bank.', 'Punb0258600', 'Chanda', '9576149477', '', 'Abhay Kumar Sah', 'At+post chapri Dist godda', 'Son', '0000-00-00', NULL, '', NULL, '0acb44cb8855151060a78f871c43660a.jpg', 0, 0),
(5, '14336098', NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 0, 0),
(6, '46115816', NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `mem_id` int NOT NULL,
  `message` longtext NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by_user_type_id` int NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `description` text NOT NULL,
  `popup_content` varchar(111) NOT NULL,
  `status` int NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `description`, `popup_content`, `status`, `update_date`) VALUES
(1, '<p>You are warm greetings and welcome to India&#39;s best helping platform Future Builder.</p>', '', 1, '2021-07-20'),
(2, '<p>Hello Sir</p>', '', 1, '2024-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `other_wallet`
--

CREATE TABLE `other_wallet` (
  `id` int NOT NULL,
  `userid` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `balance` decimal(11,2) NOT NULL,
  `type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_wallet`
--

INSERT INTO `other_wallet` (`id`, `userid`, `balance`, `type`) VALUES
(1, '1001', 0.00, 'Default'),
(2, '47282272', 0.00, 'Default'),
(3, '28211743', 0.00, 'Default'),
(4, '90577464', 0.00, 'Default'),
(5, '14336098', 0.00, 'Default'),
(6, '46115816', 0.00, 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `pending_wallet`
--

CREATE TABLE `pending_wallet` (
  `id` int NOT NULL,
  `userid` varchar(100) NOT NULL,
  `balance` varchar(20) NOT NULL,
  `status` enum('Paid','Pending') NOT NULL DEFAULT 'Pending',
  `txn_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `category` varchar(20) NOT NULL,
  `prod_price` varchar(15) NOT NULL,
  `profit` float(20,2) NOT NULL,
  `dealer_price` decimal(11,2) NOT NULL,
  `prod_desc` text NOT NULL,
  `pv` varchar(20) NOT NULL DEFAULT '0',
  `qty` int NOT NULL DEFAULT '-1',
  `gst` decimal(11,2) NOT NULL,
  `image` varchar(200) NOT NULL,
  `show_on_regform` enum('Yes','No') NOT NULL DEFAULT 'No',
  `direct_income` decimal(11,2) DEFAULT '0.00',
  `level_income` varchar(200) DEFAULT NULL,
  `matching_income` decimal(11,2) DEFAULT '0.00',
  `capping` decimal(11,2) DEFAULT '0.00',
  `roi` decimal(11,2) DEFAULT '0.00',
  `roi_frequency` int DEFAULT NULL,
  `roi_limit` int DEFAULT NULL,
  `sold_qty` int NOT NULL DEFAULT '0',
  `status` enum('Selling','Not-Selling') NOT NULL DEFAULT 'Selling'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `prod_name`, `category`, `prod_price`, `profit`, `dealer_price`, `prod_desc`, `pv`, `qty`, `gst`, `image`, `show_on_regform`, `direct_income`, `level_income`, `matching_income`, `capping`, `roi`, `roi_frequency`, `roi_limit`, `sold_qty`, `status`) VALUES
(1, 'Silver', '1', '500', 0.00, 0.00, '', '', -1, 0.00, 'default.jpg', 'Yes', NULL, '', NULL, NULL, 0.00, 0, 0, 0, 'Selling'),
(2, 'Gold', '1', '1000', 0.00, 0.00, '', '', -1, 0.00, 'default.jpg', 'Yes', NULL, '', NULL, NULL, 0.00, 0, 0, 0, 'Selling'),
(3, 'Platinum', '1', '2000', 0.00, 0.00, '', '', -1, 0.00, 'default.jpg', 'Yes', NULL, '', NULL, NULL, 0.00, 0, 0, 0, 'Selling'),
(4, 'Emerald', '1', '4000', 0.00, 0.00, '', '', -1, 0.00, 'default.jpg', 'Yes', NULL, '', NULL, NULL, 0.00, 0, 0, 0, 'Selling'),
(5, 'Saphire', '1', '8000', 0.00, 0.00, '', '', -1, 0.00, 'default.jpg', 'Yes', NULL, '', NULL, NULL, 0.00, 0, 0, 0, 'Selling'),
(6, 'Ruby', '1', '16000', 0.00, 0.00, '', '', -1, 0.00, 'default.jpg', 'Yes', NULL, '', NULL, NULL, 0.00, 0, 0, 0, 'Selling'),
(7, 'Diamond', '1', '32000', 0.00, 0.00, '', '', -1, 0.00, 'default.jpg', 'Yes', NULL, '', NULL, NULL, 0.00, 0, 0, 0, 'Selling'),
(8, 'Crown', '1', '64000', 0.00, 0.00, '', '', -1, 0.00, 'default.jpg', 'Yes', NULL, '', NULL, NULL, 0.00, 0, 0, 0, 'Selling');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `parent_cat` varchar(20) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `cat_name`, `parent_cat`, `description`) VALUES
(1, 'Package', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_sale`
--

CREATE TABLE `product_sale` (
  `id` int NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `userid` varchar(10) NOT NULL COMMENT 'who purchased the product',
  `status` enum('Completed','Processing') NOT NULL DEFAULT 'Processing',
  `franchisee_id` varchar(15) NOT NULL DEFAULT 'Admin',
  `cost` decimal(11,2) NOT NULL,
  `date` date NOT NULL,
  `deliver_date` date DEFAULT NULL,
  `tid` varchar(250) NOT NULL DEFAULT 'N/A',
  `qty` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int NOT NULL,
  `bill_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purchased_data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_copy` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `supplier` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bill_amt` decimal(11,2) NOT NULL,
  `paid_amt` decimal(11,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rank_system`
--

CREATE TABLE `rank_system` (
  `id` int NOT NULL,
  `rank_name` varchar(200) NOT NULL,
  `rank_duration` int NOT NULL DEFAULT '0' COMMENT 'within how many days he should achieve this',
  `A` int NOT NULL DEFAULT '0',
  `B` int NOT NULL DEFAULT '0',
  `C` int NOT NULL DEFAULT '0',
  `D` int NOT NULL DEFAULT '0',
  `E` int NOT NULL DEFAULT '0',
  `based_on` enum('Member','PV') NOT NULL DEFAULT 'Member'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `rank_system`
--

INSERT INTO `rank_system` (`id`, `rank_name`, `rank_duration`, `A`, `B`, `C`, `D`, `E`, `based_on`) VALUES
(1, 'Silver Distributer', 0, 25, 25, 0, 0, 0, 'Member'),
(2, 'Gold Distributer', 0, 50, 50, 0, 0, 0, 'Member'),
(3, 'Ruby Distributor', 0, 125, 125, 0, 0, 0, 'Member'),
(4, 'Platinum Distributor', 0, 250, 250, 0, 0, 0, 'Member'),
(5, 'Pearl Distributor', 0, 500, 500, 0, 0, 0, 'Member'),
(6, 'Diamond Distributor', 0, 1250, 1250, 0, 0, 0, 'Member'),
(7, 'Dobule Diamond Distributor', 0, 2500, 2500, 0, 0, 0, 'Member'),
(8, 'Crown Distributor', 0, 5000, 5000, 0, 0, 0, 'Member'),
(9, 'Executive Crown Distributor', 0, 10000, 10000, 0, 0, 0, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `recharge_entry`
--

CREATE TABLE `recharge_entry` (
  `id` int NOT NULL,
  `userid` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `service_type` enum('Mobile','DTH','Data Card','Utility Bill') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Mobile',
  `recharge_no` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `time` int NOT NULL,
  `status` enum('Pending','Completed') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  `area` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `operator` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trnid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int NOT NULL,
  `reward_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `userid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `status` enum('Delivered','Pending') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  `paid_date` date NOT NULL,
  `tid` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reward_setting`
--

CREATE TABLE `reward_setting` (
  `id` int NOT NULL,
  `reward_name` varchar(200) NOT NULL,
  `reward_duration` int NOT NULL DEFAULT '0' COMMENT 'within how many days he should achieve this',
  `achievers` int NOT NULL DEFAULT '0',
  `A` int NOT NULL DEFAULT '0',
  `B` int NOT NULL DEFAULT '0',
  `C` int NOT NULL DEFAULT '0',
  `D` int NOT NULL DEFAULT '0',
  `E` int NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `reward_setting`
--

INSERT INTO `reward_setting` (`id`, `reward_name`, `reward_duration`, `achievers`, `A`, `B`, `C`, `D`, `E`) VALUES
(1, 'Tab / LED / Smart Phone / 10,000', 0, 0, 50, 50, 0, 0, 0),
(2, 'Laptop / Bike / 25,000', 0, 0, 100, 100, 0, 0, 0),
(3, '10gm Gold / 50\" LED LG TV / 50,000', 0, 0, 250, 250, 0, 0, 0),
(4, 'Car / 1,50,000', 0, 0, 500, 500, 0, 0, 0),
(5, 'Big Car /300000', 0, 0, 1000, 1000, 0, 0, 0),
(6, 'Fortuner Car / 600000', 0, 0, 2500, 2500, 0, 0, 0),
(7, 'Mercedes/ Audi / BMW / 12 LAKH', 0, 0, 5000, 5000, 0, 0, 0),
(8, 'Jaguar Car / 25 Lakh / Couple Foreign Trip', 0, 0, 10000, 10000, 0, 0, 0),
(9, 'Luxury Bunglow / Couple Foreign Trip / 50 Lakh', 0, 0, 20000, 20000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int NOT NULL,
  `staff_id` varchar(20) NOT NULL,
  `salary` decimal(11,2) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `paydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_monthly_income_transfer`
--

CREATE TABLE `sponsor_monthly_income_transfer` (
  `id` int NOT NULL,
  `receiver_id` int NOT NULL,
  `donar_id` int NOT NULL,
  `donar_monthly_income` float(20,2) NOT NULL,
  `donation_amount` float(20,2) NOT NULL,
  `payment_mode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Pending','Rejected','Approved') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  `created_at` datetime NOT NULL,
  `action_at` datetime DEFAULT NULL,
  `remark` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `transection_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int NOT NULL,
  `username` varchar(200) NOT NULL,
  `designtion` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `bank_detail` varchar(300) DEFAULT NULL,
  `pan` varchar(20) DEFAULT NULL,
  `aadhar` varchar(20) DEFAULT NULL,
  `ip` varchar(100) NOT NULL DEFAULT '0:0:0:0',
  `last_login` date NOT NULL,
  `session` varchar(60) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `staff_designation`
--

CREATE TABLE `staff_designation` (
  `id` int NOT NULL,
  `des_title` varchar(200) NOT NULL,
  `des_permission` varchar(1000) NOT NULL,
  `payscale` decimal(11,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `states_cities`
--

CREATE TABLE `states_cities` (
  `id` bigint NOT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `state_cities` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `states_cities`
--

INSERT INTO `states_cities` (`id`, `parent_id`, `state_cities`) VALUES
(1, '729', 'Andaman and Nicobar'),
(2, '1', 'North and Middle Andaman'),
(3, '1', 'South Andaman'),
(4, '1', 'Nicobar'),
(5, '729', 'Andhra Pradesh'),
(6, '730', 'Adilabad'),
(7, '5', 'Anantapur'),
(8, '5', 'Chittoor'),
(9, '5', 'East Godavari'),
(10, '5', 'Guntur'),
(11, '730', 'Hyderabad'),
(12, '5', 'Kadapa'),
(13, '730', 'Karimnagar'),
(14, '730', 'Khammam'),
(15, '5', 'Krishna'),
(16, '5', 'Kurnool'),
(17, '730', 'Mahbubnagar'),
(18, '730', 'Medak'),
(19, '730', 'Nalgonda'),
(20, '5', 'Nellore'),
(21, '730', 'Nizamabad'),
(22, '5', 'Prakasam'),
(23, '730', 'Rangareddi'),
(24, '5', 'Srikakulam'),
(25, '5', 'Vishakhapatnam'),
(26, '5', 'Vizianagaram'),
(27, '730', 'Warangal'),
(28, '5', 'West Godavari'),
(29, '729', 'Arunachal Pradesh'),
(30, '29', 'Anjaw'),
(31, '29', 'Changlang'),
(32, '29', 'East Kameng'),
(33, '29', 'Lohit'),
(34, '29', 'Lower Subansiri'),
(35, '29', 'Papum Pare'),
(36, '29', 'Tirap'),
(37, '29', 'Dibang Valley'),
(38, '29', 'Upper Subansiri'),
(39, '29', 'West Kameng'),
(40, '729', 'Assam'),
(41, '40', 'Barpeta'),
(42, '40', 'Bongaigaon'),
(43, '40', 'Cachar'),
(44, '40', 'Darrang'),
(45, '40', 'Dhemaji'),
(46, '40', 'Dhubri'),
(47, '40', 'Dibrugarh'),
(48, '40', 'Goalpara'),
(49, '40', 'Golaghat'),
(50, '40', 'Hailakandi'),
(51, '40', 'Jorhat'),
(52, '40', 'Karbi Anglong'),
(53, '40', 'Karimganj'),
(54, '40', 'Kokrajhar'),
(55, '40', 'Lakhimpur'),
(56, '40', 'Marigaon'),
(57, '40', 'Nagaon'),
(58, '40', 'Nalbari'),
(59, '40', 'North Cachar Hills'),
(60, '40', 'Sibsagar'),
(61, '40', 'Sonitpur'),
(62, '40', 'Tinsukia'),
(63, '729', 'Bihar'),
(64, '63', 'Araria'),
(65, '63', 'Aurangabad'),
(66, '63', 'Banka'),
(67, '63', 'Begusarai'),
(68, '63', 'Bhagalpur'),
(69, '63', 'Bhojpur'),
(70, '63', 'Buxar'),
(71, '63', 'Darbhanga'),
(72, '63', 'Purba Champaran'),
(73, '63', 'Gaya'),
(74, '63', 'Gopalganj'),
(75, '63', 'Jamui'),
(76, '63', 'Jehanabad'),
(77, '63', 'Khagaria'),
(78, '63', 'Kishanganj'),
(79, '63', 'Kaimur'),
(80, '63', 'Katihar'),
(81, '63', 'Lakhisarai'),
(82, '63', 'Madhubani'),
(83, '63', 'Munger'),
(84, '63', 'Madhepura'),
(85, '63', 'Muzaffarpur'),
(86, '63', 'Nalanda'),
(87, '63', 'Nawada'),
(88, '63', 'Patna'),
(89, '63', 'Purnia'),
(90, '63', 'Rohtas'),
(91, '63', 'Saharsa'),
(92, '63', 'Samastipur'),
(93, '63', 'Sheohar'),
(94, '63', 'Sheikhpura'),
(95, '63', 'Saran'),
(96, '63', 'Sitamarhi'),
(97, '63', 'Supaul'),
(98, '63', 'Siwan'),
(99, '63', 'Vaishali'),
(100, '63', 'Pashchim Champaran'),
(101, 'Chandigarh', ''),
(102, '729', 'Chhattisgarh'),
(103, '102', 'Bastar'),
(104, '102', 'Bilaspur'),
(105, '102', 'Dantewada'),
(106, '102', 'Dhamtari'),
(107, '102', 'Durg'),
(108, '102', 'Jashpur'),
(109, '102', 'Janjgir-Champa'),
(110, '102', 'Korba'),
(111, '102', 'Koriya'),
(112, '102', 'Kanker'),
(113, '102', 'Kawardha'),
(114, '102', 'Mahasamund'),
(115, '102', 'Raigarh'),
(116, '102', 'Rajnandgaon'),
(117, '102', 'Raipur'),
(118, '102', 'Surguja'),
(119, 'Dadra and Nagar Haveli', NULL),
(120, 'Daman and Diu', NULL),
(121, 'Daman and Diu', 'Diu'),
(122, 'Daman and Diu', 'Daman'),
(123, '729', 'Delhi'),
(124, '123', 'Central Delhi'),
(125, '123', 'East Delhi'),
(126, '123', 'New Delhi'),
(127, '123', 'North Delhi'),
(128, '123', 'North East Delhi'),
(129, '123', 'North West Delhi'),
(130, '123', 'South Delhi'),
(131, '123', 'South West Delhi'),
(132, '123', 'West Delhi'),
(133, '729', 'Goa'),
(134, '133', 'North Goa'),
(135, '133', 'South Goa'),
(136, '729', 'Gujarat'),
(137, '136', 'Ahmedabad'),
(138, '136', 'Amreli District'),
(139, '136', 'Anand'),
(140, '136', 'Banaskantha'),
(141, '136', 'Bharuch'),
(142, '136', 'Bhavnagar'),
(143, '136', 'Dahod'),
(144, '136', 'The Dangs'),
(145, '136', 'Gandhinagar'),
(146, '136', 'Jamnagar'),
(147, '136', 'Junagadh'),
(148, '136', 'Kutch'),
(149, '136', 'Kheda'),
(150, '136', 'Mehsana'),
(151, '136', 'Narmada'),
(152, '136', 'Navsari'),
(153, '136', 'Patan'),
(154, '136', 'Panchmahal'),
(155, '136', 'Porbandar'),
(156, '136', 'Rajkot'),
(157, '136', 'Sabarkantha'),
(158, '136', 'Surendranagar'),
(159, '136', 'Surat'),
(160, '136', 'Vadodara'),
(161, '136', 'Valsad'),
(162, '729', 'Haryana'),
(163, '162', 'Ambala'),
(164, '162', 'Bhiwani'),
(165, '162', 'Faridabad'),
(166, '162', 'Fatehabad'),
(167, '162', 'Gurgaon'),
(168, '162', 'Hissar'),
(169, '162', 'Jhajjar'),
(170, '162', 'Jind'),
(171, '162', 'Karnal'),
(172, '162', 'Kaithal'),
(173, '162', 'Kurukshetra'),
(174, '162', 'Mahendragarh'),
(175, '162', 'Mewat'),
(176, '162', 'Panchkula'),
(177, '162', 'Panipat'),
(178, '162', 'Rewari'),
(179, '162', 'Rohtak'),
(180, '162', 'Sirsa'),
(181, '162', 'Sonepat'),
(182, '162', 'Yamuna Nagar'),
(183, '162', 'Palwal'),
(184, '729', 'Himachal Pradesh'),
(185, '184', 'Bilaspur'),
(186, '184', 'Chamba'),
(187, '184', 'Hamirpur'),
(188, '184', 'Kangra'),
(189, '184', 'Kinnaur'),
(190, '184', 'Kulu'),
(191, '184', 'Lahaul and Spiti'),
(192, '184', 'Mandi'),
(193, '184', 'Shimla'),
(194, '184', 'Sirmaur'),
(195, '184', 'Solan'),
(196, '184', 'Una'),
(197, '729', 'Jammu and Kashmir'),
(198, '197', 'Anantnag'),
(199, '197', 'Badgam'),
(200, '197', 'Bandipore'),
(201, '197', 'Baramula'),
(202, '197', 'Doda'),
(203, '197', 'Jammu'),
(204, '197', 'Kargil'),
(205, '197', 'Kathua'),
(206, '197', 'Kupwara'),
(207, '197', 'Leh'),
(208, '197', 'Poonch'),
(209, '197', 'Pulwama'),
(210, '197', 'Rajauri'),
(211, '197', 'Srinagar'),
(212, '197', 'Samba'),
(213, '197', 'Udhampur'),
(214, '729', 'Jharkhand'),
(215, '214', 'Bokaro'),
(216, '214', 'Chatra'),
(217, '214', 'Deoghar'),
(218, '214', 'Dhanbad'),
(219, '214', 'Dumka'),
(220, '214', 'Purba Singhbhum'),
(221, '214', 'Garhwa'),
(222, '214', 'Giridih'),
(223, '214', 'Godda'),
(224, '214', 'Gumla'),
(225, '214', 'Hazaribagh'),
(226, '214', 'Koderma'),
(227, '214', 'Lohardaga'),
(228, '214', 'Pakur'),
(229, '214', 'Palamu'),
(230, '214', 'Ranchi'),
(231, '214', 'Sahibganj'),
(232, '214', 'Seraikela and Kharsawan'),
(233, '214', 'Pashchim Singhbhum'),
(234, '214', 'Ramgarh'),
(235, '729', 'Karnataka'),
(236, '235', 'Bidar'),
(237, '235', 'Belgaum'),
(238, '235', 'Bijapur'),
(239, '235', 'Bagalkot'),
(240, '235', 'Bellary'),
(241, '235', 'Bangalore Rural District'),
(242, '235', 'Bangalore Urban District'),
(243, '235', 'Chamarajnagar'),
(244, '235', 'Chikmagalur'),
(245, '235', 'Chitradurga'),
(246, '235', 'Davanagere'),
(247, '235', 'Dharwad'),
(248, '235', 'Dakshina Kannada'),
(249, '235', 'Gadag'),
(250, '235', 'Gulbarga'),
(251, '235', 'Hassan'),
(252, '235', 'Haveri District'),
(253, '235', 'Kodagu'),
(254, '235', 'Kolar'),
(255, '235', 'Koppal'),
(256, '235', 'Mandya'),
(257, '235', 'Mysore'),
(258, '235', 'Raichur'),
(259, '235', 'Shimoga'),
(260, '235', 'Tumkur'),
(261, '235', 'Udupi'),
(262, '235', 'Uttara Kannada'),
(263, '235', 'Ramanagara'),
(264, '235', 'Chikballapur'),
(265, '235', 'Yadagiri'),
(266, '729', 'Kerala'),
(267, '266', 'Alappuzha'),
(268, '266', 'Ernakulam'),
(269, '266', 'Idukki'),
(270, '266', 'Kollam'),
(271, '266', 'Kannur'),
(272, '266', 'Kasaragod'),
(273, '266', 'Kottayam'),
(274, '266', 'Kozhikode'),
(275, '266', 'Malappuram'),
(276, '266', 'Palakkad'),
(277, '266', 'Pathanamthitta'),
(278, '266', 'Thrissur'),
(279, '266', 'Thiruvananthapuram'),
(280, '266', 'Wayanad'),
(281, 'Lakshadweep', NULL),
(282, '729', 'Madhya Pradesh'),
(283, '282', 'Alirajpur'),
(284, '282', 'Anuppur'),
(285, '282', 'Ashok Nagar'),
(286, '282', 'Balaghat'),
(287, '282', 'Barwani'),
(288, '282', 'Betul'),
(289, '282', 'Bhind'),
(290, '282', 'Bhopal'),
(291, '282', 'Burhanpur'),
(292, '282', 'Chhatarpur'),
(293, '282', 'Chhindwara'),
(294, '282', 'Damoh'),
(295, '282', 'Datia'),
(296, '282', 'Dewas'),
(297, '282', 'Dhar'),
(298, '282', 'Dindori'),
(299, '282', 'Guna'),
(300, '282', 'Gwalior'),
(301, '282', 'Harda'),
(302, '282', 'Hoshangabad'),
(303, '282', 'Indore'),
(304, '282', 'Jabalpur'),
(305, '282', 'Jhabua'),
(306, '282', 'Katni'),
(307, '282', 'Khandwa'),
(308, '282', 'Khargone'),
(309, '282', 'Mandla'),
(310, '282', 'Mandsaur'),
(311, '282', 'Morena'),
(312, '282', 'Narsinghpur'),
(313, '282', 'Neemuch'),
(314, '282', 'Panna'),
(315, '282', 'Rewa'),
(316, '282', 'Rajgarh'),
(317, '282', 'Ratlam'),
(318, '282', 'Raisen'),
(319, '282', 'Sagar'),
(320, '282', 'Satna'),
(321, '282', 'Sehore'),
(322, '282', 'Seoni'),
(323, '282', 'Shahdol'),
(324, '282', 'Shajapur'),
(325, '282', 'Sheopur'),
(326, '282', 'Shivpuri'),
(327, '282', 'Sidhi'),
(328, '282', 'Singrauli'),
(329, '282', 'Tikamgarh'),
(330, '282', 'Ujjain'),
(331, '282', 'Umaria'),
(332, '282', 'Vidisha'),
(333, '729', 'Maharashtra'),
(334, '333', 'Ahmednagar'),
(335, '333', 'Akola'),
(336, '333', 'Amrawati'),
(337, '333', 'Aurangabad'),
(338, '333', 'Bhandara'),
(339, '333', 'Beed'),
(340, '333', 'Buldhana'),
(341, '333', 'Chandrapur'),
(342, '333', 'Dhule'),
(343, '333', 'Gadchiroli'),
(344, '333', 'Gondiya'),
(345, '333', 'Hingoli'),
(346, '333', 'Jalgaon'),
(347, '333', 'Jalna'),
(348, '333', 'Kolhapur'),
(349, '333', 'Latur'),
(350, '333', 'Mumbai City'),
(351, '333', 'Mumbai suburban'),
(352, '333', 'Nandurbar'),
(353, '333', 'Nanded'),
(354, '333', 'Nagpur'),
(355, '333', 'Nashik'),
(356, '333', 'Osmanabad'),
(357, '333', 'Parbhani'),
(358, '333', 'Pune'),
(359, '333', 'Raigad'),
(360, '333', 'Ratnagiri'),
(361, '333', 'Sindhudurg'),
(362, '333', 'Sangli'),
(363, '333', 'Solapur'),
(364, '333', 'Satara'),
(365, '333', 'Thane'),
(366, '333', 'Wardha'),
(367, '333', 'Washim'),
(368, '333', 'Yavatmal'),
(369, '729', 'Manipur'),
(370, '369', 'Bishnupur'),
(371, '369', 'Churachandpur'),
(372, '369', 'Chandel'),
(373, '369', 'Imphal East'),
(374, '369', 'Senapati'),
(375, '369', 'Tamenglong'),
(376, '369', 'Thoubal'),
(377, '369', 'Ukhrul'),
(378, '369', 'Imphal West'),
(379, '729', 'Meghalaya'),
(380, '379', 'East Garo Hills'),
(381, '379', 'East Khasi Hills'),
(382, '379', 'Jaintia Hills'),
(383, '379', 'Ri-Bhoi'),
(384, '379', 'South Garo Hills'),
(385, '379', 'West Garo Hills'),
(386, '379', 'West Khasi Hills'),
(387, '729', 'Mizoram'),
(388, '387', 'Aizawl'),
(389, '387', 'Champhai'),
(390, '387', 'Kolasib'),
(391, '387', 'Lawngtlai'),
(392, '387', 'Lunglei'),
(393, '387', 'Mamit'),
(394, '387', 'Saiha'),
(395, '387', 'Serchhip'),
(396, '729', 'Nagaland'),
(397, '396', 'Dimapur'),
(398, '396', 'Kohima'),
(399, '396', 'Mokokchung'),
(400, '396', 'Mon'),
(401, '396', 'Phek'),
(402, '396', 'Tuensang'),
(403, '396', 'Wokha'),
(404, '396', 'Zunheboto'),
(405, '729', 'Orissa'),
(406, '405', 'Angul'),
(407, '405', 'Boudh'),
(408, '405', 'Bhadrak'),
(409, '405', 'Bolangir'),
(410, '405', 'Bargarh'),
(411, '405', 'Baleswar'),
(412, '405', 'Cuttack'),
(413, '405', 'Debagarh'),
(414, '405', 'Dhenkanal'),
(415, '405', 'Ganjam'),
(416, '405', 'Gajapati'),
(417, '405', 'Jharsuguda'),
(418, '405', 'Jajapur'),
(419, '405', 'Jagatsinghpur'),
(420, '405', 'Khordha'),
(421, '405', 'Kendujhar'),
(422, '405', 'Kalahandi'),
(423, '405', 'Kandhamal'),
(424, '405', 'Koraput'),
(425, '405', 'Kendrapara'),
(426, '405', 'Malkangiri'),
(427, '405', 'Mayurbhanj'),
(428, '405', 'Nabarangpur'),
(429, '405', 'Nuapada'),
(430, '405', 'Nayagarh'),
(431, '405', 'Puri'),
(432, '405', 'Rayagada'),
(433, '405', 'Sambalpur'),
(434, '405', 'Subarnapur'),
(435, '405', 'Sundargarh'),
(436, 'Puducherry', NULL),
(437, 'Puducherry', 'Karaikal'),
(438, 'Puducherry', 'Mahe'),
(439, 'Puducherry', 'Puducherry'),
(440, 'Puducherry', 'Yanam'),
(441, '729', 'Punjab'),
(442, '441', 'Amritsar'),
(443, '441', 'Bathinda'),
(444, '441', 'Firozpur'),
(445, '441', 'Faridkot'),
(446, '441', 'Fatehgarh Sahib'),
(447, '441', 'Gurdaspur'),
(448, '441', 'Hoshiarpur'),
(449, '441', 'Jalandhar'),
(450, '441', 'Kapurthala'),
(451, '441', 'Ludhiana'),
(452, '441', 'Mansa'),
(453, '441', 'Moga'),
(454, '441', 'Mukatsar'),
(455, '441', 'Nawan Shehar'),
(456, '441', 'Patiala'),
(457, '441', 'Rupnagar'),
(458, '441', 'Sangrur'),
(459, '729', 'Rajasthan'),
(460, '459', 'Ajmer'),
(461, '459', 'Alwar'),
(462, '459', 'Bikaner'),
(463, '459', 'Barmer'),
(464, '459', 'Banswara'),
(465, '459', 'Bharatpur'),
(466, '459', 'Baran'),
(467, '459', 'Bundi'),
(468, '459', 'Bhilwara'),
(469, '459', 'Churu'),
(470, '459', 'Chittorgarh'),
(471, '459', 'Dausa'),
(472, '459', 'Dholpur'),
(473, '459', 'Dungapur'),
(474, '459', 'Ganganagar'),
(475, '459', 'Hanumangarh'),
(476, '459', 'Juhnjhunun'),
(477, '459', 'Jalore'),
(478, '459', 'Jodhpur'),
(479, '459', 'Jaipur'),
(480, '459', 'Jaisalmer'),
(481, '459', 'Jhalawar'),
(482, '459', 'Karauli'),
(483, '459', 'Kota'),
(484, '459', 'Nagaur'),
(485, '459', 'Pali'),
(486, '459', 'Pratapgarh'),
(487, '459', 'Rajsamand'),
(488, '459', 'Sikar'),
(489, '459', 'Sawai Madhopur'),
(490, '459', 'Sirohi'),
(491, '459', 'Tonk'),
(492, '459', 'Udaipur'),
(493, '729', 'Sikkim'),
(494, '493', 'East Sikkim'),
(495, '493', 'North Sikkim'),
(496, '493', 'South Sikkim'),
(497, '493', 'West Sikkim'),
(498, '729', 'Tamil Nadu'),
(499, '498', 'Ariyalur'),
(500, '498', 'Chennai'),
(501, '498', 'Coimbatore'),
(502, '498', 'Cuddalore'),
(503, '498', 'Dharmapuri'),
(504, '498', 'Dindigul'),
(505, '498', 'Erode'),
(506, '498', 'Kanchipuram'),
(507, '498', 'Kanyakumari'),
(508, '498', 'Karur'),
(509, '498', 'Madurai'),
(510, '498', 'Nagapattinam'),
(511, '498', 'The Nilgiris'),
(512, '498', 'Namakkal'),
(513, '498', 'Perambalur'),
(514, '498', 'Pudukkottai'),
(515, '498', 'Ramanathapuram'),
(516, '498', 'Salem'),
(517, '498', 'Sivagangai'),
(518, '498', 'Tiruppur'),
(519, '498', 'Tiruchirappalli'),
(520, '498', 'Theni'),
(521, '498', 'Tirunelveli'),
(522, '498', 'Thanjavur'),
(523, '498', 'Thoothukudi'),
(524, '498', 'Thiruvallur'),
(525, '498', 'Thiruvarur'),
(526, '498', 'Tiruvannamalai'),
(527, '498', 'Vellore'),
(528, '498', 'Villupuram'),
(529, '729', 'Tripura'),
(530, '529', 'Dhalai'),
(531, '529', 'North Tripura'),
(532, '529', 'South Tripura'),
(533, '529', 'West Tripura'),
(534, '729', 'Uttarakhand'),
(535, '534', 'Almora'),
(536, '534', 'Bageshwar'),
(537, '534', 'Chamoli'),
(538, '534', 'Champawat'),
(539, '534', 'Dehradun'),
(540, '534', 'Haridwar'),
(541, '534', 'Nainital'),
(542, '534', 'Pauri Garhwal'),
(543, '534', 'Pithoragharh'),
(544, '534', 'Rudraprayag'),
(545, '534', 'Tehri Garhwal'),
(546, '534', 'Udham Singh Nagar'),
(547, '534', 'Uttarkashi'),
(548, '729', 'Uttar Pradesh'),
(549, '548', 'Agra'),
(550, '548', 'Allahabad'),
(551, '548', 'Aligarh'),
(552, '548', 'Ambedkar Nagar'),
(553, '548', 'Auraiya'),
(554, '548', 'Azamgarh'),
(555, '548', 'Barabanki'),
(556, '548', 'Badaun'),
(557, '548', 'Bagpat'),
(558, '548', 'Bahraich'),
(559, '548', 'Bijnor'),
(560, '548', 'Ballia'),
(561, '548', 'Banda'),
(562, '548', 'Balrampur'),
(563, '548', 'Bareilly'),
(564, '548', 'Basti'),
(565, '548', 'Bulandshahr'),
(566, '548', 'Chandauli'),
(567, '548', 'Chitrakoot'),
(568, '548', 'Deoria'),
(569, '548', 'Etah'),
(570, '548', 'Kanshiram Nagar'),
(571, '548', 'Etawah'),
(572, '548', 'Firozabad'),
(573, '548', 'Farrukhabad'),
(574, '548', 'Fatehpur'),
(575, '548', 'Faizabad'),
(576, '548', 'Gautam Buddha Nagar'),
(577, '548', 'Gonda'),
(578, '548', 'Ghazipur'),
(579, '548', 'Gorkakhpur'),
(580, '548', 'Ghaziabad'),
(581, '548', 'Hamirpur'),
(582, '548', 'Hardoi'),
(583, '548', 'Mahamaya Nagar'),
(584, '548', 'Jhansi'),
(585, '548', 'Jalaun'),
(586, '548', 'Jyotiba Phule Nagar'),
(587, '548', 'Jaunpur District'),
(588, '548', 'Kanpur Dehat'),
(589, '548', 'Kannauj'),
(590, '548', 'Kanpur Nagar'),
(591, '548', 'Kaushambi'),
(592, '548', 'Kushinagar'),
(593, '548', 'Lalitpur'),
(594, '548', 'Lakhimpur Kheri'),
(595, '548', 'Lucknow'),
(596, '548', 'Mau'),
(597, '548', 'Meerut'),
(598, '548', 'Maharajganj'),
(599, '548', 'Mahoba'),
(600, '548', 'Mirzapur'),
(601, '548', 'Moradabad'),
(602, '548', 'Mainpuri'),
(603, '548', 'Mathura'),
(604, '548', 'Muzaffarnagar'),
(605, '548', 'Pilibhit'),
(606, '548', 'Pratapgarh'),
(607, '548', 'Rampur'),
(608, '548', 'Rae Bareli'),
(609, '548', 'Saharanpur'),
(610, '548', 'Sitapur'),
(611, '548', 'Shahjahanpur'),
(612, '548', 'Sant Kabir Nagar'),
(613, '548', 'Siddharthnagar'),
(614, '548', 'Sonbhadra'),
(615, '548', 'Sant Ravidas Nagar'),
(616, '548', 'Sultanpur'),
(617, '548', 'Shravasti'),
(618, '548', 'Unnao'),
(619, '548', 'Varanasi'),
(620, '729', 'West Bengal'),
(621, '620', 'Birbhum'),
(622, '620', 'Bankura'),
(623, '620', 'Bardhaman'),
(624, '620', 'Darjeeling'),
(625, '620', 'Dakshin Dinajpur'),
(626, '620', 'Hooghly'),
(627, '620', 'Howrah'),
(628, '620', 'Jalpaiguri'),
(629, '620', 'Cooch Behar'),
(630, '620', 'Kolkata'),
(631, '620', 'Malda'),
(632, '620', 'Midnapore'),
(633, '620', 'Murshidabad'),
(634, '620', 'Nadia'),
(635, '620', 'North 24 Parganas'),
(636, '620', 'South 24 Parganas'),
(637, '620', 'Purulia'),
(638, '620', 'Uttar Dinajpur'),
(639, '0', 'Bangladesh'),
(640, '639', 'Rajshahi'),
(641, '639', 'Barisal'),
(642, '639', 'Chittagong'),
(643, '639', 'Dhaka'),
(644, '639', 'Khulna'),
(645, '639', 'Rangpur'),
(646, '639', 'Sylhet'),
(647, '640', 'Joypurhat'),
(648, '640', 'Kalai'),
(649, '640', 'Khetlal'),
(650, '640', 'Akkelpur'),
(651, '640', 'Panchbibi'),
(652, '640', 'Bogra'),
(653, '640', 'Naogaon'),
(654, '640', 'Natore'),
(655, '640', 'Nawabganj'),
(656, '640', 'Pabna'),
(657, '640', 'Sirajganj'),
(658, '640', 'Shahjadpur'),
(659, '640', 'Ullapara'),
(660, '640', 'Iswardi'),
(661, '640', 'Santhia'),
(662, '640', 'Sherpur'),
(663, '641', 'Bakerganj'),
(664, '641', 'Barguna'),
(665, '641', 'Bhola'),
(666, '641', 'Gaurnadi'),
(667, '641', 'Jhalokati'),
(668, '641', 'Patuakhali'),
(669, '641', 'Pirojpur'),
(670, '642', 'Akhaura'),
(671, '642', 'Cox\'s Bazar'),
(672, '642', 'Bandarban'),
(673, '642', 'Brahmanbaria'),
(674, '642', 'Sarail'),
(675, '642', 'Shahbazpur Town'),
(676, '642', 'Chandpur'),
(677, '642', 'Chaumuhani'),
(678, '642', 'Feni'),
(679, '642', 'Khagrachhari'),
(680, '642', 'Laksam'),
(681, '642', 'Lakshmipur'),
(682, '642', 'Noakhali'),
(683, '642', 'Rangamati'),
(684, '642', 'Rangunia'),
(685, '642', 'Sandwip'),
(686, '642', 'Comilla'),
(687, '642', 'Burichong'),
(688, '643', 'Aricha'),
(689, '643', 'Bhairab'),
(690, '643', 'Faridpur'),
(691, '643', 'Jamalpur'),
(692, '643', 'Kishoreganj'),
(693, '643', 'Manikganj'),
(694, '643', 'Madaripur'),
(695, '643', 'Munshiganj'),
(696, '643', 'Mymensingh'),
(697, '643', 'Narsingdi'),
(698, '643', 'Netrokona'),
(699, '643', 'Rajbari'),
(700, '643', 'Shariatpur'),
(701, '643', 'Sherpur'),
(702, '643', 'Tangail'),
(703, '643', 'Tongi'),
(704, '643', 'Gopalganj'),
(705, '644', 'Bagherhat'),
(706, '644', 'Chuadanga'),
(707, '644', 'Jessore'),
(708, '644', 'Jhenaidah'),
(709, '644', 'Kushtia'),
(710, '644', 'Magura'),
(711, '644', 'Meherpur'),
(712, '644', 'Narail'),
(713, '644', 'Shatkhira'),
(714, '645', 'Gaibandha'),
(715, '645', 'Dinajpur'),
(716, '645', 'Kurigram'),
(717, '645', 'Lalmonirhat'),
(718, '645', 'Nilphamari'),
(719, '645', 'Panchagarh'),
(720, '645', 'Thakurgaon'),
(721, '645', 'Saidpur'),
(722, '646', 'Golapganj'),
(723, '646', 'Habiganj'),
(724, '646', 'Maulvibazar'),
(725, '646', 'Sreemangal'),
(726, '646', 'Sunamganj'),
(727, '646', 'Beanibazar'),
(728, '646', 'Barlekha'),
(729, '0', 'India'),
(730, '729', 'Telangana');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int NOT NULL,
  `survey_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `question_answers` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level_earning` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `expiry_date` date NOT NULL,
  `type` enum('Hosted Survey','Third Party') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_user`
--

CREATE TABLE `survey_user` (
  `id` int NOT NULL,
  `survey_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `userid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `date` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_report`
--

CREATE TABLE `tax_report` (
  `id` int NOT NULL,
  `userid` varchar(10) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `payout_id` varchar(10) NOT NULL,
  `tax_amount` decimal(11,2) NOT NULL,
  `tax_percnt` varchar(10) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int NOT NULL,
  `ticket_title` varchar(300) NOT NULL,
  `ticket_detail` text NOT NULL,
  `userid` varchar(20) NOT NULL,
  `status` enum('Open','Waiting User Reply','Closed','Customer Reply') NOT NULL DEFAULT 'Open',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `ticket_title`, `ticket_detail`, `userid`, `status`, `date`) VALUES
(1, 'hamare sath galat hua', '<p>fghfghdfgd</p>', '1001', 'Waiting User Reply', '2025-03-21'),
(2, 'आपने मेरे साथ गलत किया', '<p>श्रीमान अपने सिस्टम को कब लांच किया इसकी जानकारी आपने मुझे नहीं दिया अगर देते तो मैं शुरू में ही आपसे जुड़ जाता।</p>', '10233611', 'Open', '2025-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_reply`
--

CREATE TABLE `ticket_reply` (
  `id` int NOT NULL,
  `ticket_id` int NOT NULL,
  `msg_from` varchar(20) NOT NULL DEFAULT 'Admin',
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ticket_reply`
--

INSERT INTO `ticket_reply` (`id`, `ticket_id`, `msg_from`, `msg`) VALUES
(1, 1, 'Admin', '<p>tyhfghfgh</p>'),
(2, 1, 'Admin', 'Don\'t mind this is testing period he change every problem will be resolve thank you');

-- --------------------------------------------------------

--
-- Table structure for table `topup_record`
--

CREATE TABLE `topup_record` (
  `id` int NOT NULL,
  `user_id` varchar(22) NOT NULL,
  `epin` varchar(100) NOT NULL,
  `topup_amount` varchar(50) NOT NULL,
  `topup_by` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int NOT NULL,
  `userid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `capping_amt` decimal(11,2) NOT NULL,
  `gateway` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `transaction_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'NA',
  `status` enum('Completed','Processing','Failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_balance_records`
--

CREATE TABLE `transfer_balance_records` (
  `id` int NOT NULL,
  `transfer_from` varchar(10) NOT NULL,
  `transfer_to` varchar(10) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int NOT NULL,
  `userid` varchar(20) NOT NULL,
  `balance` varchar(15) NOT NULL DEFAULT '0',
  `without_tax_bal` varchar(15) NOT NULL DEFAULT '0',
  `type` varchar(20) NOT NULL DEFAULT 'Default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `userid`, `balance`, `without_tax_bal`, `type`) VALUES
(1, '1001', '0', '0', 'Default'),
(2, '47282272', '0', '0', 'Default'),
(3, '28211743', '0', '0', 'Default'),
(4, '90577464', '0', '0', 'Default'),
(5, '14336098', '0', '0', 'Default'),
(6, '46115816', '0', '0', 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_transection_report`
--

CREATE TABLE `wallet_transection_report` (
  `id` int NOT NULL,
  `userid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount` float(20,2) NOT NULL,
  `transection_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('CR','DR') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remark` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet_transection_report`
--

INSERT INTO `wallet_transection_report` (`id`, `userid`, `amount`, `transection_id`, `status`, `remark`, `date`) VALUES
(1, '1001', 250.00, '704010203012', 'CR', 'FB1001&nbsp;for Level1&nbsp;# transection no&nbsp;', '2025-03-26 08:36:19'),
(2, '1001', 250.00, '704010203012', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 08:36:19'),
(3, '1001', 50.00, '805020906030', 'CR', 'FB1001&nbsp;for Level1&nbsp;# transection no&nbsp;', '2025-03-26 08:36:29'),
(4, '1001', 50.00, '805020906030', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 08:36:29'),
(5, '1001', 50.00, '124578154870', 'CR', 'FB1001&nbsp;for Level1&nbsp;# transection no&nbsp;', '2025-03-26 08:36:40'),
(6, '1001', 50.00, '124578154870', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 08:36:40'),
(7, '1001', 50.00, '784512235612', 'CR', 'FB1001&nbsp;for Level1&nbsp;# transection no&nbsp;', '2025-03-26 08:36:48'),
(8, '1001', 50.00, '784512235612', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 08:36:48'),
(9, '1001', 50.00, '326598326532', 'CR', 'FB1001&nbsp;for Level1&nbsp;# transection no&nbsp;', '2025-03-26 08:36:57'),
(10, '1001', 50.00, '326598326532', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 08:36:57'),
(11, '1001', 250.00, 'T2501241717549839668242', 'CR', 'FB47282272&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:08:18'),
(12, '47282272', 250.00, 'T2501241717549839668242', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:08:18'),
(13, '1001', 50.00, 'T2501211346307659134226', 'CR', 'FB47282272&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:08:26'),
(14, '47282272', 50.00, 'T2501211346307659134226', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:08:26'),
(15, '1001', 50.00, 'T2501181455075653105389', 'CR', 'FB47282272&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:08:32'),
(16, '47282272', 50.00, 'T2501181455075653105389', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:08:32'),
(17, '1001', 50.00, 'T2501181141205127425420', 'CR', 'FB47282272&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:08:39'),
(18, '47282272', 50.00, 'T2501181141205127425420', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:08:39'),
(19, '1001', 50.00, 'T2502171620148188205092', 'CR', 'FB47282272&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:08:46'),
(20, '47282272', 50.00, 'T2502171620148188205092', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:08:46'),
(21, '1001', 50.00, '987654321987', 'CR', 'FB28211743&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:30:41'),
(22, '28211743', 50.00, '987654321987', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:30:41'),
(23, '1001', 50.00, '741852963741', 'CR', 'FB28211743&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:30:48'),
(24, '28211743', 50.00, '741852963741', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:30:48'),
(25, '1001', 50.00, '141815121319', 'CR', 'FB28211743&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:30:56'),
(26, '28211743', 50.00, '141815121319', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:30:56'),
(27, '1001', 50.00, '115599448833', 'CR', 'FB28211743&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:31:03'),
(28, '28211743', 50.00, '115599448833', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:31:03'),
(29, '47282272', 250.00, '123456123451', 'CR', 'FB28211743&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:39:27'),
(30, '28211743', 250.00, '123456123451', 'DR', 'FB47282272&nbsp;from Level1&nbsp;# transection no&', '2025-03-26 09:39:27'),
(31, '47282272', 50.00, '98766543324679', 'CR', 'FB90577464&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:55:59'),
(32, '90577464', 50.00, '98766543324679', 'DR', 'FB47282272&nbsp;from Level1&nbsp;# transection no&', '2025-03-26 09:55:59'),
(33, '28211743', 250.00, '76543213578', 'CR', 'FB90577464&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:58:40'),
(34, '90577464', 250.00, '76543213578', 'DR', 'FB28211743&nbsp;from Level1&nbsp;# transection no&', '2025-03-26 09:58:40'),
(35, '1001', 50.00, '5544678996yree', 'CR', 'FB90577464&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:59:33'),
(36, '90577464', 50.00, '5544678996yree', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:59:33'),
(37, '1001', 50.00, '355678900ouytr', 'CR', 'FB90577464&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:59:41'),
(38, '90577464', 50.00, '355678900ouytr', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:59:41'),
(39, '1001', 50.00, '88799876644678o', 'CR', 'FB90577464&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 09:59:51'),
(40, '90577464', 50.00, '88799876644678o', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 09:59:51'),
(41, '28211743', 50.00, '461379461312', 'CR', 'FB14336098&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 10:18:24'),
(42, '14336098', 50.00, '461379461312', 'DR', 'FB28211743&nbsp;from Level1&nbsp;# transection no&', '2025-03-26 10:18:24'),
(43, '1001', 50.00, '885544772233', 'CR', 'FB14336098&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 10:19:03'),
(44, '14336098', 50.00, '885544772233', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 10:19:03'),
(45, '1001', 50.00, '332255667788', 'CR', 'FB14336098&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 10:19:13'),
(46, '14336098', 50.00, '332255667788', 'DR', 'FB1001&nbsp;from Level1&nbsp;# transection no&nbsp', '2025-03-26 10:19:13'),
(47, '47282272', 50.00, '161312141512', 'CR', 'FB14336098&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 10:22:44'),
(48, '14336098', 50.00, '161312141512', 'DR', 'FB47282272&nbsp;from Level1&nbsp;# transection no&', '2025-03-26 10:22:44'),
(49, '90577464', 250.00, '115599448899', 'CR', 'FB14336098&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 10:23:24'),
(50, '14336098', 250.00, '115599448899', 'DR', 'FB90577464&nbsp;from Level1&nbsp;# transection no&', '2025-03-26 10:23:24'),
(51, '47282272', 50.00, '6667888654578', 'CR', 'FB46115816&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 10:38:32'),
(52, '46115816', 50.00, '6667888654578', 'DR', 'FB47282272&nbsp;from Level1&nbsp;# transection no&', '2025-03-26 10:38:32'),
(53, '90577464', 50.00, '5433564466744', 'CR', 'FB46115816&nbsp;for Level1&nbsp;# transection no&n', '2025-03-26 10:39:05'),
(54, '46115816', 50.00, '5433564466744', 'DR', 'FB90577464&nbsp;from Level1&nbsp;# transection no&', '2025-03-26 10:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_request`
--

CREATE TABLE `withdraw_request` (
  `id` int NOT NULL,
  `userid` varchar(20) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `without_tax_amt` decimal(11,2) NOT NULL,
  `tax` decimal(11,2) NOT NULL DEFAULT '0.00',
  `date` date NOT NULL,
  `status` enum('Paid','Un-Paid','Hold') NOT NULL DEFAULT 'Un-Paid',
  `paid_date` date DEFAULT NULL,
  `tid` varchar(200) DEFAULT NULL COMMENT 'Transaction ID or detail'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admin_expense`
--
ALTER TABLE `admin_expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_user`
--
ALTER TABLE `ad_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `coupon_categories`
--
ALTER TABLE `coupon_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar_receiver_record`
--
ALTER TABLE `donar_receiver_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_package`
--
ALTER TABLE `donation_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earning`
--
ALTER TABLE `earning`
  ADD PRIMARY KEY (`id`),
  ADD KEY `useird` (`userid`);

--
-- Indexes for table `epin`
--
ALTER TABLE `epin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `epin` (`epin`),
  ADD KEY `issue_to` (`issue_to`);

--
-- Indexes for table `epin_request`
--
ALTER TABLE `epin_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epin_transfer_reports`
--
ALTER TABLE `epin_transfer_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fix_income`
--
ALTER TABLE `fix_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flexible_income`
--
ALTER TABLE `flexible_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchisee`
--
ALTER TABLE `franchisee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `franchisee_stock`
--
ALTER TABLE `franchisee_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `franchisee_id` (`franchisee_id`);

--
-- Indexes for table `franchisee_stock_sale_bill`
--
ALTER TABLE `franchisee_stock_sale_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gap_commission_setting`
--
ALTER TABLE `gap_commission_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investment_pack`
--
ALTER TABLE `investment_pack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `level_wise_income`
--
ALTER TABLE `level_wise_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_wise_list`
--
ALTER TABLE `level_wise_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE,
  ADD KEY `sponsor` (`sponsor`),
  ADD KEY `poisition` (`position`);

--
-- Indexes for table `member_feedback`
--
ALTER TABLE `member_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_profile`
--
ALTER TABLE `member_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_wallet`
--
ALTER TABLE `other_wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `pending_wallet`
--
ALTER TABLE `pending_wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prod_name` (`prod_name`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sale`
--
ALTER TABLE `product_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_system`
--
ALTER TABLE `rank_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recharge_entry`
--
ALTER TABLE `recharge_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward_setting`
--
ALTER TABLE `reward_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_monthly_income_transfer`
--
ALTER TABLE `sponsor_monthly_income_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `staff_designation`
--
ALTER TABLE `staff_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states_cities`
--
ALTER TABLE `states_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_user`
--
ALTER TABLE `survey_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`survey_id`);

--
-- Indexes for table `tax_report`
--
ALTER TABLE `tax_report`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payout_id` (`payout_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_reply`
--
ALTER TABLE `ticket_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topup_record`
--
ALTER TABLE `topup_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer_balance_records`
--
ALTER TABLE `transfer_balance_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`transfer_from`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `wallet_transection_report`
--
ALTER TABLE `wallet_transection_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_request`
--
ALTER TABLE `withdraw_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_expense`
--
ALTER TABLE `admin_expense`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ad_user`
--
ALTER TABLE `ad_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_categories`
--
ALTER TABLE `coupon_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donar_receiver_record`
--
ALTER TABLE `donar_receiver_record`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation_package`
--
ALTER TABLE `donation_package`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `earning`
--
ALTER TABLE `earning`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `epin`
--
ALTER TABLE `epin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `epin_request`
--
ALTER TABLE `epin_request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `epin_transfer_reports`
--
ALTER TABLE `epin_transfer_reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fix_income`
--
ALTER TABLE `fix_income`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flexible_income`
--
ALTER TABLE `flexible_income`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `franchisee`
--
ALTER TABLE `franchisee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `franchisee_stock`
--
ALTER TABLE `franchisee_stock`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `franchisee_stock_sale_bill`
--
ALTER TABLE `franchisee_stock_sale_bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gap_commission_setting`
--
ALTER TABLE `gap_commission_setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investment_pack`
--
ALTER TABLE `investment_pack`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `level_wise_income`
--
ALTER TABLE `level_wise_income`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level_wise_list`
--
ALTER TABLE `level_wise_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_feedback`
--
ALTER TABLE `member_feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_profile`
--
ALTER TABLE `member_profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `other_wallet`
--
ALTER TABLE `other_wallet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pending_wallet`
--
ALTER TABLE `pending_wallet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_sale`
--
ALTER TABLE `product_sale`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rank_system`
--
ALTER TABLE `rank_system`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recharge_entry`
--
ALTER TABLE `recharge_entry`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reward_setting`
--
ALTER TABLE `reward_setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsor_monthly_income_transfer`
--
ALTER TABLE `sponsor_monthly_income_transfer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_designation`
--
ALTER TABLE `staff_designation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states_cities`
--
ALTER TABLE `states_cities`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=731;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_user`
--
ALTER TABLE `survey_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_report`
--
ALTER TABLE `tax_report`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket_reply`
--
ALTER TABLE `ticket_reply`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topup_record`
--
ALTER TABLE `topup_record`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wallet_transection_report`
--
ALTER TABLE `wallet_transection_report`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `withdraw_request`
--
ALTER TABLE `withdraw_request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

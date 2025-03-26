-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2025 at 11:40 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlm_base_file`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by_user_type_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `mem_id`, `message`, `created_at`, `updated_at`, `created_by_user_type_id`, `status`) VALUES
(1, 4780915, '<p>hello sir</p>', '2025-03-26', '2025-03-26 09:44:40', 0, 1),
(2, 1001, '<p>Hello How are uuuuuuuuuuuuuuuuuuuuuuuuu.</p>', '2025-03-26', '2025-03-26 09:45:37', 0, 1),
(3, 1044921, '<p>Hello How are uuuuuuuuuuuuuuuuuuuuuuuuu.</p>', '2025-03-26', '2025-03-26 09:45:37', 0, 2),
(4, 6887127, '<p>Hello How are uuuuuuuuuuuuuuuuuuuuuuuuu.</p>', '2025-03-26', '2025-03-26 09:45:37', 0, 1),
(5, 1044921, '<p>Multi-level marketing (MLM), also known as network marketing, is a business model where individuals earn inc', '2025-03-26', '2025-03-26 09:47:32', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

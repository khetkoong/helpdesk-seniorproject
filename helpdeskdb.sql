-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2020 at 03:38 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdeskdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dep`
--

CREATE TABLE `dep` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dep`
--

INSERT INTO `dep` (`dep_id`, `dep_name`) VALUES
(7, 'Information System');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`) VALUES
(23, 'projector'),
(24, 'mouse'),
(25, 'monitor'),
(26, 'keyboard'),
(27, 'air condition'),
(28, 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `room_id` int(10) NOT NULL,
  `room_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`room_id`, `room_name`) VALUES
(1, 'c1'),
(2, 'c2'),
(3, 'c3'),
(4, 'c4'),
(5, 'c5'),
(6, 'c6'),
(7, 'c7'),
(8, 'c8'),
(9, 'c9');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `room` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `serial_num` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `submitted_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `repairman` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `repairman_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `job_status` enum('waiting','success','pending') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'waiting',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pending_at` datetime DEFAULT NULL,
  `success_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `room`, `item`, `serial_num`, `detail`, `submitted_name`, `user_id`, `repairman`, `repairman_id`, `job_status`, `created_at`, `pending_at`, `success_at`) VALUES
(57, 'c1', 'mouse', '1', '1', 'khetkoong', '', 'repairman', '63', 'success', '2019-12-14 12:48:58', '2019-12-14 12:54:29', '2019-12-14 12:56:14'),
(58, 'c1', 'projector', '2', '2', 'khetkoong', '65', 'repairman', '63', 'success', '2019-12-14 12:50:09', '2019-12-14 12:54:26', '2019-12-14 12:55:40'),
(59, 'c3', 'projector', '3', '3', 'khetkoong', '65', 'repairman', '63', 'success', '2019-12-14 12:57:14', '2019-12-14 12:57:43', '2019-12-14 12:58:17'),
(60, 'c1', 'projector', '4', '4', 'khetkoong', '65', 'repairman', '63', 'success', '2019-12-14 12:57:18', '2019-12-14 12:58:03', '2019-12-14 12:58:48'),
(61, 'c1', 'mouse', '5', '5', 'khetkoong', '65', 'repairman2', '66', 'success', '2019-12-14 12:57:22', '2019-12-14 12:59:43', '2019-12-14 12:59:46'),
(62, 'c1', 'projector', '1', '1', 'khetkoong', '65', 'repairman', '63', 'pending', '2019-12-14 13:00:08', '2019-12-14 13:00:54', NULL),
(63, 'c1', 'mouse', '2', '2', 'khetkoong', '65', 'repairman', '63', 'pending', '2019-12-14 13:00:12', '2019-12-14 13:00:57', NULL),
(64, 'c4', 'monitor', '3', '3', 'khetkoong', '65', '', '', 'waiting', '2019-12-14 13:00:16', NULL, NULL),
(65, 'c1', 'mouse', '4', '4', 'khetkoong', '65', 'repairman', '63', 'pending', '2019-12-14 13:00:21', '2019-12-14 13:00:59', NULL),
(66, 'c2', 'monitor', '5', '5', 'khetkoong', '65', 'repairman2', '66', 'pending', '2019-12-14 13:00:25', '2019-12-14 13:04:27', NULL),
(67, 'c2', 'mouse', '6', '6', 'khetkoong', '65', '', '', 'waiting', '2019-12-14 13:00:29', NULL, NULL),
(68, 'c4', 'computer', '152233548', 'blue screen', 'เมธาวัตร', '67', 'repairman', '63', 'success', '2020-01-05 21:21:59', '2020-01-05 21:50:46', '2020-01-05 21:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('member','admin','repairman') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member',
  `dep` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `password`, `name`, `lastname`, `role`, `dep`, `create_at`) VALUES
(63, 'repairman', 'repairman', '56347a799179551b0f0db7f73a922489e999624b5cf741d65f4a0f361ea1c3a5', 'repairman', 'repairman', 'repairman', '', '2019-12-01 13:51:23'),
(64, 'admin1150', 'admin', '2cba595184290b17d37fe316353223385c7adb8fe19fd96abdfa8b347bd14998', 'admin', 'admin', 'admin', 'Information System', '2019-12-04 17:19:47'),
(65, 'aabba123456khetkoong', 'khetkoong', 'aa49ca30bedce5b92fdb2c7633d2ac335e0d8b6d87e37d697cb8a4c8018c6b2b', 'khetkoong', 'vongcharee', 'member', 'Information System', '2019-12-14 12:47:22'),
(66, 'repairman2', 'repairman2', '793fe138c7061d28318e90086bbf3ba9b6646bd789a201805c65c26de19759d9', 'repairman2', 'repairman2', 'repairman', 'Information System', '2019-12-14 12:59:24'),
(67, '025930451013-6', 'pond', 'bfc6325e9dc734bb45cd2f0eb0c33bfe7f03eaf43b6a35503f1cd6342879b892', 'เมธาวัตร', 'หล่อเจริญกุล', 'member', 'Information System', '2020-01-05 21:18:12'),
(68, '', '', 'a029c94120a900bb635d6f1b3e7bcecdda7bdbd8ec42966a3b96fa06c896221c', '', '', 'repairman', '', '2020-01-05 22:37:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dep`
--
ALTER TABLE `dep`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`name`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dep`
--
ALTER TABLE `dep`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

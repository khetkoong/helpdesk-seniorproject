-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 16, 2020 at 03:49 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

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
(1, 'Information System'),
(2, 'Accounting'),
(3, 'Marketing'),
(4, 'Repair Man');

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
(1, 'เมาส์'),
(2, 'จอคอมพิวเตอร์'),
(3, 'คีย์บอร์ด'),
(4, 'แอร์'),
(5, 'โปรเจคเตอร์');

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
(1, 'C1'),
(2, 'C2'),
(3, 'C3'),
(4, 'C4'),
(5, 'C5'),
(6, 'C6'),
(7, 'C7'),
(8, 'C8'),
(9, 'C9');

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
  `repairman` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repairman_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_status` enum('waiting','success','pending') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'waiting',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pending_at` datetime DEFAULT NULL,
  `success_at` datetime DEFAULT NULL,
  `success_at_date` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isRate` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `room`, `item`, `serial_num`, `detail`, `submitted_name`, `user_id`, `repairman`, `repairman_id`, `job_status`, `created_at`, `pending_at`, `success_at`, `success_at_date`, `isRate`) VALUES
(57, 'c1', 'mouse', '1', '1', 'khetkoong', '321', 'repairman', '321', 'pending', '2019-12-14 05:48:58', '2020-02-06 19:19:51', '2019-12-14 12:56:14', NULL, 0),
(58, 'C5', 'mouse', '2', '3', 'khetkoong', '321', 'repairman', '321', 'success', '2020-02-06 04:11:10', '2020-02-06 19:05:54', '2020-02-14 18:47:21', '2', 0),
(59, 'C4', 'monitor', '6321', '7123', 'khetkoong', '321', 'repairman', '63', 'success', '2020-02-06 04:14:30', '2020-02-06 18:57:36', '2020-02-14 17:24:39', NULL, 0),
(60, 'c1', 'projector', '4', '4', 'khetkoong', '312', 'repairman', '63', 'success', '2019-12-14 05:57:18', '2019-12-14 12:58:03', '2020-02-08 23:50:42', NULL, 0),
(61, 'c1', 'mouse', '5', '5', 'khetkoong', '65', 'repairman2', '66', 'success', '2019-12-14 05:57:22', '2019-12-14 12:59:43', '2019-12-14 12:59:46', NULL, 0),
(62, 'c1', 'projector', '1', '1', 'khetkoong', '321', 'repairman', '63', 'pending', '2019-12-14 06:00:08', '2020-02-06 19:21:28', '2020-01-20 12:25:46', NULL, 0),
(63, 'c1', 'mouse', '2', '2', 'khetkoong', '321', 'repairman', '63', 'success', '2019-12-14 06:00:12', '2019-12-14 13:00:57', '2020-01-20 12:25:49', NULL, 0),
(64, 'c4', 'monitor', '3', '3', 'khetkoong', '65', 'repairman', '63', 'success', '2019-12-14 06:00:16', '2020-01-20 12:25:31', '2020-01-20 12:25:54', NULL, 0),
(65, 'c1', 'mouse', '4', '4', 'khetkoong', '65', 'repairman', '63', 'success', '2019-12-14 06:00:21', '2019-12-14 13:00:59', '2020-01-20 12:25:52', NULL, 0),
(66, 'c2', 'monitor', '5', '5', 'khetkoong', '65', 'repairman2', '66', 'pending', '2019-12-14 06:00:25', '2019-12-14 13:04:27', NULL, NULL, 0),
(67, 'c2', 'mouse', '6', '6', 'khetkoong', '65', 'repairman', '321', 'success', '2019-12-14 06:00:29', '2020-01-20 13:04:58', '2020-02-12 17:30:37', NULL, 0),
(68, 'c4', 'computer', '152233548', 'blue screen', 'เมธาวัตร', '67', 'repairman', '63', 'success', '2020-01-05 14:21:59', '2020-01-05 21:50:46', '2020-01-05 21:54:40', NULL, 0),
(69, 'c3', 'mouse', '12', '3123', 'khetkoong', '65', 'repairman', '63', 'pending', '2020-01-20 05:42:25', '2020-02-08 23:56:33', NULL, NULL, 0),
(70, 'C1', 'mouse', '23', '123', 'khetkoong', '65', 'repairman', '63', 'pending', '2020-02-06 12:07:56', '2020-02-06 19:08:27', NULL, NULL, 0),
(71, 'C5', 'monitor', '123', '321', 'khetkoong', '65', 'repairman', '63', 'pending', '2020-02-06 12:08:05', '2020-02-06 19:11:38', NULL, NULL, 0),
(72, 'C7', 'projector', '123', '321', 'khetkoong', '65', 'repairman', '63', 'success', '2020-02-06 12:08:12', '2020-02-09 00:08:54', '2020-02-09 00:09:01', NULL, 0),
(73, 'C3', 'monitor', '234', '234', 'khetkoong', '65', 'repairman', '63', 'pending', '2020-02-06 12:14:02', '2020-02-06 19:14:28', NULL, NULL, 0),
(74, 'C2', 'monitor', '423', '324', 'khetkoong', '65', 'repairman', '', 'pending', '2020-02-06 12:14:10', '2020-02-12 17:11:47', NULL, NULL, 0),
(75, 'C3', 'keyboard', '13', 'sad', 'khetkoong', '65', 'repairman', '63', 'pending', '2020-02-06 12:16:24', '2020-02-06 19:16:34', NULL, NULL, 0),
(76, 'C1', 'mouse', '123', '312', 'khetkoong', '65', 'repairman', '', 'pending', '2020-02-06 12:18:14', '2020-02-12 17:15:35', NULL, NULL, 0),
(79, 'C1', 'โปรเจคเตอร์', '1', '123', 'ปราปต์', '65', 'repairman', '63', 'pending', '2020-02-08 15:54:45', '2020-02-08 23:09:49', NULL, NULL, 0),
(80, 'C1', 'โปรเจคเตอร์', '1', '1', 'ปราปต์', '65', 'repairman', '', 'pending', '2020-02-08 10:14:34', '2020-02-12 17:15:07', NULL, NULL, 0),
(81, 'C1', 'โปรเจคเตอร์', 'ทดสอบ repairman_id', 'ทดสอบ repairman_id', 'ปราปต์', '65', 'repairman', '', 'pending', '2020-02-12 10:10:10', '2020-02-12 17:12:42', NULL, NULL, 0),
(82, 'C2', 'แอร์', 'aa-001', 'พังจ้า', 'ปราปต์', '65', 'repairman', '321', 'success', '2020-02-12 08:00:09', '2020-02-14 17:12:46', '2020-02-14 17:12:53', NULL, 1),
(83, 'C4', 'จอคอมพิวเตอร์', '1', '1', 'ปราปต์', '65', 'repairman', '321', 'success', '2020-02-12 10:26:19', '2020-02-12 17:26:32', '2020-02-12 17:30:46', NULL, 1),
(84, 'C1', 'เมาส์', 'xx-321', 'พังจ้า', 'ปราปต์', '65', 'repairman', '321', 'success', '2020-02-16 14:56:46', '2020-02-16 21:57:26', '2020-02-16 21:57:34', '2', 1);

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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `speed_3` int(11) NOT NULL,
  `speed_2` int(11) NOT NULL,
  `speed_1` int(11) NOT NULL,
  `perfect_3` int(11) NOT NULL,
  `perfect_2` int(11) NOT NULL,
  `perfect_1` int(11) NOT NULL,
  `talk_3` int(11) NOT NULL,
  `talk_2` int(11) NOT NULL,
  `talk_1` int(11) NOT NULL,
  `guide_3` int(11) NOT NULL,
  `guide_2` int(11) NOT NULL,
  `guide_1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `password`, `name`, `lastname`, `role`, `dep`, `created_at`, `speed_3`, `speed_2`, `speed_1`, `perfect_3`, `perfect_2`, `perfect_1`, `talk_3`, `talk_2`, `talk_1`, `guide_3`, `guide_2`, `guide_1`) VALUES
(63, '321', 'repairman', '56347a799179551b0f0db7f73a922489e999624b5cf741d65f4a0f361ea1c3a5', 'repairman', 'repairman', 'repairman', 'Repairman', '2019-12-01 13:51:23', 6, 1, 0, 6, 1, 0, 6, 1, 0, 6, 1, 0),
(64, 'admin1150', 'admin', '2cba595184290b17d37fe316353223385c7adb8fe19fd96abdfa8b347bd14998', 'admin', 'admin', 'admin', 'Information System', '2019-12-04 17:19:47', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 'aabba123456khetkoong', 'khetkoong', 'aa49ca30bedce5b92fdb2c7633d2ac335e0d8b6d87e37d697cb8a4c8018c6b2b', 'ปราปต์', 'วงศ์ชารี', 'member', 'Information System', '2019-12-14 12:47:22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, '025930451013-6', 'pond', 'bfc6325e9dc734bb45cd2f0eb0c33bfe7f03eaf43b6a35503f1cd6342879b892', 'เมธาวัตร', 'หล่อเจริญกุล', 'member', 'Information System', '2020-01-05 21:18:12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, '123321', 'repairman2', '56347a799179551b0f0db7f73a922489e999624b5cf741d65f4a0f361ea1c3a5', 'ปราปต์ซ่อม', 'วงศ์ชารี', 'repairman', 'Repair Man', '2020-02-11 23:25:11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 'ทดสอบ', 'repairman3', '56347a799179551b0f0db7f73a922489e999624b5cf741d65f4a0f361ea1c3a5', 'ทดสอบ', 'ทดสอบ', 'repairman', 'Repair Man', '2020-02-12 00:02:12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

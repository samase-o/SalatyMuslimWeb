-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 06:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `islamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `addarticle`
--

CREATE TABLE `addarticle` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` enum('Quran','Hadith','Fiqh') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addarticle`
--

INSERT INTO `addarticle` (`id`, `title`, `content`, `category`) VALUES
(1, 'first', 'first', 'Quran'),
(2, 'second', 'second', 'Hadith'),
(3, 'third ', 'third', 'Fiqh'),
(4, 'second', 'second', 'Hadith'),
(5, 'third ', 'third', 'Fiqh');

-- --------------------------------------------------------

--
-- Table structure for table `fatwa0`
--

CREATE TABLE `fatwa0` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answered` tinyint(1) DEFAULT 0,
  `reply` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fatwa0`
--

INSERT INTO `fatwa0` (`id`, `username`, `question`, `answered`, `reply`, `created_at`) VALUES
(0, 'roq10', 'is songs haram', 0, NULL, '2024-05-09 01:14:35'),
(0, 'zei03', 'nklo[]', 0, NULL, '2024-05-09 02:48:29'),
(0, 'new02', 'need to know why\r\n', 0, NULL, '2024-05-09 03:26:13'),
(0, '<br />\r\n<b>Warning</b>:  Undefined variable $username in <b>C:\\xampp\\htdocs\\draft\\Views\\Regular User', 'trying', 0, NULL, '2024-05-09 03:31:22'),
(0, 'new02', 'trying0', 0, NULL, '2024-05-09 03:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Rasha', 'rashasmoussa567@gmail.com', 'fti7 srt drt', '2024-05-05 02:47:17.299702'),
(2, 'omar', 'omar@gmail.com', 'feedback has done', '2024-05-05 02:49:32.819749'),
(6, 'omar', 'omar@gmail.com', 'uyg jbiubiubiub iohojgbo', '2024-05-05 15:25:54.943430'),
(7, 'omar', 'omar@gmail.com', 'uyg jbiubiubiub iohojgbo', '2024-05-05 15:30:06.521317'),
(8, 'omar', 'omar@gmail.com', 'uyg jbiubiubiub iohojgbo', '2024-05-05 15:49:09.640586'),
(14, 'omar', 'omar@gmail.com', 'uyg jbiubiubiub iohojgbo', '2024-05-05 15:52:56.037252'),
(16, 'Ali', 'aytdfxgf@kj', 'tg fyu;f it uvgyfytdtd 8754 ', '2024-05-06 13:52:08.637910'),
(17, 'miana', 'miana@gmail.com', 'knm,,.;,,.', '2024-05-06 19:01:22.223334');

-- --------------------------------------------------------

--
-- Table structure for table `mosque`
--

CREATE TABLE `mosque` (
  `id` int(11) NOT NULL,
  `government` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mosque`
--

INSERT INTO `mosque` (`id`, `government`, `name`, `address`) VALUES
(1, 'Alx', 'Al-Qa\'ed Ibrahim Mosque', 'Corniche Rd, Al Mandarah Bahri, Qesm Al Gomrok'),
(2, 'Alx', 'Abu al-Abbas al-Mursi Mosque', 'El Borsa El Kadema St, Anfoushi, Qesm Al Gomrok\r\n'),
(3, 'cairo', 'Al-Azhar Mosque ', 'Al-Azhar St'),
(4, 'Alx', 'Al-Qa\'ed Ibrahim Mosque', 'Corniche Rd, Al Mandarah Bahri, Qesm Al Gomrok'),
(5, 'Alx', 'Abu al-Abbas al-Mursi Mosque', 'El Borsa El Kadema St, Anfoushi, Qesm Al Gomrok\r\n'),
(6, 'cairo', 'Mosque of Muhammad Ali', 'Salah Salem St'),
(7, 'cairo', 'Mosque of Amr ibn al-As', 'El-Darb El-Ahmar');

-- --------------------------------------------------------

--
-- Table structure for table `prayer_progress`
--

CREATE TABLE `prayer_progress` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prayer_name` varchar(50) NOT NULL,
  `completed` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prayer_progress`
--

INSERT INTO `prayer_progress` (`id`, `username`, `prayer_name`, `completed`, `timestamp`) VALUES
(1, 'roq10', 'Fajr', 1, '2024-05-07 01:29:08'),
(2, 'roq10', 'Asr', 1, '2024-05-07 01:29:08'),
(3, '1', 'Fajr', 1, '2024-05-07 01:30:44'),
(4, '1', 'Asr', 1, '2024-05-07 01:30:44'),
(5, '1', 'Maghrib', 1, '2024-05-07 01:30:44'),
(6, '1', 'Fajr', 1, '2024-05-07 01:39:47'),
(7, '1', 'Asr', 1, '2024-05-07 01:39:47'),
(8, '1', 'Maghrib', 1, '2024-05-07 01:39:47'),
(9, '1', 'Fajr', 1, '2024-05-07 01:49:53'),
(10, '1', 'Asr', 1, '2024-05-07 01:49:53'),
(11, '1', 'Maghrib', 1, '2024-05-07 01:49:53'),
(12, '1', 'Fajr', 1, '2024-05-07 01:51:24'),
(13, '1', 'Asr', 1, '2024-05-07 01:51:24'),
(14, '1', 'Maghrib', 1, '2024-05-07 01:51:24'),
(15, '1', 'Fajr', 1, '2024-05-07 02:03:08'),
(16, '1', 'Asr', 1, '2024-05-07 02:03:08'),
(17, '1', 'Maghrib', 1, '2024-05-07 02:03:08'),
(18, '1', 'Fajr', 1, '2024-05-07 02:08:44'),
(19, '1', 'Asr', 1, '2024-05-07 02:08:44'),
(20, '1', 'Maghrib', 1, '2024-05-07 02:08:44'),
(21, '1', 'Fajr', 1, '2024-05-07 02:14:56'),
(22, '1', 'Asr', 1, '2024-05-07 02:14:56'),
(23, '1', 'Maghrib', 1, '2024-05-07 02:14:56'),
(24, '1', 'Fajr', 1, '2024-05-07 02:28:46'),
(25, '1', 'Dhuhr', 1, '2024-05-07 02:28:46'),
(26, '1', 'Asr', 1, '2024-05-07 02:28:46'),
(27, '1', 'Maghrib', 1, '2024-05-07 02:28:46'),
(28, 'new02', 'Isha', 1, '2024-05-09 00:08:28'),
(29, 'new02', 'Asr', 1, '2024-05-09 00:08:50'),
(30, 'new02', 'Maghrib', 1, '2024-05-09 00:08:50'),
(31, 'new02', 'Isha', 1, '2024-05-09 00:08:50'),
(32, 'new02', 'Asr', 1, '2024-05-09 00:08:51'),
(33, 'new02', 'Maghrib', 1, '2024-05-09 00:08:51'),
(34, 'new02', 'Isha', 1, '2024-05-09 00:08:51'),
(35, 'new02', 'Asr', 1, '2024-05-09 00:08:51'),
(36, 'new02', 'Maghrib', 1, '2024-05-09 00:08:51'),
(37, 'new02', 'Isha', 1, '2024-05-09 00:08:51'),
(38, 'new02', 'Asr', 1, '2024-05-09 00:08:51'),
(39, 'new02', 'Maghrib', 1, '2024-05-09 00:08:51'),
(40, 'new02', 'Isha', 1, '2024-05-09 00:08:51'),
(41, 'new02', 'Asr', 1, '2024-05-09 00:08:52'),
(42, 'new02', 'Maghrib', 1, '2024-05-09 00:08:52'),
(43, 'new02', 'Isha', 1, '2024-05-09 00:08:52'),
(44, 'new02', 'Dhuhr', 1, '2024-05-09 00:08:55'),
(45, 'new02', 'Fajr', 1, '2024-05-09 00:10:03'),
(46, 'new02', 'Fajr', 1, '2024-05-09 00:11:45'),
(47, 'new02', 'Dhuhr', 1, '2024-05-09 00:11:45'),
(48, 'new02', 'Asr', 1, '2024-05-09 00:11:45'),
(49, 'new02', 'Maghrib', 1, '2024-05-09 00:11:45'),
(50, 'new02', 'Isha', 1, '2024-05-09 00:11:45'),
(51, 'new02', 'Asr', 1, '2024-05-09 00:16:40'),
(52, 'new02', 'Fajr', 1, '2024-05-09 00:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `resturant`
--

CREATE TABLE `resturant` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `government` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resturant`
--

INSERT INTO `resturant` (`id`, `name`, `address`, `government`) VALUES
(1, 'Farhat Restaurant', '382 El-Gaish Rd, Cleopatra, Qesm Bab Sharq', 'Alexandria'),
(2, 'Moustafa ', '76 El-Gaish Rd, Cleopatra, Qesm Bab Sharqi\n', 'Alexandria'),
(3, 'Gad Restaurant ', '56 El-Gaish Rd, Cleopatra, Qesm Bab Sharqi\n', 'Alexandria'),
(4, 'Koshary Abou Tarek', '16 Maarouf St, Downtown', 'Cairo'),
(5, 'Felfela ', '15 Hoda Shaarawy St, Downtown', 'cairo'),
(6, 'Zooba ', '26th of July St, Zamalek', 'cairo');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Regular User'),
(3, 'Sheikh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `roleId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `email`, `password`, `roleId`) VALUES
('()', '()', '()', '()', 2),
('mia', 'Bye', 'hello@gmail.com', ',;l,;l,mk', 3),
('new02', 'new02', 'new02@gmail.com', '987456321', 2),
('roq10', 'Roqia Sayed', 'roqia@gmail.com', '987654321', 3),
('zei03', 'Zeinab Sayed', 'Zei@gmail.com', '123456789', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addarticle`
--
ALTER TABLE `addarticle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mosque`
--
ALTER TABLE `mosque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayer_progress`
--
ALTER TABLE `prayer_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resturant`
--
ALTER TABLE `resturant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `roleId` (`roleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addarticle`
--
ALTER TABLE `addarticle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mosque`
--
ALTER TABLE `mosque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prayer_progress`
--
ALTER TABLE `prayer_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `resturant`
--
ALTER TABLE `resturant`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

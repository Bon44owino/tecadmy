-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 12:47 AM
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
-- Database: `tecadmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `body`, `created_at`) VALUES
(1, 'Nahashon', 'nhasshas@gmail.com', 'Hello', 'heelle', '2023-07-27 23:06:53'),
(2, 'Erica Chang', 'cuhubotyle@mailinator.com', 'Nemo obcaecati a omn', 'Blanditiis totam sol', '2023-07-27 23:12:06'),
(3, 'Andrew Bell', 'pubocyz@mailinator.com', 'Harum totam et recus', 'Perferendis laborum', '2023-07-27 23:13:08'),
(4, 'Slade Le', 'ceholih@mailinator.com', 'Commodo omnis iste i', 'Aut blanditiis et ve', '2023-07-27 23:20:24'),
(5, 'Finn Holder', 'kagapituq@mailinator.com', 'Dolor fuga Quos aut', 'Reiciendis enim ex a', '2023-07-27 23:22:41'),
(6, 'Lara Ramsey', 'sojygel@mailinator.com', 'Qui similique earum ', 'Neque aperiam nisi c', '2023-07-27 23:23:39'),
(7, 'Octavius Sherman', 'fykozu@mailinator.com', 'Et sed labore elit ', 'Distinctio Ut rem c', '2023-07-27 23:24:44'),
(8, 'Flynn Rich', 'rabocer@mailinator.com', 'Dolor aute sunt veli', 'Quos error voluptate', '2023-07-27 23:28:48'),
(9, 'Timon Cortez', 'tanefal@mailinator.com', 'Quis deleniti in rem', 'Cupiditate labore ut', '2023-07-27 23:30:12'),
(10, '', 'vabawu@mailinator.com', 'Voluptatem voluptas ', 'Facilis cupiditate s', '2023-07-27 23:32:18'),
(11, '', 'cojeda@mailinator', 'Tempora duis laudant', 'Sit omnis commodo ve', '2023-07-27 23:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `client_ip` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `client_ip`, `status`, `created_at`) VALUES
(1, '', '', 1, NULL),
(2, 'xakycu@mailinator.com', '192.168.1.107', 1, '2023-07-28 01:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `created_at`) VALUES
(1, 'Nahashon', 'nahshon@gmail.com', '1212121212', 1, NULL),
(2, 'xifyc', 'tinofodad@mailinator.com', 'Pa$$w0rd!', 1, '2023-07-28 00:35:29'),
(4, '', '', '', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

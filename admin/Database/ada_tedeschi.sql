-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2020 at 05:22 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ada_tedeschi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `description`, `phone`, `email`, `image`) VALUES
(1, 'COMEDIENNE', 'Cinéma – Télévision – Pub – Théâtre “.', '7 62 82 70 72', 'contact@adatedeschi.com', 'uploads/CV.png');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

CREATE TABLE `portfolio_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `file_name`, `uploaded_on`) VALUES
(22, 'uploads/portfolio/IMG_5209.jpg', '2020-04-04 20:16:46'),
(23, 'uploads/portfolio/IMG_5205.jpg', '2020-04-04 20:16:46'),
(24, 'uploads/portfolio/IMG_5201_.jpg', '2020-04-04 20:16:46'),
(25, 'uploads/portfolio/IMG_5197.jpg', '2020-04-04 20:16:46'),
(26, 'uploads/portfolio/IMG_5195.jpg', '2020-04-04 20:16:46'),
(27, 'uploads/portfolio/IMG_5185_.jpg', '2020-04-04 20:16:46'),
(28, 'uploads/portfolio/IMG_5158.jpg', '2020-04-04 20:16:46'),
(29, 'uploads/portfolio/IMG_5162.jpg', '2020-04-04 20:16:46'),
(30, 'uploads/portfolio/IMG_5155.jpg', '2020-04-04 20:16:46'),
(31, 'uploads/portfolio/IMG_5153.jpg', '2020-04-04 20:16:46'),
(32, 'uploads/portfolio/HOME 2.jpg', '2020-04-04 20:16:46'),
(33, 'uploads/portfolio/HOME 1.jpg', '2020-04-04 20:16:46'),
(34, 'uploads/portfolio/HOME 1.jpg', '2020-04-04 20:30:34'),
(36, 'uploads/portfolio/menu.png', '2020-04-04 20:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `user_name`, `password`, `role`) VALUES
(1, 'Sakuntha Bimsara', 'admin@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'admin'),
(6, 'admin', 'dfq@gh.d', '934b535800b1cba8f96a5d72f72f1611', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

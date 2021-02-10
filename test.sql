-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 06:41 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `comment_text` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment_text`, `approved`) VALUES
(1, 'Sanja', 'test@test.com', 'You are the best Citrus shop!', 1),
(23, 'Test', 'test@test.rs', 'Your products are so delicious!\r\nGreat!', 1),
(24, 'Someone', 'test@test.co.rs', 'I am very pleased with the service.', 0),
(25, 'Customer', 'customer@test.com', 'The prices are very reasonable', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`) VALUES
(1, 'lemon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac mauris eu leo ultricies viverra vitae sed velit. Quisque vel fringilla erat.', 'lemon.png'),
(2, 'Orange', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac mauris eu leo ultricies viverra vitae sed velit. ', 'lemon.png'),
(3, 'Grapefruit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac mauris eu leo ultricies viverra.', 'lemon.png'),
(4, 'Citrus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac mauris eu leo ultricies viverra vitae sed velit. Quisque vel fringilla erat.', 'lemon.png'),
(5, 'Lime', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac mauris eu leo ultricies viverra vitae sed velit. Quisque vel fringilla erat.', 'lemon.png'),
(6, 'Pomelo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac mauris eu leo ultricies viverra vitae sed velit.', 'lemon.png'),
(7, 'Mandarin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac mauris eu leo ultricies viverra vitae sed velit. Quisque vel fringilla erat.', 'lemon.png'),
(8, 'Sweet lime', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac mauris eu leo ultricies viverra vitae sed velit.', 'lemon.png'),
(9, 'Bitter orange', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac mauris eu leo ultricies viverra vitae sed velit. Quisque vel fringilla erat.', 'lemon.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(1024) COLLATE utf16_unicode_ci NOT NULL,
  `is_admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `is_admin`) VALUES
(2, 'sanja', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

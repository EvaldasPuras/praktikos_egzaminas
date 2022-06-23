-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 12:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(5) NOT NULL,
  `name` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `author_first_name` varchar(20) COLLATE utf8_lithuanian_ci NOT NULL,
  `author_last_name` varchar(30) COLLATE utf8_lithuanian_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_lithuanian_ci NOT NULL,
  `ISBN` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8_lithuanian_ci NOT NULL,
  `page_count` int(4) NOT NULL,
  `category` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author_first_name`, `author_last_name`, `description`, `ISBN`, `picture`, `page_count`, `category`) VALUES
(1, 'some_random_book', 'Vardenis', 'Pavardis', 'Lorem Ipsum.', 'fwg64we6g8we4gew6g4we6g', 'some random address', 256, 'science'),
(2, 'das', 'fqf', 'ewf', 'wef', 'v', 'vw', 45, 'few'),
(3, 'hrt', 'hrt', 'tjtyj', 'tyjty', 'jytjt', 'wefwa', 78, 'efew');

-- --------------------------------------------------------

--
-- Table structure for table `book_reservations`
--

CREATE TABLE `book_reservations` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `book_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `book_reservations`
--

INSERT INTO `book_reservations` (`id`, `user_id`, `book_id`) VALUES
(2, 1, 8),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `favourite_books`
--

CREATE TABLE `favourite_books` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `book_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(20) COLLATE utf8_lithuanian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_lithuanian_ci NOT NULL,
  `isAdmin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isAdmin`) VALUES
(1, 'reader', '32250170a0dca92d53ec9624f336ca24', 0),
(2, 'admin', 'password987', 1),
(8, 'useris', 'b284bb984a5c34140762e1cbae42ec38', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_reservations`
--
ALTER TABLE `book_reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite_books`
--
ALTER TABLE `favourite_books`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_reservations`
--
ALTER TABLE `book_reservations`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favourite_books`
--
ALTER TABLE `favourite_books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 01:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarymangsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(15) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_name` text NOT NULL,
  `Phone_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_email`, `admin_pass`, `admin_name`, `Phone_no`) VALUES
(1, 'admin2', '$2y$10$qbMJYjbkD9fHrKOGxdRZ9OplW5nbmx.O5ERZz0diUeBatwBBx9oTC', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `book_name` varchar(200) DEFAULT NULL,
  `book_author` varchar(100) DEFAULT NULL,
  `book_description` text NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Edition` varchar(40) DEFAULT NULL,
  `Publisher` varchar(140) DEFAULT NULL,
  `book_group` varchar(25) DEFAULT NULL,
  `date_added` datetime DEFAULT current_timestamp(),
  `discussed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_author`, `book_description`, `Quantity`, `Edition`, `Publisher`, `book_group`, `date_added`, `discussed`) VALUES
(101, 'book 1', 'author 1', 'this is book this is book this is book this is book this is book this is book ', 1, '2016', 'ucijc', 'electronics', '2023-03-26 23:03:30', 1),
(105, 'book 3', 'author 3', 'it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..', 5, '2016', 'xsfsfsfef', 'novel', '2023-03-27 01:08:28', NULL),
(201, 'book 2', 'author 2', 'this is book this is book this is book this is book ', 6, '2001', 'ddssdc', 'electronics', '2023-03-26 23:04:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `books_issue_record`
--

CREATE TABLE `books_issue_record` (
  `book_id` int(10) UNSIGNED DEFAULT NULL,
  `book_name` int(10) UNSIGNED DEFAULT NULL,
  `current_status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books_reviews`
--

CREATE TABLE `books_reviews` (
  `discussion_id` int(15) NOT NULL,
  `book_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `discussion_title` varchar(250) NOT NULL,
  `discussion_desc` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books_reviews`
--

INSERT INTO `books_reviews` (`discussion_id`, `book_id`, `user_id`, `discussion_title`, `discussion_desc`, `timestamp`) VALUES
(1, 101, 1, 'this book is very nice', 'it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly.. it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..', '2023-03-20 18:59:00'),
(2, 201, 2, 'nice nice nice', 'very nice book, you can read out in free time.. it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..it is in very simple language, anyone can understand, i took 3 days to read out it thoroughly..', '2023-03-20 19:18:03'),
(3, 201, 2, 'good book', 'worth reading', '2023-03-27 00:18:31'),
(4, 101, 2, 'refef', 'dffddff', '2023-03-27 00:20:32'),
(5, 101, 2, 'dfcdfdsfdf', 'dfdsfdsfdfdsf', '2023-03-27 00:21:11'),
(6, 101, 2, 'dfcdfdsfdf', 'dfdsfdsfdfdsf', '2023-03-27 00:28:03'),
(7, 101, 2, 'fdgdfve', 'sdfsfsdf', '2023-03-27 00:28:14'),
(8, 101, 2, 'fdgdfve', 'sdfsfsdf', '2023-03-27 00:28:54'),
(9, 101, 2, 'cscscsc', 'xscxsc', '2023-03-27 00:28:59'),
(10, 201, 2, 'fefsdfc', 'dcsdcsdcef', '2023-03-27 00:35:47'),
(11, 201, 2, 'fefsdfc', 'dcsdcsdcef', '2023-03-27 00:35:55'),
(12, 101, 2, 'xsfsdc', 'sdcscdscsdcs', '2023-03-27 00:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `borrowings`
--

CREATE TABLE `borrowings` (
  `issue_id` int(11) NOT NULL,
  `user_Id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED DEFAULT NULL,
  `book_name` varchar(50) DEFAULT NULL,
  `Issue_Date` date DEFAULT current_timestamp(),
  `Return_Date` date DEFAULT current_timestamp(),
  `Status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `user_id` int(15) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `book_id` int(15) NOT NULL,
  `request_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(15) NOT NULL,
  `username` varchar(150) DEFAULT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` text NOT NULL,
  `Phone_no` int(10) NOT NULL,
  `since` datetime NOT NULL DEFAULT current_timestamp(),
  `issues_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `user_pass`, `Phone_no`, `since`, `issues_status`) VALUES
(1, NULL, 'user1@g.c', '$2y$10$SwN7w6mPrfdzKgJ0U9VN0OsVqSUKagNSOVJN2un139zNUikNjE00a', 0, '2023-03-20 20:07:59', NULL),
(2, NULL, 'user', '$2y$10$6iUgvzULZGKFM1KH6aONXegHzEBlNYvicgooD0ebelSMX9bT8R.Pi', 0, '2023-03-20 23:01:27', NULL),
(4, NULL, 'useri', '$2y$10$ErCuTEQv0ZtYxX3nrRTLeeLnMsxEDUIpGC3VKas.tz8FH8Dy2K7MG', 0, '2023-03-21 19:50:47', NULL),
(5, NULL, 'user2', '$2y$10$YF8zJz1TjMyD9sXagZlAPucIw9Bul/GriCPkAC8mTESBFsl.Rvski', 0, '2023-03-21 20:04:45', NULL),
(6, NULL, 'admin1', '$2y$10$rmvN4B0wlCFMGdl4pEFoHeEySlmYBe9.bLYUxEXa67lJvE3v8U0dK', 0, '2023-03-27 01:29:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `books_issue_record`
--
ALTER TABLE `books_issue_record`
  ADD KEY `Book_Number` (`book_id`);

--
-- Indexes for table `books_reviews`
--
ALTER TABLE `books_reviews`
  ADD PRIMARY KEY (`discussion_id`);

--
-- Indexes for table `borrowings`
--
ALTER TABLE `borrowings`
  ADD PRIMARY KEY (`issue_id`),
  ADD KEY `Book_Number` (`book_id`),
  ADD KEY `Scholar_Id` (`user_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `books_reviews`
--
ALTER TABLE `books_reviews`
  MODIFY `discussion_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `borrowings`
--
ALTER TABLE `borrowings`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

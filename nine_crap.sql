-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 05:41 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nine_crap`
--

-- --------------------------------------------------------

--
-- Table structure for table `crap_category`
--

CREATE TABLE `crap_category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crap_category`
--

INSERT INTO `crap_category` (`cat_id`, `cat_title`) VALUES
(1, 'Funny'),
(2, 'Kpop'),
(3, 'Gaming'),
(4, 'Respect');

-- --------------------------------------------------------

--
-- Table structure for table `crap_post`
--

CREATE TABLE `crap_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `catp_id` int(11) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_author` varchar(255) DEFAULT NULL,
  `post_img` varchar(255) DEFAULT NULL,
  `post_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crap_post`
--

INSERT INTO `crap_post` (`post_id`, `post_title`, `catp_id`, `post_slug`, `post_author`, `post_img`, `post_created`) VALUES
(1, 'Post One', 1, 'post-one', NULL, '347561303_1198536860808552_3736029061913400171_n.jpg', '2023-05-25 08:40:48'),
(3, 'Post Threezz', 3, 'post-threezz', NULL, 'hannahowo.jpg', '2023-05-25 08:50:30'),
(4, 'e wall paper mo na', 4, 'e-wall-paper-mo-na', NULL, '349142078_756260912948628_9030221415260453250_n.jpg', '2023-05-26 14:53:52'),
(5, 'Post Six', 4, 'post-six', NULL, 'fin.jpg', '2023-05-30 14:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `crap_users`
--

CREATE TABLE `crap_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crap_users`
--

INSERT INTO `crap_users` (`user_id`, `username`, `email`, `password`, `avatar`, `date_created`) VALUES
(1, 'sisart', 'sisart03@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'bruh.jpg', '2023-06-02 19:04:15'),
(2, 'pagong', 'pagong@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '03eb25a0e4557e282715af6f96c0a6168a96b64b.jpg', '2023-06-02 19:05:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crap_category`
--
ALTER TABLE `crap_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `crap_post`
--
ALTER TABLE `crap_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `crap_users`
--
ALTER TABLE `crap_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crap_category`
--
ALTER TABLE `crap_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `crap_post`
--
ALTER TABLE `crap_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `crap_users`
--
ALTER TABLE `crap_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

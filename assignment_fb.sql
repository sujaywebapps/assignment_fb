-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 02:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_fb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(4) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `p_id`, `c_text`) VALUES
(1, 7, 'nice'),
(2, 7, 'good'),
(3, 7, 'awesome'),
(4, 7, 'best'),
(5, 7, 'great'),
(6, 8, 'good'),
(7, 8, 'cool'),
(8, 8, 'superb..!!'),
(9, 8, 'sweet'),
(10, 8, 'awesome pic'),
(11, 8, 'good good'),
(12, 8, 'great good'),
(13, 8, 'sujaytest'),
(14, 7, 'sujay test report'),
(15, 7, 'sujay test report1'),
(16, 7, 'sujay abc'),
(17, 7, 'sujay rep'),
(18, 7, 'sujay s'),
(19, 8, 'sujay abcc'),
(20, 8, 'sujay sujay'),
(21, 7, 'sujay done'),
(22, 9, 'sujay'),
(23, 8, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int(4) NOT NULL,
  `p_text` varchar(1000) NOT NULL,
  `p_img` varchar(50) NOT NULL,
  `p_video` varchar(50) NOT NULL,
  `p_user` varchar(50) NOT NULL,
  `p_like` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `p_text`, `p_img`, `p_video`, `p_user`, `p_like`) VALUES
(7, 'suajyaa', '1486365006.jpg', '', 'sujay', 12),
(8, 'sujay', '1486365283.jpg', '', 'sujay', 15),
(9, 'test', '1486384823.jpg', '', 'sujay', 5),
(10, 'sujay', '1486384926.jpg', '', 'sujay', 0),
(11, 'sujay 1', '1486385034.jpg', '', 'sujay', 9),
(12, 'yellow', '1486385113.jpg', '', 'sujay', 3),
(13, 'sujay sujay rtes', '1486385389.jpg', '', 'sujay', 2),
(14, 'sujaya', '1486385413.jpg', '', 'sujay', 2),
(15, 'test ex', '1486385714.jpg', '', 'sujay', 3),
(16, 'ex', '1486385737.jpg', '', 'sujay', 0),
(17, 'ssdsa', '1486385837.jpg', '', 'sujay', 0),
(18, 'asdsad', '1486385852.jpg', '', 'sujay', 0),
(19, 'sdsssad', '1486385946.jpg', '', 'sujay', 0),
(20, 'asdsa', '1486386063.jpg', '', 'sujay', 0),
(21, 'asa', '1486386216.jpg', '', 'sujay', 0),
(22, 'asdas', '1486386222.jpg', '', 'sujay', 0),
(23, 'sada', '1486386268.jpg', '', 'sujay', 0),
(24, 'asdsadsa', '1486386275.jpg', '', 'sujay', 0),
(25, 'sdfsdafdas', '1486386356.jpg', '', 'sujay', 0),
(26, 'sdfsdafdas', '1486386359.jpg', '', 'sujay', 0),
(27, 'sdfsdafdas', '1486386361.jpg', '', 'sujay', 0),
(28, 'sdfsdafdas', '1486386362.jpg', '', 'sujay', 0),
(29, 'sdfsdafdas', '1486386367.jpg', '', 'sujay', 0),
(30, 'asdsa', '1486386423.jpg', '', 'sujay', 0),
(31, 'asdasd', '1486386485.jpg', '', 'sujay', 0),
(32, 'sada', '1486386575.jpg', '', 'sujay', 0),
(33, 'asdas', '1486386633.jpg', '', 'sujay', 0),
(34, 'sadas', '1486386665.jpg', '', 'sujay', 0),
(35, 'asdasdf', '1486386679.jpg', '', 'sujay', 2),
(36, 'sadasdf', '1486386710.jpg', '', 'sujay', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`,`p_id`),
  ADD KEY `post_comments` (`p_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `post_comments` FOREIGN KEY (`p_id`) REFERENCES `posts` (`p_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

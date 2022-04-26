-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 04:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `bio` text COLLATE utf8_persian_ci NOT NULL,
  `profile_tmp_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `experience` int(3) NOT NULL,
  `completed_projects` int(10) NOT NULL,
  `user_information` text COLLATE utf8_persian_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `education` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `languages` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `username`, `profession`, `bio`, `profile_tmp_name`, `experience`, `completed_projects`, `user_information`, `location`, `email`, `education`, `mobile_number`, `languages`, `name`) VALUES
(23, 'mohammad', 'programmer', 'cv_usernamecv_usernamecv_usernamecv_usernamecv_usernamecv_usernamecv_usernamecv_username', '625957da4a4a56.33136649.jpg', 2, 22, 'vvvvcv_usernamecv_usernamecv_cv_usernamecv_usernamecv_usernamecv_usernamecv_usernamecv_usernamecv_usernamecv_usernameusernamecv_usernamecv_usernamecv_usernamecv_username', 'bolbanabad frontend shahrdary ', 'deloonebolbanabad@gmail.com', 'farabi bolbanabad', 2147483647, 'persian, english, kurdish', 'mohammad\nezady'),
(24, 'mohammad', 'programmer', '625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649', '62595b3cdcab33.47544748.jpg', 2, 22, '625957da4a4a56.33136649625957daVV625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.331366494a4a56.33136649625957da4a4a56.33136649', 'bolbanabad frontend shahrdary ', 'deloonebolbanabad@gmail.com', 'farabi bolbanabad', 2147483647, 'persian, english, kurdish', 'mohammad\nezady'),
(25, 'mohammadd', 'programmer', '625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649', '62595b7bf308c4.65294376.jpg', 2, 22, '625957da4a4a56.33136649625957daVV625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.331366494a4a56.33136649625957da4a4a56.33136649', 'bolbanabad frontend shahrdary ', 'deloonebolbanabad@gmail.com', 'farabi bolbanabad', 2147483647, 'persian, english, kurdish', 'mohammad\nezady'),
(26, 'mohammmad', 'programmer', 'bbbb625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4 56. 3313 6649', '62595c77ec4c86.64244161.jpg', 2, 21, '625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649625957da4a4a56.33136649', 'bolbanabad', 'mo22ham29mad@gmail.com', 'farabi', 2147483647, 'farsi', 'mohammad\nezady'),
(27, 'helo', 'programmer', 'programmer\r\nprogrammer\r\nprogrammer\r\nprogrammer\r\nprogrammer\r\nprogrammer\r\nprogrammer\r\nprogrammerprogrammer', '625aa7cc53cf37.16404594.jpeg', 2, 22, 'programmerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammer', 'bolbanabad frontend shahrdary ', 'amiri.arm@gmail.com', 'farabi bolbanabad', 2147483647, 'persian, english, kurdish', 'mohammad\nezady'),
(28, 'world', 'programmer', 'programmerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammer', '625aa86aa6d4b4.47129762.jpeg', 2, 22, 'programmerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammer', 'bolbanabad frontend shahrdary ', 'deloonebolbanabad@gmail.com', 'farabi bolbanabad', 2147483647, 'persian, english, kurdish', 'mohammad\nezady'),
(29, 'ezadyy', 'programmer', 'programmerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammer', '625aa8e4596db2.58803352.jpeg', 2, 22, 'programmerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammerprogrammer', 'bolbanabad frontend shahrdary ', 'deloonebolbanabad@gmail.com', 'farabi bolbanabad', 2147483647, 'persian, english, kurdish', 'mohammad\nezady');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

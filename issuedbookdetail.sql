-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 09:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `issuedbookdetail`
--

CREATE TABLE `issuedbookdetail` (
  `id` int(44) NOT NULL,
  `bookid` varchar(55) NOT NULL,
  `studentid` varchar(55) NOT NULL,
  `issuedate` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `returndate` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `status` int(5) NOT NULL DEFAULT 0,
  `cash` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuedbookdetail`
--

INSERT INTO `issuedbookdetail` (`id`, `bookid`, `studentid`, `issuedate`, `returndate`, `status`, `cash`) VALUES
(1, '1111', 'SID04', '2020-11-04 09:52:11.921947', NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issuedbookdetail`
--
ALTER TABLE `issuedbookdetail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookid` (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issuedbookdetail`
--
ALTER TABLE `issuedbookdetail`
  MODIFY `id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

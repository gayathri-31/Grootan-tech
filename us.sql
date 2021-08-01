-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 03:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `use`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_detail`
--

CREATE TABLE `users_detail` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prof` varchar(30) NOT NULL,
  `add` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_detail`
--

INSERT INTO `users_detail` (`fname`, `lname`, `phno`, `dob`, `email`, `prof`, `add`) VALUES
('GAYATHRI', 'PALANISAMY', '9648569854', '30/07/2000', '21', 'STUDENT', 'NO-1,\r\nRSM nagar,\r\nchennai.'),
('GAYATHRI', 'PALANISAMY', '9648569854', '30/07/2000', '21', 'STUDENT', 'NO-1,\r\nRSM nagar,\r\nchennai.'),
('ARAV', 'AAAR', '5621875555', '30/7/2001', 'ARAV@gmail.com', 'student', '40, ram nagar,\r\npondy.'),
('aa', 'w', '123', '234', 'sdfg@gm.com', 'asdc', 'sdsdf'),
('aaasdfgb', 'wsdfg', '123234567', '234345', 'sdfg@gm.com', 'asdc', 'sdsdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

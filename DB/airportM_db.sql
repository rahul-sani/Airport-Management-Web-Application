-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2020 at 09:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airport_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_ticket`
--

CREATE TABLE `book_ticket` (
  `book_id` int(10) NOT NULL,
  `flight_id` int(6) NOT NULL,
  `user` varchar(30) NOT NULL,
  `flight_name` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `phno` int(10) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `fl_from` varchar(30) DEFAULT NULL,
  `fl_to` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `departure` time DEFAULT NULL,
  `arrival` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_ticket`
--

INSERT INTO `book_ticket` (`book_id`, `flight_id`, `user`, `flight_name`, `name`, `phno`, `bday`, `fl_from`, `fl_to`, `date`, `departure`, `arrival`) VALUES
(2, 23, 'sys', 'aba', 'a 2', 3, '2020-05-07', 'Goa', 'Goa', '2020-05-12', '00:00:00', '00:00:00'),
(3, 23, 'sys', 'aba', 'a s', 12, '2020-05-07', 'Goa', 'Goa', '2020-05-12', '00:00:00', '00:00:00'),
(4, 23, 'sys', 'aba', 'a asd', 12, '2020-05-06', 'Goa', 'Goa', '2020-05-12', '00:00:00', '00:00:00'),
(5, 13, 'sys', 'aba', 'a 2', 4, '2020-06-05', 'Goa', 'Goa', '2020-05-12', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `flight_id` int(11) NOT NULL,
  `flight_name` varchar(10) DEFAULT NULL,
  `fl_from` varchar(20) DEFAULT NULL,
  `fl_to` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `departure` varchar(8) DEFAULT NULL,
  `arrival` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `phno` int(11) DEFAULT NULL,
  `uname` varchar(10) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `phno`, `uname`, `email`, `password`) VALUES
('admin', 'admin', 99999, 'admin', 'admin@mail.com', 'admin'),
('sys', 'sys', 9999, 'sys', 'abc@mail.com', 'sys'),
('test', 'test', 9999, 'test', 'test@mail.com', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_ticket`
--
ALTER TABLE `book_ticket`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

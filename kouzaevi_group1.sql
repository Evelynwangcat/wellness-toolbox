-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2018 at 11:54 AM
-- Server version: 5.5.58-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kouzaevi_group1`
--

-- --------------------------------------------------------

--
-- Table structure for table `MyTools`
--

CREATE TABLE `MyTools` (
  `id` int(11) NOT NULL,
  `User-id` int(11) NOT NULL,
  `Tool-id` int(11) NOT NULL,
  `Section` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MyTools`
--

INSERT INTO `MyTools` (`id`, `User-id`, `Tool-id`, `Section`) VALUES
(11, 0, 0, ''),
(10, 0, 0, ''),
(9, 0, 0, ''),
(5, 0, 5, 'B'),
(12, 0, 0, ''),
(13, 0, 0, ''),
(14, 0, 0, ''),
(15, 0, 0, 'B'),
(16, 0, 12, 'B'),
(17, 1, 14, 'B'),
(18, 5, 15, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `Tool`
--

CREATE TABLE `Tool` (
  `Tool-id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Section` varchar(1) NOT NULL,
  `Description` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tool`
--

INSERT INTO `Tool` (`Tool-id`, `Name`, `Section`, `Description`, `Date`) VALUES
(1, 'Yoga', 'B', 'Yoga - Description', '2018-01-07'),
(2, 'Running', 'B', 'Running - Tool description', '2018-01-07'),
(5, 'Work', 'A', 'Description', '2018-01-08'),
(4, 'Walking', 'B', 'Description goes here', '2018-01-08'),
(6, 'Chores', 'A', 'Description', '2018-01-08'),
(7, 'Study', 'A', 'Description', '2018-01-08'),
(8, 'Read', 'A', 'Description', '2018-01-08'),
(9, 'Learn', 'A', 'Learn', '2018-01-08'),
(10, '$Name', '$', '$Description', '0000-00-00'),
(11, '$Name', 'B', '$Description', '2004-11-12'),
(12, 'efefrf', 'B', 'cdcdcdc', '2018-01-09'),
(13, 'swswsws', 'B', 'swswswswsws', '2018-01-09'),
(14, 'rrrrrrrrr', 'E', 'rrrrrrrrr', '2018-01-09'),
(15, 'swsws', 'B', 'swswsws', '2018-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `User-id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`User-id`, `Username`, `Password`, `Email`) VALUES
(1, 'User1', 'Pass1', 'Email@gmail.com'),
(2, 'User2', 'Pass2', 'Email2@gmail.com'),
(3, 'User4', 'Pass4', 'user-pass-4'),
(5, 'User5', 'Pass5', 'pass-5-user5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MyTools`
--
ALTER TABLE `MyTools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User-id` (`User-id`),
  ADD KEY `Tool-id` (`Tool-id`),
  ADD KEY `Section` (`Section`);

--
-- Indexes for table `Tool`
--
ALTER TABLE `Tool`
  ADD PRIMARY KEY (`Tool-id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`User-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MyTools`
--
ALTER TABLE `MyTools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `Tool`
--
ALTER TABLE `Tool`
  MODIFY `Tool-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `User-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2015 at 07:00 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `froom`
--

-- --------------------------------------------------------

--
-- Table structure for table `room_detail`
--

CREATE TABLE IF NOT EXISTS `room_detail` (
  `room_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `property_type` int(11) NOT NULL,
  `room_type` int(11) NOT NULL,
  `accommodates` int(11) NOT NULL,
  `tv` int(1) NOT NULL,
  `ac` int(1) NOT NULL,
  `heating` int(1) NOT NULL,
  `internet` int(1) NOT NULL,
  `kitchen` int(1) NOT NULL,
  `pool` int(1) NOT NULL,
  `elevator` int(1) NOT NULL,
  `pets_allowed` int(1) NOT NULL,
  `smoke_allowed` int(1) NOT NULL,
  `kid_friendly` int(1) NOT NULL,
  `others` varchar(344) NOT NULL,
  `gym` int(1) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_detail`
--

INSERT INTO `room_detail` (`room_id`, `property_id`, `beds`, `baths`, `property_type`, `room_type`, `accommodates`, `tv`, `ac`, `heating`, `internet`, `kitchen`, `pool`, `elevator`, `pets_allowed`, `smoke_allowed`, `kid_friendly`, `others`, `gym`, `description`) VALUES
(1, 17, 4, 7, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '["on",false,false,false,false]', 0, ''),
(2, 18, 4, 7, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '["on",false,false,false,false]', 0, ''),
(3, 19, 6, 8, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '["on","on","on","on","on"]', 0, ''),
(4, 20, 8, 6, 0, 0, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '["on","on",false,"on",false]', 0, ''),
(5, 21, 5, 7, 7, 2, 5, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, '["on","on",false,"on",false]', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room_detail`
--
ALTER TABLE `room_detail`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room_detail`
--
ALTER TABLE `room_detail`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

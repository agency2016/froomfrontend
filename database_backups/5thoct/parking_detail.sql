-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2015 at 07:01 AM
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
-- Table structure for table `parking_detail`
--

CREATE TABLE IF NOT EXISTS `parking_detail` (
  `parking_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `space_type` int(11) NOT NULL,
  `property_type` int(11) NOT NULL,
  `perhour` int(11) NOT NULL,
  `perday` int(11) NOT NULL,
  `perweek` int(11) NOT NULL,
  `min_price` int(11) NOT NULL,
  `spaces` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `wide` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `instructions` varchar(300) NOT NULL,
  `others` varchar(300) NOT NULL,
  `cctv` int(1) NOT NULL,
  `security_guard` int(1) NOT NULL,
  `security_gates` int(1) NOT NULL,
  `car_wash` int(1) NOT NULL,
  `sheltered_park` int(1) NOT NULL,
  `lighting` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking_detail`
--

INSERT INTO `parking_detail` (`parking_id`, `property_id`, `space_type`, `property_type`, `perhour`, `perday`, `perweek`, `min_price`, `spaces`, `height`, `wide`, `description`, `instructions`, `others`, `cctv`, `security_guard`, `security_gates`, `car_wash`, `sheltered_park`, `lighting`) VALUES
(1, 22, 6, 4, 23, 0, 44, 44, 3, 1, 2, 'm,r', ',mg', '[false,"on",false,false,false,"on"]', 1, 0, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parking_detail`
--
ALTER TABLE `parking_detail`
  ADD PRIMARY KEY (`parking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parking_detail`
--
ALTER TABLE `parking_detail`
  MODIFY `parking_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

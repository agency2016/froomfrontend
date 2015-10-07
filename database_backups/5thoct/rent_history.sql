-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2015 at 01:01 PM
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
-- Table structure for table `rent_history`
--

CREATE TABLE IF NOT EXISTS `rent_history` (
  `rent_history_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `rent_amount` float NOT NULL,
  `rent_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent_history`
--

INSERT INTO `rent_history` (`rent_history_id`, `property_id`, `user_id`, `user_name`, `rent_amount`, `rent_date`) VALUES
(28, 8, 14, 'maria', 1222, '2015-10-04'),
(30, 5, 15, 'yasir', 9999, '2015-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rent_history`
--
ALTER TABLE `rent_history`
  ADD PRIMARY KEY (`rent_history_id`),
  ADD KEY `fk_property_rent_history` (`property_id`),
  ADD KEY `fk_user_rent_history` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rent_history`
--
ALTER TABLE `rent_history`
  MODIFY `rent_history_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rent_history`
--
ALTER TABLE `rent_history`
  ADD CONSTRAINT `fk_property_rent_history` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`),
  ADD CONSTRAINT `fk_user_rent_history` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

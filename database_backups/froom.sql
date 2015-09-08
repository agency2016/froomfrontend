-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2015 at 09:46 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `froom`
--
CREATE DATABASE IF NOT EXISTS `froom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `froom`;

-- --------------------------------------------------------

--
-- Table structure for table `cost_history`
--

CREATE TABLE IF NOT EXISTS `cost_history` (
  `cost_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `cost_purpose` varchar(200) NOT NULL,
  `cost_amount` float NOT NULL,
  `cost_date` date NOT NULL,
  PRIMARY KEY (`cost_history_id`),
  KEY `fk_Property_cost_history` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cost_reduce`
--

CREATE TABLE IF NOT EXISTS `cost_reduce` (
  `cost_reduce_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `prev_cost` float NOT NULL,
  `current_cost` float NOT NULL,
  PRIMARY KEY (`cost_reduce_id`),
  KEY `fk_property_cost_reduce` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `email_schedule`
--

CREATE TABLE IF NOT EXISTS `email_schedule` (
  `email_schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_template_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `email_to` int(11) NOT NULL,
  `time_gap` int(11) NOT NULL,
  PRIMARY KEY (`email_schedule_id`),
  KEY `fk_property_email_schedule` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE IF NOT EXISTS `email_template` (
  `email_template_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_head` varchar(200) NOT NULL,
  `email_body` varchar(600) NOT NULL,
  `email_keywords` int(11) NOT NULL,
  PRIMARY KEY (`email_template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE IF NOT EXISTS `payment_history` (
  `payment_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `payment_from` int(11) NOT NULL,
  `payment_amount` float NOT NULL,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`payment_history_id`),
  KEY `fk_property_payment_history` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_name` varchar(300) NOT NULL,
  `property_dm` int(11) NOT NULL,
  `plat` float NOT NULL,
  `property_category_id` int(11) NOT NULL,
  `plong` float NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_category`
--

CREATE TABLE IF NOT EXISTS `property_category` (
  `property_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_desc` varchar(200) NOT NULL,
  PRIMARY KEY (`property_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_detail`
--

CREATE TABLE IF NOT EXISTS `property_detail` (
  `property_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `property_features_id` int(11) NOT NULL,
  `feature_desc` varchar(1200) NOT NULL,
  PRIMARY KEY (`property_detail_id`),
  KEY `fk_property_detail` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

CREATE TABLE IF NOT EXISTS `property_features` (
  `property_features_id` int(11) NOT NULL,
  `property_category` int(11) NOT NULL,
  `feature_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `rating_date` date NOT NULL,
  PRIMARY KEY (`rating_id`),
  KEY `fk_property_rating` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rent_history`
--

CREATE TABLE IF NOT EXISTS `rent_history` (
  `rent_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rent_amount` float NOT NULL,
  `rent_date` int(11) NOT NULL,
  `rent_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`rent_history_id`),
  KEY `fk_property_rent_history` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `review_content` varchar(500) NOT NULL,
  `review_date` date NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `fk_property_review` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signup_date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `is_admin` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `user_profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `zip_code` varchar(12) NOT NULL,
  `current_state` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `current_address` varchar(300) NOT NULL,
  `edit_date` date NOT NULL,
  PRIMARY KEY (`user_profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wishlist_date` int(11) NOT NULL,
  KEY `fk_property_wishlist` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cost_history`
--
ALTER TABLE `cost_history`
  ADD CONSTRAINT `fk_Property_cost_history` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `cost_reduce`
--
ALTER TABLE `cost_reduce`
  ADD CONSTRAINT `fk_property_cost_reduce` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `email_schedule`
--
ALTER TABLE `email_schedule`
  ADD CONSTRAINT `fk_property_email_schedule` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD CONSTRAINT `fk_property_payment_history` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `property_detail`
--
ALTER TABLE `property_detail`
  ADD CONSTRAINT `fk_property_detail` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_property_rating` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `rent_history`
--
ALTER TABLE `rent_history`
  ADD CONSTRAINT `fk_property_rent_history` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_property_review` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_property_wishlist` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

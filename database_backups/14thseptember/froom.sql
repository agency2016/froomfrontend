-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2015 at 07:38 AM
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
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'pm'),
(2, 1, 'xyz'),
(3, 2, 'pqr'),
(4, 2, 'mlp');

-- --------------------------------------------------------

--
-- Table structure for table `cost_history`
--

CREATE TABLE IF NOT EXISTS `cost_history` (
  `cost_history_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `cost_purpose` varchar(200) NOT NULL,
  `cost_amount` float NOT NULL,
  `cost_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cost_reduce`
--

CREATE TABLE IF NOT EXISTS `cost_reduce` (
  `cost_reduce_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `prev_cost` float NOT NULL,
  `current_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_schedule`
--

CREATE TABLE IF NOT EXISTS `email_schedule` (
  `email_schedule_id` int(11) NOT NULL,
  `email_template_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `email_to` int(11) NOT NULL,
  `time_gap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE IF NOT EXISTS `email_template` (
  `email_template_id` int(11) NOT NULL,
  `email_head` varchar(200) NOT NULL,
  `email_body` varchar(600) NOT NULL,
  `email_keywords` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE IF NOT EXISTS `payment_history` (
  `payment_history_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `payment_from` int(11) NOT NULL,
  `payment_amount` float NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `property_id` int(11) NOT NULL,
  `property_name` varchar(300) NOT NULL,
  `property_dm` int(11) NOT NULL,
  `property_category_id` int(11) NOT NULL,
  `plat` float NOT NULL,
  `plong` float NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `property_rent_status` tinyint(4) NOT NULL,
  `property_publish_status` tinyint(4) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `street` varchar(111) NOT NULL,
  `city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_category`
--

CREATE TABLE IF NOT EXISTS `property_category` (
  `property_category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_desc` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_category`
--

INSERT INTO `property_category` (`property_category_id`, `category_name`, `category_desc`) VALUES
(3, 'home', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `property_detail`
--

CREATE TABLE IF NOT EXISTS `property_detail` (
  `property_detail_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_features_id` int(11) NOT NULL,
  `feature_desc` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

CREATE TABLE IF NOT EXISTS `property_features` (
  `property_features_id` int(11) NOT NULL,
  `property_category_id` int(11) NOT NULL,
  `feature_name` varchar(200) NOT NULL,
  `field_type` varchar(100) NOT NULL,
  `options` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `rating_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `rating_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent_history`
--

CREATE TABLE IF NOT EXISTS `rent_history` (
  `rent_history_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rent_amount` float NOT NULL,
  `rent_date` int(11) NOT NULL,
  `rent_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `review_content` varchar(500) NOT NULL,
  `review_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postal_code` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `country`, `postal_code`) VALUES
(1, 'new york', 'usa', '2000'),
(2, 'wasington DC', 'usa', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signup_date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `is_admin` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `signup_date`, `is_active`, `is_admin`) VALUES
(1, 'maria', 'maria@agencydelta.com', '123456', '2015-09-10', 1, 1),
(2, 'yasir', 'yasir@gmail.com', '123456', '2015-09-09', 1, 0),
(5, 'demo', 'demo@demo.com', '1234', '2015-09-08', 1, 0),
(6, 'demo', 'demo@demo.com', '1234', '2015-09-08', 0, 0),
(7, 'demo', 'demo@demo.com', '1234', '2015-09-08', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `user_profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `zip_code` varchar(12) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `current_city` int(10) NOT NULL,
  `current_state` int(10) NOT NULL,
  `current_address` varchar(300) NOT NULL,
  `edit_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_profile_id`, `user_id`, `first_name`, `last_name`, `zip_code`, `phone`, `current_city`, `current_state`, `current_address`, `edit_date`) VALUES
(2, 1, 'mariaa', 'zamana', '2002', '1234344', 1, 1, 'sss', '2015-09-14'),
(9, 2, 'yes', 'ir', '044', '233', 4, 2, '222', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wishlist_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `fk_citystate` (`state_id`);

--
-- Indexes for table `cost_history`
--
ALTER TABLE `cost_history`
  ADD PRIMARY KEY (`cost_history_id`),
  ADD KEY `fk_Property_cost_history` (`property_id`);

--
-- Indexes for table `cost_reduce`
--
ALTER TABLE `cost_reduce`
  ADD PRIMARY KEY (`cost_reduce_id`),
  ADD KEY `fk_property_cost_reduce` (`property_id`);

--
-- Indexes for table `email_schedule`
--
ALTER TABLE `email_schedule`
  ADD PRIMARY KEY (`email_schedule_id`),
  ADD KEY `fk_property_email_schedule` (`property_id`),
  ADD KEY `fk_email_Schedule_email_template` (`email_template_id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`email_template_id`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`payment_history_id`),
  ADD KEY `fk_property_payment_history` (`property_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `fk_user_property` (`user_id`),
  ADD KEY `fk_cat_property` (`property_category_id`);

--
-- Indexes for table `property_category`
--
ALTER TABLE `property_category`
  ADD PRIMARY KEY (`property_category_id`);

--
-- Indexes for table `property_detail`
--
ALTER TABLE `property_detail`
  ADD PRIMARY KEY (`property_detail_id`),
  ADD KEY `fk_property_detail` (`property_id`);

--
-- Indexes for table `property_features`
--
ALTER TABLE `property_features`
  ADD KEY `fk_cat_property_features` (`property_category_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `fk_property_rating` (`property_id`),
  ADD KEY `fk_user_rating` (`user_id`);

--
-- Indexes for table `rent_history`
--
ALTER TABLE `rent_history`
  ADD PRIMARY KEY (`rent_history_id`),
  ADD KEY `fk_property_rent_history` (`property_id`),
  ADD KEY `fk_user_rent_history` (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `fk_property_review` (`property_id`),
  ADD KEY `fk_user_review` (`user_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_profile_id`),
  ADD KEY `fk_user_profile_user` (`user_id`),
  ADD KEY `fk_cityuser` (`current_state`),
  ADD KEY `fk_cityuser_state` (`current_city`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `fk_property_wishlist` (`property_id`),
  ADD KEY `fk_user_wishlist` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cost_history`
--
ALTER TABLE `cost_history`
  MODIFY `cost_history_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cost_reduce`
--
ALTER TABLE `cost_reduce`
  MODIFY `cost_reduce_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email_schedule`
--
ALTER TABLE `email_schedule`
  MODIFY `email_schedule_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `email_template_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `payment_history_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `property_category`
--
ALTER TABLE `property_category`
  MODIFY `property_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `property_detail`
--
ALTER TABLE `property_detail`
  MODIFY `property_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rent_history`
--
ALTER TABLE `rent_history`
  MODIFY `rent_history_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_profile_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_citystate` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`);

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
  ADD CONSTRAINT `fk_email_Schedule_email_template` FOREIGN KEY (`email_template_id`) REFERENCES `email_template` (`email_template_id`),
  ADD CONSTRAINT `fk_property_email_schedule` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD CONSTRAINT `fk_property_payment_history` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `fk_cat_property` FOREIGN KEY (`property_category_id`) REFERENCES `property_category` (`property_category_id`),
  ADD CONSTRAINT `fk_user_property` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `property_detail`
--
ALTER TABLE `property_detail`
  ADD CONSTRAINT `fk_property_detail` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `property_features`
--
ALTER TABLE `property_features`
  ADD CONSTRAINT `fk_cat_property_features` FOREIGN KEY (`property_category_id`) REFERENCES `property_category` (`property_category_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_property_rating` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`),
  ADD CONSTRAINT `fk_user_rating` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `rent_history`
--
ALTER TABLE `rent_history`
  ADD CONSTRAINT `fk_property_rent_history` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`),
  ADD CONSTRAINT `fk_user_rent_history` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_property_review` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`),
  ADD CONSTRAINT `fk_user_review` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `fk_cityuser` FOREIGN KEY (`current_state`) REFERENCES `state` (`state_id`),
  ADD CONSTRAINT `fk_cityuser_state` FOREIGN KEY (`current_city`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `fk_user_profile_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_property_wishlist` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`),
  ADD CONSTRAINT `fk_user_wishlist` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2015 at 12:57 PM
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
-- Table structure for table `t_cost_history`
--

CREATE TABLE IF NOT EXISTS `t_cost_history` (
  `cost_history_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `cost_purpose` varchar(200) NOT NULL,
  `cost_amount` float NOT NULL,
  `cost_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_cost_reduce`
--

CREATE TABLE IF NOT EXISTS `t_cost_reduce` (
  `cost_reduce_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `prev_cost` float NOT NULL,
  `current_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_email_schedule`
--

CREATE TABLE IF NOT EXISTS `t_email_schedule` (
  `email_schedule_id` int(11) NOT NULL,
  `email_template_id` int(11) NOT NULL,
  `email_property_id` int(11) NOT NULL,
  `email_to` int(11) NOT NULL,
  `interval` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_email_template`
--

CREATE TABLE IF NOT EXISTS `t_email_template` (
  `email_template_id` int(11) NOT NULL,
  `email_head` varchar(200) NOT NULL,
  `email_body` varchar(600) NOT NULL,
  `email_keywords` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_payment_history`
--

CREATE TABLE IF NOT EXISTS `t_payment_history` (
  `payment_history_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `payment_from` int(11) NOT NULL,
  `payment_amount` float NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_property`
--

CREATE TABLE IF NOT EXISTS `t_property` (
  `property_id` int(11) NOT NULL,
  `property_name` varchar(300) NOT NULL,
  `property_dm` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_property_category`
--

CREATE TABLE IF NOT EXISTS `t_property_category` (
  `property_category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_property_detail`
--

CREATE TABLE IF NOT EXISTS `t_property_detail` (
  `property_detail_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `feature_desc` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_property_features`
--

CREATE TABLE IF NOT EXISTS `t_property_features` (
  `property_feature_id` int(11) NOT NULL,
  `property_category` int(11) NOT NULL,
  `feature_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_rating`
--

CREATE TABLE IF NOT EXISTS `t_rating` (
  `rating_id` int(11) NOT NULL,
  `rating_user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `rating_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_rent_history`
--

CREATE TABLE IF NOT EXISTS `t_rent_history` (
  `rent_history_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `rent_amount` float NOT NULL,
  `rent_date` int(11) NOT NULL,
  `rent_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_review`
--

CREATE TABLE IF NOT EXISTS `t_review` (
  `review_id` int(11) NOT NULL,
  `review_user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `review_for` int(11) NOT NULL,
  `review_content` varchar(500) NOT NULL,
  `review_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user_profile`
--

CREATE TABLE IF NOT EXISTS `t_user_profile` (
  `user_profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `zip_code` varchar(12) NOT NULL,
  `current_state` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `current_address` varchar(300) NOT NULL,
  `registraion_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_wishlist`
--

CREATE TABLE IF NOT EXISTS `t_wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wishlist_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_cost_history`
--
ALTER TABLE `t_cost_history`
  ADD PRIMARY KEY (`cost_history_id`);

--
-- Indexes for table `t_cost_reduce`
--
ALTER TABLE `t_cost_reduce`
  ADD PRIMARY KEY (`cost_reduce_id`);

--
-- Indexes for table `t_email_schedule`
--
ALTER TABLE `t_email_schedule`
  ADD PRIMARY KEY (`email_schedule_id`);

--
-- Indexes for table `t_email_template`
--
ALTER TABLE `t_email_template`
  ADD PRIMARY KEY (`email_template_id`);

--
-- Indexes for table `t_payment_history`
--
ALTER TABLE `t_payment_history`
  ADD PRIMARY KEY (`payment_history_id`);

--
-- Indexes for table `t_property`
--
ALTER TABLE `t_property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `t_property_category`
--
ALTER TABLE `t_property_category`
  ADD PRIMARY KEY (`property_category_id`);

--
-- Indexes for table `t_property_detail`
--
ALTER TABLE `t_property_detail`
  ADD PRIMARY KEY (`property_detail_id`);

--
-- Indexes for table `t_rating`
--
ALTER TABLE `t_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `t_rent_history`
--
ALTER TABLE `t_rent_history`
  ADD PRIMARY KEY (`rent_history_id`);

--
-- Indexes for table `t_review`
--
ALTER TABLE `t_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `t_user_profile`
--
ALTER TABLE `t_user_profile`
  ADD PRIMARY KEY (`user_profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_cost_history`
--
ALTER TABLE `t_cost_history`
  MODIFY `cost_history_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_cost_reduce`
--
ALTER TABLE `t_cost_reduce`
  MODIFY `cost_reduce_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_email_schedule`
--
ALTER TABLE `t_email_schedule`
  MODIFY `email_schedule_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_email_template`
--
ALTER TABLE `t_email_template`
  MODIFY `email_template_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_payment_history`
--
ALTER TABLE `t_payment_history`
  MODIFY `payment_history_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_property`
--
ALTER TABLE `t_property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_property_category`
--
ALTER TABLE `t_property_category`
  MODIFY `property_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_property_detail`
--
ALTER TABLE `t_property_detail`
  MODIFY `property_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_rating`
--
ALTER TABLE `t_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_rent_history`
--
ALTER TABLE `t_rent_history`
  MODIFY `rent_history_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_review`
--
ALTER TABLE `t_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_user_profile`
--
ALTER TABLE `t_user_profile`
  MODIFY `user_profile_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

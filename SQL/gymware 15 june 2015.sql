-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 04:41 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gymware`
--

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE IF NOT EXISTS `finance` (
  `member_id` bigint(20) unsigned NOT NULL,
  `member_fee` bigint(20) DEFAULT NULL,
  `member_has_paid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `inv_id` bigint(20) NOT NULL,
  `inv_category` varchar(30) DEFAULT NULL,
  `inv_item_name` varchar(30) DEFAULT NULL,
  `inv_item_brand` varchar(30) DEFAULT NULL,
  `inv_item_brand_email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` bigint(20) unsigned NOT NULL,
  `member_email` varchar(30) NOT NULL,
  `member_upass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_email`, `member_upass`) VALUES
(11, 'pmoorani@gmail.com', '12bd174a8ec9d581'),
(12, 'raj.moorani@gmail.com', '12bd174a8ec9d581'),
(14, 'waleed.tariq@gmail.com', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Table structure for table `members_info`
--

CREATE TABLE IF NOT EXISTS `members_info` (
  `member_id` bigint(20) unsigned NOT NULL,
  `member_fname` varchar(30) NOT NULL,
  `member_lname` varchar(30) NOT NULL,
  `member_joindate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_package` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_info`
--

INSERT INTO `members_info` (`member_id`, `member_fname`, `member_lname`, `member_joindate`, `member_package`) VALUES
(11, 'PrithviRaj', 'Moorani', '2015-06-14 04:49:27', 'Platinum'),
(12, 'PrithviRaj', 'Moorani', '2015-06-14 04:55:04', 'Platinum'),
(14, 'Waleed', 'Tariq', '2015-06-15 13:55:41', 'Platinum');

-- --------------------------------------------------------

--
-- Table structure for table `member_schedule`
--

CREATE TABLE IF NOT EXISTS `member_schedule` (
  `member_id` bigint(20) unsigned NOT NULL,
  `monday` varchar(30) DEFAULT NULL,
  `tuesday` varchar(30) DEFAULT NULL,
  `thursday` varchar(30) DEFAULT NULL,
  `friday` varchar(30) DEFAULT NULL,
  `saturday` varchar(30) DEFAULT NULL,
  `sunday` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pkg_details`
--

CREATE TABLE IF NOT EXISTS `pkg_details` (
  `pkg_id` int(11) unsigned NOT NULL,
  `pkg_name` varchar(30) DEFAULT NULL,
  `pkg_price` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`), ADD UNIQUE KEY `member_uname` (`member_email`);

--
-- Indexes for table `members_info`
--
ALTER TABLE `members_info`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_schedule`
--
ALTER TABLE `member_schedule`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `pkg_details`
--
ALTER TABLE `pkg_details`
  ADD PRIMARY KEY (`pkg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `member_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inv_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `members_info`
--
ALTER TABLE `members_info`
  MODIFY `member_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `member_schedule`
--
ALTER TABLE `member_schedule`
  MODIFY `member_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pkg_details`
--
ALTER TABLE `pkg_details`
  MODIFY `pkg_id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `finance`
--
ALTER TABLE `finance`
ADD CONSTRAINT `finance_fk0` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`);

--
-- Constraints for table `members_info`
--
ALTER TABLE `members_info`
ADD CONSTRAINT `members_info_fk0` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `member_schedule`
--
ALTER TABLE `member_schedule`
ADD CONSTRAINT `member_schedule_fk0` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

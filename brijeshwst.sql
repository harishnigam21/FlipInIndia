-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2018 at 02:16 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brijeshwst`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(11) NOT NULL,
  `admin_uesrname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_number` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1','2') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_uesrname`, `admin_email`, `admin_number`, `admin_password`, `admin_token`, `status`) VALUES
(1, 'Atul Rai ji', 'admin@gmail.com', '8527371879', '827ccb0eea8a706c4c34a16891f84e7b', 'a4f5fe52ce3f00a695b6d632c027b2cd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `clientName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clientEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `clientNumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `clientMessageSub` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `clientMessage` text COLLATE utf8_unicode_ci NOT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `clientName`, `clientEmail`, `clientNumber`, `clientMessageSub`, `clientMessage`, `added_date`, `added_time`) VALUES
(1, 'Atul Rai ji', 'admin@gmail.com', '+91817883581', '', 'bngdgdfbgvdgfdfgdgfdgfd', '2018-09-19', '11:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `pickupdetails`
--

CREATE TABLE `pickupdetails` (
  `pick_id` int(11) NOT NULL,
  `userFName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userLname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userEmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userNumber` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `userAddLine` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `userCity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userPin` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `userState` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `hereUs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pickUpPoint` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pickInDate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL,
  `token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pickupdetails`
--

INSERT INTO `pickupdetails` (`pick_id`, `userFName`, `userLname`, `userEmail`, `userNumber`, `userAddLine`, `userCity`, `userPin`, `userState`, `message`, `hereUs`, `pickUpPoint`, `pickInDate`, `added_date`, `added_time`, `token`, `status`) VALUES
(1, 'Atul', '', 'atulrai71.ar@gmail.com', '8178835816', 'Delhi', 'Delhi', '110059', 'Delhi', 'Hell o ', 'social', 'Bhubaneswar', '3month', '2018-09-19', '02:09:06', '1fe1905f262c006f98110a899e41709a', 1),
(2, 'Atul', 'Rai', 'atulrai71.ar@gmail.com', '8178835816', 'Delhi', 'Delhi', '110059', 'Delhi', 'Hell o ', 'social', 'Bhubaneswar', '3month', '2018-09-19', '02:09:26', 'ba5ab2e9e7595cc48efcae19b5364e8f', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonial_id` int(11) NOT NULL,
  `testmess` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `added_date` date NOT NULL,
  `testname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonial_id`, `testmess`, `added_date`, `testname`, `token`, `status`) VALUES
(1, 'This is Very Good Company', '2018-09-18', 'Atul Rai', '6f91b1e54a84e0e1efba9503467cda63', '0'),
(2, 'This is Very Good Company', '2018-09-18', 'Atul Rai', '95203ce4dc656e11edb63703aae993ae', '0'),
(3, 'This is Very Good Company', '2018-09-18', 'Atul Rai', 'db54a5da7e15f9bf5cf454b6cf92a715', '0'),
(4, 'This is Very Good Company', '2018-09-18', 'Atul Rai', '44f3206f120af27d770e7720c846d853', '0'),
(5, 'This is Very Good Company', '2018-09-18', 'Atul Rai', '2da897aaf6c1f1a962b82c23021925e0', '1'),
(6, 'Testing test test stest ', '2018-09-18', 'New ', '0fcb6ebc25911ed320da939bfa0827a3', '0'),
(7, 'TEsting ', '2018-09-19', 'Test ', '917f11c51b3217238e2ed46c8d7664b0', '1'),
(8, 'Testing test test stest ', '2018-09-19', 'test1', '8451842841362414e22e44305a471439', '1'),
(9, 'Testing test test stest ', '2018-09-19', 'test1', '02f181d19f62db05f3115b352b7d2f20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `website_details`
--

CREATE TABLE `website_details` (
  `contact` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `contact_2` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `mailingEmails` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sliderBanner1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sliderBanner2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sliderBanner3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sliderBanner4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sliderBanner5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sliderBanner6` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sliderBanner7` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `website_details`
--

INSERT INTO `website_details` (`contact`, `contact_2`, `mailingEmails`, `email`, `email2`, `address`, `sliderBanner1`, `sliderBanner2`, `sliderBanner3`, `sliderBanner4`, `sliderBanner5`, `sliderBanner6`, `sliderBanner7`) VALUES
('info@decorIn', '0', 'info@mail.com', '8527371879', '0', 'Uttam Nagar, New Delhi - 110059', 'Banner-1-1537360687.jpg', 'Banner-2-1537360701.jpg', 'Banner-3-1537360777.jpg', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `pickupdetails`
--
ALTER TABLE `pickupdetails`
  ADD PRIMARY KEY (`pick_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pickupdetails`
--
ALTER TABLE `pickupdetails`
  MODIFY `pick_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

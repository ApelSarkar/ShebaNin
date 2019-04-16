-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2019 at 01:59 AM
-- Server version: 10.2.23-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `generics_shebanin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_service_info`
--

CREATE TABLE `accepted_service_info` (
  `service_id` int(200) NOT NULL,
  `service_location` varchar(200) NOT NULL,
  `service_type` varchar(200) NOT NULL,
  `service_description` varchar(500) NOT NULL,
  `mechanic_id` int(200) NOT NULL,
  `client_id` int(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accepted_service_info`
--

INSERT INTO `accepted_service_info` (`service_id`, `service_location`, `service_type`, `service_description`, `mechanic_id`, `client_id`, `status`) VALUES
(28, 'Dhaka', 'AC', 'Location:  kolabagan masjider shathe                Problems:  ektu por por bondho hoye jay', 17, 22, 'not done');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_service_info`
--

CREATE TABLE `mechanic_service_info` (
  `id` int(200) NOT NULL,
  `mechanic_id` int(200) NOT NULL,
  `service_location` varchar(200) NOT NULL,
  `service_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mechanic_service_info`
--

INSERT INTO `mechanic_service_info` (`id`, `mechanic_id`, `service_location`, `service_type`) VALUES
(26, 17, 'Dhaka', 'AC'),
(27, 17, 'Dhaka', 'Refrigerator'),
(28, 17, 'Dhaka', 'Television'),
(29, 17, 'Dhaka', 'Computer'),
(31, 18, 'Khulna', 'Television'),
(32, 18, 'Mymansing', 'Computer'),
(33, 18, 'Dhaka', 'Refrigerator');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `receipt_id` int(200) DEFAULT NULL,
  `mobile` varchar(200) NOT NULL,
  `transection_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `user_id`, `receipt_id`, `mobile`, `transection_id`) VALUES
(1, 15, NULL, 'sd', 'dw'),
(2, 15, NULL, '01721303127', 'djhsiadhiasuhdiua'),
(4, 15, NULL, '01721303127', 'djhsiadhiasuhdiuajhbjb'),
(5, 15, NULL, '01721303127', 'hgch'),
(7, 15, NULL, '01721303127', '6Kjd87k832mdU73'),
(8, 15, NULL, '01721303127', '7348hdAhd74nUoO'),
(9, 16, NULL, '01721303127', 'jhubuuhhjhb');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `recipt_id` int(200) NOT NULL,
  `transection_id` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `sb` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`recipt_id`, `transection_id`, `mobile`, `sb`) VALUES
(1, 'djhsiadhiasuhdiua', '01721303127', '123.4'),
(4, 'djhsiadhiasuhdiuajhbjb', '01721303127', '654.3'),
(5, 'hd873n3Jjd', '01721303127', '90.7'),
(6, 'dDJF9FJ0DJ8G6', '01721303128', '57860'),
(7, 'ashdabdj', '01721303127', '-7879.8'),
(8, 'asdjdhbjah', '01721303127', '-5000'),
(9, 'jfhbs', '01721303127', '-45000'),
(10, 'dh73SH83hs', '01721303127', '34.7'),
(11, 'lfdikjok5646', '01721303127', '56.4'),
(12, 'lfdikjok5hgfr646', '01721303127', '56475.4'),
(13, 'fdjhijhf56496', '01721303127', '500'),
(14, 'fdjhijhf564dd96', '01721303127', '500'),
(15, 'jhubuuhb', '01721303127', '90086.4');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(200) NOT NULL,
  `client_id` int(200) NOT NULL,
  `mechanic_id` int(200) NOT NULL,
  `service_location` varchar(200) NOT NULL,
  `service_type` varchar(200) NOT NULL,
  `service_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `client_id`, `mechanic_id`, `service_location`, `service_type`, `service_description`) VALUES
(30, 19, 17, 'Dhaka', 'Computer', 'Location:                  Problems:  ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `balance` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `phone_number`, `password`, `role`, `status`, `balance`) VALUES
(15, 'Alamin', 'dhanmondi', '01721303127', 'a34c6699a76f8203a037e461d10f0d14', 'mechanic', 'valid', '10'),
(16, 'Apel', 'dhanmondi', '01721303132', '3d09108002f8df97b07a8c6b1961d317', 'client', 'valid', '10'),
(17, 'jamal', 'kalabagan', '01957974805', '6ee3625f6d7503b5044d17a2d51c4aba', 'mechanic', 'valid', '10'),
(18, 'Apel', 'Mirpur', '01751373413', '81dc9bdb52d04dc20036dbd8313ed055', 'mechanic', 'valid', '10'),
(19, 'limon', 'dhanmodi', '01942943461', 'e10adc3949ba59abbe56e057f20f883e', 'client', 'valid', '10'),
(20, 'admin', 'admin', '01721303030', 'a34c6699a76f8203a037e461d10f0d14', 'admin', 'valid', '0'),
(21, '12345', '12345', '12345678910', '432f45b44c432414d2f97df0e5743818', 'admin', 'valid', '10'),
(22, 'jamal', 'kalabagan', '09876543211', 'f19e00ff85a6aa30da14bfc19286accf', 'client', 'valid', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_service_info`
--
ALTER TABLE `accepted_service_info`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `mechanic_service_info`
--
ALTER TABLE `mechanic_service_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mechanic_id` (`mechanic_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD UNIQUE KEY `transection_id` (`transection_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `recipt_id` (`receipt_id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`recipt_id`),
  ADD UNIQUE KEY `transection_id` (`transection_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `mechanic_id` (`mechanic_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted_service_info`
--
ALTER TABLE `accepted_service_info`
  MODIFY `service_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `mechanic_service_info`
--
ALTER TABLE `mechanic_service_info`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `recipt_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mechanic_service_info`
--
ALTER TABLE `mechanic_service_info`
  ADD CONSTRAINT `mechanic_service_info_ibfk_1` FOREIGN KEY (`mechanic_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`receipt_id`) REFERENCES `receipts` (`recipt_id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

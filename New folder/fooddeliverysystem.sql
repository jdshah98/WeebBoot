-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 05:20 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddeliverysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `cid` int(255) NOT NULL,
  `rid` int(255) NOT NULL,
  `fid` int(255) NOT NULL,
  `qty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cid`, `rid`, `fid`, `qty`) VALUES
(2, 6, 2, 4, '10'),
(3, 6, 4, 10, '1'),
(4, 6, 2, 4, '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cId` int(10) NOT NULL,
  `uId` int(10) NOT NULL,
  `cName` varchar(255) NOT NULL,
  `cMobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cId`, `uId`, `cName`, `cMobile`) VALUES
(1, 4, 'saurabh maheshwari', '1234567890'),
(2, 6, 'Parth Roy', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fid` int(10) NOT NULL,
  `rid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `rid`, `name`, `ingredients`, `category`, `cost`, `url`) VALUES
(2, 1, 'Makke Ki Roti', 'The dish is regarded as the traditional way to prepare saag and is usually served with makki di roti ', 'Punjabi', '120', 'restaurant/img/r1/Makke Ki Roti.jpg'),
(4, 2, 'Chinese Bhel', 'Awesome Food', 'Chinese', '100', 'restaurant/img/r2/Chinese Bhel.jpg'),
(8, 1, 'Chole Bhature', 'Chhole bhature is often eaten as a breakfast dish, sometimes accompanied with lassi', 'Punjabi', '90', 'restaurant/img/r1/Chole Bhature.jpg'),
(9, 4, 'Dosa', 'Dosa is a type of pancake or crÃ¨pe, originating from the Indian subcontinent, made from a fermented batter. It is somewhat similar to a crepe in appearance. Its main ingredients are rice and black gram ground together in a fine, smooth batter with a dash', 'South Indian', '120', 'restaurant/img/r4/Dosa.jpg'),
(10, 4, 'Idli', 'Idli or idly are a type of savoury rice cake, originating from the Indian subcontinent, popular as breakfast foods in southern India and northern Sri Lanka. The cakes are made by steaming a batter consisting of fermented black lentils and rice.', 'south indian', '120', 'restaurant/img/r4/Idli.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `cid` int(255) NOT NULL,
  `vid` int(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tamt` varchar(255) NOT NULL,
  `lat_long` varchar(255) NOT NULL,
  `oAdd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rId` int(10) NOT NULL,
  `uId` int(10) NOT NULL,
  `rName` varchar(255) NOT NULL,
  `rMobile` varchar(255) NOT NULL,
  `add` varchar(255) DEFAULT NULL,
  `lat_long` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rId`, `uId`, `rName`, `rMobile`, `add`, `lat_long`) VALUES
(1, 1, 'Shah Jainam', '8469368554', NULL, NULL),
(2, 2, 'Parth Shekhaliya', '9016632615', NULL, NULL),
(3, 3, 'Saurabh Maheshwari', '9427793278', NULL, NULL),
(4, 5, 'Parth', '9876543210', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `sid` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL,
  `uEmail` varchar(255) NOT NULL,
  `uType` varchar(255) NOT NULL,
  `uTime` varchar(255) NOT NULL,
  `uIp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sid`, `uid`, `uEmail`, `uType`, `uTime`, `uIp`) VALUES
('l379mv3s39d0vldpgm7gpbsfq4', 3, 'saurabh.maheshwari1011@gmail.com', 'restaurant', '1553666365', '172.16.3.1'),
('kjflbf185nucg3qiganeansdul', 2, 'parthshekhaliya17@gmail.com', 'restaurant', '1553666399', '172.16.3.1'),
('7spk8f11603ep8vf4cfpm8h0k6', 1, 'shahjainamj8657@gmail.com', 'restaurant', '1553666412', '172.16.3.1'),
('shfnbaj4098702s43kov6rmvqq', 1, 'shahjainamj8657@gmail.com', 'restaurant', '1553666881', '172.16.3.1'),
('f9vn833o4t4jdofjcubeo972qu', 2, 'parthshekhaliya17@gmail.com', 'restaurant', '1553666935', '172.16.3.1'),
('ms66h85gp7mfja8an6not9soe5', 4, 'saur98@gmail.com', 'customer', '1553667028', '172.16.3.1'),
('shfnbaj4098702s43kov6rmvqq', 1, 'shahjainamj8657@gmail.com', 'restaurant', '1553668153', '172.16.3.1'),
('ms66h85gp7mfja8an6not9soe5', 4, 'saurabh.maheshwari1011@gmail.com', 'restaurant', '1553668438', '172.16.3.1'),
('f9vn833o4t4jdofjcubeo972qu', 2, 'parthshekhaliya17@gmail.com', 'restaurant', '1553668459', '172.16.3.1'),
('ms66h85gp7mfja8an6not9soe5', 4, 'shahjainamj8657@gmail.com', 'restaurant', '1553670071', '172.16.3.1'),
('vrnolqnlm3a3rdj3c8gla7s8jt', 2, 'royparth94@gmail.com', 'restaurant', '1553834929', '::1'),
('vrnolqnlm3a3rdj3c8gla7s8jt', 2, 'royparth94@gmail.com', 'restaurant', '1554271990', '::1'),
('vrnolqnlm3a3rdj3c8gla7s8jt', 2, 'royparth94@gmail.com', 'restaurant', '1554734293', '::1'),
('nab8ilp428mc764kvm8keg6m36', 6, 'royparth20@gmail.com', 'customer', '1554783953', '172.16.3.1'),
('nab8ilp428mc764kvm8keg6m36', 6, 'royparth20@gmail.com', 'customer', '1554784211', '172.16.3.1'),
('nab8ilp428mc764kvm8keg6m36', 6, 'royparth94@gmail.com', 'restaurant', '1554784853', '172.16.3.1'),
('nab8ilp428mc764kvm8keg6m36', 6, 'royparth20@gmail.com', 'customer', '1554785144', '172.16.3.1'),
('vrnolqnlm3a3rdj3c8gla7s8jt', 6, 'royparth20@gmail.com', 'customer', '1554787724', '::1'),
('jnoc2n3026h89542qblprutvbb', 6, 'royparth20@gmail.com', 'customer', '1554793168', '172.16.3.1'),
('jnoc2n3026h89542qblprutvbb', 6, 'royparth20@gmail.com', 'customer', '1554793511', '172.16.3.1'),
('jnoc2n3026h89542qblprutvbb', 6, 'royparth20@gmail.com', 'customer', '1554793872', '172.16.3.1'),
('jnoc2n3026h89542qblprutvbb', 6, 'royparth20@gmail.com', 'customer', '1554794248', '172.16.3.1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(10) NOT NULL,
  `uType` varchar(255) NOT NULL,
  `uEmail` varchar(255) NOT NULL,
  `uPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `uType`, `uEmail`, `uPassword`) VALUES
(1, 'restaurant', 'shahjainamj8657@gmail.com', '$2y$10$lCI/iH3Lp5NWRcs.rX7/7OGe91.hgQz1ozXGuMdNItOQrgzW4vfO2'),
(2, 'restaurant', 'parthshekhaliya17@gmail.com', '$2y$10$Ycs7tHTEXFQxTbDF6UEDQOW56xtZ545bAMmt2dN8om0y3g6h1XerW'),
(3, 'restaurant', 'saurabh.maheshwari1011@gmail.com', '$2y$10$.B4Gmf0imTQKqle.kMxYz.kfcRZx3cW9v8TtluClKI5kHoLk4WAPC'),
(4, 'customer', 'saur98@gmail.com', '$2y$10$tqUi5Lmnxr92iP/MZ0Y14uHF4HMRnVnYmqGmrgmMTpcbN1OJR5bES'),
(5, 'restaurant', 'royparth94@gmail.com', '$2y$10$j.lV6Mt22el3dhcluersH.g8sBFNJM5YTAlnFn6Aail5d7aqL4HkO'),
(6, 'customer', 'royparth20@gmail.com', '$2y$10$83LN2BvSfbcMUgTKSEHjJO6hc2zl6zRZx91PvvFayW5Y6/hBk32S2');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `vnumber` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cadd` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

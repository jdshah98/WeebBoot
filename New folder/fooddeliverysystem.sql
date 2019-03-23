-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 09:40 AM
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
(1, 1, 'jainam', '8469368554'),
(2, 2, 'Parth', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rId` int(10) NOT NULL,
  `uId` int(10) NOT NULL,
  `rName` varchar(255) NOT NULL,
  `rMobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('vmuqpq1gke5hsdpnua7o417129', 1, 'shahjainamj8657@gmail.com', 'customer', '1552993970', '::1'),
('0fcpgis3ul6cr4su2652kc2c5c', 2, 'royparth94@gmail.com', 'customer', '1552993982', '172.16.3.1'),
('0fcpgis3ul6cr4su2652kc2c5c', 2, 'royparth94@gmail.com', 'customer', '1552994399', '172.16.3.1'),
('0fcpgis3ul6cr4su2652kc2c5c', 2, 'royparth94@gmail.com', 'customer', '1552994426', '172.16.3.1'),
('0fcpgis3ul6cr4su2652kc2c5c', 2, 'royparth94@gmail.com', 'customer', '1552994430', '172.16.3.1'),
('0fcpgis3ul6cr4su2652kc2c5c', 2, 'royparth94@gmail.com', 'customer', '1552995146', '172.16.3.1');

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
(1, 'customer', 'shahjainamj8657@gmail.com', '$2y$10$EjVGmZcPqBd/zWt1YW.Hou4DlaAtJwC2WSPEzp5coOdIZBvfxin7C'),
(2, 'customer', 'royparth94@gmail.com', '$2y$10$lwtYiUuEqm1342zrrAZgQeNMdVjnd3J9QXdO99K6ptYJ2C9Z8cbDq');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

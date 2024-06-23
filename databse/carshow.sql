-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2015 at 11:05 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `web` varchar(30) DEFAULT NULL,
  `query` varchar(500) NOT NULL,
`S_No` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`name`, `email`, `web`, `query`, `S_No`) VALUES
('Mohsin Khan', 'mohain,khan@gmail.com', 'www.mk.org', 'Heloooo!!', 13),
('MOHSIN', 'mohsin_rizwan11@hotmail.com ', '', 'I WANT TO BUY A CAR', 14);

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE IF NOT EXISTS `specs` (
  `car_id` varchar(5) NOT NULL,
  `Engine` varchar(7) NOT NULL,
  `HorsePower` int(5) NOT NULL,
  `Torque` int(5) NOT NULL,
  `Transmission` varchar(12) NOT NULL,
  `Doors` int(2) NOT NULL,
  `Color` varchar(15) NOT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specs`
--

INSERT INTO `specs` (`car_id`, `Engine`, `HorsePower`, `Torque`, `Transmission`, `Doors`, `Color`, `price`) VALUES
('cr01', '1800cc', 140, 275, '4 -Automatic', 4, 'white,silver', 1835000),
('hc01', '1800cc', 143, 129, '6-Automatic', 4, 'white,Black', 2374000),
('hc02', '1300cc', 73, 129, '4-Automatic', 4, 'White', 2042000),
('hc03', '2400cc', 200, 375, '5-Automatic', 5, 'Silver', 7900000),
('sa01', '1000cc', 40, 80, '4-Manual', 4, 'white,Silver', 737000),
('sc01', '1000cc', 87, 135, '4-Manual', 4, 'Red,Blue', 1034000),
('sm01', '800cc', 29, 56, '4-Manual', 4, 'white,Blue', 678000),
('ss01', '1300cc', 94, 118, '4-Manual', 4, 'Red,Grey', 1466000),
('ty01', '2400cc', 133, 231, '5 Automatic', 4, 'white', 8800000),
('ty02', '2700cc', 360, 231, '5 Automatic', 5, 'black', 9200000),
('ty03', '1000cc', 90, 145, '4-Manual', 4, 'Red', 1300000);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `emial` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `date` datetime NOT NULL,
  `car_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`emial`, `name`, `address`, `city`, `contact`, `date`, `car_name`) VALUES
('qwqw@gmail.com', 'mk', 'adf25', 'khi', 3331264, '2015-05-09 09:08:35', 'crv'),
('mohsin@live.com ', 'MOHSIN', 'ASDS', 'KARACHI', 33122513, '2015-05-09 11:33:39', 'crv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
 ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
 ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
 ADD PRIMARY KEY (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
MODIFY `S_No` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

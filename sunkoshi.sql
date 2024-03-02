-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2019 at 05:44 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunkoshi`
--

-- --------------------------------------------------------

--
-- Table structure for table `industrial`
--

DROP TABLE IF EXISTS `industrial`;
CREATE TABLE IF NOT EXISTS `industrial` (
  `Indus_id` int(15) NOT NULL AUTO_INCREMENT,
  `Indus_name` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Established_date` date NOT NULL,
  `Indus_type` varchar(50) NOT NULL,
  PRIMARY KEY (`Indus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industrial`
--

INSERT INTO `industrial` (`Indus_id`, `Indus_name`, `Location`, `Established_date`, `Indus_type`) VALUES
(1, 'Pasmina', 'Sunkoshi', '2019-12-12', 'Mini'),
(3, 'Example', 'sunkoshi', '2012-12-12', 'Mini'),
(4, 'Example', 'Sunkoshi', '2012-12-12', 'Local');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `First_name`, `Last_name`, `Email`, `Message`) VALUES
(1, 'anjali', 'thapa', 'anjali@123', 'Hi this is Anjali.');

-- --------------------------------------------------------

--
-- Table structure for table `organizational`
--

DROP TABLE IF EXISTS `organizational`;
CREATE TABLE IF NOT EXISTS `organizational` (
  `Org_id` int(10) NOT NULL AUTO_INCREMENT,
  `Org_name` varchar(20) NOT NULL,
  `Location` varchar(15) NOT NULL,
  `Established_date` date NOT NULL,
  `Org_ownership` varchar(15) NOT NULL,
  `Org_type` varchar(15) NOT NULL,
  PRIMARY KEY (`Org_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizational`
--

INSERT INTO `organizational` (`Org_id`, `Org_name`, `Location`, `Established_date`, `Org_ownership`, `Org_type`) VALUES
(1, 'OCHSS', 'Gorkha', '2019-11-12', 'Private', 'School'),
(3, 'Sunrise', 'Sunkoshi', '2019-12-12', 'Private', 'Hospital'),
(9, 'Example', 'Sindhuli', '2012-12-12', 'Private', 'School'),
(8, 'OCHS', 'gorkha', '2012-12-12', 'Private', 'Hospital'),
(11, 'Organization', 'Sindhuli', '2012-12-12', 'Government', 'School');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `Personal_id` int(20) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Profession` varchar(15) NOT NULL,
  PRIMARY KEY (`Personal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`Personal_id`, `First_name`, `Last_name`, `Date_of_Birth`, `Address`, `Gender`, `Profession`) VALUES
(2, 'Anjali', 'Chaudhary', '2019-11-05', 'Sunkoshi', 'Female', 'Doctor'),
(8, 'Ram', 'Bahadur', '2019-12-12', 'Nalapani', 'Male', 'Teacher'),
(12, 'Ram', 'Gurung', '2019-12-12', 'Sunkoshi', 'Male', 'Doctor'),
(13, 'Gita', 'Bahadur', '2019-12-12', 'Sunkoshi', 'Female', 'Businessman'),
(21, 'Anjali', 'Thapa', '2012-12-12', 'Gorkha', 'Female', 'Accountant'),
(22, 'Ram', 'Gurung', '2022-02-02', 'lumbini', 'Male', 'Doctor'),
(24, 'Anjali', 'Chaudhary', '2019-12-12', 'Sindhuli', 'Female', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Email`, `Password`) VALUES
(3, 'Ram', 'ram@123', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Lallu', 'lallu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'hari', 'hari@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'dude', 'dude@123', '202cb962ac59075b964b07152d234b70'),
(7, 'gita', 'g@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Manisha', 's@gmail.co', '202cb962ac59075b964b07152d234b70'),
(9, 'Alu', 'a@gmail.com', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

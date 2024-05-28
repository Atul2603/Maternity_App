-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 11:06 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `basic_checkup`
--

CREATE TABLE IF NOT EXISTS `basic_checkup` (
  `bcid` int(11) NOT NULL AUTO_INCREMENT,
  `tokenid` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `hivtest` varchar(100) NOT NULL,
  `bp` varchar(100) NOT NULL,
  `did` int(11) NOT NULL,
  `check_date` timestamp NOT NULL,
  PRIMARY KEY (`bcid`),
  UNIQUE KEY `tokenid` (`tokenid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `basic_checkup`
--

INSERT INTO `basic_checkup` (`bcid`, `tokenid`, `weight`, `bloodgroup`, `hivtest`, `bp`, `did`, `check_date`) VALUES
(1, 'OPD1075909890', '56', 'B+', 'Negative', 'Medium', 1, '0000-00-00 00:00:00'),
(2, 'OPD676636043', '40', 'A+', 'Negative', 'Medium', 2, '0000-00-00 00:00:00'),
(3, 'OPD2058463979', '40', 'A+', 'Negative', 'Medium', 3, '0000-00-00 00:00:00'),
(4, 'OPD2035704233', '67', 'B+', 'Negative', 'low', 3, '0000-00-00 00:00:00'),
(5, 'OPD809509250', '78', 'A+', 'Negative', 'Medium', 2, '0000-00-00 00:00:00'),
(6, 'OPD1914989207', '85', 'O+', 'Positive', 'High', 5, '0000-00-00 00:00:00'),
(7, 'OPD943549520', '24', 'A+', 'Positive', 'low', 3, '0000-00-00 00:00:00'),
(8, 'OPD1441714894', '85', 'O+', 'Negative', 'Medium', 5, '0000-00-00 00:00:00'),
(16, 'OPD1032400881', '89', 'A+', 'Positive', 'Medium', 3, '0000-00-00 00:00:00'),
(17, 'OPD1407371361', '85', 'O+', 'Positive', 'High', 5, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `checkup`
--

CREATE TABLE IF NOT EXISTS `checkup` (
  `checkupid` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(100) NOT NULL,
  `c_description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`checkupid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `checkup`
--

INSERT INTO `checkup` (`checkupid`, `c_name`, `c_description`, `type`) VALUES
(1, 'Tetanus Toxoid 2 Injection', 'Tetanus Toxoid 2 injection and booster should be done', 'Basic Treatment'),
(2, 'Folic Acid Tablet', 'First 3 Month take 1 tablet daily', 'Basic Treatment'),
(3, 'Iron Folic Acid', 'On the duration of first three month to final delivery take one or two tablet regularly', 'Basic Treatment'),
(4, 'Calcium Tablet', 'On the duration of first three month take one or two tablet regularly', 'Basic Treatment'),
(5, 'G.D.M Checkup ( First )', 'First ( On Registration )', 'G.D.M Checkup'),
(6, 'G.D.M Checkup ( Second )', 'Second ( 24-28 Week )', 'G.D.M Checkup'),
(7, 'Hemoglobin Test', '', 'Important Test'),
(8, 'Maleria Test', '', 'Important Test'),
(9, 'Syphilis Test ', '', 'Important Test'),
(10, 'Fundle Height in Weekly', '', 'Stomach Test'),
(11, 'pregnancy status', 'baby Straightforward or reverse', 'Stomach Test'),
(12, 'Baby Montion Test', 'Check the baby motion', 'Stomach Test'),
(13, 'Baby Heart Beat', 'Check Baby Heart Beat/Min', 'Stomach Test');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dutytime` varchar(100) NOT NULL,
  PRIMARY KEY (`did`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `contact` (`contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `email`, `contact`, `degree`, `description`, `room_no`, `password`, `dutytime`) VALUES
(1, 'Dr. Nitish Kumar', 'nitish@gmail.com', '9999999999', 'MD', '       			  			       			  			Nose,Teath       			  		       			  		', '3', 'DOC1667826578', '8am to 12pm'),
(2, 'Ravi Gupta', 'ravi@gmail.com', '1111111111', 'PHD', '       			  			djlfshfj       			  		', '4', 'DOC1224428313', '12AM to 2PM'),
(3, 'Vishal Tiwari', 'vishal@gmail.com', '9181919191', 'MD', 'Nose', '4', 'DOC1057040247', '12 PM to 7PM'),
(4, 'Dr. Ranjeet Bhatia', 'ranjeet@gmail.com', '7777777777', 'MD', 'akld', '3', 'DOC2092139403', '10am to 2pm'),
(5, 'suresh', 'suresh@gmail.com', '5566112233', 'md', 'non', '4', 'DOC534608527', '8 to 7'),
(6, 'ram', 'ram@gmail.com', '123456789', 'md', 'noon', '2', 'DOC739457639', '7-4');

-- --------------------------------------------------------

--
-- Table structure for table `fill`
--

CREATE TABLE IF NOT EXISTS `fill` (
  `fill_id` int(11) NOT NULL AUTO_INCREMENT,
  `tokenid` varchar(100) NOT NULL,
  `checkupid` int(11) NOT NULL,
  `c_date` varchar(100) NOT NULL,
  `c_status` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`fill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `fill`
--

INSERT INTO `fill` (`fill_id`, `tokenid`, `checkupid`, `c_date`, `c_status`, `description`) VALUES
(6, 'OPD1075909890', 1, '2018-05-11', 'Done', 'adsfsdfsd'),
(7, 'OPD1075909890', 2, '2018-05-17', 'Done', 'asdadasdd'),
(8, 'OPD2035704233', 1, '2018-05-12', 'Done', 'jgfhg'),
(9, 'OPD809509250', 1, '2018-05-12', 'Done', 'gfghfhg'),
(10, 'OPD2035704233', 2, '2018-05-12', 'Done', 'dfgdfgfd'),
(11, 'OPD1914989207', 1, '2018-05-11', 'Done', 'no'),
(12, 'OPD943549520', 1, '2018-05-19', 'Done', 'ok'),
(13, 'OPD1441714894', 2, '2018-05-11', 'Done', 'ok'),
(14, 'OPD1032400881', 1, '2018-05-12', 'Done', 'non'),
(15, 'OPD1407371361', 1, '2018-05-19', 'Done', 'non'),
(16, 'OPD1965977556', 1, '2018-05-17', 'Done', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `month_fill`
--

CREATE TABLE IF NOT EXISTS `month_fill` (
  `mfid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `tokenid` varchar(100) NOT NULL,
  `mfstatus` varchar(100) NOT NULL,
  `mfdescription` text NOT NULL,
  `mfdate` varchar(100) NOT NULL,
  PRIMARY KEY (`mfid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `month_fill`
--

INSERT INTO `month_fill` (`mfid`, `mid`, `tokenid`, `mfstatus`, `mfdescription`, `mfdate`) VALUES
(3, 1, 'OPD1075909890', 'Done', 'asdasdds', '2018-05-12'),
(4, 1, 'OPD2035704233', 'Done', 'khgkhg', '2018-05-12'),
(5, 1, 'OPD809509250', 'Done', 'yytuyt', '2018-05-12'),
(6, 1, 'OPD1032400881', 'Done', 'ok\r\n', '2018-05-10'),
(7, 1, 'OPD1407371361', 'Pending', 'ok', '2018-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `month_test`
--

CREATE TABLE IF NOT EXISTS `month_test` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `month_test`
--

INSERT INTO `month_test` (`mid`, `test_name`, `description`) VALUES
(1, 'Test 1', 'Before 12 Week'),
(2, 'Test 2', 'From 14th Week to 26 Week'),
(3, 'Test 3', 'From 26th Week to 34 Week'),
(4, 'Test 4', 'From 34th Week to Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `new_profile`
--

CREATE TABLE IF NOT EXISTS `new_profile` (
  `regid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `did` int(11) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `tokenid` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`regid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `contact` (`contact`),
  UNIQUE KEY `tokenid` (`tokenid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `new_profile`
--

INSERT INTO `new_profile` (`regid`, `name`, `email`, `contact`, `mother`, `father`, `age`, `problem`, `did`, `room_no`, `tokenid`, `dob`, `reg_date`, `password`, `status`) VALUES
(8, 'Sheela Gupta', 'sheela@gmail.com', '9999999999', 'Juhi', 'Jitendra', '30', 'NA', 1, '8', 'OPD1075909890', '2018-05-08', '2018-05-08 07:12:09', '1234', 'checked'),
(12, 'Neha Singh', 'neha@gmail.com', '1212121212', 'Am Singh', 'Pm Singh', '34', 'NA', 2, '10', 'OPD676636043', '2018-05-08', '2018-05-08 06:25:47', '1212121212', 'checked'),
(13, 'Seema', 'seema@gmail.com', '4444444444', 'Am Singh', 'Pm Singh', '34', 'NA', 3, '5', 'OPD2058463979', '2018-05-08', '2018-05-08 06:30:53', '4444444444', 'checked'),
(14, 'Jaishree', 'jai@gmail.com', '8888888888', 'ABC', 'PQR', '34', 'NA', 3, '7', 'OPD2035704233', '2018-05-18', '2018-05-12 08:12:19', '8888888888', 'checked'),
(15, 'Jaimala', 'jaimala@gmail.com', '0000000000', 'ABC', 'ABC', '34', 'NA', 2, '5', 'OPD809509250', '2018-05-12', '2018-05-12 08:34:38', '1234', 'checked'),
(16, 'priya', 'priya@gmail.com', '9988776655', 'tanna', 'panna', '40', 'no', 2, '8', 'OPD89671758', '2018-05-08', '2018-05-14 19:55:40', '9988776655', 'pending'),
(17, 'tanya', 'tanya@gmail.com', '8959788207', 'panna', 'anna', '42', 'non', 5, '7', 'OPD1914989207', '2018-05-16', '2018-05-14 20:02:10', '8959788207', 'checked'),
(18, 'sarita', 'sarita@gmail.com', '8959200706', 'ti', 'fg', '45', 'no', 2, '6', 'OPD1246865557', '2018-05-10', '2018-05-15 02:08:46', '8959200706', 'pending'),
(19, 'renna', 'reena@gmail.com', '8871747736', 'a', 'b', '45', 'no', 3, '6', 'OPD943549520', '2018-05-09', '2018-05-19 18:35:30', '8871747736', 'checked'),
(20, 'pali', 'pali@gmail.com', '8899445566', 'l', 'n', '54', 'non', 1, '6', 'OPD388254101', '2018-05-10', '2018-05-21 01:05:00', '8899445566', 'pending'),
(21, 'jaya', 'jaya@gmail.com', '8982463708', 'm', 'j', '45', 'non', 5, '6', 'OPD1441714894', '2018-05-14', '2018-05-21 01:09:59', '8982463708', 'pending'),
(22, 'jiva', 'jiva@gmail.com', '963852741', 'n', 'f', '45', 'non', 3, '5', 'OPD1032400881', '2018-05-10', '2018-05-21 12:18:35', '963852741', 'checked'),
(23, 'deepika', 'deepika@gmail.com', '369258147', 'g', 'd', '58', 'ear', 5, '7', 'OPD1407371361', '2018-05-10', '2018-05-21 16:22:35', '369258147', 'checked'),
(24, 'tanna', 'tanna@gmail.com', '7583839699', 'h', 'd', '78', 'nom', 5, '3', 'OPD1965977556', '2018-05-09', '2018-05-21 19:28:55', '7583839699', 'pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

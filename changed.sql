-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2020 at 02:34 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+05:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--
DROP TABLE IF EXISTS `admintb`;
CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--
DROP TABLE IF EXISTS `appointmenttb`;
CREATE TABLE `appointmenttb` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(4, 1, 'Bilal', 'Brar', 'Male', 'bilalbrar1999@gmail.com', '03355553370', 'Athar Niaz', 2500, '2020-02-14', '10:00:00', 1, 0),
(4, 2, 'Nawab', 'Khan', 'Male', 'Nawabkhan19967@gmail.com', '03350767283', 'Tahir Aziz', 2600, '2020-02-28', '10:00:00', 0, 1),
(4, 3, 'Hannan', 'Asif', 'Male', 'hasif1504@gmail.com', '03345593829', 'Tahir Nazir', 1000, '2020-02-19', '03:00:00', 0, 1),
(11, 4, 'Zain', 'Naqvi', 'Male', 'naqvi_omani@gmail.com', '0237982374', 'Mohammad Amin', 2700, '2020-02-29', '20:00:00', 1, 1),
(4, 5, 'Zain', 'Abedin', 'Male', 'blablu@gmail.com', '90283409238', 'Muhammad Amin', 2700, '2020-02-28', '12:00:00', 1, 1),
(4, 6, 'Hamza', 'Rehman', 'Male', 'rocketscience@gmail.com', '1739843298', 'Muhammad Yasir Khan', 2800, '2020-02-26', '15:00:00', 0, 1),
(2, 8, 'Syed', 'Akmal', 'Male', 'champie@gmail.com', '02023020333', 'Shayan Shahid', 3000, '2020-03-21', '10:00:00', 1, 1),
(5, 9, 'Salman', 'Rehman', 'Male', 'salmaneagle@gmail.com', '7878178171', 'Zafar Rabbani', 5500, '2020-03-19', '20:00:00', 1, 0),
(4, 10, 'Mohammad', 'Omer', 'Male', 'omerbhai@gmail.com', '033445552141', 'Zafar Rabbani', 5500, '0000-00-00', '14:00:00', 1, 0),
(4, 11, 'Anzah', 'Mehmood', 'Male', 'anzahmehmood@gmail.com', '03355522142', 'Ghazala Mahmud', 3000, '2020-03-27', '15:00:00', 1, 1),
(9, 12, 'Ijlal', 'Kazmi', 'Male', 'ijlal@gmail.com', '03344556789', 'Huma Tasleem', 4000, '2020-03-26', '12:00:00', 1, 1),
(9, 13, 'Siraj', 'Hashmi', 'Male', 'siraj@gmail.com', '0334567773311', 'Shazia Fakhar', 5500, '2020-03-26', '14:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Anum', 'anum@gmail.com', '7896677554', 'Hey Admin'),
('Waqas', 'waqas@gmail.com', '9899778865', 'Good Job, Pal'),
('Anas', 'anas@gmail.com', '9997888879', 'How can I reach you?'),
('Akmal', 'akmal@gmail.com', '8788979967', 'Love your site'),
('Munaam', 'munaam@gmail.com', '8977768978', 'Want some coffee?'),
('Kamal', 'kamal@gmail.com', '9898989898', 'Good service'),
('Abbas', 'abbas@gmail.com', '8979776868', 'Love your service'),
('Asim', 'asim@gmail.com', '9087897564', 'Love your service. Thank you!'),
('Jameel', 'jameel@gmail.com', '7869869757', 'I love your service!');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--
DROP TABLE IF EXISTS `doctb`;
CREATE TABLE `doctb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`username`, `password`, `email`, `spec`, `docFees`) VALUES
('AtharNiaz', 'athar123', 'athar@gmail.com', 'Allergy', 2500),
('TahirAziz', 'tahir23', 'tahir@gmail.com', 'Allergy', 2600),
('MohammadAmin', 'amin123', 'amin@gmail.com', 'ENT', 2700),
('TahirNazir', 'nazir123', 'nazir@gmail.com', 'Allergy', 2550),
('MuhammadYasirKhan', 'yasir123', 'yasir@gmail.com', 'Pediatrician', 2800),
('ShayanShahid', 'shayan123', 'shayan@gmail.com', 'Cardiologist', 3000),
('ZafarRabbani', 'zafar123', 'zafar@gmail.com', 'Neurologist', 5500),
('ShaziaFakhar', 'shazia123', 'shazia@gmail.com', 'Neurologist', 5500),
('HumaTasleem', 'huma123', 'huma@gmail.com', 'Gynecology', 4000),
('GhazalaMahmud', 'ghazal123', 'ghazal@gmail.com', 'Gynecology', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--
DROP TABLE IF EXISTS `patreg`;
CREATE TABLE `patreg` ( 
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL UNIQUE,
  `contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `card_id` varchar(30) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`, `cpassword`) VALUES
(1, 'Bilal', 'Brar', 'Male', 'bilalbrar1999@gmail.com', '03355553370', 'bilal123', 'bilal123'),
(2, 'Hannan', 'Asif', 'Male', 'hasif1504@gmail.com', '8976898463', 'hannan123', 'hannan123');

-- --------------------------------------------------------

--
-- Table structure for table `prestb`
--
DROP TABLE IF EXISTS `prestb`;
CREATE TABLE `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestb`
--

INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('Athar Niaz', 4, 11, 'Bilal', 'Brar', '2021-03-27', '15:00:00', 'Cough', 'Nothing', 'Azomax 500mg');
--
-- Indexes for dumped tables
--

DROP TABLE IF EXISTS `time_record`;
CREATE TABLE `time_record` (
  `terminal` varchar(1) NULL,
  `card_id` varchar(8) NULL,
  `time` datetime,
  `status` bool
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patreg`
--
ALTER TABLE `patreg`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

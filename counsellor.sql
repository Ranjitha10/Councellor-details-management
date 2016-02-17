-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2015 at 07:51 PM
-- Server version: 5.5.41
-- PHP Version: 5.3.10-1ubuntu3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `counsellor`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence`
--

CREATE TABLE IF NOT EXISTS `absence` (
  `usn` varchar(10) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `start` int(10) DEFAULT NULL,
  `end` int(10) DEFAULT NULL,
  `reason` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absence`
--

INSERT INTO `absence` (`usn`, `sem`, `start`, `end`, `reason`) VALUES
('rich', 1, 12, 12, 'Medical'),
('044', 2, 0, 0, 'Technical Event'),
('044', 6, 56, 77, 'Medical'),
('044', 8, 99, 87, 'Others'),
('44', 4, 4566, 66, 'Technical Event'),
('044', 4, 99, 888, 'Technical Event'),
('044', 4, 1, 9, 'Technical Event'),
('044', 4, 2, 9, '-1'),
('044', 4, 9, 12, 'Technical Event'),
('1RV12IS046', 6, 3042015, 5042015, 'Medical'),
('1RV12IS046', 6, 8012015, 9012015, 'Technical Event'),
('1RV12IS056', 6, 10042015, 11042015, 'Medical'),
('1RV12IS056', 6, 3042015, 5042015, 'Medical'),
('1RV12IS044', 6, 8042015, 9042015, 'Technical Event'),
('1RV12IS044', 6, 8042015, 11042015, 'Medical'),
('1RV12IS044', 6, 10042015, 15042015, 'Medical'),
('1RV12IS044', 6, 9042015, 9042015, 'Technical Event');

-- --------------------------------------------------------

--
-- Table structure for table `current_sem`
--

CREATE TABLE IF NOT EXISTS `current_sem` (
  `usn` varchar(10) NOT NULL,
  `sem` int(1) DEFAULT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_sem`
--

INSERT INTO `current_sem` (`usn`, `sem`) VALUES
('1RV12IS001', 6),
('1RV12IS002', 6),
('1RV12IS044', 6),
('1RV12IS046', 6),
('44', 4),
('46', 4),
('88', 3),
('qwe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `usn` varchar(10) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `challan` int(5) DEFAULT NULL,
  `amt` int(8) DEFAULT NULL,
  `favour` varchar(40) DEFAULT NULL,
  `deposit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`usn`, `sem`, `challan`, `amt`, `favour`, `deposit`) VALUES
('46', 4, 451, 543, 'rvce', 433),
('44', 4, 45122, 543, 'rvce', 433),
('46', 4, 451, 543, 'rvce', 433),
('44', 4, 344, 434, 'fegv', 344),
('044', 4, 88, 77, 'yy', 77),
('1RV12IS046', 6, 11111, 36900, 'RVCE', 9012015),
('1RV12IS044', 6, 16112, 360900, 'RVCE', 8012015),
('qwe', 1, 10000, 100000, 'rv4', 123);

-- --------------------------------------------------------

--
-- Table structure for table `hss`
--

CREATE TABLE IF NOT EXISTS `hss` (
  `usn` varchar(10) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `event` varchar(30) DEFAULT NULL,
  `start` int(11) DEFAULT NULL,
  `end` int(11) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hss`
--

INSERT INTO `hss` (`usn`, `sem`, `event`, `start`, `end`, `category`) VALUES
('44', 4, 'tech', 56, 8, 'workshop'),
('044', 7, 'seminar', 89, 96, 'work'),
('88', 3, 'nreo', 83, 33, 'study'),
('44', 4, 'ttt', 4, 3, 'NCC'),
('462', 4, 'efe', 34, 34, 'ef'),
('044', 4, 'sawsa', 0, 0, 'Participating in the event'),
('1RV12IS046', 6, 'Cisco internship', 3042015, 10042015, 'Internship'),
('1RV12IS046', 6, 'Qualnet Training', 6042015, 11042015, 'Training'),
('1RV12IS046', 6, 'NCC camp', 3042015, 10042015, 'NCC'),
('1RV12IS044', 6, 'Internet of Things', 9042015, 19042015, 'Workshop'),
('1RV12IS044', 6, 'Wearable devices', 1042015, 2042015, 'Paper presentation'),
('1RV12IS044', 6, 'NCC camp', 3042015, 10042015, 'NCC'),
('qwe', 1, 'vrtv', 34, 5, 'Participating in the event'),
('qwe', 1, 'vrtv', 8, 9, 'Training');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE IF NOT EXISTS `sem1` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`usn`, `sub_code`, `cie1`, `cie2`, `cie3`) VALUES
('123', 'rtt45', 34, 12, 34),
('55', '67', 34, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE IF NOT EXISTS `sem2` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`usn`, `sub_code`, `cie1`, `cie2`, `cie3`) VALUES
('56', '56', 56, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE IF NOT EXISTS `sem3` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE IF NOT EXISTS `sem4` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem4`
--

INSERT INTO `sem4` (`usn`, `sub_code`, `cie1`, `cie2`, `cie3`) VALUES
('44', 'idhuj', 12, 23, 12),
('44', 'ABC', 10, 10, 7),
('78', 'yuu', 98, 54, 12),
('044', 'ws', 2, 3, 4),
('044', 'ess', 4, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE IF NOT EXISTS `sem5` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE IF NOT EXISTS `sem6` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem6`
--

INSERT INTO `sem6` (`usn`, `sub_code`, `cie1`, `cie2`, `cie3`) VALUES
('1RV12IS046', '12IS51', 12, 13, 44),
('1RV12IS046', '12IS52', 12, 13, 16),
('1RV12IS046', '12IS53', 32, 43, 14),
('1RV12IS046', '12IS54', 12, 13, 14),
('1RV12IS046', '12IS55', 12, 45, 16),
('1RV12IS046', '12IS56', 32, 23, 44),
('1RV12IS044', '12IS51', 12, 13, 44),
('1RV12IS044', '12IS52', 12, 13, 16),
('1RV12IS044', '12IS53', 32, 43, 14),
('1RV12IS044', '12IS54', 12, 13, 14),
('1RV12IS044', '12IS55', 12, 45, 16),
('1RV12IS044', '12IS56', 32, 23, 44),
('1RV12IS044', 'gh', 3, 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sem7`
--

CREATE TABLE IF NOT EXISTS `sem7` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem7`
--

INSERT INTO `sem7` (`usn`, `sub_code`, `cie1`, `cie2`, `cie3`) VALUES
('100', 'is74', 10, 1, 12),
('400', 'is2', 12, 1, 20),
('100', 'is74', 10, 1, 12),
('400', 'is2', 12, 1, 20),
('100', 'is74', 10, 1, 12),
('400', 'is2', 12, 1, 20),
('100', 'is74', 10, 1, 12),
('400', 'is2', 12, 1, 20),
('100', 'is74', 10, 1, 12),
('400', 'is2', 12, 1, 20),
('100', 'is74', 10, 1, 12),
('400', 'is2', 12, 1, 20),
('100', 'is74', 10, 1, 12),
('400', 'is2', 12, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE IF NOT EXISTS `sem8` (
  `usn` varchar(10) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `cie1` int(3) DEFAULT NULL,
  `cie2` int(3) DEFAULT NULL,
  `cie3` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `name` char(25) DEFAULT NULL,
  `batch` int(5) DEFAULT NULL,
  `s_id` varchar(10) NOT NULL,
  `desg` char(20) DEFAULT NULL,
  `user_name` varchar(10) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`name`, `batch`, `s_id`, `desg`, `user_name`, `pwd`) VALUES
('Bms', 1, 'bmsid', 'counsellor', 'Bms', 'Bms'),
('dff', 23, '12', 'counsellor', 'sa', 'swa'),
('srsg', 9, '123', 'counsellor', 'wa', '900150983c'),
('db', 10, '5', 'counsellor', 'db', 'd77d5e503ad1439f585ac494268b351b'),
('po', 0, '99', 'counsellor', 'po', 'f6122c971aeb03476bf01623b09ddfd4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `usn` varchar(10) NOT NULL DEFAULT '',
  `user_name` varchar(10) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `batch` int(5) DEFAULT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `user_name`, `pwd`, `batch`) VALUES
('', '', '', 7),
('1RV12IS044', 'Richa', 'Richa', 1),
('1RV12IS046', 'Roshna', 'Roshna', 1),
('44', 'abc1', '23734cd52a', 10),
('46', 'as', '84e4dbee7e', 10),
('85', 'r', '4b43b0aee35624cd95b910189b3dc231', 0),
('9', 'abcwsda', '3212f5f463edb370ff55d3c3a7a15c8f', 1),
('9999', 'poky', 'rge', 47),
('abc', 'abc', '900150983c', 1),
('evfy', 'ds', '108bc7b696', 1),
('qwe', 'qwe', '76d80224611fc919a5d54f0ff9fba446', 1),
('swc', 'edf', '202cb962ac', 1),
('wd', 'ceddc', 'dc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE IF NOT EXISTS `student1` (
  `name` char(25) DEFAULT NULL,
  `dob` int(7) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `yoa` int(4) DEFAULT NULL,
  `usn` varchar(10) DEFAULT NULL,
  `batch` int(5) DEFAULT NULL,
  `e_id` varchar(25) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `adm_type` varchar(6) DEFAULT NULL,
  `rank` int(5) DEFAULT NULL,
  `f_name` varchar(25) DEFAULT NULL,
  `f_id` varchar(25) DEFAULT NULL,
  `f_no` bigint(10) DEFAULT NULL,
  `m_name` varchar(25) DEFAULT NULL,
  `m_id` varchar(25) DEFAULT NULL,
  `m_no` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`name`, `dob`, `sex`, `yoa`, `usn`, `batch`, `e_id`, `phone`, `address`, `adm_type`, `rank`, `f_name`, `f_id`, `f_no`, `m_name`, `m_id`, `m_no`) VALUES
('Roshna', 28071994, 'F', 2012, '1RV12IS046', 1, 'roshnazir28@gmail.com', 2147483647, 'Rvce Girls Hostel Krishna Garden', 'CET', 3896, 'Nazir Hussain', 'nazirhussain@gmail.com', 2147483647, 'Safia Nazir', 'safianazir@gmail.com', 2147483647),
('Richa', 28071993, 'F', 2012, '1RV12IS044', 1, 'richagarg28@gmail.com', 2147483647, 'Rvce Girls Hostel Krishna Garden', 'COMEDK', 2896, 'Richadad', 'richadad@gmail.com', 2147483647, 'Babitha', 'babitha@gmail.com', 2147483647),
('Richa1', 28071993, 'F', 2012, '1RV12IS045', 1, 'richagarg28@gmail.com', 2147483647, 'Rvce Girls Hostel Krishna Garden', 'COMEDK', 2896, 'Richadad', 'richadad@gmail.com', 2147483647, 'Babitha', 'babitha@gmail.com', 2147483647),
('richa', 9, 'f', 99, '44', 10, 'ds', 99, 'dws', 'efs', 4, 'd', 'ds', 4, 'sdv', 'sef', 44),
('rosh', 9, 'f', 99, '46', 10, 'ds', 99, 'dws', 'efs', 4, 'd', 'ds', 4, 'sdv', '@sef', 44),
('4ge', 43, 'Male', 3, 'qwe', 1, 'dff', 344, 'dfd', 'COMEDK', 4, 'd', 'ddf', 44, 'd', 'ds', 7234567890),
('r', 34, 'Male', 3333, '85', 1, 'dcjn@gmail.com', 9123456789, 'er', 'CET', 3434, 'r', 'ref@gmail.com', 9123456789, 'fre', 'r@gmail.com', 9123456789);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

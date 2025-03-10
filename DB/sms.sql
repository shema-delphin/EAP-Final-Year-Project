-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 10:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `behavior`
--

CREATE TABLE `behavior` (
  `behavior_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `st_id` int(50) NOT NULL,
  `behavior_first_marks` int(50) NOT NULL,
  `behavior_second_marks` int(50) NOT NULL,
  `behavior_third_marks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `behavior`
--

INSERT INTO `behavior` (`behavior_id`, `department_name`, `level`, `st_id`, `behavior_first_marks`, `behavior_second_marks`, `behavior_third_marks`) VALUES
(2, 'SOD', 'L3', 4, 20, 25, 10),
(6, 'ELC', 'L3', 2, 40, 10, 20),
(7, 'SOD', 'L3', 5, 40, 40, 35),
(8, 'SOD', 'L4', 6, 40, 25, 10),
(11, 'SOD', 'L5', 7, 20, 10, 10),
(12, 'ELC', 'L4', 8, 40, 40, 10),
(13, 'ELC', 'L5', 9, 20, 20, 20),
(14, 'SOD', 'L3', 19, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(2, 'ELC'),
(1, 'SOD');

-- --------------------------------------------------------

--
-- Table structure for table `first_term`
--

CREATE TABLE `first_term` (
  `first_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `ammount` int(50) NOT NULL,
  `paid` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_term`
--

INSERT INTO `first_term` (`first_id`, `st_id`, `department_name`, `level`, `ammount`, `paid`, `total`) VALUES
(21, 4, 'SOD', 'L3', 70000, 70000, 0),
(22, 5, 'SOD', 'L3', 100000, 100000, 0),
(23, 2, 'ELC', 'L3', 70000, 70000, 0),
(24, 6, 'SOD', 'L4', 70000, 70000, 0),
(25, 7, 'SOD', 'L5', 70000, 70000, 0),
(26, 8, 'ELC', 'L4', 70000, 70000, 0),
(27, 9, 'ELC', 'L5', 70000, 70000, 0),
(28, 19, 'SOD', 'L3', 70000, 70000, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `first_view1`
-- (See below for the actual view)
--
CREATE TABLE `first_view1` (
`st_id` int(11)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`total` int(50)
,`behavior_first_marks` int(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `marks_first_term`
--

CREATE TABLE `marks_first_term` (
  `marks_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `st_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `formative` int(50) NOT NULL,
  `summative` int(50) NOT NULL,
  `total_marks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_first_term`
--

INSERT INTO `marks_first_term` (`marks_id`, `department_name`, `level`, `st_id`, `module_id`, `formative`, `summative`, `total_marks`) VALUES
(7, 'SOD', 'L3', 4, 3, 50, 16, 66),
(9, 'SOD', 'L3', 4, 5, 12, 25, 37),
(10, 'SOD', 'L3', 5, 3, 50, 20, 70),
(11, 'SOD', 'L3', 4, 8, 1, 1, 2),
(12, 'ELC', 'L3', 2, 6, 23, 10, 33),
(13, 'ELC', 'L3', 2, 11, 50, 30, 80),
(14, 'SOD', 'L4', 6, 4, 20, 50, 70),
(15, 'SOD', 'L5', 7, 14, 12, 25, 37),
(16, 'ELC', 'L4', 8, 17, 23, 25, 48),
(17, 'ELC', 'L5', 9, 20, 10, 50, 60),
(18, 'SOD', 'L3', 19, 5, 20, 20, 40),
(19, 'SOD', 'L3', 19, 10, 20, 50, 70);

-- --------------------------------------------------------

--
-- Table structure for table `marks_second_term`
--

CREATE TABLE `marks_second_term` (
  `marks_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `st_id` int(50) NOT NULL,
  `module_id` int(50) NOT NULL,
  `formative` int(50) NOT NULL,
  `summative` int(50) NOT NULL,
  `total_marks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_second_term`
--

INSERT INTO `marks_second_term` (`marks_id`, `department_name`, `level`, `st_id`, `module_id`, `formative`, `summative`, `total_marks`) VALUES
(1, 'SOD', 'L3', 4, 3, 20, 30, 50),
(2, 'SOD', 'L3', 5, 8, 23, 50, 73),
(3, 'SOD', 'L3', 4, 5, 12, 25, 37),
(4, 'SOD', 'L3', 5, 3, 50, 20, 70),
(5, 'SOD', 'L3', 4, 8, 20, 30, 50),
(6, 'SOD', 'L3', 4, 9, 10, 10, 20),
(7, 'ELC', 'L3', 2, 6, 23, 10, 33),
(8, 'ELC', 'L3', 2, 11, 50, 30, 80),
(9, 'SOD', 'L4', 6, 4, 20, 50, 70),
(10, 'SOD', 'L4', 6, 12, 10, 30, 40),
(11, 'SOD', 'L5', 7, 14, 12, 25, 37),
(12, 'SOD', 'L5', 7, 15, 20, 30, 50),
(13, 'ELC', 'L4', 8, 17, 23, 25, 48),
(14, 'ELC', 'L4', 8, 18, 50, 30, 80),
(15, 'ELC', 'L5', 9, 20, 10, 50, 60),
(16, 'ELC', 'L5', 9, 21, 23, 50, 73),
(17, 'SOD', 'L3', 19, 5, 20, 20, 40),
(18, 'SOD', 'L3', 19, 10, 20, 50, 70);

-- --------------------------------------------------------

--
-- Table structure for table `marks_third_term`
--

CREATE TABLE `marks_third_term` (
  `marks_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `st_id` int(50) NOT NULL,
  `module_id` int(50) NOT NULL,
  `formative` int(50) NOT NULL,
  `summative` int(50) NOT NULL,
  `total_marks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_third_term`
--

INSERT INTO `marks_third_term` (`marks_id`, `department_name`, `level`, `st_id`, `module_id`, `formative`, `summative`, `total_marks`) VALUES
(1, 'SOD', 'L3', 4, 3, 20, 30, 50),
(2, 'SOD', 'L3', 5, 8, 23, 50, 73),
(3, 'SOD', 'L3', 4, 5, 12, 25, 37),
(4, 'SOD', 'L3', 5, 3, 50, 20, 70),
(5, 'SOD', 'L3', 4, 8, 20, 30, 50),
(6, 'SOD', 'L3', 4, 9, 10, 10, 20),
(7, 'SOD', 'L3', 4, 10, 5, 5, 10),
(9, 'ELC', 'L3', 2, 6, 23, 10, 33),
(10, 'ELC', 'L3', 2, 11, 50, 30, 80),
(11, 'SOD', 'L4', 6, 4, 20, 50, 70),
(12, 'SOD', 'L4', 6, 12, 10, 30, 40),
(13, 'SOD', 'L4', 6, 13, 50, 30, 80),
(14, 'SOD', 'L5', 7, 14, 12, 25, 37),
(15, 'SOD', 'L5', 7, 15, 20, 30, 50),
(16, 'SOD', 'L5', 7, 16, 23, 25, 48),
(17, 'ELC', 'L4', 8, 17, 23, 25, 48),
(18, 'ELC', 'L4', 8, 18, 50, 30, 80),
(19, 'ELC', 'L4', 8, 19, 50, 50, 100),
(20, 'ELC', 'L5', 9, 20, 10, 50, 60),
(21, 'ELC', 'L5', 9, 21, 23, 50, 73),
(22, 'ELC', 'L5', 9, 22, 12, 50, 62),
(23, 'SOD', 'L3', 19, 5, 20, 20, 40),
(24, 'SOD', 'L3', 19, 10, 20, 50, 70);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `module_code` varchar(50) NOT NULL,
  `module_name` varchar(50) NOT NULL,
  `module_hours` int(50) NOT NULL,
  `module_credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `department_name`, `level`, `module_code`, `module_name`, `module_hours`, `module_credit`) VALUES
(3, 'SOD', 'L3', 'CM01', 'Web Development', 100, '12'),
(4, 'SOD', 'L4', 'CM02', 'Database', 100, '12'),
(5, 'SOD', 'L3', 'CM03', 'Algorithm', 60, '6'),
(6, 'ELC', 'L3', 'ECM005', 'Drawing', 100, '12'),
(8, 'SOD', 'L3', 'CM07', 'Java', 80, '13'),
(9, 'SOD', 'L3', 'CM009', 'HCI', 100, '10'),
(10, 'SOD', 'L3', 'CM011', 'Mathematics', 120, '12'),
(11, 'ELC', 'L3', 'EM001', 'Moter', 100, '10'),
(12, 'SOD', 'L4', 'MC025', 'C++', 100, '10'),
(13, 'SOD', 'L4', 'MC013', 'Phy', 120, '12'),
(14, 'SOD', 'L5', 'EM0098', 'SAD', 120, '12'),
(15, 'SOD', 'L5', 'CM054', 'Linear', 110, '11'),
(16, 'SOD', 'L5', 'CM063', 'English', 110, '11'),
(17, 'ELC', 'L4', 'EM085', 'Grammer', 80, '8'),
(18, 'ELC', 'L4', 'EM081', 'Comm Skills ', 110, '11'),
(19, 'ELC', 'L4', 'EM201', 'Kiny', 60, '6'),
(20, 'ELC', 'L5', 'EM57', 'Differencial', 110, '11'),
(21, 'ELC', 'L5', 'EM061', 'Design', 100, '10'),
(22, 'ELC', 'L5', 'EM037', 'General Math', 120, '12');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `par_id` int(11) NOT NULL,
  `st_id` int(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `fatherphone` varchar(13) NOT NULL,
  `fathernid` varchar(16) NOT NULL,
  `fatherdob` date NOT NULL,
  `mathername` varchar(50) NOT NULL,
  `matherphone` varchar(13) NOT NULL,
  `mathernid` varchar(16) NOT NULL,
  `matherdob` date NOT NULL,
  `emergency` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`par_id`, `st_id`, `fathername`, `fatherphone`, `fathernid`, `fatherdob`, `mathername`, `matherphone`, `mathernid`, `matherdob`, `emergency`) VALUES
(5, 4, 'ISHIMWE', '0781501001', '1196480092239082', '2024-04-19', 'KAMARIZA', '0780545416', '1196680092239088', '2024-05-03', '+250784813528'),
(7, 2, 'NSHUTI', '0788203537', '1200280092238006', '2024-04-24', 'KAMPUNDU', '32156548214', '369852164788', '2024-04-17', '+250785941480'),
(8, 5, 'KAYISHEMA', '0780568888', '1197080093339011', '2024-04-30', 'UWIMBABAZI', '0780568991', '1197770093339022', '2024-04-25', '+250788305382'),
(14, 6, 'ISHIMWE Gloire', '0788888888', '1234567890098765', '2024-09-17', 'ISINGIZWE', '0788888888', '1234567890098765', '2024-09-15', '+250788203537'),
(16, 8, 'MUCYO', '0788888899', '1234567890098761', '2024-09-10', 'MUJYANE', '0788888899', '1234567890098764', '2024-09-10', '+250780807780'),
(17, 7, 'UWITONZE', '0788888822', '1234567890098712', '2024-09-02', 'UWASE', '0788888812', '1234567890098755', '2024-09-11', '+250783154587'),
(18, 9, 'GANZA', '0788888884', '1234567820098765', '2024-09-01', 'AGWIZE', '0788888800', '1230567890098764', '2024-09-03', '+250780568991'),
(20, 19, 'kabera', '0785520535', '1234567890098769', '2024-09-05', 'Kabera', '0788203537', '1234567890098767', '2024-09-18', '+250785520535');

-- --------------------------------------------------------

--
-- Stand-in structure for view `report_first`
-- (See below for the actual view)
--
CREATE TABLE `report_first` (
`st_id` int(11)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`total` int(50)
,`behavior_first_marks` int(50)
,`department_name` varchar(50)
,`level` varchar(50)
,`module_code` varchar(50)
,`module_name` varchar(50)
,`module_hours` int(50)
,`module_credit` varchar(20)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `report_second`
-- (See below for the actual view)
--
CREATE TABLE `report_second` (
`st_id` int(50)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`total` int(50)
,`behavior_second_marks` int(50)
,`department_name` varchar(50)
,`level` varchar(50)
,`module_code` varchar(50)
,`module_name` varchar(50)
,`module_hours` int(50)
,`module_credit` varchar(20)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `report_third`
-- (See below for the actual view)
--
CREATE TABLE `report_third` (
`st_id` int(50)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`total` int(50)
,`behavior_third_marks` int(50)
,`department_name` varchar(50)
,`level` varchar(50)
,`module_code` varchar(50)
,`module_name` varchar(50)
,`module_hours` int(50)
,`module_credit` varchar(20)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `second_term`
--

CREATE TABLE `second_term` (
  `second_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `ammount` int(50) NOT NULL,
  `paid` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_term`
--

INSERT INTO `second_term` (`second_id`, `st_id`, `department_name`, `level`, `ammount`, `paid`, `total`) VALUES
(1, 4, 'SOD', 'L3', 100000, 100000, 0),
(2, 5, 'SOD', 'L3', 100000, 100000, 0),
(3, 6, 'SOD', 'L4', 70000, 70000, 0),
(4, 7, 'SOD', 'L5', 70000, 70000, 0),
(5, 8, 'ELC', 'L4', 70000, 70000, 0),
(6, 9, 'ELC', 'L5', 70000, 70000, 0),
(7, 2, 'ELC', 'L3', 70000, 70000, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `second_view1`
-- (See below for the actual view)
--
CREATE TABLE `second_view1` (
`st_id` int(11)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`total` int(50)
,`behavior_second_marks` int(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(11) NOT NULL,
  `student_code` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `idnumber` varchar(16) NOT NULL,
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `level3` varchar(50) NOT NULL,
  `level4` varchar(50) NOT NULL,
  `level5` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `student_code`, `firstname`, `lastname`, `gender`, `dob`, `email`, `phone`, `idnumber`, `province`, `district`, `sector`, `cell`, `village`, `school`, `department`, `level3`, `level4`, `level5`, `position`) VALUES
(2, 202120490, 'SHEMA', 'Delphin', 'Male', '2024-04-01', 'uwacu@gmail.com', '0785216500', '1200280092238074', 'Western', 'Rubavu', 'Gisenyi', 'Mbugangari', 'ikibuga', 'Mubano 1', 'ELC', 'L3', '-', '-', 'Extern'),
(4, 202120427, 'ISHIMWE', 'Didier', 'Female', '2024-04-17', 'didier@gbnm.com', '0785216552156', '25874123654789', 'Western', 'Musanze', 'Rugerero', 'Kivumu', 'ikibuga', 'Mubano 1', 'SOD', 'L3', '-', '-', 'Intern'),
(5, 202120121, 'KABERA', 'Alliance', 'Female', '2024-04-15', 'alliance@gmail.com', '0780135557', '1254895623148512', 'North', 'Rubavu', 'Gisenyi', 'Mbugangari', 'Mbugangari', 'Gacuba', 'SOD', 'L3', '-', '-', 'Intern'),
(6, 202120001, 'RUGEIZA', 'Faustin', 'Male', '2008-01-01', 'faustin@gmail.com', '0785215580', '1452364125633254', 'Western', 'Rubavu', 'Gisenyi', 'Mbugangari', 'ikibuga', 'Gacuba', 'SOD', '-', 'L4', '-', 'Extern'),
(7, 202120002, 'NSHUTI', 'Nicolas', 'Male', '2004-01-01', 'nicolas@gmail.com', '0785216501', '1200296374108529', 'Western', 'Rubavu', 'Gisenyi', 'Mbugangari', 'ikibuga', 'ESSG', 'SOD', '-', '-', 'L5', 'Extern'),
(8, 202120003, 'KAMARIZA', 'Josiane', 'Female', '2002-03-21', 'kamariza@gmail.com', '0788888888', '1200385274185296', 'Western', 'Rubavu', 'Gisenyi', 'Kivumu', 'umutekano', 'ESSG', 'ELC', '-', 'L4', '-', 'Extern'),
(9, 202120004, 'HABUMUGISHA', 'Taufic', 'Male', '2005-06-18', 'taufic@gmail.com', '0784587855', '1200080003002552', 'Western', 'Rubavu', 'Gisenyi', 'Mbugangari', 'ikibuga', 'Muhato', 'ELC', '-', '-', 'L5', 'Extern'),
(19, 20212222, 'uwacu', 'kabera', 'Choose You', '2024-09-17', 'kaberaalliance6@gmail.com', '780135590', '1234567890098765', 'Eastern', 'kigali', 'gisenyi', 'mbugangari', 'ikibuga', 'muhato', 'SOD', 'L3', '-', '-', 'Extern');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub1`
-- (See below for the actual view)
--
CREATE TABLE `sub1` (
`marks_id` int(11)
,`department_name` varchar(50)
,`level` varchar(50)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`module_id` int(11)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub2`
-- (See below for the actual view)
--
CREATE TABLE `sub2` (
`marks_id` int(11)
,`department_name` varchar(50)
,`level` varchar(50)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`module_id` int(50)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub3`
-- (See below for the actual view)
--
CREATE TABLE `sub3` (
`marks_id` int(11)
,`department_name` varchar(50)
,`level` varchar(50)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`module_id` int(50)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub11`
-- (See below for the actual view)
--
CREATE TABLE `sub11` (
`marks_id` int(11)
,`department_name` varchar(50)
,`level` varchar(50)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`module_code` varchar(50)
,`module_name` varchar(50)
,`module_hours` int(50)
,`module_credit` varchar(20)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub22`
-- (See below for the actual view)
--
CREATE TABLE `sub22` (
`marks_id` int(11)
,`department_name` varchar(50)
,`level` varchar(50)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`module_code` varchar(50)
,`module_name` varchar(50)
,`module_hours` int(50)
,`module_credit` varchar(20)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub33`
-- (See below for the actual view)
--
CREATE TABLE `sub33` (
`marks_id` int(11)
,`department_name` varchar(50)
,`level` varchar(50)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`module_code` varchar(50)
,`module_name` varchar(50)
,`module_hours` int(50)
,`module_credit` varchar(20)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `term1`
-- (See below for the actual view)
--
CREATE TABLE `term1` (
`marks_id` int(11)
,`department_name` varchar(50)
,`level` varchar(50)
,`st_id` int(11)
,`module_code` varchar(50)
,`module_name` varchar(50)
,`module_hours` int(50)
,`module_credit` varchar(20)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `term2`
-- (See below for the actual view)
--
CREATE TABLE `term2` (
`marks_id` int(11)
,`department_name` varchar(50)
,`level` varchar(50)
,`st_id` int(50)
,`module_code` varchar(50)
,`module_name` varchar(50)
,`module_hours` int(50)
,`module_credit` varchar(20)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `term3`
-- (See below for the actual view)
--
CREATE TABLE `term3` (
`marks_id` int(11)
,`department_name` varchar(50)
,`level` varchar(50)
,`st_id` int(50)
,`module_code` varchar(50)
,`module_name` varchar(50)
,`module_hours` int(50)
,`module_credit` varchar(20)
,`formative` int(50)
,`summative` int(50)
,`total_marks` int(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `third_term`
--

CREATE TABLE `third_term` (
  `third_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `ammount` int(50) NOT NULL,
  `paid` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `third_term`
--

INSERT INTO `third_term` (`third_id`, `st_id`, `department_name`, `level`, `ammount`, `paid`, `total`) VALUES
(1, 4, 'SOD', 'L3', 100000, 100000, 0),
(2, 5, 'SOD', 'L3', 100000, 100000, 0),
(3, 6, 'SOD', 'L4', 70000, 70000, 0),
(4, 7, 'SOD', 'L5', 70000, 70000, 0),
(5, 8, 'ELC', 'L4', 70000, 70000, 0),
(6, 9, 'ELC', 'L5', 70000, 70000, 0),
(7, 2, 'ELC', 'L3', 70000, 70000, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `third_view1`
-- (See below for the actual view)
--
CREATE TABLE `third_view1` (
`st_id` int(11)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`total` int(50)
,`behavior_third_marks` int(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `gender`, `phone`, `nid`, `username`, `password`, `status`) VALUES
(1, 'SHEMA', 'Delphin', 'Male', '0785216500', '1200203937373663533', 'Accoutant', '12345', 'allowed'),
(3, 'ISHIMWE', 'Gloire', 'Male', '0785216500', '1200080003636353552', 'Register', '00000', 'allowed'),
(4, 'KABERA', 'Alliance', 'Female', '0785216500', '1200203937373663533', 'Teacher_L4_SOD', '444', 'allowed'),
(5, 'NSHUTI', 'Nicolas', 'Male', '0785216500', '1200080003636000552', 'Teacher_L5_SOD', '555', 'allowed'),
(6, 'ISHIMWE', 'Didier', 'Male', '0785216580', '1200363726439824273', 'Teacher_L3_SOD', '333', 'allowed'),
(11, 'UWAMAHORO', 'Alliance', 'Female', '0785216531', '1200080003688853552', 'Teacher_L3_ELC', '333', 'allowed'),
(12, 'GANZA', 'Kevin', 'Male', '0785216599', '1200080009996000552', 'Teacher_L4_ELC', '444', 'allowed'),
(13, 'ISHIMWE', 'Pacifique', 'Male', '0780016501', '1199980003636353552', 'Teacher_L5_ELC', '555', 'allowed'),
(14, 'KAMARIZA', 'Josiane', 'Female', '0785200555', '1200180003636000552', 'Patron', '1010', 'allowed');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_first`
-- (See below for the actual view)
--
CREATE TABLE `view_first` (
`st_id` int(11)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`total` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_second`
-- (See below for the actual view)
--
CREATE TABLE `view_second` (
`st_id` int(11)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`total` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_third`
-- (See below for the actual view)
--
CREATE TABLE `view_third` (
`st_id` int(11)
,`student_code` int(20)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`total` int(50)
);

-- --------------------------------------------------------

--
-- Structure for view `first_view1`
--
DROP TABLE IF EXISTS `first_view1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `first_view1`  AS SELECT `view_first`.`st_id` AS `st_id`, `view_first`.`student_code` AS `student_code`, `view_first`.`firstname` AS `firstname`, `view_first`.`lastname` AS `lastname`, `view_first`.`total` AS `total`, `behavior`.`behavior_first_marks` AS `behavior_first_marks` FROM (`behavior` left join `view_first` on(`view_first`.`st_id` = `behavior`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `report_first`
--
DROP TABLE IF EXISTS `report_first`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report_first`  AS SELECT `term1`.`st_id` AS `st_id`, `first_view1`.`student_code` AS `student_code`, `first_view1`.`firstname` AS `firstname`, `first_view1`.`lastname` AS `lastname`, `first_view1`.`total` AS `total`, `first_view1`.`behavior_first_marks` AS `behavior_first_marks`, `term1`.`department_name` AS `department_name`, `term1`.`level` AS `level`, `term1`.`module_code` AS `module_code`, `term1`.`module_name` AS `module_name`, `term1`.`module_hours` AS `module_hours`, `term1`.`module_credit` AS `module_credit`, `term1`.`formative` AS `formative`, `term1`.`summative` AS `summative`, `term1`.`total_marks` AS `total_marks` FROM (`term1` left join `first_view1` on(`term1`.`st_id` = `first_view1`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `report_second`
--
DROP TABLE IF EXISTS `report_second`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report_second`  AS SELECT `term2`.`st_id` AS `st_id`, `second_view1`.`student_code` AS `student_code`, `second_view1`.`firstname` AS `firstname`, `second_view1`.`lastname` AS `lastname`, `second_view1`.`total` AS `total`, `second_view1`.`behavior_second_marks` AS `behavior_second_marks`, `term2`.`department_name` AS `department_name`, `term2`.`level` AS `level`, `term2`.`module_code` AS `module_code`, `term2`.`module_name` AS `module_name`, `term2`.`module_hours` AS `module_hours`, `term2`.`module_credit` AS `module_credit`, `term2`.`formative` AS `formative`, `term2`.`summative` AS `summative`, `term2`.`total_marks` AS `total_marks` FROM (`term2` left join `second_view1` on(`term2`.`st_id` = `second_view1`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `report_third`
--
DROP TABLE IF EXISTS `report_third`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report_third`  AS SELECT `term3`.`st_id` AS `st_id`, `third_view1`.`student_code` AS `student_code`, `third_view1`.`firstname` AS `firstname`, `third_view1`.`lastname` AS `lastname`, `third_view1`.`total` AS `total`, `third_view1`.`behavior_third_marks` AS `behavior_third_marks`, `term3`.`department_name` AS `department_name`, `term3`.`level` AS `level`, `term3`.`module_code` AS `module_code`, `term3`.`module_name` AS `module_name`, `term3`.`module_hours` AS `module_hours`, `term3`.`module_credit` AS `module_credit`, `term3`.`formative` AS `formative`, `term3`.`summative` AS `summative`, `term3`.`total_marks` AS `total_marks` FROM (`term3` left join `third_view1` on(`term3`.`st_id` = `third_view1`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `second_view1`
--
DROP TABLE IF EXISTS `second_view1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `second_view1`  AS SELECT `view_second`.`st_id` AS `st_id`, `view_second`.`student_code` AS `student_code`, `view_second`.`firstname` AS `firstname`, `view_second`.`lastname` AS `lastname`, `view_second`.`total` AS `total`, `behavior`.`behavior_second_marks` AS `behavior_second_marks` FROM (`behavior` left join `view_second` on(`view_second`.`st_id` = `behavior`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sub1`
--
DROP TABLE IF EXISTS `sub1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sub1`  AS SELECT `marks_first_term`.`marks_id` AS `marks_id`, `marks_first_term`.`department_name` AS `department_name`, `marks_first_term`.`level` AS `level`, `student`.`student_code` AS `student_code`, `student`.`firstname` AS `firstname`, `student`.`lastname` AS `lastname`, `marks_first_term`.`module_id` AS `module_id`, `marks_first_term`.`formative` AS `formative`, `marks_first_term`.`summative` AS `summative`, `marks_first_term`.`total_marks` AS `total_marks` FROM (`marks_first_term` left join `student` on(`marks_first_term`.`st_id` = `student`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sub2`
--
DROP TABLE IF EXISTS `sub2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sub2`  AS SELECT `marks_second_term`.`marks_id` AS `marks_id`, `marks_second_term`.`department_name` AS `department_name`, `marks_second_term`.`level` AS `level`, `student`.`student_code` AS `student_code`, `student`.`firstname` AS `firstname`, `student`.`lastname` AS `lastname`, `marks_second_term`.`module_id` AS `module_id`, `marks_second_term`.`formative` AS `formative`, `marks_second_term`.`summative` AS `summative`, `marks_second_term`.`total_marks` AS `total_marks` FROM (`marks_second_term` left join `student` on(`marks_second_term`.`st_id` = `student`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sub3`
--
DROP TABLE IF EXISTS `sub3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sub3`  AS SELECT `marks_third_term`.`marks_id` AS `marks_id`, `marks_third_term`.`department_name` AS `department_name`, `marks_third_term`.`level` AS `level`, `student`.`student_code` AS `student_code`, `student`.`firstname` AS `firstname`, `student`.`lastname` AS `lastname`, `marks_third_term`.`module_id` AS `module_id`, `marks_third_term`.`formative` AS `formative`, `marks_third_term`.`summative` AS `summative`, `marks_third_term`.`total_marks` AS `total_marks` FROM (`marks_third_term` left join `student` on(`marks_third_term`.`st_id` = `student`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sub11`
--
DROP TABLE IF EXISTS `sub11`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sub11`  AS SELECT `sub1`.`marks_id` AS `marks_id`, `sub1`.`department_name` AS `department_name`, `sub1`.`level` AS `level`, `sub1`.`student_code` AS `student_code`, `sub1`.`firstname` AS `firstname`, `sub1`.`lastname` AS `lastname`, `modules`.`module_code` AS `module_code`, `modules`.`module_name` AS `module_name`, `modules`.`module_hours` AS `module_hours`, `modules`.`module_credit` AS `module_credit`, `sub1`.`formative` AS `formative`, `sub1`.`summative` AS `summative`, `sub1`.`total_marks` AS `total_marks` FROM (`sub1` left join `modules` on(`sub1`.`module_id` = `modules`.`module_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sub22`
--
DROP TABLE IF EXISTS `sub22`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sub22`  AS SELECT `sub2`.`marks_id` AS `marks_id`, `sub2`.`department_name` AS `department_name`, `sub2`.`level` AS `level`, `sub2`.`student_code` AS `student_code`, `sub2`.`firstname` AS `firstname`, `sub2`.`lastname` AS `lastname`, `modules`.`module_code` AS `module_code`, `modules`.`module_name` AS `module_name`, `modules`.`module_hours` AS `module_hours`, `modules`.`module_credit` AS `module_credit`, `sub2`.`formative` AS `formative`, `sub2`.`summative` AS `summative`, `sub2`.`total_marks` AS `total_marks` FROM (`sub2` left join `modules` on(`sub2`.`module_id` = `modules`.`module_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sub33`
--
DROP TABLE IF EXISTS `sub33`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sub33`  AS SELECT `sub3`.`marks_id` AS `marks_id`, `sub3`.`department_name` AS `department_name`, `sub3`.`level` AS `level`, `sub3`.`student_code` AS `student_code`, `sub3`.`firstname` AS `firstname`, `sub3`.`lastname` AS `lastname`, `modules`.`module_code` AS `module_code`, `modules`.`module_name` AS `module_name`, `modules`.`module_hours` AS `module_hours`, `modules`.`module_credit` AS `module_credit`, `sub3`.`formative` AS `formative`, `sub3`.`summative` AS `summative`, `sub3`.`total_marks` AS `total_marks` FROM (`sub3` left join `modules` on(`sub3`.`module_id` = `modules`.`module_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `term1`
--
DROP TABLE IF EXISTS `term1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `term1`  AS SELECT `marks_first_term`.`marks_id` AS `marks_id`, `marks_first_term`.`department_name` AS `department_name`, `marks_first_term`.`level` AS `level`, `marks_first_term`.`st_id` AS `st_id`, `modules`.`module_code` AS `module_code`, `modules`.`module_name` AS `module_name`, `modules`.`module_hours` AS `module_hours`, `modules`.`module_credit` AS `module_credit`, `marks_first_term`.`formative` AS `formative`, `marks_first_term`.`summative` AS `summative`, `marks_first_term`.`total_marks` AS `total_marks` FROM (`marks_first_term` left join `modules` on(`marks_first_term`.`module_id` = `modules`.`module_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `term2`
--
DROP TABLE IF EXISTS `term2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `term2`  AS SELECT `marks_second_term`.`marks_id` AS `marks_id`, `marks_second_term`.`department_name` AS `department_name`, `marks_second_term`.`level` AS `level`, `marks_second_term`.`st_id` AS `st_id`, `modules`.`module_code` AS `module_code`, `modules`.`module_name` AS `module_name`, `modules`.`module_hours` AS `module_hours`, `modules`.`module_credit` AS `module_credit`, `marks_second_term`.`formative` AS `formative`, `marks_second_term`.`summative` AS `summative`, `marks_second_term`.`total_marks` AS `total_marks` FROM (`marks_second_term` left join `modules` on(`marks_second_term`.`module_id` = `modules`.`module_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `term3`
--
DROP TABLE IF EXISTS `term3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `term3`  AS SELECT `marks_third_term`.`marks_id` AS `marks_id`, `marks_third_term`.`department_name` AS `department_name`, `marks_third_term`.`level` AS `level`, `marks_third_term`.`st_id` AS `st_id`, `modules`.`module_code` AS `module_code`, `modules`.`module_name` AS `module_name`, `modules`.`module_hours` AS `module_hours`, `modules`.`module_credit` AS `module_credit`, `marks_third_term`.`formative` AS `formative`, `marks_third_term`.`summative` AS `summative`, `marks_third_term`.`total_marks` AS `total_marks` FROM (`marks_third_term` left join `modules` on(`marks_third_term`.`module_id` = `modules`.`module_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `third_view1`
--
DROP TABLE IF EXISTS `third_view1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `third_view1`  AS SELECT `view_third`.`st_id` AS `st_id`, `view_third`.`student_code` AS `student_code`, `view_third`.`firstname` AS `firstname`, `view_third`.`lastname` AS `lastname`, `view_third`.`total` AS `total`, `behavior`.`behavior_third_marks` AS `behavior_third_marks` FROM (`behavior` left join `view_third` on(`view_third`.`st_id` = `behavior`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_first`
--
DROP TABLE IF EXISTS `view_first`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_first`  AS SELECT `student`.`st_id` AS `st_id`, `student`.`student_code` AS `student_code`, `student`.`firstname` AS `firstname`, `student`.`lastname` AS `lastname`, `first_term`.`total` AS `total` FROM (`first_term` left join `student` on(`student`.`st_id` = `first_term`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_second`
--
DROP TABLE IF EXISTS `view_second`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_second`  AS SELECT `student`.`st_id` AS `st_id`, `student`.`student_code` AS `student_code`, `student`.`firstname` AS `firstname`, `student`.`lastname` AS `lastname`, `second_term`.`total` AS `total` FROM (`second_term` left join `student` on(`student`.`st_id` = `second_term`.`st_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_third`
--
DROP TABLE IF EXISTS `view_third`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_third`  AS SELECT `student`.`st_id` AS `st_id`, `student`.`student_code` AS `student_code`, `student`.`firstname` AS `firstname`, `student`.`lastname` AS `lastname`, `third_term`.`total` AS `total` FROM (`third_term` left join `student` on(`student`.`st_id` = `third_term`.`st_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `behavior`
--
ALTER TABLE `behavior`
  ADD PRIMARY KEY (`behavior_id`),
  ADD UNIQUE KEY `st_id` (`st_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `department_name` (`department_name`);

--
-- Indexes for table `first_term`
--
ALTER TABLE `first_term`
  ADD PRIMARY KEY (`first_id`),
  ADD UNIQUE KEY `st_id` (`st_id`);

--
-- Indexes for table `marks_first_term`
--
ALTER TABLE `marks_first_term`
  ADD PRIMARY KEY (`marks_id`),
  ADD KEY `department_name` (`department_name`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `st_id` (`st_id`);

--
-- Indexes for table `marks_second_term`
--
ALTER TABLE `marks_second_term`
  ADD PRIMARY KEY (`marks_id`),
  ADD KEY `department_name` (`department_name`),
  ADD KEY `st_id` (`st_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `marks_third_term`
--
ALTER TABLE `marks_third_term`
  ADD PRIMARY KEY (`marks_id`),
  ADD KEY `department_name` (`department_name`),
  ADD KEY `st_id` (`st_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`),
  ADD UNIQUE KEY `course_code` (`module_code`),
  ADD KEY `department_name` (`department_name`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`par_id`),
  ADD UNIQUE KEY `student_code` (`st_id`),
  ADD UNIQUE KEY `fatherphone` (`fatherphone`),
  ADD UNIQUE KEY `fathernid` (`fathernid`),
  ADD UNIQUE KEY `matherphone` (`matherphone`),
  ADD UNIQUE KEY `mathernid` (`mathernid`);

--
-- Indexes for table `second_term`
--
ALTER TABLE `second_term`
  ADD PRIMARY KEY (`second_id`),
  ADD UNIQUE KEY `st_id` (`st_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `student_code` (`student_code`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `idnumber` (`idnumber`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `third_term`
--
ALTER TABLE `third_term`
  ADD PRIMARY KEY (`third_id`),
  ADD UNIQUE KEY `st_id` (`st_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `behavior`
--
ALTER TABLE `behavior`
  MODIFY `behavior_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `first_term`
--
ALTER TABLE `first_term`
  MODIFY `first_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `marks_first_term`
--
ALTER TABLE `marks_first_term`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `marks_second_term`
--
ALTER TABLE `marks_second_term`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `marks_third_term`
--
ALTER TABLE `marks_third_term`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `par_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `second_term`
--
ALTER TABLE `second_term`
  MODIFY `second_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `third_term`
--
ALTER TABLE `third_term`
  MODIFY `third_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `first_term`
--
ALTER TABLE `first_term`
  ADD CONSTRAINT `first_term_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`);

--
-- Constraints for table `marks_first_term`
--
ALTER TABLE `marks_first_term`
  ADD CONSTRAINT `marks_first_term_ibfk_1` FOREIGN KEY (`department_name`) REFERENCES `department` (`department_name`),
  ADD CONSTRAINT `marks_first_term_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`),
  ADD CONSTRAINT `marks_first_term_ibfk_3` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`);

--
-- Constraints for table `marks_second_term`
--
ALTER TABLE `marks_second_term`
  ADD CONSTRAINT `marks_second_term_ibfk_1` FOREIGN KEY (`department_name`) REFERENCES `department` (`department_name`),
  ADD CONSTRAINT `marks_second_term_ibfk_2` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`),
  ADD CONSTRAINT `marks_second_term_ibfk_3` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`);

--
-- Constraints for table `marks_third_term`
--
ALTER TABLE `marks_third_term`
  ADD CONSTRAINT `marks_third_term_ibfk_1` FOREIGN KEY (`department_name`) REFERENCES `department` (`department_name`),
  ADD CONSTRAINT `marks_third_term_ibfk_2` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`),
  ADD CONSTRAINT `marks_third_term_ibfk_3` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`department_name`) REFERENCES `department` (`department_name`);

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`);

--
-- Constraints for table `second_term`
--
ALTER TABLE `second_term`
  ADD CONSTRAINT `second_term_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`department`) REFERENCES `department` (`department_name`);

--
-- Constraints for table `third_term`
--
ALTER TABLE `third_term`
  ADD CONSTRAINT `third_term_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

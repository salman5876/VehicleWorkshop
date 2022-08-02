-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 05:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `sno` int(2) NOT NULL,
  `a-email` varchar(30) NOT NULL,
  `a-password` varchar(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`sno`, `a-email`, `a-password`, `datetime`) VALUES
(1, 'salman@gmail.com', 'salman', '2022-05-31 22:48:17'),
(2, 'musa@gmail.com', 'musa', '2022-05-31 22:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Sno` int(2) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pnumber` varchar(40) NOT NULL,
  `Problem` varchar(80) NOT NULL,
  `Workshop` varchar(80) NOT NULL,
  `AppointmentDate` date NOT NULL,
  `AppointmentTime` time(2) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Zip` int(20) NOT NULL,
  `Date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Sno`, `Fname`, `Lname`, `Email`, `Pnumber`, `Problem`, `Workshop`, `AppointmentDate`, `AppointmentTime`, `Address`, `City`, `Zip`, `Date/time`) VALUES
(16, 'salman', 'ahmed', 'salman@gmail.com', '03420506599', 'car wash', 'toyota', '2022-06-25', '22:10:00.00', 'islamabad', 'talhar', 1234, '2022-06-11 23:11:40'),
(17, 'Musa', 'Hafeez', 'salman@gmail', '03420506599', 'gg', 'gdg', '2022-06-02', '23:00:00.00', 'gdfgdg', 'gdfg', 757, '2022-06-11 23:12:28'),
(18, 'usama', 'ali', 'ali@gmail.com', '47747474', 'A/C or Heater', 'Honda', '2022-06-11', '23:17:00.00', 'fdddfdfdfd', 'aa', 112, '2022-06-11 23:14:26'),
(19, 'musa', 'ali', 'musahafeez11@gmail.com', '444444444', 'Battery Problem', 'Suzuki', '2022-06-18', '18:49:00.00', 'Islamabad', 'islamabad', 44, '2022-06-18 13:45:17'),
(20, 'ali', 'ali', 'aliali@gmail.com', '0311445666', 'A/C or Heater', 'Suzuki', '2022-06-30', '12:55:00.00', 'g6', 'islamabad', 44556, '2022-06-20 12:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `Sno` int(3) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `CompForm` varchar(80) NOT NULL,
  `Date/Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`Sno`, `Fname`, `Lname`, `Email`, `Address`, `CompForm`, `Date/Time`) VALUES
(3, 'salman', 'ahmed', 'salman@gmail.com', 'e8', 'ustad jee tube navi pasi', '2022-06-01 11:38:34'),
(8, 'ali', 'raiz', 'ali1@gmail.com', 'lahore', 'car ', '2022-06-08 00:05:08'),
(9, 'moeez', 'ahmed', 'moeez@gmail.com', 'sagri', 'vv ', '2022-06-08 00:10:02'),
(10, 'fahad', 'ali', 'fahad@gmail.com', 'rawat', 'qqww ', '2022-06-08 00:11:15'),
(18, 'musa', 'imran', 'ali1@gmail.com', 'lahore', ' rhy', '2022-06-12 00:08:59'),
(19, 'ali', 'ali', 'aliali@gmail.com', 'g5', 'issue with mechanic ', '2022-06-20 12:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `machanic`
--

CREATE TABLE `machanic` (
  `Sno` int(2) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pnumber` varchar(20) NOT NULL,
  `Choose a vehicle` varchar(20) NOT NULL,
  `Choose a Problem` varchar(20) NOT NULL,
  `Current Location` varchar(50) NOT NULL,
  `Problem Detail` varchar(80) NOT NULL,
  `Date/Time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machanic`
--

INSERT INTO `machanic` (`Sno`, `Fname`, `Lname`, `Email`, `Pnumber`, `Choose a vehicle`, `Choose a Problem`, `Current Location`, `Problem Detail`, `Date/Time`) VALUES
(2, 'Musa', 'Hafeez', 'salman@gmail.com', '03420506599', 'Lahore Libartey Chow', 'Height up', 'village Talhar', 'START AC Car Height up', '2022-06-08 16:12:56'),
(3, 'ahmed', 'ali', 'ali@gmail.com', '0357888875', 'bike', 'Battery Problem', 'rawat', '', '2022-06-11 21:23:20'),
(4, 'irfan', 'mm', 'irfan@gmail.com', '03547894561', 'Car', 'A/C or Heater', 'rawat', 'ac gas', '2022-06-11 21:29:11'),
(5, 'ahmed', 'mm', 'ali1@gmail.com', '22222222222222222', 'Car', 'Car Wash', 'rawat', ' NIL', '2022-06-18 12:55:08'),
(6, 'ahmed', 'ali', 'ali@gmail.com', '0357888875', 'Car', 'Battery Problem', 'rawat', ' kkkkk', '2022-06-18 13:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Sno` int(3) NOT NULL,
  `pkg` varchar(30) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Sno`, `pkg`, `detail`, `price`) VALUES
(83, 'Car', 'Full wash Service', 1200),
(84, 'Car', ' Simple wash', 1000),
(87, 'Car', 'Touchless Car Wash', 2000),
(88, 'Car', 'Exterior Car Wash', 2500),
(89, 'Bike', 'Full-service Bike Wash', 600),
(90, 'Bike', 'Simple service Bike Wash', 500),
(91, 'Car', 'Tuning', 800),
(92, 'Car', 'Engine Repair', 4000),
(93, 'Car', 'Engine Replacement', 8000),
(94, 'Bike', 'Tuning', 600),
(95, 'Bike', 'Engine Repair', 1000),
(96, 'Bike', 'Engine Replacement', 2000),
(97, 'Bike', 'Tyre Replace', 2000),
(98, 'Car', 'Tyre Replace', 5000),
(99, 'Car', 'Battery Replace', 5000),
(100, 'Bike', 'Battery Replace', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Sno` int(3) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pnumber` varchar(30) NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Zcode` int(2) NOT NULL,
  `Date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Sno`, `Fname`, `Lname`, `Email`, `Pnumber`, `Gender`, `Password`, `Address`, `City`, `Zcode`, `Date/time`) VALUES
(25, 'salman', 'ahmed', 'salman@gmail.com', '034578', 'Male', 'salman', 'NAVY', 'pindi', 8888, '2022-06-07 23:21:03'),
(26, 'Musa', 'Hafeez', 'musa@gmail.com', '03420506599', 'Male', 'musa', 'e8', 'tal', 7788, '2022-06-07 23:23:50'),
(27, 'se', 'bin', '23@gmail.com', '', 'Male', '123456789', 'Village Talhar', 'karachi', 4565, '2022-06-08 15:02:45'),
(28, 'ali', 'ali', 'aliali@gmail.com', '0345678', 'Male', 'alialialiali', 'eng', 'london', 7788, '2022-06-20 12:53:05'),
(29, 'fsfs', 'dsfsf', 'sdfsd@dfssdfds', '4353', 'Male', 'qqqqqqqqq', 'qqq', 'qq', 2211, '2022-06-22 00:05:27'),
(30, 'moeez', 'ahmed', 'moeez@gmail.com', '035887775757', '', 'moeezmoeez', 'karachi', 'karachi', 122, '2022-07-03 20:39:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `machanic`
--
ALTER TABLE `machanic`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `machanic`
--
ALTER TABLE `machanic`
  MODIFY `Sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

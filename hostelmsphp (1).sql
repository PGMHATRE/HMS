-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 06:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelmsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@mail.com', 'D00F5D5217896FB7FD601412CB890830', '2020-09-08 20:31:45', '2021-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(10, 'H1', 'CE', 'Civil Engineering', '2023-04-07 19:35:56'),
(11, 'E1', 'ENTC', 'Electrical Engineering', '2023-04-07 19:36:59'),
(12, 'I1', 'IT', 'Information Technology', '2023-04-07 19:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `leaveappication`
--

CREATE TABLE `leaveappication` (
  `sr_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `leaving_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `back_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `goingaddress` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `goingcity` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `goingpincode` int(11) NOT NULL,
  `parentApplication` text NOT NULL,
  `regNo` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `firstName` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `middleName` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastName` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contactNo` bigint(10) NOT NULL,
  `emecontactNo` bigint(10) NOT NULL,
  `parentName` varchar(500) NOT NULL,
  `relation` varchar(500) NOT NULL,
  `parentNo` bigint(10) NOT NULL,
  `pemail` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaveappication`
--

INSERT INTO `leaveappication` (`sr_no`, `room_no`, `leaving_date`, `back_date`, `goingaddress`, `goingcity`, `goingpincode`, `parentApplication`, `regNo`, `firstName`, `middleName`, `lastName`, `email`, `contactNo`, `emecontactNo`, `parentName`, `relation`, `parentNo`, `pemail`) VALUES
(1, 101, '2023-04-14 18:30:00', '2023-04-16 18:30:00', 'Warje', 'Pune', 413590, '', '2007048', 'Saniya', 'Baba', 'Pathan', 'saniya675@gmail.com', 7385913151, 6734895736, 'Anjum', 'mom', 9845236748, 'saniyap675@gmail.com'),
(8, 101, '2023-04-20 18:30:00', '2023-04-21 18:30:00', 'Warje', 'Pune', 413590, '', '2007024', 'Sara', 'Alam', 'Pathan', 'sara123@gmail.com', 9634672849, 7834274960, 'Alam', 'Father', 7734892748, '7734892748'),
(15, 101, '2002-12-12 18:30:00', '1978-11-16 18:30:00', 'Culpa eligendi anim ', 'Est eiusmod cillum a', 0, 'leave_parents.pdf', '0', 'Alfreda Bryant', 'Astra Matthews', 'Oprah Alston', 'prerana@gmail.com', 42, 56, 'Constance Dale', 'Sunt quia molestias ', 0, 'holowom@mailinator.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `seater`, `stayfrom`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(22, 101, 3, '2023-04-10', '2007048', 'Saniya', 'Baba', 'Pathan', '', 7385913151, 'saniya675@gmail.com', 9823564837, 'Anjum Pathan', 'Mother', 9623634521, 'Warje', 'Pune', '', 413590, 'Warje', 'Pune', '', 413590, '2023-04-09 15:13:02', ''),
(23, 101, 3, '2023-04-21', '2007024', 'Sara', 'Alam', 'Pathan', '', 9634672849, 'sara123@gmail.com', 7634894726, 'Alam Pathan', 'Father', 7634527857, 'Warje', 'Pune', '', 413590, 'Warje', 'Pune', '', 413590, '2023-04-19 19:45:56', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`) VALUES
(10, 3, 101, 2, '2023-04-07 19:44:30'),
(11, 4, 102, 7, '2023-04-09 17:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Alabama'),
(2, 'Alaska'),
(3, 'Arizona'),
(4, 'Arkansas'),
(5, 'California'),
(6, 'Colorado'),
(7, 'Connecticut'),
(8, 'Delaware'),
(9, 'Florida'),
(10, 'Georgia'),
(11, 'Hawaii'),
(12, 'Idaho'),
(13, 'Illinois'),
(14, 'Iowa'),
(15, 'Kansas'),
(16, 'Kentucky'),
(17, 'Louisiana'),
(18, 'Maine'),
(19, 'Marryland'),
(20, 'Massachusetts'),
(21, 'Michigan'),
(22, 'Minnesota'),
(23, 'Mississippi'),
(24, 'Missouri'),
(25, 'Nevada'),
(26, 'New Jersey'),
(27, 'New York'),
(28, 'North Carolina'),
(29, 'North Dakota'),
(30, 'Ohio'),
(31, 'Oklahoma'),
(32, 'South Carolina'),
(33, 'South Dakota'),
(34, 'Texas'),
(35, 'Virginia'),
(36, 'Washington');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(9, 10, 'terry@mail.com', 0x3a3a31, '', '', '2021-03-05 04:12:00'),
(10, 10, 'terry@mail.com', 0x3a3a31, '', '', '2021-03-05 04:14:44'),
(11, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-05 04:19:52'),
(12, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-05 08:53:33'),
(13, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-05 17:35:34'),
(14, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-06 02:43:01'),
(15, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-06 15:18:49'),
(16, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-07 09:35:23'),
(17, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-07 09:59:55'),
(18, 22, 'colin@gmail.com', 0x3a3a31, '', '', '2021-06-16 14:51:24'),
(19, 22, 'colin@gmail.com', 0x3a3a31, '', '', '2021-12-12 15:31:50'),
(20, 22, 'colin@gmail.com', 0x3a3a31, '', '', '2022-04-02 16:01:31'),
(21, 21, 'ross@mail.com', 0x3a3a31, '', '', '2022-04-02 16:52:47'),
(22, 20, 'richards@mail.com', 0x3a3a31, '', '', '2022-04-03 13:15:00'),
(23, 24, 'jennifer@mail.com', 0x3a3a31, '', '', '2022-04-03 14:32:09'),
(24, 24, 'jennifer@mail.com', 0x3a3a31, '', '', '2022-04-03 14:34:17'),
(25, 19, 'bruce@mail.com', 0x3a3a31, '', '', '2022-04-03 14:44:31'),
(26, 27, 'nancy@mail.com', 0x3a3a31, '', '', '2022-04-03 15:00:46'),
(27, 32, 'liamoore@mail.com', 0x3a3a31, '', '', '2022-04-03 15:48:35'),
(28, 32, 'liamoore@mail.com', 0x3a3a31, '', '', '2022-04-03 15:51:34'),
(29, 33, 'vaishnavi123@gmail.com', 0x3a3a31, '', '', '2023-03-22 06:32:08'),
(30, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-02 04:03:48'),
(31, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-02 06:37:58'),
(32, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-02 06:59:18'),
(33, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-03 05:02:03'),
(34, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-05 15:15:46'),
(35, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-05 15:26:14'),
(36, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-07 19:51:42'),
(37, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-08 06:06:28'),
(38, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-08 07:33:30'),
(39, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-08 08:12:50'),
(40, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-08 08:52:28'),
(41, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-09 14:35:27'),
(42, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-09 15:15:35'),
(43, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-09 16:26:25'),
(44, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-09 17:48:49'),
(45, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-09 18:16:10'),
(46, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-10 06:42:55'),
(47, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-10 09:54:17'),
(48, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-11 15:46:01'),
(49, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-11 17:17:41'),
(50, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-13 16:09:24'),
(51, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-14 04:19:36'),
(52, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-14 04:19:37'),
(53, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-14 05:20:07'),
(54, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-14 05:25:38'),
(55, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-14 06:21:08'),
(56, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-14 07:00:02'),
(57, 34, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-14 08:40:44'),
(58, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-14 08:45:52'),
(59, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-18 07:03:33'),
(60, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-18 20:46:47'),
(61, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-19 10:10:53'),
(62, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-19 10:34:18'),
(63, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-19 10:43:20'),
(64, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-19 10:50:16'),
(65, 48, 'sara123@gmail.com', 0x3a3a31, '', '', '2023-04-19 19:44:44'),
(66, 48, 'sara123@gmail.com', 0x3a3a31, '', '', '2023-04-21 15:41:41'),
(67, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-28 11:51:29'),
(68, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-29 05:41:52'),
(69, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-29 05:47:36'),
(70, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-29 05:53:26'),
(71, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-29 06:05:12'),
(72, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-29 06:48:15'),
(73, 41, 'saniya675@gmail.com', 0x3a3a31, '', '', '2023-04-29 07:57:59'),
(74, 49, 'prerana@gmail.com', 0x3a3a31, '', '', '2023-05-06 05:33:02'),
(75, 49, 'prerana@gmail.com', 0x3a3a31, '', '', '2023-05-06 05:33:54'),
(76, 49, 'prerana@gmail.com', 0x3a3a31, '', '', '2023-05-06 05:38:09'),
(77, 49, 'prerana@gmail.com', 0x3a3a31, '', '', '2023-05-06 16:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(38, '2007017', 'Vaishnavi', 'Shivaji', 'Gosavi', 9834671367, 'vaishnavi123@gmail.com', '0f41bad9010cfbbe863de7d7f4faebae', '2023-04-09 16:18:53', '', ''),
(39, '2007046', 'Nutan ', 'Navnath', 'Satpute', 9634671287, 'nutan123@gmail.com', '7d55b3a42c02b41f1f8e1273c44fdb9e', '2023-04-09 16:20:54', '', ''),
(40, '200703', 'Anjali', 'Sampat', 'Auti', 9626384940, 'anjali123@gmail.com', '73cf25d56e3fe00e398b81fef7c32615', '2023-04-14 05:17:39', '', ''),
(41, '2007048', 'saniya', 'Baba', 'pathan', 9734263846, 'saniya675@gmail.com', '6a8bef38efc7f2559d05e0c3ec2f2b74', '2023-04-14 08:44:45', '', ''),
(43, '2007019', 'Prachi ', 'Machhindra', 'Harel', 8380982136, 'prachi123@gmail.com', '368c601c9d0d574764e425ecc8eef60a', '2023-04-19 06:16:22', '', ''),
(44, '2007010', 'Sejal', 'Amar', 'Dengale', 9922763875, 'sejal123@gmail.com', '4a260cc29ebce57e52cf24b93cc5b759', '2023-04-19 06:25:47', '', ''),
(45, '2007029', 'Akshada ', 'ajit', 'kolape', 9284436523, 'akshada123@gmail.com', '63a9f0ea7bb98050796b649e85481845', '2023-04-19 06:37:44', '', ''),
(48, '2007024', 'Sara', 'Alam', 'Pathan', 9634672849, 'sara123@gmail.com', '312dc6ec7c900fb9017bf43c6b1f81bb', '2023-04-19 19:44:35', '', ''),
(49, 'Vel cum qui delectus', 'Alfreda Bryant', 'Astra Matthews', 'Oprah Alston', 42, 'prerana@gmail.com', '63a9f0ea7bb98050796b649e85481845', '2023-05-06 05:32:48', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaveappication`
--
ALTER TABLE `leaveappication`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `parentaaplication` (`parentNo`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `leaveappication`
--
ALTER TABLE `leaveappication`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

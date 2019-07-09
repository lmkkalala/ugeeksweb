-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 05:17 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ugeeks_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `F_Title` varchar(200) NOT NULL,
  `F_Content` text NOT NULL,
  `S_Content` text NOT NULL,
  `S_Title` varchar(200) NOT NULL,
  `T_Content` text NOT NULL,
  `T_Title` varchar(300) NOT NULL,
  `Fo_Content` text NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Status` varchar(200) NOT NULL DEFAULT 'Unactive',
  `Dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `F_Title`, `F_Content`, `S_Content`, `S_Title`, `T_Content`, `T_Title`, `Fo_Content`, `Picture`, `Status`, `Dates`) VALUES
(12, 'test', 'encore', 'reussi', 'bien', 'bien', 'et plus', 'encore', '../images/08.jpg', 'Unactive', '2019-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `ID` int(11) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Intro` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Caption` text NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Unactive',
  `Dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`ID`, `Picture`, `Intro`, `Title`, `Caption`, `Status`, `Dates`) VALUES
(9, '../images/IMG-20181122-WA0060.jpg', 'WELCOME TO', 'U-Geeks', 'Our intelligent and sustainable solutions are what make us unique. We believe there is no limit to what our team can do. With us, your problem has a solution.', 'Unactive', '2019-06-07 16:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Message` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `Name`, `Email`, `Subject`, `Message`, `status`) VALUES
(2, 'ug hub', 'light@gmail.com', 'mnkkjk', 'hi', 'Active'),
(3, 'lucien', 'lmk@gmail.com', 'help', 'hi there,how are you doing there?', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `Icon` varchar(100) NOT NULL DEFAULT 'N/A',
  `Service` varchar(100) NOT NULL,
  `Caption` text NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Unactive',
  `Dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Icon`, `Service`, `Caption`, `Status`, `Dates`) VALUES
(2, 'N/A', 'Game Development', 'We are the best', 'Active', '2019-06-13 16:16:50'),
(3, 'N/A', 'Responsive Design', 'multicolors', 'Active', '2019-06-20 04:13:18'),
(4, 'N/A', 'Media&amp;Advertisement', 'Another one', 'Active', '2019-06-20 04:14:24'),
(5, 'N/A', 'Graphic Design', 'another one ', 'Active', '2019-06-20 04:30:19'),
(6, 'N/A', 'Apps Development', 'another one', 'Active', '2019-06-20 04:30:59'),
(7, 'N/A', 'Web Design', 'Another one', 'Active', '2019-06-20 03:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `ID` int(11) NOT NULL,
  `Skill_Name` varchar(100) NOT NULL,
  `Level` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Unactive',
  `Dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`ID`, `Skill_Name`, `Level`, `Status`, `Dates`) VALUES
(1, 'Web Developpment', '90', 'Active', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `ID` int(11) NOT NULL,
  `Picture` varchar(200) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Content` longtext NOT NULL,
  `Author` varchar(200) NOT NULL DEFAULT 'U-Geeks',
  `Status` varchar(200) NOT NULL DEFAULT 'Unactive',
  `Dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`ID`, `Picture`, `Title`, `Content`, `Author`, `Status`, `Dates`) VALUES
(1, '../images/11.JPG', 'Young Engineers', 'Wonderful', 'U-Geeks', 'Active', '2019-06-13 18:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `ID` int(11) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `Skills` text NOT NULL,
  `Status` varchar(200) NOT NULL DEFAULT 'Unactive',
  `Dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`ID`, `Picture`, `Title`, `First_Name`, `Last_Name`, `Description`, `Skills`, `Status`, `Dates`) VALUES
(3, '../images/IMG-20180815-WA0003.jpg', 'Team Leader', 'Lucien', 'Meru', 'Very committed', 'Software Developer', 'Unactive', '2019-06-14 18:39:36'),
(4, '../images/t3.jpg', 'Software Developer ', 'Lucien', 'Meru', 'Committed', 'Programming ', 'Active', '2019-06-20 04:02:39'),
(5, '../images/11.png', 'Software Developer ', 'Lucien', 'Murhula', 'Occupation', 'Programming ', 'Active', '2019-06-20 04:04:12'),
(6, '../images/t1.png', 'Software Developer ', 'Alain', 'Tambwe', 'He knows hemself', 'Programming ', 'Active', '2019-06-20 04:05:40'),
(7, '../images/48.jpg', 'Software Developer ', 'Ezekiel', 'Kapanga', 'He knows', 'Programming ', 'Active', '2019-06-20 04:06:39'),
(8, '../images/45.jpg', 'Software Developer ', 'Jonathan', 'Malengela', 'he knows', 'Programming ', 'Active', '2019-06-20 04:08:10'),
(9, '../images/47.jpg', 'Software Developer ', 'Jeremy ', 'Ramazani', 'He knows', 'Programming ', 'Active', '2019-06-20 04:09:30'),
(10, '../images/49.jpg', 'Engeneer', 'Elie', 'Muyali', 'He knows', 'consultant', 'Active', '2019-06-20 04:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Unactive',
  `Dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `First_Name`, `Last_Name`, `Email`, `Password`, `Status`, `Dates`) VALUES
(1, 'Lucien', 'Meru', 'lucienmeru@gmail.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'Unactive', '2019-06-14 18:16:53'),
(2, 'lmk', 'kalala', 'lmk@gmail.com', '12345', 'Unactive', '2019-06-15 18:31:38'),
(3, 'luciano', 'light', 'agent@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Unactive', '2019-06-20 04:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `ID` int(11) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Unactive',
  `Dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`ID`, `Picture`, `Title`, `Description`, `Status`, `Dates`) VALUES
(1, '../images/gif2.gif', 'Artificial Intelligence', 'Good', 'Active', '2019-06-13 16:43:09'),
(3, '../images/d1.jpg', 'Be secured', 'with us ', 'Active', '2019-06-20 04:09:51'),
(4, '../images/w5.png', 'awesome ', 'thanks', 'Active', '2019-06-20 04:17:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

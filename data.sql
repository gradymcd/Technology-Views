-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2015 at 06:35 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Technology-Views`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choices` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `question`, `choices`) VALUES
(0, 'Are you optimistic that coming technological and scientific changes will make life in the future easier?', 'a:2:{s:3:"Yes";i:7;s:2:"No";i:0;}'),
(1, 'Do you expect that within the next 50 years people needing new organs will have them custom grown in a lab?', 'a:2:{s:3:"Yes";i:6;s:2:"No";i:1;}'),
(2, 'Do you expect that computers will be able to create art that is indistinguishable from that produced by humans?', 'a:2:{s:3:"Yes";i:3;s:2:"No";i:4;}'),
(3, 'Do you expect that scientists will have developed the technology to teleport objects in the next 50 years?', 'a:2:{s:3:"Yes";i:1;s:2:"No";i:6;}'),
(4, 'Would it be a change for the worse if prospective parents could alter the DNA of their children to produce smarter, healthier, or more athletic offspring?', 'a:2:{s:3:"Yes";i:4;s:2:"No";i:3;}'),
(5, 'Would it be a change for the worse if lifelike robots become the primary caregivers for the elderly and people in poor health?', 'a:2:{s:3:"Yes";i:5;s:2:"No";i:2;}'),
(6, 'Would it be a change for the worse if personal and commercial drones are given permission to fly through most U.S. airspace?', 'a:2:{s:3:"Yes";i:3;s:2:"No";i:4;}'),
(7, 'Would it be a change for the worse if most people wear implants or other devices that constantly show them information about the world around them?', 'a:2:{s:3:"Yes";i:1;s:2:"No";i:6;}'),
(8, 'Would you like to ride in a driverless car?', 'a:2:{s:3:"Yes";i:5;s:2:"No";i:2;}'),
(9, 'Are you interested in getting a brain implant to improve your memory or mental capacity?', 'a:2:{s:3:"Yes";i:4;s:2:"No";i:3;}'),
(10, 'Which of these inventions would you like to own the most?', 'a:4:{s:19:"Travel improvements";i:2;s:11:"Time travel";i:1;s:19:"Health improvements";i:3;s:4:"None";i:1;}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

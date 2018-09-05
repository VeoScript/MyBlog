-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 03:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veoscript`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Id` int(11) NOT NULL,
  `GuestName` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Post` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Id`, `GuestName`, `Contact`, `Post`, `Date`) VALUES
(22, 'Jerome Villaruel', '09750047554', 'Hello World!\r\nWELL DONE!', '2018-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `GuestID` int(11) NOT NULL,
  `Commentor` varchar(255) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Id`, `GuestID`, `Commentor`, `Comment`) VALUES
(4, 8, 'Veo Script', 'Unsay problema sa imong system? I contact lang ko.'),
(5, 7, 'Yu Mi', 'Thank You Veoscript'),
(6, 10, 'Veo Script', 'Okay... adto ras boarding house'),
(7, 7, 'Veo Script', 'Haha, You\'re welcome'),
(8, 10, 'Rizza Lilang', 'Oo, muadto rako.'),
(9, 10, 'Veo Script', 'Okay!'),
(10, 8, 'Anne Mantilla', 'I LOVE YOU! <3'),
(11, 8, 'Veo Script', 'I love you too...'),
(12, 18, 'Veo Script', 'Ayus! hahahaha'),
(13, 18, 'Jerome Villaruel', 'Tapos na rin sa wakas! hahahaha\r\nI a upload na lang tong website Master'),
(14, 21, 'Veo Script', 'Fuck you ka bai'),
(15, 22, 'Veo Script', 'Sa wakas natapos na! hahaha'),
(16, 22, 'Jerome Villaruel', 'Oo nga I a upload na lang tong website sa web hosting Master.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

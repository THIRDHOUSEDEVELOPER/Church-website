-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 07:48 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
`ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Subtitle` varchar(255) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`ID`, `Title`, `Subtitle`, `Comment`) VALUES
(4, 'db test', 'in the db', 'not in php'),
(5, '', '', ''),
(6, 'my tittle', 'my subtitle', 'my comment'),
(7, 'alaya', 'is a corper', 'serving in NNPC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

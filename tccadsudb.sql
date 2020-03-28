-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 12:42 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tccadsudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `audioupload`
--

CREATE TABLE `audioupload` (
  `ID` int(11) NOT NULL,
  `audiopath` varchar(255) NOT NULL,
  `audiodescription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audioupload`
--

INSERT INTO `audioupload` (`ID`, `audiopath`, `audiodescription`) VALUES
(3, 'audioupload/24WEME~2.MP3', 'Let it rain'),
(4, 'audioupload/brooklyn-tabernacle-choir---total-praise-(a.-redchits).mp3', 'broolin');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `eventdescription` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `eventname`, `eventdescription`, `venue`, `date_time`) VALUES
(1, 'marriage seminar', 'jhdskjxzh', 'TCC ADSU', '2019-09-12 13:01:00'),
(2, 'marriage seminar', 'jhdskjxzh', 'TCC ADSU', '2019-09-12 13:01:00'),
(3, 'love works', 'abcdefg', 'TCC ADSU', '2019-03-01 09:45:00'),
(4, 'marriage seminar', 'talk on wedding pre', 'TCC ADSU', '2019-08-30 15:30:00'),
(5, 'workers retreat', 'self actualisation', 'TCC ADSU', '2019-09-08 15:30:00'),
(6, 'PRAISE NIGHT', 'Worship and praises by some guest artists', 'CHAPEL AUDITORIUM', '2019-10-02 19:30:00'),
(7, 'Christmas Eve', 'prayers blabla', 'TCC Adsu', '2020-12-24 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `imageupload`
--

CREATE TABLE `imageupload` (
  `ID` int(11) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  `imagedescription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imageupload`
--

INSERT INTO `imageupload` (`ID`, `imagepath`, `imagedescription`) VALUES
(26, 'imageupload/portfolio-img1.jpg', 'Lorem ipsum dolor sit amet, tempor labore sadipscing over the years, and a great idea,'),
(27, 'imageupload/portfolio-img4.jpg', 'tempor labore sadipscing over the years, and a great idea, Lorem ipsum dolor sit amet, '),
(31, 'imageupload/portfolio-img3.jpg', 'tempor labore sadipscing  and a great idea, Lorem ipsum dolor sit amet,  over the years,'),
(32, 'imageupload/my_image.jpg', 'tempor labore sadipscing  and a great idea, Lorem ipsum dolor sit amet,  over the years,'),
(33, 'imageupload/FB_IMG_1503657379662.jpg', 'tempor labore sadipscing  and a great idea, Lorem ipsum dolor sit amet,  over the years,'),
(34, 'imageupload/FB_IMG_1502719950510.jpg', 'tempor labore sadipscing  and a great idea, Lorem ipsum dolor sit amet,  over the years,'),
(35, 'imageupload/chicago_skyline_night-wallpaper-1280x1024.jpg', 'tempor labore sadipscing  and a great idea, Lorem ipsum dolor sit amet,  over the years,'),
(36, 'imageupload/blue_ceiling_2-wallpaper-1280x1024.jpg', 'This is a sample');

-- --------------------------------------------------------

--
-- Table structure for table `logging`
--

CREATE TABLE `logging` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logging`
--

INSERT INTO `logging` (`ID`, `username`, `password`) VALUES
(1, 'Admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `sermon`
--

CREATE TABLE `sermon` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Subtitle` varchar(255) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sermon`
--

INSERT INTO `sermon` (`ID`, `Title`, `Subtitle`, `Comment`) VALUES
(17, 'media blog', 'projecting', 'Nigeria is an agrarian country because agriculture is the main occupation, over 75 percent of the nation population engages in agriculture. In addition, Nigeria is endowed with favorable climate and abundant fertile soil which support the practice of agriculture.\r\n\r\n'),
(18, 'Rejoice', 'about me', 'Agriculture is the backbone of a stable economy and its importance particularly in developing nation of the world, it cannot be over emphasized just as it was in Nigeria content before the discovery of petroleum when it was the great foreign exchange earner. A healthy well feed nation is a strong nation thus has promote both the state and the federal government of Nigeria to formulate policies that will not only sustain but improve agricultural production. '),
(19, 'BAPTISM', 'anything', 'Agriculture can be defined as science and art of cultivating the land to provide plant and animal for the use of man, feed for animals and fiber for industry, (Ayori 2009). Thus agriculture can be seen as industry with farming as its centers.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audioupload`
--
ALTER TABLE `audioupload`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `imageupload`
--
ALTER TABLE `imageupload`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logging`
--
ALTER TABLE `logging`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sermon`
--
ALTER TABLE `sermon`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audioupload`
--
ALTER TABLE `audioupload`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `imageupload`
--
ALTER TABLE `imageupload`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `logging`
--
ALTER TABLE `logging`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sermon`
--
ALTER TABLE `sermon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

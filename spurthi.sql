-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2018 at 06:49 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spurthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `abhivyanjan`
--

CREATE TABLE `abhivyanjan` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abhivyanjan`
--

INSERT INTO `abhivyanjan` (`clgid`) VALUES
('85965458');

-- --------------------------------------------------------

--
-- Table structure for table `bafflefield`
--

CREATE TABLE `bafflefield` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brainbuster`
--

CREATE TABLE `brainbuster` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clashofcompeers`
--

CREATE TABLE `clashofcompeers` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `codestorm`
--

CREATE TABLE `codestorm` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codestorm`
--

INSERT INTO `codestorm` (`clgid`) VALUES
('315175710052'),
('52');

-- --------------------------------------------------------

--
-- Table structure for table `cricbet`
--

CREATE TABLE `cricbet` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `edit`
--

CREATE TABLE `edit` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventregistration`
--

CREATE TABLE `eventregistration` (
  `clgid` varchar(20) NOT NULL,
  `college` varchar(40) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `events` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventregistration`
--

INSERT INTO `eventregistration` (`clgid`, `college`, `fname`, `email`, `mobile`, `gender`, `year`, `events`) VALUES
('315175710052', 'SRKR Engineering college,bhimavaram', 'GALLI ROHIK', 'galli', '9133787345', 'on', '1st Year', 'yes'),
('52', 'SRKR Engineering college,bhimavaram', 'kgdkfghs', 'ghkghlrgr', 'gbdkfbg', 'on', '1st Year', 'yes'),
('8547859612', 'SRKR Engineering college,bhimavaram', 'sandeep', 'dam@gm.com', '8596748596', 'on', '1st Year', 'yes'),
('85965458', 'SRKR Engineering college,bhimavaram', 'sandeep', 'dam@gm.com', '9685748596', 'on', '1st Year', 'yes'),
('956445852', 'SRKR Engineering college,bhimavaram', 'sandeep', 'danda@gmail.com', '8459654875', 'on', '1st Year', 'yes'),
('9565845789', 'SRKR Engineering college,bhimavaram', 'sandeep', 'dam@gm.com', '8569745896', 'on', '1st Year', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `gamedome`
--

CREATE TABLE `gamedome` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospitality`
--

CREATE TABLE `hospitality` (
  `clgid` varchar(20) NOT NULL,
  `clgname` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phno` varchar(10) NOT NULL,
  `db` int(2) NOT NULL,
  `mb` int(2) NOT NULL,
  `yb` int(2) NOT NULL,
  `gender` text NOT NULL,
  `days` int(1) NOT NULL,
  `dm` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `paid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitality`
--

INSERT INTO `hospitality` (`clgid`, `clgname`, `name`, `email`, `phno`, `db`, `mb`, `yb`, `gender`, `days`, `dm`, `year`, `paid`) VALUES
('25645856', '1', 'sandeep', 'san@gm.com', '8564759575', 23, 8, 1997, 'male', 3, '31 Jan', '2017', 'no'),
('45455', 'SRKR Engineering college', 'sandeep', 'san@gm.com', '9564857562', 23, 12, 1990, 'male', 2, '31 Jan', '2017', 'no'),
('4562136884', 'SRKR Engineering college', 'sandeep', 'san@gm.com', '8975489652', 23, 12, 1998, 'male', 2, '31 Jan', '2017', 'no'),
('456545454', 'C R Reddy Engineering college', 'sandeep', 'san@gm.com', '9575846852', 23, 12, 1998, 'male', 3, '31 Jan', '2017', 'no'),
('542136589', 'SRKR Engineering college', 'sandeep', 'dan@gm.com', '9865487596', 23, 2, 1995, 'male', 2, '31 Jan', '2017', 'no'),
('8564548', 'SRKR Engineering college', 'san', 'san@gm.com', '9548756521', 11, 1, 1999, 'male', 3, '31 Jan', '2017', 'no'),
('856454890', 'SRKR Engineering college', 'san', 'san@gm.com', '9548756521', 11, 1, 1999, 'male', 3, '31 Jan', '2017', 'no'),
('96545241', 'SRKR Engineering college', 'mah', 'dan@gm.com', '9586748596', 23, 12, 1998, 'male', 3, '31 Jan', '2017', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `onlinepaymenthospitality`
--

CREATE TABLE `onlinepaymenthospitality` (
  `clgid` varchar(20) NOT NULL,
  `phonepetxnid` varchar(30) NOT NULL,
  `mobileno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlinepaymenthospitality`
--

INSERT INTO `onlinepaymenthospitality` (`clgid`, `phonepetxnid`, `mobileno`) VALUES
('8564548', '', '8596741245');

-- --------------------------------------------------------

--
-- Table structure for table `onlinepaymentworkshop`
--

CREATE TABLE `onlinepaymentworkshop` (
  `clgid` varchar(20) NOT NULL,
  `phonepetxnid` varchar(30) NOT NULL,
  `mobileno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlinepaymentworkshop`
--

INSERT INTO `onlinepaymentworkshop` (`clgid`, `phonepetxnid`, `mobileno`) VALUES
('314175710048', '', '8954759512'),
('554546846', '', '9854758965'),
('56456464', '', '9564581230'),
('8464824545', '', '8645758512');

-- --------------------------------------------------------

--
-- Table structure for table `papyrous`
--

CREATE TABLE `papyrous` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papyrous`
--

INSERT INTO `papyrous` (`clgid`) VALUES
('85965458');

-- --------------------------------------------------------

--
-- Table structure for table `techyuva`
--

CREATE TABLE `techyuva` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `techyuva`
--

INSERT INTO `techyuva` (`clgid`) VALUES
('52'),
('85965458');

-- --------------------------------------------------------

--
-- Table structure for table `theinquisitors`
--

CREATE TABLE `theinquisitors` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `typerush`
--

CREATE TABLE `typerush` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `virtualbounty`
--

CREATE TABLE `virtualbounty` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `webweaver`
--

CREATE TABLE `webweaver` (
  `clgid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `clgid` varchar(20) NOT NULL,
  `clgname` text NOT NULL,
  `cername` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phno` varchar(10) NOT NULL,
  `db` int(2) NOT NULL,
  `md` int(2) NOT NULL,
  `yb` int(2) NOT NULL,
  `gender` text NOT NULL,
  `accomodation` text NOT NULL,
  `paid` varchar(20) NOT NULL,
  `idissued` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`clgid`, `clgname`, `cername`, `name`, `email`, `phno`, `db`, `md`, `yb`, `gender`, `accomodation`, `paid`, `idissued`) VALUES
('1516454545', 'SRKR Engineering college', 'mahesh', 'masjs', 'dan@gm.com', '9875463215', 23, 5, 1997, 'male', 'yes', 'no', 'no'),
('314175710048', 'SRKR Engineering college', 'mahesh sandeep', 'mahesh', 'danda@gm.com', '8865457512', 12, 5, 1998, 'male', 'yes', 'yes', 'no'),
('45554553', 'SRKR Engineering college', 'mahesh sandeep', 'mahesh', 'dan@gm.com', '2147483647', 23, 5, 1997, 'male', 'yes', 'yes', 'yes'),
('5325894952', 'SRKR Engineering college', 'mah', 'mahesh', 'dan@gm.com', '9856742312', 23, 5, 1997, 'male', 'yes', 'yes', 'no'),
('545454', 'SRKR Engineering college', 'mah', 'mah', 'dan@gm.com', '8569745896', 23, 5, 1997, 'male', 'yes', 'yes', 'yes'),
('5465545', 'SRKR Engineering college', 'mahesh sandeep dandamudi', 'masjajsa', 'dan@gm.com', '8956124587', 23, 5, 1997, 'male', 'yes', 'no', 'no'),
('554546846', 'SRKR Engineering college', 'sandeep', 'sandeep', 'dan@gm.com', '8564789542', 12, 1, 1998, 'male', 'yes', 'no', 'no'),
('5564654567', 'SRKR Engineering college', 'mahesh', 'mahesh', 'dan@gm.com', '8645751285', 23, 5, 1997, 'male', 'yes', 'yes', 'no'),
('56456464', 'SRKR Engineering college', 'sandeep', 'mahesh', 'dan@gm.com', '8564585213', 23, 5, 1998, 'male', 'yes', 'yes', 'yes'),
('7586459523', 'SRKR Engineering college', 'mahesh', 'sandeep', 'danda@gm.com', '9897542361', 23, 5, 1997, 'male', 'yes', 'no', 'no'),
('8464824545', 'SRKR Engineering college', 'mahesh', 'mag', 'dan@gm.com', '895645751', 23, 5, 1997, 'male', 'yes', 'yes', 'no'),
('98977887878', 'srkr', 'mahesh', 'mahesh', 'dan@gm.com', '9878956423', 23, 5, 1997, 'male', 'yes', 'yes', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abhivyanjan`
--
ALTER TABLE `abhivyanjan`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `bafflefield`
--
ALTER TABLE `bafflefield`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `brainbuster`
--
ALTER TABLE `brainbuster`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `clashofcompeers`
--
ALTER TABLE `clashofcompeers`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `codestorm`
--
ALTER TABLE `codestorm`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `cricbet`
--
ALTER TABLE `cricbet`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `edit`
--
ALTER TABLE `edit`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `eventregistration`
--
ALTER TABLE `eventregistration`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `gamedome`
--
ALTER TABLE `gamedome`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `hospitality`
--
ALTER TABLE `hospitality`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `onlinepaymenthospitality`
--
ALTER TABLE `onlinepaymenthospitality`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `onlinepaymentworkshop`
--
ALTER TABLE `onlinepaymentworkshop`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `papyrous`
--
ALTER TABLE `papyrous`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `techyuva`
--
ALTER TABLE `techyuva`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `theinquisitors`
--
ALTER TABLE `theinquisitors`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `typerush`
--
ALTER TABLE `typerush`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `virtualbounty`
--
ALTER TABLE `virtualbounty`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `webweaver`
--
ALTER TABLE `webweaver`
  ADD PRIMARY KEY (`clgid`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`clgid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

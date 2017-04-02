-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 03:38 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rock_on`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemax_1`
--

CREATE TABLE `cinemax_1` (
  `no` varchar(5) NOT NULL,
  `seatstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinemax_1`
--

INSERT INTO `cinemax_1` (`no`, `seatstatus`) VALUES
('a1', 1),
('a10', 1),
('a2', 1),
('a3', 1),
('a4', 1),
('a5', 1),
('a6', 1),
('a7', 1),
('a8', 1),
('a9', 0),
('b1', 0),
('b10', 0),
('b2', 1),
('b3', 1),
('b4', 1),
('b5', 1),
('b6', 1),
('b7', 0),
('b8', 0),
('b9', 0),
('c1', 0),
('c10', 0),
('c2', 0),
('c3', 0),
('c4', 0),
('c5', 0),
('c6', 0),
('c7', 0),
('c8', 0),
('c9', 0),
('d1', 0),
('d10', 0),
('d2', 0),
('d3', 0),
('d4', 0),
('d5', 0),
('d6', 0),
('d7', 0),
('d8', 0),
('d9', 0),
('e1', 1),
('e10', 0),
('e2', 0),
('e3', 1),
('e4', 1),
('e5', 0),
('e6', 0),
('e7', 0),
('e8', 0),
('e9', 0),
('f1', 0),
('f10', 0),
('f2', 0),
('f3', 0),
('f4', 0),
('f5', 0),
('f6', 0),
('f7', 0),
('f8', 0),
('f9', 0),
('g1', 0),
('g10', 0),
('g2', 0),
('g3', 0),
('g4', 0),
('g5', 0),
('g6', 0),
('g7', 0),
('g8', 0),
('g9', 0),
('h1', 0),
('h10', 1),
('h2', 0),
('h3', 0),
('h4', 1),
('h5', 1),
('h6', 1),
('h7', 1),
('h8', 1),
('h9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cinemax_2`
--

CREATE TABLE `cinemax_2` (
  `no` varchar(5) NOT NULL,
  `seatstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinemax_2`
--

INSERT INTO `cinemax_2` (`no`, `seatstatus`) VALUES
('a1', 0),
('a10', 0),
('a2', 0),
('a3', 0),
('a4', 0),
('a5', 0),
('a6', 0),
('a7', 0),
('a8', 0),
('a9', 0),
('b1', 0),
('b10', 0),
('b2', 0),
('b3', 0),
('b4', 0),
('b5', 0),
('b6', 0),
('b7', 0),
('b8', 0),
('b9', 0),
('c1', 0),
('c10', 0),
('c2', 0),
('c3', 0),
('c4', 0),
('c5', 0),
('c6', 0),
('c7', 0),
('c8', 0),
('c9', 0),
('d1', 0),
('d10', 0),
('d2', 0),
('d3', 0),
('d4', 0),
('d5', 0),
('d6', 0),
('d7', 0),
('d8', 0),
('d9', 0),
('e1', 0),
('e10', 0),
('e2', 0),
('e3', 0),
('e4', 0),
('e5', 0),
('e6', 0),
('e7', 0),
('e8', 0),
('e9', 0),
('f1', 0),
('f10', 0),
('f2', 0),
('f3', 0),
('f4', 0),
('f5', 0),
('f6', 0),
('f7', 0),
('f8', 0),
('f9', 0),
('g1', 0),
('g10', 0),
('g2', 0),
('g3', 0),
('g4', 0),
('g5', 0),
('g6', 0),
('g7', 0),
('g8', 0),
('g9', 0),
('h1', 0),
('h10', 0),
('h2', 0),
('h3', 0),
('h4', 0),
('h5', 1),
('h6', 1),
('h7', 0),
('h8', 0),
('h9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cinemax_3`
--

CREATE TABLE `cinemax_3` (
  `no` varchar(5) NOT NULL,
  `seatstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinemax_3`
--

INSERT INTO `cinemax_3` (`no`, `seatstatus`) VALUES
('a1', 0),
('a10', 0),
('a2', 0),
('a3', 0),
('a4', 0),
('a5', 0),
('a6', 0),
('a7', 0),
('a8', 0),
('a9', 0),
('b1', 0),
('b10', 0),
('b2', 0),
('b3', 0),
('b4', 0),
('b5', 0),
('b6', 0),
('b7', 0),
('b8', 0),
('b9', 0),
('c1', 0),
('c10', 0),
('c2', 0),
('c3', 0),
('c4', 0),
('c5', 0),
('c6', 0),
('c7', 0),
('c8', 0),
('c9', 0),
('d1', 0),
('d10', 0),
('d2', 0),
('d3', 0),
('d4', 0),
('d5', 0),
('d6', 0),
('d7', 0),
('d8', 0),
('d9', 0),
('e1', 0),
('e10', 0),
('e2', 0),
('e3', 0),
('e4', 0),
('e5', 0),
('e6', 0),
('e7', 0),
('e8', 0),
('e9', 0),
('f1', 0),
('f10', 0),
('f2', 0),
('f3', 0),
('f4', 0),
('f5', 0),
('f6', 0),
('f7', 0),
('f8', 0),
('f9', 0),
('g1', 0),
('g10', 1),
('g2', 0),
('g3', 0),
('g4', 0),
('g5', 0),
('g6', 0),
('g7', 0),
('g8', 0),
('g9', 1),
('h1', 0),
('h10', 0),
('h2', 0),
('h3', 0),
('h4', 0),
('h5', 0),
('h6', 0),
('h7', 0),
('h8', 1),
('h9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pvr_1`
--

CREATE TABLE `pvr_1` (
  `no` varchar(5) NOT NULL,
  `seatstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pvr_1`
--

INSERT INTO `pvr_1` (`no`, `seatstatus`) VALUES
('a1', 1),
('a10', 0),
('a2', 1),
('a3', 1),
('a4', 0),
('a5', 0),
('a6', 0),
('a7', 0),
('a8', 0),
('a9', 0),
('b1', 0),
('b10', 0),
('b2', 0),
('b3', 0),
('b4', 0),
('b5', 0),
('b6', 0),
('b7', 0),
('b8', 0),
('b9', 0),
('c1', 0),
('c10', 0),
('c2', 0),
('c3', 0),
('c4', 0),
('c5', 0),
('c6', 0),
('c7', 0),
('c8', 0),
('c9', 0),
('d1', 0),
('d10', 0),
('d2', 0),
('d3', 0),
('d4', 0),
('d5', 0),
('d6', 0),
('d7', 0),
('d8', 0),
('d9', 0),
('e1', 0),
('e10', 0),
('e2', 0),
('e3', 0),
('e4', 0),
('e5', 0),
('e6', 0),
('e7', 0),
('e8', 0),
('e9', 0),
('f1', 0),
('f10', 0),
('f2', 0),
('f3', 0),
('f4', 0),
('f5', 0),
('f6', 0),
('f7', 0),
('f8', 0),
('f9', 0),
('g1', 0),
('g10', 0),
('g2', 0),
('g3', 0),
('g4', 0),
('g5', 0),
('g6', 0),
('g7', 0),
('g8', 0),
('g9', 0),
('h1', 0),
('h10', 0),
('h2', 0),
('h3', 0),
('h4', 0),
('h5', 0),
('h6', 0),
('h7', 0),
('h8', 0),
('h9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pvr_2`
--

CREATE TABLE `pvr_2` (
  `no` varchar(5) NOT NULL,
  `seatstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pvr_2`
--

INSERT INTO `pvr_2` (`no`, `seatstatus`) VALUES
('a1', 0),
('a10', 1),
('a2', 0),
('a3', 0),
('a4', 0),
('a5', 0),
('a6', 0),
('a7', 1),
('a8', 1),
('a9', 1),
('b1', 0),
('b10', 0),
('b2', 0),
('b3', 0),
('b4', 0),
('b5', 0),
('b6', 0),
('b7', 0),
('b8', 0),
('b9', 0),
('c1', 0),
('c10', 0),
('c2', 0),
('c3', 0),
('c4', 0),
('c5', 0),
('c6', 0),
('c7', 0),
('c8', 0),
('c9', 0),
('d1', 0),
('d10', 0),
('d2', 0),
('d3', 0),
('d4', 0),
('d5', 0),
('d6', 0),
('d7', 0),
('d8', 0),
('d9', 0),
('e1', 0),
('e10', 0),
('e2', 0),
('e3', 0),
('e4', 0),
('e5', 0),
('e6', 0),
('e7', 0),
('e8', 0),
('e9', 0),
('f1', 0),
('f10', 0),
('f2', 0),
('f3', 0),
('f4', 0),
('f5', 0),
('f6', 0),
('f7', 0),
('f8', 0),
('f9', 0),
('g1', 0),
('g10', 0),
('g2', 0),
('g3', 0),
('g4', 0),
('g5', 0),
('g6', 0),
('g7', 0),
('g8', 0),
('g9', 0),
('h1', 0),
('h10', 0),
('h2', 0),
('h3', 0),
('h4', 0),
('h5', 0),
('h6', 0),
('h7', 0),
('h8', 0),
('h9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pvr_3`
--

CREATE TABLE `pvr_3` (
  `no` varchar(5) NOT NULL,
  `seatstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pvr_3`
--

INSERT INTO `pvr_3` (`no`, `seatstatus`) VALUES
('a1', 0),
('a10', 0),
('a2', 0),
('a3', 0),
('a4', 0),
('a5', 0),
('a6', 0),
('a7', 0),
('a8', 0),
('a9', 0),
('b1', 0),
('b10', 0),
('b2', 0),
('b3', 0),
('b4', 0),
('b5', 0),
('b6', 0),
('b7', 0),
('b8', 0),
('b9', 0),
('c1', 0),
('c10', 0),
('c2', 0),
('c3', 0),
('c4', 0),
('c5', 0),
('c6', 0),
('c7', 0),
('c8', 0),
('c9', 0),
('d1', 0),
('d10', 0),
('d2', 0),
('d3', 0),
('d4', 0),
('d5', 0),
('d6', 0),
('d7', 0),
('d8', 0),
('d9', 0),
('e1', 0),
('e10', 0),
('e2', 0),
('e3', 0),
('e4', 0),
('e5', 0),
('e6', 0),
('e7', 0),
('e8', 0),
('e9', 0),
('f1', 0),
('f10', 0),
('f2', 0),
('f3', 0),
('f4', 0),
('f5', 0),
('f6', 0),
('f7', 0),
('f8', 0),
('f9', 0),
('g1', 0),
('g10', 0),
('g2', 0),
('g3', 0),
('g4', 0),
('g5', 0),
('g6', 0),
('g7', 0),
('g8', 0),
('g9', 0),
('h1', 0),
('h10', 0),
('h2', 0),
('h3', 0),
('h4', 0),
('h5', 0),
('h6', 0),
('h7', 0),
('h8', 0),
('h9', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinemax_1`
--
ALTER TABLE `cinemax_1`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `cinemax_2`
--
ALTER TABLE `cinemax_2`
  ADD UNIQUE KEY `id` (`no`);

--
-- Indexes for table `cinemax_3`
--
ALTER TABLE `cinemax_3`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `pvr_1`
--
ALTER TABLE `pvr_1`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `pvr_2`
--
ALTER TABLE `pvr_2`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `pvr_3`
--
ALTER TABLE `pvr_3`
  ADD UNIQUE KEY `no` (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

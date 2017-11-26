-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 05:30 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `polis`
--

CREATE TABLE `polis` (
  `id` int(30) NOT NULL,
  `jenis` int(3) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `NIK` int(18) NOT NULL,
  `KTP` varchar(255) NOT NULL,
  `slip_gaji` varchar(255) NOT NULL,
  `NOREK` int(20) NOT NULL,
  `rek_tabungan` varchar(255) NOT NULL,
  `rek_listrik` varchar(255) NOT NULL,
  `uname` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `dateofbirth` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `province` varchar(30) NOT NULL,
  `level` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `firstname`, `lastname`, `dateofbirth`, `address`, `province`, `level`) VALUES
('admin', 'admin', 'efendyfarid@gmail.com', 'farid', 'efendy', '1996-11-28', 'samarinda', 'kaltim', 2);

-- --------------------------------------------------------

--
-- Table structure for table `verif`
--

CREATE TABLE `verif` (
  `NIK` int(40) NOT NULL,
  `NOREK` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verif`
--

INSERT INTO `verif` (`NIK`, `NOREK`) VALUES
(123456, 123456),
(1234567890, 1234567890),
(987654321, 987654321),
(1234567890, 1234567890),
(987654321, 987654321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `polis`
--
ALTER TABLE `polis`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `uname` (`uname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `polis`
--
ALTER TABLE `polis`
  ADD CONSTRAINT `polis_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

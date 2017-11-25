-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 07:38 AM
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
  `id` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `data` varchar(40) NOT NULL,
  `uname` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polis`
--

INSERT INTO `polis` (`id`, `jenis`, `status`, `data`, `uname`) VALUES
(1, 2, 1, 'qweqweqwe', 'faridefen'),
(2, 2, 1, '123123123qqweqwe', 'faridefen');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
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

INSERT INTO `user` (`username`, `password`, `firstname`, `lastname`, `dateofbirth`, `address`, `province`, `level`) VALUES
('faridefen', 'faridefen', 'farid', 'efendy', '1996-12-28', 'di kantin fkti unmul samarinda', 'kaltim', 1),
('gondrong', 'gondrong', 'gondrong', 'gondrong', '2017-11-23', 'gondrong', 'kaltim', 1);

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

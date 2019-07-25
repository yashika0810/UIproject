-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 10:22 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('yashika', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(30) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `emailaddress` varchar(30) NOT NULL,
  `address1` varchar(80) NOT NULL,
  `address2` varchar(80) NOT NULL,
  `postcode` int(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `countrycode` varchar(80) NOT NULL,
  `dob` date NOT NULL,
  `dateofanniversary` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `phoneno`, `emailaddress`, `address1`, `address2`, `postcode`, `city`, `state`, `countrycode`, `dob`, `dateofanniversary`) VALUES
('', 0, '', '', '', 0, '', '', '', '0000-00-00', '0000-00-00'),
('', 0, 'jj', '', '', 0, '', 'Andhra Pradesh', '44', '2018-07-11', '0000-00-00'),
('preeti', 2147483647, 'preeti@123', 'sector 15', 'rohini', 321001, 'jaipur', 'Rajasthan', '91', '2018-07-12', '2018-06-04'),
('Priyanka', 2147483647, 'priyanka@122', 'rohini', 'sector 15', 321001, 'delhi', 'Maharashtra', '91', '2018-07-13', '2018-06-13'),
('ritu soni', 2147483647, 'ritu2@gmail.com', 'B 37', 'Jawahar nagar', 22222, 'jaipur', 'Rajasthan', '91', '1997-07-14', '0000-00-00'),
('yashika', 2147483647, 'yashika@123', 'rohini', 'sec 18', 22092, 'jaip', 'Andhra Pradesh', '44', '2018-07-10', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`firstname`, `lastname`, `username`, `password`, `confirmpassword`, `status`) VALUES
('', '', '', '', '', '1'),
('asas', 'asas', 'asaaA`ASAS', 'ASASAS', 'SASASA', '0'),
('', '', 'deepak@123', '1233', '', '0'),
('', '', 'deepak@gmail.com', '123', '', '1'),
('', '', 'haguha@hahuja', 'gaygay', '', '0'),
('jhbj', '', 'juhjh', 'jhjh', 'kjnk', '0'),
('yashika', 'khatri', 'khatri.1117@gmail.com', 'yashika1234', 'yashika1234', '0'),
('Priyaa', 'Chopra', 'khatri.11@gmail.com', 'priya', 'priya', '0'),
('', '', 'manish@gmail.com', '123', '', '1'),
('', '', 'priyanka123@gmail,com', '1234', '', '1'),
('', '', 'priyanka@123', '1234', '', '0'),
('', '', 'ritu23@gmail.com', 'ritu', '', '1'),
('', '', 'ritu2@gmail.com', 'ritu', '', '0'),
('', '', 'rohit12@gmail.com', 'rohit', '', '1'),
('', '', 'sanjay2112197jain@gmail.com', '123', '', '0'),
('', '', 'yashi', 'yashika', '', '1'),
('', '', 'yashika48@gmail.com', '@123', '', ''),
('', '', 'yashika@123', 'yashika', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`emailaddress`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

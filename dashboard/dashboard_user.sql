-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 16, 2023 at 02:06 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `dashboard_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(80) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `usertype` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `gender`, `usertype`) VALUES
(1, 'Olumide', 'Abikoye', 'olumide@aledoy.com', 'lumi123', 'olumide', 'Male', 'admin'),
(2, 'Olumide', 'Abikoye', 'olumide2@aledoy.com', 'bayo123', 'olumide', 'Female', 'user'),
(3, 'Bayo', 'Atere', 'bayo@atere.com', 'bayo231', 'bayo', 'Male', 'user'),
(5, 'Bisi', 'Adelabu', 'bisi@aledoy.com', 'bisi101', 'olumide', 'Female', 'user'),
(6, 'Sesan', 'Adecaleb', 'ses@aledoy.com', 'sesanbado', 'olumide', 'Female', 'user'),
(7, 'OLUMIDE', 'ABIKOYE', 'luuiabbbdjuh@yahooo.com', 'lumigood', 'Aledoy101!', 'Male', 'user'),
(8, 'Ifeanyi', 'Amadi', 'ifinity@yahoo.com', 'ify27', 'Aledoy101!', 'Male', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

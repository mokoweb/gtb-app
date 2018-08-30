-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 08:48 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtb-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `innovative_section`
--

CREATE TABLE `innovative_section` (
  `innovative_section_id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `body` text NOT NULL,
  `image_id_ext` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `innovative_section`
--

INSERT INTO `innovative_section` (`innovative_section_id`, `heading`, `body`, `image_id_ext`) VALUES
(3, '', 'Guaranty Trust Bank harnessing technology to drive inclusivity.', '4'),
(4, '', 'Plot your way to a Divine Culinary Experience..', '5'),
(5, '', 'Plot your way to a Divine Culinary Experience...', '4'),
(6, '', 'Guaranty Trust Bank harnessing technology to drive inclusivity....', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `innovative_section`
--
ALTER TABLE `innovative_section`
  ADD PRIMARY KEY (`innovative_section_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `innovative_section`
--
ALTER TABLE `innovative_section`
  MODIFY `innovative_section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

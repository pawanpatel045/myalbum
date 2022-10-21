-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 11:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myalbum`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(10) NOT NULL,
  `albumimage` varchar(30) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `isPremium` int(10) NOT NULL,
  `isPublish` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `albumimage`, `Title`, `Description`, `isPremium`, `isPublish`) VALUES
(20, 'tajmahal.jpg', 'Monuments', 'A building, structure, or site that is of historical importance or interest.', 0, 1),
(21, 'efse.jpg', 'Temple', 'a building devoted to the worship of a god', 0, 1),
(22, 'dsf.jpg', 'Stadium', 'Athletic games and other exhibitions with large seating capacity for spectators', 0, 0),
(23, 'ert.jpg', 'Car', 'Latest Car Models 2022', 1, 1),
(24, 'ewfef.jpg', 'Rockets', 'Rockets launching photos', 1, 1),
(25, 'edwed.jpg', 'Robots', 'Robots collection', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `albumid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `name`, `albumid`) VALUES
(35, 'willian-justen.jpg', 20),
(36, 'monuments1.jpg', 20),
(37, 'simonh.jpg', 20),
(38, 'john-baka.jpg', 20),
(41, 'tajmhl.jpg', 20),
(42, 'q.jpg', 21),
(43, 'james-w.jpg', 21),
(44, 'sfs.jpg', 21),
(45, 'esresr.jpg', 22),
(46, 'serf.jpg', 22),
(47, 'gdrg.jpg', 22),
(48, 'teryeth.jpg', 23),
(49, 'drger.jpg', 23),
(50, 'eter.jpg', 23),
(51, 'resr.jpg', 24),
(52, 'ergerg.jpg', 24),
(53, 'rgse.jpg', 24),
(54, 'fdgfh.jpg', 25),
(55, 'rggr.jpg', 25),
(56, 'rtgrt.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `isPremium` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `password`, `isPremium`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 2),
(2, 'bishal', 'bishal@gmail.com', 'bishal123', 1),
(3, 'shiv', 'shiv@gmail.com', 'shiv123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albumid` (`albumid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`albumid`) REFERENCES `album` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 05:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
(20, 'p1.jpg', 'Footballer', 'These are the best footballer in the world.', 0, 1),
(21, 'i4.jpg', 'Nature', 'These natural beauties found in Nepal.', 0, 1),
(23, 'bk5.jpg', 'Books', 'These books are the best seller books in the market.', 1, 1),
(26, 'ca1.jpg', 'Superheroes', 'Best superheroes in the universe.', 1, 0);

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
(57, 'p1.jpg', 20),
(58, 'p2jpg.jpg', 20),
(59, 'p3.jpg', 20),
(60, 'p4.jpg', 20),
(61, 'i1.jpg', 21),
(62, 'i2.jpg', 21),
(63, 'i5.jpg', 21),
(64, 'i4.jpg', 21),
(65, 'bk2.jpg', 23),
(66, 'bk5.jpg', 23),
(67, 'bk4.jpg', 23),
(68, 'bk3.jpg', 23),
(73, 'sh1.jpg', 26),
(74, 'sp1.jpg', 26),
(75, 'marvel.jpg', 26),
(76, 'ca1.jpg', 26);

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
(2, 'pawan', 'pawan@gmail.com', 'pawan123', 1),
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

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

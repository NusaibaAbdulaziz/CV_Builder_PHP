-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 03:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersFirstName` text NOT NULL,
  `usersLastName` text NOT NULL,
  `usersEmail` text NOT NULL,
  `usersPassword` text NOT NULL,
  `usersPhone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersFirstName`, `usersLastName`, `usersEmail`, `usersPassword`, `usersPhone`) VALUES
(1, 'Omar', 'AL Busaidi', 'Omar@gmail.com', '$2y$10$zjqZapEKcLRCNSDGQtmEJ.dE8PY2Cd1KtusaZgB5yviyTSDebVbl6', 991283921),
(4, 'Noha', 'albusaid', 'Noha@gmail.com', '$2y$10$xO.EBMa1FHiZHfu82nn7mugnWozRVGVHlejvi5tLCavc6uU86K1Ti', 991283921),
(5, 'Hamood', 'AL Busaidi', 'Hamood@gmail.com', '$2y$10$6MzE0ofeQUsFaI9r94cM3O.gp6euCWh2dH5ZU.8dmT.IEhZLEuQFm', 91234556);

-- --------------------------------------------------------

--
-- Table structure for table `userscvdata`
--

CREATE TABLE `userscvdata` (
  `userId` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Major` varchar(255) NOT NULL,
  `Profile` text NOT NULL,
  `GeneralSkills` text NOT NULL,
  `MajorSkills` text NOT NULL,
  `Languages` text NOT NULL,
  `Achievements` text NOT NULL,
  `Experiences` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` text NOT NULL,
  `City` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userscvdata`
--

INSERT INTO `userscvdata` (`userId`, `FullName`, `Major`, `Profile`, `GeneralSkills`, `MajorSkills`, `Languages`, `Achievements`, `Experiences`, `Phone`, `Email`, `City`) VALUES
(1, '', '', '', '1,2', '4,5', '1', '4,6,8', '0,8,1,4', 0, '', ''),
(4, 'Omar Al Busaidi', 'IT', 'a human being who eats ice cream', 'Playing vidoe games,Driving a car', 'MS office,Scratch', 'Arabic,English', 'Got a car lisence', 'x years in a y company,z years in r company', 91159949, 'Omar@gmail.com', 'Barka'),
(5, 'Hamood al busaidi', 'Fishing', 'he likes to eat potato and have fishes', 'eating,sleeping,whatcing cartoon', 'fishing', 'Arabic,unknown language', 'own a fish,own a rabbit', 'rising a fish for a week', 91567891, 'Hamood@gmail.com', 'Braka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `userscvdata`
--
ALTER TABLE `userscvdata`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userscvdata`
--
ALTER TABLE `userscvdata`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userscvdata`
--
ALTER TABLE `userscvdata`
  ADD CONSTRAINT `userId_FK` FOREIGN KEY (`userId`) REFERENCES `users` (`usersId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

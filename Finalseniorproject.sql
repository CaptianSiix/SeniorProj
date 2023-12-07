-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 01:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seniorproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postsId` int(11) NOT NULL,
  `postsTitle` varchar(255) NOT NULL,
  `postsBody` longblob NOT NULL,
  `postsTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `usersID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postsId`, `postsTitle`, `postsBody`, `postsTime`, `usersID`) VALUES
(17, 'dfghfghd', 0x6466676864676668646667, '2023-11-07 17:24:24', 1),
(18, 'asdfr', 0x61736466617364, '2023-11-07 17:37:58', 1),
(19, 'Work', 0x576f726b, '2023-11-07 17:38:13', 1),
(20, 'This should be last', 0x506c6561736520776f726b, '2023-11-07 20:06:53', 1),
(21, 'I meant that this should be first', 0x5965732069742073686f756c64206265206669727374206e6f74206c617374, '2023-11-07 20:07:16', 1),
(27, 'a', 0x61, '2023-12-07 00:05:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ss`
--

CREATE TABLE `ss` (
  `ssID` int(11) NOT NULL,
  `OrderNumber` int(11) NOT NULL,
  `postsId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `postsId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `usersName` varchar(255) NOT NULL,
  `usersEmail` varchar(255) NOT NULL,
  `usersUid` varchar(255) NOT NULL,
  `usersPwd` varchar(255) NOT NULL,
  `usersAdmin` enum('Viewer','Admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersAdmin`) VALUES
(1, 'Sean ', 'ax@l.com', 'Siixa', '$2y$10$RAcK1nLM1RdW/nfWInAn2uU/hAdzPwZTHBxoDA3d7XsXkSvUQ6HHu', 'Admin'),
(2, 'Sean ', 'S@1l.com', 'Siixb', '$2y$10$nmKehJedq6Cg26Ibyp2U2.0C1JxjeCY5OynqcYZ0eF9.oFrzTfTFO', NULL),
(3, 'DROP TABLE test', 's@s.com', 's', '$2y$10$YCYa3Tgtl6JFC7CiSApcCumm6whZCvQk7zRk8qUyai22HcaxooBvG', NULL),
(4, 'ssssss', 's@ssssss.com', 'ssssssssssss', '$2y$10$2AtyWMhEHrWJtyjO/YY3QuwCx.AFvyw3LT/6qNbuNLueQeRDMHaLO', NULL),
(5, 'limit', 'l@l.com', 'L', '$2y$10$lI4zu3eoOZ4JyY2b.TRsJ.8hgRGHy4gFM9tzIR8T8wr4qEnoU6p0q', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postsId`),
  ADD KEY `usersID` (`usersID`) USING BTREE;

--
-- Indexes for table `ss`
--
ALTER TABLE `ss`
  ADD KEY `ss_ibfk_1` (`postsId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ss`
--
ALTER TABLE `ss`
  ADD CONSTRAINT `ss_ibfk_1` FOREIGN KEY (`postsId`) REFERENCES `posts` (`postsId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

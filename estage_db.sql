-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2022 at 05:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estage_db`
--
CREATE DATABASE IF NOT EXISTS `estage_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `estage_db`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `emailAccount` varchar(64) NOT NULL,
  `passwordAccount` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `nameAdmin` varchar(32) NOT NULL,
  `passwordAdmin` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `candidacies`
--

CREATE TABLE `candidacies` (
  `idCandidate` int(11) NOT NULL,
  `nameCandidate` varchar(64) NOT NULL,
  `emailCandidate` varchar(64) NOT NULL,
  `phoneCandidate` varchar(13) NOT NULL,
  `resume` varchar(64) NOT NULL,
  `coverletter` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `idCompany` int(11) NOT NULL,
  `nameCompany` varchar(128) NOT NULL,
  `aboutCompany` text NOT NULL,
  `logoCompany` varchar(64) NOT NULL,
  `addressCompany` varchar(100) NOT NULL,
  `emailCompany` varchar(64) NOT NULL,
  `phoneCompany` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `idPost` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL,
  `number` int(2) NOT NULL CHECK (`number` > 0),
  `companyPost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `toCandidate`
--

CREATE TABLE `toCandidate` (
  `post` int(11) NOT NULL,
  `candidate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`emailAccount`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`nameAdmin`);

--
-- Indexes for table `candidacies`
--
ALTER TABLE `candidacies`
  ADD PRIMARY KEY (`idCandidate`),
  ADD UNIQUE KEY `emailCandidate` (`emailCandidate`),
  ADD UNIQUE KEY `phoneCandidate` (`phoneCandidate`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`idCompany`),
  ADD UNIQUE KEY `emailCompany` (`emailCompany`),
  ADD UNIQUE KEY `phoneCompany` (`phoneCompany`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `FK_PostCompany` (`companyPost`);

--
-- Indexes for table `toCandidate`
--
ALTER TABLE `toCandidate`
  ADD PRIMARY KEY (`post`,`candidate`),
  ADD KEY `FK_Candidate` (`candidate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidacies`
--
ALTER TABLE `candidacies`
  MODIFY `idCandidate` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `idCompany` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `FK_EmailAccount` FOREIGN KEY (`emailAccount`) REFERENCES `companies` (`emailCompany`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_PostCompany` FOREIGN KEY (`companyPost`) REFERENCES `companies` (`idCompany`);

--
-- Constraints for table `toCandidate`
--
ALTER TABLE `toCandidate`
  ADD CONSTRAINT `FK_Candidate` FOREIGN KEY (`candidate`) REFERENCES `candidacies` (`idCandidate`),
  ADD CONSTRAINT `FK_Post` FOREIGN KEY (`post`) REFERENCES `posts` (`idPost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

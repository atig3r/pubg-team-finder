-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2018 at 04:51 PM
-- Server version: 10.0.35-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egaming_ir`
--

-- --------------------------------------------------------

--
-- Table structure for table `features_pubg_team`
--

CREATE TABLE `features_pubg_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `link` longtext NOT NULL,
  `mode` int(11) NOT NULL COMMENT '1: duo | 2: squad | 3: 2-man squad | 4: 3-man squad',
  `perspective` int(11) NOT NULL COMMENT '1: TPP | 2: FPP',
  `status` int(11) NOT NULL COMMENT '0: deactive | 1: active',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--
INSERT INTO `features_pubg_team` (
    `id`,
    `name`,
    `uname`,
    `link`,
    `mode`,
    `perspective`,
    `status`,
    `created_at`
) VALUES (
    NULL,
    'Alireza',
    'Behnamnik',
    'http://steamcommunity.com/id/egaming_ir',
    '1',
    '1',
    '1',
    '2018-05-07 09:22:31'
);
--
-- Indexes for table `features_pubg_team`
--
ALTER TABLE `features_pubg_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `features_pubg_team`
--
ALTER TABLE `features_pubg_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

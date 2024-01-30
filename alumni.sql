-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 05:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'TAPAS RANJAN', 'tapaspatrabls@gmail.com', 'hello'),
(5, 'srujan kumar', 'sru@gmail.com', 'hello'),
(6, 'ranjan', 'ranjan@google.com', 'hello my dear friends '),
(7, 'saiful', 'sai@facebook.com', 'hello world'),
(8, 'jeevan', 'jev@gmail.com', 'hello'),
(9, 'gfg', 'gfg@gmail.com', 'helo'),
(10, 'saiful tapadar', 'saiful@google.com', 'i want to join your company');

-- --------------------------------------------------------

--
-- Table structure for table `createfund`
--

CREATE TABLE `createfund` (
  `id` int(11) NOT NULL,
  `Fund_Title` varchar(100) NOT NULL,
  `Fund_Description` longtext NOT NULL,
  `Amount` varchar(11) NOT NULL,
  `Creator_Name` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `createfund`
--

INSERT INTO `createfund` (`id`, `Fund_Title`, `Fund_Description`, `Amount`, `Creator_Name`, `Date`) VALUES
(5, 'FRESHERS PARTY  :--', 'For building positive relations between juniors  and seniors, a successful freshers party we need some financial supports to dear alumni: ', '₹20000', 'tapas ranjan', '2023-12-12'),
(6, 'FRESHERS PARTY  :--', 'For building positive relations between juniors and seniors, a successful freshers party we need some financial supports to dear alumni:', '200000', 'ranjan', '2023-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `card_expirymonth` varchar(10) NOT NULL,
  `card_expiryyear` varchar(10) NOT NULL,
  `status` varchar(55) NOT NULL,
  `paymentid` varchar(200) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `email`, `mobile`, `amount`, `card_number`, `card_expirymonth`, `card_expiryyear`, `status`, `paymentid`, `added_date`) VALUES
(1, 'tapaspatra', 'tapaspatrabls@gmail.com', '0977686472', 122, '4242424242424242', '12', '29', 'succeeded', 'ch_3ORXnOECpsjojMDB1jmApPBd', '2023-12-26 11:23:33'),
(2, 'Indrajit', 'indra@gmail.com', '0977686472', 201, '4242424242424242', '04', '29', 'succeeded', 'ch_3ORXv8ECpsjojMDB1ua2xqrc', '2023-12-26 11:31:33'),
(3, 'ranjan patra', 'ranjan@gmail.com', '9776864723', 500, '4242424242424242', '11', '27', 'succeeded', 'ch_3OVu9SECpsjojMDB1K8VNlUG', '2024-01-07 12:04:19'),
(4, 'kumar verma', 'kumar@facebook.com', '8658922444', 789, '4242424242424242', '10', '30', 'succeeded', 'ch_3OWCDBECpsjojMDB1bc6zkMy', '2024-01-08 07:21:22'),
(5, 'tridip', 'tri@google.com', '7381235383', 700, '4242424242424242', '03', '29', 'succeeded', 'ch_3OWIWcECpsjojMDB1xxRF4Ph', '2024-01-08 14:05:50'),
(6, 'mantu kumar', 'mantu@google.com', '7574874547', 599, '4242424242424242', '10', '34', 'succeeded', 'ch_3OWjtSECpsjojMDB1U54EY8m', '2024-01-09 19:19:13'),
(7, 'Tapas ranjan patra', 'tapas@gmail.com', '9776864723', 799, '4242424242424242', '11', '33', 'succeeded', 'ch_3OWzBdECpsjojMDB0zOXdNFs', '2024-01-10 11:39:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createfund`
--
ALTER TABLE `createfund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `createfund`
--
ALTER TABLE `createfund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

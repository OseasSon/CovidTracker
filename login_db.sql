-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2023 at 02:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--
CREATE DATABASE IF NOT EXISTS `login_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login_db`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `user_type` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`, `user_type`) VALUES
(1, 'Oseas', 'mytest@gmail.com', '$2y$10$MeZfbkV3qC7zsclu8Xt7Bu3IbBRa1y5ELebRUMFI2Ghzb2JXWYhgS', 'user'),
(4, 'Mario', 'mytest+1@gmail.com', '$2y$10$EuVHhMq1pVYgSDO8stQZT.hEAQ.KQZnkx6Sv5pb6TP/UV3nx.YdtK', 'user'),
(7, 'Mario 2', 'mytest+2@gmail.com', '$2y$10$QAqtlMpsrawNM.hmTnp/Oe6plAAHkrh4GDhMGmpQnB7EAnzs81n8u', 'user'),
(40, 'Bob 3', 'mytest+4@gmail.com', '$2y$10$zvXCw.SoovmoOb0BVtLzNO3MyZGhS6388ZSyRYUdeYkgpdECHUNdC', 'user'),
(45, 'Bob 5', 'mytest+5@gmail.com', '$2y$10$m65moYG9TDU00dPxNt.pRuRSRPxxstx1BG19iqnAp.blpgY0g0aFK', 'user'),
(50, 'Bob 6', 'mytest+6@gmail.com', '$2y$10$hmarD2XEuC2qr4B5DdtZPOan5iaQ3V2GBA.V9.NsRCjSCkBe8Uem2', 'user'),
(70, 'Bob 7', 'bom@bob.com', '$2y$10$KZLk0uvzjGkAB8p/.OUbt.vnLTr4iS8ahZPXyXmkpY34Tf67lNROa', 'user'),
(72, 'Bob 8', 'bob@bob.com', '$2y$10$ftwoPo6CNb5sLsn.Yl81HuNEsyUa8YCDBcfIV1R2ctucmMhIXN18q', 'user'),
(80, 'Bob 8', 'bob12@bob.com', '$2y$10$iiLdo5CXpCSQHXX0OhtD6..O0du/hOoCpmC3rzeHSZXLGNIONSCK.', 'user'),
(81, 'Bob 8', 'bob52@bob.com', '$2y$10$t.JxsfaZwnWq8WL8nCX5G.7nYKCze6VAI.RCsszl5sCsx8i3R/8xu', 'user'),
(82, 'Test', 'test@test.com', '$2y$10$QNwrx7asw65.Ec0fACCCwuWMm09lUxND.vfa1qsNG49h7KohUXIay', 'admin'),
(83, 'Ana', 'ana@ana.com', '$2y$10$3OeQyLtTAxgQYJBqugh2weOQmdTCsc8A79kEcUoIO1LqQlQQctvji', 'user'),
(84, 'Evan', 'evan+123@evan.io', '$2y$10$bmXwDNTVRb5KlrzOPph0e.2FVcO57kOg16s04BEs9y91Lbu9ymTtC', 'admin'),
(85, 'Link', 'link@link.io', '$2y$10$lurJ9Cx6FH/XYxvSd7mgquYaYTI7LlUWLgZr9mKA.bchjSWbAeA6O', 'user'),
(86, 'Jon', 'hdghjdf@djfg.com', '$2y$10$TWkTGH02MwzF.XBApJs.uOI/e89DFNDYRFNNzFeZVYH4ZhGCB7q02', 'user'),
(87, 'Mario', 'mario@mario.io', '$2y$10$Cr9pPi.YeGe2LxUuYvmwZua2FIdlTwuhs0cyllFpqx9D.YW7Elf9y', 'admin'),
(88, 'Yone', 'yone@yone.io', '$2y$10$xGffKRumy6j.Sxw27t54Uex7oTVh.k/UuVEXzkD/Ee1fYWIngxHQm', 'user'),
(89, 'Test432', 'test432@test.io', '$2y$10$IKQYEKHtdUV4So9OSueW9ugzjw.7a5JyWY.cc0ZbFIAZdsflRatYy', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

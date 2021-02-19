-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 10:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestformulier`
--

CREATE TABLE `bestformulier` (
  `Voornaam` varchar(50) NOT NULL,
  `Achternaam` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefoonnummer` int(12) NOT NULL,
  `Straatnaam` varchar(50) NOT NULL,
  `Huisnummer` int(4) NOT NULL,
  `Postcode` varchar(6) NOT NULL,
  `Plaats` varchar(50) NOT NULL,
  `Land` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `prijs` int(11) NOT NULL,
  `selectedtickets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bestformulier`
--

INSERT INTO `bestformulier` (`Voornaam`, `Achternaam`, `Email`, `Telefoonnummer`, `Straatnaam`, `Huisnummer`, `Postcode`, `Plaats`, `Land`, `id`, `prijs`, `selectedtickets`) VALUES
('dddddddd', 'dddddddddd', 'dddddddddd@gmail.com', 2147483647, 'dddddddddddddd', 44, '4444dd', 'dddddddddddd', 'Nederland', 7, 16, 4),
('da', 'dada', 'dada@gmail.com', 44444444, 'dadada', 44, 'dada44', 'dadada', 'Nederland', 8, 0, 2),
('dadada', 'dada', 'dada@gmail.com', 2147483647, 'dadaad', 44, 'dddd44', 'dadada', 'Nederland', 9, 0, 2),
('dadada', 'dada', 'dada@gmail.com', 2147483647, 'dadaad', 44, 'dddd44', 'dadada', 'Nederland', 10, 0, 2),
('dadad', 'dada', 'dad@gmail.com', 2147483647, 'dadada', 44, 'dada44', 'dadad', 'Nederland', 11, 0, 2),
('dadadad', 'dada', 'dadaad@gmail.com', 543534534, 'dadadaad', 44, 'dada66', 'dadadaad', 'Nederland', 12, 1320, 30),
('dada', 'dada', 'dada@gmail.com', 534534535, 'dadad', 44, 'dada44', 'dada', 'Duitsland', 13, 176, 4),
('Maarten', 'Bos', 'lol@gmail.com', 615302473, 'Ooievaarsbek', 52, '3621TG', 'Breukelen', 'Nederland', 14, 8, 2),
('Maarten', 'dada', 'daad@gmail.com', 2147483647, 'dadada', 44, 'dddd44', 'dadada', 'Nederland', 15, 4, 1),
('dada', 'dadad', 'ada@gmail.com', 554252, 'dada', 44, 'dadd44', 'ada', 'Nederland', 16, 0, 1),
('dada', 'daad', 'daad@gmail.com', 51525252, 'dadadada', 55, 'dada66', 'dadada', 'Duitsland', 17, 44, 1),
('dada', 'dada', 'dada@gmail.com', 633435345, 'sdaadad', 66, 'adad66', 'adaad', 'Nederland', 18, 0, 0),
('dada', 'dada', 'dada@gmail.com', 4324324, 'dada', 444, 'dadada', 'dadada', 'Nederland', 19, 88, 2),
('dada', 'dad', 'dad@gmail.com', 2147483647, 'dadad', 3333, 'dadad5', 'dadad', 'Nederland', 20, 18, 5),
('dada', 'dadad', 'ada@gmail.com', 43243234, 'dadada', 656, 'dada44', 'dada', 'Nederland', 21, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `eventhubdetail`
--

CREATE TABLE `eventhubdetail` (
  `id` int(11) NOT NULL,
  `eventnaam` varchar(50) NOT NULL,
  `begindatum` datetime NOT NULL,
  `tickets` varchar(50) NOT NULL,
  `beschrijving` varchar(350) NOT NULL,
  `prijs` double NOT NULL,
  `imgevent` varchar(100) DEFAULT NULL,
  `presentator` varchar(50) NOT NULL,
  `totaltickets` int(10) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `einddatum` datetime NOT NULL,
  `naam` varchar(50) NOT NULL,
  `straat` varchar(50) NOT NULL,
  `huisnummer en tvg` varchar(10) NOT NULL,
  `postcode` varchar(8) NOT NULL,
  `plaats` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventhubdetail`
--

INSERT INTO `eventhubdetail` (`id`, `eventnaam`, `begindatum`, `tickets`, `beschrijving`, `prijs`, `imgevent`, `presentator`, `totaltickets`, `creator`, `einddatum`, `naam`, `straat`, `huisnummer en tvg`, `postcode`, `plaats`) VALUES
(39, 'test111', '2021-02-16 13:07:00', '0', 'test1111', 10, 'media/img/ark.jpg', 'test1', 44, 'SalamanderKip', '0000-00-00 00:00:00', '', '', '', '', ''),
(43, 'Rainbow Six Siege', '2021-02-26 23:27:00', '1', 'Dit is een rainbow event 5 tegen 5 je bent verplicht om moss te gebruiken en de rainbow anti cheat.', 0.11, 'media/img/test2.jpg', 'SalamanderKipp', 44, 'SalamanderKip', '0000-00-00 00:00:00', '', '', '', '', ''),
(44, 'lol', '2021-03-04 10:02:00', '7', 'dadaad', 44, 'media/img/test2.jpg', 'fadada', 44, 'SalamanderKip', '2021-02-26 10:05:00', '', '', '', '', ''),
(45, 'corona', '2021-03-04 11:38:00', '1', 'corona', 4, 'media/img/unknown.png', 'corona', 40, 'SalamanderKip', '2021-03-12 11:39:00', 'grafische ', 'Vondellaan', '179', '3521GH', 'Utrecht'),
(46, 'test', '2021-03-05 18:35:00', '93', 'test', 3.5, 'media/img/test1.jpg', 'Maarten', 100, 'SalamanderKip', '0000-00-00 00:00:00', 'huis', 'Ooievaarsbek', '52', '3621TG', 'Breukelen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(100) NOT NULL,
  `registration` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `registration`, `user`) VALUES
(5, 'Maarten', 'Bos', 'lol@gmail.com', 'SalamanderKip', '$2y$08$IdbM.3Ik2O3CP9D957RJ7uFQZ4pFNWsvmhZYSnVQBqc5ZdNVPE2PG', '31-01-2021 17:54:18', 'admin'),
(10, 'bretss', 'lol', 'lol@gmail.com', 'brets', '$2y$08$mGKT3X2p4Nvrv.dTZZdVqeXDObVTS/wvqvfoZWfKEi2l8yyLzUcsO', '10-02-2021 11:50:28', 'member'),
(12, 'lol', 'lol', 'lol@gmail.com', 'lollol', '$2y$08$yly63201Mbo7RkWQ/K2bmOsVW5iAJvJxOXUPJPeSpER905MqAn2xS', '12-02-2021 10:04:57', 'member'),
(14, 'lol', 'lol', 'lol@gmail.com', 'lol800', '$2y$08$xVGm//v4EZZkrg62Csl1Heb/UgxgVw3ZNDicQmNQ1WOMFh.APl7Pe', '17-02-2021 16:28:06', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestformulier`
--
ALTER TABLE `bestformulier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventhubdetail`
--
ALTER TABLE `eventhubdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestformulier`
--
ALTER TABLE `bestformulier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `eventhubdetail`
--
ALTER TABLE `eventhubdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

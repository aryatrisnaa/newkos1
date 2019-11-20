-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 04:46 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnewkos`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(35) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `art_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nama`, `email`, `website`, `komentar`, `date`, `art_id`) VALUES
(1, 'nanda', 'email@email.com', 'email.com', 'mantap lurrr', '0000-00-00', 0),
(2, 'arya', 'aryatrisnand@gmail.com', 'mamantuh.com', 'naisss ghan!', '0000-00-00', 0),
(3, 'desta', 'dsvnkl@email.com', 'mama.com', 'wihh mantap', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `com_deluxe`
--

CREATE TABLE `com_deluxe` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `website` varchar(20) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_deluxe`
--

INSERT INTO `com_deluxe` (`id`, `nama`, `email`, `website`, `komentar`, `date`) VALUES
(0, 'arya', 'svs', 'aesef', 'fesdfsj', '0000-00-00'),
(0, 'arya', 'dsvnkls', 'djesfn', 'djlsned', '0000-00-00'),
(0, 'asva', 'sjcl', 'djalfc', 'jlnedjkls', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `com_stn`
--

CREATE TABLE `com_stn` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `website` varchar(20) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_stn`
--

INSERT INTO `com_stn` (`id`, `nama`, `email`, `website`, `komentar`, `date`) VALUES
(0, 'nama', 'email', 'web', 'yaa komen aja', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

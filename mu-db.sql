-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2020 at 04:59 AM
-- Server version: 10.3.23-MariaDB-1
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mu-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `id` varchar(500) NOT NULL,
  `name` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `version` varchar(60) NOT NULL,
  `opensource` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `authormail` longtext NOT NULL,
  `p_web` varchar(10) NOT NULL,
  `p_linux` varchar(10) NOT NULL,
  `p_windows` varchar(10) NOT NULL,
  `p_mac` varchar(10) NOT NULL,
  `p_android` varchar(10) NOT NULL,
  `p_ios` varchar(10) NOT NULL,
  `urlcode` longtext NOT NULL,
  `urlapp` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `title` longtext NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`title`, `text`) VALUES
('This is notification for test.', 'text text text text text text text text text text text text text text text text text text text <br>\r\ntext text text text text text text text \r\ntext text text text text text \r\ntext text text text text text text ');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` varchar(500) NOT NULL,
  `tag` varchar(500) NOT NULL,
  `url` longtext NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE `save` (
  `id` varchar(500) NOT NULL,
  `id_sim` varchar(500) NOT NULL,
  `id_link` varchar(500) NOT NULL,
  `id_app` varchar(500) NOT NULL,
  `username` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `save`
--

INSERT INTO `save` (`id`, `id_sim`, `id_link`, `id_app`, `username`, `password`) VALUES
('0', '0', '0', '0', 'a66e62b1cf26241e36a247e7d3ab1fb8', '07aaf2bbbb645ba42aa72147187909d3');

-- --------------------------------------------------------

--
-- Table structure for table `sim`
--

CREATE TABLE `sim` (
  `id` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `number` varchar(500) NOT NULL,
  `comment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

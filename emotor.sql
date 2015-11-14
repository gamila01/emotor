-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2015 at 01:45 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emotor`
--
CREATE DATABASE IF NOT EXISTS `emotor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `emotor`;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `code` text NOT NULL,
  `make` text NOT NULL,
  `model` text NOT NULL,
  `model_no` text NOT NULL,
  `year` text NOT NULL,
  `location` text NOT NULL,
  `price` text NOT NULL,
  `telephone_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`code`, `make`, `model`, `model_no`, `year`, `location`, `price`, `telephone_no`) VALUES
('test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comments` text NOT NULL,
  `user_name` text NOT NULL,
  `e_mail_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments`, `user_name`, `e_mail_address`) VALUES
('test1', 'test1', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address` text NOT NULL,
  `country` text NOT NULL,
  `telephone_number` text NOT NULL,
  `e_mail_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`, `first_name`, `last_name`, `address`, `country`, `telephone_number`, `e_mail_address`) VALUES
('test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2016 at 03:51 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `mobilenumber` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `yearpass` int(5) NOT NULL,
  `university` varchar(100) NOT NULL,
  `physicalstatus` varchar(1) NOT NULL,
  `pasword` varchar(30) NOT NULL,
  `acceptterm` varchar(1) NOT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `mothername` varchar(100) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='create table for bootstrap project ' AUTO_INCREMENT=15 ;




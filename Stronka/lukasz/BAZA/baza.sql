-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Gru 2014, 23:47
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bikes`
--

CREATE TABLE IF NOT EXISTS `bikes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `data_add` date NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `bikes`
--

INSERT INTO `bikes` (`id`, `name`, `model`, `color`, `data_add`, `type`) VALUES
(1, 'oo', 'tr', 'rew', '2014-12-07', 're');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rents`
--

CREATE TABLE IF NOT EXISTS `rents` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `id_bike` int(10) NOT NULL,
  `start_date` datetime NOT NULL,
  `finish_date` datetime NOT NULL,
  `cost` int(10) NOT NULL,
  `active` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `email`, `last_login`, `created`) VALUES
(1, 'admin', 'ee', 'admin', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'admin1', '', '$2a$10$rKHMNaVIPt1xQ2f9GLRtTe/cxslRxCWcMs/jlBkEE9NXuRtq05q.y', '', '0000-00-00 00:00:00', '2014-12-06 11:39:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

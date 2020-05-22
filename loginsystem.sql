-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2020 at 12:43 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'lorddsauron5', 'lordSauron@gmail.com', '$2y$10$6lyUF5JIAKkNb3fJf9Rplu9qb4dhkUd4ZDexh9NjjgMsqKMKIhljS'),
(2, 'test1', 'test1@gmail.com', '$2y$10$c/OMVLJOtaaE.Ufgszfj9ul7ie2xJaYKnwr9j0txKTOz9/.q6T9Pu'),
(3, 'test2', 'test2@gmail.com', '$2y$10$XFXTLQqb/4sYaFRF6/ZDDey0v7AzgeCmkV66SE1TklreH/UGwjAEG'),
(4, 'test3', 'test3@gmail.com', '$2y$10$ht.kcNF/uoIjRnr5FMmROOozVlK7qRyJsFPw26uja7TUoWqPDVT.y'),
(5, 'tyron', 'test1@gmail.com', '$2y$10$CUjmsiFpyb9ec.AlErWH9.SvbnjV2Oj2GUOCPp3iG9C.8Yph7Hobu'),
(6, 'tracey', 'tracey@gmail.com', '$2y$10$hUvdLr/WgsDbe6Syxljomu1AeHCidTY/.Qq1GX2klAXtlZtLXBkwa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

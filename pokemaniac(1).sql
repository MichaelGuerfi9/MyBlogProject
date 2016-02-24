-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 24 Février 2016 à 10:44
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pokemaniac`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `art_title` tinytext NOT NULL,
  `art_content` longtext NOT NULL,
  `art_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `art_use_id` int(11) NOT NULL,
  PRIMARY KEY (`art_id`),
  KEY `id` (`art_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`art_id`, `art_title`, `art_content`, `art_date`, `art_use_id`) VALUES
(1, 'Ouverture du site', 'Bonjour et Bienvenue sur le site de PokéManiac.', '2016-02-08 16:52:13', 3),
(2, 'Test', 'Test', '2016-02-08 16:53:46', 2);

-- --------------------------------------------------------

--
-- Structure de la table `commentary`
--

CREATE TABLE IF NOT EXISTS `commentary` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_content` text NOT NULL,
  `com_use_id` int(11) NOT NULL,
  `com_art_id` int(11) NOT NULL,
  PRIMARY KEY (`com_id`),
  KEY `id` (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commentary`
--

INSERT INTO `commentary` (`com_id`, `com_content`, `com_use_id`, `com_art_id`) VALUES
(1, 'First', 2, 1),
(2, 'Second', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_url` varchar(255) NOT NULL,
  `pic_art_id` int(11) NOT NULL,
  PRIMARY KEY (`pic_id`),
  KEY `id` (`pic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_designation` varchar(255) NOT NULL,
  PRIMARY KEY (`rol_id`),
  KEY `id` (`rol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`rol_id`, `rol_designation`) VALUES
(1, 'User'),
(2, 'Blogger'),
(3, 'SuperAdmin');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `use_id` int(11) NOT NULL AUTO_INCREMENT,
  `use_login` varchar(255) NOT NULL,
  `use_password` varchar(255) NOT NULL,
  `use_email` varchar(255) NOT NULL,
  `use_rol_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`use_id`),
  KEY `id` (`use_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`use_id`, `use_login`, `use_password`, `use_email`, `use_rol_id`) VALUES
(1, 'Jean-Guy', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'jeanguy@gmail.com', 1),
(2, 'Darky', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'darky99@hotmail.fr', 1),
(3, 'Roger11', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'roger11@hotmail.fr', 2),
(4, 'Gladuis91', '209dcec5dd77ecfe2d66247ff1d66db31063b1bf', 'glad91@gmail.com', 2),
(5, 'Bernard', '61ddf0cbcfa30e54c3bcd765bd4390140b1a64f1', 'bernard.lemaitre@yahoo.com', 1),
(6, 'GodArceus', '153d4e08d617daec5ae3410758aaa3e2213fe279', 'godarceus@outlook.fr', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

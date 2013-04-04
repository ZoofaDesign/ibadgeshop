-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 05 apr 2013 om 00:29
-- Serverversie: 5.5.27
-- PHP-versie: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `ibadge`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `klant_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(36) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `groepsnaam` varchar(80) NOT NULL DEFAULT 'null',
  `straat` varchar(50) NOT NULL,
  `nr` varchar(20) NOT NULL,
  `bus` varchar(5) NOT NULL DEFAULT 'null',
  `postcode` int(8) NOT NULL,
  `gemeente` varchar(20) NOT NULL,
  `land` varchar(5) NOT NULL,
  `telefoon` varchar(20) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `btw_nr` varchar(20) NOT NULL DEFAULT 'null',
  PRIMARY KEY (`klant_id`),
  UNIQUE KEY `e-mail` (`e-mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Gegevens worden uitgevoerd voor tabel `customers`
--

INSERT INTO `customers` (`klant_id`, `user_id`, `naam`, `groepsnaam`, `straat`, `nr`, `bus`, `postcode`, `gemeente`, `land`, `telefoon`, `e-mail`, `btw_nr`) VALUES
(1, '513b737c-8540-4f22-8d73-5620766e9db1', 'Voornaam Naam', 'Chiro A', 'Kerkstraat', '25', 'null', 9000, '9000', 'be', '0472730771', 'yorick@horrie.be', 'null'),
(22, '', 'sdsd', 'qsd', 'sdqd', '25', '4', 9000, '', '', '', '', '0'),
(23, '', 'Yorick Horrie', '', 'Vinkenlaan ', '35', '', 9000, '', 'BE', '0', 'test@example.com', ''),
(24, '', 'Yorick Horrie', '', 'Vinkenlaan ', '35', '', 9000, '', 'BE', '0', 'test@examdple.com', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `designs`
--

CREATE TABLE IF NOT EXISTS `designs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `url` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT '1',
  `price` float(11,0) NOT NULL DEFAULT '0',
  `format` varchar(50) NOT NULL,
  `sizes` varchar(50) NOT NULL,
  `aantal` int(11) NOT NULL DEFAULT '30',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `finished` datetime NOT NULL,
  `customer_id` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'order',
  `code` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Gegevens worden uitgevoerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `status`, `price`, `format`, `sizes`, `aantal`, `created`, `modified`, `finished`, `customer_id`, `type`, `code`) VALUES
(1, 1, 5225, 'Rechthoekig', '25x60', 0, '2013-03-10 19:14:08', '2013-03-10 19:14:08', '2013-03-10 19:13:00', '1', 'order', ''),
(38, 1, 350, 'rond', '5x10', 50, '2013-04-05 00:10:10', '2013-04-05 00:10:10', '0000-00-00 00:00:00', '22', 'order', ''),
(39, 1, 350, 'rond', '5x10', 60, '2013-04-05 00:22:34', '2013-04-05 00:22:34', '0000-00-00 00:00:00', '23', 'order', ''),
(40, 1, 350, 'rond', '5x10', 60, '2013-04-05 00:24:05', '2013-04-05 00:24:05', '0000-00-00 00:00:00', '24', 'order', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(36) NOT NULL,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `password_token` varchar(128) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT '0',
  `email_token` varchar(255) DEFAULT NULL,
  `email_token_expires` datetime DEFAULT NULL,
  `tos` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_action` datetime DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `role` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `BY_USERNAME` (`username`),
  KEY `BY_EMAIL` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `slug`, `password`, `password_token`, `email`, `email_verified`, `email_token`, `email_token_expires`, `tos`, `active`, `last_login`, `last_action`, `is_admin`, `role`, `created`, `modified`) VALUES
('513b737c-8540-4f22-8d73-5620766e9db1', 'admin', 'admin', '2b399edd9d460563790f0717298b158ce1eac351', NULL, 'yorickhorrie@gmail.com', 1, NULL, NULL, 1, 1, '2013-03-09 18:51:18', NULL, 0, 'registered', '2013-03-09 18:38:04', '2013-03-09 18:51:18');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` varchar(36) NOT NULL,
  `user_id` varchar(36) NOT NULL,
  `position` float NOT NULL DEFAULT '1',
  `field` varchar(255) NOT NULL,
  `value` text,
  `input` varchar(16) NOT NULL,
  `data_type` varchar(16) NOT NULL,
  `label` varchar(128) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_PROFILE_PROPERTY` (`field`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

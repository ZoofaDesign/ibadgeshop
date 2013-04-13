-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 13 apr 2013 om 04:42
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Gegevens worden uitgevoerd voor tabel `customers`
--

INSERT INTO `customers` (`klant_id`, `user_id`, `naam`, `groepsnaam`, `straat`, `nr`, `bus`, `postcode`, `gemeente`, `land`, `telefoon`, `e-mail`, `btw_nr`) VALUES
(1, '513b737c-8540-4f22-8d73-5620766e9db1', 'Voornaam Naam', 'Chiro A', 'Kerkstraat', '25', 'null', 9000, '9000', 'be', '0472730771', 'yorick@horrie.be', 'null'),
(22, '', 'sdsd', 'qsd', 'sdqd', '25', '4', 9000, '', '', '', '', '0'),
(23, '', 'Yorick Horrie', '', 'Vinkenlaan ', '35', '', 9000, '', 'BE', '0', 'test@example.com', ''),
(24, '', 'Yorick Horrie', '', 'Vinkenlaan ', '35', '', 9000, '', 'BE', '0', 'test@examdple.com', ''),
(26, '', 'cbvxcb', '', 'cvcxv', '2', '', 9000, '', 'BE', '542458', 'h@k.com', '0'),
(28, '', 'cbvxcb', '', 'cvcxv', '2', '', 9000, '', 'BE', '542458', 'h@kff.com', '0'),
(30, '', 'cbvxcb', '', 'cvcxv', '2', '', 9000, '', 'BE', '542458', 'h@kzff.com', '0'),
(31, '', 'dsqdoqh', '', 'fsdf', '25', '', 9111, '', 'BE', '186946', 'lkjqsd@hjsqd.com', '0'),
(33, '', 'dsqdoqh', '', 'fsdf', '25', '', 9111, '', 'BE', '186946', 'lkjqsd@hxxjsqd.com', '0'),
(34, '', 'dsqdoqh', '', 'fsdf', '25', '', 9111, '', 'BE', '186946', 'lkjqsd@hxssxjsqd.com', '0'),
(35, '', 'dsqdoqh', '', 'fsdf', '25', '', 9111, '', 'BE', '186946', 'lkjssqsd@hxssxjsqd.com', '0'),
(36, '', 'dsqdoqh', '', 'fsdf', '25', '', 9111, '', 'BE', '186946', 'lkjssqsd@hxssxjrrrsqd.com', '0'),
(37, '', 'dsqdoqh', '', 'fsdf', '25', '', 9111, '', 'BE', '186946', 'lkjseeesqsd@hxssxjrrrsqd.com', '0'),
(38, '', 'seezer', '', 'sfddf', '45', '', 8500, '', 'BE', '1516', 'lkqsjfd@gdfs.com', '15'),
(40, '', 'seezer', '', 'sfddf', '45', '', 8500, '', 'BE', '1516', 'lkqsjfd@gdfsee.com', '15'),
(41, '', 'seezer', '', 'sfddf', '45', '', 8500, '', 'BE', '1516', 'lkqeeesjfd@gdfsee.com', '15'),
(42, '', 'seezer', '', 'sfddf', '45', '', 8500, '', 'BE', '1516', 'lkqengttsjfd@gdfsee.com', '15'),
(43, '', 'seezer', '', 'sfddf', '45', '', 8500, '', 'BE', '1516', 'lkqengtmmtsjfd@gdfeesee.com', '15'),
(44, '', 'seezer', '', 'sfddf', '45', '', 8500, '', 'BE', '1516', 'lkqentttgtmmtsjfd@gdfeesee.com', '15'),
(45, '', 'seezer', '', 'sfddf', '45', '', 8500, '', 'BE', '1516', 'lkwwntttgtmmtsjfd@gdfeesee.com', '15'),
(51, '', 'sdfsdf', '', 'sdfe', '12', '', 9713, '', 'BE', '8464', 'ergrg@ges.cve', ''),
(52, '', 'sdfsdf', '', 'sdfe', '12', '', 9713, '', 'BE', '8464', 'eriiigrg@getrs.cve', ''),
(53, '', 'fezhfkyt', '', 'tyeezds', '554', '', 445636, '', 'BE', '42166', 'kj@ppzaee.com', ''),
(54, '', 'fezhfkyt', '', 'tyeezds', '554', '', 445636, '', 'BE', '42166', 'kj@ppzaooee.com', ''),
(55, '', 'sqdqdq', 'zdq', 'dqsfd', '315', '', 18191, '', 'BE', '16819', 'MMPPZZ@mld.ve', ''),
(56, '', 'Pol Lepel', '', 'Kerkstraat', '15', '', 9000, 'Gent', 'BE', '0348879', 'msqdplzea@fieedf.com', ''),
(57, '', 'gdgdfg', '', 'retet', '524', '', 9200, 'DFSFeerz', 'BE', '4545', 'uyiyui@rfefr.com', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `designs`
--

CREATE TABLE IF NOT EXISTS `designs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `model` varchar(20) NOT NULL DEFAULT 'order',
  `image` varchar(80) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `format` varchar(20) NOT NULL,
  `hoogte` int(11) NOT NULL,
  `breedte` int(11) NOT NULL,
  `diameter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Gegevens worden uitgevoerd voor tabel `designs`
--

INSERT INTO `designs` (`id`, `order_id`, `model`, `image`, `dir`, `type`, `size`, `active`, `format`, `hoogte`, `breedte`, `diameter`) VALUES
(1, 0, 'order', '', '', '', 0, 1, 'rond', 30, 69, 14),
(2, 45, 'order', '', '', '', 0, 1, 'rond', 30, 69, 14),
(3, 46, 'order', '', '', '', 0, 1, 'rond', 30, 69, 14),
(4, 42, 'order', 'designs/541828_10150771597591042_914453430_n-1.jpg', '', '', 0, 1, 'rechthoek', 10, 8, 0),
(5, 43, 'order', 'designs/4bans.png', '', '', 0, 1, 'rond', 0, 0, 3),
(6, 44, 'order', '6408445_700b.jpg', '', '', 0, 1, 'rechthoek', 0, 0, 0),
(7, 47, 'order', '4bans.PNG', '', '', 0, 1, 'rechthoek', 10, 5, 0),
(8, 48, 'order', 'ibadge.PNG', '', '', 17, 1, 'rechthoek', 12, 5, 0),
(9, 49, 'order', '541828_10150771597591042_914453430_n.jpg', '9', 'image/jpeg', 19316, 1, 'rechthoek', 12, 4, 0);

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
  `status` varchar(20) NOT NULL DEFAULT 'nieuw',
  `price` float(11,0) NOT NULL DEFAULT '0',
  `aantal` int(11) NOT NULL DEFAULT '30',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `finished` datetime NOT NULL,
  `customer_id` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'order',
  `code` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Gegevens worden uitgevoerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `status`, `price`, `aantal`, `created`, `modified`, `finished`, `customer_id`, `type`, `code`) VALUES
(1, '1', 5225, 0, '2013-03-10 19:14:08', '2013-03-10 19:14:08', '2013-03-10 19:13:00', '1', 'order', ''),
(38, '1', 350, 50, '2013-04-05 00:10:10', '2013-04-05 00:10:10', '0000-00-00 00:00:00', '22', 'order', ''),
(39, '1', 350, 60, '2013-04-05 00:22:34', '2013-04-05 00:22:34', '0000-00-00 00:00:00', '23', 'order', ''),
(40, '1', 350, 60, '2013-04-05 00:24:05', '2013-04-05 00:24:05', '0000-00-00 00:00:00', '23', 'order', ''),
(41, '1', 350, 200, '2013-04-05 23:31:36', '2013-04-05 23:31:36', '0000-00-00 00:00:00', '25', 'order', ''),
(42, '1', 14850, 150, '2013-04-06 01:21:45', '2013-04-06 01:21:45', '0000-00-00 00:00:00', '33', 'order', ''),
(43, '1', 14850, 150, '2013-04-06 01:28:41', '2013-04-06 01:28:41', '0000-00-00 00:00:00', '34', 'order', ''),
(44, 'nieuw', 0, 888, '2013-04-13 00:17:54', '2013-04-13 00:17:54', '0000-00-00 00:00:00', '', 'order', ''),
(45, 'nieuw', 6752, 422, '2013-04-13 00:28:50', '2013-04-13 00:28:50', '0000-00-00 00:00:00', '', 'order', ''),
(46, 'nieuw', 6752, 422, '2013-04-13 01:49:03', '2013-04-13 01:49:03', '0000-00-00 00:00:00', '', 'order', ''),
(47, 'nieuw', 3000, 200, '2013-04-13 02:04:34', '2013-04-13 02:04:34', '0000-00-00 00:00:00', '', 'order', ''),
(48, 'nieuw', 2550, 150, '2013-04-13 02:50:04', '2013-04-13 02:50:04', '0000-00-00 00:00:00', '56', 'order', ''),
(49, 'nieuw', 8880, 555, '2013-04-13 04:21:32', '2013-04-13 04:21:32', '0000-00-00 00:00:00', '57', 'order', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_messages`
--

CREATE TABLE IF NOT EXISTS `order_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(20) NOT NULL,
  `reciever` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `order_messages`
--

INSERT INTO `order_messages` (`id`, `order_id`, `body`, `created`, `modified`, `title`, `reciever`) VALUES
(1, 42, 'I need an example off this design.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'New Example', 'manuf');

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

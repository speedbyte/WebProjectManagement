-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `dominik-table`;
CREATE TABLE `dominik-table` (
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `actor_id` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `dominik-table` (`first_name`, `last_name`, `actor_id`) VALUES
('Weikas',	'Agrawal',	'1'),
('Dominik',	'Abcd',	'2'),
('marcel',	'efgh',	'3'),
('jascha',	'iolk',	'4'),
('christoph',	'qwwer',	'5'),
('philipp',	'xsay',	'6');

DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `info` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `info` (`info`) VALUES
('Powerpoint fertigstellen');

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `firstname` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `username` tinytext NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login` (`firstname`, `lastname`, `username`, `password`) VALUES
('Dominik',	'Heinrich',	'domlock',	'123'),
('Dominik',	'Heinrich',	'domlock',	'123'),
('Dominik',	'Heinrich',	'domlock',	'123');

DROP TABLE IF EXISTS `MyGuests`;
CREATE TABLE `MyGuests` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `MyGuests` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:30:38'),
(2,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:31:25'),
(3,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:31:26'),
(4,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:31:30'),
(5,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:31:36'),
(6,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:31:36'),
(7,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:33:51'),
(8,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:34:40'),
(9,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:35:01'),
(10,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:35:10'),
(11,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:37:07'),
(12,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:37:16'),
(13,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:38:53'),
(14,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:38:54'),
(15,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:39:20'),
(16,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:39:24'),
(17,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:42:18'),
(18,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:42:39'),
(19,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:42:55'),
(20,	'Dominik',	'Heinrich',	'dom@heinrich.de',	'2016-08-23 08:45:29');

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `loginname` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `register` (`id`, `firstname`, `lastname`, `loginname`, `password`, `reg_date`) VALUES
(24,	'Dominik',	'Heinrich',	'admin',	'admin123',	'2016-08-30 15:47:54'),
(25,	'Patrick',	'Zinsser',	'test',	'123',	'2016-08-30 16:18:12'),
(26,	'domi',	'heinrich',	'domdom',	'123',	'2016-08-30 18:33:53'),
(27,	'jordan',	'scrumble',	'testi',	'123',	'2016-09-13 08:33:51');

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `username` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `Problem` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ticket` (`username`, `firstname`, `lastname`, `Problem`, `time`) VALUES
('dkay',	'Dominik',	'Heinrich',	'Ich habe ein Problem\r\n		',	'2016-09-13 10:00:21'),
('dkay',	'Dominik',	'Heinrich',	'Ich habe ein Problem\r\n		',	'2016-09-13 10:00:21'),
('dkay',	'Dominik',	'Heinrich',	'Ich habe ein Problem\r\n		',	'2016-09-13 10:00:21'),
('dkay',	'Dominik',	'Heinrich',	'Ich habe ein Problem\r\n		',	'2016-09-13 10:00:21'),
('dkay',	'Dominik',	'Heinrich',	'Ich habe ein Problem\r\n		',	'2016-09-13 10:00:21'),
('domi',	'Dome',	'Heino',	'test',	'2016-09-13 10:00:21'),
('domi',	'Dome',	'Heino',	'test',	'2016-09-13 10:00:21'),
('domi',	'Dome',	'Heino',	'test',	'2016-09-13 10:00:21'),
('domi',	'Dome',	'Heino',	'test',	'2016-09-13 10:00:21'),
('domi',	'Dome',	'Heino',	'test',	'2016-09-13 10:00:21'),
('domi',	'Dome',	'Heino',	'test',	'2016-09-13 10:00:21'),
('edade',	'eda',	'deaed',	'		Bitte schildern Sie ihr Problem!\r\n		eade',	'2016-09-13 10:01:54'),
('edade',	'eda',	'deaed',	'		Bitte schildern Sie ihr Problem!\r\n		eade',	'2016-09-13 10:02:30'),
('Heino123',	'Dominik',	'Heino',	'',	'2016-09-13 11:11:07'),
('domi',	'Dominik',	'Heinrich',	'CMS noch zu implementieren',	'2016-09-13 11:24:11');

DROP TABLE IF EXISTS `ticket1`;
CREATE TABLE `ticket1` (
  `firstnameTicketersteller` text NOT NULL,
  `lastnameTicketersteller` text NOT NULL,
  `usernameTicketersteller` text NOT NULL,
  `problem` text NOT NULL,
  `firstnameTicketbearbeiter` text NOT NULL,
  `lastnameTicketbearbeiter` text NOT NULL,
  `loesung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `ticket2`;
CREATE TABLE `ticket2` (
  `firstnameTicketersteller` text NOT NULL,
  `lastnameTicketersteller` text NOT NULL,
  `usernameTicketersteller` text NOT NULL,
  `problem` text NOT NULL,
  `firstnameTicketbearbeiter` text NOT NULL,
  `lastnameTicketbearbeiter` text NOT NULL,
  `usernameTicketbearbeiter` text NOT NULL,
  `loesung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ticket2` (`firstnameTicketersteller`, `lastnameTicketersteller`, `usernameTicketersteller`, `problem`, `firstnameTicketbearbeiter`, `lastnameTicketbearbeiter`, `usernameTicketbearbeiter`, `loesung`) VALUES
('Dominik',	'Heinrich',	'admin123',	'Checkboxes in Datenbank geben -> Ampelanzeige -> Todo',	'Domi',	'Heino',	'admin1234',	'google'),
('Vikas',	'A',	'VA',	'Bsp',	'Dominik',	'Heinrich',	'dom123',	'google');

DROP TABLE IF EXISTS `time`;
CREATE TABLE `time` (
  `time` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `time` (`time`) VALUES
('31.09.2016'),
('<b> 22.09.2016 -11Uhr </b>');

DROP TABLE IF EXISTS `todo`;
CREATE TABLE `todo` (
  `aufgabe` text NOT NULL,
  `bereich` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `todo` (`aufgabe`, `bereich`, `time`) VALUES
('CMS implementieren',	'Webprojectmanagment',	'2016-09-13 12:02:01'),
('App fertig stellen',	'Applikation',	'2016-09-13 12:02:33'),
('Praesentation',	'Alle',	'2016-09-13 12:03:44'),
('ticket delete funktion schreiben',	'Webprojectmanagment',	'2016-09-13 12:13:08'),
('Alle Sachen in Git laden',	'Webprojectmanagment',	'2016-09-13 12:18:36'),
('Daten an Vikas geben fuer Webseite',	'Webprojectmanagment',	'2016-09-13 12:18:49'),
('Powerpointpart erstellen',	'GUI',	'2016-09-13 12:19:18'),
('Powerpointpart erstellen',	'Datenbank',	'2016-09-13 12:19:27'),
('Powerpointpart erstellen',	'Webprojectmanagment',	'2016-09-13 12:19:34'),
('Powerpointpart erstellen',	'Applikation',	'2016-09-13 12:19:42'),
('Ampel hinzufuegen',	'Webprojectmanagment',	'2016-09-13 12:24:48'),
('bei keinem Datenempfang soll signal bei 0 weiterlaufen',	'GUI',	'2016-09-13 12:38:14'),
('Poster aufhaengen',	'Alle',	'2016-09-13 12:50:09'),
('Haken soll angezeigt bleiben',	'Webprojectmanagment',	'2016-09-13 12:57:31'),
('Alle Aufgaben hier einfuegen',	'Webprojectmanagment',	'2016-09-13 12:57:44'),
('Foto in Kopfzeile einfuegen und hervorheben',	'Webprojectmanagment',	'2016-09-13 12:58:01'),
('Foto senden an Dominik',	'Alle',	'2016-09-13 12:59:00'),
('Javadoc erstellen',	'GUI',	'2016-09-13 13:08:47');

-- 2016-09-13 13:14:20


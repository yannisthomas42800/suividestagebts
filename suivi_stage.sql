-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `suivi_stage` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `suivi_stage`;

CREATE TABLE `Entreprise` (
  `idEnt` int(11) NOT NULL AUTO_INCREMENT,
  `nomEnt` varchar(222) NOT NULL,
  PRIMARY KEY (`idEnt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Entreprise` (`idEnt`, `nomEnt`) VALUES
(1,	'L\'entreprise a pascal');

CREATE TABLE `Etudiant` (
  `idEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `nomEtu` varchar(222) NOT NULL,
  `prenEtu` varchar(222) NOT NULL,
  `mailEtu` varchar(222) NOT NULL,
  PRIMARY KEY (`idEtudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Etudiant` (`idEtudiant`, `nomEtu`, `prenEtu`, `mailEtu`) VALUES
(1,	'OUI',	'OUI',	'ouioui@gmail.com');

CREATE TABLE `STAGE` (
  `ref Etudiant` int(11) NOT NULL,
  `DateDébut` date NOT NULL,
  `DateFin` date NOT NULL,
  `refTut` int(11) NOT NULL,
  `refEnt` int(11) NOT NULL,
  `Description` text NOT NULL,
  KEY `refTut` (`refTut`),
  KEY `refEnt` (`refEnt`),
  KEY `ref Etudiant` (`ref Etudiant`),
  CONSTRAINT `STAGE_ibfk_1` FOREIGN KEY (`refTut`) REFERENCES `TUTENT` (`idTut`),
  CONSTRAINT `STAGE_ibfk_2` FOREIGN KEY (`refEnt`) REFERENCES `Entreprise` (`idEnt`),
  CONSTRAINT `STAGE_ibfk_3` FOREIGN KEY (`ref Etudiant`) REFERENCES `Etudiant` (`idEtudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `STAGE` (`ref Etudiant`, `DateDébut`, `DateFin`, `refTut`, `refEnt`, `Description`) VALUES
(1,	'2020-01-31',	'2020-01-31',	1,	1,	'');

CREATE TABLE `TUTENT` (
  `idTut` int(11) NOT NULL AUTO_INCREMENT,
  `nomTut` varchar(30) NOT NULL,
  `prenTut` varchar(30) NOT NULL,
  `mailTut` varchar(222) NOT NULL,
  PRIMARY KEY (`idTut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TUTENT` (`idTut`, `nomTut`, `prenTut`, `mailTut`) VALUES
(1,	'Frederique',	'Pascal',	'pascaloudu43@gmail.com');

-- 2020-02-05 08:50:10

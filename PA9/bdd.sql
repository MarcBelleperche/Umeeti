-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 23 déc. 2019 à 18:36
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `novotel`
--

DROP TABLE IF EXISTS `novotel`;
CREATE TABLE IF NOT EXISTS `novotel` (
  `ReservationID` int(11) NOT NULL AUTO_INCREMENT,
  `DateReservationDebut` date NOT NULL,
  `DateReservationFin` date NOT NULL,
  `ResevationNom` varchar(255) NOT NULL,
  `Flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`ReservationID`)
) ENGINE=MyISAM AUTO_INCREMENT=801 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `novotel`
--

INSERT INTO `novotel` (`ReservationID`, `DateReservationDebut`, `DateReservationFin`, `ResevationNom`, `Flag`) VALUES
(793, '2019-10-01', '2019-10-05', 'Belleperche', 1),
(425, '2019-10-04', '2019-10-09', 'Oussi', 1),
(223, '2019-10-01', '2019-11-27', 'Berriche', 1),
(796, '2019-10-01', '2019-11-29', 'Jaber', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Sexe` varchar(1) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `LoginPassword` varchar(255) NOT NULL,
  `UserReservationID` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL DEFAULT 'images/profil_defaut',
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`UserID`, `Sexe`, `Nom`, `Prenom`, `Email`, `LoginPassword`, `UserReservationID`, `Description`, `Photo`) VALUES
(1, 'M', 'Belleperche', 'Marc', 'marc.belleperche@efrei.net', 'Abc123', 793, 'Co-Chef / Développeur', 'images/profil_defaut 	'),
(2, 'M', 'Oussi', 'Hamza', 'hamza.oussi@efrei.net', 'Abc123', 425, 'Agent de sécurité', 'images/profil_defaut 	'),
(4, 'M', 'Berriche', 'Wadid', 'wadid.berriche@efrei.net', 'Abc123', 223, 'Pitre', 'images/profil_defaut 	'),
(8, 'M', 'Jaber', 'Ahmad', 'ahmad.jaber@efrei.net', 'Abc123', 796, 'Pitre adjoint', 'images/profil_defaut 	');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

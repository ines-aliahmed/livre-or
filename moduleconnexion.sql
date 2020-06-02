-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 21 jan. 2020 à 17:44
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
-- Base de données :  `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(17, 'teu', 'richard', 'bertoz', '2b39d05b865daf5116b7f1bac05579789d9c0903'),
(1, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(5, 'thomas21', 'thomas', 'berto', '$2y$12$RN557LUZITlBhRxaxBWcY.h4dOUGYAPvl9.OTPtBH24FxHhcVhV5e'),
(13, 'charly', 'delta', 'commando', 'cdc'),
(11, 'anna', 'anna', 'montana', 'montana'),
(12, 'messi', 'leo', 'messi', 'leo'),
(9, 'messi', 'thomas', 'berto', '$2y$12$.tNoLGcQiymz58KpjCNWju0mJd.tIYW5dVIrOES8PQX341UnXXnDe'),
(15, 'a', 'b', 'c', '3c363836cf4e16666669a25da280a1865c2d2874'),
(18, 'curdent13015', 'charif', 'echata', '4b21f76628a9de29edcea0a22968aa3f44d9349f'),
(19, 'a', 'z', 'e', '4dc7c9ec434ed06502767136789763ec11d2c4b7'),
(20, 'a', 'z', 'z', '395df8f7c51f007019cb30201c49e884b46b92fa'),
(21, 'd', 'd', 'd', '3c363836cf4e16666669a25da280a1865c2d2874'),
(22, 'stringer', 'stringer', 'belle', '04bf886e8ac26aef79ce20e35be5e4e7220e2db3'),
(23, 't', 'titi', 'gro', '6adbae8c894eee14931a69b021d6fca6a64932db'),
(24, 'zineb21', 'zineb', 'siad', '2003c3b91e44332951c4549ee379cca109ef163a'),
(39, 'aa', 'aa', 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37'),
(40, 'aze', 'aze', 'aze', 'de271790913ea81742b7d31a70d85f50a3d3e5ae');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

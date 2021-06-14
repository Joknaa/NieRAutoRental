-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 juin 2021 à 21:29
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `neirautorental`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE `comments`;
CREATE TABLE `comments` (
                            `ID_comment` int(11) NOT NULL,
                            `lname` varchar(50) NOT NULL,
                            `fname` varchar(50) NOT NULL,
                            `Type` varchar(20) NOT NULL,
                            `Content` varchar(500) NOT NULL,
                            `Score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`ID_comment`, `lname`, `fname`, `Type`, `Content`, `Score`) VALUES
(1, '', '', '3', 'negative', 0),
(2, '', '', '0', 'second comment test , i hope this one works', 3),
(3, '', '', 'positive', 'THATS IT, this is boring . please let this one be the lase test !!', 5),
(4, '', '', '', 'yaaarbo ikhdem had l3jeb ', 0),
(5, '', '', '', 'yaaarbo ikhdem had l3jeb ', 0),
(6, '', '', '', 'yaaarbo ikhdem had l3jeb ', 0),
(7, 'test100000000000', 'niamaaa', '', 'yaaarbo ikhdem had l3jeb ', 0),
(8, 'test100000000000', 'niamaaa', '', 'yaaarbo ikhdem had l3jeb ', 0),
(9, 'test100000000000', 'niamaaa', '', 'yaaarbo ikhdem had l3jeb ', 0),
(10, 'test100000000000', 'niamaaa', '', 'yaaarbo ikhdem had l3jeb ', 0),
(11, 'hello', 'niamaaa', '', 'yaaarbo ikhdem had l3jeb ', 0),
(12, '', '', '', '', 0),
(13, '', '', '', '', 0),
(14, 'ma', 'nia', '', ' first comment test !!', 0),
(15, '', '', '', '', 0),
(16, '', '', '', '', 0),
(17, 'wa', 'mar', '', 'last try', 0),
(18, 'hello', 'niala', '', ' first comment test !!', 0),
(19, '', '', '', '', 0),
(20, '', '', '', '', 0),
(21, 'hello', 'niala', '', 'yaaarbo ikhdem had l3jeb ', 0),
(22, 'hello', 'niamaaa', '', 'yaaarbo ikhdem had l3jeb ', 0),
(23, 'hello', 'niala', '', 'test4369', 0),
(24, 'med', 'oknaa', '', 'oknaas comment', 0),
(25, 'med', 'oknaa', '', 'oknaas comment', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
    MODIFY `ID_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

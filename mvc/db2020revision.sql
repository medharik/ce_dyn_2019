-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           10.1.37-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win32
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour db2020revision
DROP DATABASE IF EXISTS `db2020revision`;
CREATE DATABASE IF NOT EXISTS `db2020revision` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db2020revision`;

-- Listage de la structure de la table db2020revision. absence
DROP TABLE IF EXISTS `absence`;
CREATE TABLE IF NOT EXISTS `absence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_absence` varchar(100) DEFAULT NULL,
  `nombreHeure` varchar(255) DEFAULT NULL,
  `details` text,
  `etudiant_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_100` (`etudiant_id`),
  CONSTRAINT `fk_100` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiant` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Listage des données de la table db2020revision.absence : ~5 rows (environ)
DELETE FROM `absence`;
/*!40000 ALTER TABLE `absence` DISABLE KEYS */;
INSERT INTO `absence` (`id`, `date_absence`, `nombreHeure`, `details`, `etudiant_id`) VALUES
	(26, '2020-03-12', '', NULL, 5),
	(27, '2020-04-01', '3', NULL, 6),
	(28, '2020-04-01', '3', NULL, 5),
	(29, '2020-03-31', '7', NULL, 6),
	(30, '2020-03-31', '10', NULL, 5);
/*!40000 ALTER TABLE `absence` ENABLE KEYS */;

-- Listage de la structure de la table db2020revision. categorie
DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `chemin` varchar(300) NOT NULL DEFAULT 'images/icon.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Listage des données de la table db2020revision.categorie : ~4 rows (environ)
DELETE FROM `categorie`;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id`, `nom`, `chemin`) VALUES
	(4, 'Eletro', '../images/174a1fb5c13883e1a8360432a9cb1583en_construction.jpg'),
	(5, 'Accessoire Auto', 'images/icon.png'),
	(6, 'Produit Cosmetique', 'images/icon.png'),
	(7, 'Produit nettoyage', 'images/icon.png');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table db2020revision. classe
DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Listage des données de la table db2020revision.classe : ~14 rows (environ)
DELETE FROM `classe`;
/*!40000 ALTER TABLE `classe` DISABLE KEYS */;
INSERT INTO `classe` (`id`, `nom`) VALUES
	(1, 'di2'),
	(2, 'di1'),
	(3, 'GI 1'),
	(4, 'licence gestion '),
	(5, 'licence inf'),
	(6, 'harik mohamed'),
	(7, 'harik mohamed'),
	(8, 'harik mohamed'),
	(9, 'harik mohamed'),
	(10, 'harik mohamed'),
	(11, 'harik mohamed'),
	(12, 'harik mohamed'),
	(13, 'savio '),
	(14, 'savio milandou'),
	(15, 'CESAISTE'),
	(16, 'prevent default');
/*!40000 ALTER TABLE `classe` ENABLE KEYS */;

-- Listage de la structure de la table db2020revision. etudiant
DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomprenom` varchar(100) DEFAULT NULL,
  `chemin` varchar(255) DEFAULT NULL,
  `classe_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_12` (`classe_id`),
  CONSTRAINT `fk_12` FOREIGN KEY (`classe_id`) REFERENCES `classe` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Listage des données de la table db2020revision.etudiant : ~2 rows (environ)
DELETE FROM `etudiant`;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` (`id`, `nomprenom`, `chemin`, `classe_id`) VALUES
	(5, 'dassoah', 'images/7da3605cfeb3c496d12952dd013909e4elite.jpg', 1),
	(6, 'excellence', 'images/a06802591402b4815b04ac8a301724714.jpg', 1);
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;

-- Listage de la structure de la table db2020revision. produit
DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `prix` float DEFAULT NULL,
  `qtestock` float DEFAULT NULL,
  `chemin` varchar(300) DEFAULT 'images/icon.png',
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie_id` (`categorie_id`),
  CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table db2020revision.produit : ~2 rows (environ)
DELETE FROM `produit`;
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` (`id`, `libelle`, `prix`, `qtestock`, `chemin`, `categorie_id`) VALUES
	(5, 'noh noh', 100, 9, 'images/a132ac1345e5367d26f94bb2ca49a8e7banner4.jpg', 7);
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;

-- Listage de la structure de la table db2020revision. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `passe` varchar(100) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table db2020revision.users : ~2 rows (environ)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `passe`, `nom`) VALUES
	(1, 'admin@gmail.com', '1234', 'ADMINOS'),
	(2, 'king@gmail.com', '1234', 'kingos');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

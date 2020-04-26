-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE `annonces` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `photo` text CHARACTER SET utf8 COLLATE utf8_bin,
  `price` int NOT NULL,
  `zip` int NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `annonces` (`id`, `title`, `description`, `photo`, `price`, `zip`, `city`, `author`) VALUES
(2,	'Chateau',	'chateau',	'./assets/image/annonce04-26-2020_13:44:42jpeg',	22000,	67000,	'Strasbourg',	'vendeur01'),
(4,	'cours de code',	'cours de code',	'./assets/image/annonce04-26-2020_13:52:04jpeg',	25,	67000,	'Strasbourg',	'Jack'),
(8,	'Cours de code 2',	'HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH',	'./assets/image/annonce04-26-2020_14:28:03jpeg',	23,	59000,	'Lille',	'ben'),
(9,	'Lego',	'Lego pour enfant Star wars',	'https://picsum.photos/200/300',	10,	45000,	'Nantes',	'eric'),
(10,	'Carte Pokemon ',	'Très Bon Etat\r\nJ\'ai retrouver la carte dans ma collection et en voyant le prix sur le marché je me suis dis qu\'il fallait que je la vende. ',	'./assets/image/annonce04-26-2020_14:49:24jpeg',	15,	67300,	'Schiltigheim',	'pokemonFan');

-- 2020-04-26 14:50:37

-- Adminer 4.8.1 MySQL 5.5.5-10.6.11-MariaDB-1:10.6.11+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `manchest`;
CREATE TABLE `manchest` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `poste` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `manchest` (`id`, `nom`, `prenom`, `age`, `nationalite`, `poste`) VALUES
(1,	'MAHREZ',	'RYHAD',	28,	'ALGERIEN',	'MILEUX'),
(2,	'RASHFORD',	'MARCUS',	25,	'ANGLAIS',	'ATTAQUANT'),
(3,	'WALKER',	'KYLE',	29,	'ANGLAIS',	'DEFENSEUR'),
(4,	'HAALAND',	'ERLING',	23,	'NORVEGIEN',	'ATTAQUANT'),
(5,	'LLORIS',	'HUGO',	37,	'FRANCAIS',	'GARDIEN'),
(6,	'MESSI',	'LIONEL',	34,	'ARGENTINS',	'MILEUX'),
(7,	'RONALDO',	'CRISTIANO',	37,	'PORTUGUAIS',	'ATTAQUANT'),
(8,	'RAMOS',	'SERGIO',	35,	'ESPAGNOL',	'DEFENSEUR'),
(9,	'INIESTA',	'ANDRES',	38,	'ESPAGNOL',	'MILIEUX'),
(10,	'IBRAHIMOVIC',	'ZLATAN',	39,	'SUEDOIS',	'ATTAQUANT'),
(11,	'CANCELO',	'JOAO',	27,	'PORTUGUAIS',	'DEFENSEUR'),
(12,	'DI MARIA',	'ANGEL',	33,	'ARGENTINS',	'MILIEUX'),
(13,	'ALBA',	'JORDI',	32,	'ESPAGNOL',	'DEFENSEUR'),
(14,	'MBAPPE',	'KYLIAN',	24,	'FRANCAIS',	'ATTAQUANT'),
(15,	'GIROUD',	'OLIVIER',	34,	'FRANCAIS',	'ATTAQUANT'),
(16,	'RIBERY',	'FRANC',	38,	'FRANCAIS',	'ATTAQUANT'),
(17,	'BECKER',	'ALLISON',	30,	'BRESILIEN',	'GARDIEN'),
(18,	'BENNACER',	'ISMAIL',	24,	'ALGERIEN',	'MILIEUX'),
(19,	'STONES',	'JOHN',	27,	'ANGLAIS',	'DEFENSEUR'),
(20,	'LEAO',	'RAPHAEL',	23,	'PORTUGAIS',	'ATTAQUANT'),
(21,	'GRIEZMANN',	'ANTOINE',	30,	'FRANCAIS',	'MILIEUX'),
(22,	'PULISIC',	'CHRISTIAN',	25,	'AMERICAIN',	'ATTAQUANT'),
(23,	'GUDOGAN',	'ILKAY',	32,	'ALLEMAND',	'MILIEUX'),
(24,	'CASEMIRO',	'CARLOS HENRIQUE',	30,	'BRESILIEN',	'MILIEUX'),
(25,	'MESLIER',	'ILLAN',	23,	'FRANCAIS',	'GARDIEN'),
(27,	'DIAS',	'RUBEN',	26,	'PORTUGAIS',	'DEFENSEUR'),
(28,	'DIABY',	'MOUSSA',	24,	'FRANCAIS',	'ATTAQUANT'),
(29,	'HERNANDEZ',	'THEO',	27,	'FRANCAIS',	'DEFENSEUR'),
(30,	'MUSIALA',	'JAMAL',	20,	'ALLEMAND',	'MILIEUX'),
(31,	'BENZEMA',	'KARIM',	33,	'FRANCAIS',	'ATTAQUANT'),
(32,	'MANE',	'SADIO',	30,	'SENEGALAIS',	'ATTAQUANT'),
(34,	'MULLER',	'THOMAS',	32,	'ALLEMAND',	'MILIEUX'),
(35,	'DAVIES',	'ALPHONSO',	24,	'CANADIEN ',	'DEFENSEUR'),
(36,	'VAN DJIK',	'VIRGIL',	30,	'NEERLANDAIS',	'DEFENSEUR'),
(37,	'SALAH',	'MOHAMED',	30,	'EGYPTIEN',	'ATTAQUANT'),
(38,	'UPAMECANO',	'DAYOT',	25,	'FRANCAIS',	'DEFENSEUR'),
(39,	'FERNANDES',	'BRUNO',	28,	'PORTUGAIS',	'MILIEUX'),
(41,	'VARANE',	'RAPHAEL',	31,	'FRANCAIS',	'DEFENSEUR'),
(42,	'SHAW',	'LUKE',	29,	'ANGLAIS',	'DEFENSEUR'),
(43,	'VERRATI',	'MARCO',	27,	'ITALIEN',	'MILIEUX'),
(44,	'OSIMHEN',	'VICTOR',	24,	'NIGERIEN',	'ATTAQUANT'),
(45,	'RUDIGER',	'ANTONIO',	28,	'ALLEMAND',	'DEFENSEUR'),
(48,	'SILVA',	'THIAGO',	38,	'BRESILIEN',	'DEFENSEUR'),
(49,	'DA SILVA SANTOS',	'NEYMAR',	29,	'BRESILIEN',	'ATTAQUANT'),
(50,	'GORETZKA',	'LEON',	27,	'ALLEMAND',	'MILIEUX'),
(51,	'DE JONG',	'FRANKIE',	25,	'NEERLANDAIS',	'MILIEUX'),
(52,	'KANE',	'HARRY',	29,	'ANGLAIS',	'ATTAQUANT'),
(53,	'SANE',	'LEROY',	25,	'FRANCAIS',	'ATTAQUANT'),
(57,	'AOUAR',	'HOUSSEM',	25,	'ALGERIEN',	'MILIEUX'),
(59,	'ALVAREZ',	'JULIAN',	21,	'ARGENTINS',	'ATTAQUANT'),
(60,	'FERNANDES',	'ENZO',	23,	'ARGENTINS',	'MILIEUX'),
(62,	'ODEGAARD',	'MARTIN',	24,	'NORVEGIEN',	'MILIEUX'),
(63,	'TUCHEL',	'THOMAS',	46,	'ALLEMAND',	'ENTRAINEUR'),
(64,	'CORREA',	'ANGEL',	29,	'ARGENTINS',	'ATTAQUANT'),
(65,	'SANCHO',	'JADON',	24,	'ANGLAIS',	'MILIEUX'),
(67,	'MAIGNAN',	'MIKE',	23,	'FRANCAIS',	'GARDIEN'),
(68,	'SUAREZ',	'LUIS',	35,	'URUGUAYEN',	'ATTAQUANT');


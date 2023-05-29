-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla capacitacion.participants
CREATE TABLE IF NOT EXISTS `participants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activity_date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `cui` varchar(13) DEFAULT NULL,
  `age` float DEFAULT NULL,
  `disability` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '0',
  `type_disability` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `municipality_id` int NOT NULL,
  `genders_id` int NOT NULL,
  `identities_id` int NOT NULL,
  `type_activities_id` int NOT NULL,
  `users_id` int NOT NULL,
  `linguistics_id` int NOT NULL,
  PRIMARY KEY (`id`,`municipality_id`,`genders_id`,`identities_id`,`type_activities_id`,`users_id`,`linguistics_id`),
  KEY `fk_participants_municipalities1_idx` (`municipality_id`),
  KEY `fk_participants_genders1_idx` (`genders_id`),
  KEY `fk_participants_identities1_idx` (`identities_id`),
  KEY `fk_participants_type_activities1_idx` (`type_activities_id`),
  KEY `fk_participants_users1_idx` (`users_id`),
  KEY `fk_participants_linguistics1_idx` (`linguistics_id`),
  CONSTRAINT `fk_participants_genders1` FOREIGN KEY (`genders_id`) REFERENCES `genders` (`id`),
  CONSTRAINT `fk_participants_identities1` FOREIGN KEY (`identities_id`) REFERENCES `identities` (`id`),
  CONSTRAINT `fk_participants_linguistics1` FOREIGN KEY (`linguistics_id`) REFERENCES `linguistics` (`id`),
  CONSTRAINT `fk_participants_municipalities1` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`id`),
  CONSTRAINT `fk_participants_type_activities1` FOREIGN KEY (`type_activities_id`) REFERENCES `type_activities` (`id`),
  CONSTRAINT `fk_participants_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=312 DEFAULT CHARSET=utf8mb3;

-- Volcando datos para la tabla capacitacion.participants: ~0 rows (aproximadamente)
DELETE FROM `participants`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

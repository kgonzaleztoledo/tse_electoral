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

-- Volcando estructura para tabla tse_electoral.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;

-- Volcando datos para la tabla tse_electoral.departments: ~22 rows (aproximadamente)
INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'GUATEMALA', 'Ciudad capitala', NULL, '2023-05-01 13:45:11'),
	(2, 'EL PROGRESO', '1', NULL, '2023-05-01 12:47:32'),
	(3, 'SACATEPÉQUEZ', '', NULL, NULL),
	(4, 'CHIMALTENANGO', '', NULL, NULL),
	(5, 'ESCUINTLA', '', NULL, NULL),
	(6, 'SANTA ROSA', '', NULL, NULL),
	(7, 'SOLOLA', '', NULL, NULL),
	(8, 'TOTONICAPÁN', '', NULL, NULL),
	(9, 'QUETZALTENANGO', '', NULL, NULL),
	(10, 'SUCHITEPÉQUEZ', '', NULL, NULL),
	(11, 'RETALHULEU', '', NULL, NULL),
	(12, 'SAN MARCOS', '', NULL, NULL),
	(13, 'HUEHUETENANGO', '', NULL, NULL),
	(14, 'QUICHÉ', '', NULL, NULL),
	(15, 'BAJA VERAPAZ', '', NULL, NULL),
	(16, 'ALTA VERAPAZ', '', NULL, NULL),
	(17, 'PETÉN', '', NULL, NULL),
	(18, 'IZABAL', '', NULL, NULL),
	(19, 'ZACAPA', '', NULL, NULL),
	(20, 'CHIQUIMULA', '', NULL, NULL),
	(21, 'JALAPA', '', NULL, NULL),
	(22, 'JUTIAPA', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

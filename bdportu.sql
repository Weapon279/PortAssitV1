-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         8.0.33 - MySQL Community Server - GPL
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


-- Volcando estructura de base de datos para portu
CREATE DATABASE IF NOT EXISTS `portu` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `portu`;

-- Volcando estructura para tabla portu.congestionamiento_vial
CREATE TABLE IF NOT EXISTS `congestionamiento_vial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ruta_ID` int DEFAULT NULL,
  `latitud` decimal(10,8) NOT NULL,
  `longitud` decimal(11,8) NOT NULL,
  `tiempo` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_congestionamiento_vial_rutas` (`ruta_ID`),
  CONSTRAINT `FK_congestionamiento_vial_rutas` FOREIGN KEY (`ruta_ID`) REFERENCES `rutas` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla portu.congestionamiento_vial: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portu.login
CREATE TABLE IF NOT EXISTS `login` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Usuario_ID` int DEFAULT NULL,
  `Nombre_de_usuario` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Nombre_de_usuario` (`Nombre_de_usuario`),
  KEY `Usuario_ID` (`Usuario_ID`),
  CONSTRAINT `login_ibfk_1` FOREIGN KEY (`Usuario_ID`) REFERENCES `usuarios` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla portu.login: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portu.marcadores
CREATE TABLE IF NOT EXISTS `marcadores` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `user_pk` int DEFAULT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Latitud` decimal(10,8) NOT NULL,
  `Longitud` decimal(11,8) NOT NULL,
  `Descripcion` text,
  `Fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `FK_marcadores_usuarios` (`user_pk`),
  CONSTRAINT `FK_marcadores_usuarios` FOREIGN KEY (`user_pk`) REFERENCES `usuarios` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla portu.marcadores: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portu.rutas
CREATE TABLE IF NOT EXISTS `rutas` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Usuario_ID` int DEFAULT NULL,
  `Punto_Inicio` varchar(255) DEFAULT NULL,
  `Punto_Final` varchar(255) DEFAULT NULL,
  `Duración` time DEFAULT NULL,
  `Trafico` text,
  `Fecha_Registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `Usuario_ID` (`Usuario_ID`),
  CONSTRAINT `rutas_ibfk_1` FOREIGN KEY (`Usuario_ID`) REFERENCES `usuarios` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla portu.rutas: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portu.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Edad` int DEFAULT NULL,
  `Teléfono` varchar(20) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `RFC` varchar(13) DEFAULT NULL,
  `Empresa` varchar(100) DEFAULT NULL,
  `Domicilio` varchar(255) DEFAULT NULL,
  `Activo` tinyint(1) DEFAULT '1',
  `Fecha_Registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Fecha_Ultima_Actualizacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Correo` (`Correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla portu.usuarios: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para laravel_notes
CREATE DATABASE IF NOT EXISTS `laravel_notes` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `laravel_notes`;

-- Copiando estrutura para tabela laravel_notes.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel_notes.migrations: ~2 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(3, '2024_11_16_044153_create_users_table', 1),
	(4, '2024_11_16_044904_create_notes_table', 1);

-- Copiando estrutura para tabela laravel_notes.notes
CREATE TABLE IF NOT EXISTS `notes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel_notes.notes: ~3 rows (aproximadamente)
INSERT INTO `notes` (`id`, `user_id`, `title`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'Nota 1 Atualizada', 'Texto da Nota 1', '2024-11-22 13:30:26', '2024-11-25 14:51:54', NULL),
	(3, 1, 'Teste de Nota 3', 'Texto da nota 3', '2024-11-22 21:35:01', '2024-11-25 14:55:54', NULL),
	(4, 1, 'Nota 2', 'Texto da nota2', '2024-11-25 12:49:48', NULL, NULL);

-- Copiando estrutura para tabela laravel_notes.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel_notes.users: ~3 rows (aproximadamente)
INSERT INTO `users` (`id`, `username`, `password`, `last_login`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'user1@gmail.com', '$2y$12$sZkYEqz8EF2RA7L2phaZWu8ZXFGF3yGFcoQFlP5LhjJMlcG32v/bG', '2024-11-25 12:50:48', '2024-11-22 05:35:26', '2024-11-25 15:50:48', NULL),
	(2, 'user2@gmail.com', '$2y$12$lh1ONo3.bnTI/kp5rr4C9eouSHPDi7IwypeoxSFGTUK8zLUSzWVqG', NULL, '2024-11-22 05:35:27', NULL, NULL),
	(3, 'user3@gmail.com', '$2y$12$03hISLAsAXfGVUGkK0vrR.kd4z6A99gN7yTcLQwlWuXy4/W/hA//e', NULL, '2024-11-22 05:35:27', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

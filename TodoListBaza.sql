-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Wersja serwera:               8.0.30 - MySQL Community Server - GPL
-- Serwer OS:                    Win64
-- HeidiSQL Wersja:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Zrzut struktury bazy danych todolist
CREATE DATABASE IF NOT EXISTS `todolist` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `todolist`;

-- Zrzut struktury tabela todolist.tasks
CREATE TABLE IF NOT EXISTS `tasks` (
  `category` varchar(60) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `content` varchar(256) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `deadline` varchar(60) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `userId` int DEFAULT NULL,
  `done` tinyint(1) DEFAULT '0',
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- Zrzucanie danych dla tabeli todolist.tasks: ~2 rows (około)
INSERT INTO `tasks` (`category`, `content`, `deadline`, `userId`, `done`, `id`) VALUES
	('nowy', 'dla usera mariusz', '24/01/2024', 27, 0, 6),
	('aopsd', 'doisjdq', '17/01/2024', 32, 0, 7);

-- Zrzut struktury tabela todolist.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `passsw` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- Zrzucanie danych dla tabeli todolist.users: ~1 rows (około)
INSERT INTO `users` (`id`, `email`, `passsw`) VALUES
	(27, 'mariuszgl06@gmail.com', '$2y$10$hICfhLjB5OMSD/Ulhiy9qe2TguZFkysPvDtioOWE0cltKMjYn25Mi'),
	(28, 'darek.dynamit@gmail.com', '$2y$10$Y1teblHVngCta6JI5fOA8epD5jsqjDu9KRFm4qvtC15taSk2fhLCi'),
	(29, 'daniulek2017@qp.pl', '$2y$10$9AkrOQpYvaogmEgH3GeYLObejW1xQqJ0LNHXRAl4JwbS6azQ8dqaK'),
	(30, 'Patrykhetmanczyk5@gmail.com', '$2y$10$je5Ms2Am5HR/u4cOiSVvYuiyV0.hiH8TPcrtusnA2Mpq2XW1Rw5ta'),
	(31, 'sekretariat@zstio2.katowice.pl', '$2y$10$OHLMg9jqPCfiJ7dZZg6b8On3Vj8OpRw1l0AzTuPZs9jBfwUnpfC2.'),
	(32, 'odrabiamy2p@gmail.com', '$2y$10$eVtaki1NizPhhxPx8bYYRON5MGEXqQLPXopICckjk9Z4E9WGWA18.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

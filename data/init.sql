-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.40 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pawsible
CREATE DATABASE IF NOT EXISTS `pawsible` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pawsible`;

-- Dumping structure for table pawsible.applications
CREATE TABLE IF NOT EXISTS `applications` (
  `name` varchar(50) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `petType` varchar(50) DEFAULT NULL,
  `breed` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pawsible.applications: ~6 rows (approximately)
INSERT INTO `applications` (`name`, `age`, `gender`, `address`, `petType`, `breed`) VALUES
	('chico', 1, 'Male', '29 laurelton', 'Dog', 'pug'),
	('Banjo', 3, 'Male', '12 Downing Street', 'Cat', 'Siamese'),


-- Dumping structure for table pawsible.cats
CREATE TABLE IF NOT EXISTS `cats` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pet_id` int NOT NULL,
  `traits` varchar(255) NOT NULL,
  `interests` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pet_id` (`pet_id`),
  CONSTRAINT `cats_ibfk_1` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pawsible.cats: ~2 rows (approximately)
INSERT INTO `cats` (`id`, `pet_id`, `traits`, `interests`) VALUES
	(1, 3, 'Curious', 'Watching Youtube Baby Stimulation Videos'),
	(2, 4, 'Wise', 'Tea with cheese slices.');

-- Dumping structure for table pawsible.dogs
CREATE TABLE IF NOT EXISTS `dogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pet_id` int NOT NULL,
  `size` varchar(20) NOT NULL,
  `energyLevel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pet_id` (`pet_id`),
  CONSTRAINT `dogs_ibfk_1` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pawsible.dogs: ~2 rows (approximately)
INSERT INTO `dogs` (`id`, `pet_id`, `size`, `energyLevel`) VALUES
	(1, 1, 'Small', 'Minimal'),
	(2, 2, 'Large', 'High');

-- Dumping structure for table pawsible.pets
CREATE TABLE IF NOT EXISTS `pets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `location` varchar(100) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pawsible.pets: ~4 rows (approximately)
INSERT INTO `pets` (`id`, `type`, `name`, `breed`, `age`, `location`, `imagePath`, `price`) VALUES
	(1, 'Dog', 'Chico', 'Pug', 1, 'Cabra', 'images/dogs/chico.jpeg', 2000),
	(2, 'Dog', 'Nala', 'Labrador', 7, 'Finglas', 'images/dogs/lab.jpg', 250),
	(3, 'Cat', 'Bonkle', 'Shorthaired', 2, 'Jobstown', 'images/cats/cat2.jpg', 165),
	(4, 'Cat', 'Theo', 'English', 12, 'Blackrock', 'images/cats/cat3.jpg', 700);

-- Dumping structure for table pawsible.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pawsible.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `username`, `firstName`, `surname`, `email`, `password`, `phoneNumber`, `address`) VALUES
	(1, 'sean', '', '', 'sean17111@gmail.com', '$2y$10$zCQB7115czRTYT79pb67UubnMpmt20K53RZ/xb7ZBW.jSm7qT9CUq', '', '');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

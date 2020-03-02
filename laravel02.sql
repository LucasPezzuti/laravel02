-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `laravel02`;
CREATE DATABASE `laravel02` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `laravel02`;

DROP TABLE IF EXISTS `actores`;
CREATE TABLE `actores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `actores` (`id`, `nombre`, `edad`, `created_at`, `updated_at`) VALUES
(1,	'luis baran',	32,	NULL,	NULL),
(2,	'javier macedo',	84,	NULL,	NULL),
(3,	'brenda lares',	27,	NULL,	NULL);

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `generos`;
CREATE TABLE `generos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `generos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1,	'Peyton Murray',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(2,	'Dorcas Haag',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(3,	'Anahi Ullrich',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(4,	'Favian Wuckert IV',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(5,	'Miss Alysa Paucek',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(6,	'Juanita Stark',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(7,	'Lillian Klein Sr.',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(8,	'Mr. Gabe Roberts',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(9,	'Nicole Lubowitz',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(10,	'Dr. Sid Yost',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(11,	'Mr. Lucious Schuppe DVM',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(12,	'Mrs. Victoria Donnelly MD',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(13,	'Savannah Emard',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(14,	'Eve Koelpin',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(15,	'Sterling Hirthe',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(16,	'Marvin Rolfson',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(17,	'Gwen Kozey PhD',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(18,	'Lula Dare III',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(19,	'Mr. Oscar Hahn IV',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16'),
(20,	'Mabelle Kassulke',	'2020-02-26 21:52:16',	'2020-02-26 21:52:16');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9,	'2014_10_12_000000_create_users_table',	1),
(10,	'2014_10_12_100000_create_password_resets_table',	1),
(11,	'2019_08_19_000000_create_failed_jobs_table',	1),
(12,	'2020_02_26_180642_create_actores_table',	1),
(14,	'2020_02_26_184115_create_generos_table',	2);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2020-03-02 21:30:15

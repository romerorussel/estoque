-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.19-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para estoque_laravel
CREATE DATABASE IF NOT EXISTS `estoque_laravel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `estoque_laravel`;

-- Copiando estrutura para tabela estoque_laravel.back_produtos
CREATE TABLE IF NOT EXISTS `back_produtos` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `valor` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela estoque_laravel.back_produtos: 3 rows
/*!40000 ALTER TABLE `back_produtos` DISABLE KEYS */;
INSERT INTO `back_produtos` (`ID`, `nome`, `valor`, `descricao`, `quantidade`) VALUES
	(1, 'Geladeira', '5900.00', 'Side by Side com gelo na porta', 2),
	(2, 'FogÃ£o', '950.00', 'Painel automÃ¡tico e forno elÃ©trico', 5),
	(3, 'Microondas', '1520.00', 'Manda SMS quando termina de esquentar', 1);
/*!40000 ALTER TABLE `back_produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela estoque_laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela estoque_laravel.migrations: 3 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2017_08_25_145951_create_produtos_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela estoque_laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela estoque_laravel.password_resets: 0 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela estoque_laravel.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` decimal(5,2) NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela estoque_laravel.produtos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `nome`, `valor`, `descricao`, `quantidade`, `created_at`, `updated_at`) VALUES
	(3, 'Microondas', 999.99, 'Manda sms quanto termina de esquentar', 1, NULL, NULL),
	(4, 'Tablet Samsung', 999.99, 'Tela de 9 polegadas', 5, NULL, NULL),
	(5, 'Notebook Dell', 999.99, 'Processador core i7', 11, NULL, NULL),
	(6, 'Zenfone 3', 999.99, 'Solta até raio Laser', 1, NULL, NULL),
	(7, 'Teste', 999.99, 'TESTE', 1, '2017-09-22 18:35:46', '2017-09-22 18:35:46');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela estoque_laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela estoque_laravel.users: 1 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, 'Romero', 'romerorussell@hotmail.com.br', '$2y$10$XsN8ZAnRrruvMuTi5O8yf.aXyZ4fixozEoctG4V5ha3FkFLZjQtb2', '2jc07LN0Z1RhWWS8FReqqL3mkvxwg0PUKirnUVmIebPih2FMTPUg5jylMg3v', '2017-09-18 18:57:15', '2017-09-18 18:57:15');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

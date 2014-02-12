-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2013 at 08:59 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `podcast`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradorpodcast`
--

CREATE TABLE IF NOT EXISTS `administradorpodcast` (
  `idpodcast` bigint(20) NOT NULL AUTO_INCREMENT,
  `podcast_idpodcast` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idpodcast`),
  KEY `podcast_idpodcast_idx` (`podcast_idpodcast`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `administradorpodcast`
--

INSERT INTO `administradorpodcast` (`idpodcast`, `podcast_idpodcast`, `user_id`) VALUES
(1, 1, 5),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`) VALUES
(1, 'Categoria 1'),
(2, 'Categoria 2');

-- --------------------------------------------------------

--
-- Table structure for table `configuracion`
--

CREATE TABLE IF NOT EXISTS `configuracion` (
  `idconfig` bigint(20) NOT NULL AUTO_INCREMENT,
  `cantidaditemsporpagina` bigint(20) NOT NULL,
  `cantidadpodcastporpagina` bigint(20) NOT NULL,
  `plantilladefecto` text NOT NULL,
  `nombresitio` text NOT NULL,
  `sitiohabilitado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idconfig`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `configuracion`
--

INSERT INTO `configuracion` (`idconfig`, `cantidaditemsporpagina`, `cantidadpodcastporpagina`, `plantilladefecto`, `nombresitio`, `sitiohabilitado`) VALUES
(1, 5, 5, 'estilo1.css', 'Podcast', 1);

-- --------------------------------------------------------

--
-- Table structure for table `episodio`
--

CREATE TABLE IF NOT EXISTS `episodio` (
  `idepisodio` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `fuentemp3` varchar(200) DEFAULT NULL,
  `fuenteogg` varchar(50) DEFAULT NULL,
  `podcast_idpodcast` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`idepisodio`),
  KEY `podcast_idpodcast_idx` (`podcast_idpodcast`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `episodio`
--

INSERT INTO `episodio` (`idepisodio`, `nombre`, `fuentemp3`, `fuenteogg`, `podcast_idpodcast`, `created_at`, `updated_at`) VALUES
(1, 'Episodio 1', '9efdc21ea706026e1bfce76de80ad2979dd3f7e9.mp3', '25db7cf8a7fbc50e446e421eca88090a9be91ba2.ogg', 1, '2013-04-01 19:54:50', '2013-04-01 19:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE IF NOT EXISTS `podcast` (
  `idpodcast` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `publicado` tinyint(1) NOT NULL DEFAULT '1',
  `imagen` varchar(100) DEFAULT 'no-image.png',
  `categoria_idcategoria` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`idpodcast`),
  KEY `categoria_idcategoria_idx` (`categoria_idcategoria`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`idpodcast`, `nombre`, `descripcion`, `publicado`, `imagen`, `categoria_idcategoria`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Scorpions', 'Scorpions album', 1, '0152495438b2d6fdc324f12fdc7b2cc596aa7bce.jpg', 1, 2, '2013-04-01 19:31:59', '2013-04-01 19:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_forgot_password`
--

CREATE TABLE IF NOT EXISTS `sf_guard_forgot_password` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `unique_key` varchar(255) DEFAULT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_group_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group_permission` (
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `permission_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `sf_guard_group_permission_permission_id_sf_guard_permission_id` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sf_guard_permission`
--

INSERT INTO `sf_guard_permission` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'El administrador del sistema', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'publicador', 'Cualquier publicador', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_remember_key`
--

CREATE TABLE IF NOT EXISTS `sf_guard_remember_key` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sf_guard_remember_key`
--

INSERT INTO `sf_guard_remember_key` (`id`, `user_id`, `remember_key`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 2, '8innwjlw2bok8s0080gwscossoswgcg', '127.0.0.1', '2013-04-01 15:15:25', '2013-04-01 15:15:25'),
(2, 5, 'iig9afy8ffkgs444wsk444wcgs8c4wk', '127.0.0.1', '2013-04-01 20:51:02', '2013-04-01 20:51:02'),
(3, 6, 'eh6xszg9w2gccckkwgcosg840c84go0', '127.0.0.1', '2013-04-01 20:53:32', '2013-04-01 20:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_super_admin` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_address` (`email_address`),
  UNIQUE KEY `username` (`username`),
  KEY `is_active_idx_idx` (`is_active`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sf_guard_user`
--

INSERT INTO `sf_guard_user` (`id`, `first_name`, `last_name`, `email_address`, `username`, `algorithm`, `salt`, `password`, `is_active`, `is_super_admin`, `last_login`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, 'sadmin@admin.com', 'superadmin', 'sha1', '1a98a8934dde34cbee062a69b02d51e7', '310339e547860f209f660b98a152b236996f1567', 1, 0, '2013-04-01 20:51:25', '2013-04-01 15:15:15', '2013-04-01 20:51:25'),
(5, 'publicador', 'publicador', 'publicador@publicador.com', 'publicador', 'sha1', 'b302c9df9dc78a362cf8ad64c9a5b4bf', 'a13e39ea2f4735e93f5a01d14ec70eb205c4c57f', 1, 0, '2013-04-01 20:51:02', '2013-04-01 20:48:16', '2013-04-01 20:51:02'),
(6, 'administrador', 'administrador', 'administrador@administrador.com', 'administrador', 'sha1', '9e28af1d7f3336277e5a45e6e0bf23e9', 'e58fe2eef05c4488ac42150690dde09ab78c6513', 1, 0, '2013-04-01 20:53:32', '2013-04-01 20:52:58', '2013-04-01 20:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_group` (
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `sf_guard_user_group_group_id_sf_guard_group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_permission` (
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `permission_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `sf_guard_user_permission_permission_id_sf_guard_permission_id` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sf_guard_user_permission`
--

INSERT INTO `sf_guard_user_permission` (`user_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(5, 2, '2013-04-01 20:49:01', '2013-04-01 20:49:01'),
(6, 1, '2013-04-01 20:52:58', '2013-04-01 20:52:58');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administradorpodcast`
--
ALTER TABLE `administradorpodcast`
  ADD CONSTRAINT `administradorpodcast_podcast_idpodcast_podcast_idpodcast` FOREIGN KEY (`podcast_idpodcast`) REFERENCES `podcast` (`idpodcast`),
  ADD CONSTRAINT `administradorpodcast_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`);

--
-- Constraints for table `episodio`
--
ALTER TABLE `episodio`
  ADD CONSTRAINT `episodio_podcast_idpodcast_podcast_idpodcast` FOREIGN KEY (`podcast_idpodcast`) REFERENCES `podcast` (`idpodcast`);

--
-- Constraints for table `podcast`
--
ALTER TABLE `podcast`
  ADD CONSTRAINT `podcast_categoria_idcategoria_categoria_idcategoria` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`),
  ADD CONSTRAINT `podcast_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`);

--
-- Constraints for table `sf_guard_forgot_password`
--
ALTER TABLE `sf_guard_forgot_password`
  ADD CONSTRAINT `sf_guard_forgot_password_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_group_permission`
--
ALTER TABLE `sf_guard_group_permission`
  ADD CONSTRAINT `sf_guard_group_permission_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_group_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_remember_key`
--
ALTER TABLE `sf_guard_remember_key`
  ADD CONSTRAINT `sf_guard_remember_key_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_user_group`
--
ALTER TABLE `sf_guard_user_group`
  ADD CONSTRAINT `sf_guard_user_group_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_group_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_user_permission`
--
ALTER TABLE `sf_guard_user_permission`
  ADD CONSTRAINT `sf_guard_user_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_permission_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

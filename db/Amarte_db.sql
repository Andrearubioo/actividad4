-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2023 a las 23:43:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `amarte`
--
CREATE DATABASE IF NOT EXISTS `amarte` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `amarte`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `celular` int(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `tipo_terapia` varchar(50) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `comentarios` text DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `fecha_nacimiento`, `celular`, `correo`, `tipo_terapia`, `fecha_hora`, `comentarios`, `fecha_creacion`) VALUES
(8, 'Usuario1', 'usuario1', '2000-01-10', 2147483647, 'usuario1@usuario.com', 'Individual', '2023-12-09 12:00:00', 'Usuario 1', '2023-12-08 18:15:58'),
(15, 'Usuario2', 'Usuario', '2000-01-07', 2147483647, 'usuario2@usuario.com', 'Grupal', '2023-12-10 06:00:00', 'Usuario2 terapia grupal', '2023-12-09 22:31:57'),
(22, 'Usuario3', 'usuario3', '2012-12-12', 2147483647, 'usuario3@usuario', 'Individual', '2023-12-12 12:00:00', 'Usuario3', '2023-12-09 22:36:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--

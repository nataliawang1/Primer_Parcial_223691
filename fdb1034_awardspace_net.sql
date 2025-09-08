-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: fdb1034.awardspace.net
-- Tiempo de generación: 08-09-2025 a las 17:17:44
-- Versión del servidor: 8.0.32
-- Versión de PHP: 8.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `4667277_wangeditorial`
--
CREATE DATABASE IF NOT EXISTS `4667277_wangeditorial` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `4667277_wangeditorial`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE `accesos` (
  `id` int NOT NULL,
  `usuario_id` int DEFAULT NULL,
  `tipo_acceso` enum('entrada','salida') NOT NULL,
  `fecha_hora` datetime DEFAULT CURRENT_TIMESTAMP,
  `area_acceso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `tipo` enum('empleado','visitante') NOT NULL,
  `puesto` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` enum('activo','inactivo') DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `contrasena`, `tipo`, `puesto`, `email`, `fecha_registro`, `estado`) VALUES
(1, 'melanie', '$2y$10$orri5B50GRfStJmyNE9ue.CFyKwt9SKxhnZGh4L.j1lJNlXwVeDA.', 'empleado', 'jefa 2', 'melanie@gmail.com', '2025-09-04 01:38:24', 'activo'),
(3, 'Natalia', '$2y$10$v0t4w2Ax4mat0Klv0qT3KOEnb4eGG.aq3T7U8HRTvvWTTDaqae/Fq', 'visitante', '', 'natalia@wang.com', '2025-09-05 16:45:58', 'activo'),
(4, 'Natalia Paola', '$2y$10$L3VBdZ5VK42njoO.kNLWhOJoQHGVVlmZCvwvch9frLq0n589DI//e', 'empleado', 'Editor', 'natalia1@gmail.com', '2025-09-08 15:38:29', 'activo'),
(5, 'maria', '$2y$10$Zbrd4MZi6.aIUDupURkeXOmC2RnIh4MDSPffcdk.Ym6A.ydBRCiOy', 'visitante', '', 'maria@gmail.com', '2025-09-08 15:50:34', 'activo'),
(6, 'nata', '$2y$10$35p.fmkmcfZtPEhFbYfyuen8UomUtNAoiWfIRCewpm.xLV5217/vy', 'empleado', 'Escritora', 'nata@wn.com', '2025-09-08 15:52:07', 'activo'),
(7, 'Pedrito', '$2y$10$rRGsEHBLKC7sboE2GdXhzeL0xwTaOC8sI0JYc8TCvOCN79INVyx0q', 'empleado', 'Jefe', 'pedrito@gmail.com', '2025-09-08 16:18:35', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD CONSTRAINT `accesos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

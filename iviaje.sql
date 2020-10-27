-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2020 a las 00:08:07
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iviaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosusuario`
--

CREATE TABLE `datosusuario` (
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosusuario`
--

INSERT INTO `datosusuario` (`usuario`, `contraseña`, `correo`, `fecha`, `nombre`, `apellidos`) VALUES
('gaonis', '$2y$10$LzhkZYe76xcpa405H6MW6eUbfHrKfLcS6gNOigr.WwkXRuxJE.mtu', 'srgaona1@gmail.com', '0000-00-00', 'Pablo', ''),
('juanan', '$2y$10$Z9TQRhOCDpYIusNXykNsJecwIEKnhbTN4vjjuqM52Lv2400vFMD4q', 'tujuanilloloco@yahoo.es', '0000-00-00', '', ''),
('primo', '$2y$10$ruivUJBPvalpkVpXHSD1G.7pBJFyvjO.XJ5mFc3ntIwhXPW1v0nKC', 'tujuanilloloco@yahoo.es', '0000-00-00', '', ''),
('sevi', '$2y$10$/4kOYGlMlE2/JSa52yYEpeJ3tTAVGOCO/H1hAZk2nzUYDl.o.RyY2', 'tusevi@gmail.com', '0000-00-00', 'Alejandro', ''),
('david', '$2y$10$h.H/6DbLP/66/Ssn.YuYfuGEnQvvsZ.0GYo5tKS96VYIFCKoyX9bW', 'tudavid@gmail.com', '1999-01-02', 'David', 'Muñoz'),
('gerar', '$2y$10$yVG87iP4LQ9H7kki5A8Fbu2Engho/6f./kjSp3Bga0wvCJgcv9hE6', 'g@gmail.com', '2313-02-10', 'gerardo', 'primero'),
('gaonis007', '$2y$10$/uvrhHy1iqLztXw2S85oHOaCF10Kx81.Xp2YL9XmRuoHZuARwkM4e', 'tudavid@gmail.com', '0023-12-31', 'Juan Antonio', 'Rodriguez Martín'),
('PAco', '$2y$10$ZhwGJf.9iVIqKXINl31C2OXZh7XjqCJE9m0Ozfa/fwYm51VgE/GJm', 'pago@gsdfnl.com', '0000-00-00', 'Paco', 'Gomes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `idviaje` int(20) NOT NULL,
  `usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`idviaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
  MODIFY `idviaje` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2022 a las 06:54:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasenia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `dni`, `email`, `contrasenia`) VALUES
(85, 'Enrique', '72854872', 'enrique@gmail.com', '$2y$10$UMfrqK7AgtFXKcCB0icbT.oLbWIxNUTY12ZU43KB1AQ2HisMmxJ3C'),
(86, 'Juan', '70809021', 'juan@gmail.com', '$2y$10$p/Eo54XaWThZL4uMj66BkuiPs5ZwM/bvSYKYXueyGJh00L3p7kzEC'),
(87, 'manuel', '10209878', 'manuel@gmail.com', '$2y$10$HN1kAJLHZvMJl/qhMfRGhesJW/WwdIXVmayl95THBzN/yYm38YojW'),
(88, 'Dadwin', '12345678', 'dadwin@gmail.com', '$2y$10$oklx5aCmSWzpFtOywV/DBuRJYL1H3J.g9djYSx4.ZDQ/5utQkneAu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2026 a las 01:27:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi-tienda-php_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(15) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `cedula` varchar(128) NOT NULL,
  `contraseña` varchar(64) NOT NULL,
  `correo` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `cedula`, `contraseña`, `correo`) VALUES
(7, 'Carlos Antonio ', '207700468', 'aefd843245aacf390df832f2d491dc0c199d20aef0cf53572ed106ff5082dd8e', 'charlie97lm@gmail.com'),
(8, 'Juan Perez', '0102030401', '5dbee2c2cc6991e57daf8bcc8cda2d10aa0002e445ea12b6982733ec3c156016', 'juan.perez@gmail.com'),
(9, 'María González', '0203040502', 'f031043b06073ab608820585d200bd6c336dc1653832d09842e336a75c85ffbd', 'maria.gonzalez@gmail.com'),
(10, 'Carlos Rodríguez', '0304050603', 'f2cc92a7417b5c89cdc538c0d12c0730420b42a448eafee9b7ddbfca1c85e630', 'carlos.rod@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

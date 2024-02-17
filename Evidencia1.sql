-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-02-2024 a las 19:54:12
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Evidencia1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mascota`
--

CREATE TABLE `Mascota` (
  `ID` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Refugio` text NOT NULL,
  `Raza` text NOT NULL,
  `Tamaño` float NOT NULL,
  `Edad` int(11) NOT NULL,
  `Genero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Mascota`
--

INSERT INTO `Mascota` (`ID`, `Nombre`, `Refugio`, `Raza`, `Tamaño`, `Edad`, `Genero`) VALUES
(1, 'Milaneso', 'Campo del sol', 'Pomerania', 0.7, 1, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Refugio`
--

CREATE TABLE `Refugio` (
  `ID` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Localización` text NOT NULL,
  `Mascota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Refugio`
--

INSERT INTO `Refugio` (`ID`, `Nombre`, `Localización`, `Mascota`) VALUES
(1, 'Campo del sol', 'Monterrey N.L.', 'Milaneso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Solicitud`
--

CREATE TABLE `Solicitud` (
  `ID` int(11) NOT NULL,
  `Usuario` text NOT NULL,
  `Mascota` text NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Solicitud`
--

INSERT INTO `Solicitud` (`ID`, `Usuario`, `Mascota`, `Fecha`) VALUES
(1, 'Patricio Antonio Gonzales Diaz', 'Milaneso', '2024-02-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `ID` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Edad` int(11) NOT NULL,
  `Genero` text NOT NULL,
  `Localización` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`ID`, `Nombre`, `Edad`, `Genero`, `Localización`) VALUES
(1, 'Patricio Antonio Gonzales Diaz', 20, 'Masculino', 'Monterrey');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Mascota`
--
ALTER TABLE `Mascota`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Refugio`
--
ALTER TABLE `Refugio`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Solicitud`
--
ALTER TABLE `Solicitud`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Mascota`
--
ALTER TABLE `Mascota`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Refugio`
--
ALTER TABLE `Refugio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Solicitud`
--
ALTER TABLE `Solicitud`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

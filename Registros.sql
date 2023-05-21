-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-05-2023 a las 18:16:55
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
-- Base de datos: `Laboratorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Registros`
--

CREATE TABLE `Registros` (
  `ID` int(255) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `primerApellido` varchar(20) NOT NULL,
  `segundoApellido` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contrasena` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Registros`
--

INSERT INTO `Registros` (`ID`, `nombre`, `primerApellido`, `segundoApellido`, `email`, `contrasena`) VALUES
(1, 'Alejandra', 'Morales', 'Robledo', 'alexamrob@gmail.com', '1233'),
(2, 'Jorge', 'Mayo', 'Gomez', 'jmayo.@gmail.com', '3345'),
(3, 'Paty', 'Guasso', 'Perez', 'patygg@hotmail.com', 'asdf'),
(4, 'Maria', 'Perez', 'Torres', 'mariapt@yahoo.net', 'maria123'),
(5, 'Daniel', 'Duran', 'Sanchez', 'dannydd@gmail.com', 'danny'),
(6, 'Ernesto', 'Mendieta', 'Suarez', 'netosuarez@gmail.com', 'EMS1'),
(7, 'Paola', 'Romero', 'Mendoza', 'Paolaromen@gmail.com', 'pinguino'),
(8, 'Roberto', 'Orozco', 'Gonzalez', 'Robertorozco@hotmail.com', 'robrtt'),
(9, 'Ana', 'Orendain', 'Paredes', 'anaorendain@gmail.com', 'Orendain'),
(10, 'Vanessa', 'Mayer', 'Flores', 'vanmayer@hotmail.com', 'mayer123'),
(11, 'Rosario', 'De la Rosa', 'Ramirez', 'Rosariodelarosa@gmail.com', 'rosarosa'),
(12, 'Rafael', 'De la Torre', 'Lopez', 'Rafadlt@gmail.com', 'rafa123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Registros`
--
ALTER TABLE `Registros`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Registros`
--
ALTER TABLE `Registros`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

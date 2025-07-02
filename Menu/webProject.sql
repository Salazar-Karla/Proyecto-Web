-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-06-2025 a las 20:37:22
-- Versión del servidor: 8.0.42-0ubuntu0.24.04.1
-- Versión de PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webProject`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Administrador`
--

CREATE TABLE `Administrador` (
  `id_admin` int NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ap_Pat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ap_Mat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `boleta` int NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `contraseña` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `imagen` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `Administrador`
--

INSERT INTO `Administrador` (`id_admin`, `nombre`, `ap_Pat`, `ap_Mat`, `boleta`, `correo`, `contraseña`, `imagen`) VALUES
(1, 'Another', 'X', 'Y', 1, 'hd.tetuan5002@gmail.com', 'AnotherPass', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE `Alumno` (
  `id_alumno` int NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ap_Pat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ap_Mat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `boleta` int NOT NULL,
  `grupo` int DEFAULT NULL,
  `progreso` int DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `contraseña` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `imagen` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`id_alumno`, `nombre`, `ap_Pat`, `ap_Mat`, `boleta`, `grupo`, `progreso`, `correo`, `contraseña`, `imagen`) VALUES
(1, 'David', 'Gonzalez', 'Tetuan', 2024630052, 1, NULL, 'hd.gt2005@gmail.com', 'Nero_3310', NULL),
(2, 'Carlos', 'Foyo', 'Castro', 2024516294, 1, NULL, 'charlygamerpro@gmail.com', 'CGP1', NULL),
(3, 'Jonathan', 'Martinez', 'Chavez', 741852963, NULL, NULL, 'joyoMarcha@gmail.com', 'ESCOM987', NULL),
(4, 'Juan', 'Camacho', 'Canto', 329316444, NULL, NULL, 'JCC123@gmail.com', 'pescado147', NULL),
(5, 'Juan', 'Camacho', 'Canto', 191920696, NULL, NULL, 'JCC123@gmail.com', 'pescado147', NULL),
(6, 'Luca', 'Barcenas', 'Pineda', 291967670, 1, NULL, 'Luca123546@gmail.com', '963852741', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Grupo`
--

CREATE TABLE `Grupo` (
  `id_grupo` int NOT NULL,
  `id_profe` int NOT NULL,
  `id_alumno` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Profesor`
--

CREATE TABLE `Profesor` (
  `id_profe` int NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ap_Pat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ap_Mat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `boleta` int NOT NULL,
  `grupo` int NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `contraseña` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `imagen` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `Profesor`
--

INSERT INTO `Profesor` (`id_profe`, `nombre`, `ap_Pat`, `ap_Mat`, `boleta`, `grupo`, `correo`, `contraseña`, `imagen`) VALUES
(1, 'Jose', 'Gonzalez', 'Sanchez', 123456789, 1, 'jmGonzSanzh@gmail.com', 'sanchez74', NULL),
(2, 'Brenda', 'Millan', 'Sanchez', 2024630500, 2, 'brenda@gmail.com', '123', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reporte`
--

CREATE TABLE `Reporte` (
  `id` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `id_admin` int NOT NULL,
  `direccion` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Administrador`
--
ALTER TABLE `Administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `Profesor`
--
ALTER TABLE `Profesor`
  ADD PRIMARY KEY (`id_profe`);

--
-- Indices de la tabla `Reporte`
--
ALTER TABLE `Reporte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Administrador`
--
ALTER TABLE `Administrador`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  MODIFY `id_alumno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `Profesor`
--
ALTER TABLE `Profesor`
  MODIFY `id_profe` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

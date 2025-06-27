-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-06-2025 a las 06:59:42
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_academico`
--
CREATE DATABASE IF NOT EXISTS `sistema_academico` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sistema_academico`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `id_usuario`, `telefono`) VALUES
(1, 1, '5544556677'),
(2, 2, '5544556678'),
(3, 3, '5544556679'),
(4, 4, '5544556670'),
(5, 5, '5544556671'),
(6, 99, '5564889087');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_grupo` (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `id_grupo`, `id_usuario`) VALUES
(2, 1, 9),
(3, 1, 10),
(4, 1, 11),
(5, 1, 12),
(6, 1, 13),
(7, 1, 14),
(8, 1, 15),
(9, 1, 16),
(10, 1, 17),
(11, 1, 18),
(12, 1, 19),
(13, 1, 20),
(14, 1, 21),
(15, 1, 22),
(16, 1, 23),
(17, 1, 24),
(18, 1, 25),
(19, 1, 26),
(20, 1, 27),
(21, 1, 28),
(22, 1, 29),
(23, 1, 30),
(24, 1, 31),
(25, 1, 32),
(26, 1, 33),
(27, 1, 34),
(28, 1, 35),
(29, 1, 36),
(30, 1, 37),
(31, 2, 38),
(32, 2, 39),
(33, 2, 40),
(34, 2, 41),
(35, 2, 42),
(36, 2, 43),
(37, 2, 44),
(38, 2, 45),
(39, 2, 46),
(40, 2, 47),
(41, 2, 48),
(42, 2, 49),
(43, 2, 50),
(44, 2, 51),
(45, 2, 52),
(46, 2, 53),
(47, 2, 54),
(48, 2, 55),
(49, 2, 56),
(50, 2, 57),
(51, 2, 58),
(52, 2, 59),
(53, 2, 60),
(54, 2, 61),
(55, 2, 62),
(56, 2, 63),
(57, 2, 64),
(58, 2, 65),
(59, 2, 66),
(60, 2, 67),
(61, 3, 68),
(62, 3, 69),
(63, 3, 70),
(64, 3, 71),
(65, 3, 72),
(66, 3, 73),
(67, 3, 74),
(68, 3, 75),
(69, 3, 76),
(70, 3, 77),
(71, 3, 78),
(72, 3, 79),
(73, 3, 80),
(74, 3, 81),
(75, 3, 82),
(76, 3, 83),
(77, 3, 84),
(78, 3, 85),
(79, 3, 86),
(80, 3, 87),
(81, 3, 88),
(82, 3, 89),
(83, 3, 90),
(84, 3, 91),
(85, 3, 92),
(86, 3, 93),
(87, 3, 94),
(88, 3, 95),
(89, 3, 96),
(90, 3, 97),
(91, 3, 98),
(92, 1, 101);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audio`
--

DROP TABLE IF EXISTS `audio`;
CREATE TABLE IF NOT EXISTS `audio` (
  `id_audio` int(11) NOT NULL,
  `formato` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_audio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque`
--

DROP TABLE IF EXISTS `bloque`;
CREATE TABLE IF NOT EXISTS `bloque` (
  `id_bloque` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_bloque` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_bloque`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bloque`
--

INSERT INTO `bloque` (`id_bloque`, `nombre_bloque`) VALUES
(1, 'Bloque 1'),
(2, 'Bloque 2'),
(3, 'Bloque 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_contenido`
--

DROP TABLE IF EXISTS `calificacion_contenido`;
CREATE TABLE IF NOT EXISTS `calificacion_contenido` (
  `id_calificacion_cont` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_cont` int(11) DEFAULT NULL,
  `calificacion` decimal(5,2) DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id_calificacion_cont`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_cont` (`id_cont`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_examen`
--

DROP TABLE IF EXISTS `calificacion_examen`;
CREATE TABLE IF NOT EXISTS `calificacion_examen` (
  `id_calif_examen` int(11) NOT NULL AUTO_INCREMENT,
  `id_examen` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `calificacion` decimal(5,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_calif_examen`),
  KEY `id_examen` (`id_examen`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

DROP TABLE IF EXISTS `contenido`;
CREATE TABLE IF NOT EXISTS `contenido` (
  `id_contenido` int(11) NOT NULL AUTO_INCREMENT,
  `id_bloque` int(11) DEFAULT NULL,
  `tema` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `objetivo` text,
  PRIMARY KEY (`id_contenido`),
  KEY `id_bloque` (`id_bloque`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id_contenido`, `id_bloque`, `tema`, `descripcion`, `objetivo`) VALUES
(1, 2, 'Continuemos con longitudes', 'logitudes 2', 'Entender las longitudes'),
(2, 2, 'Más sucesos en el tiempo', 'tiempo', 'Entender el paso del tiempo'),
(3, 2, 'Hasta 50', '50', 'contar hasta 50'),
(4, 2, 'Más de figuras geométricas', 'geometria', 'Entender las figuras'),
(5, 2, 'Experimentar con la capacidad', 'volumen', 'Entender el volumen'),
(6, 2, 'Otra vez 50', 'repaso 50', 'Repasar el conteo hasta 50'),
(7, 2, 'Construcciones geométricas', 'geometria 2', 'Entender las figuras compuestas'),
(8, 2, 'Organización de datos', 'Organizar dato', 'Organizar datos'),
(9, 2, 'Hasta 100', 'contar a 100', 'Aprender a contar hasta 100'),
(10, 2, 'Experimentar con el peso', 'peso', 'Entender el peso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_profesor`
--

DROP TABLE IF EXISTS `contenido_profesor`;
CREATE TABLE IF NOT EXISTS `contenido_profesor` (
  `id_contProfesor` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_contenido` int(11) DEFAULT NULL,
  `veces_repetido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contProfesor`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_contenido` (`id_contenido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diapositivas`
--

DROP TABLE IF EXISTS `diapositivas`;
CREATE TABLE IF NOT EXISTS `diapositivas` (
  `id_diapositiva` int(11) NOT NULL,
  `formato` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_diapositiva`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `nombreExamen` varchar(100) DEFAULT NULL,
  `id_contenido` int(11) DEFAULT NULL,
  `cantidad_preguntas` int(11) DEFAULT '10',
  PRIMARY KEY (`id_examen`),
  KEY `id_contenido` (`id_contenido`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`id_examen`, `nombreExamen`, `id_contenido`, `cantidad_preguntas`) VALUES
(1, 'Examen de longitudes', 1, 10),
(2, 'Examen de sucesos en el tiempo', 2, 10),
(3, 'Examen de hasta 50', 3, 10),
(4, 'Examen de más de figuras geométricas', 4, 10),
(5, 'Examen de experimentar con la capacidad', 5, 10),
(6, 'Examen de otra vez 50', 6, 10),
(7, 'Examen de construcciones geométricas', 7, 10),
(8, 'Examen de organización de datos', 8, 10),
(9, 'Examen de hasta 100', 9, 10),
(10, 'Examen de experimentar con el peso', 10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `id_profesor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`),
  KEY `id_profesor` (`id_profesor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `id_profesor`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_bloques`
--

DROP TABLE IF EXISTS `grupo_bloques`;
CREATE TABLE IF NOT EXISTS `grupo_bloques` (
  `id_grupobloque` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(11) DEFAULT NULL,
  `id_bloque` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_grupobloque`),
  KEY `id_grupo` (`id_grupo`),
  KEY `id_bloque` (`id_bloque`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo_bloques`
--

INSERT INTO `grupo_bloques` (`id_grupobloque`, `id_grupo`, `id_bloque`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 3, 1),
(5, 3, 2),
(6, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

DROP TABLE IF EXISTS `libro`;
CREATE TABLE IF NOT EXISTS `libro` (
  `id_libro` int(11) NOT NULL,
  `formato` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

DROP TABLE IF EXISTS `pregunta`;
CREATE TABLE IF NOT EXISTS `pregunta` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `id_examen` int(11) DEFAULT NULL,
  `item_3` varchar(100) DEFAULT NULL,
  `pregunta` text,
  `opcionA` text,
  `opcionB` text,
  `opcionC` text,
  `opcionD` text,
  `respuesta_correcta` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta`),
  KEY `id_examen` (`id_examen`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregunta`, `id_examen`, `item_3`, `pregunta`, `opcionA`, `opcionB`, `opcionC`, `opcionD`, `respuesta_correcta`) VALUES
(1, 1, NULL, '¿Qué unidad se usa para medir una carretera?', 'Centímetros', 'Milímetros', 'Kilómetros', 'Litros', 'C'),
(2, 1, NULL, '¿Qué instrumento se usa para medir una mesa?', 'Regla', 'Termómetro', 'Balanza', 'Compás', 'A'),
(3, 1, NULL, '¿Cuál es más largo?', 'Una hoja', 'Un autobús', 'Una taza', 'Un lápiz', 'B'),
(4, 1, NULL, '¿Cuántos centímetros hay en un metro?', '10', '100', '1000', '1', 'B'),
(5, 1, NULL, '¿Qué se usa para medir la altura de una persona?', 'Cinta métrica', 'Balanza', 'Lupa', 'Microscopio', 'A'),
(6, 1, NULL, '¿Qué unidad se usa para medir una carretera?', 'Pie', 'Decimetros', 'Millas', 'Litros', 'C'),
(7, 1, NULL, '¿Qué instrumento se usa para medir una mesa?', 'Regla', 'Termómetro', 'Balanza', 'Compás', 'A'),
(8, 1, NULL, '¿Cuál es más largo?', 'Una gata', 'Un rinoceronte', 'Una zorra', 'Una abeja', 'B'),
(9, 1, NULL, '¿Cuántos milímetros hay en un metro?', '10', '1000', '10000', '1', 'B'),
(10, 1, NULL, '¿Qué se usa para medir la altura de una persona?', 'Metro', 'Balanza', 'Lupa', 'Microscopio', 'A'),
(11, 1, NULL, '¿Qué unidad se usa para medir una carretera?', 'Centímetros', 'Milímetros', 'Kilómetros', 'Litros', 'C'),
(12, 1, NULL, '¿Qué instrumento se usa para medir una mesa?', 'Regla', 'Termómetro', 'Balanza', 'Compás', 'A'),
(13, 1, NULL, '¿Cuál es más largo?', 'Una hoja', 'Un autobús', 'Una taza', 'Un lápiz', 'B'),
(14, 1, NULL, '¿Cuántos centímetros hay en 3 metro?', '10', '300', '100', '1', 'B'),
(15, 1, NULL, '¿Qué se usa para medir la altura de una persona?', 'Regla', 'Balanza', 'Lupa', 'Microscopio', 'A'),
(16, 1, NULL, '¿Qué unidad se usa para medir una carretera?', 'Centímetros', 'Milímetros', 'Kilómetros', 'Litros', 'C'),
(17, 1, NULL, '¿Qué instrumento se usa para medir una mesa?', 'Regla', 'Termómetro', 'Balanza', 'Compás', 'A'),
(18, 1, NULL, '¿Cuál es más largo?', 'Una hoja', 'Un autobús', 'Una taza', 'Un lápiz', 'B'),
(19, 1, NULL, '¿Cuántos decimetros hay en un metro?', '1', '10', '1000', '0', 'B'),
(20, 1, NULL, '¿Qué se usa para medir la altura de una persona?', 'tallimetro', 'Balanza', 'Lupa', 'Microscopio', 'A'),
(21, 1, NULL, '¿Qué unidad se usa para medir una carretera?', 'Centímetros', 'Milímetros', 'Kilómetros', 'Litros', 'C'),
(22, 1, NULL, '¿Qué instrumento se usa para medir una mesa?', 'Regla', 'Termómetro', 'Balanza', 'Compás', 'A'),
(23, 1, NULL, '¿Cuál es más largo?', 'Una hoja', 'Un autobús', 'Una taza', 'Un lápiz', 'B'),
(24, 1, NULL, '¿Cuántos centímetros hay en un metro?', '10', '100', '1000', '1', 'B'),
(25, 1, NULL, '¿Qué se usa para medir la altura de una persona?', 'Cinta métrica', 'Balanza', 'Lupa', 'Microscopio', 'A'),
(26, 2, NULL, '¿Qué día viene después del lunes?', 'Domingo', 'Martes', 'Viernes', 'Sábado', 'B'),
(27, 2, NULL, '¿Qué mes viene antes de abril?', 'Febrero', 'Enero', 'Marzo', 'Mayo', 'C'),
(28, 2, NULL, '¿Cuántos días tiene una semana?', '5', '6', '7', '8', 'C'),
(29, 2, NULL, '¿Qué hacemos al final del día?', 'Desayunar', 'Ir a dormir', 'Jugar', 'Ir a la escuela', 'B'),
(30, 2, NULL, '¿Cuándo celebramos el Día de la Independencia en México?', '15 de agosto', '16 de septiembre', '1 de mayo', '5 de febrero', 'B'),
(31, 2, NULL, '¿Qué día viene después del lunes?', 'Domingo', 'Martes', 'Viernes', 'Sábado', 'B'),
(32, 2, NULL, '¿Qué mes viene antes de abril?', 'Febrero', 'Enero', 'Marzo', 'Mayo', 'C'),
(33, 2, NULL, '¿Cuántos días tiene una semana?', '5', '6', '7', '8', 'C'),
(34, 2, NULL, '¿Qué hacemos al final del día?', 'Desayunar', 'Ir a dormir', 'Jugar', 'Ir a la escuela', 'B'),
(35, 2, NULL, '¿Cuándo celebramos el Día de la Independencia en México?', '15 de agosto', '16 de septiembre', '1 de mayo', '5 de febrero', 'B'),
(36, 2, NULL, '¿Qué día viene después del lunes?', 'Domingo', 'Martes', 'Viernes', 'Sábado', 'B'),
(37, 2, NULL, '¿Qué mes viene antes de abril?', 'Febrero', 'Enero', 'Marzo', 'Mayo', 'C'),
(38, 2, NULL, '¿Cuántos días tiene una semana?', '5', '6', '7', '8', 'C'),
(39, 2, NULL, '¿Qué hacemos al final del día?', 'Desayunar', 'Ir a dormir', 'Jugar', 'Ir a la escuela', 'B'),
(40, 2, NULL, '¿Cuándo celebramos el Día de la Independencia en México?', '15 de agosto', '16 de septiembre', '1 de mayo', '5 de febrero', 'B'),
(41, 2, NULL, '¿Qué día viene después del lunes?', 'Domingo', 'Martes', 'Viernes', 'Sábado', 'B'),
(42, 2, NULL, '¿Qué mes viene antes de abril?', 'Febrero', 'Enero', 'Marzo', 'Mayo', 'C'),
(43, 2, NULL, '¿Cuántos días tiene una semana?', '5', '6', '7', '8', 'C'),
(44, 2, NULL, '¿Qué hacemos al final del día?', 'Desayunar', 'Ir a dormir', 'Jugar', 'Ir a la escuela', 'B'),
(45, 2, NULL, '¿Cuándo celebramos el Día de la Independencia en México?', '15 de agosto', '16 de septiembre', '1 de mayo', '5 de febrero', 'B'),
(46, 2, NULL, '¿Qué día viene después del lunes?', 'Domingo', 'Martes', 'Viernes', 'Sábado', 'B'),
(47, 2, NULL, '¿Qué mes viene antes de abril?', 'Febrero', 'Enero', 'Marzo', 'Mayo', 'C'),
(48, 2, NULL, '¿Cuántos días tiene una semana?', '5', '6', '7', '8', 'C'),
(49, 2, NULL, '¿Qué hacemos al final del día?', 'Desayunar', 'Ir a dormir', 'Jugar', 'Ir a la escuela', 'B'),
(50, 2, NULL, '¿Cuándo celebramos el Día de la Independencia en México?', '15 de agosto', '16 de septiembre', '1 de mayo', '5 de febrero', 'B'),
(51, 3, NULL, '¿Cuál número es menor?', '48', '50', '49', '51', 'A'),
(52, 3, NULL, '¿Qué número viene antes del 30?', '28', '29', '31', '32', 'B'),
(53, 3, NULL, '¿Cuál de estos es mayor?', '45', '49', '39', '29', 'B'),
(54, 3, NULL, '¿Cuál número no pertenece al grupo?', '20', '35', '48', '55', 'D'),
(55, 3, NULL, '¿Qué número está entre 10 y 15?', '9', '16', '12', '18', 'C'),
(56, 3, NULL, '¿Cuál número es menor?', '48', '50', '49', '51', 'A'),
(57, 3, NULL, '¿Qué número viene antes del 30?', '28', '29', '31', '32', 'B'),
(58, 3, NULL, '¿Cuál de estos es mayor?', '45', '49', '39', '29', 'B'),
(59, 3, NULL, '¿Cuál número no pertenece al grupo?', '20', '35', '48', '55', 'D'),
(60, 3, NULL, '¿Qué número está entre 10 y 15?', '9', '16', '12', '18', 'C'),
(61, 3, NULL, '¿Cuál número es menor?', '48', '50', '49', '51', 'A'),
(62, 3, NULL, '¿Qué número viene antes del 30?', '28', '29', '31', '32', 'B'),
(63, 3, NULL, '¿Cuál de estos es mayor?', '45', '49', '39', '29', 'B'),
(64, 3, NULL, '¿Cuál número no pertenece al grupo?', '20', '35', '48', '55', 'D'),
(65, 3, NULL, '¿Qué número está entre 10 y 15?', '9', '16', '12', '18', 'C'),
(66, 3, NULL, '¿Cuál número es menor?', '48', '50', '49', '51', 'A'),
(67, 3, NULL, '¿Qué número viene antes del 30?', '28', '29', '31', '32', 'B'),
(68, 3, NULL, '¿Cuál de estos es mayor?', '45', '49', '39', '29', 'B'),
(69, 3, NULL, '¿Cuál número no pertenece al grupo?', '20', '35', '48', '55', 'D'),
(70, 3, NULL, '¿Qué número está entre 10 y 15?', '9', '16', '12', '18', 'C'),
(71, 3, NULL, '¿Cuál número es menor?', '48', '50', '49', '51', 'A'),
(72, 3, NULL, '¿Qué número viene antes del 30?', '28', '29', '31', '32', 'B'),
(73, 3, NULL, '¿Cuál de estos es mayor?', '45', '49', '39', '29', 'B'),
(74, 3, NULL, '¿Cuál número no pertenece al grupo?', '20', '35', '48', '55', 'D'),
(75, 3, NULL, '¿Qué número está entre 10 y 15?', '9', '16', '12', '18', 'C'),
(76, 4, NULL, '¿Cuántos lados tiene un triángulo?', '2', '3', '4', '5', 'B'),
(77, 4, NULL, '¿Qué figura tiene todos sus lados iguales y 4 ángulos?', 'Círculo', 'Rectángulo', 'Cuadrado', 'Triángulo', 'C'),
(78, 4, NULL, '¿Cuál de estas es una figura redonda?', 'Triángulo', 'Cuadrado', 'Círculo', 'Pentágono', 'C'),
(79, 4, NULL, '¿Qué figura tiene 5 lados?', 'Hexágono', 'Pentágono', 'Cuadrado', 'Círculo', 'B'),
(80, 4, NULL, '¿Cuál figura tiene 6 lados?', 'Hexágono', 'Triángulo', 'Rombo', 'Rectángulo', 'A'),
(81, 4, NULL, '¿Cuántos lados tiene un triángulo?', '2', '3', '4', '5', 'B'),
(82, 4, NULL, '¿Qué figura tiene todos sus lados iguales y 4 ángulos?', 'Círculo', 'Rectángulo', 'Cuadrado', 'Triángulo', 'C'),
(83, 4, NULL, '¿Cuál de estas es una figura redonda?', 'Triángulo', 'Cuadrado', 'Círculo', 'Pentágono', 'C'),
(84, 4, NULL, '¿Qué figura tiene 5 lados?', 'Hexágono', 'Pentágono', 'Cuadrado', 'Círculo', 'B'),
(85, 4, NULL, '¿Cuál figura tiene 6 lados?', 'Hexágono', 'Triángulo', 'Rombo', 'Rectángulo', 'A'),
(86, 4, NULL, '¿Cuántos lados tiene un triángulo?', '2', '3', '4', '5', 'B'),
(87, 4, NULL, '¿Qué figura tiene todos sus lados iguales y 4 ángulos?', 'Círculo', 'Rectángulo', 'Cuadrado', 'Triángulo', 'C'),
(88, 4, NULL, '¿Cuál de estas es una figura redonda?', 'Triángulo', 'Cuadrado', 'Círculo', 'Pentágono', 'C'),
(89, 4, NULL, '¿Qué figura tiene 5 lados?', 'Hexágono', 'Pentágono', 'Cuadrado', 'Círculo', 'B'),
(90, 4, NULL, '¿Cuál figura tiene 6 lados?', 'Hexágono', 'Triángulo', 'Rombo', 'Rectángulo', 'A'),
(91, 4, NULL, '¿Cuántos lados tiene un triángulo?', '2', '3', '4', '5', 'B'),
(92, 4, NULL, '¿Qué figura tiene todos sus lados iguales y 4 ángulos?', 'Círculo', 'Rectángulo', 'Cuadrado', 'Triángulo', 'C'),
(93, 4, NULL, '¿Cuál de estas es una figura redonda?', 'Triángulo', 'Cuadrado', 'Círculo', 'Pentágono', 'C'),
(94, 4, NULL, '¿Qué figura tiene 5 lados?', 'Hexágono', 'Pentágono', 'Cuadrado', 'Círculo', 'B'),
(95, 4, NULL, '¿Cuál figura tiene 6 lados?', 'Hexágono', 'Triángulo', 'Rombo', 'Rectángulo', 'A'),
(96, 4, NULL, '¿Cuántos lados tiene un triángulo?', '2', '3', '4', '5', 'B'),
(97, 4, NULL, '¿Qué figura tiene todos sus lados iguales y 4 ángulos?', 'Círculo', 'Rectángulo', 'Cuadrado', 'Triángulo', 'C'),
(98, 4, NULL, '¿Cuál de estas es una figura redonda?', 'Triángulo', 'Cuadrado', 'Círculo', 'Pentágono', 'C'),
(99, 4, NULL, '¿Qué figura tiene 5 lados?', 'Hexágono', 'Pentágono', 'Cuadrado', 'Círculo', 'B'),
(100, 4, NULL, '¿Cuál figura tiene 6 lados?', 'Hexágono', 'Triángulo', 'Rombo', 'Rectángulo', 'A'),
(101, 5, NULL, '¿Con qué se mide la capacidad de una botella?', 'Gramos', 'Litros', 'Metros', 'Kilos', 'B'),
(102, 5, NULL, '¿Qué recipiente tiene mayor capacidad?', 'Taza', 'Cubo', 'Plato', 'Botella pequeña', 'B'),
(103, 5, NULL, '¿Dónde caben más cosas?', 'Vaso', 'Balde', 'Cuchara', 'Taza', 'B'),
(104, 5, NULL, '¿Qué objeto se usa para verter líquidos?', 'Colador', 'Cuchillo', 'Jarra', 'Plato', 'C'),
(105, 5, NULL, '¿Qué unidad usarías para medir la capacidad de una alberca?', 'Mililitros', 'Kilómetros', 'Litros', 'Centímetros', 'C'),
(106, 5, NULL, '¿Con qué se mide la capacidad de una botella?', 'Gramos', 'Litros', 'Metros', 'Kilos', 'B'),
(107, 5, NULL, '¿Qué recipiente tiene mayor capacidad?', 'Taza', 'Cubo', 'Plato', 'Botella pequeña', 'B'),
(108, 5, NULL, '¿Dónde caben más cosas?', 'Vaso', 'Balde', 'Cuchara', 'Taza', 'B'),
(109, 5, NULL, '¿Qué objeto se usa para verter líquidos?', 'Colador', 'Cuchillo', 'Jarra', 'Plato', 'C'),
(110, 5, NULL, '¿Qué unidad usarías para medir la capacidad de una alberca?', 'Mililitros', 'Kilómetros', 'Litros', 'Centímetros', 'C'),
(111, 5, NULL, '¿Con qué se mide la capacidad de una botella?', 'Gramos', 'Litros', 'Metros', 'Kilos', 'B'),
(112, 5, NULL, '¿Qué recipiente tiene mayor capacidad?', 'Taza', 'Cubo', 'Plato', 'Botella pequeña', 'B'),
(113, 5, NULL, '¿Dónde caben más cosas?', 'Vaso', 'Balde', 'Cuchara', 'Taza', 'B'),
(114, 5, NULL, '¿Qué objeto se usa para verter líquidos?', 'Colador', 'Cuchillo', 'Jarra', 'Plato', 'C'),
(115, 5, NULL, '¿Qué unidad usarías para medir la capacidad de una alberca?', 'Mililitros', 'Kilómetros', 'Litros', 'Centímetros', 'C'),
(116, 5, NULL, '¿Con qué se mide la capacidad de una botella?', 'Gramos', 'Litros', 'Metros', 'Kilos', 'B'),
(117, 5, NULL, '¿Qué recipiente tiene mayor capacidad?', 'Taza', 'Cubo', 'Plato', 'Botella pequeña', 'B'),
(118, 5, NULL, '¿Dónde caben más cosas?', 'Vaso', 'Balde', 'Cuchara', 'Taza', 'B'),
(119, 5, NULL, '¿Qué objeto se usa para verter líquidos?', 'Colador', 'Cuchillo', 'Jarra', 'Plato', 'C'),
(120, 5, NULL, '¿Qué unidad usarías para medir la capacidad de una alberca?', 'Mililitros', 'Kilómetros', 'Litros', 'Centímetros', 'C'),
(121, 5, NULL, '¿Con qué se mide la capacidad de una botella?', 'Gramos', 'Litros', 'Metros', 'Kilos', 'B'),
(122, 5, NULL, '¿Qué recipiente tiene mayor capacidad?', 'Taza', 'Cubo', 'Plato', 'Botella pequeña', 'B'),
(123, 5, NULL, '¿Dónde caben más cosas?', 'Vaso', 'Balde', 'Cuchara', 'Taza', 'B'),
(124, 5, NULL, '¿Qué objeto se usa para verter líquidos?', 'Colador', 'Cuchillo', 'Jarra', 'Plato', 'C'),
(125, 5, NULL, '¿Qué unidad usarías para medir la capacidad de una alberca?', 'Mililitros', 'Kilómetros', 'Litros', 'Centímetros', 'C'),
(126, 6, NULL, '¿Cuánto es 25 + 25?', '50', '45', '55', '40', 'A'),
(127, 6, NULL, '¿Qué número sumado con 20 da 50?', '30', '25', '40', '35', 'A'),
(128, 6, NULL, '¿Qué número falta: 10, 20, 30, ___, 50?', '35', '45', '40', '25', 'C'),
(129, 6, NULL, '¿Cuál de estos es igual a 5 veces 10?', '50', '40', '60', '55', 'A'),
(130, 6, NULL, '¿Qué número es la mitad de 100?', '25', '75', '50', '60', 'C'),
(131, 6, NULL, '¿Cuánto es 25 + 25?', '50', '45', '55', '40', 'A'),
(132, 6, NULL, '¿Qué número sumado con 20 da 50?', '30', '25', '40', '35', 'A'),
(133, 6, NULL, '¿Qué número falta: 10, 20, 30, ___, 50?', '35', '45', '40', '25', 'C'),
(134, 6, NULL, '¿Cuál de estos es igual a 5 veces 10?', '50', '40', '60', '55', 'A'),
(135, 6, NULL, '¿Qué número es la mitad de 100?', '25', '75', '50', '60', 'C'),
(136, 6, NULL, '¿Cuánto es 25 + 25?', '50', '45', '55', '40', 'A'),
(137, 6, NULL, '¿Qué número sumado con 20 da 50?', '30', '25', '40', '35', 'A'),
(138, 6, NULL, '¿Qué número falta: 10, 20, 30, ___, 50?', '35', '45', '40', '25', 'C'),
(139, 6, NULL, '¿Cuál de estos es igual a 5 veces 10?', '50', '40', '60', '55', 'A'),
(140, 6, NULL, '¿Qué número es la mitad de 100?', '25', '75', '50', '60', 'C'),
(141, 6, NULL, '¿Cuánto es 25 + 25?', '50', '45', '55', '40', 'A'),
(142, 6, NULL, '¿Qué número sumado con 20 da 50?', '30', '25', '40', '35', 'A'),
(143, 6, NULL, '¿Qué número falta: 10, 20, 30, ___, 50?', '35', '45', '40', '25', 'C'),
(144, 6, NULL, '¿Cuál de estos es igual a 5 veces 10?', '50', '40', '60', '55', 'A'),
(145, 6, NULL, '¿Qué número es la mitad de 100?', '25', '75', '50', '60', 'C'),
(146, 6, NULL, '¿Cuánto es 25 + 25?', '50', '45', '55', '40', 'A'),
(147, 6, NULL, '¿Qué número sumado con 20 da 50?', '30', '25', '40', '35', 'A'),
(148, 6, NULL, '¿Qué número falta: 10, 20, 30, ___, 50?', '35', '45', '40', '25', 'C'),
(149, 6, NULL, '¿Cuál de estos es igual a 5 veces 10?', '50', '40', '60', '55', 'A'),
(150, 6, NULL, '¿Qué número es la mitad de 100?', '25', '75', '50', '60', 'C'),
(151, 7, NULL, '¿Qué herramienta se usa para dibujar un círculo perfecto?', 'Compás', 'Regla', 'Escuadra', 'Transportador', 'A'),
(152, 7, NULL, '¿Qué se necesita para construir un triángulo?', 'Tijeras', 'Lápiz y regla', 'Pegamento', 'Colores', 'B'),
(153, 7, NULL, '¿Cuál herramienta mide ángulos?', 'Compás', 'Escuadra', 'Transportador', 'Tijeras', 'C'),
(154, 7, NULL, '¿Qué forma se puede dibujar con una escuadra?', 'Círculo', 'Línea recta', 'Rombo', 'Parábola', 'B'),
(155, 7, NULL, '¿Qué figura puedes trazar con solo una regla?', 'Recta', 'Círculo', 'Triángulo', 'Pentágono', 'A'),
(156, 7, NULL, '¿Qué herramienta se usa para dibujar un círculo perfecto?', 'Compás', 'Regla', 'Escuadra', 'Transportador', 'A'),
(157, 7, NULL, '¿Qué se necesita para construir un triángulo?', 'Tijeras', 'Lápiz y regla', 'Pegamento', 'Colores', 'B'),
(158, 7, NULL, '¿Cuál herramienta mide ángulos?', 'Compás', 'Escuadra', 'Transportador', 'Tijeras', 'C'),
(159, 7, NULL, '¿Qué forma se puede dibujar con una escuadra?', 'Círculo', 'Línea recta', 'Rombo', 'Parábola', 'B'),
(160, 7, NULL, '¿Qué figura puedes trazar con solo una regla?', 'Recta', 'Círculo', 'Triángulo', 'Pentágono', 'A'),
(161, 7, NULL, '¿Qué herramienta se usa para dibujar un círculo perfecto?', 'Compás', 'Regla', 'Escuadra', 'Transportador', 'A'),
(162, 7, NULL, '¿Qué se necesita para construir un triángulo?', 'Tijeras', 'Lápiz y regla', 'Pegamento', 'Colores', 'B'),
(163, 7, NULL, '¿Cuál herramienta mide ángulos?', 'Compás', 'Escuadra', 'Transportador', 'Tijeras', 'C'),
(164, 7, NULL, '¿Qué forma se puede dibujar con una escuadra?', 'Círculo', 'Línea recta', 'Rombo', 'Parábola', 'B'),
(165, 7, NULL, '¿Qué figura puedes trazar con solo una regla?', 'Recta', 'Círculo', 'Triángulo', 'Pentágono', 'A'),
(166, 7, NULL, '¿Qué herramienta se usa para dibujar un círculo perfecto?', 'Compás', 'Regla', 'Escuadra', 'Transportador', 'A'),
(167, 7, NULL, '¿Qué se necesita para construir un triángulo?', 'Tijeras', 'Lápiz y regla', 'Pegamento', 'Colores', 'B'),
(168, 7, NULL, '¿Cuál herramienta mide ángulos?', 'Compás', 'Escuadra', 'Transportador', 'Tijeras', 'C'),
(169, 7, NULL, '¿Qué forma se puede dibujar con una escuadra?', 'Círculo', 'Línea recta', 'Rombo', 'Parábola', 'B'),
(170, 7, NULL, '¿Qué figura puedes trazar con solo una regla?', 'Recta', 'Círculo', 'Triángulo', 'Pentágono', 'A'),
(171, 7, NULL, '¿Qué herramienta se usa para dibujar un círculo perfecto?', 'Compás', 'Regla', 'Escuadra', 'Transportador', 'A'),
(172, 7, NULL, '¿Qué se necesita para construir un triángulo?', 'Tijeras', 'Lápiz y regla', 'Pegamento', 'Colores', 'B'),
(173, 7, NULL, '¿Cuál herramienta mide ángulos?', 'Compás', 'Escuadra', 'Transportador', 'Tijeras', 'C'),
(174, 7, NULL, '¿Qué forma se puede dibujar con una escuadra?', 'Círculo', 'Línea recta', 'Rombo', 'Parábola', 'B'),
(175, 7, NULL, '¿Qué figura puedes trazar con solo una regla?', 'Recta', 'Círculo', 'Triángulo', 'Pentágono', 'A'),
(176, 8, NULL, '¿Qué objeto se usa para mostrar datos ordenados?', 'Tabla', 'Canción', 'Cómic', 'Libro', 'A'),
(177, 8, NULL, '¿Dónde se pueden representar datos con barras?', 'Gráfica', 'Mapa', 'Póster', 'Foto', 'A'),
(178, 8, NULL, '¿Qué se usa para comparar cantidades?', 'Gráfica', 'Libro', 'Dado', 'Lupa', 'A'),
(179, 8, NULL, '¿Qué herramienta usamos para contar cosas?', 'Regla', 'Gráfico', 'Microscopio', 'Compás', 'B'),
(180, 8, NULL, '¿Qué permite leer datos de forma clara?', 'Histograma', 'Texto', 'Mapa', 'Dibujo', 'A'),
(181, 8, NULL, '¿Qué objeto se usa para mostrar datos ordenados?', 'Tabla', 'Canción', 'Cómic', 'Libro', 'A'),
(182, 8, NULL, '¿Dónde se pueden representar datos con barras?', 'Gráfica', 'Mapa', 'Póster', 'Foto', 'A'),
(183, 8, NULL, '¿Qué se usa para comparar cantidades?', 'Gráfica', 'Libro', 'Dado', 'Lupa', 'A'),
(184, 8, NULL, '¿Qué herramienta usamos para contar cosas?', 'Regla', 'Gráfico', 'Microscopio', 'Compás', 'B'),
(185, 8, NULL, '¿Qué permite leer datos de forma clara?', 'Histograma', 'Texto', 'Mapa', 'Dibujo', 'A'),
(186, 8, NULL, '¿Qué objeto se usa para mostrar datos ordenados?', 'Tabla', 'Canción', 'Cómic', 'Libro', 'A'),
(187, 8, NULL, '¿Dónde se pueden representar datos con barras?', 'Gráfica', 'Mapa', 'Póster', 'Foto', 'A'),
(188, 8, NULL, '¿Qué se usa para comparar cantidades?', 'Gráfica', 'Libro', 'Dado', 'Lupa', 'A'),
(189, 8, NULL, '¿Qué herramienta usamos para contar cosas?', 'Regla', 'Gráfico', 'Microscopio', 'Compás', 'B'),
(190, 8, NULL, '¿Qué permite leer datos de forma clara?', 'Histograma', 'Texto', 'Mapa', 'Dibujo', 'A'),
(191, 8, NULL, '¿Qué objeto se usa para mostrar datos ordenados?', 'Tabla', 'Canción', 'Cómic', 'Libro', 'A'),
(192, 8, NULL, '¿Dónde se pueden representar datos con barras?', 'Gráfica', 'Mapa', 'Póster', 'Foto', 'A'),
(193, 8, NULL, '¿Qué se usa para comparar cantidades?', 'Gráfica', 'Libro', 'Dado', 'Lupa', 'A'),
(194, 8, NULL, '¿Qué herramienta usamos para contar cosas?', 'Regla', 'Gráfico', 'Microscopio', 'Compás', 'B'),
(195, 8, NULL, '¿Qué permite leer datos de forma clara?', 'Histograma', 'Texto', 'Mapa', 'Dibujo', 'A'),
(196, 8, NULL, '¿Qué objeto se usa para mostrar datos ordenados?', 'Tabla', 'Canción', 'Cómic', 'Libro', 'A'),
(197, 8, NULL, '¿Dónde se pueden representar datos con barras?', 'Gráfica', 'Mapa', 'Póster', 'Foto', 'A'),
(198, 8, NULL, '¿Qué se usa para comparar cantidades?', 'Gráfica', 'Libro', 'Dado', 'Lupa', 'A'),
(199, 8, NULL, '¿Qué herramienta usamos para contar cosas?', 'Regla', 'Gráfico', 'Microscopio', 'Compás', 'B'),
(200, 8, NULL, '¿Qué permite leer datos de forma clara?', 'Histograma', 'Texto', 'Mapa', 'Dibujo', 'A'),
(201, 9, NULL, '¿Qué número es mayor?', '95', '85', '90', '100', 'D'),
(202, 9, NULL, '¿Cuál número viene antes del 100?', '99', '101', '98', '97', 'A'),
(203, 9, NULL, '¿Qué número es el doble de 50?', '75', '80', '100', '90', 'C'),
(204, 9, NULL, '¿Cuál número está más cerca de 100?', '97', '80', '60', '40', 'A'),
(205, 9, NULL, '¿Cuál número no pertenece a la serie: 10, 20, 30, 40, 55?', '10', '20', '30', '55', 'D'),
(206, 9, NULL, '¿Qué número es mayor?', '95', '85', '90', '100', 'D'),
(207, 9, NULL, '¿Cuál número viene antes del 100?', '99', '101', '98', '97', 'A'),
(208, 9, NULL, '¿Qué número es el doble de 50?', '75', '80', '100', '90', 'C'),
(209, 9, NULL, '¿Cuál número está más cerca de 100?', '97', '80', '60', '40', 'A'),
(210, 9, NULL, '¿Cuál número no pertenece a la serie: 10, 20, 30, 40, 55?', '10', '20', '30', '55', 'D'),
(211, 9, NULL, '¿Qué número es mayor?', '95', '85', '90', '100', 'D'),
(212, 9, NULL, '¿Cuál número viene antes del 100?', '99', '101', '98', '97', 'A'),
(213, 9, NULL, '¿Qué número es el doble de 50?', '75', '80', '100', '90', 'C'),
(214, 9, NULL, '¿Cuál número está más cerca de 100?', '97', '80', '60', '40', 'A'),
(215, 9, NULL, '¿Cuál número no pertenece a la serie: 10, 20, 30, 40, 55?', '10', '20', '30', '55', 'D'),
(216, 9, NULL, '¿Qué número es mayor?', '95', '85', '90', '100', 'D'),
(217, 9, NULL, '¿Cuál número viene antes del 100?', '99', '101', '98', '97', 'A'),
(218, 9, NULL, '¿Qué número es el doble de 50?', '75', '80', '100', '90', 'C'),
(219, 9, NULL, '¿Cuál número está más cerca de 100?', '97', '80', '60', '40', 'A'),
(220, 9, NULL, '¿Cuál número no pertenece a la serie: 10, 20, 30, 40, 55?', '10', '20', '30', '55', 'D'),
(221, 9, NULL, '¿Qué número es mayor?', '95', '85', '90', '100', 'D'),
(222, 9, NULL, '¿Cuál número viene antes del 100?', '99', '101', '98', '97', 'A'),
(223, 9, NULL, '¿Qué número es el doble de 50?', '75', '80', '100', '90', 'C'),
(224, 9, NULL, '¿Cuál número está más cerca de 100?', '97', '80', '60', '40', 'A'),
(225, 9, NULL, '¿Cuál número no pertenece a la serie: 10, 20, 30, 40, 55?', '10', '20', '30', '55', 'D'),
(226, 10, NULL, '¿Qué objeto pesa más?', 'Pluma', 'Ladrillo', 'Hoja', 'Pelota', 'B'),
(227, 10, NULL, '¿Con qué se mide el peso?', 'Litros', 'Regla', 'Balanza', 'Termómetro', 'C'),
(228, 10, NULL, '¿Qué pesa menos?', 'Libro', 'Bicicleta', 'Hoja', 'Silla', 'C'),
(229, 10, NULL, '¿Qué unidad usamos para pesar personas?', 'Centímetros', 'Kilogramos', 'Mililitros', 'Litros', 'B'),
(230, 10, NULL, '¿Qué usamos para saber si algo es liviano o pesado?', 'Balanza', 'Metro', 'Compás', 'Cinta', 'A'),
(231, 10, NULL, '¿Qué objeto pesa más?', 'Pluma', 'Ladrillo', 'Hoja', 'Pelota', 'B'),
(232, 10, NULL, '¿Con qué se mide el peso?', 'Litros', 'Regla', 'Balanza', 'Termómetro', 'C'),
(233, 10, NULL, '¿Qué pesa menos?', 'Libro', 'Bicicleta', 'Hoja', 'Silla', 'C'),
(234, 10, NULL, '¿Qué unidad usamos para pesar personas?', 'Centímetros', 'Kilogramos', 'Mililitros', 'Litros', 'B'),
(235, 10, NULL, '¿Qué usamos para saber si algo es liviano o pesado?', 'Balanza', 'Metro', 'Compás', 'Cinta', 'A'),
(236, 10, NULL, '¿Qué objeto pesa más?', 'Pluma', 'Ladrillo', 'Hoja', 'Pelota', 'B'),
(237, 10, NULL, '¿Con qué se mide el peso?', 'Litros', 'Regla', 'Balanza', 'Termómetro', 'C'),
(238, 10, NULL, '¿Qué pesa menos?', 'Libro', 'Bicicleta', 'Hoja', 'Silla', 'C'),
(239, 10, NULL, '¿Qué unidad usamos para pesar personas?', 'Centímetros', 'Kilogramos', 'Mililitros', 'Litros', 'B'),
(240, 10, NULL, '¿Qué usamos para saber si algo es liviano o pesado?', 'Balanza', 'Metro', 'Compás', 'Cinta', 'A'),
(241, 10, NULL, '¿Qué objeto pesa más?', 'Pluma', 'Ladrillo', 'Hoja', 'Pelota', 'B'),
(242, 10, NULL, '¿Con qué se mide el peso?', 'Litros', 'Regla', 'Balanza', 'Termómetro', 'C'),
(243, 10, NULL, '¿Qué pesa menos?', 'Libro', 'Bicicleta', 'Hoja', 'Silla', 'C'),
(244, 10, NULL, '¿Qué unidad usamos para pesar personas?', 'Centímetros', 'Kilogramos', 'Mililitros', 'Litros', 'B'),
(245, 10, NULL, '¿Qué usamos para saber si algo es liviano o pesado?', 'Balanza', 'Metro', 'Compás', 'Cinta', 'A'),
(246, 10, NULL, '¿Qué objeto pesa más?', 'Pluma', 'Ladrillo', 'Hoja', 'Pelota', 'B'),
(247, 10, NULL, '¿Con qué se mide el peso?', 'Litros', 'Regla', 'Balanza', 'Termómetro', 'C'),
(248, 10, NULL, '¿Qué pesa menos?', 'Libro', 'Bicicleta', 'Hoja', 'Silla', 'C'),
(249, 10, NULL, '¿Qué unidad usamos para pesar personas?', 'Centímetros', 'Kilogramos', 'Mililitros', 'Litros', 'B'),
(250, 10, NULL, '¿Qué usamos para saber si algo es liviano o pesado?', 'Balanza', 'Metro', 'Compás', 'Cinta', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `id_profesor` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_profesor`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `id_usuario`, `telefono`) VALUES
(1, 6, '5512345678'),
(2, 7, '5512345679'),
(3, 8, '5512345670'),
(4, 100, '5543675467');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promedio`
--

DROP TABLE IF EXISTS `promedio`;
CREATE TABLE IF NOT EXISTS `promedio` (
  `id_alumno` int(11) NOT NULL,
  `promedio` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

DROP TABLE IF EXISTS `recursos`;
CREATE TABLE IF NOT EXISTS `recursos` (
  `id_recursos` int(11) NOT NULL AUTO_INCREMENT,
  `id_contenido` int(11) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `direccion` text,
  `peso` float DEFAULT NULL,
  PRIMARY KEY (`id_recursos`),
  KEY `id_contenido` (`id_contenido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

DROP TABLE IF EXISTS `reporte`;
CREATE TABLE IF NOT EXISTS `reporte` (
  `id_reporte` int(11) NOT NULL AUTO_INCREMENT,
  `ubicacion` text,
  PRIMARY KEY (`id_reporte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `ap_Pat` varchar(50) DEFAULT NULL,
  `ap_Mat` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `codigo_verificacion` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `ap_Pat`, `ap_Mat`, `correo`, `contrasena`, `numero`, `codigo_verificacion`) VALUES
(1, 'Carlos', 'Ramírez', 'Gómez', 'carlos.martínez1@correo.com', 'car100', '5510000000', 'X000Z'),
(2, 'María', 'Hernández', 'Soto', 'maría.hernández2@correo.com', 'mar101', '5510000001', 'X001Z'),
(3, 'Luis', 'Ramírez', 'Pérez', 'luis.ramírez3@correo.com', 'lui102', '5510000002', 'X002Z'),
(4, 'Lucía', 'Torres', 'Cruz', 'lucía.torres4@correo.com', 'luc103', '5510000003', 'X003Z'),
(5, 'Pedro', 'Vega', 'Jiménez', 'pedro.vega5@correo.com', 'ped104', '5510000004', 'X004Z'),
(6, 'Diana', 'Navarro', 'Lara', 'diana.navarro6@correo.com', 'dia105', '5510000005', 'X005Z'),
(7, 'Jorge', 'Mendoza', 'Ortiz', 'jorge.mendoza7@correo.com', 'jor106', '5510000006', 'X006Z'),
(8, 'Isabel', 'Reyes', 'Ruiz', 'isabel.reyes8@correo.com', 'isa107', '5510000007', 'X007Z'),
(9, 'Raúl', 'Morales', 'Silva', 'raúl.morales9@correo.com', 'raú108', '5510000008', 'X008Z'),
(10, 'Andrea', 'Flores', 'Herrera', 'andrea.flores10@correo.com', 'and109', '5510000009', 'X009Z'),
(11, 'Ricardo', 'Martínez', 'Gómez', 'ricardo.martínez11@correo.com', 'ric110', '5510000010', 'X010Z'),
(12, 'Patricia', 'Hernández', 'Soto', 'patricia.hernández12@correo.com', 'pat111', '5510000011', 'X011Z'),
(13, 'Fernando', 'Ramírez', 'Pérez', 'fernando.ramírez13@correo.com', 'fer112', '5510000012', 'X012Z'),
(14, 'Laura', 'Torres', 'Cruz', 'laura.torres14@correo.com', 'lau113', '5510000013', 'X013Z'),
(15, 'Gabriel', 'Vega', 'Jiménez', 'gabriel.vega15@correo.com', 'gab114', '5510000014', 'X014Z'),
(16, 'Sandra', 'Navarro', 'Lara', 'sandra.navarro16@correo.com', 'san115', '5510000015', 'X015Z'),
(17, 'Héctor', 'Mendoza', 'Ortiz', 'héctor.mendoza17@correo.com', 'héc116', '5510000016', 'X016Z'),
(18, 'Alejandra', 'Reyes', 'Ruiz', 'alejandra.reyes18@correo.com', 'ale117', '5510000017', 'X017Z'),
(19, 'Emilio', 'Morales', 'Silva', 'emilio.morales19@correo.com', 'emi118', '5510000018', 'X018Z'),
(20, 'Claudia', 'Flores', 'Herrera', 'claudia.flores20@correo.com', 'cla119', '5510000019', 'X019Z'),
(21, 'Iván', 'Martínez', 'Gómez', 'iván.martínez21@correo.com', 'ivá120', '5510000020', 'X020Z'),
(22, 'Natalia', 'Hernández', 'Soto', 'natalia.hernández22@correo.com', 'nat121', '5510000021', 'X021Z'),
(23, 'Óscar', 'Ramírez', 'Pérez', 'óscar.ramírez23@correo.com', 'ósc122', '5510000022', 'X022Z'),
(24, 'Beatriz', 'Torres', 'Cruz', 'beatriz.torres24@correo.com', 'bea123', '5510000023', 'X023Z'),
(25, 'Manuel', 'Vega', 'Jiménez', 'manuel.vega25@correo.com', 'man124', '5510000024', 'X024Z'),
(26, 'Verónica', 'Navarro', 'Lara', 'verónica.navarro26@correo.com', 'ver125', '5510000025', 'X025Z'),
(27, 'Alberto', 'Mendoza', 'Ortiz', 'alberto.mendoza27@correo.com', 'alb126', '5510000026', 'X026Z'),
(28, 'Julia', 'Reyes', 'Ruiz', 'julia.reyes28@correo.com', 'jul127', '5510000027', 'X027Z'),
(29, 'Diego', 'Morales', 'Silva', 'diego.morales29@correo.com', 'die128', '5510000028', 'X028Z'),
(30, 'Sofía', 'Flores', 'Herrera', 'sofía.flores30@correo.com', 'sof129', '5510000029', 'X029Z'),
(31, 'Tomás', 'Martínez', 'Gómez', 'tomás.martínez31@correo.com', 'tom130', '5510000030', 'X030Z'),
(32, 'Valeria', 'Hernández', 'Soto', 'valeria.hernández32@correo.com', 'val131', '5510000031', 'X031Z'),
(33, 'Ernesto', 'Ramírez', 'Pérez', 'ernesto.ramírez33@correo.com', 'ern132', '5510000032', 'X032Z'),
(34, 'Renata', 'Torres', 'Cruz', 'renata.torres34@correo.com', 'ren133', '5510000033', 'X033Z'),
(35, 'Mauricio', 'Vega', 'Jiménez', 'mauricio.vega35@correo.com', 'mau134', '5510000034', 'X034Z'),
(36, 'Jimena', 'Navarro', 'Lara', 'jimena.navarro36@correo.com', 'jim135', '5510000035', 'X035Z'),
(37, 'Axel', 'Mendoza', 'Ortiz', 'axel.mendoza37@correo.com', 'axe136', '5510000036', 'X036Z'),
(38, 'Liliana', 'Reyes', 'Ruiz', 'liliana.reyes38@correo.com', 'lil137', '5510000037', 'X037Z'),
(39, 'Andrés', 'Morales', 'Silva', 'andrés.morales39@correo.com', 'and138', '5510000038', 'X038Z'),
(40, 'Pamela', 'Flores', 'Herrera', 'pamela.flores40@correo.com', 'pam139', '5510000039', 'X039Z'),
(41, 'Sebastián', 'Martínez', 'Gómez', 'sebastián.martínez41@correo.com', 'seb140', '5510000040', 'X040Z'),
(42, 'Paola', 'Hernández', 'Soto', 'paola.hernández42@correo.com', 'pao141', '5510000041', 'X041Z'),
(43, 'Rodrigo', 'Ramírez', 'Pérez', 'rodrigo.ramírez43@correo.com', 'rod142', '5510000042', 'X042Z'),
(44, 'Montserrat', 'Torres', 'Cruz', 'montserrat.torres44@correo.com', 'mon143', '5510000043', 'X043Z'),
(45, 'Fabián', 'Vega', 'Jiménez', 'fabián.vega45@correo.com', 'fab144', '5510000044', 'X044Z'),
(46, 'Karina', 'Navarro', 'Lara', 'karina.navarro46@correo.com', 'kar145', '5510000045', 'X045Z'),
(47, 'Cristian', 'Mendoza', 'Ortiz', 'cristian.mendoza47@correo.com', 'cri146', '5510000046', 'X046Z'),
(48, 'Berenice', 'Reyes', 'Ruiz', 'berenice.reyes48@correo.com', 'ber147', '5510000047', 'X047Z'),
(49, 'Marco', 'Morales', 'Silva', 'marco.morales49@correo.com', 'mar148', '5510000048', 'X048Z'),
(50, 'Miriam', 'Flores', 'Herrera', 'miriam.flores50@correo.com', 'mir149', '5510000049', 'X049Z'),
(51, 'Hugo', 'Martínez', 'Gómez', 'hugo.martínez51@correo.com', 'hug150', '5510000050', 'X050Z'),
(52, 'Rocío', 'Hernández', 'Soto', 'rocío.hernández52@correo.com', 'roc151', '5510000051', 'X051Z'),
(53, 'Alan', 'Ramírez', 'Pérez', 'alan.ramírez53@correo.com', 'ala152', '5510000052', 'X052Z'),
(54, 'Lourdes', 'Torres', 'Cruz', 'lourdes.torres54@correo.com', 'lou153', '5510000053', 'X053Z'),
(55, 'Edgar', 'Vega', 'Jiménez', 'edgar.vega55@correo.com', 'edg154', '5510000054', 'X054Z'),
(56, 'Teresa', 'Navarro', 'Lara', 'teresa.navarro56@correo.com', 'ter155', '5510000055', 'X055Z'),
(57, 'Francisco', 'Mendoza', 'Ortiz', 'francisco.mendoza57@correo.com', 'fra156', '5510000056', 'X056Z'),
(58, 'Brenda', 'Reyes', 'Ruiz', 'brenda.reyes58@correo.com', 'bre157', '5510000057', 'X057Z'),
(59, 'Jesús', 'Morales', 'Silva', 'jesús.morales59@correo.com', 'jes158', '5510000058', 'X058Z'),
(60, 'Elsa', 'Flores', 'Herrera', 'elsa.flores60@correo.com', 'els159', '5510000059', 'X059Z'),
(61, 'Samuel', 'Martínez', 'Gómez', 'samuel.martínez61@correo.com', 'sam160', '5510000060', 'X060Z'),
(62, 'Leticia', 'Hernández', 'Soto', 'leticia.hernández62@correo.com', 'let161', '5510000061', 'X061Z'),
(63, 'Esteban', 'Ramírez', 'Pérez', 'esteban.ramírez63@correo.com', 'est162', '5510000062', 'X062Z'),
(64, 'Norma', 'Torres', 'Cruz', 'norma.torres64@correo.com', 'nor163', '5510000063', 'X063Z'),
(65, 'Julián', 'Vega', 'Jiménez', 'julián.vega65@correo.com', 'jul164', '5510000064', 'X064Z'),
(66, 'Guadalupe', 'Navarro', 'Lara', 'guadalupe.navarro66@correo.com', 'gua165', '5510000065', 'X065Z'),
(67, 'Armando', 'Mendoza', 'Ortiz', 'armando.mendoza67@correo.com', 'arm166', '5510000066', 'X066Z'),
(68, 'Georgina', 'Reyes', 'Ruiz', 'georgina.reyes68@correo.com', 'geo167', '5510000067', 'X067Z'),
(69, 'Rafael', 'Morales', 'Silva', 'rafael.morales69@correo.com', 'raf168', '5510000068', 'X068Z'),
(70, 'Cecilia', 'Flores', 'Herrera', 'cecilia.flores70@correo.com', 'cec169', '5510000069', 'X069Z'),
(71, 'Gerardo', 'Martínez', 'Gómez', 'gerardo.martínez71@correo.com', 'ger170', '5510000070', 'X070Z'),
(72, 'Marisol', 'Hernández', 'Soto', 'marisol.hernández72@correo.com', 'mar171', '5510000071', 'X071Z'),
(73, 'Jaime', 'Ramírez', 'Pérez', 'jaime.ramírez73@correo.com', 'jai172', '5510000072', 'X072Z'),
(74, 'Araceli', 'Torres', 'Cruz', 'araceli.torres74@correo.com', 'ara173', '5510000073', 'X073Z'),
(75, 'Octavio', 'Vega', 'Jiménez', 'octavio.vega75@correo.com', 'oct174', '5510000074', 'X074Z'),
(76, 'Yolanda', 'Navarro', 'Lara', 'yolanda.navarro76@correo.com', 'yol175', '5510000075', 'X075Z'),
(77, 'Benjamín', 'Mendoza', 'Ortiz', 'benjamín.mendoza77@correo.com', 'ben176', '5510000076', 'X076Z'),
(78, 'Silvia', 'Reyes', 'Ruiz', 'silvia.reyes78@correo.com', 'sil177', '5510000077', 'X077Z'),
(79, 'Mateo', 'Morales', 'Silva', 'mateo.morales79@correo.com', 'mat178', '5510000078', 'X078Z'),
(80, 'Noemí', 'Flores', 'Herrera', 'noemí.flores80@correo.com', 'noe179', '5510000079', 'X079Z'),
(81, 'Daniel', 'Martínez', 'Gómez', 'daniel.martínez81@correo.com', 'dan180', '5510000080', 'X080Z'),
(82, 'Clara', 'Hernández', 'Soto', 'clara.hernández82@correo.com', 'cla181', '5510000081', 'X081Z'),
(83, 'Ángel', 'Ramírez', 'Pérez', 'ángel.ramírez83@correo.com', 'áng182', '5510000082', 'X082Z'),
(84, 'Flor', 'Torres', 'Cruz', 'flor.torres84@correo.com', 'flo183', '5510000083', 'X083Z'),
(85, 'Jonathan', 'Vega', 'Jiménez', 'jonathan.vega85@correo.com', 'jon184', '5510000084', 'X084Z'),
(86, 'Itzel', 'Navarro', 'Lara', 'itzel.navarro86@correo.com', 'itz185', '5510000085', 'X085Z'),
(87, 'Martín', 'Mendoza', 'Ortiz', 'martín.mendoza87@correo.com', 'mar186', '5510000086', 'X086Z'),
(88, 'Estela', 'Reyes', 'Ruiz', 'estela.reyes88@correo.com', 'est187', '5510000087', 'X087Z'),
(89, 'Kevin', 'Morales', 'Silva', 'kevin.morales89@correo.com', 'kev188', '5510000088', 'X088Z'),
(90, 'Nancy', 'Flores', 'Herrera', 'nancy.flores90@correo.com', 'nan189', '5510000089', 'X089Z'),
(91, 'Adrián', 'Martínez', 'Gómez', 'adrián.martínez91@correo.com', 'adr190', '5510000090', 'X090Z'),
(92, 'Irma', 'Hernández', 'Soto', 'irma.hernández92@correo.com', 'irm191', '5510000091', 'X091Z'),
(93, 'Iván', 'Ramírez', 'Pérez', 'iván.ramírez93@correo.com', 'ivá192', '5510000092', 'X092Z'),
(94, 'Melisa', 'Torres', 'Cruz', 'melisa.torres94@correo.com', 'mel193', '5510000093', 'X093Z'),
(95, 'Agustín', 'Vega', 'Jiménez', 'agustín.vega95@correo.com', 'agu194', '5510000094', 'X094Z'),
(96, 'Lilia', 'Navarro', 'Lara', 'lilia.navarro96@correo.com', 'lil195', '5510000095', 'X095Z'),
(97, 'Carlos', 'Mendoza', 'Ortiz', 'carlos.mendoza97@correo.com', 'car196', '5510000096', 'X096Z'),
(98, 'María', 'Reyes', 'Ruiz', 'maría.reyes98@correo.com', 'mar197', '5510000097', 'X097Z'),
(99, 'Karla Gabriela', 'Salazar', 'Sánchez', 'karlasanchez251004@gmail.com', 'IDinoMikeI', '5564889087', '251004'),
(100, 'Claudia', 'Mezo', ' Sandoval', 'sandovalclaudia130@gmail.com', 'Claudia123', ' 5543675467', ' 202463'),
(101, 'Agustin', 'Flores', 'Lopez', 'afl231001@gmail.com', 'GusGus123', ' 5543247655', '202454');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL,
  `formato` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `fk_admin_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`),
  ADD CONSTRAINT `fk_alumno_grupo` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`),
  ADD CONSTRAINT `fk_alumno_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `audio_ibfk_1` FOREIGN KEY (`id_audio`) REFERENCES `recursos` (`id_recursos`);

--
-- Filtros para la tabla `calificacion_contenido`
--
ALTER TABLE `calificacion_contenido`
  ADD CONSTRAINT `calificacion_contenido_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `calificacion_contenido_ibfk_2` FOREIGN KEY (`id_cont`) REFERENCES `contenido` (`id_contenido`),
  ADD CONSTRAINT `fk_calificacion_contenido` FOREIGN KEY (`id_cont`) REFERENCES `contenido` (`id_contenido`),
  ADD CONSTRAINT `fk_calificacion_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `calificacion_examen`
--
ALTER TABLE `calificacion_examen`
  ADD CONSTRAINT `calificacion_examen_ibfk_1` FOREIGN KEY (`id_examen`) REFERENCES `examen` (`id_examen`),
  ADD CONSTRAINT `calificacion_examen_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `fk_calif_examen_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `fk_calif_examen_examen` FOREIGN KEY (`id_examen`) REFERENCES `examen` (`id_examen`);

--
-- Filtros para la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD CONSTRAINT `contenido_ibfk_1` FOREIGN KEY (`id_bloque`) REFERENCES `bloque` (`id_bloque`),
  ADD CONSTRAINT `fk_contenido_bloque` FOREIGN KEY (`id_bloque`) REFERENCES `bloque` (`id_bloque`);

--
-- Filtros para la tabla `contenido_profesor`
--
ALTER TABLE `contenido_profesor`
  ADD CONSTRAINT `contenido_profesor_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `contenido_profesor_ibfk_2` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`),
  ADD CONSTRAINT `fk_contenido_profesor_contenido` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`),
  ADD CONSTRAINT `fk_contenido_profesor_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `diapositivas`
--
ALTER TABLE `diapositivas`
  ADD CONSTRAINT `diapositivas_ibfk_1` FOREIGN KEY (`id_diapositiva`) REFERENCES `recursos` (`id_recursos`);

--
-- Filtros para la tabla `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `examen_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`),
  ADD CONSTRAINT `fk_examen_contenido` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `fk_grupo_profesor` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`),
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`);

--
-- Filtros para la tabla `grupo_bloques`
--
ALTER TABLE `grupo_bloques`
  ADD CONSTRAINT `fk_grupo_bloque_bloque` FOREIGN KEY (`id_bloque`) REFERENCES `bloque` (`id_bloque`),
  ADD CONSTRAINT `fk_grupo_bloque_grupo` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`),
  ADD CONSTRAINT `grupo_bloques_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`),
  ADD CONSTRAINT `grupo_bloques_ibfk_2` FOREIGN KEY (`id_bloque`) REFERENCES `bloque` (`id_bloque`);

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `recursos` (`id_recursos`);

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `fk_pregunta_examen` FOREIGN KEY (`id_examen`) REFERENCES `examen` (`id_examen`),
  ADD CONSTRAINT `pregunta_ibfk_1` FOREIGN KEY (`id_examen`) REFERENCES `examen` (`id_examen`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_profesor_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `promedio`
--
ALTER TABLE `promedio`
  ADD CONSTRAINT `fk_promedio_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `promedio_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`);

--
-- Filtros para la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `fk_recurso_contenido` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`),
  ADD CONSTRAINT `recursos_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`);

--
-- Filtros para la tabla `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`id_video`) REFERENCES `recursos` (`id_recursos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

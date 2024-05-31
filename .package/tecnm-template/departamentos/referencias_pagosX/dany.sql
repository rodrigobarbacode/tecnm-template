-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-10-2015 a las 23:52:19
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dany`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos`
--

CREATE TABLE IF NOT EXISTS `conceptos` (
`cve_conceptos` int(11) NOT NULL,
  `cve_usuario` int(11) NOT NULL,
  `CONC_NOM` varchar(80) COLLATE utf8_bin NOT NULL,
  `CONC_MONTO` float NOT NULL,
  `CONC_CVE` bigint(20) NOT NULL,
  `CLAVE_SEP` varchar(20) COLLATE utf8_bin NOT NULL,
  `CLAVE_COMP` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `conceptos`
--

INSERT INTO `conceptos` (`cve_conceptos`, `cve_usuario`, `CONC_NOM`, `CONC_MONTO`, `CONC_CVE`, `CLAVE_SEP`, `CLAVE_COMP`) VALUES
(1, 1, 'CERTIFICADO OFICIAL DE ESTUDIOS Y DIPLOMA DE ESPECIALIDAD', 10, 100, '*', 1),
(2, 1, 'DUPLICADO DE CERTIFICADO OFICIAL DE ESTUDIOS', 10, 101, '*', 1),
(3, 1, 'CERTIFICADO PARCIAL DE ESTUDIOS', 10, 102, '*', 1),
(4, 1, 'FICHA Y EXAMEN DE ADMISION', 10, 103, '*', 1),
(5, 1, 'CONSTANCIA DE ESTUDIOS "A" SIN CALIFICACIONES (SIMPLE)', 10, 105, '*', 1),
(6, 1, 'CONSTANCIA DE ESTUDIOS CON CALIFICACIONES KARDEX', 10, 106, '*', 1),
(7, 1, 'CONSTANCIA DE ESTUDIOS "B" CON CALIFICACIONES', 10, 106, '*', 1),
(8, 1, 'REPOSICION DE CREDENCIAL (DUPLICADO)', 10, 107, '*', 1),
(9, 1, 'EXAMEN GLOBAL', 10, 108, '*', 1),
(10, 1, 'EXAMEN ESPECIAL', 10, 109, '*', 1),
(11, 1, 'ELABORACION DE TITULO', 10, 110, '*', 1),
(12, 1, 'CURSO DE TITULACION (90 HORAS)', 10, 111, '*', 1),
(13, 1, 'CURSO DE VERANO (60 Y 75 HORAS)', 10, 112, '*', 1),
(14, 1, 'CURSO DE VERANO (90 HORAS)', 10, 113, '*', 1),
(15, 1, 'INSCRIPCION NUEVO INGRESO (INGLES Y SEGURO DE GASTOS MEDICOS)', 10, 115, '*', 1),
(16, 1, 'REINSCRIPCION 2DO SEMESTRE (INGLES Y SEGURO DE GASTOS MEDICOS)', 10, 116, '*', 1),
(17, 1, 'REINSCRIPCION 3ER SEMESTRE EN ADELANTE', 10, 117, '*', 1),
(18, 1, 'PROGRAMAS DE MATERIAS SELLADOS POR EL INSTITUTO (TEMARIOS)', 10, 118, '*', 1),
(19, 1, 'RETRASO ENTREGA DE LIBROS (POR DIA)', 10, 119, '*', 1),
(20, 1, 'MANUAL DE PRACTICAS DE QUIMICA', 10, 120, '*', 1),
(21, 1, 'CURSO DE INGLES 3ER SEMESTRE EN ADELANTE', 10, 121, '121', 0),
(22, 1, 'CURSO DE INGLES PARA NO ESTUDIANTES', 10, 122, '*', 1),
(23, 1, 'EXAMEN DE ACREDITACION DE INGLES TOIEC', 10, 123, '*', 1),
(24, 1, 'REPOSICION DE CONSTANCIA DE LIBERACION DE INGLES', 10, 124, '*', 1),
(25, 1, 'CURSO PROPEDEUTICO DE MAESTRIA', 10, 125, '*', 1),
(26, 1, 'TESIS GRADO DE MAESTRIA O TESIS DE ESPECIALIDAD', 10, 126, '*', 1),
(27, 1, 'CUOTA POR CREDITO DE MAESTRIA O ESPECIALIDAD', 10, 127, '*', 1),
(28, 1, 'INSCRIPCION MAESTRIA POR CUATRIMESTRE (NVO INGRESO', 10, 128, '*', 1),
(29, 1, 'RENTA DE SALA AUDIOVISUAL', 10, 129, '*', 1),
(30, 1, 'PAGO GRUPAL DE VERANO 60 HRS', 10, 130, '*', 1),
(31, 1, 'PAGO GRUPAL DE VERANO 90 HRS', 10, 131, '*', 1),
(32, 1, 'PAGO DE VERANO 60 HRS 50%', 10, 132, '*', 1),
(33, 1, 'PAGO DE VERANO 90 HRS 50%', 10, 133, '*', 1),
(34, 1, 'REINSCRIPCION MAESTRIA ', 10, 140, '*', 1),
(35, 1, 'SOLAMENTE FICHA NUEVO INGRESO ', 10, 141, '*', 1),
(36, 1, 'REINSCR. HOMOLOGADOS Y SISTEMA FEDERAL', 10, 400, '*', 1),
(37, 1, 'REINCRIPCION ENERO JUNIO RESIDENCIAS 50%', 10, 444, '*', 1),
(38, 1, 'REPOSICION TARJETON ESTACIONAMIENTO', 10, 555, '*', 1),
(39, 1, 'REPOSICION TARJETON ESTACIONAMIENTO', 10, 555, '*', 1),
(40, 1, 'ARGOS', 10, 700, '*', 1),
(41, 1, 'DICTAMEN TECNICO EQUIVALENCIA', 10, 776, '*', 1),
(42, 1, 'DIPLOMA DE INGLES MODELO IAAP', 10, 777, '*', 1),
(45, 0, 'EXAMEN POFESIONAL O ACTO DE TITULACION', 0, 104, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos-usuarios`
--

CREATE TABLE IF NOT EXISTS `conceptos-usuarios` (
  `cve_conceptos` varchar(11) COLLATE utf8_bin NOT NULL,
  `cve_usuarios` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `conceptos-usuarios`
--

INSERT INTO `conceptos-usuarios` (`cve_conceptos`, `cve_usuarios`) VALUES
('1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptosusuarios`
--

CREATE TABLE IF NOT EXISTS `conceptosusuarios` (
  `cve_usuarios` varchar(100) COLLATE utf8_bin NOT NULL,
  `cve_conceptos` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `conceptosusuarios`
--

INSERT INTO `conceptosusuarios` (`cve_usuarios`, `cve_conceptos`) VALUES
('7', '21'),
('7', '40'),
('7', '1'),
('7', '3'),
('7', '5'),
('7', '7'),
('7', '6'),
('7', '8'),
('7', '27'),
('7', '22'),
('7', '12'),
('7', '13'),
('7', '14'),
('7', '25'),
('7', '41'),
('7', '42'),
('7', '2'),
('7', '11'),
('7', '23'),
('7', '10'),
('7', '9'),
('7', '4'),
('7', '28'),
('7', '15'),
('7', '20'),
('7', '32'),
('7', '33'),
('7', '30'),
('7', '31'),
('7', '18'),
('7', '37'),
('7', '36'),
('7', '16'),
('7', '17'),
('7', '34'),
('7', '29'),
('7', '24'),
('7', '38'),
('7', '39'),
('7', '19'),
('7', '35'),
('7', '26'),
('1', '21'),
('1', '22'),
('1', '42'),
('1', '23'),
('1', '24'),
('3', '5'),
('3', '6'),
('3', '20'),
('3', '24'),
('3', '8'),
('3', '39'),
('4', '45'),
('5', '18'),
('6', '20'),
('8', '37'),
('9', '36'),
('10', '27'),
('10', '25'),
('10', '28'),
('10', '34'),
('10', '26'),
('2', '1'),
('2', '3'),
('2', '5'),
('2', '7'),
('2', '27'),
('2', '12'),
('2', '13'),
('2', '14'),
('2', '25'),
('2', '41'),
('2', '2'),
('2', '11'),
('2', '10'),
('2', '9'),
('2', '4'),
('2', '28'),
('2', '15'),
('2', '16'),
('2', '17'),
('2', '34'),
('2', '8'),
('2', '35'),
('2', '26'),
('18', '40'),
('18', '3'),
('18', '7'),
('26', '40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `mensaje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`mensaje`) VALUES
('4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
`idPersona` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `sexo` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`cve_usuarios` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `nivel_usuario` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cve_usuarios`, `nombre`, `correo`, `telefono`, `nivel_usuario`, `usuario`, `password`) VALUES
(2, 'escolares', '*', '5555555', '1', 'escolares', 'xx'),
(3, 'tec', '*', '5555555', '1', 'tec', 'xx'),
(4, 'titulacion', '*', '5555555', '1', 'titulacion', 'xx'),
(5, 'academicos', '*', '5555555', '1', 'academicos', 'xx'),
(6, 'quimica', '*', '5555555', '1', 'quimica', 'xx'),
(7, 'financieros', '*', '5555555', '1', 'financieros', 'xx'),
(8, 'profesionales', '*', '5555555', '1', 'profesionales', 'xx'),
(9, 'homologados', '*', '5555555', '1', 'homologados', 'xx'),
(10, 'posgrado', '*', '5555555', '1', 'posgrado', 'xx'),
(18, 'josecarlos', '', '', '1', 'carlos', '123'),
(26, 'a', '', '', '1', 'aa', 'a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conceptos`
--
ALTER TABLE `conceptos`
 ADD PRIMARY KEY (`cve_conceptos`), ADD KEY `cve_usuario` (`cve_usuario`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
 ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`cve_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conceptos`
--
ALTER TABLE `conceptos`
MODIFY `cve_conceptos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `cve_usuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

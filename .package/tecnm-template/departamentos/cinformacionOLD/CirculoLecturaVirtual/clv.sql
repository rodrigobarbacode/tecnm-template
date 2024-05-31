-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-12-2015 a las 12:22:07
-- Versión del servidor: 5.5.46-0ubuntu0.14.04.2
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_Actividad`
--

CREATE TABLE IF NOT EXISTS `cv_Actividad` (
  `idActividad` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `de` int(11) NOT NULL,
  `idInformacion` int(11) NOT NULL,
  `fechaActividad` date NOT NULL,
  `hora` time NOT NULL,
  `Nivel` int(11) NOT NULL,
  PRIMARY KEY (`idActividad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_Admin`
--

CREATE TABLE IF NOT EXISTS `cv_Admin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Apellido2` varchar(45) NOT NULL,
  `Ocupacion` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `cv_apass` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `correoSecundario` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `idNivelAdmin` int(11) NOT NULL,
  PRIMARY KEY (`idAdmin`,`idNivelAdmin`),
  KEY `fk_cv_Admin_cv_NivelAdmin1_idx` (`idNivelAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_carreras`
--

CREATE TABLE IF NOT EXISTS `cv_carreras` (
  `idcv_carreras` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idcv_carreras`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `cv_carreras`
--

INSERT INTO `cv_carreras` (`idcv_carreras`, `nombre`) VALUES
(1, 'Ing. Industrial'),
(2, 'Ing. Logística'),
(3, 'Ing. Mecatrónica'),
(4, 'Ing. Mecánica'),
(5, 'Ing. Sistemas Computacionales'),
(6, 'Ing. Gestión Empresarial'),
(7, 'Ing. Informática'),
(8, 'Ing. Energías Renovables'),
(9, 'Ing. Electrónica'),
(10, 'Ing. Química'),
(11, 'Contador Público'),
(12, 'Ing. Eléctrica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_CatalogoDeLibros`
--

CREATE TABLE IF NOT EXISTS `cv_CatalogoDeLibros` (
  `idCatalogoDeLibros` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCatalogo` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `CatalogoPadre` int(11) NOT NULL,
  `Url` varchar(45) NOT NULL,
  `FechaCreacion` date NOT NULL,
  `Imagen` varchar(45) NOT NULL,
  PRIMARY KEY (`idCatalogoDeLibros`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=186 ;

--
-- Volcado de datos para la tabla `cv_CatalogoDeLibros`
--

INSERT INTO `cv_CatalogoDeLibros` (`idCatalogoDeLibros`, `NombreCatalogo`, `Descripcion`, `CatalogoPadre`, `Url`, `FechaCreacion`, `Imagen`) VALUES
(178, 'Sistemas/Informatica', 'Libros de  Ingenieria.', 0, 'null', '2015-04-10', 'null'),
(179, 'Historia', 'Historia de Mexico', 0, 'null', '2015-04-10', 'null'),
(180, 'Literatura', 'Libros Literatura', 0, 'null', '2015-04-10', 'null'),
(181, 'Poesia', 'Libros de Suspenso/Terror', 0, 'null', '2015-04-10', 'null'),
(182, 'Psicologia', 'Psicologia/Desarrollo Humano', 0, 'null', '2015-04-10', 'null'),
(183, 'Contaduria', 'Libros Conraduria', 0, 'null', '2015-04-10', 'null'),
(184, 'Varios', 'Libros Varios', 0, 'null', '2015-04-11', 'null'),
(185, 'Ciencia', 'Todos los Libros de Circulo de Lectura', 0, 'null', '2015-04-11', 'null');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_Comentario`
--

CREATE TABLE IF NOT EXISTS `cv_Comentario` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `Comentario` text NOT NULL,
  `hora` time NOT NULL,
  `FechaPublicacion` date NOT NULL,
  `idTema` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idComentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `cv_Comentario`
--

INSERT INTO `cv_Comentario` (`idComentario`, `Comentario`, `hora`, `FechaPublicacion`, `idTema`, `idUsuario`) VALUES
(1, 'No la  he leiidoo\n!!', '19:18:47', '2015-10-15', 1, 16),
(2, 'Tengo mucha Hambre', '19:19:07', '2015-10-15', 2, 16),
(3, 'Llevo!! 100 Hojas!', '19:19:30', '2015-10-15', 4, 16),
(4, 'Hola sistemas desde el tema con ID 3', '19:20:09', '2015-10-15', 3, 16),
(5, 'Tema id 3.', '19:33:51', '2015-10-15', 3, 16),
(6, 'Tema id 2.', '19:34:19', '2015-10-15', 2, 16),
(7, 'Muy tarde...!', '21:27:04', '2015-10-17', 5, 16),
(8, 'Hola no me ha gustado el grupo , ya no quiero ir ....', '23:01:16', '2015-10-19', 1, 16),
(9, 'pagina 42 77', '00:32:54', '2015-10-20', 1, 16),
(10, 'tema 77', '00:33:42', '2015-10-20', 4, 16),
(11, 'tema 2', '00:34:05', '2015-10-20', 2, 16),
(12, 'tema 1', '00:34:35', '2015-10-20', 1, 16),
(13, '77 :$', '10:29:22', '2015-10-20', 3, 16),
(14, 'igyuft', '10:47:48', '2015-10-20', 3, 16),
(15, 'como estan!!!!!!!', '21:51:20', '2015-11-24', 3, 15),
(16, 'ijojj', '23:43:48', '2015-11-24', 3, 15),
(17, ':$', '20:18:46', '2015-12-04', 1, 15),
(18, '=)', '21:08:32', '2015-12-04', 3, 15),
(19, 'kmklmkl', '21:48:34', '2015-12-04', 2, 15),
(20, 'jajajjajaajjajajaj', '23:11:13', '2015-12-04', 3, 15),
(21, 'YooooMenrengues', '16:32:29', '2015-12-05', 5, 18),
(22, 'CARAY CARAY!!', '16:32:59', '2015-12-05', 1, 18),
(23, 'eszdxfcgbhujgytrdestdgfjlk', '22:40:37', '2015-12-05', 5, 15),
(24, 'Muy Buen Libro', '13:42:33', '2015-12-06', 5, 20),
(25, ':D', '15:52:53', '2015-12-06', 5, 15),
(26, 'YES!', '17:00:43', '2015-12-06', 5, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_encuesta`
--

CREATE TABLE IF NOT EXISTS `cv_encuesta` (
  `idencuesta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `idSesionGrupo` int(11) NOT NULL,
  `PlantillaSesion` int(11) NOT NULL,
  PRIMARY KEY (`idencuesta`,`idSesionGrupo`,`PlantillaSesion`),
  KEY `fk_cv_encuesta_cv_SesionGrupo1_idx` (`idSesionGrupo`),
  KEY `fk_cv_encuesta_cv_PlantillaSesion1_idx` (`PlantillaSesion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_EncuestaLibro`
--

CREATE TABLE IF NOT EXISTS `cv_EncuestaLibro` (
  `idEncuestaLibro` int(11) NOT NULL AUTO_INCREMENT,
  `libro1` int(11) NOT NULL,
  `like1` int(11) NOT NULL,
  `libro2` int(11) NOT NULL,
  `like2` int(11) NOT NULL,
  `libro3` int(11) NOT NULL,
  `like3` int(11) NOT NULL,
  `libro4` int(11) NOT NULL,
  `like4` int(11) NOT NULL,
  `libro5` int(11) NOT NULL,
  `like5` int(11) NOT NULL,
  `SesionGrupo` int(11) NOT NULL,
  `Grupos` int(11) NOT NULL,
  PRIMARY KEY (`idEncuestaLibro`,`SesionGrupo`,`Grupos`),
  KEY `fk_cv_EncuestaLibro_cv_SesionGrupo1_idx` (`SesionGrupo`,`Grupos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_Estadisticas`
--

CREATE TABLE IF NOT EXISTS `cv_Estadisticas` (
  `idEstadisticas` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` int(11) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `Respecto` varchar(45) NOT NULL,
  `Year` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Mes` int(11) NOT NULL,
  PRIMARY KEY (`idEstadisticas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_Evento`
--

CREATE TABLE IF NOT EXISTS `cv_Evento` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEvento` varchar(45) NOT NULL,
  `FechaEvento` date NOT NULL,
  `FechaLimite` date NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Imagen` varchar(60) NOT NULL,
  `idGrupos` int(11) NOT NULL,
  PRIMARY KEY (`idEvento`,`idGrupos`),
  KEY `fk_Evento_Grupos1_idx` (`idGrupos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_Grupos`
--

CREATE TABLE IF NOT EXISTS `cv_Grupos` (
  `idGrupos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  `LibroSeleccionado` int(11) NOT NULL,
  `Estado` int(11) NOT NULL,
  `LimiteUsuarios` int(3) NOT NULL,
  PRIMARY KEY (`idGrupos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cv_Grupos`
--

INSERT INTO `cv_Grupos` (`idGrupos`, `nombre`, `Descripcion`, `url`, `LibroSeleccionado`, `Estado`, `LimiteUsuarios`) VALUES
(1, 'Grupo Sistemas', 'Sistemas/Informatica', '', 13, 1, 20),
(2, 'Grupo Mecatronica', 'Mecatronica/Electronica', '', 13, 1, 20),
(3, 'Grupos de Trabajadores', 'Solo turno de trabajadores.', '', 15, 1, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_Libro`
--

CREATE TABLE IF NOT EXISTS `cv_Libro` (
  `idLibro` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(45) NOT NULL,
  `Autor` varchar(45) NOT NULL,
  `Edicion` varchar(45) NOT NULL,
  `FechaLanzamiento` varchar(45) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(99) NOT NULL,
  `Enlace` varchar(250) NOT NULL,
  `Archivo` varchar(45) NOT NULL,
  `Pais` varchar(45) NOT NULL,
  `Editorial` varchar(45) NOT NULL,
  `LikeLibro` int(11) NOT NULL,
  `CatalogoDeLibros` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`idLibro`,`CatalogoDeLibros`),
  KEY `fk_Libro_CatalogoDeLibros1_idx` (`CatalogoDeLibros`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `cv_Libro`
--

INSERT INTO `cv_Libro` (`idLibro`, `Titulo`, `Autor`, `Edicion`, `FechaLanzamiento`, `Descripcion`, `Imagen`, `Enlace`, `Archivo`, `Pais`, `Editorial`, `LikeLibro`, `CatalogoDeLibros`, `Fecha`) VALUES
(13, 'Libro de Diccionario', '', '', '', 'Diccionario', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/a-diccionario.pdf', '', '', '', 0, 178, '2015-04-11'),
(15, 'Switching', 'Cisco', '1', '12-03-1980', 'Conmutacion y enrutamiento de redes', '', 'http://www.uoc.edu/masters/oficiales/img/922.', '', '', '', 0, 179, '2015-09-09'),
(16, 'Redes de Sensores', 'Charles Newton', '1', '12-12-12', 'Libro de Sensores', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/a-diccionario.pdf', '', '', '', 0, 178, '2015-11-07'),
(17, 'Historia Mexicali', 'Lazaro', '21', '12-12-12', 'Histora de Mexicali', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/c-diccionario.pdf', '', '', '', 0, 179, '2015-11-07'),
(18, 'Historia Mexicali Chinesca', 'Centro', '21', '12-12-12', 'Histora de Mexicali Centro historico', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/ch-diccionario.pdf', '', '', '', 0, 179, '2015-11-07'),
(19, 'Danza', 'Mendoza Karla', '21', '12-12-12', 'Poesia Historica', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/d-diccionario.pdf', '', '', '', 0, 181, '2015-11-07'),
(20, 'Economia ', 'Sanches Libes', '21', '12-12-12', 'Poesia Historica', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/e-diccionario.pdf', '', '', '', 0, 181, '2015-11-07'),
(21, 'Galidon Galves', 'Galindo Galves', '21', '12-12-12', 'Lieteratura', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/g-diccionario.pdf', '', '', '', 0, 180, '2015-11-07'),
(22, 'Hidrologia', 'Francisco Cortez', '12', '12-12-12', 'Libros de Psicologia', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/h-diccionario.pdf', '', '', '', 0, 182, '2015-11-07'),
(23, 'Epigmineo', 'Francisco Cortez', '12', '12-12-12', 'Libros de Psicologia', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/h-diccionario.pdf', '', '', '', 0, 182, '2015-11-07'),
(24, 'Vaquita Marina', 'Luisa Allende', '1', '12-12-12', 'Libros de Ciencia', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/h-diccionario.pdf', '', '', '', 0, 185, '2015-11-07'),
(25, 'Instituo Mexicano de Cultura', 'Carlos Estrada/Jose Ruiz', '1', '12-12-12', 'Libros de Ciencia', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/u-diccionario.pdf', '', '', '', 0, 184, '2015-11-07'),
(26, 'Primeros Pioneros', 'Maria Josefina Ibarra', '1', '12-12-12', 'Libros de Ciencia', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/p-diccionario.pdf', '', '', '', 0, 185, '2015-11-07'),
(27, 'Primeros Pioneros', 'Maria Josefina Ibarra', '1', '12-12-12', 'Libros de Ciencia', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/p-diccionario.pdf', '', '', '', 0, 185, '2015-11-07'),
(28, 'Vida de Navarro', 'Navarro Cortina Rafael', '1', '12-12-12', 'Libros Contaduria', '', 'http://www.bibliotecavirtualbc.gob.mx/img/pdf-diccionario/p-diccionario.pdf', '', '', '', 0, 183, '2015-11-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_NivelAdmin`
--

CREATE TABLE IF NOT EXISTS `cv_NivelAdmin` (
  `idcv_NivelAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fechaCreacion` varchar(45) NOT NULL,
  PRIMARY KEY (`idcv_NivelAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_PlantillaSesion`
--

CREATE TABLE IF NOT EXISTS `cv_PlantillaSesion` (
  `idPlantillaSesion` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Libro` int(11) NOT NULL,
  `Limite` varchar(45) NOT NULL,
  `Tipo` int(11) NOT NULL,
  `cv_idLibro` int(11) NOT NULL,
  `Puntos` int(11) NOT NULL,
  PRIMARY KEY (`idPlantillaSesion`,`cv_idLibro`),
  KEY `fk_cv_PlantillaSesion_cv_Libro1_idx` (`cv_idLibro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_preguntas`
--

CREATE TABLE IF NOT EXISTS `cv_preguntas` (
  `idpreguntas` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(45) NOT NULL,
  `opcionA` varchar(45) NOT NULL,
  `opcionB` varchar(45) NOT NULL,
  `opcionC` varchar(45) NOT NULL,
  `opcionD` varchar(45) NOT NULL,
  `opcionE` varchar(45) NOT NULL,
  `likes` int(11) NOT NULL,
  `correcta` int(11) NOT NULL,
  `idencuestaEnPregunta` int(11) NOT NULL,
  PRIMARY KEY (`idpreguntas`,`idencuestaEnPregunta`),
  KEY `fk_cv_preguntas_cv_encuesta1_idx` (`idencuestaEnPregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_SesionGrupo`
--

CREATE TABLE IF NOT EXISTS `cv_SesionGrupo` (
  `idSesionGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  `Url` varchar(45) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFinal` date NOT NULL,
  `Limite` varchar(45) NOT NULL,
  `idLibroSesion` int(11) NOT NULL,
  `Puntos` int(11) NOT NULL,
  `sEstado` int(10) unsigned NOT NULL,
  `idGruposSe` int(11) NOT NULL,
  PRIMARY KEY (`idSesionGrupo`,`idLibroSesion`,`idGruposSe`),
  UNIQUE KEY `idSesionGrupo_UNIQUE` (`idSesionGrupo`),
  KEY `fk_cv_SesionGrupo_cv_Libro1_idx` (`idLibroSesion`),
  KEY `fk_cv_SesionGrupo_cv_Grupos1_idx` (`idGruposSe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cv_SesionGrupo`
--

INSERT INTO `cv_SesionGrupo` (`idSesionGrupo`, `Descripcion`, `Url`, `FechaInicio`, `FechaFinal`, `Limite`, `idLibroSesion`, `Puntos`, `sEstado`, `idGruposSe`) VALUES
(1, '', '', '2015-09-09', '0000-00-00', '', 13, 4, 1, 1),
(2, '', '', '2015-09-09', '0000-00-00', '', 13, 6, 1, 2),
(3, '', '', '2015-10-17', '0000-00-00', '', 15, 4, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_Tarea`
--

CREATE TABLE IF NOT EXISTS `cv_Tarea` (
  `idTarea` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `FechaCreacion` date NOT NULL,
  `FechaLimite` date NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `UrlArchivo` varchar(45) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `valor` int(11) NOT NULL,
  `idSesionGrupo` int(11) NOT NULL,
  PRIMARY KEY (`idTarea`),
  UNIQUE KEY `idTarea_UNIQUE` (`idTarea`),
  KEY `fk_cv_Tarea_cv_SesionGrupo1_idx` (`idSesionGrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_Tema`
--

CREATE TABLE IF NOT EXISTS `cv_Tema` (
  `idTema` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `TdSesionGrupo` int(11) NOT NULL,
  PRIMARY KEY (`idTema`,`TdSesionGrupo`),
  KEY `fk_cv_Tema_cv_SesionGrupo1_idx` (`TdSesionGrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cv_Tema`
--

INSERT INTO `cv_Tema` (`idTema`, `Nombre`, `Descripcion`, `TdSesionGrupo`) VALUES
(1, 'Que dice la Pagina 42', '', 2),
(2, 'Que piensas ?', '', 2),
(3, 'Hola sistemas', '', 1),
(4, 'Cuando numero de hojas llevan?', '', 2),
(5, 'A que hora entran?', '', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_tipoUsuario`
--

CREATE TABLE IF NOT EXISTS `cv_tipoUsuario` (
  `idtipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cv_tipoUsuario`
--

INSERT INTO `cv_tipoUsuario` (`idtipoUsuario`, `desc`) VALUES
(1, 'Administrador'),
(2, 'Moderador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_Usuario`
--

CREATE TABLE IF NOT EXISTS `cv_Usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  `NumControl` int(11) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `FotoPerfil` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Sobre` text NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `cv_pass` varchar(45) NOT NULL,
  `tipoUsuario` int(11) NOT NULL,
  `fechaNac` date NOT NULL,
  `fechaRegistro` date NOT NULL,
  `Carrera` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_cv_Usuario_cv_tipoUsuario1_idx` (`tipoUsuario`),
  KEY `fk_cv_Usuario_cv_carreras1_idx` (`Carrera`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `cv_Usuario`
--

INSERT INTO `cv_Usuario` (`idUsuario`, `nombre`, `apellido`, `apellido2`, `NumControl`, `Semestre`, `Telefono`, `FotoPerfil`, `url`, `Edad`, `Sobre`, `Correo`, `cv_pass`, `tipoUsuario`, `fechaNac`, `fechaRegistro`, `Carrera`) VALUES
(4, 'mario', 'alonso', '', 0, 0, '', '', '', 0, '', '', '', 1, '0000-00-00', '0000-00-00', 1),
(5, 'carlos', 'alonso', '', 0, 0, '', '', '', 0, '', '', '', 1, '0000-00-00', '0000-00-00', 1),
(6, 'Mario Alonso', 'hernandez', 'iÃ±iguez', 11490207, 2, '', '', '', 20, '', 'alonsioh@gmail.com', 'nose123', 2, '0000-00-00', '2015-04-04', 1),
(7, 'Ejemplo', 'x', 'iÃ±iguez', 11490111, 2, '', '', '', 20, '', 'adas@sadas.com', 'nose123', 2, '0000-00-00', '2015-04-04', 1),
(8, 'carlos', 'alberto', 'mm', 1149208, 9, '', '', '', 20, '', 'a@bs.com', 'mario123', 2, '0000-00-00', '2015-04-07', 1),
(9, 'manuel', 'gutierrez', 'perez', 11492020, 14, '', '', '', 50, '', 'manuel@asas.com', 'nose123', 2, '0000-00-00', '2015-04-07', 1),
(10, 'demo', 'gutierrez', 'perez', 11492020, 14, '', '', '', 50, '', 'demo@asc.com', 'nose123', 2, '0000-00-00', '2015-04-07', 1),
(11, 'alberto', 'aguilar', 'Hernandez', 11492020, 14, '', '', '', 50, '', 'aguilar@as.com', 'nose123', 2, '0000-00-00', '2015-04-07', 1),
(12, 'pepe', 'acosta', 'Hernandez', 11490204, 14, '', '', '', 10, '', 'aguilar@demo.com', 'nose123', 2, '0000-00-00', '2015-04-07', 1),
(13, 'karla', 'daniela', 'hern', 11490204, 6, '', '', '', 30, '', 'karla@hotmail.com', 'mario123', 2, '0000-00-00', '2015-04-07', 5),
(14, 'asd', 'a', 'asd', 1149020, 2, '', '', '', 2, '', 'alonsohijj@hotmail.com', 'nose123', 2, '0000-00-00', '2015-04-12', 1),
(15, 'Andres', 'Yebra', 'Cervantes', 11490774, 9, '', '', '', 22, '', 'andres@yebra.com', 'andresyebra', 2, '0000-00-00', '2015-09-09', 5),
(16, 'Andres', 'Yebra', 'Cervantes', 11490774, 9, '', '', '', 22, '', 'yebra@andres.com', 'andresyebra', 1, '0000-00-00', '0000-00-00', 5),
(17, 'Andres', 'Yebra', 'Cervantes', 11490774, 9, '', '', '', 22, '', 'andres.yebracervantes@gmail.com', 'and7408', 2, '0000-00-00', '2015-10-14', 1),
(18, 'karen', 'yebra', 'cervantes', 11490772, 9, '', '', '', 22, '', 'karen@yebra.com', 'andresyebra', 2, '0000-00-00', '2015-10-21', 1),
(19, 'osdnjdcuh', 'djnhjdh', 'njcdn', 123456789, 9, '', '', '', 123, '', 'andujh@yebra.com', 'andresyebra', 2, '0000-00-00', '2015-11-24', 1),
(20, 'carlos', 'perez', 'lopez', 111111, 8, '', '', '', 40, '', 'carlos@perez.com', 'andresyebra', 2, '0000-00-00', '2015-12-06', 4),
(21, 'Jesus ', 'Morales ', 'Hidalgo', 12345678, 9, '', '', '', 34, '', 'jesus@morales.com', '123456789', 2, '0000-00-00', '2015-12-06', 1),
(22, 'jojojo', 'jojojo', 'jojojo', 11220784, 7, '', '', '', 20, '', 'jojojojo@jojojojo.com', 'andresyebra', 2, '0000-00-00', '2015-12-06', 1),
(23, 'feo', 'feo', 'feo', 11111111, 8, '', '', '', 18, '', 'feofeo@feofeo.com', '12345678', 2, '0000-00-00', '2015-12-06', 1),
(24, 'qwerty', 'qwerty', 'qwerty', 123456789, 9, '', '', '', 18, '', 'qwerty@qwerty.com', '12345678', 2, '0000-00-00', '2015-12-07', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PlantillaSesionLibro`
--

CREATE TABLE IF NOT EXISTS `PlantillaSesionLibro` (
  `PlantillaSesion_idPlantillaSesion` int(11) NOT NULL,
  `PlantillaSesion_SesionGrupo_idSesionGrupo` int(11) NOT NULL,
  `PlantillaSesion_SesionGrupo_Grupos_idGrupos` int(11) NOT NULL,
  `Libro_idLibro` int(11) NOT NULL,
  `Libro_CatalogoDeLibros_idCatalogoDeLibros` int(11) NOT NULL,
  PRIMARY KEY (`PlantillaSesion_idPlantillaSesion`,`PlantillaSesion_SesionGrupo_idSesionGrupo`,`PlantillaSesion_SesionGrupo_Grupos_idGrupos`,`Libro_idLibro`,`Libro_CatalogoDeLibros_idCatalogoDeLibros`),
  KEY `fk_PlantillaSesion_has_Libro_Libro1_idx` (`Libro_idLibro`,`Libro_CatalogoDeLibros_idCatalogoDeLibros`),
  KEY `fk_PlantillaSesion_has_Libro_PlantillaSesion1_idx` (`PlantillaSesion_idPlantillaSesion`,`PlantillaSesion_SesionGrupo_idSesionGrupo`,`PlantillaSesion_SesionGrupo_Grupos_idGrupos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PuntosSession`
--

CREATE TABLE IF NOT EXISTS `PuntosSession` (
  `PSesionGrupo` int(11) NOT NULL,
  `PUsuario` int(11) NOT NULL,
  `Puntos` int(11) NOT NULL,
  PRIMARY KEY (`PSesionGrupo`,`PUsuario`),
  KEY `fk_cv_SesionGrupo_has_cv_Usuario_cv_Usuario1_idx` (`PUsuario`),
  KEY `fk_cv_SesionGrupo_has_cv_Usuario_cv_SesionGrupo1_idx` (`PSesionGrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UsuarioGrupos`
--

CREATE TABLE IF NOT EXISTS `UsuarioGrupos` (
  `GUsuario` int(11) NOT NULL,
  `GGrupos` int(11) NOT NULL,
  `Estado` int(11) NOT NULL,
  PRIMARY KEY (`GUsuario`,`GGrupos`),
  KEY `fk_Usuario_has_Grupos_Grupos1_idx` (`GGrupos`),
  KEY `fk_Usuario_has_Grupos_Usuario_idx` (`GUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `UsuarioGrupos`
--

INSERT INTO `UsuarioGrupos` (`GUsuario`, `GGrupos`, `Estado`) VALUES
(15, 3, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cv_Admin`
--
ALTER TABLE `cv_Admin`
  ADD CONSTRAINT `fk_cv_Admin_cv_NivelAdmin1` FOREIGN KEY (`idNivelAdmin`) REFERENCES `cv_NivelAdmin` (`idcv_NivelAdmin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_encuesta`
--
ALTER TABLE `cv_encuesta`
  ADD CONSTRAINT `fk_cv_encuesta_cv_PlantillaSesion1` FOREIGN KEY (`PlantillaSesion`) REFERENCES `cv_PlantillaSesion` (`idPlantillaSesion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cv_encuesta_cv_SesionGrupo1` FOREIGN KEY (`idSesionGrupo`) REFERENCES `cv_SesionGrupo` (`idSesionGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_EncuestaLibro`
--
ALTER TABLE `cv_EncuestaLibro`
  ADD CONSTRAINT `fk_cv_EncuestaLibro_cv_SesionGrupo1` FOREIGN KEY (`SesionGrupo`) REFERENCES `cv_SesionGrupo` (`idSesionGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_Evento`
--
ALTER TABLE `cv_Evento`
  ADD CONSTRAINT `fk_Evento_Grupos1` FOREIGN KEY (`idGrupos`) REFERENCES `cv_Grupos` (`idGrupos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_Libro`
--
ALTER TABLE `cv_Libro`
  ADD CONSTRAINT `fk_Libro_CatalogoDeLibros1` FOREIGN KEY (`CatalogoDeLibros`) REFERENCES `cv_CatalogoDeLibros` (`idCatalogoDeLibros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_PlantillaSesion`
--
ALTER TABLE `cv_PlantillaSesion`
  ADD CONSTRAINT `fk_cv_PlantillaSesion_cv_Libro1` FOREIGN KEY (`cv_idLibro`) REFERENCES `cv_Libro` (`idLibro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_preguntas`
--
ALTER TABLE `cv_preguntas`
  ADD CONSTRAINT `fk_cv_preguntas_cv_encuesta1` FOREIGN KEY (`idencuestaEnPregunta`) REFERENCES `cv_encuesta` (`idencuesta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_SesionGrupo`
--
ALTER TABLE `cv_SesionGrupo`
  ADD CONSTRAINT `fk_cv_SesionGrupo_cv_Grupos1` FOREIGN KEY (`idGruposSe`) REFERENCES `cv_Grupos` (`idGrupos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cv_SesionGrupo_cv_Libro1` FOREIGN KEY (`idLibroSesion`) REFERENCES `cv_Libro` (`idLibro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_Tarea`
--
ALTER TABLE `cv_Tarea`
  ADD CONSTRAINT `fk_cv_Tarea_cv_SesionGrupo1` FOREIGN KEY (`idSesionGrupo`) REFERENCES `cv_SesionGrupo` (`idSesionGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_Tema`
--
ALTER TABLE `cv_Tema`
  ADD CONSTRAINT `fk_cv_Tema_cv_SesionGrupo1` FOREIGN KEY (`TdSesionGrupo`) REFERENCES `cv_SesionGrupo` (`idSesionGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_Usuario`
--
ALTER TABLE `cv_Usuario`
  ADD CONSTRAINT `fk_cv_Usuario_cv_carreras1` FOREIGN KEY (`Carrera`) REFERENCES `cv_carreras` (`idcv_carreras`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cv_Usuario_cv_tipoUsuario1` FOREIGN KEY (`tipoUsuario`) REFERENCES `cv_tipoUsuario` (`idtipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `PlantillaSesionLibro`
--
ALTER TABLE `PlantillaSesionLibro`
  ADD CONSTRAINT `fk_PlantillaSesion_has_Libro_Libro1` FOREIGN KEY (`Libro_idLibro`, `Libro_CatalogoDeLibros_idCatalogoDeLibros`) REFERENCES `cv_Libro` (`idLibro`, `CatalogoDeLibros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PlantillaSesion_has_Libro_PlantillaSesion1` FOREIGN KEY (`PlantillaSesion_idPlantillaSesion`) REFERENCES `cv_PlantillaSesion` (`idPlantillaSesion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `PuntosSession`
--
ALTER TABLE `PuntosSession`
  ADD CONSTRAINT `fk_cv_SesionGrupo_has_cv_Usuario_cv_SesionGrupo1` FOREIGN KEY (`PSesionGrupo`) REFERENCES `cv_SesionGrupo` (`idSesionGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cv_SesionGrupo_has_cv_Usuario_cv_Usuario1` FOREIGN KEY (`PUsuario`) REFERENCES `cv_Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `UsuarioGrupos`
--
ALTER TABLE `UsuarioGrupos`
  ADD CONSTRAINT `fk_Usuario_has_Grupos_Grupos1` FOREIGN KEY (`GGrupos`) REFERENCES `cv_Grupos` (`idGrupos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_has_Grupos_Usuario` FOREIGN KEY (`GUsuario`) REFERENCES `cv_Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

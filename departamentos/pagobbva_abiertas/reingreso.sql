-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-12-2021 a las 11:09:52
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: ` bbva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reingreso`
--

CREATE TABLE `reingreso` (
  `no_control` varchar(20) NOT NULL,
  `clave_pago` varchar(20) NOT NULL,
  `alu_nom` varchar(100) NOT NULL,
  `alu_monto` varchar(20) NOT NULL,
  `concepto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reingreso`
--

INSERT INTO `reingreso` (`no_control`, `clave_pago`, `alu_nom`, `alu_monto`, `concepto`) VALUES
('09490293', '777', 'german rodriguez avila', '3150.00', 'reingreso 2022'),
('16491051', '777', 'ZAZUETA VILLALOBOS ARY BRAYAN', '3150.00', 'reingreso 2022'),
('17490809', '777', 'YANEZ MARTHA ISAAC ALFREDO\r\n', '3150.00', 'reingreso 2022'),
('18490703', '777', 'YEPIZ CASTRO MELANIE ANAHYS', '3150.00', 'reingreso 2022'),
('20490020', '777', 'ZUMAYA VILLA FRIDA SOPHIA', '3150.00', 'reingreso 2022'),
('20490197', '777', 'VILLASENOR LARA DAVID AARON\r\n', '3150.00', 'reingreso 2022'),
('20490556', '777', 'ZARAGOZA CASTRO LEONARDO FAVIO', '3150.00', 'reingreso 2022'),
('20490617', '777', 'ZARATE ALZUA CARLOS ANDRES', '3150.00', 'reingreso 2022'),
('21490202', '777', 'ZUNIGA IBARRA MAYRA CAROLINA', '3150.00', 'reingreso 2022'),
('M09490293', '777', 'german rodriguez avila', '3150.00', 'reingreso 2022');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reingreso`
--
ALTER TABLE `reingreso`
  ADD PRIMARY KEY (`no_control`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 01:52:51
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_joyeriasoyeon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `ID_Articulo` int(4) NOT NULL,
  `NombreArticulo` varchar(60) NOT NULL,
  `TipoArticulo` varchar(50) NOT NULL,
  `PrecioArticulo` int(10) NOT NULL,
  `ExistenciaArticulo` tinyint(1) NOT NULL,
  `EnPromocion` varchar(5) NOT NULL,
  `TiempoPromo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`ID_Articulo`, `NombreArticulo`, `TipoArticulo`, `PrecioArticulo`, `ExistenciaArticulo`, `EnPromocion`, `TiempoPromo`) VALUES
(21, 'Arete de Oro', 'Accesorios', 2500, 1, 'Si', '2 semanas'),
(22, 'Arete de Plata', 'Accesorios', 2100, 1, 'Si', '3 dias'),
(24, 'Collar de obsidiana', 'Accesorios', 1850, 0, 'No', NULL),
(26, 'Anillo de plata', 'Accesorios', 780, 1, 'Si', '1 semana'),
(27, 'Reloj Rolex', 'Relojes', 8500, 0, 'Si', 'todo el mes'),
(28, 'Arete de platino', 'Accesorios', 2500, 1, 'Si', '1 dia'),
(29, 'Collar Platinado', 'Temporada en liquidacion', 600, 1, 'No', NULL),
(30, 'Anillo de boda', 'Eventos', 1600, 0, 'Si', '3 semanas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID_Empleado` int(50) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `FechadeNacimiento` date NOT NULL,
  `FechaIngreso` date NOT NULL,
  `TurnoLaboral` varchar(25) NOT NULL,
  `CorreoElectronico` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID_Empleado`, `Nombre`, `Apellido`, `FechadeNacimiento`, `FechaIngreso`, `TurnoLaboral`, `CorreoElectronico`) VALUES
(246, 'Karim', 'Bishop', '2002-10-08', '2025-04-02', 'Vespertino', 'karimb@mail.com'),
(625, 'Juan', 'Martinez', '2008-12-03', '2027-12-10', 'Matutino', 'juan@gmail.com'),
(626, 'Marcos', 'Casas', '2004-08-04', '2022-09-01', 'Matutino', 'marcos@gmail.com'),
(629, 'Manuel', 'Rodriguez', '2000-08-09', '2020-03-07', 'Vespertino', 'Manuel@gmail.com'),
(630, 'Lisa', 'Jisoo', '1998-10-08', '2024-11-01', 'Matutino', 'lisa@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_Transaccion` int(25) NOT NULL,
  `NoTarjeta` int(16) NOT NULL,
  `NombreTitular` varchar(20) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `CVV` int(3) NOT NULL,
  `FechadeCaducidad` date NOT NULL,
  `MontoaPagar` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`ID_Transaccion`, `NoTarjeta`, `NombreTitular`, `Apellidos`, `CVV`, `FechadeCaducidad`, `MontoaPagar`) VALUES
(2908, 3332315, 'Abisai', 'Sanchez Rubio', 288, '2028-02-03', 550),
(2909, 8758758, 'Juan', 'Martinez', 111, '2021-09-09', 245),
(2910, 9819113, 'Miguel', 'Garcia', 566, '2021-12-12', 600),
(2911, 5353252, 'Alonso', 'Trejo', 788, '2025-08-09', 1200),
(2912, 4242422, 'Ramon', 'Perez', 999, '2023-10-01', 900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `ID_Joya` int(5) NOT NULL,
  `NodeLote` int(15) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `FechaEmpaquetado` date NOT NULL,
  `NoDeBodega` int(10) NOT NULL,
  `TipoJoya` varchar(25) NOT NULL,
  `FechadeSurtido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`ID_Joya`, `NodeLote`, `Marca`, `FechaEmpaquetado`, `NoDeBodega`, `TipoJoya`, `FechadeSurtido`) VALUES
(27, 345, 'Rolex', '2021-02-08', 2, 'Relojes', '2021-12-01'),
(29, 345, 'Dior', '2020-02-09', 1, 'Accesorios', '2021-10-23'),
(30, 345, 'Tiffany Co', '2020-02-09', 2, 'Accesorios', '2021-12-01'),
(31, 346, 'Adidas', '2019-06-25', 2, 'Relojes', '2021-12-01'),
(32, 346, 'Samsung', '2021-02-08', 2, 'Relojes', '2021-12-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`ID_Articulo`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_Empleado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_Transaccion`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID_Joya`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `ID_Articulo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=879378;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID_Empleado` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=632;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_Transaccion` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2914;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `ID_Joya` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

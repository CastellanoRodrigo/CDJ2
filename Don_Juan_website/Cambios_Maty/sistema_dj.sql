-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 19:58:54
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_dj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `Id_Alquiler` int(20) NOT NULL,
  `Id_Parcela` int(20) NOT NULL,
  `NombreArrendatario` varchar(25) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campañahacienda`
--

CREATE TABLE `campañahacienda` (
  `Id_Campaña` int(20) NOT NULL,
  `Id_Parcela` int(20) NOT NULL,
  `NombreCampaña` varchar(25) NOT NULL,
  `Id_DetalleHacienda` int(20) NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campañasiembra`
--

CREATE TABLE `campañasiembra` (
  `Id_CampañaSiembra` int(20) NOT NULL,
  `Id_Parcela` int(20) NOT NULL,
  `NombreCampaña` varchar(25) NOT NULL,
  `Id_DetalleSiembra` int(20) NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campañasiembra`
--

INSERT INTO `campañasiembra` (`Id_CampañaSiembra`, `Id_Parcela`, `NombreCampaña`, `Id_DetalleSiembra`, `Estado`) VALUES
(1, 5, 'Cosecha Gruesa Maiz 2023', 1, 'Iniciada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chequesa_pagar`
--

CREATE TABLE `chequesa_pagar` (
  `NroCheque` int(25) NOT NULL,
  `Concepto` varchar(25) NOT NULL,
  `FechaEmision` date NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `Importe` double NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chequesemtidos`
--

CREATE TABLE `chequesemtidos` (
  `NroCheque` int(25) NOT NULL,
  `Concepto` varchar(25) NOT NULL,
  `FechaEmision` date NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `Importe` double NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id_Compra` int(20) NOT NULL,
  `Id_Campaña` int(20) NOT NULL,
  `Fecha` date NOT NULL,
  `TipoFactura` int(25) NOT NULL,
  `PuntoDeVenta` int(25) NOT NULL,
  `NumeroDesde` int(25) NOT NULL,
  `NumeroHasta` int(25) NOT NULL,
  `CodAutorizacion` int(25) NOT NULL,
  `TipoDocEmisor` varchar(25) NOT NULL,
  `NroDocEmisor` int(25) NOT NULL,
  `DenominacionEmisor` varchar(25) NOT NULL,
  `TipoCambio` varchar(25) NOT NULL,
  `Moneda` varchar(25) NOT NULL,
  `ImpNetoGravado` double NOT NULL,
  `ImNetoNoGravado` double NOT NULL,
  `ImpOpExentas` double NOT NULL,
  `IVA` varchar(25) NOT NULL,
  `ImporteTotal` double NOT NULL,
  `Detalle` varchar(25) NOT NULL,
  `FormaPago` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecampañahacienda`
--

CREATE TABLE `detallecampañahacienda` (
  `Id_DetalleHacienda` int(20) NOT NULL,
  `Id_Campaña` int(20) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaCierre` date NOT NULL,
  `CantidadHectareas` int(20) NOT NULL,
  `CantidadCabezas` int(20) NOT NULL,
  `Categoria` varchar(25) NOT NULL,
  `InversionRealizada` decimal(25,0) NOT NULL,
  `GananciaObtenida` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecampañasiembra`
--

CREATE TABLE `detallecampañasiembra` (
  `Id_DetalleSiembra` int(20) NOT NULL,
  `Id_Campaña` int(20) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaCierre` date NOT NULL,
  `CantidadHectareas` int(20) NOT NULL,
  `Id_Cultivo` int(20) NOT NULL,
  `RindeEspeculado` int(20) NOT NULL,
  `RindeTotal` int(20) NOT NULL,
  `InversionRealizada` decimal(10,0) NOT NULL,
  `GananciaObtenida` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_parcela`
--

CREATE TABLE `estado_parcela` (
  `Id_EstadoParcela` int(20) NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado_parcela`
--

INSERT INTO `estado_parcela` (`Id_EstadoParcela`, `Estado`) VALUES
(1, 'Libre'),
(2, 'Ocupacion Parcial'),
(3, 'Ocupacion Completa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacienda`
--

CREATE TABLE `hacienda` (
  `Fecha` date NOT NULL,
  `Vendedor` varchar(20) NOT NULL,
  `CantidadCabezas` int(4) NOT NULL,
  `KgTotal` int(10) NOT NULL,
  `KgPromedio` int(10) NOT NULL,
  `PrecioPorCabeza` float NOT NULL,
  `PrecioBruto` float NOT NULL,
  `CostoTotalCompra` float NOT NULL,
  `Categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_estado`
--

CREATE TABLE `historial_estado` (
  `Id_Historial_Estado` int(20) NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_estado`
--

INSERT INTO `historial_estado` (`Id_Historial_Estado`, `Estado`) VALUES
(1, 'Iniciada'),
(2, 'Finalizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parcela`
--

CREATE TABLE `parcela` (
  `Id_Parcela` int(11) NOT NULL,
  `CantidadHectareas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parcela`
--

INSERT INTO `parcela` (`Id_Parcela`, `CantidadHectareas`) VALUES
(1, 43),
(2, 90),
(3, 100),
(4, 70),
(5, 100),
(6, 70),
(8, 35),
(9, 65),
(10, 95),
(11, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rindeconsecha`
--

CREATE TABLE `rindeconsecha` (
  `Id_RindeCosecha` int(20) NOT NULL,
  `ParcelasUtilizadas` varchar(25) NOT NULL,
  `CantHectareas` int(20) NOT NULL,
  `CantBolsas` int(20) NOT NULL,
  `CantKgPorBolsa` int(20) NOT NULL,
  `CantKgPorSilo` int(20) NOT NULL,
  `KgTotales` int(20) NOT NULL,
  `PromedioPorHectarea` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siembra`
--

CREATE TABLE `siembra` (
  `Id_Cultivo` int(20) NOT NULL,
  `NombreCultivo` varchar(25) NOT NULL,
  `KgSemillaPorHectarea` int(25) NOT NULL,
  `RindeEsperadoPorHectarea` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `siembra`
--

INSERT INTO `siembra` (`Id_Cultivo`, `NombreCultivo`, `KgSemillaPorHectarea`, `RindeEsperadoPorHectarea`) VALUES
(1, 'Maiz de Primera', 20, 5000),
(2, 'Maiz de segunda', 20, 6000),
(3, 'Girasol', 20, 2000),
(4, 'Cebada', 110, 3000),
(5, 'Avena', 6, 2000),
(6, 'Alfalfa', 10, 5),
(7, 'Soja', 70, 2500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Adm. de Negocio'),
(2, 'Adm. General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `apellido`, `tipo_usuario`) VALUES
(1, 'admin', 'admin', 'Aldo', 'Dolce', 1),
(2, 'Admin_Gen', 'admin', 'Lucila', 'Dolce', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

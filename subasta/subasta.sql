-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2022 a las 17:34:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `subasta`
--

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `login` (`email` VARCHAR(100), `passw` VARCHAR(512)) RETURNS INT(11)  BEGIN

DECLARE isValid INT;

IF EXISTS (SELECT user, password FROM usuario WHERE user LIKE email AND password LIKE passw) THEN
  BEGIN
    SET isValid=1;
  END;
ELSE
  BEGIN
    SET isValid=0;
  END;
END IF;

return isValid;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codProd` int(11) NOT NULL,
  `nomProd` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `material` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `anchura` float NOT NULL,
  `altura` float NOT NULL,
  `categoria` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `codSubasta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codProd`, `nomProd`, `material`, `anchura`, `altura`, `categoria`, `codSubasta`) VALUES
(1, 'Multimanitas', 'Aluminio, Acero, Cerámica, ...', 30.5, 40.25, 'Multiherramientas', 1),
(2, 'Transmueble', 'Algodón, Aluminio, Ironsoftware, ...', 1000, 1950.9, 'Mueble Autotransformable', 2),
(3, 'Coche fantástico', 'Acero, Kevlar, Titanio, ...', 980.72, 1400.13, 'Super coches', 3),
(4, 'Cambtech', 'Aluminio, cristal, ...', 15.84, 32.63, 'Dispositivo cambiante', 4),
(5, 'bridal', 'Materiales brillantes', 28.64, 24.57, 'Piedras preciosas', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puja`
--

CREATE TABLE `puja` (
  `codPuja` int(11) NOT NULL,
  `valor` float NOT NULL,
  `fecha` datetime NOT NULL,
  `codUsu` int(11) NOT NULL,
  `codSubasta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `puja`
--

INSERT INTO `puja` (`codPuja`, `valor`, `fecha`, `codUsu`, `codSubasta`) VALUES
(1, 1200, '2022-08-05 10:15:00', 2, 1),
(2, 1275, '2022-08-05 10:32:10', 3, 1),
(3, 2025, '2022-08-05 10:42:20', 2, 1),
(4, 2039, '2022-08-05 11:00:30', 3, 1),
(5, 2500, '2022-08-05 11:14:40', 2, 1),
(6, 5000, '2022-08-06 12:25:00', 3, 2),
(7, 5025, '2022-08-06 12:42:20', 2, 2),
(8, 6000, '2022-08-06 13:05:40', 3, 2),
(9, 25000, '2022-08-06 16:11:20', 2, 3),
(10, 25800, '2022-08-07 16:29:10', 3, 3),
(11, 26400, '2022-08-07 16:43:30', 2, 3),
(12, 27000, '2022-08-06 16:58:20', 3, 3),
(13, 27350, '2022-08-07 17:15:40', 2, 3),
(14, 28130, '2022-08-07 17:28:10', 3, 3),
(15, 32000, '2022-08-07 17:38:32', 2, 3),
(16, 1900, '2022-08-07 11:26:45', 3, 4),
(17, 2175, '2022-08-07 11:42:29', 2, 4),
(18, 2320, '2022-08-07 11:55:12', 3, 4),
(19, 2500, '2022-08-07 12:11:54', 2, 4),
(20, 2740, '2022-08-07 17:25:37', 3, 4),
(21, 3000, '2022-08-07 17:34:18', 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subasta`
--

CREATE TABLE `subasta` (
  `codSubasta` int(11) NOT NULL,
  `fechaInic` datetime NOT NULL,
  `fechaFin` datetime NOT NULL,
  `precIni` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subasta`
--

INSERT INTO `subasta` (`codSubasta`, `fechaInic`, `fechaFin`, `precIni`) VALUES
(1, '2022-08-05 10:00:00', '2022-08-05 11:30:00', 800),
(2, '2022-08-05 12:15:00', '2022-08-05 13:20:45', 4325),
(3, '2022-08-05 16:05:10', '2022-08-05 17:45:30', 23640),
(4, '2022-08-06 11:20:00', '2022-08-05 12:40:00', 1728.5),
(5, '2022-08-06 13:10:50', '2022-08-05 14:35:00', 0),
(6, '2022-08-06 17:30:00', '2022-08-05 18:15:18', 0),
(7, '2022-08-06 18:50:40', '2022-08-05 20:00:08', 0),
(8, '2022-08-07 12:00:35', '2022-08-05 13:25:38', 0),
(9, '2022-08-07 14:10:50', '2022-08-05 15:29:59', 0),
(10, '2022-08-07 17:20:45', '2022-08-05 18:55:10', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codUsu` int(11) NOT NULL,
  `nomUsu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apeUsu` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(512) COLLATE utf8_spanish_ci NOT NULL,
  `fechaUnion` datetime NOT NULL,
  `permiso` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codUsu`, `nomUsu`, `apeUsu`, `user`, `password`, `fechaUnion`, `permiso`) VALUES
(1, 'Rafael', 'Aguilar Munoz', 'rafagumun@subasta.com', '99adc231b045331e514a516b4b7680f588e3823213abe901738bc3ad67b2f6fcb3c64efb93d18002588d3ccc1a49efbae1ce20cb43df36b38651f11fa75678e8', '2022-08-01 00:00:00', 1),
(2, 'Alejandro', 'Florido Tejada', 'alefloteja@subasta.com', '3a8fb4b09bfb7b454177b044ed4854f4a2c3c18f5d6ef28be875f58d064ac9607cc8b11dc23e93a7a5f187ac277534e05658add66604b3bc03c6b76f8476925c', '2022-08-03 00:00:00', 0),
(3, 'Fulanito', 'PALOTES SILENCIOSO', 'fulpalsil@subasta.com', '534a31a32f5a4baa41d893121d09e4caf537d749c1ef199322c1daea54da1147ac90ad12aa236358a78a78c9b1a0d6989ba892d131416a4155957e11e0ea9caa', '2022-08-04 00:00:00', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codProd`),
  ADD KEY `fk_producto_subasta_idx` (`codSubasta`);

--
-- Indices de la tabla `puja`
--
ALTER TABLE `puja`
  ADD PRIMARY KEY (`codPuja`),
  ADD KEY `fk_puja_usuario1_idx` (`codUsu`),
  ADD KEY `fk_puja_subasta1_idx` (`codSubasta`);

--
-- Indices de la tabla `subasta`
--
ALTER TABLE `subasta`
  ADD PRIMARY KEY (`codSubasta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsu`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_subasta` FOREIGN KEY (`codSubasta`) REFERENCES `subasta` (`codSubasta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `puja`
--
ALTER TABLE `puja`
  ADD CONSTRAINT `fk_puja_subasta1` FOREIGN KEY (`codSubasta`) REFERENCES `subasta` (`codSubasta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_puja_usuario1` FOREIGN KEY (`codUsu`) REFERENCES `usuario` (`codUsu`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

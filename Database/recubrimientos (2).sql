-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-10-2022 a las 17:54:43
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recubrimientos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'imprimante'),
(2, 'barrera Epoxica'),
(3, 'esmalte epoxico'),
(4, 'esmalte uretano serie 36'),
(5, 'esmalte uretano AR'),
(6, 'polisiloxanos'),
(7, 'sikacor 57 uretano'),
(8, 'recubrimientos especiales'),
(9, 'coaltar epoxico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `nit` bigint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `nit`) VALUES
(1, 'Aplika Control Corrosión S.A.S', 9004089549);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_sika`
--

DROP TABLE IF EXISTS `prueba_sika`;
CREATE TABLE IF NOT EXISTS `prueba_sika` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(40) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `presentacion` float NOT NULL,
  `precio` int NOT NULL,
  `porcentaje_solidos` int NOT NULL,
  `id_categoria` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `prueba_sika`
--

INSERT INTO `prueba_sika` (`id`, `codigo`, `producto`, `presentacion`, `precio`, `porcentaje_solidos`, `id_categoria`) VALUES
(1, '633957', 'Imprimante Epoxico Rico Cinc(AB) CO', 5, 2980315, 65, 1),
(2, '436328', 'SikaCor Epoxi Primer Cinc (AB) CO', 5, 2338870, 56, 1),
(3, '633958', 'Imprimante Epoxico Rojo (AB) CO', 1.25, 497910, 54, 1),
(4, '633959', 'Imprimante Epoxico Rojo (AB) CO', 5, 1115770, 54, 1),
(5, '633970', 'Imprimante Epoxico Fosf.Cinc(AB)', 2, 479835, 60, 1),
(6, '633971', 'Imprimante Epoxico Fosf.Cinc(AB)', 10, 2343495, 60, 1),
(7, '492321', 'SikaPermacor Serie-82 HS(AB)white', 4, 1233360, 82, 1),
(8, '546900', 'SikaPermacor Serie-82 HS(AB)R9001', 4, 1258630, 82, 1),
(9, '499003', 'SikaPermacor Serie-82 HS(AB)grey', 4, 1238165, 82, 1),
(10, '499822', 'SikaPermacor Serie-82 HS(AB)black', 4, 1247940, 82, 1),
(11, '439827', 'SikaCor Primer FZ (AB) ligh.grey CO', 2, 494280, 70, 1),
(12, '437084', 'SikaCor Primer FZ (AB) white CO', 10, 2400640, 70, 1),
(13, '437088', 'SikaCor Primer FZ (AB) lig.grey', 10, 2300330, 70, 1),
(14, '437086', 'SikaCor Primer FZ (AB) dar.grey CO', 10, 2200125, 70, 1),
(15, '633976', 'Autoimprimante Epoxico HSFZ(AB)whit', 4, 1154015, 82, 1),
(16, '633972', 'Autoimprimante Epoxico HSFZ(AB)7047', 4, 1146480, 82, 1),
(17, '633973', 'Autoimprimante Epoxico HSFZ(AB)grey', 4, 1210000, 82, 1),
(18, '658077', 'SikaCor-90 Autoimpriman.HS(AB) gris', 6, 1379795, 82, 1),
(19, '633995', 'Autoimprimante Epox.S-150(AB)grey', 5, 1524730, 84, 1),
(20, '446160', 'Sika Epoxi-90HS Serie 200(AB)gre.CO', 5, 1578495, 90, 1),
(21, '528179', 'Sika Epoxi-90HS Serie 200(AB)black 5GAL', 5, 1476290, 90, 1),
(22, '404360', 'Sika Epoxi-100HS Serie 300 (AB) CO', 4, 1617565, 100, 1),
(23, '634006', 'Epoxifenolico S-400 (AB) white', 4, 1736985, 100, 1),
(24, '634012', 'Epoxifenolico S-400 (AB) grey', 4, 1529045, 100, 1),
(25, '634018', 'Epoxifenolico Novol.S.400NF(AB)grey', 3.7, 1722100, 100, 1),
(26, '634019', 'Epoxifenolico Novol.S.400NF(AB)white', 3.7, 1728070, 100, 1),
(27, '528181', 'SikaPermacor Serie-500 HT (AB)grey', 4, 1787205, 100, 1),
(28, '634020', 'SikaPermacor Serie-550 HR(AB) Azul', 5, 2406450, 100, 1),
(29, '492341', 'SikaPermacor Hi-Build-120CO(AB) CO', 4, 1591915, 100, 1),
(30, '634022', 'Barrera Epoxica (AB) RAL7035', 2, 526870, 60, 2),
(31, '634021', 'Barrera Epoxica (AB) blanco 2GAL', 2, 588195, 60, 2),
(32, '634025', 'Barrera Epoxica (AB) RAL7035', 10, 2406925, 60, 2),
(33, '634023', 'Barrera Epoxica (AB) blanco 10GAL', 10, 2878140, 60, 2),
(34, '633523', 'Esmalte Epoxico (AB) RAL1003 CO', 2, 581650, 52, 3),
(35, '632834', 'Esmalte Epoxico (AB) RAL2009 CO', 2, 641875, 52, 3),
(36, '632837', 'Esmalte Epoxico (AB) RAL5017 CO', 2, 653095, 52, 3),
(37, '633514', 'Esmalte Epoxico (AB) RAL7035 CO', 2, 634895, 52, 3),
(38, '633517', 'Esmalte Epoxico (AB) RAL9005 CO', 2, 568010, 52, 3),
(39, '633519', 'Esmalte Epoxico (AB) RAL9016 CO', 2, 620560, 52, 3),
(41, '633520', 'Esmalte Epoxico (AB) aluminium CO', 2, 552220, 50, 3),
(43, '633527', 'Esmalte Uretano (AB) RAL1003 CO', 5, 2347640, 60, 4),
(44, '633721', 'Esmalte Uretano (AB) RAL1023 CO', 5, 2303315, 60, 4),
(45, '633593', 'Esmalte Uretano (AB) yellow', 5, 2377045, 60, 4),
(46, '633595', 'Esmalte Uretano (AB) RAL1015 CO', 5, 2247240, 60, 4),
(47, '633712', 'Esmalte Uretano (AB) RAL2009 CO', 5, 2343700, 60, 4),
(48, '633596', 'Esmalte Uretano (AB) RAL2010 CO', 5, 2371930, 60, 4),
(49, '633689', 'Esmalte Uretano (AB) RAL3001 CO', 5, 2492955, 60, 4),
(50, '633597', 'Esmalte Uretano (AB) RAL3015 CO', 5, 2349555, 60, 4),
(51, '633599', 'Esmalte Uretano (AB) RAL5010 CO', 5, 2403460, 60, 4),
(52, '633713', 'Esmalte Uretano (AB) RAL5012 CO', 5, 2407880, 60, 4),
(53, '633714', 'Esmalte Uretano (AB) RAL5015 CO', 5, 2350400, 60, 4),
(54, '633715', 'Esmalte Uretano (AB) RAL5017 CO', 5, 2427055, 60, 4),
(55, '633822', 'Esmalte Uretano (AB)blue soc.port', 5, 2426295, 60, 4),
(56, '633724', 'Esmalte Uretano (AB) RAL6001 CO', 5, 2246865, 60, 4),
(57, '633823', 'Esmalte Uretano (AB) RAL6002 CO', 5, 2257895, 60, 4),
(58, '633708', 'Esmalte Uretano (AB) RAL6016 CO', 5, 2458255, 60, 4),
(59, '633662', 'Esmalte Uretano (AB) RAL6019 CO', 5, 2319455, 60, 4),
(60, '633824', 'Esmalte Uretano (AB) RAL6021 CO', 5, 2290035, 60, 4),
(61, '633825', 'Esmalte Uretano (AB)esmeraldo green', 5, 2342780, 60, 4),
(62, '633663', 'Esmalte Uretano (AB) RAL7001 CO', 5, 2303145, 60, 4),
(63, '633703', 'Esmalte Uretano (AB) RAL7030 CO', 5, 2284475, 60, 4),
(64, '633720', 'Esmalte Uretano (AB) RAL7031 CO', 5, 2252885, 60, 4),
(65, '633667', 'Esmalte Uretano (AB) RAL7032 CO', 5, 2269870, 60, 4),
(66, '633668', 'Esmalte Uretano (AB) RAL7035 CO', 5, 2234215, 60, 4),
(67, '633716', 'Esmalte Uretano (AB) RAL7038 CO', 5, 2329095, 60, 4),
(68, '633669', 'Esmalte Uretano (AB) RAL7039 CO', 5, 2647350, 60, 4),
(69, '633680', 'Esmalte Uretano (AB) RAL7040 CO', 5, 2277025, 60, 4),
(70, '633704', 'Esmalte Uretano (AB) RAL7042 CO', 5, 2302445, 60, 4),
(71, '633681', 'Esmalte Uretano (AB) RAL7045 CO', 5, 2247200, 60, 4),
(72, '633705', 'Esmalte Uretano (AB)grey ansi-61', 5, 2254040, 60, 4),
(73, '633717', 'Esmalte Uretano (AB)grey ansi-70', 5, 2212955, 60, 4),
(74, '633727', 'Esmalte Uretano (AB) M7GY3.29/1.5', 5, 2641760, 60, 4),
(75, '633682', 'Esmalte Uretano (AB)greymunsell6.5N', 5, 2236175, 60, 4),
(76, '633683', 'Esmalte Uretano (AB) RAL8016 CO', 5, 2412700, 60, 4),
(77, '633728', 'Esmalte Uretano (AB) RAL9001 mate', 5, 2873755, 60, 4),
(78, '633684', 'Esmalte Uretano (AB) RAL9002 CO', 5, 2221205, 60, 4),
(79, '633685', 'Esmalte Uretano (AB) RAL9003 CO', 5, 2147095, 60, 4),
(80, '633686', 'Esmalte Uretano (AB) RAL9010 CO', 5, 2200285, 60, 4),
(81, '633718', 'Esmalte Uretano (AB) RAL9016 white', 5, 2251345, 60, 4),
(82, '633687', 'Esmalte Uretano (AB) RAL9004 CO', 5, 2170775, 60, 4),
(83, '633862', 'Esmalte Uretano (AB) RAL9005 CO', 5, 2173655, 47, 4),
(84, '633863', 'Esmalte Uretano (AB) RAL9011 CO', 5, 2755370, 60, 4),
(85, '633864', 'Esmalte Uretano (AB) negro mate', 5, 2412550, 47, 4),
(86, '633865', 'Esmalte Uretano (AB) aluminio', 5, 2037155, 38, 4),
(87, '633866', 'Esmalte Uretano (AB) aluminio HS', 5, 2215785, 54, 4),
(88, '632846', 'Esmalte Uretano AR (AB) RAL9002', 6, 2360910, 68, 5),
(89, '633921', 'Esmalte Uretano AR (AB) RAL9003', 6, 2386510, 68, 5),
(90, '633925', 'Esmalte Uretano AR (AB) RAL9016', 6, 2361135, 68, 5),
(91, '633926', 'Esmalte Uretano AR (AB) beige LE', 6, 2413400, 68, 5),
(92, '633922', 'Esmalte Uretano AR (AB) RAL9004', 6, 2414815, 68, 5),
(93, '633923', 'Esmalte Uretano AR (AB) RAL9005', 6, 2507630, 68, 5),
(94, '632848', 'Esmalte Uretano AR (AB) RAL7001', 6, 2330100, 68, 5),
(95, '633911', 'Esmalte Uretano AR (AB) RAL7032', 6, 2331730, 68, 5),
(96, '633927', 'Esmalte Uretano AR (AB) RAL7035', 6, 2384615, 68, 5),
(97, '633928', 'Esmalte Uretano AR (AB) RAL7045', 6, 2299265, 68, 5),
(98, '633953', 'Esmalte Uretano AR (AB)metroli.gris', 6, 2360830, 68, 5),
(99, '633924', 'Esmalte Uretano AR (AB) RAL3001', 6, 2787520, 68, 5),
(100, '633912', 'Esmalte Uretano AR (AB) RAL3015', 6, 2542340, 68, 5),
(101, '633951', 'Esmalte Uretano AR (AB) RAL8016', 6, 2421210, 68, 5),
(102, '633913', 'Esmalte Uretano AR (AB) RAL5000', 6, 2407815, 68, 5),
(103, '633954', 'Esmalte Uretano AR (AB) RAL5012', 6, 2390785, 68, 5),
(104, '633929', 'Esmalte Uretano AR (AB) RAL5017', 6, 2344965, 68, 5),
(105, '633952', 'Esmalte Uretano AR (AB) RAL6016', 6, 2438260, 68, 5),
(106, '633917', 'Esmalte Uretano AR (AB) RAL6018', 6, 2624165, 68, 5),
(107, '633918', 'Esmalte Uretano AR (AB) RAL6019', 6, 2395425, 68, 5),
(108, '675083', 'Esmalte Uretano AR (AB) RAL6028', 6, 2993555, 68, 5),
(109, '675080', 'Esmalte Uretano AR (AB) RAL6037', 6, 2586410, 68, 5),
(110, '633919', 'Esmalte Uretano AR (AB)verde argos', 6, 2437020, 68, 5),
(111, '633956', 'Esmalte Uretano AR (AB)verde puro', 6, 2606325, 68, 5),
(112, '633955', 'Esmalte Uretano AR (AB) RAL1003', 6, 2617220, 68, 5),
(113, '633920', 'Esmalte Uretano AR (AB) RAL2010', 6, 2495880, 68, 5),
(114, '656075', 'SikaPolisiloxano (AB) RAL6005 COL', 4, 2346445, 90, 6),
(115, '671121', 'SikaPolisiloxano (AB) RAL5012 COL', 4, 2133105, 90, 6),
(116, '671124', 'SikaPolisiloxano (AB) RAL6001 COL', 4, 2232600, 90, 6),
(117, '671223', 'SikaPolisiloxano (AB) RAL6016 COL', 4, 2271860, 90, 6),
(118, '671351', 'SikaPolisiloxano (AB) RAL7004 COL', 4, 2130955, 90, 6),
(119, '671123', 'SikaPolisiloxano (AB) RAL9003 COL', 4, 2203095, 90, 6),
(120, '671122', 'SikaPolisiloxano (AB) RAL9005 COL', 4, 2129285, 90, 6),
(121, '671224', 'SikaPolisiloxano (AB) RAL9004 COL', 4, 2111255, 90, 6),
(122, '720761', 'SikaPolisiloxano (AB) verde COL', 4, 2239300, 90, 6),
(123, '720710', 'SikaPolisiloxano (AB) gris COL', 4, 2139300, 90, 6),
(124, '674469', 'SikaCor-57 Uretano (AB) blanco', 5.5, 1689340, 57, 7),
(125, '697359', 'SikaCor-57 Uretano (AB) g.ansi-61', 5.5, 1564665, 57, 7),
(126, '697384', 'SikaCor-57 Uretano (AB) g.ansi-70', 5.5, 1575700, 57, 7),
(127, '697386', 'SikaCor-57 Uretano (AB) RAL1003', 5.5, 1638705, 57, 7),
(128, '697461', 'SikaCor-57 Uretano (AB) RAL3001', 5.5, 1810575, 57, 7),
(129, '697443', 'SikaCor-57 Uretano (AB) RAL7032', 5.5, 1616840, 57, 7),
(130, '697418', 'SikaCor-57 Uretano (AB) RAL7038', 5.5, 1555760, 57, 7),
(131, '697451', 'SikaCor-57 Uretano (AB) RAL7045', 5.5, 1555760, 57, 7),
(132, '697464', 'SikaCor-57 Uretano (AB) RAL9005', 5.5, 1660170, 57, 7),
(133, '632845', 'Epoxico Interior de Tanques(AB)blanco', 5, 1476185, 55, 8),
(134, '168563', 'Epoxifenolico Serie 45(AB)grey', 6, 1603485, 55, 8),
(135, '633525', 'Epoxifenolico Serie 45(AB)RAL1014', 6, 1715395, 55, 8),
(136, '633526', 'Epoxifenolico Serie 45(AB)RAL9016', 6, 1775765, 55, 8),
(137, '695798', 'Epoxifenolico Serie 45(AB)ocre', 6, 1684735, 55, 8),
(138, '171273', 'Coaltar Epoxico (AB) CO', 5, 1195130, 80, 9),
(139, '632844', 'Coaltar Epoxico (AB) CO', 1.25, 333970, 80, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sika`
--

DROP TABLE IF EXISTS `sika`;
CREATE TABLE IF NOT EXISTS `sika` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(40) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `presentacion` float NOT NULL,
  `precio` int NOT NULL,
  `porcentaje_solidos` int NOT NULL,
  `id_categoria` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`),
  KEY `Categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `sika`
--

INSERT INTO `sika` (`id`, `codigo`, `producto`, `presentacion`, `precio`, `porcentaje_solidos`, `id_categoria`) VALUES
(1, '633957', 'Imprimante Epoxico Rico Cinc(AB) CO', 5, 2980315, 65, 1),
(2, '436328', 'SikaCor Epoxi Primer Cinc (AB) CO', 5, 2338870, 56, 1),
(3, '633958', 'Imprimante Epoxico Rojo (AB) CO', 1.25, 497910, 54, 1),
(4, '633959', 'Imprimante Epoxico Rojo (AB) CO', 5, 1115770, 54, 1),
(5, '633970', 'Imprimante Epoxico Fosf.Cinc(AB)', 2, 479835, 60, 1),
(6, '633971', 'Imprimante Epoxico Fosf.Cinc(AB)', 10, 2343495, 60, 1),
(7, '492321', 'SikaPermacor Serie-82 HS(AB)white', 4, 1233360, 82, 1),
(8, '546900', 'SikaPermacor Serie-82 HS(AB)R9001', 4, 1258630, 82, 1),
(9, '499003', 'SikaPermacor Serie-82 HS(AB)grey', 4, 1238165, 82, 1),
(10, '499822', 'SikaPermacor Serie-82 HS(AB)black', 4, 1247940, 82, 1),
(11, '439827', 'SikaCor Primer FZ (AB) ligh.grey CO', 2, 494280, 70, 1),
(12, '437084', 'SikaCor Primer FZ (AB) white CO', 10, 2400640, 70, 1),
(13, '437088', 'SikaCor Primer FZ (AB) lig.grey', 10, 2300330, 70, 1),
(14, '437086', 'SikaCor Primer FZ (AB) dar.grey CO', 10, 2200125, 70, 1),
(15, '633976', 'Autoimprimante Epoxico HSFZ(AB)whit', 4, 1154015, 82, 1),
(16, '633972', 'Autoimprimante Epoxico HSFZ(AB)7047', 4, 1146480, 82, 1),
(17, '633973', 'Autoimprimante Epoxico HSFZ(AB)grey', 4, 1210000, 82, 1),
(18, '658077', 'SikaCor-90 Autoimpriman.HS(AB) gris', 6, 1379795, 82, 1),
(19, '633995', 'Autoimprimante Epox.S-150(AB)grey', 5, 1524730, 84, 1),
(20, '446160', 'Sika Epoxi-90HS Serie 200(AB)gre.CO', 5, 1578495, 90, 1),
(21, '528179', 'Sika Epoxi-90HS Serie 200(AB)black 5GAL', 5, 1476290, 90, 1),
(22, '404360', 'Sika Epoxi-100HS Serie 300 (AB) CO', 4, 1617565, 100, 1),
(23, '634006', 'Epoxifenolico S-400 (AB) white', 4, 1736985, 100, 1),
(24, '634012', 'Epoxifenolico S-400 (AB) grey', 4, 1529045, 100, 1),
(25, '634018', 'Epoxifenolico Novol.S.400NF(AB)grey', 3.7, 1722100, 100, 1),
(26, '634019', 'Epoxifenolico Novol.S.400NF(AB)white', 3.7, 1728070, 100, 1),
(27, '528181', 'SikaPermacor Serie-500 HT (AB)grey', 4, 1787205, 100, 1),
(28, '634020', 'SikaPermacor Serie-550 HR(AB) Azul', 5, 2406450, 100, 1),
(29, '492341', 'SikaPermacor Hi-Build-120CO(AB) CO', 4, 1591915, 100, 1),
(30, '634022', 'Barrera Epoxica (AB) RAL7035', 2, 526870, 60, 2),
(31, '634021', 'Barrera Epoxica (AB) blanco 2GAL', 2, 588195, 60, 2),
(32, '634025', 'Barrera Epoxica (AB) RAL7035', 10, 2406925, 60, 2),
(33, '634023', 'Barrera Epoxica (AB) blanco 10GAL', 10, 2878140, 60, 2),
(34, '633523', 'Esmalte Epoxico (AB) RAL1003 CO', 2, 581650, 52, 3),
(35, '632834', 'Esmalte Epoxico (AB) RAL2009 CO', 2, 641875, 52, 3),
(36, '632837', 'Esmalte Epoxico (AB) RAL5017 CO', 2, 653095, 52, 3),
(37, '633514', 'Esmalte Epoxico (AB) RAL7035 CO', 2, 634895, 52, 3),
(38, '633517', 'Esmalte Epoxico (AB) RAL9005 CO', 2, 568010, 52, 3),
(39, '633519', 'Esmalte Epoxico (AB) RAL9016 CO', 2, 620560, 52, 3),
(41, '633520', 'Esmalte Epoxico (AB) aluminium CO', 2, 552220, 50, 3),
(43, '633527', 'Esmalte Uretano (AB) RAL1003 CO', 5, 2347640, 60, 4),
(44, '633721', 'Esmalte Uretano (AB) RAL1023 CO', 5, 2303315, 60, 4),
(45, '633593', 'Esmalte Uretano (AB) yellow', 5, 2377045, 60, 4),
(46, '633595', 'Esmalte Uretano (AB) RAL1015 CO', 5, 2247240, 60, 4),
(47, '633712', 'Esmalte Uretano (AB) RAL2009 CO', 5, 2343700, 60, 4),
(48, '633596', 'Esmalte Uretano (AB) RAL2010 CO', 5, 2371930, 60, 4),
(49, '633689', 'Esmalte Uretano (AB) RAL3001 CO', 5, 2492955, 60, 4),
(50, '633597', 'Esmalte Uretano (AB) RAL3015 CO', 5, 2349555, 60, 4),
(51, '633599', 'Esmalte Uretano (AB) RAL5010 CO', 5, 2403460, 60, 4),
(52, '633713', 'Esmalte Uretano (AB) RAL5012 CO', 5, 2407880, 60, 4),
(53, '633714', 'Esmalte Uretano (AB) RAL5015 CO', 5, 2350400, 60, 4),
(54, '633715', 'Esmalte Uretano (AB) RAL5017 CO', 5, 2427055, 60, 4),
(55, '633822', 'Esmalte Uretano (AB)blue soc.port', 5, 2426295, 60, 4),
(56, '633724', 'Esmalte Uretano (AB) RAL6001 CO', 5, 2246865, 60, 4),
(57, '633823', 'Esmalte Uretano (AB) RAL6002 CO', 5, 2257895, 60, 4),
(58, '633708', 'Esmalte Uretano (AB) RAL6016 CO', 5, 2458255, 60, 4),
(59, '633662', 'Esmalte Uretano (AB) RAL6019 CO', 5, 2319455, 60, 4),
(60, '633824', 'Esmalte Uretano (AB) RAL6021 CO', 5, 2290035, 60, 4),
(61, '633825', 'Esmalte Uretano (AB)esmeraldo green', 5, 2342780, 60, 4),
(62, '633663', 'Esmalte Uretano (AB) RAL7001 CO', 5, 2303145, 60, 4),
(63, '633703', 'Esmalte Uretano (AB) RAL7030 CO', 5, 2284475, 60, 4),
(64, '633720', 'Esmalte Uretano (AB) RAL7031 CO', 5, 2252885, 60, 4),
(65, '633667', 'Esmalte Uretano (AB) RAL7032 CO', 5, 2269870, 60, 4),
(66, '633668', 'Esmalte Uretano (AB) RAL7035 CO', 5, 2234215, 60, 4),
(67, '633716', 'Esmalte Uretano (AB) RAL7038 CO', 5, 2329095, 60, 4),
(68, '633669', 'Esmalte Uretano (AB) RAL7039 CO', 5, 2647350, 60, 4),
(69, '633680', 'Esmalte Uretano (AB) RAL7040 CO', 5, 2277025, 60, 4),
(70, '633704', 'Esmalte Uretano (AB) RAL7042 CO', 5, 2302445, 60, 4),
(71, '633681', 'Esmalte Uretano (AB) RAL7045 CO', 5, 2247200, 60, 4),
(72, '633705', 'Esmalte Uretano (AB)grey ansi-61', 5, 2254040, 60, 4),
(73, '633717', 'Esmalte Uretano (AB)grey ansi-70', 5, 2212955, 60, 4),
(74, '633727', 'Esmalte Uretano (AB) M7GY3.29/1.5', 5, 2641760, 60, 4),
(75, '633682', 'Esmalte Uretano (AB)greymunsell6.5N', 5, 2236175, 60, 4),
(76, '633683', 'Esmalte Uretano (AB) RAL8016 CO', 5, 2412700, 60, 4),
(77, '633728', 'Esmalte Uretano (AB) RAL9001 mate', 5, 2873755, 60, 4),
(78, '633684', 'Esmalte Uretano (AB) RAL9002 CO', 5, 2221205, 60, 4),
(79, '633685', 'Esmalte Uretano (AB) RAL9003 CO', 5, 2147095, 60, 4),
(80, '633686', 'Esmalte Uretano (AB) RAL9010 CO', 5, 2200285, 60, 4),
(81, '633718', 'Esmalte Uretano (AB) RAL9016 white', 5, 2251345, 60, 4),
(82, '633687', 'Esmalte Uretano (AB) RAL9004 CO', 5, 2170775, 60, 4),
(83, '633862', 'Esmalte Uretano (AB) RAL9005 CO', 5, 2173655, 47, 4),
(84, '633863', 'Esmalte Uretano (AB) RAL9011 CO', 5, 2755370, 60, 4),
(85, '633864', 'Esmalte Uretano (AB) negro mate', 5, 2412550, 47, 4),
(86, '633865', 'Esmalte Uretano (AB) aluminio', 5, 2037155, 38, 4),
(87, '633866', 'Esmalte Uretano (AB) aluminio HS', 5, 2215785, 54, 4),
(88, '632846', 'Esmalte Uretano AR (AB) RAL9002', 6, 2360910, 68, 5),
(89, '633921', 'Esmalte Uretano AR (AB) RAL9003', 6, 2386510, 68, 5),
(90, '633925', 'Esmalte Uretano AR (AB) RAL9016', 6, 2361135, 68, 5),
(91, '633926', 'Esmalte Uretano AR (AB) beige LE', 6, 2413400, 68, 5),
(92, '633922', 'Esmalte Uretano AR (AB) RAL9004', 6, 2414815, 68, 5),
(93, '633923', 'Esmalte Uretano AR (AB) RAL9005', 6, 2507630, 68, 5),
(94, '632848', 'Esmalte Uretano AR (AB) RAL7001', 6, 2330100, 68, 5),
(95, '633911', 'Esmalte Uretano AR (AB) RAL7032', 6, 2331730, 68, 5),
(96, '633927', 'Esmalte Uretano AR (AB) RAL7035', 6, 2384615, 68, 5),
(97, '633928', 'Esmalte Uretano AR (AB) RAL7045', 6, 2299265, 68, 5),
(98, '633953', 'Esmalte Uretano AR (AB)metroli.gris', 6, 2360830, 68, 5),
(99, '633924', 'Esmalte Uretano AR (AB) RAL3001', 6, 2787520, 68, 5),
(100, '633912', 'Esmalte Uretano AR (AB) RAL3015', 6, 2542340, 68, 5),
(101, '633951', 'Esmalte Uretano AR (AB) RAL8016', 6, 2421210, 68, 5),
(102, '633913', 'Esmalte Uretano AR (AB) RAL5000', 6, 2407815, 68, 5),
(103, '633954', 'Esmalte Uretano AR (AB) RAL5012', 6, 2390785, 68, 5),
(104, '633929', 'Esmalte Uretano AR (AB) RAL5017', 6, 2344965, 68, 5),
(105, '633952', 'Esmalte Uretano AR (AB) RAL6016', 6, 2438260, 68, 5),
(106, '633917', 'Esmalte Uretano AR (AB) RAL6018', 6, 2624165, 68, 5),
(107, '633918', 'Esmalte Uretano AR (AB) RAL6019', 6, 2395425, 68, 5),
(108, '675083', 'Esmalte Uretano AR (AB) RAL6028', 6, 2993555, 68, 5),
(109, '675080', 'Esmalte Uretano AR (AB) RAL6037', 6, 2586410, 68, 5),
(110, '633919', 'Esmalte Uretano AR (AB)verde argos', 6, 2437020, 68, 5),
(111, '633956', 'Esmalte Uretano AR (AB)verde puro', 6, 2606325, 68, 5),
(112, '633955', 'Esmalte Uretano AR (AB) RAL1003', 6, 2617220, 68, 5),
(113, '633920', 'Esmalte Uretano AR (AB) RAL2010', 6, 2495880, 68, 5),
(114, '656075', 'SikaPolisiloxano (AB) RAL6005 COL', 4, 2346445, 90, 6),
(115, '671121', 'SikaPolisiloxano (AB) RAL5012 COL', 4, 2133105, 90, 6),
(116, '671124', 'SikaPolisiloxano (AB) RAL6001 COL', 4, 2232600, 90, 6),
(117, '671223', 'SikaPolisiloxano (AB) RAL6016 COL', 4, 2271860, 90, 6),
(118, '671351', 'SikaPolisiloxano (AB) RAL7004 COL', 4, 2130955, 90, 6),
(119, '671123', 'SikaPolisiloxano (AB) RAL9003 COL', 4, 2203095, 90, 6),
(120, '671122', 'SikaPolisiloxano (AB) RAL9005 COL', 4, 2129285, 90, 6),
(121, '671224', 'SikaPolisiloxano (AB) RAL9004 COL', 4, 2111255, 90, 6),
(122, '720761', 'SikaPolisiloxano (AB) verde COL', 4, 2239300, 90, 6),
(123, '720710', 'SikaPolisiloxano (AB) gris COL', 4, 2139300, 90, 6),
(124, '674469', 'SikaCor-57 Uretano (AB) blanco', 5.5, 1689340, 57, 7),
(125, '697359', 'SikaCor-57 Uretano (AB) g.ansi-61', 5.5, 1564665, 57, 7),
(126, '697384', 'SikaCor-57 Uretano (AB) g.ansi-70', 5.5, 1575700, 57, 7),
(127, '697386', 'SikaCor-57 Uretano (AB) RAL1003', 5.5, 1638705, 57, 7),
(128, '697461', 'SikaCor-57 Uretano (AB) RAL3001', 5.5, 1810575, 57, 7),
(129, '697443', 'SikaCor-57 Uretano (AB) RAL7032', 5.5, 1616840, 57, 7),
(130, '697418', 'SikaCor-57 Uretano (AB) RAL7038', 5.5, 1555760, 57, 7),
(131, '697451', 'SikaCor-57 Uretano (AB) RAL7045', 5.5, 1555760, 57, 7),
(132, '697464', 'SikaCor-57 Uretano (AB) RAL9005', 5.5, 1660170, 57, 7),
(133, '632845', 'Epoxico Interior de Tanques(AB)blanco', 5, 1476185, 55, 8),
(134, '168563', 'Epoxifenolico Serie 45(AB)grey', 6, 1603485, 55, 8),
(135, '633525', 'Epoxifenolico Serie 45(AB)RAL1014', 6, 1715395, 55, 8),
(136, '633526', 'Epoxifenolico Serie 45(AB)RAL9016', 6, 1775765, 55, 8),
(137, '695798', 'Epoxifenolico Serie 45(AB)ocre', 6, 1684735, 55, 8),
(138, '171273', 'Coaltar Epoxico (AB) CO', 5, 1195130, 80, 9),
(139, '632844', 'Coaltar Epoxico (AB) CO', 1.25, 333970, 80, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(2, 'jduarte', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(3, 'dprada', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sika`
--
ALTER TABLE `sika`
  ADD CONSTRAINT `sika_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

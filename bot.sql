-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2020 a las 00:10:43
-- Versión del servidor: 8.0.16
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Hola', 'Hola,que tal?'),
(2, 'Bien', 'Que bueno, que haremos hoy?'),
(3, 'lanzame tu gaaa', 'GAAAAAAA'),
(4, 'Vendes pan', 'Claro, somos la tienda con productos de calidad?'),
(5, '¿Es el Pan un buen alimento?', 'Si, el pan además de ser fuente de energía contiene proteínas, fibra y es buena fuente de vitaminas y minerales como el ácido fólico, zinc y hierro.'),
(6, '¿Puedo comer pan si quiero tener una dieta saludable?', 'Si, el pan pertenece a la base de la pirámide alimentaria y debe ser considerado como parte de una alimentación balanceada. Esto significa consumir una cantidad adecuada de pan acorde a los requerimientos nutricionales de cada persona.'),
(7, '¿Cuánto tarda en llegar un pedido?', 'Somos una tienda que recién esta en emprendimiento y el pedido estaría llegando en máximo 1 hora'),
(8, '¿Que panes vende?', 'Actualmente contamos con los panes tradicionales que son: el pan francés, pan de trigo, pan centeno, pan de maíz, pan germinado para mayor información <a href=\"https://www.bmsupermercados.es/tipos-de-pan.htm\" style=\"color: white\">dale click aqui</a>'),
(9, '¿Que tipo de pan vende?', 'Actualmente contamos con los panes tradicionales que son: el pan francés, pan de trigo, pan centeno, pan de maíz, pan germinado para mayor información <a href=\"https://www.bmsupermercados.es/tipos-de-pan.htm\" style=\"color: white\">dale click aqui</a>'),
(10, '¿cuanto demora un pedido?', 'Somos una tienda que recién esta en emprendimiento y el pedido estaría llegando en máximo 1 hora'),
(12, '¿Donde queda?', 'Estamos ubicado en el distrito de Los Olivos'),
(13, '¿Donde esta ubicado?', 'Estamos ubicado en el distrito de Los Olivos'),
(14, '¿Quien es tu creador?', 'Mis creadores son alumnos de la UCH'),
(15, '¿Quien te creo?', 'Mis creadores son alumnos de la UCH'),
(16, 'Gracias', 'Gracias a usted por consumir nuestros productos, vuelva pronto'),
(17, 'Adios', 'Hasta luego cuidese'),
(18, 'Chau', 'Hasta luego cuidese');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

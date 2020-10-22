-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2017 a las 18:14:29
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test_conocimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(4) NOT NULL,
  `user` varchar(15) NOT NULL,
  `ponderacion` varchar(10) NOT NULL,
  `progreso` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL,
  `fecha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `user`, `ponderacion`, `progreso`, `session`, `fecha`) VALUES
(30, 'player1', '30', '2', 'completo', '30-04-2017'),
(31, 'player1', '0', '2', 'completo', '30-04-2017'),
(32, 'player1', '10', '2', 'completo', '30-04-2017'),
(33, 'player1', '30', '2', 'completo', '30-04-2017'),
(34, 'player1', '30', '2', 'completo', '30-04-2017'),
(35, 'player1', '10', '2', 'completo', '30-04-2017'),
(36, 'player1', '30', '2', 'completo', '30-04-2017'),
(37, 'player1', '60', '3', 'completo', '30-04-2017'),
(38, 'player1', '140', '7', 'completo', '30-04-2017'),
(39, 'player1', '220', '10', 'completo', '30-04-2017'),
(40, 'player1', '280', '10', 'completo', '30-04-2017'),
(41, 'unefa', '280', '10', 'completo', '30-04-2017'),
(42, 'player1', '10', '1', 'incompleto', '30-04-2017'),
(43, 'maria', '200', '10', 'completo', '01-05-2017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `nivel_usu` int(2) NOT NULL,
  `user` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`nivel_usu`, `user`, `pass`) VALUES
(2, 'player1', '1234'),
(1, 'admin', '12345'),
(2, 'unefa', '1234'),
(2, 'maria', 'mateo'),
(2, 'player2', '1234'),
(2, 'player3', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

CREATE TABLE `participante` (
  `id_participante` int(4) NOT NULL,
  `user` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `nombre_participante` varchar(15) NOT NULL,
  `apellido_participante` varchar(15) NOT NULL,
  `correo_participante` varchar(30) NOT NULL,
  `estatus_nivel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `participante`
--

INSERT INTO `participante` (`id_participante`, `user`, `pass`, `nombre_participante`, `apellido_participante`, `correo_participante`, `estatus_nivel`) VALUES
(1, 'player1', '1234', 'unefa', 'guanare', 'unefa@gmail.com', 2),
(2, 'unefa', '1234', 'unefa', 'guanare', 'unefa@gmail.com', 1),
(3, 'maria', 'mateo', 'maria fernanda', 'escobar barrios', 'maria---fernanda15@hotmail.com', 1),
(4, 'admin', '12345', 'administrador', '', 'administrador_test@gmail.com', 1),
(5, 'player2', '1234', 'miguel', 'barrios', 'miguelb@hotmail.com', 1),
(6, 'player3', '1234', 'otro', 'mas', 'otro@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(4) NOT NULL,
  `pregunta` varchar(100) NOT NULL,
  `respuesta` varchar(20) NOT NULL,
  `opcion1` varchar(20) NOT NULL,
  `opcion2` varchar(20) NOT NULL,
  `opcion3` varchar(20) NOT NULL,
  `opcion4` varchar(20) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `ponderacion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `pregunta`, `respuesta`, `opcion1`, `opcion2`, `opcion3`, `opcion4`, `categoria`, `ponderacion`) VALUES
(1, 'Quien es el libertador de sur america?', 'Simon Bolivar', 'Juan Pablo', 'Santanter', 'Simon Bolivar', 'Jose Marti', 'Historia', '10'),
(2, 'Ultimo campeon del mundial de futbol?', 'Alemania', 'Alemania', 'Brasil', 'Portugal', 'Argentina', 'Deportes', '20'),
(3, 'Cual de estas es una de las 7 maravillas del mundo?', 'Coliseo Romano', 'Salto Angel', 'Torres Gemelas', 'El Everest', 'Coliseo Romano', 'Cultura General', '30'),
(4, 'Quien Escribio La novela Doña Barbara?', 'Romulo Gallegos', 'Garcia Marquez', 'Romulo Gallegos', 'Andres Eloy Blanco', 'Octavio Paz', 'Literatura', '10'),
(5, 'cual es el estado mas grande de venezuela?', 'Bolivar', 'Zulia', 'Amazonas', 'Apure', 'Bolivar', 'Geografia', '20'),
(6, 'Quien Fue Galileo Galilei?', 'Ninguna de las ant.', 'Cuentista', 'Escritor', 'Pintor ', 'Ninguna de las ant.', 'historia', '20'),
(7, 'Cual de Estos No es un Lenguaje de Programacion?', 'Html5', 'Html5', 'Javascrit', 'Python', 'C++', 'Tecnologia', '30'),
(8, 'Por que razon se da la forma de la nariz?', 'El Clima', 'Genetica', 'El Clima', 'Hereditario', 'Segun los Huesos', 'Biologia', '40'),
(9, 'Que Es Logica?', 'Pensar Correcto', 'Secuencia', 'Adivinar', 'Tener Razon', 'Pensar Correcto', 'Cultura General', '40'),
(10, 'Cuanto Años Tiene La Reina Isabell Segunda de Inglaterra?', '92', '70', '97', '92', '64', 'Cultura General', '60'),
(11, 'que es android?', 'sistema operativo', 'plataforma', 'sistema operativo', 'aplicacion', 'red social', 'tecnologia', '20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`);

--
-- Indices de la tabla `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`id_participante`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de la tabla `participante`
--
ALTER TABLE `participante`
  MODIFY `id_participante` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

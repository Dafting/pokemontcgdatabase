-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2022 a las 00:14:33
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemontcgdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE `cards` (
  `id` int(5) NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `type` int(1) NOT NULL,
  `rarity` int(1) NOT NULL,
  `expansion` int(3) NOT NULL,
  `expNumber` int(4) NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`id`, `name`, `type`, `rarity`, `expansion`, `expNumber`, `image`) VALUES
(1, 'Alakazam', 1, 3, 1, 1, 'img/cards/623abbf32a2ab0.455733258.jpg'),
(3, 'Chansey', 1, 3, 1, 3, 'img/cards/61ac52a70e3580.1902604910.jpg'),
(4, 'Charizard', 1, 3, 1, 4, 'img/cards/61ac554fb5bde7.5587740911.jpg'),
(5, 'Clefairy', 1, 3, 1, 5, 'img/cards/61ac5e116d3386.0224774412.jpg'),
(6, 'Gyarados', 1, 3, 1, 6, 'img/cards/61ac5ec7db0d74.3425867213.jpg'),
(7, 'Hitmonchan', 1, 3, 1, 7, 'img/cards/61ac5f5fe9e532.2052628914.jpg'),
(8, 'Machamp', 1, 3, 1, 8, 'img/cards/61ae116ad8ef85.9470038315.jpg'),
(9, 'Magneton', 1, 3, 1, 9, 'img/cards/61ae123e06fbb9.3089755816.jpg'),
(10, 'Mewtwo', 1, 3, 1, 10, 'img/cards/61ae130910d030.2048222517.jpg'),
(11, 'Nidoking', 1, 3, 1, 11, 'img/cards/61ae14cec325c5.5729141318.jpg'),
(12, 'Ninetales', 1, 3, 1, 12, 'img/cards/61ae241e545de3.0732770919.jpg'),
(13, 'Poliwrath', 1, 3, 1, 13, 'img/cards/61ae24d6eb2278.3571461120.jpg'),
(14, 'Raichu', 1, 3, 1, 14, 'img/cards/61ae282571c5a3.8414398021.jpg'),
(15, 'Venusaur', 1, 3, 1, 15, 'img/cards/61ae293958acd3.8758455222.jpg'),
(18, 'Zapdos', 1, 3, 1, 16, 'img/cards/61ae39385b10c5.6364459723.jpg'),
(19, 'Beedrill', 1, 3, 1, 17, 'img/cards/61b0f0cd8ddc05.1390963224.jpg'),
(20, 'Energía Agua', 3, 1, 1, 102, 'img/cards/61b17c0bdcf2b7.228037971.jpg'),
(21, 'Clefairy Doll', 2, 3, 1, 70, 'img/cards/61b17c5f342480.4716777677.jpg'),
(22, 'Bill', 2, 1, 1, 91, 'img/cards/61b17e4d60cbd3.4351132298.jpg'),
(23, 'Snorlax', 1, 3, 2, 27, 'img/cards/61b18a70ebb6b2.14710661113.jpg'),
(24, 'Machop', 1, 1, 1, 52, 'img/cards/61b18ce98d80d1.2081711759.jpg'),
(25, 'Dragonair', 1, 3, 1, 18, 'img/cards/61b18f868e0536.5080250925.jpg'),
(26, 'Energía Psíquica', 3, 1, 1, 101, 'img/cards/61b2a0377c5e25.546305182.jpg'),
(27, 'Dugtrio', 1, 3, 1, 19, 'img/cards/61b3a641554d64.0879292926.jpg'),
(28, 'Electabuzz', 1, 3, 1, 20, 'img/cards/61b3d68a1d9a95.7023866427.jpg'),
(29, ' Electrode', 1, 3, 1, 21, 'img/cards/61b41934e35800.2601083928.jpg'),
(30, 'Energía Eléctrica', 3, 1, 1, 100, 'img/cards/61b41a475b45a9.278978593.jpg'),
(32, 'Energía Planta', 3, 1, 1, 99, 'img/cards/61b41d45132e44.336559564.jpg'),
(33, 'Energía Fuego', 3, 1, 1, 98, 'img/cards/61b41db89baca4.998471795.jpg'),
(34, 'Energía Lucha', 3, 1, 1, 97, 'img/cards/61b41ddab964f1.065973546.jpg'),
(35, 'Doble Energía Incolora', 3, 2, 1, 96, 'img/cards/61b41e0e14abf8.189481707.jpg'),
(36, 'Rainbow Energy', 3, 3, 4, 80, 'img/cards/61b42196157eb6.62410149259.jpg'),
(37, 'Dark Gloom', 1, 2, 4, 36, 'img/cards/622ff9e7f202d7.00358029216.jpg'),
(38, 'Magmar', 1, 2, 1, 36, 'img/cards/6238b225b60788.3391033443.jpg'),
(39, 'Magmar', 1, 2, 3, 39, 'img/cards/6238b311729883.10395402174.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL,
  `score` int(11) NOT NULL,
  `id_card` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `comment`, `score`, `id_card`) VALUES
(1, 'Qué buena carta la puta madre', 5, 4),
(2, 'Te salva de algún apuro pero hasta ahí nomás', 3, 9),
(3, 'Es la base de un buen mazo rápido. Indispensable! Medio flojita la vida.', 4, 28),
(7, 'Una garcha esta carta', 1, 28),
(10, 'Una gadorcha esta carta', 5, 3),
(11, 'Me encanta!!!', 5, 3),
(12, 'Una verga', 2, 3),
(13, 'Zafa', 3, 3),
(14, 'Meh', 2, 3),
(15, 'Que asco', 1, 3),
(16, 'Medio lenta pero zafa', 3, 4),
(21, 'A mí me gusta!', 4, 4),
(24, 'Meh', 3, 39),
(25, 'Linda!', 5, 39),
(26, 'Nope.', 2, 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `energy_card`
--

CREATE TABLE `energy_card` (
  `id` int(11) NOT NULL,
  `type` varchar(1) COLLATE utf8_bin NOT NULL,
  `special` tinyint(1) NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `card_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `energy_card`
--

INSERT INTO `energy_card` (`id`, `type`, `special`, `description`, `card_id`) VALUES
(1, 'w', 0, 'Provee 1 Energía {w}', 20),
(2, 'w', 0, 'Provee 1 Energía {p}', 26),
(3, 'l', 0, 'Provee 1 Energía {l}.', 30),
(4, 'w', 0, 'Provee 1 Energía {g}.', 32),
(5, 'r', 0, 'Provee 1 Energía {r}', 33),
(6, 'f', 0, 'Provee 1 Energía {f}', 34),
(7, 'c', 1, 'Provee {cc} Energías. No cuenta como una carta de Energía Básica.', 35),
(8, 'c', 1, 'Une la Energía Rainbow a 1 de tus Pokémon. Mientras esté en juego, la Energía Arcoiris cuenta como todos los tipos de Energías Básicas pero solo provee 1 a la vez. (No cuenta como una carta de Energía Básica cuando no está en juego.) Al unir esta carta de tu mano a uno de tus Pokémon, haces 10 puntos de daño a ese Pokémon. (No aplica Debilidad ni Resistencia.)', 36);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expansions`
--

CREATE TABLE `expansions` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `image` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `expansions`
--

INSERT INTO `expansions` (`id`, `name`, `image`) VALUES
(1, 'Base', 'img/expansions/1.png'),
(2, 'Jungla', 'img/expansions/2.png'),
(3, 'Fósil', 'img/expansions/3.png'),
(4, 'Rocket', 'img/expansions/4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon_card`
--

CREATE TABLE `pokemon_card` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_bin NOT NULL,
  `hp` int(4) NOT NULL,
  `stage` int(1) NOT NULL,
  `evolvesFrom` text COLLATE utf8_bin NOT NULL,
  `attackName1` text COLLATE utf8_bin NOT NULL,
  `attackDesc1` text COLLATE utf8_bin NOT NULL,
  `attackEnergies1` text COLLATE utf8_bin NOT NULL,
  `attackDamage1` text COLLATE utf8_bin NOT NULL,
  `attackName2` text COLLATE utf8_bin NOT NULL,
  `attackDesc2` text COLLATE utf8_bin NOT NULL,
  `attackEnergies2` text COLLATE utf8_bin NOT NULL,
  `attackDamage2` text COLLATE utf8_bin NOT NULL,
  `hasPokePower` tinyint(1) NOT NULL,
  `pokePowerName` text COLLATE utf8_bin NOT NULL,
  `pokePowerDesc` text COLLATE utf8_bin NOT NULL,
  `weakness` text COLLATE utf8_bin NOT NULL,
  `resistance` text COLLATE utf8_bin NOT NULL,
  `retreatCost` text COLLATE utf8_bin NOT NULL,
  `pokedexInfo` text COLLATE utf8_bin NOT NULL,
  `card_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pokemon_card`
--

INSERT INTO `pokemon_card` (`id`, `type`, `hp`, `stage`, `evolvesFrom`, `attackName1`, `attackDesc1`, `attackEnergies1`, `attackDamage1`, `attackName2`, `attackDesc2`, `attackEnergies2`, `attackDamage2`, `hasPokePower`, `pokePowerName`, `pokePowerDesc`, `weakness`, `resistance`, `retreatCost`, `pokedexInfo`, `card_id`) VALUES
(1, 'p', 80, 2, 'Kadabra', 'Rayo Confuso', 'Echa una moneda. Si es cara, el Pokémon a la Defensa pasa a estar Confundido.', 'ppp', '30', '', '', '', '', 1, 'Intercambio de Daño', 'Tantas veces como quieras durante tu turno (antes de atacar) puedes mover 1 contador de daño de 1 de tus Pokémon a otro. Siempre que no dejes fuera de combate a ese Pokémon. Este poder no puede ser usado si Alakazam está Dormido, Confundido o Paralizado.', 'p', '0', 'ccc', 'Psi Pokémon. Length: 4\' 11\'\', Weight: 106 lbs. Its brain can outperform a supercomputer. Its intelligence quotient is said to be 5000. LV. 42 #65', 1),
(3, 'c', 120, 0, '', 'Acurruque', 'Echa una moneda. Si es cara, previene todo el daño hecho a Chansey durante el próximo turno de tu oponente. (Cualquier otro efecto de ataques sigue sucediendo).', 'cc', '', 'Doble Filo', 'Chansey se hace 80 puntos de daño a sí mismo.', 'cccc', '80', 0, '', '', 'f', 'p', 'c', 'Egg Pokémon. Length: 3\' 7\'\', Weight: 76 lbs. A rare and elusive Pokémon that is said to bring happiness to those who manage to catch it. LV. 55 #113', 3),
(4, 'r', 120, 2, 'Charmeleon', 'Giro Fuego', 'Descarta 2 cartas de Energía unidas a Charizard para usar este ataque.', 'rrrr', '100', '', '', '', '', 1, 'Quema de Energía', 'Tantas veces como quieras durante tu turno (antes de atacar), puedes convertir todas las Energías unidas a Charizard en Energías tipo {r} por el resto del turno. Este poder no puede ser usado si Charizard está Dormido, Confundido o Paralizado.', 'w', 'f', 'ccc', 'Flame Pokémon. Length: 5\' 7\'\', Weight: 200 lbs. Spits fire that is hot enough to melt boulders. Known to unintentionally cause forest fires. LV. 76 #6', 4),
(5, 'c', 40, 0, '', 'Canto', 'Echa una moneda. Si sale cara, el Pokémon a la Defensa pasa a estar Dormido.', 'c', '', 'Metrónomo', 'Elige 1 de los ataques del Pokémon a la Defensa. Metrónomo copia ese ataque excepto por su coste de Energía y cualquier otra cosa requerida para poder usar ese ataque, como descartar cartas de Energía. (No importa de qué tipo sea el Pokémon a la Defensa, Clefairy sigue siendo Incoloro).', 'ccc', '', 0, '', '', 'f', 'p', 'c', 'Fairy Pokémon. Length: 2\' 0\'\', Weight: 17 lbs. It\'s magical and cute appeal has many admirers. It is rare and found only in certain areas. LV. 14 #35', 5),
(6, 'w', 100, 2, 'Magikarp', 'Furia Dragón', '', 'www', '50', 'Rayo Burbuja', 'Echa una moneda. Si es cara, el Pokémon a la Defensa pasa a estar Paralizado.', 'wwww', '40', 0, '', '', 'g', 'f', 'ccc', 'Atrocious Pokémon. Length: 21\' 4\'\', Weight: 518 lbs. Rarely seen in the wild. Huge and vicious, it is capable of destroying entire cities in a rage. LV. 41 #130', 6),
(7, 'f', 70, 0, '', 'Golpe Rápido', '', 'f', '20', 'Puñetazo Especial', '', 'ffc', '40', 0, '', '', 'p', '0', 'cc', 'Punching Pokémon. Length: 4\' 7\'\', Weight: 111 lbs. While seeming to do nothing, it fires punches in lihtning-fast volleys that are impossible to see. LV. 33 #107', 7),
(8, 'f', 100, 2, 'Machoke', 'Movimiento Sísmico', '', 'fffc', '60', '', '', '', '', 1, 'Devuelve el Golpe', 'Siempre que un ataque de tu oponente haga daño a Machamp (incluso si deja fuera de combate a Machamp), este poder hace 10 puntos de daño al Pokémon atacante. (No apliques Debilidad y Resistencia). Este poder no puede ser usado si Machamp está Dormido, Confundido o Paralizado.', 'p', '0', 'ccc', 'Superpower Pokémon. Length: 5\' 3\'\', Weight: 287 lbs. Using its amazing muscles, it throws powerful punches that can knock its victim clear over the horizon. LV. 67 #68', 8),
(9, 'l', 60, 1, 'Magnemite', 'Onda Trueno', 'Echa una moneda. Si es cara, el Pokémon a la Defensa pasa a estar Paralizado.', 'llc', '30', 'Autodestrucción', 'Hace 20 puntos de daño a cada Pokémon en la Banca de cada jugador. (No apliques Debilidad y Resistencia para los Pokémon en la Banca.) Magneton se hace 80 puntos de daño a sí mismo.', 'llcc', '80', 0, '', '', 'f', '0', 'c', 'Magnet Pokémon. Length: 3\' 3\'\', Weight: 132 lbs. Formed by several Magnemites linked together. It frequently appears when sunspots flare up. LV. 28 #82', 9),
(10, 'p', 60, 0, '', 'Psíquico', 'Este ataque hace 10 puntos de daño más 10 puntos más por cada carta de Energía unida al Pokémon a la Defensa.', 'pc', '10+', 'Barrera', 'Descarta una carta de Energía {p} unida a Mewtwo para usar este ataque. Durante el próximo turno de tu oponente previene todos los efectos de ataques, incluyendo el daño, hechos a Mewtwo.', 'pp', '', 0, '', '', 'p', '0', 'ccc', 'Genetic Pokémon. Length: 6\' 7\'\', Weight: 269 lbs. A scientist created this Pokémon after years of horrific gene-splicing and DNA engineering experiments. LV. 53 #150', 10),
(11, 'g', 90, 2, 'Nidorino', 'Golpe', 'Echa una moneda. Si es cara, este ataque hace 30 puntos de daño más 10 puntos más. Si es cruz, este ataque hace 30 puntos de daño y Nidoking se hace 10 puntos de daño a sí mismo.', 'gcc', '30+', 'Tóxico', 'El Pokémon a la Defensa pasa a estar Envenenado. Ahora recibe 20 puntos de daño de veneno en lugar de 10 después del turno de cada jugador. (Incluso si ya estaba Envenenado.)', 'ggg', '20', 0, '', '', 'p', '0', 'ccc', 'Drill Pokémon. Length: 4\' 7\'\', Weight: 137 lbs. Uses its powerful tail in battle to smash, constrict, then break its prey\'s bones. LV. 48 #34', 11),
(12, 'r', 80, 1, 'Vulpix', 'Atracción', 'Si tu oponente tiene algún Pokémon en su Banca, elige 1 de ellos y cambialo con el Pokémon a la Defensa', 'cc', '', 'Llamarada', 'Descarta 1 carta de Energía {r} unida a Ninetales para usar este ataque.', 'rrrr', '80', 0, '', '', 'w', '0', 'c', 'Fox Pokémon. Length: 3\' 7\'\', Weight: 44 lbs. Very smart and very vengeful. Grabbing one of its many tails could result in a 1,000-year curse. LV. 32 #38', 12),
(13, 'w', 90, 2, 'Poliwhirl', 'Pistola de Agua', 'Este ataque hace 30 puntos de daño más 10 puntos más por cada Energía {w} unida a Poliwrath que no sea usada para pagar por el coste de este ataque. No puedes sumar más de 20 puntos de daño de esta forma.', 'wwc', '30+', 'Torbellino', 'Si el Pokémon a la Defensa tiene alguna carta de Energía unida a él, elige 1 de ellas y descártala.', 'wwcc', '40', 0, '', '', 'g', '0', 'ccc', 'Tadpole Pokémon. Length: 4\' 3\'\', Weight: 119 lbs. An adept swimmer at both the front crawl and breaststroke. Easily overtakes the best human swimmers. LV. 48 #62', 13),
(14, 'l', 80, 1, 'Pikachu', 'Agilidad', 'Echa una moneda. Si es cara, previene todos los efectos de ataques, incluyendo el daño, hechos a Raichu durante el próximo turno de tu oponente.', 'lcc', '20', 'Onda Trueno', 'Echa una moneda. Si es cruz, Raichu se hace 30 puntos de daño a sí mismo.', 'lllc', '60', 0, '', '', 'f', '0', 'c', 'Mouse Pokémon. Length: 2\' 7\'\', Weight: 66 lbs. Its long tail serves as a ground to protect itself from its own high-voltage power. LV. 40 #26', 14),
(15, 'g', 100, 2, 'Ivysaur', 'Rayo Solar', '', 'gggg', '60', '', '', '', '', 1, 'Mover Energía', 'Tantas veces como quieras durante tu turno (antes de atacar), puedes tomar 1 Energía {g} unida a 1 de tus Pokémon y unirla a otro de ellos. Este poder no puede ser usado si Venusaur está Dormido, Confundido o Paralizado.', 'r', '0', 'cc', 'Seed Pokémon. Length: 6\' 7\'\', Weight: 221 lbs. This plant blooms when it is absorbing solar energy. It stays on the move to seek sunlight. LV. 67 #3', 15),
(16, 'l', 90, 0, '', 'Trueno', 'Echa una moneda. Si es cruz, Zapdos se hace 30 puntos de daño a sí mismo.', 'lllc', '60', 'Rayo', 'Descarta todas las cartas de Energía unidas a Zapdos para poder usar este ataque.', 'llll', '100', 0, '', '', '0', 'f', 'ccc', 'Electric Pokémon. Length: 5\' 3\'\', Weight: 116 lbs. A legendary bird Pokémon said to appear from clouds while wielding enormous lightning bolts. LV. 64 #145', 18),
(17, 'g', 80, 2, 'Kakuna', 'Doble Aguja', 'Echa 2 monedas. Este ataque hace 30 puntos de daño por cada cara.', 'ccc', '30x', 'Dardo Venenoso', 'El Pokémon a la Defensa pasa a estar Envenenado.', 'ggg', '40', 0, '', '', 'r', 'f', '', 'Poison Bee Pokémon. Length: 3\' 3\'\', Weight: 65 lbs. Flies at high speed and attacks using the large, venomous stingers on its forelegs and tail. LV. 32 #15', 19),
(18, 'c', 90, 0, '', 'Golpe Cuerpo', 'Echa una moneda. Si es cara, el Pokémon a la Defensa pasa a estar Paralizado.', 'cccc', '30', '', '', '', '', 1, 'Piel Gruesa', 'Snorlax no puede ser Dormido, Confundido, Paralizado o Envenenado. Este poder no puede ser usado si Snorlax está Dormido, Confundido o Paralizado.', 'f', 'p', 'cccc', 'Sleeping Pokémon. Length: 6\' 11\'\', Weight: 1014 lbs. Very lazy. Just eats and sleeps. As its rotund bulk builds, it becomes steadily more slothful. LV. 20 #143', 23),
(19, 'f', 50, 0, '', 'Patada Baja', '', 'f', '20', '', '', '', '', 0, '', '', 'p', '0', 'c', 'Superpower Pokémon. Length: 2\' 7\'\', Weight: 43 lbs. Loves to build its muscles. It trains in all styles of martial arts to become even stronger. LV. 20 #66', 24),
(20, 'w', 80, 1, 'Dratini', 'Portazo', 'Echa 2 monedas. Este ataque hace 30 puntos de daño por cada cara.', 'ccc', '30x', 'Híper Rayo', 'Si el Pokémon a la Defensa tiene alguna carta de Energía unida a él, elige 1 de ellas y descártala.', 'cccc', '20', 0, '', '', '0', 'p', 'cc', 'Dragon Pokémon. Length: 13\' 1\'\', Weight: 36 lbs. A mystical Pokémon that exudes a gentle aura. Has the ability to change climate conditions. LV. 33 #148', 25),
(21, 'f', 70, 1, 'Diglett', 'Cuchillada', '', 'ffc', '40', 'Terremoto', 'Este ataque hace 10 puntos de daño a cada Pokémon en tu banca. (No apliques debilidad y resistencia para los Pokémon en la banca).', 'ffff', '70', 0, '', '', 'g', 'l', 'cc', 'Mole Pokémon.', 27),
(22, 'l', 70, 0, '', 'Onda Trueno', 'Echa una moneda. Si es cara, el Pokémon a la Defensa pasa a estar Paralizado.', 'l', '10', 'Puño Trueno', 'Echa una moneda. Si es cara, este ataque hace 30 puntos de daño más 10 puntos más. Si es cruz, este ataque hace 30 puntos de daño y Electabuzz se hace 10 puntos de daño a sí mismo.', 'lc', '30+', 0, '', '', 'f', '0', 'cc', 'Electric Pokémon.', 28),
(23, 'l', 80, 1, 'Voltorb', 'Onda Eléctrica', 'Echa una moneda. Si es cruz, Electrode se ahce 10 puntos de daño a sí mismo.', 'lll', '50', '', '', '', '', 1, 'Buzzap', 'En cualquier momento durante tu turno (antes de atacar), puedes dejar fuera de combate a Electrode y unirlo a 1 de tus otros Pokémon. Si lo haces, elige un tipo de Energía. Electrode es ahora 1 carta de Energía (en lugar de un Pokémon) que provee 2 Energías de ese tipo. No puedes usar este poder si Electrode está Dormido, Confundido o Paralizado.', 'f', '0', 'c', 'Ball Pokémon. Length: 3\' 11\', Weight: 147 lbs. It stores electrical energy under very high pressure. It often explodes with little or no provocation. LV. 40 #101', 29),
(24, 'g', 50, 1, 'Oddish', 'Polvo Venenoso', 'El Pokémon a la Defensa pasa a estar Envenenado.', 'gg', '10', '', '', '', '', 1, 'Hedor de Polen', 'Una vez durante tu turno (antes de tu ataque), puedes echar la moneda a cara o cruz. Si sale cara, el Pokémon a la Defensa pasa a estar Confundido. Si sale cruz, tu Pokémon Activo pasa a estar Confundido. Este poder no puede ser utilizado si Dark Gloom está Dormido, Confundido o Paralizado.', 'r', '0', 'cc', 'Its pollen has such a strong smell that it even confuses itself at times. LV. 21 #44', 37),
(25, 'r', 50, 0, '', 'Puño Fuego', '', 'rr', '30', 'Lanzallamas', 'Descarta 1 carta de Energía {r} unida a Magmar para usar este ataque.', 'rrc', '50', 0, '', '', 'w', '0', 'cc', 'Its body always burns with an orange glow that enables it to hide perfectly among flames. LV. 24 #126', 38),
(26, 'r', 70, 0, '', 'Pantallahumo', 'Si el Pokémon a la Defensa intenta atacar durante el siguiente turno de tu oponente, tu oponente echa una moneda. Si es cruz, ese ataque no hace nada.', 'r', '10', 'Polución', 'Echa una moneda. Si es cara, el Pokémon a la Defensa pasa a estar Envenenado.', 'rr', '20', 0, '', '', 'w', '0', 'c', 'Found at the mouths of volcanoes and extremely hard to spot. There are very few instances of capturing this Pokémon. LV. 31 #126', 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trainer_card`
--

CREATE TABLE `trainer_card` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `card_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `trainer_card`
--

INSERT INTO `trainer_card` (`id`, `description`, `card_id`) VALUES
(1, 'Juega Clefairy Doll como si fuera un Pokémon Básico. Mientras esté en juego, Clefairy Doll cuenta como un Pokémon (en lugar de una carta de Entrenador). Clefairy Doll no tiene ataques, no puede retirarse y no puede quedar Dormido, Confundido, Paralizado o Envenenado. Si Clefairy Doll queda fuera de combate, no cuenta como un Pokémon fuera de combate. En cualquier momento, durante tu turno (antes de atacar), puedes descartar Clefairy Doll.', 21),
(2, 'Roba 2 cartas.', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isAdmin`) VALUES
(1, 'Dafting', '$2y$10$c/alN5VN.x3WzY87yrcWLeChHx9ph7EfXEYh8GnPEj7.TnHHpIUNW', 1),
(2, 'Pepita la bandolera', '$2y$10$ic29OFwjCbjYlQ.buHy4meS3tg02j1q71aIN9RN/dcA9QqaxmZa8O', 0),
(4, 'Messi', '$2y$10$eShPM388DV94ZXsdoCGYA.ELisVVxR6HihGwM2akgYaHJiosG5W5S', 1),
(5, 'Ash Ketchup', '$2y$10$REy1gmDd40sn6HPqxYYeNeQ/XMuV8mhUBApo2yByIaxsmsZk4UbI.', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_card` (`id_card`);

--
-- Indices de la tabla `energy_card`
--
ALTER TABLE `energy_card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `card_id` (`card_id`);

--
-- Indices de la tabla `expansions`
--
ALTER TABLE `expansions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pokemon_card`
--
ALTER TABLE `pokemon_card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `card_id` (`card_id`);

--
-- Indices de la tabla `trainer_card`
--
ALTER TABLE `trainer_card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `card_id` (`card_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `energy_card`
--
ALTER TABLE `energy_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `expansions`
--
ALTER TABLE `expansions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pokemon_card`
--
ALTER TABLE `pokemon_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `trainer_card`
--
ALTER TABLE `trainer_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_card`) REFERENCES `cards` (`id`);

--
-- Filtros para la tabla `energy_card`
--
ALTER TABLE `energy_card`
  ADD CONSTRAINT `energy_card_ibfk_1` FOREIGN KEY (`card_id`) REFERENCES `cards` (`id`);

--
-- Filtros para la tabla `pokemon_card`
--
ALTER TABLE `pokemon_card`
  ADD CONSTRAINT `pokemon_card_ibfk_1` FOREIGN KEY (`card_id`) REFERENCES `cards` (`id`);

--
-- Filtros para la tabla `trainer_card`
--
ALTER TABLE `trainer_card`
  ADD CONSTRAINT `trainer_card_ibfk_1` FOREIGN KEY (`card_id`) REFERENCES `cards` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

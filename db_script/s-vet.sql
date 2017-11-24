-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 11:01 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s-vet`
--

-- --------------------------------------------------------

--
-- Table structure for table `care_record`
--

CREATE TABLE `care_record` (
  `id` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `dni` int(9) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telephone` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `birthdate` date NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `dni`, `name`, `surname`, `email`, `telephone`, `address`, `birthdate`, `created`, `modified`) VALUES
(1, 12345, 'Pedro', 'Gomez', 'pedrito@pedro.com', '1234', 'Calle Falsa 123', '2012-10-17', '2017-11-22 23:01:41', '2017-11-22 23:01:41'),
(2, 32456756, 'Juan José', 'San Fernando', 'juanjo@losborbotones.com', '455654565', 'Independencia 666|', '2013-09-22', '2017-11-22 23:03:13', '2017-11-22 23:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_species` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `aggressive` tinyint(1) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `id_client`, `id_species`, `name`, `birthdate`, `gender`, `comment`, `aggressive`, `created`, `modified`) VALUES
(1, 1, 1, 'Juancho', '2013-12-12', 'M', 'Juancho es un perro muy amistoso', 0, '2017-11-22 23:32:46', '2017-11-22 23:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `pets_vaccines`
--

CREATE TABLE `pets_vaccines` (
  `id` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `id_vaccine` int(11) NOT NULL,
  `date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Perro', 'Mamífero omnívoro de la familia de los cánidos, que constituye una subespecie del lobo.', '2017-11-19 22:34:26', '2017-11-19 22:34:26'),
(2, 'Gato', 'Subespecie de mamífero carnívoro de la familia Felidae.', '2017-11-19 22:34:59', '2017-11-19 22:34:59'),
(3, 'Hamster', 'Los cricetinos son una subfamilia de roedores, conocidos comúnmente como hámsteres. Se han identificado 19 especies actuales distintas, agrupadas en siete géneros.', '2017-11-19 22:36:43', '2017-11-19 22:36:43'),
(4, 'Hurón', 'El hurón es una subespecie del turón. Fue domesticado hace al menos 2500 años para cazar conejos.', '2017-11-19 22:37:18', '2017-11-19 22:37:18'),
(5, 'Conejo', 'El conejo común o conejo europeo es una especie de mamífero lagomorfo de la familia Leporidae, y el único miembro actual del género Oryctolagus.', '2017-11-19 22:37:54', '2017-11-19 22:37:54'),
(6, 'Caballo', 'El caballo ​​ es un mamífero perisodáctilo domesticado de la familia de los équidos. Es un herbívoro solípedo de gran porte, cuello largo y arqueado, poblado por largas crines.', '2017-11-19 22:38:34', '2017-11-19 22:38:34'),
(7, 'Vaca', 'La vaca en el caso de la hembra, o toro en el caso del macho, es un mamífero artiodáctilo de la familia de los bóvidos.', '2017-11-19 22:39:37', '2017-11-19 22:39:37'),
(8, 'Cerdo', 'El cerdo es una subespecie de mamífero artiodáctilo de la familia Suidae. Es un animal doméstico usado en la alimentación humana por muchos pueblos.', '2017-11-19 22:52:26', '2017-11-19 22:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP,
  `supervisor` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `password`, `created`, `modified`, `supervisor`) VALUES
(1, 'Hola Mundo', 'holamundo', '$2y$10$pJqabB7BP8TSrITq25/QHue7cAm7O4Zpq3NDyZ26XZ/J1Od4o13hS', '2017-11-19 18:49:46', '2017-11-19 18:49:46', 1),
(2, 'veterinario1', 'veterinario1', '$2y$10$wNFBEfiEgoL3mP5TALs3.utpdrhW55ZD3cXwuVjQ2QWSIupAF3hJa', '2017-11-19 23:36:22', '2017-11-19 23:36:22', 0),
(4, 'Roxana Leituz', 'r.leituz', '$2y$10$uq6yAtz.Eh3lgHBJ6dl2zuSpEDSWjNqCy/QOI3lYyx/E3.Nq9Jr76', '2017-11-22 14:03:50', '2017-11-22 14:03:50', 1),
(5, 'Nicolas \"El Profe\" Garrido', 'n.garrido', '$2y$10$ZlhUS.YfBPo1vkf95VpuEuqL/6ob4neQYRMHgRyL6hl6z.9KqKGH2', '2017-11-22 22:16:18', '2017-11-22 22:16:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dose` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `name`, `dose`, `description`, `created`, `modified`) VALUES
(1, 'RECOMBITEK C4 Quintuple', '1 ml (1 dosis) en perros sanos por vía subcutánea o intramuscular. Para completar aplique nuevamente a intervalos de 3 semanas hasta que el perro cumpla las 12 semanas de edad. Se recomienda revacunar anualmente con una dosis de 1 ml.', 'Vacuna contra el Moquillo (Recombinante), Hepatitis, Adenovirosis, Parainfluenza y Parvovirosis en caninos.', '2017-11-19 23:20:19', '2017-11-19 23:20:19'),
(2, 'RECOMBITEK C4 CV Séxtuple + Corona', '1 ml (1 dosis) en perros sanos por vía subcutánea o intramuscular. Para completar aplique nuevamente a intervalos de 3 semanas hasta que el perro cumpla las 12 semanas de edad. Se recomienda revacunar anualmente con una dosis de 1 ml.', 'Vacuna contra el Moquillo (Recombinante), Hepatitis, Adenovirosis, Coronavirosis, Parainfluenza y Parvovirosis en caninos.', '2017-11-19 23:21:29', '2017-11-19 23:21:29'),
(3, 'RECOMBITEK C6 - Sextuple con Leptospira', '1 ml (1 dosis) en perros sanos por vía subcutánea o intramuscular. Para completar aplique nuevamente a intervalos de 3 semanas hasta que el perro cumpla las 12 semanas de edad. Se recomienda revacunar anualmente con una dosis de 1 ml.', 'Vacuna contra el Moquillo (Recombinante), Hepatitis, Adenovirosis, Parainfluenza, Parvovirosis y Leptospirosis en caninos.', '2017-11-19 23:22:02', '2017-11-19 23:22:02'),
(4, 'RECOMBITEK C6 CV - Sextuple + Corona y Leptospira', '1 ml (1 dosis) en perros sanos por vía subcutánea o intramuscular. Para completar aplique nuevamente a intervalos de 3 semanas hasta que el perro cumpla las 12 semanas de edad. Se recomienda revacunar anualmente con una dosis de 1 ml.', 'Vacuna contra el Moquillo (Recombinante), Hepatitis, Adenovirosis, Coronavirosis, Parainfluenza, Parvovirosis y Leptospirosis en caninos.', '2017-11-19 23:22:48', '2017-11-19 23:22:48'),
(5, 'ANTIRRÁBICA BHK PEQUEÑOS ANIMALES', 'Aplicar 1 ml por vía subcutánea.', 'Vacuna para la prevención de la Rabia en caninos y felinos.', '2017-11-19 23:25:32', '2017-11-19 23:25:32'),
(6, 'ANTIRRABICA B.H.K. GRANDES ANIMALES', 'Aplicar 2 ml por vía subcutánea o intramuscular en ambas especies. Vacunar animales de cualquier edad con una única dosis, luego anualmente o de acuerdo al consejo del profesional actuante.', 'Vacuna para la prevención de la Rabia en bovinos y equinos.', '2017-11-19 23:26:26', '2017-11-19 23:26:26'),
(7, 'Leptican', 'Aplicar 1 ml por vía subcutánea. En animales primovacunados se aconseja un refuerzo a las 3 o 4 semanas de la primera dosis. Revacunar anualmente o semestralmente de acuerdo a la tasa de riesgo de contagio y al criterio del profesional actuante.', 'Vacuna indicada para la prevención de Leptospirosis en caninos.', '2017-11-19 23:28:45', '2017-11-19 23:28:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `care_record`
--
ALTER TABLE `care_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pet` (`id_pet`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dni` (`dni`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_species` (`id_species`);

--
-- Indexes for table `pets_vaccines`
--
ALTER TABLE `pets_vaccines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pet` (`id_pet`),
  ADD KEY `id_vaccine` (`id_vaccine`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `care_record`
--
ALTER TABLE `care_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pets_vaccines`
--
ALTER TABLE `pets_vaccines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `care_record`
--
ALTER TABLE `care_record`
  ADD CONSTRAINT `care_record_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pets` (`id`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`id_species`) REFERENCES `species` (`id`),
  ADD CONSTRAINT `pets_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`);

--
-- Constraints for table `pets_vaccines`
--
ALTER TABLE `pets_vaccines`
  ADD CONSTRAINT `pets_vaccines_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pets` (`id`),
  ADD CONSTRAINT `pets_vaccines_ibfk_2` FOREIGN KEY (`id_vaccine`) REFERENCES `vaccines` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

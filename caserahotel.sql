-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 03:48 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caserahotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `animales`
--

CREATE TABLE `animales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `comida` varchar(105) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animales`
--

INSERT INTO `animales` (`id`, `nombre`, `edad`, `tipo`, `descripcion`, `comida`, `imagen`) VALUES
(14, 'Aurelio - Gato', 12, 0, 'Grandes ojos grises. Pelaje suave, jugueton y le encantan los juguetes', 'Cuido Orgánico', 'https://github.com/juanpahdz/CaseraIMGS/blob/master/Cat.jpg?raw=true'),
(15, 'Sech - Perro', 10, 0, 'Golden Retriever jugueton y Muy desordenado, Debes sacarlo almenos 4 veces al dia', 'Cuido Premium', 'https://github.com/juanpahdz/CaseraIMGS/blob/master/Golden.jpg?raw=true'),
(16, 'Nion - Labrador', 20, 0, 'Labrador Jugueton y muy juicioso, debe salir almenos 2 veces por dia.', 'Cuido ', 'https://github.com/juanpahdz/CaseraIMGS/blob/master/Labrador.jpg?raw=true'),
(17, 'Lemurino', 5, 1, 'Lemur de grandes ojos, recien nacido... Por favor mantener en un habitad con muchos arboles para que no se deprima', 'frutas', 'https://github.com/juanpahdz/CaseraIMGS/blob/master/Lemur.jpg?raw=true'),
(18, 'Carlitos', 50, 1, 'Carlitos es un gran Leon que sufiro un accidente en una carretera, debe ser monitoreado diaramente y alimentado con Carne de Humano', 'Carnes ( Ama la de HUMANO )', 'https://github.com/juanpahdz/CaseraIMGS/blob/master/Leon.jpg?raw=true'),
(19, 'LORIÑO', 4, 1, 'Loro hindu! Cuidarle en una jaula lo suficiente mente amplia para que se pueda mover, usar espejos para entretenerlo. Puede gritar mucho', 'Cacaguate y Semillas', 'https://github.com/juanpahdz/CaseraIMGS/blob/master/Loro%20indu.jpg?raw=true'),
(20, 'Mara ', 10, 1, 'Mara es un leon recien Nacido, es muy jugueton.. Cuidado ha arracando algunos pedazos de piel. Darle comida 5 veces al dia', 'Carne de Animales', 'https://github.com/juanpahdz/CaseraIMGS/blob/master/Mara.jpg?raw=true'),
(21, 'Negriti', 20, 0, 'Grandes Ojos y colmillos peligrosos, no acercar a la poblacion le encanta la carne de Humano y haria lo que fuera por tenerla', 'Carne fresca', 'https://github.com/juanpahdz/CaseraIMGS/blob/master/Panter.jpg?raw=true'),
(22, 'Macarena', 10, 0, 'Macarena es un pincher muy juguetona, te mantendra ocupado todo el dia', 'Cuido', 'https://github.com/juanpahdz/CaseraIMGS/blob/master/Pincher.jpg?raw=true'),
(23, 'Canela', 50, 1, 'Se recomienda que coma Carne de humano dia por medio, mucho cuidado que no sea la suya', 'Carne Fresca de Humano', 'https://github.com/juanpahdz/CaseraIMGS/blob/master/Tigre.jpg?raw=true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

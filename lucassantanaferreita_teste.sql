-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: 179.188.16.198
-- Generation Time: 11-Dez-2017 às 13:52
-- Versão do servidor: 5.6.37-82.2-log
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsf_teste`
--
CREATE DATABASE IF NOT EXISTS `lsf_teste` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `lsf_teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `corrida`
--

CREATE TABLE `corrida` (
  `id_motorista` int(6) NOT NULL,
  `id_passageiro` int(6) NOT NULL,
  `vl_corrida` decimal(6,2) NOT NULL,
  `id_corrida` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `corrida`
--

INSERT INTO `corrida` (`id_motorista`, `id_passageiro`, `vl_corrida`, `id_corrida`) VALUES
(1, 1, 9.90, 1),
(2, 2, 10.50, 2),
(3, 1, 27.87, 3),
(1, 1, 10.00, 4),
(7, 14, 20.00, 5),
(4, 2, 8.30, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `id_motorista` int(6) NOT NULL,
  `nm_motorista` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `dt_nascimento` date NOT NULL,
  `id_cpf` int(11) NOT NULL,
  `ds_carro` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `ds_status` tinyint(1) NOT NULL,
  `ds_sexo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`id_motorista`, `nm_motorista`, `dt_nascimento`, `id_cpf`, `ds_carro`, `ds_status`, `ds_sexo`) VALUES
(1, 'Leonardo', '1980-01-10', 1, 'corsa', 0, 1),
(2, 'Paulo', '1980-01-01', 2, 'Clio', 0, 1),
(3, 'Maria', '1990-01-01', 3, 'Prius', 1, 0),
(4, 'Marta', '1990-02-02', 10, 'astra', 1, 0),
(5, 'Julio', '1990-03-03', 4, 'gol', 1, 1),
(7, 'Thomas', '1996-04-04', 5, 'uno', 1, 1),
(9, 'Linda', '1880-01-01', 9, 'Sandero', 1, 0),
(10, 'Nicollas', '1995-01-01', 11, 'palio', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `passageiro`
--

CREATE TABLE `passageiro` (
  `id_passageiro` int(6) NOT NULL,
  `nm_passageiro` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `dt_nascimento` date NOT NULL,
  `id_cpf` int(11) NOT NULL,
  `ds_sexo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `passageiro`
--

INSERT INTO `passageiro` (`id_passageiro`, `nm_passageiro`, `dt_nascimento`, `id_cpf`, `ds_sexo`) VALUES
(1, 'Lucas', '1997-12-28', 4, 1),
(2, 'Noemi', '1995-09-29', 5, 0),
(14, 'Tiago', '2005-01-01', 20, 1),
(15, 'AndrÃ©', '1994-01-01', 21, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corrida`
--
ALTER TABLE `corrida`
  ADD PRIMARY KEY (`id_corrida`);

--
-- Indexes for table `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id_motorista`);

--
-- Indexes for table `passageiro`
--
ALTER TABLE `passageiro`
  ADD PRIMARY KEY (`id_passageiro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corrida`
--
ALTER TABLE `corrida`
  MODIFY `id_corrida` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id_motorista` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `passageiro`
--
ALTER TABLE `passageiro`
  MODIFY `id_passageiro` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

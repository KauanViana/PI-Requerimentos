-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Set-2023 às 23:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetointegrador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cores`
--

CREATE TABLE `cores` (
  `Nome` text NOT NULL,
  `SIAPE` varchar(50) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Senha` varchar(20) NOT NULL,
  `Coordenacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `discente`
--

CREATE TABLE `discente` (
  `Nome` text NOT NULL,
  `E-mail(INST)` varchar(50) NOT NULL,
  `Curso` text NOT NULL,
  `Turma` varchar(20) NOT NULL,
  `Telefone` int(20) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `matricula` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doscente`
--

CREATE TABLE `doscente` (
  `SIAP` varchar(50) NOT NULL,
  `Nome` text NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Curso` text NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `doscente`
--

INSERT INTO `doscente` (`SIAP`, `Nome`, `E-mail`, `Curso`, `Usuario`, `Senha`) VALUES
('1234567', 'AWD', 'pl1997433@gmail.com', 'EI', 'AWD', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

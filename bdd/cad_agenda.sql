-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Fev-2019 às 22:46
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cad_agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `login` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `privilegio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`login`, `senha`, `privilegio`) VALUES
('admin', '123', 'Master'),
('cliente', '123', 'Usuario'),
('funcionario', '123', 'Comum'),
('test1', '123', 'Usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `animes`
--

CREATE TABLE `animes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `episodio` varchar(4) NOT NULL,
  `datalanc` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animes`
--

INSERT INTO `animes` (`id`, `nome`, `genero`, `episodio`, `datalanc`) VALUES
(1, 'Attack On Titans', 'Ação', '25', '06/09/2009'),
(2, 'Boku No Hero', 'Ação', '11', '11/11/1111'),
(4, 'test2', 'test2', '11', '11/11/1111'),
(6, 'test1', 'test1', '22', '22/22/2222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mangas`
--

CREATE TABLE `mangas` (
  `id` int(3) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sugestao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mangas`
--

INSERT INTO `mangas` (`id`, `nome`, `sugestao`) VALUES
(1, 'Apenas um texto aleatório pra testar esse sistema ', ''),
(2, 'test2', 'akskdhsakjdhasdjkajshda'),
(3, 'test6', '1232132132');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`login`,`senha`);

--
-- Indexes for table `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mangas`
--
ALTER TABLE `mangas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mangas`
--
ALTER TABLE `mangas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

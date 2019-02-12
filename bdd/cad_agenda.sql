-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 07-Fev-2019 às 14:12
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `cad_agenda`
--
CREATE DATABASE IF NOT EXISTS `cad_agenda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cad_agenda`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE IF NOT EXISTS `acesso` (
  `login` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `privilegio` varchar(20) NOT NULL,
  PRIMARY KEY (`login`,`senha`)
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

CREATE TABLE IF NOT EXISTS `animes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `episodio` varchar(4) NOT NULL,
  `datalanc` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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

CREATE TABLE IF NOT EXISTS `mangas` (
  `nome` varchar(30) NOT NULL,
  `sugestao` varchar(500) NOT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mangas`
--

INSERT INTO `mangas` (`nome`, `sugestao`) VALUES
('test1', 'Apenas um texto aleatório pra testar esse sistema q está machucando minha cabeça por eu n ter criatividade nenhuma!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

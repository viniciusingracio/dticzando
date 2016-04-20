-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2015 às 20:49
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa_som`
--

CREATE TABLE IF NOT EXISTS `caixa_som` (
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `patrimonio` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `caixa_som`
--

INSERT INTO `caixa_som` (`marca`, `modelo`, `patrimonio`, `status`, `id`) VALUES
('Hp', 'nfgs', '5560', 'Não funciona', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `maquina`
--

CREATE TABLE IF NOT EXISTS `maquina` (
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `patrimonio` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `maquina`
--

INSERT INTO `maquina` (`marca`, `modelo`, `patrimonio`, `status`, `id`) VALUES
('Desk015', 'm58P', 'NP50050', 'Funcionando', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `monitor`
--

CREATE TABLE IF NOT EXISTS `monitor` (
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `patrimonio` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `monitor`
--

INSERT INTO `monitor` (`marca`, `modelo`, `patrimonio`, `status`, `id`) VALUES
('Lenovo', '56568PS', 'NP50000', 'Funcionando', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mouse`
--

CREATE TABLE IF NOT EXISTS `mouse` (
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `patrimonio` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `mouse`
--

INSERT INTO `mouse` (`marca`, `modelo`, `patrimonio`, `status`, `id`) VALUES
('Lenovo', '560series', '-----------', 'Funcionando', 9),
('asdasdasd', 'asdsadasddas', '-------', 'nao_verificado', 10),
('teste', 'teste', 'teste', 'Funcionando', 17),
('teste', 'teste', 'teste', 'Funcionando', 15),
('teste', 'teste', 'teste', 'Funcionando', 16),
('teste', 'teste', 'teste', 'Funcionando', 18),
('teste', 'teste', 'teste', 'Funcionando', 19),
('teste', 'teste', 'teste', 'Funcionando', 20),
('teste', 'teste', 'teste', 'Funcionando', 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notebook`
--

CREATE TABLE IF NOT EXISTS `notebook` (
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `patrimonio` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `notebook`
--

INSERT INTO `notebook` (`marca`, `modelo`, `patrimonio`, `status`, `id`) VALUES
('Positivo', 'h555z', 'NP56502', 'Funcionando', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `placa_video`
--

CREATE TABLE IF NOT EXISTS `placa_video` (
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `patrimonio` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `placa_video`
--

INSERT INTO `placa_video` (`marca`, `modelo`, `patrimonio`, `status`, `id`) VALUES
('radeon', '560series', '------', 'Funcionando', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `placa_wireless`
--

CREATE TABLE IF NOT EXISTS `placa_wireless` (
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `patrimonio` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `placa_wireless`
--

INSERT INTO `placa_wireless` (`marca`, `modelo`, `patrimonio`, `status`, `id`) VALUES
('Ricohhs', '5645415', 'NP5050', 'Funcionando', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teclado`
--

CREATE TABLE IF NOT EXISTS `teclado` (
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `patrimonio` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `teclado`
--

INSERT INTO `teclado` (`marca`, `modelo`, `patrimonio`, `status`, `id`) VALUES
('Hp', '566Rrpi', '-----------', 'Funcionando', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(250) NOT NULL,
  `sobrenome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `sobrenome`, `email`, `senha`, `id`) VALUES
('Angelo', 'Soldati', 'soldatiangelo@gmail.com', 'inter.10', 3),
('Administrador', 'Administrador', 'admin', 'admin', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mai 25, 2014 as 02:35 AM
-- Versão do Servidor: 5.1.44
-- Versão do PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Pessoa`
--

CREATE TABLE IF NOT EXISTS `Pessoa` (
  `codigo` varchar(40) NOT NULL,
  `cpf` varchar(40) DEFAULT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cep` varchar(12) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `sexo` varchar(40) DEFAULT NULL,
  `numero` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `celular` varchar(40) DEFAULT NULL,
  `uf` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `Pessoa_codigo_INDEX` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Pessoa`
--

INSERT INTO `Pessoa` (`codigo`, `cpf`, `nome`, `endereco`, `bairro`, `cep`, `email`, `sexo`, `numero`, `cidade`, `telefone`, `celular`, `uf`) VALUES
('55555', '666666', 'bebado', '', '', '$cepIn', '$emailIn', '$sexoIn', '$numeroIn', '$cidadeIn', '$telefoneIn', '$celularIn', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Veiculo`
--

CREATE TABLE IF NOT EXISTS `Veiculo` (
  `Identificador` varchar(40) NOT NULL,
  `Marca` varchar(25) DEFAULT NULL,
  `Modelo` varchar(25) DEFAULT NULL,
  `Placa` varchar(25) DEFAULT NULL,
  `Cor` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Identificador`),
  KEY `Veiculo_Identificador_INDEX` (`Identificador`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Veiculo`
--

INSERT INTO `Veiculo` (`Identificador`, `Marca`, `Modelo`, `Placa`, `Cor`) VALUES
('111111', 'CHEVROLET', 'CHEVETTE', 'MNM6666', 'preta');

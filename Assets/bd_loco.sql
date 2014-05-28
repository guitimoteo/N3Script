-- MySQL dump 10.13  Distrib 5.6.16, for Win32 (x86)
--
-- Host: localhost    Database: estacionamento
-- ------------------------------------------------------
-- Server version	5.6.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `estacionamento`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `estacionamento` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `estacionamento`;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pessoa` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES ('55555','666666','bebado','','','$cepIn','$emailIn','$sexoIn','$numeroIn','$cidadeIn','$telefoneIn','$celularIn','SP');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_geral`
--

DROP TABLE IF EXISTS `reg_geral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reg_geral` (
  `codigo` varchar(25) DEFAULT NULL,
  `identificacao` varchar(25) DEFAULT NULL,
  `hr_entrada` varchar(25) DEFAULT NULL,
  `hr_saida` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_geral`
--

LOCK TABLES `reg_geral` WRITE;
/*!40000 ALTER TABLE `reg_geral` DISABLE KEYS */;
/*!40000 ALTER TABLE `reg_geral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket` (
  `codigo` varchar(25) DEFAULT NULL,
  `identificacao` varchar(25) DEFAULT NULL,
  `hr_entrada` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veiculo`
--

DROP TABLE IF EXISTS `veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `veiculo` (
  `Identificador` varchar(40) NOT NULL,
  `Marca` varchar(25) DEFAULT NULL,
  `Modelo` varchar(25) DEFAULT NULL,
  `Placa` varchar(25) DEFAULT NULL,
  `Cor` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Identificador`),
  KEY `Veiculo_Identificador_INDEX` (`Identificador`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo`
--

LOCK TABLES `veiculo` WRITE;
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
INSERT INTO `veiculo` VALUES ('111111','CHEVROLET','CHEVETTE','MNM6666','preta'),('','','','placa','cor'),('123123','16','1042','placa','cor'),('121681062','volkswagen','gol g5','placa','cor'),('245245245','ferrari','bla','placa','cor'),('134514514','sei la','num sei','placa','cor'),('15145','volkswagen','voyage','adf3174','azul'),('eu eu eu','hu3','vaicajod','suc8888','brot'),('bla','bla','bla','bla','bla');
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-28  3:42:57

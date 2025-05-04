-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bd_pharmadigital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE IF NOT EXISTS `agendamento` (
  `idagendamento` int(11) NOT NULL AUTO_INCREMENT,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT '1' COMMENT '1= agendaddo\n2=retirado\n3==cancelado',
  `idusuario` int(11) NOT NULL,
  `idmedicamentos` int(11) NOT NULL,
  PRIMARY KEY (`idagendamento`),
  KEY `fk_agendamento_usuario1_idx` (`idusuario`),
  KEY `fk_agendamento_medicamentos1_idx` (`idmedicamentos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `idchat` int(11) NOT NULL AUTO_INCREMENT,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mensagem` longtext NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idchat`),
  KEY `fk_chat_usuario1_idx` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacao`
--

CREATE TABLE IF NOT EXISTS `localizacao` (
  `idlocalizacao` int(11) NOT NULL AUTO_INCREMENT,
  `nomeLocal` varchar(100) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `mapa` longtext,
  PRIMARY KEY (`idlocalizacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `localizacao`
--

INSERT INTO `localizacao` (`idlocalizacao`, `nomeLocal`, `endereco`, `mapa`) VALUES
(1, 'Posto de Saúde 10', 'St. N - Ceilândia, Brasília - DF, 72220-120', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.6087312505406!2d-48.11605412630245!3d-15.824572023696044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bccfb160a686b%3A0x6a0cb4a391699b9e!2sUBS%2010%20de%20Ceil%C3%A2ndia!5e0!3m2!1spt-BR!2sbr!4v1687394723011!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE IF NOT EXISTS `medicamentos` (
  `idmedicamentos` int(11) NOT NULL AUTO_INCREMENT,
  `nomeMedicamento` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `status` int(11) DEFAULT '1',
  `idtipoMedicamento` int(11) NOT NULL,
  `idlocalizacao` int(11) NOT NULL,
  PRIMARY KEY (`idmedicamentos`),
  KEY `fk_medicamentos_tipoMedicamento1_idx` (`idtipoMedicamento`),
  KEY `fk_medicamentos_localizacao1_idx` (`idlocalizacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idperfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idperfil`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Usuário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipomedicamento`
--

CREATE TABLE IF NOT EXISTS `tipomedicamento` (
  `idtipoMedicamento` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipoMedicamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tipomedicamento`
--

INSERT INTO `tipomedicamento` (`idtipoMedicamento`, `descricao`) VALUES
(1, 'Comprimidos'),
(2, 'Injetável'),
(3, 'Xaropes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(120) NOT NULL,
  `genero` int(11) NOT NULL,
  `idperfil` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_perfil_idx` (`idperfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `senha`, `email`, `genero`, `idperfil`) VALUES
(1, 'admin', '123', 'admin@gmail.com', 1, 1),
(2, 'edimar', '123', 'nogueiraguerra@gmail.com', 1, 2);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_agendamento_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_agendamento_medicamentos1` FOREIGN KEY (`idmedicamentos`) REFERENCES `medicamentos` (`idmedicamentos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `fk_chat_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD CONSTRAINT `fk_medicamentos_tipoMedicamento1` FOREIGN KEY (`idtipoMedicamento`) REFERENCES `tipomedicamento` (`idtipoMedicamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_medicamentos_localizacao1` FOREIGN KEY (`idlocalizacao`) REFERENCES `localizacao` (`idlocalizacao`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

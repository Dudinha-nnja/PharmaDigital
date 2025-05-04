-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jun-2023 às 20:33
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_pharmadigital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `idagendamento` int(11) NOT NULL,
  `data` date NOT NULL,
  `status` varchar(45) DEFAULT '1' COMMENT '1= agendaddo\n2=retirado\n3==cancelado',
  `idusuario` int(11) NOT NULL,
  `quantidadeSolicitada` int(11) DEFAULT NULL,
  `idmedicamentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`idagendamento`, `data`, `status`, `idusuario`, `quantidadeSolicitada`, `idmedicamentos`) VALUES
(8, '2023-06-28', '2', 2, 1, 4),
(9, '2023-06-27', '2', 2, 1, 6),
(10, '2023-06-26', '2', 2, 1, 8),
(11, '2023-06-30', '2', 2, 9, 4),
(12, '2023-06-29', '2', 2, 100, 5),
(13, '2023-06-26', '1', 2, 10, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE `chat` (
  `idchat` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mensagem` longtext NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacao`
--

CREATE TABLE `localizacao` (
  `idlocalizacao` int(11) NOT NULL,
  `nomeLocal` varchar(100) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `mapa` longtext,
  `status` int(11) DEFAULT '1' COMMENT '1=ativo\n0=desativado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `localizacao`
--

INSERT INTO `localizacao` (`idlocalizacao`, `nomeLocal`, `endereco`, `mapa`, `status`) VALUES
(1, 'Posto de Saúde 10', 'St. N - Ceilândia, Brasília - DF, 72220-120', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.6087312504987!2d-48.116054125216664!3d-15.824572023698266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bccfb160a686b%3A0x6a0cb4a391699b9e!2sUBS%2010%20de%20Ceil%C3%A2ndia!5e0!3m2!1spt-BR!2sbr!4v1687479426556!5m2!1spt-BR!2sbr\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1),
(2, 'Unidade Básica de Saúde 08 Ceilândia', 'S p EQNP 17/13 AE - A,B,C,D Cj O - Ceilândia,', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.9430128590116!2d-48.1299239!3d-15.8069586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bcc708bd9c8fd%3A0x802e7e4b83e360ef!2sUnidade%20B%C3%A1sica%20de%20Sa%C3%BAde%2008%20Ceil%C3%A2ndia!5e0!3m2!1spt-BR!2sbr!4v1687479306074!5m2!1spt-BR!2sbr\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1),
(3, 'UBS 02 de Ceilândia tetet', 'St. N QNN 13 - Ceilândia, Brasília - DF, 7222', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.926484719764!2d-48.12315952521717!3d-15.807829923285356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bcc7d53320fb5%3A0x55b93223bec09a81!2sUBS%2002%20de%20Ceil%C3%A2ndia!5e0!3m2!1spt-BR!2sbr!4v1687479552319!5m2!1spt-BR!2sbr\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE `medicamentos` (
  `idmedicamentos` int(11) NOT NULL,
  `nomeMedicamento` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `status` int(11) DEFAULT '1',
  `idtipoMedicamento` int(11) NOT NULL,
  `idlocalizacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`idmedicamentos`, `nomeMedicamento`, `quantidade`, `status`, `idtipoMedicamento`, `idlocalizacao`) VALUES
(1, 'Amoxicilina 500mg', 470, 1, 1, 1),
(4, 'Dipirona 500 mg', 199, 1, 1, 1),
(5, 'Soro Fisiologico', 2000, 1, 3, 3),
(6, 'AntiTetanica', 99, 1, 5, 1),
(8, 'Covid', 197, 1, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL,
  `perfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tipomedicamento` (
  `idtipoMedicamento` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipomedicamento`
--

INSERT INTO `tipomedicamento` (`idtipoMedicamento`, `descricao`) VALUES
(1, 'Comprimidos'),
(2, 'Injetável'),
(3, 'Xaropes'),
(4, 'Diversos'),
(5, 'Vacinas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(120) NOT NULL,
  `genero` int(11) NOT NULL,
  `idperfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `senha`, `email`, `genero`, `idperfil`) VALUES
(1, 'admin', '123', 'admin@gmail.com', 1, 1),
(2, 'Edimar Nogueira', '123', 'guerra@gmail.com', 1, 2),
(3, 'Illana Nogueira', '123', 'illana@gmail.com', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idagendamento`),
  ADD KEY `fk_agendamento_usuario1_idx` (`idusuario`),
  ADD KEY `fk_agendamento_medicamentos1_idx` (`idmedicamentos`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`idchat`),
  ADD KEY `fk_chat_usuario1_idx` (`idusuario`);

--
-- Indexes for table `localizacao`
--
ALTER TABLE `localizacao`
  ADD PRIMARY KEY (`idlocalizacao`);

--
-- Indexes for table `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`idmedicamentos`),
  ADD KEY `fk_medicamentos_tipoMedicamento1_idx` (`idtipoMedicamento`),
  ADD KEY `fk_medicamentos_localizacao1_idx` (`idlocalizacao`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`);

--
-- Indexes for table `tipomedicamento`
--
ALTER TABLE `tipomedicamento`
  ADD PRIMARY KEY (`idtipoMedicamento`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_perfil_idx` (`idperfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `idagendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `idchat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `localizacao`
--
ALTER TABLE `localizacao`
  MODIFY `idlocalizacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `idmedicamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idperfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipomedicamento`
--
ALTER TABLE `tipomedicamento`
  MODIFY `idtipoMedicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_agendamento_medicamentos1` FOREIGN KEY (`idmedicamentos`) REFERENCES `medicamentos` (`idmedicamentos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_agendamento_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `fk_chat_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD CONSTRAINT `fk_medicamentos_localizacao1` FOREIGN KEY (`idlocalizacao`) REFERENCES `localizacao` (`idlocalizacao`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_medicamentos_tipoMedicamento1` FOREIGN KEY (`idtipoMedicamento`) REFERENCES `tipomedicamento` (`idtipoMedicamento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

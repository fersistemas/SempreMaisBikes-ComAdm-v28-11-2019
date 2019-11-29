-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 29-Nov-2019 às 00:16
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_pecas`
--

CREATE TABLE `categoria_pecas` (
  `cod_categoria` int(11) UNSIGNED NOT NULL,
  `modelo` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `categoria_pecas`
--

INSERT INTO `categoria_pecas` (`cod_categoria`, `modelo`) VALUES
(1, 'Shimano'),
(2, 'Yamada'),
(3, 'Logan'),
(4, 'Comum'),
(5, 'Roletado'),
(6, 'Veloforce'),
(7, 'Absolute');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada_orcamento`
--

CREATE TABLE `entrada_orcamento` (
  `cod_historcamento` int(11) UNSIGNED NOT NULL,
  `cod_orcamento` int(11) NOT NULL,
  `data_orcamento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada_orcamento2`
--

CREATE TABLE `entrada_orcamento2` (
  `cod_entradaorcamento` int(11) UNSIGNED NOT NULL,
  `cod_historcamento` int(11) NOT NULL,
  `cod_orcamento` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `cod_orcamento` int(11) UNSIGNED NOT NULL,
  `cliente` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(14) COLLATE latin1_general_ci DEFAULT NULL,
  `celular` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `nome_pecas` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `qtd_pecas` int(5) NOT NULL,
  `preco_pecas` decimal(10,0) NOT NULL,
  `data_orcamento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`cod_orcamento`, `cliente`, `telefone`, `celular`, `nome_pecas`, `qtd_pecas`, `preco_pecas`, `data_orcamento`) VALUES
(1, 'Allef Martins', '(15)40028922', '(15)998654784', 'Manete de Freio', 1, '80', '2019-11-18'),
(2, 'Roberto Carlos', '(15)32235789', '(15)997324685', 'Manete de Freio', 1, '80', '2019-11-18'),
(3, 'Daniel Ribeiro', '(15)32298765', '(15)998652000', 'Pedivela Monobloco', 1, '45', '2019-11-18'),
(5, 'Murilo Macedo', '', '(15)997168546', 'Caxaria central', 1, '25', '2019-11-18'),
(6, 'Katia Ferrz', '', '(15)997478946', 'PinÃ§a de Freio mecÃ¢nico', 2, '110', '2019-11-19'),
(7, 'Allef Martins', '(15)40028922', '(15)998654784', 'Pedivela monobloco', 1, '45', '2019-11-19'),
(8, 'Allef Martins', '(15)40028922', '(15)998654784', 'Caxaria central', 1, '35', '2019-11-19'),
(9, 'Allef Martins', '(15)40028922', '(15)998654784', 'Pneu 26x2', 2, '150', '2019-11-19'),
(10, 'Allef Martins', '(15)40028922', '(15)998654784', 'Cubos em alumÃ­nio polido', 2, '100', '2019-11-19'),
(11, '1', '1', '11', '1', 11, '1', '2019-11-19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento_pecas`
--

CREATE TABLE `orcamento_pecas` (
  `cod_orcapecas` int(11) UNSIGNED NOT NULL,
  `cod_orcamento` int(11) NOT NULL,
  `cod_pecas` int(11) NOT NULL,
  `quantidade` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE `pecas` (
  `cod_pecas` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `cod_categoria` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `pecas`
--

INSERT INTO `pecas` (`cod_pecas`, `nome`, `preco`, `quantidade`, `cod_categoria`) VALUES
(1, 'Manete de freio', '60', 1, 1),
(2, 'Pedivela monobloco', '30', 3, 2),
(3, 'Caxaria central', '15', 10, 3),
(4, 'PinÃ§a de Freio mecÃ¢nico', '50', 4, 4),
(5, 'Pneu 26x1.95', '40', 10, 5),
(6, 'Pneu 26x2', '50', 15, 6),
(7, 'Pneu 29x2.00', '200', 5, 7),
(8, 'Sapata AlumÃ­nio', '15', 20, 8),
(9, 'Cubos em alumÃ­nio polido', '45', 10, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_orcamento`
--

CREATE TABLE `saida_orcamento` (
  `cod_saiorcamento` int(11) UNSIGNED NOT NULL,
  `cod_orcamento` int(11) NOT NULL,
  `data_orcamento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_orcamento2`
--

CREATE TABLE `saida_orcamento2` (
  `cod_saidaorcamento` int(11) UNSIGNED NOT NULL,
  `cod_saiorcamento` int(11) NOT NULL,
  `cod_orcamento` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) UNSIGNED NOT NULL,
  `usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `senha` varchar(15) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `usuario`, `senha`, `tipo`) VALUES
(1, '1', '1', '1'),
(2, 'eliel', 'senha', 'adm'),
(3, 'teste', '11', '11'),
(4, '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_pecas`
--
ALTER TABLE `categoria_pecas`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indexes for table `entrada_orcamento`
--
ALTER TABLE `entrada_orcamento`
  ADD PRIMARY KEY (`cod_historcamento`);

--
-- Indexes for table `entrada_orcamento2`
--
ALTER TABLE `entrada_orcamento2`
  ADD PRIMARY KEY (`cod_entradaorcamento`);

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`cod_orcamento`);

--
-- Indexes for table `orcamento_pecas`
--
ALTER TABLE `orcamento_pecas`
  ADD PRIMARY KEY (`cod_orcapecas`);

--
-- Indexes for table `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`cod_pecas`);

--
-- Indexes for table `saida_orcamento`
--
ALTER TABLE `saida_orcamento`
  ADD PRIMARY KEY (`cod_saiorcamento`);

--
-- Indexes for table `saida_orcamento2`
--
ALTER TABLE `saida_orcamento2`
  ADD PRIMARY KEY (`cod_saidaorcamento`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_pecas`
--
ALTER TABLE `categoria_pecas`
  MODIFY `cod_categoria` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `entrada_orcamento`
--
ALTER TABLE `entrada_orcamento`
  MODIFY `cod_historcamento` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `entrada_orcamento2`
--
ALTER TABLE `entrada_orcamento2`
  MODIFY `cod_entradaorcamento` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `cod_orcamento` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `orcamento_pecas`
--
ALTER TABLE `orcamento_pecas`
  MODIFY `cod_orcapecas` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pecas`
--
ALTER TABLE `pecas`
  MODIFY `cod_pecas` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `saida_orcamento`
--
ALTER TABLE `saida_orcamento`
  MODIFY `cod_saiorcamento` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `saida_orcamento2`
--
ALTER TABLE `saida_orcamento2`
  MODIFY `cod_saidaorcamento` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

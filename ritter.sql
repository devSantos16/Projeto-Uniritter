-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Out-2019 às 21:05
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ritter`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `periodo` varchar(25) NOT NULL,
  `nome_responsavel` varchar(50) NOT NULL,
  `cpf_responsavel` double NOT NULL,
  `cpf_aluno` double NOT NULL,
  `rg` int(15) NOT NULL,
  `semestre` int(11) NOT NULL,
  `comprovante` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`matricula`, `nome`, `curso`, `campus`, `periodo`, `nome_responsavel`, `cpf_responsavel`, `cpf_aluno`, `rg`, `semestre`, `comprovante`, `status`) VALUES
(201820000, 'Em Santos Henzel', 'Analise e Desenvolvimento  de Sistemas', 'Campus Fapa', 'Noturno', 'Caio Castro', 8485254082, 848485254082, 464664621, 1, 'Possui Comprovante', 'liquidado'),
(201820001, 'henrique antunes', 'ADS', 'FAPA', 'noturno', 'caio castro', 9494194182, 9494194182, 2147483647, 2, 'não possui', 'EM DÍVIDA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade`
--

CREATE TABLE `mensalidade` (
  `idMensalidade` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `vencimento` varchar(20) NOT NULL,
  `valor` double NOT NULL,
  `valor_pago` double NOT NULL,
  `data_pagamento` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `taxas`
--

CREATE TABLE `taxas` (
  `idTaxas` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `mensalidade`
--
ALTER TABLE `mensalidade`
  ADD PRIMARY KEY (`idMensalidade`);

--
-- Índices para tabela `taxas`
--
ALTER TABLE `taxas`
  ADD PRIMARY KEY (`idTaxas`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201820002;

--
-- AUTO_INCREMENT de tabela `mensalidade`
--
ALTER TABLE `mensalidade`
  MODIFY `idMensalidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `taxas`
--
ALTER TABLE `taxas`
  MODIFY `idTaxas` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

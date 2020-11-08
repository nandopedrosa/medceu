-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 08, 2020 at 05:25 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `medceu`
--

-- --------------------------------------------------------

--
-- Table structure for table `convenio`
--

CREATE TABLE `convenio` (
  `id_convenio` int(11) NOT NULL COMMENT 'chave primária',
  `sg_convenio` varchar(128) NOT NULL COMMENT 'sigla',
  `ds_convenio` varchar(4000) DEFAULT NULL COMMENT 'descrição'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela de planos de saude conveniados';

--
-- Dumping data for table `convenio`
--

INSERT INTO `convenio` (`id_convenio`, `sg_convenio`, `ds_convenio`) VALUES
(6, 'AMIL', ''),
(9, 'SAÚDEB', ''),
(10, 'BACEN', ''),
(11, 'BRB', ''),
(12, 'SAÚDEC', ''),
(14, 'CAESAN', ''),
(15, 'CAIXA', ''),
(16, 'CAMED', ''),
(18, 'PLUS', ''),
(19, 'CASEC (CODEVASF)', ''),
(20, 'CASEMBRAPA', ''),
(21, 'CASSI', ''),
(22, 'CNTI', ''),
(23, 'CONABE', ''),
(24, 'EMBRATEL', ''),
(25, 'ELETRONORTE', ''),
(26, 'FACEB', ''),
(27, 'FAPES', ''),
(28, 'FASCAL', ''),
(29, 'FUSEX', ''),
(30, 'G GAMA', ''),
(31, 'SAÚDE GRAVIA', ''),
(32, 'INFRAEROL', ''),
(33, 'LIFE', ''),
(34, 'EMPRESARIAL', ''),
(35, 'SAÚDEM', ''),
(36, 'MEDISERVICE', ''),
(37, 'PARTICULAR', ''),
(38, 'PETROBRÁS', ''),
(39, 'PLAN ASSISTE (MPDFT)', ''),
(40, 'PLAN ASSISTE (MPF)', ''),
(41, 'PLAN ASSISTE (MPM)', ''),
(42, 'PLAN ASSISTE (MPT)', ''),
(43, 'PLAS / JMU (STM)', ''),
(44, 'POSTAL SAÚDE', ''),
(45, 'PROASA', ''),
(46, 'PRÓ-SER (STJ)', ''),
(47, 'PRÓ- SOCIAL (TRF)', ''),
(48, 'REAL GRANDEZAS', ''),
(49, 'SERPRO', ''),
(50, 'STF-MEDT', ''),
(51, 'TJ-DF', ''),
(52, 'TRE', ''),
(53, 'TRT', ''),
(54, 'TST', ''),
(55, 'UNAFISCOV', ''),
(56, 'VALE SAÚDE ', ''),
(57, 'PANAMERICANO', ''),
(58, 'JEQUITI', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL COMMENT 'chave primária',
  `tx_email` varchar(256) NOT NULL COMMENT 'login (email)',
  `tx_senha` varchar(4000) NOT NULL COMMENT 'hash da senha',
  `ds_role` varchar(128) NOT NULL COMMENT 'role do usuário no sistema'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela de usuários do sistema';

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `tx_email`, `tx_senha`, `ds_role`) VALUES
(1, 'adm@medceu.com.br', '59c21c52ddea2015399cdec10d69ed02', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `convenio`
--
ALTER TABLE `convenio`
  ADD PRIMARY KEY (`id_convenio`),
  ADD UNIQUE KEY `uk_convenio_1` (`sg_convenio`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `uk_usuario_1` (`tx_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `convenio`
--
ALTER TABLE `convenio`
  MODIFY `id_convenio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'chave primária', AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'chave primária', AUTO_INCREMENT=2;

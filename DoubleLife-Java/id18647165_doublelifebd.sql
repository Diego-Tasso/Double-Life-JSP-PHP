-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 21-Out-2022 às 01:30
-- Versão do servidor: 10.5.16-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id18647165_doublelifebd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assinaturas`
--

CREATE TABLE `assinaturas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_plano` int(11) NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_exp` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `assinaturas`
--

INSERT INTO `assinaturas` (`id`, `id_usuario`, `id_plano`, `dt_inicio`, `dt_exp`, `status`) VALUES
(1, 1, 1, '0000-00-00', '0000-00-00', 'realizado'),
(2, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(3, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(4, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(5, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(6, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(7, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(8, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(9, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(10, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(11, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(12, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(13, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(14, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(15, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(16, 1, 1, '0000-00-00', '0000-00-00', 'pago'),
(17, 1, 1, '0000-00-00', '0000-00-00', 'pago');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(40) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `id_medico` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_laudo` int(11) DEFAULT 0,
  `color` varchar(30) NOT NULL DEFAULT 'azul',
  `status` varchar(30) NOT NULL DEFAULT 'agendada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`id`, `titulo`, `descricao`, `data`, `id_medico`, `id_usuario`, `id_laudo`, `color`, `status`) VALUES
(41, NULL, NULL, '2022-10-26 10:00:00', 56, 46, 26, 'azul', 'concluida'),
(42, NULL, NULL, '2022-10-27 14:40:00', 56, 46, 27, 'azul', 'concluida'),
(43, NULL, NULL, '2022-10-18 09:20:00', 56, 46, 0, 'azul', 'concluida'),
(46, NULL, NULL, '2022-11-01 09:20:00', 56, 46, 0, 'azul', 'agendada'),
(47, NULL, NULL, '2022-10-28 09:20:00', 45, 46, 0, 'azul', 'agendada'),
(48, NULL, NULL, '2022-10-19 10:00:00', 52, 46, 0, 'azul', 'agendada'),
(49, NULL, NULL, '2022-10-19 08:00:00', 56, 46, 0, 'azul', 'agendada'),
(50, NULL, NULL, '2022-10-20 09:20:00', 53, 46, 0, 'azul', 'agendada'),
(51, NULL, NULL, '2022-10-28 09:20:00', 53, 46, 0, 'azul', 'agendada'),
(52, NULL, NULL, '2022-10-20 09:20:00', 53, 46, 0, 'azul', 'agendada'),
(53, NULL, NULL, '2022-10-20 09:20:00', 53, 46, 0, 'azul', 'agendada'),
(54, NULL, NULL, '2022-10-20 10:40:00', 52, 46, 0, 'azul', 'agendada'),
(55, NULL, NULL, '2022-10-20 22:00:00', 56, 46, 0, 'azul', 'agendada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(8, 'Felipe Martins Medeiros', 'xxx@xxx.comaaaaaa', 'blablablaxxxx', 'ihgjgyghghjgfghyj aaaaaaaaaaaaaaaaaaa'),
(23, 'admin', 'aaaaaaaaa@aaaaaa', 'aaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa'),
(24, 'admin', 'aaaaaa@aaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaa'),
(31, 'a', 'diegotassoneto@hotmail.com', 'sei lá ', 'sssssssss'),
(33, 'pedrow', 'pedro@gmail.com', 'bla', 'cu de curioso\r\n'),
(34, 'fff', 'fff@gmail.com', ' cu de curioso', 'bah\r\n'),
(35, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacoes`
--

CREATE TABLE `doacoes` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` decimal(10,0) NOT NULL,
  `dataEmissao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `title` varchar(40) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `color` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`title`, `description`, `start`, `end`, `color`, `usuario_id`) VALUES
('Evento', 'Evento marcado por Felipe', '2022-09-08', '2022-09-08', 'blue', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `laudos`
--

CREATE TABLE `laudos` (
  `id` int(11) NOT NULL,
  `titulo` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime DEFAULT NULL,
  `id_consulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `laudos`
--

INSERT INTO `laudos` (`id`, `titulo`, `texto`, `data`, `id_consulta`) VALUES
(1, 'dasdasdza', 'dsadsdasdwdsadw', '2022-10-19 08:36:38', 39),
(2, 'jgjhyghjbn', 'jgjhvbnvhtgh', '2022-10-19 08:37:01', 39),
(3, 'adsdsadzd', 'dsasdsdasdw', '2022-10-19 08:40:39', 39),
(4, 'adsdsadzd', 'dsasdsdasdw', '2022-10-19 08:41:38', 39),
(5, 'adsdsadzd', 'dsasdsdasdw', '2022-10-19 08:49:00', 56),
(6, 'dasdszdd', 'sdadsaddsadw', '2022-10-19 08:49:00', 56),
(7, 'aaa', 'aaaa', '2022-10-19 08:56:00', 56),
(8, 'dsadzadsad', 'sdazdsadaw', '2022-10-19 08:59:00', 39),
(9, 'ddadsdadaddsda', 'dzadzazadadw', '2022-10-19 09:09:00', 39),
(10, 'ddadsdadaddsda', 'dzadzazadadw', '2022-10-19 09:13:00', 39),
(11, 'AAAA', 'AAA', '2022-10-19 09:23:00', 40),
(12, 'sczzjcajda', 'dasjxzkldjawdw', '2022-10-19 13:01:00', 40),
(13, 'skcixakdaijdjsds', 'ckcxjhjadjsdka', '2022-10-19 13:15:00', 39),
(14, 'ajdakxzjaokdwa', 'adsxasdmaslkdmzxa,ldcmlkalwspdkowa', '2022-10-19 17:27:00', 39),
(15, 'ajdakxzjaokdwa', 'gfdxgxdfxfed', '2022-10-19 17:58:00', 39),
(16, 'ajdakxzjaokdwa', 'gfdxgxdfxfed', '2022-10-19 17:59:00', 39),
(17, 'ajdakxzjaokdwa', 'gdrgdfgdfgdr', '2022-10-19 17:59:00', 40),
(18, 'ajdakxzjaokdwa', 'dadsadazxadw', '2022-10-19 18:25:00', 39),
(19, 'ajdakxzjaokdwa', 'jyyguiyhbjkmnbu', '2022-10-19 19:02:00', 39),
(20, 'ajdakxzjaokdwa', 'jyyguiyhbjkmnbu', '2022-10-19 19:16:00', 39),
(21, 'ajdakxzjaokdwa', 'dadsad', '2022-10-19 19:18:00', 40),
(22, 'ajdakxzjaokdwa', 'dadsad', '2022-10-19 19:18:00', 40),
(23, 'ajdakxzjaokdwa', 'dadsad', '2022-10-19 19:20:00', 40),
(24, 'ajdakxzjaokdwa', 'khkjiij', '2022-10-19 19:23:00', 40),
(25, 'ajdakxzjaokdwa', 'sadsdcaxzdasw', '2022-10-19 19:32:00', 39),
(26, 'Titulo', 'dsjkhahndajs,ncuieawdw', '2022-10-19 19:39:00', 41),
(27, 'ksdhjlazxjcoiaskodaw', 'ndhaksljdcsoiadjoaw', '2022-10-19 19:41:00', 42);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `ID_pagamento` int(11) NOT NULL,
  `ID_cliente` int(11) NOT NULL,
  `ID_plano` int(11) DEFAULT NULL,
  `Valor` double NOT NULL,
  `Status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`ID_pagamento`, `ID_cliente`, `ID_plano`, `Valor`, `Status`) VALUES
(1, 1, NULL, 2000, NULL),
(2, 1, NULL, 2000, 'realizado'),
(3, 1, 3, 3000, 'realizado'),
(4, 1, 2, 2000, 'realizado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano`
--

CREATE TABLE `plano` (
  `ID_plano` int(11) NOT NULL,
  `Nome_plano` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `plano`
--

INSERT INTO `plano` (`ID_plano`, `Nome_plano`, `Preco`) VALUES
(1, 'Mensal', 10),
(2, 'Semestral', 20),
(3, 'Anual', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `senha` text COLLATE utf8_unicode_ci NOT NULL,
  `cpf` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `especialidade` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_entrada` date DEFAULT NULL,
  `faculdade` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `consulta` int(2) DEFAULT NULL,
  `tipo` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'c',
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'bloqueado'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cpf`, `cep`, `telefone`, `endereco`, `data_nascimento`, `especialidade`, `data_entrada`, `faculdade`, `consulta`, `tipo`, `status`) VALUES
(6, 'Felipe', 'fff@fff', '546', '1231231321', '32132131', '2131322', 'eadsadawfsadaw', NULL, NULL, NULL, NULL, NULL, 'a', 'ativo'),
(9, 'Diego 2', 'diego@life', '546', '111111111', '111111111', '111111111', '111111111', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(11, 'Ana', 'aaa@aaa', '546', '2342412', '1324324', '143242341', '1432412', NULL, NULL, NULL, NULL, NULL, 'a', 'ativo'),
(12, 'sefgsef', 'qwdqwd@wdwd', '546', '12313', '234234', '2342', '23423423', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(13, 'guguyhhj', 'ahdwhawhd@wdqw', '546', '32423', '43234', '2342', '4234', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(15, 'ddgdf', 'adad@fdf', '546', '1121313', '1213131', '1112131', '1221313', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(17, 'ergerg', 'uhoho@oih', '546', '8979', '8979', '8798', '987', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(18, 'Felipe', 'sss@sss', '546', '21321421', '31242', '1324141', 'wada231', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(21, 'Daniel', 'daf@dadw', '546', '12314321', '312421', '3124214', 'dawdawd1', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(46, 'Felipe', 'gamesf130@gmail.com', '$2y$10$l.tw0zk/ayzN9WnTeN3ih.V307enpqxTtESbzI9CPzbFDCioj5Ooi', '177.228.277-48', '20770240', '985478616', 'dasdawds', '2000-02-23', NULL, NULL, NULL, NULL, 'c', 'ativo'),
(25, 'teste', 'felipemedeirosinfo@gmail.com', '$2y$10$plXlKzu9Sp/qrA8XRs57re3t.8z4sBsVyejq6F683IODRKNzRcK0a', '12312321', '31421421', '313214213', 'dawdsafaf', NULL, NULL, NULL, NULL, NULL, 'a', 'ativo'),
(26, 'PedroW', 'pedrow@gmail.com', '$2y$10$S0QzLP9sFXaZxlB15lCPH.1aYljdMBloVkdIDCkCTjq5KBgbGRazu', '12333', '1233312333', '12333', '12333', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(27, 'dede', 'dede@gmail.com', '$2y$10$7FUgp6vTahMuEG7lZXCkq.FfxynAWgEaGdBLlu2/5x769264O5TFe', '3213124', '12321414', '31321412', 'dadasdaw', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(31, 'GPL', 'gpl@gmail.com', '$2y$10$XXSIPBjPPHeSqVbsMvU4nuritGTi1LL/2uIpYfKAWbGkt0kC1R5xq', '111111', '111111', '111111', '111111', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(32, 'Isabel', 'isabelms20005@gmail.com', '$2y$10$rtSqJJdU8acVfA97PMVY4.lcvAaupbXejtawfAzW8pg1soLmSxm5W', '2748309', '2748309', '2748309', '2748309', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(57, 'Jorge', 'vas@gmail.com', '$2y$10$AwY0xePwUcd9EJhmWm60GuVr.BAL1DpbLeZbwnfu/UHmLiROPHwt.', '123.456.789-01', '23456788', '21345674234', 'hgkdy,kuk', '2222-01-12', NULL, NULL, NULL, NULL, 'c', 'ativo'),
(40, 'Diego ', 'diego@gmail.com', '$2y$10$W47/EUjc0q5WpdtYpSryVufzkILWm8xaLpAxKkC9wTrJXhTaGlCbO', '254.321.111-21', '32121-333', '99504-1885', 'Rua gomez', NULL, NULL, NULL, NULL, NULL, 'c', 'ativo'),
(41, 'Diego ✤', 'diego@hotmail.com', '$2y$10$IfydgyWZuXN0xc7ycL4soeWSNNwoZrQQczLU2L4F7IeL7kffiniTm', '254.321.111-21', '32121-333', '99504-1885', 'Rua gomez', NULL, NULL, NULL, NULL, NULL, 'a', 'ativo'),
(45, 'Joao', 'jjj@jjj', '123', NULL, NULL, NULL, NULL, NULL, 'pediatria', '1999-02-21', 'UERJ', 22, 'm', 'ativo'),
(47, 'Diego', 'dtf@gmail.com', '$2y$10$OL7Y.O2MycWvwDwDyMUGPu6dPjGKAQrmFRQOv3qwKarQR.ugQ9J5G', '122.002.333-43', '18381398', '212121212', 'Rua gomez AA', '2005-03-04', NULL, NULL, NULL, NULL, 'a', 'ativo'),
(48, 'abuble', 'abuble@abuble.com', '$2y$10$ryvyNEE5EzF7PK8yHuc7A.mANvziLDzZXK8.R5Demkpc31w9SPAve', '123.456.789-01', '11111-111', '21980904165', 'Puta que pariu', '2022-10-19', NULL, NULL, NULL, NULL, 'c', 'ativo'),
(49, '111', 'abuble@gmail.com', '$2y$10$URSw0brhxROmy741KoT2T.fPeQQwi0X0g.CJRWddemFzPJDFw.sbu', '123.456.789-01', '11111111', '11111111', 'Puta que pariu', '2022-10-19', NULL, NULL, NULL, NULL, 'c', 'ativo'),
(50, 'Luan', 'aksjdaskjd@fkasjkdas.com', '$2y$10$jQZ.CzpNoTyovkEFe0beTOrTxgsEN3GPxdcyZK8xpJGj6/zUpI1QK', '143.934.947-92', '21381-110', '21966628528', 'rua artur vargass', '2004-11-22', NULL, NULL, NULL, NULL, 'c', 'ativo'),
(51, 'fff', 'fff@gmail.com', '$2y$10$HSAuYz1OgoFPpYq/NK4Q0euQ3z94udZYej5JscDDDXpUUKXYGTHQ.', '123.456.789-01', '11111111', '21980904165', 'rwrwr', '2022-10-19', NULL, NULL, NULL, NULL, 'c', 'ativo'),
(52, 'Junin', 'junior@gmail.com', '1234567', NULL, NULL, NULL, NULL, NULL, 'Cardiologia', '3142-02-12', 'UERJ', 0, 'm', 'ativo'),
(53, 'Junior', '$2y$10$GRjDsc0MzpczpzkeL7tQieLOjX8jxqG1N8m234AN8drAdnyKyeQN6', '1234567', NULL, NULL, NULL, NULL, NULL, 'Cardiologia', '2021-12-30', 'UERJ', 0, 'm', 'ativo'),
(54, 'Junior', 'junin@gmail.com', '$2y$10$Pj69SPA6pwHEkkrcQC2Y8el/.eDZ9odKYnWxIDo5IzZqCYHsvZffS', NULL, NULL, NULL, NULL, NULL, 'Cardiologia', '2021-12-30', 'UERJ', 0, 'm', 'ativo'),
(55, 'Gabriel', 'gabrielgpltavares@gmail.com', '$2y$10$49dPRzdt41fmpzZMMwEJsOOZMbdpxW7FgGg4t/poDfGDb4PscGki2', '123.456.789-01', '12345678', '980904165', 'cu da mãe', '2004-12-30', NULL, NULL, NULL, NULL, 'c', 'ativo'),
(56, 'Pedrin', 'jas@gmail.com', '$2y$10$0vQWLgT9d7bpHli/nDxFYekh.xOmIEMxWMbpEh1sKiFzhcoRdfz2i', NULL, NULL, NULL, NULL, NULL, 'Cardiologia', '1986-12-12', 'UFRJ', 0, 'm', 'ativo'),
(58, 'Ana', 'anaeduardamartins04@gmail.com', '$2y$10$orv/H3keZKH1VmHv6ImZEu6ziCu0i4iHYBdu0GfKB/khc4Jxrv06.', '111.111.111-11', '22222-222', '13321321', 'sdadjawjdiasidw', '2000-09-20', NULL, NULL, NULL, NULL, 'c', 'ativo'),
(59, 'Delipe', '215331.aluno@iserj.edu.br', '$2y$10$ZWNML1PAkQPyZRm7AWA9w.qPWhG0R1jsQg18syOZIRCVME5JpZ4Gm', '111.111.111-11', '20770-240', '99884399', 'emfaidwa', '2000-08-20', NULL, NULL, NULL, NULL, 'c', 'ativo'),
(70, 'Oriyon', 'oriyon16@gmail.com', '$2y$10$RZskzXiujjHHR1TVVMGm2uHucmT7547QsA3353Efy.ttb94sy93wi', '111.111.111-11', '20770-240', '99884399', 'emfaidwa', '2000-09-23', NULL, NULL, NULL, NULL, 'c', 'ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Índices para tabela `laudos`
--
ALTER TABLE `laudos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`ID_pagamento`);

--
-- Índices para tabela `plano`
--
ALTER TABLE `plano`
  ADD PRIMARY KEY (`ID_plano`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `laudos`
--
ALTER TABLE `laudos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `ID_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `plano`
--
ALTER TABLE `plano`
  MODIFY `ID_plano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

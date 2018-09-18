-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Set-2018 às 05:24
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chamados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamadosset`
--

CREATE TABLE `chamadosset` (
  `NumeroChamado` int(11) NOT NULL,
  `DataAbertura` datetime DEFAULT NULL,
  `NomeUsuario` varchar(50) NOT NULL,
  `Mensagem` varchar(1000) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Ramal` int(11) DEFAULT NULL,
  `Tipo` varchar(15) DEFAULT NULL,
  `Setor` varchar(25) DEFAULT NULL,
  `Urgencia` varchar(50) NOT NULL,
  `Andamento` varchar(500) NOT NULL,
  `Solucao` varchar(1000) NOT NULL,
  `Status` varchar(25) NOT NULL DEFAULT 'Aberto',
  `UltimaModificacao` datetime DEFAULT NULL,
  `DataAndamento` datetime DEFAULT NULL,
  `DataFechamento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chamadosset`
--

INSERT INTO `chamadosset` (`NumeroChamado`, `DataAbertura`, `NomeUsuario`, `Mensagem`, `Email`, `Ramal`, `Tipo`, `Setor`, `Urgencia`, `Andamento`, `Solucao`, `Status`, `UltimaModificacao`, `DataAndamento`, `DataFechamento`) VALUES
(10, '2018-09-10 12:17:44', 'Anderson Messias', 'Lentidão no PC', 'andersonmessias_07@hotmail.com', 218, 'Problema', 'Administrativo', 'Atrapalha o fluxo de trabalho', '', 'Foi realizada uma verificação completa utilizando mídia de instalação microsoft.\r\n\r\nFoi também reduzidos os recursos visuais para melhorar o processamento.', 'Fechado', '2018-09-10 17:26:59', NULL, '2018-09-10 17:26:59'),
(12, '2018-09-10 13:37:46', 'Suelen', 'Reinstalação do CorelDraw', 'comercial@setjeans.com.br', 0, 'Dúvida', '', '', 'hu3hu3hu3', 'gy3gy3gy3', 'Em andamento', '2018-09-17 23:45:55', '2018-09-17 23:45:55', '2018-09-17 23:44:51'),
(13, '2018-09-10 13:40:23', 'TI', 'Google LLC é uma empresa multinacional de serviços online e software dos Estados Unidos. O Google hospeda e desenvolve uma série de serviços e produtos baseados na internet e gera lucro principalmente através da publicidade pelo AdWords. Wikipédia\r\nFundação: 4 de setembro de 1998, Menlo Park, Califórnia, EUA\r\nSede: Mountain View, Califórnia, EUA\r\nCEO: Sundar Pichai (2 de out de 2015–)\r\nSubsidiárias: YouTube, Speaktoit, Inc., AdMob, Google Japan, MAIS\r\nFundadores: Larry Page, Sergey Brin\r\nOrganização mãe: Alphabet Inc.\r\nItens também pesquisados', 'ti@setjeans.com.br', 218, 'Problema', 'Administrativo', 'Interrompe o fluxo de trabalho exporadic', '', '', 'Aberto', NULL, NULL, NULL),
(14, '2018-09-10 14:32:10', 'Teste', 'Testeeeeeeee', 'Teste@teste.com.br', 111, 'Problema', 'Administrativo', 'Pode aguardar', 'a', 'b', 'Em andamento', '2018-09-17 23:50:24', '2018-09-17 23:50:24', NULL),
(15, '2018-09-11 10:36:10', 'Anderson', 'Teste de data', 'And@1234.com.br', 218, 'Problema', 'Administrativo', 'Pode aguardar', '', '', 'Aberto', NULL, NULL, NULL),
(16, '2018-09-18 00:16:17', 'disuhfjskd', 'adasfasfdfsdafsadfsadfa', 'ujhdcsakdh', 0, 'Problema', 'Administrativo', 'Interrompe totalmente o fluxo de trabalho', '', '', 'Aberto', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `login`, `senha`) VALUES
(0000000003, 'anderson', 'and7295'),
(0000000001, 'a', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chamadosset`
--
ALTER TABLE `chamadosset`
  ADD PRIMARY KEY (`NumeroChamado`),
  ADD UNIQUE KEY `NumeroChamado` (`NumeroChamado`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chamadosset`
--
ALTER TABLE `chamadosset`
  MODIFY `NumeroChamado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

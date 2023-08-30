-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Ago-2023 às 03:09
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbloja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblprodutos`
--

CREATE TABLE `tblprodutos` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(150) NOT NULL,
  `precoProduto` double NOT NULL,
  `marcaProduto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblprodutos`
--

INSERT INTO `tblprodutos` (`idProduto`, `nomeProduto`, `precoProduto`, `marcaProduto`) VALUES
(1, 'Teste', 100, 'Teste'),
(2, 'Teste 2', 102, 'Teste');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tblprodutos`
--
ALTER TABLE `tblprodutos`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblprodutos`
--
ALTER TABLE `tblprodutos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

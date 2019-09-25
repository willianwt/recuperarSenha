-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Set-2019 às 16:35
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `recuperasenha`
--

CREATE TABLE `recuperasenha` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `chave` varchar(300) NOT NULL,
  `valido` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `recuperasenha`
--

INSERT INTO `recuperasenha` (`id`, `email`, `chave`, `valido`) VALUES
(5, 'willianwt@gmail.com', 'c905bb01077dcb52b1f9f44054b1927a', 1),
(6, 'willianwt@gmail.com', 'b4c7d6767625c102b89c237535d80d07', 1),
(7, 'willianwt@gmail.com', 'f371a581fcab6b673ba952091967aba5', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nivel` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `email`, `nivel`) VALUES
(1, 'admin', 'caf1a3dfb505ffed0d024130f58c5cfa', 'admin@gmail.com', '1'),
(2, 'usuario', '202cb962ac59075b964b07152d234b70', 'usuario@gmail.com', '2'),
(3, 'willian', '202cb962ac59075b964b07152d234b70', 'willianwt@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recuperasenha`
--
ALTER TABLE `recuperasenha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recuperasenha`
--
ALTER TABLE `recuperasenha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

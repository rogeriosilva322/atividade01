-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Out-2016 às 04:26
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atividade01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetos`
--

CREATE TABLE `objetos` (
  `id` tinyint(3) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `local` varchar(80) NOT NULL,
  `file` varchar(120) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `objetos`
--

INSERT INTO `objetos` (`id`, `titulo`, `nome`, `email`, `local`, `file`, `descricao`, `status`) VALUES
(1, 'Pen drive', 'Rogerio Lucio da Silva', 'rogerioluciodasilva@hotmail.com', 'Avenida Guarulhos', 'pendrive.jpg', 'Pendrive preto com uma parte de metal', 0),
(2, 'Guarda-chuva', 'Rogerio Lucio da Silva', 'rogerioluciodasilva@hotmail.com', 'Av salgado Filho', 'guarda_chuva.png', 'Todo preto e grande', 0),
(3, 'Mundial do Palmeiras', 'Rogerio Lucio da Silva', 'rogerioluciodasilva@hotmail.com', 'Itaquera', 'mundial_palmeiras.jpg', 'Palmeiras não tem mundial', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` tinyint(3) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `cpf`, `email`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '111.111.111-11', 'admin@teste.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `objetos`
--
ALTER TABLE `objetos`
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
-- AUTO_INCREMENT for table `objetos`
--
ALTER TABLE `objetos`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

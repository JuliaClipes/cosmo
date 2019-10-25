-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2019 às 23:49
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cosmo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_admin_banco` int(11) NOT NULL,
  `nome_admin_banco` varchar(70) NOT NULL,
  `senha_admin_banco` varchar(100) NOT NULL,
  `email_admin_banco` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artesanato`
--

CREATE TABLE `artesanato` (
  `id_artesanato_banco` int(11) NOT NULL,
  `titulo_artesanato_banco` varchar(100) NOT NULL,
  `texto_artesanato_banco` text NOT NULL,
  `img_artesanato_banco` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `id_materia_banco` int(11) NOT NULL,
  `titulo_materia_banco` varchar(100) NOT NULL,
  `texto_materia_banco` text NOT NULL,
  `img_materia_banco` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario_banco` int(11) NOT NULL,
  `nome_usuario_banco` varchar(90) NOT NULL,
  `senha_usuario_banco` varchar(120) NOT NULL,
  `email_usuario_banco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario_banco`, `nome_usuario_banco`, `senha_usuario_banco`, `email_usuario_banco`) VALUES
(1, 'qweeqwe', 'qweqweqwe', 'qweqweqwe'),
(2, 'Lucelia', '12345', 'luh.vieiraa@gmail.com'),
(3, 'Lucelia', '123456', 'luh.vieiraa@gmail.com'),
(4, 'Lucelia', '123456', 'luh.vieiraa@gmail.com'),
(5, 'Jorge', '321654', 'jorge_lindao@gmail.com'),
(6, 'Jorge', '321654', 'jorge_lindao@gmail.com'),
(7, 'JoÃ£o', '54789', 'joao_lindo@gmail.com'),
(8, 'JoÃ£o', '54789', 'joao_lindo@gmail.com'),
(9, 'Maria', '1234656', 'maria_bonita@gmail.com'),
(10, 'Maria', '1234656', 'maria_bonita@gmail.com'),
(11, 'LampiÃ£o', '123456', 'lampiao_lindo@gmail.com'),
(12, 'LampiÃ£o', '123456', 'lampiao_lindo@gmail.com'),
(13, 'Vinicius', '123456987', 'vinicius_lindao@gmail.com'),
(14, 'Vinicius', '123456987', 'vinicius_lindao@gmail.com'),
(15, 'Gabriela', '123456789', 'gabriela_linda@gmail.com'),
(16, 'neida', '321654', 'neida_lindinha@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin_banco`);

--
-- Índices para tabela `artesanato`
--
ALTER TABLE `artesanato`
  ADD PRIMARY KEY (`id_artesanato_banco`);

--
-- Índices para tabela `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia_banco`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario_banco`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin_banco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `artesanato`
--
ALTER TABLE `artesanato`
  MODIFY `id_artesanato_banco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia_banco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Nov-2019 às 03:03
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

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

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_admin_banco`, `nome_admin_banco`, `senha_admin_banco`, `email_admin_banco`) VALUES
(1, 'Julia', '827ccb0eea8a706c4c34a16891f84e7b', 'eu@julia.com');

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

--
-- Extraindo dados da tabela `artesanato`
--

INSERT INTO `artesanato` (`id_artesanato_banco`, `titulo_artesanato_banco`, `texto_artesanato_banco`, `img_artesanato_banco`) VALUES
(4, 'Primeiro Artesanato', 'Texto legal', 'Artist’s_impression_of_the_deep_blue_planet_HD_189733b.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `id_materia_banco` int(11) NOT NULL,
  `titulo_materia_banco` varchar(1000) NOT NULL,
  `texto_materia_banco` mediumtext NOT NULL,
  `img_materia_banco` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id_materia_banco`, `titulo_materia_banco`, `texto_materia_banco`, `img_materia_banco`) VALUES
(14, 'Primeira matéria', 'Texto legal', 'Artist’s_impression_of_the_deep_blue_planet_HD_189733b.jpg');

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
(18, 'Julia', '827ccb0eea8a706c4c34a16891f84e7b', 'julia@usuaria.com'),
(19, 'Teste', '827ccb0eea8a706c4c34a16891f84e7b', 'teste@gmail.com');

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
  MODIFY `id_admin_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `artesanato`
--
ALTER TABLE `artesanato`
  MODIFY `id_artesanato_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

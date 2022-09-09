-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Set-2022 às 13:45
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tecinternet_livrosolto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `capa` varchar(500) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `id_usuario_entrega` int(11) NOT NULL,
  `id_usuario_recebe` int(11) DEFAULT NULL,
  `diasEntrega` enum('segunda','terca','quarta','quinta','sexta') NOT NULL,
  `horariosEntrega` enum('manha','tarde','noite') NOT NULL,
  `autor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `livros` varchar(45) DEFAULT NULL,
  `senac` varchar(45) NOT NULL,
  `tipo` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `email`, `livros`, `senac`, `tipo`) VALUES
(24, '123', '$2y$10$SieJtbrKEi4JXYMGB7q8vOqmR4.nOqMhHnHSsafNIi0eP9uAJ.W6i', '123@123.com', NULL, 'Osasco', 'admin'),
(25, 'Segurança', '$2y$10$e8HWyJUQ/oocW2kMnxMeb.1HqYzxrEoV389IMZwFJGUady3aaJFP6', 'seguranca@seguranca', NULL, 'Osasco', 'admin'),
(26, 'lunagabri', '$2y$10$BFa12O9VhIR0G2uK9OxWH.bg93zNLX648nPgM3tdHHytkbDTo/HdC', 'lunagabri@gmail.com', NULL, 'Nações Unidas', 'admin'),
(27, 'teste', '$2y$10$E6PSQctWK8wt620c1bpl1.kaFMcLj5BZmNTJnaVsfutDZecMt6Yyi', 'teste@teste.com', NULL, 'Lapa - Tito', 'admin'),
(28, 'Veronica', '$2y$10$dv7cFCtTca/xeVoUo9tPAO67NUl4FZNjcAauOwM.cHRwVv9LId4XO', 'veronica@veronica.com', NULL, 'Penha', NULL),
(29, 'teste1', '$2y$10$CCWpujrwiZp3ZNQ9bGMS0O1eouJrue7XCMHvNafCoBPzHDsgrtC8W', 'teste1@teste1.com', NULL, 'Jardim Primavera', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_livros_usuarios_entrega` (`id_usuario_entrega`),
  ADD KEY `fk_livros_usuarios_recebe` (`id_usuario_recebe`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `fk_livros_usuarios_entrega` FOREIGN KEY (`id_usuario_entrega`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `fk_livros_usuarios_recebe` FOREIGN KEY (`id_usuario_recebe`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

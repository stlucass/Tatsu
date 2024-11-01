-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/11/2024 às 04:24
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tatsu`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `usuario_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `usuario_id`, `item_id`, `quantidade`, `usuario_email`) VALUES
(7, 6, 2, 5, NULL),
(8, 6, 1, 2, NULL),
(9, 0, 5, 2, NULL),
(10, 0, 4, 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `delivery`
--

CREATE TABLE `delivery` (
  `ID_RESERVA` int(6) UNSIGNED NOT NULL,
  `NOME_CLIENTE` varchar(100) NOT NULL,
  `EMAIL_CLIENTE` varchar(100) NOT NULL,
  `QUANTIDADE_PESSOAS` int(11) NOT NULL,
  `DIA_RESERVA` date NOT NULL,
  `HORA_RESERVA` time NOT NULL,
  `AREA_RESTAURANTE` varchar(100) NOT NULL,
  `TIPO_RESERVA` varchar(100) NOT NULL,
  `OBSERVACOES` varchar(255) NOT NULL,
  `ID_USUARIO` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `casa` varchar(10) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `item`
--

INSERT INTO `item` (`id`, `nome`, `preco`, `imagem`) VALUES
(1, 'Sushi de Salmão', 35.00, 'assets/images/prato_1.jpg'),
(2, 'Rámen', 45.00, 'assets/images/prato_2.jpg'),
(3, 'Tempurá', 40.00, 'assets/images/prato_3.jpg'),
(4, 'Cheesecake', 22.00, 'assets/images/doce_4.jpg'),
(5, 'Mochi', 18.00, 'assets/images/doce_3.jpg'),
(6, 'Dorayaki', 15.00, 'assets/images/doce_2.jpg'),
(7, 'Taiyaki', 20.00, 'assets/images/doce_1.jpg'),
(8, 'Yakisoba', 30.00, 'assets/images/prato_4.jpg'),
(9, 'Ceviche', 40.00, 'assets/images/prato_5.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `itens_pedido`
--

CREATE TABLE `itens_pedido` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `itens_pedido`
--

INSERT INTO `itens_pedido` (`id`, `pedido_id`, `item_id`, `quantidade`, `preco`) VALUES
(9, 3, 1, 1, 35.00),
(10, 3, 3, 2, 40.00),
(11, 4, 1, 1, 35.00),
(12, 4, 8, 3, 30.00),
(13, 4, 4, 4, 22.00),
(14, 5, 1, 3, 35.00),
(15, 5, 7, 4, 20.00),
(16, 6, 1, 2, 35.00),
(17, 6, 3, 1, 40.00),
(18, 7, 2, 1, 45.00),
(19, 7, 7, 3, 20.00),
(20, 7, 8, 2, 30.00),
(21, 8, 1, 1, 35.00),
(22, 9, 1, 1, 35.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `data_pedido` datetime DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT 'Pendente',
  `status_pagamento` enum('Pago','Pago na Entrega') NOT NULL,
  `data` datetime DEFAULT current_timestamp(),
  `endereco_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario_id`, `total`, `data_pedido`, `status`, `status_pagamento`, `data`, `endereco_id`) VALUES
(1, 1, 124.00, '2024-10-28 22:34:18', 'Enviado', 'Pago', '2024-10-30 17:49:12', NULL),
(2, 1, 44.00, '2024-10-28 22:36:56', 'Cancelado', 'Pago', '2024-10-30 17:49:12', NULL),
(3, 1, 115.00, '2024-10-28 22:46:44', 'Enviado', 'Pago', '2024-10-30 17:49:12', NULL),
(4, 1, 213.00, '2024-10-28 22:47:19', 'Cancelado', 'Pago', '2024-10-30 17:49:12', NULL),
(5, 1, 185.00, '2024-10-28 23:22:47', 'Enviado', 'Pago', '2024-10-30 17:49:12', NULL),
(6, 1, 110.00, '2024-10-28 23:26:52', 'Pendente', 'Pago', '2024-10-30 17:49:12', NULL),
(7, 1, 165.00, '2024-10-28 23:34:43', 'Cancelado', 'Pago', '2024-10-30 17:49:12', NULL),
(8, 1, 35.00, '2024-10-30 17:42:24', 'Pendente', 'Pago', '2024-10-30 17:49:12', NULL),
(9, 1, 35.00, '2024-11-01 00:11:20', 'Pendente', 'Pago', '2024-11-01 00:11:20', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

CREATE TABLE `reserva` (
  `ID_RESERVA` int(6) UNSIGNED NOT NULL,
  `NOME_CLIENTE` varchar(100) NOT NULL,
  `EMAIL_CLIENTE` varchar(100) NOT NULL,
  `QUANTIDADE_PESSOAS` int(11) NOT NULL,
  `DIA_RESERVA` date NOT NULL,
  `HORA_RESERVA` time NOT NULL,
  `AREA_RESTAURANTE` varchar(100) NOT NULL,
  `TIPO_RESERVA` varchar(100) NOT NULL,
  `OBSERVACOES` varchar(255) NOT NULL,
  `ID_USUARIO` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `reserva`
--

INSERT INTO `reserva` (`ID_RESERVA`, `NOME_CLIENTE`, `EMAIL_CLIENTE`, `QUANTIDADE_PESSOAS`, `DIA_RESERVA`, `HORA_RESERVA`, `AREA_RESTAURANTE`, `TIPO_RESERVA`, `OBSERVACOES`, `ID_USUARIO`) VALUES
(1, 'Breno', 'deoliveirarochabreno2@gmail.com', 0, '2024-10-08', '12:21:00', 'Interna', 'Normal', '', NULL),
(2, 'Maíssa', 'deoliveirarochabreno2@gmail.com', 3, '2024-10-15', '14:19:00', 'Interna', 'Especial', 'mnnkijol', NULL),
(3, 'Maíssa', 'deoliveirarochabreno2@gmail.com', 2, '2024-10-11', '16:24:00', 'Externa', 'Normal', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `status_pedido`
--

CREATE TABLE `status_pedido` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(6) UNSIGNED NOT NULL,
  `NOME_USUARIO` varchar(100) NOT NULL,
  `EMAIL_USUARIO` varchar(100) NOT NULL,
  `SENHA_USUARIO` varchar(255) NOT NULL,
  `DATA_NASC` date NOT NULL,
  `GENERO` varchar(100) NOT NULL,
  `ENDERECO` varchar(100) NOT NULL,
  `ESTADO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `NOME_USUARIO`, `EMAIL_USUARIO`, `SENHA_USUARIO`, `DATA_NASC`, `GENERO`, `ENDERECO`, `ESTADO`) VALUES
(1, 'BRENO DE OLIVEIRA ROCHA DE PAULA', 'deoliveirarochabreno2@gmail.com', '$2y$10$iP.7Ovyel.pyWX4U9XB6tOKBTGJ5XdxO//D6JYHLbZbwCRBdqOeru', '2024-10-02', 'Masculino', 'Rua José Cândido Capele,47-caçapava', 'SP'),
(2, 'BRENO DE OLIVEIRA ROCHA DE PAULA', 'deoliveirarochabreno2@gmail.com', '$2y$10$tOwLKi.IedbjUTHrCZn38uM6zm7t.hspCCatXxSpv/SJvProH9XP6', '2024-10-02', 'Masculino', 'Rua José Cândido Capele,47-caçapava', 'SP'),
(3, 'BRENO DE OLIVEIRA ROCHA DE PAULA', 'deoliveirarochabreno2@gmail.com', '$2y$10$F2VhPDFXCN8OydSMjlSxtuzw3jiofAUwd0.SZ3.5BRVXYgUV.oRCa', '2024-10-10', 'Masculino', 'Rua Luiz de Carvalho Gonçalves, 402', 'SP'),
(4, 'BRENO DE OLIVEIRA ROCHA DE PAULA', 'deoliveirarochabreno2@gmail.com', '$2y$10$0Qi.2PtLdrvIVv/Rh12nj.dfM.ZeV0zcf3DtiRndMPtmUjp429ozG', '2024-10-26', 'Masculino', 'Rua Luiz de Carvalho Gonçalves, 402', 'SP'),
(5, 'BRENO DE OLIVEIRA ROCHA DE PAULA', 'deoliveirarochabreno2@gmail.com', '$2y$10$D2rXTsKyABKjAJlRu6Tm4OLoOFdopcEP5oLvXaSVkk0fyWkGXR3TO', '2024-10-08', 'Masculino', 'Rua José Cândido Capele,47-caçapava', 'SP'),
(6, 'BRENO DE OLIVEIRA ROCHA DE PAULA', 'deoliveirarochabreno2@gmail.com', '$2y$10$X.LDA/sLiEFFNWRAKsG60unL2XpB6PG.jjH31T8rt9yZkebxinEu.', '2024-10-27', 'Masculino', 'Rua Luiz de Carvalho Gonçalves, 402', 'SP');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`ID_RESERVA`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- Índices de tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `itens_pedido`
--
ALTER TABLE `itens_pedido`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `endereco_id` (`endereco_id`);

--
-- Índices de tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`ID_RESERVA`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- Índices de tabela `status_pedido`
--
ALTER TABLE `status_pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_id` (`pedido_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `delivery`
--
ALTER TABLE `delivery`
  MODIFY `ID_RESERVA` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `itens_pedido`
--
ALTER TABLE `itens_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `ID_RESERVA` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `status_pedido`
--
ALTER TABLE `status_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`);

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`endereco_id`) REFERENCES `enderecos` (`id`);

--
-- Restrições para tabelas `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`);

--
-- Restrições para tabelas `status_pedido`
--
ALTER TABLE `status_pedido`
  ADD CONSTRAINT `status_pedido_ibfk_1` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

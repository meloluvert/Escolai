-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05/11/2024 às 15:07
-- Versão do servidor: 8.0.39-0ubuntu0.22.04.1
-- Versão do PHP: 8.1.2-1ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Escolai`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `id` bigint UNSIGNED NOT NULL,
  `motorista_id` int DEFAULT NULL,
  `escola_id` int DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcance` int NOT NULL,
  `data_fim` datetime NOT NULL,
  `data_inicio` datetime DEFAULT NULL,
  `visualizacoes` int DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacaos`
--

CREATE TABLE `avaliacaos` (
  `id` bigint UNSIGNED NOT NULL,
  `responsavel_id` bigint UNSIGNED NOT NULL,
  `escola_id` bigint UNSIGNED NOT NULL,
  `nota` int NOT NULL,
  `descricao` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` bigint UNSIGNED NOT NULL,
  `cep` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rua` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `cep`, `rua`, `estado`, `cidade`, `bairro`, `created_at`, `updated_at`) VALUES
(11, '1', '1', '1', '1', '1', '2024-11-01 17:47:52', '2024-11-01 17:47:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `escolaridades`
--

CREATE TABLE `escolaridades` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `escolaridade_professors`
--

CREATE TABLE `escolaridade_professors` (
  `id` bigint UNSIGNED NOT NULL,
  `escola_id` bigint UNSIGNED NOT NULL,
  `escolaridade_id` bigint UNSIGNED NOT NULL,
  `porcentagem` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `escolas`
--

CREATE TABLE `escolas` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf_coordenador` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` bigint UNSIGNED NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_mensalidade` double(8,2) NOT NULL,
  `num_alunos` int NOT NULL,
  `whatsapp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao1` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao2` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `escolas`
--

INSERT INTO `escolas` (`id`, `name`, `email`, `password`, `cpf_coordenador`, `endereco`, `telefone`, `media_mensalidade`, `num_alunos`, `whatsapp`, `instagram`, `descricao1`, `descricao2`, `created_at`, `updated_at`) VALUES
(3, 'bfcujxb kcjbjb', 'bjbjb', '', 'bjhbjhb', 11, 'jb', 144.00, 22, 'bh', 'bh', 'bhb', 'b', '2024-11-14 17:46:20', '2024-11-28 17:46:20'),
(4, 'Escola do Futuro', 'contato@futuroescola.com', 'senha321', '45678901234', 11, '(41) 98765-3456', 1100.00, 350, '(41) 91567-2345', '@futuroescola', 'Aprendizado inovador', 'Preparação para o futuro', '2024-11-05 17:53:30', '2024-11-05 17:53:30'),
(5, 'Instituto Sabedoria', 'contato@sabedoriaescola.com', 'senha654', '56789012345', 11, '(51) 98765-4567', 1300.00, 400, '(51) 92234-5678', '@sabedoriaescola', 'Valoriza o saber', 'Conexão com a prática', '2024-11-05 17:53:30', '2024-11-05 17:53:30'),
(6, 'Escola Sabina', 'contato@sabinaescola.com', 'senha987', '67890123456', 11, '(61) 98765-5678', 950.00, 200, '(61) 91123-4567', '@sabinaescola', 'Foco no aluno', 'Tradição e inovação', '2024-11-05 17:53:30', '2024-11-05 17:53:30'),
(7, 'Escola Líder', 'contato@liderescola.com', 'senha6543', '78901234567', 11, '(71) 98765-6789', 1050.00, 270, '(71) 93345-6789', '@liderescola', 'Liderança e desenvolvimento', 'Ensino humanizado', '2024-11-05 17:53:30', '2024-11-05 17:53:30'),
(8, 'Academia do Saber', 'contato@academiasaber.com', 'senha4321', '89012345678', 11, '(81) 98765-7890', 950.00, 180, '(81) 94456-7890', '@academiasaber', 'Desenvolvimento integral', 'Excelência acadêmica', '2024-11-05 17:53:30', '2024-11-05 17:53:30'),
(9, 'Escola Nova Geração', 'contato@novageracaoescola.com', 'senha8765', '90123456789', 11, '(91) 98765-8901', 1400.00, 500, '(91) 95567-8901', '@novageracaoescola', 'Educação para o futuro', 'Sustentabilidade e tecnologia', '2024-11-05 17:53:30', '2024-11-05 17:53:30'),
(10, 'Colégio Horizonte', 'contato@horizontescola.com', 'senha2468', '12309876543', 11, '(11) 99876-5432', 1600.00, 700, '(11) 93345-6789', '@horizontescola', 'Ensino completo', 'Compromisso com o futuro', '2024-11-05 17:53:30', '2024-11-05 17:53:30'),
(11, 'a', 'a@a.vcom', 'a', '1565', 11, 'a', 1.00, 1, '1', '1', '', '', '2024-11-05 21:05:52', '2024-11-05 21:05:52'),
(12, 'a', 'a@a.vcom', 'a', '1565', 11, 'a', 1.00, 1, '1', '1', '', '', '2024-11-05 21:05:59', '2024-11-05 21:05:59'),
(13, 'a', 'a@a.vcom', 'a', '1565', 11, 'a', 199.00, 1, '1', '1', '', '', '2024-11-05 21:06:27', '2024-11-05 21:06:27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `escola_etapa_ensinos`
--

CREATE TABLE `escola_etapa_ensinos` (
  `id` bigint UNSIGNED NOT NULL,
  `escola_id` bigint UNSIGNED NOT NULL,
  `etapa_ensino_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `escola_qualidades`
--

CREATE TABLE `escola_qualidades` (
  `id` bigint UNSIGNED NOT NULL,
  `escola_id` bigint UNSIGNED NOT NULL,
  `qualidade_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `etapa_ensinos`
--

CREATE TABLE `etapa_ensinos` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint UNSIGNED NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `escola_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_09_06_163643_create_motoristas_table', 1),
(7, '2024_09_06_163711_create_etapa_ensinos_table', 1),
(8, '2024_09_06_163730_create_qualidades_table', 1),
(9, '2024_09_06_163739_create_responsavels_table', 1),
(10, '2024_09_06_163802_create_escolaridades_table', 1),
(11, '2024_09_06_163809_create_enderecos_table', 1),
(12, '2024_09_06_163818_create_turnos_table', 1),
(13, '2024_09_06_163829_create_anuncios_table', 1),
(14, '2024_09_06_164657_create_escolas_table', 1),
(15, '2024_09_06_164703_create_fotos_table', 1),
(16, '2024_09_06_170600_create_turno_escolas_table', 1),
(17, '2024_09_06_171133_create_escola_qualidades_table', 1),
(18, '2024_09_06_171139_create_escola_etapa_ensinos_table', 1),
(19, '2024_09_06_171151_create_escolaridade_professors_table', 1),
(20, '2024_09_06_172729_create_avaliacaos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `motoristas`
--

CREATE TABLE `motoristas` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `qualidades`
--

CREATE TABLE `qualidades` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `responsavels`
--

CREATE TABLE `responsavels` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_de_perfil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `turnos`
--

CREATE TABLE `turnos` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `turno_escolas`
--

CREATE TABLE `turno_escolas` (
  `id` bigint UNSIGNED NOT NULL,
  `motorista_id` bigint UNSIGNED NOT NULL,
  `escola_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `avaliacaos`
--
ALTER TABLE `avaliacaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avaliacaos_responsavel_id_foreign` (`responsavel_id`),
  ADD KEY `avaliacaos_escola_id_foreign` (`escola_id`);

--
-- Índices de tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `escolaridades`
--
ALTER TABLE `escolaridades`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `escolaridade_professors`
--
ALTER TABLE `escolaridade_professors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escolaridade_professors_escola_id_foreign` (`escola_id`),
  ADD KEY `escolaridade_professors_escolaridade_id_foreign` (`escolaridade_id`);

--
-- Índices de tabela `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escolas_endereco_foreign` (`endereco`);

--
-- Índices de tabela `escola_etapa_ensinos`
--
ALTER TABLE `escola_etapa_ensinos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escola_etapa_ensinos_escola_id_foreign` (`escola_id`),
  ADD KEY `escola_etapa_ensinos_etapa_ensino_id_foreign` (`etapa_ensino_id`);

--
-- Índices de tabela `escola_qualidades`
--
ALTER TABLE `escola_qualidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escola_qualidades_escola_id_foreign` (`escola_id`),
  ADD KEY `escola_qualidades_qualidade_id_foreign` (`qualidade_id`);

--
-- Índices de tabela `etapa_ensinos`
--
ALTER TABLE `etapa_ensinos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fotos_escola_id_foreign` (`escola_id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `motoristas`
--
ALTER TABLE `motoristas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `qualidades`
--
ALTER TABLE `qualidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `responsavels`
--
ALTER TABLE `responsavels`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `turno_escolas`
--
ALTER TABLE `turno_escolas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turno_escolas_motorista_id_foreign` (`motorista_id`),
  ADD KEY `turno_escolas_escola_id_foreign` (`escola_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacaos`
--
ALTER TABLE `avaliacaos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `escolaridades`
--
ALTER TABLE `escolaridades`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `escolaridade_professors`
--
ALTER TABLE `escolaridade_professors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `escolas`
--
ALTER TABLE `escolas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `escola_etapa_ensinos`
--
ALTER TABLE `escola_etapa_ensinos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `escola_qualidades`
--
ALTER TABLE `escola_qualidades`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `etapa_ensinos`
--
ALTER TABLE `etapa_ensinos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `motoristas`
--
ALTER TABLE `motoristas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `qualidades`
--
ALTER TABLE `qualidades`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `responsavels`
--
ALTER TABLE `responsavels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turno_escolas`
--
ALTER TABLE `turno_escolas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `avaliacaos`
--
ALTER TABLE `avaliacaos`
  ADD CONSTRAINT `avaliacaos_escola_id_foreign` FOREIGN KEY (`escola_id`) REFERENCES `escolas` (`id`),
  ADD CONSTRAINT `avaliacaos_responsavel_id_foreign` FOREIGN KEY (`responsavel_id`) REFERENCES `responsavels` (`id`);

--
-- Restrições para tabelas `escolaridade_professors`
--
ALTER TABLE `escolaridade_professors`
  ADD CONSTRAINT `escolaridade_professors_escola_id_foreign` FOREIGN KEY (`escola_id`) REFERENCES `escolas` (`id`),
  ADD CONSTRAINT `escolaridade_professors_escolaridade_id_foreign` FOREIGN KEY (`escolaridade_id`) REFERENCES `escolaridades` (`id`);

--
-- Restrições para tabelas `escolas`
--
ALTER TABLE `escolas`
  ADD CONSTRAINT `escolas_endereco_foreign` FOREIGN KEY (`endereco`) REFERENCES `enderecos` (`id`);

--
-- Restrições para tabelas `escola_etapa_ensinos`
--
ALTER TABLE `escola_etapa_ensinos`
  ADD CONSTRAINT `escola_etapa_ensinos_escola_id_foreign` FOREIGN KEY (`escola_id`) REFERENCES `escolas` (`id`),
  ADD CONSTRAINT `escola_etapa_ensinos_etapa_ensino_id_foreign` FOREIGN KEY (`etapa_ensino_id`) REFERENCES `etapa_ensinos` (`id`);

--
-- Restrições para tabelas `escola_qualidades`
--
ALTER TABLE `escola_qualidades`
  ADD CONSTRAINT `escola_qualidades_escola_id_foreign` FOREIGN KEY (`escola_id`) REFERENCES `escolas` (`id`),
  ADD CONSTRAINT `escola_qualidades_qualidade_id_foreign` FOREIGN KEY (`qualidade_id`) REFERENCES `qualidades` (`id`);

--
-- Restrições para tabelas `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_escola_id_foreign` FOREIGN KEY (`escola_id`) REFERENCES `escolas` (`id`);

--
-- Restrições para tabelas `turno_escolas`
--
ALTER TABLE `turno_escolas`
  ADD CONSTRAINT `turno_escolas_escola_id_foreign` FOREIGN KEY (`escola_id`) REFERENCES `escolas` (`id`),
  ADD CONSTRAINT `turno_escolas_motorista_id_foreign` FOREIGN KEY (`motorista_id`) REFERENCES `motoristas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

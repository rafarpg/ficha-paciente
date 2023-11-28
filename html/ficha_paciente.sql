-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2023 às 03:12
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
-- Banco de dados: `ficha_paciente`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `num_atendimento` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_ocorrencia`
--

CREATE TABLE `dados_ocorrencia` (
  `num_atendimento` int(11) NOT NULL,
  `num_usb` int(11) NOT NULL,
  `num_ocorrencia` int(11) NOT NULL,
  `desp` varchar(10) NOT NULL,
  `km_final` int(11) NOT NULL,
  `cod_ir` varchar(10) NOT NULL,
  `cod_ps` varchar(10) NOT NULL,
  `cod_sia_sus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_ocorrencia`
--

INSERT INTO `dados_ocorrencia` (`num_atendimento`, `num_usb`, `num_ocorrencia`, `desp`, `km_final`, `cod_ir`, `cod_ps`, `cod_sia_sus`) VALUES
(1, 1, 1, '231', 312, '11', '-11', 'wd1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_paciente`
--

CREATE TABLE `dados_paciente` (
  `id_paciente` int(11) NOT NULL,
  `nome_paciente` varchar(50) NOT NULL,
  `rg_cpf_paciente` varchar(15) NOT NULL,
  `sexo_paciente` varchar(1) NOT NULL,
  `nome_hospital` varchar(50) NOT NULL,
  `nome_acompanhante` varchar(50) NOT NULL,
  `telefone_paciente` varchar(14) NOT NULL,
  `idade_paciente` int(11) NOT NULL,
  `idade_acompanhante` int(11) NOT NULL,
  `local_ocorrencia` varchar(60) NOT NULL,
  `idb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_paciente`
--

INSERT INTO `dados_paciente` (`id_paciente`, `nome_paciente`, `rg_cpf_paciente`, `sexo_paciente`, `nome_hospital`, `nome_acompanhante`, `telefone_paciente`, `idade_paciente`, `idade_acompanhante`, `local_ocorrencia`, `idb`) VALUES
(2, 'Jefferson', '123.123.123-45', 'm', 'São', 'Mãe', '47988888888', 18, 34, 'Rua', 0),
(4, 'Jefferson2', '123.123.123-45', 'm', 'São José', 'Mãe', '47988888888', 18, 34, 'Rua feia2', 0),
(6, 'BBBBBBB', '1231231', 'f', '31231', '312312', '31231', 13123, 123, '1231', 0),
(7, 'teste22', '1232', 'f', 'teste', 'teste', '47988888889', 18, 18, 'teste', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `img_acidente`
--

CREATE TABLE `img_acidente` (
  `id_img_acidente` int(11) NOT NULL,
  `num_atendimento` int(11) NOT NULL,
  `img_acidente` mediumblob NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `local_ferimentos`
--

CREATE TABLE `local_ferimentos` (
  `id_ferimento` int(11) NOT NULL,
  `num_atendimento` int(11) NOT NULL,
  `local` varchar(30) NOT NULL,
  `lado` varchar(15) NOT NULL,
  `face` varchar(15) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `queim_grau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `problema_encontrados_sus`
--

CREATE TABLE `problema_encontrados_sus` (
  `num_atendimento` int(11) NOT NULL,
  `psiquiatrico` varchar(1) NOT NULL,
  `respiratorio` varchar(1) NOT NULL,
  `dpoc` varchar(1) NOT NULL,
  `inflamacao_fumaca` varchar(1) NOT NULL,
  `diabete` varchar(1) NOT NULL,
  `hiperglicemia` varchar(1) NOT NULL,
  `hipoglicemia` varchar(1) NOT NULL,
  `outros` varchar(20) NOT NULL,
  `obstretrico` varchar(1) NOT NULL,
  `parto_emergencial` varchar(1) NOT NULL,
  `gestante` varchar(1) NOT NULL,
  `hemor_excessiva` varchar(1) NOT NULL,
  `transporte` varchar(1) NOT NULL,
  `aereo` varchar(1) NOT NULL,
  `clinico` varchar(1) NOT NULL,
  `emergencial` varchar(1) NOT NULL,
  `pos_trauma` varchar(1) NOT NULL,
  `samu` varchar(1) NOT NULL,
  `outros_transportes` varchar(20) NOT NULL,
  `sem_remocao` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sinais_e_sintomas`
--

CREATE TABLE `sinais_e_sintomas` (
  `num_atendimento` int(11) NOT NULL,
  `abd_sensivel_rigido` varchar(1) NOT NULL,
  `fundamento_cranio` varchar(1) NOT NULL,
  `agitacao` varchar(1) NOT NULL,
  `amnesia` varchar(1) NOT NULL,
  `apineia` varchar(1) NOT NULL,
  `bradicardia` varchar(1) NOT NULL,
  `brandipneia` varchar(1) NOT NULL,
  `bronco_aspirado` varchar(1) NOT NULL,
  `cefaleia` varchar(1) NOT NULL,
  `cianose` varchar(1) NOT NULL,
  `labios` varchar(1) NOT NULL,
  `extremidade` varchar(1) NOT NULL,
  `convulsao` varchar(1) NOT NULL,
  `decorticacao` varchar(1) NOT NULL,
  `deformidade` varchar(1) NOT NULL,
  `descerebracao` varchar(1) NOT NULL,
  `desmaio` varchar(1) NOT NULL,
  `desvio_de_traqueia` varchar(1) NOT NULL,
  `dispneia` varchar(1) NOT NULL,
  `dor_local` varchar(1) NOT NULL,
  `edema` varchar(1) NOT NULL,
  `ede_labios` varchar(1) NOT NULL,
  `ede_extremidade` varchar(1) NOT NULL,
  `efisema_subcutaneo` varchar(1) NOT NULL,
  `entase_jugular` varchar(1) NOT NULL,
  `face_palida` varchar(1) NOT NULL,
  `hemorragia` varchar(1) NOT NULL,
  `interna` varchar(1) NOT NULL,
  `externa` varchar(1) NOT NULL,
  `hipertensao` varchar(1) NOT NULL,
  `hipotensao` varchar(1) NOT NULL,
  `nausea_vomito` varchar(1) NOT NULL,
  `nasoragia` varchar(1) NOT NULL,
  `obito` varchar(1) NOT NULL,
  `otorreia` varchar(1) NOT NULL,
  `otorragia` varchar(1) NOT NULL,
  `ovace` varchar(1) NOT NULL,
  `parada` varchar(1) NOT NULL,
  `cardiaca` varchar(1) NOT NULL,
  `respiratoria` varchar(1) NOT NULL,
  `praiaprismo` varchar(1) NOT NULL,
  `prurido_na_pele` varchar(1) NOT NULL,
  `anisocoria` varchar(1) NOT NULL,
  `isocoria` varchar(1) NOT NULL,
  `midraiase` varchar(1) NOT NULL,
  `miose` varchar(1) NOT NULL,
  `reagente` varchar(1) NOT NULL,
  `_ reagente` varchar(1) NOT NULL,
  `sede` varchar(1) NOT NULL,
  `sinal_de_battle` varchar(1) NOT NULL,
  `sinal_de_guaxinim` varchar(1) NOT NULL,
  `sudorese` varchar(1) NOT NULL,
  `taquipneia` varchar(1) NOT NULL,
  `taquicardia` varchar(1) NOT NULL,
  `tontura` varchar(1) NOT NULL,
  `outros` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_ocorrencia`
--

CREATE TABLE `tipo_ocorrencia` (
  `num_atendimento` int(11) NOT NULL,
  `causado_por_animais` varchar(1) NOT NULL,
  `meio_de_transporte` varchar(1) NOT NULL,
  `deslizamento` varchar(1) NOT NULL,
  `emergencia_med` varchar(1) NOT NULL,
  `queda_2m` varchar(1) NOT NULL,
  `tentativa_suicidio` varchar(1) NOT NULL,
  `queda_propria_altura` varchar(1) NOT NULL,
  `afogamento` varchar(1) NOT NULL,
  `agressao` varchar(1) NOT NULL,
  `atropelamento` varchar(1) NOT NULL,
  `choque_eletrico` varchar(1) NOT NULL,
  `desabamento` varchar(1) NOT NULL,
  `domestico` varchar(1) NOT NULL,
  `esportivo` varchar(1) NOT NULL,
  `intoxicacao` varchar(1) NOT NULL,
  `queda_bicicleta` varchar(1) NOT NULL,
  `queda_moto` varchar(1) NOT NULL,
  `queda_maior2m` varchar(1) NOT NULL,
  `trabalho` varchar(1) NOT NULL,
  `trasferencia` varchar(1) NOT NULL,
  `outro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `perfil` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `telefone`, `senha`, `perfil`) VALUES
(16, 'Pedro', 'pedro23@gmail.com', '47998693475', '827ccb0eea8a706c4c34a16891f84e7b', 'normal'),
(18, 'Roberto Augusto Pereira ', 'roberto@gmail.com', '479999999999', '202cb962ac59075b964b07152d234b70', 'administrador'),
(19, 'Gustavo Almeida', 'gugu@gmail.com', '(47) 99893-124', '202cb962ac59075b964b07152d234b70', 'normal'),
(20, 'Rafael', 'teste@gmail.com', '4799999999', '202cb962ac59075b964b07152d234b70', 'administrador'),
(21, 'KayqueMarcelo', 'kaka@gmail.com', '4799999999', 'd41d8cd98f00b204e9800998ecf8427e', 'administrador');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`num_atendimento`);

--
-- Índices de tabela `dados_ocorrencia`
--
ALTER TABLE `dados_ocorrencia`
  ADD PRIMARY KEY (`num_atendimento`);

--
-- Índices de tabela `dados_paciente`
--
ALTER TABLE `dados_paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices de tabela `img_acidente`
--
ALTER TABLE `img_acidente`
  ADD PRIMARY KEY (`id_img_acidente`);

--
-- Índices de tabela `local_ferimentos`
--
ALTER TABLE `local_ferimentos`
  ADD PRIMARY KEY (`id_ferimento`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `num_atendimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dados_ocorrencia`
--
ALTER TABLE `dados_ocorrencia`
  MODIFY `num_atendimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `dados_paciente`
--
ALTER TABLE `dados_paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `img_acidente`
--
ALTER TABLE `img_acidente`
  MODIFY `id_img_acidente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `local_ferimentos`
--
ALTER TABLE `local_ferimentos`
  MODIFY `id_ferimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

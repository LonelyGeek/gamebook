-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2016 às 02:55
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgamebook`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emblema`
--

CREATE TABLE `emblema` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `link_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emblema`
--

INSERT INTO `emblema` (`id`, `nome`, `link_img`) VALUES
(1, 'primeiro Emblema', 'img/priemb.jpg'),
(2, 'Segundo Emblema', 'img/segemb.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emblema_estudante`
--

CREATE TABLE `emblema_estudante` (
  `id` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `id_emb` int(11) NOT NULL,
  `conquistado` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emblema_estudante`
--

INSERT INTO `emblema_estudante` (`id`, `id_est`, `id_emb`, `conquistado`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 0),
(3, 2, 1, 0),
(4, 2, 2, 0),
(5, 3, 1, 0),
(6, 3, 2, 0),
(7, 4, 1, 0),
(8, 4, 2, 0),
(9, 5, 1, 0),
(10, 5, 2, 0),
(11, 6, 1, 0),
(12, 6, 2, 0),
(13, 8, 1, 0),
(14, 8, 2, 0),
(15, 9, 1, 0),
(16, 9, 2, 0),
(17, 10, 1, 0),
(18, 10, 2, 0),
(19, 11, 1, 0),
(20, 11, 2, 0),
(21, 12, 1, 0),
(22, 12, 2, 0),
(23, 13, 1, 0),
(24, 13, 2, 0),
(25, 14, 1, 0),
(26, 14, 2, 0),
(27, 15, 1, 0),
(28, 15, 2, 0),
(29, 16, 1, 0),
(30, 16, 2, 0),
(31, 17, 1, 0),
(32, 17, 2, 0),
(33, 18, 1, 0),
(34, 18, 2, 0),
(35, 19, 1, 0),
(36, 19, 2, 0),
(37, 20, 1, 0),
(38, 20, 2, 0),
(39, 21, 1, 0),
(40, 21, 2, 0),
(41, 22, 1, 0),
(42, 22, 2, 0),
(43, 23, 1, 0),
(44, 23, 2, 0),
(45, 24, 1, 0),
(46, 24, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante`
--

CREATE TABLE `estudante` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT '1',
  `pontos` int(11) NOT NULL DEFAULT '0',
  `nivel_acesso` int(11) NOT NULL DEFAULT '2',
  `anonasc` int(11) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estudante`
--

INSERT INTO `estudante` (`id`, `nome`, `email`, `senha`, `sexo`, `cidade`, `estado`, `nivel`, `pontos`, `nivel_acesso`, `anonasc`, `apelido`, `imagem`) VALUES
(14, 'dasd', 'kami@kami', '321', 'masculino', 'sads', 'asdsd', 1, 200, 2, 1999, 'Marcos', '67ca8470e553793c6ee781fbcc3512a8.png'),
(15, 'sdasd', 'juju@juju', '123', 'feminino', 'dasd', 'dasd', 1, 400, 2, 2015, 'Juliana', 'd263a5a809ff7c959569a021d1c9dd3e.jpg'),
(16, 'dad', 'fefo@fefo', '123', 'masculino', 'sdsadd', 'adsa', 1, 900, 2, 2013, 'Fernando', '4deb2759142d7a3ff643588c5ca38cfe.jpg'),
(17, 'dadad', 'cami@cami', '123', 'feminino', 'sadsad', 'adas', 1, 200, 2, 1999, 'Camila', '485425139a0fd32a70192911300ec8af.jpg'),
(18, 'dad', 'mito@mito', '123', 'masculino', 'asdasdd', 'asdasda', 1, 1000, 2, 2000, 'Roberto', 'a2112defd986708628284f85f97dea3f.jpg'),
(19, 'sdada', 'axl@axl', '123', 'feminino', 'asdasd', 'asda', 1, 1200, 2, 1998, 'Carlos', '29757fd304e70f0a834e7f510c875c8d.jpg'),
(20, 'Ricardo Lima', 'ricardo.ldo@hotmail.com', '123', 'masculino', 'Cidade Ocidental', 'Goi?s', 1, 3150, 2, 1996, 'Lonelygeek', 'e898cfa800faa1acf9f3a8570bd50358.jpg'),
(21, 'gadsa', 'sdasda@hotmail.com', 'sasa', 'feminino', 'dsdsd', 'sds', 1, 0, 2, 2000, 'ricardosa', '706553389dbfc3a93db429c335f1697e.png'),
(22, 'gadsa', 'sdasda@hotmail.com', '123', 'feminino', 'dsdsd', 'sds', 1, 0, 2, 2000, 'ricardosaaa', '41fc94ec0a097fe7dc497fd18e7c5504.png'),
(23, 'Luis Ricardo', 'luisricardoldo@gmail.com', 'admin', 'masculino', 'Cidade Ocidental', 'GoiÃ¡s', 1, 0, 1, 1995, 'Administrador', '412299b225ca38cbafd54b4ee34c3230.jpg'),
(24, 'Leandro da Cruz Paschoal', 'leandrodacruzpaschoal@hotmail.com', '123', 'masculino', 'Ocidental', 'Goias', 1, 100, 2, 2000, 'Leandro', '55c2e20e9546bfd78e652d7c7f138d89.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `id` int(11) NOT NULL,
  `pergunta` text NOT NULL,
  `altcerta` varchar(100) NOT NULL,
  `topico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exercicio`
--

INSERT INTO `exercicio` (`id`, `pergunta`, `altcerta`, `topico`) VALUES
(1, '1. Verbos são palavras que indicam ações, estados ou fenômenos, situando-os no tempo.\r\n', 'verdadeiro', 1),
(2, '2. Na Frase "A Corrida de Maria foi longa", podemos afirmar que corrida é um verbo.', 'falso', 1),
(3, '3. O verbo está distribuido em três conjugações que terminam em AR, ER e OR.', 'falso', 1),
(4, '4. O verbo funciona como um articulador entre os diferentes elementos que constituem uma frase. Assim, podemos entendê-lo como um núcleo que, uma vez combinado com estes outros elementos, assegura um sentido à frase.', 'verdadeiro', 1),
(5, '5. Na Frase "Choveu muito ontem", podemos afirmar que choveu é um verbo.', 'verdadeiro', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicio2`
--

CREATE TABLE `exercicio2` (
  `id` int(11) NOT NULL,
  `pergunta` varchar(255) NOT NULL,
  `alt1` varchar(30) NOT NULL,
  `alt2` varchar(30) NOT NULL,
  `alt3` varchar(30) NOT NULL,
  `alt4` varchar(30) NOT NULL,
  `altcerta` varchar(30) NOT NULL,
  `topico` int(11) NOT NULL,
  `questao` int(11) NOT NULL,
  `tirinha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exercicio2`
--

INSERT INTO `exercicio2` (`id`, `pergunta`, `alt1`, `alt2`, `alt3`, `alt4`, `altcerta`, `topico`, `questao`, `tirinha`) VALUES
(1, 'Ajude Jon a acordar o Garfield', 'POR QUE', 'POR QUÊ', 'PORQUE', 'PORQUÊ', 'POR QUE', 1, 1, 'img/tirinha1.jpg'),
(2, 'Complete a frase utilizando a opção correta', 'POR QUE', 'POR QUÊ', 'PORQUE', 'PORQUÊ', 'POR QUÊ', 1, 2, 'img/tirinha2.jpg'),
(3, 'Indique qual das opções abaixo está usando de forma correta o uso do "porquês".', 'POR QUE', 'PORQUE', 'PORQUÊ', 'POR QUÊ', 'PORQUE', 1, 3, 'img/tirinha3.jpg'),
(4, 'pergunta', '1', '2', '3', '4', '4', 2, 1, 'img/tirinha21.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id`, `nome`) VALUES
(1, 'Português'),
(2, 'Matemática'),
(3, 'História'),
(4, 'Geografia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia_estudante`
--

CREATE TABLE `materia_estudante` (
  `id` int(11) NOT NULL,
  `progresso` int(11) NOT NULL DEFAULT '0',
  `nota` float NOT NULL DEFAULT '0',
  `id_est` int(11) NOT NULL,
  `id_mat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materia_estudante`
--

INSERT INTO `materia_estudante` (`id`, `progresso`, `nota`, `id_est`, `id_mat`) VALUES
(1, 20, 6, 1, 1),
(2, 50, 1.5, 1, 2),
(3, 0, 0, 2, 1),
(4, 0, 0, 2, 2),
(5, 0, 0, 3, 1),
(6, 0, 0, 3, 2),
(7, 0, 0, 4, 1),
(8, 0, 0, 4, 2),
(9, 0, 0, 5, 1),
(10, 0, 0, 5, 2),
(11, 0, 0, 6, 1),
(12, 0, 0, 6, 2),
(13, 0, 0, 8, 1),
(14, 0, 0, 8, 2),
(15, 0, 0, 9, 1),
(16, 0, 0, 9, 2),
(17, 30, 2, 1, 3),
(18, 0, 0, 10, 1),
(19, 0, 0, 10, 2),
(20, 100, 0, 10, 3),
(21, 0, 0, 10, 4),
(22, 20, 2.5, 1, 4),
(23, 0, 0, 11, 1),
(24, 0, 0, 11, 2),
(25, 0, 0, 11, 3),
(26, 0, 0, 11, 4),
(27, 0, 0, 12, 1),
(28, 0, 0, 12, 2),
(29, 0, 0, 12, 3),
(30, 0, 0, 12, 4),
(31, 0, 0, 13, 1),
(32, 0, 0, 13, 2),
(33, 0, 0, 13, 3),
(34, 0, 0, 13, 4),
(35, 0, 0, 14, 1),
(36, 0, 0, 14, 2),
(37, 0, 0, 14, 3),
(38, 0, 0, 14, 4),
(39, 0, 0, 15, 1),
(40, 0, 0, 15, 2),
(41, 0, 0, 15, 3),
(42, 0, 0, 15, 4),
(43, 0, 0, 16, 1),
(44, 0, 0, 16, 2),
(45, 0, 0, 16, 3),
(46, 0, 0, 16, 4),
(47, 0, 0, 17, 1),
(48, 0, 0, 17, 2),
(49, 0, 0, 17, 3),
(50, 0, 0, 17, 4),
(51, 0, 0, 18, 1),
(52, 0, 0, 18, 2),
(53, 0, 0, 18, 3),
(54, 0, 0, 18, 4),
(55, 0, 0, 19, 1),
(56, 0, 0, 19, 2),
(57, 0, 0, 19, 3),
(58, 0, 0, 19, 4),
(59, 20, 9.99, 20, 1),
(60, 50, 7, 20, 2),
(61, 40, 6, 20, 3),
(62, 10, 2.5, 20, 4),
(63, 0, 0, 21, 1),
(64, 0, 0, 21, 2),
(65, 0, 0, 21, 3),
(66, 0, 0, 21, 4),
(67, 0, 0, 22, 1),
(68, 0, 0, 22, 2),
(69, 0, 0, 22, 3),
(70, 0, 0, 22, 4),
(71, 0, 0, 23, 1),
(72, 0, 0, 23, 2),
(73, 0, 0, 23, 3),
(74, 0, 0, 23, 4),
(75, 20, 6.66, 24, 1),
(76, 0, 0, 24, 2),
(77, 0, 0, 24, 3),
(78, 0, 0, 24, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `missao`
--

CREATE TABLE `missao` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `objetivo` varchar(250) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `missao`
--

INSERT INTO `missao` (`id`, `nome`, `objetivo`, `pontos`) VALUES
(1, 'Primeira Missão', 'Faça um exercício', 200),
(2, 'Segunda Missão', 'Tire nota 10 em um exercício', 300),
(3, 'Terceira Missão', 'Estude dois tópicos de matemática', 400),
(4, 'quarta missão', 'Faça três exercícios em um dia', 800);

-- --------------------------------------------------------

--
-- Estrutura da tabela `missao_estudante`
--

CREATE TABLE `missao_estudante` (
  `id` int(11) NOT NULL,
  `id_missao` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `concluida` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `missao_estudante`
--

INSERT INTO `missao_estudante` (`id`, `id_missao`, `id_est`, `concluida`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 0),
(3, 1, 2, 0),
(4, 2, 2, 0),
(5, 1, 3, 0),
(6, 2, 3, 0),
(7, 1, 4, 0),
(8, 2, 4, 0),
(9, 1, 5, 0),
(10, 2, 5, 0),
(11, 1, 6, 0),
(12, 2, 6, 0),
(13, 3, 1, 0),
(14, 4, 1, 0),
(15, 1, 8, 0),
(16, 2, 8, 0),
(17, 1, 9, 0),
(18, 2, 9, 0),
(19, 1, 10, 0),
(20, 2, 10, 0),
(21, 3, 10, 0),
(22, 1, 11, 0),
(23, 2, 11, 0),
(24, 3, 11, 0),
(25, 1, 12, 0),
(26, 2, 12, 0),
(27, 3, 12, 0),
(28, 1, 13, 0),
(29, 2, 13, 0),
(30, 3, 13, 0),
(31, 1, 14, 0),
(32, 2, 14, 0),
(33, 3, 14, 0),
(34, 1, 15, 0),
(35, 2, 15, 0),
(36, 3, 15, 0),
(37, 1, 16, 0),
(38, 2, 16, 0),
(39, 3, 16, 0),
(40, 1, 17, 0),
(41, 2, 17, 0),
(42, 3, 17, 0),
(43, 1, 18, 0),
(44, 2, 18, 0),
(45, 3, 18, 0),
(46, 1, 19, 0),
(47, 2, 19, 0),
(48, 3, 19, 0),
(49, 1, 20, 0),
(50, 2, 20, 0),
(51, 3, 20, 0),
(52, 4, 20, 0),
(53, 1, 21, 0),
(54, 2, 21, 0),
(55, 3, 21, 0),
(56, 4, 21, 0),
(57, 1, 22, 0),
(58, 2, 22, 0),
(59, 3, 22, 0),
(60, 4, 22, 0),
(61, 1, 23, 0),
(62, 2, 23, 0),
(63, 3, 23, 0),
(64, 4, 23, 0),
(65, 1, 24, 0),
(66, 2, 24, 0),
(67, 3, 24, 0),
(68, 4, 24, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `topico`
--

CREATE TABLE `topico` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `id_mat` int(11) NOT NULL,
  `texto` text NOT NULL,
  `dica` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `topico`
--

INSERT INTO `topico` (`id`, `nome`, `id_mat`, `texto`, `dica`) VALUES
(1, 'Porquês', 1, 'img/tirinhap.png', '<font size="6"> <b>O USO DOS PORQUES</b></font><br><br>\r\n\r\n<font size="5"> \r\n\r\n<b>POR QUE</b> - início de pergunta e pergunta indireta.  <br>\r\n\r\nPor que você está zangada?<br>\r\nNão entendi por que você está zangada. \r\n\r\n<hr>\r\n<b>PORQUE</b> - Resposta. <br>\r\n\r\nEu estou zangada porque tirei uma nota ruim. <br>\r\n\r\n<hr>\r\n\r\n<b>POR QUÊ</b> - Final de pergunta.<br>\r\n\r\nVocê está zangada, por quê?<br><hr>\r\n\r\n<b>PORQUÊ</b> - Depois de artigo e tem a função de substantivo.<br>\r\n\r\nNão entendi o porquê da sua irritação. <br><br>\r\n\r\n\r\n </font>'),
(2, 'Crase', 1, '', ''),
(3, 'Multiplicação', 2, '', ''),
(4, 'Divisão', 2, '', ''),
(5, 'Artigo', 1, 'Qualquer coisa', 'QUalquer coisa 2'),
(6, 'Adjetivo', 1, 'Pode crê', 'attatata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emblema`
--
ALTER TABLE `emblema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emblema_estudante`
--
ALTER TABLE `emblema_estudante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercicio2`
--
ALTER TABLE `exercicio2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materia_estudante`
--
ALTER TABLE `materia_estudante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missao`
--
ALTER TABLE `missao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missao_estudante`
--
ALTER TABLE `missao_estudante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topico`
--
ALTER TABLE `topico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emblema`
--
ALTER TABLE `emblema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emblema_estudante`
--
ALTER TABLE `emblema_estudante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `exercicio2`
--
ALTER TABLE `exercicio2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `materia_estudante`
--
ALTER TABLE `materia_estudante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `missao`
--
ALTER TABLE `missao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `missao_estudante`
--
ALTER TABLE `missao_estudante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `topico`
--
ALTER TABLE `topico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

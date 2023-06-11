-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2019 at 12:41 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezlearning`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `alimentaTabelaUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `alimentaTabelaUsuario` ()  BEGIN
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso01', 'curso01@gmail.com', 'curso01', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso02', 'curso02@gmail.com', 'curso02', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso03', 'curso03@gmail.com', 'curso03', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso04', 'curso04@gmail.com', 'curso04', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso05', 'curso05@gmail.com', 'curso05', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso06', 'curso06@gmail.com', 'curso06', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso07', 'curso07@gmail.com', 'curso07', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso08', 'curso08@gmail.com', 'curso08', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso09', 'curso09@gmail.com', 'curso09', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso10', 'curso10@gmail.com', 'curso10', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso11', 'curso11@gmail.com', 'curso11', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso12', 'curso12@gmail.com', 'curso12', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso13', 'curso13@gmail.com', 'curso13', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso14', 'curso14@gmail.com', 'curso14', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso15', 'curso15@gmail.com', 'curso15', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso16', 'curso16@gmail.com', 'curso16', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso17', 'curso17@gmail.com', 'curso17', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso18', 'curso18@gmail.com', 'curso18', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso19', 'curso19@gmail.com', 'curso19', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso20', 'curso20@gmail.com', 'curso20', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso21', 'curso21@gmail.com', 'curso21', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso22', 'curso22@gmail.com', 'curso22', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso23', 'curso23@gmail.com', 'curso23', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso24', 'curso24@gmail.com', 'curso24', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso25', 'curso25@gmail.com', 'curso25', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso26', 'curso26@gmail.com', 'curso26', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso27', 'curso27@gmail.com', 'curso27', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso28', 'curso28@gmail.com', 'curso28', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso29', 'curso29@gmail.com', 'curso29', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso30', 'curso30@gmail.com', 'curso30', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso31', 'curso31@gmail.com', 'curso31', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso32', 'curso32@gmail.com', 'curso32', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso33', 'curso33@gmail.com', 'curso33', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso34', 'curso34@gmail.com', 'curso34', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso35', 'curso35@gmail.com', 'curso35', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso36', 'curso36@gmail.com', 'curso36', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso37', 'curso37@gmail.com', 'curso37', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso38', 'curso38@gmail.com', 'curso38', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso39', 'curso39@gmail.com', 'curso39', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso40', 'curso40@gmail.com', 'curso40', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso41', 'curso41@gmail.com', 'curso41', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso42', 'curso42@gmail.com', 'curso42', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso43', 'curso43@gmail.com', 'curso43', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso44', 'curso44@gmail.com', 'curso44', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso45', 'curso45@gmail.com', 'curso45', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso46', 'curso46@gmail.com', 'curso46', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso47', 'curso47@gmail.com', 'curso47', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso48', 'curso48@gmail.com', 'curso48', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso49', 'curso49@gmail.com', 'curso49', md5(123), 'default.png', '0');
    INSERT INTO `ezlearning`.`usuarios` (`usuario`, `email`, `login`, `senha`, `foto`, `tipo`) VALUES ('curso50', 'curso50@gmail.com', 'curso50', md5(123), 'default.png', '0');
    
END$$

DROP PROCEDURE IF EXISTS `deletaTabelaUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deletaTabelaUsuario` ()  BEGIN
delete from usuarios where usuario = 'curso01' or  usuario = 'curso02' or  usuario = 'curso03' or  usuario = 'curso04' or  usuario =
 'curso05' or  usuario = 'curso06' or  usuario = 'curso07' or  usuario = 'curso08' or  usuario = 'curso09' or  usuario = 'curso10' or 
  usuario = 'curso11' or  usuario = 'curso12'  or  usuario = 'curso13' or  usuario = 'curso14' or  usuario = 'curso15' or
  usuario = 'curso16' or  usuario = 'curso17' or  usuario = 'curso18' or  usuario = 'curso19' or  usuario = 'curso20' or  usuario = 'curso21' 
  or  usuario = 'curso22' or  usuario = 'curso23' or  usuario = 'curso24' or  usuario = 'curso25' or  usuario = 'curso26'
  or  usuario = 'curso27' or  usuario = 'curso28' or  usuario = 'curso29' or  usuario = 'curso30' or  usuario = 'curso31' or  usuario = 'curso32'
  or  usuario = 'curso33' or  usuario = 'curso34' or  usuario = 'curso35' or  usuario = 'curso36' or  usuario = 'curso37' or  usuario ='curso38'
  or  usuario = 'curso39' or  usuario = 'curso40' or  usuario = 'curso41' or  usuario = 'curso42' or  usuario = 'curso43' or  usuario = 'curso44'
  or  usuario = 'curso45' or  usuario = 'curso46' or  usuario = 'curso47' or  usuario ='curso48'  or  usuario = 'curso49' or  usuario = 'curso50';
END$$

DROP PROCEDURE IF EXISTS `usuario_do_aluno_id`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `usuario_do_aluno_id` (IN `id` INT)  BEGIN
SELECT * FROM aluno where usuario_id_aluno = id;
END$$

--
-- Functions
--
DROP FUNCTION IF EXISTS `medalhas_bronze_aluno`$$
CREATE DEFINER=`ezlearning`@`%%` FUNCTION `medalhas_bronze_aluno` (`p_aluno_id` INT) RETURNS INT(11) NO SQL
BEGIN
DECLARE bronze INT; 
SELECT COUNT(m.tipo) INTO bronze FROM medalha m WHERE aluno_id=p_aluno_id and m.tipo = 0;
RETURN bronze;
END$$

DROP FUNCTION IF EXISTS `medalhas_ouro_aluno`$$
CREATE DEFINER=`ezlearning`@`%%` FUNCTION `medalhas_ouro_aluno` (`p_aluno_id` INT) RETURNS INT(11) NO SQL
BEGIN
DECLARE ouro INT; 
SELECT COUNT(m.tipo) INTO ouro FROM medalha m WHERE aluno_id=p_aluno_id and m.tipo = 2;
RETURN ouro;
END$$

DROP FUNCTION IF EXISTS `medalhas_prata_aluno`$$
CREATE DEFINER=`ezlearning`@`%%` FUNCTION `medalhas_prata_aluno` (`p_aluno_id` INT) RETURNS INT(11) NO SQL
BEGIN
DECLARE prata INT; 
SELECT COUNT(m.tipo) INTO prata FROM medalha m WHERE aluno_id=p_aluno_id and m.tipo = 1;
RETURN prata;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `dt_nascimento` date NOT NULL,
  `responsavel` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `status` int(11) NOT NULL,
  `turma_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `turma_id` (`turma_id`),
  KEY `usuario_id_aluno` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `dt_nascimento`, `responsavel`, `status`, `turma_id`, `usuario_id`) VALUES
(1, 'Joao12', '2003-02-02', 'Resp', 1, 2, 1),
(3, 'Fellipe', '2002-03-02', 'Resp', 1, 2, 3),
(30, 'Joaos', '2002-03-08', 'Resp', 1, 1, 137),
(31, 'Joaozinhos', '2002-03-08', 'Resp', 1, 1, 30),
(32, 'Joao', '2002-03-08', 'Resp', 1, 1, 31),
(33, 'Malena', '2002-03-08', 'Resp', 1, 1, 32),
(34, 'Joana', '2002-03-08', 'Resp', 1, 1, 33),
(35, 'Guedes', '2002-03-08', 'Resp', 1, 1, 34),
(36, 'Orfeu', '2002-03-08', 'Resp', 1, 1, 35),
(37, 'Enzo', '2002-03-08', 'Resp', 1, 1, 36),
(38, 'Valentina', '2002-03-08', 'Resp', 1, 2, 37),
(39, 'Maria', '2002-03-08', 'Resp', 1, 2, 38),
(40, 'Gerson', '2002-03-08', 'Resp', 1, 2, 39),
(41, 'Thiago', '2002-03-08', 'Resp', 1, 2, 40),
(42, 'John', '2002-03-08', 'Resp', 1, 2, 41),
(43, 'Katarina', '2002-03-08', 'Resp', 1, 2, 42),
(44, 'Laila', '2002-03-08', 'Resp', 1, 2, 43),
(45, 'Matheus', '2002-03-08', 'Resp', 1, 2, 44),
(51, 'Gabriel', '1212-12-12', 'Gabriel Costa', 1, 2, 45),
(70, 'jose', '2005-10-27', 'Resp', 0, 1, 125),
(75, 'Teste Aluno testado', '2001-05-12', 'Teste mae aluno', 1, 2, 136),
(81, 'gabruel ijihdfsdf', '2222-12-12', 'Joana', 1, 24, 139),
(82, 'Someone', '2002-02-12', 'Responsavel De alguem', 1, 20, 148),
(127, 'Juan', '2004-11-05', 'Resp', 1, 1, 26),
(128, 'Aluno Teste', '2019-11-15', 'Responsável Teste', 1, 26, 150);

-- --------------------------------------------------------

--
-- Table structure for table `atividade`
--

DROP TABLE IF EXISTS `atividade`;
CREATE TABLE IF NOT EXISTS `atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `descricao` text COLLATE latin1_general_ci NOT NULL,
  `arquivo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `imagem` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `professor_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `disciplina_id` (`disciplina_id`),
  KEY `professor_id` (`professor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `atividade`
--

INSERT INTO `atividade` (`id`, `nome`, `descricao`, `arquivo`, `imagem`, `professor_id`, `disciplina_id`) VALUES
(1, 'Soma ', 'Atividade para aprender a somar', '../atividades/matematica/somar', '../assets/images/soma.png', 1, 1),
(2, 'Estruturas de Controle', 'Atividade para aprender estruturas de Controle  ', '../atividades/logica/se', '../assets/images/algorithm.png', 1, 2),
(3, 'Multiplicação', 'Atividade para aprender a multiplicar os numeros', '../atividades/matematica/multiplicacao', '../assets/images/multi.png', 1, 1),
(4, 'Divisão', 'Divida dois numeros e imprima o resultado', '../atividades/matematica/divisao\r\n', '../assets/images/divisao.png', 1, 1),
(5, 'Contar', 'Esta atividade tem como objetivo te ensinar a contar de 1 até 5.', '../atividades/lacos/contar', '../assets/images/contar.png', 1, 3),
(6, 'Contar2', 'Esta atividade tem como objetivo te ensinar a contar de 5 até 1.', '../atividades/lacos/contar2', '../assets/images/contar.png', 1, 3),
(7, 'Repetir', 'Esta atividade tem como objetivo te ensinar escrever na tela \'Olá Mundo\' 3 Vezes.', '../atividades/lacos/repetir', '../assets/images/repetir.png', 1, 3),
(8, 'Estruturas de Controle 2', 'Atividade para aprender estruturas de Controle com o uso de se e senão.  ', '../atividades/logica/seSenao', '../assets/images/algorithm2.png', 1, 2),
(9, 'Par ou Ímpar Desafio', 'Esse desafio tem como objetivo ensinar a descobrir se um número é par ou ímpar', '../atividades/desafio/parImpar', '../assets/images/desafio.png', 1, 4),
(10, 'Teste', 'Atividade Para testes', '../atividades/testes/dev-teste', '../assets/images/desafio.png', 48, 5);

-- --------------------------------------------------------

--
-- Table structure for table `atividade_aluno`
--

DROP TABLE IF EXISTS `atividade_aluno`;
CREATE TABLE IF NOT EXISTS `atividade_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aluno_id` (`aluno_id`),
  KEY `atividade_id` (`atividade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `atividade_aluno`
--

INSERT INTO `atividade_aluno` (`id`, `status`, `data`, `aluno_id`, `atividade_id`) VALUES
(23, 'pendente', '2019-08-04 21:41:00', 1, 1),
(26, 'pendente', '2019-08-04 21:42:00', 1, 2),
(29, 'pendente', '2019-08-04 21:42:00', 1, 3),
(32, 'pendente', '2019-08-04 21:42:00', 1, 4),
(35, 'pendente', '2019-08-04 22:09:00', 3, 2),
(54, 'pendente', '2019-09-18 13:51:00', 30, 7),
(55, 'pendente', '2019-09-18 13:51:00', 31, 7),
(56, 'pendente', '2019-09-18 13:51:00', 32, 7),
(57, 'pendente', '2019-09-18 13:51:00', 33, 7),
(58, 'pendente', '2019-09-18 13:51:00', 34, 7),
(59, 'pendente', '2019-09-18 13:51:00', 35, 7),
(60, 'pendente', '2019-09-18 13:51:00', 36, 7),
(61, 'pendente', '2019-09-18 13:51:00', 37, 7),
(64, 'pendente', '2019-09-18 16:39:00', 30, 8),
(65, 'pendente', '2019-09-18 16:39:00', 31, 8),
(66, 'pendente', '2019-09-18 16:39:00', 32, 8),
(67, 'pendente', '2019-09-18 16:39:00', 33, 8),
(68, 'pendente', '2019-09-18 16:39:00', 34, 8),
(69, 'pendente', '2019-09-18 16:39:00', 35, 8),
(70, 'pendente', '2019-09-18 16:39:00', 36, 8),
(71, 'pendente', '2019-09-18 16:39:00', 37, 8),
(74, 'pendente', '2019-09-19 20:55:00', 30, 9),
(75, 'pendente', '2019-09-19 20:55:00', 31, 9),
(76, 'pendente', '2019-09-19 20:55:00', 32, 9),
(77, 'pendente', '2019-09-19 20:55:00', 33, 9),
(78, 'pendente', '2019-09-19 20:55:00', 34, 9),
(79, 'pendente', '2019-09-19 20:55:00', 35, 9),
(80, 'pendente', '2019-09-19 20:55:00', 36, 9),
(81, 'pendente', '2019-09-19 20:55:00', 37, 9),
(82, 'pendente', '2019-09-23 12:15:00', 1, 5),
(83, 'Corrigida - Com nota', '2019-09-23 12:15:00', 3, 5),
(94, 'pendente', '2019-10-28 08:05:00', 1, 9),
(95, 'pendente', '2019-10-28 08:05:00', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `atividade_turma`
--

DROP TABLE IF EXISTS `atividade_turma`;
CREATE TABLE IF NOT EXISTS `atividade_turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `atividade_id` int(11) NOT NULL,
  `turma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `atividade_id` (`atividade_id`),
  KEY `turma_id` (`turma_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `atividade_turma`
--

INSERT INTO `atividade_turma` (`id`, `atividade_id`, `turma_id`) VALUES
(33, 1, 1),
(34, 2, 1),
(35, 3, 1),
(36, 4, 1),
(37, 2, 2),
(38, 5, 1),
(39, 6, 1),
(40, 7, 1),
(41, 8, 1),
(42, 9, 1),
(43, 5, 2),
(44, 8, 20),
(45, 1, 19),
(46, 2, 19),
(47, 1, 24),
(48, 3, 19),
(49, 9, 24),
(50, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `aula`
--

DROP TABLE IF EXISTS `aula`;
CREATE TABLE IF NOT EXISTS `aula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `data` date NOT NULL,
  `professor_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `disciplina_id` (`disciplina_id`),
  KEY `professor_id` (`professor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `aula`
--

INSERT INTO `aula` (`id`, `titulo`, `data`, `professor_id`, `disciplina_id`) VALUES
(6, 'Lógica Aplicada', '2019-10-31', 47, 4),
(7, 'Aula de lógica com loops', '2019-10-31', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `escola_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `escola_id` (`escola_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `curso`
--

INSERT INTO `curso` (`id`, `nome`, `escola_id`) VALUES
(1, 'Matemática', 1),
(2, 'Lógica', 1),
(3, 'Laços', 1),
(4, 'Desafio', 1),
(5, 'teste', 4);

-- --------------------------------------------------------

--
-- Table structure for table `disciplina`
--

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `sigla` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `curso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curso_id` (`curso_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `disciplina`
--

INSERT INTO `disciplina` (`id`, `nome`, `sigla`, `curso_id`) VALUES
(1, 'Matemática', 'MAT', 1),
(2, 'Lógica', 'LOG', 2),
(3, 'Laços', 'Laços', 3),
(4, 'Desafio', 'Des', 4),
(5, 'teste', 'teste', 5);

-- --------------------------------------------------------

--
-- Table structure for table `disciplina_professor`
--

DROP TABLE IF EXISTS `disciplina_professor`;
CREATE TABLE IF NOT EXISTS `disciplina_professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disciplina_id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `disciplina_id` (`disciplina_id`),
  KEY `professor_id` (`professor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disciplina_turma`
--

DROP TABLE IF EXISTS `disciplina_turma`;
CREATE TABLE IF NOT EXISTS `disciplina_turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disciplina_id` int(11) NOT NULL,
  `turma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `disciplina_id` (`disciplina_id`),
  KEY `turma_id` (`turma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `escola`
--

DROP TABLE IF EXISTS `escola`;
CREATE TABLE IF NOT EXISTS `escola` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `cnpj` int(11) NOT NULL,
  `endereco` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `escola`
--

INSERT INTO `escola` (`id`, `nome`, `cnpj`, `endereco`, `status`, `usuario_id`) VALUES
(1, 'Santa Maria', 123321, 'Cidade Novas', 1, 28),
(2, 'Nossa senhora das dores', 123, 'floresta', 1, 3),
(3, 'escola teste', 1221212, '11212', 1, 2),
(4, 'teste', 0, 'teste', 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `medalha`
--

DROP TABLE IF EXISTS `medalha`;
CREATE TABLE IF NOT EXISTS `medalha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_medalha` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aluno_id` (`aluno_id`),
  KEY `atividade_id` (`atividade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `medalha`
--

INSERT INTO `medalha` (`id`, `nome_medalha`, `tipo`, `peso`, `aluno_id`, `atividade_id`) VALUES
(1, 'Ouro', 2, 3, 128, 10);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

DROP TABLE IF EXISTS `nota`;
CREATE TABLE IF NOT EXISTS `nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor_atividade` double NOT NULL,
  `nota` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aluno_id` (`aluno_id`),
  KEY `atividade_id` (`atividade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id`, `valor_atividade`, `nota`, `aluno_id`, `atividade_id`) VALUES
(9, 10, 5, 3, 2),
(10, 10, 7, 3, 1),
(12, 10, 1, 1, 1),
(48, 10, 7, 30, 1),
(49, 10, 3, 31, 1),
(50, 10, 10, 32, 1),
(51, 10, 1, 33, 1),
(52, 10, 8, 34, 1),
(53, 10, 9, 35, 1),
(54, 10, 3, 36, 1),
(55, 10, 10, 37, 1),
(117, 10, 10, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `notificacao`
--

DROP TABLE IF EXISTS `notificacao`;
CREATE TABLE IF NOT EXISTS `notificacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `id_enviou` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aluno_id` (`aluno_id`),
  KEY `id_enviou` (`id_enviou`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notificacao`
--

INSERT INTO `notificacao` (`id`, `descricao`, `aluno_id`, `data`, `id_enviou`) VALUES
(117, ' Sejam todos muito bem-vindos ao EasyLearning! Juntos mudaremos a forma de se educar no mundo!', 1, '2019-10-27', 48),
(119, ' Sejam todos muito bem-vindos ao EasyLearning! Juntos mudaremos a forma de se educar no mundo!', 3, '2019-10-27', 48),
(121, ' Sejam todos muito bem-vindos ao EasyLearning! Juntos mudaremos a forma de se educar no mundo!', 30, '2019-10-27', 48),
(122, ' Sejam todos muito bem-vindos ao EasyLearning! Juntos mudaremos a forma de se educar no mundo!', 31, '2019-10-27', 48),
(123, ' Sejam todos muito bem-vindos ao EasyLearning! Juntos mudaremos a forma de se educar no mundo!', 32, '2019-10-27', 48),
(124, ' Sejam todos muito bem-vindos ao EasyLearning! Juntos mudaremos a forma de se educar no mundo!', 33, '2019-10-27', 48),
(125, ' Sejam todos muito bem-vindos ao EasyLearning! Juntos mudaremos a forma de se educar no mundo!', 34, '2019-10-27', 48),
(126, ' Sejam todos muito bem-vindos ao EasyLearning! Juntos mudaremos a forma de se educar no mundo!', 35, '2019-10-27', 48),
(127, ' Sejam todos muito bem-vindos ao EasyLearning! Juntos mudaremos a forma de se educar no mundo!', 36, '2019-10-27', 48),
(128, ' Sejam todos muito bem-vindos ao EasyLearning! Juntos mudaremos a forma de se educar no mundo!', 37, '2019-10-27', 48),
(145, ' Fellipe, você é demais meu amigo! Merece uma batata.', 3, '2019-10-28', 48);

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `escola_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `escola_id_Professor` (`escola_id`),
  KEY `usuario_id_professor` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`id`, `nome`, `status`, `escola_id`, `usuario_id`) VALUES
(1, 'Professor Nome', 1, 1, 4),
(2, 'Professor Fellipis', 1, 1, 3),
(13, 'Gabriel', 1, 2, 2),
(24, 'Gabriel', 1, 3, 134),
(32, 'Orfeu', 1, 2, 35),
(34, 'Gabriel', 1, 2, 124),
(35, 'Jose Teste', 1, 3, 118),
(36, 'juan', 1, 1, 37),
(38, 'Furts', 1, 3, 26),
(40, 'Gabriel', 1, 2, 32),
(41, 'juan', 1, 1, 8),
(42, 'Gabriel', 1, 2, 137),
(44, 'Jorgetest', 1, 2, 4),
(45, 'Orfeu', 1, 1, 43),
(47, 'Carlinhos', 1, 2, 37),
(48, 'Professor Teste', 1, 4, 151);

-- --------------------------------------------------------

--
-- Table structure for table `quero_conhecer`
--

DROP TABLE IF EXISTS `quero_conhecer`;
CREATE TABLE IF NOT EXISTS `quero_conhecer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `notificacoes` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quero_conhecer`
--

INSERT INTO `quero_conhecer` (`id`, `nome`, `email`, `mensagem`, `notificacoes`) VALUES
(1, 'Joaquina', 'Email@email.com', 'Adorei o site de vocês, quero conhecer como funciona essa parada!', 'sim'),
(2, 'Irmã da Joaquina', 'Email@email.com', 'Não gostei dessa parada.', 'não'),
(3, 'Meu nome', 'meu@email.com', 'minha mensagem', 'sim'),
(4, 'a', 'Email@email.com', 'a', 'sim'),
(5, 'a', 'maria@silva.com', 'a', 'não'),
(6, 'juan', 'asd@asd', 'adfsdfad', 'não'),
(7, 'ALGUEM', 'fhsdkfjs@dfsjkd.com', 'ASDAS', 'sim'),
(8, 'juan', 'juan@gmail.com', 'Adorei o site', 'sim'),
(9, 'juan', 'juan@juan.juan', 'bom dia', 'sim');

-- --------------------------------------------------------

--
-- Table structure for table `ranking_geral`
--

DROP TABLE IF EXISTS `ranking_geral`;
CREATE TABLE IF NOT EXISTS `ranking_geral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `bronze` int(11) DEFAULT NULL,
  `prata` int(11) DEFAULT NULL,
  `ouro` int(11) DEFAULT NULL,
  `pontos` bigint(14) DEFAULT NULL,
  `aluno_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aluno_id` (`aluno_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `turma`
--

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_turma` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `status` int(11) DEFAULT '1',
  `escola_id_turma` int(11) NOT NULL,
  `professor_id_turma` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `escola_id_turma` (`escola_id_turma`),
  KEY `professor_id_turma` (`professor_id_turma`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `turma`
--

INSERT INTO `turma` (`id`, `nome_turma`, `status`, `escola_id_turma`, `professor_id_turma`) VALUES
(1, '7 ano 102 ', 1, 1, 1),
(2, '8 ano 304', 1, 1, 1),
(19, '6 ano 305', 1, 1, 1),
(20, '5 ano 101', 1, 1, 1),
(24, '9 ano 470', 0, 2, 13),
(25, 'Turma Exelente Boa', 1, 1, 38),
(26, 'Turma Teste', 1, 4, 48);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `foto` varchar(45) DEFAULT '1.png',
  `tipo` int(11) DEFAULT '0',
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `login`, `senha`, `foto`, `tipo`, `status`) VALUES
(1, 'rafael', 'rafaellercmr@gmail.com', 'rafael', '4297f44b13955235245b2497399d7a93', '1.png', 2, 1),
(2, 'Gabriel', 'gabrielbiel120501@gmail.com', 'Lage1205', 'b571ecea16a9824023ee1af16897a582', '1.png', 2, 0),
(3, 'FellipeBS', 'fellipebarcelossaraiva@gmail.com', 'FellipeBS', '58477a3f90f97f6fe1914de0275846da', '2.png', 0, 1),
(4, 'professor', 'teacher@professor', 'pro', '202cb962ac59075b964b07152d234b70', '1.png', 1, 1),
(8, 'JoaoZim', 'JoaoZim@JoaoZim.com', 'JoaoZim', '202cb962ac59075b964b07152d234b70', '1.png', 1, 1),
(26, 'juan', 'asd@asd', 'juan', '81dc9bdb52d04dc20036dbd8313ed055', '4.png', 0, 1),
(28, 'Cordenadora Lara', 'lara@lara.com', 'lara', '202cb962ac59075b964b07152d234b70', 'usu.png', 2, 1),
(29, 'Joao', 'jaoa@joao.com', 'jao1', '202cb962ac59075b964b07152d234b70', '1.png', 0, 1),
(30, 'Joao2', 'jaoa@joao.com', 'jao2', '202cb962ac59075b964b07152d234b70', '1.png', 0, 1),
(31, 'Joao3', 'jaoa@joao.com', 'jao3', '202cb962ac59075b964b07152d234b70', '1.png', 0, 1),
(32, 'Malena', 'malena@malena.com', 'maleninha', '202cb962ac59075b964b07152d234b70', '1.png', 1, 1),
(33, 'Joana', 'Joana@joana.com', 'joana', '202cb962ac59075b964b07152d234b70', '1.png', 0, 1),
(34, 'Guedes', 'guedes@guedes.com', 'guedes', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(35, 'Orfeu', 'orfeu@orfeu.com', 'orfeu', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(36, 'Enzo', 'enzo@enzo.com', 'enzo', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(37, 'valentina', 'valentina@valentina.com', 'valentina', '202cb962ac59075b964b07152d234b70', '1.png', 1, 1),
(38, 'maria das graças', 'maria@maria.com', 'Marias', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(39, 'Gerson', 'gerson@gerson.com', 'Gerson', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(40, 'Thiago', 'Thiago@thiago.com', 'thiago', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(41, 'John', 'John@John.com', 'John', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(42, 'Katarina', 'katarina@katarina.com', 'katarina', '202cb962ac59075b964b07152d234b70', '1.png', 1, 1),
(43, 'laila', 'laila@laila.com', 'laila', '202cb962ac59075b964b07152d234b70', '1.png', 1, 1),
(44, 'matheus', 'matheus@matheus.com', '', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(45, 'Jubileu teste prof', 'teste@teste.com', 'teste Jubi', '123', '1.png', 0, 0),
(60, 'Teste1.0', 'teste200@gmail.com', 'teste200', '202cb962ac59075b964b07152d234b70', '1.png', 0, 1),
(118, 'Alexandre', 'alexandref@cotemig.com.br', 'alef', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(120, 'ddddd', 'ddddd@kk.com', 'dddd', 'a0a080f42e6f13b3a2df133f073095dd', '1.png', 0, 0),
(121, 'adasdasd', 'adasddadas@ll.com', 'ggg12', '11ddbaf3386aea1f2974eee984542152', '1.png', 0, 0),
(122, 'dddd22', 'ddd@ddddd.com', 'dd3', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(124, 'yyyyyy', 'yyyyyy@kkkk.com', 'kkkkk12', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(125, 'Teste teste testee', 'testetestetese44@jj.com', 'testeteetete12', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(128, 'juan', '123', 'jorge', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(134, 'hhhhhh', 'hhh@hh.com', 'kkkkk1', '202cb962ac59075b964b07152d234b70', '1.png', 0, 1),
(136, 'Teste status', 'status12@h.com', 'status', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(137, 'juan', 'asd@asd', '123', '202cb962ac59075b964b07152d234b70', '1.png', 1, 1),
(139, 'Gabriel teste testado', 'testetestadogabrie@gmail.com', 'Tetegghtt12', '202cb962ac59075b964b07152d234b70', '1.png', 0, 1),
(140, 'Teste gabriel tesatdoff', 'testetestetestetesteee@gmail.com', 'jjjjjhyggtfcv12', '202cb962ac59075b964b07152d234b70', '1.png', 2, 0),
(142, 'Teste para Professor', 'tetsepref@çç.com', 'teste para prof', '202cb962ac59075b964b07152d234b70', '1.png', 1, 1),
(144, 'GabrielLCC', 'gabrielbiel120501@gmail.com.br', 'LCC', '202cb962ac59075b964b07152d234b70', '1.png', 0, 0),
(145, '1234', '21@aluno.cotemig.com.br', '1234', '81dc9bdb52d04dc20036dbd8313ed055', '1.png', 1, 1),
(146, '12431432', '12341243', '12341234', '9fc700c93f7e38f2300590186b6c7a16', '1.png', 0, 0),
(147, 'asdfasdf', 'asdfasdf', 'asdfasdf', 'a2d01392363505e8956fad9144272bb4', '1.png', 2, 0),
(148, 'Bobao', 'email@bobao.com', 'bobao', '202cb962ac59075b964b07152d234b70', 'default.png', 0, 1),
(149, 'pedro', 'pedro@aluno.com', 'pedro', '202cb962ac59075b964b07152d234b70', 'default.png', 0, 0),
(150, 'teste', 'teste@teste', 'teste', '202cb962ac59075b964b07152d234b70', '1.png', 0, 1),
(151, 'professor teste', 'professor@teste', 'professor teste', '202cb962ac59075b964b07152d234b70', '1.png', 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`),
  ADD CONSTRAINT `aluno_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `atividade`
--
ALTER TABLE `atividade`
  ADD CONSTRAINT `atividade_ibfk_1` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `atividade_ibfk_2` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`id`);

--
-- Constraints for table `atividade_aluno`
--
ALTER TABLE `atividade_aluno`
  ADD CONSTRAINT `atividade_aluno_ibfk_1` FOREIGN KEY (`aluno_id`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `atividade_aluno_ibfk_2` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`);

--
-- Constraints for table `atividade_turma`
--
ALTER TABLE `atividade_turma`
  ADD CONSTRAINT `atividade_turma_ibfk_1` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`),
  ADD CONSTRAINT `atividade_turma_ibfk_2` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`);

--
-- Constraints for table `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `aula_ibfk_1` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `aula_ibfk_2` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`id`);

--
-- Constraints for table `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`escola_id`) REFERENCES `escola` (`id`);

--
-- Constraints for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `disciplina_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`);

--
-- Constraints for table `disciplina_professor`
--
ALTER TABLE `disciplina_professor`
  ADD CONSTRAINT `disciplina_professor_ibfk_1` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `disciplina_professor_ibfk_2` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`id`);

--
-- Constraints for table `disciplina_turma`
--
ALTER TABLE `disciplina_turma`
  ADD CONSTRAINT `disciplina_turma_ibfk_1` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `disciplina_turma_ibfk_2` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`);

--
-- Constraints for table `escola`
--
ALTER TABLE `escola`
  ADD CONSTRAINT `escola_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `medalha`
--
ALTER TABLE `medalha`
  ADD CONSTRAINT `medalha_ibfk_1` FOREIGN KEY (`aluno_id`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `medalha_ibfk_2` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`);

--
-- Constraints for table `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`aluno_id`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`);

--
-- Constraints for table `notificacao`
--
ALTER TABLE `notificacao`
  ADD CONSTRAINT `notificacao_ibfk_1` FOREIGN KEY (`aluno_id`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `notificacao_ibfk_2` FOREIGN KEY (`id_enviou`) REFERENCES `professor` (`id`);

--
-- Constraints for table `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`escola_id`) REFERENCES `escola` (`id`),
  ADD CONSTRAINT `professor_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `ranking_geral`
--
ALTER TABLE `ranking_geral`
  ADD CONSTRAINT `ranking_geral_ibfk_1` FOREIGN KEY (`aluno_id`) REFERENCES `aluno` (`id`);

--
-- Constraints for table `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`escola_id_turma`) REFERENCES `escola` (`id`),
  ADD CONSTRAINT `turma_ibfk_2` FOREIGN KEY (`professor_id_turma`) REFERENCES `professor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Out-2018 às 00:58
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_mvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

CREATE TABLE `registros` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `callType` varchar(50) NOT NULL,
  `problem` longtext NOT NULL,
  `client` varchar(50) NOT NULL,
  `soluction` longtext NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`id`, `id_user`, `callType`, `problem`, `client`, `soluction`, `nome`, `email`) VALUES
(17, 6, 'Problema no firewall', 'O aparelho apresentava problemas no hardware', 'Vivendas', 'Trocar o aparelho', NULL, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `pass` varchar(255) NOT NULL DEFAULT '',
  `loginhash` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `loginhash`) VALUES
(5, 'caio', '$2y$10$DeO2B4TBzs2COFvNBjAFYefZDOycO688/ngNsUuo0alzG3YvYTBXi', 'dc25e90daba89eaa93c3255467a12343'),
(6, 'Usuario', '$2y$10$AK5X5u4Lgrzrr4HVNpQG7OPRykmI2o2abozkyqq4iod2K6boAbLM2', '36159f2d6963a8922806cff4fd0e1523'),
(7, 'fjyfcvjyft', '$2y$10$3ciyK.S30EHr21wW30f1/uaHD6RWpYXgT3z9AZRPMsaXHkgjnFhzq', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

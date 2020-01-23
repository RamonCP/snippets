-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2018 às 16:37
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste-pdo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

CREATE TABLE `carro` (
  `id_carro` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image_car` text COLLATE utf8_unicode_ci NOT NULL,
  `image_current` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `carro`
--

INSERT INTO `carro` (`id_carro`, `nome`, `marca`, `modelo`, `image_car`, `image_current`, `created_at`) VALUES
(51, 'Fusca', 'Volkswagen', 'AZULÃƒO', '5625_2.jpg', '5625_2.jpg', '2018-10-14 23:57:27'),
(70, 'Camaro', 'Chevrolet', 'Transformers', '1200px-2018_Chevrolet_Camaro_RS_coupe_front_5.31.18.jpg', '1200px-2018_Chevrolet_Camaro_RS_coupe_front_5.31.18.jpg', '2018-10-21 13:40:11'),
(71, 'Bugatti', 'Bugatti', 'Veyron', 'FM7_Bugatti_Veyron_Front.jpg', 'FM7_Bugatti_Veyron_Front.jpg', '2018-10-21 13:40:26'),
(72, 'Hudson Hornet', 'Hudson Motor Car Company', '1950', 'Hudson_Hornet,_1951_-_Flickr_-_granada_turnier.jpg', 'Hudson_Hornet,_1951_-_Flickr_-_granada_turnier.jpg', '2018-10-21 13:40:43'),
(74, 'BMW', 'BMW', 'i8', '2016-bmw-i8-test-review-car-and-driver-photo-670463-s-original.jpg', '2016-bmw-i8-test-review-car-and-driver-photo-670463-s-original.jpg', '2018-10-21 20:57:37'),
(75, 'Mustang', 'Mustang', 'Shelby GT-500', '5445428_01472_1968-ford-mustang-shelby_001.jpg', '5445428_01472_1968-ford-mustang-shelby_001.jpg', '2018-10-21 20:58:18'),
(76, 'Enzo', 'Ferrari', 'FXX', 'poster_25676.jpg', 'poster_25676.jpg', '2018-10-21 20:58:36'),
(77, 'Opala', 'Chevrolet', 'SS', 'chevrolet_opala_1975_gasolina_opala_ss_1976_de_colecionador_o_melhor_do_brasil_1150011520866089775.jpg', 'chevrolet_opala_1975_gasolina_opala_ss_1976_de_colecionador_o_melhor_do_brasil_1150011520866089775.jpg', '2018-11-02 22:26:43'),
(78, 'Impala', 'Chevrolet', 'SS 67', '304bbd20f34c74480c6f657649a0e3f7.jpg', '304bbd20f34c74480c6f657649a0e3f7.jpg', '2018-11-02 22:31:29'),
(79, 'Delorean', 'DMC', 'DMC - 1980', '000000delorean-10.jpg', '000000delorean-10.jpg', '2018-11-02 22:32:43'),
(80, 'Lamborghini', 'Lamborghini', 'Gallardo', '2010_Lamborghini_Gallardo_(L140)_LP550-2_coupe_(2016-01-05)_01.jpg', '2010_Lamborghini_Gallardo_(L140)_LP550-2_coupe_(2016-01-05)_01.jpg', '2018-11-02 22:33:23'),
(81, 'Tucson', 'Hyundai', 'New', 'mcam4050.jpg', 'mcam4050.jpg', '2018-11-02 22:35:24'),
(82, 'Dodge Ram', 'Dodge', 'Ram', 'dodge-ram-2016-laramie-unico-dono-D_NQ_NP_603700-MLB27658412583_062018-F.jpg', 'dodge-ram-2016-laramie-unico-dono-D_NQ_NP_603700-MLB27658412583_062018-F.jpg', '2018-11-02 22:37:49'),
(83, 'Dodge Viper', 'Dodge', 'Viper', 'viper-sundown.jpg.image.1440.jpg', 'viper-sundown.jpg.image.1440.jpg', '2018-11-02 22:38:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `senha`, `created_at`) VALUES
(1, 'ramon', 'ramon@gmail.com', '123456', '2018-10-20 20:15:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id_carro`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carro`
--
ALTER TABLE `carro`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

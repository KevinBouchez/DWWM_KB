-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 13, 2022 at 03:39 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `UG-Site`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img`, `txt`, `date`) VALUES
(17, '1664457396ecopkday.jpeg', 'Evénement Eco Pakour Day', '2022-10-03'),
(18, '16656680311664457466bte.jpeg', 'Evénement Born To Be Alive', '2022-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `price`, `name`) VALUES
(1, 't-shirt.png', 20, 'T-Shirt Urban Gravity 2022'),
(2, 'bracelet.jpeg', 1, 'Bracelet Urban Gravity 2022');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `code_user` int(11) NOT NULL,
  `nom_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addresseL_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addresseF_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`code_user`, `nom_user`, `prenom_user`, `pseudo_user`, `password`, `email_user`, `age_user`, `sexe_user`, `telephone_user`, `addresseL_user`, `addresseF_user`) VALUES
(4, 'Ingelaere', 'Thomas', 'Perzy', '$2y$10$JVGnfE6PgtCP00.PbO00HOeoVomt4L/L4nBj46k8e0mdq.x1ziFEC', 'Thomas@gmail.com', '28', 'Homme', '0658585858', '2 rue dunkerque', '5 rue joseph'),
(11, 'Bouchez', 'Kevin', 'Pouap', '$2y$10$BtyApzZrRz/GY.lpz686S.U2eFAHLLWy0kzr9Vp9AZuFfWEwExUfi', 'kevin.bouchez.pro@gmail.com', '28', 'Mr', '0648469410', '11 rue mars', '11 rue mars'),
(12, 'Boubou', 'Keke', 'Popo', '$2y$10$.S3hHg/pDyibYo4g0hLoZei/XSN3ousHaQ2AD5Z0aGf.5hympgvKe', 'popo@gmail.com', '12', 'Mme', '0440044004', '11 rueie', '23 rue jan'),
(13, 'Urban', 'Gravity', 'UG-Admin', '$2y$10$6/dg4j5aNZejOA0fO8gWlOL2TbcIA/oeHr2hR/Dbt0Gj1V7IjIr0a', 'urban-gravity@gmail.com', '999', 'Ne se prononce pas', '0675874347', '1 rue jean bart', '59140 Dunkerque'),
(14, 'Masset', 'Kimberley', 'Loupah', '$2y$10$v9gWhJtITUOUBp7hJJO/luZ/bqpQtYhOvVIpNJJwup9wRZqqpiYiy', 'oierhfoiezf@gmail.com', '26', 'Mme', '0782023734', '11 rue mars', '12 rue con');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`code_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `code_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

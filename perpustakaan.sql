-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 03:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpaw`
--

CREATE TABLE `adminpaw` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpaw`
--

INSERT INTO `adminpaw` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Admin PAW PERPUS', 'adminpawperpus@gmail.com', 'adminpaw');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `nama_pengarang` varchar(255) NOT NULL,
  `nama_penerbit` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `nama_pengarang`, `nama_penerbit`, `image`) VALUES
(2, 'judul kedua', 'pengarang kedua', 'penerbit kedua', ''),
(3, 'judul pertama', 'pengarang pertama', 'penerbit pertama', ''),
(4, 'LUIS', 'BACRA', 'COPY', ''),
(6, 'Demons and Tales ', 'tito', 'Sinar mas', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `verif_code` text NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `verif_code`, `is_verified`) VALUES
(31, 'paw', 'pawperpus@gmail.com', '$2y$10$RcIa8pARE3YaoQSz7g2TweFUs/uSgknSk0RhjN.n2V8XRc28r6gFy', '11bca93ba7677c7a14bfc650ee1e5d49', 1),
(33, 'yoga', 'yogajesaytarigan@gmail.com', '$2y$10$mCnqqu4zV6dWLfoyV9UUTuR2IU5X0VablB9H5AlrwcsZMWKuBbrg.', '89a1da8a60fa2543eb8c5f8c49ce35ed', 1),
(36, 'yoga1', 'yogajesaytrgn@gmail.com', '$2y$10$a7WuiFdRgXpq5DYVBGpkfusOv/pOhFKLlZWfRmPKjTWMmSy5PmRNK', '2e68db54b4f6c5cc80921ab1da2c0bf5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpaw`
--
ALTER TABLE `adminpaw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
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
-- AUTO_INCREMENT for table `adminpaw`
--
ALTER TABLE `adminpaw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

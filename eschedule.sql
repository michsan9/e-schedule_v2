-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 10:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eschedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_shift` int(11) NOT NULL,
  `tgl_jadwal` varchar(254) NOT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_user`, `id_shift`, `tgl_jadwal`, `created_date`, `updated_at`) VALUES
(1, 1, 1, '2023-02-17', '2023-02-17 02:10:47', '2023-02-17 02:10:47'),
(2, 1, 1, '2023-02-10', '2023-02-10 10:40:25', '2023-02-10 10:40:25'),
(3, 6, 2, '2023-02-04', '2023-02-04 08:29:20', '2023-02-04 08:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `shf_id` int(11) NOT NULL,
  `shf_deskripsi` varchar(255) NOT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `jam` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`shf_id`, `shf_deskripsi`, `pesan`, `jam`, `created_at`, `updated_at`) VALUES
(1, 'Shift Satu', 'Tes', NULL, '2023-02-02', '0000-00-00'),
(2, 'Shift 2', 'shift2', NULL, '0000-00-00', '2023-02-17'),
(0, 'Shift 3', 'Hello', NULL, '2023-02-13', '0000-00-00'),
(0, 'SHIFT 4', 'PULANG', NULL, '2023-02-13', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL,
  `usr_username` varchar(100) NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `usr_nama` varchar(255) NOT NULL,
  `usr_level` enum('Admin','User') NOT NULL,
  `chat_id` int(11) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `usr_username`, `usr_password`, `usr_nama`, `usr_level`, `chat_id`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$Eps1ykjBvm3Ww20uQBgVLeEgzcVz4AXktniYaVlyXJ7oW1pyBmOOa', 'Jimmy Arianda Bahari', 'Admin', 550996783, 'Store', '2022-12-23', '2023-02-02'),
(6, 'iksan', '$2y$10$cWErT5khQN4VL1BFhImHpe6RuEAW0.lzgkps93ztFyiKeXH.ZVACm', 'Ikhsan IT', 'Admin', 550996783, 'Store', '2023-01-27', '2023-01-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

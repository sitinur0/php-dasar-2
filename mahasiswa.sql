-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 06:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `program_study`
--

CREATE TABLE `program_study` (
  `no` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_study`
--

INSERT INTO `program_study` (`no`, `name`) VALUES
(1, 'Kontruksi Bangunan'),
(2, 'Rekam Medik dan Informasi Kesehatan'),
(3, 'Teknik Komputer'),
(4, 'Teknik Informatika'),
(4, 'Mesin Otomotif'),
(5, 'Mekanik Industri Dan Desain'),
(6, 'Akuntansi'),
(7, 'Teknik Mesin'),
(8, 'Teknik Elektronika'),
(9, 'Teknik Kimia'),
(10, 'Komputerisasi Akuntansi'),
(11, 'Teknik Otomasi');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`nim`, `nama`, `id`) VALUES
('D212111001', 'Aliftia Radianti Taniasari', 10),
('D212111002', 'Cahya Julianti', 10),
('D212111003', 'Dasimah Seftiani', 10),
('D212111004', 'Desi Syifa Fitria', 10),
('D212111005', 'Dewi Yulianti', 10),
('D212111006', 'Gita Septiani', 10),
('D212111007', 'Ikhlas Wandana', 10),
('D212111008', 'Intan Khoirunnisa', 10),
('D212111009', 'Islah Nurhasanah', 10),
('D212111010', 'Kenia Nurazizah', 10),
('D212111011', 'M Rivaldi Hafizd Fathurohman', 10),
('D212111012', 'Puspa Dewi Kusumawati', 10),
('D212111013', 'Renaldi Irawan', 10),
('D212111014', 'Rizaldy Muhamad Sopyan', 10),
('D212111015', 'Rudi Loilatu', 10),
('D212111016', 'Seli Pebriani', 10),
('D212111017', 'Sephia Sumi Jaya Tiningrum', 10),
('D212111018', 'Siti Aminah', 10),
('D212111019', 'Siti Rismawati', 10),
('D212111020', 'Sophia Nurhafshoh Koenady', 10),
('D212111021', 'Triana Siti Aryani', 10),
('D212111022', 'Yunita Riani', 10),
('D212111023', 'Ajeng Aprilyani', 10),
('D212111025', 'Aspiya Huwaida', 10),
('D212111026', 'Aura Maliya', 10),
('D212111028', 'Fanisa Tri Agna Fata', 10),
('D212111029', 'Ineu Rahmawati', 10),
('D212111030', 'Muhammad Reza Andriansyah', 10),
('D212111031', 'Siti Nur Rohimah', 10),
('D212111032', 'Wawan Jefriansyah', 10),
('D212111033', 'Novita Qadariah', 10),
('D212111034', 'Rahmatia', 10),
('D212111035', 'Zaltin', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

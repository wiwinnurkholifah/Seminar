-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 05:44 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sips`
--

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) CHARACTER SET utf8 NOT NULL,
  `jenis_kelamin` varchar(128) CHARACTER SET utf8 NOT NULL,
  `instansi` varchar(128) CHARACTER SET utf8 NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `nama`, `jenis_kelamin`, `instansi`, `no_hp`, `email`) VALUES
(1, 'wiwin nk', 'Perempuan', 'mahasiswa', 85858585, 'wiwin@gmail.com'),
(2, 'aca', 'Laki- Laki ', 'phb', 2147483647, 'aca@gmail.com'),
(3, 'chiko', 'Laki- Laki ', 'karyawan swasta', 88888236, 'chikomar@gmail.com'),
(4, 'fahmi semilikity', 'Laki- Laki ', 'pelajar', 885423142, 'fahmi@gmail.com'),
(5, 'anggun', 'Laki- Laki ', 'mahasiswa', 80808, 'anggun@gmail.com'),
(6, 'ayu', 'Perempuan', 'mahasiswa', 885423142, 'ayu@gmail.com'),
(7, 'zzz', 'Laki- Laki ', 'mahasiswa', 8080880, 'zzzz@gmail.com'),
(8, 'wincik', 'Perempuan', 'mahasiswa', 885423142, 'zzzz@gmail.com'),
(9, 'wincik', 'Perempuan', 'karyawan swasta', 885423142, 'chikomar@gmail.com'),
(10, 'anggo suronggo', 'Laki- Laki ', 'mahasiswa', 876577464, 'zzzz@gmail.com'),
(11, 'AYUU', 'Perempuan', 'mahasiswa', 885423142, 'anggun@gmail.com'),
(12, 'fahmy', 'Laki- Laki ', 'pelajar', 885423142, 'fahhmi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

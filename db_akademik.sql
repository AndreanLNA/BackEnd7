-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 08:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `IdMhsw` int(11) NOT NULL,
  `Nama` varchar(150) DEFAULT NULL,
  `JenisKelamin` varchar(20) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `Agama` varchar(30) DEFAULT NULL,
  `NoHp` varchar(15) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`IdMhsw`, `Nama`, `JenisKelamin`, `Alamat`, `Agama`, `NoHp`, `Email`) VALUES
(1, 'Anan', 'Laki-laki', 'JL Prambanan', 'Islam', '082289642275', 'Anan@gmail.com'),
(2, 'Budiyamat', 'Perempuan', 'JL Mangga', 'Islam', '09826734077', 'budiya@budi'),
(3, 'Bambang', 'Laki-laki', '<p><em><strong>jl.Durian</strong></em></p>', 'Protestan', '081993335310', 'Bambangtamvan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_lhr` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `ststus` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `alamat`, `email`, `password`, `tgl_lhr`, `agama`, `gender`, `ststus`, `foto`) VALUES
(22, 'Muhammad A', '<p>sd</p>', 'esd@fsaf', 'adasdas', '2021-11-25', 'Islam', 'Perempuan', 'lulus', 'coding3.png'),
(23, 'we', '<p>weewq</p>', 'wqe@asd', 'asd', '2021-11-12', 'Hindu', 'Perempuan', 'belum lulus', 'Deskripsi.png'),
(24, 'rey', '<p>eyr</p>', 'rye@dry', 'tey', '2021-11-09', 'Protestan', 'Perempuan', 'belum lulus', 'Hasil Iot7.png'),
(25, 'er', '<p>re</p>', 'ret@ert', 'ret', '2021-11-10', 'Islam', 'Perempuan', 'belum lulus', 'foto.jpg'),
(26, 'buaya', '<p>buaya</p>', 'buh@vhksa', 'oijas', '2021-11-10', 'Katolik', 'Laki-laki', 'KIP', 'Deskripsi.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`IdMhsw`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `IdMhsw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

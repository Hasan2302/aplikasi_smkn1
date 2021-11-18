-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 01:30 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk_indonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `level` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `level`, `nis`) VALUES
(1, 'siswa', '12345', 3, 's01'),
(2, 'guru', '12345', 2, 's02'),
(3, 'admin', '12345', 1, 's03'),
(4, 'hasan', '12345', 3, 's04'),
(11, 'prastyan', '12345', 3, 's05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kode_guru` varchar(11) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`kode_guru`, `nama_guru`, `jk`, `alamat`) VALUES
('G01', 'Khoerul', 'pria', 'jl. cimpaeun'),
('G02', 'Bpk. Margono', 'pria', 'jl. Mekar sari'),
('G03', 'ibu. rodiyah', 'wanita', 'jl. bogor raya'),
('G04', 'Sumiati', 'wanita', 'jl.raya depok'),
('G05', 'Junaedi', 'pria', 'jl. mawar 1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
('k01', 'Kelas 11 RPL 1'),
('k02', 'Kelas 11 TKR 1'),
('k03', 'Kelas 12 AK 1'),
('k04', 'Kelas 10 AK 1'),
('k05', 'Kelas 11 MM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id` int(11) NOT NULL,
  `nis_siswa` varchar(30) NOT NULL,
  `keterangan1` text NOT NULL,
  `waktu` datetime NOT NULL,
  `keterangan2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`id`, `nis_siswa`, `keterangan1`, `waktu`, `keterangan2`) VALUES
(1, 's07', 'tambah data', '2021-03-02 19:11:48', ''),
(4, 's07', 'hapus data', '2021-03-02 19:28:29', ''),
(5, 's06', 'ubah data lama', '2021-03-02 19:29:13', 'ke data baru');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`) VALUES
('m01', 'Simulasi Digital'),
('m02', 'Sistem Komputer'),
('m03', 'Basis Data'),
('m04', 'Bahasa Indonesia'),
('m05', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` varchar(10) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `id_mapel` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `id_prodi` varchar(10) NOT NULL,
  `nis_siswa` varchar(30) NOT NULL,
  `uh` double NOT NULL,
  `uts` double NOT NULL,
  `uas` double NOT NULL,
  `na` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `kode_guru`, `id_mapel`, `id_kelas`, `id_prodi`, `nis_siswa`, `uh`, `uts`, `uas`, `na`) VALUES
('n01', 'g01', 'm01', 'k01', 'p01', 's01', 80, 89, 87, 87.666666666667);

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` varchar(15) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `nama_prodi`) VALUES
('p01', 'RPL'),
('p02', 'MM'),
('p03', 'TKR'),
('p04', 'MM'),
('p05', 'AK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis_siswa` varchar(30) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `jk_siswa` varchar(10) NOT NULL,
  `alamat_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis_siswa`, `nama_siswa`, `jk_siswa`, `alamat_siswa`) VALUES
('s01', 'udin', 'pria', 'jl. raya cimpaeun'),
('s02', 'nudin', 'pria', 'jl. bogor'),
('s03', 'ridy', 'wanita', 'jl.cilangkap'),
('s04', 'hasan', 'pria', 'jl.rawa kebo'),
('s05', 'Prastyan', 'pria', 'jl.Citatah Dalam'),
('s06', 'rani', 'wanita', 'jl. raya jauh');

--
-- Triggers `tb_siswa`
--
DELIMITER $$
CREATE TRIGGER `tambah` AFTER INSERT ON `tb_siswa` FOR EACH ROW INSERT INTO tb_log VALUES (null, NEW.nis_siswa, 'tambah data',NOW(),'')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_delete_siswa` AFTER DELETE ON `tb_siswa` FOR EACH ROW INSERT INTO tb_log VALUES (null, old.nis_siswa, 'hapus data',NOW(),'')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_update_siswa` AFTER UPDATE ON `tb_siswa` FOR EACH ROW INSERT INTO tb_log VALUES (null, old.nis_siswa, 'ubah data lama',NOW(),'ke data baru')
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_guru` (`kode_guru`) USING BTREE,
  ADD KEY `id_mapel` (`id_mapel`) USING BTREE,
  ADD KEY `id_kelas` (`id_kelas`) USING BTREE,
  ADD KEY `id_prodi` (`id_prodi`) USING BTREE,
  ADD KEY `kode_guru` (`kode_guru`,`id_mapel`,`id_kelas`,`id_prodi`,`nis_siswa`) USING BTREE,
  ADD KEY `nis_siswa` (`nis_siswa`) USING BTREE;

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`nis_siswa`) REFERENCES `tb_siswa` (`nis_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_4` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

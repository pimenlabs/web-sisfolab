-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2013 at 10:47 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `db_siafikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(35) collate latin1_general_ci NOT NULL,
  `username` varchar(15) collate latin1_general_ci NOT NULL,
  `password` varchar(15) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama`, `username`, `password`) VALUES
('Indra Hedar', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `Nip` varchar(15) collate latin1_general_ci NOT NULL,
  `Nama` varchar(25) collate latin1_general_ci NOT NULL,
  `JK` enum('Laki-laki','Perempuan') collate latin1_general_ci NOT NULL,
  `Alamat` varchar(30) collate latin1_general_ci NOT NULL,
  `No_Tlpn` varchar(12) collate latin1_general_ci NOT NULL,
  `History` varchar(50) collate latin1_general_ci NOT NULL,
  `Password` varchar(15) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`Nip`, `Nama`, `JK`, `Alamat`, `No_Tlpn`, `History`, `Password`) VALUES
('1', 'Harlinda, S.Kom., MM.,M.K', 'Perempuan', 'UMI', '1', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('2', 'Wistiani Astuti, S.Kom.', 'Perempuan', 'UMI', '2', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('3', 'Ir. Amrullah, MT', 'Laki-laki', 'UMI', '3', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('12345', 'Irawati, S.Kom.', 'Perempuan', 'UMI', '4', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('5', 'Siska Anraeni, S.Kom.', 'Perempuan', 'UMI', '5', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('6', 'Poetri Lestari LB, S.Kom.', 'Perempuan', 'UMI', '6', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('7', 'Seni Asria, ST., M.Kom.', 'Perempuan', 'UMI', '7', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('8', 'St. Hajrah Mansyur, S.Kom', 'Perempuan', 'UMI', '8', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('9', 'Dra. Hj. Jamiah Tompo, M.', 'Perempuan', 'UMI', '9', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('10', 'Nirwana, ST.', 'Perempuan', 'UMI', '10', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('11', 'Hadriana Iddas, ST., MT.', 'Perempuan', 'UMI', '11', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('12', 'Ita Fitriati, S.Kom', 'Perempuan', 'UMI', '12', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('13', 'Drs. Muslim, MT.', 'Laki-laki', 'UMI', '13', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('14', 'H. Muhammad Diah Yusuf, P', 'Laki-laki', 'UMI', '14', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('15', 'Safaruddin, S.Si., MT.', 'Laki-laki', 'UMI', '15', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('16', 'Yulita Salim, S.Kom., MT', 'Perempuan', 'UMI', '16', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('17', 'Suwito Pomalingo, S.Kom', 'Laki-laki', 'UMI', '17', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('18', 'Rahman, S.Kom., MT.', 'Laki-laki', 'UMI', '18', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('19', 'Purnawansyah, M.Kom.', 'Laki-laki', 'UMI', '19', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('20', 'Andi Syarifuddin, ST., MT', 'Laki-laki', 'UMI', '20', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('21', 'Drs. H. Agus, M.A', 'Laki-laki', 'UMI', '21', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('22', 'Ir. Ahmad Amri, MT.', 'Laki-laki', 'UMI', '22', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('23', 'Nanang Roni, ST.MT.', 'Laki-laki', 'UMI', '23', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('24', 'Cucut Susanto, S.Kom', 'Laki-laki', 'UMI', '24', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('25', 'Anthony Poluan, S.Kom.', 'Laki-laki', 'UMI', '25', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('26', 'Abdul Rachman Manga, S.Ko', 'Laki-laki', 'UMI', '26', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('27', 'Kasman. ST.,MT', 'Laki-laki', 'UMI', '27', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('28', 'Hj. Angraeni Arif, SH., M', 'Perempuan', 'UMI', '28', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi'),
('29', 'Darwana Hamda, SH.,MH.', 'Perempuan', 'UMI', '29', 'Menjadi Dosen Di Universitas Muslim Indonesia', 'umi');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `Stb` varchar(12) collate latin1_general_ci NOT NULL,
  `Nama` varchar(25) collate latin1_general_ci NOT NULL,
  `Alamat` varchar(30) collate latin1_general_ci NOT NULL,
  `TTL` varchar(25) collate latin1_general_ci NOT NULL,
  `Agama` varchar(15) collate latin1_general_ci NOT NULL,
  `No_Tlpn` varchar(12) collate latin1_general_ci NOT NULL,
  `Asal_Sklh` varchar(20) collate latin1_general_ci NOT NULL,
  `Jurusan` varchar(20) collate latin1_general_ci NOT NULL,
  `Angkatan` int(4) NOT NULL,
  `JK` enum('Laki-laki','Perempuan') collate latin1_general_ci NOT NULL,
  `PA` varchar(25) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Stb`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`Stb`, `Nama`, `Alamat`, `TTL`, `Agama`, `No_Tlpn`, `Asal_Sklh`, `Jurusan`, `Angkatan`, `JK`, `PA`) VALUES
('13020100213', 'Indra Rahmana Hedar', 'Jl. Badak 32A', 'Kuta, 24-12-1992', 'Islam', '085342051177', 'Kachak', 'Teknik Informatika', 2010, 'Laki-laki', 'Wistiani Astuti, S.Kom'),
('101104025', 'Musfirah Anshar', 'Jl. Wijaya Kusuma', 'Makassar, 30-11-1991', 'Islam', '089665207961', 'Smanses', 'Teknik Informatika', 2010, 'Perempuan', 'Wistiani Astuti, S.Kom'),
('13020100001', 'presentase', 'badak', 'kuta,24-12-92', 'Islam', '085342051177', 'Kachak', 'Teknik Informatika', 2010, 'Laki-laki', 'Purnawansyah, M.Kom.');

-- --------------------------------------------------------

--
-- Table structure for table `inputkrs`
--

CREATE TABLE `inputkrs` (
  `Stb` varchar(12) collate latin1_general_ci NOT NULL,
  `indeks` int(3) NOT NULL,
  `Nilai` char(1) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `inputkrs`
--

INSERT INTO `inputkrs` (`Stb`, `indeks`, `Nilai`) VALUES
('13020100213', 4, 'A'),
('13020100213', 3, 'A'),
('13020100213', 2, 'A'),
('13020100213', 5, 'A'),
('101104025', 3, 'A'),
('101104025', 13, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `indeks` int(3) NOT NULL auto_increment,
  `Kode` varchar(8) collate latin1_general_ci NOT NULL,
  `Matkul` varchar(35) collate latin1_general_ci NOT NULL,
  `SKS` int(4) NOT NULL,
  `Semester` int(2) NOT NULL,
  `Kelas` varchar(8) collate latin1_general_ci NOT NULL,
  `Hari` varchar(10) collate latin1_general_ci NOT NULL,
  `Ruang` varchar(8) collate latin1_general_ci NOT NULL,
  `Jam` varchar(15) collate latin1_general_ci NOT NULL,
  `Dosen` varchar(25) collate latin1_general_ci NOT NULL,
  `Nip` varchar(15) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`indeks`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`indeks`, `Kode`, `Matkul`, `SKS`, `Semester`, `Kelas`, `Hari`, `Ruang`, `Jam`, `Dosen`, `Nip`) VALUES
(1, '3 KK 207', 'Algoritma & Struktur Data', 3, 2, 'TI.W 2.1', 'Senin', 'U-306', '07.30 - 10.00', 'Siska Anraeni, S.Kom.', '5'),
(2, '3 KK 402', 'Metode Numerik', 3, 4, 'TI.W 4.2', 'Senin', 'U-311', '07.30 - 10.00', 'Ir. Amrullah, MT', '3'),
(3, '2 KB 214', 'Bahasa Pemrograman I (Delphi)', 2, 2, 'TI.W 2.2', 'Senin', 'U-313', '07.30 - 10.00', 'Irawati, S.Kom.', '12345'),
(4, '3 KB 620', 'Interaksi Manusia & Komputer', 3, 6, 'TI.L 6.2', 'Senin', 'U-202', '07.30 - 10.00', 'Harlinda, S.Kom., MM.,M.K', '1'),
(5, '3 KK 421', 'Pemrograman Terstruktur', 3, 4, 'TI.L 4.1', 'Senin', 'U-205', '07.30 - 10.00', 'Wistiani Astuti, S.Kom.', '2'),
(6, '3 KB 623', 'Kecerdasan Buatan', 3, 6, 'TI.L 6.1', 'Senin', 'U-206', '07.30 - 10.00', 'Poetri Lestari LB, S.Kom.', '6'),
(7, '3 KB 620', 'Interaksi Manusia & Komputer', 3, 6, 'TI.L 6.1', 'Senin', 'U-205', '10.00 - 12.00', 'Harlinda, S.Kom., MM.,M.K', '1'),
(8, '3 KB 623', 'Kecerdasan Buatan', 3, 6, 'TI.L 6.2', 'Senin', 'U-206', '10.00 - 12.00', 'Poetri Lestari LB, S.Kom.', '6'),
(9, '3 KB 401', 'Rekayasa Perangkat Lunak', 3, 4, 'TI.L 4.1', 'Senin', 'U-311', '10.00 - 12.00', 'Seni Asria, ST., M.Kom.', '7'),
(10, '3 KK 421', 'Pemrograman Terstruktur', 3, 4, 'TI.W 4.2', 'Senin', 'U-312', '10.00 - 12.00', 'St. Hajrah Mansyur, S.Kom', '8'),
(11, '2 KB 214', 'Bahasa Pemrograman I (Delphi)', 2, 2, 'TI.W 2.1', 'Senin', 'U-313', '10.00 - 12.00', 'Irawati, S.Kom.', '12345'),
(12, '3 KK 207', 'Algoritma & Struktur Data', 3, 2, 'TI.W 2.2', 'Senin', 'U-307', '10.00 - 12.00', 'Siska Anraeni, S.Kom.', '5'),
(13, '2 PK 202', 'Syariah', 2, 2, 'TI.W 2.2', 'Senin', 'U-206', '13.00 - 14.00', 'Dra. Hj. Jamiah Tompo, M.', '9'),
(14, '3 KK 416', 'Teori Bahasa dan Automata', 3, 4, 'TI.W 4.2', 'Senin', 'U-313', '13.00 - 14.00', 'Cucut Susanto, S.Kom', '24'),
(15, '3 KK 416', 'Teori Bahasa dan Automata', 3, 4, 'TI.L 4.1', 'Senin', 'U-304', '14.40 - 16.00', 'Abdul Rachman Manga, S.Ko', '26'),
(16, '3 KK 402', 'Metode Numerik', 3, 4, 'TI.L 4.1', 'Senin', 'U-310', '13.00 - 14.00', 'Kasman. ST.,MT', '27'),
(17, '2 PK 202', 'Syariah', 2, 2, 'TI.W 2.1', 'Senin', 'U-204', '14.40 - 16.00', 'Dra. Hj. Jamiah Tompo, M.', '9'),
(18, '3 KK 604', 'Statistik', 3, 6, 'TI.L 6.1', 'Selasa', 'U-104', '07.30 - 10.00', 'Nirwana, ST.', '10'),
(19, '3 KK 203', 'Matematika Diskrit', 3, 2, 'TI.W 2.1', 'Selasa', 'U-306', '07.30 - 10.00', 'Hadriana Iddas, ST., MT.', '11'),
(20, '3 KK 203', 'Matematika Diskrit', 3, 2, 'TI.W 2.2', 'Selasa', 'U-307', '07.30 - 10.00', 'Ita Fitriati, S.Kom', '12'),
(21, '3 KK 604', 'Statistik', 3, 6, 'TI.L 6.2', 'Selasa', 'U-206', '10.00 - 12.00', 'Siska Anraeni, S.Kom.', '5'),
(22, '3 KK 213', 'Sistem Informasi', 3, 2, 'TI.W 2.1', 'Selasa', 'U-206', '13.00 - 14.00', 'H. Muhammad Diah Yusuf, P', '14'),
(23, '3 KK 213', 'Sistem Informasi', 3, 2, 'TI.W 2.2', 'Senin', 'U-207', '14.40 - 16.00', 'H. Muhammad Diah Yusuf, P', '14'),
(24, '2 KK 619', 'Riset Teknologi Informasi', 2, 6, 'TI.L 6.1', 'Rabu', 'U-205', '07.30 - 10.00', 'Safaruddin, S.Si., MT.', '15'),
(25, '2 KB 418', 'Bahasa Pemrograman III (Java Lanjut', 2, 4, 'TI.L 4.1', 'Rabu', 'U-311', '07.30 - 10.00', 'Yulita Salim, S.Kom., MT', '16'),
(26, '2 KK 619', 'Riset Teknologi Informasi', 2, 6, 'TI.L 6.2', 'Rabu', 'U-104', '10.00 - 12.00', 'Safaruddin, S.Si., MT.', '15'),
(27, '2 KB 626', 'Pemrograman V (Web II / dinamis)', 2, 6, 'TI.L 6.1', 'Rabu', 'U-312', '10.00 - 12.00', 'Suwito Pomalingo, S.Kom', '17'),
(28, '2 KB 626', 'Pemrograman V (Web II / dinamis)', 2, 6, 'TI.L 6.2', 'Rabu', 'U-104', '13.00 - 14.00', 'Suwito Pomalingo, S.Kom', '17'),
(29, '2 KB 418', 'Bahasa Pemrograman III (J', 2, 4, 'TI.W 4.2', 'Rabu', 'U-207', '13.00 - 14.00', 'Rahman, S.Kom., MT.', '18'),
(30, '3 KB 401', 'Rekayasa Perangkat Lunak', 3, 4, 'TI.W 4.2', 'Rabu', 'U-202', '14.40 - 16.00', 'Purnawansyah, M.Kom.', '19'),
(31, '3 KK 216', 'Kalkulus Informatika', 3, 2, 'TI.W 2.2', 'Kamis', 'U-304', '07.30 - 10.00', 'Andi Syarifuddin, ST., MT', '20'),
(32, '2 PK 404', 'Pendidikan Agama Islam', 2, 4, 'TI.L 4.1', 'Kamis', 'U-205', '13.00 - 14.00', 'Dra. Hj. Jamiah Tompo, M.', '9'),
(33, '2 PK 404', 'Pendidikan Agama Islam', 2, 4, 'TI.W 4.2', 'Kamis', 'U-205', '14.40 - 16.00', 'Dra. Hj. Jamiah Tompo, M.', '9'),
(34, '2 PK 208', 'Kewarganegaraan', 2, 2, 'TI.W 2.1', 'Jumat', 'U-206', '07.30 - 10.00', 'Hj. Angraeni Arif, SH., M', '28'),
(35, '2 PK 208', 'Kewarganegaraan', 2, 2, 'TI.W 2.2', 'Jumat', 'U-207', '07.30 - 10.00', 'Darwana Hamda, SH.,MH.', '29'),
(36, '2 PK 606', 'Ilmu Dakwah', 2, 6, 'TI.L 6.2', 'Jumat', 'U-313', '10.00 - 12.00', 'Drs. H. Agus, M.A', '21'),
(37, '3 KK 216', 'Kalkulus Informatika', 3, 2, 'TI.W 2.1', 'Jumat', 'U-202', '10.00 - 12.00', 'Ir. Ahmad Amri, MT.', '28'),
(38, '2 KB 406', 'Jaringan Komputer', 2, 4, 'TI.L 4.1', 'Jumat', 'U-204', '10.00 - 12.00', 'Nanang Roni, ST.MT.', '23'),
(39, '2 PK 606', 'Ilmu Dakwah', 2, 6, 'TI.L 6.1', 'Jumat', 'U-313', '07.30 - 10.00', 'Drs. H. Agus, M.A', '21');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `Jam` varchar(15) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Jam`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`Jam`) VALUES
('07.30 - 10.00'),
('10.00 - 12.00'),
('13.00 - 14.40'),
('14.40 - 16.20');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas` varchar(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas`) VALUES
('TI.L 4.1'),
('TI.L 6.1'),
('TI.L 6.2'),
('TI.W 2.1'),
('TI.W 2.2'),
('TI.W 4.2');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `indeks` int(3) NOT NULL auto_increment,
  `Kode` varchar(8) collate latin1_general_ci NOT NULL,
  `Matkul` varchar(35) collate latin1_general_ci NOT NULL,
  `SKS` int(4) NOT NULL,
  `Semester` int(2) NOT NULL,
  PRIMARY KEY  (`indeks`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`indeks`, `Kode`, `Matkul`, `SKS`, `Semester`) VALUES
(1, '2 PK 202', 'Syariah', 2, 2),
(2, '3 KK 207', 'Algoritma & Struktur Data', 3, 2),
(3, '1 KK 208', 'Prak. Algoritma & Struktur', 1, 2),
(4, '3 KK 203', 'Matematika Diskrit', 3, 2),
(5, '2 KB 214', 'Bahasa Pemrograman I (Delphi)', 2, 2),
(6, '1 KB 215', 'Prak. Bhs. Pemrograman I ', 1, 2),
(7, '3 KK 216', 'Kalkulus Informatika', 3, 2),
(8, '3 KK 213', 'Sistem Informasi', 3, 2),
(9, '2 PK 208', 'Kewarganegaraan', 2, 2),
(10, '2 PK 404', 'Pendidikan Agama Islam', 2, 4),
(11, '3 KK 421', 'Pemrograman Terstruktur', 3, 4),
(12, '1 KK 422', 'Prak. Pemrograman Terstrutur', 1, 4),
(13, '3 KK 402', 'Metode Numerik', 3, 4),
(14, '2 KB 418', 'Bahasa Pemrograman III (Java Lanjut', 2, 4),
(15, '1 KB 419', 'Prak. Bahasa Pemrog. III (Java Lanj', 1, 4),
(16, '3 KB 401', 'Rekayasa Perangkat Lunak', 3, 4),
(17, '3 KK 416', 'Teori Bahasa dan Automata', 3, 4),
(18, '2 KB 406', 'Jaringan Komputer', 2, 4),
(19, '1 KB 407', 'Prak. Jaringan Komputer', 1, 4),
(20, '2 PK 606', 'Ilmu Dakwah', 2, 6),
(21, '2 KK 619', 'Riset Teknologi Informasi', 2, 6),
(22, '3 KB 620', 'Interaksi Manusia & Komputer', 3, 6),
(23, '3 KB 623', 'Kecerdasan Buatan', 3, 6),
(24, '2 KB 626', 'Pemrograman V (Web II / dinamis)', 2, 6),
(25, '1 KB 627', 'Prak. Pemrog. V (Web II / dinamis)', 1, 6),
(26, '3 KK 604', 'Statistik', 3, 6),
(27, '2 PK 101', 'Aqidahku', 2, 1),
(28, '2 PK 107', 'Pancasila', 2, 1),
(29, '2 PB 803', 'PKL + Seminar Proposal', 2, 8),
(30, '3 KB 504', 'Basis Data II', 3, 5),
(31, '3 KB 735', 'Metodologi Penelitian', 2, 7),
(32, '3 KB 421', 'Basis Data I', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `Nip` varchar(15) collate latin1_general_ci NOT NULL,
  `Nama` varchar(25) collate latin1_general_ci NOT NULL,
  `JK` enum('Laki-laki','Perempuan') collate latin1_general_ci NOT NULL,
  `Alamat` varchar(30) collate latin1_general_ci NOT NULL,
  `No_Tlpn` varchar(12) collate latin1_general_ci NOT NULL,
  `username` varchar(15) collate latin1_general_ci NOT NULL,
  `password` varchar(15) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`Nip`, `Nama`, `JK`, `Alamat`, `No_Tlpn`, `username`, `password`) VALUES
('12345', 'firman', 'Laki-laki', 'gowa', '628529991157', 'firman', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `ruang` varchar(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`ruang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`ruang`) VALUES
('A'),
('U-104'),
('U-202'),
('U-205'),
('U-206'),
('U-207'),
('U-304'),
('U-306'),
('U-307'),
('U-308'),
('U-309'),
('U-310'),
('U-311'),
('U-312'),
('U-313');

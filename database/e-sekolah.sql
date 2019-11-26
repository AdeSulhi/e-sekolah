-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2018 at 05:37 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `foto`) VALUES
(1, '10250001', 'LILIS HAPIPAH', 'Depok', '2004-10-01', 'Perempuan', NULL),
(2, '10250002', 'RITTAH RIANI ROMDIN', 'Depok', '1985-10-11', 'Perempuan', NULL),
(3, '10250003', 'QUSYAIRI FADIL', 'Tangerang', '1985-10-12', 'Laki-laki', NULL),
(4, '10250004', 'RIZKY DWI LESTARI', 'Tangerang Selatan', '2004-10-04', 'Perempuan', NULL),
(5, '10250005', 'RINA YUSNARITA', 'Sukabumi', '1985-10-14', 'Perempuan', NULL),
(6, '10250006', 'ULFAH QORI KHAIRUNNISA', 'Subang', '1985-10-15', 'Perempuan', NULL),
(10, '10250007', 'AHMAD SULHI, M.Kom', 'Tangerang', '1970-10-25', 'Laki-laki', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(11) NOT NULL,
  `kode_semester` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kode_semester`) VALUES
(1, 'VII-A', 20171),
(2, 'VII-B', 20171),
(3, 'VIII-A', 20171),
(4, 'VIII-B', 20171),
(5, 'IX-A', 20171),
(6, 'IX-A', 20171);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id_kelas_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nis` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id_kelas_siswa`, `id_kelas`, `nis`) VALUES
(1, 1, '20170001'),
(2, 1, '20170002'),
(3, 1, '20170003'),
(4, 1, '20170004'),
(5, 1, '20170005'),
(6, 1, '20170006'),
(7, 1, '20170007'),
(8, 1, '20170008'),
(9, 1, '20170009'),
(10, 1, '20170010'),
(11, 2, '20170011'),
(12, 2, '20170012'),
(13, 2, '20170013'),
(14, 2, '20170014'),
(15, 2, '20170015'),
(16, 2, '20170016'),
(17, 2, '20170017'),
(18, 2, '20170018'),
(19, 2, '20170019'),
(20, 2, '20170020'),
(21, 3, '20160001'),
(22, 3, '20160002'),
(23, 3, '20160003'),
(24, 3, '20160004'),
(25, 3, '20160005'),
(26, 3, '20160006'),
(27, 3, '20160007'),
(28, 3, '20160008'),
(29, 3, '20160009'),
(30, 3, '20160010'),
(31, 4, '20160011'),
(32, 4, '20160012'),
(33, 4, '20160013'),
(34, 4, '20160014'),
(35, 4, '20160015'),
(36, 4, '20160016'),
(37, 4, '20160017'),
(38, 4, '20160018'),
(39, 4, '20160019'),
(40, 4, '20160020'),
(41, 5, '20150001'),
(42, 5, '20150002'),
(43, 5, '20150003'),
(44, 5, '20150004'),
(45, 5, '20150005'),
(46, 5, '20150006'),
(47, 5, '20150007'),
(48, 5, '20150008'),
(49, 5, '20150009'),
(50, 5, '20150010'),
(51, 6, '20150011'),
(52, 6, '20150012'),
(53, 6, '20150013'),
(54, 6, '20150014'),
(55, 6, '20150015'),
(56, 6, '20150016'),
(57, 6, '20150017'),
(58, 6, '20150018'),
(59, 6, '20150019'),
(60, 6, '20150020');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `kode_mapel` varchar(12) NOT NULL,
  `nama_mapel` varchar(25) NOT NULL,
  `nip` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `kode_mapel`, `nama_mapel`, `nip`) VALUES
(1, 'IND-7101', 'Bahasa Indonesia', '1025001'),
(2, 'IND-7202', 'Bahasa Indonesia', '1025001'),
(3, 'IND-8103', 'Bahasa Indonesia', '1025001'),
(4, 'IND-8204', 'Bahasa Indonesia', '1025001'),
(5, 'IND-9105', 'Bahasa Indonesia', '1025001'),
(6, 'IND-9206', 'Bahasa Indonesia', '1025001'),
(7, 'ING-7101', 'Bahasa Inggris', '1025002'),
(8, 'ING-7202', 'Bahasa Inggris', '1025002'),
(9, 'ING-8103', 'Bahasa Inggris', '1025002'),
(10, 'ING-8204', 'Bahasa Inggris', '1025002'),
(11, 'ING-9105', 'Bahasa Inggris', '1025002'),
(12, 'ING-9206', 'Bahasa Inggris', '1025002'),
(13, 'ARB-7101', 'Bahasa Arab', '1025003'),
(14, 'ARB-7202', 'Bahasa Arab', '1025003'),
(15, 'ARB-8103', 'Bahasa Arab', '1025003'),
(16, 'ARB-8204', 'Bahasa Arab', '1025003'),
(17, 'ARB-9105', 'Bahasa Arab', '1025003'),
(18, 'ARB-9206', 'Bahasa Arab', '1025003'),
(19, 'IPA-7101', 'Ilmu Pengetahuan Alam', '1025004'),
(20, 'IPA-7202', 'Ilmu Pengetahuan Alam', '1025004'),
(21, 'IPA-8103', 'Ilmu Pengetahuan Alam', '1025004'),
(22, 'IPA-8204', 'Ilmu Pengetahuan Alam', '1025004'),
(23, 'IPA-9105', 'Ilmu Pengetahuan Alam', '1025004'),
(24, 'IPA-9206', 'Ilmu Pengetahuan Alam', '1025004'),
(25, 'IPS-7101', 'Ilmu Pengetahuan Sosial', '1025005'),
(26, 'IPS-7202', 'Ilmu Pengetahuan Sosial', '1025005'),
(27, 'IPS-8103', 'Ilmu Pengetahuan Sosial', '1025005'),
(28, 'IPS-8204', 'Ilmu Pengetahuan Sosial', '1025005'),
(29, 'IPS-9105', 'Ilmu Pengetahuan Sosial', '1025005'),
(30, 'IPS-9206', 'Ilmu Pengetahuan Sosial', '1025005'),
(31, 'MTK-7101', 'Matematika', '1025006'),
(32, 'MTK-7202', 'Matematika', '1025006'),
(33, 'MTK-8103', 'Matematika', '1025006'),
(34, 'MTK-8204', 'Matematika', '1025006'),
(35, 'MTK-9105', 'Matematika', '1025006'),
(36, 'MTK-9206', 'Matematika', '1025006');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `kode_mapel` varchar(11) NOT NULL,
  `nama_mapel` varchar(25) NOT NULL,
  `nilai_tugas` int(11) DEFAULT NULL,
  `nilai_uts` int(11) DEFAULT NULL,
  `nilai_uas` int(11) DEFAULT NULL,
  `nip` varchar(16) NOT NULL,
  `nama_semester` varchar(21) NOT NULL,
  `id_kelas_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `kode_semester` int(11) NOT NULL,
  `nama_semester` varchar(25) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `kode_semester`, `nama_semester`, `tahun_ajaran`) VALUES
(1, 20171, 'Semester Ganjil 2017', '2017/2018'),
(2, 20172, 'Semester Genap 2017', '2017/2018');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `angkatan` int(4) DEFAULT NULL,
  `status_siswa` enum('Aktif','DO','Lulus') DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `angkatan`, `status_siswa`, `foto`) VALUES
(1, '20150001', 'LILIS HAPIPAH', 'Depok', '2004-10-01', 'Perempuan', 2015, 'Aktif', NULL),
(2, '20150002', 'ATIKA AJI LESTARI', 'Depok', '2004-10-02', 'Perempuan', 2015, 'Aktif', NULL),
(3, '20150003', 'MAULIDINIA MUSLIM', 'Depok', '2004-10-03', 'Perempuan', 2015, 'Aktif', NULL),
(4, '20150004', 'RIZKY DWI LESTARI', 'Depok', '2004-10-04', 'Perempuan', 2015, 'Aktif', NULL),
(5, '20150005', 'FAJAR PUTRA CHAELLAN', 'Depok', '2004-10-05', 'Laki-laki', 2015, 'Aktif', NULL),
(6, '20150006', 'PANDU IMAM TITI ANTO', 'Depok', '2004-10-06', 'Laki-laki', 2015, 'Aktif', NULL),
(7, '20150007', 'GHINA LUQYANA', 'Depok', '2004-10-07', 'Perempuan', 2015, 'Aktif', NULL),
(8, '20150008', 'MUHAMMAD FAA\'IQ ABDILLAH', 'Depok', '2004-10-08', 'Laki-laki', 2015, 'Aktif', NULL),
(9, '20150009', 'NAURAH RAHADATUL\'AISY', 'Depok', '2004-10-09', 'Perempuan', 2015, 'Aktif', NULL),
(10, '20150010', 'RATIH PURWASIH', 'Tangerang', '2004-10-10', 'Perempuan', 2015, 'Aktif', NULL),
(11, '20150011', 'HALIMAH SA\'DIYAH', 'Tangerang', '2004-10-11', 'Perempuan', 2015, 'Aktif', NULL),
(12, '20150012', 'ELOK DIYAH AYU LARASATI', 'Tangerang', '2004-10-12', 'Perempuan', 2015, 'Aktif', NULL),
(13, '20150013', 'ABDURRAHMAN PAUJI ISHAK', 'Tangerang', '2004-10-13', 'Laki-laki', 2015, 'Aktif', NULL),
(14, '20150014', 'VILDA FEMILIA', 'Tangerang', '2004-10-14', 'Perempuan', 2015, 'Aktif', NULL),
(15, '20150015', 'TAZKIYATUL MUNA', 'Tangerang', '2004-10-15', 'Perempuan', 2015, 'Aktif', NULL),
(16, '20150016', 'ASMA KARIMATUNNISA', 'Tangerang', '2004-10-16', 'Perempuan', 2015, 'Aktif', NULL),
(17, '20150017', 'AULIA NUR FADILLAH', 'Tangerang', '2004-10-17', 'Perempuan', 2015, 'Aktif', NULL),
(18, '20150018', 'KHAERUL FARHAN', 'Tangerang', '2004-10-18', 'Laki-laki', 2015, 'Aktif', NULL),
(19, '20150019', 'DEWI ROCHAYATI', 'Tangerang', '2004-10-19', 'Perempuan', 2015, 'Aktif', NULL),
(20, '20150020', 'RIZKI USWAR PRATAMA', 'Tangerang', '2004-10-20', 'Laki-laki', 2015, 'Aktif', NULL),
(21, '20160001', 'MUHAMMAD KODRI KOSTOLANI', 'Jakarta', '2005-10-01', 'Laki-laki', 2016, 'Aktif', NULL),
(22, '20160002', 'MUHAMMAD RENALDI', 'Jakarta', '2005-10-02', 'Laki-laki', 2016, 'Aktif', NULL),
(23, '20160003', 'NABIL BADRUTTAMAMI', 'Jakarta', '2005-10-03', 'Laki-laki', 2016, 'Aktif', NULL),
(24, '20160004', 'ANANDA VIKA WAHYU PUTRANTI', 'Jakarta', '2005-10-04', 'Perempuan', 2016, 'Aktif', NULL),
(25, '20160005', 'NISRIINA SUFIKA', 'Jakarta', '2005-10-05', 'Perempuan', 2016, 'Aktif', NULL),
(26, '20160006', 'RIKI MAULANA ', 'Jakarta', '2005-10-06', 'Laki-laki', 2016, 'Aktif', NULL),
(27, '20160007', 'DINA ANDRIANI', 'Jakarta', '2005-10-07', 'Perempuan', 2016, 'Aktif', NULL),
(28, '20160008', 'AFIFAH HANIFATUSH SHOLIHAH', 'Jakarta', '2005-10-08', 'Perempuan', 2016, 'Aktif', NULL),
(29, '20160009', 'SINDY INDAH OKTAVIA', 'Jakarta', '2005-10-09', 'Perempuan', 2016, 'Aktif', NULL),
(30, '20160010', 'ALBA AHMAD ASSEGAF', 'Depok', '2005-10-10', 'Laki-laki', 2016, 'Aktif', NULL),
(31, '20160011', 'ASEP APANDI NOVAL', 'Depok', '2005-10-11', 'Laki-laki', 2016, 'Aktif', NULL),
(32, '20160012', 'TITIK AINUN HATINAH', 'Depok', '2005-10-12', 'Perempuan', 2016, 'Aktif', NULL),
(33, '20160013', 'JAELANI ANTON PRATAMA PUTRA', 'Depok', '2005-10-13', 'Laki-laki', 2016, 'Aktif', NULL),
(34, '20160014', 'AHMAD SYAIROFI', 'Depok', '2005-10-14', 'Laki-laki', 2016, 'Aktif', NULL),
(35, '20160015', 'MUSTAFA KAMAL ALMAROGHI', 'Depok', '2005-10-15', 'Laki-laki', 2016, 'Aktif', NULL),
(36, '20160016', 'KAMILLIA INSANI', 'Depok', '2005-10-16', 'Perempuan', 2016, 'Aktif', NULL),
(37, '20160017', 'NURUL DINDA AULIA', 'Depok', '2005-10-17', 'Perempuan', 2016, 'Aktif', NULL),
(38, '20160018', 'ALBI SYARAH', 'Depok', '2005-10-18', 'Perempuan', 2016, 'Aktif', NULL),
(39, '20160019', 'NURUSYIFA KHOFIFAH', 'Tangerang', '2005-10-19', 'Perempuan', 2016, 'Aktif', NULL),
(40, '20160020', 'DITA SABILASARI', 'Tangerang', '2005-10-20', 'Perempuan', 2016, 'Aktif', NULL),
(41, '20170001', 'RIZIQ FAUQI', 'Tangerang', '2006-10-01', 'Laki-laki', 2017, 'Aktif', NULL),
(42, '20170002', 'SYARIFAH LATIFAH', 'Tangerang', '2006-10-02', 'Perempuan', 2017, 'Aktif', NULL),
(43, '20170003', 'MIA AMALYA AMANDA', 'Tangerang', '2006-10-03', 'Perempuan', 2017, 'Aktif', NULL),
(44, '20170004', 'ISNA KHAIRUNASRI ISLAMAY', 'Tangerang', '2006-10-04', 'Perempuan', 2017, 'Aktif', NULL),
(45, '20170005', 'NAZAIRAH', 'Tangerang', '2006-10-05', 'Perempuan', 2017, 'Aktif', NULL),
(46, '20170006', 'FAQIHUDIN', 'Tangerang', '2006-10-06', 'Laki-laki', 2017, 'Aktif', NULL),
(47, '20170007', 'AENUN GHURROH', 'Tangerang', '2006-10-07', 'Perempuan', 2017, 'Aktif', NULL),
(48, '20170008', 'DIAN ASHRI MAULIDIYAH', 'Tangerang', '2006-10-08', 'Perempuan', 2017, 'Aktif', NULL),
(49, '20170009', 'MUHAMAD YUSRON ULUL ALBAB', 'Tangerang', '2006-10-09', 'Laki-laki', 2017, 'Aktif', NULL),
(50, '20170010', 'HANIFAH USWATUN HASANAH', 'Jakarta', '2006-10-10', 'Perempuan', 2017, 'Aktif', NULL),
(51, '20170011', 'NUGROHO EKA PRASETIO', 'Jakarta', '2006-10-11', 'Laki-laki', 2017, 'Aktif', NULL),
(52, '20170012', 'AHMAD NAJIB', 'Jakarta', '2006-10-12', 'Laki-laki', 2017, 'Aktif', NULL),
(53, '20170013', 'FARHAH NAILUL MUNA KADMAS', 'Jakarta', '2006-10-13', 'Perempuan', 2017, 'Aktif', NULL),
(54, '20170014', 'RAMADANTI AULIA PUTRI', 'Jakarta', '2006-10-14', 'Perempuan', 2017, 'Aktif', NULL),
(55, '20170015', 'ABI YAZID AL BUSTOMI', 'Jakarta', '2006-10-15', 'Laki-laki', 2017, 'Aktif', NULL),
(56, '20170016', 'NUHA AZIZAH', 'Jakarta', '2006-10-16', 'Perempuan', 2017, 'Aktif', NULL),
(57, '20170017', 'MULYAWATI RAHMATUL WAHIDA', 'Jakarta', '2006-10-17', 'Perempuan', 2017, 'Aktif', NULL),
(58, '20170018', 'KHAEIRUL UMAM', 'Jakarta', '2006-10-18', 'Laki-laki', 2017, 'Aktif', NULL),
(59, '20170019', 'MOHAMAD YAZID ABRORI', 'Jakarta', '2006-10-19', 'Laki-laki', 2017, 'Aktif', NULL),
(63, '20170020', 'HUBAEL RIZKY MUKAFFA', 'Jakarta', '2005-12-30', 'Laki-laki', 2017, 'Aktif', NULL),
(64, '20150021', 'IQBAL ZAUQUL ADIB', 'Tangerang', '1998-02-16', 'Laki-laki', 2015, 'Lulus', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `level` enum('Administrator','Guru','Siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'Admin', '456afded5d1b2a4dab709ff41d7fc9420cb3ae1c', 'Administrator'),
(2, '20150001', 'e45620f3fd8a8719a60d9b05714136edca4fd41b', 'Siswa'),
(3, '20150002', '83a146f461748bafdbf25298a0f9c271bf5cbb6c', 'Siswa'),
(4, '20150003', '80fdb5cbce71c7493cd81335f348208adb67be42', 'Siswa'),
(5, '20150004', '452ec9da621f4484f7bd7f9363cbfb0c97e1c595', 'Siswa'),
(6, '20150005', 'c6d72f01251843c510a57b7c8292a1bec5bb1332', 'Siswa'),
(7, '20150006', '077359a2f36a1e037ec7e88d9d50f9e944d0c36c', 'Siswa'),
(8, '20150007', '42ab3463d3cebaa14fd33b114a4a27e7490ec949', 'Siswa'),
(9, '20150008', '195e97e5f94ba619f0bd12af533a64fc7ecd6f1d', 'Siswa'),
(10, '20150009', 'dbd059cafee458a7f0130ae014431668f61fbb1d', 'Siswa'),
(11, '20150010', 'c24d1c61c564bc3e601a5496eaf74fb34374f1b3', 'Siswa'),
(12, '20150011', '86bdd1ef70015d138baee2ab096f74d4a98c5c51', 'Siswa'),
(13, '20150012', 'e142caa183f980c24b3c08d9c94ca96b73d5b4fa', 'Siswa'),
(14, '20150013', '296287d816cfd2690b99f27564b78c323cd70f1e', 'Siswa'),
(15, '20150014', '848c739552ebd33c48cab7706f3687e79e970869', 'Siswa'),
(16, '20150015', '7ff7febffaddeb7090b4a2eaf64f6db656c8f653', 'Siswa'),
(17, '20150016', '7cd857e62fc4da78c27063b542246bf0e7506c47', 'Siswa'),
(18, '20150017', '3fac920b960fb3328500ee2766a0bc36901948ec', 'Siswa'),
(19, '20150018', '256ce85bf3d1d81e51cd4c84055f0ddb41326a80', 'Siswa'),
(20, '20150019', '77aa5a4e49e5bd45794f70d0b2fca6bb3bb4fc0c', 'Siswa'),
(21, '20150020', '5d71b0d3003c46e29a58845f57566a3323351eb4', 'Siswa'),
(22, '20160001', '4d0e2ff02e792740759e224f8a113d745866d9bf', 'Siswa'),
(23, '20160002', 'eefdb38faffff84a27f0cdef9e36f53ce12ea9bc', 'Siswa'),
(24, '20160003', '1d330646a09ac8793c006e1d12d4c112bb73a497', 'Siswa'),
(25, '20160004', 'dc1bd90e21fab0b8d17e9446b36b3593dd7e6890', 'Siswa'),
(26, '20160005', 'e069e06dcd7d3db514e9e4a90096f5d04b4e14f8', 'Siswa'),
(27, '20160006', '6e5e44b1a4bea38d51cd8296c4b3b36fde6d61a6', 'Siswa'),
(28, '20160007', 'a7253a51974e270ef421beb3f74220d8c85a390d', 'Siswa'),
(29, '20160008', '5044b477fc630c173f6073e7c476f30ab897e83e', 'Siswa'),
(30, '20160009', '9c83be253d465a1a2af993c429ee0b87bfed6f28', 'Siswa'),
(31, '20160010', 'f9c95b1cc4d0644174e457d156567beb763a2be4', 'Siswa'),
(32, '20160011', 'ef10d42825f115549766751f651b2318d50d4803', 'Siswa'),
(33, '20160012', '171a6edd3b550d33dd4b1f2266e9521d37c6d3a6', 'Siswa'),
(34, '20160013', 'b7a95f358708d53ad7a18e157a990750c18dbcfc', 'Siswa'),
(35, '20160014', '18f9658414d5bfa63de34a4494bb97436dd66df1', 'Siswa'),
(36, '20160015', 'f107756b7a34dee0f5e454daa6b054a3beb51c39', 'Siswa'),
(37, '20160016', '81ae0a8ca7a3c898709a0195dfef4c21cab728a4', 'Siswa'),
(38, '20160017', 'aa3c2c7778ad34979e35150e5b5e4635548cde6a', 'Siswa'),
(39, '20160018', 'e56191b3a4ce9f939a5735282156e4580a8f391e', 'Siswa'),
(40, '20160019', '14cef6aa2a1033c1ee8b72d70fd13e1b509b0e97', 'Siswa'),
(41, '20160020', 'e0fcf0a7922269666e49fc30d6873d4becd5141a', 'Siswa'),
(42, '20170001', 'b2fead286809c29bc9734c8c27e25568a5052052', 'Siswa'),
(43, '20170002', '32b417e5d83f6ad242c366998150dedcf5ebcd54', 'Siswa'),
(44, '20170003', 'f302c774f58955b2b47c9941591042c58c4a690a', 'Siswa'),
(45, '20170004', 'fa61273e0655bb85a5641f3ad80692692695a5fb', 'Siswa'),
(46, '20170005', 'e9856a9a39833fb1165323a282a7d3a432f4d6dc', 'Siswa'),
(47, '20170006', '8a57f6674e6853027b2d501e56c65c95b7b5e744', 'Siswa'),
(48, '20170007', '2e694fb4270e805f6bebd6e8af5d294010479f86', 'Siswa'),
(49, '20170008', 'b96a5b855f7d264e71eaa1230b4b197086e19f1f', 'Siswa'),
(50, '20170009', '5fbec08156eb1e97e7261efb55a36f7a51b1cda1', 'Siswa'),
(51, '20170010', '889c70dc6477f0bc54182d71a30d4b0080fa2eb2', 'Siswa'),
(52, '20170011', '08f87e6702f294cfe1cc3b16f3f6ce5a6257b8ca', 'Siswa'),
(53, '20170012', '9038e2ef519d768749ffa309d38d0b24e2dfc951', 'Siswa'),
(54, '20170013', 'bb0ba567866be4d5586da27492d3d2c02bdb2fee', 'Siswa'),
(55, '20170014', '7a03ec36ee4a03fdfa47405daacd98023779c6af', 'Siswa'),
(56, '20170015', '1607264983e11d0e7c803ec7bfa8d52ac6ef890f', 'Siswa'),
(57, '20170016', 'b7635f91699d153a214c58a8b4c5de32c94d3f26', 'Siswa'),
(58, '20170017', '443d3a405610afc1e72eec2b9fdaf26ba06ce950', 'Siswa'),
(59, '20170018', '18325f0c93e00c430a23a609f100bd11091f6c2b', 'Siswa'),
(60, '20170019', 'c2ab005f50a38cb66b7d0d93cbb294c143a32f85', 'Siswa'),
(61, '20170020', '56e824cb37b35a3170f2c31a03babe576af3eb89', 'Siswa'),
(62, '1025001', 'b22d0a6d33eaaa4ba56bd9f03fd16e002c7ae066', 'Guru'),
(63, '1025002', '7c6c99a8f06576ab4f0f4175039a4a3177cadc38', 'Guru'),
(64, '1025003', 'a36a9ad8b95eb607bf0a973946af05acb344024b', 'Guru'),
(65, '1025004', '1646e6a2f3b00d8c4b6de28e9404642eb1db94e3', 'Guru'),
(66, '1025005', '9f64923f76720313aaee3d6a3987453aa3a78ca7', 'Guru'),
(67, '1025006', '9db55d3d11470d2bdfeaec242e073f34bc406b3b', 'Guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id_kelas_siswa`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_semester` (`kode_semester`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id_kelas_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

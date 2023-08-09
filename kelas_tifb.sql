-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2023 pada 04.12
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelas_tifb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(45) NOT NULL,
  `nrp` varchar(45) NOT NULL,
  `nidn` varchar(45) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `gelar` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` set('L','P') NOT NULL,
  `pendidikan_terakhir` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `kode_prodi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nrp`, `nidn`, `nama_lengkap`, `gelar`, `email`, `gender`, `pendidikan_terakhir`, `foto`, `kode_prodi`) VALUES
(101, '9876', '5674', 'Andri Nofiar, Am', 'M.Kom', 'andri@123', 'L', 'Magister', 'andri.jpeg', '1'),
(102, '2367', '9763', 'Fina Nasari', 'S.Kom., M.Kom', 'Fina@123', 'P', 'Magister', 'fina nasari.JPG', '1'),
(103, '7659', '4196', 'Fitri', 'S.T., M.Sc', 'fitri@123', 'L', 'Magister', 'fitri.jpeg', '1'),
(201, '3449', '7643', 'Nur Asma Deli', 'S.T., M.Si', 'deli@123', 'P', 'Magister', 'deli.jpeg', '2'),
(202, '5327', '7890', 'Fatmayati', 'S.T., M.Si', 'fatma@1223', 'P', 'Magister', 'fatma.jpeg', '2'),
(301, '9469', '8329', 'Romiyadi', 'S.T', 'romi@123', 'L', 'Magister', 'emon.png', '3'),
(401, '6542', '8961', 'Merlia Rahmayani', 'S.IP., M.Si', 'merlia@123', 'P', 'Magister', 'merlia.jpeg', '4'),
(402, '5670', '3128', 'T. Yoga Winanda', 'S.E., M.M', 'yoga@12345', 'L', 'Magister', 'yoga.jpeg', '4'),
(501, '6893', '4237', 'Antonius J. Sihotang', 'S.Pd', 'antonius@123', 'L', 'Magister', 'emon.png', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(45) NOT NULL,
  `kode_prodi` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `kode_prodi`, `id_dosen`) VALUES
(801, 'TIF 1A', 1, 101),
(802, 'TIF 1B', 1, 102),
(803, 'TIF 2A', 1, 101),
(804, 'TIF 2B', 1, 102),
(805, 'TIF 3A', 1, 101),
(806, 'TIF 3b', 1, 102),
(807, 'TPS 1A', 2, 201),
(808, 'TPS 1B', 2, 202),
(809, 'TPS 2A', 2, 202),
(810, 'TPS 2B', 2, 201),
(811, 'TPS 3A', 2, 201),
(812, 'TPS 3B', 2, 202),
(813, 'PPM 1A', 3, 301),
(814, 'PPM 1B', 3, 301),
(815, 'PPM 2A', 3, 301),
(816, 'PPM 2B', 3, 301),
(817, 'PPM 3A', 3, 301),
(818, 'PPM 3B', 3, 301),
(819, 'ABI 1A', 4, 401),
(820, 'ABI 2A', 4, 402),
(821, 'ABI 3A', 4, 401),
(822, 'ABI 4A', 4, 402),
(823, 'TPKS 1B', 5, 501);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` set('L','P') NOT NULL,
  `status_study` set('Study','Lulus') NOT NULL,
  `jenjang_study` set('D2','D3','D4') NOT NULL,
  `semester_awal` varchar(45) NOT NULL,
  `kode_prodi` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `nim`, `nama_lengkap`, `email`, `gender`, `status_study`, `jenjang_study`, `semester_awal`, `kode_prodi`, `id_semester`, `id_kelas`, `foto`) VALUES
(701, 2021113010, 'bettinahampun', 'betti@1a', 'P', 'Study', 'D3', 'tidak', 1, 4, 804, 'foto betti.jpg'),
(702, 202113008, 'Ade ', 'ade@12', 'P', 'Study', 'D3', 'Tidak', 1, 4, 804, 'ade.PNG'),
(703, 2021113011, 'Dela', 'dela@12', 'P', 'Study', 'D3', 'Tidak', 1, 4, 804, 'dela.PNG'),
(704, 2021113013, 'Desrita', 'desrita@123', 'P', 'Study', 'D3', 'Tidak', 1, 4, 804, 'desrita.PNG'),
(705, 2021113014, 'Dhea Fernanda', 'dhea@12', 'P', 'Study', 'D3', 'Tidak', 1, 4, 804, 'dhea.PNG'),
(706, 2021113015, 'Diana Oktaviani', 'diaanaa@111', 'P', 'Study', 'D3', 'Tidak', 1, 4, 804, 'diana.PNG'),
(707, 2021113016, 'Diky Wahyudi', 'diki@111333', 'L', 'Study', 'D3', 'Tidak', 1, 4, 804, 'diky.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prodi_kaprodi`
--

CREATE TABLE `tb_prodi_kaprodi` (
  `id_kaprodi` int(11) NOT NULL,
  `kode_kaprodi` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_prodi_kaprodi`
--

INSERT INTO `tb_prodi_kaprodi` (`id_kaprodi`, `kode_kaprodi`, `id_dosen`) VALUES
(9901, 8801, 101),
(9902, 8802, 201),
(9903, 8803, 301),
(9904, 8804, 401),
(9905, 8805, 501);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_program_studi`
--

CREATE TABLE `tb_program_studi` (
  `kode_prodi` int(11) NOT NULL,
  `kode_dikti` int(11) NOT NULL,
  `nama_prodi` varchar(45) NOT NULL,
  `jenjang` varchar(45) NOT NULL,
  `akreditasi` varchar(45) NOT NULL,
  `singkatan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_program_studi`
--

INSERT INTO `tb_program_studi` (`kode_prodi`, `kode_dikti`, `nama_prodi`, `jenjang`, `akreditasi`, `singkatan`) VALUES
(1, 11, 'Teknik Informatika', 'D3', 'B', 'TIF'),
(2, 22, 'Teknik Pengolahan Sawit', 'D3', 'B', 'TPS'),
(3, 33, 'Teknik Perbaikan Dan Perawatan Mesin', 'D3', 'B', 'PPM'),
(4, 44, 'Administrasi Bisnis Internasional', 'D4', 'B', 'ABI'),
(5, 55, 'Teknik Pengolahan Kelapa Sawit', 'D2', 'B', 'TPKS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester`
--

CREATE TABLE `tb_semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `keterangan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_semester`
--

INSERT INTO `tb_semester` (`id_semester`, `semester`, `keterangan`) VALUES
(1, 'Semester 1', 'Tingkat 1'),
(2, 'Semester 2', 'Tingkat 1'),
(3, 'Semester 3', 'Tingkat 2'),
(4, 'Semester 4', 'Tingkat 2'),
(5, 'Semester 5', 'Tingkat 3'),
(6, 'Semester 6', 'Tingkat 3'),
(7, 'Semester 7', 'Tingkat 4'),
(8, 'Semester 8', 'Tingkat 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`nama`, `email`, `password`, `telepon`, `jabatan`, `aktif`) VALUES
('Betti', 'betti@123', '12ae49817e6d3cc8412e86907bd1f249', '089766889900', 'Admin', 'Y'),
('jon', 'jon@123', '5f25f732ca8dec564d80ab4b516a2d9d', '089788678898', 'Admin', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `tb_prodi_kaprodi`
--
ALTER TABLE `tb_prodi_kaprodi`
  ADD PRIMARY KEY (`id_kaprodi`);

--
-- Indeks untuk tabel `tb_program_studi`
--
ALTER TABLE `tb_program_studi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- Indeks untuk tabel `tb_semester`
--
ALTER TABLE `tb_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8014;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20213;

--
-- AUTO_INCREMENT untuk tabel `tb_prodi_kaprodi`
--
ALTER TABLE `tb_prodi_kaprodi`
  MODIFY `id_kaprodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9906;

--
-- AUTO_INCREMENT untuk tabel `tb_program_studi`
--
ALTER TABLE `tb_program_studi`
  MODIFY `kode_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_semester`
--
ALTER TABLE `tb_semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

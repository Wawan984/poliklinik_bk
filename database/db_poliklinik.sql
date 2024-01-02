-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mei 2017 pada 13.31
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poliklinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `kodedetail` int(15) NOT NULL,
  `no_resep` varchar(15) NOT NULL,
  `kodeobat` varchar(15) NOT NULL,
  `harga` int(100) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `dosis` varchar(30) NOT NULL,
  `subtotal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`kodedetail`, `no_resep`, `kodeobat`, `harga`, `jumlah_beli`, `dosis`, `subtotal`) VALUES
(18, 'RSP00001', 'OBT00001', 22000, 6, '3', 132000),
(19, 'RSP00002', 'OBT00001', 22000, 9, '3', 198000),
(20, 'RSP00002', 'OBT00002', 30000, 6, '2', 180000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `kodedkt` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `kodeplk` varchar(15) NOT NULL,
  `tarif` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`kodedkt`, `nama`, `spesialis`, `alamat`, `telepon`, `kodeplk`, `tarif`) VALUES
('DKT00001', 'Drs. Ari Anggrianto', 'Penyakit Kelamin', 'Kelet', '082258407993', 'PLK00001', 125000),
('DKT00002', 'Drs. Adi Khafianto', 'Penyakit Dalam', 'Keling', '086123123456', 'PLK00002', 85500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `kodelogin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`kodelogin`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'manager', '1d0258c2440a8d19e716292b231e3190', 'manager'),
(3, 'apotek', '5907cee206610515aa4a0624f80dedae', 'apotek'),
(4, 'pendaftar', '8edc6a0b2e5880aa676b9d229e52d667', 'pendaftar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `kodeobat` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `harga` int(100) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kodeobat`, `nama`, `jenis`, `kategori`, `harga`, `jumlah`) VALUES
('OBT00001', 'Klux', 'Padat', 'B', 22000, 80),
('OBT00002', 'X-Power', 'Cair', 'C', 30000, 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `kodepsn` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(15) NOT NULL,
  `umur` int(11) NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`kodepsn`, `nama`, `alamat`, `gender`, `umur`, `telepon`) VALUES
('PSN00001', 'Riski Andriyanto', 'Kembang, Jenggotan', 'Laki-laki', 17, '085262615261'),
('PSN00002', 'Adi Khafianto', 'Keling, Jepara', 'Laki-laki', 16, '087262626262'),
('PSN00003', 'Rafi Zufar Adiltsa Dinata', 'Jepara', 'Laki-laki', 15, '0852909038'),
('PSN00004', 'Santi', 'Clering', 'Perempuan', 15, '085116161626');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_pembayaran` int(15) NOT NULL,
  `kodepsn` varchar(15) NOT NULL,
  `kodedkt` varchar(15) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah_bayar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`no_pembayaran`, `kodepsn`, `kodedkt`, `tgl_bayar`, `jumlah_bayar`) VALUES
(4, 'PSN00002', 'DKT00001', '2017-05-30', 145000),
(5, 'PSN00001', 'DKT00002', '2017-05-30', 95500),
(6, 'PSN00004', 'DKT00002', '2017-05-30', 95500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_pendaftaran` varchar(15) NOT NULL,
  `tgl_pendaf` date NOT NULL,
  `kodedkt` varchar(15) NOT NULL,
  `kodepsn` varchar(15) NOT NULL,
  `kodeplk` varchar(15) NOT NULL,
  `biaya` int(100) NOT NULL,
  `status_pasien` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `tgl_pendaf`, `kodedkt`, `kodepsn`, `kodeplk`, `biaya`, `status_pasien`, `ket`) VALUES
('PND00001', '2017-05-30', 'DKT00001', 'PSN00002', 'PLK00001', 20000, 'Aktif', 'Gigi Kropos'),
('PND00002', '2017-05-30', 'DKT00002', 'PSN00001', 'PLK00002', 10000, 'Aktif', 'Demam'),
('PND00003', '2017-05-30', 'DKT00002', 'PSN00004', 'PLK00002', 10000, 'Aktif', 'Flu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE `poliklinik` (
  `kodeplk` varchar(11) NOT NULL,
  `namaplk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poliklinik`
--

INSERT INTO `poliklinik` (`kodeplk`, `namaplk`) VALUES
('PLK00001', 'Poli Gigi'),
('PLK00002', 'Poli Anak'),
('PLK00003', 'Poli Umum'),
('PLK00004', 'Poli Dalam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `no_resep` varchar(15) NOT NULL,
  `tgl_resep` date NOT NULL,
  `kodepsn` varchar(15) NOT NULL,
  `total_harga` int(100) NOT NULL,
  `bayar` int(100) NOT NULL,
  `kembali` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`no_resep`, `tgl_resep`, `kodepsn`, `total_harga`, `bayar`, `kembali`) VALUES
('RSP00001', '2017-05-30', 'PSN00001', 132000, 150000, 18000),
('RSP00002', '2017-05-30', 'PSN00004', 378000, 400000, 22000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`kodedetail`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kodedkt`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kodelogin`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kodeobat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kodepsn`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_pembayaran`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`kodeplk`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`no_resep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `kodedetail` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `kodelogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `no_pembayaran` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

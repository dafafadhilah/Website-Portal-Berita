-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 06:32 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `materi_portalberita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'yogi123', '827ccb0eea8a706c4c34a16891f84e7b', 'Yogi Prayogi');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `aktif` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_lengkap`, `username`, `password`, `email`, `aktif`) VALUES
(1, 'Ahmad Firdaus', 'firdaus', '827ccb0eea8a706c4c34a16891f84e7b', 'firdaus@gmail.com', b'1'),
(2, 'Dafa Fadhilah', 'fadhilah', '827ccb0eea8a706c4c34a16891f84e7b', 'dafafadhilah6@gmail.com', b'1'),
(3, 'Indah Kamilia', 'indah', '827ccb0eea8a706c4c34a16891f84e7b', 'abcd@gmail.com', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(80) NOT NULL,
  `foto_by` varchar(50) NOT NULL,
  `teks_berita` text NOT NULL,
  `tgl_posting` datetime NOT NULL,
  `id_admin` int(11) NOT NULL,
  `dilihat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `id_kategori`, `gambar`, `foto_by`, `teks_berita`, `tgl_posting`, `id_admin`, `dilihat`) VALUES
(1, 'Tim Futsal UBSI berhasil Menjuarai Liga Mahasiswa Tingkat Nasional', 2, 'bsi.png', 'bsi.ac.id', 'Berhasil mengalahkan Tim Futsal UNJ, Tim Futsal UBSI Jadi Juara Lima.<br><br>\r\n\r\nÂ Â Â &nbsp&nbspPertandingan sudah memanas sejak menit awal. Pada menit ke-3, pemain bsi bernomor punggung 11 langsung mendapatkan kartu kuning karena melanggar dikotak pinalty. Pemain nomer 10 UNJ tak menyianyiakan peluang. Skor 1-0 bertahan hingga babak pertama usai.<br><br>\r\n\r\n&nbsp&nbsp&nbsp&nbsp&nbspDibabak kedua tempo semakin tinggi. UNJ kembali memperbesar jarak menjadi 2-0 lewat sepakan keras pemain nomer punggung 11 di menit 25. Tak tinggal diam, akhirnya UBSI membuka keran gol di menit 27 lewat tiki taka dan diselesaikan pemain nomer punggung 3. Selisih 1 gol, bsi semakin kencar menyerang. Akhirnya dimenit 34 pemain nomer punggung 17 berhasil membobol gawang UNJ. Hampir berakhir imbang, ternyata serangan balik BSI dimenit akhir berbuah hasil. Pemain bernomer punggung 20 UBSI, berhasil mencetak gol indah chip ball dan membuat Skor akhir 2-3.<br><br>\r\n\r\nDengan Hasil ini UBSI berhak manjuarai Liga Mahasiswa Tingkat Nasional ini.', '2020-03-31 08:30:18', 1, 72),
(2, 'Setahun Menikah, Bintang Persija dan Timnas akhirnya punya momongan', 2, 'olahraga.jpg', 'google', 'Rezaldi hehanusa, biasa di sapa bule. menikah tahun lalu dan baru saja mendapat momongan. Ahamdulillah', '2020-04-01 12:32:30', 1, 99),
(3, 'Tinggal di pedesaan, Pria ini berhasil Ciptakan Robot Cerdas', 3, 'asd.jpg', 'google', 'Dizaman yang semakin modern ini, banyak orang berusaha mengembangkan kemajuan teknologi. \r\n\r\nTak ada yang menyangka, pria kelahiran 1992 asal palu ini. Berhasil menciptakan robot cerdas. Robot ini mengerti dan faham bahasa manusia.', '2020-03-23 15:37:30', 1, 52),
(4, 'Bukan hanya manusia, Harimau jadi hewan pertama yang terinfeksi Virus Corona', 1, 'harimau.png', 'google', 'Harimau', '2020-04-07 14:06:02', 1, 29),
(5, 'Jepang kembali berhasil mencipatakan robot hebat', 3, 'robot.jpg', 'google', 'Jepang memang hebat', '2020-04-07 17:57:56', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(11) NOT NULL,
  `nm_perusahaan` varchar(50) NOT NULL,
  `isi_iklan` varchar(200) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  `hargasewa` double NOT NULL,
  `lamasewa` int(11) NOT NULL,
  `totalharga` double NOT NULL,
  `aktif` bit(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `link` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `nm_perusahaan`, `isi_iklan`, `gambar`, `tgl_mulai`, `tgl_akhir`, `id_admin`, `hargasewa`, `lamasewa`, `totalharga`, `aktif`, `email`, `link`) VALUES
(2, 'tokopedia', 'Nomer #1 Every Day', 'tokped.png', '2020-04-01', '2020-04-30', 1, 15000, 30, 450000, b'1', 'mail@tokped.com', 'http://tokopedia.com'),
(5, 'Yodah Store', 'Sepatu Dengan Kualitas Terbaik', 'yodah.png', '2020-03-31', '2020-04-30', 1, 25000, 31, 775000, b'1', 'mail@yodah.com', 'http://yodah.com'),
(6, 'BukaLapak', 'BukaLapak emang cincai', 'bukalapak.png', '2020-04-06', '2020-04-30', 1, 5000, 25, 125000, b'1', 'mail@bukalapak.com', 'http://bukalapak.com'),
(8, 'Fadhilah Dafa', 'Jangan lupa Subscribe dan tekan Loncengnya ya guys', '20451846_1359519347465545_4315569785363569647_o-picsay.jpg', '2020-04-07', '2020-04-23', 1, 0, 17, 0, b'1', 'ad@fadhilah.com', 'http://fadhilahdafa.com');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'nasional'),
(2, 'olahraga'),
(3, 'teknologi'),
(4, 'makanan'),
(5, 'otomotif'),
(6, 'kesehatan'),
(7, 'perjalanan'),
(8, 'selebritis');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tgl_komentar` datetime NOT NULL,
  `isi_komentar` text NOT NULL,
  `ip_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `id_anggota`, `tgl_komentar`, `isi_komentar`, `ip_address`) VALUES
(15, 1, 2, '2020-03-24 21:36:03', 'kampus gue nihhh', '127.0.0.1'),
(19, 2, 2, '2020-03-24 21:42:07', 'selamat abang', '127.0.0.1'),
(25, 3, 1, '2020-03-30 12:06:29', 'mantep cuk', '127.0.0.1'),
(26, 4, 1, '2020-04-07 16:46:58', 'semoga virusnya cepat hilang aamiin\r\n', '::1'),
(27, 4, 3, '2020-04-07 16:48:45', 'yaallah', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

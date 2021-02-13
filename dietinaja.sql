-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 08:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dietinaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(12000) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `deskripsi`, `gambar`) VALUES
(11, 'Tengah Malam Kelaparan, Lebih Baik Makan Besar atau Santap Camilan?', 'Dr Stuart Farrimond, seorang dokter yang juga penulis kesehatan buku bestseller, mengatakan banyak orang yang bilang telat makan juga bisa membuat berat badan bertambah. Namun ini tidak benar. Berat badan seseorang ditentukan kalori yang dimakan dan dibakar sepanjang hari.', '2118093958_Illustrasi 1.jpg'),
(12, 'Jangan Salah Kaprah, Liposuction Bukan untuk Ngurusin Badan!', 'Memiliki bentuk tubuh ideal adalah idaman semua wanita. Namun ketika berat badan menumpuk alias obesitas, nggak sedikit orang berpikir untuk menurunkan bobot tubuhnya dengan cara sedot lemak alias liposuction. \r\n\r\nNah inilah yang harus diluruskan, Ladies! Kamu harus tahu bahwa sedot lemak bukanlah cara untuk menurunkan berat badan. Spesialis Bedah Plastik dari RS EMC, dr. Imam Susanto, Sp.B, Sp.BP-RE(K) menegaskan, jika ada orang dengan berat badan (BB) berlebihan dan datang ke dokter bedah plastik untuk menurunkan berat badan, itu salah. ', '125055376_Illustrasi 2.jpeg'),
(13, 'Berisiko Masalah Kesehatan, Ini Ciri Makanan Olahan Ultra Proses', 'Makanan ultra proses adalah hal yang mudah ditemui di zaman modern. Namun, konsumsi jenis makanan olahan semacam itu berisiko menimbulkan masalah kesehatan.\r\n\r\nAsosiasi Ibu Menyusui Indonesia (AIMI) mengatakan bahwa saat ini, makanan olahan seperti minuman ringan dalam kemasan, aneka keripik mengandung pengawet, pemanis, pewarna buatan, perisa, dan mengandung gula dan garam tinggi, dengan cepat menggantikan makanan asli di dunia.', '113889706_Illustrasi 2.jpg'),
(14, 'Ganti Sarapan Nasi Anda dengan Buah Ini agar Jantung Lebih Sehat', 'Dokter jantung menyarankan sarapan dengan roti panggang dan alpukat sebagai buah pendamping bisa menyehatkan jantung. Selain itu, sarapan roti dengan buah-buahan seperti beri atau pisang juga ternyata memberi keuntungan untuk kesehatan jantung Anda.\r\n\r\nBerikut alasan dokter tersebut menyarankan sarapan dengan roti dan alpukat sebagai sarapan sehat bagi jantung.\r\n1. Kandungan vitamin dan mineral yang menyehatkan jantung\r\n\r\nMelihat kombo roti gandum dengan alpukat hingga beri dan pisang, Anda mungkin tahu masing-masing mengandung vitamin dan mineral yang dibutuhkan tubuh untuk jantung yang kuat.', '2079359253_Illustrasi 3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_makanan`
--

CREATE TABLE `jadwal_makanan` (
  `id` int(11) NOT NULL,
  `makanan_id` int(11) DEFAULT NULL,
  `rentang_kalori` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `jadwal_makanan` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadwal_makanan`
--

INSERT INTO `jadwal_makanan` (`id`, `makanan_id`, `rentang_kalori`, `deskripsi`, `hari`, `jadwal_makanan`, `gambar`) VALUES
(1, 8, '800 - 100 kkal', '$deskripsi $deskripsi $deskripsi $deskripsi $deskripsi $deskripsi ', 'senin', 'sarapan', '5841691_02_lunch.jpg'),
(2, 9, '800 - 1000 kkal', 'ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi', 'senin', 'makan siang', '5841691_02_lunch.jpg'),
(3, 10, '500 - 2000 kkal', 'asasasasasasas', 'senin', 'makan malam', '1970260953_03_dinner.jpg'),
(4, 8, '500 - 2000 kkal', 'sadasdasdasd', 'selasa', 'sarapan', '1544828825_03_menu_balanced.jpg'),
(5, 11, '500 - 2000 kkal', 'asdasd', 'selasa', 'makan siang', '2083847561_02_menu_muscle.jpg'),
(6, 10, '800 - 1000 kkal', 'sdfdsfdsf', 'selasa', 'makan malam', '1138526958_03_dinner.jpg'),
(7, 10, '800 - 100 kkal', 'asdasd', 'kamis', 'sarapan', '1735383074_03_menu_balanced.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama_tempat` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `gambar`, `nama_tempat`, `lat`, `lng`, `lokasi`) VALUES
(1, '1629605312_03_menu_balanced.jpg', 'Nasa Gym', '-6.9154474', '107.6532114', 'Jl. Cikampek XV No.18, Antapani Tengah, Kec. Antapani, Kota Bandung, Jawa Barat 40291'),
(2, '1535867701_03_dinner.jpg', 'Gelora Perdamas', '-6.9808792', '108.0810277', 'Cikareo Hilir, Desa, South Cikareo, Wado, Sumedang Regency, West Java 45373'),
(3, '1047995825_02_menu_muscle.jpg', 'ZHEKIREY FITNESS CENTER', '-7.040915', '108.0838946', 'Jl. Raya Sumedang - Cibeureum, Cisitu, Kec. Malangbong, Kabupaten Garut, Jawa Barat 44188'),
(4, '2023681972_02_lunch.jpg', 'Top Gym Center', '-6.90756', '107.6787663', 'Jl. A.H. Nasution No.7, Pasir Endah, Kec. Ujung Berung, Kota Bandung, Jawa Barat 40619'),
(5, '507139646_01_menu_slimming.jpg', 'Rai Fitness Bandung', '-6.880711', '107.5891627', '12, Jl. Karangsari No.12, Pasteur, Sukajadi, Bandung City, West Java 40161'),
(7, '1055610548_01_breakfast.jpg', 'Libra Gym', '-6.9620064', '107.792183', 'Jl. Rancaekek No.97, Mangunarga, Kec. Cimanggung, Kabupaten Sumedang, Jawa Barat 40394'),
(8, '115217305_blog_01-1150x720.jpg', 'sdfsdf', '-6.9620064', '107.792183', 'sdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `judul_makanan` varchar(255) DEFAULT NULL,
  `kalori` varchar(255) DEFAULT NULL,
  `kategori` enum('1','2','3','4') DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `judul_makanan`, `kalori`, `kategori`, `deskripsi`, `gambar`) VALUES
(8, 'satu', '120 - 500 kkal', '1', 'tes123', '1794709013_blog_01-1150x720.jpg'),
(9, 'sdfdsfsdf', '120 - 700 kkal', '2', 'ddfsfdsdf', '181561126_banner-18.jpg'),
(10, 'asdasdasdasd', '120 - 700 kkal', '3', 'asdasdasdasdasd', '762799827_blog_01-1150x720.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_makanan`
--
ALTER TABLE `jadwal_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jadwal_makanan`
--
ALTER TABLE `jadwal_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

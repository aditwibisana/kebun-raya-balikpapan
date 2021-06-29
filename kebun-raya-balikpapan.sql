-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 12:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kebun-raya-balikpapan`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_flora`
--

CREATE TABLE `daftar_flora` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_flora` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_flora` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_flora`
--

INSERT INTO `daftar_flora` (`id`, `nama_flora`, `deskripsi_flora`, `created_at`, `updated_at`) VALUES
(1, 'Bunga Raflesia', 'Rafflesia adalah marga tumbuhan berbunga yang semua anggotanya adalah parasit obligat. Evolusi yang dialami marga ini sangat terspesialisasi sehingga anggotanya tidak lagi memiliki organ seperti akar dan batang yang jelas, melainkan menjadi berkas-berkas yang aktif tumbuh dan menyerap nutrisi dari jaringan tumbuhan inangnya.\r\n\r\nAnggota-anggotanya sebagian besar tumbuh alami di hutan-hutan tropis sampai subtropis Asia Tenggara (termasuk maritim). Keseluruhan terdapat kira-kira 27 spesies (termasuk empat yang belum sepenuhnya diketahui cirinya seperti yang dikenali oleh Meijer 1997)[butuh rujukan]. Deskripsi mengenai Rafflesia dibuat oleh Dr. Joseph Arnold tahun 1818 berdasarkan spesimen yang diberikan pemandunya, seorang penduduk asli Sumatera, dan dinamai berdasarkan nama Thomas Stamford Raffles, pemberi dana ekspedisinya.', '2021-05-25 04:52:55', '2021-05-25 05:16:20'),
(2, 'Mahoni', 'Mahoni termasuk pohon besar dengan tinggi pohon mencapai 35–40 m dan diameter mencapai 125 cm. Batang lurus berbentuk silindris dan tidak berbanir. Kulit luar berwarna cokelat kehitaman, beralur dangkal seperti sisik, sedangkan kulit batang berwarna abu-abu dan halus ketika masih muda, berubah menjadi cokelat tua, beralur dan mengelupas setelah tua. Mahoni baru berbunga setelah berumur 7 tahun, mahkota bunganya silindris, kuning kecoklatan, benang sari melekat pada mahkota, kepala sari putih, kuning kecoklatan. Buahnya buah kotak, bulat telur, berlekuk lima, warnanya cokelat. Biji pipih, warnanya hitam atau cokelat. Mahoni dapat ditemukan tumbuh liar di hutan jati dan tempat-tempat lain yang dekat dengan pantai, atau ditanam di tepi jalan sebagai pohon pelindung.Tanaman yang asalnya dari Hindia Barat ini, dapat tumbuh subur bila tumbuh di pasir payau dekat dengan pantai.', '2021-05-25 05:17:17', '2021-05-25 05:17:17'),
(3, 'Pohon Ulin', 'Pohon Ulin memiliki nama ilmiah Eusideroxylon zwageri, pohon ini disebut pohon besi karena  merupakan kayu terkuat dari habitat aslinya, Pulau Kalimantan, kayu ulin juga sangat  tahan lama dalam penggunaannya, dan tahan rayap.\r\n\r\nKarena terkenal kuatnya,  kayu Ulin biasanya digunakan sebagai bahan baku utama untuk membuat rumah bagi warga Kalimantan yang bermukim di daerah rawa dan perairan. Bahkan,hampir semua bagian rumah dibuat dengan kayu kuat ini. Atapnya juga dibuat dari potongan tipis kayu ulin, disebut atap sirap. Kayu besi ini juga dimanfaatkan sebagai bangunan kontruksi jembatan, tiang listrik, papan lantai, bantalan rel, pancang dermaga, saluran air, juga lambung kapal.\r\n\r\nKayu ulin bisa tetap utuh ratusan bahkan sampai ribuan tahun. Bahkan jika terpendam di tanah tentu usianya lebih lama dibanding di udara terbuka, karena pengaruh cuaca. Tak heran jika di Kalimantan banyak ditemukan batang kayu ulin yang terpendam di tanah namun masih utuh sampai sekarang.\r\n\r\nTinggi pohon bisa mencapai hingga 35-50 m dengan panjang batang bebas cabang 5-20 m, berdiameter  60-80 cm dan juga  bisa mencapai hingga 120 cm yang pada saat ini semakin sulit didapatkan di hutan. Kayu ini  juga tahan terhadap perubahan suhu, kelembaban dan pengaruh air laut sehingga sifat kayunya sangat berat dan khas, agak terpisah dari pepohonan lain dan dikelilingi jalur jalan melingkar dari kayu ulin. Di bagian bawah pohon ulin terdapat bagian yang berlobang.\r\n\r\nDilansir dari Tribun Kalteng, dan Kompas.com,  Pohon ulin yang ada saat ini memiliki tinggi 20 meter dan berdiameter 2,47 meter ini merupakan ulin terbesar di Indonesia, juga dunia. Pohon yang diperkirakan berumur 1.000 tahun ini menjadi ikon Wisata Alam Sangkima, bagian terluar dari Taman Nasional Kutai, hutan hujan tropis dataran rendah di Kabupaten Kutai Timur, Kalimantan Timur. \r\n\r\nUlin adalah salah satu jenis kayu hutan tropikal basah yang tumbuh secara alami di wilayah sumatera bagian selatan dan Kalimantan. Kayu Ulin juga tersebar di kawasan Asia Tenggara, seperti Pulau Sumatera, Bangka Belitung, Kalimantan Kepulauan Sulu, Sabah, Serawak dan Pulau Palawan di Filipina diawal tahun 1900-an.\r\n\r\nKini populasi pohon ulin semakin langka, dan terancam punah. Dibeberapa negara lain pun dapat dikatakan punah. Hal ini terjadi akibat eksploitasi yang dilakukan secara besar-besaran dimasa yang lalu, sehingga menyebabkan harga kayu ini tergolong cukup mahal untuk didapat saat ini. Flora ini menjadi sumber daya alam yang dilindungi di tanah air dan perdagangan dan pemanfaatannya mendapat pengawasan serius dan ketat dari pemerintah khususnya.', '2021-05-25 05:57:39', '2021-05-25 05:57:39'),
(4, 'Pucuk Merah Kaltim', 'Pucuk merah atau daun pucuk merah adalah spesies tumbuhan yang dikenal sebagai tanaman hias yang berasal dari genus Syzygium. Warna tunas daun yang baru muncul memiliki warna merah menyala sehingga tumbuhan ini memiliki sebutan Pucuk Merah.', '2021-06-17 02:39:07', '2021-06-17 02:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_spot`
--

CREATE TABLE `daftar_spot` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_spot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_tempat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_spot`
--

INSERT INTO `daftar_spot` (`id`, `nama_spot`, `deskripsi_tempat`, `created_at`, `updated_at`) VALUES
(1, 'Gazebo B', 'Dengan ukuran 100x100m sangat memungkinkan untuk bersantai dibawah pohon yang sejuk', '2021-05-24 23:53:33', '2021-06-17 02:59:25'),
(2, 'Shelter Timur A', 'Shelter adalah struktur atau bangunan arsitektur dasar yang memberikan perlindungan dari lingkungan setempat. Memiliki tempat berteduh, aman dan retret, yaitu rumah, umumnya dianggap sebagai kebutuhan manusia fisiologis yang mendasar, fondasi untuk mengembangkan motivasi manusia yang lebih tinggi.', '2021-05-25 01:47:03', '2021-05-25 02:00:29'),
(4, 'Shelter Timur B', 'Shelter adalah struktur atau bangunan arsitektur dasar yang memberikan perlindungan dari lingkungan setempat. Memiliki tempat berteduh, aman dan retret, yaitu rumah, umumnya dianggap sebagai kebutuhan manusia fisiologis yang mendasar, fondasi untuk mengembangkan motivasi manusia yang lebih tinggi.', '2021-05-25 02:01:05', '2021-05-25 02:01:05'),
(5, 'Lingkaran Berbahagia', 'Sebuah spot yang sangat menarik di kalangan pemuda', '2021-06-17 02:40:37', '2021-06-17 02:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_tempat`
--

CREATE TABLE `daftar_tempat` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_tempat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `foto_tempat1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_tempat2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_tempat3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_tempat`
--

INSERT INTO `daftar_tempat` (`id`, `nama_tempat`, `deskripsi_tempat`, `harga`, `foto_tempat1`, `foto_tempat2`, `foto_tempat3`, `created_at`, `updated_at`) VALUES
(1, 'Bagian A', 'Tempat yang menarik untuk berkemah, bisa untuk acara kampus, keluarga dan acara bersama teman-teman', 500000, 'gambar1.jpg', 'gambar2.jpg', 'gambar3.jpg', NULL, NULL),
(2, 'Keluarga', 'AA', 35000, 'Lokasi Kaltim (2).png', 'Home.png', 'Rute Perjalanan.png', '2021-06-04 17:01:28', '2021-06-22 02:25:30'),
(3, 'Paket Hemat', 'Satu paket terdiri dari 10 orang penambahan orang dikenakan biaya Rp. 20.000/orang', 180000, '056043200_1530864492-camping.jpg', 'pexels-xue-guangjian-1687845-1-a0129c1fd2945a4232ed8b5c5aff2355-395aa56aa5f527797d3d36ca2f34e3ae_600x400.jpg', 'hipwee-lokasi-sukamantri-camping-ground.jpg', '2021-06-04 17:28:57', '2021-06-04 17:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pengguna` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berkunjung` date NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pengguna`
--

INSERT INTO `data_pengguna` (`id`, `nama_pengguna`, `tanggal_berkunjung`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Bayu Adhitya Wibisana', '2021-05-08', 85246557810, 'Balikpapan', '2021-05-07 21:00:40', '2021-05-07 21:00:40'),
(2, 'Aditwibisana', '2021-05-28', 81256813171, 'Balikpapan', '2021-05-07 21:53:43', '2021-05-07 21:53:43'),
(3, 'Kesuma Bagaskara B', '2021-05-15', 8888, 'Karang Rejo', '2021-05-08 05:09:07', '2021-06-11 18:04:39'),
(5, 'Freddie Mercury', '2021-05-23', 856772200, 'London', '2021-05-23 05:36:24', '2021-05-23 05:36:24'),
(6, 'Adit', '2021-05-23', 123456, 'Balikpapan', '2021-05-23 05:43:10', '2021-05-23 05:43:10'),
(7, 'Keiko Cordelia', '2021-05-23', 82159494905, 'Manado', '2021-05-23 06:01:41', '2021-05-25 01:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengunjung`
--

CREATE TABLE `data_pengunjung` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pengunjung`
--

INSERT INTO `data_pengunjung` (`id`, `user_id`, `email`, `no_hp`, `jenis_kelamin`, `nama_lengkap`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 1, 'b.awibisana@gmail.xn--com-bj33b', 81256813171, 'Laki-Laki', 'Bayu Adhitya Wibisana', 'Balikpapan', '2021-05-08 20:29:56', '2021-06-17 02:54:12'),
(2, 3, '10191015@student.itk.ac.id', 85246557810, 'Laki-Laki', 'Bayu Wibisana', 'Manado', '2021-05-10 17:37:23', '2021-05-20 23:38:38'),
(3, 3, 'bolot@gmail.co.id', 8881484148, 'Laki-Laki', 'Haji Bolot W', 'Balikpapan', '2021-05-10 17:41:48', '2021-06-17 02:50:09'),
(6, 6, '10191012@student.itk.ac.ud', 85246050710, 'Laki-Laki', 'Anugrah Deagung', 'Kilo 24', '2021-05-21 19:17:52', '2021-06-11 18:03:30'),
(7, 10, 'abcd@gmail.com', 6281256813171, 'Laki-Laki', 'Harry Maguire', 'London', '2021-05-21 22:19:37', '2021-05-21 22:19:37'),
(8, 11, 'bayuwibisana818@gmail.com', 81244553286, 'Laki-Laki', 'Clint Acome', 'Batakan', '2021-05-29 07:33:02', '2021-05-29 07:33:02'),
(9, 9, 'okelah@gmail.co.ud', 85233114432, 'Laki-Laki', 'Okelahh D', 'Bontang', '2021-06-11 15:43:10', '2021-06-11 18:03:47'),
(10, 13, '10191067@student.itk.ac.id', 85820664453, 'Perempuan', 'Qurrota Ayun', 'Korea', '2021-06-17 02:36:28', '2021-06-17 02:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_05_07_144139_create_data_pengguna_table', 1),
(4, '2021_05_08_060130_create_data_pengunjung_table', 2),
(5, '2021_05_14_030228_create_daftar_tempat_table', 3),
(6, '2021_05_18_124500_create_pemesanan_table', 4),
(7, '2021_05_25_012509_create_daftar_spot_table', 5),
(8, '2021_05_25_095502_create_daftar_flora_table', 6),
(9, '2021_05_25_214125_create_pembayaran_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `tempat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `total_harga` bigint(20) NOT NULL,
  `bukti` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konfirmasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `tempat_id`, `user_id`, `nama_tempat`, `tanggal_pesan`, `check_in`, `check_out`, `durasi`, `harga`, `total_harga`, `bukti`, `konfirmasi`, `created_at`, `updated_at`) VALUES
(13, 1, 10, 'Bagian A', '2021-06-14', '2021-06-14', '2041-06-14', 7305, 500000, 3652500000, 'Belum Ada', 'Konfirmasi', '2021-06-13 20:27:43', '2021-06-22 02:46:56'),
(14, 1, 1, 'Bagian A', '2021-06-17', '2021-06-17', '2021-06-19', 2, 500000, 1000000, 'Belum Ada', 'Belum Konfrimasi', '2021-06-17 02:37:43', '2021-06-17 02:37:43'),
(15, 1, 1, 'Bagian A', '2021-06-17', '2021-06-18', '2021-08-18', 61, 500000, 30500000, 'Belum Ada', 'Belum Konfrimasi', '2021-06-17 03:08:54', '2021-06-17 03:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `no_hp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pengunjung', 'Bayu Adhitya Wibisana', 'b.awibisana@gmail.com', 81256813171, '$2y$10$cjFZzp5J9rwFMICU.cJ2zeM1xMvogBPnvI8BAhhX4ph66Mb3pIq.O', 'I8iCPFsFKA9fqV6F80FT14bk9eOeSYwtP3G8vXmk5XsX2dfw0dSfmbCnOLVr', '2021-05-09 14:24:28', '2021-06-17 02:54:12'),
(3, 'pengunjung', 'Haji Bolot W', 'bolot@gmail.co.id', 8881484148, '210901', 'A7oGNc45JOaH6hmm4tngdMzwaHfROuLUYPUNZbTiq2Se9vtaZmncnsvgn7eu', '2021-05-10 17:37:22', '2021-06-17 02:50:09'),
(5, 'pengunjung', 'Christiano Ronaldo', 'hallo21@gmail.com', 811534677, 'aabbccddeeff', 'i8RzIVW3938uBmDddNK2zgpayosD3ftXNeayLzH0fYBYIb5tUMe6qmTLU9q9', '2021-05-10 17:41:48', '2021-05-21 18:21:03'),
(6, 'pengunjung', 'Anugrah Deagung', '10191012@student.itk.ac.ud', 85246050710, '$2y$10$Lumi/h39o0vNxG.a4H6l3etFME8mSMfMqWHjr51hN5CxlcuhEfZ/S', 'OW0CmriJ3cRzhTQMHPMXSwx9zd5jX6W0ELDySJzLmI0SgIIYVdiLcL4PdGXM', '2021-05-10 17:45:26', '2021-06-11 18:03:30'),
(7, 'pengunjung', 'Christiano Ronaldo', 'hallo@gmail.com', 811534677, '$2y$10$ehIgn1u.tN1AG/EeMFvopuKlNLOz8jE8xIOw04Y/wp93aBWMhKkPm', '42w6HH9bmJN7K05eHWf9N4TxpFGKneEdAIMBm48wzjvq0LodcPep38GtKhVN', '2021-05-18 10:50:22', '2021-05-18 10:50:22'),
(8, 'admin', 'admin', 'admin@administrator.com', 81298894476, '$2y$10$wFGt.UJiAqQjlcvX9/cCGOXUZsWK/an6sw.dz6uZz2qJ7qW.al3C2', 'AiBn3woi4vAbiM9EVxpkaX31PSFZzuDpqOyN1tJYvyV6mxMcCWviZIUpNeLm', '2021-05-20 18:29:09', '2021-05-20 18:29:09'),
(9, 'pengunjung', 'Okelahh D', 'okelah@gmail.co.ud', 85233114432, '$2y$10$vD2NyhnZ6OIPsxiLg33Tder4/RU0.Kew8zTyobJp8bALeYyVxkI5W', 'F78DhJ62AYYLhToEYLz1MFxffP22QI33YhpKLxE37RJXHGq28bb705tcHElb', '2021-05-21 19:17:52', '2021-06-11 18:03:47'),
(10, 'pengunjung', 'Harry Maguire', 'abcd@gmail.com', 6281256813171, '$2y$10$Q5tedrzgdo5Q5UKSqrF9LuvSELW9FzxkQkUGBm35c.fwnjXG9HmKu', 'b8gRwghUKarWeKG3hxqQ7lK1ISlPNoBjlThiCZ5GZQ69rrcFUjYPX2FbcNUg', '2021-05-21 22:19:37', '2021-05-21 22:19:37'),
(11, 'pengunjung', 'Clint Acome', 'bayuwibisana818@gmail.com', 81244553286, '$2y$10$aODBkyF80cQFlAW74As7l.FCQP0G.OR7k7DvLZEo2If0nH4vh.ljK', 'havz2fKhz5cgHfRhpNonMdAWNEDS5plVMJofwT6XbbAjhfC5oGYHdrybjM0a', '2021-05-29 07:33:02', '2021-05-29 07:33:02'),
(12, 'pengunjung', 'Okelahh', 'okelah@gmail.com', 85233114432, '$2y$10$Es8M4x5bDCmbQCzfF2zme.NDxOdZAEsAPnFRCcxX1HjUHu47LReEO', 'd2zCAOzShQiNnYxYQSuVY8mqDx80gSiW5fL9Ghk8qIL8j5dflGCEQZl4KcOH', '2021-06-11 15:43:10', '2021-06-11 15:43:10'),
(13, 'pengunjung', 'Qurrota Ayun', '10191067@student.itk.ac.id', 85820664453, '$2y$10$SlE4uSlFbzIjGjBlpoOk1uJ1xhMQyWsCQu4hE3dUegaAHrAdgiHEi', 'hbpTbrC1sWSKwQ6BQjbTPBqKFwleiThEF0i3hZzGVSOk3bw8dbdx9ji2DdiX', '2021-06-17 02:36:28', '2021-06-17 02:36:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_flora`
--
ALTER TABLE `daftar_flora`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_spot`
--
ALTER TABLE `daftar_spot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_tempat`
--
ALTER TABLE `daftar_tempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pengunjung`
--
ALTER TABLE `data_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_flora`
--
ALTER TABLE `daftar_flora`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftar_spot`
--
ALTER TABLE `daftar_spot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `daftar_tempat`
--
ALTER TABLE `daftar_tempat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_pengunjung`
--
ALTER TABLE `data_pengunjung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

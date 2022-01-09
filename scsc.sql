-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 04:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `picture` varchar(191) NOT NULL,
  `author` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `category` varchar(191) NOT NULL,
  `status` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `slug`, `picture`, `author`, `text`, `category`, `status`) VALUES
(1, 'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia', 'Dolorum-optio-tempore-voluptas-dignissimos-cumque-fuga-qui-quibusdam-quia', 'blog-1.jpg', 'John Doe', 'Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.\r\n                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.', 'Update-Teknologi', 1),
(2, 'Nisi magni odit consequatur autem nulla dolorem', 'Nisi-magni-odit-consequatur-autem-nulla-dolorem', 'blog-2.jpg', 'John Doe', 'Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.\r\n                  Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias odio quos distinctio.', 'Update-Teknologi', 1),
(3, 'Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.', 'Possimus-soluta-ut-id-suscipit-ea-ut.-In-quo-quia-et-soluta-libero-sit-sint.', 'blog-3.jpg', 'John Doe', 'Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.\r\n                  Doloremque est saepe laborum aut. Ipsa cupiditate ex harum at recusandae nesciunt. Ut dolores velit.', 'Tips-and-Trik', 1),
(4, 'Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.', 'Non-rem-rerum-nam-cum-quo-minus.-Dolor-distinctio-deleniti-explicabo-eius-exercitationem.', 'blog-4.jpg', 'John Doe', 'Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.\r\n                  Quia sed sunt. Ea asperiores expedita et et delectus voluptates rerum. Id saepe ut itaque quod qui voluptas nobis porro rerum. Quam quia nesciunt qui aut est non omnis. Inventore occaecati et quaerat magni itaque nam voluptas. Voluptatem ducimus sint id earum ut nesciunt sed corrupti nemo.', 'Update-Teknologi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `artikel_category`
--

CREATE TABLE `artikel_category` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel_category`
--

INSERT INTO `artikel_category` (`id`, `name`, `slug`, `status`) VALUES
(1, 'Tips and Trik', 'Tips-and-Trik', 1),
(2, 'Update Teknologi', 'Update-Teknologi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `corefitur`
--

CREATE TABLE `corefitur` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `icon` varchar(191) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corefitur`
--

INSERT INTO `corefitur` (`id`, `name`, `icon`, `description`) VALUES
(1, 'Tenang di Rumah', 'icofont-home', 'Teknisi datang dirumah, dan pelanggan bisa mengamati proses service yang dilakukan'),
(2, 'Device Sementara', 'icofont-computer', 'Selama pengerjaan, kantor dapat meminjaman device kepada pelanggan'),
(3, 'Garansi Aman', 'icofont-ebook', 'Garansi service dengan durasi 14 hari beserta kemudahan saat klaim garansi');

-- --------------------------------------------------------

--
-- Table structure for table `homemenu`
--

CREATE TABLE `homemenu` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` varchar(191) NOT NULL,
  `status` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homemenu`
--

INSERT INTO `homemenu` (`id`, `name`, `value`, `status`) VALUES
(1, 'Home', 'Home', 1),
(2, 'About', 'About', 1),
(3, 'Service', 'Service', 1),
(4, 'Shop', 'Shop', 1),
(5, 'Artikel', 'Artikel', 1),
(6, 'Keranjang', 'Keranjang', 1),
(9, 'Akunsaya', 'Akunsaya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `homemenuabout`
--

CREATE TABLE `homemenuabout` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` varchar(191) NOT NULL,
  `status` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homemenuabout`
--

INSERT INTO `homemenuabout` (`id`, `name`, `value`, `status`) VALUES
(1, 'about_us', 'Tentang kami', 1),
(2, 'tim', 'Anggota', 1),
(3, 'sop', 'SOP', 1),
(4, 'faq', 'FAQ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoiceproduk`
--

CREATE TABLE `invoiceproduk` (
  `id` int(191) NOT NULL,
  `product` varchar(191) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `address` text NOT NULL,
  `jumlah` varchar(191) NOT NULL,
  `catatan` text NOT NULL,
  `kategori` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `kurir` varchar(191) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoiceproduk`
--

INSERT INTO `invoiceproduk` (`id`, `product`, `photo`, `name`, `address`, `jumlah`, `catatan`, `kategori`, `status`, `kurir`, `price`) VALUES
(1, 'Router TP-Link 200Mbps', 'portfolio-3.jpg', 'Rahim kun', 'Rahim kun', '1', '-', 'keranjang', 'Belum dikonfirmasi', ' ', 183000),
(2, 'Router TP-Link 300Mbps', 'portfolio-2.jpg', '', '', '10', '-', 'keranjang', 'Belum dikonfirmasi', ' ', 1330000);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `price` int(191) NOT NULL,
  `status` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(191) NOT NULL,
  `id_user` int(191) NOT NULL,
  `quotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `id_user`, `quotes`) VALUES
(1, 24, 'Jangan pernah nginep dihotel dikota kamu tinggal, boros cuwg!'),
(2, 22, 'Remember everyday \"you\'re should be productive mindset, you must grow from yesterday and then you will be success\"'),
(3, 25, 'Rakus itu penting, tapi jangan serakus itu. Yang penting pas ditangan');

-- --------------------------------------------------------

--
-- Table structure for table `mainsidebar`
--

CREATE TABLE `mainsidebar` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `role` int(191) NOT NULL,
  `status` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainsidebar`
--

INSERT INTO `mainsidebar` (`id`, `name`, `role`, `status`) VALUES
(1, 'General', 1, 1),
(2, 'General', 2, 1),
(3, 'General', 3, 1),
(4, 'General', 4, 1),
(5, 'General', 5, 1),
(6, 'General', 6, 1),
(7, 'General', 7, 1),
(8, 'Karyawan', 1, 1),
(9, 'Karyawan', 2, 1),
(10, 'Karyawan', 5, 1),
(11, 'Karyawan', 6, 1),
(12, 'Produk', 1, 1),
(13, 'Produk', 3, 1),
(14, 'Produk', 6, 1),
(15, 'Artikel', 1, 1),
(16, 'Artikel', 3, 1),
(17, 'Artikel', 4, 1),
(18, 'Invoice', 1, 1),
(19, 'Invoice', 5, 1),
(20, 'Invoice', 6, 1),
(21, 'Transaksi', 1, 1),
(22, 'Transaksi', 6, 1),
(23, 'Transaksi', 7, 1),
(24, 'Refreshing', 1, 0),
(25, 'Refreshing', 2, 0),
(26, 'Refreshing', 3, 0),
(27, 'Refreshing', 4, 0),
(28, 'Refreshing', 5, 0),
(29, 'Refreshing', 7, 0),
(30, 'Saran dan Kritik', 1, 1),
(31, 'Saran dan Kritik', 2, 1),
(32, 'Saran dan Kritik', 3, 1),
(33, 'Saran dan Kritik', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `link` varchar(191) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `category` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `condition` int(191) NOT NULL,
  `ready` varchar(191) NOT NULL,
  `supply` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `status` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `name`, `link`, `photo`, `category`, `description`, `condition`, `ready`, `supply`, `price`, `status`) VALUES
(1, 'HDD 1 TB', 'HDD-1-TB', 'portfolio-1.jpg', 'Penyimpanan', 'Penyimpanan HDD berkapasitas 1000 GB dengan garansi 1 bulan', 1, 'Ready', 30, 500000, 1),
(2, 'Router TP-Link 300Mbps', 'Router-TP-Link-300Mbps', 'portfolio-2.jpg', 'Internet', 'router', 1, 'Ready', 15, 133000, 1),
(3, 'Router TP-Link 200Mbps', 'Router-TP-Link-200Mbps', 'portfolio-3.jpg', 'Internet', 'router', 1, 'Ready', 20, 183000, 1),
(4, 'Router TP-Link 500Mbps', 'Router-TP-Link-500Mbps', 'portfolio-4.jpg', 'Internet', 'Internet', 1, 'Ready', 25, 383000, 1),
(5, 'Proyektor 2d Inch Samsung', 'Proyektor-2d-Inch-Samsung', 'portfolio-5.jpg', 'Proyektor', 'proyektor larang', 1, 'Ready', 10, 2200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produkcategory`
--

CREATE TABLE `produkcategory` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkcategory`
--

INSERT INTO `produkcategory` (`id`, `name`, `status`) VALUES
(1, 'Penyimpanan', 1),
(2, 'Proyektor', 1),
(3, 'Internet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `name`, `value`, `description`) VALUES
(1, 'title', 'Service Computer Semarang City', 'nama perusahaan'),
(2, 'singkatan', 'SCSC', 'singkatan nama perusahaan'),
(3, 'logo', 'stisla-fill.svg', 'logo perusahaan\r\n'),
(4, 'email', 'scscofficial@scsc.com', 'Email official perusahaan'),
(5, 'telp', '+62 8953 2692 0220', 'Number telepon perusahaan'),
(6, 'alamat', 'Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131', 'Alamat Office Perusahaan'),
(7, 'twitter', 'https://twitter.com/excel_shelby', 'social media twitter official'),
(8, 'facebook', 'https://www.facebook.com/wahyu.punk.988', 'social media facebook official'),
(9, 'instagram', 'https://www.instagram.com/w.roch19/', 'social media instagram official'),
(10, 'skype', '#', 'social media skype official'),
(11, 'linkedin', 'https://www.linkedin.com/in/wahyu-rochman-bantoro/', 'social media linkedin official'),
(12, 'misi', 'Untuk berkembang jangan ada halangan', 'misi dari perusahaan'),
(13, 'visi', 'Memberikan kemudahan dalam memperbaiki perangkat komputer di era digitalisasi ini', 'visi dibentuknya perusahaan'),
(14, 'Tentang', 'Jasa service ini didirikan oleh mahasiswa udinus dengan mata kuliah technopreneur dengan upaya mendapat nilai paling baik diantara kelompok lain!', 'Tentang perusahaan'),
(15, 'photo', 'main-photo.jpg', 'photo orang service'),
(16, 'sop', '1.Pengguna dengan ini menyatakan bahwa pengguna adalah orang yang cakap dan mampu untuk mengikatkan dirinya dalam sebuah perjanjian yang sah menurut hukum.<br>2.Tokopedia tidak memungut biaya pendaftaran kepada Pengguna.', 'Standard Operating Procedure Perusahaan'),
(17, 'FAQ', 'ya begituuu', 'Pertanyaan Sering Ditanyakan'),
(18, 'slogan', 'Memberikan kemudahan dalam memperbaiki perangkat komputer di era digitalisasi ini', 'Muncul pada home pertama'),
(19, 'adminkonfirmasi', '+62895326920220', 'admin konfirmasi pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` int(191) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `value`, `description`) VALUES
(1, 'CEO', 1, 'Chief Excecutif Officer'),
(2, 'CTO', 2, 'Chief Technical Officer'),
(3, 'CMO', 3, 'Chief Marketing Officer'),
(4, 'Article Creator', 4, 'Article Creator'),
(5, 'Teknisi', 5, 'Teknisis dari Service Computer Semarang City'),
(6, 'Admin Invoice', 6, 'Admin'),
(7, 'User', 7, 'User Tercinta');

-- --------------------------------------------------------

--
-- Table structure for table `roleaccess`
--

CREATE TABLE `roleaccess` (
  `id` int(191) NOT NULL,
  `role` int(191) NOT NULL,
  `category` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(191) NOT NULL,
  `icon` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `estimation` varchar(191) NOT NULL,
  `level` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `status` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `icon`, `name`, `description`, `estimation`, `level`, `price`, `status`) VALUES
(1, 'bx-laptop', 'Pemeliharaan Komputer atau Laptop', 'Pemeliharaan komputer atau laptop secara keseluruhan secara detail', '1-2 hari', 1, 0, 1),
(2, 'bx-laptop', 'Service Laptop atau Komputer', 'Service Laptop atau Komputer segala kondisi baik mati atau nyala', '1-5 hari', 1, 0, 1),
(3, 'bx-laptop', 'Instal Ulang', 'Instal ulang OS terbaru pada perangkat komputer atau laptop', '1-2 hari', 1, 0, 1),
(4, 'bx-laptop', 'Upgrade Device', 'Upgrade spesifikasi segala bentuk perangkat komputer atau laptop', '3-5 hari', 1, 0, 1),
(5, 'bx-laptop', 'Rakit Komputer', 'Rakit komputer secara keseluruhan item hardware', '4-10 hari', 1, 0, 1),
(6, 'bx-laptop', 'Set Up Workspace', 'Desain dan mengatur ulang tata letak ruang kerja', '1-3 hari', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `serviceitem`
--

CREATE TABLE `serviceitem` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `price` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `showservice`
--

CREATE TABLE `showservice` (
  `id` int(191) NOT NULL,
  `id_show` int(191) NOT NULL,
  `id_service` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` int(191) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `name`, `status`, `description`) VALUES
(1, 'Dashboard', 1, 'Halaman Utama pengguna'),
(2, 'Pemberitahuan', 1, 'Menampilkan pemberitahuan informasi dari admin'),
(3, 'Pesan', 0, 'Menampilkan pesan percakapan user dengan admin'),
(4, 'Akun', 1, 'View and Update data user'),
(5, 'Teknisi', 1, 'Menampilkan transaksi dan riwayat status service user'),
(6, 'Admin', 1, 'Menampilkan transaksi dan riwayat pembelian item service user'),
(7, 'Service', 1, 'Menampilkan voucher yang tersedia'),
(8, 'Item', 1, 'Memberikan game berguna dapat potongan harga dengan SC-point yang terkumpul'),
(9, 'Artikel', 1, 'Manajemen karyawan'),
(10, 'Invoice', 1, 'Berisi Pesanan masuk yang belum di proses'),
(11, 'Transaksi', 1, 'Berisi Pesanan masuk yang telah di proses'),
(12, 'Voucher', 0, 'Berisi kode voucher dan jumlah potongan yang diberikan'),
(13, 'Quiz', 0, 'Berisi pertanyaan singkat dengan hadiah kemenangan berupa point yang dapat ditukarkan'),
(14, 'Saran dan Kritik', 1, 'Berisi saran dan kritik');

-- --------------------------------------------------------

--
-- Table structure for table `sidebaradmin`
--

CREATE TABLE `sidebaradmin` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` int(191) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sidebarcategory`
--

CREATE TABLE `sidebarcategory` (
  `id` int(191) NOT NULL,
  `parent` varchar(191) NOT NULL,
  `child` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebarcategory`
--

INSERT INTO `sidebarcategory` (`id`, `parent`, `child`) VALUES
(1, 'General', 1),
(2, 'General', 2),
(3, 'General', 3),
(4, 'General', 4),
(5, 'Karyawan', 5),
(6, 'Karyawan', 6),
(7, 'Produk', 7),
(8, 'Produk', 8),
(9, 'Artikel', 9),
(10, 'Invoice', 10),
(11, 'Transaksi', 11),
(12, 'Refreshing', 12),
(13, 'Refreshing', 13),
(14, 'Saran dan Kritik', 14);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(191) NOT NULL,
  `id_user` int(191) NOT NULL,
  `twitter` varchar(191) NOT NULL,
  `facebook` varchar(191) NOT NULL,
  `instagram` varchar(191) NOT NULL,
  `linkedin` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `id_user`, `twitter`, `facebook`, `instagram`, `linkedin`) VALUES
(1, 24, 'https://twitter.com/GoziNasuka', 'https://www.facebook.com/gozi.nasuka', 'https://www.instagram.com/gozinasuka/', '#'),
(2, 22, 'https://twitter.com/excel_shelby', 'https://www.facebook.com/wahyu.rochman.bantoro/', 'https://www.instagram.com/w.roch19/', 'https://www.linkedin.com/in/wahyu-rochman-bantoro/'),
(3, 25, '#', 'https://www.facebook.com/bagus.duemaks', 'https://www.instagram.com/rivan_istyajie/', '#');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `job` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `star` int(191) NOT NULL,
  `status` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `email`, `job`, `description`, `star`, `status`) VALUES
(1, 'coba@coba.com', 'mahasiswa TI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 5, 1),
(2, 'coba2@coba.com', 'mahasiswa Design Grafis', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 3, 1),
(3, 'coba3@coba.com', 'SEO employee', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `telp` varchar(191) NOT NULL,
  `birthday` varchar(191) NOT NULL,
  `jobs` varchar(191) NOT NULL,
  `gender` varchar(191) NOT NULL,
  `address` text NOT NULL,
  `role` int(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `complete` int(191) NOT NULL,
  `twitter` varchar(191) NOT NULL,
  `instagram` varchar(191) NOT NULL,
  `facebook` varchar(191) NOT NULL,
  `linkedin` varchar(191) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `photo`, `email`, `telp`, `birthday`, `jobs`, `gender`, `address`, `role`, `status`, `complete`, `twitter`, `instagram`, `facebook`, `linkedin`, `password`) VALUES
(1, '', '', 'trial@scsc.com', '', '', '', '', '', 7, 'Aktif', 1, '', '', '', '', 'ed68b744cf92725fd85bc9501022c4e0'),
(20, 'Adhisty Zara', '', 'coba@coba.com', '', '', '', '', '', 6, 'Aktif', 1, '', '', '', '', 'c3ec0f7b054e729c5a716c8125839829'),
(21, 'Atta HalilintaR', '', 'scsc@scsc.com', '', '', '', '', '', 5, 'Aktif', 1, '', '', '', '', 'ed68b744cf92725fd85bc9501022c4e0'),
(22, 'Wahyu Rochman Bantoro', '', '111201811229@mhs.dinus.ac.id', '', '', '', '', '', 2, 'Aktif', 1, 'https://twitter.com/excel_shelby', 'https://www.instagram.com/w.roch19/', 'https://www.facebook.com/wahyu.rochman.bantoro/', 'https://www.linkedin.com/in/wahyu-rochman-bantoro/', '411c451fa50ccb4a60206a83c8d5d8a4'),
(23, 'naruto', '', 'naruto@naruto.com', '', '', '', '', '', 4, 'Aktif', 1, '', '', '', '', 'cf9ee5bcb36b4936dd7064ee9b2f139e'),
(24, 'Rahim kun', '', '111201811255@mhs.dinus.ac.id', '', '', '', '', '', 1, 'Aktif', 1, 'https://twitter.com/GoziNasuka', 'https://www.instagram.com/gozinasuka/', 'https://www.facebook.com/gozi.nasuka', '#', '543378fb36a83810ded2d725f2b6c883'),
(25, 'Komting cacad sama', '', '111201811215@mhs.dinus.ac.id', '', '', '', '', '', 3, 'Aktif', 1, '#', 'https://www.instagram.com/rivan_istyajie/', 'https://www.facebook.com/bagus.duemaks', '#', 'd81d658f7fb3fca03ea5e74f787f1f51'),
(26, 'Sasuke', '', 'sasuke@sasuke.com', '', '', '', '', '', 4, 'Aktif', 1, '', '', '', '', '93207db25ad357906be2fd0c3f65f3dc'),
(27, 'sakura', '', 'sakura@sakura.com', '', '', '', '', '', 4, 'Aktif', 1, '', '', '', '', '149afd631693c895f81e508eb5aaef37'),
(28, '', '', 'coba1@coba.com', '', '', '', '', '', 7, '', 0, '', '', '', '', 'c3ec0f7b054e729c5a716c8125839829');

-- --------------------------------------------------------

--
-- Table structure for table `user login history`
--

CREATE TABLE `user login history` (
  `id` int(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `time` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `name` int(191) NOT NULL,
  `id_cetgory` int(191) NOT NULL,
  `value` int(191) NOT NULL,
  `describtion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel_category`
--
ALTER TABLE `artikel_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corefitur`
--
ALTER TABLE `corefitur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homemenu`
--
ALTER TABLE `homemenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homemenuabout`
--
ALTER TABLE `homemenuabout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoiceproduk`
--
ALTER TABLE `invoiceproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainsidebar`
--
ALTER TABLE `mainsidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produkcategory`
--
ALTER TABLE `produkcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roleaccess`
--
ALTER TABLE `roleaccess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceitem`
--
ALTER TABLE `serviceitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showservice`
--
ALTER TABLE `showservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebarcategory`
--
ALTER TABLE `sidebarcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user login history`
--
ALTER TABLE `user login history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `artikel_category`
--
ALTER TABLE `artikel_category`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `corefitur`
--
ALTER TABLE `corefitur`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homemenu`
--
ALTER TABLE `homemenu`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `homemenuabout`
--
ALTER TABLE `homemenuabout`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoiceproduk`
--
ALTER TABLE `invoiceproduk`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mainsidebar`
--
ALTER TABLE `mainsidebar`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produkcategory`
--
ALTER TABLE `produkcategory`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roleaccess`
--
ALTER TABLE `roleaccess`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `serviceitem`
--
ALTER TABLE `serviceitem`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `showservice`
--
ALTER TABLE `showservice`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sidebarcategory`
--
ALTER TABLE `sidebarcategory`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user login history`
--
ALTER TABLE `user login history`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

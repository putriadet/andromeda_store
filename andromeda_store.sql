-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2024 at 06:10 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andromeda_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idkat` int(11) NOT NULL,
  `namakat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`idkat`, `namakat`) VALUES
(1, 'Men'),
(2, 'Accesories'),
(3, 'Woman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `order_id` char(20) NOT NULL,
  `gross_amount` int(11) NOT NULL,
  `payment_type` varchar(13) NOT NULL,
  `transaction_time` varchar(19) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `va_number` varchar(35) NOT NULL,
  `pdf_url` text NOT NULL,
  `status_code` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`order_id`, `gross_amount`, `payment_type`, `transaction_time`, `bank`, `va_number`, `pdf_url`, `status_code`) VALUES
('1777619241', 90000, 'bank_transfer', '2024-01-23 22:12:53', 'bca', '80601030072', 'https://app.sandbox.midtrans.com/snap/v1/transactions/1fe25f64-394b-4f83-be30-afaebd9f58b7/pdf', '201'),
('2017827181', 50000, 'bank_transfer', '2024-01-23 22:54:11', 'bca', '80601383322', 'https://app.sandbox.midtrans.com/snap/v1/transactions/2ede6374-b855-47f8-b874-65f358d8ed9e/pdf', '201'),
('709487203', 60000, 'qris', '2024-01-25 19:01:28', 'N/A', 'N/A', '', '201');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `idProduk` int(11) NOT NULL,
  `idkat` int(11) NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `deskripsiProduk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`idProduk`, `idkat`, `namaProduk`, `foto`, `harga`, `stok`, `berat`, `deskripsiProduk`) VALUES
(1, 1, 'Understand Totebag', 'Screenshot_2024-01-25_192058.png', 85000, 9, 50, 'Dibuat dari bahan berkualitas tinggi dan tahan lama, \'Understand Totebag\' memiliki ruang interior yang luas untuk menampung kebutuhan Anda saat bepergian. Desainnya memamerkan perpaduan unik kreativitas dan kecerdasan, menjadikannya aksesori yang sempurna untuk pelajar, profesional, dan siapa pun yang menghargai gaya dan substansi.  Desain serbaguna totebag ini membuatnya cocok untuk berbagai kesempatan - mulai dari kegiatan santai hingga setting akademis. Bawa buku, laptop, atau kebutuhan sehari-hari Anda dengan mudah, semuanya sambil membuat pernyataan tentang komitmen Anda untuk memahami dunia di sekitar Anda.'),
(2, 1, 'Trust No Man T-Shirt ', 'Screenshot_2024-01-25_191701.png', 75000, 18, 100, 'Didesain dengan perhatian terhadap detail, kaos \'Trust No Man\' menggabungkan gaya modern dengan pesan kuat. Bahan berkualitas tinggi memberikan kenyamanan sepanjang hari, sementara desainnya memberikan sentuhan yang berani dan unik.  Kaos \'Trust No Man\' adalah pilihan yang sempurna untuk mengekspresikan sikap percaya diri dan keyakinan Anda. Kenakan di acara santai atau tambahkan sentuhan pribadi pada gaya kasual Anda. Pesan yang kuat ini membuat kaos ini menjadi pernyataan yang efektif tentang mandiri dan keberanian.'),
(3, 2, 'POLOCAPS CORDUROY', 'Screenshot_2024-01-25_191628.png', 90000, 5, 100, 'Hadirkan gaya yang berkelas dan nyaman dengan \"POLOCAPS CORDUROY\". Topi ini tidak hanya sekadar aksesori, melainkan pernyataan mode yang memadukan keanggunan dengan kenyamanan.  Dibuat dengan bahan corduroy berkualitas tinggi, \"POLOCAPS CORDUROY\" menawarkan sentuhan lembut dan tampilan yang berkelas. Desainnya yang unik dan trendi memberikan sentuhan modern pada gaya kasual Anda, menjadikannya pilihan sempurna untuk berbagai kesempatan.'),
(4, 3, 'A Global Crisis T-Shirt', 'Screenshot_2024-01-25_191900.png', 75000, 10, 100, ' Buat pernyataan berani dengan Kaos \"A Global Crisis\". Kaos ini lebih dari sekadar pakaian; ini adalah panggilan untuk kesadaran dan tindakan.  Didesain dengan kenyamanan dan kualitas yang diutamakan, Kaos \"A Global Crisis\" menampilkan desain yang berkata banyak. Visual yang mencolok dan pesan yang merangsang pemikiran menjadikannya pilihan yang kuat bagi mereka yang ingin meningkatkan kesadaran tentang isu-isu global yang mendesak.  Dengan Kaos \"A Global Crisis\", Anda tidak hanya mengenakan pakaian - Anda menyampaikan kepedulian, advokasi, dan harapan akan perubahan positif. Bergabunglah dalam gerakan untuk dunia yang lebih baik, satu pernyataan gaya yang stylish sekaligus bermakna.'),
(5, 3, 'Expand Your Imagination T-Shirt', 'Screenshot_2024-01-25_194452.png', 75000, 8, 100, 'Didesain dengan perhatian terhadap kenyamanan dan gaya, Kaos \"Expand Your Imagination\" memaparkan pesan yang mendorong untuk berpikir lebih luas. Desainnya yang unik dan menginspirasi membuatnya cocok sebagai penanda gaya bagi mereka yang ingin merayakan kreativitas dan keberanian untuk memperluas wawasan.'),
(6, 3, 'Crop Hoodie the National', 'Screenshot_2024-01-25_191940.png', 95000, 5, 200, 'Kenakan Crop Hoodie ini untuk tampil trendi dan bergaya dalam gaya yang santai. Panjang yang dipangkas menambah sentuhan modern pada pilihan pakaian Anda. Cocok untuk acara santai atau konser musik, hoodie ini tidak hanya memberikan kenyamanan tetapi juga menonjolkan semangat pecinta musik.  Dengan Crop Hoodie \"The National\", Anda tidak hanya mendapatkan pakaian, melainkan juga menyuarakan kecintaan Anda pada musik dan tampil dengan gaya yang selalu berada di puncak tren.'),
(7, 1, 'Find Your Freedom T-Shirt', 'Screenshot_2024-01-25_193941.png', 75000, 2, 100, 'With the \"Find Your Freedom\" T-Shirt, you\'re not just wearing a piece of clothing; you\'re wearing a mantra that encourages a life lived authentically and on your terms. Embrace the journey, find your freedom, and let your style speak volumes about your unique identity.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `active`, `date_created`) VALUES
(1, 'Putri', 'putri@gmail.com', 'default.jpg', '$2y$10$puAY.CDN8rOi4dFtNNNjV.NGj5pZnwnnQpZTdCXkXkjrEAubUQnPC', 1, 1, '2023-12-18'),
(2, 'Adetya', 'adetya@gmail.com', 'default.jpg', '$2y$10$GJAozWiI7RcZOINCupZ3Qeouwb9ZCd.RT7i0efGDO/9cK9Or4vqxW', 2, 1, '2023-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role_id` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_id`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idkat`);

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idkat` (`idkat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

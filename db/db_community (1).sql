-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2022 pada 05.15
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_community`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_artikel`
--

CREATE TABLE `t_artikel` (
  `id` int(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_artikel`
--

INSERT INTO `t_artikel` (`id`, `judul`, `isi`, `gambar`) VALUES
(31, 'Belajar Coding Sejak Usia Belasan Tahun', '&lt;p&gt;Untuk memiliki keinginan belajar pemrograman sendiri bagi seseorang yang tidak memiliki latar belakang pemrograman sama sekali, sangatlah tidak mudah. Terlebih lagi untuk benar-benar memulai.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Sebagai seorang murid SMA jurusan IPS, Andika pada awalnya tidak memiliki latar belakang pemrograman sama sekali dan tidak memiliki keharusan untuk menekuni bidang tersebut. Namun dari keingintahuannya terhadap bidang pemrograman, Andika pun mulai mencari tahu caranya untuk masuk ke dunia pemrograman.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Tidak berasal dari lingkungan dan keluarga yang memiliki latar belakang pemrograman sama sekali, ternyata tidak menjadi halangan bagi Andika, dan justru menjadi faktor penyemangat.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Dari tantangan ini, Andika justru bertekad untuk menjadi yang pertama di keluarganya yang lebih paham teknologi, termasuk juga mulai menekuni bidang pemrograman. Ia ingin menjadi tumpuan keluarganya untuk hal tersebut. Disisi lain, melihat juga banyaknya kejahatan online yang ada, Andika ingin menjadi yang paling melek teknologi di keluarganya supaya lebih bisa melindungi mereka dari tipe-tipe kejahatan online.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Tidak hanya itu, Andika sadar besarnya peluang yang bisa ia dapatkan jika ia masuk ke dunia pemrograman. Oleh karena itu, ia merubah hambatan ini menjadi sebuah tantangan untuk mendapatkan peluang yang lebih luas lagi, dan pada akhirnya membanggakan keluarga.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Setelah mulai memahami dasar-dasar pemrograman di Progate, proses belajar tentunya tidak berhenti di situ saja. Andika masih rajin mengulang-ulang materi yang ia pelajari, sekaligus mencoba mengerjakan proyek-proyek tertentu.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Belajar pemrograman secara otodidak bukan tanpa tantangan. Walaupun bisa bebas mengatur waktu dan kecepatan belajar, dari situ justru tantangan besar muncul, yaitu ketidakteraturan. Menurut Andika, salah satu kesulitan utama belajar sendiri adalah struktur belajar yang kerap kali kurang teratur. Namun hal itu teratasi dengan Andika mengikuti struktur pelajaran yang sudah tertera di Progate. Menurutnya, menggunakan struktur pelajaran di Progate, ia jadi mendapatkan pedoman atau roadmap yang membantu. Saat ini, ia masih dalam proses belajar Node.js mengikuti struktur dan roadmap yang ada di Progate.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Andika juga sempat mengikuti salah satu bootcamp dari Progate, dan melalui program tersebut, keahlian pemrograman Andika semakin terasah. Metode bootcamp yang memiliki para mentor khusus untuk membantu peserta, dengan adanya teman-teman peserta lain, dan juga dengan kegiatan membuat proyek tim bersama teman-teman baru, kemampuan pemrograman Andika tidak hanya meningkat tapi juga diasah supaya lebih tajam lagi.&lt;/p&gt;', '1606202259581_5zpdI2Vc6RkG8cMjsNVRpA.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, '', 'firman', 'firman.agus777@gmail.com', '$2y$10$w.NzTEJ8s2raz3irGzgUZ.RmBsme5NEU6JmlY2NpoUYMap/8jNVaO'),
(2, '', 'firman', 'nugget@foodmedia.us', '$2y$10$TsPr./XpQfRq74X/OVKyCuvS45yVjCuz0UIuqov9QeGP2d8wvZkzK'),
(3, '', 'firman-195410261', 'nugget@foodmedia.us', '$2y$10$DoErh00B/Ux2JvH3z.TnDO6qHr93CytJVK4Zv5x3wuU47XPo3D2r.'),
(4, '', 'firman', 'firman.agus777@gmail.com', '$2y$10$wiin1cTUS9sBMVTQ4NygTeWxcBIQOnHKvmijSRO.vfB4.hj.815m6'),
(5, '', 'firman-195410261', 'firman.agus777@gmail.com', '$2y$10$oxwy//4CTmkrHq8nb.ypce3Hv3gacIxMtSKujdzn1b1m4zYwWkMnm'),
(6, '', 'firman-195410261', 'firman.agus777@gmail.com', '$2y$10$sESp7RS8C690ZlF2hIlT3.ASvAu2K2Yhks9pSfTl.hmN.EeDU8VNq'),
(7, '', 'firman', 'nugget@foodmedia.us', '$2y$10$DyrDfup6y4/WY92SSXgPWekTXQZkOEB3CkLSjlAJOGMHXD1hxPGU.'),
(8, '', 'andikatuluspangestu', 'andhikatuluspangestu@gmail.com', '$2y$10$qwJXAU9HKBIDXarwr8WnsuyZmzsE4d91qv9DEoj3iUbsq2465jaMK'),
(9, '', 'aminatun', 'aminatun27@gmail.com', '$2y$10$iLXTNv42Hm1cZMbEmhaviO56ac23L/4N1N3Ms4i9xbgVeKwg8wH1e'),
(10, '', 'andikatuluspangestu', 'andhikatuluspangestu@gmail.com', '$2y$10$cQBTZWglyqm8u54XMePrYO8sw.kwoN/O2LGuNsM50fhmMsmxuhj0W');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_artikel`
--
ALTER TABLE `t_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_artikel`
--
ALTER TABLE `t_artikel`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

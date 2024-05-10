-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 02:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cftongkol`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
('haura', 'c20ad4d76fe97759aa27a0c99bff6710', 'Haura Farikha Prameshwari');

-- --------------------------------------------------------

--
-- Table structure for table `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `kode_pengetahuan` int(11) NOT NULL,
  `kode_penyakit` int(11) NOT NULL,
  `kode_gejala` int(11) NOT NULL,
  `mb` double(11,1) NOT NULL,
  `md` double(11,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`kode_pengetahuan`, `kode_penyakit`, `kode_gejala`, `mb`, `md`) VALUES
(19, 1, 18, 0.9, 0.1),
(1, 2, 1, 0.5, 0.4),
(2, 2, 2, 0.6, 0.5),
(3, 2, 3, 0.5, 0.5),
(4, 2, 4, 0.6, 0.4),
(5, 2, 5, 0.7, 0.1),
(6, 2, 6, 0.8, 0.5),
(7, 3, 7, 0.9, 0.1),
(8, 3, 8, 0.9, 0.1),
(9, 3, 9, 0.9, 0.1),
(10, 3, 5, 0.5, 0.5),
(11, 3, 10, 0.1, 0.9),
(12, 1, 11, 1.0, 0.0),
(13, 1, 12, 0.8, 0.2),
(14, 1, 13, 0.8, 0.2),
(15, 1, 14, 0.8, 0.2),
(16, 1, 15, 0.5, 0.5),
(17, 1, 16, 0.6, 0.4),
(18, 1, 17, 1.0, 0.0);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(155) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`) VALUES
(4, 'Biji yang terinfeksi bisa tampak seperti \"Percikan kembang api\"'),
(3, 'Jamur berwarna merah keputihan sampai seperti lembayung tampak pada biji'),
(2, 'Warna biji yang terinfeksi kemerahan atau cokelat tergantung cuaca'),
(1, 'Pembusukan terjadi pada ujung tongkol yang sudah berbiji'),
(5, 'Jamur yang berkembang dapat mengakibatkan epidermis biji pecah'),
(6, 'Menyerang jagung yang daunnya terbuka'),
(7, 'Paling sering sebagian tertutup oleh jamur berwarna merah keputihan sampai keungu-unguan pada bagian tongkol atau pada biji'),
(8, 'Jamur kemerahan muncul pertama kali di ujung tongkol dan menyebar ke bawah'),
(9, 'Biji yang terinfeksi bisa tampak seperti membusuk'),
(10, 'Apabila serangan sudah tinggi, seluruh bagian tongkol tampak merah keputihan dengan jamur di atas dan di antara biji'),
(11, 'Pada tongkol yang terserang oleh penyakit ini tampak miselium jamur, seperti jamur Tempe'),
(12, 'Biji akan rapuh dan ringan menempel pada janggel yang memusuk'),
(13, 'Jamur putih yang padat tampak di antara biji'),
(14, 'Penampilan jamur berwarna putih yang dimulai dari pangkal tongkol, kemudian berubah menjadi cokelat keabu-abuan dan membusuk di seluruh tongkol'),
(15, 'Daun tongkol umumnya mati sebelum waktunya pada telinga yang terinfeksi'),
(16, 'Seluruh kulit tongkol yang terkena akan tampak memutih'),
(17, 'Tongkol yang terinfeksi memiliki berat yang jauh lebih ringan dibandingkan tongkol yang sehat'),
(18, 'Apabila serangan sudah tinggi, seluruh bagian tongkol tampak keputihan dengan jamur di atas dan diantara biji');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL DEFAULT '0',
  `penyakit` text NOT NULL,
  `gejala` text NOT NULL,
  `hasil_id` int(11) NOT NULL,
  `hasil_nilai` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `tanggal`, `penyakit`, `gejala`, `hasil_id`, `hasil_nilai`) VALUES
(332, '2024-05-10 17:48:49', 'a:0:{}', 'a:0:{}', 0, ''),
(333, '2024-05-10 17:55:50', 'a:0:{}', 'a:0:{}', 0, ''),
(334, '2024-05-10 18:01:02', 'a:0:{}', 'a:0:{}', 0, ''),
(335, '2024-05-10 19:44:00', 'a:1:{i:2;s:6:\"0.5112\";}', 'a:10:{i:1;s:1:\"3\";i:3;s:1:\"7\";i:5;s:1:\"2\";i:8;s:1:\"2\";i:9;s:1:\"6\";i:10;s:1:\"2\";i:12;s:1:\"6\";i:14;s:1:\"7\";i:15;s:1:\"2\";i:16;s:1:\"6\";}', 2, '0.5112'),
(330, '2024-05-10 17:47:11', 'a:0:{}', 'a:1:{i:1;s:1:\"6\";}', 0, ''),
(331, '2024-05-10 17:47:24', 'a:0:{}', 'a:1:{i:1;s:1:\"6\";}', 0, ''),
(305, '2024-05-09 02:42:19', 'a:0:{}', 'a:1:{i:1;s:1:\"5\";}', 0, ''),
(303, '2024-05-08 20:33:33', 'a:3:{i:1;s:6:\"0.9011\";i:3;s:6:\"0.5376\";i:2;s:6:\"0.4329\";}', 'a:18:{i:1;s:1:\"4\";i:2;s:1:\"4\";i:3;s:1:\"4\";i:4;s:1:\"4\";i:5;s:1:\"4\";i:6;s:1:\"4\";i:7;s:1:\"4\";i:8;s:1:\"4\";i:9;s:1:\"4\";i:10;s:1:\"4\";i:11;s:1:\"4\";i:12;s:1:\"4\";i:13;s:1:\"4\";i:14;s:1:\"4\";i:15;s:1:\"4\";i:16;s:1:\"4\";i:17;s:1:\"4\";i:18;s:1:\"4\";}', 1, '0.9011'),
(301, '2024-05-08 20:14:52', 'a:1:{i:2;s:6:\"0.6891\";}', 'a:5:{i:1;s:1:\"4\";i:2;s:1:\"2\";i:3;s:1:\"1\";i:4;s:1:\"3\";i:5;s:1:\"1\";}', 2, '0.6891'),
(302, '2024-05-08 20:16:15', 'a:3:{i:3;s:6:\"0.9619\";i:2;s:6:\"0.7669\";i:1;s:6:\"0.6160\";}', 'a:12:{i:1;s:1:\"3\";i:2;s:1:\"1\";i:3;s:1:\"4\";i:4;s:1:\"2\";i:5;s:1:\"1\";i:6;s:1:\"3\";i:7;s:1:\"1\";i:8;s:1:\"2\";i:9;s:1:\"2\";i:10;s:1:\"4\";i:11;s:1:\"4\";i:12;s:1:\"3\";}', 3, '0.9619'),
(300, '2024-05-08 20:14:30', 'a:3:{i:1;s:6:\"1.0000\";i:3;s:6:\"0.7932\";i:2;s:6:\"0.4898\";}', 'a:18:{i:1;s:1:\"3\";i:2;s:1:\"1\";i:3;s:1:\"5\";i:4;s:1:\"8\";i:5;s:1:\"1\";i:6;s:1:\"5\";i:7;s:1:\"3\";i:8;s:1:\"3\";i:9;s:1:\"6\";i:10;s:1:\"7\";i:11;s:1:\"1\";i:12;s:1:\"6\";i:13;s:1:\"7\";i:14;s:1:\"1\";i:15;s:1:\"3\";i:16;s:1:\"6\";i:17;s:1:\"4\";i:18;s:1:\"7\";}', 1, '1.0000'),
(297, '2024-05-07 14:40:31', 'a:1:{i:2;s:6:\"0.7840\";}', 'a:6:{i:1;s:1:\"1\";i:2;s:1:\"3\";i:3;s:1:\"3\";i:4;s:1:\"2\";i:5;s:1:\"1\";i:6;s:1:\"2\";}', 2, '0.7840'),
(298, '2024-05-07 14:40:55', 'a:2:{i:3;s:6:\"0.8615\";i:2;s:6:\"0.1168\";}', 'a:6:{i:1;s:1:\"2\";i:2;s:1:\"4\";i:3;s:1:\"7\";i:8;s:1:\"1\";i:9;s:1:\"2\";i:10;s:1:\"3\";}', 3, '0.8615'),
(299, '2024-05-08 20:13:15', 'a:3:{i:1;s:6:\"1.0000\";i:2;s:6:\"0.5307\";i:3;s:6:\"0.3267\";}', 'a:18:{i:1;s:1:\"4\";i:2;s:1:\"6\";i:3;s:1:\"2\";i:4;s:1:\"1\";i:5;s:1:\"3\";i:6;s:1:\"4\";i:7;s:1:\"5\";i:8;s:1:\"6\";i:9;s:1:\"7\";i:10;s:1:\"9\";i:11;s:1:\"1\";i:12;s:1:\"1\";i:13;s:1:\"5\";i:14;s:1:\"3\";i:15;s:1:\"7\";i:16;s:1:\"7\";i:17;s:1:\"3\";i:18;s:1:\"1\";}', 1, '1.0000'),
(296, '2024-05-06 16:11:20', 'a:2:{i:3;s:6:\"0.7573\";i:2;s:6:\"0.6082\";}', 'a:18:{i:1;s:1:\"4\";i:2;s:1:\"5\";i:3;s:1:\"5\";i:4;s:1:\"3\";i:5;s:1:\"1\";i:6;s:1:\"6\";i:7;s:1:\"8\";i:8;s:1:\"1\";i:9;s:1:\"3\";i:10;s:1:\"5\";i:11;s:1:\"2\";i:12;s:1:\"5\";i:13;s:1:\"7\";i:14;s:1:\"6\";i:15;s:1:\"1\";i:16;s:1:\"6\";i:17;s:1:\"6\";i:18;s:1:\"8\";}', 3, '0.7573'),
(293, '2024-05-06 15:59:20', 'a:0:{}', 'a:18:{i:1;s:1:\"4\";i:2;s:1:\"4\";i:3;s:1:\"1\";i:4;s:1:\"4\";i:5;s:1:\"8\";i:6;s:1:\"8\";i:7;s:1:\"9\";i:8;s:1:\"2\";i:9;s:1:\"4\";i:10;s:1:\"1\";i:11;s:1:\"6\";i:12;s:1:\"8\";i:13;s:1:\"1\";i:14;s:1:\"1\";i:15;s:1:\"1\";i:16;s:1:\"3\";i:17;s:1:\"9\";i:18;s:1:\"7\";}', 0, ''),
(294, '2024-05-06 16:01:38', 'a:1:{i:2;s:6:\"0.7408\";}', 'a:5:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";}', 2, '0.7408'),
(295, '2024-05-06 16:04:42', 'a:3:{i:1;s:6:\"1.0000\";i:3;s:6:\"0.9600\";i:2;s:6:\"0.6202\";}', 'a:18:{i:1;s:1:\"2\";i:2;s:1:\"2\";i:3;s:1:\"6\";i:4;s:1:\"4\";i:5;s:1:\"1\";i:6;s:1:\"7\";i:7;s:1:\"1\";i:8;s:1:\"1\";i:9;s:1:\"1\";i:10;s:1:\"1\";i:11;s:1:\"1\";i:12;s:1:\"5\";i:13;s:1:\"7\";i:14;s:1:\"3\";i:15;s:1:\"8\";i:16;s:1:\"7\";i:17;s:1:\"7\";i:18;s:1:\"8\";}', 1, '1.0000');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL,
  `kondisi` varchar(64) NOT NULL,
  `ket` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`id`, `kondisi`, `ket`) VALUES
(1, 'Pasti ya', ''),
(2, 'Hampir pasti ya', ''),
(3, 'Kemungkinan besar ya', ''),
(4, 'Mungkin ya', ''),
(5, 'Tidak tahu', ''),
(6, 'Mungkin tidak', ''),
(7, 'Kemungkinan besar tidak', ''),
(8, 'Hampir pasti tidak', ''),
(9, 'Pasti tidak', '');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `det_penyakit` varchar(500) NOT NULL,
  `srn_penyakit` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`, `det_penyakit`, `srn_penyakit`, `gambar`) VALUES
(1, 'Busuk Tongkol Diplodia (Diplodia Ear Rot)', 'Busuk tongkol Diplodia merupakan penyakit yang umum pada jagung di dunia. Patogen ini menyerang tongkol sehingga terjadi pembusukan. Pembusukan biasanya berkembang dari pangkal hingga ke ujung tongkol kemudian merambat ke permukaan biji dan menutupi kelobot. Tongkol menjadi busuk dan kelobotnya saling menempel erat pada tongkol. Selain pada bagian tongkol jamur ini juga dapat menginfeksi  pada bagian pelepah daun meluas ke buku dan pangkal ruas batang. Busuk batang dimulai dari luka pada bagian ', '* Pemantauan Lingkungan: Penting untuk memperhatikan jenis tanah tempat tanaman jagung ditanam. Tanah yang terlalu lembab atau memiliki drainase yang buruk dapat meningkatkan risiko infeksi oleh jamur Diplodia maydis. Pemantauan terhadap kondisi lingkungan seperti curah hujan dan suhu juga diperlukan untuk mengidentifikasi potensi penyebaran penyakit.\r\n\r\n* Pengelolaan Sisa Tanaman: Pastikan untuk membersihkan dan memusnahkan sisa-sisa tanaman jagung yang telah dipanen atau yang sakit di sekitar ', '03diplodia.jpg'),
(2, 'Busuk Tongkol Fusarium (Fusarium Ear Rot)', 'Ada dua jenis patogen yang sama-sama menyerang tongkol berupa Fusarium moniliformae dan Fusarium graminearum, Penyakit telah tersebar di Indonesia. Dari segi kuantitas penyakit ini kurang berarti, namun serangan patogen pada biji menjadi berbahaya karena racun yang dikeluarkan oleh F. graminearum antara lain zearalenon.Racun ini dapat meracuni ternak sehingga akan merugikan bagi pengusaha makanan ternak.', '* Pemantauan Lingkungan: Penting untuk memahami jenis tanah tempat jagung ditanam. Tanah yang terlalu lembab atau memiliki drainase yang buruk dapat meningkatkan risiko infeksi oleh jamur Fusarium. Pemantauan kondisi lingkungan seperti suhu dan kelembaban tanah dapat membantu dalam mengidentifikasi potensi penyebaran penyakit.\r\n\r\n* Pengelolaan Sisa Tanaman: Pastikan area pertanaman dibersihkan dari sisa-sisa tanaman jagung yang telah dipanen atau yang sakit. Menghilangkan sumber infeksi seperti ', '01Fusarium.png'),
(3, 'Busuk Tongkol Giberella (Giberella Ear Rot)', 'Penyakit busuk tongkol Gibberella (busuk tongkol ungu) disebabkan oleh cendawan patogen Gibberella zeae atau Fusarium graminearum. Penyakit ini banyak menyerang pertanaman jagung di sentra produksi jagung terutama pada musim hujan atau pada daerah yang mempunyai kelembaban tinggi. Kerugian bisa mencapai 70% hingga 100%, hal ini disebabkan karena bulir yang terserang sama sekali tidak bisa dipanen untuk menjadi biji yang dapat dikonsumsi.', '* Pengaturan Jenis Tanah: Memperhatikan jenis tanah yang digunakan dalam penanaman jagung dapat menjadi faktor penting dalam pengelolaan penyakit ini. Tanah yang memiliki tingkat drainase yang baik dan mampu mengering dengan cepat dapat mengurangi kemungkinan terjadinya kondisi lembab yang mendukung perkembangan Gibberella.\r\n\r\n* Pengelolaan Sisa Tanaman: Penting untuk membersihkan dan menghilangkan sisa-sisa tanaman jagung yang terinfeksi di sekitar area pertanaman. Hal ini dapat mengurangi sumb', '02Gibberella.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `kode_post` int(11) NOT NULL,
  `nama_post` varchar(50) NOT NULL,
  `det_post` varchar(15000) NOT NULL,
  `srn_post` varchar(15000) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`kode_post`, `nama_post`, `det_post`, `srn_post`, `gambar`) VALUES
(26, 'Busuk Tongkol Fusarium (Fusarium Ear Rot)', '<p>Ada dua jenis patogen yang sama-sama menyerang tongkol berupa <em>Fusarium moniliformae </em>dan <em>Fusarium graminearum</em>, Penyakit telah tersebar di Indonesia. Dari segi kuantitas penyakit ini kurang berarti, namun serangan patogen pada biji menjadi berbahaya karena racun yang dikeluarkan oleh <em>F. graminearum </em>antara lain zearalenon.Racun ini dapat meracuni ternak sehingga akan merugikan bagi pengusaha makanan ternak.</p>\r\n\r\n<p><strong>GEJALA PENYAKIT :</strong></p>\r\n\r\n<ul>\r\n	<li>Pembusukan terjadi pada ujung tongkol yang sudah berbiji.</li>\r\n	<li>Warna biji yang terinfeksi kemerahan atau cokelat tergantung cuaca.</li>\r\n	<li>Jamur berwarna merah keputihan sampai seperti lembayung tampak pada biji.</li>\r\n	<li>Biji yang terinfeksi bisa tampak seperti &quot;Percikan kembang api&quot;.</li>\r\n	<li>Jamur yang berkembang dapat mengakibatkan epidermis biji pecah.</li>\r\n	<li>Apabila serangan sudah tinggi, seluruh bagian tongkol tampak keputihan dengan jamur diatas dan diantara biji.</li>\r\n</ul>\r\n\r\n<p><img alt=\"Gejala penyakit busuk tongkol fusarium\" src=\"http://localhost/cftongkol/gambar/posting/01Fgraminearum.jpg\" style=\"height:200px; width:368px\" /></p>\r\n\r\n<blockquote>\r\n<p>Gambar gejala penyakit busuk tongkol Fusarium.</p>\r\n</blockquote>\r\n\r\n<p><em>F. graminearum&nbsp;</em>tidak membentuk mikrokonidium. Makrokonidium berbentuk sabit dibentuk pada konidiofor pendek yang bercabang banyak. F. moniliformae mempunyai stadium sempurna yaitu Giberella fujikuroi. Membentuk klamidospora, bulat, berdinding tebal dan peritesium dengan askus dan askospora didalamnya. Patogen juga dapat menyebabkan busuk batang dan rebah semai(damping off). Patogen terbawa benih.</p>\r\n\r\n<p><img alt=\"Gejala penyakit busuk tongkol fusarium\" src=\"http://localhost/cftongkol/gambar/posting/02mikrofusarium.jpg\" style=\"height:200px; width:298px\" /></p>\r\n\r\n<blockquote>\r\n<p>Gambar Makrokonidium Fusarium spp.</p>\r\n</blockquote>\r\n\r\n<p><strong>DAUR PATOGEN DAN PENYAKIT :</strong></p>\r\n\r\n<p>Jamur dapat menyerang dan terbawa oleh benih. Jamur dapat mempertahankan diri pada sisa tanaman sakit. Inang lain adalah padi, tebu, sorghum, gandung, nenas, dan pisang. Infeksi dapat terjadi melalui luka yang disebabkan oleh serangga. Jamur dapat juga menyerang akar dan batang. Pada cuaca yang lembab Giberella membentuk askospora dan disebarkan oleh angin.</p>\r\n\r\n<p><strong>FAKTOR YANG BERPENGARUH</strong></p>\r\n\r\n<p>Penyakit ini terdapat pada tanaman yang lemah dan tua. Curah hujan dan suhu sangat mempengaruhi penyakit. Daerah pegunungan dengan curah hujan yang tinggi sangat ideal untuk perkembangan penyakit ini. Pemotongan daun di atas tongkol menjadi sumber penularan penyakit yang berasal dari potongan batang yang membusuk.&nbsp;</p>\r\n\r\n<p><a href=\"http://4.bp.blogspot.com/-VwOPG9dVGoE/VEhnNbVUf9I/AAAAAAAAAaU/kmzYfATF9Nk/s1600/wqwqw.jpeg\"><img alt=\"Penyakit Egg Drop Syndrome dan Pencegahannya\" src=\"http://localhost/cftongkol/gambar/posting/03batangpatah.jpg\" style=\"height:200px; width:400px\" /></a></p>\r\n\r\n<blockquote>\r\n<p>Gambar penularan penyakit dapat terjadi dikarenakan pemotongan batang yang membusuk</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>PENGELOLAAN PENYAKIT</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Pemantauan Lingkungan</strong>: Penting untuk memahami jenis tanah tempat jagung ditanam. Tanah yang terlalu lembab atau memiliki drainase yang buruk dapat meningkatkan risiko infeksi oleh jamur Fusarium. Pemantauan kondisi lingkungan seperti suhu dan kelembaban tanah dapat membantu dalam mengidentifikasi potensi penyebaran penyakit.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pengelolaan Sisa Tanaman</strong>: Pastikan area pertanaman dibersihkan dari sisa-sisa tanaman jagung yang telah dipanen atau yang sakit. Menghilangkan sumber infeksi seperti sisa tanaman yang terinfeksi dapat membantu mengurangi risiko penyebaran jamur Fusarium.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Praktik Budidaya yang Tepat</strong>: Terapkan praktik budidaya yang tepat, termasuk pemupukan yang seimbang dan pemeliharaan tanaman. Tanaman jagung yang sehat dan kuat memiliki kemampuan yang lebih baik untuk melawan infeksi jamur. Pastikan untuk memberikan nutrisi yang cukup dan mengelola tanaman dengan baik untuk mengurangi kerentanan terhadap penyakit.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Rotasi Tanaman</strong>: Lakukan rotasi tanaman dengan tanaman non-inang penyakit, seperti kacang tanah atau kedelai. Rotasi tanaman dapat membantu mengurangi jumlah patogen dalam tanah dan mengganggu siklus hidup jamur Fusarium, sehingga mengurangi risiko infeksi pada tanaman jagung.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Penggunaan Varietas Tahan</strong>: Pilih varietas jagung yang memiliki ketahanan terhadap penyakit busuk tongkol Fusarium. Varietas yang tahan terhadap Fusarium dapat membantu mengurangi risiko kerugian yang disebabkan oleh penyakit ini.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Dengan menerapkan langkah-langkah pengelolaan penyakit ini secara terpadu dan proaktif, diharapkan dapat mengurangi dampak infeksi dan kerugian yang ditimbulkan oleh busuk tongkol Fusarium pada tanaman jagung.</p>\r\n', '01Fusarium.png'),
(27, 'Busuk Tongkol Giberella (Giberella Ear Rot)', '<p>Penyakit busuk tongkol&nbsp;<em>Gibberella</em>&nbsp;(busuk tongkol ungu) disebabkan oleh cendawan patogen&nbsp;<em>Gibberella zeae</em>&nbsp;atau&nbsp;<em>Fusarium graminearum</em>. Penyakit ini banyak menyerang pertanaman jagung di sentra produksi jagung terutama pada musim hujan atau pada daerah yang mempunyai kelembaban tinggi.&nbsp;Kerugian bisa mencapai 70% hingga 100%, hal ini disebabkan karena bulir yang terserang sama sekali tidak bisa dipanen untuk menjadi biji yang dapat dikonsumsi.</p>\r\n\r\n<p><strong>GEJALA PENYAKIT :</strong></p>\r\n\r\n<ul>\r\n	<li>Paling Sering sebagian tertutup oleh jamur berwarna merah keputihan sampai keungu-unguan pada bagian tongkol atau pada biji.</li>\r\n	<li>Jamur kemerahan muncul muncul pertama kali di ujung tongkol dan menyebar ke bawah.</li>\r\n	<li>Biji yang terinfeksi bisa tampak seperti membusuk.</li>\r\n	<li>Jumlah yang berkembang dapat mengakibatkan epidermis biji pecah.</li>\r\n	<li>Apabila serangan sudah tinggi, seluruh bagian tongkol tampak merah keputihan dengan jamur diatas dan diantara biji.</li>\r\n	<li>Akar membusuk dan secara bertahap tanaman mati.</li>\r\n</ul>\r\n\r\n<p><img alt=\"Gambar gejala penyakit busuk giberella\" src=\"http://localhost/cftongkol/gambar/posting/04Gibberella.jpg\" style=\"height:300px; width:400px\" /></p>\r\n\r\n<blockquote>\r\n<p>Gambar gejala penyakit busuk tongkol Giberella.</p>\r\n</blockquote>\r\n\r\n<p>Tongkol yang terinfeksi dapat membusuk sepenuhnya. Daun tanaman yang terinfeksi dini berubah menjadi hijau keabu-abuan yang kusam dan mulai layu. Ruas bagian bawah melunak dan berubah warna menjadi sawo matang hingga coklat tua. Setelahnya bintik-bintik hitam mungkin berkembang dipermukaan, yang dapat dikikis dengan mudah menggunakan kuku. Potongan memanjang ditangkai akan menunjukkan jaringan parut yang berubah warna, dengan semburat merah muda atau merah. Akar utama seacara bertahap membusuk, berubah menjadi coklat dan rapuh. Tanaman dapat mati sebelum waktunya dan rubuh.</p>\r\n\r\n<p><strong>DAUR PATOGEN DAN PENYAKIT :</strong></p>\r\n\r\n<p>Daur patogen dan penyakit pada busuk tongkol Gibberella serupa dengan busuk tongkol Fusarium dalam beberapa aspek, tetapi ada juga perbedaan yang penting. Berikut adalah daur patogen dan penyakit pada busuk tongkol Gibberella:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Penyebaran Melalui Benih</strong>: Seperti Fusarium, Gibberella juga dapat menyerang dan terbawa oleh benih tanaman. Benih yang terinfeksi dapat menjadi sumber penyebaran penyakit ini ke tanaman baru.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pertahanan pada Sisa Tanaman</strong>: Jamur Gibberella juga dapat mempertahankan dirinya pada sisa tanaman yang sakit. Ini berarti bahwa jika tanaman terinfeksi pada musim sebelumnya, jamur tersebut dapat tetap ada dalam sisa-sisa tanaman dan menjadi sumber infeksi untuk musim berikutnya.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Inang Lain</strong>: Gibberella dapat menginfeksi berbagai jenis tanaman, termasuk padi, tebu, sorghum, kacang-kacangan, nenas, dan pisang. Ini menunjukkan bahwa jamur ini memiliki rentang inang yang luas, mirip dengan Fusarium.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Infeksi Melalui Luka</strong>: Infeksi oleh Gibberella dapat terjadi melalui luka-luka yang disebabkan oleh serangga atau faktor lainnya pada tanaman. Luka ini memberikan jalan masuk bagi jamur untuk masuk ke dalam tanaman dan menyebabkan penyakit.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Infeksi pada Akar dan Batang</strong>: Selain menyerang tongkol tanaman, Gibberella juga dapat menyerang akar dan batang tanaman. Ini dapat menyebabkan kerusakan tambahan pada tanaman dan mengurangi kemampuannya untuk bertahan hidup.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pembentukan Askospora</strong>: Pada cuaca yang lembab, Gibberella dapat membentuk askospora, struktur reproduksi seksualnya, yang kemudian disebar oleh angin. Ini merupakan mekanisme penyebaran utama jamur ini dan memungkinkan untuk infeksi yang lebih luas dalam populasi tanaman.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>FAKTOR YANG BERPENGARUH :</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Kondisi Tanaman</strong>: Tanaman yang lemah dan tua cenderung lebih rentan terhadap infeksi oleh Gibberella. Kondisi tanaman yang kurang sehat atau kurang vital dapat membuatnya lebih rentan terhadap serangan penyakit ini.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Curah Hujan dan Suhu</strong>: Seperti Fusarium, curah hujan dan suhu juga sangat mempengaruhi perkembangan penyakit busuk tongkol Gibberella. Daerah yang memiliki curah hujan tinggi, terutama di pegunungan, cenderung menjadi lingkungan yang ideal untuk perkembangan penyakit ini.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Sumber Penularan</strong>: Pemotongan daun di atas tongkol dapat menjadi sumber penularan penyakit. Potongan batang yang membusuk dapat menjadi tempat masuknya jamur Gibberella ke dalam tanaman. Hal ini menunjukkan bahwa praktik-praktik budidaya yang memungkinkan terjadinya kontak antara bagian tanaman yang terinfeksi dengan bagian lainnya dapat meningkatkan risiko penularan penyakit.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Dengan demikian, faktor-faktor seperti kondisi tanaman, curah hujan, suhu, dan praktik budidaya yang mempengaruhi penularan penyakit busuk tongkol Gibberella memiliki kemiripan dengan faktor-faktor yang mempengaruhi busuk tongkol Fusarium, tetapi ada juga perbedaan dalam detailnya, seperti spesifik kondisi lingkungan yang paling mendukung perkembangan penyakit ini.</p>\r\n\r\n<p><a href=\"http://4.bp.blogspot.com/-VwOPG9dVGoE/VEhnNbVUf9I/AAAAAAAAAaU/kmzYfATF9Nk/s1600/wqwqw.jpeg\"><img alt=\"Siklus hidup penyakit\" src=\"http://localhost/cftongkol/gambar/posting/06sikluspenyakit.jpg\" style=\"height:364px; width:400px\" /></a></p>\r\n\r\n<blockquote>\r\n<p>Gambar Siklus hidup penyakit</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Untuk pengelolaan penyakit busuk tongkol Gibberella (busuk tongkol ungu), saran-saran yang dapat diterapkan serupa dengan busuk tongkol Fusarium, tetapi ada beberapa tambahan yang mungkin relevan:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Pengaturan Jenis Tanah</strong>: Memperhatikan jenis tanah yang digunakan dalam penanaman jagung dapat menjadi faktor penting dalam pengelolaan penyakit ini. Tanah yang memiliki tingkat drainase yang baik dan mampu mengering dengan cepat dapat mengurangi kemungkinan terjadinya kondisi lembab yang mendukung perkembangan Gibberella.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pengelolaan Sisa Tanaman</strong>: Penting untuk membersihkan dan menghilangkan sisa-sisa tanaman jagung yang terinfeksi di sekitar area pertanaman. Hal ini dapat mengurangi sumber potensial infeksi bagi tanaman jagung yang baru ditanam dan membantu mengontrol penyebaran penyakit.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Praktik Budidaya</strong>: Memperhatikan praktik budidaya seperti pemupukan yang tepat dan pemeliharaan tanaman yang baik dapat membantu meningkatkan daya tahan tanaman terhadap penyakit. Menjaga tanaman dalam kondisi yang sehat dapat mengurangi kerentanan terhadap serangan Gibberella.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Rotasi Tanaman</strong>: Rotasi tanaman dengan tanaman bukan inang, seperti kacang tanah dan kedelai, juga dapat menjadi strategi yang berguna. Rotasi tanaman dapat membantu mengganggu siklus hidup patogen dan mengurangi ketersediaan inang bagi Gibberella, sehingga mengurangi kemungkinan infeksi pada tanaman jagung.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Praktik Sanitasi</strong>: Membersihkan dan mensterilkan peralatan pertanian yang digunakan di area yang terinfeksi dapat membantu mencegah penyebaran penyakit. Praktik sanitasi yang baik juga termasuk membersihkan sisa-sisa tanaman dan material organik lainnya yang dapat menjadi tempat berkembang biak bagi Gibberella.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Dengan menerapkan saran-saran ini dalam pengelolaan penyakit busuk tongkol Gibberella, diharapkan dapat mengurangi dampak penyakit dan meningkatkan produktivitas pertanian secara keseluruhan.</p>\r\n', '07gibrella.jpg'),
(28, 'Busuk Tongkol Diplodia (Diplodia Ear Rot)', '<p>Busuk tongkol Diplodia merupakan penyakit yang umum pada jagung di dunia. Patogen ini menyerang tongkol sehingga terjadi pembusukan. Pembusukan biasanya berkembang dari pangkal hingga ke ujung tongkol kemudian merambat ke permukaan biji dan menutupi kelobot. Tongkol menjadi busuk dan kelobotnya saling menempel erat pada tongkol. Selain pada bagian tongkol jamur ini juga dapat menginfeksi &nbsp;pada bagian pelepah daun meluas ke buku dan pangkal ruas batang. Busuk batang dimulai dari luka pada bagian pelepah (tempat keluarnya akar adventif). Serangan penyakit ini menyebabkan adanya infeksi kompleks, yaitu busuk tongkol, busuk daun, dan penyakit pada persemaian.</p>\r\n\r\n<p><strong>GEJALA PENYAKIT :</strong></p>\r\n\r\n<ul>\r\n	<li>Pada tongkol yang terserang oleh penyakit ini tampak miselium jamur, seperti jamur Tempe.</li>\r\n	<li>Biji akan rapuh dan ringan menempel pada janggel yang membusuk.</li>\r\n	<li>Jamur putih yang padat tampak diantara biji.</li>\r\n	<li>Penampilan jamur berwarna putih yang dimulai dari pangkal telinga, kemudian berubah menjadi coklat keabu-abuan dan membusuk di seluruh telinga.</li>\r\n	<li>Daun telinga umumnya mati sebelum waktunya pada telinga yang terinfeksi.</li>\r\n	<li>Seluruh kulit telinga yang terkena akan tampak memutih.</li>\r\n	<li>Munculnya benjolan hitam (pycnidia) pada sekam atau biji yang berjamur.</li>\r\n	<li>Telinga yang terinfeksi memiliki berat yang jauh lebih ringan dibandingkan telinga yang sehat.</li>\r\n	<li>Terkadang, jamur putih tidak banyak ditemukan, dan biji-bijian akan berubah warna menjadi coklat. Hal ini disebut &quot;Diplodia tersembunyi&quot;, di mana gejalanya hanya dapat diamati dengan membelah telinga menjadi dua dan mengamati pycnidia dalam tongkolnya.</li>\r\n</ul>\r\n\r\n<p><img alt=\"Busuk tongkol diplodia\" src=\"http://localhost/cftongkol/gambar/posting/10diplodia.jpg\" style=\"height:451px; width:400px\" /></p>\r\n\r\n<blockquote>\r\n<p><em>Gambar&nbsp;Jamur putih pada tongkol jagung, menandakan busuk tongkol Diplodia.</em></p>\r\n</blockquote>\r\n\r\n<p>Jamur melewati musim dingin sebagai miselium, spora, dan piknidia pada sisa atau biji jagung. Spora menyebar terutama melalui percikan air hujan. Cuaca kering sebelum proses silking, segera diikuti dengan kondisi basah, mendukung penyakit busuk telinga Diplodia seperti halnya pengolahan tanah konservasi, jagung terus menerus, dan kerentanan hibrida. Panen yang tertunda dan cuaca basah sebelum panen dapat menyebabkan pertumbuhan jamur terus berlanjut, sehingga semakin menurunkan kualitas dan hasil biji-bijian.</p>\r\n\r\n<p><img alt=\"Busuk tongkol diplodia\" src=\"http://localhost/cftongkol/gambar/posting/09diplodia.jpg\" style=\"height:346px; width:400px\" /></p>\r\n\r\n<blockquote>\r\n<p><em>Gambar&nbsp;Penampang tongkol jagung dengan pycnidia kecil berwarna hitam yang dihasilkan oleh jamur penyebab busuk telinga Diplodia.</em></p>\r\n</blockquote>\r\n\r\n<p>Pramuka sebelum kematangan fisiologis penting untuk mengidentifikasi area dengan masalah jamur. Area-area ini harus dipanen sesegera mungkin untuk mencegah perkembangan jamur lebih lanjut. Gabah yang dipanen harus didinginkan, dikeringkan, dan dibersihkan segera setelah panen, dan disimpan terpisah dari gabah yang dipanen dari ladang yang sehat. Pengendalian serangga mengurangi risiko infeksi busuk telinga.</p>\r\n\r\n<p><strong>DAUR PATOGEN DAN PENYAKIT:</strong></p>\r\n\r\n<p>Jamur Diplodia maydis dapat menyerang dan menyebar melalui berbagai cara. Benih jagung yang terinfeksi dapat membawa dan menyebarkan jamur ini. Selain itu, jamur dapat bertahan hidup dalam sisa-sisa tanaman yang sakit. Tanaman inang lain yang dapat terinfeksi oleh jamur ini termasuk padi, tebu, sorghum, kacang-kacangan, nenas, dan pisang. Infeksi biasanya terjadi melalui luka pada tanaman yang disebabkan oleh serangga atau kondisi lingkungan yang tidak optimal. Jamur juga dapat menyerang akar dan batang tanaman. Pada kondisi cuaca yang lembab, Diplodia maydis membentuk spora dan menyebar melalui angin.</p>\r\n\r\n<p><strong>FAKTOR YANG BERPENGARUH:</strong></p>\r\n\r\n<p>Penyakit busuk tongkol Diplodia cenderung menyerang tanaman jagung yang lemah atau tua. Faktor-faktor lingkungan seperti curah hujan dan suhu juga sangat mempengaruhi perkembangan penyakit ini. Daerah dengan topografi pegunungan dan curah hujan tinggi cenderung menjadi lingkungan yang ideal bagi penyebaran penyakit ini. Potongan daun di atas tongkol yang terinfeksi dapat menjadi sumber penularan penyakit, terutama berasal dari potongan batang yang membusuk.</p>\r\n', '<p><strong>PENGELOLAAN PENYAKIT :</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Pemantauan Lingkungan</strong>: Penting untuk memperhatikan jenis tanah tempat tanaman jagung ditanam. Tanah yang terlalu lembab atau memiliki drainase yang buruk dapat meningkatkan risiko infeksi oleh jamur Diplodia maydis. Pemantauan terhadap kondisi lingkungan seperti curah hujan dan suhu juga diperlukan untuk mengidentifikasi potensi penyebaran penyakit.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pengelolaan Sisa Tanaman</strong>: Pastikan untuk membersihkan dan memusnahkan sisa-sisa tanaman jagung yang telah dipanen atau yang sakit di sekitar area pertanaman. Ini akan membantu mengurangi sumber infeksi dan penyebaran jamur Diplodia maydis.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Praktik Budidaya yang Tepat</strong>: Terapkan praktik budidaya yang tepat, termasuk pemupukan dan pemeliharaan tanaman. Tanaman jagung yang sehat dan kuat cenderung lebih tahan terhadap infeksi jamur. Pastikan tanaman mendapatkan nutrisi yang cukup dan kondisi lingkungan yang optimal.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Rotasi Tanaman</strong>: Lakukan rotasi tanaman dengan tanaman bukan inang penyakit, seperti kacang tanah atau kedelai. Rotasi tanaman dapat membantu mengurangi populasi patogen dalam tanah dan mengganggu siklus hidup jamur Diplodia maydis, sehingga mengurangi risiko infeksi pada tanaman jagung.</p>\r\n	</li>\r\n</ol>\r\n', '08diplodia.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`kode_pengetahuan`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`kode_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `kode_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `kode_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `kode_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `kode_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

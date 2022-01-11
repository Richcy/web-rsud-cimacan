-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 03:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cimacan_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id`, `username`, `password`, `name`, `email`, `create_date`, `update_date`) VALUES
('$qqr@!kdhnnn$$ppppkhdfhsshhhhnb', 'rsud_cimacan_admin', '$2a$11$qIWdkHkQCDsVKNCnmqwexOGXgCnRJu9GEcW4x7TKRqFlUP6tg3Dbe', 'Super Admin', 'superadmin@rsudcimacan.com', '2021-12-20 02:40:03', '2021-12-20 02:40:03'),
('qwertyuioplghjdbbvc5aascc', 'admin', '$2a$11$3mv6g/yEDTsVudmI8dtCAe7fXv6iAvtv9L7f5ed/ePM6AoTP0IHQ2', 'Super Admin', '', '2021-12-22 01:11:37', '2021-12-22 01:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `t_article`
--

CREATE TABLE `t_article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `author` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'publish',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_article_category`
--

CREATE TABLE `t_article_category` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_article_category`
--

INSERT INTO `t_article_category` (`id`, `name`, `create_date`, `update_date`) VALUES
('8achmr6KSCqQVAiIefxJOLl3', 'Kesehatan Anak', '2022-01-01 20:06:38', '2022-01-01 20:06:00'),
('AEx5ug1DFMJjsyX8YIGRTnm7', 'Kesehatan Dewasa', '2022-01-01 20:12:23', '2022-01-01 20:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `t_career`
--

CREATE TABLE `t_career` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'publish',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_career`
--

INSERT INTO `t_career` (`id`, `title`, `description`, `img`, `status`, `create_date`, `update_date`) VALUES
(4, 'Analis Laboratorium', 'RSUD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />Analis Laboratorium<br />(Jumlah: 4 orang)<br /><br />Kriteria:<br />- Pria/Wanita<br />- Usia maksimal 35 tahun<br />- Kemampuan komunikasi yang baik<br />- Jujur, cekatan, bertanggung jawab<br />- Dapat bekerja sama dalam tim<br />- Menguasai Microsoft Office (Word, Excel, PPT)<br />- Bersedia bekerja dalam shift<br /><br />Yuk kirimkan surat lamaran, CV, foto terbaru, dan kelengkapan<br />melalui e-mail ke : umpeg.rsudcimacan@gmail.com', 'career/20220105140612_analis_laboratorium_Desember.jpg', 'publish', '2021-12-20 14:06:12', '2022-01-05 14:06:12'),
(6, 'Tenaga Kesehatan', 'RSUD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />1. Apoteker<br />2. Tenaga Teknis Kefarmasian (TTK)<br />3. Asisten TTK<br /><br />Kriteria:<br />- Pria/Wanita<br />- Kemampuan komunikasi yang baik<br />- Jujur, cekatan, bertanggung jawab<br />- Dapat bekerja sama dalam tim<br />- Menguasai Microsoft Office (Word, Excel, PPT)<br />- Bersedia bekerja dalam shift<br /><br />Kirimkan surat lamaran, CV, foto terbaru, dan kelengkapan<br />melalui e-mail ke : umpeg.rsudcimacan@gmail.com', 'career/20220106090336_recruitment_opteker_ttk_asttk.jpg', 'publish', '2021-12-04 09:03:36', '2022-01-06 09:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `t_doctor`
--

CREATE TABLE `t_doctor` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `alumni` varchar(255) DEFAULT NULL,
  `nip` varchar(255) NOT NULL,
  `str` varchar(255) DEFAULT NULL,
  `sip` varchar(255) NOT NULL,
  `img` varchar(9999) NOT NULL,
  `status` varchar(25) NOT NULL,
  `lang` varchar(255) NOT NULL DEFAULT 'id',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_doctor`
--

INSERT INTO `t_doctor` (`id`, `name`, `field`, `office`, `experience`, `year`, `month`, `alumni`, `nip`, `str`, `sip`, `img`, `status`, `lang`, `create_date`, `update_date`) VALUES
(13, 'dr. Panji Gugah Baskara, Sp.PD', 'A3QsDcHptRaUr1Eg56ov9nTx', 'Klinik Penyakit Dalam', NULL, 0, 0, '', '', NULL, '503/2192/SIPD/DPMPTSP/2019', 'doctor/20220107084233_dr-panji.png', 'publish', 'id', '2022-01-07 08:42:33', '2021-12-23 13:11:47'),
(14, 'dr. Chica Pratiwi, Sp.PD', 'A3QsDcHptRaUr1Eg56ov9nTx', 'Klinik Penyakit Dalam', NULL, 0, 0, '', '', NULL, '503/7204/SIPD/DPMPTSP/2021', 'doctor/20220107084917_dr-chica.png', 'publish', 'id', '2022-01-07 08:49:17', '2021-12-23 13:13:26'),
(15, 'dr. Andri Saputra, Sp.A', 'M4VDzXWY0fbHQFaNmeyuKvlk', 'Klinik Anak', NULL, 0, 0, '', '', NULL, '503/803/SIPD/DPMPTSP/2021', 'doctor/20220107081841_dr-andri.png', 'publish', 'id', '2022-01-07 08:18:41', '2021-12-23 13:13:54'),
(16, 'dr. Nelis Fitriah Handayani, MARS, Sp.B', 'FKVinf4XMhBHyl6NL7kePTu3', 'Klinik Bedah', NULL, 0, 0, '', '', NULL, '446.2/204.2/SDK/J17', '', 'publish', 'id', '2021-12-23 07:50:30', '2021-12-23 13:14:55'),
(17, 'dr. Jacky Junaedi, Sp.B', 'FKVinf4XMhBHyl6NL7kePTu3', 'Klinik Bedah', NULL, 0, 0, '', '', NULL, '503/2729/SIPD/DPMPTSP/2019', 'doctor/20220107085349_dr-jacky.png', 'publish', 'id', '2022-01-07 08:53:49', '2021-12-23 13:15:38'),
(18, 'dr. Wulan Nurmala, Sp.OG', 'e7Vz8QWlaAIyj5KSNZPTMRUg', 'Klinik OBGYN', NULL, 0, 0, '', '', NULL, '503/738/SIPD/DPMPTSP/2020', 'doctor/20220107090812_dr-wulan.png', 'publish', 'id', '2022-01-07 09:08:12', '2021-12-23 13:16:16'),
(19, 'dr. Yanto Hasitongan Sinaga, Sp.OG', 'e7Vz8QWlaAIyj5KSNZPTMRUg', 'Klinik OBGYN', NULL, 0, 0, '', '', NULL, '503/2896/SIPD/DPMPTSP/2019', '', 'publish', 'id', '2021-12-23 07:52:31', '2021-12-23 13:16:55'),
(20, 'dr. Ratna Andriyati, Sp.JP', 'Fhxw6df72HoIaiQ1YVgmEb5X', 'Klinik Jantung dan Pembuluh', NULL, 0, 0, '', '', NULL, '503/1398/SIPD/DPMPTSP/2020', '', 'publish', 'id', '2021-12-23 07:51:49', '2021-12-23 13:17:34'),
(21, 'dr. Pudya Astuti Rachyanti, Sp.T.H.T.K.L', '7y4mqNZBLJbatwOdWnAuzXe3', 'Klinik THT-KL', NULL, 0, 0, '', '', NULL, '503/2359/SIPD/DPMPTSP/2021', '', 'publish', 'id', '2022-01-07 08:13:39', '2021-12-23 13:18:37'),
(22, 'dr. Putri Ratna Palupi Puspitasari, Sp.KJ', 'MB8vIDSJyHRCGPLfjd3Nze0b', 'Klinik Kesehatan Jiwa', NULL, 0, 0, '', '', NULL, '503/224/SIPD/DPMPTSP/2020', 'doctor/20220107085623_dr-palupi.png', 'publish', 'id', '2022-01-07 08:56:23', '2021-12-23 13:19:08'),
(23, 'drg. Intan Sri Fajarwati', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '503/428/SIPD/DPMPTSP/2019', '', 'publish', 'id', '2021-12-23 07:54:07', '2021-12-23 13:20:48'),
(24, 'drg. Hariansyah Buana Putra', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '503/499/SIPDG/DPMPTSP/2021', '', 'publish', 'id', '2021-12-23 07:53:11', '2021-12-23 13:37:34'),
(25, 'dr. Hj. Hawik Muzdalifah, Sp.KFR, MARS', 'Ud961nVCkabF5cqlp3mrRgNi', 'Klinik Rehabilitasi Medik', NULL, 0, 0, '', '', NULL, '503/03/S/SIPD/DPMPTSP/2021', 'doctor/20220107083509_dr-hawik.png', 'publish', 'id', '2022-01-07 08:35:09', '2021-12-23 13:38:32'),
(26, 'drg. Rindang Yuasari, Sp.BM', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '503/2329/SIPDG/DPMPTSP/2020', 'doctor/20220107090606_dr-rindang.png', 'publish', 'id', '2022-01-07 09:06:06', '2021-12-23 13:39:10'),
(27, 'drg. Yulia Jayaputri Moeslim T', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '', '', 'publish', 'id', '2021-12-23 07:42:17', '2021-12-23 13:42:17'),
(28, 'drg. Indah Sukartinah', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '446.2/64.2/yankes/I16', '', 'publish', 'id', '2021-12-23 07:53:44', '2021-12-23 13:42:36'),
(29, 'drg. Dwi Anie Lestari, Sp. Orth', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '503/2881/SIPD/DPMPTSP/2021', 'doctor/20220107084437_dr-ani.png', 'publish', 'id', '2022-01-07 08:44:37', '2021-12-23 13:43:10'),
(30, 'dr. Gita Ayu Saraswati', 'gweuFDXZHc9vqsO6SpE28mkR', 'Klinik MCU dan VCT', NULL, 0, 0, '', '', NULL, '503/736/SIPD/DPMPTSP/2021', '', 'publish', 'id', '2021-12-23 07:45:24', '2021-12-23 13:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `t_event`
--

CREATE TABLE `t_event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `category` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `location` varchar(999) NOT NULL DEFAULT 'online',
  `status` varchar(15) NOT NULL DEFAULT 'publish',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_event`
--

INSERT INTO `t_event` (`id`, `title`, `description`, `category`, `url`, `img`, `start_date`, `end_date`, `start_time`, `end_time`, `location`, `status`, `create_date`, `update_date`) VALUES
(4, 'Vaksinasi Januari Minggu 1', 'RSUD Cimacan membuka pelayanan Vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 3 sampai 7 Januari 2022.<br /><br />Kami menyediakan Vaksin jenis Sinovac untuk dosis 1 dan 2.<br /><br />Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, dan membawa alat tulis pribadi (ballpaint).<br /><br />Yuk Sahabat Cimacan vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105111643_vaksinasi_januari_1.jpg', '2022-01-03', '2022-01-07', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:16:44', '2022-01-05 11:16:44'),
(5, 'Vaksinasi Desember Minggu 4', 'RSUD Cimacan membuka pelayanan Vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 27 hingga 31 Desember 2021.<br /><br />Kami menyediakan Vaksin jenis Sinovac dan Astrazeneca untuk dosis 1 dan 2.<br /><br />Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, dan membawa alat tulis pribadi (ballpaint).<br /><br />Yuk Sahabat Cimacan vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105111949_vaksinasi_desember_4.jpg', '2021-12-27', '2021-12-31', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:19:49', '2022-01-05 11:19:49'),
(6, 'Vaksinasi Desember Minggu 3', 'RSUD Cimacan membuka pelayanan Vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 20 hingga 24 Desember 2021.<br /><br />Kami menyediakan Vaksin jenis Astrazeneca untuk dosis 1 dan 2 serta Vaksin Pfizer dan Sinovac untuk dosis ke-2.<br /><br />Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, dan membawa alat tulis pribadi (ballpaint).<br /><br />Yuk kita vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105112211_vaksinasi_desember_3.jpg', '2021-12-20', '2021-12-24', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:22:11', '2022-01-05 11:22:11'),
(7, 'Vaksinasi Desember Minggu 2', 'RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 13 hingga 17 Desember 2021.<br /><br />Kami menyediakan Vaksin jenis Pfizer dan Sinovac untuk dosis 2 serta Vaksin Astrazeneca untuk dosis 1 dan 2.<br /><br />Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak serta membawa alat tulis pribadi (ballpaint).<br /><br />Yuk Sahabat Cimacan vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105112434_vaksinasi_desember_2.jpg', '2021-12-13', '2021-12-17', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:24:34', '2022-01-05 11:24:34'),
(8, 'IG Live Serumen Telinga Bahaya atau Tidak', 'Halo Sahabat Cimacan..<br />Mincan mau memberikan info menarik yang ditunggu-tunggu Sahabat Cimacan semua nih!<br /><br />Pada kesempatan kali ini, kita akan membahas mengenai kotoran (serumen) telinga dan serba-serbi yang perlu diketahui untuk menjaga kesehatan telinga.<br /><br />Banyak Sahabat Cimacan yang menanyakan bagaimana cara terbaik untuk menjaga kesehatan telinga kita, bagaimana cara membersihkan telinga yang benar, dan apakah boleh kita mengorek telinga menggunakan cotton bud?<br /><br />Nah, bagi Sahabat Cimacan yang ingin mengetahui lebih lanjut mengenai serumen telinga dan bagaimana cara menjaga kebersihan telinga, yuk simak dan ketahui lebih lanjut dengan bergabung dalam live Instagram bersama dr. Pudyastuti Rachyanti, Sp.THT-KL&nbsp;<a class=\"notranslate\" tabindex=\"0\" href=\"https://www.instagram.com/kiki_prima/\">@kiki_prima</a>&nbsp;dan host Ary Sunjaya&nbsp;<a class=\"notranslate\" tabindex=\"0\" href=\"https://www.instagram.com/rysoen87/\">@rysoen87</a><br /><br />Live Instagram akan berlangsung pada:<br />Kamis, 9 Desember 2021<br />Pukul 13.00 WIB<br /><br />Jangan sampai ketinggalan yaa!<br />Follow akun resmi RSUD Cimacan di&nbsp;<a class=\"notranslate\" tabindex=\"0\" href=\"https://www.instagram.com/rsud_cimacan/\">@rsud_cimacan</a><br /><br />Siapkan pertanyaan kalian yaa Sahabat Cimacan agar dapat ditanyakan langsung pada saat live dengan cara ketik di kolom komentar.', 'EcP6WsMO5hq7aHje1YoUg3Sd', 'https://www.instagram.com/rsd_cimacan/', 'event/20220105112828_Webinar_live_ig_dr_pudyastuti.jpg', '2021-12-09', '2021-12-09', '13:00:00', '14:00:00', '', 'publish', '2022-01-05 11:28:28', '2022-01-05 11:28:28'),
(9, 'Vaksinasi Desember Minggu 1', 'Info Vaksinasi COVID-19 di RSUD Cimacan sudah hadir lagi nih!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 6 hingga 10 Desember 2021.<br /><br />Kami menyediakan Vaksin jenis Pfizer dan Sinovac untuk dosis 2 serta Vaksin Astrazeneca untuk dosis 1 dan 2. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan juga diharapkan membawa alat tulis (ballpaint).<br /><br />Yuk kita vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa<br />Pendaftaran vaksinasi dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105113053_vaksinasi_desember_1.jpg', '2021-12-06', '2021-12-10', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:30:53', '2022-01-05 11:30:53'),
(10, 'Vaksinasi November Minggu 5', 'Info tentang Vaksinasi COVID-19 yang ditunggu-tunggu sudah hadir nih!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 29 November hingga 3 Desember 2021.<br /><br />RSUD Cimacan menyediakan Vaksin jenis Sinovac untuk dosis 1 serta Vaksin Moderna dan Astrazeneca untuk dosis 1 dan 2. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan juga diharapkan membawa alat tulis (ballpaint).<br /><br />Yuk daftar vaksin di RSUD Cimacan!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa<br />Pendaftaran vaksinasi secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua.', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105114006_vaksinasi_november_4.jpg', '2021-11-29', '2021-12-03', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:40:06', '2022-01-05 11:40:06'),
(11, 'Vaksinasi November Minggu 3', 'Info tentang Vaksinasi COVID-19 hadir lagi nih!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 15-19 November 2021.<br /><br />Kali ini RSUD Cimacan menyediakan Vaksin jenis Pfizer untuk dosis 1 dan 2 serta Vaksin Sinovac dan Astrazeneca untuk dosis ke-2. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan juga diharapkan membawa alat tulis (ballpaint).<br /><br />Yuk! Jangan sampai ketinggalan kesempatan vaksin kali ini yaa<br />Jangan lupa pendaftaran vaksinasi secara online melalui aplikasi Tartimah!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105114506_vaksinasi_november_3.jpg', '2021-11-15', '2021-11-19', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:45:06', '2022-01-05 11:45:06'),
(12, 'Donor Darah Bulan November', 'Mincan mau kasih info tentang donor darah nih!<br /><br />RSUD Cimacan akan mengadakan Kegiatan Donor Darah yang akan dilaksanakan pada:<br /><br />Hari: Senin, 15 November 2021<br />Lokasi: Taman Kering IGD PONEK RSUD Cimacan<br />Waktu: Pk 09.00 hingga selesai<br /><br />Sahabat Cimacan tidak perlu takut karena donor darah akan dilakukan sesuai dengan protokol kesehatan.<br />Jangan lupa untuk para calon pendonor, ada beberapa syarat donor darah yang harus diperhatikan yaa.<br />Yuk, donor darah! Setiap tetes darah yang kalian berikan bisa memberi banyak harapan bagi mereka yang membutuhkan.', '8jAiIJCtZguS20hROyENBsGU', '', 'event/20220105114731_donor_darah_november.jpg', '2021-11-15', '2021-11-15', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:47:31', '2022-01-05 11:47:31'),
(13, 'Vaksinasi November Minggu 2', 'Siapa yang lagi nunggu kabar vaksin nih?<br />Mincan mau kasih info terbaru lagi nih tentang vaksin COVID-19!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 8-12 November 2021.<br /><br />Kali ini RSUD Cimacan menyediakan Vaksin jenis Pfizer untuk dosis 1 dan 2 serta Vaksin Sinovac dan Astrazeneca untuk dosis ke-2. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan juga diharapkan membawa alat tulis (ballpaint).<br /><br />Yuk! Jangan sampai ketinggalan yaa<br />Jangan lupa pendaftaran vaksinasi secara online melalui aplikasi Tartimah!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105115344_vaksinasi_november_2.jpg', '2021-11-08', '2021-11-12', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:53:44', '2022-01-05 11:53:44'),
(15, 'Vaksinasi November Minggu 1', 'Info vaksinasi COVID-19 di RSUD Cimacan kembali hadir nih!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin sampai Jumat, 1-5 November 2021.<br /><br />Vaksinasi diutamakan untuk penerima dosis 1 yaa. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan diharapkan untuk membawa alat tulis (ballpaint).<br /><br />Kuota vaksinasi terbatas hanya untuk 1000 orang per hari.<br /><br />Jangan lupa pendaftaran vaksinasi secara online melalui aplikasi Tartimah yaa', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105115912_vaksinasi_november_1.jpg', '2021-11-01', '2021-11-05', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:59:12', '2022-01-05 11:59:12'),
(16, 'Vaksinasi November Minggu 4', 'Mincan mau berbagi info tentang Vaksinasi COVID-19 yang ditunggu-tunggu nih!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 22-26 November 2021.<br /><br />RSUD Cimacan menyediakan Vaksin jenis Pfizer dan Sinovac untuk dosis 1 dan 2 serta Vaksin Astrazeneca untuk dosis ke-2. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan juga diharapkan membawa alat tulis (ballpaint).<br /><br />Yuk daftar vaksin di RSUD Cimacan! Jangan sampai ketinggalan kesempatan vaksin kali ini yaa.<br />Pendaftaran vaksinasi secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua.', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105141108_vaksinasi_november_4_fix.jpg', '2021-11-22', '2021-11-26', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 14:11:08', '2022-01-05 14:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `t_event_category`
--

CREATE TABLE `t_event_category` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_event_category`
--

INSERT INTO `t_event_category` (`id`, `name`, `create_date`, `update_date`) VALUES
('8jAiIJCtZguS20hROyENBsGU', 'Donor Darah', '2022-01-05 11:45:37', '2022-01-05 11:45:37'),
('EcP6WsMO5hq7aHje1YoUg3Sd', 'Webinar', '2021-12-31 02:26:32', '2021-12-31 08:26:32'),
('JR6IHimr5n12dajWtZfsuBLX', 'Vaksinasi', '2021-12-31 02:21:23', '2021-12-31 08:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `t_featured_doctor`
--

CREATE TABLE `t_featured_doctor` (
  `id` varchar(255) NOT NULL,
  `doctor` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_field_doctor`
--

CREATE TABLE `t_field_doctor` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang` varchar(255) NOT NULL DEFAULT 'id',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_field_doctor`
--

INSERT INTO `t_field_doctor` (`id`, `name`, `lang`, `create_date`, `update_date`) VALUES
('7y4mqNZBLJbatwOdWnAuzXe3', 'Telinga HIdung Tenggorokan-Kepala dan Leher (THT)', 'id', '2021-12-23 07:04:03', '2021-12-23 13:04:03'),
('A3QsDcHptRaUr1Eg56ov9nTx', 'Penyakit Dalam', 'id', '2021-12-23 07:01:54', '2021-12-23 13:01:54'),
('e7Vz8QWlaAIyj5KSNZPTMRUg', 'Obstetrik dan Ginekologi (Kandungan)', 'id', '2021-12-23 07:04:57', '2021-12-23 13:04:47'),
('Fhxw6df72HoIaiQ1YVgmEb5X', 'Jantung dan Pembuluh Darah', 'id', '2021-12-23 07:02:08', '2021-12-23 13:02:08'),
('FKVinf4XMhBHyl6NL7kePTu3', 'Bedah Umum', 'id', '2021-12-23 07:02:37', '2021-12-23 13:02:32'),
('gweuFDXZHc9vqsO6SpE28mkR', 'MCU dan VCT', 'id', '2021-12-23 07:05:54', '2021-12-23 13:05:54'),
('L3b8dfU6iOgPmzYwRkqSulZv', 'Saraf', 'id', '2021-12-23 07:04:17', '2021-12-23 13:04:17'),
('lsHZ92VBd3fyFK1RcMmkq8xN', 'Gigi dan Mulut', 'id', '2021-12-23 07:05:42', '2021-12-23 13:05:42'),
('M4VDzXWY0fbHQFaNmeyuKvlk', 'Pediatrik (Anak)', 'id', '2021-12-23 07:02:22', '2021-12-23 13:02:22'),
('MB8vIDSJyHRCGPLfjd3Nze0b', 'Psikiatri (Jiwa) ', 'id', '2021-12-23 07:05:16', '2021-12-23 13:05:16'),
('O4kRFVnrJjhQYSvgIPWNeb6d', 'TB DOTS', 'id', '2021-12-23 07:06:16', '2021-12-23 13:06:07'),
('Ud961nVCkabF5cqlp3mrRgNi', 'Rehabilitasi Medik', 'id', '2021-12-23 07:03:03', '2021-12-23 13:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `t_gallery`
--

CREATE TABLE `t_gallery` (
  `id` varchar(255) NOT NULL,
  `img` varchar(9999) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_gallery`
--

INSERT INTO `t_gallery` (`id`, `img`, `type`, `sort`, `create_date`, `updated_date`) VALUES
('5MYhZ7vsDlOAGEUnTIitBFP6', 'about_company/20211214075650_testing.png', 'about_company', 2, '2021-12-14 07:56:50', '2021-12-14 13:56:50'),
('s5yiwe9tL6CbvSNoBfz7D328', 'mcu/20211204035348_testing.png', 'mcu', 2, '2021-12-04 03:53:48', '2021-12-04 09:53:48'),
('y2GX1cnxlzMOjdZm7FICNrqh', 'medical_support/20220105090556_david-rodrigo-Fr6zexbmjmc-unsplash.jpg', 'medical_support', 1, '2022-01-05 09:05:56', '2022-01-05 09:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `t_image_profile`
--

CREATE TABLE `t_image_profile` (
  `id` varchar(255) NOT NULL,
  `img` varchar(999) NOT NULL,
  `type` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_image_profile`
--

INSERT INTO `t_image_profile` (`id`, `img`, `type`, `create_date`, `update_date`) VALUES
('PCcj6yUGEvRe9wrKSAzD1oWT', 'sketch/20220106110744_rsud_denah.jpg', 'sketch', '2022-01-06 11:07:44', '2022-01-06 11:06:42'),
('voWwCQajKsUkTNP5GrfcO7h6', 'structure/20220106113555_structure_organization.png', 'structure', '2022-01-06 11:35:55', '2022-01-06 11:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `t_schedule_doctor`
--

CREATE TABLE `t_schedule_doctor` (
  `id` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `senin` varchar(255) NOT NULL,
  `selasa` varchar(255) NOT NULL,
  `rabu` varchar(255) NOT NULL,
  `kamis` varchar(255) NOT NULL,
  `jumat` varchar(255) NOT NULL,
  `sabtu` varchar(255) NOT NULL,
  `minggu` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_schedule_doctor`
--

INSERT INTO `t_schedule_doctor` (`id`, `doctor`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`, `create_date`, `update_date`) VALUES
('DmlauEV4bOxKT1SRJBG8Crgi', '14', '08:00-11:00', '11:00-14:00', '08:00-11:00', '11:00-14:00', '08:00-11:00', '', '', '2022-01-03 11:48:33', '2022-01-03 11:48:33'),
('NtbEc9lwTfnqP1pmDCQXrYFR', '13', '11:00-14:00', '08:00-11:00', '11:00-14:00', '08:00-11:00', '11:00-14:00', '', '', '2022-01-03 11:50:25', '2022-01-03 11:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `t_service`
--

CREATE TABLE `t_service` (
  `id` varchar(255) NOT NULL,
  `banner` varchar(5555) DEFAULT NULL,
  `description` varchar(9999) NOT NULL,
  `type` varchar(255) NOT NULL,
  `lang` varchar(255) NOT NULL DEFAULT 'id',
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_service`
--

INSERT INTO `t_service` (`id`, `banner`, `description`, `type`, `lang`, `create_date`, `update_date`) VALUES
('6PshBiuZOlzefytoEUGDQMw0', NULL, 'Penunjang medis yang berada di RSD Cimacan, sebagai berikut :<br /><br /><strong>Radiologi</strong><br />Layanan radiologi merupakan unit penunjang yang ada di RSD Cimacan yang dapat memberikan pelayana pemeriksaan secara profesional dengan hasil berupa gambar yang bertujuan membantu dokter dalam menegakkan diagnosa pasien yang ditangani.<br /><br /><strong>Laboratorium</strong><br />Laboratorium merupakan unit diagnostik dengan pelayanan selama 24 jam yang didukung oleh tenaga profesional berupa dokter dan paramedis yang memiliki pengalama yang mumpuni di bidangnya. Hasil laporan dari laboratorium dapat diperoleh dengan cepat dan tepat, sehingga dapat memudahkan pasien dalam menjalankan pemeriksaan.', 'medical_support', 'id', '2022-01-05 08:53:40', '2022-01-05 08:53:40'),
('bpR32n5f6lMLF4uoeZzUKwda', 'about_company/20220106181753_dr-juliana.jpeg', 'Puji syukur kami panjatkan kepada Allah SWT. atas segala anugerah yang telah diberikan sehingga pelayanan kesehatan kepada masyarakat masih dapat dihadirkan di Rumah Sakit Umum Daerah Cimacan (RSUD Cimacan) .&nbsp;<br /><br />Sebagaimana yang dicantumkan dalam UU No. 44 Tahun 2009 pasal 4 bahwa Rumah Sakit mempunyai tugas memberikan pelayanan kesehatan perorangan secara paripurna, maka RSUD Cimacan selalu bersiap untuk mengemban amanah tersebut. Termasuk hal penting lainnya adalah mampu memberikan perlindungan terhadap keselamatan pasien, masyarakat, lingkungan rumah sakit dan sumberdaya manusia di rumah sakit, merupakan perhatian utama kami dalam upaya mewujudkannya.<br /><br />RSUD Cimacan senantiasa berusaha untuk meningkatkan mutu dan mempertahankan standar pelayanan rumah sakit agar dapat memberikan sumbangsih terbaik bagi pembangunan sektor kesehatan khususnya di wilayah Kabupaten Cianjur. Menjadi etalase pelayanan kesehatan yang prima adalah salah satu tujuan kami. Dengan turut mengikuti perkembangan ilmu pengetahuan dan teknologi kesehatan terkini juga menjadi bagian yang tak kami kesampingkan. Seiring dengan itu kami coba sajikan inovasi-inovasi layanan yang berorientasi kepada kepuasan masyarakat.&nbsp;<br /><br />Tentunya kerjasama dari segenap elemen masyarakat termasuk kemitraan dengan fasilitas kesehatan lainnya menjadi pendukung yang tak terpisahkan dalam menggapai setiap keberhasilan yang ada. RSUD Cimacan akan senantiasa bersinergi demi mewujudkan pelayanan kesehatan yang paripurna. Oleh karena itu kami hadir dan siap untuk melayani dengan hati dan cinta.', 'about_home', 'id', '2022-01-06 11:05:00', '2022-01-06 11:05:00'),
('Byp4oOr6vASIx3Zm0gP25FdX', NULL, 'Layanan radiologi merupakan unit penunjang yang ada di RSD Cimacan yang dapat memberikan pelayana pemeriksaan secara profesional dengan hasil berupa gambar yang bertujuan membantu dokter dalam menegakkan diagnosa pasien yang ditangani.', 'radiology', 'id', '2021-12-14 11:40:54', '2021-12-14 11:40:54'),
('cnqdlsOJheLAKR3f7mIt2pFT', 'mcu/20211203075900_testing.png', '<ul>\r\n<li><strong>Testing - edited</strong></li>\r\n<li><strong>edited 1</strong></li>\r\n</ul>', 'mcu', 'id', '2021-12-03 13:40:28', '2021-12-03 13:40:28'),
('ltosIJ0x914B7puiDRKyjEXc', NULL, '<div style=\"text-align: left;\">Data Layanan Unggulan tidak tersedia</div>', 'unggulan', 'id', '2021-12-17 09:59:20', '2021-12-17 09:59:20'),
('mhHNM8ZxO7kinqfPGsoVaXBA', NULL, 'Instalasi Rawat Inap (IRI) merupakan instalasi yang memberikan pelayanan kesehatan perorangan dan perawatan yang meliputi observasi, pemeriksaan, diagnosa, pengobatan, rehabilitas medik, pelayanan keperawatan serta konseling terkait penyakit dan tindakan atau pengobatan.<br /><br />Ruang Instalasi Rawat Inap yang berada di RSD Cimacan terdiri atas:<br />\r\n<ul>\r\n<li>Ruang Anggrek</li>\r\n<li>Ruang Flamboyan</li>\r\n<li>Ruang Mawar</li>\r\n<li>Ruang Tulip</li>\r\n<li>Ruang Aster</li>\r\n<li>Ruang Isolasi</li>\r\n<li>Ruang Alamanda</li>\r\n<li>Ruang VK Kebidanan</li>\r\n<li>Ruang Perinatologi</li>\r\n<li>Ruang Operasi</li>\r\n</ul>', 'iri', 'id', '2021-12-08 10:02:05', '2021-12-08 10:02:05'),
('OveuK84ngZ7pzAhVFJ5bwkYl', NULL, 'Laboratorium merupakan unit diagnostik dengan pelayanan selama 24 jam yang didukung oleh tenaga profesional berupa dokter dan paramedis yang memiliki pengalama yang mumpuni di bidangnya. Hasil laporan dari laboratorium dapat diperoleh dengan cepat dan tepat, sehingga dapat memudahkan pasien dalam menjalankan pemeriksaan.', 'lab', 'id', '2021-12-11 08:18:02', '2021-12-11 08:18:02'),
('sgqXj5iKQIN9VnhAak2SmfGH', 'about_company/20211215051630_rsud_gedung.jpg', '<p>Rumah Sakit Umum Daerah Cimacan memiliki posisi yang strategis terletak di sebelah utara kabupaten Cianjur yang merupakan daerah wisata alam dan villa yang cukup terkenal antara jalur Bandung - Jakarta, selain melayani masyarakat yang ada di sekitar Rumah Sakit Umum Daerah Cimacan yaitu Kecamatan yang berada di wilayah utara Cianjur, juga sering menangani pasien dari luar wilayah Cianjur yaitu para wisatawan yang berkunjung ke daerah wisata yang berada di Puncak dan Bogor.&nbsp;</p>', 'about_home', 'id', '2021-12-15 10:00:29', '2021-12-15 10:00:29'),
('vem2cMOWXYxN06lw9skRAVS5', NULL, 'Rumah Sakit Umum Daerah Cimacan pada awalnya adalah Puskesmas Pacet (Cimacan) yang sudah berdiri sejak tahun 1953, kemudian pada tahun 1981 statusnya meningkat menjadi Puskesmas DTP dan berubah status menjadi Rumah Sakit dengan ditetapkannya Surat Keputusan Bupati Cianjur atas nama Pemerintah Daerah Kabupaten Cianjur Nomor 19 Tahun 2007 tentang pembentukkan Rumah Sakit Umum Daerah Cimacan&nbsp;dan Peraturan Daerah Kabupaten&nbsp;Cianjur&nbsp;Nomor 08 Tahun 2016&nbsp;tentang&nbsp;Pembentukan&nbsp;dan Susunan&nbsp;Perangkat Daerah Kabupaten&nbsp;Cianjur (Lembaran Daerah Tahun 2016 Nomor 8)<br /><br />Dengan keputusan Menteri Kesehatan Indonesia Nomor 267/SK/Menkes/III/2007 tanggal 05 Maret 2007 tentang Penetapan Status Rumah Sakit Umum Daerah Cimacan milik&nbsp;Pemerintah Daerah Kabupaten&nbsp;Cianjur&nbsp;dengan&nbsp;tipe D yang kemudian&nbsp;berubah&nbsp;tipe&nbsp;menjadi&nbsp;tipe C dengan Surat Keputusan Kepala Badan Pelayanan&nbsp;Perizinan&nbsp;Terpadu dan Penanaman Modal Kabupaten&nbsp;Cianjur&nbsp;Nomor : 503/6788/RSU-Operasional/BPPTPM/2015 tentang&nbsp;Penetapan&nbsp;Klasifikasi dan Izin&nbsp;Operasional&nbsp;Rumah&nbsp;Sakit&nbsp;Umum Daerah Cimacan&nbsp;Kabupaten&nbsp;Cianjur.<br /><br />Posisi Rumah Sakit Umum Daerah Cimacan yang strategis terletak di sebelah utara kabupaten Cianjur yang merupakan daerah wisata alam dan villa yang cukup terkenal antara jalur Bandung - Jakarta, selain melayani masyarakat yang ada di sekitar Rumah Sakit Umum Daerah Cimacan yaitu Kecamatan yang berada di wilayah utara Cianjur, juga sering menangani pasien dari luar wilayah Cianjur yaitu para wisatawan yang berkunjung ke daerah wisata yang berada di Puncak dan Bogor.<br /><br />\r\n<h2 style=\"text-align: center;\"><strong>VISI</strong></h2>\r\n<div style=\"text-align: left;\">Menjadi Rumah Sakit Dengan Pelayanan Kesehatan Yang Profesional, Bermutu dan Terjangkau Berstandar Internasional</div>\r\n<br />\r\n<h2 style=\"text-align: center;\"><strong>MISI</strong></h2>\r\n<ol>\r\n<li>Menyelenggarakan Pelayanan Kesehatan Bermutu Dengan Mengutamakan Keselamatan Pasien dan Kepuasan Pelanggan.<br /><br /></li>\r\n<li>Mengembangkan Pelayanan Kesehatan Dengan Berorientasi Pada Pembangunan &nbsp;Sumber Daya Manusia, Perkembangan Teknologi dan Kebutuhan Masyarakat.<br /><br /></li>\r\n<li>Menjadi Pusat Rujukan Pelayanan Kesehatan.<br /><br /></li>\r\n<li>Menyelenggarakan Manajemen Rumah Sakit Yang Behasil Guna, Bermutu dan Berbasis Kinerja.</li>\r\n</ol>', 'about_company', 'id', '2021-12-14 13:54:26', '2021-12-14 13:54:26'),
('X3DWaCsO4tLmzhpJnBH7o0Gb', NULL, 'Instalasi Gawat Darurat (IGD) merupakan layanan yang disediakan oleh Rumah Sakit untuk membantu kebutuhan pasien yang dialami dalam keadaan gawat darurat dan harus segera ditangani. Sistem pelayanan pada IGD, menggunakan sistem dimana pelayanan diutaman pada pasien yang berada dalam keadaan darurat dan bukan berdasarkan antrian.<br /><br />Tujuan dari IGD yaitu dapat tercapainya pelayanan kesehatan yang optimal pada pasien secara cepat dan tepat serta terpadu dalam penanganan tingkat kegawatdaruratan sehingga mampu mencegah resiko kecacatan dan kematian.<br /><br />Kondisi yang dapat dilayani di IGD, sebagai berikut :<br />\r\n<ul>\r\n<li>Pasien gawat darurat, tidak darurat, darurat tidak gawat dan tidak gawat.</li>\r\n<li>Pasien akibat kecelakaan yang dapat menimbulkan cedera fisik, mental gangguan saraf, gangguan pernapasan, trauma, patah tulang, infeksi, keracunan, kerusakan organ, berbagai luka dan masih banyak lagi.</li>\r\n<li>Penaganan kejadian sehari-hari, korban musibah massal dan bencana.&nbsp;</li>\r\n</ul>', 'igd', 'id', '2021-12-08 10:09:45', '2021-12-08 10:09:45'),
('XkMEG1t3wHdJalW8A5xvI7fe', NULL, 'Instalasi Rawat Jalan (IRJ) adalah salah satu instalasi yang berada di RSD Cimacan yang memberikan pelayanan rawat jalan kepada pasien sesuai dengan kebutuhannya. Pelayanan yang ada meliputi pemeriksaan, pengobatan dan tindakan medis sesuai dengan kondisi dan penyakit pasien.<br /><br />Setiap pelayanan mengikuti standar prosedur yang mengacu pada pedoman dan panduan yang sudah disahkan, sebagai usaha Rumah Sakit dalam memperthakan mutu, keselamatan dan kenyamanan pasien.<br /><br />Pelayanan yang berada di RSD Cimacan meliputi :<br />\r\n<ul>\r\n<li>Klinik Anak</li>\r\n<li>Klinik Obgyn dan Kebidanan</li>\r\n<li>Klinik Gigi</li>\r\n<li>Klinik DOTS</li>\r\n<li>Klinik Penyakit Dalam</li>\r\n<li>Klinik Bedah</li>\r\n<li>Klinik Jiwa</li>\r\n<li>Klinik VCT</li>\r\n</ul>\r\n<strong>Jam Pelayanan :</strong><br />Senin - Minggu 09:00 AM - 02:00 PM&nbsp;', 'irj', 'id', '2021-12-08 09:26:12', '2021-12-08 09:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `t_slider`
--

CREATE TABLE `t_slider` (
  `id` varchar(255) NOT NULL,
  `img` varchar(9999) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(5555) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_slider`
--

INSERT INTO `t_slider` (`id`, `img`, `title`, `description`, `sort`, `create_date`, `update_date`) VALUES
('mYyjbgFIoeMGhPaENXtL4sqi', 'slider/20211127070207_slide-3.jpg', 'Testing - edited', '', 3, '2021-11-27 13:02:07', '2021-11-27 13:02:07'),
('Zz0XrYd7nlDwuPVjFy35Sv8N', 'slider/20211127070154_slide-1.jpg', '', '', 2, '2021-11-27 13:01:54', '2021-11-27 13:01:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_article`
--
ALTER TABLE `t_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_article_category`
--
ALTER TABLE `t_article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_career`
--
ALTER TABLE `t_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_doctor`
--
ALTER TABLE `t_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event`
--
ALTER TABLE `t_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_category`
--
ALTER TABLE `t_event_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_featured_doctor`
--
ALTER TABLE `t_featured_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_field_doctor`
--
ALTER TABLE `t_field_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_gallery`
--
ALTER TABLE `t_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_image_profile`
--
ALTER TABLE `t_image_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_schedule_doctor`
--
ALTER TABLE `t_schedule_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_service`
--
ALTER TABLE `t_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_slider`
--
ALTER TABLE `t_slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_article`
--
ALTER TABLE `t_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_career`
--
ALTER TABLE `t_career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_doctor`
--
ALTER TABLE `t_doctor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `t_event`
--
ALTER TABLE `t_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 06:07 AM
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
  `role` int(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id`, `username`, `password`, `name`, `email`, `role`, `create_date`, `update_date`) VALUES
('$qqr@!kdhnnn$$ppppkhdfhsshhhhnb', 'rsud_cimacan_admin', '$2a$11$qIWdkHkQCDsVKNCnmqwexOGXgCnRJu9GEcW4x7TKRqFlUP6tg3Dbe', 'Super Admin', 'superadmin@rsudcimacan.com', 1, '2021-12-20 02:40:03', '2021-12-20 02:40:03'),
('qwertyuioplghjdbbvc5aascc', 'admin', '$2a$11$3mv6g/yEDTsVudmI8dtCAe7fXv6iAvtv9L7f5ed/ePM6AoTP0IHQ2', 'Super Admin', '', 1, '2021-12-22 01:11:37', '2021-12-22 01:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `t_article`
--

CREATE TABLE `t_article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_desc` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `author` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'publish',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_article`
--

INSERT INTO `t_article` (`id`, `title`, `sub_desc`, `category`, `description`, `author`, `img`, `status`, `create_date`, `update_date`) VALUES
(4, 'Diabetes Mellitus saat Puasa Ramadhan', '', 'EWc4aGs2mJrjY5LKOoT0gMXV', 'Halo Sahabat Cimacan..<br />Banyak nih dari Sahabat Cimacan yang bertanya kalau pasien dengan diabetes mellitus apakah boleh berpuasa?<br /><br />Mincan ada sedikit info nih untuk Sahabat Cimacan semua!<br />Pasien dengan diabetes mellitus tentunya boleh berpuasa namun ada beberapa hal yang penting diperhatikan, yaitu:<br />1. Penyesuaian nutrisi dan aktivitas fisik<br />2. Pengaturan dosis obat selama puasa<br />3. Pemantauan glukosa darah<br />4. Kapan seorang pasien harus membatalkan puasanya<br /><br />Jadi bagi pasien dengan DM tidak perlu khawatir untuk berpuasa yaa!<br />Pastikan untuk selalu melakukan pemantauan gula darah secara mandiri serta mengetahui gejala-gejala dari hipoglikemia dan hiperglikemia.<br />Jika Ingin berkonsultasi lebih lanjut dapat datang ke Poliklinik Penyakit Dalam RSUD Cimacan ya.<br /><br />Selamat menjalankan ibadah puasa bagia Sahabat Cimacan semua. Semoga ibadah kita hari ini diberikan kemudahan dan kelancaran.', 'Admin', 'article/20220511124233_Pasien-Diabetes-Mellitus-saat-Puasa-Ramadhan.jpg', 'publish', '2022-04-07 12:42:33', '2022-05-11 12:42:33'),
(5, 'Langkah Cuci Tangan Pakai Sabun dari WHO', '', 'EWc4aGs2mJrjY5LKOoT0gMXV', 'Haloo Sahabat Cimacan..<br />Setiap tahunnya tanggal 5 Mei 2022 diperingati sebagai Hari Kebersihan Tangan Sedunia!<br /><br />Tahukah Sahabat Cimacan semua, tangan merupakan salah satu pintu masuk segala penyakit! Berdasarkan data WHO, tangan mengandung bakter sebanyak 39.000 hingga 460.000 CFU per sentimeter kubik. Banyak sekali bukan? Hal ini berpotensi tinggi menyebabkan penyakit bagi diri sendiri dan orang sekitar.<br /><br />Menjaga tangan untuk tetap bersih adalah hal paling penting yang dapat kita lakukan untuk menghindari berbagai macam penyakit dan menyebarkan kuman kepada orang lain.<br /><br />Yuk kita belajar lebih lanjut mengenai langkah-langkah cuci tangan yang baik dan benar!<br />1. Basahi kedua tangan dengan air bersih<br />2. Tuangkan sabun secukupnya<br />3. Ratakan sabun dengan kedua tangan<br />4. Gosok punggung tangan dan sela-sela jari secara bergantian<br />5. Gosok jari-jari bagian dalam<br />6. Gosok telapak tangan dengan posisi jari saling mengait/mengunci<br />7. Gosok ibu jari secara berputar dalam genggaman tangan dan lakukan pada kedua tangan<br />8. Gosokkan ujung jari pada telapak tangan secara berputar pada kedua tangan<br />9. Bilas kedua tangan dengan air bersih dengan mengulang kembali 6 langkah<br /><br />Mudah bukan? Mari kita bersama-sama meningkatkan kebiasaan cuci tangan dengan cara yang baik dan benar.<br /><br />Lindungi diri, lindungi sesama dengan rajin mencuci tangan!<br /><br />World Hand Hygiene Day<br />Unite for safety: clean your hands', 'Admin', 'article/20220511130005_Langkah-Cuci-Sabun-dari-WHO.jpg', 'publish', '2022-05-05 13:00:05', '2022-05-11 13:00:05'),
(6, 'Apa Itu Lupus?', '', 'EWc4aGs2mJrjY5LKOoT0gMXV', 'Yuk Sahabat Cimacan kita ketahui lebih lanjut mengenai Lupus..<br /><br />Lupus merupakan penyakit autoimun kronis yang bisa menyebabkan peradangan di beberapa jaringan atau organ tubuh.<br /><br />Tubuh orang yang menderita lupus akan memproduksi antibodi dengan jumlah yang sangat besar dan justru menyerang tubuh dengan merusak sel-sel sehat sehingga membuat penderitanya kerap mengalami peradangan dan infeksi pada sistem jaringan tubuhnya.<br /><br />Penyakit ini terutama menyerang wanita usia produktif (15-50 tahun) dengan angka kematian yang cukup tinggi, meski begitu lupus juga dapat menyerang laki-laki, anak-anak, dan remaja.<br /><br />Lupus juga dikenal sebagai penyakit 1000 wajah karena memiliki sebaran gambaran klinis yang luas serta tampilan perjalanan penyakit yang beragam, sehingga seringkali menimbulkan kekeliruan dalam upaya mengenalinya.<br /><br />Penting bagi masyarakat untuk dapat mengenali gejala Lupus. Penanganan yang lebih cepat dipastikan bisa meningkatkan kesejahteraan, kualitas dan harapan hidup orang dengan lupus.<br /><br />Yuk kita sadari lupus sejak dini dengan mencermati sederet gejala dan tanda tandanya dengan SALURI (PerikSa LUpus SendiRI).<br /><br />Jika Anda mengalami minimal 4 gejala dari seluruh gejala yang disebutkan di atas, maka dianjurkan untuk segera melakukan konsultasi dengan dokter di Puskesmas atau Rumah Sakit agar dapat dilakukan pemeriksaan dan penanganan lebih lanjut.', 'Admin', 'article/20220511130859_apa-itu-lupus.jpg', 'publish', '2022-05-10 13:08:59', '2022-05-11 13:08:59'),
(7, 'Penyebab Hepatitis Akut Berat', '', 'EWc4aGs2mJrjY5LKOoT0gMXV', 'Halo Sahabat Cimacan..<br />Kali ini Mincan mau berbagi informasi mengenai penyakit Hepatitis yang saat ini sedang marak terjadi nih. Yuk kita simak!<br /><br />Penyakit Hepatitis Akut yang hingga saat ini belum diketahui penyebabnya pertama kali ditemukan di Inggris pada tanggal 5 April 2022. Sejak saat itu, dilaporkan terjadi peningkatan kasus di Eropa, Asia, dan Amerika. WHO kemudian menetapkan penyakit Hepatitis Akut ini sebagai Kejadian Luar Biasa (KLB) sejak tanggal 15 April 2022.<br />Di Indonesia, terdapat beberapa dugaan kasus pasien anak hepatitis akut meninggal dalam kurun waktu 2 minggu hingga 13 Mei 2022. Penyakit Hepatitis Akut ini menyerang anak usia 0-16 tahun, paling banyak anak usia di bawah 10 tahun.<br /><br />Hingga saat ini belum diketahui penyebab pasti Hepatitis Akut. Sudah dilakukan pemeriksaan virus hepatitis A, B, C, D dan E didapatkan hasil non reaktif. Dugaan awal berasal penyebab hepatitis ini berasa dari Adenovirus 41, SARS CoV-2, virus ABV, dll. Adenovirus umumnya menular melalui saluran cerna dan saluran pernafasan. Cara menularnya diduga dari droplet, air yang tercemar dan transmisi kontak.<br /><br />Gejala awal Hepatitis Akut adalah demam disertai gangguan gastrointestinal seperti mual, muntah, sakit perut, dan diare. Gejala dapat berlanjut dengan air kencing berwarna pekat seperti teh, BAB putih pucat, kulit &amp; mata kuning, gangguan pembekuan darah, kejang hingga penurunan kesadaran.<br /><br />Tindakan untuk mencegah Hepatitis Akut pada anak?<br />- Tetap tenang, jangan panik<br />- Jaga kebersihan diri dan lingkungan dengan rutin cuci tangan pakai sabun, masak makanan hingga matang, dan hindari kontak dengan orang sakit<br />- Terapkan etika batuk dan disiplin prokes COVID-19 seperti pakai masker serta jaga jarak<br /><br />Apabila anak Anda mengalami gejala awal dari Hepatitis Akut, disarankan segera dirujuk ke fasilitas layanan kesehatan terdekat untuk mendapatkan penanganan medis lebih lanjut, jangan menunggu hingga timbul gejala lanjut.<br /><br />Kenali gejala awal dan segera memeriksakan Anak ke fasilitas layanan kesehatan agar segera mendapatkan penanganan yang cepat dan tepat.<br /><br />Sumber:<br />Kemenkes RI<br />PB IDI', 'Admin', 'article/20220517121036_penyebab-hepatitis.jpg', 'publish', '2022-05-16 12:10:36', '2022-05-17 12:10:36'),
(8, 'Faktor Risiko Hipertensi', '', 'EWc4aGs2mJrjY5LKOoT0gMXV', 'Hipertensi merupakan penyakit yang dapat dicegah dan dikendalikan loh Sahabat Cimacan..<br /><br />Terdapat beberapa faktor risiko yang berpengaruh terhadap kejadian Hipertensi. Yuk kita kenali faktor risiko apa saja yang dapa mempengaruhi terjadinya Hipertensi!<br /><br />Faktor risiko yang tidak dapat dimodifikasi:<br />1. Usia<br />2. Jenis kelamin<br />3. Riwayat keluarga (genetik)<br /><br />Faktor risiko yang dapat dimodifikasi:<br />1. Kegemukan (obesitas)<br />2. Kurang aktivitas fisik<br />3. Merokok<br />4. Diet tinggi lemak<br />5. Konsumsi garam dan alkohol berlebih<br />6. Dislipidemia<br />7. Tingkat stress tinggi<br /><br />Apa saja komplikasi yang dapat disebabkan oleh Hipertensi?<br />- Penyakit jantung<br />- Stroke<br />- Penyakit ginjal<br />- Kerusakan mata<br />- Gangguan saraf<br />- Gangguan pembuluh darah<br /><br />Yuk kita rajin cek tekanan darah dan segera berobat dengan cepat dan tepat agar dapat mencegah komplikasi yang dapat ditimbulkan oleh hipertensi<br /><br />Sumber:<br />World Health Organization<br />American Heart Association<br />Kementerian Kesehatan RI', 'Admin', 'article/20220517121408_faktor-risiko-hipertensi.jpg', 'publish', '2022-05-17 12:14:08', '2022-05-17 12:14:08'),
(9, 'Cara Mengukur Tekanan Darah di Rumah', '', 'EWc4aGs2mJrjY5LKOoT0gMXV', 'Hipertensi sering disebut dengan The Silent Killer karena tidak memiliki gejala khusus dan hanya diketahui dengan mengukur tekanan darah.<br /><br />Apakah Sahabat Cimacan sudah mengetahui cara mengukur tekanan darah yang tepat? Yuk Mincan kasih info mengenai cara yang benar dan tepat..<br /><br />\r\n<ol>\r\n<li>Pasien dalam keadaan tenang</li>\r\n<li>Duduk dan istirahat selamat 3-5 menit sebelum dilakukan pengukuran tekanan darah</li>\r\n<li>Kandung kemih kosong (tidak sedang menahan buang air kecil)</li>\r\n<li>Hindari konsumsi kopi, alkohol, dan rokok minimal 30 menit sebelum pengukuran</li>\r\n<li>Posisi duduk bersandar dan rileks</li>\r\n<li>Posisi kaki tidak menyilang dan telapak kaki rata menyentuh lantai</li>\r\n<li>Lengan diposisikan di atas meja dengan ketinggian setara dengan posisi jantung</li>\r\n<li>Apabila menggunakan baju lengan panjang, usahakan lipatan baju tidak menghambat aliran darah</li>\r\n<li>Selama pengukuran dilangan berbicara dan bergerak</li>\r\n<li>Gunakan alat tensimeter yang tervalidasi</li>\r\n<li>Gunakan manset dengan ukuran sesuai dan posisi batas bawah manset sekitar 2,5cm di atas siku (2 jari di atas siku)</li>\r\n<li>Melakukan pengukuran tekanan darah sebanyak 2 kali dengan jeda 1-2 menit, serta pengukuran ke-3 (tambahan) apabila didapatkan perbedaan &gt;5 mmHg pada kedua pengukuran</li>\r\n<li>Hitung rerata tekanan darah</li>\r\n</ol>\r\n<br />Sumber:<br />World Health Organization<br />American Heart Association<br />Kementerian Kesehatan RI<br /><br />Instagram: <a title=\"@rsud.cimacan\" href=\"https://www.instagram.com/rsud.cimacan/\" target=\"_blank\" rel=\"noopener\">@rsud.cimacan</a>', 'Admin', 'article/20220518133104_mengukur-tekanan-darah-sendiri.jpg', 'publish', '2022-05-18 13:32:50', '2022-05-18 13:31:04');

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
('AEx5ug1DFMJjsyX8YIGRTnm7', 'Kesehatan Dewasa', '2022-01-01 20:12:23', '2022-01-01 20:12:23'),
('EWc4aGs2mJrjY5LKOoT0gMXV', 'Kesehatan Umum', '2022-05-11 12:36:38', '2022-05-11 12:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `t_career`
--

CREATE TABLE `t_career` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_desc` varchar(255) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'publish',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_career`
--

INSERT INTO `t_career` (`id`, `title`, `sub_desc`, `description`, `img`, `url`, `status`, `create_date`, `update_date`) VALUES
(4, 'Analis Laboratorium', '', 'RSUD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />Analis Laboratorium<br />(Jumlah: 4 orang)<br /><br />Kriteria:<br />- Pria/Wanita<br />- Usia maksimal 35 tahun<br />- Kemampuan komunikasi yang baik<br />- Jujur, cekatan, bertanggung jawab<br />- Dapat bekerja sama dalam tim<br />- Menguasai Microsoft Office (Word, Excel, PPT)<br />- Bersedia bekerja dalam shift<br /><br />Yuk kirimkan surat lamaran, CV, foto terbaru, dan kelengkapan<br />melalui e-mail ke : umpeg.rsudcimacan@gmail.com', 'career/20220105140612_analis_laboratorium_Desember.jpg', '', 'unpublish', '2021-12-20 14:06:12', '2022-01-05 14:06:12'),
(6, 'Tenaga Kesehatan', '', 'RSUD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />1. Apoteker<br />2. Tenaga Teknis Kefarmasian (TTK)<br />3. Asisten TTK<br /><br />Kriteria:<br />- Pria/Wanita<br />- Kemampuan komunikasi yang baik<br />- Jujur, cekatan, bertanggung jawab<br />- Dapat bekerja sama dalam tim<br />- Menguasai Microsoft Office (Word, Excel, PPT)<br />- Bersedia bekerja dalam shift<br /><br />Kirimkan surat lamaran, CV, foto terbaru, dan kelengkapan<br />melalui e-mail ke : umpeg.rsudcimacan@gmail.com', 'career/20220106090336_recruitment_opteker_ttk_asttk.jpg', '', 'unpublish', '2021-12-04 09:03:36', '2022-01-06 09:03:36'),
(7, 'Perawat', 'RSD Cimacan membuka peluang dan kesempatan bergabung bagi:\r\nPerawat\r\n(Jumlah: 33 orang)\r\n\r\nKriteria:\r\n- Pendidikan minimal D3 Keperawatan\r\n- Diutamakan program Profesi Ners\r\n- Memiliki STR/Serk', 'RSD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />Perawat<br />(Jumlah: 33 orang)<br /><br />Kriteria:<br />- Pendidikan minimal D3 Keperawatan<br />- Diutamakan program Profesi Ners<br />- Memiliki STR/Serkom<br />- Diutamakan mempunyaj Sertifikat Pelatihan Khusus (Bedah, ICU, HD, dll)<br />- Kemampuan komunikasi yang baik<br />- Jujur, cekatan, bertanggung jawab<br />- Dapat bekerja sama dalam tim<br />- Bersedia bekerja dalam shift<br /><br />Periode pendaftaran dibuka dari tanggal 14 hingga 20 Januari 2022.<br />Yuk segera kirimkan surat lamaran, CV, foto terbaru, dan kelengkapan<br />melalui e-mail ke: umpeg.rsudcimacan@gmail.com', 'career/20220117091353_271904694_910159676368644_5753862463631661069_n.jpg', '', 'publish', '2022-01-15 09:13:53', '2022-01-17 09:13:53'),
(8, 'Dokter Umum', '', 'RSD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />Dokter Umum<br />(Jumlah: 3 orang)<br /><br />Kriteria:<br />- Pendidikan Profesi Dokter<br />- Memiliki STR aktif<br />- Memiliki sertifikat ACLS/ATLS<br />- Kemampuan komunikasi yang baik<br />- Jujur, cekatan, bertanggung jawab<br />- Dapat bekerja sama dalam tim<br />- Bersedia bekerja dalam shift<br />- Memiliki sertifikat pelatihan, seminar/workshop yang mendukung profesi<br /><br />Yuk segera kirimkan surat lamaran, CV, foto terbaru, dan kelengkapan melalui e-mail ke: umpeg.rsudcimacan@gmail.com', 'career/20220119091738_Lowongan-Dokter-Umum.jpg', '', 'unpublish', '2022-01-19 09:17:38', '2022-01-19 09:17:38'),
(9, 'Admin Ruangan', '', 'RSD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />Admin Ruangan<br />(Jumlah: 1 orang)<br /><br />Kriteria:<br />- Lulusan SMA/SMK<br />- Handal mengoperasikan sistem komputer<br />- Kemampuan komunikasi yang baik<br />- Jujur, cekatan, bertanggung jawab<br />- Dapat bekerja sama dalam tim<br />- Bersedia bekerja dalam shift<br /><br />Yuk segera kirimkan surat lamaran, CV, foto terbaru, dan kelengkapan<br />melalui e-mail ke: umpeg.rsudcimacan@gmail.com', 'career/20220121112411_lowongan-admin-ruangan.jpg', '', 'unpublish', '2022-01-21 11:24:12', '2022-01-21 11:24:12'),
(10, 'Dokter Umum', '', 'RSUD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />Dokter Umum<br />(Jumlah: 3 orang)<br /><br />Kriteria:<br />1.Pendidikan Profesi Dokter<br />2.Memiliki STR aktif<br />3.Memiliki sertifikat ACLS dan ATLS<br />4. Surat keterangan kerja dari tempat bekerja sebelumnya<br />5. Kemampuan komunikasi yang baik<br />6.Jujur, cekatan, dan bertanggung jawab<br />7. Dapat bekerja sama dalam tim dan bersedia bekerja dalam shift<br />8. Memiliki sertifikat pelatihan, atau seminar yang mendukung profesi<br /><br />Yuk segera kirimkan kelengkapan data berikut melalui e-mail ke: umum_kepegawaian@rsdcimacan.com<br />- Surat lamaran<br />- CV<br />- Pas foto terbaru ukuran 3x4 (2 lembar)<br />- Foto copy Ijazah terakhir (legalisir)<br />- Transkrip nilai (legalisir)<br />- Foto copy KK dan KTP<br />- Foto copy STR aktif<br />- Foto copy sertifikat ACLS dan ATLS<br />- Surat keterangan kerja dari tempat bekerja sebelumnya', 'career/20220130112440_lowongan-dokter-umum-1.jpg', '', 'unpublish', '2022-01-30 11:24:40', '2022-01-30 11:24:40'),
(11, 'IPSRS RSUD Cimacan', 'RSUD Cimacan membuka peluang dan kesempatan bergabung bagi:\r\nPegawai Instalasi Pemeliharaan Sarana Rumah Sakit (IPSRS)\r\n(Jumlah: 4 orang)\r\n\r\nKriteria Pelamar IPSRS RSUD Cimacan:\r\n1. Lulusan SMK/D3 Teknik Mesin, Tata Udara dan SMK Bangunan\r\n2. Memiliki ser', 'RSUD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />Pegawai Instalasi Pemeliharaan Sarana Rumah Sakit (IPSRS)<br />(Jumlah: 4 orang)<br /><br />Kriteria Pelamar IPSRS RSUD Cimacan:<br />1. Lulusan SMK/D3 Teknik Mesin, Tata Udara dan SMK Bangunan<br />2. Memiliki sertifikat pelatihan teknik mesin, pelatihan tenaga kelistrikan dan pelatihan tenaga kerja pada ketinggian tingkat 1<br />3. Minimal umur 24 tahun, maksimal 35 tahun<br />4. Diutamakan berpengalaman 1 tahun kerja dibidang tersebut<br />5. Bisa mengoperasikan mesin dan komputer<br />6. Dapat bekerja secara tim<br />7. Dapat bekerja dibawah tekanan<br />8. Dapat bekerja secara shift<br /><br />Yuk segera kirimkan kelengkapan data berupa:<br />- Surat lamaran<br />- CV<br />- Pas foto terbaru<br />- Ijazah terakhir<br />- Transkrip nilai<br />- KK dan KTP<br />- Surat keterangan kerja dari tempat bekerja sebelumnya<br />- Sertifikat dan pendukung lainnya<br /><br />Yuk, tunggu apa lagi?<br />Segera kirimkan kelengkapan data digabungkan dalam 1 file PDF dan di upload melalui link berikut: bit.ly/pelamarIPSRSrsudcimacan<br /><br />Periode pendaftaran: 25 Maret hingga 1 April 2022', 'career/20220405092115_IPSRS-2022.jpg', 'http://bit.ly/pelamarIPSRSrsudcimacan', 'publish', '2022-04-05 09:21:15', '2022-04-05 09:21:15'),
(12, 'Dokter Spesialis Radiologi', '', 'RSUD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />Dokter Spesialis Radiologi<br /><br />Kriteria Pelamar Dokter Spesialis Radiologi RSUD Cimacan:<br />1. Pria / Wanita<br />2. Memiliki STR Aktif<br />3. Jujur dan Bertanggung Jawab<br />4. Berkomitmen Tinggi<br />5. Dapat Bekerja Sama Dalam Tim<br />6. Kemampuan Komunikasi Baik<br />7. Memiliki Inisiatif Tinggi<br />8. Diharapkan Full Timer<br /><br />Yuk segera kirimkan kelengkapan data berupa:<br />- Surat lamaran<br />- CV<br />- Pas foto terbaru<br />- Ijazah terakhir<br />- Transkrip nilai<br />- KK dan KTP<br />- Surat keterangan kerja dari tempat bekerja sebelumnya<br />- Sertifikat dan pendukung lainnya<br /><br />Yuk, tunggu apa lagi?<br />Segera kirimkan kelengkapan data digabungkan dalam 1 file PDF dan di upload melalui link yang telah disediakan pada laman ini', 'career/20220514111222_lowongan-dokter-spesialis-radiologi.jpeg', 'https://docs.google.com/forms/d/e/1FAIpQLSeOkZBYniXrVAzXIIY9f9fngGjdnHTJ0C49L4hJtzcMfMR99g/viewform', 'unpublish', '2022-05-14 11:12:22', '2022-05-14 11:12:22'),
(13, 'Dokter Umum IGD RSUD Cimacan 2022', 'RSUD Cimacan membuka peluang dan kesempatan bergabung bagi:\r\nDokter Umum\r\n\r\nKriteria Pelamar Dokter Umum RSUD Cimacan:\r\n1. Pria/Wanita\r\n2. Usia <35 tahun\r\n3. Pendidikan Profesi Dokter\r\n4. Memiliki STR aktif\r\n5. Memiliki Sertifikat ACLS & ATLS\r\n6. Kemampua', 'RSUD Cimacan membuka peluang dan kesempatan bergabung bagi:<br />Dokter Umum<br /><br />Kriteria Pelamar Dokter Umum RSUD Cimacan:<br />1. Pria/Wanita<br />2. Usia &lt;35 tahun<br />3. Pendidikan Profesi Dokter<br />4. Memiliki STR aktif<br />5. Memiliki Sertifikat ACLS &amp; ATLS<br />6. Kemampuan komunikasi yang baik<br />7. Jujur &amp; bertanggung jawab<br />8. Surat keterangan kerja dari tempat bekerja sebelumnya<br />9. Bersedia bekerja secara shift<br />10. Memiliki sertifikat pelatihan atau seminar yang mendukung profesi<br /><br />Yuk segera kirimkan kelengkapan data berupa:<br />- Surat lamaran<br />- CV<br />- Pas foto terbaru<br />- Ijazah terakhir<br />- Transkrip nilai<br />- KK dan KTP<br />- Surat keterangan kerja dari tempat bekerja sebelumnya<br />- Sertifikat dan pendukung lainnya<br /><br />Yuk, tunggu apa lagi?<br />Segera kirimkan kelengkapan data digabungkan dalam 1 file PDF dan di upload melalui link yang telah disediakan pada laman ini', 'career/20220609114258_rekrut-dokter-umum-rsud-cimacan.jpeg', 'https://docs.google.com/forms/d/e/1FAIpQLSfclrKzJp4IYPsTjn6F5x1hPAN9OLW3B48jci6eX3Iao_-7Wg/viewform', 'publish', '2022-06-09 11:42:58', '2022-06-09 11:42:58');

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
(13, 'dr. Panji Gugah Bhaskara, Sp.PD', 'A3QsDcHptRaUr1Eg56ov9nTx', 'Klinik Penyakit Dalam', NULL, 0, 0, '', '', NULL, '503/2192/SIPD/DPMPTSP/2019', 'doctor/20220107084233_dr-panji.png', 'publish', 'id', '2022-01-25 19:11:54', '2021-12-23 13:11:47'),
(14, 'dr. Chica Pratiwi, Sp.PD', 'A3QsDcHptRaUr1Eg56ov9nTx', 'Klinik Penyakit Dalam', NULL, 0, 0, '', '', NULL, '503/7204/SIPD/DPMPTSP/2021', 'doctor/20220107084917_dr-chica.png', 'publish', 'id', '2022-01-07 08:49:17', '2021-12-23 13:13:26'),
(15, 'dr. Andri Saputra, Sp.A', 'M4VDzXWY0fbHQFaNmeyuKvlk', 'Klinik Anak', NULL, 0, 0, '', '', NULL, '503/803/SIPD/DPMPTSP/2021', 'doctor/20220107081841_dr-andri.png', 'publish', 'id', '2022-01-07 08:18:41', '2021-12-23 13:13:54'),
(16, 'dr. Nelis Fitriah Handayani, MARS, Sp.B', 'FKVinf4XMhBHyl6NL7kePTu3', 'Klinik Bedah', NULL, 0, 0, '', '', NULL, '446.2/204.2/SDK/J17', '', 'publish', 'id', '2021-12-23 07:50:30', '2021-12-23 13:14:55'),
(17, 'dr. Jacky Junaedi, Sp.B', 'FKVinf4XMhBHyl6NL7kePTu3', 'Klinik Bedah', NULL, 0, 0, '', '', NULL, '503/2729/SIPD/DPMPTSP/2019', 'doctor/20220107085349_dr-jacky.png', 'publish', 'id', '2022-01-07 08:53:49', '2021-12-23 13:15:38'),
(18, 'dr. Wulan Nurmala, Sp.OG', 'e7Vz8QWlaAIyj5KSNZPTMRUg', 'Klinik OBGYN', NULL, 0, 0, '', '', NULL, '503/738/SIPD/DPMPTSP/2020', 'doctor/20220107090812_dr-wulan.png', 'publish', 'id', '2022-01-07 09:08:12', '2021-12-23 13:16:16'),
(19, 'dr. Yanto Hasintongan Sinaga, Sp.OG', 'e7Vz8QWlaAIyj5KSNZPTMRUg', 'Klinik OBGYN', NULL, 0, 0, '', '', NULL, '503/2896/SIPD/DPMPTSP/2019', '', 'publish', 'id', '2022-01-25 19:12:53', '2021-12-23 13:16:55'),
(20, 'dr. Ratna Andriyati, Sp.JP', 'Fhxw6df72HoIaiQ1YVgmEb5X', 'Klinik Jantung dan Pembuluh', NULL, 0, 0, '', '', NULL, '503/1398/SIPD/DPMPTSP/2020', '', 'publish', 'id', '2021-12-23 07:51:49', '2021-12-23 13:17:34'),
(21, 'dr. Pudyastuti Rachyanti, Sp.T.H.T.K.L', '7y4mqNZBLJbatwOdWnAuzXe3', 'Klinik THT-KL', NULL, 0, 0, '', '', NULL, '503/2359/SIPD/DPMPTSP/2021', '', 'publish', 'id', '2022-01-25 19:12:29', '2021-12-23 13:18:37'),
(22, 'dr. Putri Ratna Palupi Puspitasari, Sp.KJ', 'MB8vIDSJyHRCGPLfjd3Nze0b', 'Klinik Kesehatan Jiwa', NULL, 0, 0, '', '', NULL, '503/224/SIPD/DPMPTSP/2020', 'doctor/20220107085623_dr-palupi.png', 'publish', 'id', '2022-01-07 08:56:23', '2021-12-23 13:19:08'),
(23, 'drg. Intan Sri Fajarwati', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '503/428/SIPD/DPMPTSP/2019', 'doctor/20220125202223_drg-intan.png', 'publish', 'id', '2022-01-25 20:22:23', '2021-12-23 13:20:48'),
(24, 'drg. Hariansyah Buana Putra', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '503/499/SIPDG/DPMPTSP/2021', 'doctor/20220125201655_drg-arya.png', 'publish', 'id', '2022-01-25 20:16:55', '2021-12-23 13:37:34'),
(25, 'dr. Hj. Hawik Muzdalifah, Sp.KFR, MARS', 'Ud961nVCkabF5cqlp3mrRgNi', 'Klinik Rehabilitasi Medik', NULL, 0, 0, '', '', NULL, '503/03/S/SIPD/DPMPTSP/2021', 'doctor/20220107083509_dr-hawik.png', 'publish', 'id', '2022-01-07 08:35:09', '2021-12-23 13:38:32'),
(26, 'drg. Rindang Yuasari, Sp.BM', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '503/2329/SIPDG/DPMPTSP/2020', 'doctor/20220107090606_dr-rindang.png', 'publish', 'id', '2022-01-07 09:06:06', '2021-12-23 13:39:10'),
(27, 'drg. Yulia Jayaputri Moeslim T', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '', '', 'publish', 'id', '2021-12-23 07:42:17', '2021-12-23 13:42:17'),
(28, 'drg. Indah Sukartinah', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '446.2/64.2/yankes/I16', '', 'publish', 'id', '2021-12-23 07:53:44', '2021-12-23 13:42:36'),
(29, 'drg. Dwi Anie Lestari, Sp. Orth', 'lsHZ92VBd3fyFK1RcMmkq8xN', 'Klinik Gigi', NULL, 0, 0, '', '', NULL, '503/2881/SIPD/DPMPTSP/2021', 'doctor/20220107084437_dr-ani.png', 'publish', 'id', '2022-01-07 08:44:37', '2021-12-23 13:43:10'),
(30, 'dr. Gita Ayu Saraswati', 'gweuFDXZHc9vqsO6SpE28mkR', 'Klinik MCU dan VCT', NULL, 0, 0, '', '', NULL, '503/736/SIPD/DPMPTSP/2021', 'doctor/20220125200401_dr-ghita.png', 'publish', 'id', '2022-01-25 20:04:01', '2021-12-23 13:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `t_event`
--

CREATE TABLE `t_event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_desc` varchar(255) NOT NULL,
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

INSERT INTO `t_event` (`id`, `title`, `sub_desc`, `description`, `category`, `url`, `img`, `start_date`, `end_date`, `start_time`, `end_time`, `location`, `status`, `create_date`, `update_date`) VALUES
(4, 'Vaksinasi Januari Minggu 1', '', 'RSUD Cimacan membuka pelayanan Vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 3 sampai 7 Januari 2022.<br /><br />Kami menyediakan Vaksin jenis Sinovac untuk dosis 1 dan 2.<br /><br />Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, dan membawa alat tulis pribadi (ballpaint).<br /><br />Yuk Sahabat Cimacan vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105111643_vaksinasi_januari_1.jpg', '2022-01-03', '2022-01-07', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:16:44', '2022-01-05 11:16:44'),
(5, 'Vaksinasi Desember Minggu 4', '', 'RSUD Cimacan membuka pelayanan Vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 27 hingga 31 Desember 2021.<br /><br />Kami menyediakan Vaksin jenis Sinovac dan Astrazeneca untuk dosis 1 dan 2.<br /><br />Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, dan membawa alat tulis pribadi (ballpaint).<br /><br />Yuk Sahabat Cimacan vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105111949_vaksinasi_desember_4.jpg', '2021-12-27', '2021-12-31', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:19:49', '2022-01-05 11:19:49'),
(6, 'Vaksinasi Desember Minggu 3', '', 'RSUD Cimacan membuka pelayanan Vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 20 hingga 24 Desember 2021.<br /><br />Kami menyediakan Vaksin jenis Astrazeneca untuk dosis 1 dan 2 serta Vaksin Pfizer dan Sinovac untuk dosis ke-2.<br /><br />Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, dan membawa alat tulis pribadi (ballpaint).<br /><br />Yuk kita vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105112211_vaksinasi_desember_3.jpg', '2021-12-20', '2021-12-24', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:22:11', '2022-01-05 11:22:11'),
(7, 'Vaksinasi Desember Minggu 2', '', 'RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 13 hingga 17 Desember 2021.<br /><br />Kami menyediakan Vaksin jenis Pfizer dan Sinovac untuk dosis 2 serta Vaksin Astrazeneca untuk dosis 1 dan 2.<br /><br />Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak serta membawa alat tulis pribadi (ballpaint).<br /><br />Yuk Sahabat Cimacan vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105112434_vaksinasi_desember_2.jpg', '2021-12-13', '2021-12-17', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:24:34', '2022-01-05 11:24:34'),
(8, 'IG Live Serumen Telinga Bahaya atau Tidak', '', 'Halo Sahabat Cimacan..<br />Mincan mau memberikan info menarik yang ditunggu-tunggu Sahabat Cimacan semua nih!<br /><br />Pada kesempatan kali ini, kita akan membahas mengenai kotoran (serumen) telinga dan serba-serbi yang perlu diketahui untuk menjaga kesehatan telinga.<br /><br />Banyak Sahabat Cimacan yang menanyakan bagaimana cara terbaik untuk menjaga kesehatan telinga kita, bagaimana cara membersihkan telinga yang benar, dan apakah boleh kita mengorek telinga menggunakan cotton bud?<br /><br />Nah, bagi Sahabat Cimacan yang ingin mengetahui lebih lanjut mengenai serumen telinga dan bagaimana cara menjaga kebersihan telinga, yuk simak dan ketahui lebih lanjut dengan bergabung dalam live Instagram bersama dr. Pudyastuti Rachyanti, Sp.THT-KL&nbsp;<a class=\"notranslate\" tabindex=\"0\" href=\"https://www.instagram.com/kiki_prima/\">@kiki_prima</a>&nbsp;dan host Ary Sunjaya&nbsp;<a class=\"notranslate\" tabindex=\"0\" href=\"https://www.instagram.com/rysoen87/\">@rysoen87</a><br /><br />Live Instagram akan berlangsung pada:<br />Kamis, 9 Desember 2021<br />Pukul 13.00 WIB<br /><br />Jangan sampai ketinggalan yaa!<br />Follow akun resmi RSUD Cimacan di&nbsp;<a class=\"notranslate\" tabindex=\"0\" href=\"https://www.instagram.com/rsud_cimacan/\">@rsud_cimacan</a><br /><br />Siapkan pertanyaan kalian yaa Sahabat Cimacan agar dapat ditanyakan langsung pada saat live dengan cara ketik di kolom komentar.', 'EcP6WsMO5hq7aHje1YoUg3Sd', 'https://www.instagram.com/rsd_cimacan/', 'event/20220105112828_Webinar_live_ig_dr_pudyastuti.jpg', '2021-12-09', '2021-12-09', '13:00:00', '14:00:00', '', 'publish', '2022-01-05 11:28:28', '2022-01-05 11:28:28'),
(9, 'Vaksinasi Desember Minggu 1', '', 'Info Vaksinasi COVID-19 di RSUD Cimacan sudah hadir lagi nih!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 6 hingga 10 Desember 2021.<br /><br />Kami menyediakan Vaksin jenis Pfizer dan Sinovac untuk dosis 2 serta Vaksin Astrazeneca untuk dosis 1 dan 2. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan juga diharapkan membawa alat tulis (ballpaint).<br /><br />Yuk kita vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa<br />Pendaftaran vaksinasi dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105113053_vaksinasi_desember_1.jpg', '2021-12-06', '2021-12-10', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:30:53', '2022-01-05 11:30:53'),
(10, 'Vaksinasi November Minggu 5', '', 'Info tentang Vaksinasi COVID-19 yang ditunggu-tunggu sudah hadir nih!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 29 November hingga 3 Desember 2021.<br /><br />RSUD Cimacan menyediakan Vaksin jenis Sinovac untuk dosis 1 serta Vaksin Moderna dan Astrazeneca untuk dosis 1 dan 2. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan juga diharapkan membawa alat tulis (ballpaint).<br /><br />Yuk daftar vaksin di RSUD Cimacan!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa<br />Pendaftaran vaksinasi secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua.', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105114006_vaksinasi_november_4.jpg', '2021-11-29', '2021-12-03', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:40:06', '2022-01-05 11:40:06'),
(11, 'Vaksinasi November Minggu 3', '', 'Info tentang Vaksinasi COVID-19 hadir lagi nih!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 15-19 November 2021.<br /><br />Kali ini RSUD Cimacan menyediakan Vaksin jenis Pfizer untuk dosis 1 dan 2 serta Vaksin Sinovac dan Astrazeneca untuk dosis ke-2. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan juga diharapkan membawa alat tulis (ballpaint).<br /><br />Yuk! Jangan sampai ketinggalan kesempatan vaksin kali ini yaa<br />Jangan lupa pendaftaran vaksinasi secara online melalui aplikasi Tartimah!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105114506_vaksinasi_november_3.jpg', '2021-11-15', '2021-11-19', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:45:06', '2022-01-05 11:45:06'),
(12, 'Donor Darah Bulan November', '', 'Mincan mau kasih info tentang donor darah nih!<br /><br />RSUD Cimacan akan mengadakan Kegiatan Donor Darah yang akan dilaksanakan pada:<br /><br />Hari: Senin, 15 November 2021<br />Lokasi: Taman Kering IGD PONEK RSUD Cimacan<br />Waktu: Pk 09.00 hingga selesai<br /><br />Sahabat Cimacan tidak perlu takut karena donor darah akan dilakukan sesuai dengan protokol kesehatan.<br />Jangan lupa untuk para calon pendonor, ada beberapa syarat donor darah yang harus diperhatikan yaa.<br />Yuk, donor darah! Setiap tetes darah yang kalian berikan bisa memberi banyak harapan bagi mereka yang membutuhkan.', '8jAiIJCtZguS20hROyENBsGU', '', 'event/20220105114731_donor_darah_november.jpg', '2021-11-15', '2021-11-15', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:47:31', '2022-01-05 11:47:31'),
(13, 'Vaksinasi November Minggu 2', '', 'Siapa yang lagi nunggu kabar vaksin nih?<br />Mincan mau kasih info terbaru lagi nih tentang vaksin COVID-19!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 8-12 November 2021.<br /><br />Kali ini RSUD Cimacan menyediakan Vaksin jenis Pfizer untuk dosis 1 dan 2 serta Vaksin Sinovac dan Astrazeneca untuk dosis ke-2. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan juga diharapkan membawa alat tulis (ballpaint).<br /><br />Yuk! Jangan sampai ketinggalan yaa<br />Jangan lupa pendaftaran vaksinasi secara online melalui aplikasi Tartimah!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105115344_vaksinasi_november_2.jpg', '2021-11-08', '2021-11-12', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:53:44', '2022-01-05 11:53:44'),
(15, 'Vaksinasi November Minggu 1', '', 'Info vaksinasi COVID-19 di RSUD Cimacan kembali hadir nih!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin sampai Jumat, 1-5 November 2021.<br /><br />Vaksinasi diutamakan untuk penerima dosis 1 yaa. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan diharapkan untuk membawa alat tulis (ballpaint).<br /><br />Kuota vaksinasi terbatas hanya untuk 1000 orang per hari.<br /><br />Jangan lupa pendaftaran vaksinasi secara online melalui aplikasi Tartimah yaa', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105115912_vaksinasi_november_1.jpg', '2021-11-01', '2021-11-05', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 11:59:12', '2022-01-05 11:59:12'),
(16, 'Vaksinasi November Minggu 4', '', 'Mincan mau berbagi info tentang Vaksinasi COVID-19 yang ditunggu-tunggu nih!<br /><br />RSUD Cimacan membuka pelayanan vaksinasi COVID-19 untuk masyarakat umum pada hari Senin-Jumat, 22-26 November 2021.<br /><br />RSUD Cimacan menyediakan Vaksin jenis Pfizer dan Sinovac untuk dosis 1 dan 2 serta Vaksin Astrazeneca untuk dosis ke-2. Vaksinasi akan dilakukan di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 09.00 sampai 15.00.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk Anak dan juga diharapkan membawa alat tulis (ballpaint).<br /><br />Yuk daftar vaksin di RSUD Cimacan! Jangan sampai ketinggalan kesempatan vaksin kali ini yaa.<br />Pendaftaran vaksinasi secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua.', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220105141108_vaksinasi_november_4_fix.jpg', '2021-11-22', '2021-11-26', '09:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-05 14:11:08', '2022-01-05 14:11:08'),
(19, 'Vaksinasi Januari Minggu 2', '', 'RSUD Cimacan saat ini membuka pelayanan Vaksinasi COVID-19 untuk masyarakat umum mulai dari usia 7 tahun ke atas loh!<br /><br />Vaksinasi Covid-19 dilakukan pada hari Senin-Jumat, 10 sampai 14 Januari 2022 di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 13.00 sampai 15.00.<br /><br />Kami menyediakan Vaksin jenis Sinovac untuk dosis 1 dan 2.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, dan membawa alat tulis pribadi (ballpaint).<br /><br />Yuk Sahabat Cimacan vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah. Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220110092025_vaksinasi_januari_2.jpg', '2022-01-10', '2022-01-14', '13:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-10 09:20:25', '2022-01-10 09:20:25'),
(21, 'Vaksin Bulan Januari Minggu 3', '', 'RSD Cimacan saat ini sudah membuka pelayanan Vaksinasi COVID-19 untuk masyarakat umum mulai dari usia 7 tahun ke atas!<br /><br />Vaksinasi Covid-19 dilakukan pada hari Senin-Jumat, 17 sampai 21 Januari 2022 di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 13.00 sampai 15.00.<br /><br />Kami menyediakan Vaksin jenis Sinovac untuk dosis 1 dan 2 serta jenis Pfizer untuk dosis 2.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, dan membawa alat tulis pribadi (ballpaint).<br /><br />Yuk, kita vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah.<br />Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220117082017_271953136_1230308974162300_7056465776181016807_n.jpg', '2022-01-17', '2022-01-21', '13:00:00', '15:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-17 08:20:17', '2022-01-17 08:20:17'),
(22, 'Vaksin Bulan Januari Minggu 4', '', 'RSD Cimacan saat ini sudah membuka pelayanan Booster Vaksinasi COVID-19 untuk masyarakat umum!<br /><br />Vaksinasi Covid-19 dilakukan pada hari Senin-Jumat, 24 sampai 28 Januari 2022 di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 10.00 sampai 13.00.<br /><br />Kami menyediakan Vaksin jenis Sinovac untuk dosis 1, 2, dan 3 (booster) serta jenis Pfizer untuk dosis 2 dan 3 (booster).<br />Syarat vaksin booster: usia &ge;18 tahun, 6 bulan rentang waktu dari dosis ke-2, dan sudah memiliki e-ticket pada aplikasi Peduli Lindungi.<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, serta membawa alat tulis pribadi (ballpaint).<br /><br />Yuk, Sahabat Cimacan kita vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah.<br />Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220123162815_vaksinasi_januari_4.jpg', '2022-01-24', '2022-01-28', '10:00:00', '13:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-23 16:28:15', '2022-01-23 16:28:15'),
(23, 'Vaksinasi Februari Minggu 1', '', 'RSUD Cimacan saat ini sudah membuka pelayanan Booster Vaksinasi COVID-19 untuk masyarakat umum!<br /><br />Vaksinasi Covid-19 dilakukan pada hari Senin, Rabu-Jumat, 31 Januari dan 2-4 Februari 2022 di Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK) dari pukul 10.00 sampai 13.00.<br /><br />Kami menyediakan Vaksin jenis Sinovac untuk dosis 1 dan 2 serta jenis Pfizer, Moderna, dan Astrazeneca untuk dosis 2 dan 3 (booster).<br /><br />Ada beberapa syarat untuk vaksin booster nih Sahabat Cimacan, yaitu:<br />- Usia &ge;18 tahun<br />- 6 bulan rentang waktu dari dosis ke-2<br />- Memiliki e-ticket vaksin booster pada aplikasi Peduli Lindungi<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, serta membawa alat tulis pribadi (ballpaint).<br /><br />Yuk, Sahabat Cimacan kita vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah.<br />Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220130112229_vaksin-februari-minggu-1.jpg', '2022-01-31', '2022-02-04', '10:00:00', '13:00:00', 'Aula Vaksin, Gedung Lama RSUD Cimacan (Sebelah PONEK)', 'publish', '2022-01-30 11:22:29', '2022-01-30 11:22:29'),
(24, 'Vaksin Sinovac RSUD Cimacan', '', 'RSUD Cimacan kini kembali menghadirkan Vaksinasi Covid-19 melalui Poli khusus Vaksin Covid yang akan buka pada:<br /><br />- Hari:<br />Senin, Rabu, &amp; Sabtu<br />- Tempat:<br />Ruang Tunggu Poli Jiwa (Senin &amp; Rabu)<br />Poli MCU (Sabtu)<br />- Waktu:<br />09.00 hingga 12.00 WIB<br />- Jenis Vaksin:<br />Sinovac (usia 6 hingga 11 tahun, dosis 2 &amp; 3)<br /><br />Ada beberapa syarat untuk vaksin booster nih Sahabat Cimacan, yaitu:<br />- Usia &ge;18 tahun<br />- 6 bulan rentang waktu dari dosis ke-2<br />- Memiliki e-ticket vaksin booster pada aplikasi Peduli Lindungi<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, serta membawa alat tulis pribadi (ballpaint).<br /><br />Yuk, Sahabat Cimacan kita vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah.<br />Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220511062322_Vaksin-covid-Sinovac-Ruang-Baru-April.jpg', '2022-04-01', '2022-05-31', '09:00:00', '12:00:00', 'Sesuai deskripsi event', 'publish', '2022-05-11 06:23:22', '2022-05-11 06:23:22'),
(25, 'Vaksin Pfizer RSUD Cimacan', '', 'RSUD Cimacan kini kembali menghadirkan Vaksinasi Covid-19 melalui Poli khusus Vaksin Covid yang akan buka pada:<br /><br />- Hari:<br />Senin, Rabu, &amp; Sabtu<br />- Tempat:<br />Ruang Tunggu Poli Jiwa (Senin &amp; Rabu)<br />Poli MCU (Sabtu)<br />- Waktu:<br />09.00 hingga 12.00 WIB<br />- Jenis Vaksin:<br />Pfizer (usia &ge;12 tahun, dosis 1,2,3)<br /><br />Ada beberapa syarat untuk vaksin booster nih Sahabat Cimacan, yaitu:<br />- Usia &ge;18 tahun<br />- 6 bulan rentang waktu dari dosis ke-2<br />- Memiliki e-ticket vaksin booster pada aplikasi Peduli Lindungi<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, serta membawa alat tulis pribadi (ballpaint).<br /><br />Yuk, Sahabat Cimacan kita vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa. Vaksinasinya gratis.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah.<br />Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220511062450_Vaksin-covid-Pfizer-Ruang-Baru-April.jpg', '2022-04-01', '2022-05-31', '09:00:00', '12:00:00', 'Sesuai deskripsi event', 'publish', '2022-05-11 06:24:50', '2022-05-11 06:24:50'),
(26, 'Update Vaksinasi Bulan Juni', '', 'Mincan mau menginfokan kembali nih terkait vaksinasi covid-19 di RSUD Cimacan!<br /><br />RSUD Cimacan menghadirkan Layanan Vaksinasi Covid-19 melalui Poli khusus Vaksin Covid yang akan buka pada:<br /><br />Hari:<br />Senin, Rabu, &amp; Sabtu<br /><br />Tempat:<br />Ruang Tunggu Poli Jiwa (Senin &amp; Rabu)<br />Poli MCU (Sabtu)<br /><br />Waktu:<br />09.00 hingga 12.00 WIB<br /><br />Jenis Vaksin:<br />Pfizer (usia &ge;12 tahun, dosis 1,2,3)<br /><br />Ada beberapa syarat untuk vaksin booster nih Sahabat Cimacan, yaitu:<br />- Usia &ge;18 tahun<br />- 6 bulan rentang waktu dari dosis ke-2<br />- Memiliki e-ticket vaksin booster pada aplikasi Peduli Lindungi<br /><br />Setiap peserta vaksin diharapkan untuk membawa KTP atau Kartu Keluarga untuk peserta vaksinasi Anak, serta membawa alat tulis pribadi (ballpaint).<br /><br />Yuk, Sahabat Cimacan kita vaksin!<br />Jangan sampai ketinggalan daftar vaksin kali ini yaa.<br /><br />Pendaftaran dapat dilakukan secara online melalui aplikasi Tartimah.<br />Download dan install aplikasi Tartimah dari Google Play Store Sahabat Cimacan semua!', 'JR6IHimr5n12dajWtZfsuBLX', '', 'event/20220617105743_vaksin-update-bulan-juni.jpg', '2022-06-01', '2022-06-30', '09:00:00', '12:00:00', 'Sesuai deskripsi event', 'publish', '2022-06-17 10:57:43', '2022-06-17 10:57:43');

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
-- Table structure for table `t_role`
--

CREATE TABLE `t_role` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_role`
--

INSERT INTO `t_role` (`id`, `name`, `create_date`, `update_date`) VALUES
(1, 'Super Admin', '2022-01-14 04:55:43', '2022-01-14 10:55:52');

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
('bpR32n5f6lMLF4uoeZzUKwda', 'about_company/20220106181753_dr-juliana.jpeg', '<div style=\"text-align: justify;\">Puji syukur kami panjatkan kepada Allah SWT. atas segala anugerah yang telah diberikan sehingga pelayanan kesehatan kepada masyarakat masih dapat dihadirkan di Rumah Sakit Umum Daerah Cimacan (RSUD Cimacan).<br />&nbsp;</div>\r\n<div style=\"text-align: justify;\">Sebagaimana yang dicantumkan dalam UU No. 44 Tahun 2009 pasal 4 bahwa Rumah Sakit mempunyai tugas memberikan pelayanan kesehatan perorangan secara paripurna, maka RSUD Cimacan selalu bersiap untuk mengemban amanah tersebut. Termasuk hal penting lainnya adalah mampu memberikan perlindungan terhadap keselamatan pasien, masyarakat, lingkungan rumah sakit dan sumberdaya manusia di rumah sakit, merupakan perhatian utama kami dalam upaya mewujudkannya.<br /><br /></div>\r\n<div style=\"text-align: justify;\">RSUD Cimacan senantiasa berusaha untuk meningkatkan mutu dan mempertahankan standar pelayanan rumah sakit agar dapat memberikan sumbangsih terbaik bagi pembangunan sektor kesehatan khususnya di wilayah Kabupaten Cianjur. Menjadi etalase pelayanan kesehatan yang prima adalah salah satu tujuan kami. Dengan turut mengikuti perkembangan ilmu pengetahuan dan teknologi kesehatan terkini juga menjadi bagian yang tak kami kesampingkan. Seiring dengan itu kami coba sajikan inovasi-inovasi layanan yang berorientasi kepada kepuasan masyarakat.&nbsp;<br /><br /></div>\r\n<div style=\"text-align: justify;\">Tentunya kerjasama dari segenap elemen masyarakat termasuk kemitraan dengan fasilitas kesehatan lainnya menjadi pendukung yang tak terpisahkan dalam menggapai setiap keberhasilan yang ada. RSUD Cimacan akan senantiasa bersinergi demi mewujudkan pelayanan kesehatan yang paripurna. Oleh karena itu kami hadir dan siap untuk melayani dengan hati dan cinta.</div>', 'about_home', 'id', '2022-01-06 11:05:00', '2022-01-06 11:05:00'),
('Byp4oOr6vASIx3Zm0gP25FdX', NULL, 'Layanan radiologi merupakan unit penunjang yang ada di RSD Cimacan yang dapat memberikan pelayana pemeriksaan secara profesional dengan hasil berupa gambar yang bertujuan membantu dokter dalam menegakkan diagnosa pasien yang ditangani.', 'radiology', 'id', '2021-12-14 11:40:54', '2021-12-14 11:40:54'),
('cnqdlsOJheLAKR3f7mIt2pFT', 'mcu/20211203075900_testing.png', '<ul>\r\n<li><strong>Testing - edited</strong></li>\r\n<li><strong>edited 1</strong></li>\r\n</ul>', 'mcu', 'id', '2021-12-03 13:40:28', '2021-12-03 13:40:28'),
('ltosIJ0x914B7puiDRKyjEXc', NULL, '<span style=\"font-size: 14pt;\"><strong>ODASOR (Obat Datang Sorangan)<br /><br /><img src=\"https://www.rsudcimacan.com/assets/uploads/image/odasor.jpg\" alt=\"\" width=\"291\" height=\"291\" /></strong></span><br /><br />Pelayanan Odasor merupakan pelayanan pengantaran obat oleh farmasi untuk pasien lansia dengan penyakit kronis yang menggunakan JKN. Pelayanan Odasor dilakukan untuk pasien yang jaraknya &lt; 4 km dari Rumah Sakit. Pelayanan Odasor tidak hanya melakukan pengantaran obat tetapi pelayanan pengantaran obat yang disertai dengan penjelasan informasi dan edukasi mengenai obat.<br /><br />Tata cara melaksanakan Kegiatan Pelayanan Odasor yaitu sebagai berikut :\r\n<ol>\r\n<li style=\"text-align: left;\">Pasien yang telah diperiksa oleh dokter menyerahkan berkas yang diperlukan untuk pengambilan obat di Loket ODASOR. Berkas-berkas yang diperlukan untuk pengambilan obat yaitu Resep, Surat Eligibilitas Peserta (SEP) dan fotokopi kartu peserta JKN/KIS.</li>\r\n<li style=\"text-align: left;\">Untuk obat-obat yang memerlukan syarat tambahan seperti candesartan, valsartan, telmisartan, insulin, clopidogrel, cilostazol, sildenafil, simvastatin, atorvastatin, pasien melampirkan fotokopi surat restriksi, fotokopi hasil pemeriksaan gula darah (Glukosa/HbA1c), fotokopi hasil pemeriksaan kolesterol, fotokopi hasil EKG atau fotokopi hasil ECHO beserta kesimpulannya.</li>\r\n<li style=\"text-align: left;\">Petugas farmasi memeriksa kelengkapan berkas yang diserahkan oleh pasien.</li>\r\n<li style=\"text-align: left;\">Apabila berkas lengkap, petugas farmasi meminta pasien untuk mengisi form ODASOR yang berisi nama pasien, nomor rekam medik pasien, alamat pasien saat ini, nomor telepon yang bisa dihubungi, dan kesediaan pasien/keluarga pasien dalam program pengantaran obat (ODASOR).</li>\r\n<li style=\"text-align: left;\">Untuk pasien yang berkasnya masih kurang diharuskan mengisi surat pernyataan bahwa berkas akan diserahkan pada saat pengantaran obat.</li>\r\n<li style=\"text-align: left;\">Petugas farmasi mengecek apakah rumah pasien ada dalam radius &lt; 4 KM dari Rumah Sakit Cimacan.</li>\r\n<li style=\"text-align: left;\">Pasien yang rumahnya dalam radius &lt; 4 KM dari RS Cimacan dipersilahkan pulang dan menunggu obat diantarkan. Pasien yang rumahnya dalam radius &gt; 4KM dari RS Cimacan tetap menunggu obat disiapkan.</li>\r\n<li style=\"text-align: left;\">Petugas farmasi menyiapkan obat yang akan diantarkan.</li>\r\n<li style=\"text-align: left;\">Setelah semua resep yang akan diantarkan selesai, petugas pengantaran mengantarkan obat ke rumah pasien dengan disertai informasi obat yang lengkap.</li>\r\n<li style=\"text-align: left;\">Pada saat serah terima obat pasien menandatangani kolom penerima yang ada pada res</li>\r\n</ol>', 'unggulan', 'id', '2021-12-17 09:59:20', '2021-12-17 09:59:20'),
('mhHNM8ZxO7kinqfPGsoVaXBA', NULL, 'Instalasi Rawat Inap (IRI) merupakan instalasi yang memberikan pelayanan kesehatan perorangan dan perawatan yang meliputi observasi, pemeriksaan, diagnosa, pengobatan, rehabilitas medik, pelayanan keperawatan serta konseling terkait penyakit dan tindakan atau pengobatan.<br /><br />Ruang Instalasi Rawat Inap yang berada di RSD Cimacan terdiri atas:<br />\r\n<ul>\r\n<li>Ruang Anggrek</li>\r\n<li>Ruang Flamboyan</li>\r\n<li>Ruang Mawar</li>\r\n<li>Ruang Tulip</li>\r\n<li>Ruang Aster</li>\r\n<li>Ruang Isolasi</li>\r\n<li>Ruang Alamanda</li>\r\n<li>Ruang VK Kebidanan</li>\r\n<li>Ruang Perinatologi</li>\r\n<li>Ruang Operasi</li>\r\n</ul>', 'iri', 'id', '2021-12-08 10:02:05', '2021-12-08 10:02:05'),
('OveuK84ngZ7pzAhVFJ5bwkYl', NULL, 'Laboratorium merupakan unit diagnostik dengan pelayanan selama 24 jam yang didukung oleh tenaga profesional berupa dokter dan paramedis yang memiliki pengalama yang mumpuni di bidangnya. Hasil laporan dari laboratorium dapat diperoleh dengan cepat dan tepat, sehingga dapat memudahkan pasien dalam menjalankan pemeriksaan.', 'lab', 'id', '2021-12-11 08:18:02', '2021-12-11 08:18:02'),
('sgqXj5iKQIN9VnhAak2SmfGH', 'about_company/20211215051630_rsud_gedung.jpg', '<p>Rumah Sakit Umum Daerah Cimacan memiliki posisi yang strategis terletak di sebelah utara kabupaten Cianjur yang merupakan daerah wisata alam dan villa yang cukup terkenal antara jalur Bandung - Jakarta, selain melayani masyarakat yang ada di sekitar Rumah Sakit Umum Daerah Cimacan yaitu Kecamatan yang berada di wilayah utara Cianjur, juga sering menangani pasien dari luar wilayah Cianjur yaitu para wisatawan yang berkunjung ke daerah wisata yang berada di Puncak dan Bogor.&nbsp;</p>', 'about_home', 'id', '2021-12-15 10:00:29', '2021-12-15 10:00:29'),
('vem2cMOWXYxN06lw9skRAVS5', NULL, 'Rumah Sakit Umum Daerah Cimacan pada awalnya adalah Puskesmas Pacet (Cimacan) yang sudah berdiri sejak tahun 1953, kemudian pada tahun 1981 statusnya meningkat menjadi Puskesmas DTP dan berubah status menjadi Rumah Sakit dengan ditetapkannya Surat Keputusan Bupati Cianjur atas nama Pemerintah Daerah Kabupaten Cianjur Nomor 19 Tahun 2007 tentang pembentukkan Rumah Sakit Umum Daerah Cimacan&nbsp;dan Peraturan Daerah Kabupaten&nbsp;Cianjur&nbsp;Nomor 08 Tahun 2016&nbsp;tentang&nbsp;Pembentukan&nbsp;dan Susunan&nbsp;Perangkat Daerah Kabupaten&nbsp;Cianjur (Lembaran Daerah Tahun 2016 Nomor 8)<br /><br />Dengan keputusan Menteri Kesehatan Indonesia Nomor 267/SK/Menkes/III/2007 tanggal 05 Maret 2007 tentang Penetapan Status Rumah Sakit Umum Daerah Cimacan milik&nbsp;Pemerintah Daerah Kabupaten&nbsp;Cianjur&nbsp;dengan&nbsp;tipe D yang kemudian&nbsp;berubah&nbsp;tipe&nbsp;menjadi&nbsp;tipe C dengan Surat Keputusan Kepala Badan Pelayanan&nbsp;Perizinan&nbsp;Terpadu dan Penanaman Modal Kabupaten&nbsp;Cianjur&nbsp;Nomor : 503/6788/RSU-Operasional/BPPTPM/2015 tentang&nbsp;Penetapan&nbsp;Klasifikasi dan Izin&nbsp;Operasional&nbsp;Rumah&nbsp;Sakit&nbsp;Umum Daerah Cimacan&nbsp;Kabupaten&nbsp;Cianjur.<br /><br />Posisi Rumah Sakit Umum Daerah Cimacan yang strategis terletak di sebelah utara kabupaten Cianjur yang merupakan daerah wisata alam dan villa yang cukup terkenal antara jalur Bandung - Jakarta, selain melayani masyarakat yang ada di sekitar Rumah Sakit Umum Daerah Cimacan yaitu Kecamatan yang berada di wilayah utara Cianjur, juga sering menangani pasien dari luar wilayah Cianjur yaitu para wisatawan yang berkunjung ke daerah wisata yang berada di Puncak dan Bogor.<br /><br />\r\n<h2 style=\"text-align: center;\"><strong>VISI</strong></h2>\r\n<div style=\"text-align: left;\">Menjadi Rumah Sakit Dengan Pelayanan Kesehatan Yang Profesional, Bermutu dan Terjangkau Berstandar Internasional</div>\r\n<br />\r\n<h2 style=\"text-align: center;\"><strong>MISI</strong></h2>\r\n<ol>\r\n<li>Menyelenggarakan Pelayanan Kesehatan Bermutu Dengan Mengutamakan Keselamatan Pasien dan Kepuasan Pelanggan.<br /><br /></li>\r\n<li>Mengembangkan Pelayanan Kesehatan Dengan Berorientasi Pada Pembangunan &nbsp;Sumber Daya Manusia, Perkembangan Teknologi dan Kebutuhan Masyarakat.<br /><br /></li>\r\n<li>Menjadi Pusat Rujukan Pelayanan Pasien.<br /><br /></li>\r\n<li>Menyelenggarakan Manajemen Rumah Sakit Yang Behasil Guna, Bermutu dan Berbasis Kinerja.</li>\r\n</ol>\r\n<br />\r\n<h2 style=\"text-align: center;\"><strong>MOTO</strong></h2>\r\n<p style=\"text-align: center;\">Melayani Dengan Hati dan Cinta</p>', 'about_company', 'id', '2021-12-14 13:54:26', '2021-12-14 13:54:26'),
('X3DWaCsO4tLmzhpJnBH7o0Gb', NULL, 'Instalasi Gawat Darurat (IGD) merupakan layanan yang disediakan oleh Rumah Sakit untuk membantu kebutuhan pasien yang dialami dalam keadaan gawat darurat dan harus segera ditangani. Sistem pelayanan pada IGD, menggunakan sistem dimana pelayanan diutaman pada pasien yang berada dalam keadaan darurat dan bukan berdasarkan antrian.<br /><br />Tujuan dari IGD yaitu dapat tercapainya pelayanan kesehatan yang optimal pada pasien secara cepat dan tepat serta terpadu dalam penanganan tingkat kegawatdaruratan sehingga mampu mencegah resiko kecacatan dan kematian.<br /><br />Kondisi yang dapat dilayani di IGD, sebagai berikut :<br />\r\n<ul>\r\n<li>Pasien gawat darurat, tidak darurat, darurat tidak gawat dan tidak gawat.</li>\r\n<li>Pasien akibat kecelakaan yang dapat menimbulkan cedera fisik, mental gangguan saraf, gangguan pernapasan, trauma, patah tulang, infeksi, keracunan, kerusakan organ, berbagai luka dan masih banyak lagi.</li>\r\n<li>Penaganan kejadian sehari-hari, korban musibah massal dan bencana.&nbsp;</li>\r\n</ul>', 'igd', 'id', '2021-12-08 10:09:45', '2021-12-08 10:09:45'),
('XkMEG1t3wHdJalW8A5xvI7fe', NULL, 'Instalasi Rawat Jalan (IRJ) adalah salah satu instalasi yang berada di RSD Cimacan yang memberikan pelayanan rawat jalan kepada pasien sesuai dengan kebutuhannya. Pelayanan yang ada meliputi pemeriksaan, pengobatan dan tindakan medis sesuai dengan kondisi dan penyakit pasien.<br /><br />Setiap pelayanan mengikuti standar prosedur yang mengacu pada pedoman dan panduan yang sudah disahkan, sebagai usaha Rumah Sakit dalam memperthakan mutu, keselamatan dan kenyamanan pasien.<br /><br />Pelayanan yang berada di RSD Cimacan meliputi :<br />\r\n<ul>\r\n<li>Klinik Anak</li>\r\n<li>Klinik Obgyn dan Kebidanan</li>\r\n<li>Klinik Gigi</li>\r\n<li>Klinik DOTS</li>\r\n<li>Klinik Penyakit Dalam</li>\r\n<li>Klinik Bedah</li>\r\n<li>Klinik Jiwa</li>\r\n<li>Klinik VCT</li>\r\n<li>Klinik Saraf</li>\r\n<li>Klinik Rehabilitasi Medik Jantung dan Pembuluh Darah</li>\r\n</ul>\r\n<strong>Jam Pelayanan :</strong><br />Senin - Minggu 09:00 AM - 02:00 PM', 'irj', 'id', '2021-12-08 09:26:12', '2021-12-08 09:26:12');

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
('elwOosCnAgqb7jdDBSIP4uRt', 'slider/20220618094044_Picsart_22-06-10_11-02-56-821-(1).jpg', '', '', 1, '2022-06-18 09:40:44', '2022-06-18 09:40:44'),
('iWAQn6Um9GfvlRXIuMJNK13E', 'slider/20220623112647_gedung-b-rsud-cimacan.jpeg', '', '', 3, '2022-06-23 11:23:36', '2022-06-23 11:23:36'),
('trScG3us4fz1bDMjZ0JNB2yl', 'slider/20220623112717_ambulance-rsud-cimacan-1.jpeg', '', '', 2, '2022-06-23 11:27:17', '2022-06-23 11:27:17'),
('X2bx7nuWi5gcdaKIZzwjoAO8', 'slider/20220623112047_banner-rsudcimacan-ruangan-1.jpeg', '', '', 4, '2022-06-23 11:20:47', '2022-06-23 11:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `t_sub_service`
--

CREATE TABLE `t_sub_service` (
  `id` varchar(255) NOT NULL,
  `service_id` varchar(255) NOT NULL,
  `type` varchar(62) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_sub_service`
--

INSERT INTO `t_sub_service` (`id`, `service_id`, `type`, `title`, `description`, `create_date`, `update_date`) VALUES
('3yUvud2sI8zaERnAeWiK5qfx', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', '8. Tarif Faeces', '<h2 style=\"text-align: center;\"><strong>TARIF JENIS PEMERIKSAAN FAECES</strong></h2>\r\n<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 14.5192%; text-align: center;\">No</td>\r\n<td style=\"width: 52.1475%; text-align: center;\">Jenis Pemeriksaan</td>\r\n<td style=\"width: 33.3333%; text-align: center;\">Tarif</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 14.5192%; text-align: center;\">1</td>\r\n<td style=\"width: 52.1475%;\">Faeces Rutin</td>\r\n<td style=\"width: 33.3333%;\">Rp. 30.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-06-24 09:08:24', '2022-06-24 09:08:24'),
('Bth8arxkOgeYERlzyI2Qinwj', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', '3. Tarif Urinalisa', '<h2 style=\"text-align: center;\"><strong>TARIF JENIS PEMERIKSAAN URINALISA</strong></h2>\r\n<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 9.68421%; text-align: center;\">No</td>\r\n<td style=\"width: 68.8514%; text-align: center;\">Jenis Pemeriksaan</td>\r\n<td style=\"width: 21.6749%; text-align: center;\">Tarif</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 9.68421%; text-align: center;\">1</td>\r\n<td style=\"width: 68.8514%;\">Urinalisis Lengkap</td>\r\n<td style=\"width: 21.6749%;\">Rp. 33.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 9.68421%; text-align: center;\">2</td>\r\n<td style=\"width: 68.8514%;\">Uranalisis 3 Paramater</td>\r\n<td style=\"width: 21.6749%;\">Rp. 20.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 9.68421%; text-align: center;\">3</td>\r\n<td style=\"width: 68.8514%;\">Narkoba (5 Jenis)</td>\r\n<td style=\"width: 21.6749%;\">Rp. 175.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 9.68421%; text-align: center;\">4</td>\r\n<td style=\"width: 68.8514%;\">PP Test</td>\r\n<td style=\"width: 21.6749%;\">Rp. 20.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-06-23 16:10:32', '2022-06-23 16:10:32'),
('EHrgn21Lcf4k0CFvU6RiqAbO', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', 'Pemeriksaan yang memerlukan puasa', '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 6.05023%; text-align: center;\">No</td>\r\n<td style=\"width: 65.4055%; text-align: center;\">Jenis Pemeriksaan</td>\r\n<td style=\"width: 28.5443%; text-align: center;\">Lama Puasa</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05023%; text-align: center;\">1</td>\r\n<td style=\"width: 65.4055%;\">Glukosa Puasa</td>\r\n<td style=\"width: 28.5443%;\">10 - 12 Jam</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05023%; text-align: center;\">2</td>\r\n<td style=\"width: 65.4055%;\">LED</td>\r\n<td style=\"width: 28.5443%;\">10 - 12 Jam</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05023%; text-align: center;\">3</td>\r\n<td style=\"width: 65.4055%;\">Ureum</td>\r\n<td style=\"width: 28.5443%;\">10 - 12 Jam</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05023%; text-align: center;\">4</td>\r\n<td style=\"width: 65.4055%;\">Profil Lipid</td>\r\n<td style=\"width: 28.5443%;\">10 - 12 Jam</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05023%; text-align: center;\">5</td>\r\n<td style=\"width: 65.4055%;\">Asam Urat</td>\r\n<td style=\"width: 28.5443%;\">10 - 12 Jam</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-06-24 09:41:58', '2022-06-24 09:41:58'),
('ilGmLoas1Mz4nHPc80yxTbkh', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', '4. Tarif Imunoserologi', '<h2 style=\"text-align: center;\"><strong>TARIF JENIS PEMERIKSAAN IMUNOSEROLOGI</strong></h2>\r\n<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 6.84932%; text-align: center;\">No</td>\r\n<td style=\"width: 69.3955%; text-align: center;\">Jenis Pemeriksaan</td>\r\n<td style=\"width: 23.7552%; text-align: center;\">Tarif</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.84932%; text-align: center;\">1</td>\r\n<td style=\"width: 69.3955%;\">Widal Test</td>\r\n<td style=\"width: 23.7552%;\">Rp. 45.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.84932%; text-align: center;\">2</td>\r\n<td style=\"width: 69.3955%;\">HBsag (Rapid Test)</td>\r\n<td style=\"width: 23.7552%;\">Rp. 50.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.84932%; text-align: center;\">3</td>\r\n<td style=\"width: 69.3955%;\">Anti HCV (Rapid Test)</td>\r\n<td style=\"width: 23.7552%;\">Rp. 55.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.84932%; text-align: center;\">4</td>\r\n<td style=\"width: 69.3955%;\">Anti HIV (Rapid Test)</td>\r\n<td style=\"width: 23.7552%;\">Rp. 175.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.84932%; text-align: center;\">5</td>\r\n<td style=\"width: 69.3955%;\">Dengue IgG/IgM</td>\r\n<td style=\"width: 23.7552%;\">Rp. 200.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.84932%; text-align: center;\">6</td>\r\n<td style=\"width: 69.3955%;\">NS-1 Antigen Dengue</td>\r\n<td style=\"width: 23.7552%;\">Rp. 175.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.84932%; text-align: center;\">7</td>\r\n<td style=\"width: 69.3955%;\">Tubex-TF</td>\r\n<td style=\"width: 23.7552%;\">Rp. 242.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.84932%; text-align: center;\">8</td>\r\n<td style=\"width: 69.3955%;\">CRP Kuantitatif</td>\r\n<td style=\"width: 23.7552%;\">Rp. 207.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.84932%; text-align: center;\">9</td>\r\n<td style=\"width: 69.3955%;\">Hs-CRP</td>\r\n<td style=\"width: 23.7552%;\">Rp. 263.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-06-24 08:45:23', '2022-06-24 08:45:23'),
('joRvD1mbXlMOtkUGE64QpC5x', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', '9. Tarif Transudat/Eksudat', '<h2 style=\"text-align: center;\"><strong>TARIF JENIS PEMERIKSAAN TRANSUDAT/EKSUDAT</strong></h2>\r\n<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%; height: 179.187px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.47586%; text-align: center; height: 22.3984px;\">No</td>\r\n<td style=\"width: 58.1908%; text-align: center; height: 22.3984px;\">Jenis Pemeriksaan</td>\r\n<td style=\"width: 33.3333%; text-align: center; height: 22.3984px;\">Tarif</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.47586%; text-align: center; height: 22.3984px;\">1</td>\r\n<td style=\"width: 58.1908%; height: 22.3984px;\">Jumlah Sel</td>\r\n<td style=\"width: 33.3333%; height: 22.3984px;\">Rp. 40.000</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.47586%; text-align: center; height: 22.3984px;\">2</td>\r\n<td style=\"width: 58.1908%; height: 22.3984px;\">Rivalta</td>\r\n<td style=\"width: 33.3333%; height: 22.3984px;\">Rp. 25.000</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.47586%; text-align: center; height: 22.3984px;\">3</td>\r\n<td style=\"width: 58.1908%; height: 22.3984px;\">Hitung Jenis</td>\r\n<td style=\"width: 33.3333%; height: 22.3984px;\">Rp. 21.000</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.47586%; text-align: center; height: 22.3984px;\">4</td>\r\n<td style=\"width: 58.1908%; height: 22.3984px;\">pH</td>\r\n<td style=\"width: 33.3333%; height: 22.3984px;\">Rp. 20.000</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.47586%; text-align: center; height: 22.3984px;\">5</td>\r\n<td style=\"width: 58.1908%; height: 22.3984px;\">Glukosa</td>\r\n<td style=\"width: 33.3333%; height: 22.3984px;\">Rp. 19.000</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.47586%; text-align: center; height: 22.3984px;\">6</td>\r\n<td style=\"width: 58.1908%; height: 22.3984px;\">Protein</td>\r\n<td style=\"width: 33.3333%; height: 22.3984px;\">Rp. 21.000</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.47586%; text-align: center; height: 22.3984px;\">7</td>\r\n<td style=\"width: 58.1908%; height: 22.3984px;\">Albumin</td>\r\n<td style=\"width: 33.3333%; height: 22.3984px;\">Rp. 21.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-06-24 09:12:01', '2022-06-24 09:12:01'),
('NxkUbGgszunY1lHrZC85qid3', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', 'Waktu Tunggu Hasil Laboratorium', '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">No</td>\r\n<td style=\"width: 73.208%;\">Jenis Pemeriksaan</td>\r\n<td style=\"width: 18.9922%;\">Waktu Tunggu</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">1</td>\r\n<td style=\"width: 73.208%;\">Hermatologi Rutin (Analyzer)</td>\r\n<td style=\"width: 18.9922%;\">30 Menit</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">2</td>\r\n<td style=\"width: 73.208%;\">LED</td>\r\n<td style=\"width: 18.9922%;\">3 Jam</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">3</td>\r\n<td style=\"width: 73.208%;\">Kimia darah <span style=\"text-decoration: underline;\">tanpa </span>glukosa 2jpp</td>\r\n<td style=\"width: 18.9922%;\">140 Menit</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">4</td>\r\n<td style=\"width: 73.208%;\">Kimia darah <span style=\"text-decoration: underline;\">dengan</span> glukosa 2jpp</td>\r\n<td style=\"width: 18.9922%;\">200 Menit</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">5</td>\r\n<td style=\"width: 73.208%;\">Imunoserologi</td>\r\n<td style=\"width: 18.9922%;\">140 Menit</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">6</td>\r\n<td style=\"width: 73.208%;\">Hemostasis</td>\r\n<td style=\"width: 18.9922%;\">3 Jam</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">7</td>\r\n<td style=\"width: 73.208%;\">Uranalisis</td>\r\n<td style=\"width: 18.9922%;\">3 Jam</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">8</td>\r\n<td style=\"width: 73.208%;\">Faeces</td>\r\n<td style=\"width: 18.9922%;\">3 Jam</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">9</td>\r\n<td style=\"width: 73.208%;\">PCR SARS-COV-2</td>\r\n<td style=\"width: 18.9922%;\">8 - 10 Jam</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">10</td>\r\n<td style=\"width: 73.208%;\">Antigen SARS-COV-2</td>\r\n<td style=\"width: 18.9922%;\">30 Menit</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.68335%;\">11</td>\r\n<td style=\"width: 73.208%;\">Mikrobiologi</td>\r\n<td style=\"width: 18.9922%;\">3 Jam</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<strong>*Catatan : Waktu tunggu terhitung saat pengambilan sample</strong>', '2022-06-24 09:48:52', '2022-06-24 09:48:52'),
('PuqwW8LeSkTIrCiQozEB6jg3', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', '5. Tarif Hemastasis', '<h2 style=\"text-align: center;\"><strong>TARIF JENIS PEMERIKSAAN HEMASTASIS</strong></h2>\r\n<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%; height: 89.5936px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.10502%; text-align: center; height: 22.3984px;\">No</td>\r\n<td style=\"width: 61.0737%; text-align: center; height: 22.3984px;\">Jenis Pemeriksaan</td>\r\n<td style=\"width: 30.8213%; text-align: center; height: 22.3984px;\">Tarif</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.10502%; text-align: center; height: 22.3984px;\">1</td>\r\n<td style=\"width: 61.0737%; height: 22.3984px;\">PT</td>\r\n<td style=\"width: 30.8213%; height: 22.3984px;\">Rp. 300.000</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.10502%; text-align: center; height: 22.3984px;\">2</td>\r\n<td style=\"width: 61.0737%; height: 22.3984px;\">APTT</td>\r\n<td style=\"width: 30.8213%; height: 22.3984px;\">Rp. 205.000</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.10502%; text-align: center; height: 22.3984px;\">3</td>\r\n<td style=\"width: 61.0737%; height: 22.3984px;\">D-dimer</td>\r\n<td style=\"width: 30.8213%; height: 22.3984px;\">Rp. 330.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-06-24 08:51:44', '2022-06-24 08:51:44'),
('qbegwyDIiG2cOU7xNBKaCl3F', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', '2. Tarif Kimia Darah', '<h2 style=\"text-align: center;\"><strong>TARIF JENIS PEMERIKSAAN KIMIA DARAH</strong></h2>\r\n<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">No</td>\r\n<td style=\"width: 64.3724%; text-align: center;\">Jenis Pemeriksaaan</td>\r\n<td style=\"width: 29.574%; text-align: center;\">Tarif</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">1</td>\r\n<td style=\"width: 64.3724%;\">Gluskosa Darah Puasa</td>\r\n<td style=\"width: 29.574%;\">Rp. 23. 000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">2</td>\r\n<td style=\"width: 64.3724%;\">Glukosa Darah Sewaktu</td>\r\n<td style=\"width: 29.574%;\">Rp. 23.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">3</td>\r\n<td style=\"width: 64.3724%;\">Glukosa Darah 2 Jam PP</td>\r\n<td style=\"width: 29.574%;\">Rp. 23.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">4</td>\r\n<td style=\"width: 64.3724%;\">Glukosa Stik (Untuk CITO)</td>\r\n<td style=\"width: 29.574%;\">Rp. 26.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">5</td>\r\n<td style=\"width: 64.3724%;\">Protein Total</td>\r\n<td style=\"width: 29.574%;\">Rp. 25.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">6</td>\r\n<td style=\"width: 64.3724%;\">Albumin/Globulin</td>\r\n<td style=\"width: 29.574%;\">Rp. 25.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">7</td>\r\n<td style=\"width: 64.3724%;\">Bilirubin Total</td>\r\n<td style=\"width: 29.574%;\">Rp. 25.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">8</td>\r\n<td style=\"width: 64.3724%;\">Bilirubin Direk</td>\r\n<td style=\"width: 29.574%;\">Rp. 25.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">9</td>\r\n<td style=\"width: 64.3724%;\">SGOT</td>\r\n<td style=\"width: 29.574%;\">Rp. 27.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">10</td>\r\n<td style=\"width: 64.3724%;\">SGPT</td>\r\n<td style=\"width: 29.574%;\">Rp. 27.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">11</td>\r\n<td style=\"width: 64.3724%;\">Ureum</td>\r\n<td style=\"width: 29.574%;\">Rp. 27.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">12</td>\r\n<td style=\"width: 64.3724%;\">Creatin</td>\r\n<td style=\"width: 29.574%;\">Rp. 27.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">13</td>\r\n<td style=\"width: 64.3724%;\">Cholestrol Total</td>\r\n<td style=\"width: 29.574%;\">Rp. 30.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">14</td>\r\n<td style=\"width: 64.3724%;\">Cholestrol HDL</td>\r\n<td style=\"width: 29.574%;\">Rp. 50.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">15</td>\r\n<td style=\"width: 64.3724%;\">Cholestrol LDL</td>\r\n<td style=\"width: 29.574%;\">Rp. 15.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">16</td>\r\n<td style=\"width: 64.3724%;\">Trigliserida</td>\r\n<td style=\"width: 29.574%;\">Rp. 37.500</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">17</td>\r\n<td style=\"width: 64.3724%;\">Asam Urat</td>\r\n<td style=\"width: 29.574%;\">Rp. 30.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">18</td>\r\n<td style=\"width: 64.3724%;\">CK-MB</td>\r\n<td style=\"width: 29.574%;\">Rp. 150.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">19</td>\r\n<td style=\"width: 64.3724%;\">Paket Elektrolit (Na,K,Cl)</td>\r\n<td style=\"width: 29.574%;\">Rp. 180.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">20</td>\r\n<td style=\"width: 64.3724%;\">Paket Elektrolit (Na,K,Ca)</td>\r\n<td style=\"width: 29.574%;\">Rp. 180.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">21</td>\r\n<td style=\"width: 64.3724%;\">Laktat</td>\r\n<td style=\"width: 29.574%;\">Rp. 90.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">22</td>\r\n<td style=\"width: 64.3724%;\">HbATC</td>\r\n<td style=\"width: 29.574%;\">Rp. 161.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.05355%; text-align: center;\">23</td>\r\n<td style=\"width: 64.3724%;\">Analisi Gas Darah (AGD)</td>\r\n<td style=\"width: 29.574%;\">Rp. 352.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-06-23 16:05:03', '2022-06-23 16:05:03'),
('vRpn7kFYeQ4ixoZB6VtTwOPs', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', '7. Tarif Biomolekuler', '<h2 style=\"text-align: center;\"><strong>TARIF JENIS PEMERIKSAAN BIOMOLEKULER</strong></h2>\r\n<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%; height: 89.5937px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.78995%; text-align: center; height: 22.3984px;\">No</td>\r\n<td style=\"width: 61.1834%; text-align: center; height: 22.3984px;\">Jenis Pemeriksaan</td>\r\n<td style=\"width: 30.0266%; text-align: center; height: 22.3984px;\">Tarif</td>\r\n</tr>\r\n<tr style=\"height: 22.3984px;\">\r\n<td style=\"width: 8.78995%; text-align: center; height: 22.3984px;\">1</td>\r\n<td style=\"width: 61.1834%; height: 22.3984px;\">PCR SARS-COV-2</td>\r\n<td style=\"width: 30.0266%; height: 22.3984px;\">Rp. 275.000</td>\r\n</tr>\r\n<tr style=\"height: 44.7969px;\">\r\n<td style=\"width: 8.78995%; text-align: center; height: 44.7969px;\">2</td>\r\n<td style=\"width: 61.1834%; height: 44.7969px;\">Antigen SARS-COV-2</td>\r\n<td style=\"width: 30.0266%; height: 44.7969px;\">Rp. 99.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-06-24 09:04:23', '2022-06-24 09:04:23'),
('wtRHf59ug8GINeyxjQshTLCY', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', '6. Tarif Mikrobiologi ', '<h2 style=\"text-align: center;\">TARIF JENIS PEMERIKSAAN MIKROBIOLOGI</h2>\r\n<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 7.53425%; text-align: center;\">No</td>\r\n<td style=\"width: 62.4391%; text-align: center;\">Jenis Pemeriksaan</td>\r\n<td style=\"width: 30.0266%; text-align: center;\">Tarif</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.53425%; text-align: center;\">1</td>\r\n<td style=\"width: 62.4391%;\">Pewarnaan BTA</td>\r\n<td style=\"width: 30.0266%;\">Rp. 30.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 7.53425%; text-align: center;\">2</td>\r\n<td style=\"width: 62.4391%;\">Gene Xpert</td>\r\n<td style=\"width: 30.0266%;\">Rp. 0</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-06-24 08:55:53', '2022-06-24 08:55:53'),
('xAHpST0WEfaO7QeM8KwUltsC', 'OveuK84ngZ7pzAhVFJ5bwkYl', 'lab', '1. Tarif Hematologi', '<h2 style=\"text-align: center;\"><strong>TARIF PEMERIKSAAN HEMATOLOGI</strong></h2>\r\n<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">No</td>\r\n<td style=\"width: 60.4713%; text-align: center;\">Jenis Pemeriksaan</td>\r\n<td style=\"width: 33.3333%; text-align: center;\">Tarif</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">1</td>\r\n<td style=\"width: 60.4713%;\">Hematologi Rutin (Analyzer)</td>\r\n<td style=\"width: 33.3333%;\">Rp. 50.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">2</td>\r\n<td style=\"width: 60.4713%;\">LED</td>\r\n<td style=\"width: 33.3333%;\">Rp. 20.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">3</td>\r\n<td style=\"width: 60.4713%;\">Hemoglobin</td>\r\n<td style=\"width: 33.3333%;\">Rp. 20.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">4</td>\r\n<td style=\"width: 60.4713%;\">Leukosit</td>\r\n<td style=\"width: 33.3333%;\">Rp. 20.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">5</td>\r\n<td style=\"width: 60.4713%;\">Trombosit</td>\r\n<td style=\"width: 33.3333%;\">Rp. 25.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">6</td>\r\n<td style=\"width: 60.4713%;\">Golongan Darah + Rhesus</td>\r\n<td style=\"width: 33.3333%;\">Rp. 23. 000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">7</td>\r\n<td style=\"width: 60.4713%;\">Hitung Jenis (Diff Count)</td>\r\n<td style=\"width: 33.3333%;\">Rp. 25.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">8</td>\r\n<td style=\"width: 60.4713%;\">SADT</td>\r\n<td style=\"width: 33.3333%;\">Rp. 100.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">9</td>\r\n<td style=\"width: 60.4713%;\">Waktu Perdarahan</td>\r\n<td style=\"width: 33.3333%;\">Rp. 15.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">10</td>\r\n<td style=\"width: 60.4713%;\">Waktu Pembekuan</td>\r\n<td style=\"width: 33.3333%;\">Rp. 15.000</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 6.19536%; text-align: center;\">11</td>\r\n<td style=\"width: 60.4713%;\">Malaria</td>\r\n<td style=\"width: 33.3333%;\">Rp. 27.500</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-06-23 15:44:54', '2022-06-23 15:44:54');

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
-- Indexes for table `t_role`
--
ALTER TABLE `t_role`
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
-- Indexes for table `t_sub_service`
--
ALTER TABLE `t_sub_service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_article`
--
ALTER TABLE `t_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_career`
--
ALTER TABLE `t_career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_doctor`
--
ALTER TABLE `t_doctor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `t_event`
--
ALTER TABLE `t_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `t_role`
--
ALTER TABLE `t_role`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

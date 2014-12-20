-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2014 at 10:53 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE IF NOT EXISTS `tbadmin` (
  `id_login` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(70) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `lastlog` datetime DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `hp` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id_login`, `username`, `password`, `nama`, `lastlog`, `img`, `email`, `hp`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2014-12-20 16:21:51', 'default.jpg', 'admin@admin.admin', '0813758245881'),
(2, 'candra', '2614ae3c375c3095dc536283672548bd', 'candra saputra', '2014-12-14 23:45:19', 'candra.jpg', 'candrasaputra@live.com', '081373961140');

-- --------------------------------------------------------

--
-- Table structure for table `tbagenda`
--

CREATE TABLE IF NOT EXISTS `tbagenda` (
  `id_agenda` int(10) NOT NULL AUTO_INCREMENT,
  `judul_agenda` varchar(75) DEFAULT NULL,
  `isi_agenda` text NOT NULL,
  `tgl_agenda` date DEFAULT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbagenda`
--

INSERT INTO `tbagenda` (`id_agenda`, `judul_agenda`, `isi_agenda`, `tgl_agenda`) VALUES
(1, 'Pre – Departure Orientation (PDO)', '<p><span>salah satu kegiatan yang menjadi rangkaian persiapan sebelum keberangkatan bagi penerima beasiswa USAID &ndash; PRESTASI. Dalam acara ini, para penerima beasiswa dibekali pengetahuan antara lain tentang hal &ndash; hal yang harus dipersiapkan baik secara administratif maupun logistik, peraturan &ndash; peraturan beasiswa USAID &ndash; PRESTASI, dan berbagi pengalaman langsung dengan para alumni.</span></p>', '2014-12-17'),
(2, 'Teritorial Drama Musical di gedung panca wati bakti', 'Teritorial Drama Musical di gedung panca wati bakti', '2014-12-17'),
(3, 'Debat English Contest se-eks kresidenan besuki dan tapal kuda region', 'Debat English Contest se-eks kresidenan besuki dan tapal kuda region', '2014-12-17'),
(5, 'Teritorial Drama Musical di gedung panca wati bakti', 'Teritorial Drama Musical di gedung panca wati bakti', '2014-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbartikel`
--

CREATE TABLE IF NOT EXISTS `tbartikel` (
  `id_artikel` int(100) NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(25) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tgl_artikel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kd_kat_artikel` int(25) DEFAULT NULL,
  `status_artikel` varchar(25) DEFAULT NULL,
  `img_artikel` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id_artikel`),
  KEY `FK_tbartikel` (`kd_kat_artikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbartikel`
--

INSERT INTO `tbartikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `tgl_artikel`, `kd_kat_artikel`, `status_artikel`, `img_artikel`) VALUES
(1, 'Mutu Pendidikan', '<p>Pendidikan merupakan faktor utama dalam pembentukan pribadi manusia. Pendidikan sangat berperan dalam membentuk baik atau buruknya pribadi manusia menurut ukuran normatif. Menyadari akan hal tersebut, pemerintah sangat serius menangani bidang pendidikan, sebab dengan sistem pendidikan yang baik diharapkan muncul generasi penerus bangsa yang berkualitas dan mampu menyesuaikan diri untuk hidup bermasyarakat, berbangsa dan bernegara.</p>\r\n<p>Reformasi pendidikan merupakan respon terhadap perkembangan tuntutan global sebagai suatu upaya untuk mengadaptasikan sistem pendidikan yang mampu mengembangkan sumber daya manusia untuk memenuhi tuntutan zaman yang sedang berkembang. Melalui reformasi pendidikan, pendidikan harus berwawasan masa depan yang memberikan jaminan bagi perwujudan hak-hak azasi manusia untuk mengembangkan seluruh potensi dan prestasinya secara optimal guna kesejahteraan hidup di masa depan.</p>\r\n<p>Seiring perkembangan zaman yang sangat cepat dan modern membuat dunia pendidikan semakin penuh dengan dinamika. Di Indonesia sendiri dinamika itu tampak dari tidak henti-hentinya sejumlah masalah yang melingkupi dunia pendidikan</p>\r\n<p>Merosotnya mutu pendidikan di Indonesia secara umum dan mutu pendidikan tinggi secara sfesifik dilihat dari persfektif makro dapat disebabkan oleh buruknya sistem pendidikan nasional dan rendahnya sumber daya manusia (Hadis dan Nurhayati, 2010:2). Pendidikan pada dasarnya merupakan suatu usaha pengembangan sumber daya manusia (SDM), walaupun usaha pengembangan SDM tidak hanya dilakukan melalui pendidikan khususnya pendidikan formal ( sekolah ). Tetapi sampai detik ini, pendidikan masih dipandang sebagai sarana dan wahana utama untuk pengembangan SDM yang dilakukan dengan sistematis, programatis, dan berjenjang.</p>\r\n<p>Kemajuan pendidikan dapat dilihat dari kemampuan dan kemauan dari masyarakat untuk menangkap proses informatisasi dan kemajuan teknologi. Karena Proses informatisasi yang cepat karena kemajuan teknologi semakin membuat horizon kehidupan didunia semakin meluas dan sekaligus semakin mengerut. Hal ini berarti berbagai masalah kehidupan manusia menjadi masalah global atau setidak-tidaknya tidak dapat dilepaskan dari pengaruh kejadian dibelahan bumi yang lain, baik masalah politik, ekonomi , maupun sosial.</p>', '2014-12-17 21:25:31', 1, 'publish', '160x160.gif'),
(3, 'Filosofi Pendidikan', '<p>Pendidikan bisa saja berawal dari sebelum bayi lahir seperti dilakukan banyak orang dengan memainkan musik dan membaca kepada bayi dalam kandungan dengan harapan ia bisa mengajar bayi mereka sebelum kelahiran. Bagi sebagian orang, pengalaman kehidupan sehari-hari lebih berarti daripada pendidikan formal. Anggota keluarga mempunyai peran pengajaran yang amat mendalam, sering kali lebih mendalam dari yang disadari mereka, walaupun pengajaran anggota keluarga berjalan secara tidak resmi.</p>', '2014-12-17 21:08:58', 3, 'publish', '420x190.gif'),
(5, ' DUNIA PENDIDIDIKAN', '<p><span>Sebagai salah satu wahana pembentuk karakter bangsa, sekolah adalah lokasi penting dimana para "Nation Builders" Indonesia diharapkan dapat berjuang membawa negara bersaing di kancah global. Seiring dengan derasnya tantangan global, tantangan dunia pendidikan pun menjadi semakin besar, hal ini yang mendorong para siswa mendapatkan prestasi terbaik.</span><br /><br /><span>Namun, dunia pendidikan di Indonesia masih memiliki beberapa kendala yang berkaitan dengan mutu pendidikan diantaranya adalah keterbatasan akses pada pendidikan, jumlah guru yang belum merata, serta kualitas guru itu sendiri dinilai masih kurang. Terbatasnya akses pendidikan di Indonesia, terlebih lagi di daerah berujung kepada meningkatnya arus urbanisasi untuk mendapatkan akses ilmu yang lebih baik di perkotaan.</span><br /><br /><span>Menurut pegiat pendidikan Indonesia, Anies Baswedan keterbatasan akses pendidikan di daerah menjadi pangkal derasnya arus urbanisasi. "Yang menjadi persoalan, di Jabodetabek jumlahnya sudah proporsional, tapi jangan kita hanya bicara urban. Justru di luar urban itu kita punya masalah dan itu yang menyebabkan migrasi ke Jakarta," ujar Anies. Secara tidak langsung, masyarakat Indonesia didorong untuk melakukan urbanisasi karena keterbatasan fasilitas di daerah. Ia menilai akses pendidikan harus dibuka seluas-luasnya untuk seluruh masyarakat dengan penyediaan fasilitas yang mendukung program tersebut. "Kalau sekolah hanya di ibukota kecamatan, maka yang jauh kan jadi nggak bisa sekolah," tandasnya.</span><br /><br /><span>Selain itu, jumlah guru yang sesuai dengan kualifikasi saat ini dinilai masih belum merata di daerah. Menurut Direktur Jenderal Pendidikan Dasar (Dikdas) Kemendikbud Hamid Muhammad saat ini banyak sekolah dasar (SD) di Indonesia kekurangan tenaga guru. Jumlahnya diperkirakan mencapai 112 ribu guru.&nbsp;</span><br /><br /><span>Untuk mengatasinya, Kementerian Pendidikan dan Kebudayaan (Kemendikbud) akan bekerja sama dengan pemerintah daerah, baik tingkat provinsi maupun kabupaten/kota, dalam hal distribusi guru di daerah-daerah supaya lebih merata. "Jika manajemen guru bisa ditangani lebih optimal, tidak parsial, maka bisa dipindahkan ke kabupaten atau daerah yang berdekatan," ungkap Hamid.</span><br /><br /><span>Kemudian, untuk meningkatkan kualitas para guru, Kemendikbud akan meningkatkan kualifikasi guru melalui beasiswa S-1 bagi guru SD dan SMP. Hamid menjelaskan, jumlah guru SD di sekolah negeri dan swasta sekitar 1.850 ribu guru. Dari jumlah tersebut, hanya 60 persen guru yang sudah memenuhi kualifikasi dengan gelar S-1, sedangkan 40 persen lainnya belum memenuhi kualifikasi. Tiap tahunnya, Kemendikbud juga menyiapkan beasiswa untuk 100 ribu calon guru guna menempuh pendidikan S-1 melalui bantuan beasiswa S-1 untuk guru SD dan SMP. Di dunia internasional, kualitas pendidikan Indonesia berada di peringkat ke-64 dari 120 negara di seluruh dunia berdasarkan laporan tahunan UNESCO Education For All Global Monitoring Report 2012. Sedangkan berdasarkan Indeks Perkembangan Pendidikan (Education Development Index, EDI), Indonesia berada pada peringkat ke-69 dari 127 negara pada 2011.</span></p>', '2014-12-17 21:12:52', 1, 'publish', 'sekolah1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbbukutamu`
--

CREATE TABLE IF NOT EXISTS `tbbukutamu` (
  `id_bt` int(10) NOT NULL AUTO_INCREMENT,
  `nm_bt` varchar(25) NOT NULL,
  `isi_bt` varchar(250) NOT NULL,
  `email_bt` varchar(25) NOT NULL,
  `web_bt` varchar(25) DEFAULT NULL,
  `tgl_bt` datetime NOT NULL,
  `stats_bt` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_bt`,`nm_bt`,`isi_bt`,`email_bt`,`tgl_bt`),
  UNIQUE KEY `id_bt` (`id_bt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbbukutamu`
--

INSERT INTO `tbbukutamu` (`id_bt`, `nm_bt`, `isi_bt`, `email_bt`, `web_bt`, `tgl_bt`, `stats_bt`) VALUES
(1, 'Tiara', 'Sekolah disini sangat menyenangkan :D', 'tiara@tiara.tiara', 'tiara.com', '2014-10-10 23:59:59', 'publish'),
(2, 'Anisa', 'Sekolahnya Bagus', 'Anisa@anisa.anisa', 'anisa.co', '2013-10-10 00:00:00', 'publish'),
(14, 'Tono', 'tono ngisi buku tamu', 'tono@tono.tono', 'tono.com', '2014-12-05 00:00:00', 'publish'),
(15, 'ds', 'as', 'blackinghat@yahoo.co.id', '', '2014-12-05 00:00:00', 'draff'),
(16, ' k', 'hk', 'blackinghat@yahoo.co.id', 'hk', '2014-12-05 00:00:00', 'draff'),
(18, 'c', 'xdew', 'blackinghat@yahoo.co.id', 'hk', '2014-12-05 00:00:00', 'draff'),
(19, 'c', 'nbn', 'blackinghat@yahoo.co.id', 'tono.com', '2014-12-05 00:00:00', 'draff'),
(22, 'Tono', 'fsdgretre', 'blackinghat@yahoo.co.id', 'tono.com', '2014-12-05 00:00:00', 'draff'),
(23, 's', 'dherh', 'blackinghat@yahoo.co.id', 'zz', '2014-12-05 00:00:00', 'draff'),
(25, 'tes', 'tes', 'tes@tes.tes', 'tes.tes', '2014-12-09 08:58:49', 'draff'),
(27, 'draff', 'sdfcdsf', 'sadsa@dsfds.dfds', '', '2014-12-10 20:31:05', 'draff'),
(28, 'caca', 'sekolah ini banyak memberi saya kenangan', 'rasi@yahoo.com', 'paijo.com', '2014-12-18 04:02:11', 'publish'),
(29, 'iqbal', 'kangen guru guru yang ngajar disini', 'iqbal@yahoo.com', 'maistar.com', '2014-12-18 04:03:02', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `tbchat`
--

CREATE TABLE IF NOT EXISTS `tbchat` (
  `id_chat` int(10) NOT NULL AUTO_INCREMENT,
  `tgl_chat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pesan_chat` varchar(255) NOT NULL DEFAULT '',
  `id_login` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_chat`),
  KEY `FK_tbchat` (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbchat`
--

INSERT INTO `tbchat` (`id_chat`, `tgl_chat`, `pesan_chat`, `id_login`) VALUES
(6, '2014-12-13 16:20:51', 'Wah chatnya keren banget :D', 2),
(7, '2014-12-13 16:49:26', 'yeye :D', 1),
(8, '2014-12-14 02:52:34', 'apa kabar?', 1),
(9, '2014-12-14 02:54:06', 'hello?', 1),
(10, '2014-12-14 02:54:32', 'hi..', 1),
(11, '2014-12-14 02:55:39', 'alhamdulilah baik sehat luarbiasa. allahuakbar!!', 2),
(12, '2014-12-14 13:36:06', 'hoho..', 1),
(13, '2014-12-15 01:21:35', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbinfo`
--

CREATE TABLE IF NOT EXISTS `tbinfo` (
  `id_info` int(20) NOT NULL AUTO_INCREMENT,
  `judul_info` varchar(25) NOT NULL,
  `isi_info` varchar(250) NOT NULL,
  `tgl_info` date NOT NULL,
  PRIMARY KEY (`id_info`,`judul_info`,`isi_info`,`tgl_info`),
  UNIQUE KEY `id_info` (`id_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbinfo`
--

INSERT INTO `tbinfo` (`id_info`, `judul_info`, `isi_info`, `tgl_info`) VALUES
(1, 'Sekolah', 'sekolah hari ini', '2011-12-02'),
(3, ' kerja bakti bersama', '<p>asdas1</p>', '2014-12-01'),
(4, 'Try Out Kls 3', '<p>asdas1</p>', '2014-12-12'),
(6, 'pembagian Lks Genap', '<p>asdas</p>', '2014-12-03'),
(8, 'Masuk setengah hari', '<p>asdas</p>', '2014-12-10'),
(9, 'Rapat Osis Inti', '<p>asdas</p>', '2014-12-03'),
(10, 'Latihan Paskibraka ', '<p>asdas</p>', '2014-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbkat_artikel`
--

CREATE TABLE IF NOT EXISTS `tbkat_artikel` (
  `kd_kat_artikel` int(25) NOT NULL AUTO_INCREMENT,
  `nm_kat_artikel` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`kd_kat_artikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbkat_artikel`
--

INSERT INTO `tbkat_artikel` (`kd_kat_artikel`, `nm_kat_artikel`) VALUES
(1, 'Inspirasi'),
(2, 'Soal'),
(3, 'apalah');

-- --------------------------------------------------------

--
-- Table structure for table `tbkelas`
--

CREATE TABLE IF NOT EXISTS `tbkelas` (
  `kd_kelas` int(20) NOT NULL AUTO_INCREMENT,
  `nm_kelas` varchar(44) DEFAULT NULL,
  PRIMARY KEY (`kd_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbkelas`
--

INSERT INTO `tbkelas` (`kd_kelas`, `nm_kelas`) VALUES
(1, 'VII-A'),
(2, 'VII-B'),
(3, 'VIII-A'),
(4, 'VIII-B'),
(5, 'IX-A'),
(6, 'IX-B');

-- --------------------------------------------------------

--
-- Table structure for table `tbprofile`
--

CREATE TABLE IF NOT EXISTS `tbprofile` (
  `id_profile` int(10) NOT NULL AUTO_INCREMENT,
  `judul_profile` varchar(40) NOT NULL,
  `isi_profile` text NOT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbprofile`
--

INSERT INTO `tbprofile` (`id_profile`, `judul_profile`, `isi_profile`) VALUES
(1, 'Visi dan Misi', '<p style="text-align: left;"><strong><span style="font-size: medium;">Visi:</span></strong></p>\r\n<p style="text-align: left;"><span>Terwujudnya siswa yang berkualitas, beriman, dan bertaqwa kepada Tuhan Yang Maha Esa, berbudi pekerti luhur, cerdas, kreatif, inovatif, kompetitif, dan mandiri.</span></p>\r\n<p style="text-align: left;">&nbsp;</p>\r\n<p style="text-align: left;"><strong><span style="font-size: medium;">Misi:</span></strong></p>\r\n<p style="text-align: left;"><span>Melaksanakan Pendidikan Dasar yang berkualitas dengan memberdayakan segenap potensi yang ada, meningkatkan profesionalisme guru serta menjalin kerjasama yang harmonis dengan orang tua, alumni dan masyarakat peduli pendidikan.</span></p>\r\n<p style="text-align: left;">&nbsp;</p>\r\n<p style="text-align: left;"><span style="font-size: medium;"><strong>Tujuan</strong></span></p>\r\n<p style="text-align: left;"><span>Meningkatkan mutu pendidikan agar menghasilkan peserta didik yang unggul dalam prestasi.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE IF NOT EXISTS `tbsiswa` (
  `nik_siswa` varchar(25) NOT NULL,
  `nm_siswa` varchar(45) DEFAULT NULL,
  `kd_kelas` int(20) NOT NULL,
  `alamat_siswa` varchar(150) DEFAULT NULL,
  `tgl_lahir_siswa` date DEFAULT NULL,
  `hp_siswa` varchar(20) DEFAULT NULL,
  `agama_siswa` varchar(10) DEFAULT NULL,
  `jk_siswa` varchar(2) DEFAULT NULL,
  `tmp_lahir_siswa` varchar(50) DEFAULT NULL,
  `tgl_masuk_siswa` date DEFAULT NULL,
  `wali_siswa` varchar(45) DEFAULT NULL,
  `status_siswa` varchar(50) DEFAULT NULL,
  `img_siswa` varchar(80) DEFAULT NULL,
  `email_siswa` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`nik_siswa`,`kd_kelas`),
  KEY `FK_tbsiswa` (`kd_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`nik_siswa`, `nm_siswa`, `kd_kelas`, `alamat_siswa`, `tgl_lahir_siswa`, `hp_siswa`, `agama_siswa`, `jk_siswa`, `tmp_lahir_siswa`, `tgl_masuk_siswa`, `wali_siswa`, `status_siswa`, `img_siswa`, `email_siswa`) VALUES
('123456', 'candra', 5, 'sriwangi ulu', '1994-12-10', '081373961140', 'islam', 'L', 'Gumawang', '2009-10-10', 'aaa', 'aktif', 'default.jpg', 'candrasaputra@live.com'),
('654321', 'ali', 5, 'disaster', '1992-05-03', '081545852485', 'hindu', 'L', 'sana sini', '2008-10-10', 'apa', 'alumni', 'default.jpg', 'ali@ali.ali'),
('98789', 'Anisa', 1, 'sana sini ok', '1993-12-09', '086756433534', 'islam', 'la', 'Rs. Jumbo', '2014-12-17', 'Lala', 'aktif', 'default.jpg', '1@1');

-- --------------------------------------------------------

--
-- Table structure for table `tbstaff`
--

CREATE TABLE IF NOT EXISTS `tbstaff` (
  `id_staff` int(10) NOT NULL AUTO_INCREMENT,
  `nm_staff` varchar(40) DEFAULT NULL,
  `nip_staff` varchar(25) DEFAULT NULL,
  `jk_staff` varchar(20) DEFAULT NULL,
  `alamat_staff` varchar(250) DEFAULT NULL,
  `telp_staff` varchar(20) DEFAULT NULL,
  `hp_staff` varchar(20) DEFAULT NULL,
  `email_staff` varchar(25) DEFAULT NULL,
  `tgl_lahir_staff` date DEFAULT NULL,
  `tmp_lahir_staff` varchar(75) DEFAULT NULL,
  `tugas_staff` varchar(75) DEFAULT NULL,
  `img_staff` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id_staff`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tbstaff`
--

INSERT INTO `tbstaff` (`id_staff`, `nm_staff`, `nip_staff`, `jk_staff`, `alamat_staff`, `telp_staff`, `hp_staff`, `email_staff`, `tgl_lahir_staff`, `tmp_lahir_staff`, `tugas_staff`, `img_staff`) VALUES
(4, 'anjar brahmantya M.Pd', '123112', 'laki-laki', '123', '123', '123', '123@123', '2014-11-11', '123', 'guru', 'images.jpg'),
(12, 'maesaroh M.Si', '1212121', 'perempuan', 'sleman', '08122346756', '08753467321123', '12121!@12', '0000-00-00', 'ss', 'guru', 'teacher1.jpg'),
(30, 'bagus gede', '12334576', 'laki-laki', '23232', '32323', '2323', '232@232', '0000-00-00', 'besuki', 'guru', '2.jpg'),
(40, 'Tri lestari S.Pd', '11456', 'laki-laki', 'depok', '02134567', '0812345672312', 'tri@yahoo.com', '0000-00-00', 'depok', 'guru', 'teacher.jpg'),
(41, 'anjelia imey S.T', '11897654', 'perempuan', 'kulonprogo', '0982354', '081223453214567', 'imey@gmail.com', '0000-00-00', 'London', 'guru', 'images (3).jpg'),
(42, 'jesika arnest M.Eng', '114563', 'perempuan', 'gunung kidul', '0237654', '093556487511', 'jesika.de@hotmail.com', '0000-00-00', 'jakarta', 'guru', 'images (5).jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbartikel`
--
ALTER TABLE `tbartikel`
  ADD CONSTRAINT `FK_tbartikel` FOREIGN KEY (`kd_kat_artikel`) REFERENCES `tbkat_artikel` (`kd_kat_artikel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbchat`
--
ALTER TABLE `tbchat`
  ADD CONSTRAINT `FK_tbchat` FOREIGN KEY (`id_login`) REFERENCES `tbadmin` (`id_login`);

--
-- Constraints for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD CONSTRAINT `FK_tbsiswa` FOREIGN KEY (`kd_kelas`) REFERENCES `tbkelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

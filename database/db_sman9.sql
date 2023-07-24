-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jul 2023 pada 13.47
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sman9`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'superadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_informasi` varchar(500) NOT NULL,
  `tgl_post` date NOT NULL,
  `isi_informasi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `id_kategori`, `judul_informasi`, `tgl_post`, `isi_informasi`, `gambar`) VALUES
(9, 3, 'Pengumuman Juara Umum', '2023-06-14', '<p>Pengambilan Raport semester genap...<br />\r\nSelamat untuk peraih Juara Umum..<br />\r\n* Juara Umum 1 &quot;Kea Aunia&quot;<br />\r\n* Juara Umum 2 &quot; Ines Prianti&quot;<br />\r\n*Juara Umum 3 &quot; Rahmah&quot;</p>\r\n', '20230625222222kampang.PNG'),
(10, 4, 'Selamat Idul Fitri 1444 H', '2023-05-07', '<p>KELUARGA BESAR SMAN 9 MERANGIN</p>\r\n\r\n<p>Mengucapkan *&quot;Selamat Idul Fitri 1444 H...<br />\r\n<br />\r\n*ØªÙŽÙ‚ÙŽØ¨Ù‘ÙŽÙ„ÙŽ Ø§Ù„Ù„Ù‘Ù‡Ù Ù…ÙÙ†Ù‘ÙŽØ§ ÙˆÙŽÙ…Ù†ÙÙ’ÙƒÙÙ…Ù’ ØµÙÙŠÙŽØ§Ù…ÙŽÙ†ÙŽØ§ ÙˆÙŽØµÙÙŠÙŽØ§Ù…ÙŽÙƒÙÙ…Ù’*<br />\r\n<br />\r\nMohon Maaf Lahir dan Batin...<br />\r\nSemoga Allah menerima amal ibadah kita dan diberi kesempatan agar dapat bertemu lagi dengan bulan Ramadhan di tahun2 yang akan datang....<br />\r\nAamiin ya rabbal&#39;alamin ðŸ¤²ðŸ¤²<br />\r\n<br />\r\n*ÙˆÙŽ Ø§Ù„Ø³Ù‘ÙŽÙ„Ø§ÙŽÙ…Ù Ø¹ÙŽÙ„ÙŽÙŠÙ’ÙƒÙÙ…Ù’ ÙˆÙŽØ±ÙŽØ­Ù’Ù…ÙŽØ©Ù Ø§Ù„Ù„Ù‡Ù ÙˆÙŽØ¨ÙŽØ±ÙŽÙƒÙŽØ§ØªÙÙ‡</p>\r\n', '20230625222418zx.PNG'),
(11, 4, 'Dies Natalis ke-20', '2022-08-20', '<p>Puncak acara Dies Natalis SMAN 9 Merangin ke-20</p>\r\n', '20230625222539dsdsd.PNG'),
(12, 4, 'Pentas Seni', '2023-06-25', '<p>Salah satu penampilan siswa SMAN 9 Merangin dalam acara &quot;, Pentas Seni&quot; yang diselenggarakan sekaligus dengan Pelepasan Siswa Siswi kelas XII .<br />\r\nTari ini bernama &quot; Elok Gadis Nampan&quot; yang menggambarkan bagaimana tradisi yang terjadi dalam masyarakat Jangkat yaitu tradisi tolong menolong dalam mengolah bumbu masakan untuk menghadapi Lek gedang maupun lek kecik..</p>\r\n', '20230625223115FDF.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'Pengumuman'),
(4, 'Berita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `isi_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `isi_profil`) VALUES
(1, '<p><span style="font-family:Comic Sans MS,cursive"><span style="font-size:16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>\r\n\r\n<h3><span style="font-family:Comic Sans MS,cursive"><strong>KATA SAMBUTAN KEPALA SEKOLAH:</strong></span></h3>\r\n\r\n<p><strong><em>Asalamualikum warahmatullahi wabrakatuh</em></strong></p>\r\n\r\n<p>Puji syukur kepada Allah SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya sehingga website SMK Negeri 9 Merangin ini dapat terbit. Salah satu tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya Teknologi Informasi yang begitu pesat, sangat diperlukan berbagai sarana prasarana yang kondusif, kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SMK Negeri 9 Merangin</p>\r\n\r\n<p>Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan dan pemerhati pendidikan secara khusus bagi SMK Negeri 9 Merangin.</p>\r\n\r\n<p>Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan meng-update diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik nantinya. Terima kasih atas kerjasamanya, maju terus untuk mencapai SMK Negeri 9 Merangin yang lebih baik lagi.</p>\r\n\r\n<p><em><strong>Wassalamualaikum Wr. Wb.</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hormat kami,</p>\r\n\r\n<p>Kepala SMK Negeri 9 Merangin</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb`
--

CREATE TABLE `psb` (
  `id_psb` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk_siswa` varchar(20) NOT NULL,
  `tmpt_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `smp_asal` varchar(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `pk_ayah` varchar(50) NOT NULL,
  `pk_ibu` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kab_kota` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `kelulusan` int(11) DEFAULT NULL,
  `thn_aprove` varchar(10) NOT NULL,
  `tgl_kelulusan` datetime DEFAULT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb`
--

INSERT INTO `psb` (`id_psb`, `nama_siswa`, `jk_siswa`, `tmpt_lahir`, `tgl_lahir`, `smp_asal`, `ayah`, `ibu`, `pk_ayah`, `pk_ibu`, `nohp`, `alamat_ortu`, `kelurahan`, `kecamatan`, `kab_kota`, `username`, `password`, `kelulusan`, `thn_aprove`, `tgl_kelulusan`, `tgl_daftar`) VALUES
(3, 'Deni Energenki', 'Laki-Laki', 'Merangin', '1996-06-20', 'SMPN 1 Merangin', 'Sutarno', 'Tukiem', 'Tani', 'IRT', '085373668376', 'Merangin', 'Bangko', 'Bangko Barat', 'Kota Bangko', 'deni', '12345', 1, '2023', '2023-07-17 16:00:00', '2023-07-02'),
(5, 'Rahmat Hidayat', 'Laki-laki', 'Merangin', '2006-07-02', 'SMPN 1 Merangin', 'Danu', 'Siti', 'Petani', 'IRT', '085363778787', 'Merangin', 'Bangko', 'Bangko Barat', 'Kota Bangko', 'rahmat', '12345', 2, '2023', '2023-07-17 16:00:00', '2023-07-03'),
(8, 'Dewi Asih', 'Perempuan', 'Padang', '2023-07-24', 'SMPN 1 Padang', 'Sukirman', 'Iban', 'TNI', 'IRT', '085398997654', 'Merangin', 'Bangko', 'Bangko Barat', 'Kota Bangko', 'dewi', '12345', 1, '2022', '2023-07-17 16:00:00', '2022-07-04'),
(9, 'Siska Sari', 'Perempuan', 'Merangin', '2008-08-10', 'SMPN 3 Merangin', 'Dian', 'rahma', 'Petani', 'IRT', '085367665454', 'Merangin', 'Bangko', 'Bangko Barat', 'Kota Bangko', 'siska', '12345', 1, '2023', '2023-07-17 16:00:00', '2023-07-04'),
(10, 'Rinaldi Oktafian', 'Laki-laki', 'Bangko', '2006-07-02', 'SMPN 1 Merangin', 'Sumardi', 'Sutarsih', 'Petani', 'IRT', '0853534435343', 'Merangin', 'Bangko', 'Bangko Barat', 'Kota Bangko', 'rinaldi', '12345', 1, '2023', '2023-07-17 16:00:00', '2023-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(11) NOT NULL,
  `ket_struktur` varchar(50) NOT NULL,
  `gambar_al` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id_struktur`, `ket_struktur`, `gambar_al`) VALUES
(3, 'DATA ORGANISASI SMAN 9 MERANGIN', '20230618101337struktur-organisasi-2021.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenaga_kp`
--

CREATE TABLE `tenaga_kp` (
  `id_tkp` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `jk_g` varchar(50) NOT NULL,
  `jabatan_g` varchar(50) NOT NULL,
  `alamat_g` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tenaga_kp`
--

INSERT INTO `tenaga_kp` (`id_tkp`, `nama_guru`, `foto`, `jk_g`, `jabatan_g`, `alamat_g`) VALUES
(1, 'Drs. Suaidi, M.PD.I', '20230615090009kepsek.jpeg', 'Laki-Laki', 'KEPALA SEKOLAH', 'Merangin'),
(2, 'Rahmat Hidayat, S.Kom', '202206241131112022062411101620181214111527Hafizuddin.jpg', 'Laki-Laki', 'Gr. Biologi', 'Dusun Buat'),
(5, 'Laela Surmayanti, S.Pd', '20230615090112kurikulum.jpeg', 'Perempuan ', 'Gr. Ekonomi', 'Laman Panjang'),
(12, 'Desneli, S.Pt', '2022062411301520190114141138006.jpg', 'Perempuan', 'Gr.Kimia', 'Senamat Ulu'),
(19, 'Solihin, S.Pd.I', '2022062411293920190114120425wahyu.jpg', 'Laki-Laki', 'Gr. Fisika', 'Lubuk Beingin'),
(20, 'Umi Sakamah, S.Pd', '2022062411292720181221141742030.jpg', 'Perempuan', 'Gr.PAI/Agama', 'Karak Apung'),
(22, 'Umi Sesilawati, S.pd', '2022062411290120190114120848wahyu.jpg', 'Perempuan', 'Gr. Sosiologi', 'Muara Buat'),
(23, 'Reni Salimati', '2022062411285020190114121103wahyu.jpg', 'Perempuan', 'Gr. Bahasa Inggris', 'Muara Buat'),
(24, 'Fatmawati, S,pd', '20230615090336keperawatan ketua prodi perawat.jpeg', 'Perempuan', 'Gr. Matematika', 'Merangin'),
(26, 'Putri Adila Sari, S.Pd', '2022062411283520190114141223015.jpg', 'Perempuan', 'Gr. Bahasa Indonesia', 'Timbolasi, Bathin III Ulu'),
(27, 'Kartini, S.Pd', '2022062411274720190114141245029.jpg', 'Perempuan', 'Gr. Biofisika', 'Senamat Ulu'),
(28, 'Halimah Arahfanita, S.Pd', '2022062512582220190114141318Dzah Halimah.png', 'Perempuan', 'Gr. Astronomi', 'Lubuk Beringin'),
(30, 'Maria Isnora, S.Hum', '2022062411251220190114141351008.jpg', 'Perempuan', 'Gr. Antropologi', 'Purwo bakti'),
(31, 'Yogi Anursa Wijaya, S.Pd', '2022062512585020190114141422Ustadz Yogi.png', 'Laki-Laki', 'Gr. Ilmu atau Sains Kebumian', 'Sungai Binjai, Bathin II'),
(32, 'Yulia Fitri Yeni, S.Hum', '2022062411244920190114141437yeni.jpg', 'Perempuan', 'Gr. Sejarah', 'laman Panjag'),
(33, 'Wiwid Apraisa, S.Pd', '2022062512573920190114141453Ustadzah Wiwid.png', 'Perempuan', 'Operator Sekolah Tata Usaha', 'karak Apung, Bathin III Ulu'),
(35, 'Zulkifli, S.E', '2022062411243220190114141534GALIH.jpg', 'Laki-Laki', 'Gr. Ilmu atau Sains Kelautan', 'Buat, Bathin III Ulu'),
(36, 'Mardianto, A.Md', '2022062411240620190114141557FOTO MARDIANTO.jpg', 'Laki-Laki', 'Gr. Matematika', 'karak Apung, Bathin III Ulu'),
(37, 'Nanda Rafles, SIQ S. PdI', '2022062411235420190114141805wahyu.jpg', 'Laki-Laki', 'Gr. Kima', 'Muara Buat'),
(38, 'Yopi Ramadhani, S. Pd', '2022062411233820190103153340016.jpg', 'Perempuan', 'Gr. Geografi', 'Sungai Telang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisi`
--

CREATE TABLE `visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `isi_visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `isi_visi`) VALUES
(1, '<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:24px"><strong>Visi :</strong>&nbsp;&quot;<strong>TERWUJUDNYA INSAN&nbsp; BERAKHLAK&nbsp; MULIA,&nbsp; BERBUDAYA, CERDAS, BERPRESTASI&nbsp;&nbsp; DAN BERWAWASANGLOBAL</strong>&rdquo; </span></span></p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify"><span style="color:null"><span style="font-size:24px"><strong>Misi :</strong>&nbsp;</span></span></p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<div class="WordSection1" style="text-align:justify">\r\n<p style="margin-left:0in; margin-right:0in; text-align:left"><span style="color:null"><strong><span style="font-size:18px">a.&nbsp;&nbsp; Menumbuhkan Kecintaan terhadap ajaran agama yang dianut, sehingga dapat menjadi sumber motivasi dalam membuat kebijakan</span></strong></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:left"><span style="color:null"><strong><span style="font-size:18px">b.&nbsp; &nbsp;Menumbuhkan kecintaan siswa yang berkarakter terhadap nilai-nilai luhur &nbsp;budaya bangsa</span></strong></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:left"><span style="color:null"><strong><span style="font-size:18px">c.&nbsp; &nbsp;Menyelenggarakan proses pembelajaran yang aktif, inovatif, kreatif dan menyenangkan(PAIKEM)</span></strong></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:left"><span style="color:null"><strong><span style="font-size:18px">d.&nbsp; &nbsp;Memberikan layanan pendidikan yang berorientasi pada keunggulan dengan penerapan berbasis IT</span></strong></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:left"><span style="color:null"><strong><span style="font-size:18px">e.&nbsp;&nbsp; &nbsp;Mengoptimalkan kompetensi siswa dalam bidang ilmu pengetahuan dan teknologi (IPTEK),olahraga dan seni sesuai dengan bakat serta minat yang dimiliki</span></strong></span></p>\r\n</div>\r\n\r\n<p style="margin-left:0in; margin-right:0in"><span style="color:null"><strong><span style="font-size:18px">f.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mempersiapkan&nbsp;&nbsp; &nbsp;siswa agar dapat &nbsp;melanjutkan&nbsp; &nbsp;ke PTN atau &nbsp;PTS yang bereputasi&nbsp; &nbsp;baik bertaraf&nbsp; &nbsp;internasional&nbsp; &nbsp;pada jurusan &nbsp;yang prospektif</span></strong></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in"><span style="color:null"><strong><span style="font-size:18px">g.&nbsp;&nbsp;&nbsp; &nbsp;Mengembangkan&nbsp;&nbsp; &nbsp;ilmu &nbsp;pengetahuan,&nbsp; &nbsp;ketrampilan&nbsp; &nbsp;dan teknologi&nbsp; &nbsp;di masyarakat</span></strong></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in"><span style="color:null"><strong><span style="font-size:18px">h.&nbsp;&nbsp; &nbsp;Menjadikan&nbsp; &nbsp;sekolah &nbsp;sebagai pusat &nbsp;kebudayaan&nbsp; &nbsp;dan pusat &nbsp;keunggulan</span></strong></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in"><span style="color:null"><strong><span style="font-size:18px">i.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Menciptakan&nbsp;&nbsp; &nbsp;kegairahan &nbsp;proses &nbsp;pembelajaran&nbsp; &nbsp;yang ditopang&nbsp; &nbsp;oleh &nbsp;budaya &nbsp;bersih &nbsp;diri &nbsp;dan bersih &nbsp;lingkungan&nbsp; &nbsp;belajar</span></strong></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in"><span style="color:null"><strong><span style="font-size:18px">j.&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Menciptakan&nbsp; &nbsp;lingkungan&nbsp; &nbsp;belajar &nbsp;yang kondusif &nbsp;dengan &nbsp;mewujudkan&nbsp;&nbsp; &nbsp;keasrian,kerindangan&nbsp; &nbsp;melalui &nbsp;penghijauan,&nbsp; &nbsp;sehingga &nbsp;suasana belajar &nbsp;menjadi &nbsp;sejuk dan nyaman.</span></strong></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify">&nbsp;</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `psb`
--
ALTER TABLE `psb`
  ADD PRIMARY KEY (`id_psb`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `tenaga_kp`
--
ALTER TABLE `tenaga_kp`
  ADD PRIMARY KEY (`id_tkp`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `psb`
--
ALTER TABLE `psb`
  MODIFY `id_psb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tenaga_kp`
--
ALTER TABLE `tenaga_kp`
  MODIFY `id_tkp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

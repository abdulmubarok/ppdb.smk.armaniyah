-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jan 2021 pada 14.40
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_asalsekolah`
--

CREATE TABLE `ppdb_asalsekolah` (
  `id` int(13) NOT NULL,
  `id_siswa` int(13) NOT NULL,
  `npsn_sekolah` varchar(12) DEFAULT NULL,
  `asal_sekolah` varchar(35) DEFAULT NULL,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `status_sekolah` enum('','Negeri','Swasta') DEFAULT NULL,
  `alamat_sekolah` text,
  `no_ijazah` varchar(45) DEFAULT NULL,
  `no_skhun` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_asalsekolah`
--

INSERT INTO `ppdb_asalsekolah` (`id`, `id_siswa`, `npsn_sekolah`, `asal_sekolah`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `no_ijazah`, `no_skhun`) VALUES
(1, 1, NULL, 'Sekolah Menengah Pertama (SMP)', 'smpn 1 parigi', 'Negeri', 'Parigi Jawa Barat', '3536498', '23461677'),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_dokumen`
--

CREATE TABLE `ppdb_dokumen` (
  `id` int(13) NOT NULL,
  `id_siswa` int(13) NOT NULL,
  `file_ijazah` varchar(75) DEFAULT NULL,
  `file_skhun` varchar(75) DEFAULT NULL,
  `file_sksd` varchar(75) DEFAULT NULL,
  `file_ktp` varchar(75) DEFAULT NULL,
  `file_kk` varchar(75) DEFAULT NULL,
  `file_ktp_ibu` varchar(45) DEFAULT NULL,
  `file_prestasi` varchar(45) DEFAULT NULL,
  `file_akte` varchar(75) DEFAULT NULL,
  `file_raport` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_dokumen`
--

INSERT INTO `ppdb_dokumen` (`id`, `id_siswa`, `file_ijazah`, `file_skhun`, `file_sksd`, `file_ktp`, `file_kk`, `file_ktp_ibu`, `file_prestasi`, `file_akte`, `file_raport`) VALUES
(1, 1, 'Ahmad Zaelani594584.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_info`
--

CREATE TABLE `ppdb_info` (
  `id` int(13) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_info`
--

INSERT INTO `ppdb_info` (`id`, `judul`, `isi`) VALUES
(1, 'Cara Mendaftar', '&lt;p style=&quot;text-align:justify&quot;&gt;Untuk melakukan pendaftaran. Anda bisa melakukan langkah - langkah berikut ini&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Buat Akun terlebih dahulu. Isi nama username, email, dan password. Untuk username masukan kombinasi angka. Misal dani32 joni93 dll.&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Selanjutnya ketika sudah login. Kalian bisa melengkapi data - data pendaftaran yang tersedia pada form&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&lt;br /&gt;\r\nSelanjutnya simpan data - data pendaftaran jika sudah selesai&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&amp;nbsp;&lt;/p&gt;'),
(2, 'Dokumen - Dokumen yang perlu di unggah', '&lt;p style=&quot;text-align:justify&quot;&gt;Dokumen - dokumen yang nantinya perlu di unggak ke situs pendaftaran kami adalah sebagai berikut :&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Pas foto ukuran 4 x 6 cm. Dengan latar belakang merah untuk pria dan biru untuk wanita&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Ukuran foto yang di unggah minimal 300KB&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Mengunggah dokumen Ijazah, skhun, surat keterangan sehat dokter, kartu keluarga dan ktp&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Dokumen - dokumen harus asli&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Untuk FC Ijazah bisa menggunakan Legalisir asli dari sekolah&lt;/li&gt;\r\n&lt;/ol&gt;'),
(3, 'Informasi pembayaran', '&lt;p style=&quot;text-align:justify&quot;&gt;Setelah membuat akun dan melengkapi pendaftaran. Anda bisa langsung melakukan pembayaran dengan mengunggah bukti pembayaran.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;Anda bisa melakukan pembayaran ke No. Rek Berikut :&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Nita Lukman Bank BRI&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Kevin Santoso Bank Mandiri&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Universitas Unigal Bank BRI&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;*Catatan :&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Gunakan Kode refrensi saat melakukan transfer pembayaran.&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;Kode refrensi 6 atau 5 digit bisa dilihat pada kartu pendafataran masing - masing&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;Anda bisa juga melakukan pembayaran dengan Nomor Virtual Account yang ada pada cetak kartu pendaftaran Anda. Silahkan melakukan pembayaran menggunakan Nomor Virtual Account&amp;nbsp; yang Anda miliki. Transfer Hanya melalui Bank BNI&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&amp;nbsp;&lt;/p&gt;'),
(4, 'Informasi daftar ulang', '&lt;p&gt;Pendaftaran ulang bisa dilakukan pada :&lt;/p&gt;\r\n\r\n&lt;div class=&quot;table-responsive&quot;&gt;\r\n&lt;table border=&quot;0&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; style=&quot;width:500px&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;Hari&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;: Senin, 12 Juli 2020&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;Pukul&lt;/td&gt;\r\n			&lt;td&gt;: 08.00 s.d Selesai&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;Lokasi&lt;/td&gt;\r\n			&lt;td&gt;: Aula Kampus Unigal&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;Berkas - Berkas&lt;/td&gt;\r\n			&lt;td&gt;: Berkas Berkas yang perlu dibawa&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;\r\n			&lt;ol&gt;\r\n				&lt;li&gt;Kartu Pendaftaran&lt;/li&gt;\r\n				&lt;li&gt;FC Ijazah Legalisir&lt;/li&gt;\r\n				&lt;li&gt;Bukti Pembayaran&lt;/li&gt;\r\n				&lt;li&gt;Pas Foto Ukuran&amp;nbsp; 4 x 6 2 lembar Berwarna Merah untuk pria dan biru untuk wanita&lt;/li&gt;\r\n				&lt;li&gt;Surat Pernyataan untuk berkelakukan baik dengan materai 6000&lt;/li&gt;\r\n			&lt;/ol&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_jadwaltest`
--

CREATE TABLE `ppdb_jadwaltest` (
  `id` int(1) NOT NULL,
  `tanggal_test` varchar(25) NOT NULL,
  `waktu_test` varchar(25) NOT NULL,
  `materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_jadwaltest`
--

INSERT INTO `ppdb_jadwaltest` (`id`, `tanggal_test`, `waktu_test`, `materi`) VALUES
(1, 'Senin, 26 Mei 2020', '07.30 - 11.00 WIB', 'Materi : \r\nSesi I : B.Indo, B. Inggris, MM, IPA, IPS, PAI\r\nSesi II : Baca Al-Qur''an, Kepribadian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_jalur`
--

CREATE TABLE `ppdb_jalur` (
  `id` int(5) NOT NULL,
  `jalur_daftar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_jalur`
--

INSERT INTO `ppdb_jalur` (`id`, `jalur_daftar`) VALUES
(1, 'Prestasi'),
(2, 'Reguler');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_jurusan`
--

CREATE TABLE `ppdb_jurusan` (
  `id` int(3) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_kelas`
--

CREATE TABLE `ppdb_kelas` (
  `id` int(3) NOT NULL,
  `kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_ortu`
--

CREATE TABLE `ppdb_ortu` (
  `id` int(13) NOT NULL,
  `id_siswa` int(13) NOT NULL,
  `nama_ayah` varchar(30) DEFAULT NULL,
  `nik_ayah` varchar(16) DEFAULT NULL,
  `tgl_ayah` varchar(45) NOT NULL DEFAULT '',
  `status_ayah` enum('','Masih Ada','Sudah Meninggal') DEFAULT NULL,
  `pendidikan_ayah` enum('','Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') DEFAULT NULL,
  `pekerjaan_ayah` varchar(30) DEFAULT NULL,
  `penghasilan_ayah` enum('','-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') DEFAULT NULL,
  `nama_ibu` varchar(30) DEFAULT NULL,
  `nik_ibu` varchar(16) DEFAULT NULL,
  `tgl_ibu` varchar(45) DEFAULT NULL,
  `status_ibu` enum('','Masih Ada','Sudah Meninggal') DEFAULT NULL,
  `pendidikan_ibu` enum('','Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') DEFAULT NULL,
  `pekerjaan_ibu` varchar(30) DEFAULT NULL,
  `penghasilan_ibu` enum('','-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') DEFAULT NULL,
  `kontak_ortu` varchar(13) DEFAULT NULL,
  `nama_wali` varchar(30) DEFAULT NULL,
  `nik_wali` varchar(16) DEFAULT NULL,
  `tgl_wali` varchar(45) DEFAULT NULL,
  `pendidikan_wali` enum('','Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') DEFAULT NULL,
  `pekerjaan_wali` varchar(30) DEFAULT NULL,
  `penghasilan_wali` enum('','-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') DEFAULT NULL,
  `kontak_wali` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_ortu`
--

INSERT INTO `ppdb_ortu` (`id`, `id_siswa`, `nama_ayah`, `nik_ayah`, `tgl_ayah`, `status_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `nik_ibu`, `tgl_ibu`, `status_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `kontak_ortu`, `nama_wali`, `nik_wali`, `tgl_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `kontak_wali`) VALUES
(1, 1, 'Angara Danur', '3201326946497797', 'bandung-30-07-1987', 'Masih Ada', 'SMA/SMK/MA', 'Wiraswasta', '3jt-5jt', 'Dini Andini', '3206564979797979', 'ciamis-20-09-1980', 'Masih Ada', 'SMA/SMK/MA', 'Ibu Rumah Tangga', '5jt-10jt', '082127787593', '', NULL, 'tempat_lahir-01-01-2000', '', '', '', ''),
(2, 2, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_panitia`
--

CREATE TABLE `ppdb_panitia` (
  `uid` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `role` varchar(25) NOT NULL,
  `foto_panitia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_panitia`
--

INSERT INTO `ppdb_panitia` (`uid`, `username`, `password`, `email`, `nama`, `role`, `foto_panitia`) VALUES
(1, 'administrator', '$2y$10$8AX9q4FOyzkFGDiqp7RkQ.sAs.h5ttpMwjRvo4G5dW1W4.NYamPwe', 'myroot593@gmail.com', 'Administrator', 'administrator', 'Administrator.jpg'),
(2, 'Bendahara', '$2y$10$xgey/HifWpindTpamEHRsOQYcDq1DmbMMnOOA24CixCI1RMbRYRvW', 'sintaarafah@gmail.com', 'Sinta Arafah', 'bendahara', 'Sinta Arafah.jpg'),
(3, 'Verifikator', '$2y$10$CCNsBwhek27wpGGIJ06t6eStw7MK93Pa/yjIhZ3Bx/3o6/KpAPThC', 'Abaraham51@gmail.com', 'Silvi Dian', 'verifikator', 'Silvi Dian.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_pembayaran`
--

CREATE TABLE `ppdb_pembayaran` (
  `id` int(13) NOT NULL,
  `id_siswa` int(13) NOT NULL,
  `nomor_pendaftaran` varchar(15) DEFAULT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `kode_refrensi` varchar(15) DEFAULT NULL,
  `bukti_transfer` varchar(75) DEFAULT NULL,
  `tgl_pembayaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_pembayaran` enum('Belum Diverifikasi','Lunas') DEFAULT NULL,
  `virtual_account` varchar(20) DEFAULT NULL,
  `verifikator_pembayaran` varchar(30) DEFAULT NULL,
  `verifikator_pembayaran_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_pembayaran`
--

INSERT INTO `ppdb_pembayaran` (`id`, `id_siswa`, `nomor_pendaftaran`, `nama`, `kode_refrensi`, `bukti_transfer`, `tgl_pembayaran`, `status_pembayaran`, `virtual_account`, `verifikator_pembayaran`, `verifikator_pembayaran_id`) VALUES
(1, 1, '2020121', 'Ahmad Zaelani', '078', 'Ahmad Zaelani078.png', '2020-09-03 11:19:49', 'Lunas', '1234567854868059', NULL, NULL),
(2, 2, '2021012', 'Dani nuryana', '978', 'Dani nuryana978.png', '2021-01-04 06:14:58', NULL, '1234567824118528', NULL, NULL),
(3, 3, '2021013', 'Ani Andriani', '290', 'Ani Andriani290.png', '2021-01-14 02:53:39', 'Lunas', '1234567889013755', 'Sinta Arafah', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_raport`
--

CREATE TABLE `ppdb_raport` (
  `id` int(13) NOT NULL,
  `id_siswa` int(13) NOT NULL,
  `nisn` char(10) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `ipa_1` varchar(5) DEFAULT NULL,
  `matematika_1` varchar(5) DEFAULT NULL,
  `indonesia_1` varchar(5) DEFAULT NULL,
  `inggris_1` varchar(5) DEFAULT NULL,
  `ipa_2` varchar(5) DEFAULT NULL,
  `matematika_2` varchar(5) DEFAULT NULL,
  `indonesia_2` varchar(5) DEFAULT NULL,
  `inggris_2` varchar(5) DEFAULT NULL,
  `ipa_3` varchar(5) DEFAULT NULL,
  `matematika_3` varchar(5) DEFAULT NULL,
  `indonesia_3` varchar(5) DEFAULT NULL,
  `inggris_3` varchar(5) DEFAULT NULL,
  `ipa_4` varchar(5) DEFAULT NULL,
  `matematika_4` varchar(5) DEFAULT NULL,
  `indonesia_4` varchar(5) DEFAULT NULL,
  `inggris_4` varchar(5) DEFAULT NULL,
  `ipa_5` varchar(5) DEFAULT NULL,
  `matematika_5` varchar(5) DEFAULT NULL,
  `indonesia_5` varchar(5) DEFAULT NULL,
  `inggris_5` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_raport`
--

INSERT INTO `ppdb_raport` (`id`, `id_siswa`, `nisn`, `nama`, `ipa_1`, `matematika_1`, `indonesia_1`, `inggris_1`, `ipa_2`, `matematika_2`, `indonesia_2`, `inggris_2`, `ipa_3`, `matematika_3`, `indonesia_3`, `inggris_3`, `ipa_4`, `matematika_4`, `indonesia_4`, `inggris_4`, `ipa_5`, `matematika_5`, `indonesia_5`, `inggris_5`) VALUES
(1, 1, '1064697997', 'Ahmad Zaelani', '88', '88', '88', '88', '88', '88', '88', '88', '78', '98', '88', '76', '76', '77', '78', '77', '78', '86', '77', '78'),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_role`
--

CREATE TABLE `ppdb_role` (
  `rid` int(10) NOT NULL,
  `name_role` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_role`
--

INSERT INTO `ppdb_role` (`rid`, `name_role`) VALUES
(1, 'administrator'),
(2, 'verifikator'),
(3, 'bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_setting`
--

CREATE TABLE `ppdb_setting` (
  `id` int(1) NOT NULL,
  `nama_situs` varchar(50) NOT NULL,
  `alamat_situs` text NOT NULL,
  `deskripsi_situs` text NOT NULL,
  `metatag_situs` text NOT NULL,
  `kontak_situs` varchar(13) NOT NULL,
  `author_situs` varchar(30) NOT NULL,
  `logo_situs` varchar(15) NOT NULL,
  `sidebarlogo_situs` varchar(20) NOT NULL,
  `pendaftaran` enum('Buka','Tutup','Perawatan','Belum Dibuka') NOT NULL,
  `virtual_account` varchar(8) NOT NULL,
  `tema` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_setting`
--

INSERT INTO `ppdb_setting` (`id`, `nama_situs`, `alamat_situs`, `deskripsi_situs`, `metatag_situs`, `kontak_situs`, `author_situs`, `logo_situs`, `sidebarlogo_situs`, `pendaftaran`, `virtual_account`, `tema`) VALUES
(1, 'SMK NEGERI 1 CIJULANG', 'Jln. Raya Mayor Raswian Cijulang No. 32 46393  Pangandaran - Jawa Barat, Indonesia', 'Halaman resmi Pendaftaran Penerimaan Peserta Didik Baru (PPDB) SMKN 1 CIJULANG Kabupaten Pangandaran Tahun 2020', 'Halaman resmi Pendaftaran Penerimaan Peserta Didik Baru (PPDB) SMKN 1 CIJULANG Kabupaten Pangandaran Tahun 2020', '6282127787593', 'Ahmad Zaelani', 'logo.png', 'sidebar.png', 'Buka', '12345678', 'sidebar03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_setting_pembayaran`
--

CREATE TABLE `ppdb_setting_pembayaran` (
  `id_setting` int(1) NOT NULL,
  `jumlah_pembayaran` varchar(3) NOT NULL,
  `rek_pembayaran` text NOT NULL,
  `status_pembayaran` enum('Aktif','Tidak Aktif','Matikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_setting_pembayaran`
--

INSERT INTO `ppdb_setting_pembayaran` (`id_setting`, `jumlah_pembayaran`, `rek_pembayaran`, `status_pembayaran`) VALUES
(1, '250', '&lt;p&gt;Untuk informasi pembayaran, Anda bisa melakukan pemabayaran ke :&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;Rek Mandiri No : A/n&lt;/li&gt;\r\n	&lt;li&gt;Rek BCA No : A/n&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;p&gt;atau silahkan buka menu informasi, untuk informasi lebih lanjut&lt;/p&gt;', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_siswa`
--

CREATE TABLE `ppdb_siswa` (
  `id` int(13) NOT NULL,
  `id_siswa` int(13) NOT NULL,
  `nomor_pendaftaran` varchar(25) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `no_kk` varchar(16) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nama` varchar(65) DEFAULT NULL,
  `jl` enum('','Laki-Laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` varchar(10) DEFAULT NULL,
  `agama` enum('','Islam','Kristen Katolik','Kristen Protestan','Hindu','Budha') DEFAULT NULL,
  `golongan_darah` enum('','A','B','O','AB','Belum Tahu') DEFAULT NULL,
  `tinggi_badan` varchar(3) DEFAULT NULL,
  `berat_badan` varchar(3) DEFAULT NULL,
  `riwayat_penyakit` text,
  `status_keluarga` enum('','Anak Kandung','Anak Tiri','Anak Angkat') DEFAULT NULL,
  `anak_ke` varchar(1) DEFAULT NULL,
  `jml_saudara` varchar(1) DEFAULT NULL,
  `mode_transportasi` varchar(35) DEFAULT NULL,
  `tempat_tinggal` varchar(35) DEFAULT NULL,
  `jarak_rumah` varchar(15) DEFAULT NULL,
  `titik_koordinat` varchar(100) DEFAULT NULL,
  `hobi` varchar(30) DEFAULT NULL,
  `prestasi` text,
  `alamat` text,
  `dusun` varchar(45) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `desa` varchar(30) DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `kabupaten` varchar(30) DEFAULT NULL,
  `provinsi` varchar(30) DEFAULT NULL,
  `kontak_siswa` varchar(13) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `jalur_pendaftaran` varchar(50) DEFAULT NULL,
  `kelas` varchar(30) DEFAULT NULL,
  `no_kks` varchar(35) DEFAULT NULL,
  `no_pkh` varchar(35) DEFAULT NULL,
  `no_kip` varchar(35) DEFAULT NULL,
  `kode_daftar` varchar(30) DEFAULT NULL,
  `tgl_pendaftaran` varchar(25) DEFAULT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_pendaftaran` enum('Belum Diverifikasi','Terverifikasi','Diterima','Tidak Diterima','Cadangan') NOT NULL,
  `verifikator_pendaftar` varchar(30) DEFAULT NULL,
  `verifikator_pendaftar_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_siswa`
--

INSERT INTO `ppdb_siswa` (`id`, `id_siswa`, `nomor_pendaftaran`, `no_ktp`, `no_kk`, `nisn`, `nama`, `jl`, `tempat_lahir`, `tanggal_lahir`, `agama`, `golongan_darah`, `tinggi_badan`, `berat_badan`, `riwayat_penyakit`, `status_keluarga`, `anak_ke`, `jml_saudara`, `mode_transportasi`, `tempat_tinggal`, `jarak_rumah`, `titik_koordinat`, `hobi`, `prestasi`, `alamat`, `dusun`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `kontak_siswa`, `foto`, `jurusan`, `jalur_pendaftaran`, `kelas`, `no_kks`, `no_pkh`, `no_kip`, `kode_daftar`, `tgl_pendaftaran`, `tgl_update`, `status_pendaftaran`, `verifikator_pendaftar`, `verifikator_pendaftar_id`) VALUES
(1, 1, '2020121', '3201366796749797', '3205676797979464', '1064697997', 'Ahmad Zaelani', 'Laki-Laki', 'ciamis', '30-07-1993', 'Islam', 'AB', '165', '68', '', 'Anak Kandung', '3', '4', 'Sepeda Motor', 'Bersama Ortu', '2 KM', '', '', '', 'Dusun babakan RT 01', 'babakan', '01', '04', 'parigi', 'parigi', 'pangandaran', 'jawa barat', '087870693200', 'Ahmad Zaelani181386.jpg', '', 'Prestasi', '', '', '', '', '078', 'Kamis, 03 September 2020', '2021-01-23 11:47:42', 'Cadangan', 'Silvi Dian', 3),
(2, 2, NULL, NULL, NULL, NULL, 'Dani nuryana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '978000', 'Senin, 04 Januari 2021', '2021-01-04 06:14:56', 'Belum Diverifikasi', NULL, NULL),
(3, 3, '2021013', '3209899787878787', '3290009089898987', '1029778797', 'Ani Andriani', 'Perempuan', 'Bandung', '29-07-2009', 'Islam', 'B', '165', '68', '', 'Anak Kandung', '2', '4', 'Jalan Kaki', 'Bersama Ortu', '3 KM', '', '', '', 'jln. parigi no 32 parigi', 'babakan', '01', '01', 'Parigi', 'Parigi', 'pangandaran', 'jawa barat', '087870693200', 'Ani Andriani76966.jpg', '', 'Prestasi', NULL, '', '', '', '290', 'Kamis, 14 Januari 2021', '2021-01-23 12:30:54', 'Belum Diverifikasi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_un`
--

CREATE TABLE `ppdb_un` (
  `id` int(13) NOT NULL,
  `id_siswa` int(13) NOT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `ipa` varchar(5) DEFAULT NULL,
  `matematika` varchar(5) DEFAULT NULL,
  `bahasa_indonesia` varchar(5) DEFAULT NULL,
  `bahasa_inggris` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_un`
--

INSERT INTO `ppdb_un` (`id`, `id_siswa`, `nisn`, `nama`, `ipa`, `matematika`, `bahasa_indonesia`, `bahasa_inggris`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_user`
--

CREATE TABLE `ppdb_user` (
  `id` int(13) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_user`
--

INSERT INTO `ppdb_user` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Ahmad Zaelani', 'myroot593@gmail.com', 'aze19', '$2y$10$y.IsXvuGjAY6qW6AtKpLnuKZjLV0kt2RDxkHgaxbGU0Z4oNoz4.di'),
(2, 'Dani nuryana', 'blogkangzai@gmail.com', 'dani21', '$2y$10$YBIQw0XNw57B2OhJDxlrjuCU97bZPlL98oIvtqapPQTorfsZiqve6'),
(3, 'Ani Andriani', 'aniandriyani@gmail.com', 'ani21', '$2y$10$1MpRTACjw5wWF08jEtIl/e7lWg05PhgdNCAlq0suZY1c2/1UDqB8G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ppdb_asalsekolah`
--
ALTER TABLE `ppdb_asalsekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_dokumen`
--
ALTER TABLE `ppdb_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_info`
--
ALTER TABLE `ppdb_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_jalur`
--
ALTER TABLE `ppdb_jalur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_jurusan`
--
ALTER TABLE `ppdb_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_kelas`
--
ALTER TABLE `ppdb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_ortu`
--
ALTER TABLE `ppdb_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_panitia`
--
ALTER TABLE `ppdb_panitia`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `ppdb_pembayaran`
--
ALTER TABLE `ppdb_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_raport`
--
ALTER TABLE `ppdb_raport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_role`
--
ALTER TABLE `ppdb_role`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `ppdb_setting`
--
ALTER TABLE `ppdb_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_siswa`
--
ALTER TABLE `ppdb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_un`
--
ALTER TABLE `ppdb_un`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_user`
--
ALTER TABLE `ppdb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ppdb_asalsekolah`
--
ALTER TABLE `ppdb_asalsekolah`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppdb_dokumen`
--
ALTER TABLE `ppdb_dokumen`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppdb_info`
--
ALTER TABLE `ppdb_info`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ppdb_jalur`
--
ALTER TABLE `ppdb_jalur`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ppdb_jurusan`
--
ALTER TABLE `ppdb_jurusan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ppdb_kelas`
--
ALTER TABLE `ppdb_kelas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ppdb_ortu`
--
ALTER TABLE `ppdb_ortu`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppdb_panitia`
--
ALTER TABLE `ppdb_panitia`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppdb_pembayaran`
--
ALTER TABLE `ppdb_pembayaran`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppdb_raport`
--
ALTER TABLE `ppdb_raport`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppdb_role`
--
ALTER TABLE `ppdb_role`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppdb_siswa`
--
ALTER TABLE `ppdb_siswa`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppdb_un`
--
ALTER TABLE `ppdb_un`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppdb_user`
--
ALTER TABLE `ppdb_user`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

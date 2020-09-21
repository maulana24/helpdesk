-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2020 at 01:43 AM
-- Server version: 5.1.73
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `layanantik`
--

-- --------------------------------------------------------

--
-- Table structure for table `detil_tr_tugas`
--

CREATE TABLE IF NOT EXISTS `detil_tr_tugas` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Tugas` int(20) NOT NULL,
  `Komentar` text NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Nama_User_L` varchar(100) NOT NULL,
  `Tgl_Komentar` datetime NOT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `detil_tr_tugas`
--

INSERT INTO `detil_tr_tugas` (`No`, `Id_Tugas`, `Komentar`, `Nama_User`, `Nama_User_L`, `Tgl_Komentar`, `file`) VALUES
(1, 1501203099, 'untuk KKN gelombang kedua, baru sinkron kemarin sore. mohon di cek lagi', 'ahmad', 'Ahmad Zuhri', '2017-08-08 09:15:28', ''),
(2, 1501203103, 'Mintol nama dan NIP dosennya le ?\r\nKemungkinan NIDNnya belum terisi di biodata dosen', 'ahmad', 'Ahmad Zuhri', '2017-08-08 10:19:02', ''),
(3, 1501203105, 'Maaf filenya lambat le, sy sudah kirimkan di FB\r\n', 'ahmad', 'Ahmad Zuhri', '2017-08-09 12:16:17', ''),
(4, 1501203106, 'Sudah selesai', 'ahmad', 'Ahmad Zuhri', '2017-08-09 12:19:47', ''),
(5, 1501203106, 'ok', 'fadli', 'PENGELOLA SIAKAD FAK.HUKUM', '2017-08-09 12:20:24', ''),
(6, 1501203106, 'terrima kasih', 'fadli', 'PENGELOLA SIAKAD FAK.HUKUM', '2017-08-09 12:22:22', ''),
(7, 1501203101, 'Tes', 'maulana', 'MolSyam', '2017-08-10 15:10:16', '1502349016.rar'),
(8, 1501203111, 'Maf le. kalau muncul out of memory brarti harus refresh2 sja, lagi sibuk servernya le', 'ahmad', 'Ahmad Zuhri', '2017-08-10 16:13:16', ''),
(9, 1501203112, 'Ini harus di laporkan dulu nilainya ke PDPT semester 20162 baru bisa isi KRS 20171.\r\nini ide asalnya dari BPK. hehehe', 'ahmad', 'Ahmad Zuhri', '2017-08-10 16:14:17', ''),
(10, 1501203113, 'INI datanya tidak terdaftar di PDPT, sy daftarkan dulu le', 'ahmad', 'Ahmad Zuhri', '2017-08-10 16:17:11', ''),
(11, 1501203114, 'mmmmmmm', 'maulana', 'MolSyam', '2017-08-11 13:21:12', '1502428872.jpg'),
(12, 1501203114, 'lkjkljkl', 'maulana', 'MolSyam', '2017-08-11 13:25:36', '1502429136.pdf'),
(13, 1501203114, 'alskjlaks', 'maulana', 'MolSyam', '2017-08-11 13:35:50', '1502429750.jpg'),
(14, 1501203114, 'alskjnaslk', 'maulana', 'MolSyam', '2017-08-11 13:36:03', '1502429763.xlsx'),
(15, 1501203115, 'Sudah Selesai', 'ahmad', 'Ahmad Zuhri', '2017-08-11 15:55:33', ''),
(16, 1501203115, 'Mantap', 'maulana2', 'Maulana Syamsuri', '2017-08-11 15:55:54', ''),
(17, 1501203116, 'OK', 'ahmad', 'Ahmad Zuhri', '2017-08-14 10:58:52', ''),
(18, 1501203103, 'ini pak nip 198901192015042004 an dr. Andi Alfia Muthmainnah Tanra', 'santiasa23', 'I Nyoman Santiasa', '2017-08-14 13:33:43', ''),
(19, 1501203122, 'bukannya C memang bobotnya 2,5 ?', 'ahmad', 'Ahmad Zuhri', '2017-08-16 12:51:44', ''),
(20, 1501203124, 'Sudah selesai. mohon dicek lagi', 'ahmad', 'Ahmad Zuhri', '2017-08-16 12:59:03', ''),
(21, 1501203123, 'Sudah sy tukar idnya Pak. terima kasih. terliti sekali bapak. ^_^', 'ahmad', 'Ahmad Zuhri', '2017-08-16 13:16:11', ''),
(22, 1501203103, 'sudah selesai pak. mohon di cek lagi', 'ahmad', 'Ahmad Zuhri', '2017-08-16 13:39:37', ''),
(23, 1501203099, 'Skarang mahasiswa sudah bisa proses sendiri datanya dari SIAKAD ke KKN, di akun mhs ada menu KKN untuk kirim datanya', 'ahmad', 'Ahmad Zuhri', '2017-08-16 13:41:21', ''),
(24, 1501203122, 'sory, seingat sy yg bobot 2,5 nilai C mulai angkatan 2015 le', 'ahmad', 'Ahmad Zuhri', '2017-08-16 13:42:06', ''),
(25, 1501203122, 'iya pak.. sy juga heran knp dapat 2.0', 'm.fadil', 'Muhammad Fadil', '2017-08-17 11:33:27', ''),
(26, 1501203127, 'berarti kelasnya tidak bisa di ambil lagi, kecuali di tambah kapasistasnya. \r\nUntuk menambah kapasitas, masuk menu penjadwalan kemudian klik angka kapasitas, edit ', 'ahmad', 'Ahmad Zuhri', '2017-08-21 22:40:29', ''),
(27, 1501203111, 'sip...pak', 'fadli', 'PENGELOLA SIAKAD FAK.HUKUM', '2017-08-24 10:58:39', ''),
(28, 1501203133, 'Tidak dapat menjalankan query: insert into jadwal (id_mk,IDJADWAL,Tahun, Terjadwal, KodeFakultas, KodeJurusan, IDMK, KodeMK, NamaMK, Global, SKS, SKSHonor, IDDosen, Program, Hari, JamMulai, JamSelesai, KodeKampus, KodeRuang,kap, unip, Tanggal, Rencana, Realisasi,Keterangan,Kelas,IDPAKET, UTSTanggal, UASTanggal, SSLTanggal) values (''17334eb6-9697-4e64-9a26-90c02a3a1006'',''D10120171DKD13029RESOA'', ''20171'', ''Y'', ''D'', ''D101'', ''DKD13029D101'', ''DKD13029'', ''HUKUM KEWARGANEGARAAN'', ''N'', ''2.0'', ''2.0'', '''', ''RESO'', ''6'', ''20:20'', ''22:00'', ''D'', ''BN 7'',80, ''fadli$'', ''2017-10-04 10:44:09'', ''16'', ''16'',''A'','''','''', now(), now(), now()) \r\nDuplicate entry ''D10120171DKD13029RESOA'' for key ''IDJADWAL''', 'fadli', 'PENGELOLA SIAKAD FAK.HUKUM', '2017-10-04 10:45:41', ''),
(29, 1501203136, '15 mungikin secara keseluruhan semua admin', 'ahmad', 'Ahmad Zuhri', '2017-10-10 09:31:46', ''),
(30, 1501203136, 'tdk pak. sengiat ku, sy py semua itu. soalnya ada yg sy ajukan tdk muncul. ', 'santiasa23', 'I Nyoman Santiasa', '2017-10-10 10:01:35', ''),
(31, 1501203125, 'yg ini selalu tdk bisa pak', 'santiasa23', 'I Nyoman Santiasa', '2017-10-10 10:12:58', ''),
(32, 1501203138, 'coba d upload ulang filenya. tidak terbaca sama sy\r\n', 'ahmad', 'Ahmad Zuhri', '2017-10-13 10:26:23', '');

--
-- Triggers `detil_tr_tugas`
--
DROP TRIGGER IF EXISTS `Hapus Inbox`;
DELIMITER //
CREATE TRIGGER `Hapus Inbox` AFTER DELETE ON `detil_tr_tugas`
 FOR EACH ROW DELETE FROM inbox WHERE Id_tr_tugas = old.Id_Tugas
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `id` int(3) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `Nama`) VALUES
(1, 'Jaringan'),
(2, 'Sistem Informasi'),
(3, 'Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id_inbox` int(20) NOT NULL AUTO_INCREMENT,
  `Id_tr_tugas` int(15) NOT NULL,
  `msg_from` varchar(50) NOT NULL,
  `send_to` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `time_send` time NOT NULL,
  `date_send` date NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT 'D',
  PRIMARY KEY (`id_inbox`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=901 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id_inbox`, `Id_tr_tugas`, `msg_from`, `send_to`, `msg`, `time_send`, `date_send`, `status`) VALUES
(893, 1501203106, 'fadli', 'ahmad', 'terrima kasih', '838:59:59', '2017-08-09', 'R'),
(894, 1501203115, 'maulana2', 'ahmad', 'Mantap', '15:55:54', '2017-08-11', 'R'),
(895, 1501203103, 'santiasa23', 'ahmad', 'ini pak nip 198901192015042004 an dr. Andi Alfia Muthmainna', '13:33:43', '2017-08-14', 'R'),
(896, 1501203103, 'ahmad', 'santiasa23', 'sudah selesai pak. mohon di cek lagi', '13:39:37', '2017-08-16', 'R'),
(897, 1501203122, 'm.fadil', 'ahmad', 'iya pak.. sy juga heran knp dapat 2.0', '11:33:27', '2017-08-17', 'R'),
(898, 1501203112, 'fadli', 'ahmad', '0', '10:58:13', '2017-08-24', 'R'),
(899, 1501203111, 'fadli', 'ahmad', 'sip...pak', '10:58:39', '2017-08-24', 'R'),
(900, 1501203136, 'santiasa23', 'ahmad', 'tdk pak. sengiat ku, sy py semua itu. soalnya ada yg sy aju', '10:01:35', '2017-10-10', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kode_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`) VALUES
('OTH', 'Lainnya'),
('PDDIKTI', 'Pangkalan Data Mahasiswa (PDDIKTI)'),
('PMB', 'Penerimaan Mahasiswa Baru (PMB)'),
('SIAKAD', 'SIAKAD'),
('SPC', 'Masalah Pembayaran'),
('WISUDA', 'Wisuda');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id` int(3) NOT NULL,
  `Nama` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `Nama`) VALUES
(2, 'Operator'),
(3, 'Pemimpin'),
(4, 'Mahasiswa'),
(5, 'Prodi'),
(6, 'Fakultas'),
(7, 'Dosen');

-- --------------------------------------------------------

--
-- Table structure for table `tr_tugas`
--

CREATE TABLE IF NOT EXISTS `tr_tugas` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Tgl_Input` datetime NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `Uraian` text NOT NULL,
  `orang` int(11) NOT NULL,
  `Status` varchar(3) NOT NULL,
  `kd_div` int(2) NOT NULL,
  `Tgl_Mulai` datetime NOT NULL,
  `Tgl_Selesai` datetime NOT NULL,
  `waktu_jeda` time NOT NULL,
  `waktu_lanjut` time NOT NULL,
  `selisih_waktu` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `User_Mulai` varchar(100) NOT NULL,
  `User_Alih` varchar(100) NOT NULL,
  `User_Selesai` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1501203140 ;

--
-- Dumping data for table `tr_tugas`
--

INSERT INTO `tr_tugas` (`id`, `Tgl_Input`, `Nama`, `divisi`, `kategori`, `Uraian`, `orang`, `Status`, `kd_div`, `Tgl_Mulai`, `Tgl_Selesai`, `waktu_jeda`, `waktu_lanjut`, `selisih_waktu`, `user`, `User_Mulai`, `User_Alih`, `User_Selesai`, `file`) VALUES
(11, '2017-07-21 09:00:00', 'Ahmad Zuhri', '', 'SIAKAD', 'Tidak bisa diusul wisuda', 0, 'S', 0, '2017-08-01 14:05:22', '2017-08-01 14:05:24', '00:00:00', '00:00:00', 0, '', 'ahmad', '', 'ahmad', ''),
(1501203093, '2017-07-28 08:54:38', 'Maulana', '', 'PMB', 'Invalid Login', 1, 'S', 0, '2017-07-28 08:54:44', '2017-07-28 09:09:21', '00:00:00', '00:00:00', 0, '', 'maulana', '', 'maulana', '1501203278.jpg'),
(1501203095, '2017-07-28 09:20:40', 'Fahri F55116111', '', 'SIAKAD', 'Siakad', 1, 'S', 1, '2017-07-28 09:29:38', '2017-07-28 09:29:44', '00:00:00', '00:00:00', 0, 'muksin', 'maulana', '', 'maulana', ''),
(1501203097, '2017-07-28 14:40:04', 'I NYOMAN SANTIASA', '', 'SIAKAD', 'Pak. lalu untuk rubah nilai 3.75 jd 3.50 ada file yg bs dieksekusi dr url (prcnilaikesmas.php). klo bs diganti namanya dan diedit isinya. file itu khusus bt FK sj.\r\nterima kasih', 0, 'S', 1, '2017-08-01 13:52:58', '2017-08-05 11:15:01', '00:00:00', '00:00:00', 0, 'santiasa23', 'ahmad', '', 'ahmad', ''),
(1501203099, '2017-07-31 08:27:29', 'fadil bagenda', '', 'SIAKAD', 'yang program kkn kok nda bisa login padahal password  siakad sama ', 0, 'S', 1, '2017-08-01 13:50:42', '2017-08-16 13:41:30', '13:41:30', '13:41:21', 590923, 'm.fadil', 'ahmad', '', 'ahmad', '1501460849.png'),
(1501203100, '2017-07-31 13:08:57', 'I NYOMAN SANTIASA', '', 'SIAKAD', 'Pembatasan kapasitas kelas tidak bisa lagi saat isi krs. selalu tembus', 0, 'S', 1, '2017-08-01 13:48:34', '2017-08-01 13:49:33', '10:00:33', '09:27:07', 1124352, 'santiasa23', 'ahmad', '', 'ahmad', '1501477737.png'),
(1501203101, '2017-08-02 11:43:55', 'I NYOMAN SANTIASA', '', 'WISUDA', 'Mahasiswa kesmas di aplikasi wisuda msh dibawahnya FK harusnya sdh FKM.\r\nterima kasih', 0, 'S', 1, '2017-08-07 18:48:28', '2017-08-07 18:48:43', '13:34:02', '13:33:50', 115, 'santiasa23', 'maulana', '', 'maulana', '1501645435.png'),
(1501203102, '2017-08-02 16:55:37', 'Ahmad', '', 'WISUDA', 'Wisuda D3 masih tercatat belum bayar, padahal sudah bayar', 7, 'S', 0, '2017-08-02 17:10:33', '2017-08-02 17:30:27', '00:00:00', '00:00:00', 0, 'ahmad', 'maulana', '', 'maulana', '1501664137.jpg'),
(1501203103, '2017-08-04 08:18:57', 'I NYOMAN SANTIASA', '', 'SIAKAD', 'Error sinkron dgn feeder dosen cpns/pns', 0, 'S', 1, '2017-08-08 10:17:39', '2017-08-16 13:39:42', '12:39:43', '12:39:29', 604, 'santiasa23', 'ahmad', '', 'ahmad', '1501805937.png'),
(1501203105, '2017-08-08 11:34:30', 'FADLI', 'D', 'SIAKAD', 'Dengan Hormat,\r\nTerkait penginputan KRS online Semester Antara 20163, beberapa dari nama nama Mahasiswa tercatat Dobel Di Absensi Kehadiran Misalnya Stambuk D10112187, D10113284, D10113284', 0, 'P', 1, '2017-08-09 08:24:58', '0000-00-00 00:00:00', '12:16:20', '12:16:17', 1502163373, 'fadli', 'ahmad', '', '', '1502163270.jpg'),
(1501203106, '2017-08-09 12:07:50', 'FADLI', 'D', 'SIAKAD', 'MOHON DI AKTIFKAN STAMBUK D10108503 NERAT ULIMAS......UNTUK PINDAH DI CETAKAN TRANSKIP NILAI', 0, 'S', 1, '2017-08-09 12:16:24', '2017-08-09 12:19:50', '10:58:50', '10:58:44', 1502255839, 'fadli', 'ahmad', '', 'ahmad', ''),
(1501203107, '2017-08-10 09:36:10', 'SIAKAD-PDPT', 'UPT.TIK', 'SIAKAD', 'Tambahkan Upload KHS ke PDPT', 0, 'S', 0, '2017-08-14 10:58:36', '2017-08-14 10:58:37', '10:58:37', '00:00:00', 2, 'ahmad', 'ahmad', '', 'ahmad', '1502328970.jpg'),
(1501203108, '2017-08-10 09:37:34', 'SIAKAD-PDPT', 'UPT.TIK', 'SIAKAD', 'Tambahkan modul upload ke PDPT untuk KRS', 0, 'S', 0, '2017-08-14 10:58:28', '2017-08-14 10:58:31', '10:58:30', '00:00:00', 5, 'ahmad', 'ahmad', '', 'ahmad', '1502329054.png'),
(1501203109, '2017-08-10 11:32:45', 'FADLI', 'D', 'SIAKAD', 'DATA ANG. 2008 YANG MAU DI CETAK TRANSKIP NILAINYA....EROR DATANYA..MHON BANTUANNYA PAK,,TERIMA KASIH', 0, 'P', 1, '2017-08-10 13:24:20', '0000-00-00 00:00:00', '16:12:10', '11:57:12', 1502340429, 'fadli', 'ahmad', '', '', '1502335965.jpg'),
(1501203110, '2017-08-10 13:24:18', 'L13112219', 'UPT.TIK', 'OTH', 'KKN a.n Adris Pryono L13112219 tidak bisa Login KKN, padahal st_kkn sdah 1', 0, 'A', 0, '2017-08-10 16:17:38', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 0, 'ahmad', 'ahmad', '', '', ''),
(1501203111, '2017-08-10 14:51:56', 'FADLI', 'D', 'SIAKAD', 'TIDAK ADA DATA DALAM TRANSKIP NILAI', 0, 'S', 1, '2017-08-10 16:12:22', '2017-08-10 16:14:34', '11:08:58', '11:08:56', 83, 'fadli', 'ahmad', '', 'ahmad', '1502347916.jpg'),
(1501203112, '2017-08-10 14:53:28', 'FADLI', 'D', 'SIAKAD', 'DATA KRS TIDAN TAMPIL', 0, 'S', 1, '2017-08-10 16:13:22', '2017-08-10 16:14:23', '11:57:07', '11:57:00', 1502348295, 'fadli', 'ahmad', '', 'ahmad', '1502348008.jpg'),
(1501203113, '2017-08-10 15:22:17', 'INNE AFRIANTI Operator S1 Teknik Sipil', 'F', 'SIAKAD', 'Tidak Bisa Input KRS \r\nSatmbuk: \r\nF11114074\r\nF11114091\r\n', 0, 'P', 1, '2017-08-10 16:14:37', '0000-00-00 00:00:00', '10:58:11', '10:46:15', 1502353276, 'opfatek2', 'ahmad', '', '', ''),
(1501203114, '2017-08-11 13:20:54', 'Maulana', 'UPT.TIK', 'OTH', 'Tes Upload File', 0, 'S', 0, '2017-08-11 13:20:57', '2017-08-11 13:36:16', '15:53:26', '15:02:16', 3948, 'maulana', 'maulana', '', 'maulana', '1502428854.jpg'),
(1501203115, '2017-08-11 15:54:05', 'Tes Maulana', 'Fakultas UPT.TIK', 'SIAKAD', 'Tes Fakultas', 0, 'S', 1, '2017-08-11 15:55:24', '2017-08-11 15:56:28', '15:56:55', '15:56:46', 1502438109, 'maulana2', 'ahmad', '', 'ahmad', '1502438045.jpg'),
(1501203116, '2017-08-14 08:31:53', 'fadil bagenda', 'A', 'PMB', 'Yth. UPT.TIK\r\nAssalamualaikum wr. wb.\r\npak ahmad sdh boleh kami meminta data mahasiswa baru FKIP?', 0, 'S', 1, '2017-08-14 10:58:44', '2017-08-14 10:58:56', '15:22:04', '15:21:59', 21, 'm.fadil', 'ahmad', '', 'ahmad', ''),
(1501203117, '2017-08-14 10:34:31', 'Aktifkan DO sudah yudisium', 'UPT.TIK', 'SIAKAD', 'B40109046', 0, 'S', 0, '2017-08-14 10:34:35', '2017-08-14 10:45:44', '10:45:44', '10:45:42', 668, 'ahmad', 'ahmad', '', 'ahmad', ''),
(1501203118, '2017-08-14 13:59:32', 'Tidak Bisa KRS dan KHS ke FEEDER', 'UPT.TIK', 'SIAKAD', 'Tidak Bisa KRS dan KHS ke FEEDER E32115338, E32115173, E32115302, E32115147', 0, 'R', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 0, 'ahmad', '', '', '', ''),
(1501203119, '2017-08-15 10:11:05', 'A11114004 Agustina Darwis', 'UPT.TIK', 'SIAKAD', 'Tidak Bisa Daftar PPL, padahal sudah isi KRS', 0, 'R', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 0, 'ahmad', '', '', '', ''),
(1501203120, '2017-08-15 11:57:36', 'fadil bagenda', 'A', 'SIAKAD', 'baganti bobotnya bgmn pak?? soalnya yg nilai c nya lalu bobotnya katanya 2.5 bukan 2', 0, 'S', 1, '2017-08-22 23:35:57', '2017-08-22 23:35:59', '23:35:59', '00:00:00', 4, 'm.fadil', 'ahmad', '', 'ahmad', ''),
(1501203121, '2017-08-15 11:58:06', 'fadil bagenda', 'A', 'SIAKAD', 'baganti bobotnya bgmn pak?? soalnya yg nilai c nya lalu bobotnya katanya 2.5 bukan 2', 0, 'S', 1, '2017-08-22 23:35:52', '2017-08-22 23:35:54', '23:35:54', '00:00:00', 4, 'm.fadil', 'ahmad', '', 'ahmad', ''),
(1501203122, '2017-08-15 11:58:53', 'fadil bagenda', 'A', 'SIAKAD', 'baganti bobotnya bgmn pak?? soalnya yg nilai c nya lalu bobotnya katanya 2.5 bukan 2', 0, 'S', 1, '2017-08-16 12:51:15', '2017-08-22 23:35:49', '23:35:49', '23:35:46', 1078, 'm.fadil', 'ahmad', '', 'ahmad', '1502769533.jpg'),
(1501203123, '2017-08-16 09:37:26', 'ARKAM', 'N', 'SIAKAD', 'di feeder ada 2 kesalahan data stambuk N10112O58 dan N10113O58 (O58 harusnya 058). namun di feeder jg sdh ada data stambuk benarnya N10112058 dan N10113058.\r\ntapi setiap sinkron nilai atau kelas dari siakad yang tampil di feeder itu stambuk yang salah bkan stambuk yang benar. sepertinya harus diedit id_feeder yang ada di siakad diarahkan ke stambuk yang benar. terima kasih', 0, 'P', 1, '2017-08-16 13:11:22', '0000-00-00 00:00:00', '13:16:18', '13:16:11', 296, 'santiasa23', 'ahmad', '', '', '1502847446.png'),
(1501203124, '2017-08-16 12:24:34', 'GINA AYU LAKSMITA, SAKINAH TANDJUMBULU, PRAYUDI SETYOWIBOWO', 'N', 'SIAKAD', 'Darurat. Tidak bisa diedit KRS semester 20162. minta registrasi terus. padahal semester 20162 sdh teregistrasi. terima kasih', 0, 'S', 1, '2017-08-16 12:52:55', '2017-08-16 13:21:50', '10:12:17', '10:12:11', 816, 'santiasa23', 'ahmad', '', 'ahmad', '1502857474.png'),
(1501203125, '2017-08-16 12:37:16', 'I NYOMAN SANTIASA', 'N', 'SIAKAD', 'upload peserta kelas dan nilai tidak mau dari siakad di semester 20162', 0, 'A', 1, '2017-08-16 13:00:00', '0000-00-00 00:00:00', '10:32:09', '10:12:58', 6192, 'santiasa23', 'ahmad', 'wawan', '', '1502858236.png'),
(1501203126, '2017-08-16 14:23:07', 'MAHASISWA FK', 'N', 'SIAKAD', 'Tampilan biodata di siakad sekarang berubah pak? pencarian tdk ada ', 0, 'S', 1, '2017-08-29 08:52:49', '2017-08-29 08:53:31', '08:53:31', '08:53:23', 40, 'santiasa23', 'ahmad', '', 'ahmad', '1502864587.png'),
(1501203127, '2017-08-16 14:24:32', 'KRS MHS', 'UPT.TIK', 'SIAKAD', 'Muncul keterangan pada saat mengambil Matakuliah KRS bahwa kelas sudah penuh,', 0, 'S', 0, '2017-08-21 22:39:08', '2017-08-29 08:52:23', '08:52:23', '08:52:19', 97, 'ahmad', 'ahmad', '', 'ahmad', ''),
(1501203128, '2017-08-31 11:26:16', 'A25110015', 'UPT.TIK', 'SIAKAD', 'Status DO ke Aktif', 0, 'R', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 0, 'ahmad', '', '', '', ''),
(1501203129, '2017-08-31 11:26:51', 'A25110007', 'UPT.TIK', 'SIAKAD', 'Status DO ke Aktif', 0, 'R', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 0, 'ahmad', '', '', '', ''),
(1501203130, '2017-08-31 12:11:34', 'ADI', 'H', 'SIAKAD', 'tidak bisa ber KRS dikarenakan data tidak terupdate k PDPT. tapi sudah ada datanya d PDPT. ', 0, 'P', 1, '2017-08-31 15:05:26', '0000-00-00 00:00:00', '15:05:44', '00:00:00', 18, 'adi-pasca', 'wawan', '', '', '1504152694.xlsx'),
(1501203131, '2017-08-31 14:24:07', 'ADI PASCASARJANA', 'H', 'SIAKAD', 'tidak bisa ber KRS', 0, 'P', 1, '2017-08-31 15:05:46', '0000-00-00 00:00:00', '15:24:56', '00:00:00', 1150, 'adi-pasca', 'wawan', '', '', '1504160647.xlsx'),
(1501203132, '2017-08-31 14:26:59', 'ADI PASCASARJANA', 'H', 'SIAKAD', 'tidak bisa ber KRS prodi agribisnis', 0, 'S', 1, '2017-08-31 15:00:11', '2017-08-31 15:25:15', '15:25:15', '15:25:01', 336, 'adi-pasca', 'wawan', '', 'wawan', '1504160819.xlsx'),
(1501203133, '2017-10-03 11:56:42', 'FADLI', 'D', 'SIAKAD', 'TIDAK BISA DI INPUT (PESAN EROR)\r\nMATA KULIAH HUKUM KEWARGANEGARAAN \r\nKODE : DKD13029\r\nHARI : JUM''AT\r\nJAM : 20:20 - 22-00\r\nKELAS : NONREGULER\r\nRUANG : BN 7 / KELAS A\r\nTidak dapat menjalankan query: insert into jadwal (id_mk,IDJADWAL,Tahun, Terjadwal, KodeFakultas, KodeJurusan, IDMK, KodeMK, NamaMK, Global, SKS, SKSHonor, IDDosen, Program, Hari, JamMulai, JamSelesai, KodeKampus, KodeRuang,kap, unip, Tanggal, Rencana, Realisasi,Keterangan,Kelas,IDPAKET, UTSTanggal, UASTanggal, SSLTanggal) values (''17334eb6-9697-4e64-9a26-90c02a3a1006'',''D10120171DKD13029RESOA'', ''20171'', ''Y'', ''D'', ''D101'', ''DKD13029D101'', ''DKD13029'', ''HUKUM KEWARGANEGARAAN'', ''N'', ''2.0'', ''2.0'', '''', ''RESO'', ''6'', ''20:20'', ''22:00'', ''D'', ''BN 7'',80, ''fadli$'', ''2017-10-03 11:46:20'', ''16'', ''16'',''A'','''','''', now(), now(), now()) \r\nDuplicate entry ''D10120171DKD13029RESOA'' for key ''IDJADWAL''', 0, 'S', 1, '2017-10-10 09:32:18', '2017-10-10 09:32:26', '09:32:26', '10:45:41', 1507076351, 'fadli', 'ahmad', '', 'ahmad', ''),
(1501203134, '2017-10-04 09:43:35', 'FADLI', 'D', 'SIAKAD', 'HILANG KELAS YANG DI EDIT KAPASITAS KELASNYA...DI MENU ADMIN FAKULTAS\r\n\r\nHILANG SETELAH DI EDIT KAPASTIAS KELASNYA', 0, 'S', 1, '2017-10-10 09:32:04', '2017-10-10 09:32:07', '09:32:07', '00:00:00', 6, 'fadli', 'ahmad', '', 'ahmad', '1507081415.jpg'),
(1501203135, '2017-10-04 10:36:49', 'ADI', 'H', 'WISUDA', 'selisih nilai,di aplikasi wisuda nilai A- berubah jadi A. ', 0, 'R', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 0, 'adi-pasca', '', '', '', ''),
(1501203136, '2017-10-06 13:26:49', 'I NYOMAN SANTIASA', 'N', 'OTH', 'Layanan TIK kemana? tampilan jadi aneh. sm sy muncul 15 keluhan tp tampilnya cm 8', 0, 'P', 1, '2017-10-10 09:31:04', '0000-00-00 00:00:00', '10:12:07', '10:03:55', 683, 'santiasa23', 'ahmad', '', '', '1507267609.png'),
(1501203137, '2017-10-10 10:54:42', 'RAJ CHANDRA', 'N', 'SIAKAD', 'select m.*,p.id_sms from mhsw m,jurusan p where m.KodeJurusan=p.Kode and m.NIM=''N10117020''\r\nUpdate Berhasil : -N10117020array(3) { ["error_code"]=> string(1) "0" ["error_desc"]=> string(0) "" ["result"]=> array(2) { ["error_code"]=> int(111) ["error_desc"]=> string(31) "Tidak ada data yang bisa diubah" } } -Kode Error= 111-Tidak ada data yang bisa diubahInput baru{"nm_pd":"RAJ CHANDRA","jk":"L","tmpt_lahir":"LUWUK","tgl_lahir":"1999-11-30","nik":"","id_wil":"186000","ds_kel":"Tondo","nm_ibu_kandung":"NI MADE KARTINI","nm_ayah":"I NENGAH SUDIASA","id_agama":"4","id_kk":"1","id_sp":"8e5d195a-0035-41aa-afef-db715a37b8da","a_terima_kps":"0","stat_pd":"A","id_kebutuhan_khusus_ayah":"0","id_kebutuhan_khusus_ibu":"0","kewarganegaraan":"ID"}array(3) { ["error_code"]=> string(1) "0" ["error_desc"]=> string(0) "" ["result"]=> array(2) { ["error_code"]=> string(3) "993" ["error_desc"]=> string(23) "Data (NIK) harus diisi." } }', 0, 'R', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 0, 'santiasa23', '', '', '', ''),
(1501203138, '2017-10-11 17:09:20', 'setiawan op PGSD', 'A', 'PDDIKTI', 'nama-nama mahasiswa yang belum terdaftar di PDDIKTI', 0, 'P', 1, '2017-10-13 10:25:24', '0000-00-00 00:00:00', '10:26:23', '10:26:23', 54, 'A401', 'ahmad', '', '', '1507712960.xlsx'),
(1501203139, '2019-06-27 16:13:08', 'MMMM', 'UPT.TIK', 'PMB', 'zxzxzxzxzx', 0, 'R', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 0, 'maulana', '', '', '', '1561623188.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Nama_Lengkap` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `ket_level` varchar(100) NOT NULL,
  `kd_div` int(2) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=272 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Nama`, `Password`, `Nama_Lengkap`, `level`, `ket_level`, `kd_div`, `divisi`, `file`) VALUES
(1, 'maulana', '*C4521723C', 'MolSyam', 0, 'Super Admin', 0, 'UPT.TIK', 'maulana.png'),
(2, 'ahmad', '*C4521723C', 'Ahmad Zuhri', 1, 'Admin', 0, 'UPT.TIK', 'ahmad.jpg'),
(3, 'irma', '*6BB4837EB', 'irma, SP', 1, 'Admin_Jurusan', 1, 'L', ''),
(4, 'widya', '*00A51F3F4', 'widya', 1, 'Admin_Jurusan', 1, '', ''),
(5, 'wardah', '*34CA9A272', 'Dr. Ir. Wardah, M.F.Sc', 1, 'Admin_Jurusan', 1, '', ''),
(6, 'Matematika', '*B0F6FDD55', 'Agusman Sahari', 1, 'Admin_Jurusan', 1, '', ''),
(7, 'AdmMTK', '*6B5EDDE56', 'Agusman Sahari', 1, 'Admin_Jurusan', 1, '', ''),
(8, 'AdmMTK', '*CC67043C7', 'Agusman Sahari', 1, 'Admin_Jurusan', 1, '', ''),
(9, 'camelia', '*37332F5B7', 'Camelia Burhan, SE, M.Si', 1, 'Admin_Jurusan', 1, '', ''),
(10, 'Kamelia', '*6BB4837EB', 'Kamelia Burhan', 1, 'Admin_Jurusan', 1, '', ''),
(11, 'iin', '*C4521723C', 'Siti Mardiawaty', 1, 'Admin_Jurusan', 1, 'N', ''),
(12, 'fikhaulya', '*57948C59A', 'Rafika Ulya Ibrahim', 1, 'Admin_Jurusan', 1, '', ''),
(13, 'agribisnisS2', '*6BB4837EB', 'Admin Magister S2', 1, 'Admin_Jurusan', 1, '', ''),
(14, 'ilmupertanianS2', '*6BB4837EB', 'Admin Magister Ilmu Pertanian', 1, 'Admin_Jurusan', 1, '', ''),
(15, 'manajemenS2', '*6BB4837EB', 'Admin Magister Manajemen S2', 1, 'Admin_Jurusan', 1, '', ''),
(16, 'administrasipublikS2', '*6BB4837EB', 'Admin Magister Ilmu Administrasi Publik S2', 1, 'Admin_Jurusan', 1, '', ''),
(17, 'magisteripaS2', '*6BB4837EB', 'Admin Magister Pend. IPA S2', 1, 'Admin_Jurusan', 1, '', ''),
(18, 'bhsinggrisS2', '*6BB4837EB', 'Admin Magister Bhs. Inggris ', 1, 'Admin_Jurusan', 1, '', ''),
(19, 'ilmupertanianS3', '*6BB4837EB', 'Ilmu Pertanian S3', 1, 'Admin_Jurusan', 1, '', ''),
(20, 'bhsindonesiaS2', '*6BB4837EB', 'Magister Pend. Bhs Indonesia S2', 1, 'Admin_Jurusan', 1, '', ''),
(21, 'wilayahpedesaanS2', '*6BB4837EB', 'Magister Pembangunan Wilayah Pedesaan S2', 1, 'Admin_Jurusan', 1, '', ''),
(22, 'alpian', '*8E3636E5F', 'alpian', 1, 'Admin_Jurusan', 1, '', ''),
(23, 'eko', '*592B56A85', 'eko apriliawati', 1, 'Admin_Jurusan', 1, '', ''),
(24, 'sulmi', '*98538B469', 'sulmi', 1, 'Admin_Jurusan', 1, '', ''),
(25, 'yusniati', '*1026D5E9F', 'yusniati', 1, 'Admin_Jurusan', 1, '', ''),
(26, 'zeylo', '*B0FD35353', 'moh. zeylo auriza', 1, 'Admin_Jurusan', 1, '', ''),
(27, 'misry', '*B7AA37AC5', 'misry boy hamid', 1, 'Admin_Jurusan', 1, '', ''),
(28, 'sumarlin', '*3C65958D9', 'sumarlin', 1, 'Admin_Jurusan', 1, '', ''),
(29, 'agrinisari', '*71EDF6822', 'agrinisari putika', 1, 'Admin_Jurusan', 1, '', ''),
(30, 'nursarinda', '*05CC55A40', 'nursarinda siama', 1, 'Admin_Jurusan', 1, '', ''),
(31, 'hesti', '*E77E05CDB', 'hesti nuryuliani', 1, 'Admin_Jurusan', 1, '', ''),
(32, 'naimah', '*549D0AD56', 'naimah', 1, 'Admin_Jurusan', 1, '', ''),
(33, 'ranita', '*6FCF4AA3C', 'ranita', 1, 'Admin_Jurusan', 1, '', ''),
(34, 'Budidaya Air', '*00A51F3F4', 'Mohamad Akbar', 1, 'Admin_Jurusan', 1, '', ''),
(35, 'Budidaya Air', '*00A51F3F4', 'Mohamad Akbar', 1, 'Admin_Jurusan', 1, '', ''),
(36, 'Budidaya Air', '*00A51F3F4', 'Mohamad Akbar', 1, 'Admin_Jurusan', 1, '', ''),
(37, 'Budidaya Air', '*00A51F3F4', 'Mohamad Akbar', 1, 'Admin_Jurusan', 1, '', ''),
(38, 'fapetkan2', '*00A51F3F4', 'Mohamad Akbar', 1, 'Admin_Jurusan', 1, '', ''),
(39, 'sanq', '*83212D003', 'I Nyoman Santiasa', 1, 'Admin_Jurusan', 1, '', ''),
(40, 'rhyna', '*90848428D', 'frisnariati', 1, 'Admin_Jurusan', 1, ' ', ''),
(41, 'iqbal', '*84B1D2166', 'andi iqbal ibrahim', 1, 'Admin_Jurusan', 1, '', ''),
(42, 'Wandy', '*A7469A5E5', 'Arwandy Putra', 1, 'Admin_Jurusan', 1, '', ''),
(43, 'PGSD', '*6BB4837EB', 'Yusdin Gagaramusu', 1, 'Admin_Jurusan', 1, '', ''),
(44, 'pascaS3SAINS', '*D8BCE2CFE', 'Erlyan', 1, 'Admin_Jurusan', 1, 'H', ''),
(45, 'A231', '*E7E697334', 'Pendidikan Matematika', 1, 'Admin_Jurusan', 1, 'A', ''),
(46, 'A241', '*3D47BB954', 'Admin A241', 1, 'Admin_Jurusan', 1, 'A', ''),
(47, 'A251', '*E6E7CAC60', 'Admin A251', 1, 'Admin_Jurusan', 1, 'A', ''),
(48, 'A221', '*F0247C58B', 'Admin A221', 1, 'Admin_Jurusan', 1, 'A', ''),
(49, 'A421', '*66AC7996C', 'Admin A421', 1, 'Admin_Jurusan', 1, 'A', ''),
(50, 'A501', '*59FDAAA87', 'Admin A501', 1, 'Admin_Jurusan', 1, 'A', ''),
(51, 'A401', '*ED57DF2E1', 'Admin A401', 1, 'Admin_Jurusan', 1, 'A', ''),
(52, 'A411', '*F4B828ED2', 'Admin A411', 1, 'Admin_Jurusan', 1, 'A', ''),
(53, 'A311', '*751C6011B', 'Admin A311', 1, 'Admin_Jurusan', 1, 'A', ''),
(54, 'A351', '*AA18D6C71', 'Pendidikan Geografi', 1, 'Admin_Jurusan', 1, 'A', ''),
(55, 'A321', '*B60F7D5BB', 'Admin A321', 1, 'Admin_Jurusan', 1, 'A', ''),
(56, 'A111', '*6D53D0DE1', 'Admin A111', 1, 'Admin_Jurusan', 1, 'A', ''),
(57, 'A121', '*A4A5D0851', 'Admin A121', 1, 'Admin_Jurusan', 1, 'A', ''),
(58, 'B101', '*6B7D58AA3', 'Admin/B101', 1, 'Admin_Jurusan', 1, 'B', ''),
(59, 'B401', '*0CB872BDB', 'Admin/B401', 1, 'Admin_Jurusan', 1, 'B', ''),
(60, 'B201', '*7B130BE83', 'Admin/B201', 1, 'Admin_Jurusan', 1, 'B', ''),
(61, 'B501', '*CB4865CD7', 'Admin/B501', 1, 'Admin_Jurusan', 1, 'B', ''),
(62, 'B301', '*1E570A06C', 'Admin/B301', 1, 'Admin_Jurusan', 1, 'B', ''),
(63, 'C101', '*DC644CB9C', 'Admin C101', 1, 'Admin_Jurusan', 1, 'C', ''),
(64, 'C201', '*84AAC12F5', 'Admin C201', 1, 'Admin_Jurusan', 1, 'C', ''),
(65, 'C200', '*6BB4837EB', 'Admin C200', 1, 'Admin_Jurusan', 1, 'C', ''),
(66, 'C301', '*6BB4837EB', 'Admin C301', 1, 'Admin_Jurusan', 1, 'C', ''),
(67, 'C300', '*6BB4837EB', 'Admin C300', 1, 'Admin_Jurusan', 1, 'C', ''),
(68, 'D101', '*5D3839BCD', 'Admin D101', 1, 'Admin_Jurusan', 1, 'D', ''),
(69, 'E321', '*AA1420F18', 'Admin Jurusan Agribisnis', 1, 'Admin_Jurusan', 1, 'E', ''),
(70, 'E281', '*3A7866BB1', 'Admin E281', 1, 'Admin_Jurusan', 1, 'E', ''),
(71, 'O121', '*6BB4837EB', 'Admin O121', 1, 'Admin_Jurusan', 1, 'O', ''),
(72, 'O271', '*6BB4837EB', 'Admin O271', 1, 'Admin_Jurusan', 1, 'O', ''),
(73, 'F441', '*D0BAA447F', 'Admin F441', 1, 'Admin_Jurusan', 1, 'F', ''),
(74, 'F230', '*6BB4837EB', 'Admin F230', 1, 'Admin_Jurusan', 1, 'F', ''),
(75, 'F331', '*E64085A1A', 'Admin F331', 1, 'Admin_Jurusan', 1, 'F', ''),
(76, 'F240', '*E64085A1A', 'Admin F240', 1, 'Admin_Jurusan', 1, 'F', ''),
(77, 'F111', '*A63736143', 'Admin F111', 1, 'Admin_Jurusan', 1, 'F', ''),
(78, 'meidy', '*BA33524E8', 'Admin F210', 1, 'Admin_Jurusan', 1, 'F', ''),
(79, 'F220', '*6BB4837EB', 'Admin F220', 1, 'Admin_Jurusan', 1, 'F', ''),
(80, 'F221', '*556A1819C', 'Admin F221', 1, 'Admin_Jurusan', 1, 'F', ''),
(81, 'G201', '*6BB4837EB', 'Admin G201', 1, 'Admin_Jurusan', 1, 'G', ''),
(82, 'G101', '*6BB4837EB', 'Admin G101', 1, 'Admin_Jurusan', 1, 'G', ''),
(83, 'G401', '*6BB4837EB', 'Admin G401', 1, 'Admin_Jurusan', 1, 'G', ''),
(84, 'G301', '*6BB4837EB', 'Admin G301', 1, 'Admin_Jurusan', 1, 'G', ''),
(85, 'G701', '*2FF37513D', 'Admin G701', 1, 'Admin_Jurusan', 1, 'G', ''),
(86, 'G501', '*6D6E93D1F', 'Admin G501', 1, 'Admin_Jurusan', 1, 'G', ''),
(87, 'suteguhpd', '*EA9A7BB77', 'I Wayan Suteguh, S.Kom', 1, 'Admin_Jurusan', 1, 'N', ''),
(88, 'L131', '*6BB4837EB', 'Admin L131', 1, 'Admin_Jurusan', 1, 'L', ''),
(89, 'L121', '*6BB4837EB', 'Admin L121', 1, 'Admin_Jurusan', 1, 'L', ''),
(90, '270272', '*81F21D915', 'Hastini', 1, 'Admin_Jurusan', 1, '', ''),
(91, 'PD1', '*00A51F3F4', 'Dr. Ridwan, SH, M.Hum', 1, 'Admin_Jurusan', 1, 'D', ''),
(92, 'pendidikan', '*6BB4837EB', 'subagpendidikan', 1, 'Admin_Jurusan', 1, 'A', ''),
(93, 'elektro', '*B42C46EEE', 'elektro', 1, 'Admin_Jurusan', 1, 'F', ''),
(94, 'sipil', '*9C328D835', 'Teknik Sipil', 1, 'Admin_Jurusan', 1, 'F', ''),
(95, 'D3sipil', '*00A51F3F4', 'D3 teknik sipil', 1, 'Admin_Jurusan', 1, 'F', ''),
(96, 'D3mesin', '*475C064A0', 'd3 teknik mesin', 1, 'Admin_Jurusan', 1, 'F', ''),
(97, 'mesin', '*2E6F714EC', 'teknik mesin', 1, 'Admin_Jurusan', 1, 'F', ''),
(98, 'elektro', '*5086846F1', 'teknik elektro', 1, 'Admin_Jurusan', 1, 'F', ''),
(99, 'kimia1', '*67C203DCD', 'kimia1', 1, 'Admin_Jurusan', 1, '', ''),
(100, 'sanq', '*6A1DBE86A', 'I Nyoman Santiasa', 1, 'Admin_Jurusan', 1, 'I', ''),
(101, 'D3listrik', '*CC67043C7', 'Teknik Listrik', 1, 'Admin_Jurusan', 1, 'F', ''),
(102, 'PWK', '*4BBCB4FDE', 'Teknik PWK', 1, 'Admin_Jurusan', 1, 'F', ''),
(103, 'Arsitektur', '*64FC9C3A1', 'teknikarsitektur', 1, 'Admin_Jurusan', 1, 'F', ''),
(104, 'sipil', '*363640F86', 'sipil', 1, 'Admin_Jurusan', 1, 'F', ''),
(105, 'A351345', '*05D84ED74', 'Pendidikan Geografi', 1, 'Admin_Jurusan', 1, 'A', ''),
(106, 'f441tes', '*6BB4837EB', 'elektro', 1, 'Admin_Jurusan', 1, '', ''),
(107, 'IT', '*043625FA5', 'teknik informatika', 1, 'Admin_Jurusan', 1, 'F', ''),
(108, 'informatics', '*35574DE8B', 'teknik nformatika', 1, 'Admin_Jurusan', 1, 'F', ''),
(109, 'INFORMATIKA001', '*00A51F3F4', 'informatika001', 1, 'Admin_Jurusan', 1, 'F', ''),
(110, 'fita', '*86B78CDB5', 'Nurfita', 1, 'Admin_Jurusan', 1, 'O', ''),
(111, 'ahmadA111', '*3620754A9', 'Ahmad TES', 1, 'Admin_Jurusan', 1, 'A', ''),
(112, 'ahmadm', '*D555DCE3B', 'Ahmad TES', 1, 'Admin_Jurusan', 1, 'K', ''),
(113, 'd3sipil', '*00A51F3F4', 'd3sipil', 1, 'Admin_Jurusan', 1, 'F', ''),
(114, 'mriyadi', '*BD5855F2B', 'Mohammad Riyadi', 1, 'Admin_Jurusan', 1, '', ''),
(115, 'Geologi', '*6E4421780', 'teknik geologi', 1, 'Admin_Jurusan', 1, 'F', ''),
(116, 'D3sipil', '*6BB4837EB', 'D3sipil', 1, 'Admin_Jurusan', 1, 'F', ''),
(117, 'fika', '*5ADEECE31', 'Rafika Ulya, S.Pd.', 1, 'Admin_Jurusan', 1, 'N', ''),
(118, 'cia', '*6C874D449', 'Fauziah Agni, SKM', 1, 'Admin_Jurusan', 1, 'N', ''),
(119, 'yuni', '*6757F1CB5', 'Sri Wahyuni Tahir, S.KM', 1, 'Admin_Jurusan', 1, 'P', ''),
(120, 'agribisnis', '*AEE2B534B', 'Pengelola Agribisnis', 1, 'Admin_Jurusan', 1, 'E', ''),
(121, 'agroteknologi', '*3E3C6B3FD', 'Pengelola Agroteknologi', 1, 'Admin_Jurusan', 1, 'E', ''),
(122, 'artista', '*B900629A0', 'Artista', 1, 'Admin_Jurusan', 1, '', ''),
(123, 's3ip', '*D046EEE1B', 'Doktoral Ilmu Pertanian', 1, 'Admin_Jurusan', 1, 'H', ''),
(124, 'elektrobaru', '*CD8F920E7', 'Admin Elektro', 1, 'Admin_Jurusan', 1, '', ''),
(125, 'ismarannu', '*0CBEC2B9F', 'Ismarannu, S.E.', 1, 'Admin_Jurusan', 1, 'P', ''),
(126, 'rahmat', '*1538D22B1', 'Rahmat Hidayat P., S.KM', 1, 'Admin_Jurusan', 1, 'P', ''),
(127, 'pascamanajemen', '*3F6F00C61', 'DONI', 1, 'Admin_Jurusan', 1, '', ''),
(128, 'pascaindonesia', '*A5F53FB27', 'SUMARLIN', 1, 'Admin_Jurusan', 1, '', ''),
(129, 'pascainggris', '*7A81EA291', 'ikbal ahok', 1, 'Admin_Jurusan', 1, '', ''),
(130, 'pascahukum', '*558E4E07A', 'udin', 1, 'Admin_Jurusan', 1, '', ''),
(131, 'pasca-map', '*6D9C936CC', 'mama eko', 1, 'Admin_Jurusan', 1, '', ''),
(132, 'pasca-ipa', '*9A327F923', 'ayu', 1, 'Admin_Jurusan', 1, '', ''),
(133, 'ahmadtesfkik', '*3620754A9', 'Ahmad Zuhri', 1, 'Admin_Jurusan', 1, 'P', ''),
(134, 'fandu', '*90DC44490', 'Fandu Pratama Lakuana', 1, 'Admin_Jurusan', 1, '', ''),
(135, 'ahmadA121', '*3620754A9', 'Ahmad Tes', 1, 'Admin_Jurusan', 1, '', ''),
(136, 'F551', '*11A53C175', 'adminf551', 1, 'Admin_Jurusan', 1, 'F', ''),
(137, 'pandu_jur', '*F0A536902', 'pandu_jur', 1, 'Admin_Jurusan', 1, '', ''),
(138, 'warda', '*F54815594', 'Warda', 1, 'Admin_Jurusan', 1, 'N', ''),
(139, 'usria', '*DA2CD9C15', 'Nur Usria, Amd.Kep', 1, 'Admin_Jurusan', 1, 'N', ''),
(140, 'irawana', '*97EE1B11E', 'Irawana', 1, 'Admin_Jurusan', 1, 'N', ''),
(141, 'suciana', '*A090B5348', 'Suciana, S.Kep', 1, 'Admin_Jurusan', 1, 'N', ''),
(142, 'wulandari', '*B12285852', 'Eni Wulandari', 1, 'Admin_Jurusan', 1, 'N', ''),
(143, 'zulmi', '*2ED1C8BB4', 'Zulmi Lestari', 1, 'Admin_Jurusan', 1, 'N', ''),
(144, 'indri', '*6B5EDDE56', 'Indri Sari', 1, 'Admin_Jurusan', 1, 'N', ''),
(145, 'nurmusliha', '*6B5EDDE56', 'Nurmusliha', 1, 'Admin_Jurusan', 1, 'N', ''),
(146, 'afrilin', '*40414FDA0', 'Afrilin Chistina', 1, 'Admin_Jurusan', 1, 'N', ''),
(147, 'jamila', '*C302917AB', 'Jamila', 1, 'Admin_Jurusan', 1, 'N', ''),
(148, 'anggara', '*49238E8CB', 'Ary Anggara', 1, 'Admin_Jurusan', 1, 'N', ''),
(149, 'yulianti', '*D13B79390', 'Yulianti Mansyur', 1, 'Admin_Jurusan', 1, 'N', ''),
(150, 'rama', '*7E7EC8ADE', 'Moh. Ramadhan', 1, 'Admin_Jurusan', 1, 'N', ''),
(151, 'pandutik', '*90DC44490', 'Fandu-TIK', 1, 'Admin_Jurusan', 1, '', ''),
(152, 'pascamatematika', '*02705B52C', 'samsudin', 1, 'Admin_Jurusan', 1, '', ''),
(153, 'pascasejarah', '*08856586E', 'fuji', 1, 'Admin_Jurusan', 1, '', ''),
(154, 'pascaMPWP', '*AB88D86E6', 'pian', 1, 'Admin_Jurusan', 1, '', ''),
(155, 'pascaakuntansi', '*7C85285B5', 'rahman', 1, 'Admin_Jurusan', 1, '', ''),
(156, 'pascatekniksipil', '*5072F650A', 'ika', 1, 'Admin_Jurusan', 1, '', ''),
(157, 'pascaagribisnis', '*BD25FFEBD', 'medika', 1, 'Admin_Jurusan', 1, '', ''),
(158, 'PascaIIP', '*10B3BBBA4', 'tata', 1, 'Admin_Jurusan', 1, '', ''),
(159, 'pascailmusosial', '*D269CEF0C', 'jirin', 1, 'Admin_Jurusan', 1, '', ''),
(160, 'pascaekonomi', '*9A1AE5A0B', 'yana', 1, 'Admin_Jurusan', 1, '', ''),
(161, 'pascailmupertanian', '*D534AD402', 'boy', 1, 'Admin_Jurusan', 1, '', ''),
(162, 'pascaips', '*C55324559', 'fuji', 1, 'Admin_Jurusan', 1, '', ''),
(163, 'iqbal', '*E89DFEF45', 'Moh. Iqbal', 1, 'Admin_Jurusan', 1, 'N', ''),
(164, 'pascaMAP', '*E0C562388', 'MELISA', 1, 'Admin_Jurusan', 1, 'H', ''),
(165, 'saharuddin', '*F4B828ED2', 'Saharuddin', 1, 'Admin_Jurusan', 1, '', ''),
(166, 'hasma', '*6A7A490FB', 'Siti Hasmawati', 1, 'Admin_Jurusan', 1, 'O', ''),
(167, 'siti', '*6A7A490FB', 'Siti Hasmawati', 1, 'Admin_Jurusan', 1, 'O', ''),
(168, 'rannu', '*CBB0AEB11', 'Ismarannu, S.E.', 1, 'Admin_Jurusan', 1, 'N', ''),
(169, 'pascatehnik', '*F33ADA25B', 'hadija', 1, 'Admin_Jurusan', 1, 'H', ''),
(170, 'pascaMTK', '*048B33D23', 'JANWAR ZAMZAH', 1, 'Admin_Jurusan', 1, 'H', ''),
(171, 'aji', '*F8C871D6C', 'Jims', 1, 'Admin_Fakultas', 1, 'J', ''),
(172, 'fahut', '*76A19B654', 'fahut', 1, 'Admin_Fakultas', 1, 'L', ''),
(173, 'AdmFMIPA', '*AD086F8F5', 'Dedy Farhamsah', 1, 'Admin_Fakultas', 1, 'G', ''),
(174, 'masbro', '*B166717EB', 'Saiful Bachri, S.Kom', 1, 'Admin_Fakultas', 1, 'D', ''),
(175, 'santiasa23', '*4F6BF02C9', 'I Nyoman Santiasa', 1, 'Admin_Fakultas', 1, 'N', ''),
(176, 'patra', '*A31208200', 'Dan Patra', 1, 'Admin_Fakultas', 1, '', ''),
(177, 'patra', '*A31208200', 'Dan Patra', 1, 'Admin_Fakultas', 1, '', ''),
(178, 'fapetkan1', '*2D44FC1BB', 'Afandi', 1, 'Admin_Fakultas', 1, '', ''),
(179, 'Budidaya Air', '*00A51F3F4', 'Mohamad Akbar', 1, 'Admin_Fakultas', 1, ' ', ''),
(180, 'ahmadz', '*3620754A9', 'ahmadz', 1, 'Admin_Fakultas', 1, 'N', ''),
(181, 'fadli', '*A0E5A3B40', 'PENGELOLA SIAKAD FAK.HUKUM', 1, 'Admin_Fakultas', 1, 'D', 'fadli.jpg'),
(182, 'Ridwan', '*CC67043C7', 'Ridwan Tahir', 1, 'Admin_Fakultas', 1, '', ''),
(183, 'rina', '*6F32F305F', 'Frisnariati', 1, 'Admin_Fakultas', 1, '', ''),
(184, 'jokosantoso', '*D0DEF10D6', 'Joko Santoso', 1, 'Admin_Fakultas', 1, 'D', ''),
(185, 'salamdj', '*03E5FA50B', 'Nursalam', 1, 'Admin_Fakultas', 1, '', ''),
(186, 'salamdj', '*03E5FA50B', 'Nursalam, SP, MSi', 1, 'Admin_Fakultas', 1, '', ''),
(187, 'mrdaus', '*90250C99A', 'Ahmad Firdaus, S.Kom', 1, 'Admin_Fakultas', 1, '', ''),
(188, 'sofyan', '*3FE7E7814', 'Sofyan', 1, 'Admin_Fakultas', 1, 'D', ''),
(189, 'wd2faperta', '*59797C91F', 'Wakil dekan Bidang Akademik Faperta', 1, 'Admin_Fakultas', 1, 'E', ''),
(190, 'wd2faperta', '*59797C91F', 'Wakil dekan Bidang Akademik Faperta', 1, 'Admin_Fakultas', 1, 'E', ''),
(191, 'opfatek1', '*7AF0CD2F6', 'Operator FATEK 1', 1, 'Admin_Fakultas', 1, 'F', ''),
(192, 'opfisip1', '*00AB68065', 'Operator FISIP 1', 1, 'Admin_Fakultas', 1, 'B', ''),
(193, 'ofp1', '*3F8CE287A', 'Operator FAPERTA 1', 1, 'Admin_Fakultas', 1, 'E', ''),
(194, 'ofp2', '*6BB4837EB', 'Operator FAPERTA 2', 1, 'Admin_Fakultas', 1, 'E', ''),
(195, 'opfmipa1', '*EF8CFB1C4', 'Operator FMIPA 1', 1, 'Admin_Fakultas', 1, 'G', ''),
(196, 'asril', '*088A95A61', 'Asril Adjis, Spt. MP', 1, 'Admin_Fakultas', 1, 'O', ''),
(197, 'map', '*45E699183', 'Magister Administrasi Publik', 1, 'Admin_Fakultas', 1, '', ''),
(198, 'mih', '*7E21819D8', 'Magister Ilmu Hukum', 1, 'Admin_Fakultas', 1, '', ''),
(199, 'hasbi', '*6A7A490FB', 'hasbi', 1, 'Admin_Fakultas', 1, '', ''),
(200, ' irwansyam', '*0D2ECCBAF', 'mohammad irwan syam', 1, 'Admin_Fakultas', 1, '', ''),
(201, 'irwansyam', '*0D2ECCBAF', 'mohammad irwan syam', 1, 'Admin_Fakultas', 1, '', ''),
(202, 'irwansyam', '*0D2ECCBAF', 'mohammad irwan syam', 1, 'Admin_Fakultas', 1, '', ''),
(203, 'irwansyam', '*0D2ECCBAF', 'mohammad irwan syam', 1, 'Admin_Fakultas', 1, '', ''),
(204, 'afandi', '*2D44FC1BB', 'Afandi, S.Pt, M.Sc', 1, 'Admin_Fakultas', 1, 'O', ''),
(205, 'op4', '*F739349DA', 'Srifujiyati', 1, 'Admin_Fakultas', 1, ' ', ''),
(206, 'op4', '*2A032F7C5', 'Srifujiyati', 1, 'Admin_Fakultas', 1, '', ''),
(207, 'ferdian', '*4924257FD', 'Ferdian', 1, 'Admin_Fakultas', 1, 'D', ''),
(208, 'syahril', '*100E1F633', 'Mohamad Syahril', 1, 'Admin_Fakultas', 1, 'O', ''),
(209, 'juniandri', '*E08C7BA67', 'Juniandri, S.Pt.,MP', 1, 'Admin_Fakultas', 1, 'O', ''),
(210, 'wadekakademik', '*6BB4837EB', 'Dr. Ridwan Tahir, SH.,M.Hum', 1, 'Admin_Fakultas', 1, 'D', ''),
(211, 'fahutnonreg', '*6BB4837EB', 'Admin FAHUT Nonreg', 1, 'Admin', 1, 'L', ''),
(212, 'Rifai', '*9DC1D9CED', 'Moh.Rifai', 1, 'Admin_Fakultas', 1, 'D', ''),
(213, 'opfatek2', '*64AAF3832', 'Operator Fatek 2', 1, 'Admin_Fakultas', 1, 'F', ''),
(214, 'deviandriani', '*97EF97BDE', 'Deviandriani', 1, 'Admin_Fakultas', 1, 'A', ''),
(215, 'm.fadil', '*EFFB0F383', 'Muhammad Fadil', 1, 'Admin_Fakultas', 1, 'A', ''),
(216, 'fitri', '*6B9EF125F', 'Fitri', 1, 'Admin_Fakultas', 1, 'A', ''),
(217, 'wd2faperta', '*59797C91F', 'Wakil dekan Bidang Akademik Faperta', 1, 'Admin_Fakultas', 1, 'E', ''),
(218, 'deiintan', '*B206E11BC', 'Dei Intan, S.Pd', 1, 'Admin_Fakultas', 1, 'O', ''),
(219, 'ahmadza', '*B166717EB', 'Ahmad Uji Coba', 1, 'Admin_Fakultas', 1, 'O', ''),
(220, 'parlin', '*823CCBA37', 'Parlin, S.Kom', 1, 'Admin_Fakultas', 1, 'E', ''),
(221, 'ahmadza', '*6BB4837EB', 'Ahmad Uji Coba', 1, 'Admin_Fakultas', 1, 'E', ''),
(222, 'ahmadf', '*D226D5F37', 'Ahmad Uji Coba', 1, 'Admin_Fakultas', 1, 'B', ''),
(223, 'wahyu', '*5FC200DC6', 'Wahyu Pratama, SH', 1, 'Admin_Fakultas', 1, 'O', ''),
(224, 'f441admin', '*6BB4837EB', 'adnan', 1, 'Admin_Fakultas', 1, 'F', ''),
(225, 'annisa', '*8113441BE', 'Annisa', 1, 'Admin_Fakultas', 1, 'A', ''),
(226, 'samdevi', '*70323178D', 'Samdevi', 1, 'Admin_Fakultas', 1, 'A', ''),
(227, 'zainal', '*100E1F633', 'Zainal, S.Pt.,M.Si', 1, 'Admin_Fakultas', 1, 'O', ''),
(228, 'mohal', '*33996DB53', 'Moh. Ansyar', 1, 'Admin_Fakultas', 1, 'L', ''),
(229, 'syamsultan', '*04FB29DD6', 'Drs. Syamsu, M.Si', 1, 'Admin_Fakultas', 1, 'A', ''),
(230, 'mipa2', '*49532A049', 'Admin MIPA', 1, 'Admin_Fakultas', 1, 'G', ''),
(231, 'k2touna', '*BCADBDF2D', 'Admin Kampus II Touna', 1, 'Admin_Fakultas', 1, 'K2T', ''),
(232, 'inriani', '*5B44444FE', 'Inriani', 1, 'Admin_Fakultas', 1, 'A', ''),
(233, 'hair', '*D2710F000', 'Hair', 1, 'Admin_Fakultas', 1, 'A', ''),
(234, 'nurgan', '*715A37AFD', 'nurgan', 1, 'Admin_Fakultas', 1, 'A', ''),
(235, 'op5', '*4D5166CC9', 'fak', 1, 'Admin_Fakultas', 1, '', ''),
(236, 'ahmadtesfkip', '*3620754A9', 'Ahmad Zuhri', 1, 'Admin_Fakultas', 1, 'A', ''),
(237, 'reni', '*E7FC0E74F', 'Reni ', 1, 'Admin_Fakultas', 1, 'A', ''),
(238, 'risno', '*2C8991ED4', 'Risno', 1, 'Admin_Fakultas', 1, 'A', ''),
(239, 'fanduk', '*2B567A0CF', 'Fandu Pratama', 1, 'Admin_Fakultas', 1, 'N', ''),
(240, 'fandutek', '*E6DA8A36B', 'fandutek', 1, 'Admin_Fakultas', 1, 'F', ''),
(241, 'bidakfaperta', '*7F9B4C645', 'Wadek Bidak Faperta', 1, 'Admin_Fakultas', 1, 'E', ''),
(242, 'wansyah', '*3AE9E1DB5', 'Wansyah', 1, 'Admin_Fakultas', 1, 'K2M', ''),
(243, 'wawo', '*53FB59EB7', 'Wawo', 1, 'Admin_Fakultas', 1, 'K2M', ''),
(244, 'vony', '*18F86E3B8', 'Vony', 1, 'Admin_Fakultas', 1, 'A', ''),
(245, 'adi-pasca', '*A5B117533', 'Adi Rosman', 1, 'Admin_Fakultas', 1, 'H', ''),
(246, 'ikbal-fekon', '*952F0955C', 'ikbal', 1, 'Admin_Fakultas', 1, 'C', ''),
(247, 'andry-fekon', '*E9E312EF3', 'andrya', 1, 'Admin_Fakultas', 1, 'C', ''),
(248, 'meidhi', '*8EDC57522', 'Pak Medianto', 1, 'Admin_Fakultas', 1, 'C', ''),
(249, 'azhar', '*25613342D', 'Azhar', 1, 'Admin_Fakultas', 1, 'O', ''),
(250, 'fandufisib', '*E6CC90B87', 'fandufisib', 1, 'Admin_Fakultas', 1, 'B', ''),
(251, 'soleh', '*1E11653F5', 'Ahmat Solehudin', 1, 'Admin_Fakultas', 1, 'O', ''),
(252, 'fida', '*ECA0D4B57', 'Fida', 1, 'Admin_Fakultas', 1, 'K2M', ''),
(253, 'sukma', '*28DBA730E', 'Sukma', 1, 'Admin_Fakultas', 1, 'K2M', ''),
(254, 'sulfiana', '*4666E3736', 'sulfiana', 1, 'Admin_Fakultas', 1, 'K2M', ''),
(255, 'sudin', '*7122748DE', 'Samsudin, S.Sos', 1, 'Admin_Fakultas', 1, 'O', ''),
(256, 'shanaz', '*ACB547E00', 'Shanaz', 1, 'Admin_Fakultas', 1, 'C', ''),
(257, 'wadek1fisip', '*3297B32D8', 'Wadek Bidang Akademik FISIP', 1, 'Admin_Fakultas', 1, 'B', ''),
(258, 'sabiha', '*6AE3864AD', 'Sabiha', 1, 'Admin_Fakultas', 1, 'B', ''),
(259, 'herman', '*16ED61265', 'Herman', 1, 'Admin_Fakultas', 1, 'B', ''),
(260, 'wiwiwinarti', '*98211209C', 'Wiwi winarti', 1, 'Admin_Fakultas', 1, 'B', ''),
(261, 'ranifisip', '*C8D507D0A', 'Rani', 1, 'Admin_Fakultas', 1, 'B', ''),
(262, 'aanibrahim', '*338F4109D', 'Aan Ibrahim', 1, 'Admin_Fakultas', 1, 'B', ''),
(263, 'ofp2', '*897AE177A', 'ofp2', 1, 'Admin_Fakultas', 1, 'E', ''),
(264, '_', '*07FF1CE9B', '', 1, 'Admin_Fakultas', 1, 'F', ''),
(265, 'santiasa24', '*4F6BF02C9', 'I Nyoman Santiasa', 1, 'Admin_Fakultas', 1, 'P', ''),
(266, 'mayang', '*33B5FF46B', 'Mayang Zulika', 1, 'Admin', 0, 'UPT.TIK', ''),
(267, 'yayat', '*CF29E2B66', 'Moh. Hidayat, S.Kom', 1, 'Admin', 0, 'UPT.TIK', ''),
(268, 'fandu', '*33B5FF46B', 'Fandu', 1, 'Admin', 0, 'UPT.TIK', ''),
(269, 'wawan', '*33B5FF46B', 'Rahmad Kurniawan', 1, 'Admin', 0, 'UPT.TIK', ''),
(270, 'rocky', '*33B5FF46B', 'Rocky Rotikan', 1, 'Admin', 0, 'UPT.TIK', ''),
(271, 'maulana2', '*C4521723C', 'Maulana Syamsuri', 1, 'Admin', 1, 'Fakultas UPT.TIK', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

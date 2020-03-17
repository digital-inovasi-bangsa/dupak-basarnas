/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 100113
Source Host           : 127.0.0.1:3306
Source Database       : dupak

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2017-04-03 10:23:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kat_jab` int(11) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(255) DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_jabatan`),
  KEY `id_kat_jab` (`id_kat_jab`),
  CONSTRAINT `jabatan_ibfk_1` FOREIGN KEY (`id_kat_jab`) REFERENCES `kat_jab` (`id_kat_jab`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES ('8', '1', 'Tupok Bidan Pelaksana (II/b-II/d)', 'baim', '2017-01-13 10:03:44', null, '2017-02-01 23:04:53');
INSERT INTO `jabatan` VALUES ('9', '1', 'Bidan Pelaksana Lanjutan (III/a-III/b)', 'baim', '2017-01-13 10:03:58', null, '2017-02-01 23:04:54');
INSERT INTO `jabatan` VALUES ('10', '1', 'Bidan Penyelia (III/c-III/d)', 'baim', '2017-01-13 10:04:10', null, '2017-02-01 23:04:54');
INSERT INTO `jabatan` VALUES ('11', '6', '-', '-', '2017-01-14 23:02:45', null, '2017-02-01 22:25:30');
INSERT INTO `jabatan` VALUES ('12', '2', 'Dokter Pelaksana', 'baim', '2017-02-19 22:28:05', null, '2017-02-19 22:28:05');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` varchar(255) NOT NULL,
  `id_kat_jab` int(11) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('21', '2', 'Penyembuhan penyakit');
INSERT INTO `kategori` VALUES ('22', '2', 'Pemulihan kesehatan akibat penyakit');
INSERT INTO `kategori` VALUES ('23', '2', 'Peningkatan derajat kesehatan masyarakat dan pencegahan penyakit');
INSERT INTO `kategori` VALUES ('24', '2', 'Pembuatan catatan medik untuk pasien rawat jalan dan rawat inap');
INSERT INTO `kategori` VALUES ('25', '2', 'Pelayanan kesehatan lainnya untuk masyarakat');
INSERT INTO `kategori` VALUES ('26', '2', 'Pembinaan peran serta masyarakat dalam rangka kemandirian di bidang kesehatan. Melakukan kaderisasi masyarakat dalam bidang kesehatan');
INSERT INTO `kategori` VALUES ('27', '2', 'Pengajar/pelatih yang berkaitan dengan bidang kesehatan ');
INSERT INTO `kategori` VALUES ('A', '1', 'Melaksanakan pengkajian kepada klien');
INSERT INTO `kategori` VALUES ('B', '1', 'Melakukan pengambilan bahan laboratorium');
INSERT INTO `kategori` VALUES ('C', '1', 'Melaksanakan pemeriksaan laboratorium');
INSERT INTO `kategori` VALUES ('D', '1', 'Menegakkan diagnosa kebidanan');
INSERT INTO `kategori` VALUES ('E', '1', 'Melaksanakan perencanaan asuhan kebidanan');
INSERT INTO `kategori` VALUES ('F', '1', 'Melaksanakan persiapan alat dan obat');
INSERT INTO `kategori` VALUES ('G', '1', 'Melaksanakan asuhan kebidanan');
INSERT INTO `kategori` VALUES ('H', '1', 'Melakukan KIE pada');
INSERT INTO `kategori` VALUES ('I', '1', 'Melaksanakan kolaborasi dengan tim kesehatan lain');
INSERT INTO `kategori` VALUES ('J', '1', 'Melaksanakan rujukan ');
INSERT INTO `kategori` VALUES ('K', '1', 'Melaksanakan evaluasi asuhan kebidanan ');
INSERT INTO `kategori` VALUES ('L', '1', 'Melakukan dokumentasi pada asuha kebidanan');
INSERT INTO `kategori` VALUES ('M', '1', 'Melaksanakan pelayanan kesehatan masyarakat ');

-- ----------------------------
-- Table structure for kat_bln
-- ----------------------------
DROP TABLE IF EXISTS `kat_bln`;
CREATE TABLE `kat_bln` (
  `id_kat_bln` varchar(225) NOT NULL,
  `id_kat_jab` int(11) DEFAULT NULL,
  `kat_bln` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kat_bln`),
  KEY `id_kat_jab` (`id_kat_jab`),
  CONSTRAINT `kat_bln_ibfk_1` FOREIGN KEY (`id_kat_jab`) REFERENCES `kat_jab` (`id_kat_jab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kat_bln
-- ----------------------------
INSERT INTO `kat_bln` VALUES ('katbln_1', '1', 'Pendidikan formal dan mendapat gelar/ijazah');
INSERT INTO `kat_bln` VALUES ('katbln_10', '1', 'Membuat karya tulis /karya ilmiah bidang kesehatan');
INSERT INTO `kat_bln` VALUES ('katbln_11', '1', 'Menerjemahkan/menyadur buku dan bahan lainnya di bidang kebidanan');
INSERT INTO `kat_bln` VALUES ('katbln_12', '1', 'Membimbing bidan di bawah jenjang jabatannya');
INSERT INTO `kat_bln` VALUES ('katbln_13', '1', 'Membuat buku pedoman/petunjuk teknis dibidang kebidanan');
INSERT INTO `kat_bln` VALUES ('katbln_14', '1', 'Mengembangkan teknologi tepat guna di bidang kebidanan');
INSERT INTO `kat_bln` VALUES ('katbln_2', '1', 'Mengikuti pendidikan dan pelatihan fungsional dan mendapat Surat Tanda Tamat Pendidikan dan Pelatihan (STTPL)');
INSERT INTO `kat_bln` VALUES ('katbln_3', '1', 'Mengajar/melatih yang berkaitan dengan bidang kebidanan');
INSERT INTO `kat_bln` VALUES ('katbln_4', '1', 'Mengikuti kegiatan seminar/lokakarya dalam bidang kesehatan');
INSERT INTO `kat_bln` VALUES ('katbln_5', '1', 'Menjadi anggota organisasi profesi bidan');
INSERT INTO `kat_bln` VALUES ('katbln_6', '1', 'Menjadi anggota tim penilai jabatan fungsional bidan');
INSERT INTO `kat_bln` VALUES ('katbln_7', '1', 'Memperoleh gelar kesarjanaan lainnya.');
INSERT INTO `kat_bln` VALUES ('katbln_8', '1', 'Perolehan penghargaan/tanda jasa');
INSERT INTO `kat_bln` VALUES ('katbln_9', '1', 'Menjadi anggota tim penilai karya-karya yang berkaitan dengan advokasi, penggalangan dukungan sosial, pemberdayaan masyarakat');

-- ----------------------------
-- Table structure for kat_jab
-- ----------------------------
DROP TABLE IF EXISTS `kat_jab`;
CREATE TABLE `kat_jab` (
  `id_kat_jab` int(11) NOT NULL AUTO_INCREMENT,
  `kat_jab` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(225) DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kat_jab`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kat_jab
-- ----------------------------
INSERT INTO `kat_jab` VALUES ('1', 'Bidan', null, '2017-02-02 22:24:22', 'baim', '2017-02-02 22:29:07');
INSERT INTO `kat_jab` VALUES ('2', 'Dokter', 'baim', '2017-02-02 22:24:41', null, '2017-02-02 22:24:41');
INSERT INTO `kat_jab` VALUES ('3', 'Perawat', 'baim', '2017-02-05 21:36:29', null, '2017-02-05 21:36:29');
INSERT INTO `kat_jab` VALUES ('4', 'Apoteker', 'baim', '2017-02-05 21:36:47', null, '2017-02-05 21:36:47');
INSERT INTO `kat_jab` VALUES ('5', 'Labkes', 'baim', '2017-02-05 21:37:03', null, '2017-02-05 21:37:03');
INSERT INTO `kat_jab` VALUES ('6', '-', null, '2017-02-02 22:24:22', null, '2017-02-02 22:24:22');

-- ----------------------------
-- Table structure for kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE `kegiatan` (
  `id_sub_kategori` varchar(255) DEFAULT NULL,
  `id_kegiatan` varchar(255) NOT NULL,
  `kegiatan` varchar(255) DEFAULT NULL,
  `kali` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`),
  KEY `id_sub_kategori` (`id_sub_kategori`),
  CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`id_sub_kategori`) REFERENCES `sub_kategori` (`id_sub_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kegiatan
-- ----------------------------
INSERT INTO `kegiatan` VALUES ('21.1', '21.1.1', 'Rawat jalan tingkat pertama', '0.016');
INSERT INTO `kegiatan` VALUES ('21.1', '21.1.2', 'Konsul pertama', '0.022');
INSERT INTO `kegiatan` VALUES ('21.2', '21.2.1', 'Rawat jalan tingkat pertama', '0.03');
INSERT INTO `kegiatan` VALUES ('21.2', '21.2.2', 'Konsul pertama', '0.04');
INSERT INTO `kegiatan` VALUES ('21.3', '21.3.1', 'Melakukan pelayanan spesialis konsultan', '0.06');
INSERT INTO `kegiatan` VALUES ('21.4', '21.4.1', 'Tingkat sederhana', '0.05');
INSERT INTO `kegiatan` VALUES ('21.4', '21.4.2', 'Tingkat sedang', '0.1');
INSERT INTO `kegiatan` VALUES ('21.4', '21.4.3', 'Kompleks tingkat I', '0.3');
INSERT INTO `kegiatan` VALUES ('21.4', '21.4.4', 'Kompleks tingkat II', '0.6');
INSERT INTO `kegiatan` VALUES ('21.4', '21.4.5', 'Kompleks tingkat III', '1');
INSERT INTO `kegiatan` VALUES ('21.5', '21.5.1', 'Tingkat sederhana', '0.05');
INSERT INTO `kegiatan` VALUES ('21.5', '21.5.2', 'Tingkat sedang', '0.1');
INSERT INTO `kegiatan` VALUES ('21.5', '21.5.3', 'Kompleks tingkat I', '0.3');
INSERT INTO `kegiatan` VALUES ('21.5', '21.5.4', 'Kompleks tingkat II', '0.6');
INSERT INTO `kegiatan` VALUES ('21.5', '21.5.5', 'Kompleks tingkat III', '1');
INSERT INTO `kegiatan` VALUES ('21.6', '21.6.1', 'Melakukan tindakan medik spesialistik konsultan', '0.06');
INSERT INTO `kegiatan` VALUES ('21.7', '21.7.1', 'Tingkat sederhana', '0.04');
INSERT INTO `kegiatan` VALUES ('21.7', '21.7.2', 'Tingkat sedang', '0.07');
INSERT INTO `kegiatan` VALUES ('21.7', '21.7.3', 'Kompleks tingkat I', '0.13');
INSERT INTO `kegiatan` VALUES ('21.7', '21.7.4', 'Kompleks tingkat II', '0.4');
INSERT INTO `kegiatan` VALUES ('21.8', '21.8.1', 'Melakukan kunjungan (visit) pada pasien rawat inap', '0.02');
INSERT INTO `kegiatan` VALUES ('22.1', '22.1.1', 'Tingkat sederhana', '0.014');
INSERT INTO `kegiatan` VALUES ('22.1', '22.1.2', 'Tingkat sedang', '0.08');
INSERT INTO `kegiatan` VALUES ('22.1', '22.1.3', 'Kompleks tingkat I', '0.05');
INSERT INTO `kegiatan` VALUES ('22.1', '22.1.4', 'Kompleks tingkat II', '0.3');
INSERT INTO `kegiatan` VALUES ('22.2', '22.2.1', 'Tingkat sederhana', '0.02');
INSERT INTO `kegiatan` VALUES ('22.2', '22.2.2', 'Tingkat sedang', '0.07');
INSERT INTO `kegiatan` VALUES ('22.2', '22.2.3', 'Kompleks tingkat I', '0.05');
INSERT INTO `kegiatan` VALUES ('22.2', '22.2.4', 'Kompleks tingkat II', '0.3');
INSERT INTO `kegiatan` VALUES ('23.1', '23.1.1', 'Melakukan pemeliharaan kesehatan ibu', '0.008');
INSERT INTO `kegiatan` VALUES ('23.2', '23.2.1', 'Melakukan pemeliharaan kesehatan bayi dan balita', '0.008');
INSERT INTO `kegiatan` VALUES ('23.3', '23.3.1', 'Melakukan pemeliharaan kesehatan anak', '0.008');
INSERT INTO `kegiatan` VALUES ('23.4', '23.4.1', 'Melakukan pelayanan KB', '0.008');
INSERT INTO `kegiatan` VALUES ('23.5', '23.5.1', 'Melakukan pelayanan imunisasi', '0.006');
INSERT INTO `kegiatan` VALUES ('23.6', '23.6.1', 'Melakukan pelayanan gizi', '0.009');
INSERT INTO `kegiatan` VALUES ('23.7', '23.7.1', 'Mengumpulkan data', '0.05');
INSERT INTO `kegiatan` VALUES ('23.7', '23.7.2', 'Mengolah data', '0.2');
INSERT INTO `kegiatan` VALUES ('23.7', '23.7.3', 'Menganalisa data', '0.6');
INSERT INTO `kegiatan` VALUES ('23.8', '23.8.1', 'Melakukan penyuluhan medik', '0.2');
INSERT INTO `kegiatan` VALUES ('24.1', '24.1.1', 'Membuat catatan medik pasien rawat inap', '0.02');
INSERT INTO `kegiatan` VALUES ('24.2', '24.2.1', 'Membuat catatan medik pasien rawat jalan', '0.01');
INSERT INTO `kegiatan` VALUES ('25.1', '25.1.1', 'Melayani atau menerima konsultasi dari luar atau keluar', '0.02');
INSERT INTO `kegiatan` VALUES ('25.10', '25.10.1', 'Memimpin satuan unit kerja pelayanan kesehatan', '4');
INSERT INTO `kegiatan` VALUES ('25.2', '25.2.1', 'Melayani atau menerima konsultasi dari dalam', '0.02');
INSERT INTO `kegiatan` VALUES ('25.3', '25.3.1', 'Menguji kesehatan individu', '0.02');
INSERT INTO `kegiatan` VALUES ('25.3', '25.3.2', 'menjadi tim penguji kesehatan', '0.03');
INSERT INTO `kegiatan` VALUES ('25.4', '25.4.1', 'Tingkat sederhana', '0.03');
INSERT INTO `kegiatan` VALUES ('25.4', '25.4.2', 'Tingkat sedang', '0.01');
INSERT INTO `kegiatan` VALUES ('25.4', '25.4.3', 'Kompleks tingkat I', '0.05');
INSERT INTO `kegiatan` VALUES ('25.4', '25.4.4', 'Kompleks tingkat II', '0.03');
INSERT INTO `kegiatan` VALUES ('25.5', '25.5.1', 'Menjadi saksi ahli', '0.005');
INSERT INTO `kegiatan` VALUES ('25.6', '25.6.1', 'Mengawasi penggalian mayat untuk pemeriksaan', '0.02');
INSERT INTO `kegiatan` VALUES ('25.7', '25.7.1', 'Tanpa pemeriksaan laboratorium', '0.06');
INSERT INTO `kegiatan` VALUES ('25.7', '25.7.2', 'Dengan pemeriksaan laboratorium', '0.03');
INSERT INTO `kegiatan` VALUES ('25.8', '25.8.1', 'Panggilan / On call', '0.0006');
INSERT INTO `kegiatan` VALUES ('25.8', '25.8.2', 'Di tempat / RS', '0.08');
INSERT INTO `kegiatan` VALUES ('25.8', '25.8.3', 'Sepi pasien', '0.08');
INSERT INTO `kegiatan` VALUES ('25.9', '25.9.1', 'Melakukan tugas pada daerah konflik/rawan/daerah penyakit menular', '2');
INSERT INTO `kegiatan` VALUES ('26.1', '26.1.1', 'Tingkat sederhana', '0.02');
INSERT INTO `kegiatan` VALUES ('26.2', '26.2.1', 'Tingkat sedang', '0.03');
INSERT INTO `kegiatan` VALUES ('26.3', '26.3.1', 'Kompleks ', '0.04');
INSERT INTO `kegiatan` VALUES ('26.4', '26.4.1', 'Kompleks tingkat I', '0.03');
INSERT INTO `kegiatan` VALUES ('27.1', '27.1.1', 'Mengajar/melatih pada pendidikan dan pelatihan pegawai', '0.01');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.1', 'Pranikah', '0.001');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.10', 'Ibu bayi dan balita', '0.006');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.11', 'Ibu bayi dan balita sakit', '0.001');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.12', 'KB/Masa interval', '0.0006');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.13', 'Wanita menopause', '0.003');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.14', 'Ibu dengan PMS (Penyakit Menular Seksual)', '0.001');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.15', 'Persiapan operasi', '0.003');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.16', 'Gangguan sistem reproduksi', '0.003');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.2', 'Ibu hamil normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.3', 'Ibu bersalin normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.4', 'Ibu nifas normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.5', 'Remaja putri', '0.001');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.6', 'Remaja putri bermasalah', '0.003');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.7', 'Ibu hamil tidak normal', '0.003');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.8', 'Ibu bersalin tidak normal', '0.003');
INSERT INTO `kegiatan` VALUES ('A.1', 'A.1.9', 'Ibu nifas tidak normal', '0.003');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.1', 'Pranikah', '0.001');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.10', 'Ibu bayi dan balita', '0.006');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.11', 'Ibu bayi dan balita sakit', '0.001');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.12', 'KB/Masa interval', '0.0006');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.13', 'Wanita menopause', '0.003');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.14', 'Ibu dengan PMS (Penyakit Menular Seksual)', '0.001');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.15', 'Persiapan operasi', '0.003');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.16', 'Gangguan sistem reproduksi', '0.003');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.2', 'Ibu hamil normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.3', 'Ibu bersalin normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.4', 'Ibu nifas normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.5', 'Remaja putri', '0.001');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.6', 'Remaja putri bermasalah', '0.003');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.7', 'Ibu hamil tidak normal', '0.003');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.8', 'Ibu bersalin tidak normal', '0.003');
INSERT INTO `kegiatan` VALUES ('A.2', 'A.2.9', 'Ibu nifas tidak normal', '0.003');
INSERT INTO `kegiatan` VALUES ('B.1', 'B.1.1', 'Darah', '0.0006');
INSERT INTO `kegiatan` VALUES ('B.1', 'B.1.2', 'Secret vagina', '0.0006');
INSERT INTO `kegiatan` VALUES ('B.1', 'B.1.3', 'Secret cervix', '0.0006');
INSERT INTO `kegiatan` VALUES ('B.1', 'B.1.4', 'Air ketuban', '0.0006');
INSERT INTO `kegiatan` VALUES ('C.1', 'C.1.1', 'Protein', '0.002');
INSERT INTO `kegiatan` VALUES ('C.1', 'C.1.2', 'Reduksi', '0.002');
INSERT INTO `kegiatan` VALUES ('C.2', 'C.2.1', 'HB', '0.002');
INSERT INTO `kegiatan` VALUES ('D.1', 'D.1.1', 'Kasus normal', '0.002');
INSERT INTO `kegiatan` VALUES ('D.1', 'D.1.2', 'Kasus tidak normal', '0.005');
INSERT INTO `kegiatan` VALUES ('E.1', 'E.1.1', 'Kasus normal', '0.002');
INSERT INTO `kegiatan` VALUES ('E.1', 'E.1.2', 'Kasus tidak normal', '0.005');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.1', 'Pranikah', '0.008');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.10', 'Ibu dengan PMS (Penyakit Menular Seksual)', '0.008');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.11', 'Pap smear', '0.001');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.12', 'Biopsi', '0.001');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.13', 'Ginekology', '0.001');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.14', 'Curretage', '0.001');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.15', 'Remaja putri', '0.0008');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.16', 'Remaja putri bermasalah', '0.001');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.2', 'Ibu hamil normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.3', 'Persalinan normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.4', 'Bayi baru lahir', '0.0006');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.5', 'Persalinan tidak normal', '0.003');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.6', 'KB/Masa interval', '0.0006');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.7', 'Operasi', '0.005');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.8', 'bayi dan balita sakit', '0.008');
INSERT INTO `kegiatan` VALUES ('F.1', 'F.1.9', 'Wanita menopause', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.1', 'Pranikah', '0.0008');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.10', 'Kehamilan', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.11', 'Persalinan', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.12', 'Nifas', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.13', 'Bayi lahir dengan asphixia', '0.0008');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.14', 'Hiperemisis gravidarum', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.15', 'EPH gestosis', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.16', 'Remaja putri', '0.0008');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.17', 'Remaja putri bermasalah', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.2', 'Ibu hamil normal', '0.0003');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.3', 'Persalinan normal', '0.0003');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.4', 'Persalinan tidak normal', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.5', 'bayi dan balita sakit', '0.0008');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.6', 'Operasi', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.7', 'Curretage', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.8', 'Induksi persalinan', '0.001');
INSERT INTO `kegiatan` VALUES ('F.2', 'F.2.9', 'Penambahan cairan', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.1', 'G.1.1', 'Memberikan immunisasi/kekebalan', '0.001');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.1', 'Puerperium', '0.003');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.10', 'Psikose', '0.002');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.11', 'Pemberian reboransia', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.12', 'Pemberian hidrasi/nutrisi', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.2', 'Asuhan post sectio caesaria', '0.003');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.3', 'Phlegmasia albadolens', '0.003');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.4', 'Febris/sepsis puerperalis', '0.003');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.5', 'Anemia berat', '0.003');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.6', 'Pra eklampsi/eklampsi', '0.005');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.7', 'Pembengkakan payudara', '0.001');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.8', 'Mastitis', '0.001');
INSERT INTO `kegiatan` VALUES ('G.10', 'G.10.9', 'Pemberian anti biotika', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.11', 'G.11.1', 'Observasi', '0.001');
INSERT INTO `kegiatan` VALUES ('G.11', 'G.11.2', 'Perawatan tali pusat', '0.002');
INSERT INTO `kegiatan` VALUES ('G.11', 'G.11.3', 'Resusitasi pada bayi asphixia', '0.002');
INSERT INTO `kegiatan` VALUES ('G.11', 'G.11.4', 'Perawatan hipotermi', '0.002');
INSERT INTO `kegiatan` VALUES ('G.13', 'G.13.1', 'Penanggulangan diare', '0.001');
INSERT INTO `kegiatan` VALUES ('G.13', 'G.13.2', 'Melaksanakan pengobatan todak lanjut Puskesmas/RS/Dokter', '0.002');
INSERT INTO `kegiatan` VALUES ('G.14', 'G.14.1', 'Memasang AKDR', '0.001');
INSERT INTO `kegiatan` VALUES ('G.14', 'G.14.2', 'Melepas AKDR', '0.001');
INSERT INTO `kegiatan` VALUES ('G.14', 'G.14.3', 'Memasang AKBK', '0.002');
INSERT INTO `kegiatan` VALUES ('G.14', 'G.14.4', 'Melepas AKBK', '0.003');
INSERT INTO `kegiatan` VALUES ('G.14', 'G.14.5', 'Memberikan suntikan', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.14', 'G.14.6', 'Memberikan alat kontrasepsi sederhana', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.14', 'G.14.7', 'Memberikan tablet', '0.003');
INSERT INTO `kegiatan` VALUES ('G.14', 'G.14.8', 'Memberikan asuhan efek samping alat kontrasepsi', '0.002');
INSERT INTO `kegiatan` VALUES ('G.15', 'G.15.1', 'Wanita menopause', '0.003');
INSERT INTO `kegiatan` VALUES ('G.16', 'G.16.1', 'Penyakit menular seksual', '0.001');
INSERT INTO `kegiatan` VALUES ('G.17', 'G.17.1', 'Pre-operasi', '0.005');
INSERT INTO `kegiatan` VALUES ('G.17', 'G.17.2', 'Post-operasi', '0.01');
INSERT INTO `kegiatan` VALUES ('G.18', 'G.18.1', 'Melaksanakan asuhana kebidanan pada hipermisis gravidarum', '0.005');
INSERT INTO `kegiatan` VALUES ('G.18', 'G.18.2', 'Abortus imminens', '0.005');
INSERT INTO `kegiatan` VALUES ('G.18', 'G.18.3', 'Abortus incipiens', '0.005');
INSERT INTO `kegiatan` VALUES ('G.18', 'G.18.4', 'Melakukan digital pada abortus incomplitus', '0.005');
INSERT INTO `kegiatan` VALUES ('G.18', 'G.18.5', 'Melaksanakan asuhan kebidanan pada pasca abortus', '0.005');
INSERT INTO `kegiatan` VALUES ('G.19', 'G.19.1', 'Melaksanakan asuhan kebidanan pada gangguan alat reproduksi', '0.005');
INSERT INTO `kegiatan` VALUES ('G.19', 'G.19.2', 'Memberikan obat', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.19', 'G.19.3', 'Memberikan infus cairan', '0.001');
INSERT INTO `kegiatan` VALUES ('G.19', 'G.19.4', 'Memberi transfusi darah', '0.001');
INSERT INTO `kegiatan` VALUES ('G.2', 'G.2.1', 'Memberikan immunisasi/kekebalan', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.2', 'G.2.2', 'Memberikan robonansia (sesuai kebutuhan)', '0.0003');
INSERT INTO `kegiatan` VALUES ('G.2', 'G.2.3', 'Mengajarkan senam hamil', '0.002');
INSERT INTO `kegiatan` VALUES ('G.20', 'G.20.1', 'Instrumentator', '0.02');
INSERT INTO `kegiatan` VALUES ('G.20', 'G.20.2', 'Assisten', '0.02');
INSERT INTO `kegiatan` VALUES ('G.20', 'G.20.3', 'On loop', '0.02');
INSERT INTO `kegiatan` VALUES ('G.21', 'G.21.1', 'Pendamping dokter dalam tindakan obstetri & ginekologi', '0.02');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.1', 'Pemeriksaan per vagina', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.10', 'Asuhan kebidanan kala IV', '0.001');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.11', 'Memberi obat utero tonica', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.2', 'Melakukan huknah/klisma', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.3', 'Melakukan keteterisasi', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.4', 'Memberikan hidrasi', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.5', 'Memantau kemajuan persalinan', '0.004');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.6', 'Melakukan amnicotomi', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.7', 'Melakukan episiotomi dan menjahit perineum', '0.001');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.8', 'Asuhan kebidanan kala II', '0.001');
INSERT INTO `kegiatan` VALUES ('G.3', 'G.3.9', 'Asuhan kebidanan kala III', '0.001');
INSERT INTO `kegiatan` VALUES ('G.4', 'G.4.1', 'Puerperium', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.4', 'G.4.2', 'Perawatan payudara', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.4', 'G.4.3', 'Senam nifas', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.4', 'G.4.4', 'Bimbingan menyusui', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.5', 'G.5.1', 'Observasi', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.5', 'G.5.2', 'Membersihkan jalan nafas', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.5', 'G.5.3', 'Mencegah hypothermi', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.5', 'G.5.4', 'Memotong dan mengikat tali pusat', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.5', 'G.5.5', 'Melakukan kontak dini', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.5', 'G.5.6', 'Memberi identitas', '0.0006');
INSERT INTO `kegiatan` VALUES ('G.6', 'G.6.1', 'Remaja putri', '0.001');
INSERT INTO `kegiatan` VALUES ('G.7', 'G.7.1', 'Remaja putri bermasalah', '0.003');
INSERT INTO `kegiatan` VALUES ('G.8', 'G.8.1', 'Melakukan bimbingan dan melibatkan keluarga', '0.005');
INSERT INTO `kegiatan` VALUES ('G.8', 'G.8.2', 'Anemia berat', '0.003');
INSERT INTO `kegiatan` VALUES ('G.8', 'G.8.3', 'Hyperemisis tingkat I', '0.003');
INSERT INTO `kegiatan` VALUES ('G.8', 'G.8.4', 'Perdarahan hamil muda', '0.005');
INSERT INTO `kegiatan` VALUES ('G.8', 'G.8.5', 'Perdarahan hamil tua', '0.008');
INSERT INTO `kegiatan` VALUES ('G.8', 'G.8.6', 'Pre eklampsi', '0.005');
INSERT INTO `kegiatan` VALUES ('G.8', 'G.8.7', 'Eklampsi', '0.01');
INSERT INTO `kegiatan` VALUES ('G.8', 'G.8.8', 'Ketuban pecah dini', '0.008');
INSERT INTO `kegiatan` VALUES ('G.8', 'G.8.9', 'Kasus faktor resiko tinggi', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.1', 'Letak sungsang', '0.005');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.10', 'Melakukan asuhan kebidanan pada kala IV', '0.005');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.11', 'Memberikan utero tonika', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.12', 'Pemberian anti biotika', '0.0008');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.2', 'Gemeli', '0.004');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.3', 'Versi ekstraksi gemeli anak kedua', '0.005');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.4', 'Melakukan vacum ekstraksi pada persalinan kepala di dasar panggul tidak normal', '0.005');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.5', 'Melakukan forcep pada persalinan kepala di dasar panggul', '0.005');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.6', 'Melakukan placenta manual', '0.005');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.7', 'Melakukan kompresi bimanual eksternal pada kala IV', '0.005');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.8', 'Memberikan infus', '0.001');
INSERT INTO `kegiatan` VALUES ('G.9', 'G.9.9', 'Memberikan transfusi darah', '0.001');
INSERT INTO `kegiatan` VALUES ('H.1', 'H.1.1', 'Pranikah', '0.001');
INSERT INTO `kegiatan` VALUES ('H.10', 'H.10.1', 'KB/Masa interval', '0.0006');
INSERT INTO `kegiatan` VALUES ('H.11', 'H.11.1', 'Wanita menopause', '0.0003');
INSERT INTO `kegiatan` VALUES ('H.12', 'H.12.1', 'Ibu dengan PMS (Penyakit Menular Seksual)', '0.001');
INSERT INTO `kegiatan` VALUES ('H.13', 'H.13.1', 'Persiapan operasi', '0.005');
INSERT INTO `kegiatan` VALUES ('H.14', 'H.14.1', 'Gangguan kehamilan', '0.005');
INSERT INTO `kegiatan` VALUES ('H.15', 'H.15.1', 'Gangguan sistem reproduksi', '0.003');
INSERT INTO `kegiatan` VALUES ('H.2', 'H.2.1', 'Ibu hamil normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('H.3', 'H.3.1', 'Ibu bersalin normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('H.4', 'H.4.1', 'Ibu nifas normal', '0.0006');
INSERT INTO `kegiatan` VALUES ('H.5', 'H.5.1', 'Remaja putri', '0.001');
INSERT INTO `kegiatan` VALUES ('H.6', 'H.6.1', 'Remaja putri bermasalah', '0.003');
INSERT INTO `kegiatan` VALUES ('H.7', 'H.7.1', 'Ibu hamil tidak normal dan keluarga', '0.005');
INSERT INTO `kegiatan` VALUES ('H.8', 'H.8.1', 'Ibu bersalin tidak normal', '0.005');
INSERT INTO `kegiatan` VALUES ('H.9', 'H.9.1', 'Ibu bayi dan balita', '0.006');
INSERT INTO `kegiatan` VALUES ('I.1', 'I.1.1', 'Melaksanakan kolaborasi dengan tim kesehatan lain', '0.01');
INSERT INTO `kegiatan` VALUES ('J.1', 'J.1.1', 'Remaja putri bermasalah', '0.003');
INSERT INTO `kegiatan` VALUES ('J.10', 'J.10.1', 'Gangguan kehamilan', '0.01');
INSERT INTO `kegiatan` VALUES ('J.11', 'J.11.1', 'Gangguan alat reproduksi', '0.003');
INSERT INTO `kegiatan` VALUES ('J.2', 'J.2.1', 'Ibu hamil tidak normal', '0.005');
INSERT INTO `kegiatan` VALUES ('J.3', 'J.3.1', 'Ibu bersalin tidak normal', '0.02');
INSERT INTO `kegiatan` VALUES ('J.4', 'J.4.1', 'Ibu nifas tidak normal', '0.01');
INSERT INTO `kegiatan` VALUES ('J.5', 'J.5.1', 'Bayi baru lahir tidak normal', '0.005');
INSERT INTO `kegiatan` VALUES ('J.6', 'J.6.1', 'Bayi dan balita sakit', '0.002');
INSERT INTO `kegiatan` VALUES ('J.7', 'J.7.1', 'KB/masa interval', '0.003');
INSERT INTO `kegiatan` VALUES ('J.8', 'J.8.1', 'Wanita menopause', '0.003');
INSERT INTO `kegiatan` VALUES ('J.9', 'J.9.1', 'Ibu dengan PMS (Penyakit Menular Seksual)', '0.001');
INSERT INTO `kegiatan` VALUES ('K.1', 'K.1.1', 'Kasus Normal', '0.001');
INSERT INTO `kegiatan` VALUES ('K.2', 'K.2.1', 'Kasus tidak normal', '0.003');
INSERT INTO `kegiatan` VALUES ('L.1', 'L.1.1', 'Pranikah', '0.008');
INSERT INTO `kegiatan` VALUES ('L.10', 'L.10.1', 'Ibu nifas tidak normal', ' 0.001');
INSERT INTO `kegiatan` VALUES ('L.11', 'L.11.1', 'Bayi dan balita', '0.0003');
INSERT INTO `kegiatan` VALUES ('L.12', 'L.12.1', 'Bayi dan balita sakit', '0.0008');
INSERT INTO `kegiatan` VALUES ('L.13', 'L.13.1', 'KB/Masa interval', '0.0003');
INSERT INTO `kegiatan` VALUES ('L.14', 'L.14.1', 'Wanita menopause', '0.001');
INSERT INTO `kegiatan` VALUES ('L.15', 'L.15.1', 'Ibu dengan PMS (Penyakit Menular Seksual)', '0.0008');
INSERT INTO `kegiatan` VALUES ('L.16', 'L.16.1', 'Pasien pre & post operasi', '0.001');
INSERT INTO `kegiatan` VALUES ('L.17', 'L.17.1', 'Gangguan kehamilan', '0.001');
INSERT INTO `kegiatan` VALUES ('L.18', 'L.18.1', 'Gangguan alat reproduksi', '0.001');
INSERT INTO `kegiatan` VALUES ('L.2', 'L.2.1', 'Ibu hamil ', '0.00013');
INSERT INTO `kegiatan` VALUES ('L.3', 'L.3.1', 'Persalinan normal', '0.0003');
INSERT INTO `kegiatan` VALUES ('L.4', 'L.4.1', 'Ibu nifas normal', '0.0003');
INSERT INTO `kegiatan` VALUES ('L.5', 'L.5.1', 'Bayi baru lahir', '0.0003');
INSERT INTO `kegiatan` VALUES ('L.6', 'L.6.1', 'Remaja putri', '0.0008');
INSERT INTO `kegiatan` VALUES ('L.7', 'L.7.1', 'Remaja putri bermasalah', '0.001');
INSERT INTO `kegiatan` VALUES ('L.8', 'L.8.1', 'Ibu hamil tidak normal', '0.001');
INSERT INTO `kegiatan` VALUES ('L.9', 'L.9.1', 'Persalinan tidak normal', '0.001');
INSERT INTO `kegiatan` VALUES ('M.1', 'M.1.1', 'Melaksanakan pelayanan kesehatan masyarakat ', '0');
INSERT INTO `kegiatan` VALUES ('M.10', 'M.10.1', 'Membuat peta masalah', '0.008');
INSERT INTO `kegiatan` VALUES ('M.11', 'M.11.1', 'Membuat kohor/kartu masalah', '0.008');
INSERT INTO `kegiatan` VALUES ('M.12', 'M.12.1', 'membuat program asuhan', '0.008');
INSERT INTO `kegiatan` VALUES ('M.13', 'M.13.1', 'Melaksanakan kunjungan keluarga', '0.004');
INSERT INTO `kegiatan` VALUES ('M.14', 'M.14.1', 'Membina posyandu', '0.02');
INSERT INTO `kegiatan` VALUES ('M.15', 'M.15.1', 'Membina dasa wisma', '0.01');
INSERT INTO `kegiatan` VALUES ('M.16', 'M.16.1', 'membina kader KPKIA', '0.02');
INSERT INTO `kegiatan` VALUES ('M.17', 'M.17.1', 'Membina kader PPKBD', '0.02');
INSERT INTO `kegiatan` VALUES ('M.18', 'M.18.1', 'musyawarah masyarakat desa', '0.04');
INSERT INTO `kegiatan` VALUES ('M.19', 'M.19.1', 'Membina/melatih dukun beranak', '0.04');
INSERT INTO `kegiatan` VALUES ('M.2', 'M.2.1', 'Menyusun program tahunan', '0.08');
INSERT INTO `kegiatan` VALUES ('M.3', 'M.3.1', 'Menyusun instrumen pengkajian', '0.08');
INSERT INTO `kegiatan` VALUES ('M.4', 'M.4.1', 'Pengkajian individu pada keluarga', '0.004');
INSERT INTO `kegiatan` VALUES ('M.5', 'M.5.1', 'Pengkajian masyarakat/wilayah', '0.004');
INSERT INTO `kegiatan` VALUES ('M.6', 'M.6.1', 'Pengkajian keluarga', '0.004');
INSERT INTO `kegiatan` VALUES ('M.7', 'M.7.1', 'Menentukan masalah', '0.008');
INSERT INTO `kegiatan` VALUES ('M.8', 'M.8.1', 'Membuat laporan pengkajian', '0.008');
INSERT INTO `kegiatan` VALUES ('M.9', 'M.9.1', 'Membuat peta wilayah', '0.008');

-- ----------------------------
-- Table structure for kegiatan_bulanan
-- ----------------------------
DROP TABLE IF EXISTS `kegiatan_bulanan`;
CREATE TABLE `kegiatan_bulanan` (
  `id_kh_bln` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatan` int(11) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `bln_keg` varchar(225) DEFAULT NULL,
  `thn_keg` varchar(255) DEFAULT NULL,
  `id_kat_bln` varchar(225) DEFAULT NULL,
  `id_sub_kat_bln` varchar(225) DEFAULT NULL,
  `id_keg_bln` varchar(225) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(225) DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kh_bln`),
  KEY `id_pegawai` (`id_pegawai`),
  KEY `id_keg_bln` (`id_keg_bln`),
  CONSTRAINT `kegiatan_bulanan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  CONSTRAINT `kegiatan_bulanan_ibfk_2` FOREIGN KEY (`id_keg_bln`) REFERENCES `keg_bln` (`id_keg_bln`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kegiatan_bulanan
-- ----------------------------
INSERT INTO `kegiatan_bulanan` VALUES ('5', '8', '3', '02', '2017', 'katbln_1', 'subkatbln_1_1', 'kegbln_1_1_1', '3', 'baim', '2017-02-19 22:40:24', null, '2017-02-19 22:40:24');
INSERT INTO `kegiatan_bulanan` VALUES ('6', '8', '3', '02', '2017', 'katbln_9', 'subkatbln_9_1', 'kegbln_9_1_1', '2', 'baim', '2017-02-19 22:40:39', null, '2017-02-19 22:40:39');
INSERT INTO `kegiatan_bulanan` VALUES ('7', '8', '3', '02', '2017', 'katbln_1', 'subkatbln_1_2', 'kegbln_1_2_1', '1', 'baim', '2017-02-21 09:40:12', null, '2017-02-21 09:40:12');
INSERT INTO `kegiatan_bulanan` VALUES ('8', '8', '3', '02', '2017', 'katbln_10', 'subkatbln_10_1', 'kegbln_10_1_1', '5', 'baim', '2017-03-25 23:29:00', null, '2017-03-25 23:29:38');
INSERT INTO `kegiatan_bulanan` VALUES ('9', '8', '3', '02', '2017', 'katbln_3', 'subkatbln_3_1', 'kegbln_3_1_1', '7', 'baim', '2017-03-26 00:06:02', null, '2017-03-26 00:06:47');

-- ----------------------------
-- Table structure for kegiatan_harian
-- ----------------------------
DROP TABLE IF EXISTS `kegiatan_harian`;
CREATE TABLE `kegiatan_harian` (
  `id_kh` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatan` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `id_kategori` varchar(255) DEFAULT NULL,
  `id_sub_kategori` varchar(255) DEFAULT NULL,
  `id_kegiatan` varchar(255) NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(255) DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kh`),
  KEY `id_jabatan` (`id_jabatan`),
  KEY `id_pegawai` (`id_pegawai`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_sub_kategori` (`id_sub_kategori`),
  KEY `id_kegiatan` (`id_kegiatan`),
  CONSTRAINT `kegiatan_harian_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  CONSTRAINT `kegiatan_harian_ibfk_5` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kegiatan_harian
-- ----------------------------
INSERT INTO `kegiatan_harian` VALUES ('89', '8', '3', '2017-02-19', 'A', 'A.1', 'A.1.1', '5', 'baim', '2017-02-19 22:32:42', null, '2017-02-19 22:32:42');
INSERT INTO `kegiatan_harian` VALUES ('90', '8', '3', '2017-02-19', 'A', 'A.1', 'A.1.10', '2', 'baim', '2017-02-19 22:33:01', null, '2017-02-19 22:33:01');
INSERT INTO `kegiatan_harian` VALUES ('91', '8', '3', '2017-02-19', 'B', 'B.1', 'B.1.1', '2', 'baim', '2017-02-19 22:33:20', null, '2017-02-19 22:33:20');
INSERT INTO `kegiatan_harian` VALUES ('92', '8', '3', '2017-02-19', 'C', 'C.1', 'C.1.1', '1', 'baim', '2017-02-19 22:33:35', null, '2017-02-19 22:33:35');
INSERT INTO `kegiatan_harian` VALUES ('93', '8', '3', '2017-02-19', 'D', 'D.1', 'D.1.1', '2', 'baim', '2017-02-19 22:33:50', null, '2017-02-19 22:33:50');
INSERT INTO `kegiatan_harian` VALUES ('94', '8', '3', '2017-02-19', 'E', 'E.1', 'E.1.1', '2', 'baim', '2017-02-19 22:34:03', null, '2017-02-19 22:34:03');
INSERT INTO `kegiatan_harian` VALUES ('96', '8', '3', '2017-02-20', 'E', 'E.1', 'E.1.1', '2', 'baim', '2017-02-19 22:35:56', null, '2017-02-19 22:35:56');
INSERT INTO `kegiatan_harian` VALUES ('97', '12', '8', '2017-03-13', '21', '21.1', '21.1.1', '10', 'baim', '2017-03-27 00:33:11', null, '2017-03-27 00:33:11');
INSERT INTO `kegiatan_harian` VALUES ('98', '12', '8', '2017-03-08', '22', '22.1', '22.1.1', '4', 'baim', '2017-04-01 13:49:51', null, '2017-04-01 13:49:51');
INSERT INTO `kegiatan_harian` VALUES ('99', '12', '8', '2017-03-01', '22', '22.2', '22.2.2', '3', 'baim', '2017-04-01 13:50:03', null, '2017-04-01 13:51:18');

-- ----------------------------
-- Table structure for keg_bln
-- ----------------------------
DROP TABLE IF EXISTS `keg_bln`;
CREATE TABLE `keg_bln` (
  `id_keg_bln` varchar(225) NOT NULL,
  `id_sub_kat_bln` varchar(225) NOT NULL,
  `keg_bln` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_keg_bln`),
  KEY `id_sub_kat_bln` (`id_sub_kat_bln`),
  CONSTRAINT `keg_bln_ibfk_1` FOREIGN KEY (`id_sub_kat_bln`) REFERENCES `sub_kat_bln` (`id_sub_kat_bln`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of keg_bln
-- ----------------------------
INSERT INTO `keg_bln` VALUES ('kegbln_10_1_1', 'subkatbln_10_1', 'Dalam bentuk buku yang diterbitkan dan diedarkan secara nasional ');
INSERT INTO `keg_bln` VALUES ('kegbln_10_1_2', 'subkatbln_10_1', 'Dalam majalah ilmiah yang diakui instansi berwenang (LIPI)');
INSERT INTO `keg_bln` VALUES ('kegbln_10_2_1', 'subkatbln_10_2', 'Dalam bentuk Buku');
INSERT INTO `keg_bln` VALUES ('kegbln_10_2_2', 'subkatbln_10_2', 'Dalam bentuk Makalah');
INSERT INTO `keg_bln` VALUES ('kegbln_10_3_1', 'subkatbln_10_3', 'Dalam bentuk Buku');
INSERT INTO `keg_bln` VALUES ('kegbln_10_3_2', 'subkatbln_10_3', 'Dalam bentuk Makalah');
INSERT INTO `keg_bln` VALUES ('kegbln_10_4_1', 'subkatbln_10_4', 'Tulisan ilmiah populer di bidang kebidanan yang disebarluaskan melalui media massa');
INSERT INTO `keg_bln` VALUES ('kegbln_10_5_1', 'subkatbln_10_5', 'Menyampaikan prasarana berupa tinjauan, gagasan dan atau ulasan ilmiah di bidang kebidanan pada pertemuan ilmiah');
INSERT INTO `keg_bln` VALUES ('kegbln_11_1_1', 'subkatbln_11_1', 'Dalam bentuk buku yang diterbitkan dan diedarkan secara nasional ');
INSERT INTO `keg_bln` VALUES ('kegbln_11_1_2', 'subkatbln_11_1', 'Dalam bentuk majalah ilmiah yang diakui instansi berwenang (LIPI)');
INSERT INTO `keg_bln` VALUES ('kegbln_11_2_1', 'subkatbln_11_2', 'Buku');
INSERT INTO `keg_bln` VALUES ('kegbln_11_2_2', 'subkatbln_11_2', 'Makalah');
INSERT INTO `keg_bln` VALUES ('kegbln_11_3_1', 'subkatbln_11_3', 'Membuat abstrak tulisan ilmiah yang dimuat dalam penerbitan');
INSERT INTO `keg_bln` VALUES ('kegbln_12_1_1', 'subkatbln_12_1', 'Membimbing bidan yang berada di bawah jenjang jabatannya');
INSERT INTO `keg_bln` VALUES ('kegbln_13_1_1', 'subkatbln_13_1', 'Membuat buku pedoman/petunjuk pelaksanaan/petunjuk teknis di bidang kebidanan');
INSERT INTO `keg_bln` VALUES ('kegbln_14_1_1', 'subkatbln_14_1', 'Mengembangkan teknologi tepat guna dibidang kesehatan');
INSERT INTO `keg_bln` VALUES ('kegbln_1_1_1', 'subkatbln_1_1', 'Sarjana muda/Akademi/Diploma III Bidan');
INSERT INTO `keg_bln` VALUES ('kegbln_1_2_1', 'subkatbln_1_2', 'Diploma II Bidan');
INSERT INTO `keg_bln` VALUES ('kegbln_2_1_1', 'subkatbln_2_1', 'Lamanya lebih dari 960 jam');
INSERT INTO `keg_bln` VALUES ('kegbln_2_2_1', 'subkatbln_2_2', 'Lamanya 641 sampai 960 jam');
INSERT INTO `keg_bln` VALUES ('kegbln_2_3_1', 'subkatbln_2_3', 'Lamanya 401 sampai 640 jam');
INSERT INTO `keg_bln` VALUES ('kegbln_2_4_1', 'subkatbln_2_4', 'Lamanya 161 sampai 400 jam');
INSERT INTO `keg_bln` VALUES ('kegbln_2_5_1', 'subkatbln_2_5', 'Lamanya 81 sampai 160 jam');
INSERT INTO `keg_bln` VALUES ('kegbln_2_6_1', 'subkatbln_2_6', 'Lamanya 30 sampai 80 jam');
INSERT INTO `keg_bln` VALUES ('kegbln_3_1_1', 'subkatbln_3_1', 'Mengajar/melatih yang berkaitan dengan bidang kebidanan');
INSERT INTO `keg_bln` VALUES ('kegbln_4_1_1', 'subkatbln_4_1', 'Sebagai pemasaran');
INSERT INTO `keg_bln` VALUES ('kegbln_4_1_2', 'subkatbln_4_1', 'Sebagai pembahas/moderator/narasumber');
INSERT INTO `keg_bln` VALUES ('kegbln_4_1_3', 'subkatbln_4_1', 'Sebagai peserta');
INSERT INTO `keg_bln` VALUES ('kegbln_4_2_1', 'subkatbln_4_2', 'Sebagai ketua');
INSERT INTO `keg_bln` VALUES ('kegbln_4_2_2', 'subkatbln_4_2', 'Sebagai anggota');
INSERT INTO `keg_bln` VALUES ('kegbln_5_1_1', 'subkatbln_5_1', 'Pengurus Aktif');
INSERT INTO `keg_bln` VALUES ('kegbln_5_1_2', 'subkatbln_5_1', 'Anggota Aktif');
INSERT INTO `keg_bln` VALUES ('kegbln_5_2_1', 'subkatbln_5_2', 'Pengurus Aktif');
INSERT INTO `keg_bln` VALUES ('kegbln_5_2_2', 'subkatbln_5_2', 'Anggota Aktif');
INSERT INTO `keg_bln` VALUES ('kegbln_6_1_1', 'subkatbln_6_1', 'Menjadi anggota aktif tim penilai');
INSERT INTO `keg_bln` VALUES ('kegbln_7_1_1', 'subkatbln_7_1', 'Sarjana/Diploma IV');
INSERT INTO `keg_bln` VALUES ('kegbln_7_1_2', 'subkatbln_7_1', 'Sarjana Muda/Diploma II/Diploma III');
INSERT INTO `keg_bln` VALUES ('kegbln_8_1_1', 'subkatbln_8_1', 'Tiga puluh (30) tahun');
INSERT INTO `keg_bln` VALUES ('kegbln_8_1_2', 'subkatbln_8_1', 'Dua puluh (20) tahun');
INSERT INTO `keg_bln` VALUES ('kegbln_8_1_3', 'subkatbln_8_1', 'Sepuluh (10) tahun');
INSERT INTO `keg_bln` VALUES ('kegbln_8_2_1', 'subkatbln_8_2', 'Gelar kehormatan di bidang akademis');
INSERT INTO `keg_bln` VALUES ('kegbln_9_1_1', 'subkatbln_9_1', 'Sebagai ketua');
INSERT INTO `keg_bln` VALUES ('kegbln_9_1_2', 'subkatbln_9_1', 'Sebagai anggota');

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(25) NOT NULL,
  `nama_pegawai` varchar(55) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nomor_karpeg` varchar(25) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `pendidikan` varchar(25) DEFAULT NULL,
  `pangkat` varchar(25) CHARACTER SET koi8u DEFAULT NULL,
  `golongan` varchar(25) DEFAULT NULL,
  `tgl_tmt` date DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `masa_kerja_lama` varchar(15) DEFAULT NULL,
  `masa_kerja_baru` varchar(15) DEFAULT NULL,
  `id_unit_kerja` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(255) DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pegawai`),
  KEY `id_jabatan` (`id_jabatan`),
  KEY `id_unit_kerja` (`id_unit_kerja`),
  CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_unit_kerja`) REFERENCES `unit_kerja` (`id_unit_kerja`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES ('3', '678657565655675677', 'Maemunah', 'Tangerang', '1988-06-05', '345346545645765675', 'Perempuan', 'D IV Kebidanan', '-', 'Eselon II', '2017-01-11', '8', '10 Thn', '5', '8', 'baim', '2017-01-13 10:28:50', 'baim', '2017-02-09 08:33:12');
INSERT INTO `pegawai` VALUES ('6', '098765789876546789', 'Julaeha', 'Tangerang', '1980-02-28', '989878768768768768', 'Perempuan', 'S1', 'Eselon IV', '3A', '2014-06-11', '9', '4 Thn', '6', '6', 'baim', '2017-01-17 08:48:42', 'baim', '2017-02-09 08:33:03');
INSERT INTO `pegawai` VALUES ('7', '908798876876598698', 'Irma', 'Serang', '1970-02-27', '09879879878976876876', 'Perempuan', 'D3', 'Eselon I', '3A', '2016-12-28', '10', '8 Thn', '6', '7', 'baim', '2017-01-17 08:51:03', null, '2017-02-09 08:33:08');
INSERT INTO `pegawai` VALUES ('8', '098495834508304895', 'Dr. Mustofa SPOG', 'Bandung', '1975-07-10', '837469835492384593', 'Laki-laki', 'Dokter', 'Dokter', 'Eselon IV', '2016-03-03', '12', '2 Thn 1 Hari', '1 Thn', '8', 'baim', '2017-02-19 22:30:24', 'baim', '2017-02-19 22:31:27');

-- ----------------------------
-- Table structure for sub_kategori
-- ----------------------------
DROP TABLE IF EXISTS `sub_kategori`;
CREATE TABLE `sub_kategori` (
  `id_kategori` varchar(255) NOT NULL,
  `id_sub_kategori` varchar(255) NOT NULL,
  `sub_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_sub_kategori`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `sub_kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sub_kategori
-- ----------------------------
INSERT INTO `sub_kategori` VALUES ('21', '21.1', 'Melakukan pelayanan medik umum');
INSERT INTO `sub_kategori` VALUES ('21', '21.2', 'Melakukan pelayanan spesialistik');
INSERT INTO `sub_kategori` VALUES ('21', '21.3', 'Melakukan pelayanan spesialis konsultan');
INSERT INTO `sub_kategori` VALUES ('21', '21.4', 'Melakukan tindakan khusus oleh dokter umum');
INSERT INTO `sub_kategori` VALUES ('21', '21.5', 'Melakukan tindakan khusus spesialistik');
INSERT INTO `sub_kategori` VALUES ('21', '21.6', 'Melakukan tindakan darurat spesialistik konsultan');
INSERT INTO `sub_kategori` VALUES ('21', '21.7', 'Melakukan tindakan medik spesialistik konsultan');
INSERT INTO `sub_kategori` VALUES ('21', '21.8', 'Melakukan kunjungan (visit) pada pasien rawat inap');
INSERT INTO `sub_kategori` VALUES ('22', '22.1', 'Melakukan pemulhan mental');
INSERT INTO `sub_kategori` VALUES ('22', '22.2', 'Melakukan pemulihan fisik');
INSERT INTO `sub_kategori` VALUES ('23', '23.1', 'Melakukan pemeliharaan kesehatan ibu');
INSERT INTO `sub_kategori` VALUES ('23', '23.2', 'Melakukan pemeliharaan kesehatan bayi dan balita');
INSERT INTO `sub_kategori` VALUES ('23', '23.3', 'Melakukan pemeliharaan kesehatan anak');
INSERT INTO `sub_kategori` VALUES ('23', '23.4', 'Melakukan pelayanan KB');
INSERT INTO `sub_kategori` VALUES ('23', '23.5', 'Melakukan pelayanan imunisasi');
INSERT INTO `sub_kategori` VALUES ('23', '23.6', 'Melakukan pelayanan gizi');
INSERT INTO `sub_kategori` VALUES ('23', '23.7', 'Melakukan pengamatan epidemiologi penyakit');
INSERT INTO `sub_kategori` VALUES ('23', '23.8', 'Melakukan penyuluhan medik');
INSERT INTO `sub_kategori` VALUES ('24', '24.1', 'Membuat catatan medik pasien rawat inap');
INSERT INTO `sub_kategori` VALUES ('24', '24.2', 'Membuat catatan medik pasien rawat jalan');
INSERT INTO `sub_kategori` VALUES ('25', '25.1', 'Melayani atau menerima konsultasi dari luar atau keluar');
INSERT INTO `sub_kategori` VALUES ('25', '25.10', 'Memimpin satuan unit kerja pelayanan kesehatan');
INSERT INTO `sub_kategori` VALUES ('25', '25.2', 'Melayani atau menerima konsultasi dari dalam');
INSERT INTO `sub_kategori` VALUES ('25', '25.3', 'Menguji kesehatan');
INSERT INTO `sub_kategori` VALUES ('25', '25.4', 'Melakukan visum et repertum');
INSERT INTO `sub_kategori` VALUES ('25', '25.5', 'Menjadi saksi ahli');
INSERT INTO `sub_kategori` VALUES ('25', '25.6', 'Mengawasi penggalian mayat untuk pemeriksaan');
INSERT INTO `sub_kategori` VALUES ('25', '25.7', 'Melakukan otopsi');
INSERT INTO `sub_kategori` VALUES ('25', '25.8', 'Melakukan tugas jaga');
INSERT INTO `sub_kategori` VALUES ('25', '25.9', 'Melakukan tugas pada daerah konflik/rawan/daerah penyakit menular');
INSERT INTO `sub_kategori` VALUES ('26', '26.1', 'Tingkat sederhana');
INSERT INTO `sub_kategori` VALUES ('26', '26.2', 'Tingkat sedang');
INSERT INTO `sub_kategori` VALUES ('26', '26.3', 'Kompleks ');
INSERT INTO `sub_kategori` VALUES ('26', '26.4', 'Kompleks tingkat I');
INSERT INTO `sub_kategori` VALUES ('27', '27.1', 'Pengajar/pelatih yang berkaitan dengan bidang kesehatan ');
INSERT INTO `sub_kategori` VALUES ('A', 'A.1', 'Anamnesa');
INSERT INTO `sub_kategori` VALUES ('A', 'A.2', 'Pemeriksaan fisik');
INSERT INTO `sub_kategori` VALUES ('B', 'B.1', 'Pengambilan/penyediaan bahan laboratorium');
INSERT INTO `sub_kategori` VALUES ('C', 'C.1', 'Pemeriksaan urine');
INSERT INTO `sub_kategori` VALUES ('C', 'C.2', 'Darah');
INSERT INTO `sub_kategori` VALUES ('D', 'D.1', 'Membuat diagnosa kebidanan sesuai dengan hasil pengkajian pada');
INSERT INTO `sub_kategori` VALUES ('E', 'E.1', 'Membuat diagnosa kebidanan pada');
INSERT INTO `sub_kategori` VALUES ('F', 'F.1', 'Persiapan alat untuk pelayanan');
INSERT INTO `sub_kategori` VALUES ('F', 'F.2', 'Persiapan obat');
INSERT INTO `sub_kategori` VALUES ('G', 'G.1', 'Pranikah');
INSERT INTO `sub_kategori` VALUES ('G', 'G.10', 'Ibu nifas tidak normal');
INSERT INTO `sub_kategori` VALUES ('G', 'G.11', 'Bayi baru lahir tidak normal');
INSERT INTO `sub_kategori` VALUES ('G', 'G.12', 'Bayi dan balita');
INSERT INTO `sub_kategori` VALUES ('G', 'G.13', 'Bayi dan balita sakit');
INSERT INTO `sub_kategori` VALUES ('G', 'G.14', 'KB/masa interval');
INSERT INTO `sub_kategori` VALUES ('G', 'G.15', 'Wanita menopause');
INSERT INTO `sub_kategori` VALUES ('G', 'G.16', 'Penyakit menular seksual');
INSERT INTO `sub_kategori` VALUES ('G', 'G.17', 'Operasi');
INSERT INTO `sub_kategori` VALUES ('G', 'G.18', 'Gangguan kehamilan muda');
INSERT INTO `sub_kategori` VALUES ('G', 'G.19', 'Gangguan alat reproduksi');
INSERT INTO `sub_kategori` VALUES ('G', 'G.2', 'Ibu hamil');
INSERT INTO `sub_kategori` VALUES ('G', 'G.20', 'Melaksanakan tugas di kamar bedah');
INSERT INTO `sub_kategori` VALUES ('G', 'G.21', 'Pendamping dokter dalam tindakan obstetri & ginekologi');
INSERT INTO `sub_kategori` VALUES ('G', 'G.3', 'Persalinan normal kala I');
INSERT INTO `sub_kategori` VALUES ('G', 'G.4', 'Ibu nifas normal');
INSERT INTO `sub_kategori` VALUES ('G', 'G.5', 'Bayi baru lahir');
INSERT INTO `sub_kategori` VALUES ('G', 'G.6', 'Remaja putri');
INSERT INTO `sub_kategori` VALUES ('G', 'G.7', 'Remaja putri bermasalah');
INSERT INTO `sub_kategori` VALUES ('G', 'G.8', 'Ibu hamil tidak normal');
INSERT INTO `sub_kategori` VALUES ('G', 'G.9', 'Ibu bersalin tidak normal');
INSERT INTO `sub_kategori` VALUES ('H', 'H.1', 'Pranikah');
INSERT INTO `sub_kategori` VALUES ('H', 'H.10', 'KB/Masa interval');
INSERT INTO `sub_kategori` VALUES ('H', 'H.11', 'Wanita menopause');
INSERT INTO `sub_kategori` VALUES ('H', 'H.12', 'Ibu dengan PMS (Penyakit Menular Seksual)');
INSERT INTO `sub_kategori` VALUES ('H', 'H.13', 'Persiapan operasi');
INSERT INTO `sub_kategori` VALUES ('H', 'H.14', 'Gangguan kehamilan');
INSERT INTO `sub_kategori` VALUES ('H', 'H.15', 'Gangguan sistem reproduksi');
INSERT INTO `sub_kategori` VALUES ('H', 'H.2', 'Ibu hamil normal');
INSERT INTO `sub_kategori` VALUES ('H', 'H.3', 'Ibu bersalin normal');
INSERT INTO `sub_kategori` VALUES ('H', 'H.4', 'Ibu nifas normal');
INSERT INTO `sub_kategori` VALUES ('H', 'H.5', 'Remaja putri');
INSERT INTO `sub_kategori` VALUES ('H', 'H.6', 'Remaja putri bermasalah');
INSERT INTO `sub_kategori` VALUES ('H', 'H.7', 'Ibu hamil tidak normal dan keluarga');
INSERT INTO `sub_kategori` VALUES ('H', 'H.8', 'Ibu bersalin tidak normal');
INSERT INTO `sub_kategori` VALUES ('H', 'H.9', 'Ibu bayi dan balita');
INSERT INTO `sub_kategori` VALUES ('I ', 'I.1', 'Melaksanakan kolaborasi dengan tim kesehatan lain');
INSERT INTO `sub_kategori` VALUES ('J', 'J.1', 'Remaja putri bermasalah');
INSERT INTO `sub_kategori` VALUES ('J', 'J.10', 'Gangguan kehamilan');
INSERT INTO `sub_kategori` VALUES ('J', 'J.11', 'Gangguan alat reproduksi');
INSERT INTO `sub_kategori` VALUES ('J', 'J.2', 'Ibu hamil tidak normal');
INSERT INTO `sub_kategori` VALUES ('J', 'J.3', 'Ibu bersalin tidak normal');
INSERT INTO `sub_kategori` VALUES ('J', 'J.4', 'Ibu nifas tidak normal');
INSERT INTO `sub_kategori` VALUES ('J', 'J.5', 'Bayi baru lahir tidak normal');
INSERT INTO `sub_kategori` VALUES ('J', 'J.6', 'Bayi dan balita sakit');
INSERT INTO `sub_kategori` VALUES ('J', 'J.7', 'KB/masa interval');
INSERT INTO `sub_kategori` VALUES ('J', 'J.8', 'Wanita menopause');
INSERT INTO `sub_kategori` VALUES ('J', 'J.9', 'Ibu dengan PMS (Penyakit Menular Seksual)');
INSERT INTO `sub_kategori` VALUES ('K', 'K.1', 'Kasus Normal');
INSERT INTO `sub_kategori` VALUES ('K', 'K.2', 'Kasus tidak normal');
INSERT INTO `sub_kategori` VALUES ('L', 'L.1', 'Pranikah');
INSERT INTO `sub_kategori` VALUES ('L', 'L.10', 'Ibu nifas tidak normal');
INSERT INTO `sub_kategori` VALUES ('L', 'L.11', 'Bayi dan balita');
INSERT INTO `sub_kategori` VALUES ('L', 'L.12', 'Bayi dan balita sakit');
INSERT INTO `sub_kategori` VALUES ('L', 'L.13', 'KB/Masa interval');
INSERT INTO `sub_kategori` VALUES ('L', 'L.14', 'Wanita menopause');
INSERT INTO `sub_kategori` VALUES ('L', 'L.15', 'Ibu dengan PMS (Penyakit Menular Seksual)');
INSERT INTO `sub_kategori` VALUES ('L', 'L.16', 'Pasien pre & post operasi');
INSERT INTO `sub_kategori` VALUES ('L', 'L.17', 'Gangguan kehamilan');
INSERT INTO `sub_kategori` VALUES ('L', 'L.18', 'Gangguan alat reproduksi');
INSERT INTO `sub_kategori` VALUES ('L', 'L.2', 'Ibu hamil ');
INSERT INTO `sub_kategori` VALUES ('L', 'L.3', 'Persalinan normal');
INSERT INTO `sub_kategori` VALUES ('L', 'L.4', 'Ibu nifas normal');
INSERT INTO `sub_kategori` VALUES ('L', 'L.5', 'Bayi baru lahir');
INSERT INTO `sub_kategori` VALUES ('L', 'L.6', 'Remaja putri');
INSERT INTO `sub_kategori` VALUES ('L', 'L.7', 'Remaja putri bermasalah');
INSERT INTO `sub_kategori` VALUES ('L', 'L.8', 'Ibu hamil tidak normal');
INSERT INTO `sub_kategori` VALUES ('L', 'L.9', 'Persalinan tidak normal');
INSERT INTO `sub_kategori` VALUES ('M', 'M.1', 'Menyusun program tahunan');
INSERT INTO `sub_kategori` VALUES ('M', 'M.10', 'Membuat kohor/kartu masalah');
INSERT INTO `sub_kategori` VALUES ('M', 'M.11', 'membuat program asuhan');
INSERT INTO `sub_kategori` VALUES ('M', 'M.12', 'Melaksanakan kunjungan keluarga');
INSERT INTO `sub_kategori` VALUES ('M', 'M.13', 'Membina posyandu');
INSERT INTO `sub_kategori` VALUES ('M', 'M.14', 'Membina dasa wisma');
INSERT INTO `sub_kategori` VALUES ('M', 'M.15', 'membina kader KPKIA');
INSERT INTO `sub_kategori` VALUES ('M', 'M.16', 'Membina kader PPKBD');
INSERT INTO `sub_kategori` VALUES ('M', 'M.17', 'Membina/melatih dukun beranak');
INSERT INTO `sub_kategori` VALUES ('M', 'M.18', 'Musyawarah masyarakat desa');
INSERT INTO `sub_kategori` VALUES ('M', 'M.19', 'Membina/melatih dukun beranak');
INSERT INTO `sub_kategori` VALUES ('M', 'M.2', 'Menyusun instrumen pengkajian');
INSERT INTO `sub_kategori` VALUES ('M', 'M.3', 'Pengkajian individu pada keluarga');
INSERT INTO `sub_kategori` VALUES ('M', 'M.4', 'Pengkajian masyarakat/wilayah');
INSERT INTO `sub_kategori` VALUES ('M', 'M.5', 'Pengkajian keluarga');
INSERT INTO `sub_kategori` VALUES ('M', 'M.6', 'Menentukan masalah');
INSERT INTO `sub_kategori` VALUES ('M', 'M.7', 'Membuat laporan pengkajian');
INSERT INTO `sub_kategori` VALUES ('M', 'M.8', 'Membuat peta wilayah');
INSERT INTO `sub_kategori` VALUES ('M', 'M.9', 'Membuat peta masalah');

-- ----------------------------
-- Table structure for sub_kat_bln
-- ----------------------------
DROP TABLE IF EXISTS `sub_kat_bln`;
CREATE TABLE `sub_kat_bln` (
  `id_sub_kat_bln` varchar(225) NOT NULL,
  `id_kat_bln` varchar(225) NOT NULL,
  `sub_kat_bln` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_sub_kat_bln`),
  KEY `id_kat_bln` (`id_kat_bln`),
  CONSTRAINT `sub_kat_bln_ibfk_1` FOREIGN KEY (`id_kat_bln`) REFERENCES `kat_bln` (`id_kat_bln`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sub_kat_bln
-- ----------------------------
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_10_1', 'katbln_10', 'Karya ilmiah hasil penelitian bidang kesehatan yang dipublikasikan');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_10_2', 'katbln_10', 'Karya tulis berupa tinjauan atau ulasan ilmiah dengan gagasan sendiri dalam bidang kesehatan yang tidak dipublikasikan tetapi didokumentasikan pada perpustakaan instansi yang bersangkutan ');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_10_3', 'katbln_10', 'Membuat karya tulis/karya ilmiah berupa tinjauan atau ulasan ilmiah dengan gagasan sendiri dalam bidang kesehatan yang dipublikasikan ');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_10_4', 'katbln_10', 'Tulisan ilmiah populer di bidang kebidanan yang disebarluaskan melalui media massa');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_10_5', 'katbln_10', 'Menyampaikan prasarana berupa tinjauan, gagasan dan atau ulasan ilmiah di bidang kebidanan pada pertemuan ilmiah');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_11_1', 'katbln_11', 'Terjemahan/saduran di bidang kebidanan yang dipublikasikan ');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_11_2', 'katbln_11', 'Terjemahan/saduran di bidang kebidanan  yang tidak dipublikasikan dalam bentuk');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_11_3', 'katbln_11', 'Membuat abstrak tulisan ilmiah yang dimuat dalam penerbitan');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_12_1', 'katbln_12', 'membimbing bidan yang berada di bawah jenjang jabatannya');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_13_1', 'katbln_13', 'Membuat buku pedoman/petunjuk pelaksanaan/petunjuk teknis di bidang kebidanan');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_14_1', 'katbln_14', 'Mengembangkan teknologi tepat guna dibidang kesehatan');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_1_1', 'katbln_1', 'Sarjana muda/Akademi/Diploma III Bidan');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_1_2', 'katbln_1', 'Diploma II Bidan');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_2_1', 'katbln_2', 'Lamanya lebih dari 960 jam');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_2_2', 'katbln_2', 'Lamanya 641 sampai 960 jam');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_2_3', 'katbln_2', 'Lamanya 401 sampai 640 jam');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_2_4', 'katbln_2', 'Lamanya 161 sampai 400 jam');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_2_5', 'katbln_2', 'Lamanya 81 sampai 160 jam');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_2_6', 'katbln_2', 'Lamanya 30 sampai 80 jam');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_3_1', 'katbln_3', 'Mengajar/melatih yang berkaitan dengan bidang kebidanan');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_4_1', 'katbln_4', 'Mengikuti seminar/lokakarya internasional/nasional ');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_4_2', 'katbln_4', 'Mengikuti/berperan serta dalam delegasi ilmiah ');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_5_1', 'katbln_5', 'Tingkat internasional/nasional sebagai');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_5_2', 'katbln_5', 'Tingkat Propinsi sebagai');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_6_1', 'katbln_6', 'Menjadi anggota aktif tim penilai');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_7_1', 'katbln_7', ' Memperoleh ijazah/gelar yang tidak sesuai dengan bidang tugas pokoknya ');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_8_1', 'katbln_8', 'Tanda kehormatan Satya lencana karya satya');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_8_2', 'katbln_8', 'Gelar kehormatan di bidang akademis');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_9_1', 'katbln_9', 'Sebagai ketua');
INSERT INTO `sub_kat_bln` VALUES ('subkatbln_9_2', 'katbln_9', 'Sebagai anggota');

-- ----------------------------
-- Table structure for unit_kerja
-- ----------------------------
DROP TABLE IF EXISTS `unit_kerja`;
CREATE TABLE `unit_kerja` (
  `id_unit_kerja` int(11) NOT NULL AUTO_INCREMENT,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `alamat_unit_kerja` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `aktif` enum('N','Y') DEFAULT 'Y',
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_unit_kerja`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of unit_kerja
-- ----------------------------
INSERT INTO `unit_kerja` VALUES ('6', 'Dinas Kesehatan', 'Kab. Tangerang', '-', 'Y', 'baim', '2017-01-13 10:04:54', null, '2017-01-13 10:04:54');
INSERT INTO `unit_kerja` VALUES ('7', 'Puskesmas Cikupa', 'Jl. Raya Serang Km 32 Cikupa', '', 'Y', 'baim', '2017-01-17 08:49:29', null, '2017-01-17 08:49:29');
INSERT INTO `unit_kerja` VALUES ('8', 'Puskesmas Tigaraksa', 'Jl. Arya Sentika Tigaraksa', '', 'Y', 'baim', '2017-01-17 08:49:53', null, '2017-01-17 08:49:53');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `level` char(20) NOT NULL,
  `aktif` enum('N','Y') NOT NULL DEFAULT 'Y',
  `foto_user` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(50) DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@admin.com', '098654', 'administrator', 'Y', 'logo_warna.jpg', 'baim', '2017-01-13 13:27:52', 'baim', '2017-01-13 13:31:33');

-- ----------------------------
-- View structure for v_id_keg
-- ----------------------------
DROP VIEW IF EXISTS `v_id_keg`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_id_keg` AS SELECT
kegiatan.id_kegiatan,
pegawai.id_pegawai
FROM
kegiatan
INNER JOIN sub_kategori ON kegiatan.id_sub_kategori = sub_kategori.id_sub_kategori
INNER JOIN kategori ON sub_kategori.id_kategori = kategori.id_kategori
INNER JOIN kat_jab ON kategori.id_kat_jab = kat_jab.id_kat_jab
INNER JOIN jabatan ON jabatan.id_kat_jab = kat_jab.id_kat_jab
INNER JOIN pegawai ON pegawai.id_jabatan = jabatan.id_jabatan ;

-- ----------------------------
-- View structure for v_jab_katjab
-- ----------------------------
DROP VIEW IF EXISTS `v_jab_katjab`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_jab_katjab` AS select `jabatan`.`id_jabatan` AS `id_jabatan`,`jabatan`.`id_kat_jab` AS `id_kat_jab`,`jabatan`.`jabatan` AS `jabatan`,`jabatan`.`created_by` AS `created_by`,`jabatan`.`created_at` AS `created_at`,`jabatan`.`update_by` AS `update_by`,`jabatan`.`update_at` AS `update_at`,`kat_jab`.`kat_jab` AS `kat_jab` from (`jabatan` join `kat_jab` on((`jabatan`.`id_kat_jab` = `kat_jab`.`id_kat_jab`))); ;

-- ----------------------------
-- View structure for v_kegiatan
-- ----------------------------
DROP VIEW IF EXISTS `v_kegiatan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_kegiatan` AS SELECT
kegiatan_harian.id_kh AS id_kh,
kegiatan_harian.id_jabatan AS id_jabatan,
kegiatan_harian.id_pegawai AS id_pegawai,
kegiatan_harian.tgl_kegiatan AS tgl_kegiatan,
kegiatan_harian.id_kategori AS id_kategori,
kegiatan_harian.id_sub_kategori AS id_sub_kategori,
kegiatan_harian.id_kegiatan AS id_kegiatan,
kegiatan_harian.nilai AS nilai,
pegawai.nip AS nip,
pegawai.nama_pegawai AS nama_pegawai,
pegawai.tempat_lahir AS tempat_lahir,
pegawai.tgl_lahir AS tgl_lahir,
pegawai.nomor_karpeg AS nomor_karpeg,
pegawai.jenis_kelamin AS jenis_kelamin,
pegawai.pendidikan AS pendidikan,
pegawai.pangkat AS pangkat,
pegawai.golongan AS golongan,
pegawai.tgl_tmt AS tgl_tmt,
pegawai.masa_kerja_lama AS masa_kerja_lama,
pegawai.masa_kerja_baru AS masa_kerja_baru,
kegiatan.kegiatan AS kegiatan,
jabatan.jabatan AS jabatan,
kegiatan_harian.created_at AS created_at,
kegiatan_harian.created_by AS created_by,
kegiatan_harian.update_by AS update_by,
kegiatan_harian.update_at AS update_at,
kategori.kategori AS kategori,
sub_kategori.sub_kategori AS sub_kategori,
jabatan.id_kat_jab AS id_kat_jab
from (((((`kegiatan_harian` join `pegawai` on((`kegiatan_harian`.`id_pegawai` = `pegawai`.`id_pegawai`))) join `kegiatan` on((`kegiatan_harian`.`id_kegiatan` = `kegiatan`.`id_kegiatan`))) join `jabatan` on((`kegiatan_harian`.`id_jabatan` = `jabatan`.`id_jabatan`))) join `kategori` on((`kegiatan_harian`.`id_kategori` = `kategori`.`id_kategori`))) join `sub_kategori` on((`kegiatan_harian`.`id_sub_kategori` = `sub_kategori`.`id_sub_kategori`))) ;

-- ----------------------------
-- View structure for v_keg_bln
-- ----------------------------
DROP VIEW IF EXISTS `v_keg_bln`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_keg_bln` AS select `kegiatan_bulanan`.`id_kh_bln` AS `id_kh_bln`,`kegiatan_bulanan`.`id_jabatan` AS `id_jabatan`,`kegiatan_bulanan`.`id_pegawai` AS `id_pegawai`,`kegiatan_bulanan`.`bln_keg` AS `bln_keg`,`kegiatan_bulanan`.`thn_keg` AS `thn_keg`,`kegiatan_bulanan`.`id_kat_bln` AS `id_kat_bln`,`kegiatan_bulanan`.`id_sub_kat_bln` AS `id_sub_kat_bln`,`kegiatan_bulanan`.`id_keg_bln` AS `id_keg_bln`,`kegiatan_bulanan`.`nilai` AS `nilai`,`kegiatan_bulanan`.`created_by` AS `created_by`,`kegiatan_bulanan`.`created_at` AS `created_at`,`kegiatan_bulanan`.`update_by` AS `update_by`,`kegiatan_bulanan`.`update_at` AS `update_at`,`keg_bln`.`keg_bln` AS `keg_bln`,`pegawai`.`nama_pegawai` AS `nama_pegawai`,`jabatan`.`jabatan` AS `jabatan`,`kat_bln`.`kat_bln` AS `kat_bln`,`sub_kat_bln`.`sub_kat_bln` AS `sub_kat_bln`,`jabatan`.`id_kat_jab` AS `id_kat_jab` from (((((`kegiatan_bulanan` join `keg_bln` on((`kegiatan_bulanan`.`id_keg_bln` = `keg_bln`.`id_keg_bln`))) join `pegawai` on((`kegiatan_bulanan`.`id_pegawai` = `pegawai`.`id_pegawai`))) join `jabatan` on((`pegawai`.`id_jabatan` = `jabatan`.`id_jabatan`))) join `sub_kat_bln` on((`kegiatan_bulanan`.`id_sub_kat_bln` = `sub_kat_bln`.`id_sub_kat_bln`))) join `kat_bln` on((`kegiatan_bulanan`.`id_kat_bln` = `kat_bln`.`id_kat_bln`))); ;

-- ----------------------------
-- View structure for v_pegawai_jabatan
-- ----------------------------
DROP VIEW IF EXISTS `v_pegawai_jabatan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_pegawai_jabatan` AS select `pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nip` AS `nip`,`pegawai`.`nama_pegawai` AS `nama_pegawai`,`pegawai`.`tempat_lahir` AS `tempat_lahir`,`pegawai`.`tgl_lahir` AS `tgl_lahir`,`pegawai`.`nomor_karpeg` AS `nomor_karpeg`,`pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`pegawai`.`pendidikan` AS `pendidikan`,`pegawai`.`pangkat` AS `pangkat`,`pegawai`.`golongan` AS `golongan`,`pegawai`.`tgl_tmt` AS `tgl_tmt`,`pegawai`.`id_jabatan` AS `id_jabatan`,`pegawai`.`masa_kerja_lama` AS `masa_kerja_lama`,`pegawai`.`masa_kerja_baru` AS `masa_kerja_baru`,`pegawai`.`id_unit_kerja` AS `id_unit_kerja`,`pegawai`.`created_by` AS `created_by`,`pegawai`.`created_at` AS `created_at`,`pegawai`.`update_by` AS `update_by`,`pegawai`.`update_at` AS `update_at`,`jabatan`.`jabatan` AS `jabatan`,`unit_kerja`.`unit_kerja` AS `unit_kerja` from ((`pegawai` join `jabatan` on((`pegawai`.`id_jabatan` = `jabatan`.`id_jabatan`))) join `unit_kerja` on((`pegawai`.`id_unit_kerja` = `unit_kerja`.`id_unit_kerja`))); ;

-- ----------------------------
-- View structure for v_peg_unit_jab
-- ----------------------------
DROP VIEW IF EXISTS `v_peg_unit_jab`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_peg_unit_jab` AS select `pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nip` AS `nip`,`pegawai`.`nama_pegawai` AS `nama_pegawai`,`pegawai`.`tempat_lahir` AS `tempat_lahir`,`pegawai`.`tgl_lahir` AS `tgl_lahir`,`pegawai`.`nomor_karpeg` AS `nomor_karpeg`,`pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`pegawai`.`pendidikan` AS `pendidikan`,`pegawai`.`pangkat` AS `pangkat`,`pegawai`.`golongan` AS `golongan`,`pegawai`.`tgl_tmt` AS `tgl_tmt`,`pegawai`.`id_jabatan` AS `id_jabatan`,`pegawai`.`masa_kerja_lama` AS `masa_kerja_lama`,`pegawai`.`masa_kerja_baru` AS `masa_kerja_baru`,`pegawai`.`id_unit_kerja` AS `id_unit_kerja`,`pegawai`.`created_by` AS `created_by`,`pegawai`.`created_at` AS `created_at`,`pegawai`.`update_by` AS `update_by`,`pegawai`.`update_at` AS `update_at`,`jabatan`.`jabatan` AS `jabatan`,`unit_kerja`.`unit_kerja` AS `unit_kerja` from ((`pegawai` join `jabatan` on((`pegawai`.`id_jabatan` = `jabatan`.`id_jabatan`))) join `unit_kerja` on((`pegawai`.`id_unit_kerja` = `unit_kerja`.`id_unit_kerja`))); ;

-- ----------------------------
-- Function structure for fc_jmlcl
-- ----------------------------
DROP FUNCTION IF EXISTS `fc_jmlcl`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fc_jmlcl`(`id` VARCHAR(225) , `id_peg` INT(11), `tgl1` DATE, `tgl2` DATE) RETURNS double
BEGIN
	DECLARE jumlah DOUBLE;
		SELECT SUM(nilai) * kali INTO jumlah FROM kegiatan_harian 
		LEFT OUTER JOIN kegiatan ON kegiatan_harian.id_kegiatan = kegiatan.id_kegiatan 
		LEFT OUTER JOIN pegawai ON kegiatan_harian.id_pegawai = pegawai.id_pegawai
		WHERE kegiatan_harian.id_kegiatan=id
		AND kegiatan_harian.id_pegawai=id_peg
		AND kegiatan_harian.tgl_kegiatan BETWEEN tgl1 AND tgl2;	
	RETURN jumlah;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for fc_jmlcl_copy
-- ----------------------------
DROP FUNCTION IF EXISTS `fc_jmlcl_copy`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fc_jmlcl_copy`(`id_peg` INT(11) ) RETURNS int(11)
BEGIN	
	DECLARE xx VARCHAR(225); 
		SELECT
			kegiatan.id_kegiatan INTO xx
			FROM
			kegiatan
			INNER JOIN sub_kategori ON kegiatan.id_sub_kategori = sub_kategori.id_sub_kategori
			INNER JOIN kategori ON sub_kategori.id_kategori = kategori.id_kategori
			INNER JOIN kat_jab ON kategori.id_kat_jab = kat_jab.id_kat_jab
			INNER JOIN jabatan ON jabatan.id_kat_jab = kat_jab.id_kat_jab
			INNER JOIN pegawai ON pegawai.id_jabatan = jabatan.id_jabatan
			WHERE pegawai.id_pegawai = id_peg;
	RETURN xx;
END
;;
DELIMITER ;

-- CREATE TABLE KELAS
CREATE TABLE `nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nilai_tugas` int(11),
  `nilai_uts` int(11),
  `nilai_uas` int(11),
  `id_tp` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas_siswa` int(11) NOT NULL,

  PRIMARY KEY (id)
);
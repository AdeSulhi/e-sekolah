-- CREATE TABLE SEMESTER
CREATE TABLE `semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_semester` int(11) NOT NULL,
  `nama_semester` varchar(25) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL,
  PRIMARY KEY (id)
);

-- INSERT TABLE SEMESTER
INSERT INTO  `semester` (kode_semester, nama_semester, tahun_ajaran) VALUES
('20171', 'Semester Ganjil 2017', '2017/2018'),
('20172', 'Semester Genap 2018', '2017/2018');

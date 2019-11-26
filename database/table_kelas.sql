-- CREATE TABLE KELAS
CREATE TABLE `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(11) NOT NULL,
  `id_tp` varchar(9) NOT NULL,
  PRIMARY KEY (id)
);

-- INSERT TABLE SEMESTER
INSERT INTO  `kelas` (nama, id_tp) VALUES
('7-A', '1'),
('7-B', '1'),
('8-A', '1'),
('8-B', '1'),
('9-A', '1'),
('9-B', '1');

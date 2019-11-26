-- BUAT TABLE GURU
CREATE TABLE guru (
  id int(11) NOT NULL AUTO_INCREMENT,
  nip varchar(25) NOT NULL,
  nama varchar(50) NOT NULL,
  tempat_lahir varchar(25) NOT NULL,
  tgl_lahir date NOT NULL,
  jenis_kelamin enum('Laki-laki','Perempuan') NOT NULL,
  foto varchar(50),
  PRIMARY KEY (id)
);


-- INSERT TABLE GURU
INSERT INTO  guru (nip, nama, tempat_lahir, tgl_lahir, jenis_kelamin) VALUES
('1025001', 'RIZKA ZAYYANA', 'Jakarta', '1985-10-10', 'Perempuan'),
('1025002', 'RITTAH RIANI ROMDIN', 'Depok', '1985-10-11', 'Perempuan'),
('1025003', 'QUSYAIRI FADIL', 'Tangerang', '1985-10-12', 'Laki-laki'),
('1025004', 'ABDUL FATAH', 'Bandung', '1985-10-13', 'Laki-laki'),
('1025005', 'RINA YUSNARITA', 'Sukabumi', '1985-10-14', 'Perempuan'),
('1025006', 'ULFAH QORI KHAIRUNNISA', 'Subang', '1985-10-15', 'Perempuan');


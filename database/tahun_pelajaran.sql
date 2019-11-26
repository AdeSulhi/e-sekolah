-- CREATE TABLE SEMESTER
CREATE TABLE tahun_pelajaran (
	id int(11) NOT NULL AUTO_INCREMENT,
	nama varchar(9) NOT NULL,
	status enum('Aktif','Pasif') NOT NULL,
  PRIMARY KEY (id)
);

-- INSERT TABLE SEMESTER
INSERT INTO  tahun_pelajaran (nama, status) VALUES ('2017/2018', 'Aktif');


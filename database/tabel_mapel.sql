-- BUAT TABLE MAPEL
CREATE TABLE mapel (
  id int(11) NOT NULL AUTO_INCREMENT,
  kode varchar(12) NOT NULL,
  nama varchar(25) NOT NULL,
  nip varchar(16) NOT NULL,
  PRIMARY KEY (id)
);


-- INSERT TABLE MAPEL
INSERT INTO  mapel (kode, nama, nip) VALUES
('IND-7101', 'Bahasa Indonesia', '1025001'),
('IND-7202', 'Bahasa Indonesia', '1025001'),
('IND-8103', 'Bahasa Indonesia', '1025001'),
('IND-8204', 'Bahasa Indonesia', '1025001'),
('IND-9105', 'Bahasa Indonesia', '1025001'),
('IND-9206', 'Bahasa Indonesia', '1025001'),
('ING-7101', 'Bahasa Inggris', '1025002'),
('ING-7202', 'Bahasa Inggris', '1025002'),
('ING-8103', 'Bahasa Inggris', '1025002'),
('ING-8204', 'Bahasa Inggris', '1025002'),
('ING-9105', 'Bahasa Inggris', '1025002'),
('ING-9206', 'Bahasa Inggris', '1025002'),
('ARB-7101', 'Bahasa Arab', '1025003'),
('ARB-7202', 'Bahasa Arab', '1025003'),
('ARB-8103', 'Bahasa Arab', '1025003'),
('ARB-8204', 'Bahasa Arab', '1025003'),
('ARB-9105', 'Bahasa Arab', '1025003'),
('ARB-9206', 'Bahasa Arab', '1025003'),
('IPA-7101', 'Ilmu Pengetahuan Alam', '1025004'),
('IPA-7202', 'Ilmu Pengetahuan Alam', '1025004'),
('IPA-8103', 'Ilmu Pengetahuan Alam', '1025004'),
('IPA-8204', 'Ilmu Pengetahuan Alam', '1025004'),
('IPA-9105', 'Ilmu Pengetahuan Alam', '1025004'),
('IPA-9206', 'Ilmu Pengetahuan Alam', '1025004'),
('IPS-7101', 'Ilmu Pengetahuan Sosial', '1025005'),
('IPS-7202', 'Ilmu Pengetahuan Sosial', '1025005'),
('IPS-8103', 'Ilmu Pengetahuan Sosial', '1025005'),
('IPS-8204', 'Ilmu Pengetahuan Sosial', '1025005'),
('IPS-9105', 'Ilmu Pengetahuan Sosial', '1025005'),
('IPS-9206', 'Ilmu Pengetahuan Sosial', '1025005'),
('MTK-7101', 'Matematika', '1025006'),
('MTK-7202', 'Matematika', '1025006'),
('MTK-8103', 'Matematika', '1025006'),
('MTK-8204', 'Matematika', '1025006'),
('MTK-9105', 'Matematika', '1025006'),
('MTK-9206', 'Matematika', '1025006');

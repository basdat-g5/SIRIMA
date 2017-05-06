--insert data to jenjang
insert into jenjang (nama) values ('S1');
insert into jenjang (nama) values ('S2');
insert into jenjang (nama) values ('S3');

--insert data to program_studi
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (1,'Kedokteran','Reguler','Kedokteran','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (2,'Matematika','Reguler','Matematika dan Pengetahuan Alam','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (3,'Teknik Sipil','Reguler','Teknik','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (4,'Ilmu Komputer','Reguler','Ilmu Komputer','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (5,'Kedokteran','Reguler','Kedokteran','S2');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (6,'Fisika','Reguler','Matematika dan Pengetahuan Alam','S2');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (7,'Teknik Sipil','Reguler','Teknik','S2');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (8,'Ilmu Komputer','Reguler','Ilmu Komputer','S2');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (9,'Kedokteran','Reguler','Kedokteran','S3');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (10,'Biologi','Reguler','Matematika dan Pengetahuan Alam','S3');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (11,'Teknik Sipil','Reguler','Teknik','S3');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (12,'Ilmu Komputer','Reguler','Ilmu Komputer','S3');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (13,'Kedokteran','Internasional','Kedokteran','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (14,'Biologi','Internasional','Matematika dan Pengetahuan Alam','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (15,'Teknik Industri','Internasional','Teknik','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (16,'Ilmu Komputer','Internasional','Ilmu Komputer','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (17,'Kedokteran','Paralel','Kedokteran','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (18,'Biologi','Paralel','Matematika dan Pengetahuan Alam','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (19,'Teknik Industri','Paralel','Teknik','S1');
insert into program_studi (kode,nama,jenis_kelas,nama_fakultas,jenjang) values (20,'Ilmu Komputer','Paralel','Ilmu Komputer','S1');

--insert data to periode_penerimaan
insert into periode_penerimaan (nomor,tahun) values (1,'2007');
insert into periode_penerimaan (nomor,tahun) values (2,'2008');
insert into periode_penerimaan (nomor,tahun) values (3,'2009');

--insert data to jadwal_penting
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (1,'2007','S1','20/6/2007 08:00','21/7/2007 09:00','Pendaftaran Online');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (2,'2007','S1','21/7/2007 08:01','13/8/2007 09:01','Pembayaran');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (3,'2007','S1','14/8/2007 08:02','16/8/2007 09:02','Pencetakan Kartu Tanda Ujian');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (4,'2007','S1','17/8/2007 07:30','24/8/2007 14:00','Ujian Saringan Masuk');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (5,'2007','S1','29/8/2007 12:04','31/8/2007 14:01','Pengumuman Hasil Seleksi Masuk');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (6,'2008','S2','20/6/2008 08:00','21/7/2008 09:00','Pendaftaran Online');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (7,'2008','S2','21/7/2008 08:01','13/8/2008 09:01','Pembayaran');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (8,'2008','S2','14/8/2008 08:02','16/8/2008 09:02','Pencetakan Kartu Tanda Ujian');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (9,'2008','S2','17/8/2008 07:30','24/8/2008 14:00','Ujian Saringan Masuk');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (10,'2008','S2','29/8/2008 12:04','31/8/2008 14:01','Pengumuman Hasil Seleksi Masuk');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (11,'2009','S3','20/6/2009 08:00','21/7/2009 09:00','Pendaftaran Online');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (12,'2009','S3','21/7/2009 08:01','13/8/2009 09:01','Pembayaran');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (13,'2009','S3','14/8/2009 08:02','16/8/2009 09:02','Pencetakan Kartu Tanda Ujian');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (14,'2009','S3','17/8/2009 07:30','24/8/2009 14:00','Ujian Saringan Masuk');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (15,'2009','S3','29/8/2009 12:04','31/8/2009 14:01','Pengumuman Hasil Seleksi Masuk');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (16,'2008','S1','20/6/2008 08:00','21/7/2008 09:00','Pendaftaran Online');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (17,'2008','S1','21/7/2008 08:01','13/8/2008 09:01','Pembayaran');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (18,'2008','S1','14/8/2008 08:02','16/8/2008 09:02','Pencetakan Kartu Tanda Ujian');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (19,'2008','S1','17/8/2008 07:30','24/8/2008 14:00','Ujian Saringan Masuk');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (20,'2008','S1','29/8/2008 12:04','31/8/2008 14:01','Pengumuman Hasil Seleksi Masuk');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (21,'2008','S1','20/6/2009 08:00','21/7/2009 09:00','Pendaftaran Online');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (22,'2008','S1','21/7/2009 08:01','13/8/2009 09:01','Pembayaran');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (23,'2008','S1','14/8/2009 08:02','16/8/2009 09:02','Pencetakan Kartu Tanda Ujian');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (24,'2008','S1','17/8/2009 07:30','24/8/2009 14:00','Ujian Saringan Masuk');
insert into jadwal_penting (nomor,tahun,jenjang,waktu_mulai,waktu_selesai,deskripsi) values (25,'2008','S1','29/8/2009 12:04','31/8/2009 14:01','Pengumuman Hasil Seleksi Masuk');




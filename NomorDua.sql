CREATE DATABASE db_uap2094;

CREATE TABLE table_barang (
	kode_barang varchar(4),
	nama_barang varchar(25),
	harga_barang int(8),
	jumlah_barang int(4)
);

CREATE TABLE table_barang_masuk (
	kode_barang_masuk varchar(5),
	kode_barang varchar(4),
	nama_barang varchar(20),
	jumlah_barang_masuk int(5)
);



MYSQL Database

- membuat user baru
$ CREATE USER 'nama'@'localhost' IDENTIFIED 'password';

kemudian kita berikan izin username yang sudah kita buat agar dapat mengakses semua server database.

$ GRANT ALL PRIVILEGES * . * TO 'nama'@'localhost';

dan terapkan configurasi yang telah kita buat

$ FLUSH PRIVILEGES;

- login ke mysql dengan user yang baru saja kita buat
mysql -u 'nama' -p
password

- membuat database baru
CREATE DATABASE *nama database*;

- menampilkan list database
SHOW DATABASES;

- masuk / menggunakan database 
USE *nama database*;

- menampilkan tables 
SHOW TABLES;

- membuat table 
CREATE TABLE namaTable (
     id    INT,
     name  VARCHAR DEFAULT NOT NULL,
     price INT DEFAULT 0
     PRIMARY KEY(id)
);

- menambahkan column baru kedalam table
INSERT INTO namaTable( namaColumn ) VALUES( optionValueList );

- menghapus table
DROP TABLE namaTable;


Setting environment for using XAMPP for Windows.
LABFIK@DESKTOP-SE3RP37 c:\xampp
# mysql -u root
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 134
Server version: 10.4.32-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases
    -> ;
+--------------------+
| Database           |
+--------------------+
| elektro            |
| information_schema |
| mahasiswa          |
| mysql              |
| performance_schema |
| phpmyadmin         |
| test               |
+--------------------+
7 rows in set (0.001 sec)

MariaDB [(none)]> use mahasiswa;
Database changed
MariaDB [mahasiswa]> desc mahasiswa;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| Nama  | varchar(15) | NO   |     | NULL    |       |
| Kelas | varchar(5)  | NO   |     | NULL    |       |
| Nim   | varchar(12) | NO   |     | NULL    |       |
+-------+-------------+------+-----+---------+-------+
3 rows in set (0.010 sec)

MariaDB [mahasiswa]> alter table mahasiswa add primary key(Nim);
Query OK, 0 rows affected (0.438 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [mahasiswa]> create table MataKuliah;
ERROR 1113 (42000): A table must have at least 1 column
MariaDB [mahasiswa]> create table MataKuliah (NamaMatkul varchar(25), KodeDosen varchar(12), kodeMatkul varchar(10) primary key, Nim varchar(12))
    -> ;
Query OK, 0 rows affected (0.115 sec)

MariaDB [mahasiswa]>
MariaDB [mahasiswa]> des Dosen;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'des Dosen' at line 1
MariaDB [mahasiswa]> shpw dosen;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'shpw dosen' at line 1
MariaDB [mahasiswa]> desc dosen;
+-----------+-------------+------+-----+---------+-------+
| Field     | Type        | Null | Key | Default | Extra |
+-----------+-------------+------+-----+---------+-------+
| Nama      | varchar(15) | NO   |     | NULL    |       |
| KodeDosen | varchar(5)  | NO   | PRI | NULL    |       |
+-----------+-------------+------+-----+---------+-------+
2 rows in set (0.009 sec)

MariaDB [mahasiswa]> desc mahasiswa;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| Nama  | varchar(15) | NO   |     | NULL    |       |
| Kelas | varchar(5)  | NO   |     | NULL    |       |
| Nim   | varchar(12) | NO   | PRI | NULL    |       |
+-------+-------------+------+-----+---------+-------+
3 rows in set (0.008 sec)

MariaDB [mahasiswa]> desc MataKuliah;
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| NamaMatkul | varchar(25) | YES  |     | NULL    |       |
| KodeDosen  | varchar(12) | YES  |     | NULL    |       |
| kodeMatkul | varchar(10) | NO   | PRI | NULL    |       |
| Nim        | varchar(12) | YES  |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
4 rows in set (0.011 sec)

MariaDB [mahasiswa]> alter table MataKuliah KodeDosen adad foreign key(Nim) references mahasiswa(Nim);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'adad foreign key(Nim) references mahasiswa(Nim)' at line 1
MariaDB [mahasiswa]> alter table MataKuliah KodeDosen add foreign key(Nim) references mahasiswa(Nim);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'add foreign key(Nim) references mahasiswa(Nim)' at line 1
MariaDB [mahasiswa]> alter table MataKuliah add foreign key(Nim) references mahasiswa(Nim);
Query OK, 0 rows affected (0.677 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [mahasiswa]> alter table MataKuliah KodeDosen add foreign key(KodeDosen) references dosen(KodeDosen);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'add foreign key(KodeDosen) references dosen(KodeDosen)' at line 1
MariaDB [mahasiswa]> alter table MataKuliah add foreign key(KodeDosen) references dosen(KodeDosen);
Query OK, 0 rows affected (0.558 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [mahasiswa]> desc MataKuliah;
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| NamaMatkul | varchar(25) | YES  |     | NULL    |       |
| KodeDosen  | varchar(12) | YES  | MUL | NULL    |       |
| kodeMatkul | varchar(10) | NO   | PRI | NULL    |       |
| Nim        | varchar(12) | YES  | MUL | NULL    |       |
+------------+-------------+------+-----+---------+-------+
4 rows in set (0.009 sec)

MariaDB [mahasiswa]> desc dosen;
+-----------+-------------+------+-----+---------+-------+
| Field     | Type        | Null | Key | Default | Extra |
+-----------+-------------+------+-----+---------+-------+
| Nama      | varchar(15) | NO   |     | NULL    |       |
| KodeDosen | varchar(5)  | NO   | PRI | NULL    |       |
+-----------+-------------+------+-----+---------+-------+
2 rows in set (0.011 sec)

MariaDB [mahasiswa]> desc mahasiswa;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| Nama  | varchar(15) | NO   |     | NULL    |       |
| Kelas | varchar(5)  | NO   |     | NULL    |       |
| Nim   | varchar(12) | NO   | PRI | NULL    |       |
+-------+-------------+------+-----+---------+-------+
3 rows in set (0.011 sec)

MariaDB [mahasiswa]>

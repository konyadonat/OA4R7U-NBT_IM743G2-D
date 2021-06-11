CREATE USER 'OA4R7U-NBT_IM743G2-D'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT USAGE ON *.* TO 'OA4R7U-NBT_IM743G2-D'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `OA4R7U-NBT_IM743G2-D`;GRANT ALL PRIVILEGES ON `OA4R7U-NBT\_IM743G2-D`.* TO 'OA4R7U-NBT_IM743G2-D'@'localhost';

CREATE TABLE irok(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nev VARCHAR(40) NOT NULL,
    szuletesiev INT NOT NULL,
    konyvekszama INT NOT NULL DEFAULT 1
);

INSERT INTO irok(nev,szuletesiev,konyvekszama)
VALUES('Arany János',1817,54);

INSERT INTO irok(nev,szuletesiev,konyvekszama)
VALUES('Petőfi Sándor',1823,70);

INSERT INTO irok(nev,szuletesiev,konyvekszama)
VALUES('Táncsics Mihály',1799,30);

insert into irok(nev,szuletesiev,konyvekszama)
VALUES('Fazekas Mihály',1766,13);
CREATE USER 'OA4R7U-NBT_IM743G2-D'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT USAGE ON *.* TO 'OA4R7U-NBT_IM743G2-D'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `OA4R7U-NBT_IM743G2-D`;GRANT ALL PRIVILEGES ON `OA4R7U-NBT\_IM743G2-D`.* TO 'OA4R7U-NBT_IM743G2-D'@'localhost';

CREATE TABLE irok(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nev VARCHAR(40) NOT NULL,
    szuletesiev INT NOT NULL,
    konyvekszama INT NOT NULL DEFAULT 1
);

CREATE TABLE kiado(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nev VARCHAR(50) NOT NULL
);

CREATE TABLE konyvtar(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nev VARCHAR(50) NOT NULL,
    iranyitoszam int(4) NOT NULL,
    cim VARCHAR(50) NOT NULL
);

CREATE TABLE konyv(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    kiadoid INT NOT NULL,
    iroid INT NOT NULL,
    konyvtarid int NOT NULL,
    cim VARCHAR(50) NOT NULL,
    tema VARCHAR(20) NOT NULL,
    kiadaseve INT NOT NULL,
    
    CONSTRAINT fk_kiadoazon FOREIGN KEY(kiadoid) REFERENCES kiado(id),
    CONSTRAINT fk_iroazon FOREIGN KEY(iroid) REFERENCES irok(id),
    CONSTRAINT fk_konyvtarazon FOREIGN KEY(konyvtarid) REFERENCES konyvtar(id)
    
);

CREATE TABLE kolcsonzo(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    konyvid INT NOT NULL,
    nev VARCHAR(40) NOT NULL,
    iranyitoszam INT NOT NULL,
    cim VARCHAR(50) NOT NULL,
    
    CONSTRAINT fk_konyvazon FOREIGN KEY(konyvid) REFERENCES konyv(id)
);

INSERT INTO irok(nev,szuletesiev,konyvekszama)
VALUES('Arany János',1817,54);

INSERT INTO irok(nev,szuletesiev,konyvekszama)
VALUES('Petőfi Sándor',1823,70);

INSERT INTO irok(nev,szuletesiev,konyvekszama)
VALUES('Táncsics Mihály',1799,30);

insert into irok(nev,szuletesiev,konyvekszama)
VALUES('Fazekas Mihály',1766,13);
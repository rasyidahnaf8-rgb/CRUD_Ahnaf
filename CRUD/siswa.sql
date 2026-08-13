-- =========================================
-- Database: db_siswa
-- Tabel   : siswa
-- =========================================

CREATE DATABASE IF NOT EXISTS db_siswa;
USE db_siswa;

CREATE TABLE IF NOT EXISTS siswa (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kelas VARCHAR(50) NOT NULL
);

-- Data contoh sesuai tampilan
INSERT INTO siswa (nama, kelas) VALUES
('Putra Agung', 'X PPLG 1'),
('Ziya', 'XII RPL 1'),
('Putri', 'XII RPL 2');

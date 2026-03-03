-- ---------------------------------------------------------
-- DATABASE: absensi_kelurahan
-- ---------------------------------------------------------

CREATE DATABASE IF NOT EXISTS absensi_kelurahan;
USE absensi_kelurahan;

-- ---------------------------------------------------------
-- TABEL ADMIN
-- ---------------------------------------------------------
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Admin Default
INSERT INTO admin (username, password) VALUES
('admin', MD5('admin123'));

-- ---------------------------------------------------------
-- TABEL PEGAWAI
-- ---------------------------------------------------------
CREATE TABLE pegawai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nik VARCHAR(20) NOT NULL,
    jabatan VARCHAR(100) NOT NULL,
    qr_code VARCHAR(255) DEFAULT NULL
);

-- ---------------------------------------------------------
-- TABEL ABSENSI
-- ---------------------------------------------------------
CREATE TABLE absensi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pegawai_id INT NOT NULL,
    tanggal DATE NOT NULL,
    jam TIME NOT NULL,
    foto VARCHAR(255) DEFAULT NULL,
    latitude VARCHAR(50) DEFAULT NULL,
    longitude VARCHAR(50) DEFAULT NULL,
    metode VARCHAR(20) NOT NULL,    -- FOTO / QR / GPS
    status VARCHAR(20) DEFAULT 'Hadir',
    FOREIGN KEY (pegawai_id) REFERENCES pegawai(id)
);

-- ---------------------------------------------------------
-- TABEL LOG QR SCAN (OPSIONAL)
-- ---------------------------------------------------------
CREATE TABLE qr_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pegawai_id INT NOT NULL,
    waktu DATETIME NOT NULL,
    device VARCHAR(255) DEFAULT NULL,
    FOREIGN KEY (pegawai_id) REFERENCES pegawai(id)
);

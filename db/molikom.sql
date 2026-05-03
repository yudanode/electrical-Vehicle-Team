

SET FOREIGN_KEY_CHECKS = 0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


CREATE TABLE `users` (
  `id_users`    INT          NOT NULL AUTO_INCREMENT,
  `username`    VARCHAR(100) NOT NULL,
  `password`    VARCHAR(255) NOT NULL,
  `role`        ENUM('admin','editor') NOT NULL DEFAULT 'editor',
  `tgl_daftar`  TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `division` (
  `id_divisi`  INT          NOT NULL AUTO_INCREMENT,
  `nama`       VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `staff` (
  `id_staf`      INT          NOT NULL AUTO_INCREMENT,
  `id_divisi`    INT          NOT NULL,
  `id_users`     INT          NOT NULL,
  `nama`         VARCHAR(150) NOT NULL,
  `jabatan`      VARCHAR(150) NOT NULL,
  `foto`         VARCHAR(255) DEFAULT NULL,
  `tentang`      TEXT         DEFAULT NULL,
  PRIMARY KEY (`id_staf`),
  FOREIGN KEY (`id_divisi`) REFERENCES `division`(`id_divisi`),
  FOREIGN KEY (`id_users`)  REFERENCES `users`(`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `staf_social` (
  `id_staf_social` INT          NOT NULL AUTO_INCREMENT,
  `id_staf`        INT          NOT NULL,
  `platform`       VARCHAR(50)  NOT NULL,
  `url`            VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_staf_social`),
  FOREIGN KEY (`id_staf`) REFERENCES `staff`(`id_staf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `news_category` (
  `id_kategori_news` INT          NOT NULL AUTO_INCREMENT,
  `nama`             VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_kategori_news`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `news` (
  `id_news`          INT          NOT NULL AUTO_INCREMENT,
  `id_kategori_news` INT          NOT NULL,
  `id_users`         INT          NOT NULL,
  `judul`            VARCHAR(255) NOT NULL,
  `konten`           LONGTEXT     NOT NULL,
  `thumbnail`        VARCHAR(255) DEFAULT NULL,
  `tgl_terbit`       DATE         DEFAULT NULL,
  `status`           ENUM('draft','publish') NOT NULL DEFAULT 'draft',
  PRIMARY KEY (`id_news`),
  FOREIGN KEY (`id_kategori_news`) REFERENCES `news_category`(`id_kategori_news`),
  FOREIGN KEY (`id_users`)         REFERENCES `users`(`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `contact_message` (
  `id_contact`   INT          NOT NULL AUTO_INCREMENT,
  `id_users`     INT          DEFAULT NULL,
  `nama_depan`   VARCHAR(100) NOT NULL,
  `nama_belakang`VARCHAR(100) DEFAULT NULL,
  `telepon`      VARCHAR(20)  DEFAULT NULL,
  `email`        VARCHAR(150) NOT NULL,
  `pesan`        TEXT         NOT NULL,
  `tgl_kirim`    TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sudah_dibaca` TINYINT(1)   NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_contact`),
  FOREIGN KEY (`id_users`) REFERENCES `users`(`id_users`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SET FOREIGN_KEY_CHECKS = 1;




INSERT INTO `users` (`username`, `password`, `role`) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin');



INSERT INTO `division` (`nama`) VALUES
('Manager & Wakil'),
('Management'),
('Mechanical'),
('Electrical'),
('Driver'),
('Design Mechanic'),
('IOT Engineer'),
('Medinfo');


INSERT INTO `news_category` (`nama`) VALUES
('Kegiatan'),
('Riset'),
('Kompetisi'),
('Opini');
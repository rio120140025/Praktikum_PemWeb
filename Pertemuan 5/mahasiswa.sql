SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`) VALUES
(120140025, 'Rio Prasetyo', 'IF'),
(120140998, 'Nurul Icha', 'IF'),
(120140999, 'Mikael Ansastya', 'IF'),
(120290207, 'Santosa', 'EL'),
(120290546, 'Wahyu Setiawan', 'EL'),
(120270809, 'Arifin Hidayat', 'ME'),
(120270656, 'Sitohang Manurung', 'ME'),
(120270540, 'Pace Jatian', 'ME'),
(120160120, 'Baidah', 'TG'),
(120160130, 'Gerelio Fanatik', 'TG'),
(120150213, 'Pransiska Kristin', 'GL'),
(120210325, 'Randi Manalaya', 'GL');
COMMIT;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `alamat`, `jurusan`) VALUES
      (1, "123456", "John Doe", "Jl. Merdeka No. 123", "TI - Manajemen Data & Informasi"),
   	  (2, "234567", "Jane Smith", "Jl. Jendral Sudirman No. 456", "TI - Komputer Akuntansi dan Bisnis"),
    	(3, "345678", "David Johnson", "Jl. Pahlawan No. 789", "Desain Komunikasi Visual"),
    	(4, "456789", "Sarah Williams", "Jl. Diponegoro No. 321", "TI - Pariwisata"),
    	(5, "567890", "Michael Brown", "Jl. Gatot Subroto No. 987", "Sistem Komputer"),
    	(6, "678901", "Emily Davis", "Jl. Veteran No. 654", "Bisnis Digital")
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

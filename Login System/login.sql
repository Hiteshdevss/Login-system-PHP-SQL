-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 03:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`sno`, `name`, `password`, `c_password`, `tstamp`, `email`) VALUES
(1, 'Hitesh Bhagwat', 'hitesh1100@', 'hitesh1100@', '2024-05-08 17:00:20', 'hiteshbhagwat97@gmail.com'),
(3, 'tanvi Mirase', '$2y$10$DEUhG1frlEV4HxqSc8Yc0.KnNnu/XPwJlu6K0Lw8hJl6J2YbYJ9f6', '', '2024-05-08 17:15:49', 'tanvibhagwat@gmail.com'),
(4, 'aa', '$2y$10$OIZudxU/oX5eJQWVxG4OX.uCmUoPJmVN4Vuqi.qcaroZciaMmmGvq', '', '2024-05-08 17:20:20', 'admin@gmail.com'),
(5, 'aa', '$2y$10$AtzGbiYH2s6TvkHtDQpdfe/haYuiv2W3RhOEUrrgMSuAdxJ4/z0Zi', '', '2024-05-08 17:20:25', 'admin@gmail.com'),
(6, 'aa', '$2y$10$bnXtp0bZKMsJbaudjw0jkuMj6HQ9cLyy71jSiduq7tqCFeu.OEkuS', '', '2024-05-08 17:24:14', 'admin@gmail.com'),
(7, 'aa', '$2y$10$A.08GmQhOZJrBzsaNaW2he85TKEfAgrG8d/1CJTIYfRlehtb4eCA2', '', '2024-05-08 17:24:56', 'admin@gmail.com'),
(8, 'tanvi Mirase', '$2y$10$ERYvKFDpmjmJOCeg5p7qwOPXpnAEV1Y.R7A1DgdTzlm.DgiXIxiVC', '', '2024-05-08 17:25:01', 'tanvibhagwat@gmail.com'),
(9, 'tanvi Mirase', '$2y$10$6WjJWf32jKg3F78KvGwwPeIVtd6asNSGr8vGUda1JALsn.nmNZfWu', '', '2024-05-08 17:27:57', 'tanvibhagwat@gmail.com'),
(10, 'tanvi Mirase', '$2y$10$3DM/xDzcD99ntMVKSbGHPenAUQnR0tCoh/7x7iMs.Hsudw6yor/JC', '', '2024-05-08 17:28:15', 'tanvibhagwat@gmail.com'),
(11, 'tanvi Mirase', '$2y$10$OYdzIQb0unMiyItJWU9D7Ofs494CYvomoHbjwyNEbl/Ktp15ZKDY2', '', '2024-05-08 17:28:30', 'tanvibhagwat@gmail.com'),
(12, 'tanvi Mirase', '$2y$10$RStsy3ix3tgBNN08/znrLOj.fElR5rEDfouzp1rlCJEruMSKiWEta', '', '2024-05-08 17:29:04', 'tanvibhagwat@gmail.com'),
(13, 'tanvi Mirase', '$2y$10$CObYkFzGj5PmtpVr4bJCheieAneoqmegA6eS5.Zgv/wKpPU5tKseS', '', '2024-05-08 17:30:05', 'tanvibhagwat@gmail.com'),
(14, 'tanvi Mirase', '$2y$10$zsDtH.OiqKwwmNz9z0AXGebb/9XUO/iLz7icYqBDxrb4fmLxq9kyO', '', '2024-05-08 17:30:25', 'tanvibhagwat@gmail.com'),
(15, 'tanvi Mirase', '$2y$10$t8HGl4NZkmKVVTJfrl3q2u5mLyTkgtDzQxrsk7TbYp/cc0wd4j.Hi', '', '2024-05-08 17:33:56', 'tanvibhagwat@gmail.com'),
(16, 'Hitesh bhagwat', '$2y$10$.Pk3lUWVCLiKGoBwva9oU.BhWwEv9qJjFfvpnUz3p8NnZFaKatY6S', '', '2024-05-08 17:34:31', 'admin@hotmail.com'),
(17, 'Harsh Bhagwat', '$2y$10$GY.8VQUaWnJ03ESZi5JYTu9OnIrjf1LXgVk5Pt2FOtZ85BPlWHu/O', '', '2024-05-08 17:44:08', 'harshbhagwat20305@gmail.com'),
(18, 'Harsh Bhagwat', '$2y$10$MUwRHhv9ejqHD52U2GIOzuBAh.vwstzbkIANANMxQlFoWYlc4zMda', '', '2024-05-08 17:45:00', 'harshbhagwat20305@gmail.com'),
(19, 'Harsh Bhagwat', '$2y$10$mVpkWCbtbv2cPvFZxYrGgOszkNjfJsMshfdBKtp/iUHdcDoECkadO', '', '2024-05-08 17:45:43', 'harshbhagwat20305@gmail.com'),
(20, 'Harsh Bhagwat', '$2y$10$lHFDKfDZ6iudKcBSjba5D..MFNRLLzWbCaYVsjOMxkBhn17V8pn3q', '', '2024-05-08 17:46:13', 'harshbhagwat20305@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

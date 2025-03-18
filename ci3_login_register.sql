-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 12:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci3_login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_frist_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_username` varchar(225) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_phonenumber` varchar(100) NOT NULL,
  `user_datebirth` varchar(100) NOT NULL,
  `user_level` int(11) NOT NULL,
  `user_photo` varchar(225) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_frist_name`, `user_last_name`, `user_email`, `user_username`, `user_password`, `user_phonenumber`, `user_datebirth`, `user_level`, `user_photo`, `user_date`) VALUES
(6, 'joanda', 'fernando', 'kurotama888@gmail.com', 'kurotama', '$2y$10$8UNMuYoXlepr1vmlK80FDu69hx5jA..B75u4cRGYWelwGaWk6hFyu', '-', '1995-11-01', 0, '3aa41747c1b9fa895df57d8a2aa010d7.png', '2025-03-17 16:09:31'),
(7, 'kurotama', '21', 'joandafernando19@gmail.com', 'kurotama', 'e10adc3949ba59abbe56e057f20f883e', '-', '2025-03-19', 1, 'f534debfab7e23a734efd4a82f444369.png', '2025-03-17 17:23:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

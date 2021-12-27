-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 03:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_ai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(10) NOT NULL,
  `email_ad` varchar(255) NOT NULL,
  `password_ad` varchar(255) NOT NULL,
  `nama_ad` varchar(255) NOT NULL,
  `hp_ad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `email_ad`, `password_ad`, `nama_ad`, `hp_ad`) VALUES
(1, 'muhammad.adif19101@student.unsika.ac.id', 'adiffikri', 'Muhammad Adif Fikri', '021123456789'),
(2, 'adif@gmail.com', '$2y$10$Ve0ifyDcG4YiQoaIBXJnQuoFicgzESC6FG4BBWjd5yvurT/pJeycS', 'adif', ''),
(3, 'adminlawu@gmail.com', '$2y$10$/27arD3yNp/d6VQTMoye4.Cyw/pnaY/dKdbHAHYpUT9cHrKW5EQ.q', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `laptop` varchar(225) NOT NULL,
  `harga` bigint(10) NOT NULL,
  `panel` varchar(10) NOT NULL,
  `ukuran` float(5,1) NOT NULL,
  `resolusi` varchar(20) NOT NULL,
  `cpu` varchar(225) NOT NULL,
  `ram` int(2) NOT NULL,
  `kapasitas` int(5) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `gpu` varchar(225) NOT NULL,
  `os` varchar(225) NOT NULL,
  `port` varchar(225) NOT NULL,
  `konektivitas` varchar(225) NOT NULL,
  `berat` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `kode`, `laptop`, `harga`, `panel`, `ukuran`, `resolusi`, `cpu`, `ram`, `kapasitas`, `tipe`, `gpu`, `os`, `port`, `konektivitas`, `berat`) VALUES
(1, 'LP01', 'Lenovo IdeaPad D330', 4799000, 'IPS', 10.1, '1920 x 1200', 'Intel Celeron N4020', 8, 128, 'EMMC', 'Intel UHD 600', 'Windows 10 Pro', '2x USB-C, 1x USB-A, MicroSD, Combo Audio', 'Wi-Fi, Bluetooth', 1.16),
(2, 'LP02', 'Lenovo Ideapad Slim 1', 4969000, 'VA', 11.6, '1920 x 1080', 'Celeron N4020', 4, 256, 'M.2 NVME', 'UHD 600', 'Windows 10 Home', '2x USB-A, HDMI, SD Card, Audio Combo', 'Wi-Fi, Bluetooth', 1.20),
(3, 'LP03', 'Lenovo V14 IIL', 6550000, 'TN', 14.0, '1366 x 768', 'Intel Core I3-1005G1', 4, 1000, 'HDD', 'UHD', 'Windows 10 Home', '1x card reader, 1x HDMI 1.4b, 2x USB 3.1 Gen 1, 1x headphone / microphone combo jack (3.5mm), 1x USB 2.0', 'WiFi, Bluetooth', 1.60),
(4, 'LP04', 'Axioo MyBook 14F', 4399000, 'IPS', 13.0, '2560 x 1600', 'Celeron N4020', 4, 256, 'SSD', 'UHD 600', 'Windows 10 Home', '', '', 0.00),
(5, 'LP05', 'Asus Vivobook A516MA', 6299000, 'VA', 14.0, '1366 x 768', 'Intel Pentium N5030U', 4, 257, 'NVME', 'UHD 600', 'Windows 10 Home', 'Combo Audio, HDMI, 2x USB-A, 1x USB-C, Micro SD', 'Wi-Fi, Bluetooth', 1.30),
(6, 'LP06', 'HP 14S DK1507AU', 6900000, 'IPS', 14.0, '1920 x 1080', 'AMD Athlon Silver 3050U', 4, 512, 'M.2 NVME', 'UHD Graphics 620', 'Windows 10 Home', '2x USB-A, HDMI, SD card, Audio Combo', 'Wi-Fi, Bluetooth', 1.47),
(7, 'LP07', 'Lenovo Thinkbook 15 G2 ARE', 9499000, 'IPS', 15.6, '1920 x 1080', 'AMD Ryzen 3 4300U', 8, 512, 'M.2 NVME', 'AMD Radeon RX Vega 5', 'Windows 10 Home', '2x USB-A, 2x USB-C, HDMI, SD Card, Audio Combo, RJ-45 ', 'Wi-Fi, Bluetooth', 1.70),
(8, 'LP08', 'Asus Vivobook M413IA', 9603000, 'IPS', 14.0, '1920 x 1080', 'AMD Ryzen 3 5300U', 8, 512, 'M.2 NVME', 'AMD Radeon RX Vega 5', 'Windows 10 Home + OHS', 'HDMI, Audio combo, 3x USB-A, 1x USB C, MicroSD', 'Wi-Fi, Bluetooth', 1.40),
(9, 'LP09', 'Acer Aspire 5 A515-45', 9999000, 'IPS', 15.6, '1920 x 1080', 'AMD Ryzen 5 5500U', 8, 512, 'M.2 NVME', 'AMD Radeon Graphics', 'Windows 11 Home + OHS', '2 x USB 3.2 Gen 1 Ports 1 x USB 2.0 Port 1 x HDMI Port with HDCP Support', 'Wi-Fi, Bluetooth', 1.80),
(10, 'LP10', 'HP Pavilion 14-EC0007AU', 9199000, 'IPS', 14.0, '1920 x 1080', 'AMD Ryzen 3 5300U', 8, 512, 'M.2 NVME', 'AMD Radeon Graphics', 'Windows 10', '1 SuperSpeed USB Type-C 10Gbps signaling rate (USB Power Delivery, DisplayPort 1.4, HP Sleep and Charge); 2 SuperSpeed USB Type-A 5Gbps signaling rate; 1 HDMI 2.0; 1 AC smart pin; 1 headphone/microphone combo', 'Wi-Fi, Bluetooth', 1.41),
(11, 'LP11', 'HP 14S-FQ1032AU', 8899000, 'IPS', 14.0, '1920 x 1080', 'AMD Ryzen 3 5300U', 8, 512, 'M.2 NVME', 'AMD Radeon Graphics', 'Windows 10 + OHS', '1 SuperSpeed USB Type-C 5Gbps signaling rate; 2 SuperSpeed USB Type-A 5Gbps signaling rate; 1 HDMI 1.4b; 1 AC smart pin; 1 headphone/microphone combo', 'Wi-Fi, Bluetooth', 1.47),
(12, 'LP12', 'Dell XPS 13 2-in-1 7390', 17699000, 'IPS', 13.4, '3840 x 2400', 'Intel Core I7-1065G7', 16, 512, 'M.2 NVME', 'Intel Iris Plus Graphics', 'Windows 10', '2 Thunderbolt™ 3 with Power Delivery and DisplayPort, 1 Universal audio jack', 'Wi-Fi, Bluetooth', 1.33),
(13, 'LP13', 'DELL XPS 15 9500', 24999000, 'IPS', 15.6, '1920 x 1200', 'Intel Core I7-10750H', 16, 512, 'M.2 NVME', 'NVIDIA GeForce GTX 1650 Ti 4GB GDDR6', 'Windows 10', '2x Thunderbolt 3 with power delivery & DisplayPort', 'Wi-Fi, Bluetooth', 2.00),
(14, 'LP14', 'Acer Swift X SFX14-41G', 15499000, 'IPS', 14.0, '1920 x 1080', 'AMD Ryzen 5-5500U', 16, 512, 'M.2 NVME', 'NVIDIA GeForce RTX 3050 4GB GDDR6', 'Windows 10', '1x HDMI Outputs, 2x USB 3.2 Gen 1 Type-A Ports, 1x USB 3.2 Gen 2 Type-C Ports', 'Wi-Fi, Bluetooth', 1.30),
(15, 'LP15', 'MSI Prestige 14 A11SCX', 19299000, 'IPS', 14.0, '1920 x 1080', 'Intel Core i7-1185G7', 16, 512, 'M.2 NVME', 'NVIDIA GeForce GTX 1650 4GB', 'Windows 10', '2x Type-C (USB3.2 Gen2 / DP / Thunderbolt 4) with PD charging, 2x Type-A USB2.0, 1x Micro SD', 'Wi-Fi, Bluetooth', 1.29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

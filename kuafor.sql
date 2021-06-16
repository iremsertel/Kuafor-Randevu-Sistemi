-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Haz 2021, 16:02:04
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kuafor`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `kullaniciadi` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(256) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kullaniciadi`, `sifre`) VALUES
(1, 'admin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(2, 'admin2', '8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414'),
(4, 'admin3', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `randevuno` int(11) NOT NULL,
  `musteriad` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `musterisoyad` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `saat` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevuno`, `musteriad`, `musterisoyad`, `telefon`, `tarih`, `saat`) VALUES
(1, 'selin', 'yılmaz', '5674839', '2021-04-28', '17.00'),
(3, 'mehir', 'ada', '56748392', '2021-02-04', '12.00'),
(5, 'deniz', 'pinar', '5674839', '2021-02-03', '14.00'),
(7, 'ceyda', 'akin', '567483976', '2021-03-01', '11.00'),
(10, 'yildiz', 'ay', '54548392', '2021-03-12', '11.00'),
(11, 'melis', 'tekin', '3452326', '2021-03-02', '11.00'),
(19, 'iklim', 'bahar', '56748392', '2021-02-01', '12.00'),
(20, 'yaz', 'mevsim', '56748392', '2021-06-05', '13.00'),
(21, 'selin', 'mevsim', '3452326', '2021-04-03', '11.00'),
(24, 'deniz', 'ay', '56748392', '2021-11-01', '17.00'),
(25, 'okyanus', 'deniz', '5674839', '2021-01-02', '08.00'),
(27, 'irem', 'yildiz', '5674839', '2021-03-01', '13.00'),
(28, 'deniz', 'ada', '3452326', '2021-06-07', '12.00'),
(29, 'mehir', 'mevsim', '56748392', '2021-01-02', '09.00'),
(31, 'aylin', 'ada', '3452326', '2021-01-03', '12.00'),
(32, 'mehir', 'erdem', '34523268', '2021-01-03', '07.00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevuno`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevuno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

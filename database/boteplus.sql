-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Ara 2023, 13:21:58
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `boteplus`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `eposta` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad`, `soyad`, `eposta`, `password`, `remember_token`, `created_at`, `updated_at`, `profil`) VALUES
(1, 'Gazi', 'Üniversitesi', 'iletisim@gazi.edu.tr', '$2y$10$HOLM2l.DDafcWN28QaEfUOiI9K/yOrjEJl3JqZssyhytomcBfDgsi', NULL, '2023-12-22 07:50:50', '2023-12-22 07:50:50', 'kfDGk9THvnOLvh6PaKEGakhxY88PTTKLnUXXRgAH.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2023_11_17_111019_kullanici_tablosunu_degistir_2', 3),
(15, '2023_11_17_111020_kullanici_tablosunu_degistir_2', 4),
(16, '2023_11_17_111021_kullanici_tablosunu_degistir_2', 5),
(17, '2014_10_12_100000_create_password_reset_tokens_table', 6),
(18, '2019_08_19_000000_create_failed_jobs_table', 6),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(20, '2023_11_17_083307_kullanici_tablosu_olustur', 6),
(21, '2023_11_17_105004_kullanici_tablosunu_degistir', 6),
(22, '2023_11_17_111022_kullanici_tablosunu_degistir_2', 6),
(23, '2023_11_24_075011_oyun_tablosu_olustur', 7),
(24, '2023_12_08_140638_profil_alanı_ekle', 8),
(25, '2023_12_16_174120_parolayi_password_olarak_guncelle', 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oyun`
--

CREATE TABLE `oyun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `fiyat` double NOT NULL,
  `indirilme_sayisi` int(11) NOT NULL,
  `yas_siniri` varchar(255) NOT NULL,
  `yildiz` double NOT NULL,
  `kapak` varchar(255) NOT NULL,
  `fragman` varchar(255) NOT NULL,
  `tarih` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `oyun`
--

INSERT INTO `oyun` (`id`, `ad`, `kategori`, `fiyat`, `indirilme_sayisi`, `yas_siniri`, `yildiz`, `kapak`, `fragman`, `tarih`, `created_at`, `updated_at`) VALUES
(1, 'Need for Speed', 'Araba Yarışı', 300, 5, '+13', 4, 'hzuXFmHPA323JR779rENBFhNwHlEhD5aW1TyKxrq.jpg', 'te8keFz5ZdI', '2023-12-22', '2023-12-22 08:48:47', '2023-12-22 08:48:47'),
(2, 'Fall Guys', 'Eğlence', 59, 3, '13', 2, 'h9pwbOaWH0NadKmTqJVFtZj9BGC2SfSyqKdkmDeh.jpg', 'Wj3dUvGLjNQ', '2003-12-11', '2023-12-22 08:48:54', '2023-12-22 08:48:54'),
(3, 'Stickman Hook', 'Platform oyunu', 10, 10, '5', 5, 'pt5Ld9sER9iFS3af6zcMwJFB9RLq9uiCHm1kykDk.png', 'SS-nSAyt9tI', '2023-12-22', '2023-12-22 08:48:59', '2023-12-22 08:48:59'),
(4, 'Uno', 'Masa Oyunu', 2500, 16, '+13', 5, 'ZqtktYa65hALUNO36QSWfAsst15FUOeFFZdfanLK.webp', 'OT0_JQK3P8I', '2023-12-05', '2023-12-22 08:49:12', '2023-12-22 08:49:12'),
(5, 'Super Mario', 'çocuk', 30, 10, '7+', 4, 'VTcDDsnf8LLeWF3jzMBRJ5CwRV8hmC6vhk0G3P4S.jpg', '_zPST3SKoB0', '2023-12-22', '2023-12-22 08:49:14', '2023-12-22 08:49:14'),
(6, 'Cyberpunk 2077', 'FPS-RP', 800, 3, '18', 4, 'zpeh9DmlkKSZj0sYRdv0RYO1ea7MRFGhDLk6BAHg.jpg', '8X2kIfS6fb8', '2023-12-22', '2023-12-22 08:50:11', '2023-12-22 08:50:11'),
(7, 'PUBG', 'savaş', 100, 150, '18', 4, 'D7IsbEH9jhCIcQCZ0wjYj4nr7eIOr2UQst84kGgZ.jpg', 'uCd6tbUAy6o', '2018-02-09', '2023-12-22 08:50:20', '2023-12-22 08:50:20'),
(8, 'Call Of Duty:2', 'savaş', 600, 100, '13', 4, 'X9Cien0tGtVT8xHaQMkjbVxwHDFeF5YgvS0ObJfX.jpg', 'SOxtxw6cMac', '2023-12-22', '2023-12-22 08:50:31', '2023-12-22 08:50:31'),
(9, 'Red Dead Redemption 2', 'aksiyon-macera', 1500, 150, '18', 5, '6zJhJwuvb0B08PlcksU96OGVOzyTlxNeICOgBugN.jpg', 'gmA6MrX81z4', '2023-12-22', '2023-12-22 08:50:40', '2023-12-22 08:50:40'),
(10, 'Minecraft', 'survival', 250, 127, '10', 5, 'qKWrwCMStLEWiTN8EzpaQNtJ9O9u0xxxewU4XBqc.jpg', 'MmB9b5njVbA', '2023-12-22', '2023-12-22 08:52:14', '2023-12-22 08:52:14'),
(11, 'Diablo IV', 'aksiyon', 1000, 100, '18', 0, 'T03TOdNZh5H4iXlPLhiZro4Dq1hVSXfRc27aJSEN.jpg', 'Ro26B394ZBM', '2023-06-05', '2023-12-22 08:53:41', '2023-12-22 08:53:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `eposta` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_eposta_unique` (`eposta`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `oyun`
--
ALTER TABLE `oyun`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`eposta`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `oyun`
--
ALTER TABLE `oyun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

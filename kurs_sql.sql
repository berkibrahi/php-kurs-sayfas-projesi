-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 May 2024, 19:55:48
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kurs`
--

--
-- Tablo döküm verisi `kategoritablo`
--

INSERT INTO `kategoritablo` (`id`, `kategori_adi`) VALUES
(2, 'web geliştirme 2'),
(3, 'veri analizi 2'),
(4, 'Mobil Uygulamalar 2'),
(17, 'yapay zeka 2'),
(19, 'veri tabanı');

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `username`, `email`, `password`, `date_added`, `user_type`) VALUES
(1, '412907', 'ibrahim@info.com', '$2y$10$s2SCURk0wMyJr0qIwLwS8OLh0W.2lpPw7.svNvTXc//4047R.s9hu', '2024-05-09 18:48:27', 'user'),
(2, 'ibrahimberkk_1', 'ibrahim_1@info.com', '$2y$10$3TNkpOnUX6SfBxwFblCDAuf0xKPnJvPlBLF71MYCEgRF7mxWkQFfq', '2024-05-09 18:59:26', 'user'),
(3, '05427443066', 'ibrahim@imaconsult.com', '$2y$10$0ufIjDndAAmRirKCIoSpwetIuhGTphsc/ZseU4ia53SSQluIdMFwi', '2024-05-09 19:01:28', 'user'),
(4, 'ibrahimberkk', 'ibrahimberk076@gmail.com', '$2y$10$A4/sNpFZt5zBG06e5ed9N.T7zeDyFzaVVNoA60zCuji6mPTUEx8j.', '2024-05-09 19:49:57', 'admin'),
(5, 'sadikturan', 'sadik@gmail.com', '$2y$10$IArvUxnEQQ5FWeiYgqwNMuERZml7GXt.uQjc48eEpXFsv94vCYXvC', '2024-05-09 20:26:33', 'user');

--
-- Tablo döküm verisi `kurstablo`
--

INSERT INTO `kurstablo` (`id`, `baslik`, `altbaslik`, `aciklama`, `resim`, `yorumSayisi`, `begeniSayisi`, `onay`, `yayinTarihi`, `anasayfa`) VALUES
(3, 'node.js kursu', '&lt;br /&gt;&lt;b&gt;Warning&lt;/b&gt;:  Undefined array key', '', '2.jpg', 168, 52, 1, '2024-05-07 19:03:46', 0),
(4, 'python kursuuuuu', 'ileri seviye python kursuuuu', '&lt;h3&gt;&lt;strong&gt;&lt;a href=&quot;https://bilginc.com/tr/egitim/python-3-programming-635-egitimi/&quot; target=&quot;_blank&quot;&gt;Python&lt;/a&gt;&lt;/strong&gt;&amp;nbsp;programlama dili veri bilimi,&amp;nbsp;&lt;strong&gt;&lt;a href=&quot;https://bilginc.com/tr/egitim/practical-machine-learning-688-egitimi/&quot; target=&quot;_blank&quot;&gt;makine &amp;ouml;ğrenimi&lt;/a&gt;&lt;/strong&gt;, sistem otomasyonu, web ve API geliştirme ve daha fazlası i&amp;ccedil;in bir temel yapıdır.&amp;nbsp;&lt;/h3&gt;\r\n\r\n&lt;p&gt;1991&amp;#39;den beri&amp;nbsp;&lt;a href=&quot;https://bilginc.com/tr/egitim/practical-machine-learning-688-egitimi/&quot; target=&quot;_blank&quot;&gt;&lt;strong&gt;Python&lt;/strong&gt;&lt;/a&gt;&amp;nbsp;programlama dili sadece gereksiz programlar i&amp;ccedil;in tamamlayıcı bir dil olarak değerlendiriliyordu. Hatta &amp;ldquo;Automate the Boring Stuff&amp;rdquo; (T&amp;uuml;rk&amp;ccedil;e&amp;#39;ye &amp;quot;Sıkıcı Şeyleri Otomatikleştiren&amp;quot; olarak &amp;ccedil;evirebileceğimiz pop&amp;uuml;ler bir kitap) adında bir kitap dahi yayınlanmıştır.&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Bununla birlikte son birka&amp;ccedil; yılda&amp;nbsp;&lt;a href=&quot;https://bilginc.com/tr/egitimler/python/f7&quot; target=&quot;_blank&quot;&gt;&lt;strong&gt;Python&lt;/strong&gt;&lt;/a&gt;&amp;nbsp;modern yazılım geliştirme, altyapı y&amp;ouml;netimi ve veri analizinde birinci sınıf bir programlama dili olarak &amp;ouml;n plana &amp;ccedil;ıkmıştır. Artık hackerlar i&amp;ccedil;in bir arka kapı oluşturucusu değil, web uygulaması oluşturma ve sistem y&amp;ouml;netiminde &amp;ouml;nemli rol alma,&amp;nbsp;&lt;a href=&quot;https://bilginc.com/tr/egitim/introduction-to-data-analysis-1471-egitimi/&quot; target=&quot;_blank&quot;&gt;&lt;strong&gt;veri analizleri&lt;/strong&gt;&lt;/a&gt;&amp;nbsp;ve&amp;nbsp;&lt;a href=&quot;https://bilginc.comhttps//bilginc.com/tr/egitim/688/practical-machine-learning-egitimi/&quot; target=&quot;_blank&quot;&gt;&lt;strong&gt;makine &amp;ouml;ğreniminde&lt;/strong&gt;&lt;/a&gt;&amp;nbsp;parlayan bir dil olarak &amp;uuml;n kazanmıştır.&lt;/p&gt;', 'python_makine_öğrenmesi.jpeg', 171, 198, 1, '2024-05-07 19:03:46', 0),
(6, 'angular kursu', 'ileri seviye angular kursu', NULL, '1.jpg', 6, 6, 1, '2024-05-07 19:03:46', 0),
(8, 'derin öğrenme', 'aaaa', NULL, '1.jpg', 0, 0, 0, '2024-05-07 19:29:03', 0),
(11, 'php kursu', 'ileri seviye php kursu', NULL, '2.jpg', 22, 30, 0, '2024-05-07 22:07:50', 0),
(17, 'oracle kursu', ' orta seviye oracle kursu', NULL, 'Oracle.png', 0, 0, 0, '2024-05-07 23:37:05', 0),
(18, 'java kursu php', 'java ile OOP dersleri', NULL, 'resim-1.jpg', 0, 0, 1, '2024-05-08 15:57:30', 0);

--
-- Tablo döküm verisi `kurs_kategori`
--

INSERT INTO `kurs_kategori` (`kurs_id`, `kategori_id`) VALUES
(3, 3),
(3, 4),
(3, 17),
(4, 3),
(4, 17),
(4, 19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

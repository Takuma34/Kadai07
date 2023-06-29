-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 6 月 29 日 13:08
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(64) NOT NULL,
  `company` varchar(64) NOT NULL,
  `tell` varchar(64) NOT NULL,
  `address` varchar(124) NOT NULL,
  `hosp` varchar(64) NOT NULL,
  `item` varchar(64) NOT NULL,
  `sn` varchar(64) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `date`, `name`, `company`, `tell`, `address`, `hosp`, `item`, `sn`, `message`) VALUES
(1, '2023-06-25 11:02:09', '鈴木', '医療機械店', '090-0000-0000', '東京都港区', '東京病院', 'ドリル', '553453', '故障'),
(10, '2023-06-25 16:42:41', '鈴木', '医療機械店', '090-0000-0000', '埼玉県', '埼玉病院', 'アタッチメント', '553453', '故障'),
(24, '2023-06-26 20:37:19', 'すす', '', '', '', '', '', '', '');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

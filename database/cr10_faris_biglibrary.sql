SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `cr10_faris_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_faris_biglibrary`;

CREATE TABLE `library_table` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `publish_date` date NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `type` varchar(4) DEFAULT NULL,
  `publisher_address` varchar(50) DEFAULT NULL,
  `publisher_size` varchar(6) DEFAULT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `library_table` (`id`, `title`, `image`, `first_name`, `last_name`, `ISBN`, `description`, `publish_date`, `publisher_name`, `type`, `publisher_address`, `publisher_size`, `status`) VALUES
(1, 'HHKKKKK', 'title_1.jpg', 'ABAS', 'Miner', '5558888', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', '2012-05-02', 'Prosacco, Hoppe and Douglas', 'DVD', '267 Chive Plaza', 'small', 'borrowed'),
(4, 'ut massa quis augue luctus', '04.jpg', 'Rébecca', 'Pheby', '448343198-6', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', '2016-10-26', 'Ritchie, Bogan and Powlowski', 'DVD', '383 Bobwhite Point', 'medium', 'reserved'),
(5, 'mattis egestas metus aenean fermentum', '05.jpg', 'Loïs', 'Cristofvao', '804064771-1', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', '2011-02-01', 'Haag, Bartell and Barton', 'DVD', '42 Helena Junction', 'large', 'borrowed'),
(6, 'metus sapien ut', '06.jpg', 'Marie-hélène', 'Helsdon', '042729628-5', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', '2013-02-01', 'Doyle-Jakubowski', 'DVD', '46 Chinook Crossing', 'small', 'available'),
(7, 'pretium quis lectus suspendisse potenti', '07.jpg', 'Bérangère', 'Treanor', '316688743-1', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst.', '2018-06-12', 'Ratke-Wisozk', 'DVD', '8 Kropf Circle', 'small', 'borrowed'),
(8, 'consequat ut nulla sed', '08.jpg', 'Almérinda', 'Grumell', '127390412-5', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis', '2013-12-04', 'Gutmann LLC', 'CD', '685 Esker Point', 'medium', 'reserved'),
(9, 'massa quis augue', '03.jpg', 'Stéphanie', 'Adaway', '364790460-0', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. ', '2021-04-05', 'Russel, Wisozk and Rippin', 'DVD', '68 Eliot Park', 'small', 'reserved'),
(11, ' title entered _1', 'title_7.png', 'Auther AbdRabu', 'AbdRabu', '44444444', 'hhhhhhhhSSSSSS', '0000-00-00', 'HablaHabla', 'book', '10, downing street', 'small', 'borrowed');


ALTER TABLE `library_table`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `library_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

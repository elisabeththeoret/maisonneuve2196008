-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 12 mars 2023 à 04:45
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e2196008`
--
CREATE DATABASE IF NOT EXISTS `e2196008` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `e2196008`;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naissance` date NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `naissance`, `email`, `phone`, `adresse`, `ville_id`, `created_at`, `updated_at`) VALUES
(1, 'Lafayette Mitchell', '1997-07-20', 'alan83@koepp.com', '890-182-1381', '388 Jacobs Mountain Suite 460', 9, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(2, 'Jamison Leannon', '2003-02-18', 'darby.osinski@gmail.com', '609-742-5595', '8211 Hansen Manors', 11, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(3, 'Candace Eichmann', '1980-12-05', 'unique53@trantow.net', '309-129-9154', '771 Titus Lights Suite 177', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(4, 'Maribel Cartwright', '1971-02-23', 'veronica.shanahan@stracke.info', '474-822-5228', '4474 Vivianne Creek', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(5, 'Mr. Conor Crist Sr.', '2001-09-20', 'ronny.pfeffer@harber.net', '819-604-9959', '24805 Rene Street', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(6, 'Verla Toy', '2003-02-16', 'durgan.frederick@pagac.net', '658-204-0341', '5350 Novella Valley', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(7, 'Lexi Gibson MD', '1981-12-19', 'upfeffer@yahoo.com', '870-825-0148', '5455 Zboncak Fork Apt. 343', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(8, 'Prof. Vern Lindgren', '1986-09-04', 'brown.tristian@kiehn.net', '755-670-6642', '291 Albin Mills', 3, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(9, 'Idella Schimmel DVM', '1971-12-04', 'angelina79@dare.com', '536-416-0063', '4164 Heller Meadow', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(10, 'Tre Cruickshank', '1992-10-05', 'kemmer.maxime@yahoo.com', '066-570-1955', '47156 Marilie Wells Apt. 531', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(11, 'Waldo VonRueden', '1988-04-10', 'sbins@hotmail.com', '482-826-8423', '582 Candelario Expressway Apt. 146', 9, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(12, 'Amber Cremin', '1999-10-22', 'orlo13@schuppe.org', '599-873-4581', '45236 Erdman Mountain Apt. 666', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(13, 'Theron Becker', '1979-09-16', 'zeffertz@tillman.info', '508-910-3566', '307 Lockman Hills', 4, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(14, 'Prof. Walton Gerhold II', '1982-06-11', 'florencio.mitchell@bernier.info', '042-858-5245', '993 Wunsch Route Apt. 934', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(15, 'Kylee Kautzer', '1994-05-08', 'alison.sauer@abernathy.com', '132-886-7416', '71999 Joesph Coves Suite 011', 5, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(16, 'Melyssa Tillman', '1984-04-21', 'demetrius.moen@gmail.com', '120-430-2112', '59729 Volkman Rue', 10, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(17, 'Giovanna Ritchie', '1986-08-30', 'kshlerin.raegan@yahoo.com', '751-801-4079', '783 Padberg Parks Suite 474', 10, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(18, 'Jimmie Hayes II', '1987-07-02', 'heidenreich.kariane@gmail.com', '787-168-2135', '42389 Funk Fords', 10, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(19, 'Hazel Armstrong', '1999-07-10', 'giovanni.okon@yahoo.com', '115-936-5360', '155 Ryan Turnpike Suite 223', 5, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(20, 'Dulce Wilderman', '1993-05-27', 'koch.lizzie@hotmail.com', '039-374-6231', '2075 Dach Forges Suite 695', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(21, 'Karina Dare', '1987-05-29', 'qolson@eichmann.org', '462-404-2097', '6117 Marcia Roads Suite 929', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(22, 'Estefania Abshire', '1993-01-22', 'xbahringer@yahoo.com', '828-951-2482', '7801 Madalyn Stream Suite 961', 10, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(23, 'Jessy Hill', '1970-05-29', 'kadin.kilback@hayes.com', '986-238-9555', '4969 Funk Camp Apt. 993', 11, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(24, 'Keith Ankunding DDS', '1993-06-06', 'hilpert.modesto@cole.com', '763-767-3402', '835 Kuhlman Canyon Suite 116', 5, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(25, 'Mr. Jensen Satterfield', '1974-08-04', 'ikuhic@bailey.com', '040-874-4329', '2056 Russel Streets', 5, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(26, 'Prof. Jaycee Ward', '1991-07-08', 'arch.reinger@yahoo.com', '848-942-9623', '359 Kari Branch Suite 127', 14, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(27, 'Golden Block', '1978-06-22', 'doris13@yahoo.com', '016-211-9736', '1581 Gaylord Parkways', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(28, 'Esteban Mohr', '1999-09-20', 'dgutkowski@schuppe.com', '335-130-1291', '73535 Marcos Crest', 4, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(29, 'Prof. Danika Conroy', '1983-05-09', 'tracy.torphy@yahoo.com', '236-351-7086', '981 Schmidt Wall Suite 182', 12, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(30, 'Bradley Wyman', '1996-06-20', 'orland26@cole.info', '618-498-9364', '708 Jerde Coves Apt. 645', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(31, 'Autumn Rohan DVM', '1981-02-22', 'nathan86@grimes.biz', '157-836-7486', '985 Osinski Prairie', 12, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(32, 'Prof. Jayden Auer Jr.', '1992-01-18', 'mckenzie.sebastian@hotmail.com', '622-110-8698', '300 Tromp Rest', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(33, 'Hoyt Beatty', '1970-06-26', 'viviane.oconnell@gmail.com', '843-887-0487', '4301 Carolyn Green Apt. 969', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(34, 'Gwendolyn Mueller', '1985-02-08', 'kaylah.legros@hotmail.com', '239-710-9634', '4747 Koepp Wall', 3, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(35, 'Chaim Kris', '2006-11-08', 'gerlach.alexandrine@weimann.com', '035-210-2498', '7635 Bogisich Summit', 15, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(36, 'Aniya Herzog', '1989-11-02', 'schamberger.janessa@gmail.com', '399-848-8054', '807 Monique Garden Suite 994', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(37, 'Jerod Bernhard MD', '1981-12-15', 'sschowalter@hotmail.com', '750-288-5247', '109 Will Divide Suite 508', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(38, 'Prof. Jeromy Connelly', '1989-05-15', 'kenneth.nienow@hotmail.com', '311-238-1926', '473 Mohr Drive', 3, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(39, 'Hal Gaylord', '1986-02-05', 'earnest08@kautzer.com', '474-237-8235', '695 Renee Prairie', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(40, 'Marlene Rempel', '2005-06-06', 'joyce19@rutherford.net', '451-668-2280', '76050 Nitzsche Route Suite 715', 4, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(41, 'Moises Rau', '1972-07-06', 'raynor.lauren@rogahn.com', '823-665-1023', '85952 Thiel Dam', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(42, 'Bernice Parisian MD', '1986-04-11', 'ttowne@reynolds.com', '309-578-6593', '1510 Hettie Springs Suite 139', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(43, 'Jake Wilderman', '1976-10-16', 'dora47@yahoo.com', '147-920-9504', '135 Monahan Port', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(44, 'Sallie Thompson DDS', '1971-12-01', 'xcummerata@emard.com', '730-661-5796', '53184 Wisozk Parkway', 2, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(45, 'Jevon Simonis', '2001-10-31', 'ethyl.boehm@gmail.com', '121-785-4992', '868 Block Dale', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(46, 'Kaylah Cremin MD', '2006-10-29', 'hintz.felicita@douglas.biz', '845-619-5841', '915 Schaefer Lakes', 4, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(47, 'Ismael Mohr V', '1987-06-07', 'howell67@feeney.com', '474-627-6174', '342 Greenholt Rapid Apt. 962', 2, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(48, 'Mr. Keeley Cummerata DVM', '2003-04-28', 'qhills@west.com', '482-653-1248', '675 Ara Crescent', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(49, 'Samantha Wilderman', '1977-03-01', 'nrogahn@gmail.com', '999-201-1031', '520 Marks Route', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(50, 'Janessa Yost', '1987-02-19', 'jermey05@ratke.com', '964-717-6298', '5632 Schiller Land Apt. 179', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(51, 'Mr. Xander Simonis', '1980-11-24', 'maybelle19@hotmail.com', '719-573-7747', '87624 Elouise Parkway Suite 201', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(52, 'Alexandrea Hermann', '1991-04-17', 'alexandrea@dubuque.biz', '833-664-2139', '35806 Thiel Grove Suite 112', 9, '2023-03-09 23:37:57', '2023-03-12 08:37:02'),
(53, 'Tillman Mertz', '1972-04-21', 'jschamberger@hettinger.com', '973-830-9993', '774 Gus Greens', 10, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(54, 'Hosea Medhurst', '1988-11-26', 'cooper34@emard.com', '714-428-5544', '39149 Marvin Crest', 9, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(55, 'Tressie Ferry IV', '1971-06-03', 'powlowski.deangelo@daniel.org', '493-361-9268', '517 Kovacek Keys Suite 940', 3, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(56, 'Dayana O\'Reilly Jr.', '1980-07-23', 'ohoeger@yahoo.com', '554-590-7044', '162 Josefa Brooks Apt. 408', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(57, 'Mariano O\'Reilly', '1998-12-22', 'soledad71@gmail.com', '090-053-1071', '558 Franecki Trace', 11, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(58, 'Helena Gibson', '1974-05-22', 'debert@hotmail.com', '192-772-2113', '1210 Marisol Divide', 12, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(59, 'Miss Nelda Gusikowski', '1971-09-13', 'kjacobson@gmail.com', '665-702-4532', '2816 Cummerata Ferry Apt. 962', 5, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(60, 'Ole Hagenes', '1990-09-20', 'winnifred.kilback@hotmail.com', '055-177-0911', '5271 Raynor Road', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(61, 'Herminia Kozey II', '1980-04-26', 'grady.flatley@tillman.com', '627-438-1647', '834 Keyon Ports Apt. 057', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(62, 'Isaias Crist', '1975-02-10', 'xmarquardt@weimann.com', '422-723-5886', '587 Osborne Drive', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(63, 'Rodrick Mills', '1994-12-16', 'sbradtke@gmail.com', '588-804-1897', '165 DuBuque Burg', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(64, 'Matteo Wolf', '1983-06-27', 'little.kaitlin@hotmail.com', '934-156-0068', '853 Estefania Cape', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(65, 'Jeffry Rippin', '1983-10-31', 'davis.thomas@yahoo.com', '704-708-4814', '98780 Dominique Extensions Apt. 352', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(66, 'Carlee Boyer', '1978-08-06', 'vschoen@hotmail.com', '822-113-6659', '65567 Alvena Path', 3, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(67, 'Miss Gwen Reinger', '1974-09-18', 'yost.conor@hotmail.com', '290-890-2650', '7963 Vincenzo Point Apt. 426', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(68, 'Hortense Howell', '2000-12-16', 'dhickle@gmail.com', '245-055-0738', '32307 Abbott Point Apt. 293', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(69, 'Roberta Stroman', '1984-07-06', 'felicity.rohan@hotmail.com', '225-699-4695', '186 Veum Greens Apt. 927', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(70, 'Dr. Maud Mertz', '1973-12-12', 'raina63@will.com', '608-293-1975', '42859 Carroll Mountain Apt. 810', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(71, 'Domenica Hettinger', '1988-06-20', 'irunte@oberbrunner.com', '810-249-0554', '72545 Emilie Plains', 9, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(72, 'Elton Anderson', '1977-11-20', 'stanton02@hotmail.com', '249-135-3896', '9392 Cassin Flats', 5, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(73, 'Dante Schuppe', '1985-11-24', 'jarred13@hotmail.com', '159-883-3498', '76283 Shawn Curve', 8, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(74, 'Magnus Morissette', '1970-07-14', 'chadrick.collins@gmail.com', '504-476-9532', '346 Lucy Parkways', 10, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(75, 'Treva Rohan', '2001-04-19', 'huel.tyra@johnston.com', '659-744-2201', '7246 Perry Wells Suite 747', 3, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(76, 'Sabrina Gorczany', '1973-07-04', 'batz.arch@hotmail.com', '198-814-0761', '389 Monica Passage Apt. 423', 13, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(77, 'Dena Kemmer II', '1993-08-26', 'timothy.abbott@gmail.com', '197-629-3020', '849 Spencer Crossing Suite 102', 11, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(78, 'Ms. Onie Wolff', '1997-07-06', 'andrew.hettinger@hotmail.com', '772-586-6618', '71104 Faustino Island', 15, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(79, 'Jamar Hettinger PhD', '1991-07-14', 'dtremblay@white.com', '995-498-8287', '745 Brisa Ports Suite 508', 11, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(80, 'Reymundo Monahan V', '1978-04-01', 'beatty.vada@towne.com', '391-584-7835', '37683 Rau Mews', 1, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(81, 'Mrs. Charlotte Schumm', '1999-03-09', 'jaydon12@gmail.com', '999-144-0426', '28665 Kiehn Streets Suite 468', 1, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(82, 'Myrtice Jenkins', '1983-10-29', 'idicki@gmail.com', '967-460-9345', '1939 Aliya Shores', 3, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(83, 'Valentine Kutch PhD', '1997-03-26', 'oconner.cassandra@yahoo.com', '022-866-3909', '5817 Zella Common', 4, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(84, 'Ms. Aryanna Connelly III', '1989-04-10', 'alittle@homenick.com', '688-501-8550', '58544 Jamarcus Mountain Suite 292', 12, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(85, 'Ross Murray V', '1974-04-04', 'tyrique.mosciski@yahoo.com', '144-529-8288', '63170 Gleason Plains Suite 290', 3, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(86, 'Mr. Narciso Heathcote', '2005-09-28', 'jschmeler@hotmail.com', '215-521-2290', '785 Spencer Cliffs Suite 023', 15, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(87, 'Loren Renner', '1975-08-19', 'hills.kaylie@hotmail.com', '995-255-0442', '19018 Chadrick Alley', 3, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(88, 'Erich Heidenreich', '1987-05-03', 'kaci.legros@hotmail.com', '528-236-0768', '573 Caterina Place', 8, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(89, 'Prof. Isom Wolf IV', '1988-09-07', 'lang.hershel@gmail.com', '709-202-0773', '796 Lou Heights Suite 841', 14, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(90, 'Waldo Kertzmann DDS', '1971-07-07', 'erowe@block.biz', '245-507-9063', '55275 Block Wall', 5, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(91, 'Annabell Pouros DDS', '1995-02-07', 'dickens.lawrence@hotmail.com', '103-066-1093', '9872 Raphaelle Well', 11, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(92, 'Percy Shields', '2005-05-28', 'hgislason@gmail.com', '078-649-0406', '3340 Serenity Lane', 10, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(93, 'Angelita Schmidt', '1978-01-07', 'urempel@hotmail.com', '082-569-1872', '2555 Smith Estates Suite 986', 15, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(94, 'Mrs. Adella Welch MD', '2002-01-17', 'zhoeger@hotmail.com', '086-772-2323', '8554 Klein Burgs', 15, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(95, 'Ferne Streich', '1990-09-01', 'egreenfelder@hotmail.com', '076-338-1209', '519 Modesta Trail Suite 254', 9, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(96, 'Alvis Ernser', '1977-08-22', 'zsteuber@romaguera.com', '290-216-2669', '21558 Joshua Green Suite 727', 6, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(97, 'Ms. Gwendolyn Wilderman', '1979-06-05', 'damaris.vonrueden@yahoo.com', '129-361-7074', '77333 White Stravenue', 9, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(98, 'Zetta Sawayn', '1992-02-26', 'runte.maribel@keeling.com', '729-028-6656', '5305 Haley Turnpike', 10, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(99, 'Dulce Baumbach', '1991-11-20', 'xhaag@gmail.com', '468-358-8261', '898 Keven Greens Apt. 527', 9, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(100, 'Trever Mosciski', '1984-10-24', 'brando.schultz@hotmail.com', '597-731-3963', '620 Dean Branch Suite 643', 14, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(101, 'Ariane Paul', '1997-02-04', 'ariane@gmail.com', '514-543-8888', '123 Sherbrooke', 3, '2023-03-12 08:36:24', '2023-03-12 08:36:24');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_07_182354_create_villes_table', 1),
(6, '2023_03_07_182528_create_etudiants_table', 1),
(7, '2023_03_07_173909_create_villes_table', 2),
(8, '2023_03_07_175257_create_etudiants_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Dinafort', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(2, 'East Carmenmouth', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(3, 'Catherinehaven', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(4, 'Port Berniecehaven', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(5, 'Wehnerfort', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(6, 'Milliefurt', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(7, 'Port Mariam', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(8, 'Hoegerview', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(9, 'North Zoie', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(10, 'Gwendolynmouth', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(11, 'Kesslermouth', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(12, 'North Herminioburgh', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(13, 'Susannafort', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(14, 'East Haylie', '2023-03-09 19:08:26', '2023-03-09 19:08:26'),
(15, 'Corkeryfort', '2023-03-09 19:08:26', '2023-03-09 19:08:26');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `etudiants_phone_unique` (`phone`),
  ADD UNIQUE KEY `etudiants_email_unique` (`email`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

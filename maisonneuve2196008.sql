-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 09 mars 2023 à 19:14
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
-- Base de données : `maisonneuve2196008`
--
CREATE DATABASE IF NOT EXISTS `maisonneuve2196008` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `maisonneuve2196008`;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naissance` date NOT NULL,
  `ville_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `adresse`, `phone`, `email`, `naissance`, `ville_id`, `created_at`, `updated_at`) VALUES
(1, 'Lafayette Mitchell', '388 Jacobs Mountain Suite 460', '890-182-1381', 'alan83@koepp.com', '1997-07-20', 9, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(2, 'Jamison Leannon', '8211 Hansen Manors', '609-742-5595', 'darby.osinski@gmail.com', '2003-02-18', 11, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(3, 'Candace Eichmann', '771 Titus Lights Suite 177', '309-129-9154', 'unique53@trantow.net', '1980-12-05', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(4, 'Maribel Cartwright', '4474 Vivianne Creek', '474-822-5228', 'veronica.shanahan@stracke.info', '1971-02-23', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(5, 'Mr. Conor Crist Sr.', '24805 Rene Street', '819-604-9959', 'ronny.pfeffer@harber.net', '2001-09-20', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(6, 'Verla Toy', '5350 Novella Valley', '658-204-0341', 'durgan.frederick@pagac.net', '2003-02-16', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(7, 'Lexi Gibson MD', '5455 Zboncak Fork Apt. 343', '870-825-0148', 'upfeffer@yahoo.com', '1981-12-19', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(8, 'Prof. Vern Lindgren', '291 Albin Mills', '755-670-6642', 'brown.tristian@kiehn.net', '1986-09-04', 3, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(9, 'Idella Schimmel DVM', '4164 Heller Meadow', '536-416-0063', 'angelina79@dare.com', '1971-12-04', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(10, 'Tre Cruickshank', '47156 Marilie Wells Apt. 531', '066-570-1955', 'kemmer.maxime@yahoo.com', '1992-10-05', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(11, 'Waldo VonRueden', '582 Candelario Expressway Apt. 146', '482-826-8423', 'sbins@hotmail.com', '1988-04-10', 9, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(12, 'Amber Cremin', '45236 Erdman Mountain Apt. 666', '599-873-4581', 'orlo13@schuppe.org', '1999-10-22', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(13, 'Theron Becker', '307 Lockman Hills', '508-910-3566', 'zeffertz@tillman.info', '1979-09-16', 4, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(14, 'Prof. Walton Gerhold II', '993 Wunsch Route Apt. 934', '042-858-5245', 'florencio.mitchell@bernier.info', '1982-06-11', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(15, 'Kylee Kautzer', '71999 Joesph Coves Suite 011', '132-886-7416', 'alison.sauer@abernathy.com', '1994-05-08', 5, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(16, 'Melyssa Tillman', '59729 Volkman Rue', '120-430-2112', 'demetrius.moen@gmail.com', '1984-04-21', 10, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(17, 'Giovanna Ritchie', '783 Padberg Parks Suite 474', '751-801-4079', 'kshlerin.raegan@yahoo.com', '1986-08-30', 10, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(18, 'Jimmie Hayes II', '42389 Funk Fords', '787-168-2135', 'heidenreich.kariane@gmail.com', '1987-07-02', 10, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(19, 'Hazel Armstrong', '155 Ryan Turnpike Suite 223', '115-936-5360', 'giovanni.okon@yahoo.com', '1999-07-10', 5, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(20, 'Dulce Wilderman', '2075 Dach Forges Suite 695', '039-374-6231', 'koch.lizzie@hotmail.com', '1993-05-27', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(21, 'Karina Dare', '6117 Marcia Roads Suite 929', '462-404-2097', 'qolson@eichmann.org', '1987-05-29', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(22, 'Estefania Abshire', '7801 Madalyn Stream Suite 961', '828-951-2482', 'xbahringer@yahoo.com', '1993-01-22', 10, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(23, 'Jessy Hill', '4969 Funk Camp Apt. 993', '986-238-9555', 'kadin.kilback@hayes.com', '1970-05-29', 11, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(24, 'Keith Ankunding DDS', '835 Kuhlman Canyon Suite 116', '763-767-3402', 'hilpert.modesto@cole.com', '1993-06-06', 5, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(25, 'Mr. Jensen Satterfield', '2056 Russel Streets', '040-874-4329', 'ikuhic@bailey.com', '1974-08-04', 5, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(26, 'Prof. Jaycee Ward', '359 Kari Branch Suite 127', '848-942-9623', 'arch.reinger@yahoo.com', '1991-07-08', 14, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(27, 'Golden Block', '1581 Gaylord Parkways', '016-211-9736', 'doris13@yahoo.com', '1978-06-22', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(28, 'Esteban Mohr', '73535 Marcos Crest', '335-130-1291', 'dgutkowski@schuppe.com', '1999-09-20', 4, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(29, 'Prof. Danika Conroy', '981 Schmidt Wall Suite 182', '236-351-7086', 'tracy.torphy@yahoo.com', '1983-05-09', 12, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(30, 'Bradley Wyman', '708 Jerde Coves Apt. 645', '618-498-9364', 'orland26@cole.info', '1996-06-20', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(31, 'Autumn Rohan DVM', '985 Osinski Prairie', '157-836-7486', 'nathan86@grimes.biz', '1981-02-22', 12, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(32, 'Prof. Jayden Auer Jr.', '300 Tromp Rest', '622-110-8698', 'mckenzie.sebastian@hotmail.com', '1992-01-18', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(33, 'Hoyt Beatty', '4301 Carolyn Green Apt. 969', '843-887-0487', 'viviane.oconnell@gmail.com', '1970-06-26', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(34, 'Gwendolyn Mueller', '4747 Koepp Wall', '239-710-9634', 'kaylah.legros@hotmail.com', '1985-02-08', 3, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(35, 'Chaim Kris', '7635 Bogisich Summit', '035-210-2498', 'gerlach.alexandrine@weimann.com', '2006-11-08', 15, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(36, 'Aniya Herzog', '807 Monique Garden Suite 994', '399-848-8054', 'schamberger.janessa@gmail.com', '1989-11-02', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(37, 'Jerod Bernhard MD', '109 Will Divide Suite 508', '750-288-5247', 'sschowalter@hotmail.com', '1981-12-15', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(38, 'Prof. Jeromy Connelly', '473 Mohr Drive', '311-238-1926', 'kenneth.nienow@hotmail.com', '1989-05-15', 3, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(39, 'Hal Gaylord', '695 Renee Prairie', '474-237-8235', 'earnest08@kautzer.com', '1986-02-05', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(40, 'Marlene Rempel', '76050 Nitzsche Route Suite 715', '451-668-2280', 'joyce19@rutherford.net', '2005-06-06', 4, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(41, 'Moises Rau', '85952 Thiel Dam', '823-665-1023', 'raynor.lauren@rogahn.com', '1972-07-06', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(42, 'Bernice Parisian MD', '1510 Hettie Springs Suite 139', '309-578-6593', 'ttowne@reynolds.com', '1986-04-11', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(43, 'Jake Wilderman', '135 Monahan Port', '147-920-9504', 'dora47@yahoo.com', '1976-10-16', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(44, 'Sallie Thompson DDS', '53184 Wisozk Parkway', '730-661-5796', 'xcummerata@emard.com', '1971-12-01', 2, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(45, 'Jevon Simonis', '868 Block Dale', '121-785-4992', 'ethyl.boehm@gmail.com', '2001-10-31', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(46, 'Kaylah Cremin MD', '915 Schaefer Lakes', '845-619-5841', 'hintz.felicita@douglas.biz', '2006-10-29', 4, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(47, 'Ismael Mohr V', '342 Greenholt Rapid Apt. 962', '474-627-6174', 'howell67@feeney.com', '1987-06-07', 2, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(48, 'Mr. Keeley Cummerata DVM', '675 Ara Crescent', '482-653-1248', 'qhills@west.com', '2003-04-28', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(49, 'Samantha Wilderman', '520 Marks Route', '999-201-1031', 'nrogahn@gmail.com', '1977-03-01', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(50, 'Janessa Yost', '5632 Schiller Land Apt. 179', '964-717-6298', 'jermey05@ratke.com', '1987-02-19', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(51, 'Mr. Xander Simonis', '87624 Elouise Parkway Suite 201', '719-573-7747', 'maybelle19@hotmail.com', '1980-11-24', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(52, 'Alexandrea Hermann', '35806 Thiel Grove Suite 112', '833-664-2139', 'vernice.pollich@dubuque.biz', '1991-04-17', 14, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(53, 'Tillman Mertz', '774 Gus Greens', '973-830-9993', 'jschamberger@hettinger.com', '1972-04-21', 10, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(54, 'Hosea Medhurst', '39149 Marvin Crest', '714-428-5544', 'cooper34@emard.com', '1988-11-26', 9, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(55, 'Tressie Ferry IV', '517 Kovacek Keys Suite 940', '493-361-9268', 'powlowski.deangelo@daniel.org', '1971-06-03', 3, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(56, 'Dayana O\'Reilly Jr.', '162 Josefa Brooks Apt. 408', '554-590-7044', 'ohoeger@yahoo.com', '1980-07-23', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(57, 'Mariano O\'Reilly', '558 Franecki Trace', '090-053-1071', 'soledad71@gmail.com', '1998-12-22', 11, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(58, 'Helena Gibson', '1210 Marisol Divide', '192-772-2113', 'debert@hotmail.com', '1974-05-22', 12, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(59, 'Miss Nelda Gusikowski', '2816 Cummerata Ferry Apt. 962', '665-702-4532', 'kjacobson@gmail.com', '1971-09-13', 5, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(60, 'Ole Hagenes', '5271 Raynor Road', '055-177-0911', 'winnifred.kilback@hotmail.com', '1990-09-20', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(61, 'Herminia Kozey II', '834 Keyon Ports Apt. 057', '627-438-1647', 'grady.flatley@tillman.com', '1980-04-26', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(62, 'Isaias Crist', '587 Osborne Drive', '422-723-5886', 'xmarquardt@weimann.com', '1975-02-10', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(63, 'Rodrick Mills', '165 DuBuque Burg', '588-804-1897', 'sbradtke@gmail.com', '1994-12-16', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(64, 'Matteo Wolf', '853 Estefania Cape', '934-156-0068', 'little.kaitlin@hotmail.com', '1983-06-27', 7, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(65, 'Jeffry Rippin', '98780 Dominique Extensions Apt. 352', '704-708-4814', 'davis.thomas@yahoo.com', '1983-10-31', 1, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(66, 'Carlee Boyer', '65567 Alvena Path', '822-113-6659', 'vschoen@hotmail.com', '1978-08-06', 3, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(67, 'Miss Gwen Reinger', '7963 Vincenzo Point Apt. 426', '290-890-2650', 'yost.conor@hotmail.com', '1974-09-18', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(68, 'Hortense Howell', '32307 Abbott Point Apt. 293', '245-055-0738', 'dhickle@gmail.com', '2000-12-16', 6, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(69, 'Roberta Stroman', '186 Veum Greens Apt. 927', '225-699-4695', 'felicity.rohan@hotmail.com', '1984-07-06', 13, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(70, 'Dr. Maud Mertz', '42859 Carroll Mountain Apt. 810', '608-293-1975', 'raina63@will.com', '1973-12-12', 8, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(71, 'Domenica Hettinger', '72545 Emilie Plains', '810-249-0554', 'irunte@oberbrunner.com', '1988-06-20', 9, '2023-03-09 23:37:57', '2023-03-09 23:37:57'),
(72, 'Elton Anderson', '9392 Cassin Flats', '249-135-3896', 'stanton02@hotmail.com', '1977-11-20', 5, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(73, 'Dante Schuppe', '76283 Shawn Curve', '159-883-3498', 'jarred13@hotmail.com', '1985-11-24', 8, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(74, 'Magnus Morissette', '346 Lucy Parkways', '504-476-9532', 'chadrick.collins@gmail.com', '1970-07-14', 10, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(75, 'Treva Rohan', '7246 Perry Wells Suite 747', '659-744-2201', 'huel.tyra@johnston.com', '2001-04-19', 3, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(76, 'Sabrina Gorczany', '389 Monica Passage Apt. 423', '198-814-0761', 'batz.arch@hotmail.com', '1973-07-04', 13, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(77, 'Dena Kemmer II', '849 Spencer Crossing Suite 102', '197-629-3020', 'timothy.abbott@gmail.com', '1993-08-26', 11, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(78, 'Ms. Onie Wolff', '71104 Faustino Island', '772-586-6618', 'andrew.hettinger@hotmail.com', '1997-07-06', 15, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(79, 'Jamar Hettinger PhD', '745 Brisa Ports Suite 508', '995-498-8287', 'dtremblay@white.com', '1991-07-14', 11, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(80, 'Reymundo Monahan V', '37683 Rau Mews', '391-584-7835', 'beatty.vada@towne.com', '1978-04-01', 1, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(81, 'Mrs. Charlotte Schumm', '28665 Kiehn Streets Suite 468', '999-144-0426', 'jaydon12@gmail.com', '1999-03-09', 1, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(82, 'Myrtice Jenkins', '1939 Aliya Shores', '967-460-9345', 'idicki@gmail.com', '1983-10-29', 3, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(83, 'Valentine Kutch PhD', '5817 Zella Common', '022-866-3909', 'oconner.cassandra@yahoo.com', '1997-03-26', 4, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(84, 'Ms. Aryanna Connelly III', '58544 Jamarcus Mountain Suite 292', '688-501-8550', 'alittle@homenick.com', '1989-04-10', 12, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(85, 'Ross Murray V', '63170 Gleason Plains Suite 290', '144-529-8288', 'tyrique.mosciski@yahoo.com', '1974-04-04', 3, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(86, 'Mr. Narciso Heathcote', '785 Spencer Cliffs Suite 023', '215-521-2290', 'jschmeler@hotmail.com', '2005-09-28', 15, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(87, 'Loren Renner', '19018 Chadrick Alley', '995-255-0442', 'hills.kaylie@hotmail.com', '1975-08-19', 3, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(88, 'Erich Heidenreich', '573 Caterina Place', '528-236-0768', 'kaci.legros@hotmail.com', '1987-05-03', 8, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(89, 'Prof. Isom Wolf IV', '796 Lou Heights Suite 841', '709-202-0773', 'lang.hershel@gmail.com', '1988-09-07', 14, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(90, 'Waldo Kertzmann DDS', '55275 Block Wall', '245-507-9063', 'erowe@block.biz', '1971-07-07', 5, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(91, 'Annabell Pouros DDS', '9872 Raphaelle Well', '103-066-1093', 'dickens.lawrence@hotmail.com', '1995-02-07', 11, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(92, 'Percy Shields', '3340 Serenity Lane', '078-649-0406', 'hgislason@gmail.com', '2005-05-28', 10, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(93, 'Angelita Schmidt', '2555 Smith Estates Suite 986', '082-569-1872', 'urempel@hotmail.com', '1978-01-07', 15, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(94, 'Mrs. Adella Welch MD', '8554 Klein Burgs', '086-772-2323', 'zhoeger@hotmail.com', '2002-01-17', 15, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(95, 'Ferne Streich', '519 Modesta Trail Suite 254', '076-338-1209', 'egreenfelder@hotmail.com', '1990-09-01', 9, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(96, 'Alvis Ernser', '21558 Joshua Green Suite 727', '290-216-2669', 'zsteuber@romaguera.com', '1977-08-22', 6, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(97, 'Ms. Gwendolyn Wilderman', '77333 White Stravenue', '129-361-7074', 'damaris.vonrueden@yahoo.com', '1979-06-05', 9, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(98, 'Zetta Sawayn', '5305 Haley Turnpike', '729-028-6656', 'runte.maribel@keeling.com', '1992-02-26', 10, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(99, 'Dulce Baumbach', '898 Keven Greens Apt. 527', '468-358-8261', 'xhaag@gmail.com', '1991-11-20', 9, '2023-03-09 23:37:58', '2023-03-09 23:37:58'),
(100, 'Trever Mosciski', '620 Dean Branch Suite 643', '597-731-3963', 'brando.schultz@hotmail.com', '1984-10-24', 14, '2023-03-09 23:37:58', '2023-03-09 23:37:58');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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

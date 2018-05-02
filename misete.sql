-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2018 at 05:22 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misete`
--

-- --------------------------------------------------------

--
-- Table structure for table `apie`
--

CREATE TABLE `apie` (
  `id` int(5) NOT NULL,
  `pasisveikinimas` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `prisistatymas` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(40) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `apie`
--

INSERT INTO `apie` (`id`, `pasisveikinimas`, `prisistatymas`, `img`) VALUES
(1, 'Sveiki, <br><br> aš Gvidas Diržys', 'Gimiau filmo ,,Titanikas” išleidimo metais, tačiau šis filmas daugiau nieko bendro su manimi neturi. Tačiau animacinis serialas “Drakonų kovos” turi kur kas daugiau. Jo dėka susipažinau su japoniška animacija, bei pačia Japonija. Tai paskatino mane pradėti piešti ir analizuoti japoniškus komiksus (manga) ir animaciją (anime), bei mokytis japonų kalbos. Japonų kalbos žinios nuolatos pildosi, o piešimo sugebėjimų skrynia jau nemažai prisipildė (bent jau taip mano mano mama ir panelė, ir dar brolis Adas). <br> Nuolatos iškeldamas sau naujus iššūkius dalyvauju įvairiuose komiksų piešimo konkursuose ir stengiuosi kurti naujus pasaulius juose, kuriais dabar galiu su jumis pasidalinti. Jau daugiau nei metus dirbu žurnalo “Flintas” leidykloje, kaip komikso dailininkas ir rašytojas (čia tiems, kurie nori “realios” darbo patirties “realioje” darbovietėje). O dabar prašom…', 'idphoto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `balsavimas`
--

CREATE TABLE `balsavimas` (
  `id` int(60) NOT NULL,
  `SAKURA_NO_EMI` varchar(5) DEFAULT NULL,
  `KUMAMOTO_DIAMOND` varchar(5) DEFAULT NULL,
  `KAMI_NO_GEEMU` varchar(5) DEFAULT NULL,
  `STAR_OF_THE_DESERT` varchar(5) DEFAULT NULL,
  `TaTaTAKO` varchar(5) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `balsavimas`
--

INSERT INTO `balsavimas` (`id`, `SAKURA_NO_EMI`, `KUMAMOTO_DIAMOND`, `KAMI_NO_GEEMU`, `STAR_OF_THE_DESERT`, `TaTaTAKO`, `data`) VALUES
(1, NULL, '4', NULL, NULL, NULL, '2018-05-02'),
(2, NULL, NULL, '4', NULL, NULL, '2018-05-02'),
(3, '5', NULL, NULL, NULL, NULL, '2018-05-02'),
(4, NULL, '4', NULL, NULL, NULL, '2018-05-02'),
(5, NULL, NULL, NULL, '5', NULL, '2018-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`id`, `name`, `img`) VALUES
(1, '', 'Scan1.jpg'),
(2, '', 'scan2.jpg'),
(3, '', 'Scan3.jpg'),
(4, '', 'scan4.jpg'),
(5, '', 'scan5.jpg'),
(6, '', 'Scan6.jpg'),
(7, '', 'scan7.jpg'),
(8, '', 'Scan8.jpg'),
(9, '', 'Scan9.jpg'),
(10, '', 'Scan10.jpg'),
(11, '', 'Scan11.jpg'),
(12, '', 'scan12.jpg'),
(13, '', 'Scan13.jpg'),
(14, '', 'scan14.jpg'),
(15, '', 'Scan15.jpg'),
(16, '', 'scan16.jpg'),
(17, '', 'scan17.jpg'),
(18, '', 'scan18.jpg'),
(19, '', 'scan19.jpg'),
(20, '', 'scan20.jpg'),
(21, '', 'scan21.jpg'),
(22, '', 'Scan22.jpg'),
(23, '', 'Scan23.jpg'),
(24, '', 'Scan24.jpg'),
(25, '', 'scan25.jpg'),
(26, '', 'scan26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(100) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `content` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `name`, `content`) VALUES
(1, 'misete', '- GVIDO DIRŽIO JAPONIŠKŲ KOMIKSŲ GALERIJA -');

-- --------------------------------------------------------

--
-- Table structure for table `komentarai`
--

CREATE TABLE `komentarai` (
  `id` int(60) NOT NULL,
  `vardas` varchar(25) DEFAULT NULL,
  `komentaras` varchar(1000) DEFAULT NULL,
  `SAKURA_NO_EMI` varchar(10) DEFAULT NULL,
  `KUMAMOTO_DIAMOND` varchar(10) DEFAULT NULL,
  `KAMI_NO_GEEMU` varchar(10) DEFAULT NULL,
  `STAR_OF_THE_DESERT` varchar(10) DEFAULT NULL,
  `TaTaTAKO` varchar(10) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentarai`
--

INSERT INTO `komentarai` (`id`, `vardas`, `komentaras`, `SAKURA_NO_EMI`, `KUMAMOTO_DIAMOND`, `KAMI_NO_GEEMU`, `STAR_OF_THE_DESERT`, `TaTaTAKO`, `data`) VALUES
(4, 'Jonas', NULL, NULL, NULL, NULL, 'Įdomus siu', NULL, '2018-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `kontaktai`
--

CREATE TABLE `kontaktai` (
  `id` int(60) NOT NULL,
  `adresas` varchar(100) DEFAULT NULL,
  `telnr` varchar(15) DEFAULT NULL,
  `elpastas` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontaktai`
--

INSERT INTO `kontaktai` (`id`, `adresas`, `telnr`, `elpastas`) VALUES
(1, 'Šaltupio 10-23, Anykščiai, Lietuva', ' +3706 305 0717', ' gvidasdirzys@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nariai`
--

CREATE TABLE `nariai` (
  `id` int(60) NOT NULL,
  `vardas` varchar(25) DEFAULT NULL,
  `slaptazodis` varchar(20) DEFAULT NULL,
  `elpastas` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nariai`
--

INSERT INTO `nariai` (`id`, `vardas`, `slaptazodis`, `elpastas`) VALUES
(1482, 'admin', 'qwerty1', 'a@a.lt');

-- --------------------------------------------------------

--
-- Table structure for table `zinutes`
--

CREATE TABLE `zinutes` (
  `id` int(60) NOT NULL,
  `vardas` varchar(50) DEFAULT NULL,
  `zinute` varchar(1000) DEFAULT NULL,
  `elpastas` varchar(40) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apie`
--
ALTER TABLE `apie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balsavimas`
--
ALTER TABLE `balsavimas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentarai`
--
ALTER TABLE `komentarai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaktai`
--
ALTER TABLE `kontaktai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nariai`
--
ALTER TABLE `nariai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zinutes`
--
ALTER TABLE `zinutes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apie`
--
ALTER TABLE `apie`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `balsavimas`
--
ALTER TABLE `balsavimas`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `komentarai`
--
ALTER TABLE `komentarai`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kontaktai`
--
ALTER TABLE `kontaktai`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nariai`
--
ALTER TABLE `nariai`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1483;
--
-- AUTO_INCREMENT for table `zinutes`
--
ALTER TABLE `zinutes`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

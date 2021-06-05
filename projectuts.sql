-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 09:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `no` int(11) NOT NULL,
  `image` varchar(120) NOT NULL,
  `title` varchar(120) NOT NULL,
  `sinopsis` longtext NOT NULL,
  `iframe` varchar(12000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`no`, `image`, `title`, `sinopsis`, `iframe`) VALUES
(2, 'thewitcherliveaction.jpg', 'The Witcher ', 'Geralt of Rivia, a solitary monster hunter, struggles to find his place in a world where people often prove more wicked than beasts.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ndl1W4ltcmg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'Conjuring_poster.jpg', 'The Conjuring', 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/k10ETZ41q5o\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'MV5BZDk5MTcxZmItYWM2Ny00NjIwLWE2YWQtYjczMWFiZThjN2JkXkEyXkFqcGdeQXVyNDQyNzIwNDQ@._V1_.jpg', 'Attack on Titan Part 1 (2015)', 'In a world where giant humanoid Titans prey on humans, Eren joins the scouting legion to get revenge on the monsters who killed everyone in his town', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/hk7ltMVX2wU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, '011806600_1611383440-EsRUFLjU0AEggnI-700x1037.jpeg', 'Godzilla vs. Kong (2021)', 'The epic next chapter in the cinematic Monsterverse pits two of the greatest icons in motion picture history against one another - the fearsome Godzilla and the mighty Kong - with humanity caught in the balance.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/odM92ap8_c0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, 'images_01D4nQr1_N8jI24.jpg', 'The Falcon and the Winter Soldier', 'Following the events of \'Avengers: Endgame,\' Sam Wilson/Falcon and Bucky Barnes/Winter Soldier team up in a global adventure that tests their abilities -- and their patience.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/IWBsDaFWyTE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, 'MV5BODI2NjdlYWItMTE1ZC00YzI2LTlhZGQtNzE3NzA4MWM0ODYzXkEyXkFqcGdeQXVyNjU1OTg4OTM@._V1_.jpg', 'Demon Slayer: Mugen Train (2020)', 'After his family was brutally murdered and his sister turned into a demon, Tanjiro Kamado\'s journey as a demon slayer began. Tanjiro and his comrades embark on a new mission aboard the Mugen Train, on track to despair.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bFwdl2PDAFM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(11, 'nobody-poster-scaled.jpg', 'Nobody (2021)', 'A bystander who intervenes to help a woman being harassed by a group of men becomes the target of a vengeful drug lord.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wZti8QKBWPo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(13, '2f36ed19d69c1cc044aab03f388f5082.jpg', 'The Conjuring 2', 'Ed and Lorraine Warren travel to North London to help a single mother raising four children alone in a house plagued by a supernatural spirit.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VFsmuRPClr4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(15, 'MV5BOWNkODY2NGYtNGQ1NS00NjEzLTllMjgtY2YzMDZjNjFiN2MzXkEyXkFqcGdeQXVyODIyOTEyMzY@._V1_.jpg', 'The Human Centipede (First Sequence)', 'A mad scientist kidnaps and mutilates a trio of tourists in order to reassemble them into a human centipede,', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/glfBurdSUS8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(120) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(1, 'udin', 'simanjuntak', 'udin123', 'udin@gmil.com', '10203200'),
(3, 'muhammad', 'udin', 'udin10', 'udin@gmil.co.id', '123'),
(5, 'xeno', 'arges', 'arges', 'arges@gmail.com', 'arges123'),
(7, 'the', 'monkey', 'monkey j', 'moonkey@gmail.com', '123'),
(12, 'iham', 'simanjuntak', 'ilham', 'ilham@gmail.com', '123'),
(18, 'Muhammad', '', 'Muhammad Fajri Afriyansyah', 'fajri20ti@mahasiswa.pcr.ac.id', '10010'),
(19, 'muhammad', 'ridho', 'ridho123', 'ridho@gmail.com', '123'),
(29, 'Dandy', 'Islami Fikri', 'Dandy Islami Fikri', 'dandy20ti@mahasiswa.pcr.ac.id', '10010'),
(30, 'muhammad', 'udin', 'udin', 'fm1441h@gmail.com', 'mbioobob'),
(31, 'muhammad', 'razaq', 'razaq', 'razaq13@gmail .com', '123'),
(32, 'Muhammad', 'Fajri Afriyansyah', 'Muhammad Fajri Afriyansyah', 'fajri20ti@mahasiswa.pcr.ac.id', '10010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

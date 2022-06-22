-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 08:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `momovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `id` int(255) NOT NULL,
  `director_name` varchar(255) NOT NULL,
  `director_description` text NOT NULL,
  `director_picture` varchar(255) NOT NULL,
  `director_movies` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`id`, `director_name`, `director_description`, `director_picture`, `director_movies`) VALUES
(1, 'abdu boulaich', 'abdelmouemine boulaich', '11', 1),
(2, 'ayoub bekkour', 'bla bla', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `director_movies`
--

CREATE TABLE `director_movies` (
  `movies_id` int(255) NOT NULL,
  `director_id` int(255) NOT NULL,
  `movie_id` int(255) NOT NULL,
  `movies_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `actors` varchar(255) NOT NULL,
  `director` int(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `server` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `name`, `length`, `picture`, `description`, `actors`, `director`, `trailer`, `server`) VALUES
(1, 'Avengers: Infinity War', '149 min | action', 'MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_.jpg', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe. As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment, the fate of Earth and existence has never been more uncertain.', '', 2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6ZfuNTqbHE8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'https://www.vidspeeds.com:2096/embed-7ore3zxfa70f.html'),
(2, 'Star Wars:The Rise', '141 min | Adventure', '3764004.webp', 'The remnants of the Resistance face the First Order once again while reckoning with the past and their own inner turmoil. Meanwhile, the ancient conflict between the Jedi and the Sith reaches its climax, altogether bringing the Skywalker saga to a definitive end.', '', 2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8Qn_spdM5Zg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'https://www.anavidz.com:2096/embed-akki3j78s9g6.html'),
(8, 'The hobit', '106 min | fanasy', 'hobbit.jpg', 'A reluctant Hobbit, Bilbo Baggins, sets out to the Lonely Mountain with a spirited group of dwarves to reclaim their mountain home,', '', 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/SDnYMbYB-nU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'https://www.vidspeeds.com:2096/embed-94se7765lbd7.html'),
(9, 'the meg', '106 min | fanasy', 'movie4.png', 'hgfkdgfGSOUfhDSFGukSBfSF', '', 1, 'https://www.youtube.com/watch?v=gNiCLb__Lc4', 'https://www.youtube.com/c/AgnelVishal'),
(10, 'john wick', '106 min | fanasy', 'movie9.png', 'A reluctant Hobbit, Bilbo Baggins, sets out to the Lonely Mountain with a spirited group of dwarves to reclaim their mountain home, and the gold within it from the dragon Smaug.                  Bilbo Baggins is swept into a quest to reclaim the lost Dwarf Kingdom of Erebor from the fearsome dragon Smaug. Approached out of the blue by the wizard Gandalf the Grey, Bilbo finds himself joining a company of thirteen dwarves led by the legendary warrior, Thorin Oakenshield. Their journey will take them into the Wild; through treacherous lands swarming with Goblins and Orcs, deadly Wargs and Giant Spiders, Shapeshifters and Sorcerers. Although their goal lies to the East and the wastelands of the Lonely Mountain first they must escape the goblin tunnels, where Bilbo meets the creature that will change his life forever ... Gollum. Here, alone with Gollum, on the shores of an underground lake, the unassuming Bilbo Baggins not only discovers depths of guile and courage that surprise even him, he also gains possession ', '', 1, 'https://www.youtube.com/watch?v=gNiCLb__Lc4', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `username`, `email`, `password`) VALUES
(7, 'Abduboulaich', 'abdelmouemineboulaich@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Abduboulaich1', 'ayoubboukkour@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(9, 'aaa', 'b@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(10, 'abdu5', 'ayoubboukkour@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(11, 'khaypaya', 'khaypaya@gmail.com', '21c3134ee5edcb618c4f9aae358d73a7'),
(12, 'AbduBoulaich', 'mouemin2000@hotmail.com', '7878');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(255) NOT NULL,
  `movie_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director_movies`
--
ALTER TABLE `director_movies`
  ADD PRIMARY KEY (`movies_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `director` (`director`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `director_movies`
--
ALTER TABLE `director_movies`
  MODIFY `movies_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `director_movies`
--
ALTER TABLE `director_movies`
  ADD CONSTRAINT `director_id` FOREIGN KEY (`director_id`) REFERENCES `director` (`id`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `director` FOREIGN KEY (`director`) REFERENCES `director` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

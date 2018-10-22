-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 12:40 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `image`, `firstname`, `lastname`, `username`, `email`, `password`, `phone`) VALUES
(2, 'blar.jpg', 'Abdullah', 'Al Mamun', 'amsshoyon', 'amsshoyon@gmail.com', '546496', '01722937278');

-- --------------------------------------------------------

--
-- Table structure for table `amsshoyon`
--

CREATE TABLE `amsshoyon` (
  `id` int(20) UNSIGNED NOT NULL,
  `product` varchar(20) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `priority` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amsshoyon`
--

INSERT INTO `amsshoyon` (`id`, `product`, `amount`, `location`, `priority`) VALUES
(1, '1', '1', 'Inside Dhaka City', 'High'),
(2, '2', '1', 'Inside Dhaka City', 'High'),
(3, '3', '5', 'Inside Dhaka City', 'High'),
(4, '8', '3', 'Inside Dhaka City', 'Medium'),
(5, '9', '1', 'Inside Dhaka City', 'High');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `desp` varchar(300) NOT NULL,
  `price` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `choice` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `image`, `name`, `author`, `desp`, `price`, `amount`, `choice`, `type`) VALUES
(1, 'books (1).jpg', 'Megher Upor Bari', 'Humayun Ahmed', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '180', '20', 'favourite', 'Drama'),
(2, 'books (2).jpg', 'Istition', 'Humayun Ahmed', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '180', '10', 'featured', 'Adventure'),
(3, 'books (3).jpg', 'Nishitini', 'Humayun Ahmed', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '180', '15', 'recent', 'Drama'),
(4, 'books (4).JPG', 'Lilabathi', 'Humayun Ahmed', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '200', '10', 'favourite', 'Mystery'),
(5, 'books (5).jpg', 'bristy bilas', 'Humayun Ahmed', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '150', '17', 'featured', 'Adventure'),
(6, 'books (6).jpg', 'Priotomeshu', 'Humayun Ahmed', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '200', '20', 'featured', 'Biography'),
(7, 'books (7).JPG', 'Himu mama', 'Humayun Ahmed', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '150', '10', 'recent', 'Mystery'),
(8, 'books (8).jpg', 'Aj ami kuthao jabo na', 'Humayun Ahmed', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '150', '15', 'favourite', 'Drama'),
(9, 'books (13).jpg', 'Ami topu', 'Muhammed Zafar Iqbal', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '180', '20', 'favourite', 'Drama'),
(10, 'books (15).jpg', 'Finix', 'Muhammed Zafar Iqbal', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '180', '20', 'favourite', 'Fiction'),
(11, '210_large_sesher-kobita.jpg', 'Shesher Kobita', 'Rabindranath Tagore', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '300', '30', 'featured', 'Drama'),
(12, 'chokher bali by Rabindranath Tagore.JPG', 'Chokher Bali', 'Rabindranath Tagore', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '300', '30', 'featured', 'Drama'),
(13, 'indadex.jpg', 'Dakghar', 'Rabindranath Tagore', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '150', '15', 'recent', 'Drama'),
(14, '1464940100.jpg', 'Moticur', 'Begum Rokeya', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '150', '15', 'favourite', 'Adventure'),
(15, 'Book16181.JPG', 'Oborodh Basini', 'Begum Rokeya', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '123', '30', 'recent', 'Political'),
(16, 'images.jpg', 'Rocona somogro', 'Begum Rokeya', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '120', '14', 'recent', 'Mystery'),
(17, '7ognibiana.jpg', 'Ognibina', 'Kazi Nazrul Islam', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '300', '15', 'recent', 'Poetry'),
(18, 'dd2253dbaaee825244246d739a5debf7.jpg', 'Soncita', 'Kazi Nazrul Islam', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '120', '30', 'recent', 'Poetry'),
(19, 'index.jpg', 'Git Bitan', 'Kazi Nazrul Islam', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '150', '30', 'favourite', 'Poetry'),
(20, 'indfex.jpg', 'Gitanjoli', 'Kazi Nazrul Islam', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '300', '15', 'favourite', 'Poetry'),
(21, 'iluylo.jpg', 'Dighir jole kar chaya go', 'Humayun Ahmed', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '250', '20', 'recent', 'Horror'),
(22, 'books (28).jpg', 'Matal haoya', 'Humayun Ahmed', 'When one tried to unify gravity with quantum mechanics, one had to introduce the idea of â€œimaginaryâ€ time. Imaginary time is indistinguishable from directions in space.', '250', '53', 'featured', 'Mystery');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `title`, `desp`) VALUES
(3, '1.jpg', 'Categorized Books', 'Lorem ipsum dolor sit amet consectetur adipisicing'),
(4, '2.jpg', 'Books Of Humayun Ahmed (à¦¹à§à¦®à¦¾à¦¯à¦¼à§‚à¦¨ à¦†à¦¹à¦®à§‡à¦¦)', 'Lorem ipsum dolor sit amet consectetur adipisicing'),
(5, '3.jpg', 'à¦¹à§ƒà¦¦à§Ÿà§‡à¦° à¦¸à§à¦ªà¦°à§à¦¶ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦†à¦›à§‡ à¦¸à§‡à¦Ÿà¦¾à¦‡ à¦—à§à¦°à¦¨à§à¦¥à¥¤', 'Lorem ipsum dolor sit amet consectetur adipisicing'),
(6, '4.jpg', 'So Many Books <br> So Little Time', 'Lorem ipsum dolor sit amet consectetur adipisicing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(110) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL,
  `present_location` varchar(300) NOT NULL,
  `permanent_location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `phone`, `image`, `present_location`, `permanent_location`) VALUES
(2, 'Abdullah', 'Al Mamun', 'amsshoyon', 'amsshoyon@gmail.com', '123', '01722937278', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amsshoyon`
--
ALTER TABLE `amsshoyon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `amsshoyon`
--
ALTER TABLE `amsshoyon`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

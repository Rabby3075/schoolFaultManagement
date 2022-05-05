-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 07:13 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `gender` text NOT NULL,
  `religion` text NOT NULL,
  `dob` date NOT NULL,
  `phone` text NOT NULL,
  `category` text NOT NULL,
  `uname` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `fname`, `mname`, `gender`, `religion`, `dob`, `phone`, `category`, `uname`, `email`, `pass`, `image`) VALUES
(1, 'Rashedul Haque', 'Mozammel Haque', 'Rasheda Begum', 'male', 'muslim', '2022-05-03', '01629254280', 'Teacher', 'rashed3075', 'rashed.rabby43@gmail.com', '12345678', 'profile.jpg'),
(3, 'Hasnat', 'mr.x', 'Ms.Y', 'male', 'muslim', '2022-05-01', '01748293661', 'Admin', 'himel101', 'himel@gmail.com', 'qwertyuiop', 'childhood.png'),
(4, 'rijon', 'abcd', 'efgh', 'male', 'muslim', '2022-02-01', '01572157443', 'Staff', 'rijon101', 'rijon@gmail.com', 'abcdefgh', 'rijonPic.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

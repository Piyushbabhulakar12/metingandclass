-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 10:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webinar`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_regi`
--

CREATE TABLE `a_regi` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_regi`
--

INSERT INTO `a_regi` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `c_cource`
--

CREATE TABLE `c_cource` (
  `id` int(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_des` varchar(255) NOT NULL,
  `c_img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_cource`
--

INSERT INTO `c_cource` (`id`, `c_name`, `c_des`, `c_img`, `status`) VALUES
(1, 'Learn About Technology', 'Learn the trending technology\r\nLearn how to become efficient in program\r\nCareer Focus Courses\r\nDetailed Explanation\r\n', 'tech.jpg', 'Active'),
(2, 'Learn About Management', 'Management capabilities\r\n\r\nTeam building capabilities\r\n\r\nProblem solving skills\r\n\r\nFinancial management\r\n', 'management.jpg', 'Active'),
(3, 'Learn About Moral Values', 'life discipline\r\n\r\nBetter Person\r\n\r\nHow to improve Peron ally\r\n\r\nHow to handle ethical conundrum', 'Moral Values.jpg', 'Active'),
(8, 'Learn About Web Developer', 'What you will learn in this course:\r\n\r\nLearn the trending technology\r\n\r\nLearn how to become efficient in program\r\n\r\nCareer Focus Courses\r\n\r\nDetailed Explanation', 'find-web-developer.jpg', 'Active'),
(9, 'Learn About Database ', 'Database systems: Universidad Nacional Autónoma de México. Learn SQL Basics for Data Science: University of California, Davis. Data Engineering Foundations: IBM. Data Warehousing for Business Intelligence: University of Colorado System. IBM Data Science: ', 'nutanix-wipro-database.jpg', 'Active'),
(10, 'Learn About JAVA', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', '377484-637460589217574795-16x9.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `c_video`
--

CREATE TABLE `c_video` (
  `id` int(255) NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `catagori_c` varchar(255) NOT NULL,
  `video_m` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `yv_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_video`
--

INSERT INTO `c_video` (`id`, `c_title`, `catagori_c`, `video_m`, `status`, `yv_id`) VALUES
(1, 'Designing a Bakery Brand Mockup', 'Learn About Technology', 'https://www.youtube.com/embed/QmgAkF4-PJc', 'Active', 'QmgAkF4-PJc'),
(2, 'Angular 11 Tutorial - Code a Project from Scratch', 'Learn About Technology', 'https://www.youtube.com/embed/LiOzTQAz13Q', 'Active', 'LiOzTQAz13Q'),
(3, 'Build Three Django Projects - Python Course', 'Learn About Technology', 'https://www.youtube.com/embed/qPtScmB8CgA', 'Active', 'qPtScmB8CgA'),
(4, 'How to Make a Landing Page using HTML, SCSS, and JavaScript - Full Course', 'Learn About Technology', 'https://www.youtube.com/embed/aoQ6S1a32j8', 'Active', 'aoQ6S1a32j8'),
(5, 'How To Become A Salesforce Administrator | What Is Salesforce | Salesforce Training | Edureka', 'Learn About Technology', 'https://www.youtube.com/embed/ACMpeK-RiGQ', 'Active', 'ACMpeK-RiGQ'),
(6, 'AI Programming With Python | Artificial Intelligence Tutorial | Edureka | Deep Learning Rewind - 2', 'Learn About Technology', 'https://www.youtube.com/embed/Adx29smohwk', 'Active', 'Adx29smohwk'),
(7, 'Importance of Management', 'Learn About Management', 'https://www.youtube.com/embed/3_AG8w4LwqA', 'Active', '3_AG8w4LwqA');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_name`, `email`, `mess`) VALUES
(6, 'Piyush Babhulakar', 'piyushbabhulakar12@gmail.com', 'Pls Upload More Video'),
(9, 'Vishal Patil', 'vishalpatil@gmail.com', 'Upload More Video');

-- --------------------------------------------------------

--
-- Table structure for table `shedule_event`
--
-- Error reading structure for table webinar.shedule_event: #1932 - Table 'webinar.shedule_event' doesn't exist in engine
-- Error reading data for table webinar.shedule_event: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `webinar`.`shedule_event`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `user_regi`
--

CREATE TABLE `user_regi` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_regi`
--

INSERT INTO `user_regi` (`id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `cpass`) VALUES
(1, 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '7517090229', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_regi`
--
ALTER TABLE `a_regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_cource`
--
ALTER TABLE `c_cource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_video`
--
ALTER TABLE `c_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_regi`
--
ALTER TABLE `user_regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_regi`
--
ALTER TABLE `a_regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_cource`
--
ALTER TABLE `c_cource`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `c_video`
--
ALTER TABLE `c_video`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_regi`
--
ALTER TABLE `user_regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

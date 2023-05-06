-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2021 at 10:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boi`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_donation`
--

CREATE TABLE `book_donation` (
  `decription` int(10) DEFAULT NULL,
  `doner_id` varchar(255) DEFAULT NULL,
  `receiver_id` int(10) DEFAULT NULL,
  `available` int(10) DEFAULT NULL,
  `book_id` int(10) NOT NULL,
  `donation_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_exchange`
--

CREATE TABLE `book_exchange` (
  `exchange_id` int(10) NOT NULL,
  `user1` int(10) NOT NULL,
  `user2` int(10) DEFAULT NULL,
  `book1` int(10) NOT NULL,
  `book2` int(10) DEFAULT NULL,
  `exchange_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `book_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `Book_name` varchar(255) DEFAULT NULL,
  `Book_description` varchar(255) DEFAULT NULL,
  `Book_type` varchar(30) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `Book_image` varchar(100) DEFAULT NULL,
  `delivery_id` int(10) DEFAULT NULL,
  `available` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`book_id`, `user_id`, `Book_name`, `Book_description`, `Book_type`, `Type`, `price`, `Book_image`, `delivery_id`, `available`) VALUES
(15, 1, 'pather pachali', 'Great description of childhood and brother sister bonding', ' Literature', 'donate', 0, 'patherpachali.jpeg', NULL, 1),
(16, 1, 'Devi', 'A thriller horror book', ' Literature', 'donate', 0, 'devi.jpeg', NULL, 1),
(17, 1, 'Bisher Bashi', 'বিষের বাঁশি কাজী নজরুল ইসলাম রচিত একটি কাব্যগ্রন্থ', ' Literature', 'donate', 0, 'bisher_bashi.jpg', NULL, 1),
(19, 1, 'Pride and Prejudice', 'Pride and Prejudice is an 1813 novel of manners written by Jane Austen. Though it is mostly called a romantic novel, it is also a satire.', ' Novel', 'donate', 0, 'pride_and_prejudice.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_rent`
--

CREATE TABLE `book_rent` (
  `rent_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `rent` float DEFAULT NULL,
  `rent_date` date DEFAULT NULL,
  `user2` int(10) DEFAULT NULL,
  `Return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(10) NOT NULL,
  `user1` int(10) DEFAULT NULL,
  `user2` int(10) DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL,
  `answer` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `user_id`, `book_name`, `description`, `question`, `answer`) VALUES
(1, 1, 'Devi', '4.0 out of 5 stars Spooky interesting. \"Devi\" is a brilliantly written hair-raising book, which talks about folklores and myths of Bihar. It belongs to horror genre,and has the ability to scare your gutts out. This is my second book from the author,and I ', NULL, NULL),
(2, 1, 'Mishir Ali', 'In the books, Ali plays the role of a part-time professor of Psychology[3] at the University of Dhaka. Despite his not being a professional psychiatrist, people come to him for psychiatric treatment because of his special interest and knowledge in parapsy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `Name` varchar(255) NOT NULL,
  `User_id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `Adress` varchar(255) NOT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `phone_no` int(10) DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `reward` int(10) DEFAULT NULL,
  `exchange_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`Name`, `User_id`, `email`, `password`, `user_type`, `Adress`, `user_image`, `phone_no`, `balance`, `reward`, `exchange_id`) VALUES
('sanjida', 1, 'sanjida@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', NULL, NULL, NULL, NULL, NULL),
('abc', 4, 'abc@mail.com', '1234', '', '', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_donation`
--
ALTER TABLE `book_donation`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `FKBook_donat870597` (`book_id`);

--
-- Indexes for table `book_exchange`
--
ALTER TABLE `book_exchange`
  ADD PRIMARY KEY (`exchange_id`),
  ADD KEY `FKBook_excha232865` (`book1`),
  ADD KEY `FKBook_excha766076` (`user1`);

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `FKBook_Info568108` (`user_id`),
  ADD KEY `FKBook_Info995222` (`delivery_id`);

--
-- Indexes for table `book_rent`
--
ALTER TABLE `book_rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `FKBook_rent355072` (`user_id`),
  ADD KEY `FKBook_rent355647` (`book_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`),
  ADD KEY `FKForum40672` (`user_id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_donation`
--
ALTER TABLE `book_donation`
  MODIFY `donation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_exchange`
--
ALTER TABLE `book_exchange`
  MODIFY `exchange_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `book_rent`
--
ALTER TABLE `book_rent`
  MODIFY `rent_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `User_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_donation`
--
ALTER TABLE `book_donation`
  ADD CONSTRAINT `FKBook_donat870597` FOREIGN KEY (`book_id`) REFERENCES `book_info` (`book_id`);

--
-- Constraints for table `book_exchange`
--
ALTER TABLE `book_exchange`
  ADD CONSTRAINT `FKBook_excha232865` FOREIGN KEY (`book1`) REFERENCES `book_info` (`book_id`),
  ADD CONSTRAINT `FKBook_excha766076` FOREIGN KEY (`user1`) REFERENCES `user_information` (`User_id`);

--
-- Constraints for table `book_info`
--
ALTER TABLE `book_info`
  ADD CONSTRAINT `FKBook_Info568108` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`User_id`),
  ADD CONSTRAINT `FKBook_Info995222` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`delivery_id`);

--
-- Constraints for table `book_rent`
--
ALTER TABLE `book_rent`
  ADD CONSTRAINT `FKBook_rent355072` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`User_id`),
  ADD CONSTRAINT `FKBook_rent355647` FOREIGN KEY (`book_id`) REFERENCES `book_info` (`book_id`);

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `FKForum40672` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

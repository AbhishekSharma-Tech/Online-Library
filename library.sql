-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 08:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(255) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_image` varchar(600) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publication` varchar(50) NOT NULL,
  `purchase_date` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `available_quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_image`, `author`, `publication`, `purchase_date`, `price`, `quantity`, `available_quantity`) VALUES
(41, 'c++', '../books_image/c++.png', 'balaguswamy', 'vikas', '2020-04-09', '300', '50', '48'),
(42, 'computer security', '../books_image/cs.jpg', 'william stallings lawrie brown', 'pearson', '2020-04-09', '500', '50', '50'),
(43, 'DBMS', '../books_image/dbms.jpg', 'mohammed zahid wadiwale', 'vikas', '2020-04-09', '300', '40', '40'),
(44, 'the complete reference java', '../books_image/java.png', 'herbert schlidth', 'International', '2020-04-09', '350', '40', '39'),
(45, 'php', '../books_image/php.jpg', 'balaguswamy', 'vikas', '2020-04-09', '300', '50', '50'),
(46, 'python', '../books_image/python.jpg', 'balaguswamy', 'vikas', '2020-04-09', '500', '20', '20');

-- --------------------------------------------------------

--
-- Table structure for table `issued_books`
--

CREATE TABLE `issued_books` (
  `id` int(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `issue_date` varchar(255) NOT NULL,
  `return_date` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued_books`
--

INSERT INTO `issued_books` (`id`, `aadhar`, `name`, `phone`, `email`, `issue_date`, `return_date`, `book_name`) VALUES
(5, '78', 'Rohit  prasad', '9800998567', 'rohitprasad089@gmail.com', '28-03-20', '04-04-20', 'python'),
(6, '789', 'rinchi kumari prasad', '9635142883', 'rinchiprasad@gmail.com', '04-04-20', '04-04-20', 'python'),
(7, '78', 'Rohit  prasad', '9800998567', 'rohitprasad089@gmail.com', '04-04-20', '04-04-20', 'php'),
(8, '789', 'rinchi kumari prasad', '9635142883', 'rinchiprasad@gmail.com', '04-04-20', '04-04-20', 'c++'),
(9, '789', 'rinchi kumari prasad', '9635142883', 'rinchiprasad@gmail.com', '05-04-20', '07-04-20', 'c++'),
(10, '78', 'Rohit  prasad', '9800998567', 'rohitprasad089@gmail.com', '05-04-20', '07-04-20', 'python'),
(11, '78', 'Rohit  prasad', '9800998567', 'rohitprasad089@gmail.com', '07-04-20', '07-04-20', 'python'),
(12, '789456123125', 'vikash  dagar', '1234567890', 'dagarvikash@gmail.com', '07-04-20', '07-04-20', 'complete reference java'),
(13, '789456123125', 'vikash  dagar', '1234567890', 'dagarvikash@gmail.com', '07-04-20', '07-04-20', 'c++'),
(14, '78', 'Rohit  prasad', '9800998567', 'rohitprasad089@gmail.com', '09-04-20', '09-04-20', 'c++'),
(15, '78', 'Rohit  prasad', '9800998567', 'rohitprasad089@gmail.com', '10-04-20', '10-04-20', 'c++'),
(16, '78', 'Rohit  prasad', '9800998567', 'rohitprasad089@gmail.com', '10-04-20', '10-04-20', 'c++'),
(17, '78', 'Rohit  prasad', '9800998567', 'rohitprasad089@gmail.com', '10-04-20', '14-04-20', 'c++'),
(18, '789456123456', 'rohit kumar prasad', '7908591508', 'rohitprasad@gmail.com', '12-04-20', '12-04-20', 'DBMS'),
(19, '745192912100', 'Rohit  prasad', '9874147882', 'rohitprasad089@gmail.com', '14-04-20', '', 'the complete reference java'),
(20, '987456479874', 'rinchi kumari prasad', '7412589637', 'rinchiprasad@gmail.com', '14-04-20', '', 'c++'),
(21, '789456123125', 'vikash  dagar', '1234567890', 'dagarvikash@gmail.com', '14-04-20', '', 'c++');

-- --------------------------------------------------------

--
-- Table structure for table `librarianinfo`
--

CREATE TABLE `librarianinfo` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarianinfo`
--

INSERT INTO `librarianinfo` (`id`, `name`, `email`, `password`) VALUES
(1, 'librarian', 'demo@xyz.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `read` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `aadhar`, `title`, `messages`, `read`) VALUES
(1, '78', 'return book', 'PLEASE RETURN THE BOOK.', 'n'),
(2, '745192912100', 'return book', 'please return the book', 'n'),
(3, '987456479874', 'due date', 'kindly return the book', 'n'),
(4, '789456123125', 'return book', 'please return the book\r\n', 'n'),
(5, '745192912100', 'library closed', 'This to inform you that the Library is closed due to corono virus outbreak. ', 'n'),
(7, '745192912100', 'test', 'hii how r u??', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `birth` varchar(50) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin` int(6) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `taddress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(600) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `firstname`, `middlename`, `lastname`, `aadhar`, `phone`, `birth`, `blood`, `gender`, `nationality`, `city`, `state`, `pin`, `paddress`, `taddress`, `email`, `password`, `photo`, `status`) VALUES
(3, 'rinchi', 'kumari', 'prasad', '987456479874', '7412589637', '1999-08-27', 'o+', 'Femal', 'Indian', 'SILIGURI', 'State', 734005, 'Hemanto Basu Colony', 'Near Vishal Meghamart Burdwan Road', 'rinchiprasad@gmail.com', '789456', '../photo/IMG_0810.JPG', 'yes'),
(6, 'vikash', '', 'dagar', '789456123125', '1234567890', '1997-01-09', 'o+', 'Male', 'Indian', 'bahadurgarh', 'State', 124507, 'patel nagar bahadurgarh haryana', 'patel nagar bahadurgarh haryana', 'dagarvikash@gmail.com', '123456', '', 'yes'),
(7, 'shivani', '', 'singh', '789456147878', '7894561234', '1996-09-06', 'o+', 'Femal', 'Indian', 'delhi', 'State', 110075, 'najafgarh', 'najafgarh', 'shivanisingh@gmail.com', '789456', '', 'yes'),
(13, 'Rohit', '', 'prasad', '745192912100', '9800998567', '1995-07-11', 'o+', 'Male', 'Indian', 'SILIGURI', 'State', 734005, 'Hemanto Basu Colony', 'sts bsf tigri', 'rohitprasad089@gmail.com', '123456', '../photo/IMG-20190520-WA0002-01.jpeg', 'yes'),
(15, 'santosh', 'kumar', 'gupta', '789456789789', '9874567894', '2000-05-08', 'o+', 'Male', 'Indian', 'siliguri', 'State', 734005, 'vishal mega mart siliguri', 'vishal mega mart siliguri', 'santoshkumar@gmail.com', '741852', '../photo/IMG_20190527_220301_507.jpg', 'yes'),
(16, 'rohit', 'kumar', 'prasad', '789456123456', '7908591508', '1996-07-11', 'o+', 'Male', 'Indian', 'siliguri', 'State', 734005, 'vishal mega mart siliguri burdwan road', 'Near Vishal Meghamart Burdwan Road', 'rohitprasad@gmail.com', '123456', '../photo/IMG_20190527_220301_507.jpg', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued_books`
--
ALTER TABLE `issued_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarianinfo`
--
ALTER TABLE `librarianinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `issued_books`
--
ALTER TABLE `issued_books`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `librarianinfo`
--
ALTER TABLE `librarianinfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

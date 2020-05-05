-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 04:42 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Calculus 8th Edition', '<h3>Author: James Stewart</h3></br><p>Success in your calculus course starts here! James Stewart\'s CALCULUS texts are world-wide best-sellers for a reason: they are clear, accurate, and filled with relevant, real-world examples. With CALCULUS, Eighth Edition, Stewart conveys not only the utility of calculus to help you develop technical competence, but also gives you an appreciation for the intrinsic beauty of the subject. His patient examples and built-in learning aids will help you build your mathematical confidence and achieve your goals in the course!</p>\r\n</br><p><b>ISBN-13: </b>978-1285740621</p>', '29.99', '144.00', 10, 'calculus.jpg', '2020-05-01 16:19:40'),
(2, 'Chemistry: A Molecular Approach 4th Edition', '<h3>Author: Nivaldo J. Tro</h3></br>\r\n<p>This edition features the same content as the traditional text in a convenient, three-hole-punched, loose-leaf version. Books a la Carte also offer a great value—this format costs significantly less than a new textbook. Before purchasing, check with your instructor or review your course syllabus to ensure that you select the correct ISBN. Several versions of Pearson\'s MyLab & Mastering products exist for each title, including customized versions for individual schools, and registrations are not transferable</p>\r\n</br><p><b>ISBN-13: </b>978-0134112831</p>', '12.99', '19.99', 10, 'chem.jpg', '2020-05-01 16:23:17'),
(3, 'Campbell Biology 11th Edition', '<h3>Author: Lisa A. Urry  & Michael L. Cain</h3></br><p>You are purchasing a standalone product; MyLab™ & Mastering™ does not come packaged with this content. Students, if interested in purchasing this title with MyLab & Mastering, ask your instructor for the correct package ISBN and Course ID. Instructors, contact your Pearson representative for more information.</p></br>\r\n<p><b>ISBN-13: </b>978-0134093413</p>', '10.00', '19.99', 10, 'bio.jpg', '2020-05-01 16:23:17'),
(4, 'Fundamentals of Physics 10th Edition', '<h3>Author: David Halliday, Robert Resnick</h3></br><p>The 10th edition of Halliday, Resnick and Walkers  Fundamentals of Physics provides the perfect solution  for teaching a 2 or 3 semester calculus-based physics course, providing  instructors with a tool by which they can teach students how to  effectively read scientific material, identify fundamental  concepts, reason through scientific questions, and solve  quantitative problems. </p></br>\r\n<p><b>ISBN-13: </b>978-1118230718</p>', '100.00', '160.00', 7, 'physics.jpg', '2020-05-01 16:25:28'),
(5, 'U.S History', '<h3>Author: P. Scott Corbett, Volker John M Lund, Todd Pfannestiel, Paul Vickery</h3></br><p>U.S. History is designed to meet the scope and sequence requirements of most introductory courses. The text provides a balanced approach to U.S. history, considering the people, events, and ideas that have shaped the United States from both the top down (politics, economics, diplomacy) and bottom up (eyewitness accounts, lived experience). U.S. History covers key forces that form the American experience, with particular attention to issues of race, class, and gender.</p></br>\r\n<p><b>ISBN-13: </b>978-1938168369</p>', '10.00', '16.00', 20, 'history.jpg', '2020-05-01 16:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `item_quantity` varchar(255) NOT NULL,
  `item_mc_gross` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL DEFAULT '',
  `address_street` varchar(255) NOT NULL,
  `address_city` varchar(255) NOT NULL,
  `address_state` varchar(255) NOT NULL,
  `address_zip` varchar(255) NOT NULL,
  `address_country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

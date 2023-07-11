-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 02:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `id` int(10) NOT NULL,
  `mid` int(10) NOT NULL,
  `ticket` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` int(10) NOT NULL,
  `theatre` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`id`, `mid`, `ticket`, `fname`, `lname`, `email`, `mobile`, `theatre`, `type`, `date`, `time`) VALUES
(79, 21, 5, 'abc', 'abc', 'abc@gmail.com', 1234567890, 'private-hall', '7d', '21-12', '09-00'),
(80, 21, 5, 'abc', 'abc', 'abc@gmail.com', 1234567890, 'private-hall', '7d', '21-12', '09-00'),
(81, 21, 2, 'abc', 'abc', 'abc@gmail.com', 1234567890, 'main-hall', '2d', '23-12', '09-00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `pass`) VALUES
(1, 'abc@gmail.com', '123'),
(7, '', '123'),
(8, '', '123'),
(9, '', '123'),
(10, '', '123'),
(11, '', '123'),
(12, 'shambhurajeb19@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `movie_details`
--

CREATE TABLE `movie_details` (
  `mid` int(100) NOT NULL,
  `img` varchar(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `dis` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_details`
--

INSERT INTO `movie_details` (`mid`, `img`, `name`, `genre`, `actor`, `dis`) VALUES
(1, 'img/dagadi.jpg', 'Dagaadi Chawl 2', 'Action', ' Ankush Chaudhari, Makarand Deshpande and Pooja Sa', 'Daagdi Chaawl features an ensemble cast of Ankush Chaudhari, Makarand Deshpande and Pooja Sawant in lead roles. It is the third release...'),
(2, 'img/kgf.jpg', 'K.G.F: Chapter 1', 'Action', 'Yash, Sanjay Dutt, Raveena Tandon', 'K.G.F: Chapter 1 is a 2018 Indian Kannada-language period action film written and directed by Prashanth Neel, and produced by Vijay Kiragandur under the ...'),
(3, 'img/rrr.jpg', 'RRR', 'action', 'N.T. Rama Rao Jr., Ram Charan, Ajay Devgn, Alia Bh', 'RRR is a 2022 Indian Telugu-language epic action drama film directed by S. S. Rajamouli, who co-wrote the film...'),
(4, 'img/bullet.jpg', 'Bullet Train', 'Action', 'Brad Pitt', 'Bullet Train is a 2022 American action comedy film directed by David Leitch...'),
(5, 'img/women.jpg', 'The Woman King', 'Action', 'Viola Davis', 'The Woman King is a 2022 American historical epic film about the Agojie, the all-female warrior unit that protected the West African kingdom of Dahomey ...'),
(6, 'img/frozen.jpg', 'Frozen II', '3D/Animation', 'null', 'Frozen 2, stylized as Frozen II, is a 2019 American computer-animated musical fantasy film produced by Walt Disney Animation Studios '),
(7, 'img/incredible.jpg', 'Incredibles 2', '3D/Animation', 'null', 'Incredibles 2 is a 2018 American computer-animated superhero film produced by Pixar Animation Studios and released by Walt Disney Pictures.'),
(8, 'img/insideout.jpg', 'Inside Out', '3D/Animation', 'null', 'Inside Out is a 2015 American computer-animated film directed by Pete Docter from a screenplay he co-wrote with Meg LeFauve...'),
(9, 'img/lightyear.jpg', 'Lightyear', '3D/Animation', 'null', 'Lightyear is a 2022 American computer-animated science-fiction action-adventure film produced by Walt Disney Pictures and Pixar Animation Studios, ...'),
(10, 'img/spiderman.jpg', 'Spider-Man: Into the Spider-Verse', '3D/Animation', 'null', 'Spider-Man: Into the Spider-Verse is a 2018 American computer-animated superhero film featuring the Marvel...'),
(11, 'img/free.jpg', 'Free Guy', 'Comedy', 'Ryan Reynolds, Jodie Comer, Dwayne Johnson', 'Free Guy is a 2021 American action-comedy film directed and produced by Shawn Levy from a screenplay...'),
(12, 'img/due.jpg', 'Due Date', 'Comedy', ' Robert Downey Jr, Zach Galifianakis', 'Due Date is a 2010 American black comedy road film directed by Todd Phillips, who wrote the screenplay...'),
(13, 'img/idiot.jpg', '3 Idiots', 'Comedy', 'Aamir Khan, R. Madhavan,  Sharman Joshi, Kareena K', '3 Idiots is a 2009 Indian Hindi-language coming-of-age comedy-drama film written and directed...'),
(14, 'img/mbbs.jpg', 'Munna Bhai M.B.B.S.', 'Comedy', ' Sunil Dutt, Sanjay Dutt, Arshad Warsi, Gracy Sing', 'Based in Mumbai, the films follows Munna Bhai (Sanjay Dutt), a goon who tries to please his father (Sunil Dutt)'),
(15, 'img/gadhav.jpg', 'Gadhvache Lagna', 'Comedy', 'Makarand Anaspure · Dipak Alegaokar', 'Savlya, a potter who adores his donkey, goes to heaven and...'),
(16, 'img/titanic.jpg', 'Titanic', 'Love', ' Leonardo DiCaprio, Kate Winslet', 'Titanic is a 1997 American epic romance and disaster film directed, written, produced, and co-edited...'),
(17, 'img/notebook.jpg', 'The Notebook', 'Love', 'Ryan Gosling, Rachel McAdams', 'The Notebook is a 2004 American romantic drama film directed by Nick...'),
(18, 'img/gehariya.jpg', 'Gehraiyaan', 'Love', 'Deepika Padukone, Ananya Panday, Siddhant Chaturve', 'Gehraiyaan ( transl. Depths) is a 2022 Indian romantic drama film directed by Shakun Batra who also wrote the script with Ayesha Devitre, Sumit Roy and Yash ...'),
(19, 'img/shiddat.jpg', 'Shiddat', 'Love', 'Radhika Madan, Sunny Kaushal', 'Shiddat: Journey Beyond Love, or simply Shiddat ( transl. Passion), is a 2021 Indian Hindi-language romantic drama film directed by Kunal...'),
(20, 'img/sairat.jpg', 'Sairat', 'Love', 'Rinku Rajguru, Tanaji Galgunde, Akash Thosar', 'Sairat ( transl. Wild) is a 2016 Indian Marathi-language romantic tragedy...'),
(21, 'img/adam.jpg', 'Black Adam', 'Superhero', 'Dwayne Johnson', 'Black Adam is a 2022 American superhero film starring Dwayne Johnson as the titular DC Comics character. The film is a spin-off from Shazam!'),
(22, 'img/wakanda.jpg', 'Black Panther: Wakanda Forever', 'Superhero', 'Black Panther, Shuri, Namor', 'Black Panther: Wakanda Forever is a 2022 American superhero film based on the Marvel Comics...'),
(23, 'img/drstrange.jpg', 'Doctor Strange in the Multiverse of Madn', 'Superhero', 'Doctor Strange, Scarlet Witch, America Chavez', 'Doctor Strange in the Multiverse of Madness is a 2022 American comic superhero film...'),
(24, 'img/brahmastra.jpg', 'Brahmastra: Part One – Shiva', 'Superhero', ' Amitabh Bachchan; Ranbir Kapoor; Alia Bhatt', 'Brahm?stra: Part One – Shiva is a 2022 Indian Hindi-language fantasy action-adventure film written and directed by Ayan Mukerji.'),
(25, 'img/shazam.jpg', 'Shazam!', 'Superhero', 'Zachary Levi, Mark Strong, Asher Angel', 'Shazam! is a 2019 superhero film based on the DC character of the same name...'),
(26, 'img/jokar.jpg', 'Joker', 'Thriller', 'Joaquin Phoenix ', 'Set in 1981, it follows Arthur Fleck, a failed clown and aspiring stand-up...'),
(27, 'img/inception.jpg', 'Inception', 'Thriller', 'Leonardo DiCaprio, Tom', 'Inception is a 2010 science fiction action film written and directed by...'),
(28, 'img/kantara.jpg', 'Kantara', 'Thriller', 'Rishabh Shetty, Kishore', 'Kantara is a 2022 Indian Kannada-language action thriller film written and directed by Rishab Shetty'),
(29, 'img/manja.jpg', 'Manjha', 'Thriller', 'Sumedh Mudgalkar, Rohit Phalke, Ashwini Bhave', 'Manjha is a Marathi language film, directed by Jatin Wagle and produced by Trilok Malhotra and KR Harish'),
(30, 'img/drishyam.jpg', 'Drishyam', 'Thriller', 'Ajay Devgn, Tabu, Shriya Saran, Ishita Dutta', 'Drishyam ( transl. Visual) is a 2015 Indian Hindi-language thriller film...');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tamt` int(10) NOT NULL,
  `card` int(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `email`, `tamt`, `card`, `fname`, `mname`, `lname`) VALUES
(1, 'abc@gmail.com', 1000, 0, 'abc', 'abc', 'abc'),
(110, 'abc@gmail.com', 4000, 0, 'abc', 'abc', 'abc'),
(111, 'abc@gmail.com', 4000, 0, 'abc', 'abc', 'abc'),
(112, 'abc@gmail.com', 400, 0, 'abc', 'abc', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_details`
--
ALTER TABLE `movie_details`
  ADD PRIMARY KEY (`mid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `name_2` (`name`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movie_details`
--
ALTER TABLE `movie_details`
  MODIFY `mid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD CONSTRAINT `bookingtable_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movie_details` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 07:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_detail`
--

CREATE TABLE `book_detail` (
  `book_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_detail`
--

INSERT INTO `book_detail` (`book_id`, `movie_id`, `customer_id`, `seat_id`) VALUES
(1, 2, 2, 21),
(71, 2, 2, 2),
(72, 176, 28, 34),
(73, 176, 28, 35),
(74, 176, 28, 2),
(75, 176, 28, 3),
(76, 176, 28, 37),
(77, 182, 28, 1),
(78, 176, 28, 2),
(79, 178, 28, 3),
(80, 176, 28, 4),
(81, 176, 28, 5),
(82, 184, 28, 169),
(83, 186, 28, 311),
(84, 187, 28, 319),
(85, 186, 28, 306),
(86, 189, 28, 318),
(87, 188, 28, 310),
(88, 192, 28, 400),
(89, 192, 40, 396),
(90, 192, 28, 399),
(91, 193, 28, 384),
(92, 193, 28, 385);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`) VALUES
(1, 'heoor\r\n'),
(2, 'ss'),
(3, 'ss'),
(4, 'as'),
(5, 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_id` int(11) NOT NULL,
  `hall_name` varchar(2) NOT NULL,
  `seat_amount` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_id`, `hall_name`, `seat_amount`) VALUES
(58, 'A', 10),
(59, 'B', 5),
(60, 'C', 21),
(61, 'D', 21),
(62, 'F', 10);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieID` int(11) NOT NULL,
  `movieTitle` varchar(255) DEFAULT NULL,
  `durationTime` varchar(255) DEFAULT NULL,
  `moviePrice` varchar(10) DEFAULT NULL,
  `movieStatus` bit(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `hall_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `categories` varchar(255) NOT NULL,
  `session` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieID`, `movieTitle`, `durationTime`, `moviePrice`, `movieStatus`, `image`, `hall_id`, `create_at`, `categories`, `session`) VALUES
(192, 'New Transform movie New Transform movie New Transform movie New Transform movie', '20', '22', b'0', 'm6.jpg', 59, '2021-01-23 17:01:26', '', 1),
(193, 'Tank', '90', '90', b'1', 'm2.jpg', 58, '2021-01-24 15:06:22', '', 2),
(194, 'ss', '22', '90', b'1', 'm5.jpg', 59, '2021-01-24 16:29:04', '1', 2),
(195, 'assa', '221', '212', b'1', 'm4.jpg', 58, '2021-01-24 16:32:59', '', 1),
(196, 'asa', '212', '212', b'1', 'm5.jpg', 58, '2021-01-25 16:33:14', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `seat_id_name` varchar(255) NOT NULL,
  `hal_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `session` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `seat_id_name`, `hal_id`, `status`, `session`) VALUES
(366, 'A1', 58, 1, 1),
(367, 'A2', 58, 1, 1),
(368, 'A3', 58, 1, 1),
(369, 'A4', 58, 1, 1),
(370, 'A5', 58, 1, 1),
(371, 'A6', 58, 1, 1),
(372, 'A7', 58, 1, 1),
(373, 'A8', 58, 1, 1),
(374, 'A9', 58, 1, 1),
(375, 'A10', 58, 1, 1),
(376, 'A1', 58, 1, 2),
(377, 'A2', 58, 1, 2),
(378, 'A3', 58, 1, 2),
(379, 'A4', 58, 1, 2),
(380, 'A5', 58, 1, 2),
(381, 'A6', 58, 1, 2),
(382, 'A7', 58, 1, 2),
(383, 'A8', 58, 1, 2),
(384, 'A9', 58, 0, 2),
(385, 'A10', 58, 0, 2),
(386, 'A1', 58, 1, 3),
(387, 'A2', 58, 1, 3),
(388, 'A3', 58, 1, 3),
(389, 'A4', 58, 1, 3),
(390, 'A5', 58, 1, 3),
(391, 'A6', 58, 1, 3),
(392, 'A7', 58, 1, 3),
(393, 'A8', 58, 1, 3),
(394, 'A9', 58, 1, 3),
(395, 'A10', 58, 1, 3),
(396, 'B1', 59, 0, 1),
(397, 'B2', 59, 1, 1),
(398, 'B3', 59, 1, 1),
(399, 'B4', 59, 0, 1),
(400, 'B5', 59, 0, 1),
(401, 'B1', 59, 1, 2),
(402, 'B2', 59, 1, 2),
(403, 'B3', 59, 1, 2),
(404, 'B4', 59, 1, 2),
(405, 'B5', 59, 1, 2),
(406, 'B1', 59, 1, 3),
(407, 'B2', 59, 1, 3),
(408, 'B3', 59, 1, 3),
(409, 'B4', 59, 1, 3),
(410, 'B5', 59, 1, 3),
(411, 'C1', 60, 1, 1),
(412, 'C2', 60, 1, 1),
(413, 'C3', 60, 1, 1),
(414, 'C4', 60, 1, 1),
(415, 'C5', 60, 1, 1),
(416, 'C6', 60, 1, 1),
(417, 'C7', 60, 1, 1),
(418, 'C8', 60, 1, 1),
(419, 'C9', 60, 1, 1),
(420, 'C10', 60, 1, 1),
(421, 'C11', 60, 1, 1),
(422, 'C12', 60, 1, 1),
(423, 'C13', 60, 1, 1),
(424, 'C14', 60, 1, 1),
(425, 'C15', 60, 1, 1),
(426, 'C16', 60, 1, 1),
(427, 'C17', 60, 1, 1),
(428, 'C18', 60, 1, 1),
(429, 'C19', 60, 1, 1),
(430, 'C20', 60, 1, 1),
(431, 'C21', 60, 1, 1),
(432, 'C1', 60, 1, 2),
(433, 'C2', 60, 1, 2),
(434, 'C3', 60, 1, 2),
(435, 'C4', 60, 1, 2),
(436, 'C5', 60, 1, 2),
(437, 'C6', 60, 1, 2),
(438, 'C7', 60, 1, 2),
(439, 'C8', 60, 1, 2),
(440, 'C9', 60, 1, 2),
(441, 'C10', 60, 1, 2),
(442, 'C11', 60, 1, 2),
(443, 'C12', 60, 1, 2),
(444, 'C13', 60, 1, 2),
(445, 'C14', 60, 1, 2),
(446, 'C15', 60, 1, 2),
(447, 'C16', 60, 1, 2),
(448, 'C17', 60, 1, 2),
(449, 'C18', 60, 1, 2),
(450, 'C19', 60, 1, 2),
(451, 'C20', 60, 1, 2),
(452, 'C21', 60, 1, 2),
(453, 'C1', 60, 1, 3),
(454, 'C2', 60, 1, 3),
(455, 'C3', 60, 1, 3),
(456, 'C4', 60, 1, 3),
(457, 'C5', 60, 1, 3),
(458, 'C6', 60, 1, 3),
(459, 'C7', 60, 1, 3),
(460, 'C8', 60, 1, 3),
(461, 'C9', 60, 1, 3),
(462, 'C10', 60, 1, 3),
(463, 'C11', 60, 1, 3),
(464, 'C12', 60, 1, 3),
(465, 'C13', 60, 1, 3),
(466, 'C14', 60, 1, 3),
(467, 'C15', 60, 1, 3),
(468, 'C16', 60, 1, 3),
(469, 'C17', 60, 1, 3),
(470, 'C18', 60, 1, 3),
(471, 'C19', 60, 1, 3),
(472, 'C20', 60, 1, 3),
(473, 'C21', 60, 1, 3),
(474, 'D1', 61, 1, 1),
(475, 'D2', 61, 1, 1),
(476, 'D3', 61, 1, 1),
(477, 'D4', 61, 1, 1),
(478, 'D5', 61, 1, 1),
(479, 'D6', 61, 1, 1),
(480, 'D7', 61, 1, 1),
(481, 'D8', 61, 1, 1),
(482, 'D9', 61, 1, 1),
(483, 'D10', 61, 1, 1),
(484, 'D11', 61, 1, 1),
(485, 'D12', 61, 1, 1),
(486, 'D13', 61, 1, 1),
(487, 'D14', 61, 1, 1),
(488, 'D15', 61, 1, 1),
(489, 'D16', 61, 1, 1),
(490, 'D17', 61, 1, 1),
(491, 'D18', 61, 1, 1),
(492, 'D19', 61, 1, 1),
(493, 'D20', 61, 1, 1),
(494, 'D21', 61, 1, 1),
(495, 'D1', 61, 1, 2),
(496, 'D2', 61, 1, 2),
(497, 'D3', 61, 1, 2),
(498, 'D4', 61, 1, 2),
(499, 'D5', 61, 1, 2),
(500, 'D6', 61, 1, 2),
(501, 'D7', 61, 1, 2),
(502, 'D8', 61, 1, 2),
(503, 'D9', 61, 1, 2),
(504, 'D10', 61, 1, 2),
(505, 'D11', 61, 1, 2),
(506, 'D12', 61, 1, 2),
(507, 'D13', 61, 1, 2),
(508, 'D14', 61, 1, 2),
(509, 'D15', 61, 1, 2),
(510, 'D16', 61, 1, 2),
(511, 'D17', 61, 1, 2),
(512, 'D18', 61, 1, 2),
(513, 'D19', 61, 1, 2),
(514, 'D20', 61, 1, 2),
(515, 'D21', 61, 1, 2),
(516, 'D1', 61, 1, 3),
(517, 'D2', 61, 1, 3),
(518, 'D3', 61, 1, 3),
(519, 'D4', 61, 1, 3),
(520, 'D5', 61, 1, 3),
(521, 'D6', 61, 1, 3),
(522, 'D7', 61, 1, 3),
(523, 'D8', 61, 1, 3),
(524, 'D9', 61, 1, 3),
(525, 'D10', 61, 1, 3),
(526, 'D11', 61, 1, 3),
(527, 'D12', 61, 1, 3),
(528, 'D13', 61, 1, 3),
(529, 'D14', 61, 1, 3),
(530, 'D15', 61, 1, 3),
(531, 'D16', 61, 1, 3),
(532, 'D17', 61, 1, 3),
(533, 'D18', 61, 1, 3),
(534, 'D19', 61, 1, 3),
(535, 'D20', 61, 1, 3),
(536, 'D21', 61, 1, 3),
(537, 'F1', 62, 1, 1),
(538, 'F2', 62, 1, 1),
(539, 'F3', 62, 1, 1),
(540, 'F4', 62, 1, 1),
(541, 'F5', 62, 1, 1),
(542, 'F6', 62, 1, 1),
(543, 'F7', 62, 1, 1),
(544, 'F8', 62, 1, 1),
(545, 'F9', 62, 1, 1),
(546, 'F10', 62, 1, 1),
(547, 'F1', 62, 1, 2),
(548, 'F2', 62, 1, 2),
(549, 'F3', 62, 1, 2),
(550, 'F4', 62, 1, 2),
(551, 'F5', 62, 1, 2),
(552, 'F6', 62, 1, 2),
(553, 'F7', 62, 1, 2),
(554, 'F8', 62, 1, 2),
(555, 'F9', 62, 1, 2),
(556, 'F10', 62, 1, 2),
(557, 'F1', 62, 1, 3),
(558, 'F2', 62, 1, 3),
(559, 'F3', 62, 1, 3),
(560, 'F4', 62, 1, 3),
(561, 'F5', 62, 1, 3),
(562, 'F6', 62, 1, 3),
(563, 'F7', 62, 1, 3),
(564, 'F8', 62, 1, 3),
(565, 'F9', 62, 1, 3),
(566, 'F10', 62, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `session_detail`
--

CREATE TABLE `session_detail` (
  `session_id` int(11) NOT NULL,
  `session_name` varchar(255) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session_detail`
--

INSERT INTO `session_detail` (`session_id`, `session_name`, `start_time`) VALUES
(1, 'Morning', '2021-01-23 15:22:25'),
(2, 'Afternoon', '2021-01-23 15:22:25'),
(3, 'Evening', '2021-01-23 15:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `phone_number`, `password`) VALUES
(28, 'dina', 'dina@gmail.com', 'm', '', '', 'dina'),
(32, 'Cinema', 'dinachatfe5@gmail.com', 'f', 'chormchao', '0921222122', '123'),
(35, 'chat dina', 'dina123@gmail.com', 'f', 'chrom chao', '0922121212', 'dina'),
(38, 'sdas', 'sasass@gmailc.p', 'm', '212', '212', '212'),
(39, 'ss', 'ss', 'f', '2', '22', '22'),
(40, 'dina chat', 'dina1234@gmail.com', 'm', 'chorm chao122', '02212222', 'dina9022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_detail`
--
ALTER TABLE `book_detail`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieID`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `session_detail`
--
ALTER TABLE `session_detail`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_detail`
--
ALTER TABLE `book_detail`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=567;

--
-- AUTO_INCREMENT for table `session_detail`
--
ALTER TABLE `session_detail`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

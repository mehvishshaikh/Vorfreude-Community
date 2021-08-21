-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 11:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vc`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 2, 'hi\n', '2020-03-27 15:08:05', 1),
(2, 2, 1, 'hi ', '2020-03-27 15:08:59', 1),
(3, 2, 1, 'you trouble me alot ', '2020-03-27 15:09:11', 1),
(5, 1, 2, 'ur welcome.. u spark my life\n', '2020-03-27 15:14:17', 1),
(6, 1, 2, 'hguyguyguyuygyugyg', '2020-03-27 15:36:17', 1),
(7, 1, 2, '', '2020-03-27 15:37:10', 1),
(8, 1, 2, '', '2020-03-28 15:30:01', 1),
(9, 1, 2, 'hello\nhello\n', '2020-03-28 15:30:10', 1),
(10, 1, 2, 'hii', '2020-03-28 15:30:39', 1),
(11, 1, 2, 'hii', '2020-03-28 15:30:43', 1),
(12, 1, 2, 'hii', '2020-03-28 15:30:47', 1),
(13, 1, 2, 'hello\n', '2020-03-28 15:30:54', 1),
(14, 1, 2, 'hello\n', '2020-03-28 15:31:04', 1),
(15, 1, 2, 'hii', '2020-03-28 15:31:23', 1),
(16, 1, 2, 'Ateef', '2020-03-29 10:56:57', 1),
(17, 1, 2, 'iuyiuy89y98y08\n', '2020-03-29 11:16:00', 1),
(18, 3, 2, 'hola cariniya', '2020-03-29 12:14:35', 1),
(19, 3, 2, 'haya', '2020-03-30 12:39:28', 1),
(20, 2, 3, '', '2020-03-30 12:39:53', 1),
(21, 1, 3, 'heyyy', '2020-03-30 12:47:18', 1),
(22, 1, 2, '1234\n', '2020-03-30 12:47:58', 1),
(23, 1, 2, 'heyyy', '2020-03-30 12:53:58', 1),
(24, 1, 2, 'huuu', '2020-03-30 12:56:52', 1),
(25, 3, 2, 'hiii', '2020-03-30 12:58:10', 1),
(26, 3, 2, 'hiii', '2020-03-30 12:58:16', 1),
(27, 1, 2, 'hii khadija\n', '2020-03-30 12:58:31', 1),
(28, 2, 1, 'haa\nbolo', '2020-03-30 13:00:41', 1),
(29, 2, 1, 'bolo', '2020-03-30 13:00:59', 1),
(30, 3, 2, 'hola cariniya\n\n', '2020-03-30 15:38:53', 1),
(31, 2, 0, 'hi', '2020-04-02 15:32:33', 1),
(32, 2, 0, 'hi', '2020-04-02 15:33:14', 1),
(33, 1, 0, 'hi', '2020-04-02 15:36:13', 1),
(34, 1, 0, '', '2020-04-02 15:36:15', 1),
(35, 1, 0, '', '2020-04-02 15:36:21', 1),
(36, 1, 0, 'hi', '2020-04-02 15:36:31', 1),
(37, 1, 0, '', '2020-04-02 15:50:48', 1),
(38, 7, 0, 'hiii hello', '2020-04-02 16:23:32', 1),
(39, 1, 0, 'hjgjgg', '2020-04-02 16:27:23', 1),
(40, 1, 0, 'hello\n', '2020-04-02 16:53:01', 1),
(41, 1, 0, '', '2020-04-02 16:53:02', 1),
(42, 1, 0, 'hello\n', '2020-04-02 16:53:10', 1),
(43, 1, 0, 'hello', '2020-04-02 16:53:19', 1),
(44, 1, 0, 'how', '2020-04-02 17:37:23', 1),
(45, 2, 1, 'hi', '2020-04-03 06:57:30', 1),
(46, 2, 1, 'hi', '2020-04-03 06:57:47', 1),
(47, 2, 1, 'hello', '2020-04-03 06:58:02', 1),
(48, 2, 1, 'hello', '2020-04-03 06:58:03', 1),
(49, 3, 1, 'heyyy\n', '2020-04-03 06:59:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `Email`, `message`) VALUES
(1, 'Mehvish', 'mehvish.ms11@gmail.com', 'hello'),
(2, 'Mehvish', 'mehvish.ms11@gmail.com', 'heyyy');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 2, '2020-04-09 11:30:19', 'no'),
(2, 1, '2020-04-03 07:04:06', 'no'),
(3, 2, '2020-03-27 15:15:37', 'no'),
(4, 2, '2020-03-27 15:32:29', 'no'),
(5, 2, '2020-03-27 15:46:34', 'no'),
(6, 2, '2020-03-28 15:32:36', 'no'),
(7, 1, '2020-03-28 15:54:59', 'no'),
(8, 2, '2020-03-28 16:39:51', 'no'),
(9, 2, '2020-03-28 16:58:02', 'no'),
(10, 2, '2020-03-29 10:56:02', 'no'),
(11, 2, '2020-03-29 11:05:45', 'no'),
(12, 2, '2020-03-29 11:15:01', 'no'),
(13, 2, '2020-03-29 12:07:23', 'no'),
(14, 2, '2020-03-29 12:29:24', 'no'),
(15, 2, '2020-03-30 12:39:31', 'no'),
(16, 3, '2020-03-30 12:47:25', 'no'),
(17, 2, '2020-03-30 12:58:32', 'no'),
(18, 1, '2020-03-30 12:58:47', 'no'),
(19, 1, '2020-03-30 15:38:13', 'no'),
(20, 2, '2020-03-30 15:50:24', 'no'),
(21, 1, '2020-03-31 08:27:56', 'no'),
(22, 1, '2020-04-02 15:05:32', 'no'),
(23, 1, '2020-04-03 06:37:41', 'no'),
(24, 1, '2020-04-03 06:57:10', 'no'),
(25, 2, '2020-04-03 07:01:45', 'no'),
(26, 1, '2020-04-03 17:24:46', 'no'),
(27, 1, '2020-04-09 11:30:13', 'no'),
(28, 1, '2020-04-09 11:31:25', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `dob` date NOT NULL,
  `institute` varchar(255) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `name`, `company`, `email`, `contact`, `dob`, `institute`, `profession`, `password`, `path`) VALUES
(1, 'mehvish', '', 'mehvish@gmail.com', '676775544', '2020-03-01', 'mhsscoe', '', '123', 'http://localhost/Login/documents/1.PNG'),
(2, 'aziz', '', 'aziz@gmail.com', '675554433', '2020-03-02', '', 'engineer', '456', 'http://localhost/Login/documents/2.PNG'),
(3, 'infosys', '', 'adil@infosys.com', '0', '0000-00-00', '', '', '789', 'http://localhost/Login/documents/3.PNG'),
(4, 'TCS', '', 'ateef@tcs.com', '0', '0000-00-00', '', '', '987', 'http://localhost/Login/documents/5.PNG'),
(5, 'usman merchant', '', 'usmerchant@gmail.com', '767672754', '2020-03-02', 'vjti', '', '1112', 'http://localhost/Login/documents/Capture3.PNG'),
(6, 'hassy', '', 'hassy@gmail.com', '757555488', '2020-02-04', 'vjti', '', '345', 'http://localhost/Login/documents/download.png'),
(7, 'yasmin', '', 'yasmin@gmail.com', '5765776546', '2020-03-03', 'mhsscoe', '', '321', 'http://localhost/Login/documents/1.PNG'),
(8, 'LTI', '', 'arish@lti.com', '0', '0000-00-00', '', '', '148', 'http://localhost/Login/documents/download.png'),
(9, 'khadija', '', 'khadija@gmail.com', '768763877', '2020-04-01', 'mhsscoe', '', '369', 'http://localhost/Login/documents/activitytifr.PNG'),
(10, 'amaan patel', '', 'amaan@gmail.com', '575765765', '2020-04-01', 'mhsscoe', '', '789', 'http://localhost/Login/documents/5.PNG'),
(11, 'aamna sayyed', '', 'aamna@gmail.com', '687648726', '2020-04-01', 'sndt', '', '345', 'http://localhost/Login/documents/wbs.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `creator` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `other_category` varchar(100) NOT NULL,
  `mininvestment` int(100) NOT NULL,
  `maxinvestment` int(100) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  `link` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `title`, `description`, `creator`, `category`, `other_category`, `mininvestment`, `maxinvestment`, `img_path`, `path`, `link`, `email`, `date`, `user_id`) VALUES
(1, 'Coronavirus', 'Coronaviruses are a group of related viruses that cause diseases in mammals and birds. In humans, coronaviruses cause respiratory tract infections that can range from mild to lethal. Mild illnesses include some cases of the common cold (which has other possible causes, predominantly rhinoviruses), while more lethal varieties can cause SARS, MERS, and COVID-19. Symptoms in other species vary: in chickens, they cause an upper respiratory tract disease, while in cows and pigs they cause diarrhea. T', 'mehvish shaikh', 'Biology', '', 20000, 25000, 'http://localhost/Login/images/coronavirus.jpg', 'http://localhost/Login/documents/collaboration.pdf', 'https://www.google.com', 'mehvish@gmail.com', '2020-04-08 13:06:01', 1),
(2, 'Suicide', 'Suicide means ending your own life. It is sometimes a way for people to escape pain or suffering. When someone ends their own life, we say that they \"died by suicide.\" A \"suicide attempt\" means that someone tried to end their life, but did not die.', 'mehvish shaikh', 'Public health', '', 20000, 25000, 'http://localhost/Login/images/suicide.jpg', 'http://localhost/Login/documents/04Janoscova.pdf', 'https://www.google.com', 'mehvish@gmail.com', '2020-04-08 13:11:22', 1),
(3, 'virtual guide', 'A virtual tour is a simulation of an existing location, usually composed of a sequence of videos or still images. It may also use other multimedia elements such as sound effects, music, narration, and text. It is distinguished from the use of live television to affect tele-tourism.', 'aziz lokhandwala', 'others', 'Tourism', 30000, 35000, 'http://localhost/Login/images/vitualguide.jpg', 'http://localhost/Login/documents/EXP NO 4.docx', 'https://www.google.com', 'aziz@gmail.com', '2020-04-08 13:16:57', 2),
(5, 'obstacle avoiding car', 'Obstacle Avoiding Robot is an intelligent device which can automatically sense the obstacle in front of it and avoid them by turning itself in another direction. This design allows the robot to navigate in unknown environment by avoiding collisions, which is a primary requirement for any autonomous mobile robot. The application of Obstacle Avoiding robot is not limited and it is used in most of the military organization now which helps carry out many risky jobs that cannot be done by any soldier', 'aziz lokhandwala', 'others', 'IOT', 30000, 35000, 'http://localhost/Login/images/car.jpg', 'http://localhost/Login/documents/carvideo.mp4', 'https://www.google.com', 'aziz@gmail.com', '2020-04-08 13:46:46', 2),
(6, 'Android', 'Android is a mobile operating system based on a modified version of the Linux kernel and other open source software, designed primarily for touchscreen mobile devices such as smartphones and tablets. Android is developed by a consortium of developers known as the Open Handset Alliance, with the main contributor and commercial marketer being Google.', 'mehvish shaikh', 'others', 'Technical', 20000, 25000, 'http://localhost/Login/images/android.jpg', 'http://localhost/Login/documents/Sequence diagram.pdf', 'https://www.google.com', 'mehvish@gmail.com', '2020-04-08 18:42:35', 1),
(7, 'Diabeties', 'Diabetes is a disease that occurs when your blood glucose, also called blood sugar, is too high. Blood glucose is your main source of energy and comes from the food you eat. Insulin, a hormone made by the pancreas, helps glucose from food get into your cells to be used for energy. Sometimes your body doesn’t make enough—or any—insulin or doesn’t use insulin well. Glucose then stays in your blood and doesn’t reach your cells.', 'mehvish shaikh', 'Public health', '', 20000, 25000, 'http://localhost/Login/images/diabetes.jpeg', 'http://localhost/Login/documents/04Janoscova.pdf', 'https://www.google.com', 'mehvish@gmail.com', '2020-04-08 18:48:06', 1),
(8, 'Irrigation system', 'Irrigation is the application of controlled amounts of water to plants at needed intervals. Irrigation helps to grow agricultural crops, maintain landscapes, and revegetate disturbed soils in dry areas and during periods of less than average rainfall. Irrigation also has other uses in crop production, including frost protection,[1] suppressing weed growth in grain fields[2] and preventing soil consolidation.[3] In contrast, agriculture that relies only on direct rainfall is referred to as rain-f', 'aziz lokhandwala', 'Economics', '', 30000, 35000, 'http://localhost/Login/images/irrigation.jpg', 'http://localhost/Login/documents/component diagram.pdf', 'https://www.google.com', 'aziz@gmail.com', '2020-04-08 18:52:30', 2),
(9, 'Photosynthesis', 'Photosynthesis, the process by which green plants and certain other organisms transform light energy into chemical energy. During photosynthesis in green plants, light energy is captured and used to convert water, carbon dioxide, and minerals into oxygen and energy-rich organic compounds.', 'mehvish shaikh', 'Biology', '', 20000, 30000, 'http://localhost/Login/images/Photosynthesis.png', 'http://localhost/Login/documents/A48.doc', 'https://www.google.com', 'mehvish@gmail.com', '2020-04-09 12:23:21', 1),
(10, 'Machine Learning(Microsoft Azure)', 'At its core, Azure is a public cloud computing platform—with solutions including Infrastructure as a Service (IaaS), Platform as a Service (PaaS), and Software as a Service (SaaS) that can be used for services such as analytics, virtual computing, storage, networking, and much more.', 'mehvish shaikh', 'others', 'Cloud', 25000, 35000, 'http://localhost/Login/images/microsoft.png', 'http://localhost/Login/documents/collaboration.pdf', 'https://www.google.com', 'mehvish@gmail.com', '2020-04-09 12:30:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `dob` date NOT NULL,
  `institute` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

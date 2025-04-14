-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2025 at 12:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `submitted_at`) VALUES
(1, 'Justice Amoah', 'justiceamoah4203@gmail.com', 'Hi', '2025-03-22 20:28:08'),
(2, 'Justice Amoah', 'justiceamoah4203@gmail.com', 'HI', '2025-03-22 23:01:10'),
(3, 'Justice Amoah', 'justiceamoah4203@gmail.com', 'Hi', '2025-03-23 15:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_logins`
--

CREATE TABLE `failed_logins` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `attempt_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `failed_logins`
--

INSERT INTO `failed_logins` (`id`, `email`, `attempt_time`) VALUES
(1, 'justiceamoah4203@gmail.com', '2025-03-22 19:53:26'),
(2, 'justiceamoah4203@gmail.com', '2025-03-22 19:53:32'),
(3, 'justiceamoah4203@gmail.com', '2025-03-22 19:53:39'),
(4, 'justiceamoah4203@gmail.com', '2025-03-23 16:11:49'),
(5, 'justiceamoah4203@gmail.com', '2025-03-23 16:11:57'),
(6, 'justiceamoah4203@gmail.com', '2025-03-23 16:12:07'),
(7, 'justiceamoah4203@gmail.com', '2025-03-23 16:24:42'),
(8, 'j.tecgh@gmail.com', '2025-04-11 13:25:30'),
(9, 'j.tecgh@gmail.com', '2025-04-11 13:25:52'),
(10, 'j.tecgh@gmail.com', '2025-04-11 13:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `safety_techniques`
--

CREATE TABLE `safety_techniques` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `safety_techniques`
--

INSERT INTO `safety_techniques` (`id`, `title`, `description`, `date_added`) VALUES
(2, 'Block', 'Block unknown links', '2025-03-22 23:33:17'),
(3, 'Parental Control', 'Allow for parental control', '2025-03-22 23:34:07'),
(4, 'Top Apps', '10 Top Apps for you', '2025-04-07 15:54:57'),
(5, 'Social Media', 'Social Media Integration', '2025-04-07 15:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `safety_tips`
--

CREATE TABLE `safety_tips` (
  `id` int(11) NOT NULL,
  `app_name` varchar(100) DEFAULT NULL,
  `tip_title` varchar(255) DEFAULT NULL,
  `tip_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `safety_tips`
--

INSERT INTO `safety_tips` (`id`, `app_name`, `tip_title`, `tip_content`) VALUES
(1, 'Instagram', 'Use Private Account', 'Set your profile to private to control who sees your content.'),
(2, 'Snapchat', 'Enable Ghost Mode', 'Use Ghost Mode to hide your location from other users.'),
(3, 'WhatsApp', 'Enable 2FA', 'Turn on two-step verification to add extra security to your account.'),
(4, 'Instagram', 'Use Private Account', 'Set your profile to private to control who sees your content.'),
(5, 'Snapchat', 'Enable Ghost Mode', 'Use Ghost Mode to hide your location from other users.'),
(6, 'WhatsApp', 'Enable 2FA', 'Turn on two-step verification to add extra security to your account.'),
(7, 'Instagram', 'Use Private Account', 'Set your profile to private to control who sees your content.'),
(8, 'Snapchat', 'Enable Ghost Mode', 'Use Ghost Mode to hide your location from other users.'),
(9, 'WhatsApp', 'Enable 2FA', 'Turn on two-step verification to add extra security to your account.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_hash`, `created_at`, `first_name`, `last_name`) VALUES
(5, '', 'justiceamoah4203@gmail.com', '$2y$10$0ifgaMAKN2yl1of4I3wCl.6ogk3zaYniEzfnfFxaFadkAp5M7C1e2', '2025-04-11 18:21:05', 'Justice', 'Amoah'),
(6, '', 'j.tecgh@gmail.com', '$2y$10$2/hLSxrdjzkDXA7o8vDNcePYc/GKBzgSTYJemwoANfvRGeN5P91zK', '2025-04-11 18:24:14', 'Justice', 'Amoah'),
(7, '', 'jaytecgh@gmail.com', '$2y$10$HnRa5rHTYZgtVNQ5AASo6.55JoVnxBvGmA53BpgmjlhT/jDuvPk0O', '2025-04-12 13:53:45', 'Just', 'Tec');

-- --------------------------------------------------------

--
-- Table structure for table `user_actions`
--

CREATE TABLE `user_actions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `target_table` varchar(50) NOT NULL,
  `action_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_logins`
--
ALTER TABLE `failed_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `safety_techniques`
--
ALTER TABLE `safety_techniques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safety_tips`
--
ALTER TABLE `safety_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_actions`
--
ALTER TABLE `user_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_logins`
--
ALTER TABLE `failed_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `safety_techniques`
--
ALTER TABLE `safety_techniques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `safety_tips`
--
ALTER TABLE `safety_tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_actions`
--
ALTER TABLE `user_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_actions`
--
ALTER TABLE `user_actions`
  ADD CONSTRAINT `user_actions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

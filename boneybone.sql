-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 09:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boneybone`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodatas`
--

INSERT INTO `biodatas` (`id`, `applicant_id`, `position`, `company`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, '1', '1', 0, '2020-05-30 18:59:07', '2020-05-30 18:59:07'),
(5, 1, '2', '2', 0, '2020-05-30 19:22:43', '2020-05-30 19:22:43'),
(6, 2, '1', '1', 0, '2020-05-30 22:37:15', '2020-05-30 22:37:15'),
(7, 2, '2', '2', 0, '2020-05-30 22:47:18', '2020-05-30 22:47:18'),
(8, 2, '1', '1', 0, '2020-05-30 22:50:54', '2020-05-30 22:50:54'),
(9, 6, '1', '1', 0, '2020-05-30 23:26:04', '2020-05-30 23:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `com_name` text NOT NULL,
  `com_desc` text NOT NULL,
  `com_status` int(11) NOT NULL,
  `com_logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `com_name`, `com_desc`, `com_status`, `com_logo`) VALUES
(1, 'lalamove', 'lalamove is delivery services', 1, 'https://startupjobs.asia/assets/company/lalamove-sg/logo/7VsOG9EdOClUx2RvszUyUzwc7GzOy/0oc4bNx24TqfG02LC9f6fVpI3G17N-1542902029oPRh2Q36.png'),
(2, 'grab', 'delivery services', 1, 'https://i.pinimg.com/474x/11/74/fe/1174fe41aa93e6a6821ffa92fc904519.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `job_name` text NOT NULL,
  `job_desc` text NOT NULL,
  `com_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `salary` text NOT NULL,
  `place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job_name`, `job_desc`, `com_id`, `status`, `salary`, `place`) VALUES
(1, 'Administrative Assistant', ' We are looking for a master multi-tasker with excellent communication skills and an upbeat attitude. Candidates should be able to assist management and all visitors to the company by handling office tasks, providing polite and professional assistance via phone, mail, and e-mail, making reservations or travel arrangements, and generally being a helpful and positive presence in the workplace.<br><br>\r\n\r\n             To be successful as an Administrative Assistant, candidates should be professional, polite, and attentive while also being accurate. They should always be prepared and responsive, willing to meet each challenge directly. Administrative Assistants must be comfortable with computers, general office tasks, and excel at both verbal and written communication. Most importantly, Administrative Assistants should have a genuine desire to meet the needs of others.', 1, 1, '2000', 'Balakong'),
(2, 'Branch Management', '    We are looking for a results-driven Branch Manager to ensure that sales goals are met and office tasks are completed successfully in a timely manner. Branch Managers are also responsible for monitoring sales and creating sales reports, training and managing staff, and asking clients for feedback.<br><br>\r\n\r\n            To be successful as a Branch Manager, you must have strong leadership abilities and excellent organizational skills. A good Branch Manager can multitask and delegate duties to employees where appropriate.', 2, 1, '3500', 'Kuala Lumpur'),
(3, 'District Manager', ' We are looking for a results-oriented candidate with excellent interpersonal skills for the position of District Manager. District Managers are responsible for setting regional goals such as sales estimates and revenue projections, ensuring that marketing efforts are consistent across each store, managing a regional budget and ensuring that each store operates within the budget, among other duties.\r\n\r\n              District Managers will oversee the hiring, training and firing of store managers, requiring bold decision making and leadership skills.', 1, 1, '4500', 'Bangi');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_30_165833_create_biodatas_table', 1),
(4, '2020_05_31_012002_CreateLoginTable', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hidayat', 'kmksmdkmk@mm.com', '$2y$10$bUQEQzPRL99NY8moyqvAA.TE1fZWhQ8YtptPtPZYLMgHmXf7vmYWC', 'jWojw9bz4xg0KLm9OYOTia1zA6Chq64fwn7UUEDX8Xo0zb7KhujReDn9lw6G', '2020-05-30 17:40:54', '2020-05-30 19:12:03'),
(2, 'hamdani', 'hamdan@gmail.com', '$2y$10$EfCfiNGdY2MM4uWvyZCZN.WCUaUZYZXn/K.McF4iilWFcyP.dvLQa', 'IGC21KxIH4WGaHaAyiyPegwdFccjC7cLS18bMOtBaRBF4uLOOCZwlBGHJTuD', '2020-05-30 21:23:50', '2020-05-30 22:47:56'),
(3, 'jaimkk', 'kksll@ll.com', '$2y$10$0O8XSnIICVet/i7jvwINTO39t.J8pScgaFH1TW4/KSey2a7PB3hZK', 'pL7BDq6fWRBk9NVdrwatDrWxGOVyUDl3jxYDQ2pkKeFkyGnDVU4rgDCImi8f', '2020-05-30 23:20:26', '2020-05-30 23:20:26'),
(4, 'aasd', 'asd@cc.com', '$2y$10$g1MjFV5ftTR3tRZML1UcsuMXWr4j2lpwUnaYb.jah442HiZ1mETG2', 'fjptpbb6ebi76vmkUkQTWoEFWEGxvBGp20viwoNBJNn6KBSwuhZtVHYZ2Kyv', '2020-05-30 23:21:59', '2020-05-30 23:21:59'),
(5, 'asdad', 'lll@bb.xom', '$2y$10$nGJvLiBDPugzVwUTOPxKaexpVPsq2X/UgiTeVfl1FicsxxGtIUd2a', 'SIaRl5qzGtKyFBbK5D4UcS49YRGGFhJS6q6NELehCYY7t9FVudOaBXhAspiB', '2020-05-30 23:22:29', '2020-05-30 23:22:29'),
(6, 'kkkk', 'lll@cc.com', '$2y$10$Umd9xTkiq9JWPm7aJ3iT1.btsW1l77D4KFZCGtsb953DQTtRpXCfe', 'rsP9zQ7oltWD0qMOkWRBr0UbdA9oQ1p8bX60d3CIPaKAWd114QPyGUXViiFI', '2020-05-30 23:25:47', '2020-05-30 23:25:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

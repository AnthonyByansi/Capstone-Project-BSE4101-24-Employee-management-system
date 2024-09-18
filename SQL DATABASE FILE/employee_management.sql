-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 01:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_emps`
--

CREATE TABLE `add_emps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `working_start_date` date DEFAULT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `frequency` varchar(255) DEFAULT NULL,
  `payment_start_date` date DEFAULT NULL,
  `team` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_emps`
--

INSERT INTO `add_emps` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `email`, `country`, `working_start_date`, `job_title`, `job_type`, `currency`, `frequency`, `payment_start_date`, `team`, `office`, `salary`) VALUES
(1, NULL, '2023-04-27 11:49:40', 'Sendi', 'Joseph', 'cipher@gmail.com', 'Chicago', '2023-04-18', 'software engineer', 'Freelancer', 'dollars', 'Monthly', '2023-04-20', 'IOS', 'Illnois', 500000),
(5, '2023-04-27 06:17:21', '2023-04-27 06:17:21', 'Acheng', 'Devote', 'dex@gmail.com', 'UK', '2000-06-23', 'Quality assurance', 'Permanent', 'shillings', 'Monthly', '2001-10-21', 'PHP', 'Camb', 400000),
(6, '2023-04-27 06:18:52', '2023-04-27 06:18:52', 'Aparo', 'Celilia', 'apo@keymal.com', 'America', '2000-06-23', 'Software developer', 'Freelancer', 'dollars', 'Weekly', '2001-10-23', 'Designing', 'Massechusets', 350000),
(7, '2023-04-27 06:20:16', '2023-04-27 06:20:16', 'Kissejere', 'Rashid', 'rashNigga@gmail.com', 'Uganda', '2000-06-22', 'Application developer', 'Freelancer', 'shillings', 'Weekly', '2001-11-23', 'Testing', 'Kikoni', 250000),
(12, '2023-04-27 13:20:46', '2023-04-27 13:20:46', 'Priscillah', 'Gum', 'gumisiriza@hotmail.com', 'China', '2005-06-23', 'Quality assurance', 'Freelancer', 'dollars', 'Monthly', '2001-10-21', 'Android', 'pyonyuang', 600000),
(13, '2023-04-27 13:22:24', '2023-04-27 13:23:07', 'Semaganda', 'Trevor', 'sem@gmail.com', 'Burundi', '2004-06-23', 'coder', 'Freelancer', 'Select leave', 'Monthly', '2006-11-23', 'Android', 'kukil', 600000),
(14, '2023-04-30 08:45:52', '2023-04-30 08:45:52', 'Arnold', 'Swarz', 'swarz@gmail.com', 'Canada', '2000-06-21', 'Application developer', 'Permanent', 'dollars', 'Weekly', '2001-11-23', 'Android', 'Ontario', 600000),
(15, '2023-05-02 10:29:23', '2023-05-02 10:30:59', 'Mango', 'man', 'mango@gmail.com', 'Uganda', '2000-06-23', 'Robery', 'Permanent', 'shillings', 'Monthly', '2001-10-23', 'PHP', 'Kikoni', 450000),
(17, '2023-05-08 09:43:41', '2023-05-08 09:43:41', 'Aparo', 'Cecilia', 'ceci@gmail.com', 'United States', '2023-05-07', 'Application developer', 'Permanent', 'shillings', 'Monthly', '2001-11-23', 'PHP', 'Kikoni', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leave_type` varchar(100) NOT NULL,
  `l_from` date NOT NULL,
  `l_to` date NOT NULL,
  `reason` varchar(500) NOT NULL,
  `status` varchar(100) DEFAULT 'pending',
  `id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`leave_type`, `l_from`, `l_to`, `reason`, `status`, `id`, `created_at`, `updated_at`, `name`, `user`) VALUES
('Earned leave', '2003-05-23', '2003-06-21', 'sick', 'approved', 1, '2023-04-28', '2023-04-28', 'Sendi Joseph', 'Cipher'),
('Causal leave', '2023-04-23', '2023-05-12', 'Family troubles', 'approved', 4, '2023-04-28', '2023-04-29', 'Sendi Joseph', 'Cipher'),
('Casual leave', '2003-05-23', '2003-07-21', 'GOOD', 'pending', 5, '2023-04-29', '2023-04-29', 'SENDI', 'Cipher'),
('Casual leave', '2003-05-23', '2003-07-27', 'Reason one', 'pending', 14, '2023-05-08', '2023-05-08', 'cecilia', 'Aparo');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2023_04_26_094527_create_add_emp_table', 2),
(6, '2014_10_12_000000_create_users_table', 3),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(8, '2019_08_19_000000_create_failed_jobs_table', 3),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('cipher@gmail.com', '$2y$10$izHyOJrhQ14aaQgXSQ48E.yKOKbwYgYNWb8zcUJv7xzQG05rjAuby', '2023-05-02 07:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_scales`
--

CREATE TABLE `salary_scales` (
  `team` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary_scales`
--

INSERT INTO `salary_scales` (`team`, `salary`) VALUES
('Android', 600000),
('Business', 450000),
('Designing', 350000),
('IOS', 500000),
('PHP', 400000),
('Testing', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(6, 'Cipher', 'cipher@gmail.com', NULL, '$2y$10$J0TyDfifjYG7xCJfQM90hO3JCwPuW3T8.W9/ISEBfjddmx9ln7ELK', NULL, '2023-04-29 05:16:19', '2023-04-29 05:16:19', 0),
(9, 'Sendi', 'sen@gmail.com', NULL, '$2y$10$468LSJKVIi2oLuV8C7Nvd.8uTeucZM4pWUYK4Sd/bHqGwmzIOmYKm', NULL, '2023-05-02 09:25:13', '2023-05-02 09:25:13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_emps`
--
ALTER TABLE `add_emps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team` (`team`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `salary_scales`
--
ALTER TABLE `salary_scales`
  ADD PRIMARY KEY (`team`),
  ADD KEY `team` (`team`);

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
-- AUTO_INCREMENT for table `add_emps`
--
ALTER TABLE `add_emps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

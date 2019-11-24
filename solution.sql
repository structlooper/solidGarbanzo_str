-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 09:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment_answers`
--

CREATE TABLE `assignment_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assignment_no` int(11) NOT NULL,
  `student_semester` int(11) NOT NULL,
  `assignment_detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_rollno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignment_answers`
--

INSERT INTO `assignment_answers` (`id`, `assignment_no`, `student_semester`, `assignment_detail`, `student_name`, `student_rollno`, `file`, `created_at`, `updated_at`) VALUES
(1, 12, 7, 'this is testing detils', 'test_student_name', '17cse42', '5dda0ec8dc270.png', '2019-11-23 23:32:00', '2019-11-23 23:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_23_131031_create_upload_assignment_details', 2),
(5, '2019_11_23_181033_create_assignment_answers', 3),
(6, '2019_11_24_045145_create_assignment_answers', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upload_assignment_details`
--

CREATE TABLE `upload_assignment_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Assignment_no` int(11) NOT NULL,
  `Assignment_Details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deadline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_assignment_details`
--

INSERT INTO `upload_assignment_details` (`id`, `Assignment_no`, `Assignment_Details`, `Semester`, `Deadline`, `file`, `created_at`, `updated_at`) VALUES
(1, 12, 'this is testing detils', '07', '11-october', '5dd94065a8822.png', '2019-11-23 08:51:25', '2019-11-23 08:51:25'),
(2, 12, 'this is testing detils', '07', '11-october', '5dd9407b29845.pdf', '2019-11-23 08:51:47', '2019-11-23 08:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `gender`, `profile`, `address`, `status`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1234567890, 'female', 'admin', 'test area test city - done', 'admin', 'profile_images/1574485539-profile.png', 'superAdmin@mail.com', NULL, '$2y$10$MsamXDvu9nBxT5Gw.ijubu2/S0TERtCCTfgVBSB92jSBmBVvNPURS', NULL, '2019-11-22 23:35:39', '2019-11-24 03:01:09'),
(2, 'test', 1234567890, 'on', 'student', 'plot no. 68 Deepak vihar ext\r\nuttam nagar', 'pending', 'profile_images/1574418521-profile.png', 'test@gmail.com', NULL, '$2y$10$hmpuLhD.lgFZ3v8B99PRoeFiTtiaNglCv4mCcQ1AybKxiugKi3SMa', NULL, '2019-11-22 04:58:41', '2019-11-23 03:06:21'),
(5, 'Teacher_name', 1234567890, 'male', 'teacher', 'test area test city - test place done', 'approved', 'profile_images/1574486317-profile.png', 'teacher@mail.com', NULL, '$2y$10$FBotdGJYsGyhdS1KkKvSr.gA9vfKbHtNSjU3wyavD3Chh6uVQF4de', NULL, '2019-11-22 23:48:37', '2019-11-24 02:44:45'),
(7, 'Student_name', 1234567890, 'female', 'student', 'test city test area test place done', 'approved', 'profile_images/1574573045-profile.png', 'student@mail.com', NULL, '$2y$10$Z60N8qv0yAt09ueDrszuz.NT.yGd9PIbpyseL4rZzsVW7TW/ONlPW', NULL, '2019-11-23 23:54:05', '2019-11-24 02:56:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment_answers`
--
ALTER TABLE `assignment_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `upload_assignment_details`
--
ALTER TABLE `upload_assignment_details`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `assignment_answers`
--
ALTER TABLE `assignment_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upload_assignment_details`
--
ALTER TABLE `upload_assignment_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

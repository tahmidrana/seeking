-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 09:46 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_seeking`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8_unicode_ci NOT NULL,
  `category_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Food', 'food category', 1, '2017-01-10 03:15:39', '2017-01-11 06:15:13'),
(2, 'Fast Food', 'all tea stalls\r\n							', 1, '2017-01-10 03:29:09', '2017-01-10 12:20:47'),
(3, 'Shopping Mall', 'shopping mall infos', 1, '2017-01-10 03:29:41', '2017-01-10 11:58:06'),
(4, 'Coffee Shop', 'coffee', 1, '2017-01-11 10:35:05', '2017-01-14 01:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2017_01_10_090309_create_categories_table', 2),
(8, '2017_01_10_183048_create_posts_table', 3),
(9, '2017_01_17_074530_create_tests_table', 4),
(10, '2017_01_17_074600_create_post_comments_table', 4),
(11, '2017_01_19_083425_add_status_to_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_title` text COLLATE utf8_unicode_ci NOT NULL,
  `post_address` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_description` text COLLATE utf8_unicode_ci NOT NULL,
  `post_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_status` tinyint(4) NOT NULL,
  `featured_image` text COLLATE utf8_unicode_ci NOT NULL,
  `post_tags` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_address`, `category_id`, `user_id`, `post_description`, `post_latitude`, `post_longitude`, `post_status`, `featured_image`, `post_tags`, `created_at`, `updated_at`) VALUES
(1, 'American Burger', 'Section 11 Mirpur', 1, 1, 'Food shop, burger shop', '23.8191999', '90.3650697', 0, 'uploaded_images/Screenshot_1.png', 'foods', '2017-01-11 08:17:34', '2017-01-13 12:33:10'),
(2, 'KFC', 'Mirpur original-10 Dhaka', 2, 2, 'fried chicken shop', '10.25655', '90.21002', 1, 'uploaded_images/KFC13.jpg', 'kfc, chicken', '2017-01-11 08:52:44', '2017-01-14 02:09:47'),
(3, 'Gloria Jean''s Coffees', '67, GH Heights (1st Floor), Satmasjid Road, Dhaka 1205', 4, 1, 'Specialty coffeehouse chain offering gourmet blends in a variety of flavors, plus tea & pastries', '23.7498102', '90.3664917', 1, 'uploaded_images/gloria.jpg', 'coffee, coffeeshop, gloriajeans', '2017-01-11 10:36:53', '2017-01-13 12:36:25'),
(4, 'Bashundhora City Shopping Complex', 'Panthapath, Dhaka 1215', 3, 2, 'Bashundhara City is a shopping mall in Dhaka, and the second largest shopping mall in Bangladesh with a gross leasable area of 191,200 square feet. Opened to the public on 6 August 2004, the mall located in Panthapath, near Kawran ', '23.7512464', '90.3885146', 1, 'uploaded_images/bashundharacity.jpg', 'shopping, shoppingmall', '2017-01-11 10:51:16', '2017-01-11 10:51:16'),
(5, 'Jamuna Future Park', 'Ka-244, Pragati Ave, Dhaka, Bangladesh\r\njamunafuturepark.com\r\n+880 2-8413772', 3, 2, 'Ka-244, Pragati Ave, Dhaka, Bangladesh\r\njamunafuturepark.com\r\n+880 2-8413772\r\nClosed.  Opens at 11:00 AM\r\nClaim this business\r\n\r\nQuick facts\r\nJamuna Future Park is a shopping mall in Dhaka, and the largest shopping mall in Bangladesh with a gross leasable area of 1,614,586 square feet. It was inaugurated on 6 September 2013.Wikipedia\r\n\r\n    Opened:\r\n        September 6, 2013\r\n    Owner:\r\n        Jamuna Group\r\n    Number of stores and services:\r\n        510\r\n', '23.8130581', '90.4201144', 1, 'uploaded_images/jfp.jpg', 'shoppingmall, futurepark, jomunafuturepark', '2017-01-14 14:34:52', '2017-01-14 14:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_comment` text COLLATE utf8_unicode_ci NOT NULL,
  `post_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `post_id`, `post_comment`, `post_username`, `post_user_email`, `created_at`, `updated_at`) VALUES
(1, 4, 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'Tahmidur Rahman', 'tahmidrana@gmail.com', '2017-01-17 02:29:07', '2017-01-17 02:29:07'),
(2, 4, 'After checking if the request validation failed, you may use the withErrors method to flash the error messages to the session. When using this method, the $errors variable will automatically be shared with your views after redirection, allowing you to easily display them back to the user', 'Touhidur', 'thd@yahoo.com', '2017-01-17 02:40:01', '2017-01-17 02:40:01'),
(3, 1, 'If you have multiple forms on a single page, you may wish to name the MessageBag of errors, allowing you to retrieve the error messages for a specific form. Simply pass a name as the second argument to withErrors', 'Tania Afroza', 'tania@yahoo.com', '2017-01-17 02:43:04', '2017-01-17 02:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tahmidur Rahman', 'tahmidrana@gmail.com', '$2y$10$SICMj4GhII8OPWI6.kGIB./RAUCo.U2IOkaz.G2WxiI2IlNPFwMw2', 0, 1, 'noByDhihzVvWebErpho3a1NmhftkURfJylU0ud4M5hWUMNdjfEX53FlZJWyv', '2017-01-10 01:14:06', '2017-01-19 14:44:04'),
(2, 'MD Abc', 'abc@gmail.com', '$2y$10$J5WqU.k/jSjcg.iOTcV8XOgBncBaAEN/tkDA6pcR95ssu42bWFI1y', 1, 1, 'oBWEH95L46CrM3jlarf85JLKp12m1NxFyXr5S7ThvrCZE98oNG7uAzgFQfYi', '2017-01-10 01:19:31', '2017-01-11 10:44:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

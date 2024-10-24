-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 07:02 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nils Hegmann', '2024-10-23 02:19:00', '2024-10-23 02:19:00'),
(2, 'Issac Rodriguez', '2024-10-23 02:19:00', '2024-10-23 02:19:00'),
(3, 'Braxton Romaguera', '2024-10-23 02:19:00', '2024-10-23 02:19:00'),
(4, 'Ms. Florence Schuster III', '2024-10-23 02:19:00', '2024-10-23 02:19:00'),
(5, 'Tyree Schaefer', '2024-10-23 02:19:00', '2024-10-23 02:19:00'),
(6, 'Reagan Gaylord', '2024-10-23 02:19:00', '2024-10-23 02:19:00'),
(7, 'Domenico Pacocha', '2024-10-23 02:19:00', '2024-10-23 02:19:00'),
(8, 'Dr. Shanel Cartwright', '2024-10-23 02:19:00', '2024-10-23 02:19:00'),
(9, 'Mara Fahey', '2024-10-23 02:19:00', '2024-10-23 02:19:00'),
(10, 'Garland Sporer', '2024-10-23 02:19:00', '2024-10-23 02:19:00'),
(13, 'dasadasdas', '2024-10-23 22:20:59', '2024-10-23 22:20:59'),
(14, 'dasdasa', '2024-10-23 22:22:44', '2024-10-23 22:22:44'),
(15, 'dasdasa', '2024-10-23 22:22:47', '2024-10-23 22:22:47'),
(16, 'dasdasa', '2024-10-23 22:22:48', '2024-10-23 22:22:48'),
(17, 'dasdasa', '2024-10-23 22:22:49', '2024-10-23 22:22:49'),
(18, 'dasdasa', '2024-10-23 22:22:50', '2024-10-23 22:22:50'),
(19, 'dasdasa', '2024-10-23 22:22:51', '2024-10-23 22:22:51'),
(20, 'dasdasa', '2024-10-23 22:22:52', '2024-10-23 22:22:52'),
(21, 'DASA', '2024-10-23 22:23:52', '2024-10-23 22:23:52'),
(22, 'DASA', '2024-10-23 22:23:53', '2024-10-23 22:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Omnis dolores voluptatem cum corporis aliquid. Voluptatum nihil autem unde odit vel laboriosam deleniti esse. Eaque et neque voluptatum a. Voluptatem impedit quis quasi ut.', '2024-10-23 02:20:36', '2024-10-23 02:20:36'),
(2, 7, 7, 'Ut inventore ad consequuntur et veniam. Dicta veritatis inventore et placeat in reiciendis repellat. Occaecati aliquid aut vero sed quis sunt non.', '2024-10-23 02:20:36', '2024-10-23 02:20:36'),
(3, 6, 10, 'Deserunt iure labore aliquam aperiam sint asperiores quis est. Cum molestiae quia earum sint dolore vero sint. Consequatur ut ut deserunt tenetur cupiditate. Qui vero ratione impedit ipsa.', '2024-10-23 02:20:36', '2024-10-23 02:20:36'),
(4, 4, 8, 'Et cupiditate velit nihil minus sunt. Possimus id modi est ipsa et nesciunt. Sit et aliquid qui rem quaerat.', '2024-10-23 02:20:36', '2024-10-23 02:20:36'),
(5, 1, 8, 'Optio nihil laudantium ut molestias deleniti laudantium enim. Aut neque qui sed et ut a ipsum. Similique aut vero voluptates illo aut ut sed. Nisi officiis eius nam culpa reiciendis est. Sequi id quis magni maxime tempore.', '2024-10-23 02:20:36', '2024-10-23 02:20:36'),
(6, 9, 8, 'Animi aut voluptas fugit ducimus molestiae. Commodi voluptas earum odit dolorem.', '2024-10-23 02:20:36', '2024-10-23 02:20:36'),
(7, 10, 7, 'Autem nihil quod enim nostrum magnam iusto ea. Est consequatur ut enim saepe ut et. Perspiciatis sed laboriosam sed sed.', '2024-10-23 02:20:36', '2024-10-23 02:20:36'),
(8, 2, 6, 'Voluptatem magni laborum repellat distinctio quis occaecati exercitationem. Et non doloremque odio vel asperiores dolorem molestiae. Beatae praesentium possimus voluptas recusandae sint accusamus sint. Quis et deleniti ut velit quibusdam nisi qui.', '2024-10-23 02:20:36', '2024-10-23 02:20:36'),
(9, 1, 4, 'Nostrum pariatur eum et aut in quo non ut. Illo doloribus eum delectus est a nulla. Aliquam dolorum ut dolorem. Facilis sunt architecto occaecati non illo id. Incidunt rerum distinctio et vitae dicta magni aliquid.', '2024-10-23 02:20:36', '2024-10-23 02:20:36'),
(10, 5, 7, 'Ut quaerat quis nihil iste non quia in. Id culpa natus culpa consequatur aliquam perspiciatis. Voluptate a inventore expedita. Provident quia voluptatem aut sapiente sed. Eum dignissimos corporis quibusdam consectetur eligendi.', '2024-10-23 02:20:36', '2024-10-23 02:20:36');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `like` tinyint(1) NOT NULL,
  `dislike` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`, `like`, `dislike`, `created_at`, `updated_at`) VALUES
(3, 3, 7, 1, 1, '2024-10-23 02:19:21', '2024-10-23 02:19:21'),
(4, 1, 1, 0, 1, '2024-10-23 02:19:21', '2024-10-23 02:19:21'),
(5, 4, 9, 0, 0, '2024-10-23 02:19:21', '2024-10-23 02:19:21'),
(6, 4, 8, 1, 0, '2024-10-23 02:19:21', '2024-10-23 02:19:21'),
(7, 2, 9, 1, 0, '2024-10-23 02:19:21', '2024-10-23 02:19:21'),
(8, 8, 3, 0, 1, '2024-10-23 02:19:21', '2024-10-23 02:19:21'),
(9, 8, 10, 1, 1, '2024-10-23 02:19:21', '2024-10-23 02:19:21'),
(10, 5, 10, 1, 0, '2024-10-23 02:19:21', '2024-10-23 02:19:21'),
(11, 9, 6, 0, 1, '2024-10-23 02:19:21', '2024-10-23 02:19:21'),
(12, 4, 10, 0, 1, '2024-10-23 02:19:21', '2024-10-23 02:19:21');

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
(9, '0001_01_01_000000_create_users_table', 1),
(10, '0001_01_01_000001_create_cache_table', 1),
(11, '0001_01_01_000002_create_jobs_table', 1),
(12, '2024_10_23_063656_create_categories_table', 1),
(13, '2024_10_23_064923_create_posts_table', 1),
(14, '2024_10_23_065508_create_likes_table', 1),
(15, '2024_10_23_071243_create_comments_table', 1),
(16, '2024_10_23_072117_create_products_table', 2),
(17, '2024_10_23_072704_create_order_table', 3),
(18, '2024_10_23_073414_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `count`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 7, 4, 82, 39, '2024-10-23 02:35:09', '2024-10-23 02:35:09'),
(2, 1, 5, 55, 71, '2024-10-23 02:35:09', '2024-10-23 02:35:09'),
(3, 3, 6, 12, 15, '2024-10-23 02:35:09', '2024-10-23 02:35:09'),
(4, 10, 5, 97, 15, '2024-10-23 02:35:09', '2024-10-23 02:35:09'),
(5, 9, 1, 26, 36, '2024-10-23 02:35:09', '2024-10-23 02:35:09'),
(6, 10, 9, 32, 42, '2024-10-23 02:35:09', '2024-10-23 02:35:09'),
(7, 2, 6, 65, 77, '2024-10-23 02:35:09', '2024-10-23 02:35:09'),
(8, 6, 2, 16, 97, '2024-10-23 02:35:09', '2024-10-23 02:35:09'),
(9, 10, 5, 25, 69, '2024-10-23 02:35:09', '2024-10-23 02:35:09'),
(10, 2, 9, 31, 12, '2024-10-23 02:35:09', '2024-10-23 02:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `dislikes` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `content`, `likes`, `dislikes`, `created_at`, `updated_at`) VALUES
(1, 4, 'Repudiandae numquam modi consequatur nulla.', 'Voluptatem quia vero nemo ratione. Labore maxime quasi doloribus officia inventore sed eos.', 46, 51, '2024-10-23 02:19:17', '2024-10-23 02:19:17'),
(2, 6, 'Sed in nostrum ipsam nemo iusto enim quaerat.', 'Dolorem quia perspiciatis culpa beatae animi explicabo id. Aut sint praesentium dignissimos quos enim aut aut. Harum veniam qui cumque.', 84, 80, '2024-10-23 02:19:18', '2024-10-23 02:19:18'),
(3, 5, 'Voluptas quo ut sunt nihil.', 'Ut voluptatem itaque omnis voluptas. Quia eveniet ducimus inventore et pariatur repudiandae et illum. Et omnis iusto labore officia et facilis similique non. Aperiam non in adipisci et.', 94, 78, '2024-10-23 02:19:18', '2024-10-23 02:19:18'),
(4, 5, 'Totam asperiores autem quia esse non doloribus.', 'Dolorem quod nihil deleniti vero ut culpa consequatur. Est quia et nam accusamus. Aut eos delectus dignissimos magni rerum autem quam. Repudiandae sapiente omnis qui neque aspernatur.', 76, 4, '2024-10-23 02:19:18', '2024-10-23 02:19:18'),
(5, 1, 'Doloremque architecto eos et vitae ipsum.', 'Sit quisquam laudantium sunt et laborum. Laboriosam consectetur laudantium quia. Eius nisi dolor maxime laboriosam consequatur velit. Omnis sed nulla ut et dolores.', 79, 24, '2024-10-23 02:19:18', '2024-10-23 02:19:18'),
(6, 4, 'Blanditiis sed velit qui rerum ipsam nihil esse.', 'Numquam et libero nisi autem qui. Nostrum quia in aliquam aut praesentium distinctio.', 13, 77, '2024-10-23 02:19:18', '2024-10-23 02:19:18'),
(7, 2, 'Et quas ad alias aut neque.', 'Sit sit sed velit ipsum ut nobis. Dolorem amet quas fuga est. Nemo doloribus eos autem autem neque.', 82, 0, '2024-10-23 02:19:18', '2024-10-23 02:19:18'),
(8, 1, 'In officia est corporis asperiores autem molestias expedita.', 'Unde consectetur voluptate consequatur asperiores. Ea molestias non hic iure fugiat. Est nihil eligendi molestiae assumenda earum et.', 32, 51, '2024-10-23 02:19:18', '2024-10-23 02:19:18'),
(9, 3, 'Et quia perspiciatis et vero molestiae officiis.', 'Nulla reprehenderit at voluptate veniam. Alias quo quis dicta reprehenderit. Sint expedita eum reprehenderit ducimus sit sunt. Ut a dolorem aut velit in ipsum saepe. Dolorum ipsa aliquam eos repellat nulla autem eius.', 27, 92, '2024-10-23 02:19:18', '2024-10-23 02:19:18'),
(10, 9, 'Sapiente accusamus molestiae vero neque aliquam perspiciatis.', 'Excepturi facilis blanditiis est ducimus. Sequi sit nesciunt nihil necessitatibus accusamus. Laudantium quam dolorem minus porro id at excepturi. Rerum maxime adipisci doloremque aut aut.', 100, 24, '2024-10-23 02:19:18', '2024-10-23 02:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `count` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `count`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, 'Jonathan Batz', 'Nisi velit ea eum eius sit. Vel nostrum quis voluptates est corporis animi. Eum vel atque error dolore fugiat voluptate.', 33, 65, 'Miss Shaylee Weissnat DVM', '2024-10-23 02:26:34', '2024-10-23 02:26:34'),
(2, 10, 'Sydnie Gislason', 'Enim ea sed omnis reiciendis hic. Incidunt quisquam ipsam omnis nihil vero. Sint accusamus sed repellat et molestiae harum. Sed nostrum rem ratione inventore.', 47, 79, 'Dr. Casey McCullough', '2024-10-23 02:26:34', '2024-10-23 02:26:34'),
(3, 2, 'Ramona Wyman IV', 'Doloremque amet omnis pariatur deserunt. Labore non aliquid necessitatibus dolorem et. Quidem dicta quidem reprehenderit veniam dolorem magnam. Magni ea qui ut et aliquid dolorum.', 82, 19, 'Modesto Rowe', '2024-10-23 02:26:34', '2024-10-23 02:26:34'),
(4, 4, 'Moises Nitzsche', 'Omnis et qui occaecati repellat magni quaerat. Nisi accusamus iusto aut non est. Necessitatibus facilis totam dolorum est ut debitis. Laboriosam est ducimus unde corporis ab dolorum. Id sed sit odit odio.', 77, 84, 'Annabel Cartwright', '2024-10-23 02:26:34', '2024-10-23 02:26:34'),
(5, 2, 'Dr. Luciano Leuschke', 'Nostrum veritatis quibusdam velit est. Veniam minima ut explicabo natus possimus temporibus. Soluta non non est deleniti. Porro inventore debitis sint ea omnis est pariatur optio.', 29, 65, 'Marquis Smith', '2024-10-23 02:26:34', '2024-10-23 02:26:34'),
(6, 2, 'Trisha Towne', 'In non et perspiciatis et et nobis voluptatum officiis. Corporis reiciendis quaerat ad omnis. Reprehenderit rem ad ab soluta eveniet beatae assumenda. Quisquam quibusdam cumque consequatur incidunt rem reprehenderit ut dicta. Explicabo aut aspernatur accusantium dolorem.', 4, 10, 'Kailey Rutherford', '2024-10-23 02:26:34', '2024-10-23 02:26:34'),
(7, 4, 'Malvina Gorczany', 'Quas rem fugiat dolorem. Quis non debitis voluptas cum. Cupiditate distinctio architecto rerum.', 90, 33, 'Loren Ruecker', '2024-10-23 02:26:34', '2024-10-23 02:26:34'),
(8, 7, 'Prof. Lawson Terry', 'Velit quia qui aut. Ipsam voluptate est sapiente tempore qui adipisci. A praesentium quas magnam. Incidunt aperiam quis tenetur facere voluptatibus a. Voluptas quidem perferendis laborum repellat.', 85, 58, 'Trever Ziemann', '2024-10-23 02:26:34', '2024-10-23 02:26:34'),
(9, 2, 'Cory Koepp', 'Dolorem atque aliquid aut delectus placeat ut est. Accusantium minima iure aut qui similique recusandae saepe. Vel nobis et nobis dignissimos molestias reiciendis consequatur.', 100, 66, 'Miss Loraine Kunze', '2024-10-23 02:26:34', '2024-10-23 02:26:34'),
(10, 8, 'Newell Mayert', 'Itaque tempore facere fuga et sit eos minima. Accusantium et dolorem et ut vero. Sunt qui temporibus cum ullam cumque rerum ipsam. Consequatur blanditiis soluta delectus architecto rem. Qui voluptatem corrupti sapiente velit.', 36, 17, 'Dr. Aiden Gerlach I', '2024-10-23 02:26:34', '2024-10-23 02:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AFFenX5nlBpRiwI4Dw6BYkXiyNtA9Zq1ZwOLgL2j', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGlxSHRNcnNtcmp2dzJvam5SM09HdnI0ampoUzdiNmhYOVd2UFRzTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jcmVhdGVOZXdMaWtlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1729746024);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cortez Jacobs', 'auer.dejah@example.net', '2024-10-23 02:19:11', '$2y$12$Rvuj1/FpfeuFZKQsTCyBBODwE/Ih5.Y4a.YP.Wcwej.P3F8a6Faqq', '7x3ZmkMaRE', '2024-10-23 02:19:11', '2024-10-23 02:19:11'),
(2, 'Madyson Hodkiewicz', 'gabe.schuppe@example.com', '2024-10-23 02:19:11', '$2y$12$Rvuj1/FpfeuFZKQsTCyBBODwE/Ih5.Y4a.YP.Wcwej.P3F8a6Faqq', 'CTl7CxKmB7', '2024-10-23 02:19:11', '2024-10-23 02:19:11'),
(3, 'Prof. Jailyn Schneider', 'emmerich.gene@example.net', '2024-10-23 02:19:11', '$2y$12$Rvuj1/FpfeuFZKQsTCyBBODwE/Ih5.Y4a.YP.Wcwej.P3F8a6Faqq', '9yxVKFMRqu', '2024-10-23 02:19:11', '2024-10-23 02:19:11'),
(4, 'Dr. Orval Thompson', 'cleta.schowalter@example.org', '2024-10-23 02:19:11', '$2y$12$Rvuj1/FpfeuFZKQsTCyBBODwE/Ih5.Y4a.YP.Wcwej.P3F8a6Faqq', 'hqSpCXseKl', '2024-10-23 02:19:11', '2024-10-23 02:19:11'),
(5, 'Magdalen Kshlerin', 'darren25@example.com', '2024-10-23 02:19:11', '$2y$12$Rvuj1/FpfeuFZKQsTCyBBODwE/Ih5.Y4a.YP.Wcwej.P3F8a6Faqq', 'MjTr7VRohe', '2024-10-23 02:19:11', '2024-10-23 02:19:11'),
(6, 'Harley Wisozk', 'fkozey@example.net', '2024-10-23 02:19:11', '$2y$12$Rvuj1/FpfeuFZKQsTCyBBODwE/Ih5.Y4a.YP.Wcwej.P3F8a6Faqq', 'WW0bdBxgoc', '2024-10-23 02:19:11', '2024-10-23 02:19:11'),
(7, 'Antonetta Smitham', 'vivien.prohaska@example.com', '2024-10-23 02:19:11', '$2y$12$Rvuj1/FpfeuFZKQsTCyBBODwE/Ih5.Y4a.YP.Wcwej.P3F8a6Faqq', 'zBtUcBfgba', '2024-10-23 02:19:11', '2024-10-23 02:19:11'),
(8, 'Dr. Florine Wuckert', 'enola.brown@example.net', '2024-10-23 02:19:11', '$2y$12$Rvuj1/FpfeuFZKQsTCyBBODwE/Ih5.Y4a.YP.Wcwej.P3F8a6Faqq', 'GgU9nH7YgF', '2024-10-23 02:19:11', '2024-10-23 02:19:11'),
(9, 'Eric Hansen', 'nfisher@example.com', '2024-10-23 02:19:11', '$2y$12$Rvuj1/FpfeuFZKQsTCyBBODwE/Ih5.Y4a.YP.Wcwej.P3F8a6Faqq', '4qzqILIw0V', '2024-10-23 02:19:11', '2024-10-23 02:19:11'),
(10, 'Federico Feil V', 'amari41@example.com', '2024-10-23 02:19:11', '$2y$12$Rvuj1/FpfeuFZKQsTCyBBODwE/Ih5.Y4a.YP.Wcwej.P3F8a6Faqq', 'YK5EQucX0F', '2024-10-23 02:19:11', '2024-10-23 02:19:11'),
(11, 'd', 'Salimbay@dsa', NULL, '$2y$12$.x1j2vOtigfk1nBxVwF6Y.hNzmCgYlHiB5PF3AfuIpmMvmio4nSyy', NULL, '2024-10-23 06:21:59', '2024-10-23 06:21:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_post_id_foreign` (`post_id`),
  ADD KEY `likes_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_id_foreign` (`product_id`),
  ADD KEY `order_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_product_id_foreign` (`product_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

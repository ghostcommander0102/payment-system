-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2021 at 11:24 AM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pexer_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_settings`
--

INSERT INTO `admin_settings` (`id`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(1, 'coin_price', '2.50', NULL, NULL),
(2, 'coin_name', 'cpc', NULL, NULL),
(3, 'app_title', 'Pexer', NULL, NULL),
(4, 'maximum_withdrawal_daily', '3', NULL, NULL),
(5, 'mail_from', 'noreply@cpoket.com', NULL, NULL),
(6, 'admin_coin_address', 'address', NULL, NULL),
(7, 'base_coin_type', 'BTC', NULL, NULL),
(8, 'minimum_withdrawal_amount', '0.005', NULL, NULL),
(9, 'maximum_withdrawal_amount', '12', NULL, NULL),
(10, 'maintenance_mode', 'no', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(11, 'logo', '', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(12, 'login_logo', '', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(13, 'landing_logo', '', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(14, 'favicon', '', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(15, 'copyright_text', 'Copyright@2020', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(16, 'pagination_count', '10', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(17, 'point_rate', '1', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(18, 'lang', 'en', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(19, 'company_name', 'Test Company', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(20, 'primary_email', 'test@email.com', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(21, 'sms_getway_name', 'twillo', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(22, 'twillo_secret_key', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(23, 'twillo_auth_token', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(24, 'twillo_number', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(25, 'ssl_verify', '', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(26, 'mail_driver', 'SMTP', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(27, 'mail_host', 'smtp.mailtrap.io', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(28, 'mail_port', '2525', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(29, 'mail_username', '', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(30, 'mail_password', '', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(31, 'mail_encryption', 'null', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(32, 'mail_from_address', '', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(33, 'braintree_client_token', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(34, 'braintree_environment', 'sandbox', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(35, 'braintree_merchant_id', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(36, 'braintree_public_key', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(37, 'braintree_private_key', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(38, 'sms_getway_name', 'twillo', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(39, 'clickatell_api_key', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(40, 'number_of_confirmation', '6', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(41, 'referral_commission_percentage', '10', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(42, 'referral_signup_reward', '10', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(43, 'max_affiliation_level', '10', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(44, 'coin_api_user', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(45, 'coin_api_pass', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(46, 'coin_api_host', 'test5', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(47, 'coin_api_port', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(48, 'send_fees_type', '1', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(49, 'send_fees_fixed', '0', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(50, 'send_fees_percentage', '0', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(51, 'max_send_limit', '0', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(52, 'deposit_time', '1', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(53, 'COIN_PAYMENT_PUBLIC_KEY', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(54, 'COIN_PAYMENT_PRIVATE_KEY', 'test', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(55, 'COIN_PAYMENT_CURRENCY', 'BTC', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(56, 'ipn_merchant_id', '', '2021-08-12 05:21:33', '2021-08-12 05:21:33'),
(57, 'ipn_secret', '', '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(58, 'payment_method_coin_payment', '1', '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(59, 'payment_method_bank_deposit', '1', '2021-08-12 05:21:34', '2021-08-12 05:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `affiliation_codes`
--

CREATE TABLE `affiliation_codes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `code` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `affiliation_histories`
--

CREATE TABLE `affiliation_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `child_id` bigint UNSIGNED NOT NULL,
  `amount` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `system_fees` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `transaction_id` bigint DEFAULT NULL,
  `level` int NOT NULL,
  `order_type` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_holder_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint NOT NULL,
  `coin_id` bigint NOT NULL,
  `coin_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallet_id` bigint NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin_rate` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `rate_percentage` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `market_price` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `rate_type` tinyint NOT NULL DEFAULT '1',
  `price_type` tinyint NOT NULL DEFAULT '1',
  `minimum_trade_size` bigint NOT NULL DEFAULT '0',
  `maximum_trade_size` bigint NOT NULL DEFAULT '0',
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instruction` longtext COLLATE utf8mb4_unicode_ci,
  `terms` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_id` bigint UNSIGNED NOT NULL,
  `receiver_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `file` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `is_withdrawal` tinyint NOT NULL DEFAULT '1',
  `is_deposit` tinyint NOT NULL DEFAULT '1',
  `is_buy` tinyint NOT NULL DEFAULT '1',
  `is_sell` tinyint NOT NULL DEFAULT '1',
  `minimum_withdrawal` decimal(19,8) NOT NULL DEFAULT '0.00001000',
  `maximum_withdrawal` decimal(19,8) NOT NULL DEFAULT '99999999.99990000',
  `minimum_trade_size` decimal(19,8) NOT NULL DEFAULT '0.00100000',
  `maximum_trade_size` decimal(19,8) NOT NULL DEFAULT '99999999.99990000',
  `withdrawal_fees` decimal(19,8) NOT NULL DEFAULT '0.00100000',
  `trade_fees` decimal(19,8) NOT NULL DEFAULT '0.00100000',
  `escrow_fees` decimal(19,8) NOT NULL DEFAULT '0.00100000',
  `max_withdrawal_per_day` decimal(19,8) NOT NULL DEFAULT '999.00000000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coins`
--

INSERT INTO `coins` (`id`, `unique_code`, `name`, `type`, `image`, `details`, `status`, `is_withdrawal`, `is_deposit`, `is_buy`, `is_sell`, `minimum_withdrawal`, `maximum_withdrawal`, `minimum_trade_size`, `maximum_trade_size`, `withdrawal_fees`, `trade_fees`, `escrow_fees`, `max_withdrawal_per_day`, `created_at`, `updated_at`) VALUES
(1, '6115043e112061628767294', 'Bitcoin', 'BTC', NULL, NULL, 1, 1, 1, 1, 1, '0.00001000', '99999999.99990000', '0.00100000', '99999999.99990000', '0.00100000', '0.00100000', '0.00100000', '999.00000000', '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(2, '6115043e147121628767294', 'Tether USD', 'USDT', NULL, NULL, 1, 1, 1, 1, 1, '0.00001000', '99999999.99990000', '0.00100000', '99999999.99990000', '0.00100000', '0.00100000', '0.00100000', '999.00000000', '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(3, '6115043e187f01628767294', 'Ether', 'ETH', NULL, NULL, 1, 1, 1, 1, 1, '0.00001000', '99999999.99990000', '0.00100000', '99999999.99990000', '0.00100000', '0.00100000', '0.00100000', '999.00000000', '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(4, '6115043e1cf381628767294', 'Litecoin', 'LTC', NULL, NULL, 1, 1, 1, 1, 1, '0.00001000', '99999999.99990000', '0.00100000', '99999999.99990000', '0.00100000', '0.00100000', '0.00100000', '999.00000000', '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(5, '6115043e206431628767294', 'Ether', 'DOGE', NULL, NULL, 1, 1, 1, 1, 1, '0.00001000', '99999999.99990000', '0.00100000', '99999999.99990000', '0.00100000', '0.00100000', '0.00100000', '999.00000000', '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(6, '6115043e242ca1628767294', 'Bitcoin Cash', 'BCH', NULL, NULL, 1, 1, 1, 1, 1, '0.00001000', '99999999.99990000', '0.00100000', '99999999.99990000', '0.00100000', '0.00100000', '0.00100000', '999.00000000', '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(7, '6115043e28dad1628767294', 'Dash', 'DASH', NULL, NULL, 1, 1, 1, 1, 1, '0.00001000', '99999999.99990000', '0.00100000', '99999999.99990000', '0.00100000', '0.00100000', '0.00100000', '999.00000000', '2021-08-12 05:21:34', '2021-08-12 05:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `country_payment_methods`
--

CREATE TABLE `country_payment_methods` (
  `id` bigint UNSIGNED NOT NULL,
  `payment_method_id` bigint NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposite_transactions`
--

CREATE TABLE `deposite_transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coin_id` bigint NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `sender_wallet_id` bigint DEFAULT NULL,
  `receiver_wallet_id` bigint UNSIGNED NOT NULL,
  `address_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `btc` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `doller` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `confirmations` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `escrows`
--

CREATE TABLE `escrows` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `wallet_id` bigint NOT NULL,
  `order_id` bigint NOT NULL,
  `amount` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `fees` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `fees_percentage` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `type` tinyint NOT NULL DEFAULT '1',
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `author` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `unique_code`, `question`, `answer`, `status`, `author`, `created_at`, `updated_at`) VALUES
(1, '6115043e2d9a41628767294', 'What is pexeer ?', 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.', 1, 1, '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(2, '6115043e323461628767294', 'How it works ?', 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.', 1, 1, '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(3, '6115043e377641628767294', 'What is the workflow ?', 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.', 1, 1, '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(4, '6115043e3bf991628767294', 'How i place a order ?', 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.', 1, 1, '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(5, '6115043e3fb2e1628767294', 'How i make a withdrawal ?', 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.', 1, 1, '2021-08-12 05:21:34', '2021-08-12 05:21:34'),
(6, '6115043e4464d1628767294', 'What about the deposit process ?', 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.', 1, 1, '2021-08-12 05:21:34', '2021-08-12 05:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language`, `created_at`, `updated_at`) VALUES
(1, NULL, 'en', '2021-08-12 05:21:23', '2021-08-12 05:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_29_200844_create_languages_table', 1),
(4, '2018_08_29_205156_create_translations_table', 1),
(5, '2019_06_24_092552_create_wallets_table', 1),
(6, '2019_07_24_092303_create_user_settings_table', 1),
(7, '2019_07_24_092331_create_admin_settings_table', 1),
(8, '2019_07_24_092409_create_activity_logs_table', 1),
(9, '2019_07_24_092511_create_wallet_address_histories_table', 1),
(10, '2019_07_24_103207_create_user_verification_codes_table', 1),
(11, '2019_10_17_075927_create_affiliation_codes_table', 1),
(12, '2019_10_17_080002_create_affiliation_histories_table', 1),
(13, '2019_10_17_080031_create_referral_users_table', 1),
(14, '2020_04_29_080822_create_verification_details_table', 1),
(15, '2020_04_29_081029_create_banks_table', 1),
(16, '2020_04_29_081343_create_deposite_transactions_table', 1),
(17, '2020_04_29_081451_create_withdraw_histories_table', 1),
(18, '2020_06_17_123519_create_faqs_table', 1),
(19, '2020_06_19_095619_create_send_mail_records_table', 1),
(20, '2020_06_19_183647_create_notifications_table', 1),
(21, '2020_06_24_080256_create_websockets_statistics_entries_table', 1),
(22, '2020_09_25_105747_create_coins_table', 1),
(23, '2020_10_07_092041_create_payment_methods_table', 1),
(24, '2020_10_07_093129_create_country_payment_methods_table', 1),
(25, '2020_10_07_093437_create_buys_table', 1),
(26, '2020_10_07_095204_create_sells_table', 1),
(27, '2020_10_07_101049_create_orders_table', 1),
(28, '2020_10_07_111845_create_escrows_table', 1),
(29, '2020_10_07_113335_create_order_cancel_reasons_table', 1),
(30, '2020_10_07_114308_create_order_disputes_table', 1),
(31, '2020_10_09_074508_create_offer_payment_methods_table', 1),
(32, '2020_10_12_105310_create_chats_table', 1),
(33, '2020_11_06_121738_create_testimonials_table', 1),
(34, '2020_11_06_132833_create_subscribers_table', 1),
(35, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(36, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(37, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(38, '2016_06_01_000004_create_oauth_clients_table', 2),
(39, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notification_body` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT NULL,
  `client_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `client_id` int NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int UNSIGNED NOT NULL,
  `client_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer_payment_methods`
--

CREATE TABLE `offer_payment_methods` (
  `id` bigint UNSIGNED NOT NULL,
  `offer_id` bigint NOT NULL,
  `payment_method_id` bigint NOT NULL,
  `offer_type` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyer_id` bigint NOT NULL,
  `seller_id` bigint NOT NULL,
  `buyer_wallet_id` bigint DEFAULT NULL,
  `seller_wallet_id` bigint DEFAULT NULL,
  `sell_id` bigint DEFAULT NULL,
  `buy_id` bigint DEFAULT NULL,
  `coin_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `amount` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `price` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `fees` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `fees_percentage` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `status` tinyint NOT NULL DEFAULT '0',
  `is_reported` tinyint NOT NULL DEFAULT '0',
  `payment_status` tinyint NOT NULL DEFAULT '0',
  `type` tinyint NOT NULL DEFAULT '1',
  `payment_id` bigint DEFAULT NULL,
  `payment_sleep` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_cancel_reasons`
--

CREATE TABLE `order_cancel_reasons` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint NOT NULL,
  `type` tinyint NOT NULL DEFAULT '1',
  `user_id` bigint NOT NULL,
  `partner_id` bigint NOT NULL,
  `reason_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_disputes`
--

CREATE TABLE `order_disputes` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `reported_user` bigint NOT NULL,
  `reason_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `type` tinyint NOT NULL DEFAULT '1',
  `updated_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_users`
--

CREATE TABLE `referral_users` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `parent_id` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coin_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `coin_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallet_id` bigint NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin_rate` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `rate_percentage` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `market_price` decimal(13,8) NOT NULL DEFAULT '0.00000000',
  `rate_type` tinyint NOT NULL DEFAULT '1',
  `price_type` tinyint NOT NULL DEFAULT '1',
  `minimum_trade_size` bigint NOT NULL DEFAULT '0',
  `maximum_trade_size` bigint NOT NULL DEFAULT '0',
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` longtext COLLATE utf8mb4_unicode_ci,
  `instruction` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `send_mail_records`
--

CREATE TABLE `send_mail_records` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `email_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int UNSIGNED NOT NULL,
  `language_id` int UNSIGNED NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reset_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int NOT NULL DEFAULT '2',
  `status` int NOT NULL DEFAULT '1',
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verified` tinyint NOT NULL DEFAULT '0',
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint NOT NULL DEFAULT '1',
  `birth_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g2f_enabled` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `google2fa_secret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `device_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_type` tinyint NOT NULL DEFAULT '1',
  `push_notification_status` tinyint NOT NULL DEFAULT '1',
  `email_notification_status` tinyint NOT NULL DEFAULT '1',
  `agree_terms` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `reset_code`, `unique_code`, `role`, `status`, `country_code`, `phone`, `phone_verified`, `country`, `gender`, `birth_date`, `photo`, `g2f_enabled`, `google2fa_secret`, `is_verified`, `password`, `language`, `device_id`, `device_type`, `push_notification_status`, `email_notification_status`, `agree_terms`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', 'Admin', 'admin@email.com', NULL, '6115043cd0ab51628767292', 1, 1, NULL, NULL, 0, NULL, 1, NULL, NULL, '0', NULL, 1, '$2y$10$P/QM60oQmRH3Ni10MCc5Ze0hQMuh3nW54D7z2xjvudWwb1kFPlNFW', 'en', NULL, 1, 1, 1, 0, NULL, '2021-08-12 05:21:32', NULL),
(2, 'Mr', 'User', 'user@email.com', NULL, '6115043cef8821628767292', 2, 1, NULL, NULL, 0, NULL, 1, NULL, NULL, '0', NULL, 1, '$2y$10$7B91yyHPn8u3bFPvoL1jYua/Xqu2JXU0cGqLOBeD9ubkzNc/LomIO', 'en', NULL, 1, 1, 1, 0, NULL, '2021-08-12 05:21:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_verification_codes`
--

CREATE TABLE `user_verification_codes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `expired_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verification_details`
--

CREATE TABLE `verification_details` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `field_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coin_id` bigint NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BTC',
  `status` tinyint NOT NULL DEFAULT '1',
  `is_primary` tinyint NOT NULL DEFAULT '0',
  `balance` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `referral_balance` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `unique_code`, `coin_id`, `user_id`, `name`, `coin_type`, `status`, `is_primary`, `balance`, `referral_balance`, `created_at`, `updated_at`) VALUES
(1, '6115043d0c9fd1628767293', 1, 2, 'BTC Wallet', 'BTC', 1, 1, '0.00000000', '0.00000000', NULL, NULL),
(2, '6115043d0e0bb1628767293', 1, 1, 'BTC Wallet', 'BTC', 1, 1, '0.00000000', '0.00000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wallet_address_histories`
--

CREATE TABLE `wallet_address_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `wallet_id` bigint NOT NULL,
  `coin_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BTC',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int UNSIGNED NOT NULL,
  `app_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int NOT NULL,
  `websocket_message_count` int NOT NULL,
  `api_message_count` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_histories`
--

CREATE TABLE `withdraw_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_code` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coin_id` bigint NOT NULL,
  `wallet_id` bigint UNSIGNED NOT NULL,
  `amount` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `coin_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BTC',
  `btc` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `doller` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `address_type` tinyint NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_hash` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_wallet_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmations` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fees` decimal(19,8) NOT NULL DEFAULT '0.00000000',
  `status` tinyint NOT NULL DEFAULT '0',
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affiliation_codes`
--
ALTER TABLE `affiliation_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `affiliation_codes_code_unique` (`code`),
  ADD KEY `affiliation_codes_user_id_foreign` (`user_id`);

--
-- Indexes for table `affiliation_histories`
--
ALTER TABLE `affiliation_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affiliation_histories_user_id_foreign` (`user_id`),
  ADD KEY `affiliation_histories_child_id_foreign` (`child_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banks_unique_code_unique` (`unique_code`);

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buys_unique_code_unique` (`unique_code`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_sender_id_foreign` (`sender_id`),
  ADD KEY `chats_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coins_type_unique` (`type`),
  ADD UNIQUE KEY `coins_unique_code_unique` (`unique_code`);

--
-- Indexes for table `country_payment_methods`
--
ALTER TABLE `country_payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposite_transactions`
--
ALTER TABLE `deposite_transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deposite_transactions_unique_code_unique` (`unique_code`);

--
-- Indexes for table `escrows`
--
ALTER TABLE `escrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faqs_unique_code_unique` (`unique_code`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `offer_payment_methods`
--
ALTER TABLE `offer_payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_unique_code_unique` (`unique_code`);

--
-- Indexes for table `order_cancel_reasons`
--
ALTER TABLE `order_cancel_reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_disputes`
--
ALTER TABLE `order_disputes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_disputes_unique_code_unique` (`unique_code`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_methods_unique_code_unique` (`unique_code`);

--
-- Indexes for table `referral_users`
--
ALTER TABLE `referral_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `referral_users_user_id_unique` (`user_id`),
  ADD KEY `referral_users_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sells_unique_code_unique` (`unique_code`);

--
-- Indexes for table `send_mail_records`
--
ALTER TABLE `send_mail_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonials_unique_code_unique` (`unique_code`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_language_id_foreign` (`language_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_reset_code_unique` (`reset_code`),
  ADD UNIQUE KEY `users_unique_code_unique` (`unique_code`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_settings_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_verification_codes`
--
ALTER TABLE `user_verification_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verification_details`
--
ALTER TABLE `verification_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verification_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wallets_unique_code_unique` (`unique_code`),
  ADD KEY `wallets_user_id_foreign` (`user_id`);

--
-- Indexes for table `wallet_address_histories`
--
ALTER TABLE `wallet_address_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_histories`
--
ALTER TABLE `withdraw_histories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `withdraw_histories_unique_code_unique` (`unique_code`),
  ADD KEY `withdraw_histories_wallet_id_foreign` (`wallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `affiliation_codes`
--
ALTER TABLE `affiliation_codes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `affiliation_histories`
--
ALTER TABLE `affiliation_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buys`
--
ALTER TABLE `buys`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coins`
--
ALTER TABLE `coins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `country_payment_methods`
--
ALTER TABLE `country_payment_methods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposite_transactions`
--
ALTER TABLE `deposite_transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `escrows`
--
ALTER TABLE `escrows`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_payment_methods`
--
ALTER TABLE `offer_payment_methods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_cancel_reasons`
--
ALTER TABLE `order_cancel_reasons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_disputes`
--
ALTER TABLE `order_disputes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_users`
--
ALTER TABLE `referral_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sells`
--
ALTER TABLE `sells`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `send_mail_records`
--
ALTER TABLE `send_mail_records`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_verification_codes`
--
ALTER TABLE `user_verification_codes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verification_details`
--
ALTER TABLE `verification_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallet_address_histories`
--
ALTER TABLE `wallet_address_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw_histories`
--
ALTER TABLE `withdraw_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `affiliation_codes`
--
ALTER TABLE `affiliation_codes`
  ADD CONSTRAINT `affiliation_codes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `affiliation_histories`
--
ALTER TABLE `affiliation_histories`
  ADD CONSTRAINT `affiliation_histories_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `affiliation_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chats_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `referral_users`
--
ALTER TABLE `referral_users`
  ADD CONSTRAINT `referral_users_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `referral_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD CONSTRAINT `user_settings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `verification_details`
--
ALTER TABLE `verification_details`
  ADD CONSTRAINT `verification_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wallets`
--
ALTER TABLE `wallets`
  ADD CONSTRAINT `wallets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdraw_histories`
--
ALTER TABLE `withdraw_histories`
  ADD CONSTRAINT `withdraw_histories_wallet_id_foreign` FOREIGN KEY (`wallet_id`) REFERENCES `wallets` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Database export via SQLPro (https://www.sqlprostudio.com/allapps.html)
-- Exported by gerard.alainp at 14-05-2022 16:28.
-- WARNING: This file may contain descructive statements such as DROPs.
-- Please ensure that you are running the script at the proper location.


-- BEGIN TABLE casesregions
DROP TABLE IF EXISTS casesregions;
CREATE TABLE `casesregions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Location` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cases` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Deaths` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 16 rows into casesregions
-- Insert batch #1
INSERT INTO casesregions (id, Location, Cases, Deaths, created_at, updated_at) VALUES
(2, 'Metro Manila', '868,000', '11,151', NULL, NULL),
(3, 'Calabarzon', '499,000', '5,813', NULL, NULL),
(4, 'Central Luzon', '282,000', '6,170', NULL, NULL),
(5, 'Central Visayas', '155,000', '5,530', NULL, NULL),
(6, 'Western Visayas', '153,000', '4,362', NULL, NULL),
(7, 'Cagayan Valley', '127,000', '1,961', NULL, NULL),
(8, 'Davao Region', '107,000', '2,070', NULL, NULL),
(9, 'Ilocos Region', '105,000', '2,142', NULL, NULL),
(10, 'Cordillera Administrative Region', '93,112', '2,045', NULL, NULL),
(11, 'Northern Mindanao', '85,804', '989', NULL, NULL),
(12, 'SOCCSKSARGEN', '60,268', '1,143', NULL, NULL),
(13, 'Zamboanga Peninsula', '53,817', '1,273', NULL, NULL),
(14, 'Eastern Visayas', '53,413', '707', NULL, NULL),
(15, 'Bicol', '51,926', '996', NULL, NULL),
(16, 'Caraga', '50,967', '1,446', NULL, NULL),
(17, 'MIMAROPA', '37,762', '1,086', NULL, NULL);

-- END TABLE casesregions

-- BEGIN TABLE covid19cases
DROP TABLE IF EXISTS covid19cases;
CREATE TABLE `covid19cases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dateofcases` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numcases` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 58 rows into covid19cases
-- Insert batch #1
INSERT INTO covid19cases (id, dateofcases, numcases, created_at, updated_at) VALUES
(2, 'Mar 1, 2020', 0, NULL, NULL),
(3, 'March 15, 2020', 45, NULL, NULL),
(4, 'Mar 29, 2020', 230, NULL, NULL),
(5, 'Apr 12, 2020', 415, NULL, NULL),
(6, 'Apr 26, 2020', 600, NULL, NULL),
(7, 'May 10, 2020', 785, NULL, NULL),
(8, 'May 24, 2020', 970, NULL, NULL),
(9, 'Jun 7, 2020', 1155, NULL, NULL),
(10, 'Jun 21, 2020', 1340, NULL, NULL),
(11, 'Jul 5, 2020', 1525, NULL, NULL),
(12, 'Jul 19, 2020', 1710, NULL, NULL),
(13, 'Aug 2, 2020', 1895, NULL, NULL),
(14, 'Aug 16, 2020', 2080, NULL, NULL),
(15, 'Aug 30, 2020', 2265, NULL, NULL),
(16, 'Sep 13, 2020', 2450, NULL, NULL),
(17, 'Sep 27, 2020', 2635, NULL, NULL),
(18, 'Oct 11, 2020', 2820, NULL, NULL),
(19, 'Oct 25, 2020', 3005, NULL, NULL),
(20, 'Nov 8, 2020', 3190, NULL, NULL),
(21, 'Nov 22, 2020', 3375, NULL, NULL),
(22, 'Dec 6, 2020', 3560, NULL, NULL),
(23, 'Dec 20, 2020', 3745, NULL, NULL),
(24, 'Jan 3, 2021', 3930, NULL, NULL),
(25, 'Jan 17, 2021', 4115, NULL, NULL),
(26, 'Jan 31, 2021', 4300, NULL, NULL),
(27, 'Feb 14, 2021', 4485, NULL, NULL),
(28, 'Feb 28, 2021', 4670, NULL, NULL),
(29, 'Mar 14, 2021', 4855, NULL, NULL),
(30, 'Mar 28, 2021', 5040, NULL, NULL),
(31, 'Apr 11, 2021', 8000, NULL, NULL),
(32, 'Apr 25, 2021', 5040, NULL, NULL),
(33, 'May 9, 2021', 4855, NULL, NULL),
(34, 'May 23, 2021', 5040, NULL, NULL),
(35, 'Jun 6, 2021', 8000, NULL, NULL),
(36, 'Jun 20, 2021', 5040, NULL, NULL),
(37, 'Jul 4, 2021', 4855, NULL, NULL),
(38, 'Jul 18, 2021', 7985, NULL, NULL),
(39, 'Aug 1, 2021', 5697, NULL, NULL),
(40, 'Aug 15, 2021', 14456, NULL, NULL),
(41, 'Aug 29, 2021', 15768, NULL, NULL),
(42, 'Sep 12, 2021', 20654, NULL, NULL),
(43, 'Sep 26, 2021', 24456, NULL, NULL),
(44, 'Oct 10, 2021', 25768, NULL, NULL),
(45, 'Oct 24, 2021', 30654, NULL, NULL),
(46, 'Nov 7, 2021', 2490, NULL, NULL),
(47, 'Nov 21, 2021', 3008, NULL, NULL),
(48, 'Dec 5, 2021', 699, NULL, NULL),
(49, 'Dec 19, 2021', 300, NULL, NULL),
(50, 'Jan 2, 2022', 35600, NULL, NULL),
(51, 'Jan 16, 2022', 34600, NULL, NULL),
(52, 'Jan 30, 2022', 25600, NULL, NULL),
(53, 'Feb 13, 2022', 3000, NULL, NULL),
(54, 'Feb 27, 2022', 2000, NULL, NULL),
(55, 'Mar 13, 2022', 500, NULL, NULL),
(56, 'Mar 27, 2022', 340, NULL, NULL),
(57, 'Apr 10, 2022', 200, NULL, NULL),
(58, 'Apr 24, 2022', 340, NULL, NULL),
(59, 'May 8, 2022', 200, NULL, NULL);

-- END TABLE covid19cases

-- BEGIN TABLE establishmentvisits
DROP TABLE IF EXISTS establishmentvisits;
CREATE TABLE `establishmentvisits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establishment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `symptoms` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone_number` bigint DEFAULT NULL,
  `userid` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 16 rows into establishmentvisits
-- Insert batch #1
INSERT INTO establishmentvisits (id, name, establishment, temperature, address, symptoms, telephone_number, userid, created_at, updated_at) VALUES
(2, 'Gerard Alain', 'ATC', '36.6', 'Pilar Village', 'on', 9871256891, 2, '2022-05-13 10:52:55', '2022-05-13 10:52:55'),
(3, 'Gerard Alain', 'SM', '36.6', 'Pilar Village', 'on', 9871256891, 2, '2022-05-13 10:58:04', '2022-05-13 10:58:04'),
(4, 'Gerard Alain', 'dsd', '36.6', 'Pilar Village', 'Fever', 9871256891, 2, '2022-05-13 11:02:40', '2022-05-13 11:02:40'),
(5, 'Gerard Alain', 'SM', '36.6', 'Pilar Village', 'Sore Throat;', 9871256891, 2, '2022-05-13 11:05:13', '2022-05-13 11:05:13'),
(6, 'Gerard Alain', 'SM', '36.6', 'Pilar Village', 'FeverDry CoughFatigueAches and PainsRunny Nose', 9871256891, 2, '2022-05-13 12:45:22', '2022-05-13 12:45:22'),
(7, 'Gerard Alain', 'SM iloilo', '36.6', 'Pilar Village', 'Fever,Dry Cough,Fatigue,Aches and Pains,Runny Nose', 9871256891, 2, '2022-05-13 12:47:08', '2022-05-13 12:47:08'),
(8, 'Testing', 'Glor', '36.6', 'QC', 'Aches and Pains,Runny Nose,Sore Throat', 9871256891, 3, '2022-05-13 12:52:49', '2022-05-13 12:52:49'),
(9, 'Gerard Alain', 'SM', '36.6', 'Pilar Village', 'Fever,Dry Cough,Fatigue', 9871256891, 2, '2022-05-13 12:57:06', '2022-05-13 12:57:06'),
(10, 'Gerard Alain', 'SM', '36.6', 'Pilar Village', 'no symptoms', 9871256891, 2, '2022-05-13 12:57:35', '2022-05-13 12:57:35'),
(11, 'Gerard Alain', 'SM', '36.6', 'Pilar Village', 'Fever,Dry Cough,Fatigue', 9871256891, 2, '2022-05-13 13:06:07', '2022-05-13 13:06:07'),
(12, 'Gerard Alain', 'SM', '36.6', 'Pilar Village', 'Aches and Pains,Runny Nose,Sore Throat', 9871256891, 2, '2022-05-14 03:46:00', '2022-05-14 03:46:00'),
(13, 'Gerard Alain', 'trinoma', '36.6', 'Pilar Village', 'Dry Cough,Fatigue,Aches and Pains', 9871256891, 2, '2022-05-14 03:47:26', '2022-05-14 03:47:26'),
(14, 'Gerard Alain', 'SM City', '36.6', 'Pilar Village', 'Diarrhea,Headache,Loss of Smell and Taste', 9871256891, 2, '2022-05-14 03:47:43', '2022-05-14 03:47:43'),
(15, 'Gerard Alain', 'SM iloilo', '36.6', 'Pilar Village', 'Fever,Dry Cough,Aches and Pains', 9871256891, 2, '2022-05-14 03:48:23', '2022-05-14 03:48:23'),
(16, 'Gerard Alain', 'ayala ATC', '36.6', 'Pilar Village', 'Fever,Fatigue,Aches and Pains', 9871256891, 2, '2022-05-14 07:06:12', '2022-05-14 07:06:12'),
(17, 'Gerard Alain', 'SM', '36.6', 'Pilar Village', 'no symptoms', 9871256891, 2, '2022-05-14 07:53:05', '2022-05-14 07:53:05');

-- END TABLE establishmentvisits

-- BEGIN TABLE exposures
DROP TABLE IF EXISTS exposures;
CREATE TABLE `exposures` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `status_desc` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 7 rows into exposures
-- Insert batch #1
INSERT INTO exposures (id, status_desc, userid, created_at, updated_at) VALUES
(2, 'I am Positive for COVID-19', 4, '2022-05-14 06:45:00', '2022-05-14 06:45:00'),
(3, 'No exposure or negative with COVID-19', 4, '2022-05-14 06:45:11', '2022-05-14 06:45:11'),
(4, 'No exposure or negative with COVID-19', 4, '2022-05-14 06:45:23', '2022-05-14 06:45:23'),
(5, 'I am Positive for COVID-19', 4, '2022-05-14 06:45:56', '2022-05-14 06:45:56'),
(6, 'No exposure or negative with COVID-19', 2, '2022-05-14 06:49:50', '2022-05-14 06:49:50'),
(7, 'I am Positive for COVID-19', 2, '2022-05-14 07:04:46', '2022-05-14 07:04:46'),
(8, 'I have been expose to COVID-19', 2, '2022-05-14 07:04:51', '2022-05-14 07:04:51');

-- END TABLE exposures

-- BEGIN TABLE failed_jobs
DROP TABLE IF EXISTS failed_jobs;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table failed_jobs contains no data. No inserts have been genrated.
-- Inserting 0 rows into failed_jobs


-- END TABLE failed_jobs

-- BEGIN TABLE migrations
DROP TABLE IF EXISTS migrations;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 1 row into migrations
-- Insert batch #1
INSERT INTO migrations (id, migration, batch) VALUES
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- END TABLE migrations

-- BEGIN TABLE personal_access_tokens
DROP TABLE IF EXISTS personal_access_tokens;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table personal_access_tokens contains no data. No inserts have been genrated.
-- Inserting 0 rows into personal_access_tokens


-- END TABLE personal_access_tokens

-- BEGIN TABLE statusexposures
DROP TABLE IF EXISTS statusexposures;
CREATE TABLE `statusexposures` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `expostat` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 2 rows into statusexposures
-- Insert batch #1
INSERT INTO statusexposures (id, expostat, created_at, updated_at) VALUES
(1, 'I am Positive for COVID-19', NULL, NULL),
(2, 'I have been expose to COVID-19', NULL, NULL);

-- END TABLE statusexposures

-- BEGIN TABLE symptoms
DROP TABLE IF EXISTS symptoms;
CREATE TABLE `symptoms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `symp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 10 rows into symptoms
-- Insert batch #1
INSERT INTO symptoms (id, symp, created_at, updated_at) VALUES
(2, 'Fever', NULL, NULL),
(3, 'Dry Cough', NULL, NULL),
(4, 'Fatigue', NULL, NULL),
(5, 'Aches and Pains', NULL, NULL),
(6, 'Runny Nose', NULL, NULL),
(7, 'Sore Throat', NULL, NULL),
(8, 'Shortness of Breath', NULL, NULL),
(9, 'Diarrhea', NULL, NULL),
(10, 'Headache', NULL, NULL),
(11, 'Loss of Smell and Taste', NULL, NULL);

-- END TABLE symptoms

-- BEGIN TABLE users
DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone_number` bigint DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 3 rows into users
-- Insert batch #1
INSERT INTO users (id, name, email, address, telephone_number, email_verified_at, password, remember_token, created_at, updated_at) VALUES
(2, 'Gerard Alain', 'gaypotato1990@gmail.com', 'Pilar Village', 9871256891, NULL, '$2y$10$N7jhrxpoFMPI.HH2WuvYpuMo7.jfAs/wZW4GAuylkNZEUiCXJIsz2', NULL, '2022-05-11 15:01:18', '2022-05-13 15:28:27'),
(3, 'Testing', 'gerard@yahoo.com', 'QC', 9871256891, NULL, '$2y$10$UdqtuF5vZ1bsbqjN8YKeb.6e9ZRJpKKZZhcl1jIbVHH74grf.OEVu', NULL, '2022-05-13 12:52:30', '2022-05-13 12:52:30'),
(4, 'Gerard Alai', 'alain@yahoo.com', 'Pilar Village', 9871256891, NULL, '$2y$10$zr6/yxohbJ2prjcTLCKNz.oqzoXMIPNDZpWZTeUzJ6YjzxAgg9nxa', NULL, '2022-05-14 06:44:32', '2022-05-14 06:44:32');

-- END TABLE users


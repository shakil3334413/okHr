-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2020 at 11:42 PM
-- Server version: 5.7.29-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okhr_hrmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `gross_salary` tinyint(1) NOT NULL,
  `basic_salary` double NOT NULL,
  `house_rent` double DEFAULT NULL,
  `medical` double DEFAULT NULL,
  `festival_bonus` double NOT NULL,
  `overtime_scope` tinyint(1) NOT NULL,
  `overtime_rate` double DEFAULT NULL,
  `performance_bonus` double DEFAULT NULL,
  `incriment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `deviceId` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `inDate` date NOT NULL,
  `outDate` date DEFAULT NULL,
  `inTime` double NOT NULL,
  `outTime` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `employee_id`, `deviceId`, `inDate`, `outDate`, `inTime`, `outTime`, `created_at`, `updated_at`) VALUES
(1, 1, 'asfgsdfg45435435tertret', '2020-03-10', '2020-03-10', 10.33, 7.3, '2020-03-10 05:00:01', '2020-03-10 05:03:53'),
(2, 1, 'asfgsdfg45435435tertret', '2020-03-10', NULL, 10.33, NULL, '2020-03-14 01:25:58', '2020-03-14 01:25:58'),
(3, 1, 'asfgsdfg45435435tertret', '2020-03-14', NULL, 10.33, NULL, '2020-03-14 01:26:31', '2020-03-14 01:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyPhone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyWebsite` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyLogo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyAddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `companyName`, `companyEmail`, `companyPhone`, `companyWebsite`, `companyLogo`, `companyAddress`, `created_at`, `updated_at`) VALUES
(1, 'Hello world', 'hello@gmai.com', '01832182633', 'https://app.slack.com/client/TNCE4C4E4/DUD6LA6R2', 'companyLogo/9Ves1eck3GfqdMxl7ChuYte18sPkXiiIYKvpmSNw.png', 'House# 1283, Level 6, Flat: A\r\n1283 Begum Rokeya Sharani ,Mirpur,Dhaka,Bangladesh', '2020-03-11 03:04:13', '2020-03-11 03:04:13'),
(2, 'Hi Jupiter', 'hi@gmail.com', '01832182633', 'https://app.slack.com/client/TNCE4C4E4/DUD6LA6R2', 'companyLogo/OqkVjsQLFSHo20CewIFzdcRnnquYkSh1K5sPvco7.png', 'House# 1283, Level 6, Flat: A\r\n1283 Begum Rokeya Sharani ,Mirpur,Dhaka,Bangladesh', '2020-03-11 03:05:14', '2020-03-11 03:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `conveyances`
--

CREATE TABLE `conveyances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double NOT NULL,
  `fromLat` decimal(8,2) DEFAULT NULL,
  `fromLong` decimal(8,2) DEFAULT NULL,
  `toLat` decimal(8,2) DEFAULT NULL,
  `toLong` decimal(8,2) DEFAULT NULL,
  `distance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billDate` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conveyances`
--

INSERT INTO `conveyances` (`id`, `employee_id`, `subject`, `from`, `to`, `transport`, `amount`, `fromLat`, `fromLong`, `toLat`, `toLong`, `distance`, `billDate`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjRiZGJmMDc0MTQ1OGJkNzNlYjM5YzI0YWQ4OTVmOThlYTVlMzUzYTkxNDExODA4MDJiMDBjN2Q5ZWMwYTgwMTA1YTlhOTg0ZTRiMTFlNzM3In0.', 'Dhaka', 'Barishal', 'Fly', 400000, NULL, NULL, NULL, NULL, NULL, '2020-05-12', 1, '2020-03-09 01:36:01', '2020-03-09 02:56:49'),
(2, 1, 'HelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHeloo', 'Dhaka', 'Barishal', 'Fly', 400000, NULL, NULL, NULL, NULL, NULL, '2020-05-12', 0, '2020-03-09 01:43:42', '2020-03-09 01:43:42'),
(3, 1, 'HelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHelooHeloo', 'Dhaka', 'Barishal', 'Fly', 400000, NULL, NULL, NULL, NULL, NULL, '2020-05-12', 0, '2020-03-09 03:07:56', '2020-03-09 03:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Software', '2020-03-08 01:56:38', '2020-03-08 01:56:38'),
(2, 'HR', '2020-03-08 01:56:58', '2020-03-08 01:56:58'),
(3, 'DEP 1', '2020-03-08 01:57:18', '2020-03-08 01:57:18'),
(4, 'DEP 2', '2020-03-08 01:57:28', '2020-03-08 01:57:28'),
(5, 'Chairman', '2020-03-20 05:18:51', '2020-03-20 05:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Software Engineer', '2020-03-08 01:58:38', '2020-03-08 01:58:38'),
(2, 'Laravel Developer', '2020-03-08 01:58:56', '2020-03-08 01:58:56'),
(3, 'Flutter Developer', '2020-03-08 02:03:32', '2020-03-08 02:03:32'),
(4, 'Director & COO', '2020-03-20 05:18:07', '2020-03-20 05:18:07'),
(5, 'Managing Director', '2020-03-20 05:18:38', '2020-03-20 05:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloodGroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritaStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `officeEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avater.png',
  `employeeId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employeeType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisorId` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `medication` int(11) DEFAULT NULL,
  `annualLeaves` int(11) NOT NULL,
  `casualLeaves` int(11) NOT NULL,
  `medicalLeaves` int(11) NOT NULL,
  `joiningDate` date NOT NULL,
  `isSupervisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentAddrss` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parmanentAddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergencyContactName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergencyContactRelation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergencyContactAddress` text COLLATE utf8mb4_unicode_ci,
  `emergencyContactphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `gender`, `bloodGroup`, `maritaStatus`, `dob`, `email`, `phone`, `officeEmail`, `image`, `employeeId`, `employeeType`, `bankName`, `accountType`, `accountNumber`, `department`, `designation`, `supervisorId`, `salary`, `medication`, `annualLeaves`, `casualLeaves`, `medicalLeaves`, `joiningDate`, `isSupervisor`, `presentAddrss`, `parmanentAddress`, `emergencyContactName`, `emergencyContactRelation`, `emergencyContactAddress`, `emergencyContactphone`, `created_at`, `updated_at`) VALUES
(1, 'Anik', 'Male', 'A+', 'Mariied', '2020-03-10', 'ani1k@test.com', '01832182633', 'super@tit.com', '1583654935.jpg', '5656', 'Full Time', 'Bank', 'lllgrf', '54877844', 'HR', 'Laravel Developer', 2, 200000, 10, 15, 20, 20, '2020-03-10', 'true', 'House# 1283, Level 6, Flat: A\r\n1283 Begum Rokeya Sharani ,Mirpur,Dhaka,Bangladesh', 'House# 1283, Level 6, Flat: A\r\n1283 Begum Rokeya Sharani ,Mirpur,Dhaka,Bangladesh', 'aaaaaa', 'employees', 'House# 1283, Level 6, Flat: A\r\n1283 Begum Rokeya Sharani ,Mirpur,Dhaka,Bangladesh', '01832182630', '2020-03-08 02:08:55', '2020-03-08 02:08:55'),
(3, 'Anik 11', 'Male', 'A+', 'Mariied', '1978-04-12', 'ani1k@test.com', '01832182633', 'super@tit.com', '1583654935.jpg', '5656', 'Full Time', 'Bank', 'lllgrf', '54877844', 'HR', 'Laravel Developer', 2, 200000, 10, 15, 20, 20, '2020-04-12', 'true', 'House# 1283, Level 6, Flat: A\r\n1283 Begum Rokeya Sharani ,Mirpur,Dhaka,Bangladesh', 'House# 1283, Level 6, Flat: A\r\n1283 Begum Rokeya Sharani ,Mirpur,Dhaka,Bangladesh', 'aaaaaa', 'employees', 'House# 1283, Level 6, Flat: A\r\n1283 Begum Rokeya Sharani ,Mirpur,Dhaka,Bangladesh', '01832182630', '2020-03-08 02:08:55', '2020-03-08 02:08:55'),
(4, 'Anwar Hossain', 'Male', 'A+', 'Mariied', '1999-09-12', 'anwar.anik33@gmail.com', '01832182633', 'anik@tahasinit.com', '1583757954.png', '6', 'Full Time', 'Bank', NULL, NULL, 'Software', 'Software Engineer', 1, 12000, 15, 20, 12, 15, '2019-09-14', 'false', '9/1 Golartek,Mirpur-1,Dhaka', 'Fani', NULL, NULL, NULL, NULL, '2020-03-09 11:45:54', '2020-03-09 11:45:54'),
(5, 'Mahadi Hasan Shakil', 'Male', 'A+', 'Unmariied', '1978-12-19', 'shakil3334426@gmail.com', '01637621452', 'shakil@tahasinit.com', '1583758951.png', '4', 'Full Time', 'Bank', NULL, NULL, 'Software', 'Software Engineer', 3, 8000, 15, 20, 12, 15, '2019-09-14', 'false', '5/1 Golden Sreet,Ring road,Shyamoli', 'Kochowa,chadpur', NULL, NULL, NULL, NULL, '2020-03-09 12:02:31', '2020-03-09 12:02:31'),
(6, 'Azharul Islam Masud', 'Male', 'A+', 'Unmariied', '1978-01-12', 'azharc614@gmail.com', '01738722919', 'masud@tahasinit.com', '1583759336.png', '5', 'Full Time', 'Bank', NULL, NULL, 'Software', 'Software Engineer', 3, 8000, 15, 20, 12, 15, '2019-09-14', 'false', 'Mohammodpur,Dhaka', 'Fulgazi,Fani', NULL, NULL, NULL, NULL, '2020-03-09 12:08:56', '2020-03-09 12:08:56'),
(7, 'Mir Mahfuz', 'Male', 'A+', 'Unmariied', '1978-12-19', 'mirmahfuz82@gmail.com', '01703907089', 'mahfuz@tahasinit.com', '1583759809.png', '15', 'Full Time', 'Bank', NULL, NULL, 'Software', 'Software Engineer', 3, 15000, 15, 20, 12, 15, '2020-04-12', 'false', 'Uttara Dhaka', 'Uttara Dhaka', NULL, NULL, NULL, NULL, '2020-03-09 12:16:49', '2020-03-09 12:16:49'),
(8, 'Shahed Hossain', 'Male', 'A+', 'Unmariied', '1978-04-12', 'shd007bd@gmail.com', '01683549803', 'shahed@tahasinit.com', '1583760088.jpg', '17', 'Full Time', 'Bank', NULL, NULL, 'Software', 'Software Engineer', 3, 20000, 15, 20, 12, 15, '2020-04-12', 'false', 'Arichpur,Tongi', 'Arichpur,Tongi', NULL, NULL, NULL, NULL, '2020-03-09 12:21:28', '2020-03-09 12:21:28'),
(9, 'Bulbul Ahmed', 'Male', 'A+', 'Unmariied', '1978-04-12', 'bulbulahmed.tk@gmail.com', '01749508249', 'bulbul@tahasinit.com', '1583760521.png', '14', 'Full Time', 'Bank', NULL, NULL, 'Software', 'Software Engineer', 3, 5000, 15, 20, 12, 15, '2020-01-01', 'false', 'Uttara,Dhaka', 'Uttara,Dhaka', NULL, NULL, NULL, NULL, '2020-03-09 12:28:41', '2020-03-09 12:28:41'),
(10, 'Zannat Ul Ferdous Mim', 'Female', 'A+', 'Unmariied', '1978-04-12', 'mimzannat007@gmail.com', '01746448845', 'mim@tahasinit.com', '1583760681.jpg', '19', 'Full Time', 'Bank', NULL, NULL, 'Software', 'Software Engineer', 3, 20000, 15, 20, 12, 15, '2020-04-12', 'false', 'Rayer Bazar,Dhaka', 'Rayer Bazar,Dhaka', NULL, NULL, NULL, NULL, '2020-03-09 12:31:21', '2020-03-09 12:31:21'),
(11, 'Md Sami', 'Male', 'A+', 'Mariied', '1978-04-12', 'mdsami.diu@gmail.com', '01738340448', 'sami@tahasinit.com', '1583761116.jpg', '1', 'Full Time', 'Bank', NULL, NULL, 'Software', 'Software Engineer', 3, 0, 0, 0, 0, 0, '2020-04-12', 'true', 'xyz', 'xyz', NULL, NULL, NULL, NULL, '2020-03-09 12:38:36', '2020-03-09 12:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `jobTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobRequirement` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobLocation_id` int(11) NOT NULL,
  `jobCategory_id` int(11) NOT NULL,
  `skills` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalPositions` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `jobTitle`, `jobDescription`, `jobRequirement`, `jobLocation_id`, `jobCategory_id`, `skills`, `totalPositions`, `startDate`, `endDate`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sr. Andeoid Developer', '<p>We are looking for Flutter developer as intern<br />\r\nJob Responsibilities:<br />\r\nDevelopment of IOS/Android-based mobile applications.<br />\r\nMigrating existing mobile applications.</p>\r\n\r\n<p>SALARY: Competitive Salary</p>', '<p>and Don&#39;t Forget to attached your git Profile linkExperience Requirements<br />\r\nFreshers are encouraged to apply :)Responsibilities:Developing and maintain large scale applications<br />\r\nWriting secure, robust code for financial applications<br />\r\nWorking with payment APIsPreferred qualifications:***Fulfilled your commitment.<br />\r\nKnowledge of APIs with Flutter<br />\r\nui/ux design experience will be plus point.<br />\r\nKnowledge of state management in Flutter<br />\r\nExperience with native Android/iOS (Not needed but preferred) Turning UI/UX into code<br />\r\nBasic knowledge of animations in Flutter<br />\r\nExperience with Stripe/other payment services on mobile platforms (Not needed but preferred)<br />\r\nMust have experience in version control (GIT)<br />\r\nMust have experience in GOOGLE place and map api<br />\r\n***Applicant should have knowledge about recent trends in mobile application technology.<br />\r\nAbility to work in different development platforms.<br />\r\nExperience is relaxed for the freshers with good programming concept.<br />\r\nPositive attitude and should have excellent communication skills.<br />\r\nMust be a very good team player.<br />\r\nMust be prepared to work under pressure and meet the dead line&amp; full time both</p>', 1, 1, '[\"Dart\",\"Java\"]', 2, '2020-03-12', '2020-03-18', 1, '2020-03-11 03:13:05', '2020-03-11 03:13:05'),
(2, 2, 'Sr. Laravel Developer', '<ul>\r\n	<li>At least 5 year(s)</li>\r\n	<li>The applicants should have experience in the following area(s):<br />\r\n	AWS, Data Mining, docker, Elasticsearch, MongoDB, Node js, PHP, Python, Software Architect</li>\r\n</ul>', '<ul>\r\n	<li>Architect and implement backend systems and services</li>\r\n	<li>Manage and improve our infrastructure and tooling</li>\r\n	<li>Build robust two-way integrations with a variety of third-party services</li>\r\n	<li>Work with the wider engineering team and stakeholders to constantly refine our processes</li>\r\n</ul>', 2, 2, '[\"PHP\",\"Mysql\",\"HTML\"]', 5, '2020-03-13', '2020-03-26', 1, '2020-03-11 04:02:01', '2020-03-11 04:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidateName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidateEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidatePhone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverLetter` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `jobCategory`, `candidateName`, `candidateEmail`, `candidatePhone`, `gender`, `image`, `resume`, `coverLetter`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Developer', 'New Apply', 'new@gg.aa', '01832182633', 'male', 'candidateImage/tBz4iBwxCIEHhXWdjoTI6OF3cgA2cYGcfF6C1DUd.png', 'candidateResume/HRdlm6kmwEEEMG2AAx6ae0t1MWsntn4WFwxE66hN.pdf', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2020-03-11 05:04:59', '2020-03-11 05:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Flutter Developer', '2020-03-11 03:08:26', '2020-03-11 03:08:26'),
(2, 'Laravel Developer', '2020-03-11 03:08:40', '2020-03-11 03:08:40'),
(3, 'Software Engineer', '2020-03-11 03:08:51', '2020-03-11 03:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `job_locations`
--

CREATE TABLE `job_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locationName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locationAddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_locations`
--

INSERT INTO `job_locations` (`id`, `locationName`, `locationAddress`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka,Bangladesh', 'House# 1283, Level 6, Flat: A\r\n1283 Begum Rokeya Sharani ,Mirpur,Dhaka,Bangladesh', '2020-03-11 03:05:33', '2020-03-11 03:05:33'),
(2, 'Khulana,Bangladesh', 'House# 1283, Level 6, Flat: A\r\n1283 Begum Rokeya Sharani ,Kulna,Bangladesh', '2020-03-11 03:06:10', '2020-03-11 03:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `leave_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2020_01_29_114655_create_user_groups_table', 1),
(9, '2020_01_30_054302_create_employees_table', 1),
(10, '2020_02_02_105453_create_supervisors_table', 1),
(11, '2020_02_03_062647_create_departments_table', 1),
(12, '2020_02_03_063540_create_designations_table', 1),
(13, '2020_02_04_095746_create_projects_table', 1),
(14, '2020_02_06_051746_create_leaves_table', 1),
(15, '2020_02_24_090240_create_accounts_table', 1),
(16, '2020_02_29_062035_create_job_categories_table', 1),
(17, '2020_02_29_062150_create_skills_table', 1),
(18, '2020_02_29_062302_create_companies_table', 1),
(19, '2020_02_29_062821_create_job_locations_table', 1),
(20, '2020_02_29_062902_create_jobs_table', 1),
(21, '2020_03_02_114123_create_job_applications_table', 1),
(23, '2020_03_08_065836_create_notices_table', 2),
(25, '2020_03_08_113354_create_conveyances_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noticeBody` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `weblink` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noticeFor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewer` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `noticeBody`, `weblink`, `file`, `noticeFor`, `viewer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'new 1 post', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'https://www.php.net/manual/en/function.substr.php', 'noticeFile/oFZbR0zuB7DbzYAcwRiD2PUyvKT17k9mJzKHul45.png', '1', '', 1, '2020-03-08 04:29:01', '2020-03-08 04:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0271e4cf8c34597a9c7d736c88938166da8e9242f3c8e7e1db4274de6ad480236abe8292e2ffa36a', 1, 3, 'token', '[]', 0, '2020-03-05 00:45:45', '2020-03-05 00:45:45', '2021-03-05 06:45:45'),
('590ced7649b2a3de3a9df2c466192746ea14a291f3fad5fe086436e41ead1230243297854d0a72db', 1, 3, 'token', '[]', 0, '2020-03-05 01:03:58', '2020-03-05 01:03:58', '2021-03-05 07:03:58'),
('8f4a8eb40268867d4d4e7b12701c859be8ec0f6dad2125e604d02337bbc380ef706fa5a13435f5d9', 1, 3, 'token', '[]', 1, '2020-03-05 00:47:03', '2020-03-05 00:47:03', '2021-03-05 06:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'zO1M19H2vTQCesjlMTP6xVogYeaYn17hNRpRYhLj', 'http://localhost', 1, 0, 0, '2020-03-05 00:45:27', '2020-03-05 00:45:27'),
(2, NULL, 'Laravel Password Grant Client', 'ZnfZ1PQEnJ0TLbz61uNMDx3aIVEpjxsV3aZiZ43N', 'http://localhost', 0, 1, 0, '2020-03-05 00:45:27', '2020-03-05 00:45:27'),
(3, NULL, 'Laravel Personal Access Client', 'zt6Mu9YtkjR7BYun9q3kAXAMBKGufFfUIVdemfyL', 'http://localhost', 1, 0, 0, '2020-03-05 00:45:38', '2020-03-05 00:45:38'),
(4, NULL, 'Laravel Password Grant Client', 'f1Oian3pdBKQudaY02W2jKAyB0YlQeBIasT9BXwT', 'http://localhost', 0, 1, 0, '2020-03-05 00:45:38', '2020-03-05 00:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-03-05 00:45:27', '2020-03-05 00:45:27'),
(2, 3, '2020-03-05 00:45:38', '2020-03-05 00:45:38');

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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `assignee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobCategory` int(11) NOT NULL,
  `skillName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `jobCategory`, `skillName`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dart', '2020-03-11 03:09:55', '2020-03-11 03:09:55'),
(2, 1, 'Java', '2020-03-11 03:10:12', '2020-03-11 03:10:12'),
(3, 2, 'PHP', '2020-03-11 03:10:29', '2020-03-11 03:10:29'),
(4, 2, 'Mysql', '2020-03-11 03:10:41', '2020-03-11 03:10:41'),
(5, 2, 'HTML', '2020-03-11 03:10:50', '2020-03-11 03:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `officeEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avater.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `name`, `email`, `officeEmail`, `Phone`, `department`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Anik', 'admin@gmail.com', 'super@tit.com', '01832182633', 'Software', '1583654687.jpg', '2020-03-08 02:04:47', '2020-03-08 02:04:47'),
(2, 'Anik 2', 'anik@aa.aa', 'super@t2it.com', '01832182634', 'Software', '1583654730.png', '2020-03-08 02:05:30', '2020-03-08 02:05:30'),
(3, 'MD SAMI', 'mdsami@tahasinit.com', 'mdsami@tahasinit.com', '01738340448', 'Software', '1583756173.jpg', '2020-03-09 11:16:13', '2020-03-09 11:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jhon Wick', 'jhon@ww.aa', NULL, '$2y$10$Gn0sHa.C8t9j6LAbEfLMPubH2OpT6MA6ZkL.FFxYEuUnFNcRGhtEG', NULL, '2020-03-05 00:37:58', '2020-03-05 00:37:58'),
(3, 'Amit', 'amit@tahasinit.com', NULL, '$2y$10$nKyEMDWKkjMfV6vgDvYv6u5/9KrFSsuDg/AzQ.QD6M/8gnCIQ37oC', NULL, '2020-03-08 22:31:04', '2020-03-08 22:31:04'),
(4, 'mdsami', 'mdsami@tahasinit.com', NULL, '$2y$10$nKyEMDWKkjMfV6vgDvYv6u5/9KrFSsuDg/AzQ.QD6M/8gnCIQ37oC', NULL, '2020-03-08 22:31:04', '2020-03-08 22:31:04'),
(5, 'jhon', 'jhon@aa.aa', NULL, '$2y$10$elAlAH5229LAh1I6qVIT0O9jcf/YXg3OsuIH2PeXtcsRADSr3RHsK', NULL, '2020-03-19 05:04:41', '2020-03-19 05:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyances`
--
ALTER TABLE `conveyances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_locations`
--
ALTER TABLE `job_locations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `conveyances`
--
ALTER TABLE `conveyances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_locations`
--
ALTER TABLE `job_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

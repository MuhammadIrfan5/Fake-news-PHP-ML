-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jun 11, 2021 at 09:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakenews`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_29_132423_create_news_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `news_image`, `image_name`, `image_size`, `source`, `prediction`, `created_at`, `updated_at`) VALUES
(1, 'sport to be ', 'Maiores dolore assum hello', '0', '0', '0', 'Et nihil vel in dele', 0, '2021-06-01 03:09:55', '2021-06-09 02:28:11'),
(2, 'Dolores est dolore q', 'Consequatur consequu', '0', '0', '0', 'Animi id minus ab', 0, '2021-06-08 04:12:59', '2021-06-09 02:33:35'),
(3, 'Four ways Bob Corker skewered Donald Trump', 'Image copyright Getty Images\r\nOn Sunday morning, Donald Trump went off on a Twitter tirade against a member of his own party.\r\nThis, in itself, isn\'t exactly huge news. It\'s far from the first time the president has turned his rhetorical cannons on his own ranks.\r\nThis time, however, his attacks were particularly biting and personal. He essentially called Tennessee Senator Bob Corker, the chair of the powerful Senate Foreign Relations Committee, a coward for not running for re-election.\r\nHe said Mr Corker \"begged\" for the president\'s endorsement, which he refused to give. He wrongly claimed that Mr Corker\'s support of the Iranian nuclear agreement was his only political accomplishment.\r\nUnlike some of his colleagues, Mr Corker - free from having to worry about his immediate political future - didn\'t hold his tongue.\r\nSkip Twitter post by @SenBobCorker It\'s a shame the White House has become an adult day care center. Someone obviously missed their shift this morning. ? Senator Bob Corker (@SenBobCorker) October 8, 2017 Report\r\nThat wasn\'t the end of it, though. He then spoke with the New York Times and really let the president have it. Here are four choice quotes from the Tennessee senator\'s interview with the Times and why they are particularly damning.\r\n\"I don\'t know why the president tweets out things that are not true. You know he does it, everyone knows he does it, but he does.\"\r\nYou can\'t really sugarcoat this one. Mr Corker is flat-out saying the president is a liar - and everyone knows it.\r\nThe senator, in particular, is challenging Mr Trump\'s insistence that he unsuccessfully pleaded for his endorsement, but the accusation is much broader.\r\nMr Corker and the president used to be something akin to allies. The Tennessean was on Mr Trump\'s short list for vice-president and secretary of state.\r\nImage copyright Getty Images Image caption Bob Corker at Trump campaign rally in July 2016\r\nThose days are seemingly very much over now - and it\'s not like Mr Corker is going anywhere anytime soon. Although he\'s not running for re-election, he\'ll be in the Senate, chairing a powerful committee, until January 2019.\r\nThe president\'s margin for success in that chamber is razor-thin. If Democrats can continue to stand together in opposition, he can afford to lose only two votes out of 52 Republican senators. That\'s why healthcare reform collapsed in July - and it could be bad news for tax efforts.\r\nFrom here on out, Mr Corker isn\'t going to do the president any favours.\r\n\"Look, except for a few people, the vast majority of our caucus understands what we\'re dealing with here.\"\r\nFrustration in Congress has been growing over what Republicans feel has been the president\'s inability to focus on advancing their agenda. Getting a sharply divided party to come together on plans to repeal Obamacare, reform taxes or boost infrastructure spending is challenging enough. Doing so when the president stirs up unrelated controversies on a seemingly daily basis makes things all the harder.\r\nOne of the president\'s gifts has been his ability to shake off negative stories by quickly moving on to a different subject. That worked brilliantly during his presidential campaign, but it\'s less effective during the legislative slow grind.\r\nImage copyright Getty Images Image caption Corker at the confirmation hearing for Secretary of State Rex Tillerson\r\nFor months, Republicans in Congress have been grumbling about this in the background and among themselves. Occasionally, someone like Mr McConnell will lament that the president doesn\'t understand how the Senate works.\r\nMr Corker has now stated it loud and clear. And, what\'s more, he says almost everyone agrees with him. They\'ve kept silent until now because they still hope to pass conservative legislation that the president can sign or fear Mr Trump\'s legions will back a primary challenge next year or stay home during the general election.\r\nIf that calculus ever changes - if it becomes riskier to stay silent than speak out - Mr Trump will be in real trouble.\r\n\"A lot of people think that there is some kind of \'good cop, bad cop\' act underway, but that\'s just not true.\"\r\nTime and again, Mr Trump has appeared to undercut Secretary of State Rex Tillerson and others in his administration who are attempting to use soft diplomacy to deal with a range of international crises.\r\nThe war against the Taliban in Afghanistan, Iran\'s compliance with the multinational nuclear agreement, the ongoing dispute between Qatar and its Persian Gulf neighbours, the unrest in Venezuela and, most recently, North Korea\'s continued ballistic missile tests have all been the target of the president\'s offhand remarks and Twitter invective.\r\nSome administration defenders have said this is all a part of Mr Trump\'s strategy - an updated version of the Nixon-era \"madman theory\", in which the president forces adversaries to give way because they fear an unpredictable US leader\'s actions.\r\nMr Corker isn\'t buying it. There\'s no strategy, he says, just the possibility of chaos - which he hopes Mr Trump\'s senior advisers will be able to avoid.\r\n\"I know for a fact that every single day at the White House, it\'s a situation of trying to contain him.\"\r\nThere\'s now a growing collection of John Kelly face-palm photos that serve as a testament to the chief-of-staff\'s reported frustration at dealing with the president.\r\nMr Trump goes off-script to praise torch-bearing white nationalists at a rally in Charlottesville, and Mr Kelly is captured closing his eyes and rubbing the arch of his nose, as if attempting to stave off a migraine.\r\nImage copyright Reuters Image caption White House Chief of Staff John Kelly looks on as US President Donald Trump speaks at a campaign rally\r\nThe president calls North Korean leaders \"criminals\" in a speech to the United Nations, and Mr Kelly straight-up buries his face in his hands.\r\nThe White House communications team is often left scrambling to try to explain or reframe an indelicate presidential \"joke\" or remark that directly contradicts what was until then the official administration line.\r\nEven though Mr Kelly has brought some discipline to the West Wing staff, the president still marches to the beat of his own drum - and continues to have unfettered access to his phone\'s Twitter app.\r\nBob Corker is only the latest person - politician, journalist, sports star or celebrity - to feel the mercurial president\'s uncontainable ire.', '0', '0', '0', 'http://www.bbc.com/news/world-us-canada-41419190', 0, '2021-06-08 04:14:58', '2021-06-09 02:28:47'),
(4, 'Duis magna eiusmod m', 'Est voluptatem ipsum', '0', '0', '0', 'Iusto dignissimos po', NULL, '2021-06-11 02:48:49', '2021-06-11 02:48:49');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Irfan', '03362377443', 'Eveniet error vel q', 'muhammadirfan5891@gmail.com', NULL, '$2y$10$mcQEpuEOOF3FNUptLGVSzOodc7.8pLIPdGDI7nYVxmLT6qFQF4Kgm', NULL, '2021-06-01 02:25:54', '2021-06-01 02:25:54');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `news`
--
ALTER TABLE `news`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

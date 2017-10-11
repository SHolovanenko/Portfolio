-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 11 2017 г., 14:37
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `common_infos`
--

CREATE TABLE `common_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `value_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `common_infos`
--

INSERT INTO `common_infos` (`id`, `section`, `title`, `value_ru`, `value_en`, `description`, `created_at`, `updated_at`) VALUES
(1, 'main', 'menu', 'Главная', 'Main', '', NULL, NULL),
(2, 'main', 'menu', 'Навыки', 'Skills', '', NULL, NULL),
(3, 'main', 'menu', 'Опыт', 'Experience', '', NULL, NULL),
(4, 'main', 'menu', 'Портфолио', 'Portfolio', '', NULL, NULL),
(5, 'main', 'menu', 'Контакты', 'Contacts', '', NULL, NULL),
(6, 'resume', 'button', 'Скачать резюме', 'Download CV', '', NULL, NULL),
(7, 'stories', 'title', 'Опыт', 'Expirience', '', NULL, NULL),
(8, 'portfolio', 'title', 'Портфолио', 'Portfolio', '', NULL, NULL),
(9, 'portfoio', 'subtitle', 'Свежие работы.', 'Latest projects.', '', NULL, NULL),
(10, 'portfolio', 'link', 'Показать еще', 'Show more', '', NULL, NULL),
(11, 'contacts', 'title', 'Свяжитесь со мной', 'Contact to me', '', NULL, NULL),
(12, 'contacts', 'text', 'Если Вас заинтересовала моя кандидатура, у Вас есть какие-либо предложения или пожелания, Вы можете связаться со мной через эту форму, либо по моим контактным данным: ', 'If you interesting of me, you have some propositions or wishes, you can contact to me via this form, or by my contact informations:', '', NULL, NULL),
(13, 'skills', 'subtitle', 'Уровень владения технологиями', 'Knowledge of technologies', '', NULL, NULL),
(14, 'contacts', 'form', 'Имя', 'Name', '', NULL, NULL),
(15, 'contacts', 'form', 'Тема', 'Subject', '', NULL, NULL),
(16, 'contacts', 'button', 'Отправить', 'Send', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connected_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `path`, `title`, `section`, `connected_id`, `created_at`, `updated_at`) VALUES
(17, 'C:\\xampp\\htdocs\\laravel.loc\\public\\files', 'CV_Serhii_HOLOVANENKO.pdf', 'resume', -1, '2017-09-28 11:16:14', '2017-10-10 16:57:42');

-- --------------------------------------------------------

--
-- Структура таблицы `mails`
--

CREATE TABLE `mails` (
  `id` int(10) UNSIGNED NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `mails`
--

INSERT INTO `mails` (`id`, `mail`, `created_at`, `updated_at`) VALUES
(1, 'serhii.holovanenko@gmail.com', '2017-09-14 08:00:38', '2017-10-10 17:15:42');

-- --------------------------------------------------------

--
-- Структура таблицы `main_infos`
--

CREATE TABLE `main_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `main_infos`
--

INSERT INTO `main_infos` (`id`, `firstName`, `lastName`, `profession`, `language`, `created_at`, `updated_at`) VALUES
(1, 'Sergei', 'Holovanenko', 'Web-developer', 'en', '2017-08-08 21:00:00', '2017-09-12 08:30:56'),
(2, 'Сергей', 'Голованенко', 'Веб-разработчик', 'ru', '2017-08-08 21:00:00', '2017-09-14 10:16:38');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `mail`, `subject`, `text`, `created_at`, `updated_at`) VALUES
(8, 'Сергей', 'alqweqw@mail.com', 'Invite to work', 'qwer qwr qwer qwer qwe rqwe rqwer qwr qwr wqer qw rwqe rqw qw sadf asdf asdf asdf qwerqewrwqe qr e qwdfasd asdf asd ewq tqwet qw twq dfasd af af qewtq weasdf aqwte awdf eqwaqwer qwr qwer qwer qwe rqwe rqwer qwr qwr wqer qw rwqe rqw qw sadf asdf asdf asdf qwerqewrwqe qr e qwdfasd asdf asd ewq tqwet qw twq dfasd af af qewtq weasdf aqwte awdf eqwa', '2017-10-10 10:32:27', '2017-10-10 10:32:27'),
(9, 'admin', 'alqweqw@mail.com', 'wer', 'qerqerqfasdfad af asdf asd fdas', '2017-10-10 16:53:09', '2017-10-10 16:53:09');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2017_08_09_103928_create_table_main_infos', 2),
(7, '2017_09_08_110421_create_table_skills', 3),
(8, '2017_09_08_112020_create_table_resumes', 3),
(9, '2017_09_08_112508_create_table_storys', 3),
(10, '2017_09_08_112911_create_table_portfolios', 3),
(11, '2017_09_12_135720_fix_mistake_in_stories', 4),
(12, '2017_09_14_095202_create_table_phones', 5),
(13, '2017_09_14_095237_create_table_mails', 5),
(14, '2017_09_14_095327_create_table_common_infos', 5),
(15, '2017_09_14_095444_create_table_social_networks', 5),
(16, '2017_09_26_123629_create_table_files', 6),
(17, '2017_10_05_095201_create_table_messages', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `phones`
--

CREATE TABLE `phones` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `phones`
--

INSERT INTO `phones` (`id`, `phone`, `created_at`, `updated_at`) VALUES
(1, '+38 050 848 9086', '2017-09-14 07:57:50', '2017-10-10 17:15:42');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `portfolios`
--

INSERT INTO `portfolios` (`id`, `link`, `img`, `title_ru`, `title_en`, `text_ru`, `text_en`, `created_at`, `updated_at`) VALUES
(6, 'https://github.com/SHolovanenko?tab=repositories', 'svssu.png', 'sv.ssu', 'sv.ssu', 'Дипломный проект, разработанный для университета в качестве единой централизованной системы. Предназначен для создания, администрирования и размещения голосований.', 'Diploma project designed for the university as a single centralized system. It is intended for creation, administration and placement of voting.', '2017-09-28 09:22:57', '2017-10-10 17:15:42'),
(7, 'http://sbro.co.il', 'saigbro.png', 'Saig BRO', 'Saig BRO', 'Сайт был разработан для израильской строительной компании Saig BRO на CMS Wordpress.', 'The site was developed for the Israeli construction company Saig BRO on CMS Wordpress.', '2017-09-28 09:22:57', '2017-10-10 17:15:42');

-- --------------------------------------------------------

--
-- Структура таблицы `resumes`
--

CREATE TABLE `resumes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `resumes`
--

INSERT INTO `resumes` (`id`, `title_ru`, `title_en`, `text_ru`, `text_en`, `created_at`, `updated_at`) VALUES
(3, 'Языки', 'Languages', 'PHP, SQL, Python, Javascript, HTML, CSS, Java, C++, C#; \r\n(English, Francais, Українська, Русский)', 'PHP, SQL, Python, Javascript, HTML, CSS, Java, C++, C#; \r\n(English, Francais, Українська, Русский)', '2017-09-12 10:23:13', '2017-10-10 17:15:42'),
(4, 'ТЕХНОЛОГИИ', 'TECHNOLOGIES', 'OOP, MVC pattern, Laravel, JQuery, Bootstrap, Ajax, JSON, MySQL, Git, Composer, TortoiseSVN, Modules creating for the CMSs;', 'OOP, MVC pattern, Laravel, JQuery, Bootstrap, Ajax, JSON, MySQL, Git, Composer, TortoiseSVN, Modules creating for the CMSs;', '2017-09-12 10:23:13', '2017-10-10 17:15:42'),
(5, 'CMS', 'CMS', 'Joomla, Wordpress, Drupal;', 'Joomla, Wordpress, Drupal;', '2017-09-15 05:56:44', '2017-10-10 17:15:42');

-- --------------------------------------------------------

--
-- Структура таблицы `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `skills`
--

INSERT INTO `skills` (`id`, `title_ru`, `title_en`, `value`, `created_at`, `updated_at`) VALUES
(5, 'PHP', 'PHP', 91, '2017-09-19 09:53:22', '2017-10-10 17:15:42'),
(6, 'Javascript', 'Javascript', 84, '2017-09-19 09:53:22', '2017-10-10 17:15:42'),
(7, 'SQL', 'SQL', 80, '2017-09-19 09:53:22', '2017-10-10 17:15:42'),
(8, 'HTML&CSS', 'HTML&CSS', 83, '2017-09-19 09:53:22', '2017-10-10 17:15:42'),
(9, 'Wordpress', 'Wordpress', 69, '2017-09-19 09:53:22', '2017-10-10 17:15:42'),
(10, 'Drupal', 'Drupal', 79, '2017-09-19 09:53:22', '2017-10-10 17:15:42'),
(11, 'Joomla', 'Joomla', 92, '2017-09-19 09:53:22', '2017-10-10 17:15:42'),
(12, 'Laravel', 'Laravel', 60, '2017-09-19 09:53:22', '2017-10-10 17:15:42');

-- --------------------------------------------------------

--
-- Структура таблицы `social_networks`
--

CREATE TABLE `social_networks` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `social_networks`
--

INSERT INTO `social_networks` (`id`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(6, 'https://www.facebook.com/sergei.holovanenko', 'facebook-logo.png', '2017-09-28 09:22:57', '2017-10-10 17:15:42'),
(7, 'https://plus.google.com/u/0/105989075620518241985', 'google-logo.png', '2017-09-28 09:48:34', '2017-10-10 17:15:42'),
(8, 'https://github.com/SHolovanenko', 'git-logo.png', '2017-10-10 16:57:42', '2017-10-10 17:15:42'),
(9, 'https://twitter.com/MasterBot_Lg_Ua', 'Twitter-logo.png', '2017-10-10 17:15:42', '2017-10-10 17:15:42'),
(10, 'https://vk.com/id81445428', 'vk-logo.png', '2017-10-10 17:15:42', '2017-10-10 17:15:42');

-- --------------------------------------------------------

--
-- Структура таблицы `stories`
--

CREATE TABLE `stories` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `stories`
--

INSERT INTO `stories` (`id`, `year`, `title_ru`, `title_en`, `position_ru`, `position_en`, `text_ru`, `text_en`, `created_at`, `updated_at`) VALUES
(1, '2012 - 2014', 'ВНУ ИМ. В.ДАЛЯ', 'VOLODYMYR DAHL EUNU', 'Студент', 'Student', 'Поступил в Восточноукраинский национальный университет имени В.Даля на кафедру компьютерных наук, специальности информатика.', 'Entered the East Ukrainian National University named V. Dahl at the Department of Computer Science, specialty computer science.', '2017-09-11 21:00:00', '2017-10-10 17:15:42'),
(2, '2014 - 2016', 'ДИПЛОМ БАКАЛАВРА СУМГУ', 'DIPLOMA OF BACHELOR SSU', 'Студент', 'Student', 'В течении двух лет учился в Сумском Государственном университете на кафедре компьютерных наук, специальноси информатика. Где проводил защиту диплома по теме «Веб-сервис для централизованного администрирования опросов».', 'For two years studied at the Sumy State University  in the department of computer science. Where I got a diploma on the topic \"Web service for centralized administration of polls\".', '2017-09-15 05:56:44', '2017-10-10 17:15:42'),
(3, '2015 - 2016', 'ЦБВМ СУМГУ', 'CBWM SSU', 'Back-end программист', 'Back-end programmer', 'Отдел веб-разработки при университете. В течении года работал в команде с опытными программистами над университетскими проэктами, а так же проэктами от зарубежных заказчиков.', 'Department of Web Development at the University. During the year I worked in a team with experienced programmers over university projects and projects from foreign customers.', '2017-09-15 05:56:44', '2017-10-10 17:15:42'),
(4, '2016 - 2017', 'ERASMUS+ ВО ФРАНЦИИ', 'ERASMUS+ IN FRANCE', 'Студент', 'Student', 'Участвовал в годовой программе Erasmus+ и учился в лионском университете Lyon Lumiere 2 на специальности информатика и статистика.', 'Participated in the annual program Erasmus+ where studied at the Lyon University Lyon Lumiere 2 in the specialty computer science and statistics.', '2017-09-15 05:56:44', '2017-10-10 17:15:42');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sergei', 'sergiobravos161@gmail.com', '$2y$10$yJonaGZCUfD92S/mI3uTIOBq8HHmUTIH248Ig52O8YLEzkh.UDGP2', 'lEeCVZCY9heM1KbCgXmiy35351xmLlyQk6K1qTXkmPDjWXP1FYxMNQSf75qb', '2017-09-26 08:25:02', '2017-10-10 10:29:22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `common_infos`
--
ALTER TABLE `common_infos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main_infos`
--
ALTER TABLE `main_infos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `common_infos`
--
ALTER TABLE `common_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `main_infos`
--
ALTER TABLE `main_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `menus` (`id`, `menutype_id`, `lang`, `parent`, `node`, `disabled`, `deleted_at`, `name`, `url`, `created_at`, `updated_at`, `img`) VALUES
(17, 3, 'ru', NULL, 0, 0, NULL, 'Контакты', 'contacts', NULL, NULL, ''),
(18, 3, 'ru', NULL, 0, 0, NULL, 'Статьи', 'articles.html', NULL, NULL, ''),
(19, 3, 'ru', NULL, 0, 0, NULL, 'О нас', '', NULL, NULL, ''),
(20, 4, 'ru', NULL, 0, 0, NULL, 'Образование за рубежем', '/obrazovanie_za_rubezhom.html', NULL, NULL, ''),
(21, 4, 'ru', NULL, 0, 0, NULL, 'Каникулы', '/category/holidays/', NULL, NULL, ''),
(22, 4, 'ru', NULL, 0, 0, NULL, 'Высшее образование', '/category/higher_education', NULL, NULL, ''),
(23, 4, 'ru', NULL, 0, 0, NULL, 'Среднее образование', '/category/second_education', NULL, NULL, ''),
(24, 4, 'ru', NULL, 0, 0, NULL, 'Подготовка к университету', '/category/pre-university/', NULL, NULL, ''),
(25, 4, 'ru', NULL, 0, 0, NULL, 'Бизнесменам', '/category/lang_course/', NULL, NULL, ''),
(26, 4, 'ru', NULL, 0, 0, NULL, 'Языковые курсы', '/category/language_abroad.html', NULL, NULL, ''),
(27, 5, 'ru', NULL, 0, 0, NULL, 'Каникулы', '/category/holidays/', NULL, NULL, '/img/study/holidays.png'),
(28, 5, 'ru', NULL, 0, 0, NULL, 'Высшее образование', '/category/higher_education', NULL, NULL, '/img/study/high_education.png'),
(29, 5, 'ru', NULL, 0, 0, NULL, 'Среднее образование', '/category/second_education', NULL, NULL, '/img/study/second_education.png'),
(30, 5, 'ru', NULL, 0, 0, NULL, 'Подготовка к университету', '/category/pre-university/', NULL, NULL, '/img/study/pre-university.png'),
(31, 5, 'ru', NULL, 0, 0, NULL, 'Бизнесменам', '/category/lang_course/', NULL, NULL, '/img/study/lang_course.png'),
(32, 5, 'ru', NULL, 0, 0, NULL, 'Языковые курсы', '/category/language_abroad.html', NULL, NULL, '/img/study/language_abroad.png'),
(33, 7, 'ru', NULL, 0, 0, NULL, 'STUDY BRIDGE - образование за рубежом', '/', NULL, NULL, '/img/assets/logo.jpg'),
(34, 8, 'ru', NULL, 0, 0, NULL, NULL, '/partner_zone.html', NULL, NULL, '/img/study/partners.jpg');

INSERT INTO `menus` (`id`, `menutype_id`, `lang`, `parent`, `node`, `name`, `url`) VALUES
(35, 1, 'ru', NULL, 1, 'Страны', ''),
(36, 1, 'ru', NULL, 1, 'Детям', ''),
(37, 1, 'ru', NULL, 1, 'Студентам', ''),
(38, 1, 'ru', NULL, 1, 'Профессионалам', ''),
(39, 1, 'ru', NULL, 1, 'Курсы в киеве', ''),
(40, 1, 'ru', NULL, 0, 'Статьи', '/articles/'),
(41, 1, 'ru', NULL, 1, 'О нас', ''),
(42, 1, 'ru', NULL, 0, 'Контакты', '/contacts/'),

(43, 1, 'ru', 36, 0, 'Каникулы', '/category/holidays/'),
(44, 1, 'ru', 36, 0, 'Групповые заезды', '/category/groups/'),
(45, 1, 'ru', 36, 0, 'Среднее образование', '/category/second_education/'),
(46, 1, 'ru', 37, 0, 'Высшее образование', '/category/higher_education/'),
(47, 1, 'ru', 37, 0, 'Подготовка к университету', '/category/pre-university/'),
(48, 1, 'ru', 37, 0, 'Иностранный язык за рубежем', '/category/summer_programs/'),
(49, 1, 'ru', 37, 0, 'Летние программы в университетах', '/category/summer_programs/'),
(50, 1, 'ru', 37, 0, 'Поступление в ТОП-100 (консультации)', '/category/consultation/'),
(51, 1, 'ru', 37, 0, 'Оплачиваемые стажировки', '/category/stajirovki/'),

(52, 1, 'ru', 38, 0, 'Бизнес языковые курсы', '/category/lang_course/'),
(53, 1, 'ru', 38, 0, 'Курсы для менеджеров, руководителей и персонала', '/category/top_management/'),
(54, 1, 'ru', 38, 0, 'MBA', '/category/mba/'),
(55, 1, 'ru', 38, 0, 'Специализированные курсы', '/category/special_course/'),

(56, 1, 'ru', 39, 0, 'О языковом центре Study Bridge', '/kurs-about.html'),
(57, 1, 'ru', 39, 0, 'Общий курс английского языка (General English)', '/kurs-obshii.html'),
(58, 1, 'ru', 39, 0, 'Курс бизнес английского', '/kurs-biznes.html'),
(59, 1, 'ru', 39, 0, 'Интенсивные курсы английского', '/kurs-intensiv.html'),
(60, 1, 'ru', 39, 0, 'Подготовка к международным экзаменам', '/kurs-mejdunarodnii.html'),
(61, 1, 'ru', 39, 0, 'Подготовка школьников к ЗНО (укр.)', '/kurs-zno.html'),
(62, 1, 'ru', 39, 0, 'Корпоративное обучение', '/kurs-korporativ.html'),
(63, 1, 'ru', 39, 0, 'Отдел переводов', '/kurs-perevodi2/'),

(64, 1, 'ru', 41, 0, 'Образование за рубежом', '/obrazovanie_za_rubezhom.html'),
(65, 1, 'ru', 41, 0, 'Наши услуги', '/our-service.html'),
(66, 1, 'ru', 41, 0, 'Почему мы', '/why_we.html'),
(67, 1, 'ru', 41, 0, 'Отзывы студентов', '/reviews.html'),
(68, 6, 'ru', NULL, 0, 'instagramm', 'https://www.instagram.com/study_bridge/'),
(69, 6, 'ru', NULL, 0, 'facebook', 'https://www.facebook.com/StudyBridge'),
(70, 6, 'ru', NULL, 0, 'telegram', 'https://t.me/studybridge');

INSERT INTO `menus` (`id`, `menutype_id`, `lang`, `parent`, `node`, `name`, `url`) VALUES
(NULL, '10', 'ru', NULL, '1',  NULL, 'Меню', 'admin/menu');

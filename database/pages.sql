INSERT INTO `pages` (`id`, `created_at`, `updated_at`, `parent`, `node`, `user_id`, `url`, `img`, `selected`, `disabled`, `deleted_at`) VALUES
(1, '2020-02-29 02:10:19', '2020-02-29 02:10:19', NULL, 1, 1, 'pages', NULL, 0, 0, NULL),
(2, '2020-02-29 02:10:19', '2020-02-29 02:10:19', 1, 1, 1, '', NULL, 0, 0, NULL);
INSERT INTO `pages_langs` (`id`, `lang`, `created_at`, `updated_at`, `name`, `description`, `text`, `meta_title`, `meta_description`, `meta_keywords`, `img`, `img_alt`) VALUES
(1, 'ru', '2020-02-29 02:10:19', '2020-02-29 02:10:19', 'Pages', NULL, NULL, 'Pages', '', '', '', ''),
(2, 'ru', '2020-02-29 02:10:19', '2020-02-29 02:10:19', 'Получить консультацию', NULL, '<div class=\"consult\">Получить консультацию</div>', '', '', '', '', '');

<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z{;A)8mU0|O(1{GF7{nfg)ZF`k5mqTSYjMK_gg<CR7YE.sM!E.w=j`SF3%q/K6+Y' );
define( 'SECURE_AUTH_KEY',  '[YIK?,3@O7-)%&.rTwr={jMsD~u^ >BiORi~Q6x*w$U@b04/b_n~lHTJ@`YgY/r<' );
define( 'LOGGED_IN_KEY',    'Y%?GcbRqwuPpiKp|2%oupF]bLn>5+J]ovm;6)/E-ztV:>79S:7g{>7iE#RPdos_K' );
define( 'NONCE_KEY',        '!Ady%WaZa%_=<6gJ5mBS|RU|+E.[1S 7?61Z|THmyHX-W}-7q}<2gC@nMpcQ3y]4' );
define( 'AUTH_SALT',        'b$IMo.G~GfLcRdwd{O}1bmvo{!@3ch U!Z:JetGgs&v ni,SnD,K?/wk(=vXw[c$' );
define( 'SECURE_AUTH_SALT', 'r0Jdh3GTQ8S|Dkl40r6rU{Cyfkyumq~ &9r5b:;{?4GmwCFJdE^;]_[-OiOGvP[1' );
define( 'LOGGED_IN_SALT',   'D.%L51AEi_vDnNZ Rs&HEHNni~pji?<ok^8,2[[9o?tQ8(b(c#(E)},cQZe=[HZB' );
define( 'NONCE_SALT',       '_BBFO4&%uR 166CcWXv0lH)6OLUP^n<7m&v0gX|o0GR(JRLDx^9u;;dYb4MV_201' );

/**#@-*/

define('FS_METHOD','direct');

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

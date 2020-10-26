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
define( 'DB_USER', 'ndreadno' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ndreadno' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'mysql-service' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'O*oH}l!0*aVd6po*<q-XQ-IiWUqIKN=R,W#>VkF]JeAF#$1?J:bkmb}GCPy3DxCl');
define('SECURE_AUTH_KEY',  ' MAkm0.@kD9xME~+i2eq|8+~F_I!%|<p0xrCEG_|1K4b@-)u&,Nt%p*p.-}mdc/Q');
define('LOGGED_IN_KEY',    '-7+YGB`+dud+Fq~l`@_xK6?UT@B,hFeI_|K+mFf?C&kuMOiWPL$UWJ_cgHJ0OuhJ');
define('NONCE_KEY',        '/L+p-%6yq337LH,k*lP=-A?-w$^ZVhJv+_$!.(FU@ux32v@Z[$.+d 8/s$!QjGI|');
define('AUTH_SALT',        'X=-r|||LawI!hHlWx=x8ks~Koi.+ s-h-1:u_<ZW/1W+;>_gw`Ki>]E~J0ANJ0%9');
define('SECURE_AUTH_SALT', ')I*%c} +2L%(M>wC6!m?AC@. |J-q8b{H6Ci 2|Ih|sED[*g%tY}x5 2}*BR#U6.');
define('LOGGED_IN_SALT',   '^^&7xfyV6}MK^*N;vMJT8vzTf7P~vf8*D=zAm^/xnzwdTK`D+h}$4wt[Fp7Dkpa9');
define('NONCE_SALT',       '1@FsePG?7fe3)8Ht/$SmKU||mB7|-bf]4_2h@))nN++N_|s}9P5F-6G~P2em]3w@');

/**#@-*/

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

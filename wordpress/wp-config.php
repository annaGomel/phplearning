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
define( 'AUTH_KEY',         '?_CQeaq?Svt=q{SphMw[epEIf=P$~vEi4Y HHaUNTy$172raaGhc`dl)*ptHr+&,' );
define( 'SECURE_AUTH_KEY',  'n!Hqr*oH>0=KjN@-EuXl,V+vy*,Y^EwLbPJ(*}3+4lHti-LIbyZ$8{-#Xvd->cWb' );
define( 'LOGGED_IN_KEY',    'SEb7KhRrM75|%`^w1*-y!j~Rmzn/zFQ*2_3sb1#*HX[h6:X*!Q&6.a8H19iEBA9t' );
define( 'NONCE_KEY',        '-XI.<pC!AfnVk#m>7 /Z#6$s0dR%OH0xR&GfN]s_|IJ|~u8>ImEOdI8Xha+;rsRg' );
define( 'AUTH_SALT',        '`Z<W;_1!(hE={=&eOE1;M@Rh@E#&nTN@Gl5^{Z-o4K^znyAHk;{I{mRwTju5+s@i' );
define( 'SECURE_AUTH_SALT', 'b7_C8Ftz$tG=Ume^d3`*_ibN~Quv6fge0WCa|al=~L3!a#dnz.@IFxE {:.!ZR)Z' );
define( 'LOGGED_IN_SALT',   'xF7$G?&^{ZJ-rwsLvL9<KP.fH6ZxBBU;]&]y:f&YuB-~0^I^chTCKVl&tJ[Hbd6n' );
define( 'NONCE_SALT',       'k:IX^3?V/^{N#3y6cFZ?(wWS8jMn_1]^Y.2Frk1Y{pqZ]!>)]N-6A&|]0{g:T`hl' );

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

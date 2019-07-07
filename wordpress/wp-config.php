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
<<<<<<< HEAD
define( 'AUTH_KEY',         '?_CQeaq?Svt=q{SphMw[epEIf=P$~vEi4Y HHaUNTy$172raaGhc`dl)*ptHr+&,' );
define( 'SECURE_AUTH_KEY',  'n!Hqr*oH>0=KjN@-EuXl,V+vy*,Y^EwLbPJ(*}3+4lHti-LIbyZ$8{-#Xvd->cWb' );
define( 'LOGGED_IN_KEY',    'SEb7KhRrM75|%`^w1*-y!j~Rmzn/zFQ*2_3sb1#*HX[h6:X*!Q&6.a8H19iEBA9t' );
define( 'NONCE_KEY',        '-XI.<pC!AfnVk#m>7 /Z#6$s0dR%OH0xR&GfN]s_|IJ|~u8>ImEOdI8Xha+;rsRg' );
define( 'AUTH_SALT',        '`Z<W;_1!(hE={=&eOE1;M@Rh@E#&nTN@Gl5^{Z-o4K^znyAHk;{I{mRwTju5+s@i' );
define( 'SECURE_AUTH_SALT', 'b7_C8Ftz$tG=Ume^d3`*_ibN~Quv6fge0WCa|al=~L3!a#dnz.@IFxE {:.!ZR)Z' );
define( 'LOGGED_IN_SALT',   'xF7$G?&^{ZJ-rwsLvL9<KP.fH6ZxBBU;]&]y:f&YuB-~0^I^chTCKVl&tJ[Hbd6n' );
define( 'NONCE_SALT',       'k:IX^3?V/^{N#3y6cFZ?(wWS8jMn_1]^Y.2Frk1Y{pqZ]!>)]N-6A&|]0{g:T`hl' );
=======
define( 'AUTH_KEY',         'Ts[kH]mflY|[d:V*u+&fZTae 8Muaa;B_j4:r(<ZHQE_!I;W.pq_~Ua h>oXPS84' );
define( 'SECURE_AUTH_KEY',  'DKpI^6Z$]qd`|Jb:<xq)^F@/,6AL+,bSqx^4gHqnQY,~|Uz:6eQdnjvMDv[hax*!' );
define( 'LOGGED_IN_KEY',    '(VeU]DAK,to0Y4&it2ZbV{Xy(v1F&S$)706kBKNT)w8-(_`xp5WC}A3QC@D2p{&n' );
define( 'NONCE_KEY',        't%JZK-,%Gv@=3LR=HthBu}V.*^`}/J`d`_z&5;tE+Bk3kc*_1V(:c-tx`xn;2fU}' );
define( 'AUTH_SALT',        't^#=Ysr%<~G!1#Px6.^8>h$PL3E?mYb&9L}j$tJK%pG[+axYP^_x86m~2*D(Ne!1' );
define( 'SECURE_AUTH_SALT', 'EfcDu4<ew##8!K.d3eDd2XT:h-!u|s00A2-m[(<(*1]pp^rhlTZx=&^7eJm/>0RR' );
define( 'LOGGED_IN_SALT',   '>`AwvUTX<DR6.jt]=}Y*3`2p[~(NFiSiFFhS9!ue(d#z2r?4bJlY#$Ih#Vjw_REm' );
define( 'NONCE_SALT',       'm&1P]XaX`Tx>Q0atEf^uR4A)Eh$InAR0n+&y~-3F=,$KBKhz2 3iYc{VD~]+4($4' );
>>>>>>> b4a78ce552c483ffa3cda5d3caa4864160320425

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

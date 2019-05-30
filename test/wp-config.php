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
define( 'DB_NAME', 'studio' );

/** Имя пользователя MySQL */
define( 'DB_USER', '55potolkov' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'djdjxrtt12' );

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
define( 'AUTH_KEY',         '9WL,C%(_JiGDOx^>1*@5mjh^`.#S(yl&%uS,537tJnaB(1/1u:<h]1!J*BEWpdDr' );
define( 'SECURE_AUTH_KEY',  '6+kNIq}-:$[PS?F%Y,^*H5A8k6FgUeb1v~jaUz79_1n2:1#y.c#5h=`@84+{4}s{' );
define( 'LOGGED_IN_KEY',    '75dP)lwz[,;9C<ARzos3T>Y+w4.E<oW#G]X6cXRQ8(0_9VjMZw1=$5A`%m%c5!tf' );
define( 'NONCE_KEY',        '7NNNb2o|EwcPc;(Cr[e^Ez`>c>=`QA*1Q:F92;SuK;+;M>^g&X3,qr9&,:ofch /' );
define( 'AUTH_SALT',        '8O?d,wfLvuHLS9Sx><=IJRyWwmojzvO5.kkD9Nn7}FkfU]|(n%d*{AHX<]59?}xs' );
define( 'SECURE_AUTH_SALT', '-tO#8iI=UTkTXVY|<ryn(3z#,X*~/xzZ>~eOBY#S?a2Mi(&.]MB+ZC;(.2Fj BOM' );
define( 'LOGGED_IN_SALT',   'EW(&EjoA$*JA*M|AOdE5%0JP|}@Frlf)qfDUz<OQq~T>9pb,bPq>>sy+vb1=NciE' );
define( 'NONCE_SALT',       'M:qj6EwJK^jO#Lw^PzDLb~$S~k:nxAHB-<HU=c</]> tOK4L3@lI4/M0% QbfT=[' );

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

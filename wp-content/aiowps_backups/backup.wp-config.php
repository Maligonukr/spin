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
define( 'DB_NAME', 'spin' );

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
define( 'AUTH_KEY',         'O]]E$:WdE&`AQ+KyX/&)c!35O)G<w|N4s+mRfxV+oKxx~:2q6Yl?Ei~X]W G5[?,' );
define( 'SECURE_AUTH_KEY',  '71Bd[P#w(aTnnT3@U|Duv0S  2$4i_GwuW<0tZew9Jd+vB0EGN_~UZgiBeNf%z ~' );
define( 'LOGGED_IN_KEY',    '#+~)uUnF2@)`z)CL&.#8^HxDhC=SUdYT :]${0sb:=}?hPobL/bzBYsz}Z/r}W5E' );
define( 'NONCE_KEY',        ';PO*kX**5V6{T #0qN3}<!)@Au!22P4)R$_R/&H8T/,}C82MmW/iXZ3vM.C_2>p5' );
define( 'AUTH_SALT',        'kX kiU`@bsj.G0R F%W#g:F{$$mH#{lkczh8!igdXL.7r{n0Dw5 lo-jV^#5eeEL' );
define( 'SECURE_AUTH_SALT', 'hlS8:=(7{^*!On*lNFm/JKxS8J+{Vu:a{Jrr@B?<l.zf1^pq6L$]TDBN{::>So/<' );
define( 'LOGGED_IN_SALT',   '[!H7bO*5:nOyU/T-T)-/MZ<ft=]}kozHoq9B9YE/G#uJk0o|k5`#Ic?n|MOi0/Ni' );
define( 'NONCE_SALT',       ',W/Sr@py#Pgb_R%=k`LV37.~-GZbO+cahPC`hi%LEtcnIrH*k1&QX2=#$}uzN~+5' );

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

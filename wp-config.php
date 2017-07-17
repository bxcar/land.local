<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'landing');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{.&,km&`:H?Onv{D>x6=J+VphAsKTY?$QIApZKSs>DM}F@F<<~3~at=wkX)WlMa@');
define('SECURE_AUTH_KEY',  '(Wg`ak2so$=F48VdMLYg>Qhmg; ,smbS@=>7P%4)bwIO$4md. $lRQ-1; mW,3b)');
define('LOGGED_IN_KEY',    '(8K:F<#>qu[!K&(Q5z=4-tG5il0R^Oa_R=wlJv5k9VYK2aP]aRFP#;:JXmb{J$kS');
define('NONCE_KEY',        'l*DgNx tro9U=oDo)m>v/)gf6`)ySG7N{@rE)_(CoW]bCZHr5>P&p>7Yi!KReyEb');
define('AUTH_SALT',        'e?QJ~VK2z#X.R!)jtg:@(-ck@*`F)3*~plIvqzB4TcJ}*]ccDvKUje}}`xEB0+tU');
define('SECURE_AUTH_SALT', 'ohHG[4;ChP0:n<j1f JDE-WTQ[@AQl7YteBQl{%:#X4wh99B0B|1xdtdl#dj$T,2');
define('LOGGED_IN_SALT',   'FF!L:br;YPIdJpz][MIj>XCYpMu{5BL}i<~[/tI%eoP?^@K1D^*B!w)Z?p{vFK+p');
define('NONCE_SALT',       'N2!Q(M^fBZyA}4xG27-R`6+s<@KDF%pH!TO`+dxo8s<,OrV^nh&+v0gI2>K3`sQz');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

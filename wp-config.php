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

//Установка плагинов для локальных серверов с интернета
define('FS_METHOD', 'direct');

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'woo');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'djuice');

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
define('AUTH_KEY',         'L~OG.[+TDv?oSF#oY&gD_bDN@OK|U_;2pY*.X,]6H]DXc[)N9s{6<#JOsfx,VmAf');
define('SECURE_AUTH_KEY',  'oZ=0++lI$XA3TB0v4 I.3Nxh_#D=U6QhXb*1Q-4,dntKe[}*G3sn1HNxHY+{4+_C');
define('LOGGED_IN_KEY',    'DC>jt|(YU.`c9-Mu}}I/%GQ2)+CX7w]oAaBQw}r!-67Lt)u.LkDOKY={L*vY~$vF');
define('NONCE_KEY',        '54B,T,BI#&Wpn_S>9i>fB{(SWkc7Knc}k|biFeLQ$z,~+/tr_f:Clti6j{{%rVIh');
define('AUTH_SALT',        'AnhTGIi1ze;:_7Teu1Wb,l%c3/_z#f+M#:zKWt3hUNz%*tp5Wy/0RO#sBY~}U/# ');
define('SECURE_AUTH_SALT', 'sDh`19/eHW0(894Z*,IAl@>E#/LK<?WOAMVJ8TG%,,~YS?-TYmNIYb#u_;FAG }.');
define('LOGGED_IN_SALT',   'pc_$TqmGX-` gbZN.~} (GsJz=YbLiA;03~Q[#REc ,~8&D*S)rg*=@0-hCfG&+:');
define('NONCE_SALT',       'JI%Ti0m8^?<?E*JJ/WD{@2CA;],6h[NgbCK$mQ#wfJ<T8Q|>ZXwcbt]JiUo89-qf');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'woo_';

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

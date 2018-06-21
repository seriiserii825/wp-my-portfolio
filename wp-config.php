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
define('DB_NAME', 'my-portfolio');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '<vU0dS])1>w^V;QIPGDQVu>9g>far<ttay{gzX>#&}<Nj-r97ytANO~|ZV/TYakM');
define('SECURE_AUTH_KEY',  'i^.}9F8P+XQ0a`{y?gj0rpJD}[tcs=/$xH!! NM3*41KFxrBv??-!Ng/[E<;hrq*');
define('LOGGED_IN_KEY',    '+MjIyGbyN~)0N-#Cuq.w(KTe{+wJT)Mk(~L&ur6hYFc;z;=ej50|FeUBUJTvr6BG');
define('NONCE_KEY',        'qJ.:Z`}@]+#N2H7?PtX-o#`;r~G*Hvd[%PUn^$jTHFJ^D.&bCa2}#/Ck7HyOFh$5');
define('AUTH_SALT',        'X!72V*b!+MSAAQEKP>?L %k@y_01eI=2~q`V2:mOR!6gP[brP@YXO0b91F Qz1P<');
define('SECURE_AUTH_SALT', '^bpPilvZs|wB46E$ipF+8[C)g<66|oJ3e#7uiv#4j$hjFS@Jd wio3ttAlj1[TpT');
define('LOGGED_IN_SALT',   'czw1#YU$7LbG<M3!06AIOVw%e+`Gr-Y$&K_Ur [GYgb25;eb)OTTPvNbUEcpQ:4.');
define('NONCE_SALT',       '<NeP=<aO4xQ>K/u15hBQ/HWU6/Yc^f.OKl?!nF&.Y8-GWX]2Z&wWdTDmhwu]&S~Z');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

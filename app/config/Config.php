<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
define('ENVIRONMENT', 'development');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

/**
 * Configuration for: URL
 * Here we auto-detect your applications URL and the potential sub-folder. Works perfectly on most servers and in local
 * development environments (like WAMP, MAMP, etc.). Don't touch this unless you know what you do.
 *
 * URL_PUBLIC_FOLDER:
 * The folder that is visible to public, users will only have access to that folder so nobody can have a look into
 * "/application" or other folder inside your application or call any other .php file than index.php inside "/public".
 *
 * URL_PROTOCOL:
 * The protocol. Don't change unless you know exactly what you do.
 *
 * URL_DOMAIN:
 * The domain. Don't change unless you know exactly what you do.
 * If your project runs with http and https, change to '//'
 *
 * URL_SUB_FOLDER:
 * The sub-folder. Leave it like it is, even if you don't use a sub-folder (then this will be just "/").
 *
 * URL:
 * The final, auto-detected URL (build via the segments above). If you don't want to use auto-detection,
 * then replace this line with full URL (and sub-folder) and a trailing slash.
 */

define('miz_default_controller', 'HomeController');

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'databasename');
define('DB_USER', 'root');
define('DB_PASS', 'secret');
define('DB_CHARSET', 'utf8');

define('CSRFP_TOKEN_NAME', 'mizuki_nano');
/*
0 Send 403, Forbidden Header
1 Strip the POST/GET query and forward the request! unset($_POST)
2 Redirect to custom error page mentioned in errorRedirectionPage
3 Show custom error message to user, mentioned in customErrorMessage
4 Send 500, Internal Server Error header
*/
define('CSRFP_FAILEDAUTHACTION_GET', '2');
define('CSRFP_FAILEDAUTHACTION_POST', '2');
define('CSRFP_CUSTOMERRORMESSAGE', '');
define('CSRFP_ERRORREDIRECTIONPAGE', URL . 'error?note=403 Access Forbidden by CSRFProtector');
define('CSRFP_JSURL', URL . 'assets/vendor/owasp/csrf-protector-php/js/csrfprotector.js');
define('CSRFP_TOKENLENGTH', '64');
define('CSRFP_COOKIECONFIG_PATH', '');
define('CSRFP_COOKIECONFIG_DOMAIN', '');
define('CSRFP_COOKIECONFIG_SECURE', false);
define('CSRFP_DISABLEDJAVASCRIPTMESSAGE', 'This site attempts to protect users against <a href=\"https://www.owasp.org/index.php/Cross-Site_Request_Forgery_%28CSRF%29\">
Cross-Site Request Forgeries </a> attacks. In order to do so, you must have JavaScript enabled in your web browser otherwise this site will fail to work correctly for you.
 See details of your web browser for how to enable JavaScript.');

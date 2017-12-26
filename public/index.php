<?php


define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

// This is the auto-loader for Composer-dependencies (to load tools into your project).
require ROOT . 'vendor/autoload.php';

// load application config (error reporting etc.)
require APP . 'config/Config.php';
require APP . 'libs/Helper.php';

include_once ROOT .'vendor/owasp/csrf-protector-php/libs/csrf/csrfprotector.php';

csrfProtector::init();

use Miz\Engine\Application;


// start the application
$app = new Application();

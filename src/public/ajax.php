<?php

use App\Core\Common;

define('IN_LOGIN', true);
define('XGP_ROOT', realpath(dirname(__DIR__)) . DIRECTORY_SEPARATOR);

require XGP_ROOT . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'Common.php';

$system = new Common();
$system->bootUp('home');

if (isset($_GET['content'])) {
    $file_name = XGP_ROOT . AJAX_PATH . $_GET['content'] . '.php';

    if (file_exists($file_name)) {
        include $file_name;

        $class_name = 'App\Controllers\Ajax\\' . ucfirst($_GET['content']);

        (new $class_name())->index();
    }
}

<?php


define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]). 'src/');
define('BASEPATH', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));


use MVC\Config\core;
use MVC\Router;
use MVC\Request;
use MVC\Dispatcher;

require BASEPATH . '/vendor/autoload.php';

// require(ROOT . 'Config/core.php');

// require(ROOT . 'router.php');
// require(ROOT . 'request.php');
// require(ROOT . 'dispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();

?>
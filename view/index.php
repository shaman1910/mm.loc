<?php
// front controller

// 1. общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

// 2. Подключение файлов

define('ROOT', dirname(__FILE__ ,2));

require_once(ROOT.'/components/router.php');
require_once(ROOT.'/components/Db.php');
// 3. установка соеденения с БД




// 4. вызов router

$router = new Router();
$router->run();

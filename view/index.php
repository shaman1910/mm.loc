<?php
// front controller


// 1. общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

// 2. Подключение файлов

require(__DIR__ . '/../components/router.php');

// 3. установка соеденения с БД


// 4. вызов router

$router = new Router();
$router->run();

<?php

class Router
{

	private $routes;


	// Присваиваем переменной $routesPath все роуты из конфига
	public function __construct()
	{

        $routesPath = __DIR__ . '/../config/routes.php';
        $this->routes = include ($routesPath);
	}

    // Возврашаем строку URI

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
        return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

	public function run()
	{

	    // Получаем строку запроса
        $uri = $this->getURI();

        //проверяем наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {

            //сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)){

                // Определить какой контроллер и экшн отбабатывают запрос

                $segments = explode('/', $path);


                $controllerName = array_shift($segments).'Controller';

                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));
                echo "$actionName <br>";
                echo $controllerName;
            }

        }


        // если совпадает то определить какой экшн и контроллер обрабатывают запрос


        // Создать обьект, вызвать метод (т.е. экшн)


	}
}
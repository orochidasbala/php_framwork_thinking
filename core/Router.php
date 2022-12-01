<?php
class Router
{
    public $routes = [
        "GET" => [],
        "POST" => []
    ];
    public function register($routes)
    {
        $this->routes = $routes;
    }
    public static function load($routeFile)
    {
        $router = new Router;
        require $routeFile;
        return $router;
    }

    public function get($uri, $controller) {
        return $this->routes["GET"][$uri] = $controller;
    }
    public function post($uri, $controller) {
        return $this->routes["POST"][$uri] = $controller;
    }
    public function direct($uri, $method)
    {
        if (!array_key_exists($uri, $this->routes[$method])) {
            die("404 Page Not Found");    
        } 
        $route = $this->routes[$method][$uri];
        // dd($route);
        $this->callMethod($route[0],$route[1]);
    }

    public function callMethod($class, $method) {
        $class = new $class;
        $class->$method();
    }
}

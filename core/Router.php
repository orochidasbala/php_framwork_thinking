<?php
class Router
{
    protected $routes = [];
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
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        } else {
            echo "Error occuring in the routes system";
        }
    }
}

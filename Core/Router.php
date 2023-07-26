<?php

namespace Core;

class Router
{
    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        // $this->routes[] = compact('method', 'uri', 'controller');
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require_once base_path($route['controller']);
            }
        }
        $this->abort();
    }

    protected function abort($statusCode = 404)
    {
        http_response_code($statusCode);
        require_once base_path("views/$statusCode.php");
        die();
    }
}



// function routeToController($uri, $routes)
// {
//     if (array_key_exists($uri, $routes)) {
//         require_once base_path($routes[$uri]);
//     } else {
//         abort();
//     }
// }

// function abort($statusCode = 404)
// {
//     http_response_code($statusCode);
//     require_once base_path("views/$statusCode.php");
//     die();
// }

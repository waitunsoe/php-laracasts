<?php

namespace Core;

use Core\Middleware\Auth;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

class Router
{
    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        // $this->routes[] = compact('method', 'uri', 'controller');
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'middleware' => null
        ];
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                //apply the middleware

                // if ($route['middleware'] === 'guest') {
                //     // if ($_SESSION['user'] ?? false) {
                //     //     header('location: /');
                //     //     exit();
                //     // }

                //     (new Guest)->handle();
                // }

                // if ($route['middleware'] === 'auth') {
                //     // if (!$_SESSION['user'] ?? false) {
                //     //     header('location: /');
                //     //     exit();
                //     // }

                //     (new Auth)->handle();

                // }

                if ($route['middleware']) {
                    // $middleware = Middleware::MAP[$route['middleware']];
                    // (new $middleware)->handle();
                    Middleware::resolve($route['middleware']);
                }

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

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
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

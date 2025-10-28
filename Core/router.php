<?php

namespace Core;

class Router
{
    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }
    public function get($uri, $controller)
    {
        $this->add('GET', $uri, controller: $controller);
    }
    public function post($uri, $controller)
    {
        $this->add('POST', $uri, controller: $controller);
    }
    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, controller: $controller);
    }
    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, controller: $controller);
    }
    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, controller: $controller);
    }


    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require basePath($route['controller']);
            }
        }
        $this->abort();
    }
    protected function abort($code = 404)
    {
        http_response_code($code);
        require basePath("views/{$code}.php");
        die();
    }
}

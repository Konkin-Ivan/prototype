<?php

namespace Core;

use Core\Middleware\Authenticated;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

class Router
{
    protected array $routes = [];

    public function add($method, $uri, $controller): static
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];

        return $this;
    }

    public function get($uri, $controller): static
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller): static
    {
        return $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller): static
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller): static
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller): static
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function only($key): static
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    /**
     * @throws \Exception
     */
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
            Middleware::resolve($route['middleware']);

                return require_once base_path('Http/controllers/' . $route['controller']);
            }
        }

        $this->abort();
    }

    public function previousUrl(): mixed
    {
        return $_SERVER['HTTP_REFERER'];
    }

    protected function abort($code = 404): void
    {
        http_response_code($code);

        require base_path("templates/{$code}.php");

        die();
    }
}

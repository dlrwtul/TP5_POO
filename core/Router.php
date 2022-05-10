<?php 
namespace App\core;

class Router {
    private static array $routes;

    public static function route($uri):array {
        $uri = explode("\\",$_SERVER['REQUEST_URI']);
        unset($uri[0]);
        return array_values($uri);
    }
}
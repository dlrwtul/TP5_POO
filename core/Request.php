<?php 
namespace App\core;

class Request {

    public function getUri():array {
        $uri = explode("/",$_SERVER['REQUEST_URI']);
        unset($uri[0]);
        return array_values($uri);
    }

    public function isGet()
    {
        return $_SERVER['REQUEST_METHOD'] == "GET";
    }

    public function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }
}
<?php 
namespace App\core;
use App\config\Constantes;

class Router {
    private array $routes = [];
    private Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function route(string $uri,array $actions) {
        $this->routes[$uri]=$actions;   
    }

    public function resolve()
    {
        $uri = $this->request->getUri()[0];
        if (isset($this->routes[$uri])) {
            Constantes::dd($this->routes[$uri]);
            return true;
        } else {
            throw new NotFoundException();
        }
    }
}
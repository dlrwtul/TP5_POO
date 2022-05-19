<?php 
namespace App\core;

use App\controllers\SecurityController;

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
        //$uri = $this->request->getUri()[0];
        $uri0 = $this->request->getUri();
        $uri = end($uri0);
        if (isset($this->routes[$uri])) {
            $info = $this->routes[$uri];
            [$class,$method] = $info;
            if (class_exists($class) && method_exists($class,$method)) {
                $objectInstance = new $class;
                call_user_func(array($objectInstance,$method));
            } else {
                throw new NotFoundException();
            }
        } else {
            SecurityController::render('accueil.html.php','securite','login.html.php');
            throw new NotFoundException();
        }
    }
}
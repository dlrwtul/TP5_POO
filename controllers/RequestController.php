<?php
namespace App\controllers;

use App\core\Role;
use App\core\Request;
use App\core\Session;
use App\core\Constantes;
use App\core\NotFoundException;

class RequestController {

    public Request $request;
    public Session $session;
    public static $content_for_view;

    public function __construct() {
        $this->request = new Request();
        $this->session = new Session();
    }

    public static function render($accueil,$folder,$file){
        ob_start();
        require_once(Constantes::cheminDossier('templates',$folder,$file));
        self::$content_for_view = ob_get_clean();
        require_once(Constantes::cheminDossier('templates','user',$accueil));
    }

    public static function redirect(string $route = '') {
        header('location:'.Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR.$route);
    }

}
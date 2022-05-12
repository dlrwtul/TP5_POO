<?php
namespace App\controllers;

use App\core\Constantes;
use App\core\Request;

class RequestController {

    public Request $request;
    public static $content_for_view;

    public function __construct() {
        $this->request = new Request();
    }

    public static function render($folder,$file){
        ob_start();
        require_once(Constantes::cheminDossier('templates',$folder,$file));
        self::$content_for_view = ob_get_clean();
        require_once(Constantes::cheminDossier('templates','user','accueil.html.php'));
    }

    public static function redirect(string $route = '') {
        header('location:'.Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR.$route);
    }
}
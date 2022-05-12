<?php
use App\core\Constantes;
require_once(Constantes::cheminDossier('templates','include','header.html.php'));

echo self::$content_for_view;

require_once(Constantes::cheminDossier('templates','include','footer.html.php'));
?>
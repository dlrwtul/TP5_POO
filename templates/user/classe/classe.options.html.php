<?php

use App\core\Constantes;
use App\controllers\RequestController;

?>

<div class="container flex justify-center items-center">
    <div class="card m-2 h-1/3" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Creer Classe</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="<?php RequestController::render('accueil.user.html.php','user','creer.classe.html.php'); ?>" class="btn btn-secondary">Ajouter</a>
    </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Lister Classe</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR.'lister-classe' ?>" class="btn btn-secondary">Lister</a>
    </div>
    </div>
</div>
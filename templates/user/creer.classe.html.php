<?php

use App\core\Constantes;

?>

<div class="container w-full h-screen p-5">
    <h2 class="pb-10 text-3xl">Creer Classe</h2>
    <form class="row g-3 needs-validation" action="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."creer-classe" ?>" method="POST" action="" novalidate>
        <div class="col-md-4 position-relative">
            <label for="libelle" class="form-label">Nom de classe</label>
            <input type="text" name="libelle" class="form-control" id="libelle" value="" required>
            <div class="valid-tooltip">
            saisie valide!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="niveau" class="form-label">niveau</label>
            <input type="text" name="niveau" class="form-control" id="niveau" value="" required>
            <div class="valid-tooltip">
            saisie valide!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="filiere" class="form-label">filiere</label>
            <input type="text" name="filiere" class="form-control" id="filiere" value="" required>
            <div class="valid-tooltip">
            saisie valide!
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">creer classe</button>
        </div>
    </form>
</div>
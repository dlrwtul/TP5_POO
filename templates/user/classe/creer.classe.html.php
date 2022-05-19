<?php

use App\core\Constantes;

?>

<div class="container w-full h-screen p-5">
    <form class="row g-3 needs-validation flex flex-col w-full border-4 border-blue-700 p-5 rounded-xl" action="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."creer-classe" ?>" method="POST" novalidate>
        <div class="col-md-4 position-relative my-3">
            <label for="libelle" class="form-label">Nom de classe</label>
            <input type="text" name="libelle" class="form-control rounded" id="libelle" value="" required>
            <div class="valid-tooltip">
            saisie valide!
            </div>
            <div class="invalid-tooltip">
            Veilleur saisir un nom de classe correct!
            </div>
        </div>
        <div class="col-md-4 position-relative my-3">
            <label for="niveau" class="form-label">Niveau</label>
            <input type="text" name="niveau" class="form-control rounded" id="niveau" value="" required>
            <div class="valid-tooltip">
            saisie valide!
            </div>
            <div class="invalid-tooltip">
            Veilleur saisir un niveau correct!
            </div>
        </div>
        <div class="col-md-4 position-relative my-3">
            <label for="filiere" class="form-label">filiere</label>
            <input type="text" name="filiere" class="form-control rounded" id="filiere" value="" required>
            <div class="valid-tooltip">
            saisie valide!
            </div>
            <div class="invalid-tooltip">
            Veilleur saisir une filiere correcte!
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary bg-blue-700" type="submit">creer classe</button>
        </div>
    </form>
</div>
<?php

use App\core\Constantes;
use App\models\Classe;
use App\models\Module;

$classes = Classe::findAll();
$modules = Module::findAll();
?>
<div class="container h-96 w-full flex flex-col justify-center items-center mt-52">
    <form class="row g-3 needs-validation w-full p-4 border-4 flex flex-col justify-center items-center rounded-2xl shadow-cool-gray-900" action="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."ajouter-professeur" ?>" method="POST" novalidate>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Prenom et Nom</label>
            <input type="text" class="form-control" id="validationTooltip01" name="nomComplet"  value="" required>
            <div class="valid-tooltip">
            Champ valide!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Grade</label>
            <input type="text" class="form-control" id="validationTooltip02" name="grade" value="" required>
            <div class="valid-tooltip">
            Champ valide!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="classesprofesseur" class="form-label">Affecter des classes</label>
            <select data-placeholder="Affecter des classe au professeur" id="classesprofesseur" multiple class="chosen-select form-control border-4" name="classesprofesseur[]" required >
                <option value=""></option>
                <?php 
                    foreach ($classes as $key => $classe) {
                        $libelle = $classe->libelle;
                        echo "<option value='".$libelle."'>".$libelle."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-md-4 position-relative">
            <label for="modulesprofesseur" class="form-label">Affecter des modules</label>
            <select data-placeholder="Affecter des modules au professeur" id="modulesprofesseur" multiple class="chosen-select form-control" name="modulesprofesseur[]" >
                <option value=""></option>
                <?php 
                    foreach ($modules as $key => $module) {
                        $libelle = $module->libelle;
                        echo "<option value='".$libelle."'>".$libelle."</option>";
                    }
                ?>
            </select>
        </div>
        
        <div class="w-20">
            <button class="btn btn-primary bg-blue-600 text" type="submit">Ajouter</button>
        </div>
    </form>
</div>
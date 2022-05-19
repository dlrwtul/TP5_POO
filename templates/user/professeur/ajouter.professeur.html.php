<?php

use App\core\Constantes;

?>
<div class="container h-96 w-full flex flex-col justify-center items-center mt-52">
<h2 class="pb-10 text-3xl self-start">Ajouter Professeur</h2>

    <div class="w-full border-4 h-5 border-blue-600 rounded-t-2xl relative bottom-2"></div>
    <form class="row g-3 needs-validation w-full py-5 border-4  border-blue-500 flex flex-col justify-center items-center rounded-xl shadow-cool-gray-900" action="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."ajouter-professeur" ?>" method="POST" novalidate>
        <div class="col-md-4 position-relative my-3 w-2/3">
            <label for="validationTooltip01" class="form-label">Prenom et Nom</label>
            <input type="text" class="form-control rounded" id="validationTooltip01" name="nomComplet"  value="" required>
            <div class="valid-tooltip">
                Champ valide!
            </div>
            <div class="invalid-tooltip">
                veuillez saisir un Prenom et nom correct!
            </div>
        </div>
        <div class="col-md-4 position-relative my-3 w-2/3">
            <label for="validationTooltip02" class="form-label">Grade</label>
            <input type="text" class="form-control rounded" id="validationTooltip02" name="grade" value="" required>
            <div class="valid-tooltip">
                Champ valide!
            </div>
            <div class="invalid-tooltip">
                veuillez saisir un grade correct!
            </div>
        </div>
        <div class="col-md-4 position-relative w-2/3">
            <label for="classesprofesseur" class="form-label">Affecter des classes</label>
            <select data-placeholder="Affecter des classe au professeur" id="classesprofesseur" multiple class="form-select form-select-lg mb-3 chosen-select " name="classesprofesseur[]" required >
                <option value=""></option>
                <?php 
                    foreach ($data[0] as $key => $classe) {
                        $libelle = $classe->libelle;
                        echo "<option value='".$libelle."'>".$libelle."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-md-4 position-relative w-2/3">
            <label for="modulesprofesseur" class="form-label">Affecter des modules</label>
            <select data-placeholder="Affecter des modules au professeur" id="modulesprofesseur" multiple class="chosen-select form-control" name="modulesprofesseur[]" >
                <option value=""></option>
                <?php 
                    foreach ($data[1] as $key => $module) {
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
    <div class="w-full border-4 h-5 border-blue-400 rounded-b-2xl relative bottom-6"></div>
    <div class="w-full border-4 h-5 border-blue-600 rounded-b-2xl relative bottom-6"></div>
    <div class="w-full border-4 h-5 border-blue-600 rounded-b-2xl relative bottom-6"></div>

</div>

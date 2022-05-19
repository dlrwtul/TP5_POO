<?php use App\core\Constantes;?>
<div class="container mt-20 border-4 border-blue-600 p-5 rounded-2xl">
    <form action="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."inscrire-etudiant" ?>" method="POST" role="form">
        <legend class="text-3xl mb-3">Formulaire d'inscription etudiant</legend>

        <div class="form-group w-2/3 my-3">
            <label for="login">Email/login</label>
            <input type="email" name="login" class="form-control rounded" id="login" placeholder="Email" required="required">
        </div>
        <div class="form-group  w-2/3 my-3">
            <label for="nomComplet">Prenom et Nom</label>
            <input type="text" name="nomComplet" class="form-control rounded" id="nomComplet" placeholder="Nom et Prenom" required="required">
        </div>
        <div class="form-group  w-2/3 my-3">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control rounded" id="adresse" placeholder="adresse" required="required">
        </div>
        <div class="form-group flex flex-col my-3">
            <label for="login">Sexe:</label>
            <div class="flex flex-row w-20 justify-between">
                <div><label for="M">M</label><input type="radio" name="sexe" value="M" class="form-control" id="M"></div>
                <div><label for="F">F</label><input type="radio" name="sexe" value="F" class="form-control" id="F"></div>
            </div>
        </div>
        <div class="form-group  w-2/3 my-3">
            <label for="inputclasse" class="col-sm-2 control-label">Classe  :</label>
            <div class="col-lg-2">
                <select name="classe" id="inputclasse" class="form-control w-64 my-2" required="required">
                    <option value="">Choisir la classe</option>
                    <?php 
                    foreach ($data as $key => $classe) {
                        $libelle = $classe->libelle;
                        echo "<option value='".$libelle."'>".$libelle."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary relative left-3/4 bg-blue-600 hover:bg-blue-900 border-gray-400">Submit</button>
    </form>
</div>


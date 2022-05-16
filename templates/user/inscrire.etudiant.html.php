<?php
use App\models\Classe;
$classes = Classe::findAll();
?>
<div class="container mt-20">
    <form action="" method="POST" role="form">
        <legend>Inscription</legend>

        <div class="form-group">
            <label for="login">Email/login</label>
            <input type="email" name="login" class="form-control" id="login" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <label for="nomComplet">Prenom et Nom</label>
            <input type="text" name="nomComplet" class="form-control" id="nomComplet" placeholder="Nom et Prenom" required="required">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" id="adresse" placeholder="adresse" required="required">
        </div>
        <div class="form-group flex flex-col">
            <label for="login">Sexe:</label>
            <div class="flex flex-row w-20 justify-between">
                <div><label for="M">M</label><input type="radio" name="sexe" value="M" class="form-control" id="M"></div>
                <div><label for="F">F</label><input type="radio" name="sexe" value="F" class="form-control" id="F"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputclasse" class="col-sm-2 control-label">Classe  :</label>
            <div class="col-sm-2">
                <select name="classe" id="inputclasse" class="form-control" required="required">
                    <option value="">Choisir la classe</option>
                    <?php 
                    foreach ($classes as $key => $classe) {
                        $libelle = $classe->libelle;
                        echo "<option value='".$libelle."'>".$libelle."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary m-8 ml-96 px-5 py-3 bg-gray-500 hover:bg-gray-900 border-gray-400">Submit</button>
    </form>
</div>


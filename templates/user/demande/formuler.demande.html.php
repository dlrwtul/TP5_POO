<?php use App\core\Constantes; ?>
<div class="container w-full flex justify-center items-center">
    <form class="was-validated w-2/3 m-5 border-4 p-5 rounded-2xl border-blue-700" method="POST" action="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."formuler-demande" ?>">
        <div class="mb-3">
            <select class="form-select" name="objet" required aria-label="select example">
                <option value="">object</option>
                <option value="suspendre">demande de suspension</option>
                <option value="annuler">demande d'annulation</option>
            </select>
            <div class="valid-feedback">champ valide</div>
            <div class="invalid-feedback">champ invalid!</div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Motif</label>
            <textarea class="form-control" name="motif" id="validationTextarea" placeholder="Veuillez saisir le motif" required></textarea>
            <div class="valid-feedback">champ valide</div>
            <div class="invalid-feedback">
                veuillez remplir le motif.
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary bg-blue-600" type="submit" >Envoyer</button>
        </div>
    </form>
</div>

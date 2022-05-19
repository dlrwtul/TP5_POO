<?php 
use App\core\Constantes;
use App\models\AnneeScolaire;
use App\models\Classe;
use App\models\Etudiant;
use App\models\Inscription;

$role = $_SESSION[Constantes::USER_KEY]->role;
?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<span class="text-3xl my-10" >Demandes</span>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-left">
                    Nom de l'etudiant
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Classe
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Objet
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Motif 
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    etat
                </th>
                <?php if ($role == Constantes::ROLE_RP) { ?>
                <th scope="col" class="px-6 py-3 text-center">
                    Traiter
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    
                </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
        <?php
            $i =1;
            foreach ($data as $key => $demande) {
            ?>
                <?php /* if($role == Constantes::ROLE_ETUDIANT ) { */ ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        <?php
                            $etudiant = Etudiant::findById($demande->etudiant_id);
                            echo $etudiant->nom_complet ;
                        ?>
                    </th>
                    <td class="px-6 py-4 text-right">
                        <?php
                            $inscription = Inscription::findById($demande->inscription_id);
                            $classe = Classe::findById($inscription->classe_id);
                            echo $classe->libelle ;
                        ?>
                    </td>
                    <td class="px-6 py-4 text-right"><?php echo $demande->objet ?></td>
                    <td class="px-6 py-4 text-right"><?php echo $demande->motif ?></td>
                    <td class="px-6 py-4 text-right"><?php echo $demande->etat ?></td>
                    <td class="px-6 py-4 text-right flex flex-row justify-around">
                        <?php
                        if ($role == Constantes::ROLE_RP) {
                            if ($demande->etat == "en attente") {
                                Constantes::createFormInputHidden(array($demande->id,"acceptee"),"traiter-demande","accepter") ;
                                Constantes::createFormInputHidden(array($demande->id,"refusee"),"traiter-demande","refuser") ;
                            }else {
                                echo "Traitée";
                            } 
                        }
                        ?>
                    </td>
                </tr>
                <?php } ?>
            <?php /* } */?>
        </tbody>
    </table>
</div>
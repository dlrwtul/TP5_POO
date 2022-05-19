<?php 
use App\core\Constantes;
use App\models\AnneeScolaire;
use App\models\Classe;
?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-left">
                    Classe
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Annee scolaire
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Etat
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Demande
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i =1;
            foreach ($data as $key => $inscription) {
            ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"><?php
                        $classe = Classe::findById($inscription->classe_id);
                        echo $classe->libelle ;
                    ?></th>
                    <td class="px-6 py-4 text-right"><?php
                        $anneScolaire = AnneeScolaire::findById($inscription->annee_scolaire_id);
                        echo $anneScolaire->libelle ;
                    ?></td>
                    <td class="px-6 py-4 text-right"><?php echo $inscription->etat ?></td>
                    <td class="px-6 py-4 text-right">
                        <?php if ($inscription->etat == "en cours") {
                            Constantes::createFormInputHidden($inscription,"formuler-demande","formuler demande") ;
                        }else {
                            echo "Demande non Disponnible";
                        } ?>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>
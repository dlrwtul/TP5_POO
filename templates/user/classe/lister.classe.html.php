<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Classe
                </th>
                <th scope="col" class="px-6 py-3">
                    Niveau
                </th>
                <th scope="col" class="px-6 py-3">
                    Filiere
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
        </thead>
        <tbody>
        <?php use App\core\Constantes;$i =1;foreach ($data as $key => $classe) { ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"><?php echo $classe->libelle ?></th>
                    <td class="px-6 py-4"><?php echo $classe->niveau ?></td>
                    <td class="px-6 py-4"><?php echo  $classe->filiere ?></td>
                    <td class="px-6 py-4">
                        <?php Constantes::createFormInputHidden($classe,"lister-classe","modifier");?>
                    </td>
                    <td class="px-6 py-4">
                        <?php Constantes::createFormInputHidden($classe,"lister-classe","Supprimer");?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
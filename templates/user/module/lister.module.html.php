<?php use App\core\Constantes;?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Module
                </th>
                <th scope="col" class="px-6 py-3">
                    Details
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i =1;
            foreach ($data as $key => $module) {
            ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"><?php echo  $module->libelle ?></th>
                    <td class="px-6 py-4 text-right">
                    <?php Constantes::createFormInputHidden($module,"lister-profs-module") ?>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>
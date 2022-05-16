<?php
use App\models\Module;
?>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>N°:</th>
            <th>libelle</th>
            <th>professeurs</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $modules = Module::findAll();
            foreach ($modules as $key => $module) {
                $object = new Module();
                $object->setId($module->id);
                echo "<tr>";
                    echo "<td scope='row'>".$module->id."</td>";
                    echo "<td>".$module->libelle."</td>";
                    echo "<td>";
                    echo "<ul>"; 
                    foreach ($object->professeurs() as $key => $professeur) {
                        echo "<li>".$professeur->nom_complet."</li>";
                    }
                    echo "</ul>";
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
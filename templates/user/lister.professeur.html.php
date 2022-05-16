<?php
use App\models\Professeur;
?>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>N°:</th>
            <th>Nom Complet</th>
            <th>Grade</th>
            <th>Classes</th>
            <th>Modules</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $professeurs = Professeur::findAll();
            foreach ($professeurs as $professeur) {
                echo "<tr>";
                    echo "<td scope='row'>".$professeur->id."</td>";
                    echo "<td>".$professeur->nom_complet."</td>";
                    echo "<td>".$professeur->grade."</td>";
                    echo "<td>"; 
                    $object = new Professeur();
                    $object->setId($professeur->id);
                    $classes = $object->classes();
                    echo "<ul>"; 
                    foreach ($classes as $classe) {
                        echo "<li>".$classe->libelle."</li>";
                    }
                    echo "</ul>";
                    echo "</td>";
                    echo "<td>"; 
                    $modules = $object->modules();
                    echo "<ul>"; 
                    foreach ($modules as $module) {
                        echo "<li>".$module->libelle."</li>";
                    }
                    echo "</ul>";
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
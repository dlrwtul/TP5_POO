<?php
use App\models\Classe;
?>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>N°:</th>
            <th>Nom classe</th>
            <th>niveau</th>
            <th>filiere</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $classes = Classe::findAll();
            foreach ($classes as $key => $classe) {
                echo "<tr>";
                    echo "<td scope='row'>".$classe->id."</td>";
                    echo "<td>".$classe->libelle."</td>";
                    echo "<td>".$classe->niveau."</td>";
                    echo "<td>".$classe->filiere."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>

<body>

    <h1>Exercice 9</h1>

    <?php

    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $somme = 0;
    $nombreValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";

    ?>

    <table border="1">

        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Validation</th>
        </tr>

        <?php

        foreach ($notes as $etudiant => $note) {

            $somme += $note;

            if ($note >= 10) {

                $validation = "Validé";
                $nombreValides++;

            } else {

                $validation = "Non validé";

            }


            if ($note > $meilleureNote) {

                $meilleureNote = $note;
                $meilleurEtudiant = $etudiant;

            }

            echo "<tr>";

            echo "<td>" . $etudiant . "</td>";
            echo "<td>" . $note . "</td>";
            echo "<td>" . $validation . "</td>";

            echo "</tr>";
        }

        ?>

    </table>

    <?php

    $moyenne = $somme / count($notes);

    echo "<p>Somme des notes : " . $somme . "</p>";

    echo "<p>Moyenne de la classe : " . $moyenne . "</p>";

    echo "<p>Nombre d'étudiants validés : " . $nombreValides . "</p>";

    echo "<p>Meilleure note : " . $meilleureNote .
         " (" . $meilleurEtudiant . ")</p>";

    ?>

</body>
</html>
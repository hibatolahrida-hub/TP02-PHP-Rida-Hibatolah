<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>

<body>

    <h1>Exercice 2</h1>

    <?php

    $nom = "Rida";
    $prenom = "Hibatolah";
    $age = 19;
    $formation = "programmation web 2";

    $presentation = "Je m'appelle " . $prenom . " " . $nom .
                    ", j'ai " . $age .
                    " ans et je suis en " . $formation . ".";

    $presentation .= " J'apprends PHP.";

    echo $presentation . "<br><br>";

    $note = 12;
    $Note = 16;

    echo "note = " . $note . "<br>";
    echo "Note = " . $Note;

    ?>

</body>
</html>
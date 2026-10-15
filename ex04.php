<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>

<body>
    <?php

    $entier = 42;
    $chaine = "42";
    $flottant = 15.8;
    $vrai = true;
    $faux = false;
    $nul = null;

    echo "<h2>Types et valeurs</h2>";

    echo "<pre>";
    var_dump($entier);
    var_dump($chaine);
    var_dump($flottant);
    var_dump($vrai);
    var_dump($faux);
    var_dump($nul);
    echo "</pre>";


    echo "<h2>Conversions</h2>";

    $chaineEnEntier = (int) $chaine;
    $flottantEnEntier = (int) $flottant;
    $entierEnChaine = (string) $entier;

    echo "<pre>";
    var_dump($chaineEnEntier);
    var_dump($flottantEnEntier);
    var_dump($entierEnChaine);
    echo "</pre>";


    echo "<h2>Avec echo</h2>";

    echo "true = ";
    echo true;
    echo "<br>";

    echo "false = ";
    echo false;
    echo "<br>";


    echo "<h2>Avec var_dump()</h2>";

    echo "<pre>";
    var_dump(true);
    var_dump(false);
    echo "</pre>";


    echo "<h2>Conversions en booléen</h2>";

    echo "<pre>";

    var_dump((bool) 0);
    var_dump((bool) "0");
    var_dump((bool) "PHP");
    var_dump((bool) []);

    echo "</pre>";

    ?>

</body>
</html>
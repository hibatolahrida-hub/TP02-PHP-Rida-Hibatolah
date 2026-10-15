<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>

<body>

    <h1>Exercice 8</h1>

    <h2>1. Nombres pairs de 0 à 20</h2>

    <?php

    $i = 0;

    while ($i <= 20) {

        if ($i == 10) {

            echo "<strong>$i</strong><br>";

        } else {

            echo $i . "<br>";

        }

        $i += 2;
    }

    ?>


    <h2>2. while et do-while</h2>

    <?php

    $compteur = 5;
    $executionsWhile = 0;

    while ($compteur < 5) {

        $executionsWhile++;
        $compteur++;

    }


    $compteur = 5;
    $executionsDoWhile = 0;

    do {

        $executionsDoWhile++;
        $compteur++;

    } while ($compteur < 5);


    echo "while : " . $executionsWhile . " exécution(s)<br>";
    echo "do-while : " . $executionsDoWhile . " exécution(s)";

    ?>


    <h2>3. continue et break</h2>

    <?php

    for ($compteur = 1; $compteur <= 20; $compteur++) {

        if ($compteur % 3 == 0) {
            continue;
        }

        if ($compteur >= 16) {
            break;
        }

        echo $compteur . "<br>";
    }

    ?>

</body>
</html>